<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/customer_details.css">

<div class="content__container">
    <form action="#" method="post">
        <div class="row">
            <div class="chapter__number__container col-md-3">
                <div class="row">
                    <div class="content__number__container col-md-1">
                        <span class="content__number">1</span>
                    </div>
                    <div class="content__chapter__container col-md-9">
                        <span class="content__chapter">Lokasi</span>
                    </div>
                </div>
            </div>
            <div class="section__container section__container--address col-md-9">
                <div class="google-map__container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.510662377445!2d112.7375639!3d-7.3395572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb4867925b0b%3A0xd06ae2d4f0af3f59!2sPetra%20Christian%20University!5e0!3m2!1sen!2sid!4v1683831474482!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="google-map"></iframe>
                </div>
                <div class="section__input__container row">
                    <label for="address"><i class="fa-solid fa-house"></i></label>
                    <input class="section__input section__input--full" type="text" id="address" name="address" placeholder="Detail lokasi (alamat lengkap, provinsi, kecamatan, kode pos)" required>
                    <div class="custom-control custom-switch mt-2">
                        <input type="checkbox" class="custom-control-input" id="currentLocationSwitch">
                        <label class="custom-control-label" for="currentLocationSwitch">Gunakan lokasi saat ini</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="chapter__number__container col-md-3">
                <div class="row">
                    <div class="content__number__container col-md-1">
                        <span class="content__number">2</span>
                    </div>
                    <div class="content__chapter__container col-md-9">
                        <span class="content__chapter">Waktu</span>
                    </div>
                </div>
            </div>
            <div class="section__container section__container--date col-md-9">
                <div class="date-picker__container">
                    <input type="date" id="date" name="date" class="date-picker" required>
                </div>
                <div class="calendar__container">
                    <iframe src="https://calendar.google.com/calendar/embed?height=600&wkst=2&bgcolor=%23ffffff&ctz=Asia%2FJakarta&showTitle=0&showDate=1&showCalendars=0&showTabs=1&showPrint=0&showNav=1&src=ZW4uaW5kb25lc2lhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&color=%23009688" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no" class="google-calendar"></iframe>
                </div>

                <!-- Credit to Attila Hajzer: https://codepen.io/attilahajzer/pen/WbbLpe -->
                <div class="section__time__container row">
                    <div class="time__container col-md-3">
                        <span class="time__title">Pagi</span>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="07:00 AM">
                                <span>07:00 AM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="08:00 AM">
                                <span>08:00 AM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="09:00 AM">
                                <span>09:00 AM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="10:00 AM">
                                <span>10:00 AM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="11:00 AM">
                                <span>11:00 AM</span>
                            </label>
                        </div>
                    </div>
                    <div class="time__container col-md-3">
                        <span class="time__title">Siang</span>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="12:00 PM">
                                <span>12:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="13:00 PM">
                                <span>13:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="14:00 PM">
                                <span>14:00 PM</span>
                            </label>
                        </div>
                    </div>
                    <div class="time__container col-md-3">
                        <span class="time__title">Sore</span>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="15:00 PM">
                                <span>15:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="16:00 PM">
                                <span>16:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="17:00 PM">
                                <span>17:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="18:00 PM">
                                <span>18:00 PM</span>
                            </label>
                        </div>
                    </div>
                    <div class="time__container col-md-3">
                        <span class="time__title">Malam</span>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="19:00 PM">
                                <span>19:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="20:00 PM">
                                <span>20:00 PM</span>
                            </label>
                        </div>
                        <div class="input--time">
                            <label>
                                <input type="checkbox" value="21:00 PM">
                                <span>21:00 PM</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="chapter__number__container col-md-3">
                <div class="row">
                    <div class="content__number__container col-md-1">
                        <span class="content__number">3</span>
                    </div>
                    <div class="content__chapter__container col-md-9">
                        <span class="content__chapter">Kontak</span>
                    </div>
                </div>
            </div>
            <div class="section__container col-md-9">
                <div class="contact__container row">
                    <div class="col-md-6">
                        <label for="name"><i class="fa-solid fa-user"></i></label>
                        <input class="section__input section__input--full" type="text" id="name" name="name" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6">
                        <label for="phone"><i class="fa-solid fa-phone"></i></label>
                        <input class="section__input section__input--full" type="tel" id="phone" name="phone" placeholder="Nomor Telepon" required>
                    </div>
                </div>
            </div>
        </div>
        <div class="button__container mt-5 mb-5">
            <button class="btn button--blue" onclick="">Buat Pesanan</button>
        </div>
    </form>
</div>

<script src="./scripts/file_upload.js"></script>

<?php require_once 'templates/footer.php'; ?>