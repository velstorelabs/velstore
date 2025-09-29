<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'फ़ील्ड translations.en.name आवश्यक है।',
                'string' => 'फ़ील्ड translations.en.name एक स्ट्रिंग होनी चाहिए।',
                'max' => 'फ़ील्ड translations.en.name :max अक्षरों से अधिक नहीं हो सकता।',
            ],
            'description' => [
                'required' => 'फ़ील्ड translations.en.description आवश्यक है।',
                'string' => 'फ़ील्ड translations.en.description एक स्ट्रिंग होनी चाहिए।',
                'min' => 'फ़ील्ड translations.en.description में कम से कम :min अक्षर होने चाहिए।',
            ],
            'image' => [
                'required' => 'फ़ील्ड translations.en.image आवश्यक है।',
                'image' => 'फ़ील्ड translations.en.image एक छवि होनी चाहिए।',
                'mimes' => 'फ़ील्ड translations.en.image :values प्रकार की फ़ाइल होनी चाहिए।',
                'max' => 'फ़ील्ड translations.en.image :max किलोबाइट से अधिक नहीं हो सकता।',
            ],
        ],
    ],
];
