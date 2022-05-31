    <!-- Footer section-->
    <!-- Chat section -->

    <section class="chat">
        <div class="chat-header">
            <h5>Bizə mesaj göndərin</h5>
            <button type="button" id="chat-close" class="btn-close" aria-label="Close"></button>
        </div>
        <div class="chat-body">
            <div class="body-text">
                Salam nə köməyə ehtiyacınız var?
                1.Proqramın istifadəsində çətinlik çəkirəm.
                2.Rezerv - də hər hansı bir problem var.
                3.İstədiyim Cafe& Restoranı tapa bilmirəm
            </div>
        </div>
        <div class="chat-footer">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Mesaj yazın..">
                <button class="btn" type="button" id="button-addon2"><a>
                        <ion-icon name="send-outline"></ion-icon>
                    </a></button>
            </div>
        </div>

    </section>
    <section class="chat-circle" id="chat">
        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
    </section>
    <section class="foter" data-aos="zoom-in" data-aos-duration="1000">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-3 col-md-12 foter-text">
                    <img class="footer-img" src="images/cafetap_logo.png" alt="">
                    <p><strong>
                            <ion-icon name="location-outline"></ion-icon>Ünvan:
                        </strong>5171 W Campbell Ave undefined Kent, Utah 53127 United States</p>
                    <p><strong>
                            <ion-icon name="call-outline"></ion-icon>Bizə Zəng Et:
                        </strong>(+994) -0 554311125</p>
                    <p><strong>
                            <ion-icon name="send-outline"></ion-icon>Email:
                        </strong>sale@Nest.com</p>
                    <h3>Tətbiqimizi yüklə</h3>
                    <p class="mb-3">App Store və ya Play Store-dan</p>
                    <div style="display: flex;align-items: center;">
                        <img class="foter-store" src="images/google-play.jpg" alt="">
                        <img class="foter-store" src="images/app-store.jpg" alt="">
                    </div>

                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-5">
                    <h3 class="mb-3">CafeTap</h3>
                    <a href="about.php" style="color:black">
                        <p>Haqqımızda</p>
                    </a>
                    <a href="contact.php" style="color:black">
                        <p>Əlaqə</p>
                    </a>
                    <a href="security_politics.php" style="color:black">
                        <p>Gizlilik siyasəti</p>
                    </a>
                    <a href="faq.php" style="color:black">
                        <p>FAQ</p>
                    </a>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-5">
                    <h3 class="mb-3">Hesab</h3>
                    <p><a href="signin.php" style="color:black">Daxil Ol</a></p>
                    <p><a href="registration.php" style="color:black">Qeydiyyat</a></p>
                    <p><a href="my_favorites.php" style="color:black">Seçilmişlər</a></p>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-12 mt-5">
                    <h3>Xidmətlərimiz</h3>
                    <p class="ad_service">Reklam Xidməti</p>
                    <p>Sənə yaxın restoran</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Off Canvas -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasWithBackdrop" data-bs-backdrop="false" aria-labelledby="offcanvasWithBackdropLabel">
        <div class="offcanvas-body">
            <div class="logo">
                <img class="logo_image" src="images/cafetap_logo.png" alt="">
                <div class="btn-group">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">
                        <img id="drop-img" src="images/azerbaijan.png" alt=""> <span id="drop-text">AZE</span>
                    </button>
                    <ul class="dropdown-menu" style="z-index: 99999999;">
                        <li id="EN"><a class="dropdown-item" href="#"><img src="images/usa.png" alt=""> İNG</a></li>
                        <li id="ARAB"><a class="dropdown-item" href="#"><img src="images/arabic.png" alt=""> ƏRƏB</a></li>
                        <li id="RUS"><a class="dropdown-item" href="#"><img src="images/russia.png" alt=""> RUS</a></li>
                        <li id="AZE"><a class="dropdown-item" href="#"><img src="images/azerbaijan.png" alt=""> AZE</a></li>
                    </ul>
                </div>
            </div>
            <div class="signation">
                <a href="registration.php">Qeydiyyat</a>
                <span>|</span>
                <a href="signin.php">Daxil Ol</a>
            </div>
            <ul class="offcanvas_ul">
                <li class="li1"><a href="homepage.php">Ana səhifə</a></li>
                <li><a href="">Sənə yaxın restoran</a></li>
                <li class="li3"><a href="my_favorites.php">Seçilmişlər</a></li>
                <li class="li2"><a href="about.php">Haqqımızda</a></li>
                <li class="li3"><a href="contact.php">Əlaqə</a></li>
            </ul>
            <hr>
            <div class="socialicon">
                <h6>Bizi izləyin</h6>
                <ul class="offcanvas-icon">
                    <li class="icon1"><a href="">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a></li>
                    <li class="icon2"><a href="">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a></li>
                    <li class="icon3"><a href="">
                            <ion-icon name="logo-whatsapp"></ion-icon>
                        </a></li>
                    <li class="icon4"><a href="">
                            <ion-icon name="logo-tiktok"></ion-icon>
                        </a></li>
                </ul>
            </div>
            <hr>
            <div class="location-bar">
                <ul>
                    <li class="li1">
                        <ion-icon name="location-outline"></ion-icon>Bizim Ünvan: Nizami rayon Bab
                    </li>
                    <li class="li2">
                        <ion-icon name="send-outline"></ion-icon>E-Poçt: cafetap@gmail.com
                    </li>
                    <li class="li3">
                        <ion-icon name="call-outline"></ion-icon>Bizə Zəng:(+994)-554311125
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="toast" role="alert">
        <div class="toast-header">
            <strong class="mr-auto">CafeTap</strong>
            <button id="close_toast" type="button" class="px-2 border-none bg-dark text-white fs-6 ms-auto close border-none outline-none" data-bs-dismiss="toast">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Salam, saytda reklam üçün: 050-431-11-25 nömrəsi ilə əlaqə saxlayın, təşəkkürlər.
        </div>
    </div>













    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/javas.js?v=<?php echo rand(1, 100000000000) ?>"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    </body>

    </html>