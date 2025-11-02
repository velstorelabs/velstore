<?php

return [
    'header' => [
        'top_bar_message' => 'Livraison gratuite pour les commandes de plus de 50 $ | Support | Localisateur de magasins',
        'search_placeholder' => 'Rechercher un produit',
    ],

    'footer' => [
        'account' => 'Compte',
        'my_account' => 'Mon compte',
        'wishlist' => 'Liste de souhaits',
        'pages' => 'Pages',
        'privacy_policy' => 'Politique de confidentialité',
        'terms_of_service' => 'Conditions d\'utilisation',
        'follow_us' => 'Suivez-nous',
        'footer_logo_alt' => 'Logo du pied de page Velstore',
        'copyright' => '© 2025 Démo Velstore. Tous droits réservés.',
        'powered_by' => 'Propulsé par Velstore Labs',
    ],

    'product_detail' => [
        'home' => 'Accueil',
        'in_stock' => 'EN STOCK',
        'out_of_stock' => 'RUPTURE DE STOCK',
        'customer_reviews' => 'Avis des clients',
        'no_reviews' => 'Aucun avis pour ce produit pour le moment.',
        'no_review_text' => 'Aucun avis rédigé.',
        'average_rating' => 'Note moyenne',
        'days_ago' => '{1} il y a :days jour|[2,*] il y a :days jours',
        'description' => 'Description',
        'reviews' => 'Avis',
        'add_to_cart' => 'Ajouter au panier',
        'increase_quantity' => 'Augmenter la quantité',
        'decrease_quantity' => 'Diminuer la quantité',
        'selected_variant_not' => 'La variante sélectionnée n’est pas disponible.',
        'fetch_variant_failed' => 'Impossible de récupérer le prix de la variante.',
        'ajax_error' => 'Une erreur est survenue. Veuillez réessayer.',
        'currency_symbol' => 'Devise',
        'cart_success' => 'Produit ajouté au panier avec succès.',
        'cart_update_error' => 'Impossible de mettre à jour le panier. Veuillez réessayer.',
        'submit_review_title' => 'Soumettre votre avis',
        'review_optional' => 'Avis (optionnel)',
        'submit_review_btn' => 'Envoyer l’avis',
        'please' => 'Veuillez',
        'login' => 'Connexion',
        'customer' => 'Client',
        'submit' => 'pour soumettre un avis.',
        'no_reviews_yet' => 'Aucun avis pour ce produit pour le moment.',
        'no_review_text' => 'Aucun avis écrit.',
        'day' => 'jour',
        'days' => 'jours',
        'ago' => 'il y a',
        'average_rating' => 'Note moyenne',
        'variant_not_available' => 'La variante sélectionnée n’est pas disponible.',
        'something_wrong' => 'Une erreur est survenue. Veuillez réessayer.',
        'added_to_wishlist' => 'Ajouté aux favoris ❤️',
        'removed_from_wishlist' => 'Retiré des favoris 💔',
        'login_to_wishlist' => 'Veuillez vous connecter pour gérer vos favoris.',
        'review_already_submitted' => 'Vous avez déjà donné votre avis sur ce produit.',
        'review_success' => 'Merci ! Votre avis est maintenant visible.',
    ],

    'cart' => [

        // Breadcrumb
        'breadcrumb_home' => 'Accueil',
        'breadcrumb_cart' => 'Panier',

        // Cart messages
        'empty_cart' => 'Votre panier est vide.',
        'continue_shopping' => 'Continuer vos achats',
        'update_cart' => 'Mettre à jour le panier',

        // Table headings
        'product' => 'Produit',
        'price' => 'Prix',
        'quantity' => 'Quantité',
        'subtotal' => 'Sous-total',

        // Cart totals section
        'cart_totals' => 'Total du panier',
        'subtotal_label' => 'Sous-total',
        'discount_label' => 'Remise',
        'total_label' => 'Total',
        'proceed_to_checkout' => 'Passer à la caisse',

        // Coupon section
        'coupon_heading' => 'Code promo',
        'coupon_placeholder' => 'Code promo',
        'apply_coupon' => 'Appliquer le code promo',
        'remove_coupon' => 'Supprimer le code promo',

        // Toast messages
        'coupon_applied' => 'Code promo appliqué avec succès !',
        'coupon_removed' => 'Code promo supprimé avec succès !',
        'cart_updated' => 'Panier mis à jour avec succès !',
        'item_removed' => 'Article supprimé du panier.',
        'error_occurred' => 'Une erreur est survenue. Veuillez réessayer.',
        'product_removed' => 'Produit supprimé du panier.',
    ],

    'checkout' => [

        // Breadcrumb
        'breadcrumb_home' => 'Page d’accueil',
        'breadcrumb_category' => 'Casque audio',
        'breadcrumb_checkout' => 'Paiement',

        // Section titles
        'shipping_information' => 'Informations de livraison',
        'contact_information' => 'Informations de contact',
        'payment_method' => 'Méthode de paiement',
        'order_summary' => 'Récapitulatif de la commande',

        // Shipping form placeholders
        'first_name' => 'Prénom',
        'last_name' => 'Nom de famille',
        'address' => 'Adresse',
        'suite' => 'Appartement / Étage',
        'select_country' => 'Sélectionnez un pays',
        'city' => 'Ville',
        'select_state' => 'Sélectionnez une région',
        'zipcode' => 'Code postal',
        'use_as_billing' => 'Utiliser comme adresse de facturation',

        // Contact form placeholders
        'email' => 'E-mail',
        'phone' => 'Téléphone',

        // Payment
        'select_payment' => 'Sélectionnez une méthode de paiement',
        'stripe' => 'Stripe',
        'paypal' => 'PayPal',

        // Summary labels
        'subtotal' => 'Sous-total',
        'shipping' => 'Livraison',
        'shipping_info' => 'Entrez votre adresse pour voir les frais de livraison',
        'total' => 'Total',
        'proceed' => 'Continuer',
        'place_order' => 'Passer la commande',

        // Toast / messages
        'order_success' => 'Votre commande a été passée avec succès !',
        'order_failed' => 'Une erreur s’est produite. Veuillez réessayer.',
        'payment_required' => 'Veuillez sélectionner une méthode de paiement avant de continuer.',
        'paypal_instructions' => 'Veuillez effectuer le paiement à l’aide du bouton PayPal.',
    ],

    'profile' => [
        'title' => 'Modifier le profil',
        'choose_file' => 'Choisir un fichier',
        'name' => 'Nom',
        'email' => 'E-mail',
        'phone' => 'Téléphone',
        'address' => 'Adresse',
        'current_password' => 'Mot de passe actuel',
        'new_password' => 'Nouveau mot de passe',
        'confirm_new_password' => 'Confirmer le nouveau mot de passe',
        'save' => 'Enregistrer',
        'success' => 'Succès',
        'profile_updated' => 'Profil mis à jour avec succès.',
    ],

    'category' => [
        'home' => 'Accueil',
        'min_price' => 'Prix minimum',
        'max_price' => 'Prix maximum',
        'sort_by' => 'Trier par',
        'newest' => 'Le plus récent',
        'price_low_high' => 'Prix : du plus bas au plus élevé',
        'price_high_low' => 'Prix : du plus élevé au plus bas',
        'top_rated' => 'Les mieux notés',
        'filter' => 'Filtrer',
        'reviews' => 'Avis',
        'product_name_not_available' => 'Nom du produit non disponible',
        'no_products_found' => 'Aucun produit trouvé dans cette catégorie.',
        'add_to_cart_success' => 'Ajouté au panier avec succès !',
    ],

    'wishlist' => [
        'title' => 'Ma liste de souhaits',
        'empty' => 'Votre liste de souhaits est vide.',
        'reviews' => 'Avis',
        'add_to_cart' => 'Ajouter au panier',
    ],
];
