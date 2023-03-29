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
    <link rel="icon" href="Tools/Assets/favicon.png" type="image/x-icon">
    <title><?=$title?></title>
</head>
<body>
    <header>
       <div class= "divHeader">
        <a href="index.php" class= "logoHeader">
            <img  src="Tools/Assets/logo.png" alt="le logo du site ">
            <h1 class="title1">Immo&Co</h1>
            <?php if(isset($_SESSION['id'])){?>
              <i style="color:black; font-size:16px">&nbsp;&nbsp;Admin</i>
            <?php }?>
          </a>
        <div>
        <?php if(isset($_SESSION['id'])){?>
          <?php if($_GET['action'] === "Accueil" || !isset($_GET['action'])){ ?>
            
            <a href="index.php?action=AddProperty"><span>Ajouter un bien</span><i class="fa-solid fa-plus"></i></a>
          <a href="index.php?action=Logout"><i class="fa-solid fa-power-off"></i></a>
            <?php }else{?>
              <a href="index.php">Accueil</i></a>
            <a href="index.php?action=AddProperty"><span>Ajouter un bien</span><i class="fa-solid fa-plus"></i></a>
          <a href="index.php?action=Logout"><i class="fa-solid fa-power-off"></i></a>
          <?php }} else{?>
            <a href="index.php">Accueil</i></a>
        <?php }?>
          </div>


        </div>
    </header>

    <?= $content ?>
    
    <footer>
      <div class="divLogo">
       <img class="logoFooter" src="Tools/Assets/logo.png" alt="le logo du site ">
       <h1 class="title2"> Immo&Co</h1> 
      </div>  
      
      <div class= "adress">
       <span>Adresse : 10 place Victor Hugo, </span>
        <span>38000 Grenoble</span>
       <span>Email : services@immo-co.org</span>
        <span>Tel : 04 01 23 01 23</span> 
      </div>
      <div class="span1">
        <a href="#"> Conditions générales </a>
        <a href="index.php?action=Login" class="admin">Accès administateurs</a>
      </div>  
      
      <div  class="span4">© 2023 Immo&Co, Inc.</div>  
    </footer>
    
</body>

<body>
    
</body>
</html>