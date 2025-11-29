<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Accesso',
        'email' => 'Indirizzo email',
        'password' => 'Password',
        'remember_me' => 'Ricordami',
        'forgot_password' => 'Hai dimenticato la password?',
    ],

    'profile' => [
        'profile' => 'Profilo',
        'setting' => 'Impostazioni',
        'logout' => 'Disconnettersi',
    ],

    'dashboard' => [
        'total_sales' => 'Vendite Totali',
        'today' => 'Oggi',
        'total' => 'Totale',

        'total_orders' => 'Totale Ordini',
        'completed' => 'Completato',
        'all_orders' => 'Tutti gli Ordini',

        'total_vendors' => 'Totale Venditori',
        'active' => 'Attivo',

        'total_customers' => 'Totale Clienti',
    ],

    'sidebar' => [
        'search_placeholder' => 'Cerca...',
        'dashboard' => 'Dashboard',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Categorie',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'brands' => [
            'title' => 'Marche',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'products' => [
            'title' => 'Prodotti',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'attributes' => [
            'title' => 'Attributi',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Lista',
        ],
        'customers' => [
            'title' => 'Clienti',
            'list' => 'Elenco',
        ],
        'vendors' => [
            'title' => 'Penjual',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Daftar',
        ],
        'product_reviews' => [
            'title' => 'Recensioni Prodotti',
            'list' => 'Elenco',
        ],
        'banners' => [
            'title' => 'Banner',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'menu_items' => [
            'title' => 'Elementi del Menu',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'social_media_links' => [
            'title' => 'Link ai Social Media',
            'add_new' => 'Aggiungi Nuovo',
            'list' => 'Elenco',
        ],
        'site_settings' => [
            'title' => 'Impostazioni del Sito',
            'manage' => 'Gestisci Impostazioni',
        ],
        'orders' => [
            'title' => 'Ordini',
            'all_orders' => 'Tutti gli Ordini',
            'pending_orders' => 'Ordini in Attesa',
            'completed_orders' => 'Ordini Completati',
            'list' => 'Elenco',
        ],
        'pages' => [
            'title' => 'Pagine',
            'add_new' => 'Aggiungi nuovo',
            'list' => 'Elenco',
        ],
        'payments' => [
            'title' => 'Pagamenti',
            'list' => 'Elenco',
        ],

        'refunds' => [
            'title' => 'Rimborsi',
            'list' => 'Elenco',
        ],

        'payment_gateways' => [
            'title' => 'Gateway di Pagamento',
            'list' => 'Elenco',
        ],
    ],

    'profile' => [
        'title' => 'Modifica profilo',
        'choose_file' => 'Scegli file',
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefono',
        'current_password' => 'Password attuale',
        'new_password' => 'Nuova password',
        'confirm_new_password' => 'Conferma nuova password',
        'save' => 'Salva',
        'profile_updated' => 'Profilo aggiornato con successo!',
        'success' => 'Successo',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Gateway di Pagamento',
        'edit_title' => 'Modifica Gateway di Pagamento',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nome',
        'code' => 'Codice',
        'status' => 'Stato',
        'action' => 'Azione',

        // Status Labels
        'active' => 'Attivo',
        'inactive' => 'Inattivo',

        // Delete Modal
        'delete_confirm' => 'Conferma Eliminazione',
        'delete_message' => 'Sei sicuro di voler eliminare questo gateway di pagamento?',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',

        // Alerts / Notifications
        'success' => 'Successo',
        'deleted' => 'Eliminato',
        'delete_error' => 'Errore durante l\'eliminazione del gateway di pagamento!',

        // Form Labels
        'gateway_name' => 'Nome Gateway',
        'description' => 'Descrizione',
        'active_label' => 'Attivo',
        'configurations' => 'Configurazioni Gateway',
        'key_name' => 'Nome Chiave',
        'key_value' => 'Valore Chiave',
        'environment' => 'Ambiente',
        'sandbox' => 'Sandbox',
        'production' => 'Produzione',
        'encrypted' => 'Cifrato',
        'unique' => 'Unico',
        'update_button' => 'Aggiorna',

        // Fallback
        'not_available' => 'N/D',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Rimborsi',
        'details_title' => 'Dettagli del Rimborso',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Pagamento',
        'amount' => 'Importo',
        'status' => 'Stato',
        'reason' => 'Motivo',
        'action' => 'Azione',

        // Status Labels
        'completed' => 'Completato',
        'pending' => 'In attesa',
        'failed' => 'Fallito',

        // Delete Modal
        'delete_confirm' => 'Conferma eliminazione',
        'delete_message' => 'Sei sicuro di voler eliminare questo rimborso?',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',

        // Alerts / Notifications
        'success' => 'Successo',
        'deleted' => 'Eliminato',
        'delete_error' => 'Errore durante l\'eliminazione del rimborso!',

        // Refund Details Page
        'created_at' => 'Creato il',
        'updated_at' => 'Aggiornato il',
        'back' => 'Torna ai rimborsi',

        // Fallback
        'not_available' => 'Non disponibile',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Pagamenti',
        'details_title' => 'Dettagli del pagamento',

        // Table Headings
        'id' => 'ID',
        'order' => 'Ordine',
        'user' => 'Utente',
        'gateway' => 'Gateway di pagamento',
        'amount' => 'Importo',
        'status' => 'Stato',
        'transaction' => 'Transazione',
        'action' => 'Azione',

        // Status Labels
        'completed' => 'Completato',
        'pending' => 'In sospeso',
        'failed' => 'Fallito',

        // Delete Modal
        'delete_confirm' => 'Conferma eliminazione',
        'delete_message' => 'Sei sicuro di voler eliminare questo pagamento?',
        'cancel' => 'Annulla',
        'delete' => 'Elimina',

        // Alerts / Notifications
        'success' => 'Successo',
        'deleted' => 'Eliminato',
        'delete_error' => 'Errore durante l’eliminazione del pagamento!',

        // Payment Details Page
        'transaction_id' => 'ID Transazione',
        'created_at' => 'Creato il',
        'back' => 'Torna ai pagamenti',

        // Fallback
        'not_available' => 'Non disponibile',
    ],

    'pages' => [
        // General
        'title' => 'Pagine',
        'choose_file' => 'Scegli file',

        // Create Page
        'create' => 'Crea Pagina',
        'form_title' => 'Titolo (:code)',
        'form_content' => 'Contenuto (:code)',
        'form_image' => 'Immagine (:code)',
        'form_save' => 'Salva',

        // Edit Page
        'edit' => 'Modifica Pagina',
        'form_update' => 'Aggiorna',

        // Pages Table
        'table_title' => 'Titolo',
        'table_slug' => 'Slug',
        'table_status' => 'Stato',
        'table_actions' => 'Azioni',

        // Delete Modal
        'delete_modal_title' => 'Conferma Eliminazione',
        'delete_modal_text' => 'Sei sicuro di voler eliminare questa pagina?',
        'delete_modal_cancel' => 'Annulla',
        'delete_modal_delete' => 'Elimina',

        // Toastr messages
        'toastr_success' => 'Successo',
        'toastr_error' => 'Errore durante l\'eliminazione della pagina',
    ],

    'customers' => [
        'customer_list' => 'Elenco Clienti',

        // Table columns
        'id' => 'ID',
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefono',
        'address' => 'Indirizzo',
        'status' => 'Stato',
        'actions' => 'Azioni',

        // Status labels
        'active' => 'Attivo',
        'inactive' => 'Inattivo',

        // Modal
        'confirm_delete_title' => 'Conferma Eliminazione',
        'confirm_delete_message' => 'Sei sicuro di voler eliminare questo cliente?',
        'cancel_button' => 'Annulla',
        'delete_button' => 'Elimina',

        // Toastr messages
        'success_title' => 'Successo',
        'deleted_title' => 'Eliminato',
        'delete_success_message' => 'Cliente eliminato con successo!',
        'delete_error_message' => 'Errore durante l\'eliminazione del cliente!',
    ],

    'vendors' => [
        'title_list' => 'Elenco Fornitori',
        'id' => 'ID',
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefono',
        'status' => 'Stato',
        'actions' => 'Azioni',
        'register_new_vendor' => 'Registrare un nuovo venditore',
        'vendor_name' => 'Nome del venditore',
        'vendor_email' => 'Email del venditore',
        'phone_optional' => 'Telefono (opzionale)',
        'password' => 'Password',
        'confirm_password' => 'Conferma password',
        'status' => 'Stato',
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
        'banned' => 'Bloccato',
        'register_button' => 'Registrare venditore',
        'cancel_button' => 'Annulla',

        'active' => 'Attivo',
        'inactive' => 'Inattivo',

        'modal_confirm_delete_title' => 'Conferma Eliminazione',
        'modal_confirm_delete_body' => 'Sei sicuro di voler eliminare questo fornitore?',
        'delete' => 'Elimina',
        'cancel' => 'Annulla',

        'success' => 'Successo',
        'success_delete' => 'Fornitore eliminato con successo!',
        'error_delete' => 'Errore durante l\'eliminazione del fornitore! Riprova.',
    ],

    'languages' => [
        'english' => 'Inglese',
        'spanish' => 'Spagnolo',
        'french' => 'Francese',
        'arabic' => 'Arabo',
        'german' => 'Tedesco',
        'persian' => 'Persiano (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonesiano',
        'italian' => 'Italiano',
        'japanese' => 'Giapponese',
        'korean' => 'Coreano',
        'dutch' => 'Olandese',
        'polish' => 'Polacco',
        'portuguese' => 'Portoghese',
        'russian' => 'Russo',
        'thai' => 'Thailandese',
        'turkish' => 'Turco',
        'vietnamese' => 'Vietnamita',
        'chinese' => 'Cinese',

        'language_change' => 'Cambio Lingua',
        'change_language' => 'Cambia Lingua',
        'confirm_language_change' => 'Sei sicuro di voler cambiare lingua?',
        'cancel' => 'Annulla',
        'yes_change' => 'Sì, Cambia',
    ],

    'categories' => [
        'heading' => 'Categorie',
        'image' => 'Immagine',
        'choose_file' => 'Scegli file',
        'id' => 'ID',
        'name' => 'Nome della categoria',
        'description' => 'Descrizione',
        'action' => 'Azione',
        'edit' => 'Modifica',
        'delete' => 'Elimina',
        'button' => 'Salva',
        'add_new' => 'Aggiungi Nuovo',
        'status' => 'Stato',
        'created' => 'Categoria creata con successo!',
        'updated' => 'Categoria aggiornata con successo!',
        'deleted' => 'Categoria eliminata con successo!',
        'status_updated' => 'Stato della categoria aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questa categoria?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Elimina',
        'success' => 'Successo',
    ],

    'datatables' => [
        'sEmptyTable' => 'Nessun dato disponibile nella tabella',
        'sInfo' => 'Mostrando da _START_ a _END_ di _TOTAL_ voci',
        'sInfoEmpty' => 'Mostrando da 0 a 0 di 0 voci',
        'sInfoFiltered' => '(filtrato da _MAX_ voci totali)',
        'sLengthMenu' => 'Mostra _MENU_ voci',
        'sLoadingRecords' => 'Caricamento...',
        'sProcessing' => 'Elaborazione...',
        'sSearch' => 'Cerca:',
        'sZeroRecords' => 'Nessun record trovato',
        'oPaginate' => [
            'sFirst' => 'Primo',
            'sLast' => 'Ultimo',
            'sNext' => 'Successivo',
            'sPrevious' => 'Precedente',
        ],
    ],

    'products' => [

        // Titoli
        'title_create' => 'Crea Prodotto',
        'title_edit' => 'Modifica Prodotto',
        'title_manage' => 'Gestisci Prodotti',

        // Campi del modulo
        'vendor' => 'Fornitore',
        'select_vendor' => 'Seleziona Fornitore',
        'product_name' => 'Nome Prodotto',
        'product_type' => 'Tipo di Prodotto',
        'description' => 'Descrizione',
        'translations' => 'Traduzioni',
        'translated_value' => 'Valore Tradotto',
        'category' => 'Categoria',
        'brand' => 'Marca',
        'no_brand' => 'Nessuna Marca',
        'status' => 'Stato',
        'price' => 'Prezzo',
        'discount_price' => 'Prezzo Scontato',
        'sku' => 'SKU',
        'barcode' => 'Codice a Barre',
        'stock' => 'Scorte',
        'weight' => 'Peso',
        'dimension' => 'Dimensioni',
        'size' => 'Taglia',
        'color' => 'Colore',
        'images' => 'Immagini del Prodotto',
        'is_primary' => 'Variante Principale',
        'variant_name_en' => 'Nome Variante',
        'attributes' => 'Attributi',
        'attribute_values' => 'Valori degli Attributi',
        'variants' => 'Varianti',

        // Pulsanti
        'add_variant' => 'Aggiungi Variante',
        'remove_variant' => 'Rimuovi Variante',
        'save_product' => 'Salva Prodotto',
        'update_product' => 'Aggiorna Prodotto',
        'choose_images' => 'Scegli Immagini',
        'choose_file' => 'Scegli File',
        'remove' => 'Rimuovi',

        // Messaggi
        'status_updated' => 'Status produk berhasil diperbarui!',
        'success_create' => 'Prodotto creato con successo!',
        'success_update' => 'Prodotto aggiornato con successo!',
        'success_delete' => 'Prodotto eliminato con successo!',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questo prodotto?',
        'success' => 'Successo',

        // Colonne della tabella
        'id' => 'ID',
        'name' => 'Nome',
        'type' => 'Tipo',
        'price_column' => 'Prezzo',
        'status_column' => 'Stato',
        'action' => 'Azione',

        // Finestra di conferma
        'confirm_delete' => 'Conferma Eliminazione',
        'delete' => 'Elimina',
        'cancel' => 'Annulla',
    ],

    'brands' => [
        'heading' => 'Marche',
        'id' => 'ID',
        'name' => 'Nome della marca',
        'description' => 'Descrizione',
        'logo' => 'Logo',
        'status' => 'Stato',
        'action' => 'Azione',
        'edit' => 'Modifica',
        'delete' => 'Elimina',
        'create' => 'Crea',
        'update' => 'Aggiorna',
        'add_new' => 'Aggiungi nuovo',
        'button' => 'Salva',
        'form_title' => 'Crea o modifica una marca',
        'file_upload' => 'Carica logo',
        'no_logo' => 'Nessun logo',
        'choose_file' => 'Scegli un file',
        'image_preview' => 'Anteprima immagine',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questa marca?',
        'brand_deleted' => 'Marca eliminata con successo!',
        'error_delete' => 'Errore nell\'eliminazione della marca!',
        'created' => 'Marca creata con successo!',
        'updated' => 'Marca aggiornata con successo!',
        'deleted' => 'Marca eliminata con successo!',
        'status_updated' => 'Stato della marca aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questa marca?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Eliminare',
        'success' => 'Successo',
    ],

    'banners' => [
        'button_back' => 'Indietro',
        'description' => 'Descrizione',
        'choose_file' => 'Scegli file',
        'all_banners' => 'Tutti i banner',
        'id' => 'ID',
        'add_new' => 'Aggiungi nuovo',
        'banner_type' => 'Tipo di banner',
        'promotion' => 'Promozione',
        'sale' => 'Vendita',
        'seasonal' => 'Stagionale',
        'featured' => 'In evidenza',
        'announcement' => 'Annuncio',
        'actions' => 'Azioni',
        'edit' => 'Modifica',
        'delete' => 'Elimina',
        'no_image' => 'Nessuna immagine disponibile',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questo banner?',
        'banner_deleted' => 'Banner eliminato con successo!',
        'error_delete' => 'Errore nell\'eliminazione del banner!',
        'image_preview' => 'Anteprima immagine',
        'create_banner' => 'Crea banner',
        'edit_banner' => 'Modifica traduzioni del banner',
        'save' => 'Salva',
        'languages' => 'Lingue',
        'status' => 'Stato',
        'image' => 'Immagine',
        'image_title' => 'Titolo immagine',
        'title' => 'Titolo',
        'select_language' => 'Seleziona lingua',
        'file_upload' => 'Carica immagine',
        'choose_file' => 'Scegli file',
        'existing_image' => 'Immagine esistente',
        'banner_saved' => 'Banner salvato con successo!',
        'banner_updated' => 'Banner aggiornato con successo!',
        'form_title' => 'Crea o modifica il banner',
        'form_description' => 'Si prega di fornire tutte le informazioni necessarie per il banner.',
        'back_to_list' => 'Torna alla lista dei banner',
        'created' => 'Banner creato con successo!',
        'updated' => 'Banner aggiornato con successo!',
        'deleted' => 'Banner eliminato con successo!',
        'status_updated' => 'Stato del banner aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo banner?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Eliminare',
        'success' => 'Successo',
    ],

    'menus' => [
        'all_menus' => 'Tutti i Menu',
        'id' => 'ID',
        'add_new' => 'Aggiungi Nuovo',
        'button_create' => 'Crea',
        'button_update' => 'Aggiorna',
        'title' => 'Titolo',
        'edit' => 'Modifica',
        'action' => 'Azione',
        'delete' => 'Elimina',
        'created_at' => 'Creato il',
        'no_menus' => 'Nessun menu disponibile',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questo menu?',
        'menu_deleted' => 'Menu eliminato con successo!',
        'error_delete' => 'Errore nell\'eliminazione del menu!',
        'create_menu' => 'Crea Menu',
        'edit_menu' => 'Modifica Menu',
        'save' => 'Salva',
        'menu_title' => 'Titolo del Menu',
        'form_title' => 'Crea o Modifica Menu',
        'form_description' => 'Si prega di fornire tutte le informazioni necessarie per il menu.',
        'back_to_list' => 'Torna alla lista dei menu',
        'created' => 'Menu creato con successo!',
        'updated' => 'Menu aggiornato con successo!',
        'deleted' => 'Menu eliminato con successo!',
        'status_updated' => 'Stato del menu aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo menu?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Elimina',
        'success' => 'Successo',
    ],

    'menu_items' => [
        'heading' => 'Tutti gli Elementi del Menu',
        'id' => 'ID',
        'create' => 'Crea Elemento del Menu',
        'choose_an_option' => 'Scegli un\'Opzione',
        'select_an_option' => 'Seleziona un\'Opzione',
        'option1' => 'Opzione 1',
        'option2' => 'Opzione 2',
        'option3' => 'Opzione 3',
        'option4' => 'Opzione 4',
        'order_number' => 'Numero di Ordine',
        'parent_item' => 'Elemento Principale',
        'parent_none' => 'Nessuno',
        'edit' => 'Modifica Elemento del Menu',
        'update' => 'Aggiorna Elemento del Menu',
        'delete' => 'Elimina Elemento del Menu',
        'title' => 'Titolo',
        'button' => 'Salva',
        'update_button' => 'Aggiorna',
        'slug' => 'Slug',
        'order' => 'Ordine',
        'actions' => 'Azioni',
        'add_new' => 'Aggiungi Nuovo',
        'submit' => 'Invia',
        'cancel' => 'Annulla',
        'no_title' => 'Nessun Titolo',
        'select_menu' => 'Seleziona un Menu',
        'select_parent_item' => 'Seleziona Elemento Principale',
        'language' => 'Lingua',
        'select_language' => 'Seleziona Lingua',
        'select_order' => 'Seleziona Ordine',
        'success_message' => 'Elemento del menu creato con successo!',
        'error_message' => 'C\'è stato un errore nella creazione dell\'elemento del menu.',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo elemento del menu?',
        'update_success_message' => 'Elemento del menu aggiornato con successo!',
        'update_error_message' => 'C\'è stato un errore nell\'aggiornare l\'elemento del menu.',
        'created' => 'Elemento del menu creato con successo!',
        'updated' => 'Elemento del menu aggiornato con successo!',
        'deleted' => 'Elemento del menu eliminato con successo!',
        'status_updated' => 'Stato dell\'elemento del menu aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo elemento del menu?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Elimina',
        'success' => 'Successo',

    ],
    'errors' => [
        'validation_failed' => 'Validazione fallita! Per favore correggi gli errori e riprova.',
        'csrf_token_invalid' => 'Token CSRF non valido. Per favore aggiorna la pagina e riprova.',
        'not_found' => 'L\'elemento richiesto non è stato trovato.',
        'unauthorized' => 'Non sei autorizzato a eseguire questa azione.',
    ],
    'messages' => [
        'welcome' => 'Benvenuto nel Pannello di Amministrazione!',
        'dashboard' => 'Dashboard',
        'settings' => 'Impostazioni',
        'log_out' => 'Esci',
        'profile' => 'Profilo',
        'menu' => 'Menu',
        'home' => 'Home',
        'view_details' => 'Visualizza Dettagli',
    ],

    'social_media_links' => [
        'type' => 'Tipo di social network',
        'select_type' => 'Seleziona il tipo di social network',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Crea Link Social Media',
        'edit' => 'Modifica Link Social Media',
        'platform' => 'Nome della piattaforma',
        'link' => 'Link Social Media',
        'created' => 'Link dei social media creato con successo!',
        'updated' => 'Link dei social media aggiornato con successo!',
        'deleted' => 'Link dei social media eliminato con successo!',
        'status_updated' => 'Stato del link dei social media aggiornato con successo!',
        'massage_confirm' => 'Conferma eliminazione',
        'confirm_delete' => 'Sei sicuro di voler eliminare questo link dei social media?',
        'massage_cancel' => 'Annulla',
        'massage_delete' => 'Elimina',
        'success' => 'Successo',

        'translations' => [
            'platform_name' => 'Nome della piattaforma (tradotto)',
        ],
        'save' => 'Salva',
        'update' => 'Aggiorna',
        'delete' => 'Elimina',
        'no_links' => 'Nessun Link Social Media disponibile',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questo link?',
        'link_deleted' => 'Link Social Media eliminato con successo!',
        'error_delete' => 'Errore nell\'eliminazione del link!',
        'create_link' => 'Crea Link Social Media',
        'edit_link' => 'Modifica Link Social Media',
        'form_title' => 'Crea o Modifica Link Social Media',
        'form_description' => 'Si prega di fornire tutte le informazioni necessarie per il link social media.',
        'back_to_list' => 'Torna alla lista dei Link Social Media',
        'add_new' => 'Aggiungi Nuovo',
        'trans_name' => 'Nome Tradotto',
        'delete' => 'Elimina',
        'action' => 'Azione',
    ],

    'orders' => [

        // Page Title
        'title' => 'Elenco Ordini',

        // Table Headings
        'id' => 'ID Ordine',
        'order_date' => 'Data Ordine',
        'status' => 'Stato',
        'total_price' => 'Prezzo Totale',
        'action' => 'Azioni',
        'customer' => 'Cliente',

        // Delete Modal
        'delete_confirm_title' => 'Conferma Eliminazione',
        'delete_confirm_message' => 'Sei sicuro di voler eliminare questo ordine?',
        'delete_cancel' => 'Annulla',
        'delete_button' => 'Elimina',

        // Toastr / Flash Messages
        'deleted_success' => 'Ordine eliminato con successo.',
        'deleted_error' => 'Impossibile eliminare l\'ordine.',
        'deleted' => 'Eliminato',
        'success' => 'Successo',
    ],

    'attributes' => [
        'title_create' => 'Crea Attributo',
        'title_edit' => 'Modifica Attributo',
        'title_manage' => 'Gestisci Attributi',

        'attribute_name' => 'Nome Attributo',
        'attribute_values' => 'Valori Attributo',
        'translations' => 'Traduzioni',
        'translated_value' => 'Valore Tradotto',

        'add_value' => 'Aggiungi Valore',
        'remove_value' => 'Rimuovi',
        'save_attribute' => 'Salva Attributo',
        'update_attribute' => 'Aggiorna Attributo',
        'add_value_translation' => 'Aggiungi Traduzione del Valore',

        'success_create' => 'Attributo creato con successo!',
        'success_update' => 'Attributo aggiornato con successo!',
        'success_delete' => 'Attributo eliminato con successo!',
        'delete_confirmation' => 'Sei sicuro di voler eliminare questo attributo?',
        'success' => 'Successo',

        'id' => 'ID',
        'name' => 'Nome',
        'values' => 'Valori',
        'action' => 'Azione',

        'confirm_delete' => 'Conferma Eliminazione',
        'delete' => 'Elimina',
        'cancel' => 'Annulla',
    ],

    'product_reviews' => [
        'title_manage' => 'Gestione delle recensioni dei prodotti',

        'review_id' => 'ID Recensione',
        'customer_name' => 'Nome Cliente',
        'product_name' => 'Nome Prodotto',
        'rating' => 'Valutazione',
        'status' => 'Stato',
        'actions' => 'Azioni',
        'review_details' => 'Dettagli della recensione',
        'review' => 'Recensione',
        'back_button' => 'Torna alla lista',

        'confirm_delete' => 'Conferma Eliminazione',
        'delete_message' => 'Sei sicuro di voler eliminare questa recensione del prodotto?',
        'delete' => 'Elimina',
        'cancel' => 'Annulla',

        'success_create' => 'Recensione del prodotto creata con successo!',
        'success_update' => 'Recensione del prodotto aggiornata con successo!',
        'success_delete' => 'Recensione del prodotto eliminata con successo!',
        'error_delete' => 'Errore durante l\'eliminazione della recensione del prodotto! Riprova.',

        'success' => 'Successo',
        'error' => 'Errore',
    ],

];
