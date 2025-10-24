<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'O campo :attribute é obrigatório.',
    'string' => 'O campo :attribute deve ser uma string.',
    'max' => 'O campo :attribute não pode ter mais de :max caracteres.',
    'min' => 'O campo :attribute deve ter pelo menos :min caracteres.',
    'image' => 'O campo :attribute deve ser uma imagem.',
    'mimes' => 'O campo :attribute deve ser um arquivo do tipo: :values.',
    'array' => 'O campo :attribute deve ser um array.',
    'numeric' => 'O campo :attribute deve ser um número.',
    'integer' => 'O campo :attribute deve ser um número inteiro.',
    'lte' => 'O campo :attribute deve ser menor ou igual a :value.',
    'regex' => 'O formato de :attribute é inválido.',
    'confirmed' => 'A confirmação de :attribute não corresponde.',
    'incorrect_current_password' => 'A senha atual está incorreta.',

    'password' => [
        'letters' => 'O campo :attribute deve conter pelo menos uma letra.',
        'mixed' => 'O campo :attribute deve conter letras maiúsculas e minúsculas.',
        'numbers' => 'O campo :attribute deve conter pelo menos um número.',
        'symbols' => 'O campo :attribute deve conter pelo menos um símbolo.',
        'uncompromised' => 'O campo :attribute apareceu em um vazamento de dados. Escolha outro :attribute.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'A confirmação da senha não corresponde.',
            'min' => 'A senha deve ter pelo menos :min caracteres.',
            'symbols' => 'A senha deve conter pelo menos um símbolo.',
        ],
        'phone' => [
            'regex' => 'O número de telefone pode conter apenas números, espaços, traços e um sinal de + opcional.',
        ],
        'email' => [
            'unique' => 'Este e-mail já está registrado.',
        ],
        'status' => [
            'in' => 'O status selecionado é inválido.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Senha atual',
        'profile_image' => 'Imagem de perfil',

        // Vendor fields
        'name' => 'Nome',
        'email' => 'Email',
        'password' => 'Senha',
        'password_confirmation' => 'Confirmação de senha',
        'phone' => 'Número de telefone',
        'status' => 'Status',

        // Social links
        'type' => 'Tipo de plataforma',
        'platform' => 'Nome da plataforma',
        'link' => 'Link da plataforma',

        // Menu fields
        'title' => 'Título do menu',
        'order_number' => 'Número do pedido',

        // Dynamic variants
        'variants.*.name' => 'Nome da variante',
        'variants.*.price' => 'Preço da variante',
        'variants.*.discount_price' => 'Preço com desconto da variante',
        'variants.*.stock' => 'Estoque da variante',
        'variants.*.SKU' => 'SKU da variante',
        'variants.*.barcode' => 'Código de barras da variante',
        'variants.*.weight' => 'Peso da variante',
        'variants.*.dimensions' => 'Dimensões da variante',
        'variants.*.language_code' => 'Código de idioma da variante',
        'variants.*.size_id' => 'Tamanho da variante',
        'variants.*.color_id' => 'Cor da variante',

        // Attribute name
        'name' => 'Nome do Atributo',

        // Attribute values
        'values.*' => 'Valor do Atributo',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Valor do Atributo $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Valor (Inglês)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Inglês) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Valor (Árabe)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Árabe) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Valor (Alemão)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Alemão) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Valor (Espanhol)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Espanhol) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Valor (Persa)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Persa) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Valor (Francês)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Francês) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Valor (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Valor (Indonésio)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Indonésio) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Valor (Italiano)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Italiano) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Valor (Japonês)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Japonês) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Valor (Coreano)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Coreano) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Valor (Holandês)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Holandês) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Valor (Polonês)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Polonês) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Valor (Português)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Português) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Valor (Russo)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Russo) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Valor (Tailandês)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Tailandês) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Valor (Turco)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Turco) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Valor (Vietnamita)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Vietnamita) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Valor (Chinês)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Valor (Chinês) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nome (Inglês)',
        'translations.en.description' => 'Descrição (Inglês)',
        'translations.en.image' => 'Imagem (Inglês)',
        'translations.en.title' => 'Título (Inglês)',
        'translations.en.content' => 'Conteúdo (Inglês)',
        'languages.en.title' => 'Título do banner (Inglês)',
        'languages.en.description' => 'Descrição do banner (Inglês)',
        'languages.en.image' => 'Imagem do banner (Inglês)',
        'languages.en.name' => 'Nome da plataforma (Inglês)',
        'title.en' => 'Título (Inglês)',

        // Arabic
        'translations.ar.name' => 'Nome (Árabe)',
        'translations.ar.description' => 'Descrição (Árabe)',
        'translations.ar.image' => 'Imagem (Árabe)',
        'translations.ar.title' => 'Título (Árabe)',
        'translations.ar.content' => 'Conteúdo (Árabe)',
        'languages.ar.title' => 'Título do banner (Árabe)',
        'languages.ar.description' => 'Descrição do banner (Árabe)',
        'languages.ar.image' => 'Imagem do banner (Árabe)',
        'languages.ar.name' => 'Nome da plataforma (Árabe)',
        'title.ar' => 'Título (Árabe)',

        // German
        'translations.de.name' => 'Nome (Alemão)',
        'translations.de.description' => 'Descrição (Alemão)',
        'translations.de.image' => 'Imagem (Alemão)',
        'translations.de.title' => 'Título (Alemão)',
        'translations.de.content' => 'Conteúdo (Alemão)',
        'languages.de.title' => 'Título do banner (Alemão)',
        'languages.de.description' => 'Descrição do banner (Alemão)',
        'languages.de.image' => 'Imagem do banner (Alemão)',
        'languages.de.name' => 'Nome da plataforma (Alemão)',
        'title.de' => 'Título (Alemão)',

        // Spanish
        'translations.es.name' => 'Nome (Espanhol)',
        'translations.es.description' => 'Descrição (Espanhol)',
        'translations.es.image' => 'Imagem (Espanhol)',
        'translations.es.title' => 'Título (Espanhol)',
        'translations.es.content' => 'Conteúdo (Espanhol)',
        'languages.es.title' => 'Título do banner (Espanhol)',
        'languages.es.description' => 'Descrição do banner (Espanhol)',
        'languages.es.image' => 'Imagem do banner (Espanhol)',
        'languages.es.name' => 'Nome da plataforma (Espanhol)',
        'title.es' => 'Título (Espanhol)',

        // Persian
        'translations.fa.name' => 'Nome (Persa)',
        'translations.fa.description' => 'Descrição (Persa)',
        'translations.fa.image' => 'Imagem (Persa)',
        'translations.fa.title' => 'Título (Persa)',
        'translations.fa.content' => 'Conteúdo (Persa)',
        'languages.fa.title' => 'Título do banner (Persa)',
        'languages.fa.description' => 'Descrição do banner (Persa)',
        'languages.fa.image' => 'Imagem do banner (Persa)',
        'languages.fa.name' => 'Nome da plataforma (Persa)',
        'title.fa' => 'Título (Persa)',

        // French
        'translations.fr.name' => 'Nome (Francês)',
        'translations.fr.description' => 'Descrição (Francês)',
        'translations.fr.image' => 'Imagem (Francês)',
        'translations.fr.title' => 'Título (Francês)',
        'translations.fr.content' => 'Conteúdo (Francês)',
        'languages.fr.title' => 'Título do banner (Francês)',
        'languages.fr.description' => 'Descrição do banner (Francês)',
        'languages.fr.image' => 'Imagem do banner (Francês)',
        'languages.fr.name' => 'Nome da plataforma (Francês)',
        'title.fr' => 'Título (Francês)',

        // Hindi
        'translations.hi.name' => 'Nome (Hindi)',
        'translations.hi.description' => 'Descrição (Hindi)',
        'translations.hi.image' => 'Imagem (Hindi)',
        'translations.hi.title' => 'Título (Hindi)',
        'translations.hi.content' => 'Conteúdo (Hindi)',
        'languages.hi.title' => 'Título do banner (Hindi)',
        'languages.hi.description' => 'Descrição do banner (Hindi)',
        'languages.hi.image' => 'Imagem do banner (Hindi)',
        'languages.hi.name' => 'Nome da plataforma (Hindi)',
        'title.hi' => 'Título (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nome (Indonésio)',
        'translations.id.description' => 'Descrição (Indonésio)',
        'translations.id.image' => 'Imagem (Indonésio)',
        'translations.id.title' => 'Título (Indonésio)',
        'translations.id.content' => 'Conteúdo (Indonésio)',
        'languages.id.title' => 'Título do banner (Indonésio)',
        'languages.id.description' => 'Descrição do banner (Indonésio)',
        'languages.id.image' => 'Imagem do banner (Indonésio)',
        'languages.id.name' => 'Nome da plataforma (Indonésio)',
        'title.id' => 'Título (Indonésio)',

        // Italian
        'translations.it.name' => 'Nome (Italiano)',
        'translations.it.description' => 'Descrição (Italiano)',
        'translations.it.image' => 'Imagem (Italiano)',
        'translations.it.title' => 'Título (Italiano)',
        'translations.it.content' => 'Conteúdo (Italiano)',
        'languages.it.title' => 'Título do banner (Italiano)',
        'languages.it.description' => 'Descrição do banner (Italiano)',
        'languages.it.image' => 'Imagem do banner (Italiano)',
        'languages.it.name' => 'Nome da plataforma (Italiano)',
        'title.it' => 'Título (Italiano)',

        // Japanese
        'translations.ja.name' => 'Nome (Japonês)',
        'translations.ja.description' => 'Descrição (Japonês)',
        'translations.ja.image' => 'Imagem (Japonês)',
        'translations.ja.title' => 'Título (Japonês)',
        'translations.ja.content' => 'Conteúdo (Japonês)',
        'languages.ja.title' => 'Título do banner (Japonês)',
        'languages.ja.description' => 'Descrição do banner (Japonês)',
        'languages.ja.image' => 'Imagem do banner (Japonês)',
        'languages.ja.name' => 'Nome da plataforma (Japonês)',
        'title.ja' => 'Título (Japonês)',

        // Korean
        'translations.ko.name' => 'Nome (Coreano)',
        'translations.ko.description' => 'Descrição (Coreano)',
        'translations.ko.image' => 'Imagem (Coreano)',
        'translations.ko.title' => 'Título (Coreano)',
        'translations.ko.content' => 'Conteúdo (Coreano)',
        'languages.ko.title' => 'Título do banner (Coreano)',
        'languages.ko.description' => 'Descrição do banner (Coreano)',
        'languages.ko.image' => 'Imagem do banner (Coreano)',
        'languages.ko.name' => 'Nome da plataforma (Coreano)',
        'title.ko' => 'Título (Coreano)',

        // Dutch
        'translations.nl.name' => 'Nome (Holandês)',
        'translations.nl.description' => 'Descrição (Holandês)',
        'translations.nl.image' => 'Imagem (Holandês)',
        'translations.nl.title' => 'Título (Holandês)',
        'translations.nl.content' => 'Conteúdo (Holandês)',
        'languages.nl.title' => 'Título do banner (Holandês)',
        'languages.nl.description' => 'Descrição do banner (Holandês)',
        'languages.nl.image' => 'Imagem do banner (Holandês)',
        'languages.nl.name' => 'Nome da plataforma (Holandês)',
        'title.nl' => 'Título (Holandês)',

        // Polish
        'translations.pl.name' => 'Nome (Polonês)',
        'translations.pl.description' => 'Descrição (Polonês)',
        'translations.pl.image' => 'Imagem (Polonês)',
        'translations.pl.title' => 'Título (Polonês)',
        'translations.pl.content' => 'Conteúdo (Polonês)',
        'languages.pl.title' => 'Título do banner (Polonês)',
        'languages.pl.description' => 'Descrição do banner (Polonês)',
        'languages.pl.image' => 'Imagem do banner (Polonês)',
        'languages.pl.name' => 'Nome da plataforma (Polonês)',
        'title.pl' => 'Título (Polonês)',

        // Portuguese
        'translations.pt.name' => 'Nome (Português)',
        'translations.pt.description' => 'Descrição (Português)',
        'translations.pt.image' => 'Imagem (Português)',
        'translations.pt.title' => 'Título (Português)',
        'translations.pt.content' => 'Conteúdo (Português)',
        'languages.pt.title' => 'Título do banner (Português)',
        'languages.pt.description' => 'Descrição do banner (Português)',
        'languages.pt.image' => 'Imagem do banner (Português)',
        'languages.pt.name' => 'Nome da plataforma (Português)',
        'title.pt' => 'Título (Português)',

        // Russian
        'translations.ru.name' => 'Nome (Russo)',
        'translations.ru.description' => 'Descrição (Russo)',
        'translations.ru.image' => 'Imagem (Russo)',
        'translations.ru.title' => 'Título (Russo)',
        'translations.ru.content' => 'Conteúdo (Russo)',
        'languages.ru.title' => 'Título do banner (Russo)',
        'languages.ru.description' => 'Descrição do banner (Russo)',
        'languages.ru.image' => 'Imagem do banner (Russo)',
        'languages.ru.name' => 'Nome da plataforma (Russo)',
        'title.ru' => 'Título (Russo)',

        // Thai
        'translations.th.name' => 'Nome (Tailandês)',
        'translations.th.description' => 'Descrição (Tailandês)',
        'translations.th.image' => 'Imagem (Tailandês)',
        'translations.th.title' => 'Título (Tailandês)',
        'translations.th.content' => 'Conteúdo (Tailandês)',
        'languages.th.title' => 'Título do banner (Tailandês)',
        'languages.th.description' => 'Descrição do banner (Tailandês)',
        'languages.th.image' => 'Imagem do banner (Tailandês)',
        'languages.th.name' => 'Nome da plataforma (Tailandês)',
        'title.th' => 'Título (Tailandês)',

        // Turkish
        'translations.tr.name' => 'Nome (Turco)',
        'translations.tr.description' => 'Descrição (Turco)',
        'translations.tr.image' => 'Imagem (Turco)',
        'translations.tr.title' => 'Título (Turco)',
        'translations.tr.content' => 'Conteúdo (Turco)',
        'languages.tr.title' => 'Título do banner (Turco)',
        'languages.tr.description' => 'Descrição do banner (Turco)',
        'languages.tr.image' => 'Imagem do banner (Turco)',
        'languages.tr.name' => 'Nome da plataforma (Turco)',
        'title.tr' => 'Título (Turco)',

        // Vietnamese
        'translations.vi.name' => 'Nome (Vietnamita)',
        'translations.vi.description' => 'Descrição (Vietnamita)',
        'translations.vi.image' => 'Imagem (Vietnamita)',
        'translations.vi.title' => 'Título (Vietnamita)',
        'translations.vi.content' => 'Conteúdo (Vietnamita)',
        'languages.vi.title' => 'Título do banner (Vietnamita)',
        'languages.vi.description' => 'Descrição do banner (Vietnamita)',
        'languages.vi.image' => 'Imagem do banner (Vietnamita)',
        'languages.vi.name' => 'Nome da plataforma (Vietnamita)',
        'title.vi' => 'Título (Vietnamita)',

        // Chinese
        'translations.zh.name' => 'Nome (Chinês)',
        'translations.zh.description' => 'Descrição (Chinês)',
        'translations.zh.image' => 'Imagem (Chinês)',
        'translations.zh.title' => 'Título (Chinês)',
        'translations.zh.content' => 'Conteúdo (Chinês)',
        'languages.zh.title' => 'Título do banner (Chinês)',
        'languages.zh.description' => 'Descrição do banner (Chinês)',
        'languages.zh.image' => 'Imagem do banner (Chinês)',
        'languages.zh.name' => 'Nome da plataforma (Chinês)',
        'title.zh' => 'Título (Chinês)',
    ],
];
