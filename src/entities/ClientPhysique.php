<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="clientPhysique")
 */
class ClientPhysique {

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
    private $prenom;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $tel;

    /** 
     * @ORM\Column(type="string") 
     */
    private $adresse;

    /** 
     * @ORM\Column(type="string") 
     */
    private $email;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $cni;

    /** 
     * @ORM\Column(type="integer") 
     */
    private $salaire;

    /** 
     * @ORM\Column(type="string") 
     */
    private $profession;

    /** 
     * @ORM\Column(type="string") 
     */
    private $infosEmp;

    /**
     * One ClientPhysique has many Compte. This is the inverse side.
     * @ORM\OneToMany(targetEntity="CompteClient", mappedBy="clientphysique")
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

    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function getTel(){
        return $this->tel;
    }
    
    public function setTel($tel){
        $this->tel = $tel;
    }

    public function getAdresse(){
        return $this->adresse;
    }
    
    public function setAdresse($adresse){
        $this->adresse = $adresse;
    }

    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email = $email;
    }

    public function getIdentifiant(){
        return $this->identifiant;
    }
    
    public function setIdentifiant($identifiant){
        $this->identifiant = $identifiant;
    }

    public function getSalaire(){
        return $this->salaire;
    }
    
    public function setSalaire($salaire){
        $this->salaire = $salaire;
    }

    public function getProfession(){
        return $this->profession;
    }
    
    public function setProfession($profession){
        $this->profession = $profession;
    }

    public function getInfosEmp(){
        return $this->infosEmp;
    }
    
    public function setInfosEmp($infosEmp){
        $this->infosEmp = $infosEmp;
    }
}

?>