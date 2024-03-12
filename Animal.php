<?php 

declare(strict_types=1);

abstract class Animal
{
    private string $name;
    private string $type;
    private int $age;

    /**
     * Get the value of name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of type
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @param int $age
     *
     * @return self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }
    public function displayAnimal(): string 
    {
        return "L'animal s'appelle " . $this->name . "c'est un " . $this->type . " et il a  " . $this->age . " ans ";
    }
}
//obtenir la valeur "age

    class Chien extends Animal
    {
        public function aboie():string
        {
            return"wouaf wouaf";
        }
    }
    class Chat extends Animal
    {
        public function miaule():string
        {
            return"wmiaou miaou";
        }
    }

    $chat= new Chat();
    $chat->setName("Drago")->setType("chat")->setAge(3);
    echo $chat->displayAnimal();
    echo"<br>";
    echo $chat->miaule();
    echo"<br>";
    $chien = new Chien();
    $chien->setName("Rex")->setType("labrador")->setAge(6);
    echo $chien->displayAnimal();
    echo"<br>";