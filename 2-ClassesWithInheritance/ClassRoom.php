<?php

    class ClassRoom{

        public $roomNumber;
        public $availableSeatsSeats;

        public function __construct($roomNumber, $availableSeatsSeats)
        {
            $this->roomNumber = $roomNumber;
            $this->availableSeatsSeats = $availableSeatsSeats;
        }

        public function __toString()
        {
           return "
                ClassRoom:{
                    RoomNumber:{$this->roomNumber},
                    AvailableSeats:{$this->availableSeatsSeats}
                }
           ";
        }


    }
