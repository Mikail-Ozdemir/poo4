<?php
//Car.php



class Car
{
    private $color;
    private $currentSpeed;
    private $nbSeats;
    private $nbWheels;
    private $energy;
    private $energyLevel;


    public function __construct(string $color, int $nbSeats,string $energy)
      {
          $this->color = $color;
          $this->nbSeats = $nbSeats;
          $this->energy = $energy;
      }

    public function forward()
    {
        $this->currentSpeed;
        return "LEZGOO !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "DOUZZZCEMENT !!!";
    }
        $sentence .= "J'suis A l'arret !";
        return $sentence;
    }

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): string
    {
        return $this->nbSeats;
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function getEnergyLevel(): string
    {
        return $this->energyLevel;
    }

    public function getLeFreinDePark(): bool
    {
        return $this->leFreinDePark;
    }
    public function setLeFreinDePark($leFreinDePark)
    {
        $this->LeFreinDePark = $leFreinDePark;
    }
    public function start(): string
    {
        if ($this->leFreinDePark === true)
            throw(new Exception("frein de park activer"));
        else
         $this->currentSpeed = 3; 
        return "le gamozzz demarrre !";
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
}