<?php
    $listeutilisateur = ["Gabriel","Nathan","Philippe","Laeticia","Marion","Nelson","Patrick"];

    
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equive="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question4</title>
</head>
<body>
<Form className="d-flex">
    <form action="Question4.php" method="POST">
        <input name="filtre" placeholder="Rechercher un utilisateur" >
        <button type="submit">Rechercher</button>
    </form>
    <table>
        <thead>
            <th>Utilisateur</th>
        </thead>
        <tbody>
            <?php foreach($listeutilisateur as $value): ?>
                 <tr>
                     <td><?= $value; ?></td>
                 </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>