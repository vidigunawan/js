    
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Halaman Login</title>
      
        <link rel="stylesheet" href="Assetes/CSS/bootstrap.css">
        <link rel="stylesheet" href="Assetes/CSS/floating-labels.css">
        <link rel="stylesheet" href="Assetes/CSS/style.css">
        
        <script type="text/javascript">

        function showModalKu(){
            var user="admin@gmail.com";
                var pass="admin"

                var username=document.getElementById('inEmail').value;
                var password=document.getElementById('inPass').value;

                if (username == "" && password == "") { 
                    $(document).ready(function(){
                    $('#ModalKu').modal('show')
                    });
                }
                else{
                    swal("Good job!", "You clicked the button!", "error"); 
                } 
            
        }
            
    </script>


    </head>
    <body>
        <form class="form-signin" action="halaman.php" method="post">

                    <?php
                        session_start();
                            if(isset($_SESSION['gagal'])){
                                if($_SESSION['gagal']>=3){ 
                                    ?>

                                    <div class="alert alert-danger"> Akun Anda di Blokir</div>
                                    <?php

                                }else{

                                    3-$_SESSION['gagal']; 
                                    ?>

                                     <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        Gagal Masuk Kesempatan Tinggal : <?php  echo 3-$_SESSION['gagal']; ?>

                                        <button type="button" class="close" data-dismiss="alert" aria-label="close">
                            
                                        </button>
                                    </div>

                                    <?php
                                }
                            }
                        
                    ?>
                    
                   
                    <div class="text-center mb-4">
                     
                        <h1 style="color: #742ECC">Login</h1>
                    </div>
                    <div class="form-label-group">
                        <input name="inEmail" class="form-control" type="Email" id="inEmail" placeholder="Email Address" autofocus="yes" autocomplete="no "required="yes">
                        <label for="inEmail">Email Address</label>
                    </div>
                    
                    <div class="form-label-group">
                        <input name="inPass" onkeyup="Hello()" class="form-control" type="password" id="inPass" placeholder="Email Address"required="yes">
                        <label for="inEmail">Password</label>
                    </div>

                    <div class="chechbox mb-3">
                        <input type="checkbox"> Remember me ?
                    </div>

                    <button onclick="showModalKu()" type="submit" class="btn btn-lg btn-outline-danger btn-block">Sign in</button>


                    <button type="button" class="btn btn-success btn-block" data-toggle="modal" data-target="#ModalKu">Show Modal</button>
                    
                    <button onclick="showModalKu()" type="button" class="btn btn-secondary btn-block" >Show Modal By Java Script</button>
                        
                   



                    <div class="modal fade" id="ModalKu" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hiden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="ModalLabel01">
                                        Selamat Anda Berhasil Login
                                    </h5>

                                    <button class="close" type="button" data-dismiss="modal" aria-label="close">
                                        <span aria-hiden="true">&times;</span>
                                    </button>

                                </div>

                                <div class="modal-body">
                                        
                                        <p>disini isi dari modalnya </p>

                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tutup</button>
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>


                    <script src="Assetes/JS/jquery.min.js"></script>
                    <script src="Assetes/JS/bootstrap.min.js"></script>
                    <script src="Assetes/JS/popper.min.js"></script>
                    
        </form>
    </body>
</html>


