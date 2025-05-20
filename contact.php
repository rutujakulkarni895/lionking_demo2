<?php
    include ('header.php');
    include ('admin/include/connect.php');
?>

<?php 
    
    
    if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email =  $_POST['email'];
    $number = $_POST['number'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact`(`name`, `email`, `number`, `subject`, `message`) VALUES ('$name','$email','$number','$subject','$message')";
    $res = mysqli_query($db, $sql);
   
}
?>
        <!-- header-area-end -->


        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg05.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content">
                                <h2>Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- contact section start -->
            
            
    <section></section>
    <section class="contact-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info"><a href="https://goo.gl/maps/bd4rnZv4VuzpJUHL7"><i class="fas fa-map-marker-alt"></i></a>
                        <h3>Find us</h3>
                        <a href="https://goo.gl/maps/bd4rnZv4VuzpJUHL7"><p>Ram Krishna Society Gate no. 409, Alandi, Pune , Maharashtra - 412105</p></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info"><a href="tel:+91 8839870020"><i class="fas fa-phone-alt"></i></a>
                        <h3>Make a Call</h3>
                        <p> <a href="tel:+91 8839870020">+91 8839870020</a><br>
                        <a href="tel:+91 9630342976">+91 9630342976</a>
                            <span></span></p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-info">
                        <a href="mailto:info@eoimpex.com"><i class="fas fa-envelope"></i></a>
                        <h3>Send Mail</h3>
                        <p>  <a href="mailto:info@eoimpex.com">info@eoimpex.com </a><br>
                        <br></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d944.9352878317851!2d73.90445296944145!3d18.67560809890302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c9cbdee43289%3A0x56da8601962a7238!2sRam%20Krishna%20Medical!5e0!3m2!1sen!2sin!4v1689163894259!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <form class="contact-form" action="" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 style="color: white;">Send Us Your Requirement</h3><br>
                                <div class="form-group"><input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="email" class="form-control" name="email"
                                        placeholder="Your Email"></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group"><input type="phone" class="form-control" name="number"
                                        placeholder="Your Phone No."></div>
                            </div>
                            <div class="col-lg-12">
                         <div class="form-group">
                            <select class="form-control" id="" name="product">
                                 <option value="us"> Select Product</option>
                                <option value="us"> Spices</option>
                                <option value="ca"> Jaggery</option>
                                <option value="gb"> Coconut</option>
                                <option value="gb"> Others</option>
                            </select>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-12">
                           <div class="form-group">
                            <select class="form-control" id="email" name="country">
                                <option value="us"> Select Country</option>
                              <option value="us"> United States</option>
                              <option value="us"> India</option>
                              <option value="ca"> Canada</option>
                              <option value="gb"> United Kingdom</option>
                              <option value="fr"> France</option>
                              <option value="fr"> China</option>
                              <option value="fr"> Indonesia</option>
                              <option value="fr"> Pakistan</option>
                              <option value="fr"> Nigeria</option>
                              <option value="fr"> Brazil</option>
                              <option value="fr"> Bangladesh</option>
                              <option value="fr"> Russia</option>
                              <option value="fr"> Mexico</option>
                              <option value="fr"> Ethiopia</option>
                              <option value="fr"> Japan</option>
                              <option value="fr"> Philippines</option>
                              <option value="fr"> Egypt</option>
                              <option value="fr"> DR Congo</option>
                              <option value="fr"> Vietnam</option>
                              <option value="fr"> Iran</option>
                              <option value="fr"> Turkey</option>
                              <option value="fr"> Germany</option>
                              <option value="fr"> Thailand</option>
                              <option value="fr"> Tanzania</option>
                              <option value="fr"> South Africa</option>
                              <option value="fr"> Italy</option>
                              <option value="fr"> Kenya</option>
                              <option value="fr"> Myanmar</option>
                              <option value="fr"> Colombia</option>
                              <option value="fr"> South Korea</option>
                              <option value="fr"> Uganda</option>
                              <option value="fr"> Sudan</option>
                              <option value="fr"> Spain</option>
                              <option value="fr"> Argentina</option>
                              <option value="fr"> Algeria</option>
                              <option value="fr"> Iraq</option>
                              <option value="fr"> Afghanistan</option>
                              <option value="fr"> Poland</option>
                              <option value="fr"> Canada</option>
                              <option value="fr"> Morocco</option>
                              <option value="fr"> Saudi Arabia</option>
                              <option value="fr"> Ukraine</option>
                              <option value="fr"> Angola</option>
                              <option value="fr"> Uzbekistan</option>
                              <option value="fr"> Yemen</option>
                              <option value="fr"> Peru</option>
                              <option value="fr"> Malaysia</option>
                              <option value="fr"> Ghana</option>
                              <option value="fr"> Mozambique</option>
                              <option value="fr"> Nepal</option>
                              <option value="fr"> Madagascar</option>
                              <option value="fr"> Côte d'Ivoire</option>
                              <option value="fr"> Venezuela</option>
                              <option value="fr"> Cameroon</option>
                              <option value="fr"> Niger</option>
                              <option value="fr"> North Korea</option>
                              <option value="fr"> Australia</option>
                              <option value="fr"> Burkina Faso</option>
                              <option value="fr"> Syria</option>
                              <option value="fr"> Sri Lanka</option>
                              <option value="fr"> Malawi</option>
                              <option value="fr"> Zambia</option>
                              <option value="fr"> Romania</option>
                              <option value="fr"> Chile</option>
                              <option value="fr"> Kazakhstan</option>
                              <option value="fr"> Chad</option>
                              <option value="fr"> Ecuador</option>
                              <option value="fr"> Somalia</option>
                              <option value="fr"> Guatemala</option>
                              <option value="fr"> Senegal</option>
                              <option value="fr"> Netherlands</option>
                              <option value="fr"> Cambodia</option>
                              <option value="fr"> Zimbabwe</option>
                              <option value="fr"> Guinea</option>
                              <option value="fr"> Rwanda</option>
                              <option value="fr"> Benin</option>
                              <option value="fr"> Burundi</option>
                              <option value="fr"> Tunisia</option>
                              <option value="fr"> Bolivia</option>
                              <option value="fr"> Haiti</option>
                              <option value="fr"> Belgium</option>
                              <option value="fr"> Jordan</option>
                              <option value="fr"> Dominican Republic</option>
                              <option value="fr"> Cuba</option>
                              <option value="fr"> South Sudan</option>
                              <option value="fr"> Sweden</option>
                              <option value="fr"> Honduras</option>
                              <option value="fr"> Czech Republic (Czechia)</option>
                              <option value="fr"> Azerbaijan</option>
                              <option value="fr"> Greece</option>
                              <option value="fr"> Papua New Guinea</option>
                              <option value="fr"> Portugal</option>
                              <option value="fr"> Hungary</option>
                              <option value="fr"> Tajikistan</option>
                              <option value="fr"> Belarus</option>
                              <option value="fr"> United Arab Emirates</option>
                              <option value="fr"> Israel</option>
                              <option value="fr"> Togo</option>
                              <option value="fr"> Austria</option>
                              <option value="fr"> Switzerland</option>
                              <option value="fr"> Sierra Leone</option>
                              <option value="fr"> Laos</option>
                              <option value="fr"> Serbia</option>
                              <option value="fr"> Nicaragua</option>
                              <option value="fr"> Libya</option>
                              <option value="fr"> Paraguay</option>
                              <option value="fr"> Kyrgyzstan</option>
                              <option value="fr"> Bulgaria</option>
                              <option value="fr"> Turkmenistan</option>
                              <option value="fr"> El Salvador</option>
                              <option value="fr"> Congo</option>
                              <option value="fr"> Singapore</option>
                              <option value="fr"> Denmark</option>
                              <option value="fr"> Slovakia</option>
                              <option value="fr"> Central African Republic</option>
                              <option value="fr"> Finland</option>
                              <option value="fr"> Norway</option>
                              <option value="fr"> Liberia</option>
                              <option value="fr"> State of Palestine</option>
                              <option value="fr"> Lebanon</option>
                              <option value="fr"> New Zealand</option>
                              <option value="fr"> Costa Rica</option>
                              <option value="fr"> Ireland</option>
                              <option value="fr"> Mauritania</option>
                              <option value="fr"> Oman</option>
                              <option value="fr"> Panama</option>
                              <option value="fr"> Kuwait</option>
                              <option value="fr"> Croatia</option>
                              <option value="fr"> Eritrea</option>
                              <option value="fr"> Georgia</option>
                              <option value="fr"> Mongolia</option>
                              <option value="fr"> Moldova</option>
                              <option value="fr"> Uruguay</option>
                              <option value="fr"> Bosnia and Herzegovina</option>
                              <option value="fr"> Albania</option>
                              <option value="fr"> Jamaica</option>
                              <option value="fr"> Armenia</option>
                              <option value="fr"> Gambia</option>
                              <option value="fr"> Lithuania</option>
                              <option value="fr"> Qatar</option>
                              <option value="fr"> Botswana</option>
                              <option value="fr"> Namibia</option>
                              <option value="fr"> Gabon</option>
                              <option value="fr"> Lesotho</option>
                              <option value="fr"> Guinea-Bissau</option>
                              <option value="fr"> Slovenia</option>
                              <option value="fr"> North Macedoniav</option>
                              <option value="fr"> Latvia</option>
                              <option value="fr"> Equatorial Guinea</option>
                              <option value="fr"> Trinidad and Tobago</option>
                              <option value="fr"> Bahrain</option>
                              <option value="fr"> Timor-Leste</option>
                              <option value="fr"> Estonia</option>
                              <option value="fr"> Mauritius</option>
                              <option value="fr"> Cyprus</option>
                              <option value="fr"> Eswatini</option>
                              <option value="fr"> Djibouti</option>
                              <option value="fr"> Fiji</option>
                              <option value="fr"> Comoros</option>
                              <option value="fr"> Guyana</option>
                              <option value="fr"> Bhutan</option>
                              <option value="fr"> Solomon Islands</option>
                              <option value="fr"> Luxembourg</option>
                              <option value="fr"> Montenegro</option>
                              <option value="fr"> Suriname</option>
                              <option value="fr"> Cabo Verde</option>
                              <option value="fr"> Micronesia</option>
                              <option value="fr"> Malta</option>
                              <option value="fr"> Maldives</option>
                              <option value="fr"> Brunei</option>
                              <option value="fr"> Bahamas</option>
                              <option value="fr"> Belize</option>
                              <option value="fr"> Iceland</option>
                              <option value="fr"> Vanuatu</option>
                              <option value="fr"> Barbados</option>
                              <option value="fr"> Sao Tome & Principe</option>
                              <option value="fr"> Samoa</option>
                              <option value="fr"> Saint Lucia</option>
                              <option value="fr"> Kiribati</option>
                              <option value="fr"> Grenada</option>
                              <option value="fr"> Tonga</option>
                              <option value="fr"> Seychelles</option>
                              <option value="fr"> St. Vincent & Grenadines</option>
                              <option value="fr"> Antigua and Barbuda</option>
                              <option value="fr"> Andorra</option>
                              <option value="fr"> Dominica</option>
                              <option value="fr"> Saint Kitts & Nevis</option>
                              <option value="fr"> Marshall Islands</option>
                              <option value="fr"> Liechtenstein</option>
                              <option value="fr"> Monaco</option>
                              <option value="fr"> San Marino</option>
                              <option value="fr"> Palau</option>
                              <option value="fr"> Nauru</option>
                              <option value="fr"> Tuvalu</option>
                              <option value="fr"> Holy See</option>
                              
                            </select>
                            </div>
                        </div>
                            <!--<div class="col-lg-12">-->
                            <!--    <div class="form-group"><input type="text" class="form-control"-->
                            <!--            placeholder="Your Subject"></div>-->
                            <!--</div>-->
                            <div class="col-lg-12">
                                <div class="form-group"><textarea class="form-control" name="message"
                                        placeholder="Your Message"></textarea></div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-btn"><button class="btn btn-inline"><i class="fas fa-paper-plane"></i><span>send message</span></button></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
            
        </main>
        <!-- main-area-end -->


        <!-- footer-area -->
        <footer>
            <div class="footer-top footer-bg fix" data-background="img/bg/footer_bg.jpg">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-35">
                                    <a href="index.html"><img src="img/logo/w_logo.png" alt="" width="170px"></a>
                                </div>
                                <h2 class="text-white">ABOUT US</h2>
                                        <p class="text-white">Epic Overseas one of the trusted, reputed and reliable manufacturer, 
                                        exporter and supplier of all Indian Spices, Coconut, Coconut oil, Jaggery
                                        and many other Indian commodities all over the world from India.</p>
                                     
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Our Links</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="index.html" class="text-white">Home</a></li>
                                        <li><a href="about.html" class="text-white">About</a></li>
                                        <li><a href="spices.html" class="text-white">Products</a></li>
                                        <li><a href="certificate.html" class="text-white">Certificates</a></li>
                                        <li><a href="contact.html" class="text-white">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Need Help?</h5>
                                </div>
                                <div class="footer-blog-post">
                                    <ul>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Agriculture is the science and art of cultivating</a></h5>
                                                <span>Tonoy Pueyo</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="f-blog-post-thumb">
                                                <a href="#"><img src="img/blog/f_blog_thumb01.jpg" alt=""></a>
                                            </div>
                                            <div class="f-blog-post-content">
                                                <h5><a href="#">Whereby farming doated species create</a></h5>
                                                <span>Mark Wiens</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                            <div class="footer-text">
                                <!-- <p>Agrifram Farming of relse etras sheets connig passag.</p> -->
                                <div class="footer-contact">
                                    <ul>
                                        <li><a href="https://goo.gl/maps/bd4rnZv4VuzpJUHL7" class="text-white"><i class="fas fa-map-marker-alt"></i> <span>Address : </span>Ram Krishna Society Gate no. 409, Alandi, Pune , Maharashtra - 412105</a></li>
                                        <li><a href="tel:8839870020" class="text-white"><i class="fas fa-headphones"></i> <span>Phone : </span>8839870020</a></li>
                                        <li><a href="tel:9630342976" class="text-white"><i class="fas fa-headphones"></i> <span>Phone : </span>9630342976</a></li>
                                        <li><a href="mailto:info@eoimpex.com" class="text-white"><i class="fas fa-envelope-open"></i><span>Email : </span>info@eoimpex.com</a></li>
                                    </ul>
                                </div>
                            </div><br><br>
                            <div class="fw-title mb-35">
                                <h5>Follow us</h5>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <!--<li><a href="https://instagram.com/epic.overseas?igshid=MzNlNGNkZWQ4Mg=="><i class="fab fa-instagram"></i></a></li>-->
                                    <li><a href="https://www.facebook.com/profile.php?id=100089189815331&mibextid=ZbWKwL"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                    <!--<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>-->
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                            <!-- <div class="footer-widget mb-50">
                                <div class="fw-title mb-30">
                                    <h5>newsletter sign up</h5>
                                </div>
                                <div class="footer-newsletter">
                                    <form action="#">
                                        <input type="text" placeholder="Enter your email">
                                        <button><i class="fas fa-rocket"></i></button>
                                    </form>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom-shape fb-shape1 running"><img src="img/images/footer_vector01.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape2"><img src="img/images/footer_vector02.png" alt=""></div>
                <div class="footer-bottom-shape fb-shape3"><img src="img/images/footer_vector03.png" class="rotateme" alt=""></div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2023 <a href="https://www.crystalweb.in/" target="_blank">Crystal Web</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-list">
                                <ul>
                                    <li><a><img src="img/icon/visa_2.png" alt=""></a></li>
                                    <li><a><img src="img/icon/ae_02.png" alt=""></a></li>
                                    <li><a><img src="img/icon/discover.png" alt=""></a></li>
                                    <li><a><img src="img/icon/stripe.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->





		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/paroller.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themebeyond.com/html/agrifram/agrifram/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 10 Jul 2023 09:23:45 GMT -->
</html>

            <!-- breadcrumb-area-end -->