<?php

abstract class Animal
{
    private string $name;
    private string $type;
    private int $age;

    public function __construct(string $name, string $type, int $age)
    {
        $this->name = $name;
        $this->type = $type;
        $this->age = $age;
    }
    public function getName(): ?string
    {
        return $this->name;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getAge(): ?int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): static
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): static
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }


    public function displayAnimal(): string
    {
        return "L'animal s'appelle $this->name, c'est un $this->type et il a $this->age ans ";
    }
}

class chien extends Animal
{
    public function aboie (): string
    {
        return "wouaf wouaf";
    }
}

class chat extends Animal
{
    public function miaule(): string
    {
        return "miaou miaou";
    }
}

$chien1 = new Chien('Rex', 'bouldog', 2);
echo $chien1->displayAnimal();
echo $chien1->aboie();

$chat1 = new Chat('Felix', 'siberien', 1);
echo $chat1->displayAnimal();
echo $chat1->miaule();