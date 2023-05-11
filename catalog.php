<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/catalog.css">

<div class="content__container">
    <form action="#" method="post" id="search-package__form">
        <div class="search-package__container row">
            <input class="search-package__input form-control" type="search" id="search-package" placeholder="Cari Paket" aria-label="Cari Paket" required>
            <button class="search-package__button btn my-2 my-sm-0" type="submit">
                <i class="search-package__icon fa-solid fa-magnifying-glass"></i>
            </button>
        </div>
    </form>
    <div class="catalog__container mt-5">
        <div class="row mb-5">
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
            <div class="catalog__card__container col-md-4">
                <div class="catalog__card card">
                    <img class="catalog__image card-img-top" src="./assets/pages/catalog/Catalog 1.jpg" alt="Catalog">
                    <div class="catalog__description card-body">
                        <h5 class="card-title">Paket AC Hemat</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <h4 class="catalog__price">Rp75.000,00</h4>
                        <div class="row mt-3">
                            <div class="catalog__button__container col-md-5">
                                <button class="catalog__button btn">+ Keranjang</button>
                            </div>
                            <div class="quant__container col-md-7">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="./scripts/product_quantity.js"></script>

<?php require_once 'templates/footer.php'; ?>