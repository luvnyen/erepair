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
                <div class="col-md-4">
                    <span class="order-details__label--method">Metode Pembayaran</span>
                </div>
                <div class="col-md-8">
                    <button class="button__payment" data-toggle="modal" data-target="#paymentMethodModal">
                        <span id="bank__choice">Bank Central Asia</span>
                        &nbsp;<i class="fa-solid fa-chevron-down"></i>
                    </button>
                </div>
            </div>
            <div class="button__container mt-4 mb-4">
                <a href="./customer_details.php">
                    <button class="btn button--blue" onclick="">Tahap Berikutnya<i class="fa-solid fa-arrow-right ml-2"></i></button>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- Payment Method Modal -->
<div class="modal fade" id="paymentMethodModal" tabindex="-1" aria-labelledby="paymentMethodModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal__title">Metode Pembayaran</h5>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <span class="details__label details__label--modal">
                            <i class="fa-solid fa-money-check-dollar mr-2"></i>Transfer Bank (Virtual Account)
                        </span><br>
                        <div class="bank__container mt-2">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bank" id="bca" value="Bank Central Asia" checked>
                                <label class="form-check-label details__value" for="bca">
                                    <img src="./assets/pages/checkout/bank-bca.png" class="bank__icon" alt="Bank Central Asia">
                                    Bank Central Asia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bank" id="mandiri" value="Bank Mandiri">
                                <label class="form-check-label details__value" for="mandiri">
                                    <img src="./assets/pages/checkout/bank-mandiri.png" class="bank__icon" alt="Bank Mandiri">
                                    Bank Mandiri
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bank" id="bni" value="Bank Negara Indonesia">
                                <label class="form-check-label details__value" for="bni">
                                    <img src="./assets/pages/checkout/bank-bni.png" class="bank__icon" alt="Bank Negara Indonesia">
                                    Bank Negara Indonesia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bank" id="bri" value="Bank Rakyat Indonesia">
                                <label class="form-check-label details__value" for="bri">
                                    <img src="./assets/pages/checkout/bank-bri.png" class="bank__icon" alt="Bank Rakyat Indonesia">
                                    Bank Rakyat Indonesia
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="bank" id="bsi" value="Bank Syariah Indonesia">
                                <label class="form-check-label details__value" for="bsi">
                                    <img src="./assets/pages/checkout/bank-bsi.png" class="bank__icon" alt="Bank Syariah Indonesia">
                                    Bank Syariah Indonesia
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button__container--modal mt-5">
                    <button class="btn button--blue button--blue--modal" onclick="changePaymentMethod()" data-dismiss="modal">Konfirmasi</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./scripts/product_quantity.js"></script>
<script>
    function changePaymentMethod() {
        var bank = document.getElementsByName('bank');
        var bankChoice = document.getElementById('bank__choice');

        for (var i = 0; i < bank.length; i++) {
            if (bank[i].checked) {
                bankChoice.innerHTML = bank[i].value;
            }
        }
    }
</script>

<?php require_once 'templates/footer.php'; ?>