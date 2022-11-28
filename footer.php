<div class="container-fluid bg-dark py-4 px-sm-3 px-md-5">
    <div class="grid-container">
        <div class="grid-item">
            <p class="mb-2 text-center text-body"><a class="footer_title">RENOSSAN</a></p>
            <p><a class=" pr-3" style="text-decoration: none; color: white;"><i class="fa fa-phone-alt mr-2"></i> +331 3445 6789 </a></p>
            <p><a class=" px-3" style="text-decoration: none; color: white;"><i class="fa fa-envelope mr-2"></i> sales@renossan.com </a></p>
            <div class="footer_align">
                <p>
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.free-css.com/free-css-templates"><i class="fab fa-twitter"></i></a> 
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.free-css.com/free-css-templates"><i class="fab fa-facebook-f"></i></a> 
                    <a class="btn btn-lg btn-dark btn-lg-square mr-2" href="https://www.free-css.com/free-css-templates"><i class="fab fa-linkedin-in"></i></a> 
                    <a class="btn btn-lg btn-dark btn-lg-square" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </p>
               
            </div>
        </div>

        <div class="grid-item">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19267.05505932411!2d4.088162465006946!3d44.123284098770895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b44260c41abfef%3A0x6c9873604279ccbd!2sIMT%20Mines%20Al%C3%A8s!5e0!3m2!1sen!2stn!4v1669391111823!5m2!1sen!2stn" 
            width="auto" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="grid-item">
            <h4 class="text-uppercase text-light mb-4">Newsletter</h4>
            <p class="mb-4 text-light">Abonnez-Vous À Notre Newsletter !</p>
            <div class="w-100 mb-3">
                <div class="input-group">
                    <input type="email" class="form-control border-dark" style="padding:5px;"  required="" 
                    placeholder="Votre Email" name="email"  id="email">
                    <div class="input-group-append">
                        <button class="btn btn-primary text-uppercase px-3"  type="submit">S'inscrire</button>

                        <?php

                            $mysqli = new mysqli('localhost', 'root', '', 'renossan');

                            // Checking for connections
                            if ($mysqli->connect_error) {
                                die('Connect Error (' .$mysqli->connect_errno . ') '.$mysqli->connect_error);
                            }

                            $email =  '';

                            if ( !empty($_REQUEST['email'])) { $email =$_REQUEST['email']; };

                            if (($email != '')) { 
                                $sql_newsletter = "INSERT INTO newsletter (email) VALUES ('$email')";

                                if(mysqli_query($mysqli, $sql_newsletter)){
                                    echo "<br><br><p style='color: red;'>Merci pour votre interet. Votre message a ete bien delivre.</p>";
                                                                                    
                                } else{
                                    echo "<br><br><p style='color: red;'>ERROR: Hush! Desole! .</p> $sql_newsletter."
                                        . mysqli_error($mysqli);
                                }

                            };

                            $mysqli->close();
                        ?>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>

