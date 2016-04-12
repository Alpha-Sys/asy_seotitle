<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2016
 * @module      asy_seotitle
 * @version     12.04.2016  2.1
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_seotitle',
    'title'        => '<img src="../modules/asy/module_logo.png" alt="Alpha-Sys" title="Alpha-Sys"> SEO Title Basic',
    'description'  => array(
    	'de' => 'Mit diesm Modul können Sie den Meta Title von Artikeln, Kategorien, CMS-Seiten, Hersteller und Lieferanten manuell pflegen.',
    	'en' => 'You can edit the meta title of articles, categories, content pages, manufacturers and vendors.'
    ),
    'thumbnail'    => 'module_logo.png',
    'version'      => '2.1',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'alist'             => 'asy/asy_seotitle/controllers/asy_seotitle__alist' ,
        'content'           => 'asy/asy_seotitle/controllers/asy_seotitle__content',
        'details'           => 'asy/asy_seotitle/controllers/asy_seotitle__details',
        'manufacturerlist'  => 'asy/asy_seotitle/controllers/asy_seotitle__manufacturerlist',
        'vendorlist'        => 'asy/asy_seotitle/controllers/asy_seotitle__vendorlist'
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'admin_article_main_form.tpl'),
        array('template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'admin_category_main_form.tpl'),
        array('template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'admin_content_main_form.tpl'),
        array('template' => 'manufacturer_main.tpl', 'block'=>'admin_manufacturer_main_form', 'file'=>'admin_manufacturer_main_form.tpl'),
        array('template' => 'vendor_main.tpl', 'block'=>'admin_vendor_main_form', 'file'=>'admin_vendor_main_form.tpl'),
    )
);