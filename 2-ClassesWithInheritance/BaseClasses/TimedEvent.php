<?php

abstract class TimedEvent
{
    public $startDateTime;
    public $endDateTime;

    public function __construct($startDateTime, $endDateTime)
    {
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }

    public function __toString()
    {
        return "TimedEvent:{
            StartDate:{$this->startDateTime->format('Y-m-d H:i:s')},
            EndDate:{$this->endDateTime->format('Y-m-d H:i:s')}
        }";
    }


}