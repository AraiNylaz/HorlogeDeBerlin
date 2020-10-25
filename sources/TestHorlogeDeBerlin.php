<?php
/**
 * Created by PhpStorm.
 * User: lorine
 * Date: 13-10-20
 * Time: 18:11
 */
require "HorlogeDeBerlin.php";
use PHPUnit\Framework\TestCase;

class TestHorlogeDeBerlin extends TestCase
{
    private $horlogeDeBerlin;
    public function setUp(): void{
        parent::setUp();
        $this->horlogeDeBerlin = new HorlogeDeBerlin();
    }

    public function test_display_given1_shouldReturn1()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_simple_minutes(1);
        //assert
        $this->assertEquals("[1st Minute]",$actual);
    }
}