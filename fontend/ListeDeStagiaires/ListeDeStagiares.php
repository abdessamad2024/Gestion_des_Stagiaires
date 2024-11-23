<?php
include '../../connexion.php';

// Handle form submission
$annee = isset($_GET['AET']) ? $_GET['AET'] : '';
$filiere = isset($_GET['filiere']) ? $_GET['filiere'] : '';

$sql = "SELECT * FROM stagiaires WHERE 1=1";
$params = [];

// Add filters dynamically
if (!empty($annee)) {
    $sql .= " AND anneeEtude = :annee";
    $params[':annee'] = $annee;
}
if (!empty($filiere)) {
    $sql .= " AND filiereStagiaire LIKE :filiere";
    $params[':filiere'] = '%' . $filiere . '%';
}

$stmt = $connection->prepare($sql);
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des stagiaires</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="ListeDeStagiares.css">
    <style>

    form {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
        margin: 20px 0;
        padding: 15px;


    }

    input[type="text"],
    select {
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 200px;
    }

    input[type="text"]:focus,
    select:focus {
        outline: none;
        border-color: #007bff;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    button:active {
        background-color: #003f7f;
    }
    .back{
            position: absolute;
            top: 15px;
            left: 15px;
        }
        .back i{
            font-size: 30px;
            color: #333;

        }
    </style>
</head>
<body>

    
<section class="svg-container" id="svg-container">
    <svg width="100%" height="200" xmlns="http://www.w3.org/2000/svg">
        <rect width="100%" height="100%" fill="#f4f4f4" />
        <text x="50%" y="50%" dominant-baseline="middle" text-anchor="middle" 
              font-family="Arial, sans-serif" font-size="40" fill="#333">
          <tspan id="word1" fill-opacity="0">Gestion</tspan>
          <tspan id="word2" x="50%" dy="1.2em" fill-opacity="0">des Stagiaires</tspan>
        </text>
        
        <animate 
          href="#word1" 
          attributeName="fill-opacity" 
          from="0" to="1" 
          begin="0s" dur="1s" fill="freeze" />
        <animate 
          href="#word2" 
          attributeName="fill-opacity" 
          from="0" to="1" 
          begin="1.5s" dur="1s" fill="freeze" />
      </svg>

      <div class="loader">
        <div class="outer"></div>
        <div class="middle"></div>
        <div class="inner"></div>
      </div>
      
</section> 

<a class="back" href="/remote02/"><i><i class="fa fa-arrow-left" aria-hidden="true"></i></i></a>

    <h1>Liste des stagiaires</h1>

    <form method="GET" action="">
        <input type="text" name="filiere" placeholder="Enter Filiere">
        <select name="AET" required>
            <option value="">Choisir une année</option>
            <option value="1">1ère année</option>
            <option value="2">2ème année</option>
            <option value="3">3ème année</option>
        </select>
        <button type="submit">Search</button>
    </form>

    <table class="styled-table">
        <thead>
            <tr>
                <th>Matricule</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
                <th>Année d'étude</th>
                <th>Type de bac</th>
                <th>Année de bac</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php if (!empty($results)): ?>
                <?php foreach ($results as $row): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['matStagiaire']) ?></td>
                        <td><?= htmlspecialchars($row['nomStagiaire']) ?></td>
                        <td><?= htmlspecialchars($row['prenomStagiaire']) ?></td>
                        <td><?= htmlspecialchars($row['filiereStagiaire']) ?></td>
                        <td><?= htmlspecialchars($row['anneeEtude']) ?></td>
                        <td><?= htmlspecialchars($row['typeBac']) ?></td>
                        <td><?= htmlspecialchars($row['anneeBac']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">No results found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    
    <script src="ListeDeStagiares.js"></script>
</body>
</html>

    







    
    

