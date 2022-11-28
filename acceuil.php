<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Acceuil</title>
   <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

     <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="Style.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="Style_acceuil.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>


<body>
    
   <?php include 'navBar.php' ; ?>

    <!-- Topbar End -->



    <div class="container-fluid p-0" style="margin-bottom: 90px;">      
        <div id="carouselExampleInterval"  class="carousel slide" data-bs-ride="carousel">
            <div  class="carousel-inner" style="height: 700px;" >
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="images/mustang.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h1 class="display-1 text-white mb-md-4">Meilleures voitures dans votre région</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Réserver maintenant</a>
                    </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="images/ferrari.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        
                        <h1 class="display-1 text-white mb-md-4">Meilleures voitures dans votre région</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Réserver maintenant</a>
                    </div>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="3000">
                <img src="images/porsh.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        
                        <h1 class="display-1 text-white mb-md-4">Meilleures voitures dans votre région</h1>
                        <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Réserver maintenant</a>
                    </div>
                </div>
              </div>
              
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>   

    </div>


        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <h1 class="display-4 text-uppercase text-center mb-5">BIENVENUE<span class="text-primary"> À RONOSSAN</span></h1>
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <img class="w-75 mb-4" src="img/about.png" alt="">
                        <p>Bienvenue sur Renossan. Vous y trouverez chaque jour plus de 1,4 million de véhicules en provenance de toute l’Europe et 30 000 de France. Voitures neuves et d’occasion, petites cylindrées, voitures de collection, limousines de luxe ou bonnes affaires : quel que soit le type de véhicule recherché, vous le trouverez sur Renossan.fr.</p>

                        <p>Renossan.fr fait partie de mobile.de, le plus grand portail automobile allemand qui facilite l’achat d’un véhicule. Par une simple recherche et en quelques clics, vous pourrez obtenir un aperçu de l’ensemble du marché automobile. Vous pourrez facilement comparer et prendre une décision, mais aussi contacter des vendeurs de voitures neuves et d’occasion, gratuitement, aisément et sans soucis.</p>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-headset text-light"></i>
                            </div>
                            <h4 class="text-uppercase m-0">ASSISTANCE DE LOCATION DE VOITURE 24/7</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-car text-light"></i>
                            </div>
                            <h4 class="text-uppercase m-0">RÉSERVATION DE VOITURE À TOUT MOMENT</h4>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                            <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                <i class="fa fa-2x fa-map-marker-alt text-light"></i>
                            </div>
                            <h4 class="text-uppercase m-0">BEAUCOUP DE LIEUX DE RAMASSAGE</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
            
                <h1 class="display-4 text-uppercase text-center mb-5">Nos Services</h1>
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFF" class="bi bi-paint-bucket" viewBox="0 0 16 16">
                                        <path d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z"/>
                                    </svg>
                                </div>
                                <h1 class="display-2 text-primary mt-n2 m-0">01</h1>
                            </div>
                            <h4 class="text-uppercase mb-3">Peintures métallisés</h4>
                            <p class="m-0">les peintures métallisées sont omniprésentes parmi les types de peinture carrosserie modernes</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFF" class="bi bi-geo-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M4 4a4 4 0 1 1 4.5 3.969V13.5a.5.5 0 0 1-1 0V7.97A4 4 0 0 1 4 3.999zm2.493 8.574a.5.5 0 0 1-.411.575c-.712.118-1.28.295-1.655.493a1.319 1.319 0 0 0-.37.265.301.301 0 0 0-.057.09V14l.002.008a.147.147 0 0 0 .016.033.617.617 0 0 0 .145.15c.165.13.435.27.813.395.751.25 1.82.414 3.024.414s2.273-.163 3.024-.414c.378-.126.648-.265.813-.395a.619.619 0 0 0 .146-.15.148.148 0 0 0 .015-.033L12 14v-.004a.301.301 0 0 0-.057-.09 1.318 1.318 0 0 0-.37-.264c-.376-.198-.943-.375-1.655-.493a.5.5 0 1 1 .164-.986c.77.127 1.452.328 1.957.594C12.5 13 13 13.4 13 14c0 .426-.26.752-.544.977-.29.228-.68.413-1.116.558-.878.293-2.059.465-3.34.465-1.281 0-2.462-.172-3.34-.465-.436-.145-.826-.33-1.116-.558C3.26 14.752 3 14.426 3 14c0-.599.5-1 .961-1.243.505-.266 1.187-.467 1.957-.594a.5.5 0 0 1 .575.411z"/>
                                    </svg>
                                </div>
                                <h1 class="display-2 text-primary mt-n2 m-0">02</h1>
                            </div>
                            <h4 class="text-uppercase mb-3">GPS</h4>
                            <p class="m-0">Un dispositif embarqué de navigation automobile. Il utilise généralement un appareil de navigation par satellite pour obtenir ses données de position</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-2">
                        <div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
                            <div class="d-flex align-items-center justify-content-between mb-3">
                                <div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="#FFFF" class="bi bi-car-front-fill" viewBox="0 0 16 16">
                                        <path d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679c.033.161.049.325.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.807.807 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2Zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2H6ZM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17 1.247 0 3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z"/>
                                      </svg>
                                </div>
                                <h1 class="display-2 text-primary mt-n2 m-0">03</h1>
                            </div>
                            <h4 class="text-uppercase mb-3">Toit ouvrant</h4>
                            <p class="m-0">Nous posons des toits ouvrants électriques adaptable sur tout type de voiture</p>
                        </div>
                    </div>  
                </div>
            </div>
        </div>

     <!-- Rent A Car End -->
        <!-- Footer -->

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <?php include 'footer.php'; ?>
    </form>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="jquery.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>



    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="main.js"></script>

</body>

</html>