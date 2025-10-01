<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'ช่อง :attribute จำเป็นต้องกรอก',
    'string' => 'ช่อง :attribute ต้องเป็นตัวอักษร',
    'max' => 'ช่อง :attribute ต้องมีความยาวไม่เกิน :max ตัวอักษร',
    'min' => 'ช่อง :attribute ต้องมีความยาวอย่างน้อย :min ตัวอักษร',
    'image' => 'ช่อง :attribute ต้องเป็นรูปภาพ',
    'mimes' => 'ช่อง :attribute ต้องเป็นไฟล์ชนิด: :values',
    'array' => 'ช่อง :attribute ต้องเป็นอาเรย์',
    'numeric' => 'ช่อง :attribute ต้องเป็นตัวเลข',
    'integer' => 'ช่อง :attribute ต้องเป็นจำนวนเต็ม',
    'lte' => 'ช่อง :attribute ต้องน้อยกว่าหรือเท่ากับ :value',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | กำหนดชื่อคุณลักษณะเฉพาะเพื่อให้ข้อความการตรวจสอบอ่านง่ายขึ้น
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'ชื่อ',
        'email' => 'อีเมล',
        'password' => 'รหัสผ่าน',
        'password_confirmation' => 'ยืนยันรหัสผ่าน',
        'phone' => 'หมายเลขโทรศัพท์',
        'status' => 'สถานะ',

        // Dynamic variants
        'variants.*.name' => 'ชื่อรุ่น',
        'variants.*.price' => 'ราคาของรุ่น',
        'variants.*.discount_price' => 'ราคาลดของรุ่น',
        'variants.*.stock' => 'สต็อกของรุ่น',
        'variants.*.SKU' => 'SKU ของรุ่น',
        'variants.*.barcode' => 'รหัสบาร์โค้ดของรุ่น',
        'variants.*.weight' => 'น้ำหนักของรุ่น',
        'variants.*.dimensions' => 'ขนาดของรุ่น',
        'variants.*.language_code' => 'รหัสภาษาของรุ่น',
        'variants.*.size_id' => 'ขนาดของรุ่น',
        'variants.*.color_id' => 'สีของรุ่น',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'ชื่อ (อังกฤษ)',
        'translations.en.description' => 'คำอธิบาย (อังกฤษ)',
        'translations.en.image' => 'รูปภาพ (อังกฤษ)',
        'languages.en.title' => 'หัวข้อแบนเนอร์ (อังกฤษ)',
        'languages.en.description' => 'คำอธิบายแบนเนอร์ (อังกฤษ)',
        'languages.en.image' => 'รูปแบนเนอร์ (อังกฤษ)',

        // Arabic
        'translations.ar.name' => 'ชื่อ (อาหรับ)',
        'translations.ar.description' => 'คำอธิบาย (อาหรับ)',
        'translations.ar.image' => 'รูปภาพ (อาหรับ)',
        'languages.ar.title' => 'หัวข้อแบนเนอร์ (อาหรับ)',
        'languages.ar.description' => 'คำอธิบายแบนเนอร์ (อาหรับ)',
        'languages.ar.image' => 'รูปแบนเนอร์ (อาหรับ)',

        // German
        'translations.de.name' => 'ชื่อ (เยอรมัน)',
        'translations.de.description' => 'คำอธิบาย (เยอรมัน)',
        'translations.de.image' => 'รูปภาพ (เยอรมัน)',
        'languages.de.title' => 'หัวข้อแบนเนอร์ (เยอรมัน)',
        'languages.de.description' => 'คำอธิบายแบนเนอร์ (เยอรมัน)',
        'languages.de.image' => 'รูปแบนเนอร์ (เยอรมัน)',

        // Spanish
        'translations.es.name' => 'ชื่อ (สเปน)',
        'translations.es.description' => 'คำอธิบาย (สเปน)',
        'translations.es.image' => 'รูปภาพ (สเปน)',
        'languages.es.title' => 'หัวข้อแบนเนอร์ (สเปน)',
        'languages.es.description' => 'คำอธิบายแบนเนอร์ (สเปน)',
        'languages.es.image' => 'รูปแบนเนอร์ (สเปน)',

        // Persian
        'translations.fa.name' => 'ชื่อ (เปอร์เซีย)',
        'translations.fa.description' => 'คำอธิบาย (เปอร์เซีย)',
        'translations.fa.image' => 'รูปภาพ (เปอร์เซีย)',
        'languages.fa.title' => 'หัวข้อแบนเนอร์ (เปอร์เซีย)',
        'languages.fa.description' => 'คำอธิบายแบนเนอร์ (เปอร์เซีย)',
        'languages.fa.image' => 'รูปแบนเนอร์ (เปอร์เซีย)',

        // French
        'translations.fr.name' => 'ชื่อ (ฝรั่งเศส)',
        'translations.fr.description' => 'คำอธิบาย (ฝรั่งเศส)',
        'translations.fr.image' => 'รูปภาพ (ฝรั่งเศส)',
        'languages.fr.title' => 'หัวข้อแบนเนอร์ (ฝรั่งเศส)',
        'languages.fr.description' => 'คำอธิบายแบนเนอร์ (ฝรั่งเศส)',
        'languages.fr.image' => 'รูปแบนเนอร์ (ฝรั่งเศส)',

        // Hindi
        'translations.hi.name' => 'ชื่อ (ฮินดี)',
        'translations.hi.description' => 'คำอธิบาย (ฮินดี)',
        'translations.hi.image' => 'รูปภาพ (ฮินดี)',
        'languages.hi.title' => 'หัวข้อแบนเนอร์ (ฮินดี)',
        'languages.hi.description' => 'คำอธิบายแบนเนอร์ (ฮินดี)',
        'languages.hi.image' => 'รูปแบนเนอร์ (ฮินดี)',

        // Indonesian
        'translations.id.name' => 'ชื่อ (อินโดนีเซีย)',
        'translations.id.description' => 'คำอธิบาย (อินโดนีเซีย)',
        'translations.id.image' => 'รูปภาพ (อินโดนีเซีย)',
        'languages.id.title' => 'หัวข้อแบนเนอร์ (อินโดนีเซีย)',
        'languages.id.description' => 'คำอธิบายแบนเนอร์ (อินโดนีเซีย)',
        'languages.id.image' => 'รูปแบนเนอร์ (อินโดนีเซีย)',

        // Italian
        'translations.it.name' => 'ชื่อ (อิตาลี)',
        'translations.it.description' => 'คำอธิบาย (อิตาลี)',
        'translations.it.image' => 'รูปภาพ (อิตาลี)',
        'languages.it.title' => 'หัวข้อแบนเนอร์ (อิตาลี)',
        'languages.it.description' => 'คำอธิบายแบนเนอร์ (อิตาลี)',
        'languages.it.image' => 'รูปแบนเนอร์ (อิตาลี)',

        // Japanese
        'translations.ja.name' => 'ชื่อ (ญี่ปุ่น)',
        'translations.ja.description' => 'คำอธิบาย (ญี่ปุ่น)',
        'translations.ja.image' => 'รูปภาพ (ญี่ปุ่น)',
        'languages.ja.title' => 'หัวข้อแบนเนอร์ (ญี่ปุ่น)',
        'languages.ja.description' => 'คำอธิบายแบนเนอร์ (ญี่ปุ่น)',
        'languages.ja.image' => 'รูปแบนเนอร์ (ญี่ปุ่น)',

        // Korean
        'translations.ko.name' => 'ชื่อ (เกาหลี)',
        'translations.ko.description' => 'คำอธิบาย (เกาหลี)',
        'translations.ko.image' => 'รูปภาพ (เกาหลี)',
        'languages.ko.title' => 'หัวข้อแบนเนอร์ (เกาหลี)',
        'languages.ko.description' => 'คำอธิบายแบนเนอร์ (เกาหลี)',
        'languages.ko.image' => 'รูปแบนเนอร์ (เกาหลี)',

        // Dutch
        'translations.nl.name' => 'ชื่อ (ดัตช์)',
        'translations.nl.description' => 'คำอธิบาย (ดัตช์)',
        'translations.nl.image' => 'รูปภาพ (ดัตช์)',
        'languages.nl.title' => 'หัวข้อแบนเนอร์ (ดัตช์)',
        'languages.nl.description' => 'คำอธิบายแบนเนอร์ (ดัตช์)',
        'languages.nl.image' => 'รูปแบนเนอร์ (ดัตช์)',

        // Polish
        'translations.pl.name' => 'ชื่อ (โปแลนด์)',
        'translations.pl.description' => 'คำอธิบาย (โปแลนด์)',
        'translations.pl.image' => 'รูปภาพ (โปแลนด์)',
        'languages.pl.title' => 'หัวข้อแบนเนอร์ (โปแลนด์)',
        'languages.pl.description' => 'คำอธิบายแบนเนอร์ (โปแลนด์)',
        'languages.pl.image' => 'รูปแบนเนอร์ (โปแลนด์)',

        // Portuguese
        'translations.pt.name' => 'ชื่อ (โปรตุเกส)',
        'translations.pt.description' => 'คำอธิบาย (โปรตุเกส)',
        'translations.pt.image' => 'รูปภาพ (โปรตุเกส)',
        'languages.pt.title' => 'หัวข้อแบนเนอร์ (โปรตุเกส)',
        'languages.pt.description' => 'คำอธิบายแบนเนอร์ (โปรตุเกส)',
        'languages.pt.image' => 'รูปแบนเนอร์ (โปรตุเกส)',

        // Russian
        'translations.ru.name' => 'ชื่อ (รัสเซีย)',
        'translations.ru.description' => 'คำอธิบาย (รัสเซีย)',
        'translations.ru.image' => 'รูปภาพ (รัสเซีย)',
        'languages.ru.title' => 'หัวข้อแบนเนอร์ (รัสเซีย)',
        'languages.ru.description' => 'คำอธิบายแบนเนอร์ (รัสเซีย)',
        'languages.ru.image' => 'รูปแบนเนอร์ (รัสเซีย)',

        // Thai
        'translations.th.name' => 'ชื่อ (ไทย)',
        'translations.th.description' => 'คำอธิบาย (ไทย)',
        'translations.th.image' => 'รูปภาพ (ไทย)',
        'languages.th.title' => 'หัวข้อแบนเนอร์ (ไทย)',
        'languages.th.description' => 'คำอธิบายแบนเนอร์ (ไทย)',
        'languages.th.image' => 'รูปแบนเนอร์ (ไทย)',

        // Turkish
        'translations.tr.name' => 'ชื่อ (ตุรกี)',
        'translations.tr.description' => 'คำอธิบาย (ตุรกี)',
        'translations.tr.image' => 'รูปภาพ (ตุรกี)',
        'languages.tr.title' => 'หัวข้อแบนเนอร์ (ตุรกี)',
        'languages.tr.description' => 'คำอธิบายแบนเนอร์ (ตุรกี)',
        'languages.tr.image' => 'รูปแบนเนอร์ (ตุรกี)',

        // Vietnamese
        'translations.vi.name' => 'ชื่อ (เวียดนาม)',
        'translations.vi.description' => 'คำอธิบาย (เวียดนาม)',
        'translations.vi.image' => 'รูปภาพ (เวียดนาม)',
        'languages.vi.title' => 'หัวข้อแบนเนอร์ (เวียดนาม)',
        'languages.vi.description' => 'คำอธิบายแบนเนอร์ (เวียดนาม)',
        'languages.vi.image' => 'รูปแบนเนอร์ (เวียดนาม)',

        // Chinese
        'translations.zh.name' => 'ชื่อ (จีน)',
        'translations.zh.description' => 'คำอธิบาย (จีน)',
        'translations.zh.image' => 'รูปภาพ (จีน)',
        'languages.zh.title' => 'หัวข้อแบนเนอร์ (จีน)',
        'languages.zh.description' => 'คำอธิบายแบนเนอร์ (จีน)',
        'languages.zh.image' => 'รูปแบนเนอร์ (จีน)',
    ],
];
