<?php ob_start();?>

<main>
        <form method="POST" action="">
                    <label for="villeAdresse">Ville :</label>
                    <input type="text" id="ville" name="ville">

                    <label for="Adresse">Adresse :</label>
                    <input type="text" id="adresse" name="adresse">

                    <label for="codePostal">Code postal :</label>
                    <input type="text" id="codePostal" name="code_postal">


                    <h2><i class="fa-solid fa-sliders"></i>Filtrer</h2>
                    <div class="form-control type">
                        <label for="type">Type</label>
                        <div>
                            <div>
                                <input type="checkbox" name="type" id="appartement" checked/>
                                <label for="appartement">Appartement</label>
                            </div>
                            <div>
                                <input type="checkbox" name="type" id="maison" checked/>
                                <label for="maison">Maison</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="maxprice">Prix max</label>
                        <input type="range" name="prix" value="0" min="0" max="1000000">
                        <span class="output"><span class="value"></span>€</span>
                    </div>

                    <label for="etage">Étage :</label>
                    <input type="text" id="etage" name="etage">

                    <div class="form-control">
                        <label for="superficie">Surface min</label>
                        <input type="range" name="superficie" min="0" max="250">
                        <span class="output"><span class="value"></span>m<sup>2</sup></span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Pièces</label>
                        <input type="range" name="pieces" min="1" max="7">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="rooms">Chambres</label>
                        <input type="range" name="chambres" min="1" max="">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <input type="submit" value="Ajouter">
        </form>
    </main>
    
    <script src="../Tools/Js/form.js" defer></script>

<?php 
$title = "Ajouter un bien - Immo&Co";
$style = '../Tools/Style/form.css';
$content = ob_get_clean();
require './Template.php' ?>

