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

    <!-- ici on va appeler le Nav Bar ecrit dans la page navBar.php, 
    on va afficher ce qui est ecrit deja dedans -->

    <?php include 'navBar.php' ; ?>

    <div class="page-header">
        <div class="layer">
            <h1 class="display-3 text-uppercase text-white mb-3">Contactez Nous</h1>
        </div>
    </div>


    <div class="container pt-5 pb-3">
        <div class="row">
        <div class="col-lg-7 mb-2">
            <div class="contact-form bg-light mb-4" style="padding:30px;">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="row">
                        <div class="col-6 form-group">
                            <input type="text" class="form-control p-4" placeholder="Nom / Prenom" required=""  name="name" id="name">
                        </div>
                        <div class="col-6 form-group">
                            <input type="email" class="form-control p-4" placeholder="Email" required="" name="email" id="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control p-4" placeholder="Objet" required="" name="objet" id="objet">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control py-3 px-4" rows="5" placeholder="Message" required="" name="msg" id="msg"></textarea>
                    </div>
                    <div>
                        <button class="btn btn-primary py-3 px-5" type="submit">Envoyer</button>

                        <?php

                        $mysqli = new mysqli('localhost', 'root', '', 'renossan');
                        
                        // Checking for connections
                        if ($mysqli->connect_error) {
                            die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                        }
                        
                        $name = '' ;
                        $email =  '';
                        $objet = '';
                        $msg = '';
                    
                        if (!empty($_REQUEST['name'])) { $name =$_REQUEST['name']; };
                        if ( !empty($_REQUEST['email'])) { $email =$_REQUEST['email']; };
                        if ( !empty($_REQUEST['objet'])) { $objet =$_REQUEST['objet']; };
                        if ( !empty($_REQUEST['msg'])) { $msg =$_REQUEST['msg']; };
                    
                        // Performing insert query execution
                        // here our table name is college
                    
                        if ( ($name != '') and ($email != '') and ($objet!= '') and ($msg!= '')) { 
                            $sql_contact_inst = "INSERT INTO contact (nom, email, objet ,message)
                            VALUES ('$name', '$email', '$objet','$msg')";
                    
                            if(mysqli_query($mysqli, $sql_contact_inst)){
                                echo "<br><br><p style='color: red;'>Merci pour votre attentions. Votre message a ete bien delivre.</p>";
                                                                                
                            } else{
                                echo "<br><br><p style='color: red;'>ERROR: Hush! Desole! .</p> $sql_contact_inst."
                                    . mysqli_error($mysqli);
                            }
                    
                         };
                        
                         $mysqli->close();
                        
                        
                        ?>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-4 mb-2">
            <div class="bg-secondary d-flex flex-column justify-content-center px-5 mb-4" style="height:420px;">
                <div class="d-flex mb-3"><i class="fa fa-2x fa-map-marker-alt text-primary flex-shrink-0 mr-3"></i>
                    <div class="mt-n1">
                    <h5 class="text-light">Renossan</h5>
                    <p>123 Av, Paris, France</p>
                    </div>
                </div>
                <div class="d-flex mb-3"><i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                    <div class="mt-n1">
                    <h5 class="text-light">Mobile</h5>
                    <p>+331 3445 6789</p>
                    </div>
                </div>
                <div class="d-flex"><i class="fa fa-2x fa-envelope-open text-primary flex-shrink-0 mr-3"></i>
                    <div class="mt-n1">
                    <h5 class="text-light">Email</h5>
                    <p class="m-0">sales@renossan.com</p>
                    </div>
                </div>
            </div>
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