<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Le champ translations.en.name est obligatoire.',
                'string' => 'Le champ translations.en.name doit être une chaîne de caractères.',
                'max' => 'Le champ translations.en.name ne peut pas dépasser :max caractères.',
            ],
            'description' => [
                'required' => 'Le champ translations.en.description est obligatoire.',
                'string' => 'Le champ translations.en.description doit être une chaîne de caractères.',
                'min' => 'Le champ translations.en.description doit contenir au moins :min caractères.',
            ],
            'image' => [
                'required' => 'Le champ translations.en.image est obligatoire.',
                'image' => 'Le champ translations.en.image doit être une image.',
                'mimes' => 'Le champ translations.en.image doit être un fichier de type :values.',
                'max' => 'Le champ translations.en.image ne peut pas dépasser :max kilo-octets.',
            ],
        ],
    ],
];
