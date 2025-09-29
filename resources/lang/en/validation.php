<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'The translations.en.name field is required.',
                'string' => 'The translations.en.name must be a string.',
                'max' => 'The translations.en.name may not be greater than :max characters.',
            ],
            'description' => [
                'required' => 'The translations.en.description field is required.',
                'string' => 'The translations.en.description must be a string.',
                'min' => 'The translations.en.description must be at least :min characters.',
            ],
            'image' => [
                'required' => 'The translations.en.image field is required.',
                'image' => 'The translations.en.image must be an image.',
                'mimes' => 'The translations.en.image must be a file of type: :values.',
                'max' => 'The translations.en.image may not be greater than :max kilobytes.',
            ],
        ],
    ],
];
