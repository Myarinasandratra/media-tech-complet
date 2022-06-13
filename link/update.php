<?php
    include 'framework/connection.php';
    $id=$_GET['updateid'];

    $sql="SELECT * FROM `liste` WHERE id=$id";
    $result= mysqli_query($conne,$sql);
    $row = mysqli_fetch_assoc($result);
    $nom= $row['nom'];
    $prenom= $row['prenom'];
    $etab= $row['etablissement'];
    $niveau= $row['niveau'];
    $adresse= $row['adresse'];
    $contact= $row['contact'];
    $sexe = $row['sexe'];
    $date = $row['temp'];

    if(isset($_POST['ajout'])){
        $name = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $etab = $_POST['etab'];
        $niveau = $_POST['niveau'];
        $adresse = $_POST['adresse'];
        $contact = $_POST['contact'];
        $sexe = $_POST['sexe'];
        $date = $_POST['temp'];


        $sql = "UPDATE `liste` SET id=$id,etablissement='$etab'
                ,niveau='$niveau',contact='$contact',temp='$date' WHERE id=$id";
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
<body>
    <div class="container">
        <form method ="post"style="margin:50px;">
            <div class="mb-3">
                

                <label for="etab" class="form-label">ETABLISSEMENT</label>
                <input type="text" id="etab" name="etab" class="form-control" placeholder="Entrer l'etablissement"autocomplete="off"value=<?php echo $etab; ?>>

                <label for="niveau" class="form-label">NIVEAU</label>
                <input type="text" id="niveau" name="niveau" class="form-control" placeholder="Entrer le niveau"autocomplete="off"value=<?php echo $niveau; ?>>

               
 
                <label for="contact" class="form-label">CONTACT</label>
                <input type="text" id="contact" name="contact" class="form-control" placeholder="Entrer le contact"autocomplete="off"value=<?php echo $contact; ?>>

                <label for="niveau" class="form-label">DATE DE PASSAGE</label>
                <input type="datetime-local" id="temp" name="temp" class="form-control" placeholder="date de passage"autocomplete="off"value=<?php echo $date; ?>>
                
              
            </div>
            <button type="submit" class="btn btn-success" name="ajout">Mis à jour</button>
        </form>
    </div>
</body>
</html>