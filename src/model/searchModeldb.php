<?php
require_once "bootstrap.php";

class searchModeldb {

    function searchPersonne($cni){

        $qb = $entityManager->createQueryBuilder();

        $qb->select('*')
           ->from('clientphysique')
           ->where('cni')
           ->like('$cni%')
           ->orderBy('u.name', 'ASC');

        $sql = "SELECT * FROM personne WHERE cni LIKE '".$cni."%'";
        $db = getConnexion();
        return $db->query($sql);
    }
}
?>