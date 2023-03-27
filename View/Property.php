<main>
    <li>
        <a href="#" onclick=retour()>Retour</a>
    </li>
    <div class="diapo" data-speed="2000" data-transition="700">
        <div class="elements">
            <div class="element">
                <img src="Tools/Assets/imgProperties/app1/raw4.jpg" alt="">

            </div>
            <div class="element">
                <img src="Tools/Assets/imgProperties/app1/raw3.jpg" alt="">

            </div>
            <div class="element">
                <img src="Tools/Assets/imgProperties/app1/125.jpg" alt="">

            </div>
            <div class="element">
                <img src="Tools/Assets/imgProperties/app1/raw2.jpg" alt="">

            </div>
        </div>
        <!-- Flèches -->
        <i id="nav-gauche" class="fa-solid fa-chevron-left"></i>
        <i id="nav-droite" class="fa-solid fa-chevron-right"></i>


    </div>
    <!-- FIN DE SLIDER -->



    <div class="title">
        <div class="top">
            <h2><?= $data['intitule']?></h2>
            <span class="prix"><?= $data['prix']?>€</span>
        </div>
        <p class='address'><?= $data['adresse']?></p>
        <p><?= $data['ville']?>, <?= $data['code_postal']?></p>
    </div>


    <div class="container">
        <div class="flex column">
            <section class="description">
                <div class="title">
                    <h4>Description</h4>
                </div>
                <p>
                <?= $data['description']?>
                </p>
            </section>
        
        
        
        <section class="specifities">
            <div class="title">
                <h4>Autres spécifités</h4>
            </div>
            <div class="item">
                <?php if($data['meuble'] == 1){?>
                    <div class="items item-1">
                        <li>• Meublé</li>
                    </div>
                <?php }?>
                <?php if($data['piscine'] == 1){?>
                    <div class="items item-1">
                        <li>• Piscine</li>
                    </div>
                <?php }?>
                <?php if($data['balcon'] == 1){?>
                    <div class="items item-1">
                        <li>• Balcon</li>
                    </div>
                <?php }?>
                <?php if($data['jardin'] == 1){?>
                    <div class="items item-1">
                        <li>• Jardin</li>
                    </div>
                <?php }?>
                <?php if($data['garage'] == 1){?>
                    <div class="items item-1">
                        <li>• Garage</li>
                    </div>
                <?php }?>
                <?php if($data['ascenseur'] == 1){?>
                    <div class="items item-1">
                        <li>• Ascenseur</li>
                    </div>
                <?php }?>
                <?php if($data['cave'] == 1){?>
                    <div class="items item-1">
                        <li>• Cave</li>
                    </div>
                <?php }?>
            </div>
        </section>
        </div>
        <section class="caract">
                <div class="title">
                    <h4>Caractéristiques</h4>
                </div>
                <div class="icon">
                    <div class="flex">
                        <div class="icons icon-1"><i class="fa-sharp fa-solid fa-stairs"></i><br>
                            <span>2</span>
                        </div>
                        <div class="icons icon-2"> <i class="fa-solid fa-ruler"></i><br>
                            <span><?= $data['superficie']?>m²</span>
                        </div>
                    </div>
                    <div class="flex">
                    <div class="icons icon-4"> <i class="fa-solid fa-house"></i><br>
                            <span><?=$data['pieces']?></span>
                        </div>
                        <div class="icons icon-3"> <i class="fa-solid fa-bed"></i><br>
                            <span><?=$data['chambres']?></span>
                        </div>
                    </div>
                </div>
           
            </section>
    </div>
</main>

    

<script src="Tools/Js/slider.js"></script>

