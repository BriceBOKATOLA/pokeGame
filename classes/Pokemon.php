<?php

class Pokemon {

    // --- ATTRIBUTS --- 

    /**
     * Type du pokémon
     * @var string
     */
    protected $type;

    /**
     * Nom du pokémon
     * @var string
     */
    protected $name;

    /**
     * Vie du pokémon
     * @var int
     */
    protected $health;

    // --- CONCTRUCTEUR ---

    /**
     * Constructeur de la classe Pokemon
     * @param string $type
     * @param string $name
     * @param integer $health
     */
    public function __construct(string $type, string $name, int $health)
    {
        $this->type = $type;
        $this->name = $name;
        $this->health = $health;
    }


    // --- METHODS ---


    // GETTER

    /**
     * Récupère le type du pokemon
     *
     * @return string
     */
    public function getType():string
    {
        return $this->type;
    }

    /**
     * Récupère le nom du pokemon
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Récupère la vie du pokemon
     *
     * @return int
     */
    public function getHealth():int
    {
        return $this->health;
    }


    // SETTER

    /**
     * Renseigne le type du pokémon
     *
     * @param string $type
     * @return self
     */
    public function setType(string $type):self
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Renseigne le nom du pokémon
     *
     * @param string $name
     * @return self
     */
    public function setName(string $name):self
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Renseigne la vie du pokémon
     *
     * @param int $health
     * @return self
     */
    public function setHealth(string $health):self
    {
        $this->health = $health;
        return $this;
    }
}