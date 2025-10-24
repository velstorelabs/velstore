<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Le champ :attribute est obligatoire.',
    'string' => 'Le champ :attribute doit être une chaîne de caractères.',
    'max' => 'Le champ :attribute ne peut pas dépasser :max caractères.',
    'min' => 'Le champ :attribute doit contenir au moins :min caractères.',
    'image' => 'Le champ :attribute doit être une image.',
    'mimes' => 'Le champ :attribute doit être un fichier de type : :values.',
    'array' => 'Le champ :attribute doit être un tableau.',
    'numeric' => 'Le champ :attribute doit être un nombre.',
    'integer' => 'Le champ :attribute doit être un entier.',
    'lte' => 'Le champ :attribute doit être inférieur ou égal à :value.',
    'regex' => 'Le format de :attribute est invalide.',
    'confirmed' => 'La confirmation de :attribute ne correspond pas.',
    'incorrect_current_password' => 'Le mot de passe actuel est incorrect.',

    'password' => [
        'letters' => ':attribute doit contenir au moins une lettre.',
        'mixed' => ':attribute doit contenir à la fois des lettres majuscules et minuscules.',
        'numbers' => ':attribute doit contenir au moins un chiffre.',
        'symbols' => ':attribute doit contenir au moins un symbole.',
        'uncompromised' => ':attribute est apparu dans une fuite de données. Veuillez choisir un autre :attribute.',
    ],

    'custom' => [
        'password' => [
            'confirmed' => 'La confirmation du mot de passe ne correspond pas.',
            'min' => 'Le mot de passe doit contenir au moins :min caractères.',
            'symbols' => 'Le mot de passe doit contenir au moins un symbole.',
        ],
        'phone' => [
            'regex' => 'Le numéro de téléphone ne peut contenir que des chiffres, des espaces, des tirets et un signe + facultatif.',
        ],
        'email' => [
            'unique' => 'Cet e-mail est déjà enregistré.',
        ],
        'status' => [
            'in' => 'Le statut sélectionné est invalide.',
        ],
    ],

    'attributes' => [

        // Admin profile
        'current_password' => 'Mot de passe actuel',
        'profile_image' => 'Image de profil',

        // Vendor fields
        'name' => 'Nom',
        'email' => 'Email',
        'password' => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'phone' => 'Numéro de téléphone',
        'status' => 'Statut',

        // Social links
        'type' => 'Type de plateforme',
        'platform' => 'Nom de la plateforme',
        'link' => 'Lien de la plateforme',

        // Menu fields
        'title' => 'Titre du menu',
        'order_number' => 'Numéro de commande',

        // Dynamic variants
        'variants.*.name' => 'Nom de la variante',
        'variants.*.price' => 'Prix de la variante',
        'variants.*.discount_price' => 'Prix réduit de la variante',
        'variants.*.stock' => 'Stock de la variante',
        'variants.*.SKU' => 'SKU de la variante',
        'variants.*.barcode' => 'Code-barres de la variante',
        'variants.*.weight' => 'Poids de la variante',
        'variants.*.dimensions' => 'Dimensions de la variante',
        'variants.*.language_code' => 'Code langue de la variante',
        'variants.*.size_id' => 'Taille de la variante',
        'variants.*.color_id' => 'Couleur de la variante',

        // Attribute name
        'name' => 'Nom de l\'attribut',

        // Attribute values
        'values.*' => 'Valeur de l\'attribut',
        ...array_combine(
            array_map(fn ($i) => "values.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur de l\'attribut $i", range(0, 49))
        ),

        // Attribute value translations (English)
        'translations.en.*' => 'Valeur (Anglais)',
        ...array_combine(
            array_map(fn ($i) => "translations.en.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Anglais) $i", range(0, 49))
        ),

        // Attribute value translations (Arabic)
        'translations.ar.*' => 'Valeur (Arabe)',
        ...array_combine(
            array_map(fn ($i) => "translations.ar.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Arabe) $i", range(0, 49))
        ),

        // Attribute value translations (German)
        'translations.de.*' => 'Valeur (Allemand)',
        ...array_combine(
            array_map(fn ($i) => "translations.de.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Allemand) $i", range(0, 49))
        ),

        // Attribute value translations (Spanish)
        'translations.es.*' => 'Valeur (Espagnol)',
        ...array_combine(
            array_map(fn ($i) => "translations.es.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Espagnol) $i", range(0, 49))
        ),

        // Attribute value translations (Persian)
        'translations.fa.*' => 'Valeur (Persan)',
        ...array_combine(
            array_map(fn ($i) => "translations.fa.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Persan) $i", range(0, 49))
        ),

        // Attribute value translations (French)
        'translations.fr.*' => 'Valeur (Français)',
        ...array_combine(
            array_map(fn ($i) => "translations.fr.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Français) $i", range(0, 49))
        ),

        // Attribute value translations (Hindi)
        'translations.hi.*' => 'Valeur (Hindi)',
        ...array_combine(
            array_map(fn ($i) => "translations.hi.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Hindi) $i", range(0, 49))
        ),

        // Attribute value translations (Indonesian)
        'translations.id.*' => 'Valeur (Indonésien)',
        ...array_combine(
            array_map(fn ($i) => "translations.id.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Indonésien) $i", range(0, 49))
        ),

        // Attribute value translations (Italian)
        'translations.it.*' => 'Valeur (Italien)',
        ...array_combine(
            array_map(fn ($i) => "translations.it.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Italien) $i", range(0, 49))
        ),

        // Attribute value translations (Japanese)
        'translations.ja.*' => 'Valeur (Japonais)',
        ...array_combine(
            array_map(fn ($i) => "translations.ja.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Japonais) $i", range(0, 49))
        ),

        // Attribute value translations (Korean)
        'translations.ko.*' => 'Valeur (Coréen)',
        ...array_combine(
            array_map(fn ($i) => "translations.ko.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Coréen) $i", range(0, 49))
        ),

        // Attribute value translations (Dutch)
        'translations.nl.*' => 'Valeur (Néerlandais)',
        ...array_combine(
            array_map(fn ($i) => "translations.nl.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Néerlandais) $i", range(0, 49))
        ),

        // Attribute value translations (Polish)
        'translations.pl.*' => 'Valeur (Polonais)',
        ...array_combine(
            array_map(fn ($i) => "translations.pl.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Polonais) $i", range(0, 49))
        ),

        // Attribute value translations (Portuguese)
        'translations.pt.*' => 'Valeur (Portugais)',
        ...array_combine(
            array_map(fn ($i) => "translations.pt.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Portugais) $i", range(0, 49))
        ),

        // Attribute value translations (Russian)
        'translations.ru.*' => 'Valeur (Russe)',
        ...array_combine(
            array_map(fn ($i) => "translations.ru.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Russe) $i", range(0, 49))
        ),

        // Attribute value translations (Thai)
        'translations.th.*' => 'Valeur (Thaïlandais)',
        ...array_combine(
            array_map(fn ($i) => "translations.th.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Thaïlandais) $i", range(0, 49))
        ),

        // Attribute value translations (Turkish)
        'translations.tr.*' => 'Valeur (Turc)',
        ...array_combine(
            array_map(fn ($i) => "translations.tr.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Turc) $i", range(0, 49))
        ),

        // Attribute value translations (Vietnamese)
        'translations.vi.*' => 'Valeur (Vietnamien)',
        ...array_combine(
            array_map(fn ($i) => "translations.vi.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Vietnamien) $i", range(0, 49))
        ),

        // Attribute value translations (Chinese)
        'translations.zh.*' => 'Valeur (Chinois)',
        ...array_combine(
            array_map(fn ($i) => "translations.zh.$i", range(0, 49)),
            array_map(fn ($i) => "Valeur (Chinois) $i", range(0, 49))
        ),

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nom (Anglais)',
        'translations.en.description' => 'Description (Anglais)',
        'translations.en.image' => 'Image (Anglais)',
        'translations.en.title' => 'Titre (Anglais)',
        'translations.en.content' => 'Contenu (Anglais)',
        'languages.en.title' => 'Titre du banner (Anglais)',
        'languages.en.description' => 'Description du banner (Anglais)',
        'languages.en.image' => 'Image du banner (Anglais)',
        'languages.en.name' => 'Nom de la plateforme (Anglais)',
        'title.en' => 'Titre (Anglais)',

        // Arabic
        'translations.ar.name' => 'Nom (Arabe)',
        'translations.ar.description' => 'Description (Arabe)',
        'translations.ar.image' => 'Image (Arabe)',
        'translations.ar.title' => 'Titre (Arabe)',
        'translations.ar.content' => 'Contenu (Arabe)',
        'languages.ar.title' => 'Titre du banner (Arabe)',
        'languages.ar.description' => 'Description du banner (Arabe)',
        'languages.ar.image' => 'Image du banner (Arabe)',
        'languages.ar.name' => 'Nom de la plateforme (Arabe)',
        'title.ar' => 'Titre (Arabe)',

        // German
        'translations.de.name' => 'Nom (Allemand)',
        'translations.de.description' => 'Description (Allemand)',
        'translations.de.image' => 'Image (Allemand)',
        'translations.de.title' => 'Titre (Allemand)',
        'translations.de.content' => 'Contenu (Allemand)',
        'languages.de.title' => 'Titre du banner (Allemand)',
        'languages.de.description' => 'Description du banner (Allemand)',
        'languages.de.image' => 'Image du banner (Allemand)',
        'languages.de.name' => 'Nom de la plateforme (Allemand)',
        'title.de' => 'Titre (Allemand)',

        // Spanish
        'translations.es.name' => 'Nom (Espagnol)',
        'translations.es.description' => 'Description (Espagnol)',
        'translations.es.image' => 'Image (Espagnol)',
        'translations.es.title' => 'Titre (Espagnol)',
        'translations.es.content' => 'Contenu (Espagnol)',
        'languages.es.title' => 'Titre du banner (Espagnol)',
        'languages.es.description' => 'Description du banner (Espagnol)',
        'languages.es.image' => 'Image du banner (Espagnol)',
        'languages.es.name' => 'Nom de la plateforme (Espagnol)',
        'title.es' => 'Titre (Espagnol)',

        // Persian
        'translations.fa.name' => 'Nom (Persan)',
        'translations.fa.description' => 'Description (Persan)',
        'translations.fa.image' => 'Image (Persan)',
        'translations.fa.title' => 'Titre (Persan)',
        'translations.fa.content' => 'Contenu (Persan)',
        'languages.fa.title' => 'Titre du banner (Persan)',
        'languages.fa.description' => 'Description du banner (Persan)',
        'languages.fa.image' => 'Image du banner (Persan)',
        'languages.fa.name' => 'Nom de la plateforme (Persan)',
        'title.fa' => 'Titre (Persan)',

        // French
        'translations.fr.name' => 'Nom (Français)',
        'translations.fr.description' => 'Description (Français)',
        'translations.fr.image' => 'Image (Français)',
        'translations.fr.title' => 'Titre (Français)',
        'translations.fr.content' => 'Contenu (Français)',
        'languages.fr.title' => 'Titre du banner (Français)',
        'languages.fr.description' => 'Description du banner (Français)',
        'languages.fr.image' => 'Image du banner (Français)',
        'languages.fr.name' => 'Nom de la plateforme (Français)',
        'title.fr' => 'Titre (Français)',

        // Hindi
        'translations.hi.name' => 'Nom (Hindi)',
        'translations.hi.description' => 'Description (Hindi)',
        'translations.hi.image' => 'Image (Hindi)',
        'translations.hi.title' => 'Titre (Hindi)',
        'translations.hi.content' => 'Contenu (Hindi)',
        'languages.hi.title' => 'Titre du banner (Hindi)',
        'languages.hi.description' => 'Description du banner (Hindi)',
        'languages.hi.image' => 'Image du banner (Hindi)',
        'languages.hi.name' => 'Nom de la plateforme (Hindi)',
        'title.hi' => 'Titre (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nom (Indonésien)',
        'translations.id.description' => 'Description (Indonésien)',
        'translations.id.image' => 'Image (Indonésien)',
        'translations.id.title' => 'Titre (Indonésien)',
        'translations.id.content' => 'Contenu (Indonésien)',
        'languages.id.title' => 'Titre du banner (Indonésien)',
        'languages.id.description' => 'Description du banner (Indonésien)',
        'languages.id.image' => 'Image du banner (Indonésien)',
        'languages.id.name' => 'Nom de la plateforme (Indonésien)',
        'title.id' => 'Titre (Indonésien)',

        // Italian
        'translations.it.name' => 'Nom (Italien)',
        'translations.it.description' => 'Description (Italien)',
        'translations.it.image' => 'Image (Italien)',
        'translations.it.title' => 'Titre (Italien)',
        'translations.it.content' => 'Contenu (Italien)',
        'languages.it.title' => 'Titre du banner (Italien)',
        'languages.it.description' => 'Description du banner (Italien)',
        'languages.it.image' => 'Image du banner (Italien)',
        'languages.it.name' => 'Nom de la plateforme (Italien)',
        'title.it' => 'Titre (Italien)',

        // Japanese
        'translations.ja.name' => 'Nom (Japonais)',
        'translations.ja.description' => 'Description (Japonais)',
        'translations.ja.image' => 'Image (Japonais)',
        'translations.ja.title' => 'Titre (Japonais)',
        'translations.ja.content' => 'Contenu (Japonais)',
        'languages.ja.title' => 'Titre du banner (Japonais)',
        'languages.ja.description' => 'Description du banner (Japonais)',
        'languages.ja.image' => 'Image du banner (Japonais)',
        'languages.ja.name' => 'Nom de la plateforme (Japonais)',
        'title.ja' => 'Titre (Japonais)',

        // Korean
        'translations.ko.name' => 'Nom (Coréen)',
        'translations.ko.description' => 'Description (Coréen)',
        'translations.ko.image' => 'Image (Coréen)',
        'translations.ko.title' => 'Titre (Coréen)',
        'translations.ko.content' => 'Contenu (Coréen)',
        'languages.ko.title' => 'Titre du banner (Coréen)',
        'languages.ko.description' => 'Description du banner (Coréen)',
        'languages.ko.image' => 'Image du banner (Coréen)',
        'languages.ko.name' => 'Nom de la plateforme (Coréen)',
        'title.ko' => 'Titre (Coréen)',

        // Dutch
        'translations.nl.name' => 'Nom (Néerlandais)',
        'translations.nl.description' => 'Description (Néerlandais)',
        'translations.nl.image' => 'Image (Néerlandais)',
        'translations.nl.title' => 'Titre (Néerlandais)',
        'translations.nl.content' => 'Contenu (Néerlandais)',
        'languages.nl.title' => 'Titre du banner (Néerlandais)',
        'languages.nl.description' => 'Description du banner (Néerlandais)',
        'languages.nl.image' => 'Image du banner (Néerlandais)',
        'languages.nl.name' => 'Nom de la plateforme (Néerlandais)',
        'title.nl' => 'Titre (Néerlandais)',

        // Polish
        'translations.pl.name' => 'Nom (Polonais)',
        'translations.pl.description' => 'Description (Polonais)',
        'translations.pl.image' => 'Image (Polonais)',
        'translations.pl.title' => 'Titre (Polonais)',
        'translations.pl.content' => 'Contenu (Polonais)',
        'languages.pl.title' => 'Titre du banner (Polonais)',
        'languages.pl.description' => 'Description du banner (Polonais)',
        'languages.pl.image' => 'Image du banner (Polonais)',
        'languages.pl.name' => 'Nom de la plateforme (Polonais)',
        'title.pl' => 'Titre (Polonais)',

        // Portuguese
        'translations.pt.name' => 'Nom (Portugais)',
        'translations.pt.description' => 'Description (Portugais)',
        'translations.pt.image' => 'Image (Portugais)',
        'translations.pt.title' => 'Titre (Portugais)',
        'translations.pt.content' => 'Contenu (Portugais)',
        'languages.pt.title' => 'Titre du banner (Portugais)',
        'languages.pt.description' => 'Description du banner (Portugais)',
        'languages.pt.image' => 'Image du banner (Portugais)',
        'languages.pt.name' => 'Nom de la plateforme (Portugais)',
        'title.pt' => 'Titre (Portugais)',

        // Russian
        'translations.ru.name' => 'Nom (Russe)',
        'translations.ru.description' => 'Description (Russe)',
        'translations.ru.image' => 'Image (Russe)',
        'translations.ru.title' => 'Titre (Russe)',
        'translations.ru.content' => 'Contenu (Russe)',
        'languages.ru.title' => 'Titre du banner (Russe)',
        'languages.ru.description' => 'Description du banner (Russe)',
        'languages.ru.image' => 'Image du banner (Russe)',
        'languages.ru.name' => 'Nom de la plateforme (Russe)',
        'title.ru' => 'Titre (Russe)',

        // Thai
        'translations.th.name' => 'Nom (Thaï)',
        'translations.th.description' => 'Description (Thaï)',
        'translations.th.image' => 'Image (Thaï)',
        'translations.th.title' => 'Titre (Thaï)',
        'translations.th.content' => 'Contenu (Thaï)',
        'languages.th.title' => 'Titre du banner (Thaï)',
        'languages.th.description' => 'Description du banner (Thaï)',
        'languages.th.image' => 'Image du banner (Thaï)',
        'languages.th.name' => 'Nom de la plateforme (Thaï)',
        'title.th' => 'Titre (Thaï)',

        // Turkish
        'translations.tr.name' => 'Nom (Turc)',
        'translations.tr.description' => 'Description (Turc)',
        'translations.tr.image' => 'Image (Turc)',
        'translations.tr.title' => 'Titre (Turc)',
        'translations.tr.content' => 'Contenu (Turc)',
        'languages.tr.title' => 'Titre du banner (Turc)',
        'languages.tr.description' => 'Description du banner (Turc)',
        'languages.tr.image' => 'Image du banner (Turc)',
        'languages.tr.name' => 'Nom de la plateforme (Turc)',
        'title.tr' => 'Titre (Turc)',

        // Vietnamese
        'translations.vi.name' => 'Nom (Vietnamien)',
        'translations.vi.description' => 'Description (Vietnamien)',
        'translations.vi.image' => 'Image (Vietnamien)',
        'translations.vi.title' => 'Titre (Vietnamien)',
        'translations.vi.content' => 'Contenu (Vietnamien)',
        'languages.vi.title' => 'Titre du banner (Vietnamien)',
        'languages.vi.description' => 'Description du banner (Vietnamien)',
        'languages.vi.image' => 'Image du banner (Vietnamien)',
        'languages.vi.name' => 'Nom de la plateforme (Vietnamien)',
        'title.vi' => 'Titre (Vietnamien)',

        // Chinese
        'translations.zh.name' => 'Nom (Chinois)',
        'translations.zh.description' => 'Description (Chinois)',
        'translations.zh.image' => 'Image (Chinois)',
        'translations.zh.title' => 'Titre (Chinois)',
        'translations.zh.content' => 'Contenu (Chinois)',
        'languages.zh.title' => 'Titre du banner (Chinois)',
        'languages.zh.description' => 'Description du banner (Chinois)',
        'languages.zh.image' => 'Image du banner (Chinois)',
        'languages.zh.name' => 'Nom de la plateforme (Chinois)',
        'title.zh' => 'Titre (Chinois)',
    ],
];
