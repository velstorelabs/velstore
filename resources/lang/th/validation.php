<?php

return [

    'categories' => [
        'translations' => [
            'name' => [
                'required' => 'ฟิลด์ translations.en.name จำเป็นต้องกรอก',
                'string' => 'ฟิลด์ translations.en.name ต้องเป็นข้อความ',
                'max' => 'ฟิลด์ translations.en.name ต้องมีอักขระไม่เกิน :max ตัว',
            ],
            'description' => [
                'required' => 'ฟิลด์ translations.en.description จำเป็นต้องกรอก',
                'string' => 'ฟิลด์ translations.en.description ต้องเป็นข้อความ',
                'min' => 'ฟิลด์ translations.en.description ต้องมีอักขระอย่างน้อย :min ตัว',
            ],
            'image' => [
                'required' => 'ฟิลด์ translations.en.image จำเป็นต้องกรอก',
                'image' => 'ฟิลด์ translations.en.image ต้องเป็นรูปภาพ',
                'mimes' => 'ฟิลด์ translations.en.image ต้องเป็นไฟล์ประเภท: :values',
                'max' => 'ฟิลด์ translations.en.image ต้องมีขนาดไม่เกิน :max กิโลไบต์',
            ],
        ],
    ],
];
