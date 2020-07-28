<?php
namespace model;    
use entities\CompteClient;

class Comptedb {
    
    public function add($compte){
        require_once '../../bootstrap.php';
        $entityManager->persist($compte);
        $entityManager->flush();

        echo "Enregistrement réussi: id du compte " . $compte->getId() . "";
    }

    public function read(){
        $clientMRepository = $entityManager->getRepository('clientMoral');
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