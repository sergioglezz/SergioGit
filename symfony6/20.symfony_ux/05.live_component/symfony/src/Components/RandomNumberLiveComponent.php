<?php

// src/Components/RandomNumberComponent.php
namespace App\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveProp;

#[AsLiveComponent('random_number_live')]
class RandomNumberLiveComponent
{
    #[LiveProp]
    public int $max = 1000;

    use DefaultActionTrait;

    public function getRandomNumber(): int
    {
        return rand(0, $this->max);
    }
}