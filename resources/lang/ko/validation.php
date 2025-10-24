<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => ':attribute 는 필수 항목입니다.',
    'string' => ':attribute 는 문자열이어야 합니다.',
    'max' => ':attribute 는 :max 글자를 초과할 수 없습니다.',
    'min' => ':attribute 는 최소 :min 글자여야 합니다.',
    'image' => ':attribute 는 이미지여야 합니다.',
    'mimes' => ':attribute 는 다음 유형의 파일이어야 합니다: :values.',
    'array' => ':attribute 는 배열이어야 합니다.',
    'numeric' => ':attribute 는 숫자여야 합니다.',
    'integer' => ':attribute 는 정수여야 합니다.',
    'lte' => ':attribute 는 :value 이하이어야 합니다.',
    'regex' => ':attribute 형식이 올바르지 않습니다.',
    'confirmed' => ':attribute 확인이 일치하지 않습니다.',
    'incorrect_current_password' => '현재 비밀번호가 올바르지 않습니다.',

    'password' => [
        'letters' => ':attribute에는 최소한 하나의 문자가 포함되어야 합니다.',
        'mixed' => ':attribute에는 대문자와 소문자가 모두 포함되어야 합니다.',
        'numbers' => ':attribute에는 최소한 하나의 숫자가 포함되어야 합니다.',
        'symbols' => ':attribute에는 최소한 하나의 기호가 포함되어야 합니다.',
        'uncompromised' => ':attribute가 데이터 유출에서 발견되었습니다. 다른 :attribute를 선택하세요.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => '비밀번호 확인이 일치하지 않습니다.',
            'min' => '비밀번호는 최소 :min자 이상이어야 합니다.',
            'symbols' => '비밀번호에는 최소한 하나의 기호가 포함되어야 합니다.',
        ],
        'phone' => [
            'regex' => '전화번호에는 숫자, 공백, 대시 및 선택적 + 기호만 포함할 수 있습니다.',
        ],
        'email' => [
            'unique' => '이 이메일은 이미 등록되어 있습니다.',
        ],
        'status' => [
            'in' => '선택한 상태가 유효하지 않습니다.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => '현재 비밀번호',
        'profile_image' => '프로필 이미지',

        // Vendor fields
        'name' => '이름',
        'email' => '이메일',
        'password' => '비밀번호',
        'password_confirmation' => '비밀번호 확인',
        'phone' => '전화번호',
        'status' => '상태',

        // Social links
        'type' => '플랫폼 유형',
        'platform' => '플랫폼 이름',
        'link' => '플랫폼 링크',

        // Menu fields
        'title' => '메뉴 제목',
        'order_number' => '주문 번호',

        // Dynamic variants
        'variants.*.name' => '옵션 이름',
        'variants.*.price' => '옵션 가격',
        'variants.*.discount_price' => '옵션 할인 가격',
        'variants.*.stock' => '옵션 재고',
        'variants.*.SKU' => '옵션 SKU',
        'variants.*.barcode' => '옵션 바코드',
        'variants.*.weight' => '옵션 무게',
        'variants.*.dimensions' => '옵션 치수',
        'variants.*.language_code' => '옵션 언어 코드',
        'variants.*.size_id' => '옵션 사이즈',
        'variants.*.color_id' => '옵션 색상',

        // Attribute name
        'name' => '속성 이름',

        // Attribute values
        'values.*' => '속성 값',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "속성 값 $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => '값 (영어)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "값 (영어) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => '값 (아랍어)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "값 (아랍어) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => '값 (독일어)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "값 (독일어) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => '값 (스페인어)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "값 (스페인어) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => '값 (페르시아어)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "값 (페르시아어) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => '값 (프랑스어)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "값 (프랑스어) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => '값 (힌디어)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "값 (힌디어) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => '값 (인도네시아어)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "값 (인도네시아어) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => '값 (이탈리아어)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "값 (이탈리아어) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => '값 (일본어)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "값 (일본어) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => '값 (한국어)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "값 (한국어) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => '값 (네덜란드어)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "값 (네덜란드어) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => '값 (폴란드어)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "값 (폴란드어) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => '값 (포르투갈어)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "값 (포르투갈어) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => '값 (러시아어)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "값 (러시아어) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => '값 (태국어)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "값 (태국어) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => '값 (터키어)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "값 (터키어) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => '값 (베트남어)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "값 (베트남어) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => '값 (중국어)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "값 (중국어) $i", range(0, 49))
        ),

        // Translations for all supported languages (converted to Korean equivalents)

        // English
        'translations.en.name' => '이름 (영어)',
        'translations.en.description' => '설명 (영어)',
        'translations.en.image' => '이미지 (영어)',
        'translations.en.title' => '제목 (영어)',
        'translations.en.content' => '내용 (영어)',
        'languages.en.title' => '배너 제목 (영어)',
        'languages.en.description' => '배너 설명 (영어)',
        'languages.en.image' => '배너 이미지 (영어)',
        'languages.en.name' => '플랫폼 이름 (영어)',
        'title.en' => '제목 (영어)',

        // Arabic
        'translations.ar.name' => '이름 (아랍어)',
        'translations.ar.description' => '설명 (아랍어)',
        'translations.ar.image' => '이미지 (아랍어)',
        'translations.ar.title' => '제목 (아랍어)',
        'translations.ar.content' => '내용 (아랍어)',
        'languages.ar.title' => '배너 제목 (아랍어)',
        'languages.ar.description' => '배너 설명 (아랍어)',
        'languages.ar.image' => '배너 이미지 (아랍어)',
        'languages.ar.name' => '플랫폼 이름 (아랍어)',
        'title.ar' => '제목 (아랍어)',

        // German
        'translations.de.name' => '이름 (독일어)',
        'translations.de.description' => '설명 (독일어)',
        'translations.de.image' => '이미지 (독일어)',
        'translations.de.title' => '제목 (독일어)',
        'translations.de.content' => '내용 (독일어)',
        'languages.de.title' => '배너 제목 (독일어)',
        'languages.de.description' => '배너 설명 (독일어)',
        'languages.de.image' => '배너 이미지 (독일어)',
        'languages.de.name' => '플랫폼 이름 (독일어)',
        'title.de' => '제목 (독일어)',

        // Spanish
        'translations.es.name' => '이름 (스페인어)',
        'translations.es.description' => '설명 (스페인어)',
        'translations.es.image' => '이미지 (스페인어)',
        'translations.es.title' => '제목 (스페인어)',
        'translations.es.content' => '내용 (스페인어)',
        'languages.es.title' => '배너 제목 (스페인어)',
        'languages.es.description' => '배너 설명 (스페인어)',
        'languages.es.image' => '배너 이미지 (스페인어)',
        'languages.es.name' => '플랫폼 이름 (스페인어)',
        'title.es' => '제목 (스페인어)',

        // Persian
        'translations.fa.name' => '이름 (페르시아어)',
        'translations.fa.description' => '설명 (페르시아어)',
        'translations.fa.image' => '이미지 (페르시아어)',
        'translations.fa.title' => '제목 (페르시아어)',
        'translations.fa.content' => '내용 (페르시아어)',
        'languages.fa.title' => '배너 제목 (페르시아어)',
        'languages.fa.description' => '배너 설명 (페르시아어)',
        'languages.fa.image' => '배너 이미지 (페르시아어)',
        'languages.fa.name' => '플랫폼 이름 (페르시아어)',
        'title.fa' => '제목 (페르시아어)',

        // French
        'translations.fr.name' => '이름 (프랑스어)',
        'translations.fr.description' => '설명 (프랑스어)',
        'translations.fr.image' => '이미지 (프랑스어)',
        'translations.fr.title' => '제목 (프랑스어)',
        'translations.fr.content' => '내용 (프랑스어)',
        'languages.fr.title' => '배너 제목 (프랑스어)',
        'languages.fr.description' => '배너 설명 (프랑스어)',
        'languages.fr.image' => '배너 이미지 (프랑스어)',
        'languages.fr.name' => '플랫폼 이름 (프랑스어)',
        'title.fr' => '제목 (프랑스어)',

        // Hindi
        'translations.hi.name' => '이름 (힌디어)',
        'translations.hi.description' => '설명 (힌디어)',
        'translations.hi.image' => '이미지 (힌디어)',
        'translations.hi.title' => '제목 (힌디어)',
        'translations.hi.content' => '내용 (힌디어)',
        'languages.hi.title' => '배너 제목 (힌디어)',
        'languages.hi.description' => '배너 설명 (힌디어)',
        'languages.hi.image' => '배너 이미지 (힌디어)',
        'languages.hi.name' => '플랫폼 이름 (힌디어)',
        'title.hi' => '제목 (힌디어)',

        // Indonesian
        'translations.id.name' => '이름 (인도네시아어)',
        'translations.id.description' => '설명 (인도네시아어)',
        'translations.id.image' => '이미지 (인도네시아어)',
        'translations.id.title' => '제목 (인도네시아어)',
        'translations.id.content' => '내용 (인도네시아어)',
        'languages.id.title' => '배너 제목 (인도네시아어)',
        'languages.id.description' => '배너 설명 (인도네시아어)',
        'languages.id.image' => '배너 이미지 (인도네시아어)',
        'languages.id.name' => '플랫폼 이름 (인도네시아어)',
        'title.id' => '제목 (인도네시아어)',

        // Italian
        'translations.it.name' => '이름 (이탈리아어)',
        'translations.it.description' => '설명 (이탈리아어)',
        'translations.it.image' => '이미지 (이탈리아어)',
        'translations.it.title' => '제목 (이탈리아어)',
        'translations.it.content' => '내용 (이탈리아어)',
        'languages.it.title' => '배너 제목 (이탈리아어)',
        'languages.it.description' => '배너 설명 (이탈리아어)',
        'languages.it.image' => '배너 이미지 (이탈리아어)',
        'languages.it.name' => '플랫폼 이름 (이탈리아어)',
        'title.it' => '제목 (이탈리아어)',

        // Japanese
        'translations.ja.name' => '이름 (일본어)',
        'translations.ja.description' => '설명 (일본어)',
        'translations.ja.image' => '이미지 (일본어)',
        'translations.ja.title' => '제목 (일본어)',
        'translations.ja.content' => '내용 (일본어)',
        'languages.ja.title' => '배너 제목 (일본어)',
        'languages.ja.description' => '배너 설명 (일본어)',
        'languages.ja.image' => '배너 이미지 (일본어)',
        'languages.ja.name' => '플랫폼 이름 (일본어)',
        'title.ja' => '제목 (일본어)',

        // Korean
        'translations.ko.name' => '이름 (한국어)',
        'translations.ko.description' => '설명 (한국어)',
        'translations.ko.image' => '이미지 (한국어)',
        'translations.ko.title' => '제목 (한국어)',
        'translations.ko.content' => '내용 (한국어)',
        'languages.ko.title' => '배너 제목 (한국어)',
        'languages.ko.description' => '배너 설명 (한국어)',
        'languages.ko.image' => '배너 이미지 (한국어)',
        'languages.ko.name' => '플랫폼 이름 (한국어)',
        'title.ko' => '제목 (한국어)',

        // Dutch
        'translations.nl.name' => '이름 (네덜란드어)',
        'translations.nl.description' => '설명 (네덜란드어)',
        'translations.nl.image' => '이미지 (네덜란드어)',
        'translations.nl.title' => '제목 (네덜란드어)',
        'translations.nl.content' => '내용 (네덜란드어)',
        'languages.nl.title' => '배너 제목 (네덜란드어)',
        'languages.nl.description' => '배너 설명 (네덜란드어)',
        'languages.nl.image' => '배너 이미지 (네덜란드어)',
        'languages.nl.name' => '플랫폼 이름 (네덜란드어)',
        'title.nl' => '제목 (네덜란드어)',

        // Polish
        'translations.pl.name' => '이름 (폴란드어)',
        'translations.pl.description' => '설명 (폴란드어)',
        'translations.pl.image' => '이미지 (폴란드어)',
        'translations.pl.title' => '제목 (폴란드어)',
        'translations.pl.content' => '내용 (폴란드어)',
        'languages.pl.title' => '배너 제목 (폴란드어)',
        'languages.pl.description' => '배너 설명 (폴란드어)',
        'languages.pl.image' => '배너 이미지 (폴란드어)',
        'languages.pl.name' => '플랫폼 이름 (폴란드어)',
        'title.pl' => '제목 (폴란드어)',

        // Portuguese
        'translations.pt.name' => '이름 (포르투갈어)',
        'translations.pt.description' => '설명 (포르투갈어)',
        'translations.pt.image' => '이미지 (포르투갈어)',
        'translations.pt.title' => '제목 (포르투갈어)',
        'translations.pt.content' => '내용 (포르투갈어)',
        'languages.pt.title' => '배너 제목 (포르투갈어)',
        'languages.pt.description' => '배너 설명 (포르투갈어)',
        'languages.pt.image' => '배너 이미지 (포르투갈어)',
        'languages.pt.name' => '플랫폼 이름 (포르투갈어)',
        'title.pt' => '제목 (포르투갈어)',

        // Russian
        'translations.ru.name' => '이름 (러시아어)',
        'translations.ru.description' => '설명 (러시아어)',
        'translations.ru.image' => '이미지 (러시아어)',
        'translations.ru.title' => '제목 (러시아어)',
        'translations.ru.content' => '내용 (러시아어)',
        'languages.ru.title' => '배너 제목 (러시아어)',
        'languages.ru.description' => '배너 설명 (러시아어)',
        'languages.ru.image' => '배너 이미지 (러시아어)',
        'languages.ru.name' => '플랫폼 이름 (러시아어)',
        'title.ru' => '제목 (러시아어)',

        // Thai
        'translations.th.name' => '이름 (태국어)',
        'translations.th.description' => '설명 (태국어)',
        'translations.th.image' => '이미지 (태국어)',
        'translations.th.title' => '제목 (태국어)',
        'translations.th.content' => '내용 (태국어)',
        'languages.th.title' => '배너 제목 (태국어)',
        'languages.th.description' => '배너 설명 (태국어)',
        'languages.th.image' => '배너 이미지 (태국어)',
        'languages.th.name' => '플랫폼 이름 (태국어)',
        'title.th' => '제목 (태국어)',

        // Turkish
        'translations.tr.name' => '이름 (터키어)',
        'translations.tr.description' => '설명 (터키어)',
        'translations.tr.image' => '이미지 (터키어)',
        'translations.tr.title' => '제목 (터키어)',
        'translations.tr.content' => '내용 (터키어)',
        'languages.tr.title' => '배너 제목 (터키어)',
        'languages.tr.description' => '배너 설명 (터키어)',
        'languages.tr.image' => '배너 이미지 (터키어)',
        'languages.tr.name' => '플랫폼 이름 (터키어)',
        'title.tr' => '제목 (터키어)',

        // Vietnamese
        'translations.vi.name' => '이름 (베트남어)',
        'translations.vi.description' => '설명 (베트남어)',
        'translations.vi.image' => '이미지 (베트남어)',
        'translations.vi.title' => '제목 (베트남어)',
        'translations.vi.content' => '내용 (베트남어)',
        'languages.vi.title' => '배너 제목 (베트남어)',
        'languages.vi.description' => '배너 설명 (베트남어)',
        'languages.vi.image' => '배너 이미지 (베트남어)',
        'languages.vi.name' => '플랫폼 이름 (베트남어)',
        'title.vi' => '제목 (베트남어)',

        // Chinese
        'translations.zh.name' => '이름 (중국어)',
        'translations.zh.description' => '설명 (중국어)',
        'translations.zh.image' => '이미지 (중국어)',
        'translations.zh.title' => '제목 (중국어)',
        'translations.zh.content' => '내용 (중국어)',
        'languages.zh.title' => '배너 제목 (중국어)',
        'languages.zh.description' => '배너 설명 (중국어)',
        'languages.zh.image' => '배너 이미지 (중국어)',
        'languages.zh.name' => '플랫폼 이름 (중국어)',
        'title.zh' => '제목 (중국어)',
    ],
];
