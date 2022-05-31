<!DOCTYPE html>
<html lang="en">

<!-- Design Site 
http://wp.alithemes.com/html/nest/demo/index-6.html#
-->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restoranların axtarışı üçün nəzərdə tutulan web sayt">
    <meta name="keywords" content="kolorit, mado, özsüt, zeyd, gate25">
    <meta name="author" content="Babazadeh Web Studio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/shortcut_icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css?v=<?php echo rand(1, 100000000000) ?>">
    <link rel="stylesheet" href="css/stylemedia.css?v=<?php echo rand(1, 100000000000) ?>">
    <link href=https://pro.fontawesome.com/releases/v5.10.0/css/all.css rel=stylesheet>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <title>CafeTap</title>
</head>

<body>
    <!--  Page Header Section  -->
    <header class="nav_topbar">

        <!--   Top Bar   -->

        <div class="topbar_section shadow-sm">
            <div class="topbar_left">
                <ul>
                    <li><a class="ad_service">Saytda Reklam</a></li>
                    <li><a href=""><img src="images/instagram.png" style="margin-top: -5px;" alt=""></a></li>
                    <li><a href=""><img src="images/tik-tok.png" style="margin-top: -5px;" alt=""></a></li>
                </ul>
            </div>
            <div class="topbar_right">
                <ul>
                    <li id="ok"><a><i class="fas fa-comment-lines"></i> Chat</a></li>
                    <li>
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
                    </li>
                </ul>
            </div>
        </div>

        <!--   Nav Bar   -->
        <div class="navbar_section shadow-sm" id="mobile-navbar">
            <div class="site_logo">
                <a href="homepage.php"><img src="images/cafetap_logo.png" alt=""></a>
            </div>
            <div class="site_functions">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle user-buton" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        <ion-icon name="person-outline"></ion-icon>
                        <span class="user-name">Taleh Abdllayev</span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="setting.php">
                                <ion-icon name="settings-outline"></ion-icon>Tənzimləmələr
                            </a></li>
                        <li><a class="dropdown-item" href="signin.php">
                                <ion-icon name="log-out-outline"></ion-icon>Çıxış
                            </a></li>
                    </ul>
                </div>
                <a href="registration.php"><img src="images/add-user.png" alt=""> Qeydiyyat</a>
                <a href="signin.php"><img src="images/sign-in.png" alt=""> Daxil ol</a>
                <!-- <div class="mobile_functions"></div> -->
                <div class="hamburger" id="hamburger-6" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBackdrop" aria-controls="offcanvasWithBackdrop">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
            </div>
        </div>
        </div>

        <!--   Search   -->

        <div class="search_section">
            <div class="search">
                <select class="form-select">
                    <option value="" style="display: none;">Metrolar</option>
                    <option value="">Nərimanov</option>
                    <option value="">28 May</option>
                </select>
                <input type="text" class="form-control location" placeholder="Ünvan">
                <input type="text" class="form-control" placeholder="CafeTap'da axtar">
                <button class="search_button"><i class="fad fa-search"></i></button>
            </div>
        </div>

        <!--   Main Navbar   -->

        <div class="main_navbar shadow-lg" id="navbar">
            <div class="trend_categories" id="trend_categories">
                <p><i class="far fa-th-large"></i> Trend Kateqoriyalar</p><span id="myDIV"><i class='far fa-angle-down'></i></span>
            </div>
            <ul class="items_main">
                <li><a href="homepage.php">Ana Səhifə</a></li>
                <li><a href="">Sənə yaxın restoran</a></li>
                <li><a href="my_favorites.php"> Seçilmişlər</a></li>
                <li><a href="about.php">Haqqımızda</a></li>
                <li><a href="contact.php">Əlaqə</a></li>
            </ul>
            <div class="categories_box shadow">
                <div class="category_row">
                    <div class="category"><a href="">
                            <div class="category_icon">
                                <img src="images/restaurant.png" alt="">
                            </div>
                            <div class="category_title">
                                Bütün Restoranlar
                            </div>
                        </a>
                    </div>
                    <div class="category">
                        <a href="">
                            <div class="category_icon">
                                <img src="images/music.png" alt="">
                            </div>
                            <div class="category_title">
                                Canlı Musiqi
                            </div>
                        </a>
                    </div>
                    <div class="category">
                        <a href="">
                            <div class="category_icon">
                                <img src="images/door.png" alt="">
                            </div>
                            <div class="category_title">
                                Kabinet
                            </div>
                        </a>
                    </div>
                </div>
                <div class="category_row">
                    <a href="">
                        <div class="category">
                            <div class="category_icon">
                                <img src="images/dining-table.png" alt="">
                            </div>
                            <div class="category_title">
                                Banket
                            </div>
                    </a>
                </div>
                <div class="category">
                    <a href="">
                        <div class="category_icon">
                            <img src="images/delivery.png" alt="">
                        </div>
                        <div class="category_title">
                            Çatdırılma
                        </div>
                    </a>
                </div>
                <div class="category">
                    <a href="">
                        <div class="category_icon">
                            <img src="images/microphone.png" alt="">
                        </div>
                        <div class="category_title">
                            Karaoke
                        </div>
                    </a>
                </div>
            </div>
        </div>
        </div>

    </header>


</body>
</head>