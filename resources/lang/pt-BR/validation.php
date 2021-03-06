<?php
return [
    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'accepted' => 'O campo deve ser aceito.',
    'active_url' => 'O campo não contém um URL válido.',
    'after' => 'O campo deverá conter uma data posterior a :date.',
    'alpha' => 'O campo deverá conter apenas letras.',
    'alpha_dash' => 'O campo deverá conter apenas letras, números e traços.',
    'alpha_num' => 'O campo deverá conter apenas letras e números .',
    'array' => 'O campo precisa ser um conjunto.',
    'before' => 'O campo deverá conter uma data anterior a :date.',
    'between' => [
        'numeric' => 'O campo deverá ter um valor entre :min - :max.',
        'file' => 'O campo deverá ter um tamanho entre :min - :max kilobytes.',
        'string' => 'O campo deverá conter entre :min - :max caracteres.',
        'array' => 'O campo precisar ter entre :min - :max itens.',
    ],
    'boolean' => 'O campo deverá ter o valor verdadeiro ou falso.',
    'confirmed' => 'A confirmação para o campo não coincide.',
    'date' => 'O campo não contém uma data válida.',
    'date_format' => 'A data indicada para o campo não respeita o formato :format.',
    'different' => 'Os campos e :other deverão conter valores diferentes.',
    'digits' => 'O campo deverá conter :digits dígitos.',
    'digits_between' => 'O campo deverá conter entre :min a :max dígitos.',
    'email' => 'O campo não contém um endereço de email válido.',
    'exists' => 'O valor selecionado para o campo é inválido.',
    'filled' => 'O campo é obrigatório.',
    'image' => 'O campo deverá conter uma imagem.',
    'in' => 'O campo não contém um valor válido.',
    'integer' => 'O campo deverá conter um número inteiro.',
    'ip' => 'O campo deverá conter um IP válido.',
    'json' => 'O campo deverá conter uma string JSON válida.',
    'max' => [
        'numeric' => 'O campo não deverá conter um valor superior a :max.',
        'file' => 'O campo não deverá ter um tamanho superior a :max kilobytes.',
        'string' => 'O campo não deverá conter mais de :max caracteres.',
        'array' => 'O campo deve ter no máximo :max itens.',
    ],
    'mimes' => 'O campo deverá conter um arquivo do tipo: :values.',
    'min' => [
        'numeric' => 'O campo deverá ter um valor superior ou igual a :min.',
        'file' => 'O campo deverá ter no mínimo :min kilobytes.',
        'string' => 'O campo deverá conter no mínimo :min caracteres.',
        'array' => 'O campo deve ter no mínimo :min itens.',
    ],
    'not_in' => 'O campo contém um valor inválido.',
    'numeric' => 'O campo deverá conter um valor numérico.',
    'regex' => 'O formato do valor para o campo é inválido.',
    'required' => 'O campo é obrigatório.',
    'required_if' => 'O campo é obrigatório quando o valor do campo :other é igual a :value.',
    'required_unless' => 'O campo é obrigatório a menos que :other esteja presente em :values.',
    'required_with' => 'O campo é obrigatório quando :values está presente.',
    'required_with_all' => 'O campo é obrigatório quando um dos :values está presente.',
    'required_without' => 'O campo é obrigatório quanto :values não está presente.',
    'required_without_all' => 'O campo é obrigatório quando nenhum dos :values está presente.',
    'same' => 'Os campos e :other deverão conter valores iguais.',
    'size' => [
        'numeric' => 'O campo deverá conter o valor :size.',
        'file' => 'O campo deverá ter o tamanho de :size kilobytes.',
        'string' => 'O campo deverá conter :size caracteres.',
        'array' => 'O campo deve ter :size itens.',
    ],
    'string' => 'O campo deve ser uma string.',
    'timezone' => 'O campo deverá ter um fuso horário válido.',
    'unique' => 'O valor indicado para o campo já se encontra utilizado.',
    'url' => 'O formato do URL indicado para o campo é inválido.',
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],
    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */
    'attributes' => [],
];