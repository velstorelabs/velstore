<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Il campo translations.en.name è obbligatorio.',
                'string' => 'Il campo translations.en.name deve essere una stringa.',
                'max' => 'Il campo translations.en.name non può contenere più di :max caratteri.',
            ],
            'description' => [
                'required' => 'Il campo translations.en.description è obbligatorio.',
                'string' => 'Il campo translations.en.description deve essere una stringa.',
                'min' => 'Il campo translations.en.description deve contenere almeno :min caratteri.',
            ],
            'image' => [
                'required' => 'Il campo translations.en.image è obbligatorio.',
                'image' => 'Il campo translations.en.image deve essere un\'immagine.',
                'mimes' => 'Il campo translations.en.image deve essere un file di tipo: :values.',
                'max' => 'Il campo translations.en.image non può superare :max kilobyte.',
            ],
        ],
    ],
];
