<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Group;
use App\Permission;
use Session;

class GroupController extends Controller
{
    protected $all;
    protected $singular;
    protected $newObject;
    protected $rules;
    public function __construct(){
        $this->all = Group::orderBy('name');
        $this->singular = 'group';
        $this->newObject = new Group();  
        $this->rules =[                
                'name' => 'required|max:30',    
                'nivel' => 'required|digits:1',             
            ];         
    }    

    public function index(Request $get)
    {    

        //pega todos os grupos ativos do banco     
        //getMaxRows indica a quantidade de registros por pagina   
        //getMaxRows esta dentro de Controller.php   
        $q = [];
        //se tem $get->input("q") entao é busca....
        if($get->input("q")){
            $q = ['q' => $get->input("q")];
            //fiz testes de sql-inject no where abaixo
            // e o laravel tratou 
            //tudo corretamente ;)
            $groups=$this->all
                ->where('name','like','%'.$get->input("q").'%')               
                ->paginate($this->getMaxRows()); 
        }else{
            $groups=$this->all
                ->paginate($this->getMaxRows()); 
        }       
        return view($this->singular.'.list')
            ->with('deleted',False)
            ->with('q',$q)
            ->with($this->singular."s",$groups);
    }
    
    public function create()
    {
        //crio um objeto em branco
        //pq gosto de usar o mesmo 
        //form para editar e para cadastrar
        //isso facilita a manutencao e o
        //entendimento do sistema        
        $group= $this->newObject;
        return view($this->singular.'.form')
            ->with('acao',trans('labels.new').' '.trans('labels.group'))    
            ->with('permissions',Permission::all()->lists('name','id')->toArray())      
            ->with($this->singular,$group);
    }

    public function edit($id)
    {
        //envio para a view o grupo para ser 
        //editado
        $group= $this->all->find($id);
        return view($this->singular.'.form')
            ->with('acao',trans('labels.edit').' '.$group->name)
            ->with('permissions',Permission::all()->lists('name','id')->toArray())      
            ->with($this->singular,$group);
    }

    public function store(Request $request)
    {        
         
        $this->validate($request, $this->rules); 

        //se tem id entao sera edicao
        if($request->input("id") != ""){
            $acao=trans('labels.edited');
            $group = $this->all->find($request->input("id"));            
        }else{
            //neste caso nao tem id(else) entao criacao
            $acao=trans('labels.created');
            $group = $this->newObject;           
        }

        //por fim esses campos serao alterados em 
        //qualquer das situacoes de criacao ou edicao
        $group->name = $request->input("name");     
        $group->nivel = $request->input("nivel");      
        if($group->save()){
            $group->permissions()->detach();
            if(count($request->input('permissions')) >0){                    
                    $group->permissions()->sync($request->input('permissions'));
            }   
        }
        Session::flash('message', trans('labels.item').' '.$acao.' '.trans('labels.withSuccess'));
        return redirect()->route($this->singular);
    }

    public function destroy($id)
    {       
        $group = $this->all->find($id);
        $group->delete();
        Session::flash('message', trans('labels.item').' '.trans('labels.deletedSingle').' '.trans('labels.withSuccess'));
        return redirect()->route($this->singular);
    }   
}