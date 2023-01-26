<?php
    session_start();
    $title = "Mes paramètres";
    require_once "../Controller/check_user_connected.php";
    // Recover data of user from database
    require_once "../Controller/db_connection.php";
    require_once "../Model/data_user.php";
    require_once "../Element/header.php";
?>
<h1>Modifier mes informations</h1>
<div class="col-6 p-3 m-auto">
        <div class="border bg-light">
            <h2 class="text-center">Mes informations</h2>
            <form class="form-group" action="../Controller/user_registration.php" method ="post" enctype="multipart/form-data">
                <label class="sr-only" for="new_user_email">Votre adresse email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">@</div>
                    </div>  
                    <input type="email" class="form-control" name="new_user_email" id="user_login_email" readonly="readonly" value="<?php echo $user_data['email']; ?> ">
                </div>

                <label for="new_user_password">Mot de passe*</label>
                <input type="password" class="form-control" name="new_user_password" id="new_user_password"  required="required" placeholder="Votre mot de passe">

                <label for="new_user_last_name">Votre nom*</label>
                <input type="text" class="form-control" name="new_user_last_name" id="new_user_last_name" required="required" value="<?php echo $user_data['last_name']; ?>">

                <label for="new_user_first_name">Votre prénom*</label>
                <input type="text" class="form-control" name="new_user_first_name" id="new_user_first_name" required="required" value="<?php echo $user_data['first_name']; ?>">

                <label for="new_user_birthdate">Date de naissance</label>
                <input type="date" class="form-control" name="new_user_birthdate" id="new_user_birthdate" value="<?php echo $user_data['birthdate']; ?>">

                <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
                <label for="new_user_profil_picture">Votre photo de profil            (taille : 1Mo max / format : jpg,jpeg,png)</label>
                <input type="file" class="form-control" name="new_user_profil_picture" id="new_user_profil_picture" accept="image/png, image/jpeg, image/jpg">

                <div class="d-flex justify-content-center mt-2 mb-2">
                    <button type="submit" class="btn btn-primary">Créer votre compte</button>
                </div>
            </form>
        </div>
        <p class="text-center">* sont obligatoires</p>
    </div>


<?php
    require_once "../Element/footer.php";
?>