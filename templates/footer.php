<link rel="stylesheet" href="./styles/templates/footer.css">

<div class="footer__container">
    <div class="row">
        <div class="col-md-2">
            <ul class=".footer__link--vertical">
                <li>
                    <a href="./index.php">Halaman Utama</a>
                </li>

                <!-- Showcase your team members (?) -->
                <li>
                    <a href="#">Tentang Kami</a>
                </li>

                <li>
                    <a href="./career.php">Karir</a>
                </li>
            </ul>
        </div>
        <div class="col-md-2">
            <ul class=".footer__link--vertical">
                <li>
                    <a href="#">Pusat Bantuan</a>
                </li>
                <li>
                    <a href="#">Kritik dan Saran</a>
                </li>
            </ul>
        </div>
        <div class="footer__section--right col-md-8">
            <a href="./index.php">
                <img src=" ./assets/templates/erepair-logo.svg" width="200" alt="ERepair Logo" loading="lazy">
                <br>
            </a>
            <div class="footer__social mt-3">
                <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">
                    <img src="./assets/templates/social-google.svg" width="40" alt="Google+" loading="lazy">
                </a>
                <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">
                    <img src="./assets/templates/social-instagram.svg" class="ml-2" width="40" alt="Instagram" loading="lazy">
                </a>
                <a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">
                    <img src="./assets/templates/social-facebook.svg" class="ml-2" width="40" alt="Facebook" loading="lazy">
                </a>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-md-6">
            <ul class="footer__link--horizontal">
                <li>
                    <a href="mailto:erepair@technopreneurship.com">HUBUNGI KAMI</a>
                </li>
                <li class="ml-5">
                    <a href="#">KEBIJAKAN PRIVASI</a>
                </li>
                <li class="ml-5">
                    <a href="#">SYARAT PENGGUNAAN</a>
                </li>
            </ul>
        </div>
        <div class="footer__section--right footer__copyright col-md-6">
            <ul>
                <li>&copy; <?= date("Y") ?> ERepair Inc.</li>
            </ul>
        </div>
    </div>
    </body>

    </html>