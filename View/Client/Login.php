<?php ob_start();?>

<main>

<section class="login-container">
            <div class="title">
                <h2>Authentification d'administrateur</h2>
                <div class="little-border"></div>
            </div>

            <div class="tab-body" data-id="connexion">
                <div class="icon">
                    <img src="../../Tools/Assets/admin.png" alt="" srcset="">
                </div>
                <form id="form-cnx">
                    <div class="row">
                        <i class="far fa-user"></i>
                        <input id="id" type="text" placeholder="Identitfiant">
                    </div>
                    <div class="row">
                        <i class="fas fa-lock"></i>
                        <input id="pw" placeholder="Mot de Passe" type="password">
                    </div>
                    <input class="login-btn" type="submit" value="Connexion" title="Se connecter" />
                    <p style="color:red" id="erreur"></p>
                </form>
            </div>
        </section> 
    </main>
<?php 
$style = '../../Tools/Style/login.css';
$content = ob_get_clean();
require './Template.php' ?>