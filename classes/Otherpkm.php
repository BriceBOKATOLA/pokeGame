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
     * Dégâts du personnage
     * @var int
     */
    private $damage;

    /**
     * Nombre de dégâts subit par le pokemon
     *
     * @var int
     */
    protected $damageSuffured;

    /**
     * Etat du pokemon
     *
     * @var int
     */
    protected $combatStatus = true;



    // --- CONCTRUCTEUR ---

    /**
     * Constructeur de la classe otherpkm
     * @param string $type
     * @param string $name
     * @param integer $health
     */
    public function __construct(string $type, string $name, int $health)
    {
        parent::__construct($type, $name, $health);

        // $this->weakAgainst = $weakAgainst;
        // $this->strongAgainst = $strongAgainst;
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

    /**
     * l'état du pokémon
     * @return bool
     */
    public function getCombatStatus():bool
    {
        return $this->combatStatus;
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
     * défini l'état du pokémon'
     * @param bool $statedamage
     * @return self
     */
    public function setCombatStatus(int $status):self
    {
        $this->combatStatus = $status;
        return $this;
    }

    /**
     * Attaque du pokemon
     * @return int
     */
    public function attack(): int
    {
        $this->setDamage(rand(35, 50));
        return $this->getDamage();
    }

    /**
     * Fonction qui enregistre les dégâts causé par l'adversaire
     * @param int $damage
     * @return self
     */
    public function attacked(int $damage, string $typeEnnemy):self
    {
        // On génère un nombre entre 1 et 4 pour avoir une chance sur quatre de raté son attaque
        $attackChance = rand(1, 4);
        if($attackChance >= 2){
            // attaque efficace
            if(($this->type == "Plante" && ($typeEnnemy == "Feu" || $typeEnnemy == "Insecte")) || ($this->type == "Eau" && ($typeEnnemy == "Plante" || $typeEnnemy == "Electrique")) || ($this->type == "Feu" && $typeEnnemy == "Eau") || ($this->type == "Insecte" && $typeEnnemy == "Feu"))
            {
                $damage = $damage * 2;
            }
            // attaque inefficace
            if(($this->type == "Feu" && ($typeEnnemy == "Feu" || $typeEnnemy == "Insecte" || $typeEnnemy == "Plante")) || ($this->type == "Eau" && ($typeEnnemy == "Feu" || $typeEnnemy == "Eau")) || ($this->type == "Plante" && ($typeEnnemy == "Eau" || $typeEnnemy == "Electrique" || $typeEnnemy == "Plante")) || ($this->type == "Insecte" && $typeEnnemy == "Plante"))
            {
                $damage = $damage * 0.5;
            }

            $this->setDamageSuffured($damage);

            $this->setHealth($this->getHealth() - $this->getDamageSuffured());
            
            if ($this->getHealth() < 0){
                $this->setHealth(0);
            }
        }
        else {
            $this->setDamageSuffured(0);
        }
        

        return $this;
    }
}