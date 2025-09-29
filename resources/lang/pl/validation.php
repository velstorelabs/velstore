<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Pole translations.en.name jest wymagane.',
                'string' => 'Pole translations.en.name musi być ciągiem znaków.',
                'max' => 'Pole translations.en.name nie może mieć więcej niż :max znaków.',
            ],
            'description' => [
                'required' => 'Pole translations.en.description jest wymagane.',
                'string' => 'Pole translations.en.description musi być ciągiem znaków.',
                'min' => 'Pole translations.en.description musi mieć co najmniej :min znaków.',
            ],
            'image' => [
                'required' => 'Pole translations.en.image jest wymagane.',
                'image' => 'Pole translations.en.image musi być obrazem.',
                'mimes' => 'Pole translations.en.image musi być plikiem typu: :values.',
                'max' => 'Pole translations.en.image nie może być większe niż :max kilobajtów.',
            ],
        ],
    ],
];
