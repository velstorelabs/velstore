<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'translations.en.name 필드는 필수입니다.',
                'string' => 'translations.en.name 필드는 문자열이어야 합니다.',
                'max' => 'translations.en.name 필드는 :max자를 초과할 수 없습니다.',
            ],
            'description' => [
                'required' => 'translations.en.description 필드는 필수입니다.',
                'string' => 'translations.en.description 필드는 문자열이어야 합니다.',
                'min' => 'translations.en.description 필드는 최소 :min자 이상이어야 합니다.',
            ],
            'image' => [
                'required' => 'translations.en.image 필드는 필수입니다.',
                'image' => 'translations.en.image 필드는 이미지여야 합니다.',
                'mimes' => 'translations.en.image 필드는 다음 유형의 파일이어야 합니다: :values.',
                'max' => 'translations.en.image 필드는 :max킬로바이트를 초과할 수 없습니다.',
            ],
        ],
    ],
];
