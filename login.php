<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/auth.css">

<div class="content__container">
    <div class="row">
        <div class="section__container-wbutton section__container-wbutton-left col-md-4">
            <p>Belum Memiliki Akun?</p>
            <a href="./sign_up.php">
                <button type="button" class="section__button--blue">Daftar Sekarang</button>
            </a>
        </div>
        <div class="section__container-wform col-md-8">
            <h4 class="content__title">Selamat Datang Kembali</h4>
            <p class="content__subtitle">Masuk ke akun Anda</p>
            <form action="#" method="post" id="sign_up__form" class="mt-3">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" class="form-control" placeholder="Alamat E-mail" required>
                <div class="password__container">
                    <i class="fa-solid fa-lock"></i>
                    <i class="toggle-password far fa-eye" id="togglePassword"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                </div>
                <div class="button__container">
                    <button type="submit" class="section__button--white mt-3">Masuk</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="./scripts/show_password.js"></script>

<?php require_once 'templates/footer.php'; ?>