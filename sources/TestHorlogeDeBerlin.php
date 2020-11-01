<?php
/**
 * Author : ETIENNE Lorine and PRONCE Alexandre  (2I2) 
 */
require "HorlogeDeBerlin.php";

use PHPUnit\Framework\TestCase;

date_default_timezone_set('Europe/Berlin');
$time = date("H:i:s");
$date = new \DateTime();
$hours = $date->format('H');
$minutes = $date->format('i');
$seconds = $date->format('s');

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
        $actual = $this->display_generic_minutes(1);
     
        $this->assertEquals("[1st Minute]", $actual);
    }

    public function test_display_given2Minutes_shouldReturn_2_minutes()
    {
        $actual = $this->display_generic_minutes(2);
 
        $this->assertEquals("[1st Minute][2nd Minute]", $actual);
    }

    public function test_display_given3Minutes_shouldReturn_3_minutes()
    {
        $actual = $this->display_generic_minutes(3);
       
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]", $actual);
    }

    public function test_display_given4Minutes_shouldReturn_4_minutes()
    {
        $actual = $this->display_generic_minutes(4);
       
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]", $actual);
    }

    public function test_display_given5Minutes_shouldReturnNothing()
    {
        $actual = $this->display_generic_minutes(5);
       
        $this->assertEquals("", $actual);
    }

    public function test_display_given6Minutes_shouldReturn_1_minute()
    {
        $actual = $this->display_generic_minutes(6);
        
        $this->assertEquals("[1st Minute]", $actual);
    }

    public function test_display_given7Minutes_shouldReturn_2_minutes()
    {
        $actual = $this->display_generic_minutes(7);
        
        $this->assertEquals("[1st Minute][2nd Minute]", $actual);
    }

    public function test_display_given8Minutes_shouldReturn_3_minutes()
    {
        $actual = $this->display_generic_minutes(8);
        
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute]", $actual);
    }

    public function test_display_given9Minutes_shouldReturn_4_minutes()
    {
        $actual = $this->display_generic_minutes(9);
        
        $this->assertEquals("[1st Minute][2nd Minute][3rd Minute][4th Minute]", $actual);
    }

    public function test_display_given10Minutes_shouldReturnNothing()
    {
        $actual = $this->display_generic_minutes(10);
        
        $this->assertEquals("", $actual);
    }

    public function test_display_given11Minutes_shouldReturn_1_minute()
    {
        $actual = $this->display_generic_minutes(11);
        
        $this->assertEquals("[1st Minute]", $actual);
    }

    private function display_generic_minutes($minutes): string
    {
        return $this->horlogeDeBerlin->display_simple_minutes($minutes);
    }

    public function test_display_given5Minutes_shouldReturn_first_index()
    {
        $actual = $this->display_generic_5_by_5_minutes(5);
        
        $this->assertEquals("[5min]", $actual);
    }

    public function test_display_given10Minutes_shouldReturn_2_first_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(10);
        
        $this->assertEquals("[5min][10min]", $actual);
    }

    public function test_display_given15Minutes_shouldReturn_3_first_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(15);
        
        $this->assertEquals("[5min][10min][15MIN]", $actual);
    }

    public function test_display_given20Minutes_shouldReturn_4_first_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(20);
        
        $this->assertEquals("[5min][10min][15MIN][20min]", $actual);
    }

    public function test_display_given25Minutes_shouldReturn_5_first_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(25);
        
        $this->assertEquals("[5min][10min][15MIN][20min][25min]", $actual);
    }

    public function test_display_given30Minutes_shouldReturn_6_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(30);
        
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN]", $actual);
    }

    public function test_display_given35Minutes_shouldReturn_7_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(35);
        
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min]", $actual);
    }

    public function test_display_given40Minutes_shouldReturn_8_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(40);
       
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min]", $actual);
    }

    public function test_display_given45Minutes_shouldReturn_9_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(45);
       
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN]", $actual);
    }

    public function test_display_given50Minutes_shouldReturn_10_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(50);
       
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN][50min]", $actual);
    }

    public function test_display_given55Minutes_shouldReturn_all_indexes()
    {
        $actual = $this->display_generic_5_by_5_minutes(55);
        
        $this->assertEquals("[5min][10min][15MIN][20min][25min][30MIN][35min][40min][45MIN][50min][55min]", $actual);
    }

    public function test_display_given0Minutes_shouldReturnNothing()
    {
        $actual = $this->display_generic_5_by_5_minutes(0);
        
        $this->assertEquals("", $actual);
    }

    private function display_generic_5_by_5_minutes($minutes): string
    {
        return $this->horlogeDeBerlin->display_5_by_5_minutes($minutes);
    }

    public function test_display_given1Hour_shouldReturn_1_hour()
    {
        $actual = $this->display_generic_hours(1);
        
        $this->assertEquals("[1st hour]", $actual);
    }

    public function test_display_given2Hours_shouldReturn_2_hours()
    {
        $actual = $this->display_generic_hours(2);
        
        $this->assertEquals("[1st hour][2nd hour]", $actual);
    }

    public function test_display_given3Hours_shouldReturn_3_hours()
    {
        $actual = $this->display_generic_hours(3);
        
        $this->assertEquals("[1st hour][2nd hour][3rd hour]", $actual);
    }

    public function test_display_given4Hours_shouldReturn_4_hours()
    {
        $actual = $this->display_generic_hours(4);
        
        $this->assertEquals("[1st hour][2nd hour][3rd hour][4th hour]", $actual);
    }

    public function test_display_given5Hours_shouldReturnNothing()
    {
        $actual = $this->display_generic_hours(5);
        
        $this->assertEquals("", $actual);
    }

    public function test_display_given6Hours_shouldReturn_1_hour()
    {
        $actual = $this->display_generic_hours(6);
        
        $this->assertEquals("[1st hour]", $actual);
    }

    public function test_display_given7Hours_shouldReturn_2_hours()
    {
        $actual = $this->display_generic_hours(7);
       
        $this->assertEquals("[1st hour][2nd hour]", $actual);
    }

    public function test_display_given8Hours_shouldReturn_3_hours()
    {
        $actual = $this->display_generic_hours(8);
      
        $this->assertEquals("[1st hour][2nd hour][3rd hour]", $actual);
    }

    public function test_display_given9Hours_shouldReturn_4_hours()
    {
        $actual = $this->display_generic_hours(9);
       
        $this->assertEquals("[1st hour][2nd hour][3rd hour][4th hour]", $actual);
    }

    public function test_display_given10Hours_shouldReturnNothing()
    {
        $actual = $this->display_generic_hours(10);
       
        $this->assertEquals("", $actual);
    }

    private function display_generic_hours($hours): string
    {
        return $this->horlogeDeBerlin->display_simple_hours($hours);
    }

    public function test_display_given0Hour_shouldReturnNothing()
    {
        $actual = $this->display_generic_5_by_5_hours(0);
       
        $this->assertEquals("", $actual);
    }

    public function test_display_given5Hours_shouldReturn_first_index()
    {
        $actual = $this->display_generic_5_by_5_hours(5);
        
        $this->assertEquals("[5hours]", $actual);
    }


    public function test_display_given10Hours_shouldReturn_first_2_indexes()
    {
        $actual = $this->display_generic_5_by_5_hours(10);
       
        $this->assertEquals("[5hours][10hours]", $actual);
    }

    public function test_display_given15Hours_shouldReturn_first_3_indexes()
    {
        $actual = $this->display_generic_5_by_5_hours(15);
        
        $this->assertEquals("[5hours][10hours][15hours]", $actual);
    }

    public function test_display_given20Hours_shouldReturn_all_indexes()
    {
        $actual = $this->display_generic_5_by_5_hours(20);
        
        $this->assertEquals("[5hours][10hours][15hours][20hours]", $actual);
    }

    private function display_generic_5_by_5_hours($hours): string
    {
        return $this->horlogeDeBerlin->display_5_by_5_hours($hours);
    }

    public function test_display_given0Seconds_shouldReturn_ON()
    {
        $actual = $this->display_generic_seconds(0);
        
        $this->assertEquals("ON", $actual);
    }

    public function test_display_given1Seconds_shouldReturn_OFF()
    {
        $actual = $this->display_generic_seconds(1);
        
        $this->assertEquals("OFF", $actual);
    }

    public function test_display_given2Seconds_shouldReturn_ON()
    {
        $actual = $this->display_generic_seconds(2);
        
        $this->assertEquals("ON", $actual);
    }

    public function test_display_given3Seconds_shouldReturn_OFF()
    {
        $actual = $this->display_generic_seconds(3);
        
        $this->assertEquals("OFF", $actual);
    }

    private function display_generic_seconds($seconds): string
    {
        return $this->horlogeDeBerlin->display_seconds($seconds);
    }

    public function display_entire_clock($hours, $minutes, $seconds): string
    {
        $string = $this->horlogeDeBerlin->display_entire_clock($hours, $minutes, $seconds);
        echo $string;
        return $string;
    }

}