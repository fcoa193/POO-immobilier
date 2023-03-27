
<div id="loader">
    <div id="dot1"></div>
    <div id="dot2"></div>
    <div id="dot3"></div>
</div>
<main>
 
    <section class="search-box">
        <form action='index.php?action=Resultat' method="post">
            <select name="louer-acheter">
                 <?php if($_POST['louer-acheter'] == 'Achat'){?>
                    <option value="Location">Louer</option>
                    <option value="Achat" selected>Acheter</option>
                <?php } else if($_POST['louer-acheter'] == 'Location') {?>
                    <option value="Location" selected>Louer</option>
                    <option value="Achat">Acheter</option>
                <?php } else {?>
                    <option value="Location">Louer</option>
                    <option value="Achat" selected>Acheter</option>
                <?php }?>
            </select>
            <div class="box">
                    <input name="city" type="text" placeholder="Ex : Annecy" autocomplete="off" value="<?=$_POST['city']?>">
                    <div id="suggestion">
                    </div>
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
                            
                            <?php if($_POST['appartement'] == 'on' && $_POST['maison'] != 'on'){?>
                                <div>
                                    <input type="checkbox" name="appartement" id="appartement" checked/>
                                    <label for="appartement">Appartement</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="maison" id="maison"/>
                                    <label for="maison">Maison</label>
                                </div>
                            <?php } else if($_POST['maison'] == 'on' && $_POST['appartement'] != 'on') {?>
                                <div>
                                    <input type="checkbox" name="appartement" id="appartement"/>
                                    <label for="appartement">Appartement</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="maison" id="maison" checked/>
                                    <label for="maison">Maison</label>
                                </div>
                            <?php } else {?>
                                <div>
                                    <input type="checkbox" name="appartement" id="appartement" checked/>
                                    <label for="appartement">Appartement</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="maison" id="maison" checked/>
                                    <label for="maison">Maison</label>
                                </div>
                            <?php }?>
                 
                            
                        </div>
                    </div>
                    <div class="form-control">
                    <label for="maxprice">Prix max</label>
                    <?php if($_POST['louer-acheter'] == 'Location'){?>
                        <input type="range" name="maxprice" value='<?= $_POST['maxprice']?>' min="0" max="3000">
                        <span class="output"><span class="value"></span>€</span>
                    <?php } else {?>
                        <input type="range" name="maxprice" value='<?= $_POST['maxprice']?>' min="0" max="1000000">
                        <span class="output"><span class="value"></span>€</span>
                    <?php } ?>

                    </div>
                    <div class="form-control">
                        <label for="superficie">Surface min</label>
                        <input type="range" name="superficie" value='<?= $_POST['superficie']?>'' min="0" max="250">
                        <span class="output"><span class="value"></span>m<sup>2</sup></span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Pièces min</label>
                        <input type="range" name="parts" value='<?= $_POST['parts']?>' min="1" max="7">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="rooms">Chambres min</label>
                        <input type="range" name="rooms" min="1" value="<?= $_POST['rooms']?>">
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <button id="close-filter">Sauvegarder</button>
                </div>
            </div>
        </form>
    </section>

    <section class="real-estate-ad">
      <?php
      if($data == Null){
        echo '<div class="no-result"><p>Aucuns biens ne correponds à votre recherche.</p>
        <p>Veuillez élargir vos critères de recherches.</p></div>';
      } else{

      }
      foreach ($data as $property) {?>
    <article class="appartment-card">
      <a href="index.php?action=Property&id=<?= $property['idProperty']?>">
        <div class="card-shadow"></div>
        <div class="title-price">
            <h2><?=$property['intitule']?></h2>
            <span><?=$property['prix']?>€</span>
        </div>
        <img src='https://prod-saint-gobain-fr.content.saint-gobain.io/sites/saint-gobain.fr/files/2020-10/moderniser-appartement-parquet-peinture-la-maison-saint-goabin.jpg'  />
      </a>
      <div class="btn-group">
        <a id="edit-btn" href="#"><i class="fa-solid fa-pen-to-square"></i></a>
        <a id="delete-btn" href="#"><i class="fa-solid fa-trash"></i></a>
      </div>
    </article>
    <?php }?>

    </section>
    </main>

    <script src="Tools/Js/form.js" defer></script>
    <script src="Tools/Js/filter.js" defer></script>
    <script src="Tools/Js/searchSuggestion.js" defer></script>

