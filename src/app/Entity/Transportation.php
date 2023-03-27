<?php

namespace src\app\Entity;

class Transportation
{
    /**
     * @return string[]
     */
    static function getAll(): array
    {
        return array(
            "Take the ferry ABCD from Valencia to Ibiza, seat 10D",
            "Take the train TGV456 from Madrid to Barcelona, seat 23C",
            "Board the flight ZW987 from Ibiza to Athens, seat 21F",
            "Board the flight XY123 from Paris to Madrid, seat 12B",
            "Board the flight KL321 from Thessaloniki to Istanbul, seat 15A",
            "Take the bus number 543 from Istanbul to Ankara, seat 3C",
            "Board the bus number 789 from Barcelona to Valencia, seat 5A",
            "Take the train IR567 from Athens to Thessaloniki, seat 8B",
            "Board the flight PQ456 from Ankara to Dubai, seat 4F",
            "Take the train RJ789 from Dubai to Abu Dhabi, seat 11D"
        );
    }

}
