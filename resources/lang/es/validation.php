<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'El :attribute debe ser aceptado.',
    'accepted_if' => 'El :attribute debe ser aceptado cuando :other es :value.',
    'active_url' => 'El :attribute no es un URL válido.',
    'after' => 'El :attribute must be a date after :date.',
    'after_or_equal' => 'El :attribute must be a date after or equal to :date.',
    'alpha' => 'El :attribute must only contain letters.',
    'alpha_dash' => 'El :attribute must only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'El :attribute must only contain letters and numbers.',
    'array' => 'El :attribute must be an array.',
    'before' => 'El :attribute must be a date before :date.',
    'before_or_equal' => 'El :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'El :attribute must be between :min and :max.',
        'file' => 'El :attribute must be between :min and :max kilobytes.',
        'string' => 'El :attribute must be between :min and :max characters.',
        'array' => 'El :attribute must have between :min and :max items.',
    ],
    'boolean' => 'El :attribute debe ser verdadero o falso.',
    'confirmed' => 'La contraseña no coincide.',
    'current_password' => 'La contraseña esta incorrecto.',
    'date' => 'El :attribute is not a valid date.',
    'date_equals' => 'El :attribute must be a date equal to :date.',
    'date_format' => 'El :attribute does not match the format :format.',
    'declined' => 'El :attribute must be declined.',
    'declined_if' => 'El :attribute must be declined when :other is :value.',
    'different' => 'El :attribute and :other must be different.',
    'digits' => 'El :attribute must be :digits digits.',
    'digits_between' => 'El :attribute must be between :min and :max digits.',
    'dimensions' => 'El :attribute has invalid image dimensions.',
    'distinct' => 'El :attribute field has a duplicate value.',
    'email' => 'El :attribute debe ser una dirección de correo electrónico válida.',
    'ends_with' => 'El :attribute must end with one of the following: :values.',
    'enum' => 'The selected :attribute is invalid.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'El/la :attribute must be a file.',
    'filled' => 'El/la :attribute field must have a value.',
    'gt' => [
        'numeric' => 'El :attribute debe ser mayor que :value.',
        'file' => 'El :attribute debe ser mayor que :value kilobytes.',
        'string' => 'El :attribute debe ser mayor que :value caracteres.',
        'array' => 'El :attribute debe tener más de :value artículos.',
    ],
    'gte' => [
        'numeric' => 'El/la :attribute must be greater than or equal to :value.',
        'file' => 'El/la :attribute must be greater than or equal to :value kilobytes.',
        'string' => 'El/la :attribute must be greater than or equal to :value characters.',
        'array' => 'El/la :attribute must have :value items or more.',
    ],
    'image' => 'El/la :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'El/la :attribute field does not exist in :other.',
    'integer' => 'El/la :attribute debe ser un número.',
    'ip' => 'El/la :attribute must be a valid IP address.',
    'ipv4' => 'El/la :attribute must be a valid IPv4 address.',
    'ipv6' => 'El/la :attribute must be a valid IPv6 address.',
    'json' => 'El/la :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'El/la :attribute must be less than :value.',
        'file' => 'El/la :attribute must be less than :value kilobytes.',
        'string' => 'El/la :attribute must be less than :value characters.',
        'array' => 'El/la :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'El/la :attribute must be less than or equal to :value.',
        'file' => 'El/la :attribute must be less than or equal to :value kilobytes.',
        'string' => 'El/la :attribute must be less than or equal to :value characters.',
        'array' => 'El/la :attribute must not have more than :value items.',
    ],
    'mac_address' => 'El/la :attribute must be a valid MAC address.',
    'max' => [
        'numeric' => 'El :attribute no debe ser mayor que :max.',
        'file' => 'El :attribute no debe ser mayor que :max kilobytes.',
        'string' => 'El :attribute no debe ser mayor que :max characters.',
        'array' => 'El :attribute no debe ser mayor que :max items.',
    ],
    'mimes' => 'El/la :attribute must be a file of type: :values.',
    'mimetypes' => 'El/la :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'El :attribute debe al menos tener :min.',
        'file' => 'El :attribute debe al menos tener :min kilobytes.',
        'string' => 'El :attribute debe al menos tener :min caracteres.',
        'array' => 'El :attribute debe al menos tener :min caracteres.',
    ],
    'multiple_of' => 'El/la :attribute must be a multiple of :value.',
    'not_in' => 'The selected :attribute es inválido.',
    'not_regex' => 'El/la :attribute el formato es inválido.',
    'numeric' => 'El/la :attribute debe ser un número.',
    'password' => 'El/la password esta incorrecta.',
    'present' => 'El/la :attribute field must be present.',
    'prohibited' => 'El/la :attribute field is prohibited.',
    'prohibited_if' => 'El/la :attribute field is prohibited when :other is :value.',
    'prohibited_unless' => 'El/la :attribute field is prohibited unless :other is in :values.',
    'prohibits' => 'El/la :attribute field prohibits :other from being present.',
    'regex' => 'El/la :attribute formato invalido.',
    'required' => 'El/la :attribute es necesario.',
    'required_array_keys' => 'El/la :attribute field must contain entries for: :values.',
    'required_if' => 'El/la :attribute field is required when :other is :value.',
    'required_unless' => 'El/la :attribute field is required unless :other is in :values.',
    'required_with' => 'El/la :attribute es necesario cuando existe :values.',
    'required_with_all' => 'El/la :attribute es necesario cuando :values esta prtomaesente.',
    'required_without' => 'El/la :attribute es necesario cuando :values no esta presente.',
    'required_without_all' => 'El/la :attribute es necesario cuando ninguno de los campos :values esten presentes.',
    'same' => 'El/la :attribute y :other deben coincidir.',
    'size' => [
        'numeric' => 'El/la :attribute debe ser :size.',
        'file' => 'El/la :attribute debe ser :size kilobytes.',
        'string' => 'El/la :attribute debe ser :size caracteres.',
        'array' => 'El/la :attribute debe contener :size elementos.',
    ],
    'starts_with' => 'El/la :attribute debe comenzar con uno de los siguientes: :values.',
    'string' => 'El/la :attribute debe ser una cadena de texto.',
    'timezone' => 'El/la :attribute debe ser una zona horaria válida.',
    'unique' => 'El :attribute ya ha sido tomado.',
    'uploaded' => 'El/la :attribute no se ha podido cargar.',
    'url' => 'El/la :attribute debe ser una URL válida.',
    'uuid' => 'El/la :attribute debe ser un UUID válido.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
