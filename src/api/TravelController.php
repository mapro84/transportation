<?php

namespace src\api;

class TravelController
{

    public function get($params) {
        return $this->getTravelByCards($params);
    }

    public function getTravelByCards($data): string
    {
        $boardingCards = explode(';',$data);
        // Define an empty array to hold the sorted boarding cards
        $sortedCards = array();
        // Create an array to hold all the starting and ending points
        $points = array();
        // Extract all the starting and ending points from the boarding cards and add them to the $points array
        foreach ($boardingCards as $card) {
            $points[] = $this->extractPoints($card);
        }
        // Find the starting point by looking for a point that doesn't appear as an end point in any other card
        $startPoint = "";
        foreach ($points as $point) {
            $found = false;
            foreach ($points as $point2) {
                if ($point["start"] == $point2["end"]) {
                    $found = true;
                    break;
                }
            }
            if (!$found) {
                $startPoint = $point["start"];
                break;
            }
        }

        // Add the first card to the sorted list and remove it from the unsorted list
        foreach ($boardingCards as $key => $card) {
            if (str_contains($card, $startPoint)) {
                $sortedCards[] = $card;
                unset($boardingCards[$key]);
                break;
            }
        }

        // Keep adding cards to the sorted list until there are no more cards left in the unsorted list
        while (count($boardingCards) > 0) {
            $lastCard = end($sortedCards);
            foreach ($boardingCards as $key => $card) {
                if (str_contains($card, $this->extractPoints($lastCard)["end"])) {
                    $sortedCards[] = ltrim($card,' ');
                    unset($boardingCards[$key]);
                    break;
                }
            }
        }
        $sortedCards[] = 'You have arrived at your final destination.';

        return json_encode($sortedCards);
    }

    public function extractPoints($card)
    {
        preg_match("/from (.+) to (.+), seat/", $card, $matches);
        return array("start" => trim($matches[1]), "end" => trim($matches[2]));
    }

}