<?php

/**
 *  Static class defining document type constants.
 *  
 *  @author     William Betts <william@phpbakery.com>
 *  @category   PHPBakery
 *  @package    PMTATools
 *  @subpackage PMTADomDocument
 *  @copyright  William Betts (c) 2013
 *  @license    http://phpbakery.com/license
 */
namespace PHPBakery\PMTATools
{
    class PMTADomDocumentType
    {
        const FILE = 0;
        const STRING = 1;

        private function __construct() {}
        private function __clone() {}    
    }
}
