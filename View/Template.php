<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Tools/Style/normalize.css">
    <link rel="stylesheet" href="Tools/Style/style.css">
    <link rel="stylesheet" href=<?=$style?>>
    <title><?=$title?></title>
</head>
<body>
    <header>
       <div class= "divHeader">
        <div class= "logoHeader">
            <img  src="Tools/Assets/logo.png" alt="le logo du site ">
            <h1 class="title1"> Immo&Co</h1>
        </div>
            <a href=""> Accueil</a>
        </div>
    </header>

    <?= $content ?>
    
    <footer>
      <div class="divLogo">
       <img class="logoFooter" src="Tools/Assets/logo.png" alt="le logo du site ">
       <h1 class="title2"> Immo&Co</h1> 
      </div>  
      
      <div class= "adress">
       <span>Adresse : 10 spanlace Victor Hugo, </span>
        <span>38000 Grenoble</span>
       <span > Email : services@immo-co.org</span>
        <span>    Tel : 04 01 23 01 23</span> 
      </div>
      <div class="span1">
        <span class="span2"> Conditions générales </span>
        <span class="span3"> Confidentialité</span>
      </div>  
      
      <div  class="span4">© 2023 Immo&Co, Inc.</div>  
    </footer>
    
</body>

<body>
    
</body>
</html>