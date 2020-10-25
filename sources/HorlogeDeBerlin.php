<?php
date_default_timezone_set('Europe/Berlin');
$time = date("H:i:s");
$date = new \DateTime();
$hours = $date->format('H');
$minutes = $date->format('i');
$seconds = $date->format('s');

$minuteModulo5 = $minutes % 5;
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
        if ($minute === 1) return "[" . $this->arraySimpleMinutes[0] . "]";
        if ($minute === 2) return "[" . $this->arraySimpleMinutes[0] . "]" . "[" . $this->arraySimpleMinutes[1] . "]";
        if ($minute === 3) return "[" . $this->arraySimpleMinutes[0] . "]" . "[" . $this->arraySimpleMinutes[1] . "]" . "[" . $this->arraySimpleMinutes[2] . "]";
        if ($minute === 4) return "[" . $this->arraySimpleMinutes[0] . "]" . "[" . $this->arraySimpleMinutes[1] . "]" . "[" . $this->arraySimpleMinutes[2] . "]" . "[" . $this->arraySimpleMinutes[3] . "]";
        if ($minute === 5) return "";
        if ($minute === 6) return "[" . $this->arraySimpleMinutes[0] . "]";
        if ($minute === 7) return "[" . $this->arraySimpleMinutes[0] . "]" . "[" . $this->arraySimpleMinutes[1] . "]";
    }
}