<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Ajouter.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
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
<a class="back" href="/remote02/"><i><i class="fa fa-arrow-left" aria-hidden="true"></i></i></a>
   


<form action="Ajouter.php" method="POST">
        <h1>Ajouter un stagiaire</h1>

        <input type="text" placeholder="Nom" name="Nom" required>
        <input type="text" placeholder="Prenom" name="Prenom" required>
        <input type="text" placeholder="Filiere" name="Filiere" required>
        
        <select  name="AET" id="" required>
            <option value="1">1ere annee</option>
            <option value="2">2eme annee</option>
            <option value="3">3eme annee</option>
        </select>
        
        <input type="text" placeholder="type de bac" name="typeBac" required>
        <input type="number" min="2000" max="2025" maxlength="4" step="1" value="2016" name="anneeBac" required/>
    
        <button class="box-1" type="submit" name="Ajouter">
            <div class="btn btn-one">
                <span class="btn-text">Ajouter</span>
            </div>

        </button>

        


    </form>




    
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

<script src="./Ajouter.js"></script>
</body>
</html>

