<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'ต้องระบุฟิลด์ :attribute',
    'string' => 'ฟิลด์ :attribute ต้องเป็นสตริง',
    'max' => 'ฟิลด์ :attribute ต้องไม่เกิน :max อักขระ',
    'min' => 'ฟิลด์ :attribute ต้องมีอย่างน้อย :min อักขระ',
    'image' => 'ฟิลด์ :attribute ต้องเป็นรูปภาพ',
    'mimes' => 'ฟิลด์ :attribute ต้องเป็นไฟล์ชนิด: :values',
    'array' => 'ฟิลด์ :attribute ต้องเป็นอาร์เรย์',
    'numeric' => 'ฟิลด์ :attribute ต้องเป็นตัวเลข',
    'integer' => 'ฟิลด์ :attribute ต้องเป็นจำนวนเต็ม',
    'lte' => 'ฟิลด์ :attribute ต้องน้อยกว่าหรือเท่ากับ :value',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Define custom attribute names for multiple languages.
    | This way validation messages are more readable.
    |
    */

    'attributes' => [

        // Translations for all supported languages
        'translations.en.name' => 'ชื่อ (อังกฤษ)',
        'translations.en.description' => 'คำอธิบาย (อังกฤษ)',
        'translations.en.image' => 'รูปภาพ (อังกฤษ)',

        'translations.ar.name' => 'ชื่อ (อาหรับ)',
        'translations.ar.description' => 'คำอธิบาย (อาหรับ)',
        'translations.ar.image' => 'รูปภาพ (อาหรับ)',

        'translations.de.name' => 'ชื่อ (เยอรมัน)',
        'translations.de.description' => 'คำอธิบาย (เยอรมัน)',
        'translations.de.image' => 'รูปภาพ (เยอรมัน)',

        'translations.es.name' => 'ชื่อ (สเปน)',
        'translations.es.description' => 'คำอธิบาย (สเปน)',
        'translations.es.image' => 'รูปภาพ (สเปน)',

        'translations.fa.name' => 'ชื่อ (เปอร์เซีย)',
        'translations.fa.description' => 'คำอธิบาย (เปอร์เซีย)',
        'translations.fa.image' => 'รูปภาพ (เปอร์เซีย)',

        'translations.fr.name' => 'ชื่อ (ฝรั่งเศส)',
        'translations.fr.description' => 'คำอธิบาย (ฝรั่งเศส)',
        'translations.fr.image' => 'รูปภาพ (ฝรั่งเศส)',

        'translations.hi.name' => 'ชื่อ (ฮินดี)',
        'translations.hi.description' => 'คำอธิบาย (ฮินดี)',
        'translations.hi.image' => 'รูปภาพ (ฮินดี)',

        'translations.id.name' => 'ชื่อ (อินโดนีเซีย)',
        'translations.id.description' => 'คำอธิบาย (อินโดนีเซีย)',
        'translations.id.image' => 'รูปภาพ (อินโดนีเซีย)',

        'translations.it.name' => 'ชื่อ (อิตาลี)',
        'translations.it.description' => 'คำอธิบาย (อิตาลี)',
        'translations.it.image' => 'รูปภาพ (อิตาลี)',

        'translations.ja.name' => 'ชื่อ (ญี่ปุ่น)',
        'translations.ja.description' => 'คำอธิบาย (ญี่ปุ่น)',
        'translations.ja.image' => 'รูปภาพ (ญี่ปุ่น)',

        'translations.ko.name' => 'ชื่อ (เกาหลี)',
        'translations.ko.description' => 'คำอธิบาย (เกาหลี)',
        'translations.ko.image' => 'รูปภาพ (เกาหลี)',

        'translations.nl.name' => 'ชื่อ (ดัตช์)',
        'translations.nl.description' => 'คำอธิบาย (ดัตช์)',
        'translations.nl.image' => 'รูปภาพ (ดัตช์)',

        'translations.pl.name' => 'ชื่อ (โปแลนด์)',
        'translations.pl.description' => 'คำอธิบาย (โปแลนด์)',
        'translations.pl.image' => 'รูปภาพ (โปแลนด์)',

        'translations.pt.name' => 'ชื่อ (โปรตุเกส)',
        'translations.pt.description' => 'คำอธิบาย (โปรตุเกส)',
        'translations.pt.image' => 'รูปภาพ (โปรตุเกส)',

        'translations.ru.name' => 'ชื่อ (รัสเซีย)',
        'translations.ru.description' => 'คำอธิบาย (รัสเซีย)',
        'translations.ru.image' => 'รูปภาพ (รัสเซีย)',

        'translations.th.name' => 'ชื่อ (ไทย)',
        'translations.th.description' => 'คำอธิบาย (ไทย)',
        'translations.th.image' => 'รูปภาพ (ไทย)',

        'translations.tr.name' => 'ชื่อ (ตุรกี)',
        'translations.tr.description' => 'คำอธิบาย (ตุรกี)',
        'translations.tr.image' => 'รูปภาพ (ตุรกี)',

        'translations.vi.name' => 'ชื่อ (เวียดนาม)',
        'translations.vi.description' => 'คำอธิบาย (เวียดนาม)',
        'translations.vi.image' => 'รูปภาพ (เวียดนาม)',

        'translations.zh.name' => 'ชื่อ (จีน)',
        'translations.zh.description' => 'คำอธิบาย (จีน)',
        'translations.zh.image' => 'รูปภาพ (จีน)',

        // Dynamic variants
        'variants.*.name' => 'ชื่อของตัวเลือก',
        'variants.*.price' => 'ราคาของตัวเลือก',
        'variants.*.discount_price' => 'ราคาส่วนลดของตัวเลือก',
        'variants.*.stock' => 'สต็อกของตัวเลือก',
        'variants.*.SKU' => 'รหัส SKU ของตัวเลือก',
        'variants.*.barcode' => 'บาร์โค้ดของตัวเลือก',
        'variants.*.weight' => 'น้ำหนักของตัวเลือก',
        'variants.*.dimensions' => 'ขนาดของตัวเลือก',
        'variants.*.language_code' => 'รหัสภาษาของตัวเลือก',
        'variants.*.size_id' => 'ขนาดของตัวเลือก',
        'variants.*.color_id' => 'สีของตัวเลือก',
    ],
];
