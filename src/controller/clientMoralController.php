<?php
    require_once '../config/autoload.php';
    
    use model\ClientMoraldb;
    use entities\clientMoral;
    
   
    extract($_POST);

    if (isset($_POST)) {

        $clientM = new ClientMoral();
        $clientMoraldb = new ClientMoraldb();
            
        $clientMoral->setNom($_POST['nomEntreprise']);
        $clientMoral->setAdresse($_POST['adresseEntreprise']);
        $clientMoral->setTel($_POST['telEntreprise']);
        $clientMoral->setEmail($_POST['emailEntreprise']);
        $clientMoral->setNinea($_POST['ninea']);
        $clientMoral->setRegiscom($_POST['regiscommerce']);
            

        $log = $clientMoraldb->add($clientM);

            // var_dump($log);
            
        if ($log) {
           echo 'Ajout effectue avec succes !';
        } else {
            echo 'Ajout Non effectue';
        }
    }