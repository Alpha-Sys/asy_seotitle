<?php
/**
 * This Software is property of Alpha-Sys and is protected by
 * copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license agreement
 * will be prosecuted by civil and criminal law.
 *
 * @link        http://www.alpha-sys.de
 * @author      Fabian Kunkler <fabian.kunkler@alpha-sys.de>   
 * @copyright   (C) Alpha-Sys 2008-2018
 * @module      asy_seotitle
 * @version     22.01.2018 3.0.1
 */

namespace AlphaSys\AsySeoTitle\Controller;

class ArticleDetailsController extends ArticleDetailsController_parent {

    public function getTitle() {
        if ( $oProduct = $this->getProduct() ) {
            $sSeoTitle = $oProduct->oxarticles__asy_seotitle->value;
            if($sSeoTitle && $sSeoTitle != ''){
                return $sSeoTitle;
            } else {
                return parent::getTitle();
            }
        }
    }

}
