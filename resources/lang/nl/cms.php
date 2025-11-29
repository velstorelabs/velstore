<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Inloggen',
        'email' => 'E-mailadres',
        'password' => 'Wachtwoord',
        'remember_me' => 'Onthoud mij',
        'forgot_password' => 'Wachtwoord vergeten?',
    ],
    'profile' => [
        'profile' => 'Profiel',
        'setting' => 'Instellingen',
        'logout' => 'Uitloggen',
    ],

    'dashboard' => [
        'total_sales' => 'Totale Verkoop',
        'today' => 'Vandaag',
        'total' => 'Totaal',

        'total_orders' => 'Totaal Bestellingen',
        'completed' => 'Voltooid',
        'all_orders' => 'Alle Bestellingen',

        'total_vendors' => 'Totaal Verkopers',
        'active' => 'Actief',

        'total_customers' => 'Totaal Klanten',
    ],

    'sidebar' => [
        'search_placeholder' => 'Zoeken...',
        'dashboard' => 'Dashboard',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Categorieën',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'brands' => [
            'title' => 'Merken',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'products' => [
            'title' => 'Producten',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'attributes' => [
            'title' => 'Attributen',
            'add_new' => 'Nieuw Toevoegen',
            'list' => 'Lijst',
        ],
        'customers' => [
            'title' => 'Klanten',
            'list' => 'Lijst',
        ],
        'vendors' => [
            'title' => 'Verkopers',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'product_reviews' => [
            'title' => 'Productbeoordelingen',
            'list' => 'Lijst',
        ],
        'banners' => [
            'title' => 'Banners',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'menu_items' => [
            'title' => 'Menu-items',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'social_media_links' => [
            'title' => 'Sociale Media Links',
            'add_new' => 'Nieuwe Toevoegen',
            'list' => 'Lijst',
        ],
        'site_settings' => [
            'title' => 'Website-instellingen',
            'manage' => 'Instellingen Beheren',
        ],
        'orders' => [
            'title' => 'Bestellingen',
            'all_orders' => 'Alle Bestellingen',
            'pending_orders' => 'In Behandeling',
            'completed_orders' => 'Voltooide Bestellingen',
            'list' => 'Lijst',
        ],
        'pages' => [
            'title' => 'Pagina\'s',
            'add_new' => 'Nieuw toevoegen',
            'list' => 'Lijst',
        ],
        'payments' => [
            'title' => 'Betalingen',
            'list' => 'Lijst',
        ],

        'refunds' => [
            'title' => 'Terugbetalingen',
            'list' => 'Lijst',
        ],

        'payment_gateways' => [
            'title' => 'Betaalgateways',
            'list' => 'Lijst',
        ],
    ],

    'profile' => [
        'title' => 'Profiel bewerken',
        'choose_file' => 'Bestand kiezen',
        'name' => 'Naam',
        'email' => 'E-mail',
        'phone' => 'Telefoon',
        'current_password' => 'Huidig wachtwoord',
        'new_password' => 'Nieuw wachtwoord',
        'confirm_new_password' => 'Nieuw wachtwoord bevestigen',
        'save' => 'Opslaan',
        'profile_updated' => 'Profiel succesvol bijgewerkt!',
        'success' => 'Succes',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Betaalgateways',
        'edit_title' => 'Betaalgateway bewerken',

        // Table Headings
        'id' => 'ID',
        'name' => 'Naam',
        'code' => 'Code',
        'status' => 'Status',
        'action' => 'Actie',

        // Status Labels
        'active' => 'Actief',
        'inactive' => 'Inactief',

        // Delete Modal
        'delete_confirm' => 'Bevestig verwijderen',
        'delete_message' => 'Weet u zeker dat u deze betaalgateway wilt verwijderen?',
        'cancel' => 'Annuleren',
        'delete' => 'Verwijderen',

        // Alerts / Notifications
        'success' => 'Succes',
        'deleted' => 'Verwijderd',
        'delete_error' => 'Fout bij het verwijderen van de betaalgateway!',

        // Form Labels
        'gateway_name' => 'Gateway Naam',
        'description' => 'Beschrijving',
        'active_label' => 'Actief',
        'configurations' => 'Gateway Configuraties',
        'key_name' => 'Sleutel Naam',
        'key_value' => 'Sleutel Waarde',
        'environment' => 'Omgeving',
        'sandbox' => 'Sandbox',
        'production' => 'Productie',
        'encrypted' => 'Versleuteld',
        'unique' => 'Uniek',
        'update_button' => 'Bijwerken',

        // Fallback
        'not_available' => 'Niet beschikbaar',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Terugbetalingen',
        'details_title' => 'Terugbetalingsdetails',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Betaling',
        'amount' => 'Bedrag',
        'status' => 'Status',
        'reason' => 'Reden',
        'action' => 'Actie',

        // Status Labels
        'completed' => 'Voltooid',
        'pending' => 'In afwachting',
        'failed' => 'Mislukt',

        // Delete Modal
        'delete_confirm' => 'Bevestig verwijderen',
        'delete_message' => 'Weet u zeker dat u deze terugbetaling wilt verwijderen?',
        'cancel' => 'Annuleren',
        'delete' => 'Verwijderen',

        // Alerts / Notifications
        'success' => 'Succes',
        'deleted' => 'Verwijderd',
        'delete_error' => 'Fout bij het verwijderen van de terugbetaling!',

        // Refund Details Page
        'created_at' => 'Gemaakt op',
        'updated_at' => 'Bijgewerkt op',
        'back' => 'Terug naar terugbetalingen',

        // Fallback
        'not_available' => 'Niet beschikbaar',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Betalingen',
        'details_title' => 'Betalingsgegevens',

        // Table Headings
        'id' => 'ID',
        'order' => 'Bestelling',
        'user' => 'Gebruiker',
        'gateway' => 'Betaalgateway',
        'amount' => 'Bedrag',
        'status' => 'Status',
        'transaction' => 'Transactie',
        'action' => 'Actie',

        // Status Labels
        'completed' => 'Voltooid',
        'pending' => 'In afwachting',
        'failed' => 'Mislukt',

        // Delete Modal
        'delete_confirm' => 'Verwijderen bevestigen',
        'delete_message' => 'Weet u zeker dat u deze betaling wilt verwijderen?',
        'cancel' => 'Annuleren',
        'delete' => 'Verwijderen',

        // Alerts / Notifications
        'success' => 'Succes',
        'deleted' => 'Verwijderd',
        'delete_error' => 'Fout bij het verwijderen van betaling!',

        // Payment Details Page
        'transaction_id' => 'Transactie-ID',
        'created_at' => 'Aangemaakt op',
        'back' => 'Terug naar Betalingen',

        // Fallback
        'not_available' => 'Niet beschikbaar',
    ],

    'pages' => [
        // General
        'title' => 'Pagina\'s',
        'choose_file' => 'Bestand kiezen',

        // Create Page
        'create' => 'Pagina maken',
        'form_title' => 'Titel (:code)',
        'form_content' => 'Inhoud (:code)',
        'form_image' => 'Afbeelding (:code)',
        'form_save' => 'Opslaan',

        // Edit Page
        'edit' => 'Pagina bewerken',
        'form_update' => 'Bijwerken',

        // Pages Table
        'table_title' => 'Titel',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Acties',

        // Delete Modal
        'delete_modal_title' => 'Verwijderen bevestigen',
        'delete_modal_text' => 'Weet je zeker dat je deze pagina wilt verwijderen?',
        'delete_modal_cancel' => 'Annuleren',
        'delete_modal_delete' => 'Verwijderen',

        // Toastr messages
        'toastr_success' => 'Succes',
        'toastr_error' => 'Fout bij het verwijderen van de pagina',
    ],

    'customers' => [
        'customer_list' => 'Klantlijst',

        // Table columns
        'id' => 'ID',
        'name' => 'Naam',
        'email' => 'E-mail',
        'phone' => 'Telefoon',
        'address' => 'Adres',
        'status' => 'Status',
        'actions' => 'Acties',

        // Status labels
        'active' => 'Actief',
        'inactive' => 'Inactief',

        // Modal
        'confirm_delete_title' => 'Verwijderen bevestigen',
        'confirm_delete_message' => 'Weet u zeker dat u deze klant wilt verwijderen?',
        'cancel_button' => 'Annuleren',
        'delete_button' => 'Verwijderen',

        // Toastr messages
        'success_title' => 'Succes',
        'deleted_title' => 'Verwijderd',
        'delete_success_message' => 'Klant succesvol verwijderd!',
        'delete_error_message' => 'Fout bij het verwijderen van klant!',
    ],

    'vendors' => [
        'title_list' => 'Leverancierslijst',
        'id' => 'ID',
        'name' => 'Naam',
        'email' => 'E-mail',
        'phone' => 'Telefoon',
        'status' => 'Status',
        'actions' => 'Acties',
        'register_new_vendor' => 'Nieuwe verkoper registreren',
        'vendor_name' => 'Naam van de verkoper',
        'vendor_email' => 'E-mailadres van de verkoper',
        'phone_optional' => 'Telefoon (optioneel)',
        'password' => 'Wachtwoord',
        'confirm_password' => 'Wachtwoord bevestigen',
        'status' => 'Status',
        'active' => 'Actief',
        'inactive' => 'Inactief',
        'banned' => 'Geblokkeerd',
        'register_button' => 'Verkoper registreren',
        'cancel_button' => 'Annuleren',

        'active' => 'Actief',
        'inactive' => 'Inactief',

        'modal_confirm_delete_title' => 'Bevestig verwijderen',
        'modal_confirm_delete_body' => 'Weet u zeker dat u deze leverancier wilt verwijderen?',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',

        'success' => 'Succes',
        'success_delete' => 'Leverancier succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van leverancier! Probeer het opnieuw.',
    ],

    'languages' => [
        'english' => 'Engels',
        'spanish' => 'Spaans',
        'french' => 'Frans',
        'arabic' => 'Arabisch',
        'german' => 'Duits',
        'persian' => 'Perzisch (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesisch',
        'italian' => 'Italiaans',
        'japanese' => 'Japans',
        'korean' => 'Koreaans',
        'dutch' => 'Nederlands',
        'polish' => 'Pools',
        'portuguese' => 'Portugees',
        'russian' => 'Russisch',
        'thai' => 'Thais',
        'turkish' => 'Turks',
        'vietnamese' => 'Vietnamees',
        'chinese' => 'Chinees',

        'language_change' => 'Taal wijzigen',
        'change_language' => 'Wijzig taal',
        'confirm_language_change' => 'Weet je zeker dat je de taal wilt wijzigen?',
        'cancel' => 'Annuleren',
        'yes_change' => 'Ja, wijzigen',
    ],

    'categories' => [
        'heading' => 'Categorieën',
        'image' => 'Afbeelding',
        'choose_file' => 'Kies bestand',
        'id' => 'ID',
        'name' => 'Categorie naam',
        'description' => 'Beschrijving',
        'action' => 'Actie',
        'edit' => 'Bewerken',
        'delete' => 'Verwijderen',
        'button' => 'Opslaan',
        'add_new' => 'Nieuwe Toevoegen',
        'status' => 'Status',
        'created' => 'Categorie succesvol aangemaakt!',
        'updated' => 'Categorie succesvol bijgewerkt!',
        'deleted' => 'Categorie succesvol verwijderd!',
        'status_updated' => 'Categorie status succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijdering bevestigen',
        'confirm_delete' => 'Weet je zeker dat je deze categorie wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',
    ],

    'datatables' => [
        'sEmptyTable' => 'Geen gegevens beschikbaar in de tabel',
        'sInfo' => 'Weergeven van _START_ tot _END_ van _TOTAL_ vermeldingen',
        'sInfoEmpty' => 'Weergeven van 0 tot 0 van 0 vermeldingen',
        'sInfoFiltered' => '(gefilterd uit _MAX_ totale vermeldingen)',
        'sLengthMenu' => 'Toon _MENU_ vermeldingen',
        'sLoadingRecords' => 'Laden...',
        'sProcessing' => 'Bezig met verwerken...',
        'sSearch' => 'Zoeken:',
        'sZeroRecords' => 'Geen overeenkomende records gevonden',
        'oPaginate' => [
            'sFirst' => 'Eerste',
            'sLast' => 'Laatste',
            'sNext' => 'Volgende',
            'sPrevious' => 'Vorige',
        ],
    ],

    'products' => [

        // Titels
        'title_create' => 'Product aanmaken',
        'title_edit' => 'Product bewerken',
        'title_manage' => 'Producten beheren',

        // Formuliervelden
        'vendor' => 'Verkoper',
        'select_vendor' => 'Selecteer Verkoper',
        'product_name' => 'Productnaam',
        'product_type' => 'Producttype',
        'description' => 'Beschrijving',
        'translations' => 'Vertalingen',
        'translated_value' => 'Vertaald waarde',
        'category' => 'Categorie',
        'brand' => 'Merk',
        'no_brand' => 'Geen merk',
        'status' => 'Status',
        'price' => 'Prijs',
        'discount_price' => 'Kortingsprijs',
        'sku' => 'SKU',
        'barcode' => 'Barcode',
        'stock' => 'Voorraad',
        'weight' => 'Gewicht',
        'dimension' => 'Afmetingen',
        'size' => 'Maat',
        'color' => 'Kleur',
        'images' => 'Productafbeeldingen',
        'is_primary' => 'Primaire variant',
        'variant_name_en' => 'Variantnaam',
        'attributes' => 'Eigenschappen',
        'attribute_values' => 'Eigenschapswaarden',
        'variants' => 'Varianten',

        // Knoppen
        'add_variant' => 'Variant toevoegen',
        'remove_variant' => 'Variant verwijderen',
        'save_product' => 'Product opslaan',
        'update_product' => 'Product bijwerken',
        'choose_images' => 'Afbeeldingen kiezen',
        'choose_file' => 'Bestand kiezen',
        'remove' => 'Verwijderen',

        // Meldingen
        'status_updated' => 'Productstatus succesvol bijgewerkt!',
        'success_create' => 'Product succesvol aangemaakt!',
        'success_update' => 'Product succesvol bijgewerkt!',
        'success_delete' => 'Product succesvol verwijderd!',
        'delete_confirmation' => 'Weet u zeker dat u dit product wilt verwijderen?',
        'success' => 'Succes',

        // Tabelkolommen
        'id' => 'ID',
        'name' => 'Naam',
        'type' => 'Type',
        'price_column' => 'Prijs',
        'status_column' => 'Status',
        'action' => 'Actie',

        // Bevestigingsvenster
        'confirm_delete' => 'Verwijderen bevestigen',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',
    ],

    'brands' => [
        'heading' => 'Merken',
        'id' => 'ID',
        'name' => 'Merknaam',
        'description' => 'Beschrijving',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Actie',
        'edit' => 'Bewerken',
        'delete' => 'Verwijderen',
        'create' => 'Aanmaken',
        'update' => 'Bijwerken',
        'add_new' => 'Nieuwe toevoegen',
        'button' => 'Opslaan',
        'form_title' => 'Merk maken of bewerken',
        'file_upload' => 'Upload logo',
        'no_logo' => 'Geen logo',
        'choose_file' => 'Bestand kiezen',
        'image_preview' => 'Afbeelding voorbeeld',
        'delete_confirmation' => 'Weet je zeker dat je dit merk wilt verwijderen?',
        'brand_deleted' => 'Merk succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van merk!',
        'created' => 'Merk succesvol aangemaakt!',
        'updated' => 'Merk succesvol bijgewerkt!',
        'deleted' => 'Merk succesvol verwijderd!',
        'status_updated' => 'Merkstatus succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijderbevestiging',
        'confirm_delete' => 'Weet u zeker dat u dit merk wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',
    ],

    'banners' => [
        'button_back' => 'Terug',
        'description' => 'Beschrijving',
        'choose_file' => 'Bestand kiezen',
        'all_banners' => 'Alle banners',
        'id' => 'ID',
        'add_new' => 'Nieuw toevoegen',
        'banner_type' => 'Banner type',
        'promotion' => 'Promotie',
        'sale' => 'Uitverkoop',
        'seasonal' => 'Seizoensgebonden',
        'featured' => 'Aanbevolen',
        'announcement' => 'Aankondiging',
        'actions' => 'Acties',
        'edit' => 'Bewerken',
        'delete' => 'Verwijderen',
        'no_image' => 'Geen afbeelding beschikbaar',
        'delete_confirmation' => 'Weet je zeker dat je deze banner wilt verwijderen?',
        'banner_deleted' => 'Banner succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van de banner!',
        'image_preview' => 'Afbeelding voorbeeld',
        'create_banner' => 'Banner aanmaken',
        'edit_banner' => 'Banner vertalingen bewerken',
        'save' => 'Opslaan',
        'languages' => 'Talen',
        'status' => 'Status',
        'image' => 'Afbeelding',
        'image_title' => 'Afbeelding titel',
        'title' => 'Titel',
        'select_language' => 'Selecteer taal',
        'file_upload' => 'Afbeelding uploaden',
        'choose_file' => 'Kies bestand',
        'existing_image' => 'Bestaande afbeelding',
        'banner_saved' => 'Banner succesvol opgeslagen!',
        'banner_updated' => 'Banner succesvol bijgewerkt!',
        'form_title' => 'Maak of bewerk een banner',
        'form_description' => 'Geef alle noodzakelijke informatie voor de banner op.',
        'back_to_list' => 'Terug naar de lijst van banners',
        'created' => 'Banner succesvol aangemaakt!',
        'updated' => 'Banner succesvol bijgewerkt!',
        'deleted' => 'Banner succesvol verwijderd!',
        'status_updated' => 'Bannerstatus succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijderbevestiging',
        'confirm_delete' => 'Weet u zeker dat u deze banner wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',
    ],

    'menus' => [
        'all_menus' => 'Alle Menu\'s',
        'id' => 'ID',
        'add_new' => 'Nieuw Toevoegen',
        'button_create' => 'Creëren',
        'button_update' => 'Bijwerken',
        'title' => 'Titel',
        'edit' => 'Bewerken',
        'action' => 'Actie',
        'delete' => 'Verwijderen',
        'created_at' => 'Aangemaakt op',
        'no_menus' => 'Geen menu\'s beschikbaar',
        'delete_confirmation' => 'Weet je zeker dat je dit menu wilt verwijderen?',
        'menu_deleted' => 'Menu succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van menu!',
        'create_menu' => 'Menu Maken',
        'edit_menu' => 'Menu Bewerken',
        'save' => 'Opslaan',
        'menu_title' => 'Menu Titel',
        'form_title' => 'Maak of Bewerk Menu',
        'form_description' => 'Geef alle noodzakelijke informatie voor het menu op.',
        'back_to_list' => 'Terug naar de Menu Lijst',
        'created' => 'Menu succesvol aangemaakt!',
        'updated' => 'Menu succesvol bijgewerkt!',
        'deleted' => 'Menu succesvol verwijderd!',
        'status_updated' => 'Menu status succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijderbevestiging',
        'confirm_delete' => 'Weet je zeker dat je dit menu wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',

    ],

    'menu_items' => [
        'heading' => 'Alle Menu Items',
        'id' => 'ID',
        'create' => 'Menu Item Maken',
        'choose_an_option' => 'Kies een Optie',
        'select_an_option' => 'Selecteer een Optie',
        'option1' => 'Optie 1',
        'option2' => 'Optie 2',
        'option3' => 'Optie 3',
        'option4' => 'Optie 4',
        'order_number' => 'Bestelnummer',
        'parent_item' => 'Bovenliggend Item',
        'parent_none' => 'Geen',
        'edit' => 'Menu Item Bewerken',
        'update' => 'Menu Item Bijwerken',
        'delete' => 'Menu Item Verwijderen',
        'title' => 'Titel',
        'button' => 'Opslaan',
        'update_button' => 'Bijwerken',
        'slug' => 'Slug',
        'order' => 'Volgorde',
        'actions' => 'Acties',
        'add_new' => 'Nieuw Toevoegen',
        'submit' => 'Verzenden',
        'cancel' => 'Annuleren',
        'no_title' => 'Geen Titel',
        'select_menu' => 'Selecteer een Menu',
        'select_parent_item' => 'Selecteer Bovenliggend Item',
        'language' => 'Taal',
        'select_language' => 'Selecteer Taal',
        'select_order' => 'Selecteer Volgorde',
        'success_message' => 'Menu Item is succesvol aangemaakt!',
        'error_message' => 'Er is een fout opgetreden bij het aanmaken van het menu item.',
        'confirm_delete' => 'Weet je zeker dat je dit menu item wilt verwijderen?',
        'update_success_message' => 'Menu Item is succesvol bijgewerkt!',
        'update_error_message' => 'Er is een fout opgetreden bij het bijwerken van het menu item.',
        'created' => 'Menu-item succesvol aangemaakt!',
        'updated' => 'Menu-item succesvol bijgewerkt!',
        'deleted' => 'Menu-item succesvol verwijderd!',
        'status_updated' => 'Status van het menu-item succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijdering bevestigen',
        'confirm_delete' => 'Weet je zeker dat je dit menu-item wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',

    ],
    'errors' => [
        'validation_failed' => 'Validatie mislukt! Corrigeer de fouten en probeer het opnieuw.',
        'csrf_token_invalid' => 'Ongeldige CSRF-token. Vernieuw de pagina en probeer het opnieuw.',
        'not_found' => 'Het opgevraagde item kon niet worden gevonden.',
        'unauthorized' => 'Je hebt geen toestemming om deze actie uit te voeren.',
    ],
    'messages' => [
        'welcome' => 'Welkom bij het Admin Panel!',
        'dashboard' => 'Dashboard',
        'settings' => 'Instellingen',
        'log_out' => 'Uitloggen',
        'profile' => 'Profiel',
        'menu' => 'Menu',
        'home' => 'Home',
        'view_details' => 'Bekijk Details',
    ],

    'social_media_links' => [
        'type' => 'Type sociaal netwerk',
        'select_type' => 'Selecteer het type sociaal netwerk',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Maak Social Media Link',
        'edit' => 'Bewerk Social Media Link',
        'platform' => 'Platform Naam',
        'link' => 'Social Media Link',
        'created' => 'Social media link succesvol aangemaakt!',
        'updated' => 'Social media link succesvol bijgewerkt!',
        'deleted' => 'Social media link succesvol verwijderd!',
        'status_updated' => 'Status van de social media link succesvol bijgewerkt!',
        'massage_confirm' => 'Verwijdering bevestigen',
        'confirm_delete' => 'Weet u zeker dat u deze social media link wilt verwijderen?',
        'massage_cancel' => 'Annuleren',
        'massage_delete' => 'Verwijderen',
        'success' => 'Succes',

        'translations' => [
            'platform_name' => 'Platform Naam (vertaling)',
        ],
        'save' => 'Opslaan',
        'update' => 'Bijwerken',
        'delete' => 'Verwijderen',
        'no_links' => 'Geen beschikbare Social Media Links',
        'delete_confirmation' => 'Weet je zeker dat je deze link wilt verwijderen?',
        'link_deleted' => 'Social Media Link succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van de link!',
        'create_link' => 'Maak Social Media Link',
        'edit_link' => 'Bewerk Social Media Link',
        'form_title' => 'Maak of Bewerk Social Media Link',
        'form_description' => 'Geef alle benodigde informatie voor de social media link.',
        'back_to_list' => 'Terug naar Social Media Links Lijst',
        'add_new' => 'Nieuw toevoegen',
        'trans_name' => 'Vertaalde Naam',
        'delete' => 'Verwijderen',
        'action' => 'Actie',
    ],

    'orders' => [

        // Page Title
        'title' => 'Bestellijst',

        // Table Headings
        'id' => 'Bestelnummer',
        'order_date' => 'Besteldatum',
        'status' => 'Status',
        'total_price' => 'Totale prijs',
        'action' => 'Acties',
        'customer' => 'Klant',

        // Delete Modal
        'delete_confirm_title' => 'Verwijder bevestigen',
        'delete_confirm_message' => 'Weet je zeker dat je deze bestelling wilt verwijderen?',
        'delete_cancel' => 'Annuleren',
        'delete_button' => 'Verwijderen',

        // Toastr / Flash Messages
        'deleted_success' => 'Bestelling succesvol verwijderd.',
        'deleted_error' => 'Het verwijderen van de bestelling is mislukt.',
        'deleted' => 'Verwijderd',
        'success' => 'Succes',
    ],

    'attributes' => [
        'title_create' => 'Attribuut aanmaken',
        'title_edit' => 'Attribuut bewerken',
        'title_manage' => 'Attribuut beheren',

        'attribute_name' => 'Attribuut naam',
        'attribute_values' => 'Attribuut waarden',
        'translations' => 'Vertalingen',
        'translated_value' => 'Vertaald waarde',

        'add_value' => 'Waarde toevoegen',
        'remove_value' => 'Verwijderen',
        'save_attribute' => 'Attribuut opslaan',
        'update_attribute' => 'Attribuut bijwerken',
        'add_value_translation' => 'Waardevertaling toevoegen',

        'success_create' => 'Attribuut succesvol aangemaakt!',
        'success_update' => 'Attribuut succesvol bijgewerkt!',
        'success_delete' => 'Attribuut succesvol verwijderd!',
        'delete_confirmation' => 'Weet je zeker dat je dit attribuut wilt verwijderen?',
        'success' => 'Succes',

        'id' => 'ID',
        'name' => 'Naam',
        'values' => 'Waarden',
        'action' => 'Actie',

        'confirm_delete' => 'Verwijderen bevestigen',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',
    ],

    'product_reviews' => [
        'title_manage' => 'Beheer van productrecensies',

        'review_id' => 'Recensie-ID',
        'customer_name' => 'Naam klant',
        'product_name' => 'Productnaam',
        'rating' => 'Beoordeling',
        'status' => 'Status',
        'actions' => 'Acties',
        'review_details' => 'Beoordelingsdetails',
        'review' => 'Beoordeling',
        'back_button' => 'Terug naar de lijst',

        'confirm_delete' => 'Verwijderen bevestigen',
        'delete_message' => 'Weet u zeker dat u deze productrecensie wilt verwijderen?',
        'delete' => 'Verwijderen',
        'cancel' => 'Annuleren',

        'success_create' => 'Productrecensie succesvol aangemaakt!',
        'success_update' => 'Productrecensie succesvol bijgewerkt!',
        'success_delete' => 'Productrecensie succesvol verwijderd!',
        'error_delete' => 'Fout bij het verwijderen van de productrecensie! Probeer het opnieuw.',

        'success' => 'Succes',
        'error' => 'Fout',
    ],

];
