<?php ob_start();?>
<div id="loader">
    <div id="dot1"></div>
    <div id="dot2"></div>
    <div id="dot3"></div>
</div>
<main>
    <section class="search-box">
        <form>
            <select name="louer-acheter">
                <option value="Louer">Louer</option>
                <option value="Acheter">Acheter</option>
            </select>
            <div class="box">
                <input name="city" type="text" placeholder="Marseille, France">
                <div>
                    <input type="submit" value="🔎">
                </div>
            </div>
            <button id="open-filter"><i class="fa-solid fa-sliders"></i>Filtrer</button>
            <div id="filter"class="backdrop-modal">
                <div class="modal">
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
                        <input type="range" name="maxprice" value="0" min="0" max="1000000">
                        <span class="output"><span class="value"></span>€</span>
                    </div>
                    <div class="form-control">
                        <label for="superficie">Surface min</label>
                        <input type="range" name="superficie" min="0" max="250">
                        <span class="output"><span class="value"></span>m<sup>2</sup></span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Pièces</label>
                        <input type="range" name="parts" min="1" max="7">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="rooms">Chambres</label>
                        <input type="range" name="rooms" min="1" max="">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <button id="close-filter">Sauvegarder</button>
                </div>
            </div>
        </form>
    </section>

    <section class="real-estate-ad">
      <?php var_dump($data);
      foreach ($data as $property) {?>
        <article class="appartment-card">
      <a href="#">
        <div class="card-shadow"></div>
        <div class="title-price">
            <h2><?=$property['intitule']?></h2>
            <span><?=$property['prix']?>€</span>
        </div>
        <img src='https://prod-saint-gobain-fr.content.saint-gobain.io/sites/saint-gobain.fr/files/2020-10/moderniser-appartement-parquet-peinture-la-maison-saint-goabin.jpg'  />
      </a>
    </article>
    <?php }?>

    </section>
    </main>

    <script src="Tools/Js/form.js" defer></script>
    <script src="Tools/Js/filter.js" defer></script>


<?php 
$title = "Recherche - Immo&Co";
?>
