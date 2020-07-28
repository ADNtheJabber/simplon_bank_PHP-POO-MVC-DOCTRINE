<?php 
    include '../header.html';
?>

</header>
    <h1>Liste des comptes de la Banque Populaire</h1>
    <a href="ajoutCompte">Ajouter un nouveau compte</a>
    <table>
        <tr>
            <th>idCompte</th>
            <th>NumCompte</th>
            <th>Propriétaire</th>
            <th><em>Type de compte</em></th>
        </tr>
    <?php foreach($comptes as $compte): ?>
        <tr>
            <td><?php echo $compte['title'] ?></td>
            <td><?php echo $compte['content'] ?></td>
            <td><?php echo $compte['User'] ?></td>
            <td>
            <a href="?action=update&amp;id=<?php echo $compte['id'] ?>">Modifier</a>
            <a href="?action=delete&amp;id=<?php echo $compte['id'] ?>">Supprimer</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>