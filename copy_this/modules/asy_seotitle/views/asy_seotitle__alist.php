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
 * @version     OXID eShop PE, EE
 * @version     20.09.2012  1.0
 * @module      alist => asy_seotitle/views/asy_seotitle__alist
 */
class asy_seotitle__alist extends asy_seotitle__alist_parent {

    public function getTitle() {
        if ( $oCategory = $this->getActCategory() ) {
            $sSeoTitle = $oCategory->oxcategories__asy_seotitle->value;
            if($sSeoTitle && $sSeoTitle != ''){
                return $sSeoTitle;
            } else {
                return parent::getTitle();
            }
        }
    }

}
