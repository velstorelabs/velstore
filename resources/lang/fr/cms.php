<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Se connecter',
        'email' => 'Adresse e-mail',
        'password' => 'Mot de passe',
        'remember_me' => 'Se souvenir de moi',
        'forgot_password' => 'Mot de passe oublié ?',
    ],

    'profile' => [
        'profile' => 'Profil',
        'setting' => 'Paramètres',
        'logout' => 'Déconnexion',
    ],

    'dashboard' => [
        'total_sales' => 'Ventes Totales',
        'today' => 'Aujourd’hui',
        'total' => 'Total',

        'total_orders' => 'Total des Commandes',
        'completed' => 'Terminé',
        'all_orders' => 'Toutes les Commandes',

        'total_vendors' => 'Total des Vendeurs',
        'active' => 'Actif',

        'total_customers' => 'Total des Clients',

        'my_sales' => 'Mes Ventes',
        'my_orders' => 'Mes Commandes',
        'my_products' => 'Mes Produits',
    ],

    'sidebar' => [
        'search_placeholder' => 'Rechercher...',
        'dashboard' => 'Tableau de bord',
        'logo' => 'Logo',

        'categories' => [
            'title' => 'Catégories',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'brands' => [
            'title' => 'Marques',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'products' => [
            'title' => 'Produits',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'attributes' => [
            'title' => 'Attributs',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'customers' => [
            'title' => 'Clients',
            'list' => 'Liste',
        ],
        'vendors' => [
            'title' => 'Vendeurs',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'product_reviews' => [
            'title' => 'Avis sur les produits',
            'list' => 'Liste',
        ],
        'banners' => [
            'title' => 'Bannières',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'menu_items' => [
            'title' => 'Éléments du menu',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'social_media_links' => [
            'title' => 'Liens des réseaux sociaux',
            'add_new' => 'Ajouter nouveau',
            'list' => 'Liste',
        ],
        'site_settings' => [
            'title' => 'Paramètres du site',
            'manage' => 'Gérer les paramètres',
        ],
        'orders' => [
            'title' => 'Commandes',
            'all_orders' => 'Toutes les commandes',
            'pending_orders' => 'Commandes en attente',
            'completed_orders' => 'Commandes terminées',
            'list' => 'Liste',
        ],
        'pages' => [
            'title' => 'Pages',
            'add_new' => 'Ajouter',
            'list' => 'Liste',
        ],
        'payments' => [
            'title' => 'Paiements',
            'list' => 'Liste',
        ],

        'refunds' => [
            'title' => 'Remboursements',
            'list' => 'Liste',
        ],

        'payment_gateways' => [
            'title' => 'Passerelles de paiement',
            'list' => 'Liste',
        ],
    ],

    'profile' => [
        'title' => 'Modifier le profil',
        'choose_file' => 'Choisir un fichier',
        'name' => 'Nom',
        'email' => 'E-mail',
        'phone' => 'Téléphone',
        'current_password' => 'Mot de passe actuel',
        'new_password' => 'Nouveau mot de passe',
        'confirm_new_password' => 'Confirmer le nouveau mot de passe',
        'save' => 'Enregistrer',
        'profile_updated' => 'Profil mis à jour avec succès !',
        'success' => 'Succès',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Passerelles de paiement',
        'edit_title' => 'Modifier la passerelle de paiement',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nom',
        'code' => 'Code',
        'status' => 'Statut',
        'action' => 'Action',

        // Status Labels
        'active' => 'Actif',
        'inactive' => 'Inactif',

        // Delete Modal
        'delete_confirm' => 'Confirmer la suppression',
        'delete_message' => 'Êtes-vous sûr de vouloir supprimer cette passerelle de paiement ?',
        'cancel' => 'Annuler',
        'delete' => 'Supprimer',

        // Alerts / Notifications
        'success' => 'Succès',
        'deleted' => 'Supprimé',
        'delete_error' => 'Erreur lors de la suppression de la passerelle de paiement !',

        // Form Labels
        'gateway_name' => 'Nom de la passerelle',
        'description' => 'Description',
        'active_label' => 'Actif',
        'configurations' => 'Configurations de la passerelle',
        'key_name' => 'Nom de la clé',
        'key_value' => 'Valeur de la clé',
        'environment' => 'Environnement',
        'sandbox' => 'Sandbox',
        'production' => 'Production',
        'encrypted' => 'Crypté',
        'unique' => 'Unique',
        'update_button' => 'Mettre à jour',

        // Fallback
        'not_available' => 'N/A',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Remboursements',
        'details_title' => 'Détails du remboursement',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Paiement',
        'amount' => 'Montant',
        'status' => 'Statut',
        'reason' => 'Raison',
        'action' => 'Action',

        // Status Labels
        'completed' => 'Terminé',
        'pending' => 'En attente',
        'failed' => 'Échoué',

        // Delete Modal
        'delete_confirm' => 'Confirmer la suppression',
        'delete_message' => 'Êtes-vous sûr de vouloir supprimer ce remboursement ?',
        'cancel' => 'Annuler',
        'delete' => 'Supprimer',

        // Alerts / Notifications
        'success' => 'Succès',
        'deleted' => 'Supprimé',
        'delete_error' => 'Erreur lors de la suppression du remboursement !',

        // Refund Details Page
        'created_at' => 'Créé le',
        'updated_at' => 'Mis à jour le',
        'back' => 'Retour aux remboursements',

        // Fallback
        'not_available' => 'Non disponible',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Paiements',
        'details_title' => 'Détails du paiement',

        // Table Headings
        'id' => 'ID',
        'order' => 'Commande',
        'user' => 'Utilisateur',
        'gateway' => 'Passerelle de paiement',
        'amount' => 'Montant',
        'status' => 'Statut',
        'transaction' => 'Transaction',
        'action' => 'Action',

        // Status Labels
        'completed' => 'Terminé',
        'pending' => 'En attente',
        'failed' => 'Échoué',

        // Delete Modal
        'delete_confirm' => 'Confirmer la suppression',
        'delete_message' => 'Êtes-vous sûr de vouloir supprimer ce paiement ?',
        'cancel' => 'Annuler',
        'delete' => 'Supprimer',

        // Alerts / Notifications
        'success' => 'Succès',
        'deleted' => 'Supprimé',
        'delete_error' => 'Erreur lors de la suppression du paiement !',

        // Payment Details Page
        'transaction_id' => 'ID de transaction',
        'created_at' => 'Créé le',
        'back' => 'Retour aux paiements',

        // Fallback
        'not_available' => 'Non disponible',
    ],

    'pages' => [
        // General
        'title' => 'Pages',
        'choose_file' => 'Choisir un fichier',

        // Create Page
        'create' => 'Créer une page',
        'form_title' => 'Titre (:code)',
        'form_content' => 'Contenu (:code)',
        'form_image' => 'Image (:code)',
        'form_save' => 'Enregistrer',

        // Edit Page
        'edit' => 'Modifier la page',
        'form_update' => 'Mettre à jour',

        // Pages Table
        'table_title' => 'Titre',
        'table_slug' => 'Slug',
        'table_status' => 'Statut',
        'table_actions' => 'Actions',

        // Delete Modal
        'delete_modal_title' => 'Confirmer la suppression',
        'delete_modal_text' => 'Êtes-vous sûr de vouloir supprimer cette page ?',
        'delete_modal_cancel' => 'Annuler',
        'delete_modal_delete' => 'Supprimer',

        // Toastr messages
        'toastr_success' => 'Succès',
        'toastr_error' => 'Erreur lors de la suppression de la page',
    ],

    'customers' => [
        'customer_list' => 'Liste des clients',

        // Table columns
        'id' => 'ID',
        'name' => 'Nom',
        'email' => 'Email',
        'phone' => 'Téléphone',
        'address' => 'Adresse',
        'status' => 'Statut',
        'actions' => 'Actions',

        // Status labels
        'active' => 'Actif',
        'inactive' => 'Inactif',

        // Modal
        'confirm_delete_title' => 'Confirmer la suppression',
        'confirm_delete_message' => 'Êtes-vous sûr de vouloir supprimer ce client ?',
        'cancel_button' => 'Annuler',
        'delete_button' => 'Supprimer',

        // Toastr messages
        'success_title' => 'Succès',
        'deleted_title' => 'Supprimé',
        'delete_success_message' => 'Client supprimé avec succès !',
        'delete_error_message' => 'Erreur lors de la suppression du client !',
    ],

    'vendors' => [
        'title_list' => 'Liste des vendeurs',
        'id' => 'ID',
        'name' => 'Nom',
        'email' => 'Email',
        'phone' => 'Téléphone',
        'status' => 'Statut',
        'actions' => 'Actions',
        'register_new_vendor' => 'Enregistrer un nouveau vendeur',
        'vendor_name' => 'Nom du vendeur',
        'vendor_email' => 'E-mail du vendeur',
        'phone_optional' => 'Téléphone (optionnel)',
        'password' => 'Mot de passe',
        'confirm_password' => 'Confirmer le mot de passe',
        'status' => 'Statut',
        'active' => 'Actif',
        'inactive' => 'Inactif',
        'banned' => 'Banni',
        'register_button' => 'Enregistrer le vendeur',
        'cancel_button' => 'Annuler',

        'active' => 'Actif',
        'inactive' => 'Inactif',

        'modal_confirm_delete_title' => 'Confirmer la suppression',
        'modal_confirm_delete_body' => 'Êtes-vous sûr de vouloir supprimer ce vendeur ?',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',

        'success' => 'Succès',
        'success_delete' => 'Vendeur supprimé avec succès !',
        'error_delete' => 'Erreur lors de la suppression du vendeur ! Veuillez réessayer.',
    ],

    'languages' => [
        'english' => 'Anglais',
        'spanish' => 'Espagnol',
        'french' => 'Français',
        'arabic' => 'Arabe',
        'german' => 'Allemand',
        'persian' => 'Persan (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonésien',
        'italian' => 'Italien',
        'japanese' => 'Japonais',
        'korean' => 'Coréen',
        'dutch' => 'Néerlandais',
        'polish' => 'Polonais',
        'portuguese' => 'Portugais',
        'russian' => 'Russe',
        'thai' => 'Thaïlandais',
        'turkish' => 'Turc',
        'vietnamese' => 'Vietnamien',
        'chinese' => 'Chinois',

        'language_change' => 'Changement de langue',
        'change_language' => 'Changer de langue',
        'confirm_language_change' => 'Êtes-vous sûr de vouloir changer la langue ?',
        'cancel' => 'Annuler',
        'yes_change' => 'Oui, changer',
    ],

    'categories' => [
        'heading' => 'Catégories',
        'image' => 'Image',
        'choose_file' => 'Choisir un fichier',
        'id' => 'ID',
        'name' => 'Nom de la catégorie',
        'description' => 'Description',
        'action' => 'Action',
        'edit' => 'Éditer',
        'delete' => 'Supprimer',
        'button' => 'Enregistrer',
        'add_new' => 'Ajouter Nouveau',
        'status' => 'Statut',
        'created' => 'Catégorie créée avec succès !',
        'updated' => 'Catégorie mise à jour avec succès !',
        'deleted' => 'Catégorie supprimée avec succès !',
        'status_updated' => 'Statut de la catégorie mis à jour avec succès !',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cette catégorie ?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',
    ],

    'datatables' => [
        'sEmptyTable' => 'Aucune donnée disponible dans la table',
        'sInfo' => 'Affichage de _START_ à _END_ sur _TOTAL_ entrées',
        'sInfoEmpty' => 'Affichage de 0 à 0 sur 0 entrées',
        'sInfoFiltered' => '(filtré à partir de _MAX_ entrées au total)',
        'sLengthMenu' => 'Afficher _MENU_ entrées',
        'sLoadingRecords' => 'Chargement...',
        'sProcessing' => 'Traitement...',
        'sSearch' => 'Recherche:',
        'sZeroRecords' => 'Aucun enregistrement correspondant trouvé',
        'oPaginate' => [
            'sFirst' => 'Premier',
            'sLast' => 'Dernier',
            'sNext' => 'Suivant',
            'sPrevious' => 'Précédent',
        ],
    ],

    'products' => [

        // Titres
        'title_create' => 'Créer un produit',
        'title_edit' => 'Modifier le produit',
        'title_manage' => 'Gérer les produits',

        // Champs du formulaire
        'vendor' => 'Vendeur',
        'select_vendor' => 'Sélectionner un vendeur',
        'product_name' => 'Nom du produit',
        'product_type' => 'Type de produit',
        'description' => 'Description',
        'translations' => 'Traductions',
        'translated_value' => 'Valeur traduite',
        'category' => 'Catégorie',
        'brand' => 'Marque',
        'no_brand' => 'Pas de marque',
        'status' => 'Statut',
        'price' => 'Prix',
        'discount_price' => 'Prix réduit',
        'sku' => 'SKU',
        'barcode' => 'Code-barres',
        'stock' => 'Stock',
        'weight' => 'Poids',
        'dimension' => 'Dimensions',
        'size' => 'Taille',
        'color' => 'Couleur',
        'images' => 'Images du produit',
        'is_primary' => 'Variante principale',
        'variant_name_en' => 'Nom de la variante',
        'attributes' => 'Attributs',
        'attribute_values' => 'Valeurs d’attribut',
        'variants' => 'Variantes',

        // Boutons
        'add_variant' => 'Ajouter une variante',
        'remove_variant' => 'Supprimer la variante',
        'save_product' => 'Enregistrer le produit',
        'update_product' => 'Mettre à jour le produit',
        'choose_images' => 'Choisir des images',
        'choose_file' => 'Choisir un fichier',
        'remove' => 'Supprimer',

        // Messages
        'status_updated' => 'Statut du produit mis à jour avec succès !',
        'success_create' => 'Produit créé avec succès !',
        'success_update' => 'Produit mis à jour avec succès !',
        'success_delete' => 'Produit supprimé avec succès !',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer ce produit ?',
        'success' => 'Succès',

        // Colonnes de tableau
        'id' => 'ID',
        'name' => 'Nom',
        'type' => 'Type',
        'price_column' => 'Prix',
        'status_column' => 'Statut',
        'action' => 'Action',

        // Boîte de dialogue de confirmation
        'confirm_delete' => 'Confirmer la suppression',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
    ],

    'brands' => [
        'heading' => 'Marques',
        'id' => 'ID',
        'name' => 'Nom de la marque',
        'description' => 'Description',
        'logo' => 'Logo',
        'status' => 'Statut',
        'action' => 'Action',
        'edit' => 'Modifier',
        'delete' => 'Supprimer',
        'create' => 'Créer',
        'update' => 'Mettre à jour',
        'add_new' => 'Ajouter nouveau',
        'button' => 'Enregistrer',
        'form_title' => 'Créer ou modifier une marque',
        'file_upload' => 'Télécharger le logo',
        'no_logo' => 'Pas de logo',
        'choose_file' => 'Choisir un fichier',
        'image_preview' => 'Aperçu de l\'image',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cette marque ?',
        'brand_deleted' => 'Marque supprimée avec succès !',
        'error_delete' => 'Erreur lors de la suppression de la marque !',
        'created' => 'Marque créée avec succès!',
        'updated' => 'Marque mise à jour avec succès!',
        'deleted' => 'Marque supprimée avec succès!',
        'status_updated' => 'Statut de la marque mis à jour avec succès!',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cette marque?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',
    ],

    'banners' => [
        'button_back' => 'Retour',
        'description' => 'Description',
        'choose_file' => 'Choisir un fichier',
        'all_banners' => 'Tous les bannières',
        'id' => 'ID',
        'add_new' => 'Ajouter un nouveau',
        'banner_type' => 'Type de bannière',
        'promotion' => 'Promotion',
        'sale' => 'Vente',
        'seasonal' => 'Saisonnière',
        'featured' => 'En vedette',
        'announcement' => 'Annonce',
        'actions' => 'Actions',
        'edit' => 'Éditer',
        'delete' => 'Supprimer',
        'no_image' => 'Aucune image disponible',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cette bannière ?',
        'banner_deleted' => 'Bannière supprimée avec succès !',
        'error_delete' => 'Erreur lors de la suppression de la bannière !',
        'image_preview' => 'Aperçu de l\'image',
        'create_banner' => 'Créer une bannière',
        'edit_banner' => 'Modifier la traduction de la bannière',
        'save' => 'Sauvegarder',
        'languages' => 'Langues',
        'status' => 'Statut',
        'image' => 'Image',
        'image_title' => 'Titre de l\'image',
        'title' => 'Titre',
        'select_language' => 'Sélectionner la langue',
        'file_upload' => 'Télécharger l\'image',
        'choose_file' => 'Choisir le fichier',
        'existing_image' => 'Image existante',
        'banner_saved' => 'Bannière enregistrée avec succès !',
        'banner_updated' => 'Bannière mise à jour avec succès !',
        'form_title' => 'Créer ou modifier la bannière',
        'form_description' => 'Veuillez fournir toutes les informations nécessaires pour la bannière.',
        'back_to_list' => 'Retour à la liste des bannières',
        'created' => 'Bannière créée avec succès!',
        'updated' => 'Bannière mise à jour avec succès!',
        'deleted' => 'Bannière supprimée avec succès!',
        'status_updated' => 'Statut de la bannière mis à jour avec succès!',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cette bannière?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',
    ],

    'menus' => [
        'all_menus' => 'Tous les Menus',
        'id' => 'ID',
        'add_new' => 'Ajouter Nouveau',
        'button_create' => 'Créer',
        'button_update' => 'Mettre à jour',
        'title' => 'Titre',
        'edit' => 'Éditer',
        'action' => 'Action',
        'delete' => 'Supprimer',
        'created_at' => 'Créé le',
        'no_menus' => 'Aucun menu disponible',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer ce menu ?',
        'menu_deleted' => 'Menu supprimé avec succès !',
        'error_delete' => 'Erreur lors de la suppression du menu !',
        'create_menu' => 'Créer un Menu',
        'edit_menu' => 'Éditer le Menu',
        'save' => 'Enregistrer',
        'menu_title' => 'Titre du Menu',
        'form_title' => 'Créer ou Éditer le Menu',
        'form_description' => 'Veuillez fournir toutes les informations nécessaires pour le menu.',
        'back_to_list' => 'Retour à la liste des menus',
        'created' => 'Menu créé avec succès!',
        'updated' => 'Menu mis à jour avec succès!',
        'deleted' => 'Menu supprimé avec succès!',
        'status_updated' => 'Statut du menu mis à jour avec succès!',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer ce menu?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',
    ],

    'menu_items' => [
        'heading' => 'Tous les Éléments du Menu',
        'id' => 'ID',
        'create' => 'Créer un Élément du Menu',
        'choose_an_option' => 'Choisir une option',
        'select_an_option' => 'Sélectionner une option',
        'option1' => 'Option 1',
        'option2' => 'Option 2',
        'option3' => 'Option 3',
        'option4' => 'Option 4',
        'order_number' => 'Numéro de Commande',
        'parent_item' => 'Élément Parent',
        'parent_none' => 'Aucun',
        'edit' => 'Éditer l\'Élément du Menu',
        'update' => 'Mettre à jour l\'Élément du Menu',
        'delete' => 'Supprimer l\'Élément du Menu',
        'title' => 'Titre',
        'button' => 'Enregistrer',
        'update_button' => 'Mettre à jour',
        'slug' => 'Slug',
        'order' => 'Ordre',
        'actions' => 'Actions',
        'add_new' => 'Ajouter Nouveau',
        'submit' => 'Soumettre',
        'cancel' => 'Annuler',
        'no_title' => 'Pas de Titre',
        'select_menu' => 'Sélectionner un Menu',
        'select_parent_item' => 'Sélectionner un Élément Parent',
        'language' => 'Langue',
        'select_language' => 'Sélectionner la Langue',
        'select_order' => 'Sélectionner l\'Ordre',
        'success_message' => 'Élément du menu créé avec succès !',
        'error_message' => 'Erreur lors de la création de l\'élément du menu.',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet élément du menu ?',
        'update_success_message' => 'Élément du menu mis à jour avec succès !',
        'update_error_message' => 'Erreur lors de la mise à jour de l\'élément du menu.',
        'created' => 'Élément du menu créé avec succès !',
        'updated' => 'Élément du menu mis à jour avec succès !',
        'deleted' => 'Élément du menu supprimé avec succès !',
        'status_updated' => 'Statut de l\'élément du menu mis à jour avec succès !',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cet élément du menu ?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',

    ],
    'errors' => [
        'validation_failed' => 'La validation a échoué ! Veuillez corriger les erreurs et réessayer.',
        'csrf_token_invalid' => 'Token CSRF invalide. Veuillez actualiser la page et réessayer.',
        'not_found' => 'L\'élément demandé n\'a pas pu être trouvé.',
        'unauthorized' => 'Vous n\'êtes pas autorisé à effectuer cette action.',
    ],
    'messages' => [
        'welcome' => 'Bienvenue dans le panneau d\'administration !',
        'dashboard' => 'Tableau de bord',
        'settings' => 'Paramètres',
        'log_out' => 'Se déconnecter',
        'profile' => 'Profil',
        'menu' => 'Menu',
        'home' => 'Accueil',
        'view_details' => 'Voir les détails',
    ],

    'social_media_links' => [
        'type' => 'Type de réseau social',
        'select_type' => 'Sélectionnez le type de réseau social',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Créer un lien vers les réseaux sociaux',
        'edit' => 'Modifier le lien vers les réseaux sociaux',
        'platform' => 'Nom de la plateforme',
        'link' => 'Lien vers les réseaux sociaux',
        'created' => 'Lien des réseaux sociaux créé avec succès!',
        'updated' => 'Lien des réseaux sociaux mis à jour avec succès!',
        'deleted' => 'Lien des réseaux sociaux supprimé avec succès!',
        'status_updated' => 'Statut du lien des réseaux sociaux mis à jour avec succès!',
        'massage_confirm' => 'Confirmer la suppression',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer ce lien des réseaux sociaux ?',
        'massage_cancel' => 'Annuler',
        'massage_delete' => 'Supprimer',
        'success' => 'Succès',

        'translations' => [
            'platform_name' => 'Nom de la plateforme (traduit)',
        ],
        'save' => 'Enregistrer',
        'update' => 'Mettre à jour',
        'delete' => 'Supprimer',
        'no_links' => 'Aucun lien vers les réseaux sociaux disponible',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer ce lien ?',
        'link_deleted' => 'Le lien vers les réseaux sociaux a été supprimé avec succès !',
        'error_delete' => 'Erreur lors de la suppression du lien !',
        'create_link' => 'Créer un lien vers les réseaux sociaux',
        'edit_link' => 'Modifier un lien vers les réseaux sociaux',
        'form_title' => 'Créer ou modifier un lien vers les réseaux sociaux',
        'form_description' => 'Veuillez fournir toutes les informations nécessaires pour le lien vers les réseaux sociaux.',
        'back_to_list' => 'Retour à la liste des liens vers les réseaux sociaux',
        'add_new' => 'Ajouter un nouveau',
        'trans_name' => 'Nom traduit',
        'delete' => 'Supprimer',
        'action' => 'Action',
    ],

    'orders' => [

        // Page Title
        'title' => 'Liste des commandes',

        // Table Headings
        'id' => 'ID de commande',
        'order_date' => 'Date de commande',
        'status' => 'Statut',
        'total_price' => 'Prix total',
        'action' => 'Actions',
        'customer' => 'Client',

        // Delete Modal
        'delete_confirm_title' => 'Confirmer la suppression',
        'delete_confirm_message' => 'Êtes-vous sûr de vouloir supprimer cette commande ?',
        'delete_cancel' => 'Annuler',
        'delete_button' => 'Supprimer',

        // Toastr / Flash Messages
        'deleted_success' => 'Commande supprimée avec succès.',
        'deleted_error' => 'Échec de la suppression de la commande.',
        'deleted' => 'Supprimée',
        'success' => 'Succès',
    ],

    'attributes' => [
        'title_create' => 'Créer un attribut',
        'title_edit' => 'Modifier un attribut',
        'title_manage' => 'Gérer les attributs',

        'attribute_name' => 'Nom de l\'attribut',
        'attribute_values' => 'Valeurs de l\'attribut',
        'translations' => 'Traductions',
        'translated_value' => 'Valeur traduite',

        'add_value' => 'Ajouter une valeur',
        'remove_value' => 'Supprimer',
        'save_attribute' => 'Enregistrer l\'attribut',
        'update_attribute' => 'Mettre à jour l\'attribut',
        'add_value_translation' => 'Ajouter une traduction de valeur',

        'success_create' => 'Attribut créé avec succès !',
        'success_update' => 'Attribut mis à jour avec succès !',
        'success_delete' => 'Attribut supprimé avec succès !',
        'delete_confirmation' => 'Êtes-vous sûr de vouloir supprimer cet attribut ?',
        'success' => 'Succès',

        'id' => 'ID',
        'name' => 'Nom',
        'values' => 'Valeurs',
        'action' => 'Action',

        'confirm_delete' => 'Confirmer la suppression',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',
    ],

    'product_reviews' => [
        'title_manage' => 'Gestion des avis sur les produits',

        'review_id' => 'ID de l\'avis',
        'customer_name' => 'Nom du client',
        'product_name' => 'Nom du produit',
        'rating' => 'Note',
        'status' => 'Statut',
        'actions' => 'Actions',
        'review_details' => 'Détails de l’avis',
        'review' => 'Avis',
        'back_button' => 'Retour à la liste',

        'confirm_delete' => 'Confirmer la suppression',
        'delete_message' => 'Êtes-vous sûr de vouloir supprimer cet avis sur le produit ?',
        'delete' => 'Supprimer',
        'cancel' => 'Annuler',

        'success_create' => 'L\'avis sur le produit a été créé avec succès !',
        'success_update' => 'L\'avis sur le produit a été mis à jour avec succès !',
        'success_delete' => 'L\'avis sur le produit a été supprimé avec succès !',
        'error_delete' => 'Erreur lors de la suppression de l\'avis sur le produit ! Veuillez réessayer.',

        'success' => 'Succès',
        'error' => 'Erreur',
    ],

];
