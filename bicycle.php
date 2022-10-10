<?php

class Bicycle {
    private string $color;
    private int $currentSpeed;
    private int $nbSeats = 1;
    private int $nbWheels = 2;

    // Get & Set color
    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    // Get & Set currentSpeed
    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    // Get & Set nbSeats
    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function setNbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    // Get & Set nbWheels

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function setnbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    // Constructor
    public function __construct(string $color)
    {
        $this->color = $color;
    }

    // Avancer
    public function forward(): string
    {
        $this->currentSpeed = 15;
        return "Go !";
    }

    // Freiner
    public function brake(): string
    {
    $sentence = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }
    $sentence .= "I'm stopped !";
        return $sentence;
    }
}

?>