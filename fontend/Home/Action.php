<?php
include '../../connexion.php';

// Handle search input
$search = isset($_POST['search']) ? $_POST['search'] : null;

if ($search !== null) {
    $sql = "SELECT * FROM stagiaires WHERE matStagiaire = :matricule";
    $stmt = $connection->prepare($sql);
    $stmt->execute([':matricule' => $search]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
} else {
    $result = null;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stagiaire Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
        color: #333;
    }

    h1 {
        text-align: center;
        color: #444;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin: 20px 0;
        background-color: #fff;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    th, td {
        padding: 12px 15px;
        text-align: left;
        border: 1px solid #ddd;
    }

    thead th {
        background-color: #f4f4f4;
        color: #555;
        font-weight: bold;
    }

    tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }

    tbody tr:hover {
        background-color: #f1f1f1;
    }

    tbody td {
        color: #333;
    }

    tbody tr td[colspan="6"] {
        text-align: center;
        font-style: italic;
        color: #777;
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
        .svg-container {
    position: absolute;
    z-index: 100;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    overflow: hidden;
  }
  
  svg {
    position: absolute;
    width: 100%;
    height: 100%;
  }
  
  text {
    font-size: 40px;
    fill: #333;
  }

  .loader {
    font-size: 180px;
    position: absolute;
    z-index: 0;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    animation: transitionTP 1s ease-in-out;  }
  
  @keyframes transitionTP {
    From{
        opacity: 0;
        
    }
    to {
        opacity: 1;
        
    }
}
  .outer,
  .middle,
  .inner {
    border: 3px solid transparent;
    border-top-color: #ff0000;
    border-right-color: #000000;
    border-radius: 50%;
    position: absolute;
    top: 50%;
    left: 50%;
  }
  
  .outer {
    width: 3.5em;
    height: 3.5em;
    margin-left: -1.75em;
    margin-top: -1.75em;
    animation: spin 2s linear infinite;
  }
  
  .middle {
    width: 2.1em;
    height: 2.1em;
    margin-left: -1.05em;
    margin-top: -1.05em;
    animation: spin 1.75s linear reverse infinite;
  }
  
  .inner {
    width: 0.8em;
    height: 0.8em;
    margin-left: -0.4em;
    margin-top: -0.4em;
    animation: spin 1.5s linear infinite;
  }
  
  @keyframes spin {
    to {
      transform: rotate(360deg);
    }
  }
</style>

  
</head>
<body>
<a class="back" href="/remote02/"><i><i class="fa fa-arrow-left" aria-hidden="true"></i></i></a>

    <h1>Details du Stagiaire</h1>

    <table border="1" style="width: 100%; text-align: left;">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Filière</th>
                <th>Année d'Étude</th>
                <th>Type de Bac</th>
                <th>Année de Bac</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result): ?>
                <tr>
                    <td><?= htmlspecialchars($result['nomStagiaire']) ?></td>
                    <td><?= htmlspecialchars($result['prenomStagiaire']) ?></td>
                    <td><?= htmlspecialchars($result['filiereStagiaire']) ?></td>
                    <td><?= htmlspecialchars($result['anneeEtude']) ?></td>
                    <td><?= htmlspecialchars($result['typeBac']) ?></td>
                    <td><?= htmlspecialchars($result['anneeBac']) ?></td>
                </tr>
            <?php else: ?>
                <tr>
                    <td colspan="6">No stagiaire found with the provided matricule.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>







    
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


<script >


    //! loading animation
const svgContainer = document.getElementById('svg-container');
function fadeOut() {
    svgContainer.style.transition = 'opacity 1s';
    svgContainer.style.opacity = 0;
    setTimeout(() => {
        svgContainer.style.display = 'none';
    }, 1000);
}

setTimeout(fadeOut, 2500);
</script>

</body>
</html>
