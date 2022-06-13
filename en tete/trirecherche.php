<?php 

$conne = new mysqli('localhost','root','','mediatech');

if(!$conne){
    die(mysqli_error($conne));
}
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.11.5/datatables.min.js"></script>
    <title>Tri tab</title>
  </head>
  <body>
    <a href="../link/ajouter.php" class="text-light"><button class="btn btn-success">Ajouter</button></a>
    <h1></h1>
      <div class="container-fulid">
      <div class="row" >
       <div class="container">
       <div clas="row">
       <div class="cold-md-2">
       <table id="table" class="table">
       <thead class="table-dark">
     <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Etablissement</th>
      <th scope="col">Niveau</th>
      <th scope="col">Sexe</th>
      <th scope="col">Adresse</th>
      <th scope="col">Contact</th>
      <th scope="col">Date</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
    <tbody>
    <?php
        $sql = " SELECT * FROM `liste` ORDER BY ID DESC";
        $result = mysqli_query($conne,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $nom = $row['nom'];
                $prenom = $row['prenom'];
                $etab = $row['etablissement'];
                $niveau = $row['niveau'];
                $adresse = $row['adresse'];
                $contact = $row['contact'];
                $date = $row['temp'];
                $sexe=$row['sexe'];
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$nom.'</td>
                <td>'.$prenom.'</td>
                <td>'.$etab.'</td>
                <td>'.$niveau.'</td>
                <td>'.$sexe.'</td>
                <td>'.$adresse.'</td>
                <td>'.$contact.'</td>
                <td>'.$date.'</td>
                <td>
                    <button class="btn btn-info"><a href="../link/update.php?updateid='.$id.'"class="text-light">à jour</a></button>
                    <button class="btn btn-danger"><a href="../link/delete.php?deleteid='.$id.'"class="text-light">Suppr</a></button>
                </td>
              </tr>';
            }
        }
    ?>
    
  </tbody>
       </table>
         </div>
       </div>    
       </div>   
      </div>
      </div> 
      
 
   
     <script >
         $(document).ready(function() {
     $('#table').DataTable();
           } );
     </script><!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>