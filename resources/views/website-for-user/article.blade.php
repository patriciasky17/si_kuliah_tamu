<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pradita University's Guest Lecturers</title>

    <!-- CSS -->
    <link rel="stylesheet" href="./assets/css/style-navbar.css">
    <link rel="stylesheet" href="./assets/css/style-article.css">
    <link rel="stylesheet" href="./assets/css/style-footer.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Bagian Navbar -->
    <nav>
        <div id="navigation-bar">
            <div class="container-fluid">
                <div class="row">
                    <!-- Logo Pradita -->
                    <div class="col-3 logo">
                        <img class="logo-pradita" src="./assets/img/logo-pradita.png">
                    </div>

                    <!-- Navigation -->
                    <div class="col-6 in-slider">
                        <ul id="navbar-center">
                            <li class="main-navbar"><a href="index.html">ABOUT</a></li>
                            <li class="main-navbar"><a href="article.html">ARTICLE</a></li>
                            <li class="main-navbar"><a href="documentation.html">DOCUMENTATION</a></li>
                            <li class="main-navbar"><a href="event.html">EVENT</a></li>
                        </ul>
                    </div>

                    <!-- DESKTOP : Guest/User Dropdown + Username, MOBILE: Hamburger Icon + Slider -->
                    <div class="col-3 guest in-slider">
                        <div class="dropdown">
                            <button class="btn btn-sm dropdown-toggle profile-navbar" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- Guest Icon --> 
                                <svg class ="guest-icon" width="35" height="38" viewBox="0 0 53 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M26.4999 12.087C24.6281 12.087 22.7983 12.6778 21.2419 13.7846C19.6855 14.8913 18.4724 16.4645 17.7561 18.305C17.0397 20.1455 16.8523 22.1707 17.2175 24.1246C17.5827 26.0785 18.4841 27.8733 19.8077 29.2819C21.1313 30.6906 22.8177 31.6499 24.6536 32.0386C26.4894 32.4272 28.3924 32.2277 30.1218 31.4654C31.8511 30.703 33.3293 29.412 34.3692 27.7556C35.4092 26.0991 35.9642 24.1517 35.9642 22.1596C35.9642 19.4882 34.9671 16.9262 33.1922 15.0372C31.4173 13.1482 29.01 12.087 26.4999 12.087ZM26.4999 28.2031C25.3768 28.2031 24.2789 27.8486 23.3451 27.1846C22.4113 26.5205 21.6834 25.5766 21.2536 24.4723C20.8238 23.368 20.7114 22.1529 20.9305 20.9805C21.1496 19.8082 21.6904 18.7314 22.4846 17.8862C23.2787 17.041 24.2906 16.4654 25.3921 16.2322C26.4936 15.999 27.6354 16.1187 28.673 16.5761C29.7107 17.0335 30.5975 17.8081 31.2215 18.802C31.8455 19.7958 32.1785 20.9643 32.1785 22.1596C32.177 23.7619 31.5783 25.2982 30.5136 26.4312C29.449 27.5642 28.0055 28.2015 26.4999 28.2031Z" fill="url(#paint0_linear_411_40)"/>
                                    <path d="M26.5 0C21.2588 0 16.1353 1.65408 11.7774 4.75308C7.4195 7.85207 4.02293 12.2568 2.0172 17.4102C0.011482 22.5637 -0.513306 28.2344 0.509202 33.7052C1.53171 39.1761 4.05559 44.2014 7.76168 48.1457C11.4678 52.0899 16.1896 54.776 21.3301 55.8642C26.4706 56.9524 31.7989 56.3939 36.6411 54.2593C41.4834 52.1247 45.6221 48.5098 48.5339 43.8719C51.4458 39.2339 53 33.7811 53 28.2031C52.992 20.7258 50.1975 13.5572 45.2295 8.26991C40.2615 2.98266 33.5258 0.00853087 26.5 0ZM15.1429 49.1076V46.3336C15.1444 44.7313 15.7431 43.195 16.8077 42.062C17.8724 40.9289 19.3158 40.2917 20.8214 40.2901H32.1786C33.6842 40.2917 35.1277 40.9289 36.1923 42.062C37.2569 43.195 37.8556 44.7313 37.8571 46.3336V49.1076C34.4106 51.2494 30.4911 52.3781 26.5 52.3781C22.5089 52.3781 18.5894 51.2494 15.1429 49.1076ZM41.6277 46.1845C41.59 43.5422 40.5784 41.0213 38.811 39.1652C37.0435 37.309 34.6617 36.2661 32.1786 36.2611H20.8214C18.3384 36.2661 15.9565 37.309 14.189 39.1652C12.4216 41.0213 11.41 43.5422 11.3723 46.1845C7.93972 42.9226 5.51907 38.6279 4.43088 33.8692C3.34268 29.1105 3.63827 24.1123 5.2785 19.5364C6.91874 14.9605 9.82625 11.0227 13.616 8.2445C17.4058 5.46629 21.8991 3.9787 26.501 3.9787C31.1028 3.9787 35.5961 5.46629 39.3859 8.2445C43.1757 11.0227 46.0832 14.9605 47.7234 19.5364C49.3636 24.1123 49.6592 29.1105 48.571 33.8692C47.4828 38.6279 45.0622 42.9226 41.6296 46.1845H41.6277Z" fill="url(#paint1_linear_411_40)"/>
                                    <defs>
                                    <linearGradient id="paint0_linear_411_40" x1="26.4999" y1="12.087" x2="26.4999" y2="32.2321" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F26E21"/>
                                    <stop offset="1" stop-color="#F9A121"/>
                                    </linearGradient>
                                    <linearGradient id="paint1_linear_411_40" x1="26.5" y1="0" x2="26.5" y2="56.4062" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#F26E21"/>
                                    <stop offset="1" stop-color="#F9A121"/>
                                    </linearGradient>
                                    </defs>
                                </svg>
                                <span class="username">&emsp; PROFILE</span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li>
                                    <a class="dropdown-item disabled" href="#" style="color:black; font-weight: 500">
                                        Username : patricia.sky17
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item disabled" href="#" style="color:black; font-weight: 500">
                                        Role : User
                                    </a>
                                </li>
                                <li><a class="dropdown-item logout" href="login.html">LOG OUT</a></li>
                            </ul>
                        </div>

                        <div class="menu-toggle">
                            <input type ="checkbox"/>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Article starts here -->
    <div class="container">
        <div class="top-article">
            <h1 class="article-section">ARTICLE</h1>
            <div class="search-area">
                <form class="search-article">               
                    <div class="input-group">
                        <input type="search" class="form-control rounded" placeholder="Search for article.." aria-label="Search" aria-describedby="search-addon" style="width:250px;">
                        <button type="button" class="btn btn-outline-warning">Search</button>
                    </div>     
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 article-content">
                <a href="article-inside.html" class="article-spesific">
                    <div class="container">
                        <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                        <div class="article-detail">
                            <p class = "tanggal">July, 19 2019</p>
                            <p class = "judul">JUDUL ARTIKEL</p>
                            <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                        </div>
                    </div>
                </a>
            </div>
        
            <div class="col-12 article-content">
                <a href="#" class="article-spesific">
                    <div class="container">
                        <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                        <div class="article-detail">
                            <p class = "tanggal">July, 19 2019</p>
                            <p class = "judul">JUDUL ARTIKEL</p>
                            <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 article-content">
                <a href="#" class="article-spesific">
                    <div class="container">
                        <img src = "https://file.maukuliah.id/img/gallery/031067/maukuliah-1635218473.jpg" alt="foto" class="article-photo">
                        <div class="article-detail">
                            <p class = "tanggal">July, 19 2019</p>
                            <p class = "judul">JUDUL ARTIKEL</p>
                            <p class = "isi">Universitas Pradita turut serta dalam memajukan bangsa dalam bidang pendidikan dengan mengadakan event kuliah tamu dari berbagai mitra di seluruh penjuru dunia. Dengan adanya event-event ini Universitas</p>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-sm-12">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="dokumentasi1.html">1</a></li>
                    <li class="page-item"><a class="page-link" href="dokumentasi1.html">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Article ends here -->

    <!-- Footer Starts Here -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 copyright-detail">
                    <p class="copyright">Copyright 2021. Pradita University. All right reserved.</p>
                </div>

                <div class="col-6 col-sm-3 contact-us">
                    <div class="detail-contact-us">
                        <p class="contact"><b>CONTACT US</b></p> 
                        <p class="number">
                            021 5568 9999 <br>
                            0815 8510 9999 <br>
                            info@pradita.ac.id <br>
                        </p>
                    </div>
                    
                </div>
                
                <div class="col-6 col-sm-3 follow-us">
                    <div class="detail-follow-us">
                        <p class="follow"><b>FOLLOW US</b></p>
                        <div class="icon">
                            <a href = "https://www.instagram.com/pradita.info/"><i class="bi bi-instagram"></i></a>
                            <a href = "https://www.pradita.ac.id/"><i class="bi bi-globe"></i></a>
                            <a href = "https://api.whatsapp.com/send/?phone=6281513009999&text=Halo%21+Boleh+tanya+lebih+lanjut+mengenai+Pradita+University%3F+%3A%29&app_absent=0""><i class="bi bi-whatsapp"></i></a>
                            <a href = "https://www.youtube.com/channel/UCv7zg03kZknNhCKJEBCbctA""><i class="bi bi-youtube"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <!--Bootstrap JS Bundle + Separate-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src ="./assets/js/script.js"></script>

</body>
</html>