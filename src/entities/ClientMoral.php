<?php
namespace entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientMoral")
 */
   class ClientMoral {

    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;

    /** 
     * @ORM\Column(type="string") 
     */
    private $nom;

    /** 
     * @ORM\Column(type="string") 
     */
    private $adresse;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $tel;

    /** 
     * @ORM\Column(type="string") 
     */
    private $email;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $ninea;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $regiscom;

    /**
     * One ClientMoral has many Compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="CompteClient", mappedBy="clientmoral")
     */
    private $numCompte;

    function __construct(){

    }


    public function getId(){
        return $this->id;
    }
    
    public function setId($id){
        $this->id = $id;
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getNinea(){
        return $this->ninea;
    }
    
    public function setNinea($ninea){
        $this->ninea = $ninea;
    }

    public function getRegiscom(){
        return $this->regiscom;
    }
    
    public function setRegiscom($regiscom){
        $this->regiscom = $regiscom;
    }

}