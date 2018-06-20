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
 * @version     22.01.2018 3.0.0
 */

namespace AlphaSys\AsySeoTitle\Core;

class Events {

    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        self::addTableFields();
    }

    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {

    }


    /**
     * Add new fields
     */
    public static function addTableFields()
    {

        $dbMetaDataHandler = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);

        $tableFields = array(
            'oxarticles' => array('ASY_SEOTITLE', 'ASY_SEOTITLE_1', 'ASY_SEOTITLE_2', 'ASY_SEOTITLE_3'),
            'oxcategories' => array('ASY_SEOTITLE', 'ASY_SEOTITLE_1', 'ASY_SEOTITLE_2', 'ASY_SEOTITLE_3'),
            'oxcontents' => array('ASY_SEOTITLE', 'ASY_SEOTITLE_1', 'ASY_SEOTITLE_2', 'ASY_SEOTITLE_3'),
            'oxmanufacturers' => array('ASY_SEOTITLE', 'ASY_SEOTITLE_1', 'ASY_SEOTITLE_2', 'ASY_SEOTITLE_3'),
            'oxvendor' => array('ASY_SEOTITLE', 'ASY_SEOTITLE_1', 'ASY_SEOTITLE_2', 'ASY_SEOTITLE_3'),
        );

        foreach ($tableFields as $tableName => $fieldNames) {
            foreach($fieldNames as $fieldName){
                if (!$dbMetaDataHandler->fieldExists($fieldName, $tableName)) {
                    \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute(
                        "ALTER TABLE `" . $tableName
                        . "` ADD `" . $fieldName . "` VARCHAR( 255 ) NOT NULL DEFAULT '';"
                    );
                }
            }
        }
    }

}
