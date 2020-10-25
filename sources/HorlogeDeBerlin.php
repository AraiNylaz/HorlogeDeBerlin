<?php
date_default_timezone_set('Europe/Berlin');
$time = date("H:i:s");
$date = new \DateTime();
$hours = $date->format('H');
$minutes = $date->format('i');
$seconds = $date->format('s');

//$minuteModulo5 = $minutes % 5;
$minuteDividedBy5 = $minutes / 5;

$hoursModulo5 = $hours % 5;
$hourDividedBy5 = $hours / 5;


class HorlogeDeBerlin
{

    public $arraySimpleMinutes = array("1st Minute", "2nd Minute", "3rd Minute", "4th Minute");
    public $array5Minutes = array("5min", "10min", "15MIN", "20min", "25min", "30MIN", "35min", "40min", "45MIN", "50min", "55min");

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
        if ($minute === 5) return "[" . $this->array5Minutes[0] . "]";
        if ($minute === 10) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]";
        if ($minute === 15) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]" . "[" . $this->array5Minutes[2] . "]";
        if ($minute === 20) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]" . "[" . $this->array5Minutes[2] . "]" . "[" . $this->array5Minutes[3] . "]";
        if ($minute === 25) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]" . "[" . $this->array5Minutes[2] . "]" . "[" . $this->array5Minutes[3] . "]" . "[" . $this->array5Minutes[4] . "]";
        if ($minute === 30) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]" . "[" . $this->array5Minutes[2] . "]" . "[" . $this->array5Minutes[3] . "]" . "[" . $this->array5Minutes[4] . "]" . "[" . $this->array5Minutes[5] . "]";
        if ($minute === 35) return "[" . $this->array5Minutes[0] . "]" . "[" . $this->array5Minutes[1] . "]" . "[" . $this->array5Minutes[2] . "]" . "[" . $this->array5Minutes[3] . "]" . "[" . $this->array5Minutes[4] . "]" . "[" . $this->array5Minutes[5] . "]" . "[" . $this->array5Minutes[6] . "]";

    }
}