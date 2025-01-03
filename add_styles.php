<?php

// CSSの読み込み
function common_styles() {
    wp_enqueue_style(
        'common-style',
        get_theme_file_uri( 'style.css' ),
        array(),
        filemtime( get_theme_file_path( 'style.css' ) )
    );
    if(is_page(array('portfolio', 'about'))) {
        wp_enqueue_style(
            'portfolio-header-style',
            get_theme_file_uri( 'css/portfolio_header.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio_header.css' )),
        );
    }
    if(is_page('portfolio')) {
        wp_enqueue_style(
            'portfolio-style',
            get_theme_file_uri( 'css/portfolio.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio.css' )),
        );
    }
    if(is_page('about')) {
        wp_enqueue_style(
            'about-style',
            get_theme_file_uri( 'css/portfolio.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio.css' )),
        );
    }
    if(is_page_template('page-worksdetail.php')) {
        wp_enqueue_style(
            'portfolio-header-style',
            get_theme_file_uri( 'css/portfolio_header.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio_header.css' )),
        );
        wp_enqueue_style(
            'works-style',
            get_theme_file_uri( 'css/works.css'),
            array(),
            filemtime( get_theme_file_path( 'css/works.css' )),
        );
    }
    if(is_page(array("contact","contact/check","contact/thanks"))) {
        wp_enqueue_style(
            'contact-style',
            get_theme_file_uri( 'css/contact.css'),
            array(),
            filemtime( get_theme_file_path( 'css/contact.css' )),
        );
        wp_enqueue_style(
            'portfolio-header-style',
            get_theme_file_uri( 'css/portfolio_header.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio_header.css' )),
        );
        wp_enqueue_style(
            'portfolio-style',
            get_theme_file_uri( 'css/portfolio.css'),
            array(),
            filemtime( get_theme_file_path( 'css/portfolio.css' )),
        );
    }
    if(is_single()) {
        wp_enqueue_style(
            'single-style',
            get_theme_file_uri( 'css/single.css'),
            array(),
            filemtime( get_theme_file_path( 'css/single.css' )),
        );
    }
    if(is_404()) {
        wp_enqueue_style(
            'not-found-style',
            get_theme_file_uri( 'css/404.css'),
            array(),
            filemtime( get_theme_file_path( 'css/404.css' )),
        );
    }
}
add_action( 'wp_enqueue_scripts', 'common_styles' );

// 管理画面のビジュアルエディタにCSS設定
add_editor_style(get_theme_file_uri( 'editor-style.css' ));
