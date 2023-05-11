<?php require_once 'templates/header.php'; ?>

<link rel="stylesheet" href="./styles/pages/career.css">

<div class="content__container">
    <h4 class="content__title mb-4">Ikuti Tim Kami</h4>
    <div class="row">
        <div class="col-md-3">
            <div class="row">
                <div class="content__number__container col-md-1">
                    <span class="content__number">1</span>
                </div>
                <div class=" content__chapter__container col-md-9">
                    <span class="content__chapter">Verifikasi KTP</span>
                </div>
            </div>
        </div>
        <div class="ktp__container col-md-9">
            <div class="row">
                <div class="col-md-6">
                    <p class="chapter__subtitle">Unggah foto KTP</p>

                    <!-- FILE UPLOAD -->
                    <form>
                        <fieldset class="upload_dropZone text-center mb-3 p-4">
                            <i class="upload__icon fa-solid fa-cloud-arrow-up"></i>
                            <p class="small my-2">Seret atau jatuhkan file di sini<br>atau</p>
                            <input id="ktp_upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png" required />
                            <label class="btn btn-upload mb-3" for="ktp_upload_image_background">Pilih File</label>
                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
                        </fieldset>
                    </form>
                    <!-- END FILE UPLOAD -->

                    <span>Format file yang didukung: <b>JPEG, PNG</b></span><br>
                    <span>Ukuran file maksimum: <b>5MB</b></span>
                </div>
                <div class="col-md-6">

                    <!-- This is a bad practice, lol -->
                    <p>&nbsp;</p>

                    <img src="./assets/pages/career/Career 1.jpg" width="170" height="120" class="ktp__image" alt="KTP" loading="lazy">
                    <p class="chapter__subtitle mt-3">Panduan foto KTP</p>
                    <ul>
                        <li>KTP asli, bukan fotokopi</li>
                        <li>Atas nama sendiri, bukan orang lain</li>
                        <li>Tidak buram</li>
                        <li>Tidak terlalu gelap atau terang</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-6">
                    <p class="chapter__subtitle">Unggah foto bersama dengan KTP</p>

                    <!-- FILE UPLOAD -->
                    <form>
                        <fieldset class="upload_dropZone text-center mb-3 p-4">
                            <i class="upload__icon fa-solid fa-cloud-arrow-up"></i>
                            <p class="small my-2">Seret atau jatuhkan file di sini<br>atau</p>
                            <input id="selfie_ktp_upload_image_background" data-post-name="image_background" data-post-url="https://someplace.com/image/uploads/backgrounds/" class="position-absolute invisible" type="file" multiple accept="image/jpeg, image/png" required />
                            <label class="btn btn-upload mb-3" for="selfie_ktp_upload_image_background">Pilih File</label>
                            <div class="upload_gallery d-flex flex-wrap justify-content-center gap-3 mb-0"></div>
                        </fieldset>
                    </form>
                    <!-- END FILE UPLOAD -->

                    <span>Format file yang didukung: <b>JPEG, PNG</b></span><br>
                    <span>Ukuran file maksimum: <b>5MB</b></span>
                </div>
                <div class="col-md-6">

                    <!-- This is a bad practice, lol -->
                    <p>&nbsp;</p>

                    <img src="./assets/pages/career/Career 2.jpg" width="200" height="200" class="ktp__image" alt="KTP" loading="lazy">
                    <p class="chapter__subtitle mt-3">Panduan foto bersama dengan KTP</p>
                    <ul>
                        <li>Pastikan keseluruhan wajah terlihat</li>
                        <li>Informasi pada KTP terlihat dengan jelas</li>
                        <li>Tidak buram</li>
                        <li>Tidak terlalu gelap atau terang</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-3">
            <div class="row">
                <div class="content__number__container col-md-1">
                    <span class="content__number">2</span>
                </div>
                <div class=" content__chapter__container col-md-9">
                    <span class="content__chapter">Informasi Tambahan</span>
                </div>
            </div>
        </div>
        <div class="additional__container col-md-9">
            <form action="#" method="post">
                <div class="row">
                    <div class="col-md-12">
                        <label for="nik">Nomor Induk Kependudukan</label>
                        <input class="additional__input" type="text" id="nik" name="nik" required>
                    </div>
                    <div class="col-md-12">
                        <label for="phone">Nomor Telepon</label>
                        <input class="additional__input" type="tel" id="phone" name="phone" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <label for="subdistrict">Kecamatan</label>
                        <input class="additional__input" type="text" id="subdistrict" name="subdistrict" required>
                    </div>
                    <div class="col-md-6">
                        <label for="postal_code">Kode Pos</label>
                        <input class="additional__input" type="text" id="postal_code" name="postal_code" required>
                    </div>
                </div>
                <div class="additional__map__container row">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15828.510662377445!2d112.7375639!3d-7.3395572!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb4867925b0b%3A0xd06ae2d4f0af3f59!2sPetra%20Christian%20University!5e0!3m2!1sen!2sid!4v1683831474482!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="additional__map"></iframe>
                </div>
                <div class=" row">
                        <div class="col-md-12">
                            <label for="address">Alamat</label>
                            <input class="additional__input additional__input--address" type="text" id="address" name="address">
                        </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <p class="additional__subtitle">Kontak Darurat 1</p>
                        <label for="name_1">Nama</label>
                        <input class="additional__input" type="text" id="name_1" name="name_1" required><br>
                        <label for="relation_1">Relasi</label>
                        <select class="additional__input" name="relation_1" id="relation_1" selected="Pilih salah satu..." required>
                            <option value="">Pilih salah satu...</option>
                            <option value="Ayah Kandung">Ayah Kandung</option>
                            <option value="Ibu Kandung">Ibu Kandung</option>
                            <option value="Kakak">Kakak Kandung</option>
                            <option value="Adik">Adik Kandung</option>
                        </select><br>
                        <label for="phone_1">Nomor Telepon</label>
                        <input class="additional__input" type="tel" id="phone_1" name="phone_1" required><br>
                    </div>
                    <div class="col-md-6">
                        <p class="additional__subtitle">Kontak Darurat 2 (Opsional)</p>
                        <label for="name_2">Nama</label>
                        <input class="additional__input" type="text" id="name_2" name="name_2"><br>
                        <label for="relation_2">Relasi</label>
                        <select class="additional__input" name="relation_2" id="relation_2" selected="Pilih salah satu...">
                            <option value="">Pilih salah satu...</option>
                            <option value="Ayah Kandung">Ayah Kandung</option>
                            <option value="Ibu Kandung">Ibu Kandung</option>
                            <option value="Kakak">Kakak Kandung</option>
                            <option value="Adik">Adik Kandung</option>
                        </select><br>
                        <label for="phone_2">Nomor Telepon</label>
                        <input class="additional__input" type="tel" id="phone_2" name="phone_2"><br>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="button__container mt-5 mb-5">
        <button class="btn button--blue" onclick="">Daftar Sekarang</button>
    </div>
</div>

<script src="./scripts/file_upload.js"></script>

<?php require_once 'templates/footer.php'; ?>