<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/auth.css">

<div class="content__container">
    <div class="row">
        <div class="section__container-wform col-md-8">
            <h4 class="content__title">Welcome to ERepair</h4>
            <p class="content__subtitle">Sign Up</p>
            <form action="#" method="post" id="sign_up__form" class="mt-3">
                <i class="fa-solid fa-user"></i>
                <input type="text" name="name" id="name" class="form-control" placeholder="Nama Lengkap" required>
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" class="form-control" placeholder="Alamat E-mail" required>
                <i class="fa-solid fa-phone"></i>
                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Nomor Telepon" required>
                <i class="fa-solid fa-house"></i>
                <input type="text" name="address" id="address" class="form-control" placeholder="Alamat" required>
                <i class="fa-solid fa-image"></i>
                <input type="url" name="picture" id="picture" class="form-control" placeholder="URL Foto Profil" required>
                <div class="password__container">
                    <i class="fa-solid fa-lock"></i>
                    <i class="toggle-password far fa-eye" id="togglePassword"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <input type="checkbox" id="tnc" name="tnc" value="false" class="mt-3" required>
                <label for="tnc">
                    Saya telah membaca <a href="#" target="_blank">syarat dan ketentuan</a>
                </label><br>
                <div class="button__container">
                    <button type="submit" class="section__button--white mt-3">Sign Up</button>
                </div>
            </form>
        </div>
        <div class="section__container-wbutton section__container-wbutton-right col-md-4">
            <p>Sudah Memiliki Akun?</p>
            <a href="./login.php">
                <button type="button" class="section__button--blue">Log In</button>
            </a>
        </div>
    </div>
</div>

<script src="./scripts/show_password.js"></script>

<?php require_once 'templates/footer.php'; ?>