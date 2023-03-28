
<main>
    <section class="login-container">
        <div class="title">
            <h2>Authentification d'administrateur</h2>
            <div class="little-border"></div>
        </div>

        <div class="tab-body" data-id="connexion">
            <div class="icon">
                <img src="Tools/Assets/admin.png" alt="" srcset="">
            </div>
            <form action="index.php?action=Accueil" method="post" id="form-cnx">
                <div class="row">
                    <i class="far fa-user"></i>
                    <?php if(isset($this->errorLogin)){?> 
                        <input name="id" id="id" type="text" value="<?= $_POST['id']?>" placeholder="Identitfiant">
                    <?php }else{?>
                        <input name="id" id="id" type="text" placeholder="Identitfiant">
                    <?php }?>
                </div>
                <div class="row">
                    <i class="fas fa-lock"></i>
                    <?php if(isset($this->errorLogin)){?> 
                            <input name="pw" id="pw" value="<?= $_POST['pw']?>" placeholder="Mot de Passe" type="password">
                    <?php }else{?>
                        <input name="pw" id="pw" placeholder="Mot de Passe" type="password">
                    <?php }?>
                </div>
             <?php if(isset($this->errorLogin)){?> 
                <div style="font-weight:700; text-align : center; color: red;">
                    <?=$this->errorLogin?>
                </div>
            <?php 
            }
            else{  
            }
            ?>
                <input class="login-btn" type="submit" value="Connexion" title="Se connecter" />
                <p style="color:red" id="erreur"></p>
            </form>
        </div>
    </section> 
</main>

<?php 
