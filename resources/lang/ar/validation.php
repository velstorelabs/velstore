<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'حقل translations.en.name مطلوب.',
                'string' => 'حقل translations.en.name يجب أن يكون نصاً.',
                'max' => 'حقل translations.en.name يجب ألا يتجاوز :max حرفاً.',
            ],
            'description' => [
                'required' => 'حقل translations.en.description مطلوب.',
                'string' => 'حقل translations.en.description يجب أن يكون نصاً.',
                'min' => 'حقل translations.en.description يجب ألا يقل عن :min حرفاً.',
            ],
            'image' => [
                'required' => 'حقل translations.en.image مطلوب.',
                'image' => 'حقل translations.en.image يجب أن يكون صورة.',
                'mimes' => 'حقل translations.en.image يجب أن يكون من نوع: :values.',
                'max' => 'حقل translations.en.image يجب ألا يزيد عن :max كيلوبايت.',
            ],
        ],
    ],

];
