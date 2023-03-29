<main>
        <form method="POST" action="index.php?action=ExecuteAddProperty" enctype="multipart/form-data">
                    <h2><i class="fa-solid fa-sliders"></i>Filtrer</h2>
                    <div class="form-control etat">
                        <label for="etat"></label>
                        <div>
                            <select name="etat" id="etat" required>
                                <option value="Location">Location</option>
                                <option value="Achat">Vente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control type">
                        <label for="type">Type</label>
                        <div>
                            <select name="type" id="type" required>
                                <option value="Appartement">Appartement</option>
                                <option value="Maison">Maison</option>
                            </select>
                        </div>
                    </div>
                    <div class='flex'>
                        <div class='form-control'>
                            <label for="intitule">Intitulé</label>
                            <input type="text" id="intitule" class="mid" name="intitule" required>
                        </div>
                        <div class='form-control'>
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" class="mid" name="adresse" required>
                        </div>
                        <div class='form-control'>
                            <label for="code_Postal">Code postal</label>
                            <div>
                                <input type="text" id="codePostal" name="code_postal" required>
                                <div class='cp-introuvable'></div> 

                            </div>
                        </div>
                        <div class='form-control'>
                            <label for="ville">Ville</label>
                            <input type="text" id="ville" class="mid" name="ville" required readonly>
                        </div>
                    </div>
                    
                    
                    <div class="form-control">
                        <label for="maxprice">Prix max</label>
                        <input type="range" name="prix" value="0" min="0" max="1000000" required>
                        <span class="output"><span class="value"></span>€</span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Étage</label>
                        <input type="range" name="etage" min="1" max="10" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="superficie">Surface</label>
                        <input type="range" name="superficie" min="0" max="250" required>
                        <span class="output"><span class="value"></span>m<sup>2</sup></span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Pièces</label>
                        <input type="range" name="pieces" min="1" max="7" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="rooms">Chambres</label>
                        <input type="range" name="chambres" min="1" max="" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control" id="file">
                        <label for="photo">Photos</label>
                        <div class="photo-btn">
                            <input type="file" name="photo1" class='photo'>
                            <div class="photos-list">
                            </div>
                        </div>
                    </div>
                    <div class="form-control column">
                        <label for="autres" class='center-label'>Autres</label>
                        <div class="caracteristique">
                            <div>
                                <input type="checkbox" name="meuble" id="meuble"  />
                                <label for="meuble">Meublé</label>
                            </div>
                            <div>
                                <input type="checkbox" name="piscine" id="piscine"  />
                                <label for="piscine">Piscine</label>
                            </div>
                            <div>
                                <input type="checkbox" name="balcon" id="balcon"  />
                                <label for="balcon">Balcon</label>
                            </div>
                            <div>
                                <input type="checkbox" name="jardin" id="jardin"  />
                                <label for="jardin">Jardin</label>
                            </div>
                            <div>
                                <input type="checkbox" name="garage" id="garage"  />
                                <label for="garage">Garage</label>
                            </div>
                            <div>
                                <input type="checkbox" name="cave" id="cave"  />
                                <label for="cave">Cave</label>
                            </div>
                            <div>
                                <input type="checkbox" name="ascenseur" id="ascenseur"  />
                                <label for="ascenseur">Ascenseur</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-control column">
                        <label class="center-label" for="description">Description</label>
                        <textarea name="description" class="mid" cols="30" rows="10" required></textarea>
                    </div>
                    <input type="submit" value="Ajouter">
        </form>
        <script src="Tools/Js/form.js" defer></script>
        <script src="Tools/Js/cities.js" defer></script>
        <script src="Tools/Js/updatePrice.js" defer></script>
        <script src="Tools/Js/photos.js" defer></script>

</main>
    

