<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';


echo "Projet héritage et interface<br>";
echo "<br>";


echo '<h2>LISTE DES CLUBS</h2><a href=index.php> Accueil</a><br>';
foreach ($listClub as $keyClub => $valueClub)
{
    echo "<a href=result.php?id={$keyClub}>{$keyClub} - {$valueClub->getNomClub()} {$valueClub->getNbPoints()}</a><br>";
}
if (isset($_GET['id']))
{
    echo '<h2>Liste des sports de '.$listClub[$_GET['id']]->getNomClub().'</h2>';
    $sport1 = $listClub[$_GET['id']]->getLesSports();
    foreach ($sport1 as $keySp1 => $valueSport1)
    {
        echo $valueSport1->getDescription();
    }
}
echo "<br> <a href='/index.php'>Retour</a>";

echo"<form method='post'name='formIdClub' action='result.php'>


<label for='club-select'>Club:</label>

<select name='Club' id='club-select'>
    <option value=''>--Choisir un club--</option>
    ";
    foreach($listClub as $kFormCLub => $vFormClub)
    {
       echo "<option value='".$vFormClub->getIdClub()."'>".$vFormClub->getNomClub()."</option>";
    }

echo "</select>

<button type='submit'>Envoie !</button>
</form>";


