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
    public function test_display_given2_shouldReturn2()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_simple_minutes(2);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute]",$actual);
    }
    public function test_display_given3_shouldReturn3()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_simple_minutes(3);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]",$actual);
    }
    public function test_display_given4_shouldReturn4()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_simple_minutes(4);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]",$actual);
    }


}
