<?php

use PHPUnit\Framework\TestCase;//class by default TestCase dans folder vendor
require(__DIR__."/../core/manager.class.php");

final class mesfonctionsTest extends PHPUnit_Framework_TestCase{
    

    
    public function testSuppresionIsEquals(){
        $m = new Manager();
        $this->assertEquals("suppression Ok", $m->supprimer("enseignant", 10));
    }
    
    
    
}

//RESULTAT DU TEST!

//U:\>cd TP2/vendor/bin
//
//U:\TP2\vendor\bin>phpunit ../../unit_tests/mesfonctionsTest.php
//PHPUnit 5.0.0 by Sebastian Bergmann and contributors.
//
//.                                                                   1 / 1 (100%)
//
//Time: 1.19 seconds, Memory: 3.00MB
//
//OK (1 test, 1 assertion)
//
//U:\TP2\vendor\bin>



?>