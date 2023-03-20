<?php $titre = "Accueil";
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Sen&display=swap" rel="stylesheet">
    <title>Accueil</title>
</head>
<body>
    <main class="body">
        <div class="top">
            <div class="appart_title">
                <img src="/Assets/appart.jpg" class="appart_pic" alt="photo d'appartements">
                <h1 class="title_accueil"> Trouver l'appartement de vos rêves !</h1>
            </div>
            <section class="search-box">
                <form>
                    <select name="louer-acheter">
                        <option value="Louer">Louer</option>
                        <option value="Acheter">Acheter</option>
                        <option value="lesdeux">Les deux</option>
                    </select>
                    <div class="box">
                        <input name="city" type="text" placeholder="Marseille, France">
                        <div>
                            <input type="submit" value="Rechercher">
                        </div>
                    </div>
                    <button id="open-filter"><i class="fa-solid fa-sliders"></i>Filtrer</button>
                    <div class="backdrop-modal">
                        <div class="modal">
                        </div>
                    </div>
                </form>
            </section>
        </div>

        <section class="section1">
            <div class='div_accueil' id="div1">
                <img src="/Assets/agent-immobilier.png" class="small_pic" id="pic_immo" alt="agent immobilier qui montre le vide">
                <p class="div_p"><span class="span">+2000</span> de nos agents immobiliers pour vous accompagner dans vos projets</p>
            </div>

            <div class='div_accueil' id="div2">
                <div class="div2">
                    <img src="/Assets/clients.png" class="small_pic" id="pic_cli" alt="photo employé">
                    <p class="reducto"><span class="span">92%</span> de clients satisfaits</p>
                </div>
                <div class="div2">
                    <img src="/Assets/france.jpg" class="small_pic" id="pic_fr" alt="carte de la france">
                   <p class="reducto"> une expertise partout en France</p>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class='div' id="div3">
                <img src="/Assets/employee.png" class="pic_emp" alt="">

                <div class="text_position">
                    <h1 class="p"> Nous recrutons des collaborateurs, en agence et au siège</h1>
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