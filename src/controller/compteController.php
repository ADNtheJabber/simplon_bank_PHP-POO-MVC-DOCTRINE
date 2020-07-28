<?php
    require_once '../../config/autoload.php';
        
    use model\comptedb;
    use entities\CompteClient;
    
    
   
    extract($_POST);

    if (isset($_POST)) {

            $compte = new CompteClient();
            $comptedb = new Comptedb();
            
            $compte->setTypeCompte($_POST['Compte']);
            $compte->setNumCompte($_POST['noCompte']);
            $compte->setFraisOuv($_POST['fraisOuv']);
            $compte->setRemuneration($_POST['remu']);
            $compte->setDepotInitial($_POST['depotCC']);
            $compte->setDateDeblocage($_POST['dateDeblocage']);
            

            $log = $comptedb->add($compte);

            // var_dump($log);
            
            if ($log) {
               echo 'Ajout effectue avec succes !';
            } else {
                echo 'Ajout Non effectue';
            }
        }