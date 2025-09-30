<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 유효성 검사 언어 줄
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute 필드는 필수 항목입니다.',
    'string' => ':attribute 는 문자열이어야 합니다.',
    'max' => ':attribute 는 :max자 이하이어야 합니다.',
    'min' => ':attribute 는 최소 :min자 이상이어야 합니다.',
    'image' => ':attribute 는 이미지여야 합니다.',
    'mimes' => ':attribute 는 다음 유형의 파일이어야 합니다: :values.',
    'array' => ':attribute 는 배열이어야 합니다.',
    'numeric' => ':attribute 는 숫자여야 합니다.',
    'integer' => ':attribute 는 정수여야 합니다.',
    'lte' => ':attribute 는 :value 이하이어야 합니다.',

    /*
    |--------------------------------------------------------------------------
    | 사용자 정의 속성
    |--------------------------------------------------------------------------
    |
    | 여러 언어에 대한 사용자 정의 속성 이름을 정의합니다.
    | 이를 통해 유효성 검사 메시지가 더 읽기 쉽게 됩니다.
    |
    */

    'attributes' => [

        // 지원되는 모든 언어에 대한 번역
        'translations.en.name' => '이름 (영어)',
        'translations.en.description' => '설명 (영어)',
        'translations.en.image' => '이미지 (영어)',

        'translations.ar.name' => '이름 (아랍어)',
        'translations.ar.description' => '설명 (아랍어)',
        'translations.ar.image' => '이미지 (아랍어)',

        'translations.de.name' => '이름 (독일어)',
        'translations.de.description' => '설명 (독일어)',
        'translations.de.image' => '이미지 (독일어)',

        'translations.es.name' => '이름 (스페인어)',
        'translations.es.description' => '설명 (스페인어)',
        'translations.es.image' => '이미지 (스페인어)',

        'translations.fa.name' => '이름 (페르시아어)',
        'translations.fa.description' => '설명 (페르시아어)',
        'translations.fa.image' => '이미지 (페르시아어)',

        'translations.fr.name' => '이름 (프랑스어)',
        'translations.fr.description' => '설명 (프랑스어)',
        'translations.fr.image' => '이미지 (프랑스어)',

        'translations.hi.name' => '이름 (힌디어)',
        'translations.hi.description' => '설명 (힌디어)',
        'translations.hi.image' => '이미지 (힌디어)',

        'translations.id.name' => '이름 (인도네시아어)',
        'translations.id.description' => '설명 (인도네시아어)',
        'translations.id.image' => '이미지 (인도네시아어)',

        'translations.it.name' => '이름 (이탈리아어)',
        'translations.it.description' => '설명 (이탈리아어)',
        'translations.it.image' => '이미지 (이탈리아어)',

        'translations.ja.name' => '이름 (일본어)',
        'translations.ja.description' => '설명 (일본어)',
        'translations.ja.image' => '이미지 (일본어)',

        'translations.ko.name' => '이름 (한국어)',
        'translations.ko.description' => '설명 (한국어)',
        'translations.ko.image' => '이미지 (한국어)',

        'translations.nl.name' => '이름 (네덜란드어)',
        'translations.nl.description' => '설명 (네덜란드어)',
        'translations.nl.image' => '이미지 (네덜란드어)',

        'translations.pl.name' => '이름 (폴란드어)',
        'translations.pl.description' => '설명 (폴란드어)',
        'translations.pl.image' => '이미지 (폴란드어)',

        'translations.pt.name' => '이름 (포르투갈어)',
        'translations.pt.description' => '설명 (포르투갈어)',
        'translations.pt.image' => '이미지 (포르투갈어)',

        'translations.ru.name' => '이름 (러시아어)',
        'translations.ru.description' => '설명 (러시아어)',
        'translations.ru.image' => '이미지 (러시아어)',

        'translations.th.name' => '이름 (태국어)',
        'translations.th.description' => '설명 (태국어)',
        'translations.th.image' => '이미지 (태국어)',

        'translations.tr.name' => '이름 (터키어)',
        'translations.tr.description' => '설명 (터키어)',
        'translations.tr.image' => '이미지 (터키어)',

        'translations.vi.name' => '이름 (베트남어)',
        'translations.vi.description' => '설명 (베트남어)',
        'translations.vi.image' => '이미지 (베트남어)',

        'translations.zh.name' => '이름 (중국어)',
        'translations.zh.description' => '설명 (중국어)',
        'translations.zh.image' => '이미지 (중국어)',

        // 동적 변형
        'variants.*.name' => '변형 이름',
        'variants.*.price' => '변형 가격',
        'variants.*.discount_price' => '변형 할인 가격',
        'variants.*.stock' => '변형 재고',
        'variants.*.SKU' => '변형 SKU',
        'variants.*.barcode' => '변형 바코드',
        'variants.*.weight' => '변형 무게',
        'variants.*.dimensions' => '변형 치수',
        'variants.*.language_code' => '변형 언어 코드',
        'variants.*.size_id' => '변형 사이즈',
        'variants.*.color_id' => '변형 색상',
    ],
];
