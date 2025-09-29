<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Поле translations.en.name обязательно.',
                'string' => 'Поле translations.en.name должно быть строкой.',
                'max' => 'Поле translations.en.name не может содержать более :max символов.',
            ],
            'description' => [
                'required' => 'Поле translations.en.description обязательно.',
                'string' => 'Поле translations.en.description должно быть строкой.',
                'min' => 'Поле translations.en.description должно содержать не менее :min символов.',
            ],
            'image' => [
                'required' => 'Поле translations.en.image обязательно.',
                'image' => 'Поле translations.en.image должно быть изображением.',
                'mimes' => 'Поле translations.en.image должно быть файлом типа: :values.',
                'max' => 'Поле translations.en.image не может быть больше :max килобайт.',
            ],
        ],
    ],
];
