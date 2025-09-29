<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Das Feld translations.en.name ist erforderlich.',
                'string' => 'Das Feld translations.en.name muss eine Zeichenkette sein.',
                'max' => 'Das Feld translations.en.name darf nicht größer als :max Zeichen sein.',
            ],
            'description' => [
                'required' => 'Das Feld translations.en.description ist erforderlich.',
                'string' => 'Das Feld translations.en.description muss eine Zeichenkette sein.',
                'min' => 'Das Feld translations.en.description muss mindestens :min Zeichen enthalten.',
            ],
            'image' => [
                'required' => 'Das Feld translations.en.image ist erforderlich.',
                'image' => 'Das Feld translations.en.image muss ein Bild sein.',
                'mimes' => 'Das Feld translations.en.image muss eine Datei vom Typ: :values sein.',
                'max' => 'Das Feld translations.en.image darf nicht größer als :max Kilobytes sein.',
            ],
        ],
    ],
];
