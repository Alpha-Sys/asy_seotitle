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

class asy_seotitle__details extends asy_seotitle__details_parent {

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
