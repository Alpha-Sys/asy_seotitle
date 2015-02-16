<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2014
 * @module      asy_seotitle
 * @oxidversion OXID eShop PE, EE
 * @version     01.11.2014  1.2
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_seotitle',
    'title'        => '<img src="../modules/asy/module_logo.png" alt="Alpha-Sys" title="Alpha-Sys"> SEO Title Basic',
    'description'  => 'Mit diesm Modul können Sie den Meta Title von Artikeln, Kategorien und CMS-Seiten manuell pflegen.',
    'thumbnail'    => 'module_seotitle.png',
    'version'      => '1.2',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'alist' => 'asy/asy_seotitle/controllers/asy_seotitle__alist' ,
        'content' => 'asy/asy_seotitle/controllers/asy_seotitle__content',
        'details' => 'asy/asy_seotitle/controllers/asy_seotitle__details'
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'admin_article_main_form.tpl'),
        array('template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'admin_category_main_form.tpl'),
        array('template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'admin_content_main_form.tpl'),
    )
);