<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_seotitle',
    'title'        => '<img src="../modules/asy/asy_seotitle/module_icon.png" alt="Alpha-Sys" title="Alpha-Sys"> SEO Title Basic',
    'description'  => array(
        'de' => 'Mit diesem Modul können Sie den Meta Title von Artikeln, Kategorien, CMS-Seiten, Hersteller und Lieferanten manuell pflegen.'
    ),
    'thumbnail'    => 'module_logo.png',
    'version'      => '3.0.3',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'thumbnail'    => 'module_logo.png',
    'extend'       => array(
        //'details'           => 'asy/asy_seotitle/Controller/asy_seotitle__details',
        \OxidEsales\Eshop\Application\Controller\ArticleDetailsController::class => \AlphaSys\AsySeoTitle\Controller\ArticleDetailsController::class,
        \OxidEsales\Eshop\Application\Controller\ArticleListController::class => \AlphaSys\AsySeoTitle\Controller\ArticleListController::class,
        \OxidEsales\Eshop\Application\Controller\ContentController::class => \AlphaSys\AsySeoTitle\Controller\ContentController::class,
        \OxidEsales\Eshop\Application\Controller\ManufacturerListController::class => \AlphaSys\AsySeoTitle\Controller\ManufacturerListController::class
    ),
    'controllers' => array(
    ),
    'events'       => array(
        'onActivate'   => '\AlphaSys\AsySeoTitle\Core\Events::onActivate',
        'onDeactivate' => '\AlphaSys\AsySeoTitle\Core\Events::onDeactivate'
    ),
    'templates' => array(
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'views/blocks/admin_article_main_form.tpl'),
        array('template' => 'include/category_main_form.tpl', 'block'=>'admin_category_main_form', 'file'=>'views/blocks/admin_category_main_form.tpl'),
        array('template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'views/blocks/admin_content_main_form.tpl'),
        array('template' => 'manufacturer_main.tpl', 'block'=>'admin_manufacturer_main_form', 'file'=>'views/blocks/admin_manufacturer_main_form.tpl'),
        array('template' => 'vendor_main.tpl', 'block'=>'admin_vendor_main_form', 'file'=>'views/blocks/admin_vendor_main_form.tpl'),
     ),
    'settings' => array(
    )
);
