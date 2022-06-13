<?php
    include 'framework/connection.php';
    if(isset($_POST['ajout'])){
        $name = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $etab = $_POST['etab'];
        $niveau = $_POST['niveau'];
        $adresse = $_POST['adresse'];
        $contact = $_POST['contact'];
        $date=$_POST['temp'];
        $sexe=$_POST['sexe'];

        $sql = " INSERT INTO `liste` (nom,prenom,etablissement,niveau,adresse,contact,temp,sexe) VALUES ('$name','$prenom','$etab','$niveau','$adresse','$contact','$date','$sexe')";
        $execute = mysqli_query($conne,$sql);
        if($execute){
            // echo "data insert succesfuly";
            header('location:../en tete/liste et activite/liste-et-activite.php');
        }
        else{
            die(mysqli_error($conne));
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="framework/css/bootstrap.css">
    <script src="framework/js/bootstrap.js" defer></script>
    <script src="framework/jquery.js"defer></script>

</head>
<body class="p-3 mb-2 bg-secondary text-dark bg-opacity-10">
    <div class="container">
        <form method ="post"style="margin:50px;">
            <div class="mb-3">
                <label for="nom" class="form-label">NOM</label>
                <input type="text" id="nom" name="nom" class="form-control" placeholder="Entrer le nom"autocomplete="off">

                <label for="prenom" class="form-label">PRENOM</label>
                <input type="text" id="prenom" name="prenom" class="form-control" placeholder="Entrer le prenom"autocomplete="off">

                <label for="etab" class="form-label">ETABLISSEMENT</label>
                <input type="text" id="etab" name="etab" class="form-control" placeholder="Entrer l'etablissement"autocomplete="off">

                <label for="niveau" class="form-label">NIVEAU ET FILIERE</label>
                <input type="text" id="niveau" name="niveau" class="form-control" placeholder="Entrer le niveau"autocomplete="off">

                <label for="adresse" class="form-label">ADRESSE</label>
                <input type="text" id="adresse" name="adresse" class="form-control" placeholder="Entrer l'adresse"autocomplete="off">

                <label for="contact" class="form-label">CONTACT</label>
                <input type="number" id="contact" name="contact" class="form-control" placeholder="Entrer le contact" value = "+261 "autocomplete="off">

                <label for="niveau" class="form-label">DATE DE PASSAGE</label>
                <input type="datetime-local" id="temp" name="temp" class="form-control" placeholder="date de passage"autocomplete="off">

                <label for="sexe">SEXE  </label>
                <select class="form-select" name ="sexe" aria-label="Default select example">
                    <option value="homme" name="sexe">HOMME</option>
                    <option value="femme" name="sexe">FEMME</option>
                </select>

             


</div>
            <button type="submit" class="btn btn-primary" name="ajout">Ajouter</button>
        </form>
    </div>
</body>
</html>