<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute 필드는 필수 항목입니다.',
    'string' => ':attribute 는 문자열이어야 합니다.',
    'max' => ':attribute 는 :max 글자를 초과할 수 없습니다.',
    'min' => ':attribute 는 최소 :min 글자여야 합니다.',
    'image' => ':attribute 는 이미지여야 합니다.',
    'mimes' => ':attribute 는 :values 형식의 파일이어야 합니다.',
    'array' => ':attribute 는 배열이어야 합니다.',
    'numeric' => ':attribute 는 숫자여야 합니다.',
    'integer' => ':attribute 는 정수여야 합니다.',
    'lte' => ':attribute 는 :value 이하이어야 합니다.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | 여기서는 모든 필드의 사용자 정의 속성명을 정의합니다.
    | 이렇게 하면 검증 메시지가 더 읽기 쉬워집니다.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => '이름',
        'email' => '이메일',
        'password' => '비밀번호',
        'password_confirmation' => '비밀번호 확인',
        'phone' => '전화번호',
        'status' => '상태',

        // Dynamic variants
        'variants.*.name' => '옵션 이름',
        'variants.*.price' => '옵션 가격',
        'variants.*.discount_price' => '옵션 할인 가격',
        'variants.*.stock' => '옵션 재고',
        'variants.*.SKU' => '옵션 SKU',
        'variants.*.barcode' => '옵션 바코드',
        'variants.*.weight' => '옵션 무게',
        'variants.*.dimensions' => '옵션 크기',
        'variants.*.language_code' => '옵션 언어 코드',
        'variants.*.size_id' => '옵션 사이즈',
        'variants.*.color_id' => '옵션 색상',

        // Translations for all supported languages

        // English
        'translations.en.name' => '이름 (영어)',
        'translations.en.description' => '설명 (영어)',
        'translations.en.image' => '이미지 (영어)',
        'languages.en.title' => '배너 제목 (영어)',
        'languages.en.description' => '배너 설명 (영어)',
        'languages.en.image' => '배너 이미지 (영어)',

        // Arabic
        'translations.ar.name' => '이름 (아랍어)',
        'translations.ar.description' => '설명 (아랍어)',
        'translations.ar.image' => '이미지 (아랍어)',
        'languages.ar.title' => '배너 제목 (아랍어)',
        'languages.ar.description' => '배너 설명 (아랍어)',
        'languages.ar.image' => '배너 이미지 (아랍어)',

        // German
        'translations.de.name' => '이름 (독일어)',
        'translations.de.description' => '설명 (독일어)',
        'translations.de.image' => '이미지 (독일어)',
        'languages.de.title' => '배너 제목 (독일어)',
        'languages.de.description' => '배너 설명 (독일어)',
        'languages.de.image' => '배너 이미지 (독일어)',

        // Spanish
        'translations.es.name' => '이름 (스페인어)',
        'translations.es.description' => '설명 (스페인어)',
        'translations.es.image' => '이미지 (스페인어)',
        'languages.es.title' => '배너 제목 (스페인어)',
        'languages.es.description' => '배너 설명 (스페인어)',
        'languages.es.image' => '배너 이미지 (스페인어)',

        // Persian
        'translations.fa.name' => '이름 (페르시아어)',
        'translations.fa.description' => '설명 (페르시아어)',
        'translations.fa.image' => '이미지 (페르시아어)',
        'languages.fa.title' => '배너 제목 (페르시아어)',
        'languages.fa.description' => '배너 설명 (페르시아어)',
        'languages.fa.image' => '배너 이미지 (페르시아어)',

        // French
        'translations.fr.name' => '이름 (프랑스어)',
        'translations.fr.description' => '설명 (프랑스어)',
        'translations.fr.image' => '이미지 (프랑스어)',
        'languages.fr.title' => '배너 제목 (프랑스어)',
        'languages.fr.description' => '배너 설명 (프랑스어)',
        'languages.fr.image' => '배너 이미지 (프랑스어)',

        // Hindi
        'translations.hi.name' => '이름 (힌디어)',
        'translations.hi.description' => '설명 (힌디어)',
        'translations.hi.image' => '이미지 (힌디어)',
        'languages.hi.title' => '배너 제목 (힌디어)',
        'languages.hi.description' => '배너 설명 (힌디어)',
        'languages.hi.image' => '배너 이미지 (힌디어)',

        // Indonesian
        'translations.id.name' => '이름 (인도네시아어)',
        'translations.id.description' => '설명 (인도네시아어)',
        'translations.id.image' => '이미지 (인도네시아어)',
        'languages.id.title' => '배너 제목 (인도네시아어)',
        'languages.id.description' => '배너 설명 (인도네시아어)',
        'languages.id.image' => '배너 이미지 (인도네시아어)',

        // Italian
        'translations.it.name' => '이름 (이탈리아어)',
        'translations.it.description' => '설명 (이탈리아어)',
        'translations.it.image' => '이미지 (이탈리아어)',
        'languages.it.title' => '배너 제목 (이탈리아어)',
        'languages.it.description' => '배너 설명 (이탈리아어)',
        'languages.it.image' => '배너 이미지 (이탈리아어)',

        // Japanese
        'translations.ja.name' => '이름 (일본어)',
        'translations.ja.description' => '설명 (일본어)',
        'translations.ja.image' => '이미지 (일본어)',
        'languages.ja.title' => '배너 제목 (일본어)',
        'languages.ja.description' => '배너 설명 (일본어)',
        'languages.ja.image' => '배너 이미지 (일본어)',

        // Korean
        'translations.ko.name' => '이름 (한국어)',
        'translations.ko.description' => '설명 (한국어)',
        'translations.ko.image' => '이미지 (한국어)',
        'languages.ko.title' => '배너 제목 (한국어)',
        'languages.ko.description' => '배너 설명 (한국어)',
        'languages.ko.image' => '배너 이미지 (한국어)',

        // Dutch
        'translations.nl.name' => '이름 (네덜란드어)',
        'translations.nl.description' => '설명 (네덜란드어)',
        'translations.nl.image' => '이미지 (네덜란드어)',
        'languages.nl.title' => '배너 제목 (네덜란드어)',
        'languages.nl.description' => '배너 설명 (네덜란드어)',
        'languages.nl.image' => '배너 이미지 (네덜란드어)',

        // Polish
        'translations.pl.name' => '이름 (폴란드어)',
        'translations.pl.description' => '설명 (폴란드어)',
        'translations.pl.image' => '이미지 (폴란드어)',
        'languages.pl.title' => '배너 제목 (폴란드어)',
        'languages.pl.description' => '배너 설명 (폴란드어)',
        'languages.pl.image' => '배너 이미지 (폴란드어)',

        // Portuguese
        'translations.pt.name' => '이름 (포르투갈어)',
        'translations.pt.description' => '설명 (포르투갈어)',
        'translations.pt.image' => '이미지 (포르투갈어)',
        'languages.pt.title' => '배너 제목 (포르투갈어)',
        'languages.pt.description' => '배너 설명 (포르투갈어)',
        'languages.pt.image' => '배너 이미지 (포르투갈어)',

        // Russian
        'translations.ru.name' => '이름 (러시아어)',
        'translations.ru.description' => '설명 (러시아어)',
        'translations.ru.image' => '이미지 (러시아어)',
        'languages.ru.title' => '배너 제목 (러시아어)',
        'languages.ru.description' => '배너 설명 (러시아어)',
        'languages.ru.image' => '배너 이미지 (러시아어)',

        // Thai
        'translations.th.name' => '이름 (태국어)',
        'translations.th.description' => '설명 (태국어)',
        'translations.th.image' => '이미지 (태국어)',
        'languages.th.title' => '배너 제목 (태국어)',
        'languages.th.description' => '배너 설명 (태국어)',
        'languages.th.image' => '배너 이미지 (태국어)',

        // Turkish
        'translations.tr.name' => '이름 (터키어)',
        'translations.tr.description' => '설명 (터키어)',
        'translations.tr.image' => '이미지 (터키어)',
        'languages.tr.title' => '배너 제목 (터키어)',
        'languages.tr.description' => '배너 설명 (터키어)',
        'languages.tr.image' => '배너 이미지 (터키어)',

        // Vietnamese
        'translations.vi.name' => '이름 (베트남어)',
        'translations.vi.description' => '설명 (베트남어)',
        'translations.vi.image' => '이미지 (베트남어)',
        'languages.vi.title' => '배너 제목 (베트남어)',
        'languages.vi.description' => '배너 설명 (베트남어)',
        'languages.vi.image' => '배너 이미지 (베트남어)',

        // Chinese
        'translations.zh.name' => '이름 (중국어)',
        'translations.zh.description' => '설명 (중국어)',
        'translations.zh.image' => '이미지 (중국어)',
        'languages.zh.title' => '배너 제목 (중국어)',
        'languages.zh.description' => '배너 설명 (중국어)',
        'languages.zh.image' => '배너 이미지 (중국어)',
    ],
];
