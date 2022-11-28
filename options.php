<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Renossan</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</head>

<body>
   
       
    <!-- Topbar End -->

 
    <?php include 'navBar.php' ; ?>


    <!-- Page Header Start -->
    <div class="page-header">
        <div class="layer">
            <h1 class="display-3 text-uppercase text-white mb-3">Nos options</h1>
            <div class="d-inline-flex text-white">
                <h6 class="text-uppercase m-0"><p class="text-white">Accueil</p></h6>
            </div>
        </div>
    </div>
    <!-- Page Header Start -->


    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <h1 class="display-4 text-uppercase text-center mb-5">Options</h1>
            <div class="row">
                    <!-- PHP CODE TO FETCH DATA FROM ROWS -->
                <?php
                // LOOP TILL END OF DATA
                    include 'dbCall.php';
                    while($rows=$res_options->fetch_assoc())
                        { ?>
                        <div class="col-lg-4 col-md-6 mb-2">
                            <div class="rent-item mb-4 article_align ">
                                <img class="img-fluid mb-4" style='height: 200px;' src="<?php echo $rows['image'];?>" alt="">
                                <h4 class="text-uppercase mb-4"><?php echo $rows['nomoption'];?></h4> 
                                <div class="d-flex justify-content-center mb-4">

                                    <div class="px-2 border-left border-right" style='height: 180px;'>
                                        <p><?php echo $rows['desc1'];?></p>
                                    </div>
                                </div>
                                <a class="btn btn-primary px-3 justify-content-center" href="<?php echo $rows['btnLink'];?>">plus</a>
                            </div>
                        </div>

                        <?php
                        }
                    
                ?>
            </div>
        </div>
    </div>    


    <!-- Rent A Car End -->
    <!-- ici on va appeler le footer ecrit dans la page footer.php, on va afficher ce qui est ecrit deja dedans -->
    <!-- echo htmlspecialchars($_SERVER['PHP_SELF']); == pour que la meme page s'affiche apres l'action post -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <?php include 'footer.php' ; ?>
    </form>

   
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
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
