<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/profile.css">

<div class="content__container">
    <div class="row">
        <div class="image-rating__container col-md-4">
            <div class="image__container">
                <img src="https://i.pinimg.com/originals/fa/cd/ec/facdec3df0cb85cc52f23ac7e8835c40.gif" class="image--circle" alt="Profile Picture" loading="lazy">
                <div class="rating__container">
                    <span>4.8 <i class="rating__icon fa-solid fa-star"></i></span>
                </div>
            </div>
        </div>
        <div class="details__container col-md-8">
            <span class="details__label">Nama Lengkap</span>
            <h3 class="details__value">Vincentius Wibu Andy</h3>
            <div class="row mt-3 mb-3">
                <div class="col-md-5">
                    <span class="details__label">Nomor Telepon</span>
                    <h5 class="details__value">+62 812-3456-7890</h5>
                </div>
                <div class="col-md-7">
                    <span class="details__label">Alamat E-mail</span>
                    <h5 class="details__value">andy.wibu@helens.com</h5>
                </div>
            </div>
            <span class="details__label">Alamat</span>
            <h5 class="details__value">221b Baker St, London NW1 6XE, United Kingdom</h5>
        </div>
    </div>
    <div class="button__container">
        <a href="./progress.php">
            <button class="btn button--blue">Lihat Pesanan</button>
        </a>
    </div>
</div>

<?php require_once 'templates/footer.php'; ?>