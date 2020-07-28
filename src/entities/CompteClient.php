<?php
namespace entities;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
    class CompteClient {

        /** 
        * @ORM\Id
        * @ORM\Column(type="integer")
        * @ORM\GeneratedValue
        */
        private $id;

        /** 
        * @ORM\Column(type="string") 
        */
        private $numCompte;

        /** 
        * @ORM\Column(type="string") 
        */
        private $typeCompte;

        /** 
        * @ORM\Column(type="decimal") 
        */
        private $fraisOuv;

        /** 
        * @ORM\Column(type="decimal") 
        */
        private $remuneration;

        /** 
        * @ORM\Column(type="date") 
        */
        private $dateDeblocage;

        /** 
        * @ORM\Column(type="decimal") 
        */
        private $depotInitial;

        /**
         * Many clientPhysique have one Compte. This is the owning side.
         * @ManyToOne(targetEntity="CompteClient", inversedBy="clientphysique")
         * @JoinColumn(name="compte_id", referencedColumnName="id")
         */
        private $idClientPhysique;

        /**
         * Many clientEntreprise have one Compte. This is the owning side.
         * @ManyToOne(targetEntity="CompteClient", inversedBy="cliententreprise")
         * @JoinColumn(name="compte_id", referencedColumnName="id")
         */
        private $idClientEntreprise;

        function __construct(){

        }

       
        public function getId(){
            return $this->id;
        }
        
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNumCompte(){
            return $this->numCompte;
        }
        
        public function setNumCompte($numCompte){
            $this->numCompte = $numCompte;
        }
    
        public function getTypeCompte(){
            return $this->typeCompte;
        }
        
        public function setTypeCompte($typeCompte){
            $this->typeCompte = $typeCompte;
        }
    
        public function getFraisOuv(){
            return $this->fraisOuv;
        }
        
        public function setFraisOuv($fraisOuv){
            $this->fraisOuv = $fraisOuv;
        }
    
        public function getRemuneration(){
            return $this->remuneration;
        }
        
        public function setRemuneration($remuneration){
            $this->remuneration = $remuneration;
        }
    
        public function getDateDeblocage(){
            return $this->dateDeblocage;
        }
        
        public function setDateDeblocage($dateDeblocage){
            $this->dateDeblocage = $dateDeblocage;
        }
    
        public function getDepotInitial(){
            return $this->depotInitial;
        }
        
        public function setDepotInitial($depotInitial){
            $this->depotInitial = $depotInitial;
        }

        public function getIdClientPhysique(){
            return $this->idClientPhysique;
        }
        
        public function setIdClientPhysique($idClientPhysique){
            $this->idClientPhysique = $idClientPhysique;
        }
    
        public function getIdClientEntreprise(){
            return $this->idClientEntreprise;
        }
        
        public function setIdClientEntreprise($idClientEntreprise){
            $this->idClientEntreprise = $idClientEntreprise;
        }
    }

?>