<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Linhas de idioma de validação
    |--------------------------------------------------------------------------
    */

    'required' => 'O campo :attribute é obrigatório.',
    'string' => 'O campo :attribute deve ser uma string.',
    'max' => 'O campo :attribute não pode ser maior que :max caracteres.',
    'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    'image' => 'O campo :attribute deve ser uma imagem.',
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'array' => 'O campo :attribute deve ser uma matriz.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'lte' => 'O campo :attribute deve ser menor ou igual a :value.',

    /*
    |--------------------------------------------------------------------------
    | Atributos personalizados
    |--------------------------------------------------------------------------
    |
    | Aqui definimos nomes de atributos personalizados para vários idiomas.
    | Assim, as mensagens de validação ficam mais legíveis.
    |
    */

    'attributes' => [

        // Traduções para todos os idiomas suportados
        'translations.en.name' => 'Nome (Inglês)',
        'translations.en.description' => 'Descrição (Inglês)',
        'translations.en.image' => 'Imagem (Inglês)',

        'translations.ar.name' => 'Nome (Árabe)',
        'translations.ar.description' => 'Descrição (Árabe)',
        'translations.ar.image' => 'Imagem (Árabe)',

        'translations.de.name' => 'Nome (Alemão)',
        'translations.de.description' => 'Descrição (Alemão)',
        'translations.de.image' => 'Imagem (Alemão)',

        'translations.es.name' => 'Nome (Espanhol)',
        'translations.es.description' => 'Descrição (Espanhol)',
        'translations.es.image' => 'Imagem (Espanhol)',

        'translations.fa.name' => 'Nome (Persa)',
        'translations.fa.description' => 'Descrição (Persa)',
        'translations.fa.image' => 'Imagem (Persa)',

        'translations.fr.name' => 'Nome (Francês)',
        'translations.fr.description' => 'Descrição (Francês)',
        'translations.fr.image' => 'Imagem (Francês)',

        'translations.hi.name' => 'Nome (Hindi)',
        'translations.hi.description' => 'Descrição (Hindi)',
        'translations.hi.image' => 'Imagem (Hindi)',

        'translations.id.name' => 'Nome (Indonésio)',
        'translations.id.description' => 'Descrição (Indonésio)',
        'translations.id.image' => 'Imagem (Indonésio)',

        'translations.it.name' => 'Nome (Italiano)',
        'translations.it.description' => 'Descrição (Italiano)',
        'translations.it.image' => 'Imagem (Italiano)',

        'translations.ja.name' => 'Nome (Japonês)',
        'translations.ja.description' => 'Descrição (Japonês)',
        'translations.ja.image' => 'Imagem (Japonês)',

        'translations.ko.name' => 'Nome (Coreano)',
        'translations.ko.description' => 'Descrição (Coreano)',
        'translations.ko.image' => 'Imagem (Coreano)',

        'translations.nl.name' => 'Nome (Holandês)',
        'translations.nl.description' => 'Descrição (Holandês)',
        'translations.nl.image' => 'Imagem (Holandês)',

        'translations.pl.name' => 'Nome (Polonês)',
        'translations.pl.description' => 'Descrição (Polonês)',
        'translations.pl.image' => 'Imagem (Polonês)',

        'translations.pt.name' => 'Nome (Português)',
        'translations.pt.description' => 'Descrição (Português)',
        'translations.pt.image' => 'Imagem (Português)',

        'translations.ru.name' => 'Nome (Russo)',
        'translations.ru.description' => 'Descrição (Russo)',
        'translations.ru.image' => 'Imagem (Russo)',

        'translations.th.name' => 'Nome (Tailandês)',
        'translations.th.description' => 'Descrição (Tailandês)',
        'translations.th.image' => 'Imagem (Tailandês)',

        'translations.tr.name' => 'Nome (Turco)',
        'translations.tr.description' => 'Descrição (Turco)',
        'translations.tr.image' => 'Imagem (Turco)',

        'translations.vi.name' => 'Nome (Vietnamita)',
        'translations.vi.description' => 'Descrição (Vietnamita)',
        'translations.vi.image' => 'Imagem (Vietnamita)',

        'translations.zh.name' => 'Nome (Chinês)',
        'translations.zh.description' => 'Descrição (Chinês)',
        'translations.zh.image' => 'Imagem (Chinês)',

        // Variantes dinâmicas
        'variants.*.name' => 'Nome da variante',
        'variants.*.price' => 'Preço da variante',
        'variants.*.discount_price' => 'Preço promocional da variante',
        'variants.*.stock' => 'Estoque da variante',
        'variants.*.SKU' => 'SKU da variante',
        'variants.*.barcode' => 'Código de barras da variante',
        'variants.*.weight' => 'Peso da variante',
        'variants.*.dimensions' => 'Dimensões da variante',
        'variants.*.language_code' => 'Código de idioma da variante',
        'variants.*.size_id' => 'Tamanho da variante',
        'variants.*.color_id' => 'Cor da variante',
    ],
];
