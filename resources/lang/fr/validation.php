<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'required' => 'Le champ :attribute est obligatoire.',
    'string' => 'Le :attribute doit être une chaîne de caractères.',
    'max' => 'Le :attribute ne peut pas dépasser :max caractères.',
    'min' => 'Le :attribute doit contenir au moins :min caractères.',
    'image' => 'Le :attribute doit être une image.',
    'mimes' => 'Le :attribute doit être un fichier de type : :values.',
    'array' => 'Le :attribute doit être un tableau.',
    'numeric' => 'Le :attribute doit être un nombre.',
    'integer' => 'Le :attribute doit être un entier.',
    'lte' => 'Le :attribute doit être inférieur ou égal à :value.',

    /*
    |--------------------------------------------------------------------------
    | Custom Attributes
    |--------------------------------------------------------------------------
    |
    | Ici, nous définissons des noms personnalisés pour tous les attributs.
    | Ainsi, les messages de validation sont plus lisibles.
    |
    */

    'attributes' => [

        // Vendor fields
        'name' => 'Nom',
        'email' => 'E-mail',
        'password' => 'Mot de passe',
        'password_confirmation' => 'Confirmation du mot de passe',
        'phone' => 'Numéro de téléphone',
        'status' => 'Statut',

        // Dynamic variants
        'variants.*.name' => 'Nom de la variante',
        'variants.*.price' => 'Prix de la variante',
        'variants.*.discount_price' => 'Prix promotionnel de la variante',
        'variants.*.stock' => 'Stock de la variante',
        'variants.*.SKU' => 'SKU de la variante',
        'variants.*.barcode' => 'Code-barres de la variante',
        'variants.*.weight' => 'Poids de la variante',
        'variants.*.dimensions' => 'Dimensions de la variante',
        'variants.*.language_code' => 'Code langue de la variante',
        'variants.*.size_id' => 'Taille de la variante',
        'variants.*.color_id' => 'Couleur de la variante',

        // Translations for all supported languages

        // English
        'translations.en.name' => 'Nom (Anglais)',
        'translations.en.description' => 'Description (Anglais)',
        'translations.en.image' => 'Image (Anglais)',
        'languages.en.title' => 'Titre de la bannière (Anglais)',
        'languages.en.description' => 'Description de la bannière (Anglais)',
        'languages.en.image' => 'Image de la bannière (Anglais)',

        // Arabic
        'translations.ar.name' => 'Nom (Arabe)',
        'translations.ar.description' => 'Description (Arabe)',
        'translations.ar.image' => 'Image (Arabe)',
        'languages.ar.title' => 'Titre de la bannière (Arabe)',
        'languages.ar.description' => 'Description de la bannière (Arabe)',
        'languages.ar.image' => 'Image de la bannière (Arabe)',

        // German
        'translations.de.name' => 'Nom (Allemand)',
        'translations.de.description' => 'Description (Allemand)',
        'translations.de.image' => 'Image (Allemand)',
        'languages.de.title' => 'Titre de la bannière (Allemand)',
        'languages.de.description' => 'Description de la bannière (Allemand)',
        'languages.de.image' => 'Image de la bannière (Allemand)',

        // Spanish
        'translations.es.name' => 'Nom (Espagnol)',
        'translations.es.description' => 'Description (Espagnol)',
        'translations.es.image' => 'Image (Espagnol)',
        'languages.es.title' => 'Titre de la bannière (Espagnol)',
        'languages.es.description' => 'Description de la bannière (Espagnol)',
        'languages.es.image' => 'Image de la bannière (Espagnol)',

        // Persian
        'translations.fa.name' => 'Nom (Persan)',
        'translations.fa.description' => 'Description (Persan)',
        'translations.fa.image' => 'Image (Persan)',
        'languages.fa.title' => 'Titre de la bannière (Persan)',
        'languages.fa.description' => 'Description de la bannière (Persan)',
        'languages.fa.image' => 'Image de la bannière (Persan)',

        // French
        'translations.fr.name' => 'Nom (Français)',
        'translations.fr.description' => 'Description (Français)',
        'translations.fr.image' => 'Image (Français)',
        'languages.fr.title' => 'Titre de la bannière (Français)',
        'languages.fr.description' => 'Description de la bannière (Français)',
        'languages.fr.image' => 'Image de la bannière (Français)',

        // Hindi
        'translations.hi.name' => 'Nom (Hindi)',
        'translations.hi.description' => 'Description (Hindi)',
        'translations.hi.image' => 'Image (Hindi)',
        'languages.hi.title' => 'Titre de la bannière (Hindi)',
        'languages.hi.description' => 'Description de la bannière (Hindi)',
        'languages.hi.image' => 'Image de la bannière (Hindi)',

        // Indonesian
        'translations.id.name' => 'Nom (Indonésien)',
        'translations.id.description' => 'Description (Indonésien)',
        'translations.id.image' => 'Image (Indonésien)',
        'languages.id.title' => 'Titre de la bannière (Indonésien)',
        'languages.id.description' => 'Description de la bannière (Indonésien)',
        'languages.id.image' => 'Image de la bannière (Indonésien)',

        // Italian
        'translations.it.name' => 'Nom (Italien)',
        'translations.it.description' => 'Description (Italien)',
        'translations.it.image' => 'Image (Italien)',
        'languages.it.title' => 'Titre de la bannière (Italien)',
        'languages.it.description' => 'Description de la bannière (Italien)',
        'languages.it.image' => 'Image de la bannière (Italien)',

        // Japanese
        'translations.ja.name' => 'Nom (Japonais)',
        'translations.ja.description' => 'Description (Japonais)',
        'translations.ja.image' => 'Image (Japonais)',
        'languages.ja.title' => 'Titre de la bannière (Japonais)',
        'languages.ja.description' => 'Description de la bannière (Japonais)',
        'languages.ja.image' => 'Image de la bannière (Japonais)',

        // Korean
        'translations.ko.name' => 'Nom (Coréen)',
        'translations.ko.description' => 'Description (Coréen)',
        'translations.ko.image' => 'Image (Coréen)',
        'languages.ko.title' => 'Titre de la bannière (Coréen)',
        'languages.ko.description' => 'Description de la bannière (Coréen)',
        'languages.ko.image' => 'Image de la bannière (Coréen)',

        // Dutch
        'translations.nl.name' => 'Nom (Néerlandais)',
        'translations.nl.description' => 'Description (Néerlandais)',
        'translations.nl.image' => 'Image (Néerlandais)',
        'languages.nl.title' => 'Titre de la bannière (Néerlandais)',
        'languages.nl.description' => 'Description de la bannière (Néerlandais)',
        'languages.nl.image' => 'Image de la bannière (Néerlandais)',

        // Polish
        'translations.pl.name' => 'Nom (Polonais)',
        'translations.pl.description' => 'Description (Polonais)',
        'translations.pl.image' => 'Image (Polonais)',
        'languages.pl.title' => 'Titre de la bannière (Polonais)',
        'languages.pl.description' => 'Description de la bannière (Polonais)',
        'languages.pl.image' => 'Image de la bannière (Polonais)',

        // Portuguese
        'translations.pt.name' => 'Nom (Portugais)',
        'translations.pt.description' => 'Description (Portugais)',
        'translations.pt.image' => 'Image (Portugais)',
        'languages.pt.title' => 'Titre de la bannière (Portugais)',
        'languages.pt.description' => 'Description de la bannière (Portugais)',
        'languages.pt.image' => 'Image de la bannière (Portugais)',

        // Russian
        'translations.ru.name' => 'Nom (Russe)',
        'translations.ru.description' => 'Description (Russe)',
        'translations.ru.image' => 'Image (Russe)',
        'languages.ru.title' => 'Titre de la bannière (Russe)',
        'languages.ru.description' => 'Description de la bannière (Russe)',
        'languages.ru.image' => 'Image de la bannière (Russe)',

        // Thai
        'translations.th.name' => 'Nom (Thaï)',
        'translations.th.description' => 'Description (Thaï)',
        'translations.th.image' => 'Image (Thaï)',
        'languages.th.title' => 'Titre de la bannière (Thaï)',
        'languages.th.description' => 'Description de la bannière (Thaï)',
        'languages.th.image' => 'Image de la bannière (Thaï)',

        // Turkish
        'translations.tr.name' => 'Nom (Turc)',
        'translations.tr.description' => 'Description (Turc)',
        'translations.tr.image' => 'Image (Turc)',
        'languages.tr.title' => 'Titre de la bannière (Turc)',
        'languages.tr.description' => 'Description de la bannière (Turc)',
        'languages.tr.image' => 'Image de la bannière (Turc)',

        // Vietnamese
        'translations.vi.name' => 'Nom (Vietnamien)',
        'translations.vi.description' => 'Description (Vietnamien)',
        'translations.vi.image' => 'Image (Vietnamien)',
        'languages.vi.title' => 'Titre de la bannière (Vietnamien)',
        'languages.vi.description' => 'Description de la bannière (Vietnamien)',
        'languages.vi.image' => 'Image de la bannière (Vietnamien)',

        // Chinese
        'translations.zh.name' => 'Nom (Chinois)',
        'translations.zh.description' => 'Description (Chinois)',
        'translations.zh.image' => 'Image (Chinois)',
        'languages.zh.title' => 'Titre de la bannière (Chinois)',
        'languages.zh.description' => 'Description de la bannière (Chinois)',
        'languages.zh.image' => 'Image de la bannière (Chinois)',
    ],
];
