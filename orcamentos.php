<?php
/**
 * Creates post type orçamento.
 */
function gabinete_register_orcamentos_post_type() {

    // Add new post type orçamentos
    $labels = array(
        'name'                  => _x( 'Orçamentos', 'Post type general name', 'gabinete' ),
        'singular_name'         => _x( 'Orçamento', 'Post type singular name', 'gabinete' ),
        'menu_name'             => _x( 'Orçamentos', 'Admin Menu text', 'gabinete' ),
        'name_admin_bar'        => _x( 'Orçamento', 'Add New on Toolbar', 'gabinete' ),
        'add_new'               => __( 'Adicionar novo', 'gabinete' ),
        'add_new_item'          => __( 'Adicionar novo orçamento', 'gabinete' ),
        'new_item'              => __( 'Novo orçamento', 'gabinete' ),
        'edit_item'             => __( 'Editar orçamento', 'gabinete' ),
        'view_item'             => __( 'Ver orçamento', 'gabinete' ),
        'all_items'             => __( 'Todos os orçamentos', 'gabinete' ),
        'search_items'          => __( 'Pesquisar orçamentos', 'gabinete' ),
        'parent_item_colon'     => __( 'Orçamento pai:', 'gabinete' ),
        'not_found'             => __( 'Nenhum orçamento encontrado.', 'gabinete' ),
        'not_found_in_trash'    => __( 'Nenhum orçamento encontrado na lixeira.', 'gabinete' ),
        'featured_image'        => _x( 'Imagem de destaque do orçamento', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'gabinete' ),
        'set_featured_image'    => _x( 'Atribuir imagem de destaque', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'gabinete' ),
        'remove_featured_image' => _x( 'Remover imagem de destaque', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'gabinete' ),
        'use_featured_image'    => _x( 'Usar como imagem de destaque', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'gabinete' ),
        'archives'              => _x( 'Listas de orçamentos', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'gabinete' ),
        'insert_into_item'      => _x( 'Inserir no orçamento', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'gabinete' ),
        'uploaded_to_this_item' => _x( 'Enviar para este orçamento', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'gabinete' ),
        'filter_items_list'     => _x( 'Filtrar lista de orçamentos', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'gabinete' ),
        'items_list_navigation' => _x( 'Lista de navegação de orçamentos', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'gabinete' ),
        'items_list'            => _x( 'Lista de orçamentos', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'gabinete' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'orcamento' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-text-page',
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'orcamento', $args );

}
add_action( 'init', 'gabinete_register_orcamentos_post_type', 0 );
