
        <form method="POST" action="index.php?action=ExecuteEditProperty&id=<?=$data['property']['idProperty']?>">
                    <h2><i class="fa-solid fa-sliders"></i>Filtrer</h2>
                    <div class="form-control etat">
                        <label for="etat"></label>
                        <div>
                          
                            <select name="etat" id="etat" value="<?= $data['property']['etat']?>" required>
                                <option value="Location">Location</option>
                                <option value="Achat">Vente</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-control type">
                        <label for="type">Type</label>
                        <div>
                            <select name="type" id="type" value="<?= $data['property']['type']?>" required>
                                <option value="Appartement">Appartement</option>
                                <option value="Maison">Maison</option>
                            </select>
                        </div>
                    </div>
                    <div class='flex'>
                        <div class='form-control'>
                            <label for="intitule">Intitulé</label>
                            <input type="text" id="intitule" class="mid" name="intitule" value="<?= $data['property']['intitule']?>" required>
                        </div>
                        <div class='form-control'>
                            <label for="adresse">Adresse</label>
                            <input type="text" id="adresse" class="mid" name="adresse" value="<?= $data['property']['adresse']?>" required>
                        </div>
                        <div class='form-control'>
                            <label for="code_Postal">Code postal</label>
                            <div>
                                <input type="text" id="codePostal" name="code_postal" value="<?= $data['property']['code_postal']?>"required>
                                <div class='cp-introuvable'></div> 

                            </div>
                        </div>
                        <div class='form-control'>
                            <label for="ville">Ville</label>
                            <input type="text" id="ville" class="mid" name="ville" value="<?= $data['property']['ville']?>" required readonly>
                        </div>
                    </div>
                    
                    
                    <div class="form-control">
                        <label for="maxprice">Prix max</label>
                        <input type="range" name="prix" value="0" min="0" max="1000000" value="<?= $data['property']['prix']?>" required>
                        <span class="output"><span class="value"></span>€</span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Étage</label>
                        <input type="range" name="etage" min="1" max="10" value="<?= $data['property']['etage']?>" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="superficie">Surface</label>
                        <input type="range" name="superficie" min="0" max="250" value="<?= $data['property']['superficie']?>" required>
                        <span class="output"><span class="value"></span>m<sup>2</sup></span>
                    </div>
                    <div class="form-control">
                        <label for="parts">Pièces</label>
                        <input type="range" name="pieces" min="1" max="7" value="<?= $data['property']['pieces']?>" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control">
                        <label for="rooms">Chambres</label>
                        <input type="range" name="chambres" min="1" max="" value="<?= $data['property']['chambres']?>" required>
                        <span class="output"><span class="value"></span></span>
                    </div>
                    <div class="form-control column">
                        <label for="autres" class='center-label'>Autres</label>
                        <div class="caracteristique">
                            <?php
                                if($data['property']['meuble'] == 1){
                               ?>
                               <div>
                                    <input type="checkbox" name="meuble" id="meuble" checked/>
                                    <label for="meuble">Meublé</label>
                                </div>
                               <?php
                                } else{?>
                                <div>
                                    <input type="checkbox" name="meuble" id="meuble"  />
                                    <label for="meuble">Meublé</label>
                                </div>
                    <?php }?>

                    <?php
                        if($data['property']['piscine'] == 1){
                        ?>
                            <div>
                                <input type="checkbox" name="piscine" id="piscine" checked />
                                <label for="piscine">Piscine</label>
                            </div>
                            
                            <?php } else{?>
                                <div>
                                    <input type="checkbox" name="piscine" id="piscine"  />
                                    <label for="piscine">Piscine</label>
                                </div>
                            <?php }?>
                            
                            <?php
                        if($data['property']['balcon'] == 1){
                        ?>  
                            <div>
                                <input type="checkbox" name="balcon" id="balcon" checked />
                                <label for="balcon">Balcon</label>
                            </div>
                            <?php } else{?>
                            <div>
                                <input type="checkbox" name="balcon" id="balcon"  />
                                <label for="balcon">Balcon</label>
                            </div>
                                <?php }?>

                            <?php
                        if($data['property']['jardin'] == 1){
                        ?>
                            <div>
                                <input type="checkbox" name="jardin" id="jardin"  checked/>
                                <label for="jardin">Jardin</label>
                            </div>
                            <?php } else{?>
                                <div>
                                <input type="checkbox" name="jardin" id="jardin"  />
                                <label for="jardin">Jardin</label>
                            </div>
                                <?php }?>
                                
                            <?php
                        if($data['property']['garage'] == 1){
                        ?>
                            <div>
                                <input type="checkbox" name="garage" id="garage" checked />
                                <label for="garage">Garage</label>
                            </div>
                            <?php } else{?>
                                <div>
                                    <input type="checkbox" name="garage" id="garage"  />
                                    <label for="garage">Garage</label>
                                </div>
                                <?php }?>

                            <?php
                        if($data['property']['cave'] == 1){
                        ?>
                            <div>
                                <input type="checkbox" name="cave" id="cave" checked />
                                <label for="cave">Cave</label>
                            </div>
                            <?php } else{?>
                                <div>
                                    <input type="checkbox" name="cave" id="cave"  />
                                    <label for="cave">Cave</label>
                                </div>
                                <?php }?>

                            <?php
                        if($data['property']['ascenseur'] == 1){
                        ?>
                            <div>
                                <input type="checkbox" name="ascenseur" id="ascenseur" checked />
                                <label for="ascenseur">Ascenseur</label>
                            </div>
                        </div>
                        <?php } else{?>
                            <div>
                                <input type="checkbox" name="ascenseur" id="ascenseur"  />
                                <label for="ascenseur">Ascenseur</label>
                            </div>
                        <?php }?>

                    </div>
                    </div>

                    <div class="form-control column">
                        <label class="center-label" for="description">Description</label>
                        <textarea name="description" class="mid" cols="30" rows="10" required><?= $data['property']['description']?>
                        </textarea>
                    </div>
                    <input type="submit" value="Modifier">
        </form>


</main>
    
<script src="Tools/Js/form.js" defer></script>
        <script src="Tools/Js/cities.js" defer></script>
        <script src="Tools/Js/updatePrice.js" defer></script>
        <script src="Tools/Js/photos.js" defer></script>
