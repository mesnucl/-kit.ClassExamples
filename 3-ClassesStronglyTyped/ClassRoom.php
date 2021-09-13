<?php

    class ClassRoom{

        public string $roomNumber;
        public  int $availableSeatsSeats;

        public function __construct(
            string $roomNumber,
            string $availableSeatsSeats)
        {
            $this->roomNumber = $roomNumber;
            $this->availableSeatsSeats = $availableSeatsSeats;
        }

        public function __toString() : string
        {
           return "
                ClassRoom:{
                    RoomNumber:{$this->roomNumber},
                    AvailableSeats:{$this->availableSeatsSeats}
                }
           ";
        }


    }
