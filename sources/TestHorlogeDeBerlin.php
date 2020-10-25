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
        $actual = $this->display_generic_minutes(1);
        //assert
        $this->assertEquals("[1st Minute]",$actual);
    }
    public function test_display_given2_shouldReturn2()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(2);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute]",$actual);
    }
    public function test_display_given3_shouldReturn3()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(3);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]",$actual);
    }
    public function test_display_given4_shouldReturn4()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(4);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]",$actual);
    }
    public function test_display_given5_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(5);
        //assert
        $this->assertEquals("",$actual);
    }
    public function test_display_given6_shouldReturn1()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(6);
        //assert
        $this->assertEquals("[1st Minute]",$actual);
    }
    public function test_display_given7_shouldReturn2()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(7);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute]",$actual);
    }
    public function test_display_given8_shouldReturn3()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(8);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]",$actual);
    }
    public function test_display_given9_shouldReturn4()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(9);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]",$actual);
    }
    public function test_display_given10_shouldReturnNothing()
{
    //arrange

    //act
    $actual = $this->display_generic_minutes(10);
    //assert
    $this->assertEquals("",$actual);
}
    public function test_display_given11_shouldReturn1()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(11);
        //assert
        $this->assertEquals("[1st Minute]",$actual);
    }

    private function display_generic_minutes($minutes): string {
        return $this->horlogeDeBerlin->display_simple_minutes($minutes);
    }

    public function test_display_given5_shouldReturn1()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_5_by_5_minutes(5);
        //assert
        $this->assertEquals("[5min]",$actual);
    }

    public function test_display_given10_shouldReturn2()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_5_by_5_minutes(10);
        //assert
        $this->assertEquals("[5min][10min]",$actual);
    }

}
