<?php
require_once("connexion.php");
$req="SELECT * FROM eleve";
$rs=mysql_query($req) or die(mysql_error());
?>
<html>
    <body>
        <table border="1">
            <tr>
              <th>Numero de l'eleve</th> <th>Nom</th> <th>Postnom</th><th>Sexe</th><th>Age</th><th>Numero de la classe</th>
            </tr>
            <?php while ($ET=mysql_fetch_assoc($rs)){?>
                <tr>
                    <td><?php echo($ET['num_eleve'])?></td>
                    <td><?php echo($ET['nom'])?></td>
                    <td><?php echo($ET['postnom'])?></td>
                    <td><?php echo($ET['sexe'])?></td>
                    <td><?php echo($ET['age'])?></td>
                    <td><?php echo($ET['num_classe'])?></td>
                </tr>
            <?php }?>

        </table>
    </body>
</html>