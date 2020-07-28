<?php
namespace model;    
use entities\clientMoral;

require_once "../../bootstrap.php";
    

class ClientMoraldb {

    public function add($clientM){
        $entityManager->persist($clientM);
        $entityManager->flush();

        echo "Enregistrement réussi: id du client " . $clientM->getId() . "\n";
    }

    public function read(){
        $clientMRepository = $entityManager->getRepository('ClientMoral');
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
        $client = $entityManager->find('clientMoral', $id);

        if ($client === null) {
            echo "Client introuvable !.\n";
            exit(1);
        }

        echo sprintf("-%s\n", $client->getNom()," ",
                              $client->getAdresse()," ",
                              $client->getTelephone()," ",
                              $client->getEmail()
                    );
    }
}
?>