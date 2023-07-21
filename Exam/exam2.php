<?php

// Deck of Cards


// The Deck class represents a deck of cards.
class Deck {
    private $cards = array();

    // The constructor __construct() is called when a new object of the class is created. It initializes the deck by calling the createDeck() method.
    public function __construct() {
        $this->createDeck();
    }

    // The private method createDeck() creates the initial deck of cards by combining all possible suits and values. It populates the $cards array with the names of the cards (e.g., "2 of Hearts", "King of Diamonds", etc.).
    private function createDeck() {
        $this->cards = array();
        $suits = array('Spades', 'Hearts', 'Diamonds', 'Clubs');
        $rank = array('Ace','2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King');
        foreach ($suits as $suit) {
            foreach ($rank as $ranks) {
                $this->cards[] = $ranks . ' of ' . $suit;
            }
        }
    }

    // The shuffleDeck() method shuffles the deck randomly using the PHP shuffle() function. It changes the order of the cards in the $cards array.
    public function shuffleDeck() {
        shuffle($this->cards);
    }

    // The drawCard() method simulates drawing a card from the top of the deck. It removes and returns the first card in the $cards array using array_shift().
    public function drawCard() {
        return array_shift($this->cards);
    }

    // The resetDeck() method recreates the deck by calling the createDeck() method. It resets the deck to its original order, as it was when the object was first created.
    public function resetDeck() {
        $this->cards = array();
        $this->createDeck();
    }

    // The getDeck() method returns the current state of the deck. This method can be useful for debugging purposes to inspect the deck's contents.
    public function getDeck() {
        return $this->cards;
    }
}

// Create a new instance of the Deck class.
$cards = new Deck();
// Shuffle deck
$cards->shuffleDeck();

// Display the shuffled deck of cards
$x = 1;
echo "Shuffled Deck: <br>";
foreach ($cards->getDeck() as $card) {
    echo $x++.'.) '.$card. "<br>";
}

// Draw a card
$drawnCard = $cards->drawCard();
echo "<br>Drawn Card: " . $drawnCard . "<br>";

// Display the updated deck after drawing a card
$x = 1;
echo "<br>Latest Deck: <br>";
foreach ($cards->getDeck() as $card) {
    echo $x++.'.) '.$card. "<br>";
}

// Reset the deck
$cards->resetDeck();
$x = 1;
echo "<br>Deck after reset: <br>";
foreach ($cards->getDeck() as $card) {
    echo $x++.'.) '.$card. "<br>";
}

?>