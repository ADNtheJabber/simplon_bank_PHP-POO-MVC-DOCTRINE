<?php
namespace model;    
use entities\clientPhysique;

require_once "../../bootstrap.php";

class ClientPhysiquedb {

    public function add($clientP){
        $entityManager->persist($clientP);
        $entityManager->flush();

        echo "Enregistrement réussi: id du client " . $clientP->getId() . "\n";
    }

    public function read(){
        $clientMRepository = $entityManager->getRepository('clientPhysique');
        $clients = $clientMRepository->findAll();

        foreach ($clients as $client) {
            echo sprintf("-%s\n", $client->getNom()," ",
                                  $client->getAdresse()," ",
                                  $client->getTelephone()," ",
                                  $client->getEmail()
                        );
        }
    }

    public function showOne(){
        $id = $argv[1];
        $client = $entityManager->find('clientPhysique', $id);

        if ($client === null) {
            echo "Client introuvable !.\n";
            exit(1);
        }

        echo sprintf("-%s\n", $client->getNom()," ",
                              $client->getPrenom()," ",                      
                              $client->getAdresse()," ",
                              $client->getTel()                              
                    );
    }
}
?>