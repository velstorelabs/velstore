<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Field translations.en.name wajib diisi.',
                'string' => 'Field translations.en.name harus berupa string.',
                'max' => 'Field translations.en.name tidak boleh lebih dari :max karakter.',
            ],
            'description' => [
                'required' => 'Field translations.en.description wajib diisi.',
                'string' => 'Field translations.en.description harus berupa string.',
                'min' => 'Field translations.en.description harus memiliki setidaknya :min karakter.',
            ],
            'image' => [
                'required' => 'Field translations.en.image wajib diisi.',
                'image' => 'Field translations.en.image harus berupa gambar.',
                'mimes' => 'Field translations.en.image harus berupa file dengan tipe: :values.',
                'max' => 'Field translations.en.image tidak boleh lebih dari :max kilobyte.',
            ],
        ],
    ],
];
