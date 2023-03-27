<?php

namespace src\Test;

use PHPUnit\Framework\TestCase;

class TravelControllerTest extends TestCase
{
    public function testGetTravelByCards()
    {
        $travelController = new \src\api\TravelController();

        $cards1 = "from Madrid to Barcelona, seat 45B; from Barcelona to Paris, seat 12A; from Paris to London, seat 21F";
        $expectedResult1 = '["from Madrid to Barcelona, seat 45B","from Barcelona to Paris, seat 12A","from Paris to London, seat 21F","You have arrived at your final destination."]';
        $this->assertEquals($expectedResult1, $travelController->getTravelByCards($cards1));

        $cards2 = "from Berlin to Moscow, seat 31C; from Moscow to Beijing, seat 27F; from Beijing to Tokyo, seat 16A";
        $expectedResult2 = '["from Berlin to Moscow, seat 31C","from Moscow to Beijing, seat 27F","from Beijing to Tokyo, seat 16A","You have arrived at your final destination."]';
        $this->assertEquals($expectedResult2, $travelController->getTravelByCards($cards2));
    }

    public function testExtractPoints()
    {
        $travelController = new \src\api\TravelController();

        $card1 = "from Madrid to Barcelona, seat 45B";
        $expectedResult1 = array("start" => "Madrid", "end" => "Barcelona");
        $this->assertEquals($expectedResult1, $travelController->extractPoints($card1));

        $card2 = "from New York to Los Angeles, seat 23F";
        $expectedResult2 = array("start" => "New York", "end" => "Los Angeles");
        $this->assertEquals($expectedResult2, $travelController->extractPoints($card2));
    }
}
