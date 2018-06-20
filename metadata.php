<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'asy_seotitle',
    'title'        => 'SEO Title Basic',
    'description'  => array(
        'de' => 'Mit diesem Modul können Sie den Meta Title von Artikeln, Kategorien, CMS-Seiten, Hersteller und Lieferanten manuell pflegen.'
    ),
    'thumbnail'    => 'module_logo.png',
    'version'      => '3.0.0',
    'author'       => 'Alpha-Sys',
    'email'        => 'fabian.kunkler@alpha-sys.de',
    'url'          => 'http://www.alpha-sys.de',
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
        array('template' => 'category_main.tpl', 'block'=>'admin_category_main_form', 'file'=>'views/blocks/admin_category_main_form.tpl'),
        array('template' => 'content_main.tpl', 'block'=>'admin_content_main_form', 'file'=>'views/blocks/admin_content_main_form.tpl'),
        array('template' => 'manufacturer_main.tpl', 'block'=>'admin_manufacturer_main_form', 'file'=>'views/blocks/admin_manufacturer_main_form.tpl'),
        array('template' => 'vendor_main.tpl', 'block'=>'admin_vendor_main_form', 'file'=>'views/blocks/admin_vendor_main_form.tpl'),
     ),
    'settings' => array(
    )
);
