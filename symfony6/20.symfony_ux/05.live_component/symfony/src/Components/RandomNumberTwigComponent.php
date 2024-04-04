<?php

// src/Components/RandomNumberComponent.php
namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('random_number_twig')]
class RandomNumberTwigComponent
{
    
    public function getRandomNumber(): int
    {
        return rand(0, 1000);
    }
}