<?php
    require_once './../config/autoload.php';
        
    use model\clientPhysiquedb;
    use entities\clientPhysique;
    
    
   
    extract($_POST);

    if (isset($_POST)) {

        $clientP = new ClientPhysique();
        $clientPdb = new ClientPhysiquedb();
            
        $clientP->setNom($_POST['nomPhysique']);
        $clientP->setPrenom($_POST['prenomPhysique']);
        $clientP->setAdresse($_POST['adressePhysique']);
        $clientP->setTel($_POST['telPhysique']);
        $clientP->setEmail($_POST['emailPhysique']);
        $clientP->setIdentifiant($_POST['cni']);
        $clientP->setSalaire($_POST['salaire'] !='' ? $_POST['salaire'] : 0);
        $clientP->setProfession($_POST['profession']);
        $clientP->setInfosEmp($_POST['infos_emp']);
        
        $log = $clientPdb->add($clientP);

        // var_dump($log);
                    
        if ($log) {
           echo 'Ajout effectue avec succes !';
        } else {
            echo '<h1>Ajout Non effectue</h1>';
        }
    }