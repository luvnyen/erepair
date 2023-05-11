<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/checkout.css">

<div class="content__container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="content__title mb-4">Ringkasan Belanja</h4>
            <div class="order-summary__container row">
                <div class="col-md-3">
                    <img class="order-summary__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                </div>
                <div class="order-summary__product__container col-md-3">
                    <h5 class="order-summary__product">Paket AC Hemat</h5>
                    <span class="order-summary__price">Rp75.000,00</span>
                </div>
                <div class="col-md-3">
                    <div class="quant__container">
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <button type="button" class="btn btn-number" disabled="disabled" data-type="minus" data-field="quant[1]">
                                    <span class="fa fa-minus"></span>
                                </button>
                            </span>
                            <input type="text" name="quant[1]" class="form-control input-number" value="1" min="1" max="10">
                            <span class="input-group-append">
                                <button type="button" class="btn btn-number" data-type="plus" data-field="quant[1]">
                                    <span class="fa fa-plus"></span>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5 class="order-summary__total-price">Rp397.000,00</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h4 class="content__title mb-4">Rincian Tagihan</h4>
            <div class="order-details__container">
                <div class="row">
                    <div class="col-md-8">
                        <span class="order-details__label">Total Pesanan</span><br>
                        <span class="order-details__description">Total Harga (3 Barang)</span>
                    </div>
                    <div class="order-details__price__container col-md-4">
                        <span class="order-details__price">Rp397.000,00</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <span class="order-details__label">Biaya Servis</span><br>
                        <span class="order-details__description">5% dari Total Harga</span>
                    </div>
                    <div class="order-details__price__container col-md-4">
                        <span class="order-details__price">Rp19.850,00</span>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-8">
                        <span class="order-details__label">Biaya Transportasi</span><br>
                    </div>
                    <div class="order-details__price__container col-md-4">
                        <span class="order-details__price--free">GRATIS</span>
                    </div>
                </div>
            </div>
            <div class="order-total-price__container mt-4">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="order-details__label order-details__label--total">Total</h5>
                    </div>
                    <div class="col-md-6">
                        <h5 class="order-details__price">Rp416.850,00</h5>
                    </div>
                </div>
            </div>
            <div class="payment__container row mt-4">
                <div class="col-md-6">
                    <span class="order-details__label--method">Metode Pembayaran</span>
                </div>
                <div class="col-md-6">
                    <button class="button__payment">
                        Transfer BCA&nbsp;<i class="fa-solid fa-chevron-down"></i>
                    </button>
                </div>
            </div>
            <div class="button__container mt-4 mb-4">
                <button class="btn button--blue" onclick="">Bayar Sekarang</button>
            </div>
        </div>
    </div>
</div>

<script src="./scripts/product_quantity.js"></script>

<?php require_once 'templates/footer.php'; ?>