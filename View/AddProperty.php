
<main>
        <form method="POST" action="index.php?action=AddProperty">
                    <h2><i class="fa-solid fa-sliders"></i>Filtrer</h2>
                    <div class='flex'>
                        <div class='form-control'>
                            <label for="villeAdresse">Ville</label>
                            <input type="text" id="ville" class="mid" name="ville">
                        </div>
                        <div class='form-control'>
                            <label for="Adresse">Adresse</label>
                            <input type="text" id="adresse" class="mid" name="adresse">
                        </div>
                        <div class='form-control'>
                            <label for="codePostal">Code postal</label>
                            <input type="text" id="codePostal" class="mid" name="code_postal">
                        </div>
                    </div>
                    <div class="form-control etat">
                        <label for="etat">État</label>
                        <div>
                            <div>
                                <input type="checkbox" name="etat" id="location" checked/>
                                <label for="location">Location</label>
                            </div>
                            <div>
                                <input type="checkbox" name="etat" id="vente" checked/>
                                <label for="vente">Vente</label>
                            </div>
                        </div>
                    </div>
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
                    <div class="form-control">
                        <label for="parts">Étage</label>
                        <input type="range" name="etage" min="1" max="10">
                        <span class="output"><span class="value"></span></span>
                    </div>
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
                    <div class="form-control type" id='autre'>
                        <label for="autres" class='autre'>Autres</label>
                        <div class="autre_div">
                            <div>
                                <input type="checkbox" name="meuble" id="meuble" checked/>
                                <label for="meuble">Meublé</label>
                            </div>
                            <div>
                                <input type="checkbox" name="piscine" id="piscine" checked/>
                                <label for="piscine">Piscine</label>
                            </div>
                            <div>
                                <input type="checkbox" name="balcon" id="balcon" checked/>
                                <label for="balcon">Balcon</label>
                            </div>
                            <div>
                                <input type="checkbox" name="jardin" id="jardin" checked/>
                                <label for="jardin">Jardin</label>
                            </div>
                        </div>
                        <div>
                            <div>
                                <input type="checkbox" name="garage" id="garage" checked/>
                                <label for="garage">Garage</label>
                            </div>
                            <div>
                                <input type="checkbox" name="cave" id="cave" checked/>
                                <label for="cave">Cave</label>
                            </div>
                            <div>
                                <input type="checkbox" name="ascenseur" id="ascenseur" checked/>
                                <label for="ascenseur">Ascenseur</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-control">
                        <label for="description">Description</label>
                        <textarea name="description" class="mid" cols="30" rows="10"></textarea>
                    </div>
                    <input type="submit" value="Ajouter">
        </form>
</main>
    <script src="Tools/Js/form.js" defer></script>


