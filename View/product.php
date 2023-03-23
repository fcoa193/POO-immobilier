<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Tools/Style/product.css">
    <link rel="stylesheet" href="../Tools/Style/style.css">
    <link rel="stylesheet" href="../Tools/Style/normalize.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <script src="https://kit.fontawesome.com/40582dd944.js" crossorigin="anonymous"></script>
    <title>Page produit</title>
</head>

<body>
    <header>
        <div class="divHeader">
            <div class="logoHeader">
                <img src="../Tools/Assets/logo.png" alt="le logo du site ">
                <h1 class="title1">Immo&Co</h1>
            </div>
            <?php if ($_GET['action'] === "Login") { ?>


                <?php
                //  }else if(){
                ?>


            <?php } else { ?>

                <a href="index.php">Accueil</a>
            <?php } ?>
        </div>

    </header>
    <!-- **********LE SLIDER********* -->

    <main>


        <li>
            <a href="home.html">Retour</a>
        </li>
        <div class="diapo" data-speed="2000" data-transition="700">
            <div class="elements">
                <div class="element">
                    <img src="../Tools/Assets/imgProperties/app1/raw4.jpg" alt="">

                </div>
                <div class="element">
                    <img src="../Tools/Assets/imgProperties/app1/raw3.jpg" alt="">

                </div>
                <div class="element">
                    <img src="../Tools/Assets/imgProperties/app1/125.jpg" alt="">

                </div>
                <div class="element">
                    <img src="../Tools/Assets/imgProperties/app1/raw2.jpg" alt="">

                </div>

            </div>
            <!-- Flèches -->
            <i id="nav-gauche" class="las la-chevron-left"></i>
            <i id="nav-droite" class="las la-chevron-right"></i>


        </div>
        <!-- FIN DE SLIDER -->



        <div class="title">

            <h2> Joli appartement au centre-ville <span class="prix">650$</span></h2>
            <p>GRENOBLE, 38000</p>
        </div>


        <div class="container">

            <div class="description">
                <div class="title-2">
                    <h4>Description</h4>
                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam posuere arcu eu lectus
                    iaculis
                    sagittis. Praesent in cursus orci, vel auctor nisl. Suspendisse placerat faucibus ex a
                    ultricies.
                    Aliquam nulla nulla, gravida semper ex ac, aliquet ultricies nulla. Praesent consequat
                    libero
                    convallis diam ultrices, id sollicitudin lectus dignissim. Pellentesque bibendum, turpis
                    ac
                    tincidunt iaculis, velit diam auctor erat, eu facilisis lorem nunc et ante. Sed ac
                    congue
                    urna.
                </p>
            </div>

            <div class="caract">
                <div class="title-3">
                    <h4>Caractéristiques</h4>
                </div>
                <div class="icon">
                    <div class="icons icon-1"><i class="fa-sharp fa-solid fa-stairs"></i><br>
                        <span>2</span>
                    </div>
                    <div class="icons icon-2"> <i class="fa-solid fa-ruler"></i><br>
                        <span>75 m²</span>

                    </div>
                    <div class="icons icon-3"> <i class="fa-solid fa-bed"></i><br>
                        <span>2</span>

                    </div>
                    <div class="icons icon-4"> <i class="fa-solid fa-house"></i><br>
                        <span>3</span>

                    </div>
                </div>

            </div>

            <div class="specifities">
                <div class="title-4">
                    <h4>Autres spécifités</h4>
                </div>
                <div class="item">
                    <div class="items item-1">
                        <li>Ascenseur</li>
                    </div>
                    <div class="items item-2">
                        <li>Garage</li>
                    </div>
                    <div class="items item-3">
                        <li>Cave</li>
                    </div>
                </div>



            </div>

        </div>
    </main>
    <footer>
        <div class="divLogo">
            <img class="logoFooter" src="../Tools/Assets/logo.png" alt="le logo du site ">
            <h1 class="title2"> Immo&Co</h1>
        </div>

        <div class="adress">
            <span>Adresse : 10 place Victor Hugo, </span>
            <span>38000 Grenoble</span>
            <span> Email : services@immo-co.org</span>
            <span> Tel : 04 01 23 01 23</span>
        </div>
        <div class="span1">
            <span class="span2"> Conditions générales </span>
            <span class="span3"> Confidentialité</span>
        </div>

        <div class="span4">© 2023 Immo&Co, Inc.</div>
    </footer>
    <script src="../Tools/Js/slider.js"></script>

</body>

</html>