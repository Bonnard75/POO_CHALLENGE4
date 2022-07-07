<?php

class Car 
{
    private string $energy;
    private int $energyLevel;
    private bool $hasParkBrake;


    public function start() : void
    {
        if ($this->hasParkBrake) {
            throw new Exception("Le frein à main est enclenché ");
        }
    }


    public function setHasParkBrake(bool $hasParkBrake): void
    {
        $this->hasParkBrake = $hasParkBrake;
    }
} 

?>
