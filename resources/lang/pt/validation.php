<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'O campo translations.en.name é obrigatório.',
                'string' => 'O campo translations.en.name deve ser uma string.',
                'max' => 'O campo translations.en.name não pode ter mais de :max caracteres.',
            ],
            'description' => [
                'required' => 'O campo translations.en.description é obrigatório.',
                'string' => 'O campo translations.en.description deve ser uma string.',
                'min' => 'O campo translations.en.description deve ter pelo menos :min caracteres.',
            ],
            'image' => [
                'required' => 'O campo translations.en.image é obrigatório.',
                'image' => 'O campo translations.en.image deve ser uma imagem.',
                'mimes' => 'O campo translations.en.image deve ser um arquivo do tipo: :values.',
                'max' => 'O campo translations.en.image não pode ter mais de :max kilobytes.',
            ],
        ],
    ],
];
