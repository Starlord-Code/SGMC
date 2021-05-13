

                  

             <!-- Sidebar -->
        <div id="sidebar">

            <div class="inner">

                <!-- Search Box -->
                <section id="search" class="alt">
                    <form method="get" action="#">
                        <input type="text" name="search" id="search" placeholder="Search..." />
                    </form>
                </section>

                <!-- Menu -->
                <nav id="menu">
                    <ul>
                         <li><a href="#">Publish</a></li>
                         <li>
                            <span class="opener">Profile</span>
                            <ul>
                                <li><a href="#">Edit Profile</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li><a href="./EC_Pwd.php">Change Password</a></li>
                                <li>
                                    <a href="#"></a>
                                </li>
                                <li><a href="#">Settings</a></li>
                            </ul>
                        </li>
                        <li><a href="https://intranet.cb.amrita.edu">About Intranet</a></li>
                        <li><a href="https://aumscb.amrita.edu/cas/login?service=https%3A%2F%2Faumscb.amrita.edu%2Faums%2FJsp%2FCore_Common%2Findex.jsp">AUMS Login</a></li>
                        <li><a href="https://cms.cb.amrita.edu/login">CMS</a></li>
                        <button type="submit" data-toggle="modal" data-target="#logoutModal" />
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout</button>
                    </ul>
                </nav>

                <!-- Featured Posts -->
                <div class="featured-posts">
                    <div class="heading">
                        <h2>Events</h2>
                    </div>
                    <div class="owl-carousel owl-theme">
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/anokha-2020-4.jpg" alt="featured one">
                                <p>Sing your thoughts in this Anokha Singing event.</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/anokha-live.jpg" alt="featured two">
                                <p>We are Coming live!!</p>
                            </div>
                        </a>
                        <a href="#">
                            <div class="featured-item">
                                <img src="assets/images/anokha-2017-techfest.jpg" alt="featured three">
                                <p>It is Techfest!</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Footer -->
                <footer id="footer ">
                    <p class="copyright">Copyright &copy; 15CSE313 CSE-B Group-8
                        <br>Designed by <a rel="nofollow" href="https://www.facebook.com/templatemo">Karan and Harsha</a></p>
                </footer>

                 <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form action="logout_EC.php" method="POST"> 
                       <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

            </div>
        </div>