<?php
include 'Comparable.php';
include 'ISport.php';
include 'Sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';

if (isset($_GET['id']) || isset($_POST['Club']))
{
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    } else{
        $id = $_POST['Club'];
    }


    echo '<h2>Liste des sports de '.$listClub[$id]->getNomClub().'</h2>';
    $sport1 = $listClub[$id]->getLesSports();
    foreach ($sport1 as $keySp1 => $valueSport1)
    {
        echo $valueSport1->getDescription();
    }
}



echo "<br> <a href='/index.php'>Retour</a>";