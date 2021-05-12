<?php 
session_start();
include('../config.php');
include('includes_G/header.php');

 

?>
<head>
<title>Dashboard</title> 
</head>

<?php

    $_SESSION['Cultural']='CULTURAL';
    $_SESSION['NSS']='NSS';
    $_SESSION['Sports']='SPORTS';
    $_SESSION['Others']='OTHERS';
    $_SESSION['Special']='SPECIAL EVENTS';

     
?>
  <!-- Banner -->
                <section class="main-banner">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="banner-content">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="banner-caption">
                                                <h4>Home Page of <em>Grace Mark Allocator</em></h4>
                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="services1">
                    <div class="container-fluid">
                        <div class="row1">
                            <div class="col-md-12">
                                <div class="banner-content">
                                    <div class="row1">
                                        <div class="col-md-12">
                                            <div class="banner-caption">
                                               
                                                <span>Choose options from the  left panel to view or update marks.</span>
                                                <p>For any queries or suggestions contact <strong></strong>.</p>
                                                <div class="primary-button">
                                                    <a href="#">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>

<?php
    include('includes_G/navbar.php');
    include('includes_G/scripts.php');
    include('includes_G/footer.php');
   ?>