<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Anmelden',
        'email' => 'E-Mail-Adresse',
        'password' => 'Passwort',
        'remember_me' => 'Angemeldet bleiben',
        'forgot_password' => 'Passwort vergessen?',
    ],

    'profile' => [
        'profile' => 'Profil',
        'setting' => 'Einstellungen',
        'logout' => 'Abmelden',
    ],

    'dashboard' => [
        'total_sales' => 'Gesamtumsatz',
        'today' => 'Heute',
        'total' => 'Gesamt',

        'total_orders' => 'Gesamtbestellungen',
        'completed' => 'Abgeschlossen',
        'all_orders' => 'Alle Bestellungen',

        'total_vendors' => 'Gesamte Anbieter',
        'active' => 'Aktiv',

        'total_customers' => 'Gesamte Kunden',

        'my_sales' => 'Meine Verkäufe',
        'my_orders' => 'Meine Bestellungen',
        'my_products' => 'Meine Produkte',
    ],

    'sidebar' => [
        'search_placeholder' => 'Suche...',
        'dashboard' => 'Dashboard',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Kategorien',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'brands' => [
            'title' => 'Marken',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'products' => [
            'title' => 'Produkte',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'attributes' => [
            'title' => 'Attribute',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'customers' => [
            'title' => 'Kunden',
            'list' => 'Liste',
        ],
        'vendors' => [
            'title' => 'Verkäufer',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'product_reviews' => [
            'title' => 'Produktbewertungen',
            'list' => 'Liste',
        ],
        'banners' => [
            'title' => 'Banner',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'menu' => [
            'title' => 'Menü',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'menu_items' => [
            'title' => 'Menüeinträge',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'social_media_links' => [
            'title' => 'Soziale Medien Links',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'site_settings' => [
            'title' => 'Seiteneinstellungen',
            'manage' => 'Einstellungen verwalten',
        ],
        'orders' => [
            'title' => 'Bestellungen',
            'all_orders' => 'Alle Bestellungen',
            'pending_orders' => 'Ausstehende Bestellungen',
            'completed_orders' => 'Abgeschlossene Bestellungen',
            'list' => 'Liste',
        ],
        'pages' => [
            'title' => 'Seiten',
            'add_new' => 'Neu hinzufügen',
            'list' => 'Liste',
        ],
        'payments' => [
            'title' => 'Zahlungen',
            'list' => 'Liste',
        ],

        'refunds' => [
            'title' => 'Rückerstattungen',
            'list' => 'Liste',
        ],

        'payment_gateways' => [
            'title' => 'Zahlungsgateways',
            'list' => 'Liste',
        ],
    ],

    'profile' => [
        'title' => 'Profil bearbeiten',
        'choose_file' => 'Datei auswählen',
        'name' => 'Name',
        'email' => 'E-Mail',
        'phone' => 'Telefon',
        'current_password' => 'Aktuelles Passwort',
        'new_password' => 'Neues Passwort',
        'confirm_new_password' => 'Neues Passwort bestätigen',
        'save' => 'Speichern',
        'profile_updated' => 'Profil erfolgreich aktualisiert!',
        'success' => 'Erfolg',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Zahlungsgateways',
        'edit_title' => 'Zahlungsgateway bearbeiten',

        // Table Headings
        'id' => 'ID',
        'name' => 'Name',
        'code' => 'Code',
        'status' => 'Status',
        'action' => 'Aktion',

        // Status Labels
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',

        // Delete Modal
        'delete_confirm' => 'Löschen bestätigen',
        'delete_message' => 'Sind Sie sicher, dass Sie dieses Zahlungsgateway löschen möchten?',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',

        // Alerts / Notifications
        'success' => 'Erfolg',
        'deleted' => 'Gelöscht',
        'delete_error' => 'Fehler beim Löschen des Zahlungsgateways!',

        // Form Labels
        'gateway_name' => 'Gateway-Name',
        'description' => 'Beschreibung',
        'active_label' => 'Aktiv',
        'configurations' => 'Gateway-Konfigurationen',
        'key_name' => 'Schlüsselname',
        'key_value' => 'Schlüsselwert',
        'environment' => 'Umgebung',
        'sandbox' => 'Sandbox',
        'production' => 'Produktion',
        'encrypted' => 'Verschlüsselt',
        'unique' => 'Einzigartig',
        'update_button' => 'Aktualisieren',

        // Fallback
        'not_available' => 'N/A',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Rückerstattungen',
        'details_title' => 'Rückerstattungsdetails',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Zahlung',
        'amount' => 'Betrag',
        'status' => 'Status',
        'reason' => 'Grund',
        'action' => 'Aktion',

        // Status Labels
        'completed' => 'Abgeschlossen',
        'pending' => 'Ausstehend',
        'failed' => 'Fehlgeschlagen',

        // Delete Modal
        'delete_confirm' => 'Löschung bestätigen',
        'delete_message' => 'Sind Sie sicher, dass Sie diese Rückerstattung löschen möchten?',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',

        // Alerts / Notifications
        'success' => 'Erfolg',
        'deleted' => 'Gelöscht',
        'delete_error' => 'Fehler beim Löschen der Rückerstattung!',

        // Refund Details Page
        'created_at' => 'Erstellt am',
        'updated_at' => 'Aktualisiert am',
        'back' => 'Zurück zu Rückerstattungen',

        // Fallback
        'not_available' => 'Nicht verfügbar',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Zahlungen',
        'details_title' => 'Zahlungsdetails',

        // Table Headings
        'id' => 'ID',
        'order' => 'Bestellung',
        'user' => 'Benutzer',
        'gateway' => 'Zahlungsart',
        'amount' => 'Betrag',
        'status' => 'Status',
        'transaction' => 'Transaktion',
        'action' => 'Aktion',

        // Status Labels
        'completed' => 'Abgeschlossen',
        'pending' => 'Ausstehend',
        'failed' => 'Fehlgeschlagen',

        // Delete Modal
        'delete_confirm' => 'Löschen bestätigen',
        'delete_message' => 'Sind Sie sicher, dass Sie diese Zahlung löschen möchten?',
        'cancel' => 'Abbrechen',
        'delete' => 'Löschen',

        // Alerts / Notifications
        'success' => 'Erfolg',
        'deleted' => 'Gelöscht',
        'delete_error' => 'Fehler beim Löschen der Zahlung!',

        // Payment Details Page
        'transaction_id' => 'Transaktions-ID',
        'created_at' => 'Erstellt am',
        'back' => 'Zurück zu den Zahlungen',

        // Fallback
        'not_available' => 'Nicht verfügbar',
    ],

    'pages' => [
        // General
        'title' => 'Seiten',
        'choose_file' => 'Datei auswählen',

        // Create Page
        'create' => 'Seite erstellen',
        'form_title' => 'Titel (:code)',
        'form_content' => 'Inhalt (:code)',
        'form_image' => 'Bild (:code)',
        'form_save' => 'Speichern',

        // Edit Page
        'edit' => 'Seite bearbeiten',
        'form_update' => 'Aktualisieren',

        // Pages Table
        'table_title' => 'Titel',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Aktionen',

        // Delete Modal
        'delete_modal_title' => 'Löschung bestätigen',
        'delete_modal_text' => 'Sind Sie sicher, dass Sie diese Seite löschen möchten?',
        'delete_modal_cancel' => 'Abbrechen',
        'delete_modal_delete' => 'Löschen',

        // Toastr messages
        'toastr_success' => 'Erfolg',
        'toastr_error' => 'Fehler beim Löschen der Seite',
    ],

    'customers' => [
        'customer_list' => 'Kundenliste',

        // Table columns
        'id' => 'ID',
        'name' => 'Name',
        'email' => 'E-Mail',
        'phone' => 'Telefon',
        'address' => 'Adresse',
        'status' => 'Status',
        'actions' => 'Aktionen',

        // Status labels
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',

        // Modal
        'confirm_delete_title' => 'Löschen bestätigen',
        'confirm_delete_message' => 'Sind Sie sicher, dass Sie diesen Kunden löschen möchten?',
        'cancel_button' => 'Abbrechen',
        'delete_button' => 'Löschen',

        // Toastr messages
        'success_title' => 'Erfolg',
        'deleted_title' => 'Gelöscht',
        'delete_success_message' => 'Kunde erfolgreich gelöscht!',
        'delete_error_message' => 'Fehler beim Löschen des Kunden!',
    ],

    'vendors' => [
        'title_list' => 'Lieferantenliste',
        'id' => 'ID',
        'name' => 'Name',
        'email' => 'E-Mail',
        'phone' => 'Telefon',
        'status' => 'Status',
        'actions' => 'Aktionen',
        'register_new_vendor' => 'Neuen Verkäufer registrieren',
        'vendor_name' => 'Verkäufername',
        'vendor_email' => 'E-Mail des Verkäufers',
        'phone_optional' => 'Telefon (optional)',
        'password' => 'Passwort',
        'confirm_password' => 'Passwort bestätigen',
        'status' => 'Status',
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',
        'banned' => 'Gesperrt',
        'register_button' => 'Verkäufer registrieren',
        'cancel_button' => 'Abbrechen',

        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',

        'modal_confirm_delete_title' => 'Löschen bestätigen',
        'modal_confirm_delete_body' => 'Sind Sie sicher, dass Sie diesen Lieferanten löschen möchten?',
        'delete' => 'Löschen',
        'cancel' => 'Abbrechen',

        'success' => 'Erfolg',
        'success_delete' => 'Lieferant erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen des Lieferanten! Bitte versuchen Sie es erneut.',
    ],

    'languages' => [
        'english' => 'Englisch',
        'spanish' => 'Spanisch',
        'french' => 'Französisch',
        'arabic' => 'Arabisch',
        'german' => 'Deutsch',
        'persian' => 'Persisch (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesisch',
        'italian' => 'Italienisch',
        'japanese' => 'Japanisch',
        'korean' => 'Koreanisch',
        'dutch' => 'Niederländisch',
        'polish' => 'Polnisch',
        'portuguese' => 'Portugiesisch',
        'russian' => 'Russisch',
        'thai' => 'Thailändisch',
        'turkish' => 'Türkisch',
        'vietnamese' => 'Vietnamesisch',
        'chinese' => 'Chinesisch',

        'language_change' => 'Sprachwechsel',
        'change_language' => 'Sprache ändern',
        'confirm_language_change' => 'Sind Sie sicher, dass Sie die Sprache ändern möchten?',
        'cancel' => 'Abbrechen',
        'yes_change' => 'Ja, ändern',
    ],

    'categories' => [
        'heading' => 'Kategorien',
        'image' => 'Bild',
        'choose_file' => 'Datei auswählen',
        'id' => 'ID',
        'name' => 'Kategoriename',
        'description' => 'Beschreibung',
        'action' => 'Aktion',
        'edit' => 'Bearbeiten',
        'delete' => 'Löschen',
        'button' => 'Speichern',
        'add_new' => 'Hinzufügen',
        'status' => 'Status',
        'created' => 'Kategorie erfolgreich erstellt!',
        'updated' => 'Kategorie erfolgreich aktualisiert!',
        'deleted' => 'Kategorie erfolgreich gelöscht!',
        'status_updated' => 'Kategorie-Status erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschung bestätigen',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diese Kategorie löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',
    ],

    'datatables' => [
        'sEmptyTable' => 'Keine Daten in der Tabelle verfügbar',
        'sInfo' => 'Anzeige von _START_ bis _END_ von insgesamt _TOTAL_ Einträgen',
        'sInfoEmpty' => 'Anzeige von 0 bis 0 von insgesamt 0 Einträgen',
        'sInfoFiltered' => '(gefiltert aus _MAX_ Gesamteinträgen)',
        'sLengthMenu' => 'Zeige _MENU_ Einträge',
        'sLoadingRecords' => 'Laden...',
        'sProcessing' => 'Verarbeite...',
        'sSearch' => 'Suche:',
        'sZeroRecords' => 'Keine passenden Einträge gefunden',
        'oPaginate' => [
            'sFirst' => 'Erste',
            'sLast' => 'Letzte',
            'sNext' => 'Nächste',
            'sPrevious' => 'Vorherige',
        ],
    ],

    'products' => [

        // Titles
        'title_create' => 'Produkt erstellen',
        'title_edit' => 'Produkt bearbeiten',
        'title_manage' => 'Produkte verwalten',

        // Form Fields
        'vendor' => 'Verkäufer',
        'select_vendor' => 'Verkäufer auswählen',
        'product_name' => 'Produktname',
        'product_type' => 'Produkttyp',
        'description' => 'Beschreibung',
        'translations' => 'Übersetzungen',
        'translated_value' => 'Übersetzter Wert',
        'category' => 'Kategorie',
        'brand' => 'Marke',
        'no_brand' => 'Keine Marke',
        'status' => 'Status',
        'price' => 'Preis',
        'discount_price' => 'Rabattpreis',
        'sku' => 'Artikelnummer (SKU)',
        'barcode' => 'Strichcode',
        'stock' => 'Lagerbestand',
        'weight' => 'Gewicht',
        'dimension' => 'Abmessungen',
        'size' => 'Größe',
        'color' => 'Farbe',
        'images' => 'Produktbilder',
        'is_primary' => 'Primäre Variante',
        'variant_name_en' => 'Variantenname',
        'attributes' => 'Attribute',
        'attribute_values' => 'Attributwerte',
        'variants' => 'Varianten',

        // Buttons
        'add_variant' => 'Variante hinzufügen',
        'remove_variant' => 'Variante entfernen',
        'save_product' => 'Produkt speichern',
        'update_product' => 'Produkt aktualisieren',
        'choose_images' => 'Bilder auswählen',
        'choose_file' => 'Datei auswählen',
        'remove' => 'Entfernen',

        // Messages
        'status_updated' => 'Produktstatus wurde erfolgreich aktualisiert!',
        'success_create' => 'Produkt erfolgreich erstellt!',
        'success_update' => 'Produkt erfolgreich aktualisiert!',
        'success_delete' => 'Produkt erfolgreich gelöscht!',
        'delete_confirmation' => 'Möchten Sie dieses Produkt wirklich löschen?',
        'success' => 'Erfolg',

        // Table Columns
        'id' => 'ID',
        'name' => 'Name',
        'type' => 'Typ',
        'price_column' => 'Preis',
        'status_column' => 'Status',
        'action' => 'Aktion',

        // Confirmation Dialog
        'confirm_delete' => 'Löschen bestätigen',
        'delete' => 'Löschen',
        'cancel' => 'Abbrechen',
    ],

    'brands' => [
        'heading' => 'Marken',
        'id' => 'ID',
        'name' => 'Markenname',
        'description' => 'Beschreibung',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Aktion',
        'edit' => 'Bearbeiten',
        'delete' => 'Löschen',
        'create' => 'Erstellen',
        'update' => 'Aktualisieren',
        'add_new' => 'Neu hinzufügen',
        'button' => 'Speichern',
        'form_title' => 'Marke erstellen oder bearbeiten',
        'file_upload' => 'Logo hochladen',
        'no_logo' => 'Kein Logo',
        'choose_file' => 'Datei wählen',
        'image_preview' => 'Bildvorschau',
        'delete_confirmation' => 'Sind Sie sicher, dass Sie diese Marke löschen möchten?',
        'brand_deleted' => 'Marke erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen der Marke!',
        'created' => 'Marke erfolgreich erstellt!',
        'updated' => 'Marke erfolgreich aktualisiert!',
        'deleted' => 'Marke erfolgreich gelöscht!',
        'status_updated' => 'Markenstatus erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschbestätigung',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diese Marke löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',

    ],

    'banners' => [
        'button_back' => 'Zurück',
        'all_banners' => 'Alle Banner',
        'description' => 'Beschreibung',
        'choose_file' => 'Datei auswählen',
        'id' => 'ID',
        'add_new' => 'Neues hinzufügen',
        'banner_type' => 'Banner-Typ',
        'promotion' => 'Werbung',
        'sale' => 'Verkauf',
        'seasonal' => 'Saisonal',
        'featured' => 'Hervorgehoben',
        'announcement' => 'Ankündigung',
        'actions' => 'Aktionen',
        'edit' => 'Bearbeiten',
        'delete' => 'Löschen',
        'no_image' => 'Kein Bild verfügbar',
        'delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Banner löschen möchten?',
        'banner_deleted' => 'Banner erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen des Banners!',
        'image_preview' => 'Bildvorschau',
        'create_banner' => 'Banner erstellen',
        'edit_banner' => 'Banner Übersetzungen bearbeiten',
        'save' => 'Speichern',
        'languages' => 'Sprachen',
        'status' => 'Status',
        'image' => 'Bild',
        'image_title' => 'Bildtitel',
        'title' => 'Titel',
        'select_language' => 'Sprache auswählen',
        'file_upload' => 'Bild hochladen',
        'choose_file' => 'Datei auswählen',
        'existing_image' => 'Vorhandenes Bild',
        'banner_saved' => 'Banner erfolgreich gespeichert!',
        'banner_updated' => 'Banner erfolgreich aktualisiert!',
        'form_title' => 'Banner erstellen oder bearbeiten',
        'form_description' => 'Bitte geben Sie alle erforderlichen Informationen für das Banner ein.',
        'back_to_list' => 'Zurück zur Bannerliste',
        'created' => 'Banner erfolgreich erstellt!',
        'updated' => 'Banner erfolgreich aktualisiert!',
        'deleted' => 'Banner erfolgreich gelöscht!',
        'status_updated' => 'Bannerstatus erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschbestätigung',
        'confirm_delete' => 'Sind Sie sicher, dass Sie dieses Banner löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',
    ],

    'menus' => [
        'all_menus' => 'Alle Menüs',
        'id' => 'ID',
        'add_new' => 'Neu hinzufügen',
        'button_create' => 'Erstellen',
        'button_update' => 'Aktualisieren',
        'title' => 'Titel',
        'edit' => 'Bearbeiten',
        'action' => 'Aktion',
        'delete' => 'Löschen',
        'created_at' => 'Erstellt am',
        'no_menus' => 'Keine Menüs verfügbar',
        'delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Menü löschen möchten?',
        'menu_deleted' => 'Menü erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen des Menüs!',
        'create_menu' => 'Menü erstellen',
        'edit_menu' => 'Menü bearbeiten',
        'save' => 'Speichern',
        'menu_title' => 'Menü Titel',
        'form_title' => 'Menü erstellen oder bearbeiten',
        'form_description' => 'Bitte geben Sie alle erforderlichen Informationen für das Menü ein.',
        'back_to_list' => 'Zurück zur Menüliste',
        'created' => 'Menü erfolgreich erstellt!',
        'updated' => 'Menü erfolgreich aktualisiert!',
        'deleted' => 'Menü erfolgreich gelöscht!',
        'status_updated' => 'Menüstatus erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschbestätigung',
        'confirm_delete' => 'Sind Sie sicher, dass Sie dieses Menü löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',
    ],

    'menu_items' => [
        'heading' => 'Alle Menüeinträge',
        'id' => 'ID',
        'create' => 'Menüeintrag erstellen',
        'choose_an_option' => 'Wählen Sie eine Option',
        'select_an_option' => 'Wählen Sie eine Option',
        'option1' => 'Option 1',
        'option2' => 'Option 2',
        'option3' => 'Option 3',
        'option4' => 'Option 4',
        'order_number' => 'Bestellnummer',
        'parent_item' => 'Übergeordnetes Element',
        'parent_none' => 'Keins',
        'edit' => 'Menüeintrag bearbeiten',
        'update' => 'Menüeintrag aktualisieren',
        'delete' => 'Menüeintrag löschen',
        'title' => 'Titel',
        'button' => 'Speichern',
        'update_button' => 'Aktualisieren',
        'slug' => 'Slug',
        'order' => 'Reihenfolge',
        'actions' => 'Aktionen',
        'add_new' => 'Neu hinzufügen',
        'submit' => 'Absenden',
        'cancel' => 'Abbrechen',
        'no_title' => 'Kein Titel',
        'select_menu' => 'Menü auswählen',
        'select_parent_item' => 'Übergeordnetes Element auswählen',
        'language' => 'Sprache',
        'select_language' => 'Sprache auswählen',
        'select_order' => 'Reihenfolge auswählen',
        'success_message' => 'Menüeintrag wurde erfolgreich erstellt!',
        'error_message' => 'Fehler beim Erstellen des Menüeintrags.',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diesen Menüeintrag löschen möchten?',
        'update_success_message' => 'Menüeintrag wurde erfolgreich aktualisiert!',
        'update_error_message' => 'Fehler beim Aktualisieren des Menüeintrags.',
        'created' => 'Menüeintrag erfolgreich erstellt!',
        'updated' => 'Menüeintrag erfolgreich aktualisiert!',
        'deleted' => 'Menüeintrag erfolgreich gelöscht!',
        'status_updated' => 'Status des Menüeintrags erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschung bestätigen',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diesen Menüeintrag löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',

    ],
    'errors' => [
        'validation_failed' => 'Validierung fehlgeschlagen! Bitte korrigieren Sie die Fehler und versuchen Sie es erneut.',
        'csrf_token_invalid' => 'Ungültiges CSRF-Token. Bitte laden Sie die Seite neu und versuchen Sie es erneut.',
        'not_found' => 'Das angeforderte Element konnte nicht gefunden werden.',
        'unauthorized' => 'Sie sind nicht berechtigt, diese Aktion durchzuführen.',
    ],
    'messages' => [
        'welcome' => 'Willkommen im Admin-Panel!',
        'dashboard' => 'Dashboard',
        'settings' => 'Einstellungen',
        'log_out' => 'Abmelden',
        'profile' => 'Profil',
        'menu' => 'Menü',
        'home' => 'Startseite',
        'view_details' => 'Details anzeigen',
    ],
    'datatables' => [
        'emptyTable' => 'Keine Daten in der Tabelle verfügbar',
        'info' => 'Anzeige von _START_ bis _END_ von _TOTAL_ Einträgen',
        'infoEmpty' => 'Anzeige von 0 bis 0 von 0 Einträgen',
        'infoFiltered' => '(gefiltert aus _MAX_ Gesamt-Einträgen)',
        'lengthMenu' => 'Anzeige von _MENU_ Einträgen',
        'search' => 'Suche:',
        'zeroRecords' => 'Keine passenden Datensätze gefunden',
        'paginate' => [
            'first' => 'Erste',
            'last' => 'Letzte',
            'next' => 'Nächste',
            'previous' => 'Vorherige',
        ],
    ],

    'social_media_links' => [
        'type' => 'Sozialen Medien Typ',
        'select_type' => 'Wählen Sie den Typ der sozialen Medien',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Soziale Medien-Link erstellen',
        'edit' => 'Soziale Medien-Link bearbeiten',
        'platform' => 'Plattformname',
        'link' => 'Soziale Medien-Link',
        'created' => 'Social-Media-Link erfolgreich erstellt!',
        'updated' => 'Social-Media-Link erfolgreich aktualisiert!',
        'deleted' => 'Social-Media-Link erfolgreich gelöscht!',
        'status_updated' => 'Status des Social-Media-Links erfolgreich aktualisiert!',
        'massage_confirm' => 'Löschung bestätigen',
        'confirm_delete' => 'Sind Sie sicher, dass Sie diesen Social-Media-Link löschen möchten?',
        'massage_cancel' => 'Abbrechen',
        'massage_delete' => 'Löschen',
        'success' => 'Erfolg',
        'translations' => [
            'platform_name' => 'Plattformname (übersetzt)',
        ],
        'save' => 'Speichern',
        'update' => 'Aktualisieren',
        'delete' => 'Löschen',
        'no_links' => 'Keine sozialen Medien-Links verfügbar',
        'delete_confirmation' => 'Sind Sie sicher, dass Sie diesen Link löschen möchten?',
        'link_deleted' => 'Soziale Medien-Link erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen des Links!',
        'create_link' => 'Soziale Medien-Link erstellen',
        'edit_link' => 'Soziale Medien-Link bearbeiten',
        'form_title' => 'Soziale Medien-Link erstellen oder bearbeiten',
        'form_description' => 'Bitte geben Sie alle erforderlichen Informationen für den sozialen Medien-Link ein.',
        'back_to_list' => 'Zurück zur Liste der sozialen Medien-Links',
        'add_new' => 'Neu hinzufügen',
        'trans_name' => 'Übersetzter Name',
        'delete' => 'Löschen',
        'action' => 'Aktion',
    ],

    'orders' => [

        // Page Title
        'title' => 'Bestellübersicht',

        // Table Headings
        'id' => 'Bestellnummer',
        'order_date' => 'Bestelldatum',
        'status' => 'Status',
        'total_price' => 'Gesamtpreis',
        'action' => 'Aktionen',
        'customer' => 'Kunde',

        // Delete Modal
        'delete_confirm_title' => 'Löschen bestätigen',
        'delete_confirm_message' => 'Sind Sie sicher, dass Sie diese Bestellung löschen möchten?',
        'delete_cancel' => 'Abbrechen',
        'delete_button' => 'Löschen',

        // Toastr / Flash Messages
        'deleted_success' => 'Bestellung erfolgreich gelöscht.',
        'deleted_error' => 'Die Bestellung konnte nicht gelöscht werden.',
        'deleted' => 'Gelöscht',
        'success' => 'Erfolg',
    ],

    'attributes' => [
        'title_create' => 'Attribut erstellen',
        'title_edit' => 'Attribut bearbeiten',
        'title_manage' => 'Attribute verwalten',

        'attribute_name' => 'Attributname',
        'attribute_values' => 'Attributwerte',
        'translations' => 'Übersetzungen',
        'translated_value' => 'Übersetzter Wert',

        'add_value' => 'Wert hinzufügen',
        'remove_value' => 'Entfernen',
        'save_attribute' => 'Attribut speichern',
        'update_attribute' => 'Attribut aktualisieren',
        'add_value_translation' => 'Wertübersetzung hinzufügen',

        'success_create' => 'Attribut erfolgreich erstellt!',
        'success_update' => 'Attribut erfolgreich aktualisiert!',
        'success_delete' => 'Attribut erfolgreich gelöscht!',
        'delete_confirmation' => 'Sind Sie sicher, dass Sie dieses Attribut löschen möchten?',
        'success' => 'Erfolg',

        'id' => 'ID',
        'name' => 'Name',
        'values' => 'Werte',
        'action' => 'Aktion',

        'confirm_delete' => 'Löschen bestätigen',
        'delete' => 'Löschen',
        'cancel' => 'Abbrechen',
    ],

    'product_reviews' => [
        'title_manage' => 'Produktbewertungen',

        'review_id' => 'Bewertungs-ID',
        'customer_name' => 'Kundenname',
        'product_name' => 'Produktname',
        'rating' => 'Bewertung',
        'status' => 'Status',
        'actions' => 'Aktionen',
        'review_details' => 'Bewertungsdetails',
        'review' => 'Bewertung',
        'back_button' => 'Zurück zur Liste',

        'confirm_delete' => 'Löschen bestätigen',
        'delete_message' => 'Möchten Sie diese Produktbewertung wirklich löschen?',
        'delete' => 'Löschen',
        'cancel' => 'Abbrechen',

        'success_create' => 'Produktbewertung erfolgreich erstellt!',
        'success_update' => 'Produktbewertung erfolgreich aktualisiert!',
        'success_delete' => 'Produktbewertung erfolgreich gelöscht!',
        'error_delete' => 'Fehler beim Löschen der Produktbewertung! Bitte versuchen Sie es erneut.',

        'success' => 'Erfolg',
        'error' => 'Fehler',
    ],

];
