<?php

return [
    'header' => [
        'top_bar_message' => 'Spedizione gratuita per ordini superiori a $50 | Supporto | Trova negozi',
        'search_placeholder' => 'Cerca un prodotto',
    ],

    'footer' => [
        'account' => 'Account',
        'my_account' => 'Il mio account',
        'wishlist' => 'Lista dei desideri',
        'pages' => 'Pagine',
        'privacy_policy' => 'Politica sulla privacy',
        'terms_of_service' => 'Termini di servizio',
        'follow_us' => 'Seguici',
        'footer_logo_alt' => 'Logo del footer Velstore',
        'copyright' => '© 2025 Velstore Demo. Tutti i diritti riservati.',
        'powered_by' => 'Sviluppato da Velstore Labs',
    ],

    'product_detail' => [
        'home' => 'Home',
        'in_stock' => 'DISPONIBILE',
        'out_of_stock' => 'ESAURITO',
        'customer_reviews' => 'Recensioni dei clienti',
        'no_reviews' => 'Non ci sono ancora recensioni per questo prodotto.',
        'no_review_text' => 'Nessuna recensione scritta.',
        'average_rating' => 'Valutazione media',
        'days_ago' => '{1} :days giorno fa|[2,*] :days giorni fa',
        'description' => 'Descrizione',
        'reviews' => 'Recensioni',
        'add_to_cart' => 'Aggiungi al carrello',
        'increase_quantity' => 'Aumenta quantità',
        'decrease_quantity' => 'Diminuisci quantità',
        'selected_variant_not' => 'La variante selezionata non è disponibile.',
        'fetch_variant_failed' => 'Impossibile recuperare il prezzo della variante.',
        'ajax_error' => 'Qualcosa è andato storto. Riprova.',
        'currency_symbol' => 'Valuta',
        'cart_success' => 'Prodotto aggiunto con successo al carrello.',
        'cart_update_error' => 'Impossibile aggiornare il carrello. Riprova.',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'Home',
        'breadcrumb_cart' => 'Carrello',

        // Cart messages
        'empty_cart' => 'Il tuo carrello è vuoto.',
        'continue_shopping' => 'Continua a fare acquisti',
        'update_cart' => 'Aggiorna carrello',

        // Table headings
        'product' => 'Prodotto',
        'price' => 'Prezzo',
        'quantity' => 'Quantità',
        'subtotal' => 'Subtotale',

        // Cart totals section
        'cart_totals' => 'Totale carrello',
        'subtotal_label' => 'Subtotale',
        'discount_label' => 'Sconto',
        'total_label' => 'Totale',
        'proceed_to_checkout' => 'Procedi al pagamento',

        // Coupon section
        'coupon_heading' => 'Coupon',
        'coupon_placeholder' => 'Codice coupon',
        'apply_coupon' => 'Applica coupon',
        'remove_coupon' => 'Rimuovi coupon',

        // Toast messages
        'coupon_applied' => 'Coupon applicato con successo!',
        'coupon_removed' => 'Coupon rimosso con successo!',
        'cart_updated' => 'Carrello aggiornato con successo!',
        'item_removed' => 'Articolo rimosso dal carrello.',
        'error_occurred' => 'Si è verificato un errore. Riprova.',
        'product_removed' => 'Prodotto rimosso dal carrello.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'Home',
        'breadcrumb_category' => 'Cuffie',
        'breadcrumb_checkout' => 'Checkout',

        // Section titles
        'shipping_information' => 'Informazioni di Spedizione',
        'contact_information' => 'Informazioni di Contatto',
        'payment_method' => 'Metodo di Pagamento',
        'order_summary' => 'Riepilogo Ordine',

        // Shipping form placeholders
        'first_name' => 'Nome',
        'last_name' => 'Cognome',
        'address' => 'Indirizzo',
        'suite' => 'Appartamento/Piano',
        'select_country' => 'Seleziona Paese',
        'city' => 'Città',
        'select_state' => 'Seleziona Stato',
        'zipcode' => 'CAP',
        'use_as_billing' => 'Usa come indirizzo di fatturazione',

        // Contact form placeholders
        'email' => 'Email',
        'phone' => 'Telefono',

        // Payment
        'select_payment' => 'Seleziona un metodo di pagamento',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => 'Subtotale',
        'shipping' => 'Spedizione',
        'shipping_info' => 'Inserisci il tuo indirizzo per visualizzare la spedizione',
        'total' => 'Totale',
        'proceed' => 'Procedi',
        'place_order' => 'Effettua Ordine',

        // Toast / messages
        'order_success' => 'Il tuo ordine è stato effettuato con successo!',
        'order_failed' => 'Si è verificato un errore. Riprova.',
        'payment_required' => 'Seleziona un metodo di pagamento prima di continuare.',
        'paypal_instructions' => 'Completa il pagamento utilizzando il pulsante PayPal.',
    ],
];
