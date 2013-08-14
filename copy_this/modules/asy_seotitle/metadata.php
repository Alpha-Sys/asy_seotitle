<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2012
 * @module      asy_voucher
 * @oxidversion OXID eShop PE, EE
 * @version     22.09.2012  1.0
 */

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_seotitle',
    'title'        => 'SEO Title Basic',
    'description'  => 'Mit diesm Modul können Sie den Meta Title von Artikeln, Kategorien und CMS-Seiten manuell pflegen.',
    'thumbnail'    => 'module_seotitle.png',
    'version'      => '1.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
    'extend'       => array(
        'alist' => 'asy_seotitle/views/asy_seotitle__alist' ,
        'content' => 'asy_seotitle/views/asy_seotitle__content',
        'details' => 'asy_seotitle/views/asy_seotitle__details'
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl', 'block'=>'admin_article_main_form', 'file'=>'admin_article_main_form.tpl'),
        array('template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'admin_category_main_form.tpl'),
        array('template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'admin_content_main_form.tpl'),
    )
);