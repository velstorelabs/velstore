<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'translations.en.name alanı zorunludur.',
                'string' => 'translations.en.name alanı bir metin olmalıdır.',
                'max' => 'translations.en.name alanı :max karakterden fazla olamaz.',
            ],
            'description' => [
                'required' => 'translations.en.description alanı zorunludur.',
                'string' => 'translations.en.description alanı bir metin olmalıdır.',
                'min' => 'translations.en.description alanı en az :min karakter olmalıdır.',
            ],
            'image' => [
                'required' => 'translations.en.image alanı zorunludur.',
                'image' => 'translations.en.image alanı bir resim olmalıdır.',
                'mimes' => 'translations.en.image alanı şu türde bir dosya olmalıdır: :values.',
                'max' => 'translations.en.image alanı :max kilobayttan büyük olamaz.',
            ],
        ],
    ],
];
