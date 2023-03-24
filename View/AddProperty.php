<?php ob_start();?>

<main>
       <form action="">
    <h2><b><i class="fas fa-plus"></i>Ajouter un bien </b></h2>
    <div class="form-control1">
        <select id="house" name="house">
            <option value="achat">Achat</option>
            <option value="location">Location</option>
        </select>
    </div>
    
        
    <div class="type1">
        <label for="house"><b>Type:</b></label>
   
        <select id="type" name="type">
            <option value="appartement">Appartement</option>
            <option value="maison">Maison</option>
        </select>
    </div class="type2" >
        <label for="intitule"><b>Intitulé</b></label>
        <input type="text" id="intitule" name="intitule" >
    </div>
    <div class="form-control">
        <label for="maxprice">Prix</label>
        <input type="range" name="maxprice" value="0" min="0" max="1000000">
        <span class="output"><span class="value"></span>€</span>
    </div>
    <div class="form-control">
        <label for="superficie">Superficie</label>
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
    <div class="form-control">
        <label for="myfile"><b>Photos</b>:</label>
        <input type="file" id="myfile" name="myfile"><br>
    </div>
     <div class="form-control1">
        <label for="type"><b>Autre</b></label>
    </div >
    <div class="form-control2">
            <input type="checkbox" name="type[]" id="meuble" value="meuble" />
            <label for="meuble">Meuble</label>
            <input type="checkbox" name="type[]" id="piscine" value="piscine" />
            <label for="piscine">Piscine</label>
            <input type="checkbox" name="type[]" id="balcon" value="balcon" />
            <label for="balcon">Balcon</label>
        </div>
        <div class="form-control3">
                <input type="checkbox" name="type[]" id="jardin" value="jardin" />
                <label for="jardin">Jardin</label>
                <input type="checkbox" name="type[]" id="garage" value="garage" />
                <label for="garage">Garage</label>
                <input type="checkbox" name="type[]" id="cave" value="cave" />
                <label for="cave">Cave</label>
            </div>
            <div class="form-control4">
           <input type="checkbox" name="type[]" id="ascenseur" value="ascenseur" />
            <label for="ascenseur">Ascenseur</label>
        </div>
        <div class="form-controL5>
         <label for="description"><b>Description</b></label><br>
        <textarea id="w3review" name="w3review" rows="4" cols="50"></textarea>
     </div>
                                        
            <input type="submit" value="Ajouter">
                
</main>
    <script src="../Tools/Js/form.js" defer></script>

<?php 
$title = "Ajouter un bien";
$style = '../Tools/Style/form.css';
$content = ob_get_clean();
require './Template.php' ?>

