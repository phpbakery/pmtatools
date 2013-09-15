<?php

/**
 *  This class provides an OO interface to the output of the
 *  pmta cli commands.
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
    class PMTADomDocument
    {
        public function __construct() {}
        
        /**
         *  Loads the output of the pmta command and parses
         *  it for retrival.
         *
         *  @param  $document   string                                          Either the output as a string or the full path to a file containing the output
         *  @param  $type       PHPBakery\PMTATools\PMTADomDocumentType::TYPE   A valid const from that static class
         */
        public function loadDocument($document, $type)
        {
            print 'Loading: ' . $document . PHP_EOL;
        }
    }
}
