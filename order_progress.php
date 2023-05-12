<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/order_progress.css">

<div class="content__container">
    <h4 class="content__title mb-4">Pesanan dalam Proses</h4>
    <div class="content__list__container row mb-5">
        <div class="section__order__container col-md-4">
            <div class="row">
                <div class="col-md-9">
                    <span class="details__label">Pesanan</span><br>
                    <h5 class="details__value">Paket AC Hemat</h5>
                </div>
                <div class="col-md-3">
                    <br>
                    <h5 class="details__value details__value--quant">x3</h5>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="section__details__container col-md-7">
            <div class="row">
                <div class="col-md-4">
                    <span class="details__label">Tanggal</span><br>
                    <span class="details__value">13 Desember 2022</span>
                </div>
                <div class="col-md-2">
                    <span class="details__label">Waktu</span><br>
                    <span class="details__value">13:00</span>
                </div>
                <div class="button__container col-md-6">
                    <button class="btn button--blue" onclick="">Ubah ke Selesai</button>
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <h4 class="content__title mb-4">Pesanan Sebelumnya</h4>
    <div class="content__list__container row mb-5">
        <div class="section__order__container col-md-4">
            <div class="row">
                <div class="col-md-9">
                    <span class="details__label">Pesanan</span><br>
                    <h5 class="details__value">Paket AC Hemat</h5>
                </div>
                <div class="col-md-3">
                    <br>
                    <h5 class="details__value details__value--quant">x3</h5>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="section__details__container col-md-7">
            <div class="row">
                <div class="col-md-4">
                    <span class="details__label">Tanggal</span><br>
                    <span class="details__value">13 Desember 2022</span>
                </div>
                <div class="col-md-2">
                    <span class="details__label">Waktu</span><br>
                    <span class="details__value">13:00</span>
                </div>
                <div class="button__container col-md-6">
                    <button class="btn button--blue" onclick="" data-toggle="modal" data-target="#rateWorkerModal">Nilai Pekerja</button>
                </div>
            </div>
        </div>
    </div>
    <div class="content__list__container row mb-5">
        <div class="section__order__container col-md-4">
            <div class="row">
                <div class="col-md-9">
                    <span class="details__label">Pesanan</span><br>
                    <h5 class="details__value">Paket AC Hemat</h5>
                </div>
                <div class="col-md-3">
                    <br>
                    <h5 class="details__value details__value--quant">x3</h5>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="section__details__container col-md-7">
            <div class="row">
                <div class="col-md-4">
                    <span class="details__label">Tanggal</span><br>
                    <span class="details__value">13 Desember 2022</span>
                </div>
                <div class="col-md-2">
                    <span class="details__label">Waktu</span><br>
                    <span class="details__value">13:00</span>
                </div>
                <div class="rating__container col-md-6">
                    <div class="row">
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content__list__container row mb-5">
        <div class="section__order__container col-md-4">
            <div class="row">
                <div class="col-md-9">
                    <span class="details__label">Pesanan</span><br>
                    <h5 class="details__value">Paket AC Hemat</h5>
                </div>
                <div class="col-md-3">
                    <br>
                    <h5 class="details__value details__value--quant">x3</h5>
                </div>
            </div>
        </div>
        <div class="vl"></div>
        <div class="section__details__container col-md-7">
            <div class="row">
                <div class="col-md-4">
                    <span class="details__label">Tanggal</span><br>
                    <span class="details__value">13 Desember 2022</span>
                </div>
                <div class="col-md-2">
                    <span class="details__label">Waktu</span><br>
                    <span class="details__value">13:00</span>
                </div>
                <div class="rating__container col-md-6">
                    <div class="row">
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star"></i>
                        <i class="rating__icon fa-solid fa-star-half-stroke"></i>
                        <i class="rating__icon fa-regular fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Rate Worker Modal -->
<div class="modal fade" id="rateWorkerModal" tabindex="-1" aria-labelledby="rateWorkerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h5 class="modal__title">Nilai Pekerja</h5>
                <form class="rating" action="#" method="post">
                    <div class="modal__section__container row mt-5">
                        <div class="col-md-2">
                            <img src="https://i.pinimg.com/originals/fa/cd/ec/facdec3df0cb85cc52f23ac7e8835c40.gif" class="modal__image--circle" alt="Profile Picture" loading="lazy">
                        </div>
                        <div class="col-md-6">
                            <span class="details__label">Pekerja</span><br>
                            <span class="details__value">Vincentius Wibu Andy</span>
                        </div>

                        <!-- Credit to Neil Pomerleau: https://codepen.io/neilpomerleau/pen/wzxzQM -->
                        <div class="modal__rating__container col-md-4">
                            <label>
                                <input type="radio" name="stars" value="1" />
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="2" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="3" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="4" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                            <label>
                                <input type="radio" name="stars" value="5" />
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                                <span class="icon">★</span>
                            </label>
                        </div>


                    </div>
                </form>
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <span class="details__label">Pesanan</span>
                    </div>
                </div>
                <div class="modal__section__container row">
                    <div class="col-md-10">
                        <span class="details__value">Paket AC Hemat</span>
                    </div>
                    <div class="col-md-2">
                        <span class="details__value">x3</span>
                    </div>
                </div>
                <hr>
                <div class="modal__section__container row mb-3">
                    <div class="col-md-6">
                        <span class="details__label">Tanggal</span><br>
                        <span class="details__value">13 Desember 2022</span>
                    </div>
                    <div class="col-md-6">
                        <span class="details__label">Waktu</span><br>
                        <span class="details__value">13:00</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <span class="details__label">Lokasi</span><br>
                        <span class="details__value">Jl. Siwalankerto No.121-131, Siwalankerto, Kec. Wonocolo, Kota SBY, Jawa Timur 60236</span>
                    </div>
                </div>
                <div class="button__container--modal mt-5">
                    <button class="btn button--blue button--blue--modal" onclick="" data-dismiss="modal">Berikan Penilaian</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(':radio').change(function() {
        console.log('New star rating: ' + this.value);
    });
</script>

<?php require_once 'templates/footer.php'; ?>