<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ronossan</title>
    

    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="Style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
</head>

<body>
    <?php include 'navBar.php' ; ?>
   
    <div class="container-fluid pt-5">
        <div class="container pt-5 pb-3">
        <?php include 'dbCall.php';
            $rows=$res_op_gps->fetch_assoc()
                    ?>
            <h1 class="display-4 text-uppercase mb-5"><?php echo $rows['nomoption'];?></h1>
            <div class="row align-items-center pb-2">
                <div class="col-lg-6 mb-4">
                    <img class="img-fluid" src="<?php echo $rows['image'];?>" alt="<?php echo $rows['nomoption'];?>">
                </div>
                <div class="col-lg-6 mb-4">
                    <!-- <h2 class="mb-2">175 000 €</h2> -->
                    <p><?php echo $rows['desc1'];?></p>
                    <div class="d-flex pt-1">
                        <button class="btn btn-bg btn-primary">Reserver</button>
                    </div>
                </div>
            </div>


            <div class="row mt-n3 mt-lg-0 pb-4">
                <?php while($rows=$sql_op_gps_voit->fetch_assoc()) { ?> 
                    <div class="col-md-3 col-6 mb-2">
                        <i class="fa fa-car text-primary mr-2"></i>
                        <span><?php echo $rows['nommod'];?></span>
                    </div>
                    <?php
                    }
                ?>
            </div>
        </div>
    </div>
    
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