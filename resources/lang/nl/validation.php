<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Het veld translations.en.name is verplicht.',
                'string' => 'Het veld translations.en.name moet een tekenreeks zijn.',
                'max' => 'Het veld translations.en.name mag niet groter zijn dan :max tekens.',
            ],
            'description' => [
                'required' => 'Het veld translations.en.description is verplicht.',
                'string' => 'Het veld translations.en.description moet een tekenreeks zijn.',
                'min' => 'Het veld translations.en.description moet minimaal :min tekens bevatten.',
            ],
            'image' => [
                'required' => 'Het veld translations.en.image is verplicht.',
                'image' => 'Het veld translations.en.image moet een afbeelding zijn.',
                'mimes' => 'Het veld translations.en.image moet een bestand zijn van het type: :values.',
                'max' => 'Het veld translations.en.image mag niet groter zijn dan :max kilobytes.',
            ],
        ],
    ],
];
