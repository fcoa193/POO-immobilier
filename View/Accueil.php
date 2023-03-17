<?php $titre = "Accueil";
ob_start();
?>
<link rel="stylesheet" href="./Model/Tools/Style/Style.css">


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="body">
        <img src="/Assets/appart.jpg" alt="">
        <h1><span class="title_accueil"> Trouvez l'appartement de vos rêves !</span></h1>

        <section class="section1">
            <div class='div1' id="div1">
                <img src="" alt="meuf qui montre le vide">
                <span>+2000</span> de nos agents</br> immobiliers pour vous</br> accompagner dans vos</br> projets
            </div>

            <div class='div2' id="div2">
                icon 

                <span>92%</span> de clients</br> satisfaits
                <div>
                    icon France

                    une expertise</br> partout en France
                </div>
            </div>
        </section>

        <section class="section2">
            <div class='div3' id="div3">
                <img src="" alt="">

                <div class="dark">
                    Nous recrutons des</br> collaborateurs, en agence </br> et au siège
                    <button class="btn_rejoindre">Nous rejoindre</button>
                </div>
            </div>
        </section>
    </main>
</body>
</html>

<script src="./Tools/JS/home.js"></script>

<?php $contenu = ob_get_clean(); ?>

<?php require 'Template.php'; ?>