<?php
include "header.php";
include "categories.php"
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-lg-9 col-md-8 cafe">
            <div class="cafe-img">
                <img src="images/zeyd_restaurant.jpg" alt="">
            </div>
            <div class="cafe-text">
                <h3>Zeyd</h3>
                <h1><a href="" target="_blank" class="menu_pdf">Menu PDF</a></h1>
                <div class="text textcut">
                    <strong>Ünvan:</strong>
                    <p>Koroğlu Çinar Plaza</p>
                </div>
                <div class="text">
                    <strong>Açılır:</strong>
                    <p>09:00</p>
                </div>
                <div class="text textcut">
                    <strong>Bağlanır:</strong>
                    <p>00:00</p>
                </div>
                <div class="text">
                    <strong>Metro:</strong>
                    <p>Koroğlu mt/s</p>
                </div>
                <div class="text textcut">
                    <strong>Depozit:</strong>
                    <p>30 AZN</p>
                </div>
                <div class="text">
                    <strong>Endirim:</strong>
                    <p>10%</p>
                </div>
                <div class="rezerv-butons">
                    <button type="button" class="rezerv">
                        <ion-icon name="cash-outline"></ion-icon>Rezerv et
                    </button>
                    <button class="xususi-teklif">
                        <ion-icon name="ribbon-outline"></ion-icon>Xüsusi təklif
                    </button>
                </div>

                <p class='text6'>Rezervasiya edənlərə promokod <span>(10% endirim)</span></p>
            </div>
            <div class="cafe-img-more">
                <img src="https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <img src="https://images.pexels.com/photos/1565256/pexels-photo-1565256.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
                <img src="https://images.pexels.com/photos/260922/pexels-photo-260922.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
                <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940">
            </div>
            <div class="zoom-img">
                <img id="zoom" src="" alt="">
                <img class="cancel" id="cancel" src="images/cancel.png" alt="">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 stars align-items-center">
            <div class="star text-center">
                <form action="">


                    <h4 class="mb-4">Restorana fikir bildirin</h4>
                    <input placeholder="Yazın" class="col-lg-12 col-md-12 col-sm-9 col-12 comment">
                    <div class="comment-star">
                        <div class="feedback">
                            <div class="rating">
                                <input type="radio" name="rating" id="rating-5">
                                <label for="rating-5"></label>
                                <input type="radio" name="rating" id="rating-4">
                                <label for="rating-4"></label>
                                <input type="radio" name="rating" id="rating-3">
                                <label for="rating-3"></label>
                                <input type="radio" name="rating" id="rating-2">
                                <label for="rating-2"></label>
                                <input type="radio" name="rating" id="rating-1">
                                <label for="rating-1"></label>
                                <div class="emoji-wrapper">
                                    <div class="emoji">
                                        <svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                            <path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534" />
                                            <ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff" />
                                            <ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347" />
                                            <ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63" />
                                            <ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff" />
                                            <ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347" />
                                            <ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63" />
                                            <path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347" />
                                        </svg>
                                        <svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                            <path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347" />
                                            <path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534" />
                                            <path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff" />
                                            <path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347" />
                                            <path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff" />
                                            <path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534" />
                                            <path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff" />
                                            <path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347" />
                                            <path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff" />
                                        </svg>
                                        <svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                            <path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347" />
                                            <path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff" />
                                            <circle cx="340" cy="260.4" r="36.2" fill="#3e4347" />
                                            <g fill="#fff">
                                                <ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10" />
                                                <path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z" />
                                            </g>
                                            <circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347" />
                                            <ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff" />
                                        </svg>
                                        <svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                            <path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347" />
                                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                            <g fill="#fff">
                                                <path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z" />
                                                <ellipse cx="356.4" cy="205.3" rx="81.1" ry="81" />
                                            </g>
                                            <ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                                            <g fill="#fff">
                                                <ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1" />
                                                <ellipse cx="155.6" cy="205.3" rx="81.1" ry="81" />
                                            </g>
                                            <ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
                                            <ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff" />
                                        </svg>
                                        <svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <circle cx="256" cy="256" r="256" fill="#ffd93b" />
                                            <path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
                                            <path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                                            <path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f" />
                                            <path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                                            <path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
                                            <path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f" />
                                            <path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
                                            <path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347" />
                                            <path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b" />
                                        </svg>
                                        <svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <g fill="#ffd93b">
                                                <circle cx="256" cy="256" r="256" />
                                                <path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z" />
                                            </g>
                                            <path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4" />
                                            <path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea" />
                                            <path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88" />
                                            <g fill="#38c0dc">
                                                <path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z" />
                                            </g>
                                            <g fill="#d23f77">
                                                <path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z" />
                                            </g>
                                            <path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347" />
                                            <path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b" />
                                            <path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="col-lg-12 col-md-12 col-sm-9 col-9 gonder">
                        <ion-icon name="send-outline"></ion-icon>Göndər
                    </button>
                </form>
                <div class="comment-text">
                    <p>Şərhlərə baxın</p>
                    <button class="col-3 view_cmmnt" type="button">
                        <ion-icon name="chatbubbles-outline"></ion-icon>Bax
                    </button>
                </div>
                <div class="wolt_company">

                </div>
                <div class="bolt_company">

                </div>
                <div class="driver_company">

                </div>
            </div>

        </div>
    </div>
    <div class="row mt-2" style="background-color: #fff;">
        <div class="col-lg-6 video" style="padding: 10px 10px;">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/DKTAXqrI8TE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="col-lg-6 location" style="padding: 10px 10px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.74180575962!2d49.90131181489441!3d40.41457026369568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x403063bb495062b7%3A0xfd62f88e205d9256!2sRestaurant%20Zeyd!5e0!3m2!1str!2s!4v1652405958333!5m2!1str!2s" width="100%" height="315" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

<!-- Reservation modal -->

<section class="Modal-rezerv">
    <div class="Modalfade">
        <div class="modal-into">
            <img class="reservation_close" src="images/cancel.png" alt="">
            <div class="d-flex" style="justify-content: space-between;align-items:center;">
                <h1 class="btn-okey mt-5 mb-5">
                    <div id='reloj'></div>
                </h1>
                <span class="scroll-btn">
                    <a href="#">
                        <span class="mouse">
                            <span>
                            </span>
                        </span>
                    </a>
                    <p class="scroll-text">Aşağı sürüşdür</p>

                </span>
            </div>
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Zal</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Terras</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Kabinet</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <form action="">
                        <label style="color:white; font-weight: 700; display:flex; justify-content:center; margin-top:20px;" for="">Rezerv edəcəyiniz tarixi seçin</label>
                        <input class="mt-5 form-control w-50 mx-auto" type="date">
                        <div class="tables_rest">
                            <label for="table_hall">
                                <div class="restaurant_table me-5">
                                    <div class="table-circle"></div>
                                    <div class="table-circle table2"></div>
                                    <div class="table-circle table3"></div>
                                    <div class="table-circle table4"></div>
                                    <div class="table_number">
                                        <p>01</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_hall">
                                </div>
                            </label>
                            <label for="table_hall">
                                <div class="restaurant_table2 me-5">
                                    <div class="table2-circle"></div>
                                    <div class="table2-circle table22"></div>
                                    <div class="table2-circle table23"></div>
                                    <div class="table2-circle table24"></div>
                                    <div class="table_number">
                                        <p>02</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_hall">
                                </div>
                            </label>
                            <label for="table_hall">
                                <div class="restaurant_table3 me-5">
                                    <div class="table3-circle"></div>
                                    <div class="table3-circle table33"></div>
                                    <div class="table_number">
                                        <p>03</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_hall">
                                </div>
                            </label>
                            <label for="table_hall">
                                <div class="restaurant_table2 me-5">
                                    <div class="table2-circle"></div>
                                    <div class="table2-circle table22"></div>
                                    <div class="table2-circle table23"></div>
                                    <div class="table2-circle table24"></div>
                                    <div class="table_number">
                                        <p>04</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_hall">
                                </div>
                            </label>
                            <label for="table_hall">
                                <div class="restaurant_table4 me-5">
                                    <div class="table4-circle"></div>
                                    <div class="table4-circle table41"></div>
                                    <div class="table4-circle table42"></div>
                                    <div class="table4-circle table43"></div>
                                    <div class="table4-circle table44"></div>
                                    <div class="table4-circle table45"></div>
                                    <div class="table4-circle table46"></div>
                                    <div class="table4-circle table47"></div>
                                    <div class="table_number">
                                        <p>05</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_hall">
                                </div>


                        </div>
                        <div class="table_images">
                            <div class="table_img">
                                <img class="clickimg" src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 1</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 2</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 3</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 4</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 5</p>
                            </div>
                        </div>

                        <div class="table-zoom">
                            <img class="table-close" src="images/cancel.png" alt="">
                            <img id="table-img" src="" alt="">
                        </div>

                        <div class="rezerv-inputs">
                            <div class="name-input">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Adınız</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Soyadınız</label>
                                </div>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Nömrəniz">
                                <label for="floatingInput">Nömrəniz</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Whatsapp Nömrəniz">
                                <label for="floatingInput">Whatsapp Nömrəniz <span style="color:red">*</span></label>
                            </div>
                            <div class="mb-2">
                                <label style="font-family: TT-light; color:white; font-weight: 700;" for="">Rezerv edəcəyiniz tarix</label>
                                <input class="form-control" type="time">
                            </div>
                            <button class="btn btn-outline-success text-white mt-2 col-lg-6 col-12">Göndər</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <form action="">
                        <label style="font-family: TT-light; color:white; font-weight: 700; display:flex; justify-content:center; margin-top:20px;" for="">Rezerv edəcəyiniz tarixi seçin</label>
                        <input class="mt-5 form-control w-50 mx-auto" type="date">
                        <div class="tables_rest">
                            <label for="table_terrace">
                                <div class="restaurant_table4  terras_mark">
                                    <div class="table4-circle green_circle"></div>
                                    <div class="table4-circle table41 green_circle"></div>
                                    <div class="table4-circle table42 green_circle"></div>
                                    <div class="table4-circle table43 green_circle"></div>
                                    <div class="table4-circle table44 green_circle"></div>
                                    <div class="table4-circle table45 green_circle"></div>
                                    <div class="table4-circle table46 green_circle"></div>
                                    <div class="table4-circle table47 green_circle"></div>
                                    <div class="table_number">
                                        <p>01</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_terrace">
                                </div>
                            </label>
                            <label for="table_terrace">
                                <div class="restaurant_table3 terras_mark">
                                    <div class="table3-circle green_circle"></div>
                                    <div class="table3-circle table33 green_circle"></div>
                                    <div class="table_number">
                                        <p>02</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_terrace">
                                </div>
                            </label>
                            <label for="table_terrace">
                                <div class="restaurant_table2 terras_mark">
                                    <div class="table2-circle green_circle"></div>
                                    <div class="table2-circle table22 green_circle"></div>
                                    <div class="table2-circle table23 green_circle"></div>
                                    <div class="table2-circle table24 green_circle"></div>
                                    <div class="table_number">
                                        <p>03</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_terrace">
                                </div>
                            </label>
                            <label for="table_terrace">
                                <div class="restaurant_table terras_mark">
                                    <div class="table-circle green_circle"></div>
                                    <div class="table-circle table2 green_circle"></div>
                                    <div class="table-circle table3 green_circle"></div>
                                    <div class="table-circle table4 green_circle"></div>
                                    <div class="table_number">
                                        <p>04</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_terrace">
                                </div>
                            </label>
                            <label for="table_terrace">
                                <div class="restaurant_table2 terras_mark">
                                    <div class="table2-circle green_circle"></div>
                                    <div class="table2-circle table22 green_circle"></div>
                                    <div class="table2-circle table23 green_circle"></div>
                                    <div class="table2-circle table24 green_circle"></div>
                                    <div class="table_number">
                                        <p>05</p>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="table_terrace">
                                </div>
                            </label>


                        </div>
                        <div class="table_images">
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/67468/pexels-photo-67468.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 1</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/941861/pexels-photo-941861.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 2</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/262047/pexels-photo-262047.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 3</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/1307698/pexels-photo-1307698.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 4</p>
                            </div>
                            <div class="table_img">
                                <img src="https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                <div class="depozit">20 AZN depozit</div>
                                <p>Masa 5</p>
                            </div>
                        </div>

                        <div class="table-zoom2">
                            <img class="table-close2" src="images/cancel.png" alt="">
                            <img id="table-zoom-img2" src="https://images.pexels.com/photos/1579739/pexels-photo-1579739.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                        </div>

                        <div class="rezerv-inputs">
                            <div class="name-input">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Adınız</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Soyadınız</label>
                                </div>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Nömrəniz">
                                <label for="floatingInput">Nömrəniz</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Whatsapp Nömrəniz">
                                <label for="floatingInput">Whatsapp Nömrəniz <span style="color:red">*</span></label>
                            </div>
                            <div class="mb-2">
                                <label style="font-family: TT-light; color:white; font-weight: 700;" for="">Rezerv edəcəyiniz tarix</label>
                                <input class="form-control" type="time">
                            </div>
                            <button class="btn btn-outline-success text-white mt-2 col-lg-6 col-12">Göndər</button>

                        </div>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                    <form action="">
                        <label style="font-family: TT-light; color:white; font-weight: 700; display:flex; justify-content:center; margin-top:20px;" for="">Rezerv edəcəyiniz tarixi seçin</label>
                        <input class="mt-5 form-control w-50 mx-auto" type="date">
                        <div class="room_reserv">
                            <label for="room_res">
                                <div class="room_design shadow">
                                    <div class="depozit">20 AZN depozit</div>
                                    <img src="https://images.pexels.com/photos/460537/pexels-photo-460537.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
                                    <div class="room_about">
                                        <h3>Real Madrid</h3>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="room_res">
                                </div>
                            </label>
                            <label for="room_res">
                                <div class="room_design shadow">
                                    <div class="depozit">20 AZN depozit</div>
                                    <img src="https://images.pexels.com/photos/1668860/pexels-photo-1668860.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                    <div class="room_about">
                                        <h3>Barcelona</h3>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="room_res">
                                </div>
                            </label>
                            <label for="room_res">
                                <div class="room_design shadow">
                                    <div class="depozit">20 AZN depozit</div>
                                    <img src="https://images.pexels.com/photos/1449775/pexels-photo-1449775.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                    <div class="room_about">
                                        <h3>Luxury Room</h3>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="room_res">
                                </div>
                            </label>
                            <label for="room_res">
                                <div class="room_design shadow">
                                    <div class="depozit">20 AZN depozit</div>
                                    <img src="https://images.pexels.com/photos/8031927/pexels-photo-8031927.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
                                    <div class="room_about">
                                        <h3>Chelsea</h3>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="room_res">
                                </div>
                            </label>
                            <label for="room_res">
                                <div class="room_design shadow">
                                    <div class="depozit">20 AZN depozit</div>
                                    <img src="https://images.pexels.com/photos/4128454/pexels-photo-4128454.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                    <div class="room_about">
                                        <h3>Night</h3>
                                    </div>
                                    <input class="rezerv_select" type="checkbox" id="room_res">
                                </div>
                            </label>
                            <div class="table-zoom3">
                                <img class="table-close3" src="images/cancel.png" alt="">
                                <img id="table-zoom-img3" src="" alt="">
                                <div class="images_small">
                                    <img src="https://images.pexels.com/photos/269262/pexels-photo-269262.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                    <img src="https://images.pexels.com/photos/6899439/pexels-photo-6899439.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                    <img src="https://images.pexels.com/photos/5018457/pexels-photo-5018457.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" alt="">
                                    <img src="https://images.pexels.com/photos/6899393/pexels-photo-6899393.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="rezerv-inputs">
                            <div class="name-input">
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Adınız</label>
                                </div>
                                <div class="form-floating mb-2">
                                    <input class="form-control" type="text" id="floatingInput" placeholder="Adınız">
                                    <label for="floatingInput">Soyadınız</label>
                                </div>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Nömrəniz">
                                <label for="floatingInput">Nömrəniz</label>
                            </div>
                            <div class="form-floating mb-2">
                                <input class="form-control" type="text" placeholder="Whatsapp Nömrəniz">
                                <label for="floatingInput">Whatsapp Nömrəniz <span style="color:red">*</span></label>
                            </div>
                            <div class="mb-2">
                                <label style="font-family: TT-light; color:white; font-weight: 700;" for="">Rezerv edəcəyiniz tarix</label>
                                <input class="form-control" type="time">
                            </div>
                            <button class="btn btn-outline-success text-white mt-2 col-lg-6 col-12">Göndər</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!--  View Comment  -->
<section class="view_comment">
    <h1>Restoran Qiymətləndirmə</h1>
    <img class="comment_close" src="images/cancel.png" alt="">
    <div class="container mb-5 py-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="card text-dark">
                    <div class="card-body p-4">
                        <div class="d-flex flex-start">
                            <img class="rounded-circle shadow-1-strong me-3" src="images/comment_user.png" alt="avatar" width="60" height="60" />
                            <div>
                                <h6 class="fw-bold mb-1">Shamil Babazadeh</h6>
                                <div class="d-flex align-items-center mb-3">
                                    <p class="mb-0">
                                        May 18, 2022
                                    </p>
                                </div>
                                <p class="mb-0">
                                    Əla Restorandır. Təamlarını bəyəndim
                                </p>
                            </div>
                        </div>
                    </div>

                    <hr class="my-0" />


                </div>
            </div>
        </div>
    </div>
</section>

<!-- Teklif -->
<section class="teklif-bg"></section>
<section class="teklif">
    <div class="teklif-name">
        <h1>Xüsusi təkliflər</h1>
        <img id="teklif-cancel" src="images/cancel.png" alt="">
    </div>
    <div class="teklif-cards">
        <div class="teklif-card">
            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <div class="teklif-text">
                <h3>Hamburger</h3>
                <p>Qiymət: 3.30 azn</p>
            </div>
        </div>
        <div class="teklif-card">
            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <div class="teklif-text">
                <h3>Hamburger</h3>
                <p>Qiymət: 3.30 azn</p>
            </div>
        </div>
        <div class="teklif-card">
            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <div class="teklif-text">
                <h3>Hamburger</h3>
                <p>Qiymət: 3.30 azn</p>
            </div>
        </div>
        <div class="teklif-card">
            <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
            <div class="teklif-text">
                <h3>Hamburger</h3>
                <p>Qiymət: 3.30 azn</p>
            </div>
        </div>
    </div>
</section>



<?php
include "footer.php"
?>