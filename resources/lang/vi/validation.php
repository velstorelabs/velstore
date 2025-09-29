<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'Trường translations.en.name là bắt buộc.',
                'string' => 'Trường translations.en.name phải là một chuỗi.',
                'max' => 'Trường translations.en.name không được vượt quá :max ký tự.',
            ],
            'description' => [
                'required' => 'Trường translations.en.description là bắt buộc.',
                'string' => 'Trường translations.en.description phải là một chuỗi.',
                'min' => 'Trường translations.en.description phải có ít nhất :min ký tự.',
            ],
            'image' => [
                'required' => 'Trường translations.en.image là bắt buộc.',
                'image' => 'Trường translations.en.image phải là một hình ảnh.',
                'mimes' => 'Trường translations.en.image phải là tệp loại: :values.',
                'max' => 'Trường translations.en.image không được lớn hơn :max kilobyte.',
            ],
        ],
    ],
];
