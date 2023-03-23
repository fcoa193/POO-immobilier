<div class="appart_title">
                <img src="Tools/Assets/appart.jpg" class="appart_pic" alt="photo d'appartements">
                <h1 class="title_accueil"> Trouver l'appartement de vos rêves !</h1>
            </div>
    <main class="body">
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
       

        <section class="section1">
            <div class='div_accueil' id="div1">
                <img src="Tools/Assets/agent-immobilier.png" class="small_pic" id="pic_immo" alt="agent immobilier qui montre le vide">
                <p class="div_p"><span class="span">+2000</span> de nos agents immobiliers pour vous accompagner dans vos projets</p>
            </div>

            <div class='div_accueil' id="div2">
                <div class="div2">
                    <img src="Tools/Assets/clients.png" class="small_pic" id="pic_cli" alt="photo employé">
                    <p class="reducto"><span class="span">92%</span> de clients satisfaits</p>
                </div>
                <div class="div2">
                    <img src="Tools/Assets/france.jpg" class="small_pic" id="pic_fr" alt="carte de la france">
                   <p class="reducto">Une expertise partout en France</p>
                </div>
            </div>
        </section>

        <section class="section2">
            <div class='div' id="div3">
                <img src="Tools/Assets/employee.png" class="pic_emp" alt="">

                <div class="text_position">
                    <h1 class="p"> Nous recrutons des collaborateurs, en agence et au siège</h1>
                    <button class="btn_rejoindre">Nous rejoindre</button>
                </div>
            </div>
        </section>
    </main>
    <script src="Tools/Js/form.js" defer></script>
    <script src="Tools/Js/filter.js" defer></script>


