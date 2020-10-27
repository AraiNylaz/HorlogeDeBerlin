<?php
/**
 * Author : ETIENNE Lorine and PRONCE Alexandre  (2I2) 
 */

class HorlogeDeBerlin
{
    public $arraySimpleMinutes = array("1st Minute", "2nd Minute", "3rd Minute", "4th Minute");
    public $array5Minutes = array("5min", "10min", "15MIN", "20min", "25min", "30MIN", "35min", "40min", "45MIN", "50min", "55min");
    public $arraySimpleHours = array("1st hour", "2nd hour", "3rd hour", "4th hour");
    public $array5Hours = array("5hours", "10hours", "15hours", "20hours");

    public function __construct()
    {
    }

    public function display_simple_minutes($minute): string
    {
        $stringToReturn = "";
        for ($index = 0; $index < $minute % 5; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->arraySimpleMinutes[$index] . "]";
        }
        return $stringToReturn;
    }

    public function display_5_by_5_minutes($minute): string
    {
        $stringToReturn = "";
        for ($index = 0; $index < floor($minute / 5); $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->array5Minutes[$index] . "]";
        }
        return $stringToReturn;
    }

    public function display_simple_hours($hours): string
    {
        $stringToReturn = "";
        for ($index = 0; $index < $hours % 5; $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->arraySimpleHours[$index] . "]";
        }
        return $stringToReturn;


    }

    public function display_5_by_5_hours($hours): string
    {
        $stringToReturn = "";
        for ($index = 0; $index < floor($hours / 5); $index++) {
            $stringToReturn = $stringToReturn . "[" . $this->array5Hours[$index] . "]";
        }
        return $stringToReturn;
    }
    
    public function display_seconds($seconds): string
    {
        if($seconds%2 === 0)return "ON";
        return "OFF";
    }
}
