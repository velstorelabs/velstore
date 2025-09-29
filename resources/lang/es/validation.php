<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'El campo translations.en.name es obligatorio.',
                'string' => 'El campo translations.en.name debe ser una cadena.',
                'max' => 'El campo translations.en.name no debe tener más de :max caracteres.',
            ],
            'description' => [
                'required' => 'El campo translations.en.description es obligatorio.',
                'string' => 'El campo translations.en.description debe ser una cadena.',
                'min' => 'El campo translations.en.description debe tener al menos :min caracteres.',
            ],
            'image' => [
                'required' => 'El campo translations.en.image es obligatorio.',
                'image' => 'El campo translations.en.image debe ser una imagen.',
                'mimes' => 'El campo translations.en.image debe ser un archivo de tipo: :values.',
                'max' => 'El campo translations.en.image no debe ser mayor que :max kilobytes.',
            ],
        ],
    ],
];
