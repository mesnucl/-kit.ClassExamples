<?php

abstract class TimedEvent
{
    public DateTime $startDateTime;
    public DateTime $endDateTime;

    public function __construct(
        DateTime $startDateTime,
        DateTime $endDateTime)
    {
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }

    public function __toString() : string
    {
        return "TimedEvent:{
            StartDate:{$this->startDateTime->format('Y-m-d H:i:s')},
            EndDate:{$this->endDateTime->format('Y-m-d H:i:s')}
        }";
    }


}