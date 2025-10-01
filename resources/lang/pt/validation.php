<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'O campo :attribute é obrigatório.',
    'string' => 'O campo :attribute deve ser uma sequência de caracteres.',
    'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
    'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    'image' => 'O campo :attribute deve ser uma imagem.',
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'array' => 'O campo :attribute deve ser um array.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'lte' => 'O campo :attribute deve ser menor ou igual a :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Aqui definimos nomes personalizados de atributos.
    | Isso torna as mensagens de validação mais legíveis.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nome',
        'email' => 'E-mail',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação de senha',
        'phone' => 'Número de telefone',
        'status' => 'Status',

        // Dynamic variants
        'variants.*.name' => 'Nome da variante',
        'variants.*.price' => 'Preço da variante',
        'variants.*.discount_price' => 'Preço promocional da variante',
        'variants.*.stock' => 'Estoque da variante',
        'variants.*.SKU' => 'SKU da variante',
        'variants.*.barcode' => 'Código de barras da variante',
        'variants.*.weight' => 'Peso da variante',
        'variants.*.dimensions' => 'Dimensões da variante',
        'variants.*.language_code' => 'Código do idioma da variante',
        'variants.*.size_id' => 'Tamanho da variante',
        'variants.*.color_id' => 'Cor da variante',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nome (Inglês)',
        'translations.en.description' => 'Descrição (Inglês)',
        'translations.en.image' => 'Imagem (Inglês)',
        'languages.en.title' => 'Título do banner (Inglês)',
        'languages.en.description' => 'Descrição do banner (Inglês)',
        'languages.en.image' => 'Imagem do banner (Inglês)',

        // Arabic
        'translations.ar.name' => 'Nome (Árabe)',
        'translations.ar.description' => 'Descrição (Árabe)',
        'translations.ar.image' => 'Imagem (Árabe)',
        'languages.ar.title' => 'Título do banner (Árabe)',
        'languages.ar.description' => 'Descrição do banner (Árabe)',
        'languages.ar.image' => 'Imagem do banner (Árabe)',

        // German
        'translations.de.name' => 'Nome (Alemão)',
        'translations.de.description' => 'Descrição (Alemão)',
        'translations.de.image' => 'Imagem (Alemão)',
        'languages.de.title' => 'Título do banner (Alemão)',
        'languages.de.description' => 'Descrição do banner (Alemão)',
        'languages.de.image' => 'Imagem do banner (Alemão)',

        // Spanish
        'translations.es.name' => 'Nome (Espanhol)',
        'translations.es.description' => 'Descrição (Espanhol)',
        'translations.es.image' => 'Imagem (Espanhol)',
        'languages.es.title' => 'Título do banner (Espanhol)',
        'languages.es.description' => 'Descrição do banner (Espanhol)',
        'languages.es.image' => 'Imagem do banner (Espanhol)',

        // Persian
        'translations.fa.name' => 'Nome (Persa)',
        'translations.fa.description' => 'Descrição (Persa)',
        'translations.fa.image' => 'Imagem (Persa)',
        'languages.fa.title' => 'Título do banner (Persa)',
        'languages.fa.description' => 'Descrição do banner (Persa)',
        'languages.fa.image' => 'Imagem do banner (Persa)',

        // French
        'translations.fr.name' => 'Nome (Francês)',
        'translations.fr.description' => 'Descrição (Francês)',
        'translations.fr.image' => 'Imagem (Francês)',
        'languages.fr.title' => 'Título do banner (Francês)',
        'languages.fr.description' => 'Descrição do banner (Francês)',
        'languages.fr.image' => 'Imagem do banner (Francês)',

        // Hindi
        'translations.hi.name' => 'Nome (Hindi)',
        'translations.hi.description' => 'Descrição (Hindi)',
        'translations.hi.image' => 'Imagem (Hindi)',
        'languages.hi.title' => 'Título do banner (Hindi)',
        'languages.hi.description' => 'Descrição do banner (Hindi)',
        'languages.hi.image' => 'Imagem do banner (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nome (Indonésio)',
        'translations.id.description' => 'Descrição (Indonésio)',
        'translations.id.image' => 'Imagem (Indonésio)',
        'languages.id.title' => 'Título do banner (Indonésio)',
        'languages.id.description' => 'Descrição do banner (Indonésio)',
        'languages.id.image' => 'Imagem do banner (Indonésio)',

        // Italian
        'translations.it.name' => 'Nome (Italiano)',
        'translations.it.description' => 'Descrição (Italiano)',
        'translations.it.image' => 'Imagem (Italiano)',
        'languages.it.title' => 'Título do banner (Italiano)',
        'languages.it.description' => 'Descrição do banner (Italiano)',
        'languages.it.image' => 'Imagem do banner (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nome (Japonês)',
        'translations.ja.description' => 'Descrição (Japonês)',
        'translations.ja.image' => 'Imagem (Japonês)',
        'languages.ja.title' => 'Título do banner (Japonês)',
        'languages.ja.description' => 'Descrição do banner (Japonês)',
        'languages.ja.image' => 'Imagem do banner (Japonês)',

        // Korean
        'translations.ko.name' => 'Nome (Coreano)',
        'translations.ko.description' => 'Descrição (Coreano)',
        'translations.ko.image' => 'Imagem (Coreano)',
        'languages.ko.title' => 'Título do banner (Coreano)',
        'languages.ko.description' => 'Descrição do banner (Coreano)',
        'languages.ko.image' => 'Imagem do banner (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nome (Holandês)',
        'translations.nl.description' => 'Descrição (Holandês)',
        'translations.nl.image' => 'Imagem (Holandês)',
        'languages.nl.title' => 'Título do banner (Holandês)',
        'languages.nl.description' => 'Descrição do banner (Holandês)',
        'languages.nl.image' => 'Imagem do banner (Holandês)',

        // Polish
        'translations.pl.name' => 'Nome (Polonês)',
        'translations.pl.description' => 'Descrição (Polonês)',
        'translations.pl.image' => 'Imagem (Polonês)',
        'languages.pl.title' => 'Título do banner (Polonês)',
        'languages.pl.description' => 'Descrição do banner (Polonês)',
        'languages.pl.image' => 'Imagem do banner (Polonês)',

        // Portuguese
        'translations.pt.name' => 'Nome (Português)',
        'translations.pt.description' => 'Descrição (Português)',
        'translations.pt.image' => 'Imagem (Português)',
        'languages.pt.title' => 'Título do banner (Português)',
        'languages.pt.description' => 'Descrição do banner (Português)',
        'languages.pt.image' => 'Imagem do banner (Português)',

        // Russian
        'translations.ru.name' => 'Nome (Russo)',
        'translations.ru.description' => 'Descrição (Russo)',
        'translations.ru.image' => 'Imagem (Russo)',
        'languages.ru.title' => 'Título do banner (Russo)',
        'languages.ru.description' => 'Descrição do banner (Russo)',
        'languages.ru.image' => 'Imagem do banner (Russo)',

        // Thai
        'translations.th.name' => 'Nome (Tailandês)',
        'translations.th.description' => 'Descrição (Tailandês)',
        'translations.th.image' => 'Imagem (Tailandês)',
        'languages.th.title' => 'Título do banner (Tailandês)',
        'languages.th.description' => 'Descrição do banner (Tailandês)',
        'languages.th.image' => 'Imagem do banner (Tailandês)',

        // Turkish
        'translations.tr.name' => 'Nome (Turco)',
        'translations.tr.description' => 'Descrição (Turco)',
        'translations.tr.image' => 'Imagem (Turco)',
        'languages.tr.title' => 'Título do banner (Turco)',
        'languages.tr.description' => 'Descrição do banner (Turco)',
        'languages.tr.image' => 'Imagem do banner (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nome (Vietnamita)',
        'translations.vi.description' => 'Descrição (Vietnamita)',
        'translations.vi.image' => 'Imagem (Vietnamita)',
        'languages.vi.title' => 'Título do banner (Vietnamita)',
        'languages.vi.description' => 'Descrição do banner (Vietnamita)',
        'languages.vi.image' => 'Imagem do banner (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nome (Chinês)',
        'translations.zh.description' => 'Descrição (Chinês)',
        'translations.zh.image' => 'Imagem (Chinês)',
        'languages.zh.title' => 'Título do banner (Chinês)',
        'languages.zh.description' => 'Descrição do banner (Chinês)',
        'languages.zh.image' => 'Imagem do banner (Chinês)',
    ],
];
