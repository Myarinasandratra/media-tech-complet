<?php
    include 'framework/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>liste</title>
    <link rel="stylesheet" href="framework/css/bootstrap.css">
    <script src="framework/js/bootstrap.js" defer></script>
    <script src="framework/jquery.js"defer></script>
</head>
<body>
    <div>
        <a href="../../link/ajouter.php" class="text-light"><button class="btn btn-primary my-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
            <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
        </svg>
        ajouter</button></a>
        <a href="../trirecherche.php" class="text-light"><button type="button" class="btn btn-dark" >
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>    
        RECHERCHE </button></a>
        <a href="../../export_pdf.php" class="text-light"><button class="btn btn-danger my-2">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-printer" viewBox="0 0 16 16">
            <path d="M2.5 8a.5.5 0 1 0 0-1 .5.5 0 0 0 0 1z"/>
            <path d="M5 1a2 2 0 0 0-2 2v2H2a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h1v1a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-1h1a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2h-1V3a2 2 0 0 0-2-2H5zM4 3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v2H4V3zm1 5a2 2 0 0 0-2 2v1H2a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1v-1a2 2 0 0 0-2-2H5zm7 2v3a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1z"/>
        </svg>    
        Exporter en pdf</button></a>
        <table class="table">
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
                                    <button class="btn btn-info"><a href="../../link/update.php?updateid='.$id.'"class="text-light">à jour</a></button>
                                    <button class="btn btn-danger"><a href="../../link/delete.php?deleteid='.$id.'"class="text-light">Suppr</a></button>
                                </td>
                            </tr>';
                            }
                        }
                    ?>
                    
                </tbody>
        </table>

    </div>
</body>
</html>