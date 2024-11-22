<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ListeDeStagiares.css">
</head>
<body>
    <h1>Liste des stagiaires</h1>

    <form action="">
        <input type="text" placeholder="Search..">
        <select  name="AET" id="" required>
            <option value="1">1ere annee</option>
            <option value="2">2eme annee</option>
            <option value="3">3eme annee</option>
        </select>
        
        <button>Search</button>
    </form>


    <table class="styled-table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Filiere</th>
                <th>Annee</th>
                <th>Type de bac</th>
                <th>Annee de bac</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <!-- Sample Data (You can add more rows dynamically) -->
            <tr>
                <td>1</td>
                <td>El Hassnaoui</td>
                <td>Hamza</td>
                <td>Informatique</td>
                <td>2 eme</td>
                <td>Sciences Physiques</td>
                <td>2022</td>
            </tr>
        </tbody>
    </table>
    
    







    
<!-- <section class="svg-container" id="svg-container">
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
      
</section> -->
    <script src="ListeDeStagiares.js"></script>
</body>
</html>