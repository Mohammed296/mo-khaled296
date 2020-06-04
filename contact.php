<?php
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $user = filter_var($_POST["username"], FILTER_SANITIZE_STRING);
        $mail = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        $subj = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
        $msg  = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
        $to   = "mohamedkh99ra@gmail.com";
        $headers = "form: " . $mail . '\r\n';

        $form_errors = array();

        if (strlen($user) <= 3) {
            $form_errors[] = "Name must be larger than 3 characters";
        }

        if (strlen($mail) < 1) {
            $form_errors[] = "Email Can't Be Empty";
        }

        if (strlen($subj) <= 5) {
            $form_errors[] = "Subject can't be less than 5 characters";
        }

        if (strlen($msg) <= 15) {
            $form_errors[] = "Message can't be less than 15 characters";
        }        

        if (empty($form_errors)) {

            mail($to, $subj, $msg, $headers);

            $username = "";
            $mail     = "";
            $subj     = "";
            $msg      = "";

            $successed = 
                    '<div class="alert alert-success alert-dismissible fade show " role="alert">
                      <strong>success!</strong>
                        Message Is Send.
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
        }

    }

?>
<!DOCTYPE html>
<html>
    <head>
        
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <meta name="description"content="welcome to my website Mohamed Khaled">
    <title>CONTACT ME</title>
        
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
        
    <link rel="stylesheet" href="CSS/bootstrap.css">
    <link rel="stylesheet" href="plugin/fontawesome/css/all.css">
    <!-- ///////////// -->
    <link rel="stylesheet" href="CSS/css.css">
    <link rel="stylesheet" href="CSS/head.css">
    <!-- if it IE 9 -->
    <script src="JS/html5shiv.min.js"> </script>
    <script src="JS/respond.min.js"> </script>
    </head>
        
    <body>
        
       <header class="shadow-sm">
           <article>
               <a href="index.php" class="text-center ">
                    <i class="fas fa-home"></i><span><b>HOME</b></span>
               </a>

               <a href="resume.php" class="text-center">
                    <i class="fas fa-address-book "></i><span><b>RESUME</b></span>
               </a>

               <a href="portfolio.php" class="text-center">
                    <i class="fas fa-rocket"></i><span><b>PORTFOLIO</b></span>
               </a>

               <a href="contact.php" class="text-center active">
                    <i class="fas fa-pen "></i><span><b>CONTACT ME</b></span>
               </a>
           </article>
       </header>
        <div class="container">
            <div class="row">
  
                <div class="col-lg-4 d-none d-lg-block">
                    <aside>
                        <div class='rounded' style="max-width: 100%; white-space: wrap">
                            <div class="m-title">
                                <i class="far fa-user-circle fa-lg" style="margin-right: 5px"></i>
                                <b>PERSONAL DETAILS</b>
                            </div>
                            <hr>
                            <div class="img-c" style="width: 100%;">
                            <img class="img-fluid" src="img/IMG201811061348481.jpg">
                            </div>
                            <table style="font-size: 16px">
                                <tr>
                                    <td>Name</td>
                                    <td style="color: #fff">...</td>
                                    <td>Mohamed Khaled</td>
                                </tr>
                                <tr>
                                    <td>Degree</td>
                                    <td style="color: #fff">...</td>
                                    <td>Bachelor</td>
                                </tr>
                                <tr>
                                    <td>Location</td>
                                    <td style="color: #fff">...</td>
                                    <td>Egypt, zagazig</td>
                                </tr>
                                <tr>
                                    <td>Nationality</td>
                                    <td style="color: #fff">...</td>
                                    <td>Egyptian</td>
                                </tr>
                                 <tr>
                                     <td>Gmail</td>
                                     <td style="color: #fff">...</td>
                                     <td>mohamedkh99ra@
                                         gmail.com</td>
                                </tr>
                                <tr>
                                    <td>Website</td>
                                    <td style="color: #fff">...</td>
                                    <td>mohamedkh.com</td>
                                </tr>

                            </table>
                            <br>
                            <hr>
                            <div class="m-title">
                                <b>Education</b><hr>
                                <span style="font-size: 16px;">Faculty of engineering mechanical dept.</span>
                            </div>
                            <br>
                            <hr>
                            <div class=" m-title">
                                <b>SOCIAL MEDIA</b><hr>
                            </div>
                            <div id="social-media" class=" m-title text-center">

                                <a href="https://www.linkedin.com/in/mohamed-khaled-342366162/" style="color: #4875b4" target="_blank">
                                    <i class="fab fa-linkedin fa-2x"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCWERbZenIRObqKdju15j-GA?view_as=subscriber" style="color: #f33" target="_blank">
                                    <i class="fab fa-youtube-square fa-2x" target="_blank"></i>
                                </a>
                                <a href="https://www.behance.net/mohamedkh9f3b8" style="color: #053efe" target="_blank">
                                    <i class="fab fa-behance-square fa-2x"></i>
                                </a>
                                <a href="https://vimeo.com/user102442651" style="color: #4ebbff" target="_blank">
                                    <i class="fab fa-vimeo fa-2x"></i>
                                </a>
                                <a href="" style="color: #3b5998" target="_blank">
                                    <i class="fab fa-facebook-square fa-2x"></i>
                                </a>
                                <a href="" style="color: #1baae1" target="_blank">
                                    <i class="fab fa-twitter-square fa-2x"></i>
                                </a>
                                <div><b>Mohamed Khaled</b></div>
                            </div>  
                            <hr>
  

                        </div>       
                    </aside>
                </div>
                <div class="col-lg-8 col-xs-12">
                    <div class='main'>
                        <div class='rounded'>
                            <div class="m-title ">
                                <i class="fas fa-edit fa-md" style="margin-right: 10px"></i><b>CONTACT ME</b><hr>
                            </div>
                            <div class="container  my-4">
                                <div class="row">
                                    <div class="my-3 col-lg-4 col-xs-12 text-center">
                                        <div class="sss" style="height: 80px;width: 80px">
                                            <i class="far fa-envelope fa-2x"></i>
                                        </div>
                                        <div class="my-2 h5" style="color: #3d4144">mohamedkh99ra@
                                            gmail.com</div>
                                    </div>
                                    
                                    <div class="my-3 col-lg-4 col-xs-12 text-center">
                                        <div class="sss" style="height: 80px;width: 80px">
                                            <i class="fas fa-map-marked-alt fa-2x"></i>
                                        </div>
                                        <div class="my-2 h5" style="color: #3d4144">EGYPT</div>
                                    </div> 
                                    
                                    <div class="my-3 col-lg-4 col-xs-12 text-center">
                                        <div class="sss" style="height: 80px;width: 80px">
                                            <i class="fab fa-linkedin-in fa-2x"></i>
                                        </div>
                                        <div class="my-2 h5" style="color: #3d4144">Mohamed Khaled</div>
                                    </div>                                     
                                    
                                </div>
                            </div>
                            <div class=" m-title">
                                <i class="fas fa-share-alt fa-md" style="margin-right: 10px"></i><b>SOCIAL MEDIA</b><hr>
                            </div>
                            <div id="social-media1" class=" m-title text-center">

                                <a href="https://www.linkedin.com/in/mohamed-khaled-342366162/" style="color: #4875b4" target="_blank">
                                    <i class="fab fa-linkedin fa-3x"></i>
                                </a>
                                <a href="https://www.youtube.com/channel/UCWERbZenIRObqKdju15j-GA?view_as=subscriber" style="color: #f33" target="_blank">
                                    <i class="fab fa-youtube-square fa-3x" target="_blank"></i>
                                </a>
                                <a href="https://www.behance.net/mohamedkh9f3b8" style="color: #053efe" target="_blank">
                                    <i class="fab fa-behance-square fa-3x"></i>
                                </a>
                                <a href="https://vimeo.com/user102442651" style="color: #4ebbff" target="_blank">
                                    <i class="fab fa-vimeo fa-3x"></i>
                                </a>
                                <a href="" style="color: #3b5998" target="_blank">
                                    <i class="fab fa-facebook-square fa-3x"></i>
                                </a>
                                <a href="" style="color: #1baae1" target="_blank">
                                    <i class="fab fa-twitter-square fa-3x"></i>
                                </a>
                                <div style="font-size: 25px"><b>Mohamed Khaled</b></div>
                            </div>  
                            <br>
                            <div class=" m-title">
                                <i class="fas fa-thumbtack fa-md" style="margin-right: 10px"></i><b>LOCATION</b><hr>
                            </div>
                            <iframe style="width: 100%" height="400" src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d54959.52807248404!2d31.522669807438977!3d30.578378046614823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d30.584737599999997!2d31.4972681!5e0!3m2!1sar!2seg!4v1590646335351!5m2!1sar!2seg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            <br><br><br>
                            <div class="m-title ">
                                <i class="fas fa-envelope-open-text fa-md" style="margin-right: 10px"></i><b>SAY HELLO</b><hr>
                            </div>
                            <br>
                            <section class="container">
                                
                                <?php if (isset($successed)) {echo $successed;} ?>
                                <?php if (! empty($form_errors)) {?>
                                            <div class="alert alert-warning alert-dismissible fade show " role="alert">
                                                <?php
                                                    echo '<strong>warning!</strong><br>';
                                                    foreach ($form_errors as $errors) {
                                                        echo $errors . ".". "<br>";
                                                    } ?>
                                        
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>           

                                <?php } ?>
                                
                                <form class="content-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method = "POST">
                                    <input type="text" placeholder="NAME" name="username" class="form-control username">
                                    
                                    <div class="alert alert-warning alert-dismissible fade show msg-conn" role="alert">
                                        
                                        Name Must Be Larger Than <b>3</b> Characters.
                                    </div>
                                    
                                    <input type="email" placeholder="EMAIL" name="email" class="form-control mail">
                                    
                                    <div class="alert alert-warning alert-dismissible fade show msg-conn" role="alert">
                                        
                                        Email Can't Be Empty.
                                    </div> 
                                    
                                    <input type="text" placeholder="SUBJECT" name="subject" class="form-control subject" autocomplete="off">

                                    <div class="alert alert-warning alert-dismissible fade show msg-conn" role="alert">
                                        
                                        Subject Can't Be Less Than <b>5</b> Characters.
                                    </div>
                                    
                                    <textarea placeholder="YOUR MESSAGE!" name="message" class="form-control message" style="min-height: 120px"></textarea>

                                    <div class="alert alert-warning alert-dismissible fade show msg-conn" role="alert">
                                        Message Can't Be Less Than <b>15</b> Characters.
                                    </div>
                                    
                                    <input type='submit' class="btn btn-success" value="SEND MESSAGE">
                                    <!--<button type="submit" class="btn btn-success">
                                        <i class="fas fa-paper-plane" style="margin-right: 5px"></i>
                                        SEND MESSAGE
                                    </button>-->
                                </form>
                            </section>
                        </div>             
                    </div>
                </div>                
            </div>
        </div>        
        
        
        <div id="scroll-up"><i class="fas fa-chevron-up fa-2x"></i></div>        
                
        <footer>
         Copyright &copy; 2020 Mohamed Khaled. All rights reserved.
        </footer>

        
        <script src="JS/jquery-3.4.1.min.js"> </script>
        <script src="JS/bootstrap.min.js"> </script>
        <script src="plugin/jquery.nicescroll-master/jquery.nicescroll.min.js"></script>
        
        <script src="JS/js.js"></script>                

    </body>
</html>