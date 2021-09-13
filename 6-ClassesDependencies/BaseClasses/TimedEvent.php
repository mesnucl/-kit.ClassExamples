<?php

abstract class TimedEvent
{
    protected DateTime $startDateTime;
    protected DateTime $endDateTime;

    public function __construct(
        DateTime $startDateTime,
        DateTime $endDateTime)
    {
        $this->startDateTime = $startDateTime;
        $this->endDateTime = $endDateTime;
    }

    public function getSessionDurationInFullHours() : int //Læg mærke til problemet med denne metode?
    {
        $differenceAsDateInterval = $this->endDateTime->diff($this->startDateTime);
        return $differenceAsDateInterval->h; // h er et dårligt property navn, den burde hedder hours for at være explicit.
    }
    public function getSessionDurationInFullMinutes() : int
    {
        $differenceAsDateInterval = $this->endDateTime->diff($this->startDateTime);
        $differenceInMinutes  =
            ($differenceAsDateInterval->days *24 * 60) + ($differenceAsDateInterval->h * 60) + $differenceAsDateInterval->i;
        return $differenceInMinutes;
    }

    public function __toString() : string
    {
        return "TimedEvent:{
            StartDate:{$this->startDateTime->format('Y-m-d H:i:s')},
            EndDate:{$this->endDateTime->format('Y-m-d H:i:s')}
        }";
    }


}