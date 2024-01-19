<?php include './partials/header.php' ?>


    <section class="container text-light">
        <h1>Connexion</h1>


        <form action="./authentication/process_login.php" method="post">
        <div class="mb-3">
            <label for="pseudo" class="form-label text-light">Pseudo</label>
            <input type="text" class="form-control bg-yellow " name="pseudo" id="pseudo" placeholder="toto">
        </div>
            <div class="mb-3">
                <label for="password" class="form-label  ">Mot de passe</label>
                <input type="password" class="form-control bg-yellow " name="password" id="password" placeholder="password">
            </div>
            <a href="./index/./index2.php" class="btn bg-yellow text-light">Accueil</a>
        </form>

    </section>
    

<?php include "./partials/footer.php" ?>
