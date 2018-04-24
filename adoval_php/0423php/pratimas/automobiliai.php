<?php

class Radar
{
    public $date;
    public $number;
    public $distance;
    public $time;
    public $greitis;

    public function __construct($date, $number, $distance, $time, $greitis)
    {
        $this->date = $date;
        $this->number = $number;
        $this->distance = $distance;
        $this->time = $time;
        $this->greitis = $greitis;
    }


}