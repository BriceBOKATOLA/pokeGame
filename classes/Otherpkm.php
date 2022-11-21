<?php


class Otherpkm extends Pokemon {

    // --- ATTRiBUTS ---

    /**
     * Nom du type soyant fort contre le pokemon
     *
     * @var string
     */
    protected $weakAgainst;

    /**
     * Nom du type soyant faible contre le pokemon
     *
     * @var string
     */
    protected $strongAgainst;

    /**
     * Nombre de dégâts subit par le pokemon
     *
     * @var int
     */
    protected $damageSuffured;

    /**
     * Dégâts du personnage
     * @var int
     */
    private $damage;


    // --- CONCTRUCTEUR ---

    /**
     * Constructeur de la classe otherpkm
     * @param string $type
     * @param string $name
     * @param integer $health
     */
    public function __construct(string $type, string $name, int $health, string $weakAgainst, string $strongAgainst)
    {
        parent::__construct($type, $name, $health);

        $this->weakAgainst = $weakAgainst;
        $this->strongAgainst = $strongAgainst;
    }

    // --- METHODS ---

    // GETTER

    /**
     * Récupère le type qui est faible contre le pokemon
     *
     * @return string
     */
    public function getWeakAgainst():string
    {
        return $this->weakAgainst;
    }

    /**
     * Récupère le type qui est fort contre le pokemon
     *
     * @return string
     */
    public function getStrongAgainst():string
    {
        return $this->strongAgainst;
    }

    /**
     * Récupère le nombre de dégâts subit par le pokemon
     *
     * @return int
     */
    public function getDamageSuffured():int
    {
        return $this->damageSuffured;
    }

    /**
     * Récupère le nombre de dégât
     * @return int
     */
    public function getDamage():int
    {
        return $this->damage;
    }

    // SETTER

    /**
     * Renseigne le type qui est faible contre le pokemon
     * @param string $weakAgainst
     * @return self
     */
    public function setWeakAgainst(string $weakAgainst):self
    {
        $this->weakAgainst = $weakAgainst;
        return $this;
    }

    /**
     * Renseigne le type qui est faible contre le pokemon
     * @param string $strongAgainst
     * @return self
     */
    public function setStrongAgainst(string $strongAgainst):self
    {
        $this->strongAgainst = $strongAgainst;
        return $this;
    }

    /**
     * Renseigne le nombre de dégâts subit par le pokemon
     * @param string $damageSuffured
     * @return self
     */
    public function setDamageSuffured(string $damageSuffured):self
    {
        $this->damageSuffured = $damageSuffured;
        return $this;
    }

    /**
     * défini les dégâts du personnage
     * @param int $damage
     * @return self
     */
    public function setDamage(int $damage):self
    {
        $this->damage = $damage;
        return $this;
    }

    /**
     * Attaque du pokemon
     * @return int
     */
    public function attack(): int
    {
        $this->setDamage(rand(600, 800));
        return $this->getDamage();
    }

    /**
     * Fonction qui enregistre les dégâts causé par l'adversaire
     * @param int $damage
     * @return self
     */
    public function attacked(int $damage):self
    {
        $this->setHealth($this->getHealth() - $damage);
        
        if ($this->getHealth() < 0){
            $this->setHealth(0);
        }

        return $this;
    }
}