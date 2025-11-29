<?php

return [
    'auth' => [
        'velstore' => 'Velstore',
        'login' => 'Entrar',
        'email' => 'Endereço de E-mail',
        'password' => 'Senha',
        'remember_me' => 'Lembrar de mim',
        'forgot_password' => 'Esqueceu sua senha?',
    ],
    'profile' => [
        'profile' => 'Perfil',
        'setting' => 'Configuração',
        'logout' => 'Sair',
    ],

    'dashboard' => [
        'total_sales' => 'Vendas Totais',
        'today' => 'Hoje',
        'total' => 'Total',

        'total_orders' => 'Total de Pedidos',
        'completed' => 'Concluído',
        'all_orders' => 'Todos os Pedidos',

        'total_vendors' => 'Total de Vendedores',
        'active' => 'Ativo',

        'total_customers' => 'Total de Clientes',
    ],

    'sidebar' => [
        'search_placeholder' => 'Pesquisar...',
        'dashboard' => 'Painel de Controle',
        'logo' => 'Logotipo',

        'categories' => [
            'title' => 'Categorias',
            'add_new' => 'Adicionar Nova',
            'list' => 'Lista',
        ],
        'brands' => [
            'title' => 'Marcas',
            'add_new' => 'Adicionar Nova',
            'list' => 'Lista',
        ],
        'products' => [
            'title' => 'Produtos',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'attributes' => [
            'title' => 'Atributos',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'customers' => [
            'title' => 'Clientes',
            'list' => 'Lista',
        ],
        'vendors' => [
            'title' => 'Fornecedores',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'product_reviews' => [
            'title' => 'Avaliações de Produtos',
            'list' => 'Lista',
        ],
        'banners' => [
            'title' => 'Banners',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'menu' => [
            'title' => 'Menu',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'menu_items' => [
            'title' => 'Itens do Menu',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'social_media_links' => [
            'title' => 'Links de Mídia Social',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'site_settings' => [
            'title' => 'Configurações do Site',
            'manage' => 'Gerenciar Configurações',
        ],
        'orders' => [
            'title' => 'Pedidos',
            'all_orders' => 'Todos os Pedidos',
            'pending_orders' => 'Pedidos Pendentes',
            'completed_orders' => 'Pedidos Concluídos',
            'list' => 'Lista',
        ],
        'pages' => [
            'title' => 'Páginas',
            'add_new' => 'Adicionar Novo',
            'list' => 'Lista',
        ],
        'payments' => [
            'title' => 'Pagamentos',
            'list' => 'Lista',
        ],

        'refunds' => [
            'title' => 'Reembolsos',
            'list' => 'Lista',
        ],

        'payment_gateways' => [
            'title' => 'Gateways de Pagamento',
            'list' => 'Lista',
        ],
    ],

    'profile' => [
        'title' => 'Editar perfil',
        'choose_file' => 'Escolher arquivo',
        'name' => 'Nome',
        'email' => 'E-mail',
        'phone' => 'Telefone',
        'current_password' => 'Senha atual',
        'new_password' => 'Nova senha',
        'confirm_new_password' => 'Confirmar nova senha',
        'save' => 'Salvar',
        'profile_updated' => 'Perfil atualizado com sucesso!',
        'success' => 'Sucesso',
    ],

    'payment_gateways' => [

        // Page Titles
        'title' => 'Gateways de Pagamento',
        'edit_title' => 'Editar Gateway de Pagamento',

        // Table Headings
        'id' => 'ID',
        'name' => 'Nome',
        'code' => 'Código',
        'status' => 'Status',
        'action' => 'Ação',

        // Status Labels
        'active' => 'Ativo',
        'inactive' => 'Inativo',

        // Delete Modal
        'delete_confirm' => 'Confirmar Exclusão',
        'delete_message' => 'Tem certeza de que deseja excluir este gateway de pagamento?',
        'cancel' => 'Cancelar',
        'delete' => 'Excluir',

        // Alerts / Notifications
        'success' => 'Sucesso',
        'deleted' => 'Excluído',
        'delete_error' => 'Erro ao excluir o gateway de pagamento!',

        // Form Labels
        'gateway_name' => 'Nome do Gateway',
        'description' => 'Descrição',
        'active_label' => 'Ativo',
        'configurations' => 'Configurações do Gateway',
        'key_name' => 'Nome da Chave',
        'key_value' => 'Valor da Chave',
        'environment' => 'Ambiente',
        'sandbox' => 'Sandbox',
        'production' => 'Produção',
        'encrypted' => 'Criptografado',
        'unique' => 'Único',
        'update_button' => 'Atualizar',

        // Fallback
        'not_available' => 'N/D',
    ],

    'refunds' => [

        // Page Titles
        'title' => 'Reembolsos',
        'details_title' => 'Detalhes do Reembolso',

        // Table Headings
        'id' => 'ID',
        'payment' => 'Pagamento',
        'amount' => 'Valor',
        'status' => 'Status',
        'reason' => 'Motivo',
        'action' => 'Ação',

        // Status Labels
        'completed' => 'Concluído',
        'pending' => 'Pendente',
        'failed' => 'Falhou',

        // Delete Modal
        'delete_confirm' => 'Confirmar Exclusão',
        'delete_message' => 'Tem certeza de que deseja excluir este reembolso?',
        'cancel' => 'Cancelar',
        'delete' => 'Excluir',

        // Alerts / Notifications
        'success' => 'Sucesso',
        'deleted' => 'Excluído',
        'delete_error' => 'Erro ao excluir o reembolso!',

        // Refund Details Page
        'created_at' => 'Criado em',
        'updated_at' => 'Atualizado em',
        'back' => 'Voltar aos Reembolsos',

        // Fallback
        'not_available' => 'Indisponível',
    ],

    'payments' => [

        // Page Titles
        'title' => 'Pagamentos',
        'details_title' => 'Detalhes do Pagamento',

        // Table Headings
        'id' => 'ID',
        'order' => 'Pedido',
        'user' => 'Usuário',
        'gateway' => 'Gateway de Pagamento',
        'amount' => 'Valor',
        'status' => 'Status',
        'transaction' => 'Transação',
        'action' => 'Ação',

        // Status Labels
        'completed' => 'Concluído',
        'pending' => 'Pendente',
        'failed' => 'Falhou',

        // Delete Modal
        'delete_confirm' => 'Confirmar Exclusão',
        'delete_message' => 'Tem certeza de que deseja excluir este pagamento?',
        'cancel' => 'Cancelar',
        'delete' => 'Excluir',

        // Alerts / Notifications
        'success' => 'Sucesso',
        'deleted' => 'Excluído',
        'delete_error' => 'Erro ao excluir o pagamento!',

        // Payment Details Page
        'transaction_id' => 'ID da Transação',
        'created_at' => 'Criado em',
        'back' => 'Voltar para Pagamentos',

        // Fallback
        'not_available' => 'Indisponível',
    ],

    'pages' => [
        // General
        'title' => 'Páginas',
        'choose_file' => 'Escolher arquivo',

        // Create Page
        'create' => 'Criar Página',
        'form_title' => 'Título (:code)',
        'form_content' => 'Conteúdo (:code)',
        'form_image' => 'Imagem (:code)',
        'form_save' => 'Salvar',

        // Edit Page
        'edit' => 'Editar Página',
        'form_update' => 'Atualizar',

        // Pages Table
        'table_title' => 'Título',
        'table_slug' => 'Slug',
        'table_status' => 'Status',
        'table_actions' => 'Ações',

        // Delete Modal
        'delete_modal_title' => 'Confirmar Exclusão',
        'delete_modal_text' => 'Tem certeza de que deseja excluir esta página?',
        'delete_modal_cancel' => 'Cancelar',
        'delete_modal_delete' => 'Excluir',

        // Toastr messages
        'toastr_success' => 'Sucesso',
        'toastr_error' => 'Erro ao excluir a página',
    ],

    'customers' => [
        'customer_list' => 'Lista de clientes',

        // Table columns
        'id' => 'ID',
        'name' => 'Nome',
        'email' => 'E-mail',
        'phone' => 'Telefone',
        'address' => 'Endereço',
        'status' => 'Status',
        'actions' => 'Ações',

        // Status labels
        'active' => 'Ativo',
        'inactive' => 'Inativo',

        // Modal
        'confirm_delete_title' => 'Confirmar exclusão',
        'confirm_delete_message' => 'Tem certeza de que deseja excluir este cliente?',
        'cancel_button' => 'Cancelar',
        'delete_button' => 'Excluir',

        // Toastr messages
        'success_title' => 'Sucesso',
        'deleted_title' => 'Excluído',
        'delete_success_message' => 'Cliente excluído com sucesso!',
        'delete_error_message' => 'Erro ao excluir cliente!',
    ],

    'vendors' => [
        'title_list' => 'Lista de Fornecedores',
        'id' => 'ID',
        'name' => 'Nome',
        'email' => 'Email',
        'phone' => 'Telefone',
        'status' => 'Status',
        'actions' => 'Ações',
        'register_new_vendor' => 'Registrar novo vendedor',
        'vendor_name' => 'Nome do vendedor',
        'vendor_email' => 'E-mail do vendedor',
        'phone_optional' => 'Telefone (opcional)',
        'password' => 'Senha',
        'confirm_password' => 'Confirmar senha',
        'status' => 'Status',
        'active' => 'Ativo',
        'inactive' => 'Inativo',
        'banned' => 'Banido',
        'register_button' => 'Registrar vendedor',
        'cancel_button' => 'Cancelar',

        'active' => 'Ativo',
        'inactive' => 'Inativo',

        'modal_confirm_delete_title' => 'Confirmar Exclusão',
        'modal_confirm_delete_body' => 'Tem certeza de que deseja excluir este fornecedor?',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',

        'success' => 'Sucesso',
        'success_delete' => 'Fornecedor excluído com sucesso!',
        'error_delete' => 'Erro ao excluir fornecedor! Por favor, tente novamente.',
    ],

    'languages' => [
        'english' => 'Inglês',
        'spanish' => 'Espanhol',
        'french' => 'Francês',
        'arabic' => 'Árabe',
        'german' => 'Alemão',
        'persian' => 'Persa (Farsi)',
        'hindi' => 'Hindi',
        'indonesian' => 'Indonésio',
        'italian' => 'Italiano',
        'japanese' => 'Japonês',
        'korean' => 'Coreano',
        'dutch' => 'Holandês',
        'polish' => 'Polonês',
        'portuguese' => 'Português',
        'russian' => 'Russo',
        'thai' => 'Tailandês',
        'turkish' => 'Turco',
        'vietnamese' => 'Vietnamita',
        'chinese' => 'Chinês',

        'language_change' => 'Alteração de Idioma',
        'change_language' => 'Mudar Idioma',
        'confirm_language_change' => 'Tem certeza de que deseja mudar o idioma?',
        'cancel' => 'Cancelar',
        'yes_change' => 'Sim, Mudar',
    ],

    'categories' => [
        'heading' => 'Categorias',
        'image' => 'Imagem',
        'choose_file' => 'Escolher arquivo',
        'id' => 'ID',
        'name' => 'Nome da categoria',
        'description' => 'Descrição',
        'action' => 'Ação',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'button' => 'Salvar',
        'add_new' => 'Adicionar Novo',
        'status' => 'Status',
        'created' => 'Categoria criada com sucesso!',
        'updated' => 'Categoria atualizada com sucesso!',
        'deleted' => 'Categoria excluída com sucesso!',
        'status_updated' => 'Status da categoria atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Tem certeza de que deseja excluir esta categoria?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',

    ],

    'datatables' => [
        'sEmptyTable' => 'Nenhum dado disponível na tabela',
        'sInfo' => 'Exibindo de _START_ até _END_ de _TOTAL_ entradas',
        'sInfoEmpty' => 'Exibindo de 0 até 0 de 0 entradas',
        'sInfoFiltered' => '(filtrado de _MAX_ entradas no total)',
        'sLengthMenu' => 'Mostrar _MENU_ entradas',
        'sLoadingRecords' => 'Carregando...',
        'sProcessing' => 'Processando...',
        'sSearch' => 'Pesquisar:',
        'sZeroRecords' => 'Nenhum registro encontrado',
        'oPaginate' => [
            'sFirst' => 'Primeiro',
            'sLast' => 'Último',
            'sNext' => 'Próximo',
            'sPrevious' => 'Anterior',
        ],
    ],

    'products' => [

        // Títulos
        'title_create' => 'Criar Produto',
        'title_edit' => 'Editar Produto',
        'title_manage' => 'Gerenciar Produtos',

        // Campos do Formulário
        'vendor' => 'Fornecedor',
        'select_vendor' => 'Selecionar Fornecedor',
        'product_name' => 'Nome do Produto',
        'product_type' => 'Tipo de Produto',
        'description' => 'Descrição',
        'translations' => 'Traduções',
        'translated_value' => 'Valor Traduzido',
        'category' => 'Categoria',
        'brand' => 'Marca',
        'no_brand' => 'Sem Marca',
        'status' => 'Status',
        'price' => 'Preço',
        'discount_price' => 'Preço com Desconto',
        'sku' => 'SKU',
        'barcode' => 'Código de Barras',
        'stock' => 'Estoque',
        'weight' => 'Peso',
        'dimension' => 'Dimensões',
        'size' => 'Tamanho',
        'color' => 'Cor',
        'images' => 'Imagens do Produto',
        'is_primary' => 'Variante Principal',
        'variant_name_en' => 'Nome da Variante',
        'attributes' => 'Atributos',
        'attribute_values' => 'Valores dos Atributos',
        'variants' => 'Variantes',

        // Botões
        'add_variant' => 'Adicionar Variante',
        'remove_variant' => 'Remover Variante',
        'save_product' => 'Salvar Produto',
        'update_product' => 'Atualizar Produto',
        'choose_images' => 'Escolher Imagens',
        'choose_file' => 'Escolher Arquivo',
        'remove' => 'Remover',

        // Mensagens
        'status_updated' => 'Status do produto atualizado com sucesso!',
        'success_create' => 'Produto criado com sucesso!',
        'success_update' => 'Produto atualizado com sucesso!',
        'success_delete' => 'Produto excluído com sucesso!',
        'delete_confirmation' => 'Tem certeza de que deseja excluir este produto?',
        'success' => 'Sucesso',

        // Colunas da Tabela
        'id' => 'ID',
        'name' => 'Nome',
        'type' => 'Tipo',
        'price_column' => 'Preço',
        'status_column' => 'Status',
        'action' => 'Ação',

        // Diálogo de Confirmação
        'confirm_delete' => 'Confirmar Exclusão',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',
    ],

    'brands' => [
        'heading' => 'Marcas',
        'id' => 'ID',
        'name' => 'Nome da marca',
        'description' => 'Descrição',
        'logo' => 'Logo',
        'status' => 'Status',
        'action' => 'Ação',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'create' => 'Criar',
        'update' => 'Atualizar',
        'add_new' => 'Adicionar novo',
        'button' => 'Salvar',
        'form_title' => 'Criar ou Editar Marca',
        'file_upload' => 'Carregar logo',
        'no_logo' => 'Sem logo',
        'choose_file' => 'Escolher arquivo',
        'image_preview' => 'Pré-visualização da imagem',
        'delete_confirmation' => 'Tem certeza de que deseja excluir esta marca?',
        'brand_deleted' => 'Marca excluída com sucesso!',
        'error_delete' => 'Erro ao excluir marca!',
        'created' => 'Marca criada com sucesso!',
        'updated' => 'Marca atualizada com sucesso!',
        'deleted' => 'Marca excluída com sucesso!',
        'status_updated' => 'Status da marca atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Tem certeza de que deseja excluir esta marca?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',
    ],

    'banners' => [
        'button_back' => 'Voltar',
        'description' => 'Descrição',
        'choose_file' => 'Escolher arquivo',
        'all_banners' => 'Todos os Banners',
        'id' => 'ID',
        'add_new' => 'Adicionar Novo',
        'banner_type' => 'Tipo de Banner',
        'promotion' => 'Promoção',
        'sale' => 'Venda',
        'seasonal' => 'Sazonal',
        'featured' => 'Destaque',
        'announcement' => 'Anúncio',
        'actions' => 'Ações',
        'edit' => 'Editar',
        'delete' => 'Excluir',
        'no_image' => 'Nenhuma imagem disponível',
        'delete_confirmation' => 'Tem certeza de que deseja excluir este banner?',
        'banner_deleted' => 'Banner excluído com sucesso!',
        'error_delete' => 'Erro ao excluir o banner!',
        'image_preview' => 'Pré-visualização da Imagem',
        'create_banner' => 'Criar Banner',
        'edit_banner' => 'Editar Traduções do Banner',
        'save' => 'Salvar',
        'languages' => 'Idiomas',
        'status' => 'Status',
        'image' => 'Imagem',
        'image_title' => 'Título da Imagem',
        'title' => 'Título',
        'select_language' => 'Selecionar Idioma',
        'file_upload' => 'Carregar Imagem',
        'choose_file' => 'Escolher Arquivo',
        'existing_image' => 'Imagem Existente',
        'banner_saved' => 'Banner salvo com sucesso!',
        'banner_updated' => 'Banner atualizado com sucesso!',
        'form_title' => 'Criar ou Editar Banner',
        'form_description' => 'Por favor, forneça todas as informações necessárias para o banner.',
        'back_to_list' => 'Voltar para a Lista de Banners',
        'created' => 'Banner criado com sucesso!',
        'updated' => 'Banner atualizado com sucesso!',
        'deleted' => 'Banner excluído com sucesso!',
        'status_updated' => 'Status do banner atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Tem certeza de que deseja excluir este banner?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',
    ],

    'menus' => [
        'all_menus' => 'Todos os Menus',
        'id' => 'ID',
        'add_new' => 'Adicionar Novo',
        'button_create' => 'Criar',
        'button_update' => 'Atualizar',
        'title' => 'Título',
        'edit' => 'Editar',
        'action' => 'Ação',
        'delete' => 'Excluir',
        'created_at' => 'Criado em',
        'no_menus' => 'Não há menus disponíveis',
        'delete_confirmation' => 'Tem certeza de que deseja excluir este menu?',
        'menu_deleted' => 'Menu excluído com sucesso!',
        'error_delete' => 'Erro ao excluir o menu!',
        'create_menu' => 'Criar Menu',
        'edit_menu' => 'Editar Menu',
        'save' => 'Salvar',
        'menu_title' => 'Título do Menu',
        'form_title' => 'Criar ou Editar Menu',
        'form_description' => 'Por favor, forneça todas as informações necessárias para o menu.',
        'back_to_list' => 'Voltar à lista de menus',
        'created' => 'Menu criado com sucesso!',
        'updated' => 'Menu atualizado com sucesso!',
        'deleted' => 'Menu excluído com sucesso!',
        'status_updated' => 'Status do menu atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Você tem certeza de que deseja excluir este menu?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',

    ],

    'menu_items' => [
        'heading' => 'Todos os Itens de Menu',
        'id' => 'ID',
        'create' => 'Criar Item de Menu',
        'choose_an_option' => 'Escolha uma opção',
        'select_an_option' => 'Selecione uma opção',
        'option1' => 'Opção 1',
        'option2' => 'Opção 2',
        'option3' => 'Opção 3',
        'option4' => 'Opção 4',
        'order_number' => 'Número de Ordem',
        'parent_item' => 'Item Pai',
        'parent_none' => 'Nenhum',
        'edit' => 'Editar Item de Menu',
        'update' => 'Atualizar Item de Menu',
        'delete' => 'Excluir Item de Menu',
        'title' => 'Título',
        'button' => 'Salvar',
        'update_button' => 'Atualizar',
        'slug' => 'Slug',
        'order' => 'Ordem',
        'actions' => 'Ações',
        'add_new' => 'Adicionar Novo',
        'submit' => 'Enviar',
        'cancel' => 'Cancelar',
        'no_title' => 'Sem Título',
        'select_menu' => 'Selecionar um Menu',
        'select_parent_item' => 'Selecionar Item Pai',
        'language' => 'Idioma',
        'select_language' => 'Selecionar Idioma',
        'select_order' => 'Selecionar Ordem',
        'success_message' => 'Item do menu criado com sucesso!',
        'error_message' => 'Ocorreu um erro ao criar o item do menu.',
        'confirm_delete' => 'Tem certeza de que deseja excluir este item do menu?',
        'update_success_message' => 'Item do menu atualizado com sucesso!',
        'update_error_message' => 'Ocorreu um erro ao atualizar o item do menu.',
        'created' => 'Item de menu criado com sucesso!',
        'updated' => 'Item de menu atualizado com sucesso!',
        'deleted' => 'Item de menu excluído com sucesso!',
        'status_updated' => 'Status do item de menu atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Você tem certeza de que deseja excluir este item de menu?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',

    ],
    'errors' => [
        'validation_failed' => 'Falha na validação! Por favor, corrija os erros e tente novamente.',
        'csrf_token_invalid' => 'Token CSRF inválido. Por favor, recarregue a página e tente novamente.',
        'not_found' => 'O item solicitado não pôde ser encontrado.',
        'unauthorized' => 'Você não tem permissão para realizar esta ação.',
    ],
    'messages' => [
        'welcome' => 'Bem-vindo ao Painel de Administração!',
        'dashboard' => 'Painel',
        'settings' => 'Configurações',
        'log_out' => 'Sair',
        'profile' => 'Perfil',
        'menu' => 'Menu',
        'home' => 'Início',
        'view_details' => 'Ver Detalhes',
    ],

    'social_media_links' => [
        'type' => 'Tipo de rede social',
        'select_type' => 'Selecione o tipo de rede social',
        'types' => [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'tiktok' => 'TikTok',
            'youtube' => 'YouTube',
            'x' => 'X',
        ],

        'id' => 'ID',
        'create' => 'Criar Link de Mídia Social',
        'edit' => 'Editar Link de Mídia Social',
        'platform' => 'Nome da Plataforma',
        'link' => 'Link de Mídia Social',
        'created' => 'Link de mídia social criado com sucesso!',
        'updated' => 'Link de mídia social atualizado com sucesso!',
        'deleted' => 'Link de mídia social excluído com sucesso!',
        'status_updated' => 'Status do link de mídia social atualizado com sucesso!',
        'massage_confirm' => 'Confirmar exclusão',
        'confirm_delete' => 'Tem certeza de que deseja excluir este link de mídia social?',
        'massage_cancel' => 'Cancelar',
        'massage_delete' => 'Excluir',
        'success' => 'Sucesso',

        'translations' => [
            'platform_name' => 'Nome da Plataforma (traduzido)',
        ],
        'save' => 'Salvar',
        'update' => 'Atualizar',
        'delete' => 'Excluir',
        'no_links' => 'Nenhum Link de Mídia Social disponível',
        'delete_confirmation' => 'Tem certeza de que deseja excluir este link?',
        'link_deleted' => 'Link de Mídia Social excluído com sucesso!',
        'error_delete' => 'Erro ao excluir o link!',
        'create_link' => 'Criar Link de Mídia Social',
        'edit_link' => 'Editar Link de Mídia Social',
        'form_title' => 'Criar ou Editar Link de Mídia Social',
        'form_description' => 'Por favor, forneça todas as informações necessárias para o link de mídia social.',
        'back_to_list' => 'Voltar para a lista de Links de Mídia Social',
        'add_new' => 'Adicionar Novo',
        'trans_name' => 'Nome Traduzido',
        'delete' => 'Excluir',
        'action' => 'Ação',
    ],

    'orders' => [

        // Page Title
        'title' => 'Lista de Pedidos',

        // Table Headings
        'id' => 'ID do Pedido',
        'order_date' => 'Data do Pedido',
        'status' => 'Status',
        'total_price' => 'Preço Total',
        'action' => 'Ações',
        'customer' => 'Cliente',

        // Delete Modal
        'delete_confirm_title' => 'Confirmar Exclusão',
        'delete_confirm_message' => 'Tem certeza de que deseja excluir este pedido?',
        'delete_cancel' => 'Cancelar',
        'delete_button' => 'Excluir',

        // Toastr / Flash Messages
        'deleted_success' => 'Pedido excluído com sucesso.',
        'deleted_error' => 'Falha ao excluir o pedido.',
        'deleted' => 'Excluído',
        'success' => 'Sucesso',
    ],

    'attributes' => [
        'title_create' => 'Criar Atributo',
        'title_edit' => 'Editar Atributo',
        'title_manage' => 'Gerenciar Atributos',

        'attribute_name' => 'Nome do Atributo',
        'attribute_values' => 'Valores do Atributo',
        'translations' => 'Traduções',
        'translated_value' => 'Valor Traduzido',

        'add_value' => 'Adicionar Valor',
        'remove_value' => 'Remover',
        'save_attribute' => 'Salvar Atributo',
        'update_attribute' => 'Atualizar Atributo',
        'add_value_translation' => 'Adicionar tradução do valor',

        'success_create' => 'Atributo criado com sucesso!',
        'success_update' => 'Atributo atualizado com sucesso!',
        'success_delete' => 'Atributo excluído com sucesso!',
        'delete_confirmation' => 'Tem certeza de que deseja excluir este atributo?',
        'success' => 'Sucesso',

        'id' => 'ID',
        'name' => 'Nome',
        'values' => 'Valores',
        'action' => 'Ação',

        'confirm_delete' => 'Confirmar Exclusão',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',
    ],

    'product_reviews' => [
        'title_manage' => 'Zarządzanie opiniami o produktach',

        'review_id' => 'ID opinii',
        'customer_name' => 'Nazwa klienta',
        'product_name' => 'Nazwa produktu',
        'rating' => 'Ocena',
        'status' => 'Status',
        'actions' => 'Akcje',
        'review_details' => 'Detalhes da avaliação',
        'review' => 'Avaliação',
        'back_button' => 'Voltar à lista',

        'confirm_delete' => 'Potwierdzenie usunięcia',
        'delete_message' => 'Czy na pewno chcesz usunąć tę opinię o produkcie?',
        'delete' => 'Usuń',
        'cancel' => 'Anuluj',

        'success_create' => 'Opinia o produkcie została pomyślnie dodana!',
        'success_update' => 'Opinia o produkcie została pomyślnie zaktualizowana!',
        'success_delete' => 'Opinia o produkcie została pomyślnie usunięta!',
        'error_delete' => 'Błąd podczas usuwania opinii o produkcie! Spróbuj ponownie.',

        'success' => 'Sukces',
        'error' => 'Błąd',
    ],

    'product_reviews' => [
        'title_manage' => 'Gerenciar Avaliações de Produtos',

        'review_id' => 'ID da Avaliação',
        'customer_name' => 'Nome do Cliente',
        'product_name' => 'Nome do Produto',
        'rating' => 'Avaliação',
        'status' => 'Status',
        'actions' => 'Ações',

        'confirm_delete' => 'Confirmar Exclusão',
        'delete_message' => 'Tem certeza de que deseja excluir esta avaliação de produto?',
        'delete' => 'Excluir',
        'cancel' => 'Cancelar',

        'success_create' => 'Avaliação de produto criada com sucesso!',
        'success_update' => 'Avaliação de produto atualizada com sucesso!',
        'success_delete' => 'Avaliação de produto excluída com sucesso!',
        'error_delete' => 'Erro ao excluir a avaliação de produto! Tente novamente.',

        'success' => 'Sucesso',
        'error' => 'Erro',
    ],

];
