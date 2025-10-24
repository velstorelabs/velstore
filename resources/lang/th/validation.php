<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'ฟิลด์ :attribute จำเป็นต้องกรอก',
    'string' => ':attribute ต้องเป็นข้อความ',
    'max' => ':attribute ต้องไม่เกิน :max ตัวอักษร',
    'min' => ':attribute ต้องมีอย่างน้อย :min ตัวอักษร',
    'image' => ':attribute ต้องเป็นรูปภาพ',
    'mimes' => ':attribute ต้องเป็นไฟล์ประเภท: :values',
    'array' => ':attribute ต้องเป็นอาร์เรย์',
    'numeric' => ':attribute ต้องเป็นตัวเลข',
    'integer' => ':attribute ต้องเป็นจำนวนเต็ม',
    'lte' => ':attribute ต้องน้อยกว่าหรือเท่ากับ :value',
    'regex' => 'รูปแบบของ :attribute ไม่ถูกต้อง.',
    'confirmed' => 'การยืนยันของ :attribute ไม่ตรงกัน.',
    'incorrect_current_password' => 'รหัสผ่านปัจจุบันไม่ถูกต้อง.',

    'password' => [
        'letters' => ':attribute ต้องมีตัวอักษรอย่างน้อยหนึ่งตัว.',
        'mixed' => ':attribute ต้องมีทั้งตัวพิมพ์ใหญ่และตัวพิมพ์เล็ก.',
        'numbers' => ':attribute ต้องมีตัวเลขอย่างน้อยหนึ่งตัว.',
        'symbols' => ':attribute ต้องมีอักขระพิเศษอย่างน้อยหนึ่งตัว.',
        'uncompromised' => ':attribute ปรากฏอยู่ในการรั่วไหลของข้อมูล โปรดเลือก :attribute อื่น.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'การยืนยันรหัสผ่านไม่ตรงกัน.',
            'min' => 'รหัสผ่านต้องมีอย่างน้อย :min อักขระ.',
            'symbols' => 'รหัสผ่านต้องมีอักขระพิเศษอย่างน้อยหนึ่งตัว.',
        ],
        'phone' => [
            'regex' => 'หมายเลขโทรศัพท์สามารถมีได้เฉพาะตัวเลข เว้นวรรค ขีดกลาง และเครื่องหมาย + เท่านั้น.',
        ],
        'email' => [
            'unique' => 'อีเมลนี้ถูกลงทะเบียนแล้ว.',
        ],
        'status' => [
            'in' => 'สถานะที่เลือกไม่ถูกต้อง.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'รหัสผ่านปัจจุบัน',
        'profile_image' => 'รูปโปรไฟล์',

        // Vendor fields
        'name' => 'ชื่อ',
        'email' => 'อีเมล',
        'password' => 'รหัสผ่าน',
        'password_confirmation' => 'ยืนยันรหัสผ่าน',
        'phone' => 'หมายเลขโทรศัพท์',
        'status' => 'สถานะ',

        // Social links
        'type' => 'ประเภทแพลตฟอร์ม',
        'platform' => 'ชื่อแพลตฟอร์ม',
        'link' => 'ลิงก์แพลตฟอร์ม',

        // Menu fields
        'title' => 'ชื่อเมนู',
        'order_number' => 'หมายเลขคำสั่งซื้อ',

        // Dynamic variants
        'variants.*.name' => 'ชื่อวาเรียนท์',
        'variants.*.price' => 'ราคาวาเรียนท์',
        'variants.*.discount_price' => 'ราคาวาเรียนท์ลด',
        'variants.*.stock' => 'สต็อกวาเรียนท์',
        'variants.*.SKU' => 'SKU วาเรียนท์',
        'variants.*.barcode' => 'บาร์โค้ดวาเรียนท์',
        'variants.*.weight' => 'น้ำหนักวาเรียนท์',
        'variants.*.dimensions' => 'ขนาดวาเรียนท์',
        'variants.*.language_code' => 'รหัสภาษาวาเรียนท์',
        'variants.*.size_id' => 'ขนาดวาเรียนท์',
        'variants.*.color_id' => 'สีวาเรียนท์',

        // Attribute name
        'name' => 'ชื่อคุณลักษณะ',

        // Attribute values
        'values.*' => 'ค่าคุณลักษณะ',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "ค่าคุณลักษณะ $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'ค่า (อังกฤษ)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (อังกฤษ) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'ค่า (อาหรับ)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (อาหรับ) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'ค่า (เยอรมัน)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (เยอรมัน) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'ค่า (สเปน)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (สเปน) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'ค่า (เปอร์เซีย)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (เปอร์เซีย) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'ค่า (ฝรั่งเศส)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ฝรั่งเศส) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'ค่า (ฮินดี)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ฮินดี) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'ค่า (อินโดนีเซีย)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (อินโดนีเซีย) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'ค่า (อิตาลี)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (อิตาลี) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'ค่า (ญี่ปุ่น)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ญี่ปุ่น) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'ค่า (เกาหลี)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (เกาหลี) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'ค่า (ดัตช์)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ดัตช์) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'ค่า (โปแลนด์)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (โปแลนด์) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'ค่า (โปรตุเกส)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (โปรตุเกส) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'ค่า (รัสเซีย)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (รัสเซีย) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'ค่า (ไทย)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ไทย) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'ค่า (ตุรกี)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (ตุรกี) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'ค่า (เวียดนาม)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (เวียดนาม) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'ค่า (จีน)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "ค่า (จีน) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'ชื่อ (อังกฤษ)',
        'translations.en.description' => 'คำอธิบาย (อังกฤษ)',
        'translations.en.image' => 'รูปภาพ (อังกฤษ)',
        'translations.en.title' => 'หัวข้อ (อังกฤษ)',
        'translations.en.content' => 'เนื้อหา (อังกฤษ)',
        'languages.en.title' => 'ชื่อแบนเนอร์ (อังกฤษ)',
        'languages.en.description' => 'คำอธิบายแบนเนอร์ (อังกฤษ)',
        'languages.en.image' => 'รูปแบนเนอร์ (อังกฤษ)',
        'languages.en.name' => 'ชื่อแพลตฟอร์ม (อังกฤษ)',
        'title.en' => 'หัวข้อ (อังกฤษ)',

        // Arabic
        'translations.ar.name' => 'ชื่อ (อาหรับ)',
        'translations.ar.description' => 'คำอธิบาย (อาหรับ)',
        'translations.ar.image' => 'รูปภาพ (อาหรับ)',
        'translations.ar.title' => 'หัวข้อ (อาหรับ)',
        'translations.ar.content' => 'เนื้อหา (อาหรับ)',
        'languages.ar.title' => 'ชื่อแบนเนอร์ (อาหรับ)',
        'languages.ar.description' => 'คำอธิบายแบนเนอร์ (อาหรับ)',
        'languages.ar.image' => 'รูปแบนเนอร์ (อาหรับ)',
        'languages.ar.name' => 'ชื่อแพลตฟอร์ม (อาหรับ)',
        'title.ar' => 'หัวข้อ (อาหรับ)',

        // German
        'translations.de.name' => 'ชื่อ (เยอรมัน)',
        'translations.de.description' => 'คำอธิบาย (เยอรมัน)',
        'translations.de.image' => 'รูปภาพ (เยอรมัน)',
        'translations.de.title' => 'หัวข้อ (เยอรมัน)',
        'translations.de.content' => 'เนื้อหา (เยอรมัน)',
        'languages.de.title' => 'ชื่อแบนเนอร์ (เยอรมัน)',
        'languages.de.description' => 'คำอธิบายแบนเนอร์ (เยอรมัน)',
        'languages.de.image' => 'รูปแบนเนอร์ (เยอรมัน)',
        'languages.de.name' => 'ชื่อแพลตฟอร์ม (เยอรมัน)',
        'title.de' => 'หัวข้อ (เยอรมัน)',

        // Spanish
        'translations.es.name' => 'ชื่อ (สเปน)',
        'translations.es.description' => 'คำอธิบาย (สเปน)',
        'translations.es.image' => 'รูปภาพ (สเปน)',
        'translations.es.title' => 'หัวข้อ (สเปน)',
        'translations.es.content' => 'เนื้อหา (สเปน)',
        'languages.es.title' => 'ชื่อแบนเนอร์ (สเปน)',
        'languages.es.description' => 'คำอธิบายแบนเนอร์ (สเปน)',
        'languages.es.image' => 'รูปแบนเนอร์ (สเปน)',
        'languages.es.name' => 'ชื่อแพลตฟอร์ม (สเปน)',
        'title.es' => 'หัวข้อ (สเปน)',

        // Persian
        'translations.fa.name' => 'ชื่อ (เปอร์เซีย)',
        'translations.fa.description' => 'คำอธิบาย (เปอร์เซีย)',
        'translations.fa.image' => 'รูปภาพ (เปอร์เซีย)',
        'translations.fa.title' => 'หัวข้อ (เปอร์เซีย)',
        'translations.fa.content' => 'เนื้อหา (เปอร์เซีย)',
        'languages.fa.title' => 'ชื่อแบนเนอร์ (เปอร์เซีย)',
        'languages.fa.description' => 'คำอธิบายแบนเนอร์ (เปอร์เซีย)',
        'languages.fa.image' => 'รูปแบนเนอร์ (เปอร์เซีย)',
        'languages.fa.name' => 'ชื่อแพลตฟอร์ม (เปอร์เซีย)',
        'title.fa' => 'หัวข้อ (เปอร์เซีย)',

        // French
        'translations.fr.name' => 'ชื่อ (ฝรั่งเศส)',
        'translations.fr.description' => 'คำอธิบาย (ฝรั่งเศส)',
        'translations.fr.image' => 'รูปภาพ (ฝรั่งเศส)',
        'translations.fr.title' => 'หัวข้อ (ฝรั่งเศส)',
        'translations.fr.content' => 'เนื้อหา (ฝรั่งเศส)',
        'languages.fr.title' => 'ชื่อแบนเนอร์ (ฝรั่งเศส)',
        'languages.fr.description' => 'คำอธิบายแบนเนอร์ (ฝรั่งเศส)',
        'languages.fr.image' => 'รูปแบนเนอร์ (ฝรั่งเศส)',
        'languages.fr.name' => 'ชื่อแพลตฟอร์ม (ฝรั่งเศส)',
        'title.fr' => 'หัวข้อ (ฝรั่งเศส)',

        // Hindi
        'translations.hi.name' => 'ชื่อ (ฮินดี)',
        'translations.hi.description' => 'คำอธิบาย (ฮินดี)',
        'translations.hi.image' => 'รูปภาพ (ฮินดี)',
        'translations.hi.title' => 'หัวข้อ (ฮินดี)',
        'translations.hi.content' => 'เนื้อหา (ฮินดี)',
        'languages.hi.title' => 'ชื่อแบนเนอร์ (ฮินดี)',
        'languages.hi.description' => 'คำอธิบายแบนเนอร์ (ฮินดี)',
        'languages.hi.image' => 'รูปแบนเนอร์ (ฮินดี)',
        'languages.hi.name' => 'ชื่อแพลตฟอร์ม (ฮินดี)',
        'title.hi' => 'หัวข้อ (ฮินดี)',

        // Indonesian
        'translations.id.name' => 'ชื่อ (อินโดนีเซีย)',
        'translations.id.description' => 'คำอธิบาย (อินโดนีเซีย)',
        'translations.id.image' => 'รูปภาพ (อินโดนีเซีย)',
        'translations.id.title' => 'หัวข้อ (อินโดนีเซีย)',
        'translations.id.content' => 'เนื้อหา (อินโดนีเซีย)',
        'languages.id.title' => 'ชื่อแบนเนอร์ (อินโดนีเซีย)',
        'languages.id.description' => 'คำอธิบายแบนเนอร์ (อินโดนีเซีย)',
        'languages.id.image' => 'รูปแบนเนอร์ (อินโดนีเซีย)',
        'languages.id.name' => 'ชื่อแพลตฟอร์ม (อินโดนีเซีย)',
        'title.id' => 'หัวข้อ (อินโดนีเซีย)',

        // Italian
        'translations.it.name' => 'ชื่อ (อิตาลี)',
        'translations.it.description' => 'คำอธิบาย (อิตาลี)',
        'translations.it.image' => 'รูปภาพ (อิตาลี)',
        'translations.it.title' => 'หัวข้อ (อิตาลี)',
        'translations.it.content' => 'เนื้อหา (อิตาลี)',
        'languages.it.title' => 'ชื่อแบนเนอร์ (อิตาลี)',
        'languages.it.description' => 'คำอธิบายแบนเนอร์ (อิตาลี)',
        'languages.it.image' => 'รูปแบนเนอร์ (อิตาลี)',
        'languages.it.name' => 'ชื่อแพลตฟอร์ม (อิตาลี)',
        'title.it' => 'หัวข้อ (อิตาลี)',

        // Japanese
        'translations.ja.name' => 'ชื่อ (ญี่ปุ่น)',
        'translations.ja.description' => 'คำอธิบาย (ญี่ปุ่น)',
        'translations.ja.image' => 'รูปภาพ (ญี่ปุ่น)',
        'translations.ja.title' => 'หัวข้อ (ญี่ปุ่น)',
        'translations.ja.content' => 'เนื้อหา (ญี่ปุ่น)',
        'languages.ja.title' => 'ชื่อแบนเนอร์ (ญี่ปุ่น)',
        'languages.ja.description' => 'คำอธิบายแบนเนอร์ (ญี่ปุ่น)',
        'languages.ja.image' => 'รูปแบนเนอร์ (ญี่ปุ่น)',
        'languages.ja.name' => 'ชื่อแพลตฟอร์ม (ญี่ปุ่น)',
        'title.ja' => 'หัวข้อ (ญี่ปุ่น)',

        // Korean
        'translations.ko.name' => 'ชื่อ (เกาหลี)',
        'translations.ko.description' => 'คำอธิบาย (เกาหลี)',
        'translations.ko.image' => 'รูปภาพ (เกาหลี)',
        'translations.ko.title' => 'หัวข้อ (เกาหลี)',
        'translations.ko.content' => 'เนื้อหา (เกาหลี)',
        'languages.ko.title' => 'ชื่อแบนเนอร์ (เกาหลี)',
        'languages.ko.description' => 'คำอธิบายแบนเนอร์ (เกาหลี)',
        'languages.ko.image' => 'รูปแบนเนอร์ (เกาหลี)',
        'languages.ko.name' => 'ชื่อแพลตฟอร์ม (เกาหลี)',
        'title.ko' => 'หัวข้อ (เกาหลี)',

        // Dutch
        'translations.nl.name' => 'ชื่อ (ดัตช์)',
        'translations.nl.description' => 'คำอธิบาย (ดัตช์)',
        'translations.nl.image' => 'รูปภาพ (ดัตช์)',
        'translations.nl.title' => 'หัวข้อ (ดัตช์)',
        'translations.nl.content' => 'เนื้อหา (ดัตช์)',
        'languages.nl.title' => 'ชื่อแบนเนอร์ (ดัตช์)',
        'languages.nl.description' => 'คำอธิบายแบนเนอร์ (ดัตช์)',
        'languages.nl.image' => 'รูปแบนเนอร์ (ดัตช์)',
        'languages.nl.name' => 'ชื่อแพลตฟอร์ม (ดัตช์)',
        'title.nl' => 'หัวข้อ (ดัตช์)',

        // Polish
        'translations.pl.name' => 'ชื่อ (โปแลนด์)',
        'translations.pl.description' => 'คำอธิบาย (โปแลนด์)',
        'translations.pl.image' => 'รูปภาพ (โปแลนด์)',
        'translations.pl.title' => 'หัวข้อ (โปแลนด์)',
        'translations.pl.content' => 'เนื้อหา (โปแลนด์)',
        'languages.pl.title' => 'ชื่อแบนเนอร์ (โปแลนด์)',
        'languages.pl.description' => 'คำอธิบายแบนเนอร์ (โปแลนด์)',
        'languages.pl.image' => 'รูปแบนเนอร์ (โปแลนด์)',
        'languages.Pl.name' => 'ชื่อแพลตฟอร์ม (โปแลนด์)',
        'title.pl' => 'หัวข้อ (โปแลนด์)',

        // Portuguese
        'translations.pt.name' => 'ชื่อ (โปรตุเกส)',
        'translations.pt.description' => 'คำอธิบาย (โปรตุเกส)',
        'translations.pt.image' => 'รูปภาพ (โปรตุเกส)',
        'translations.pt.title' => 'หัวข้อ (โปรตุเกส)',
        'translations.pt.content' => 'เนื้อหา (โปรตุเกส)',
        'languages.pt.title' => 'ชื่อแบนเนอร์ (โปรตุเกส)',
        'languages.pt.description' => 'คำอธิบายแบนเนอร์ (โปรตุเกส)',
        'languages.pt.image' => 'รูปแบนเนอร์ (โปรตุเกส)',
        'languages.pt.name' => 'ชื่อแพลตฟอร์ม (โปรตุเกส)',
        'title.pt' => 'หัวข้อ (โปรตุเกส)',

        // Russian
        'translations.ru.name' => 'ชื่อ (รัสเซีย)',
        'translations.ru.description' => 'คำอธิบาย (รัสเซีย)',
        'translations.ru.image' => 'รูปภาพ (รัสเซีย)',
        'translations.ru.title' => 'หัวข้อ (รัสเซีย)',
        'translations.ru.content' => 'เนื้อหา (รัสเซีย)',
        'languages.ru.title' => 'ชื่อแบนเนอร์ (รัสเซีย)',
        'languages.ru.description' => 'คำอธิบายแบนเนอร์ (รัสเซีย)',
        'languages.ru.image' => 'รูปแบนเนอร์ (รัสเซีย)',
        'languages.ru.name' => 'ชื่อแพลตฟอร์ม (รัสเซีย)',
        'title.ru' => 'หัวข้อ (รัสเซีย)',

        // Thai
        'translations.th.name' => 'ชื่อ (ไทย)',
        'translations.th.description' => 'คำอธิบาย (ไทย)',
        'translations.th.image' => 'รูปภาพ (ไทย)',
        'translations.th.title' => 'หัวข้อ (ไทย)',
        'translations.th.content' => 'เนื้อหา (ไทย)',
        'languages.th.title' => 'ชื่อแบนเนอร์ (ไทย)',
        'languages.th.description' => 'คำอธิบายแบนเนอร์ (ไทย)',
        'languages.th.image' => 'รูปแบนเนอร์ (ไทย)',
        'languages.th.name' => 'ชื่อแพลตฟอร์ม (ไทย)',
        'title.th' => 'หัวข้อ (ไทย)',

        // Turkish
        'translations.tr.name' => 'ชื่อ (ตุรกี)',
        'translations.tr.description' => 'คำอธิบาย (ตุรกี)',
        'translations.tr.image' => 'รูปภาพ (ตุรกี)',
        'translations.tr.title' => 'หัวข้อ (ตุรกี)',
        'translations.tr.content' => 'เนื้อหา (ตุรกี)',
        'languages.tr.title' => 'ชื่อแบนเนอร์ (ตุรกี)',
        'languages.tr.description' => 'คำอธิบายแบนเนอร์ (ตุรกี)',
        'languages.tr.image' => 'รูปแบนเนอร์ (ตุรกี)',
        'languages.tr.name' => 'ชื่อแพลตฟอร์ม (ตุรกี)',
        'title.tr' => 'หัวข้อ (ตุรกี)',

        // Vietnamese
        'translations.vi.name' => 'ชื่อ (เวียดนาม)',
        'translations.vi.description' => 'คำอธิบาย (เวียดนาม)',
        'translations.vi.image' => 'รูปภาพ (เวียดนาม)',
        'translations.vi.title' => 'หัวข้อ (เวียดนาม)',
        'translations.vi.content' => 'เนื้อหา (เวียดนาม)',
        'languages.vi.title' => 'ชื่อแบนเนอร์ (เวียดนาม)',
        'languages.vi.description' => 'คำอธิบายแบนเนอร์ (เวียดนาม)',
        'languages.vi.image' => 'รูปแบนเนอร์ (เวียดนาม)',
        'languages.vi.name' => 'ชื่อแพลตฟอร์ม (เวียดนาม)',
        'title.vi' => 'หัวข้อ (เวียดนาม)',

        // Chinese
        'translations.zh.name' => 'ชื่อ (จีน)',
        'translations.zh.description' => 'คำอธิบาย (จีน)',
        'translations.zh.image' => 'รูปภาพ (จีน)',
        'translations.zh.title' => 'หัวข้อ (จีน)',
        'translations.zh.content' => 'เนื้อหา (จีน)',
        'languages.zh.title' => 'ชื่อแบนเนอร์ (จีน)',
        'languages.zh.description' => 'คำอธิบายแบนเนอร์ (จีน)',
        'languages.zh.image' => 'รูปแบนเนอร์ (จีน)',
        'languages.zh.name' => 'ชื่อแพลตฟอร์ม (จีน)',
        'title.zh' => 'หัวข้อ (จีน)',
    ],
];
