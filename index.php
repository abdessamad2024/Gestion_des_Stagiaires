<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link rel="stylesheet" href="fontend\Home\index.css">
</head>
<body>
    
<head>
    <nav class="navbare">
        <ul>
            <li ><a   href="indix.html"><img   src="fontend\imgs\OFPPT_LOGO.png" alt="OFPPT IMG"> </a></li>
            <li><a class="Links" href="fontend\Ajouter\Ajouter.php">Ajouter</a></li>
            <li><a class="Links" href="fontend\Modification\Modification.php">Modification</a></li>
            <li><a class="Links" href="fontend\ListeDeStagiaires\ListeDeStagiares.php">Liste de stagiaires</a></li>
            <li class="search__li">    

              <form class="form__nav" action="Action.php" method="POST">

    

                <input name="search" type="text" placeholder="Search.." >
                <button name="submit__Search" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </li>
          </ul>
    </nav>

    <nav class="navbare2">
        <ul>
            <li id="img" style="cursor: pointer;"><img  src="fontend\imgs\OFPPT_LOGO.png" alt="OFPPT IMG"> </li>
        </ul>
        
        <ul class="navbare2__ul" id="navbare2__ul">
          <li><a class="Links" href="/fontend/Ajouter/Ajouter.html">Ajouter</a></li>
          <li><a class="Links" href="">Modification</a></li>
          <li><a class="Links" href="">Liste de stagiaires</a></li>
          
          <li>
            <form action="/action_page.php" method="POST" class="form__nav2">
              <input name="search" type="text" placeholder="Search.." >
              <button name="submit__Search" style="cursor: pointer;" type="submit"><i class="fa fa-search"></i></button>
            </form>
          </li>
        
        </ul>
          
      </nav>
</head>













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

<script src="fontend/Ajouter/Ajouter.js"></script>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const img = document.getElementById('img');
    const navUl = document.getElementById('navbare2__ul');
    
    img.addEventListener('click', (e) => {
      e.stopPropagation(); // Prevent click from bubbling up
      navUl.style.display = (navUl.style.display === 'block') ? 'none' : 'block';
    });

    document.addEventListener('click', () => {
      navUl.style.display = 'none';
    });

    navUl.addEventListener('click', (e) => {
      e.stopPropagation(); // Prevent click inside navUl from closing it
    });
  });
</script>
</body>
</html>

</body>
</html>

