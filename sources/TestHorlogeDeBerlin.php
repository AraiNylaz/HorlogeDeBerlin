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

    public function setUp(): void
    {
        parent::setUp();
        $this->horlogeDeBerlin = new HorlogeDeBerlin();
    }

    public function test_display_given1Minute_shouldReturn_1_minute()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(1);
        //assert
        $this->assertEquals("[1st Minute]", $actual);
    }

    public function test_display_given2Minutes_shouldReturn_2_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(2);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute]", $actual);
    }

    public function test_display_given3Minutes_shouldReturn_3_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(3);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]", $actual);
    }

    public function test_display_given4Minutes_shouldReturn_4_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(4);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]", $actual);
    }

    public function test_display_given5Minutes_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(5);
        //assert
        $this->assertEquals("", $actual);
    }

    public function test_display_given6Minutes_shouldReturn_1_minute()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(6);
        //assert
        $this->assertEquals("[1st Minute]", $actual);
    }

    public function test_display_given7Minutes_shouldReturn_2_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(7);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute]", $actual);
    }

    public function test_display_given8Minutes_shouldReturn_3_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(8);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]", $actual);
    }

    public function test_display_given9Minutes_shouldReturn_4_minutes()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(9);
        //assert
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]", $actual);
    }

    public function test_display_given10Minutes_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(10);
        //assert
        $this->assertEquals("", $actual);
    }

    public function test_display_given11Minutes_shouldReturn_1_minute()
    {
        //arrange

        //act
        $actual = $this->display_generic_minutes(11);
        //assert
        $this->assertEquals("[1st Minute]", $actual);
    }

    private function display_generic_minutes($minutes): string
    {
        return $this->horlogeDeBerlin->display_simple_minutes($minutes);
    }

    public function test_display_given5Minutes_shouldReturn_first_index()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(5);
        //assert
        $this->assertEquals("[5min]", $actual);
    }

    public function test_display_given10Minutes_shouldReturn_2_first_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(10);
        //assert
        $this->assertEquals("[5min][10min]", $actual);
    }

    public function test_display_given15Minutes_shouldReturn_3_first_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(15);
        //assert
        $this->assertEquals("[5min][10min][15MIN]", $actual);
    }

    public function test_display_given20Minutes_shouldReturn_4_first_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(20);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min]", $actual);
    }

    public function test_display_given25Minutes_shouldReturn_5_first_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(25);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min]", $actual);
    }

    public function test_display_given30Minutes_shouldReturn_6_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(30);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN]", $actual);
    }

    public function test_display_given35Minutes_shouldReturn_7_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(35);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min]", $actual);
    }

    public function test_display_given40Minutes_shouldReturn_8_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(40);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min]", $actual);
    }

    public function test_display_given45Minutes_shouldReturn_9_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(45);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN]", $actual);
    }

    public function test_display_given50Minutes_shouldReturn_10_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(50);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN][50min]", $actual);
    }

    public function test_display_given55Minutes_shouldReturn_all_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(55);
        //assert
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN][50min][55min]", $actual);
    }

    public function test_display_given0Minutes_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_minutes(0);
        //assert
        $this->assertEquals("", $actual);
    }

    private function display_generic_5_by_5_minutes($minutes): string
    {
        return $this->horlogeDeBerlin->display_5_by_5_minutes($minutes);
    }

    public function test_display_given1Hour_shouldReturn_1_hour()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(1);
        //assert
        $this->assertEquals("[1st hour]", $actual);
    }

    public function test_display_given2Hours_shouldReturn_2_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(2);
        //assert
        $this->assertEquals("[1st hour][2nd hour]", $actual);
    }

    public function test_display_given3Hours_shouldReturn_3_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(3);
        //assert
        $this->assertEquals("[1st hour][2nd hour][3rd hour]", $actual);
    }

    public function test_display_given4Hours_shouldReturn_4_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(4);
        //assert
        $this->assertEquals("[1st hour][2nd hour][3rd hour][4th hour]", $actual);
    }

    public function test_display_given5Hours_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(5);
        //assert
        $this->assertEquals("", $actual);
    }

    public function test_display_given6Hours_shouldReturn_1_hour()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(6);
        //assert
        $this->assertEquals("[1st hour]", $actual);
    }

    public function test_display_given7Hours_shouldReturn_2_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(7);
        //assert
        $this->assertEquals("[1st hour][2nd hour]", $actual);
    }

    public function test_display_given8Hours_shouldReturn_3_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(8);
        //assert
        $this->assertEquals("[1st hour][2nd hour][3rd hour]", $actual);
    }

    public function test_display_given9Hours_shouldReturn_4_hours()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(9);
        //assert
        $this->assertEquals("[1st hour][2nd hour][3rd hour][4th hour]", $actual);
    }

    public function test_display_given10Hours_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_hours(10);
        //assert
        $this->assertEquals("", $actual);
    }

    private function display_generic_hours($hours): string
    {
        return $this->horlogeDeBerlin->display_simple_hours($hours);
    }

    public function test_display_given0Hour_shouldReturnNothing()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_hours(0);
        //assert
        $this->assertEquals("", $actual);
    }

    public function test_display_given5Hours_shouldReturn_first_index()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_hours(5);
        //assert
        $this->assertEquals("[5hours]", $actual);
    }
    public function test_display_given0Seconds_shouldReturn_ON()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_seconds(0);
        //assert
        $this->assertEquals("ON", $actual);
    }
    public function test_display_given1Seconds_shouldReturn_OFF()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_seconds(1);
        //assert
        $this->assertEquals("OFF", $actual);
    }
    public function test_display_given2Seconds_shouldReturn_ON()
    {
        //arrange

        //act
        $actual = $this->horlogeDeBerlin->display_seconds(2);
        //assert
        $this->assertEquals("ON", $actual);
    }

    public function test_display_given10Hours_shouldReturn_first_2_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_hours(10);
        //assert
        $this->assertEquals("[5hours][10hours]", $actual);
    }

    public function test_display_given15Hours_shouldReturn_first_3_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_hours(15);
        //assert
        $this->assertEquals("[5hours][10hours][15hours]", $actual);
    }
    public function test_display_given20Hours_shouldReturn_all_indexes()
    {
        //arrange

        //act
        $actual = $this->display_generic_5_by_5_hours(20);
        //assert
        $this->assertEquals("[5hours][10hours][15hours][20hours]", $actual);
    }

    private function display_generic_5_by_5_hours($hours): string
    {
        return $this->horlogeDeBerlin->display_5_by_5_hours($hours);
    }
}
