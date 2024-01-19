<?php include './partials/header.php' ?>


<section class="container text-light">
    <h1>Créer un compte</h1>


    <form action="./authentication/process_register.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label text-light">Email</label>
            <input type="email" class="form-control bg-yellow " name="email" id="email" placeholder="toto@gmail.com">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label text-light">Mot de passe</label>
            <input type="password" class="form-control bg-yellow " name="password" id="password" placeholder="password">
        </div>
        <div class="mb-3">
            <label for="pseudo" class="form-label text-light">Pseudo</label>
            <input type="text" class="form-control bg-yellow " name="pseudo" id="pseudo" placeholder="toto">
        </div>
        <button type="submit" class="btn btn-yellow">Créer un compte</button>
    </form>

</section>

<?php include "./partials/footer.php" ?>