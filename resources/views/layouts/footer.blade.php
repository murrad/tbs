        <!-- Footer -->
        
        <footer class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            
                            <div class="col-md-3">
                                <h4>TBS Group</h4>
                                <ul class="no-bullet">
                                    <li><a href="#">Group</a></li>
                                    <li><a href="#">Link1</a></li>
                                    <li><a href="#">Link2</a></li>
                                    <li><a href="#">Link3</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-sm-3 d-block d-sm-none">
                                <h4>Quick Links</h4>
                                <ul class="no-bullet">
                                    <li><a href="#">Customer Service</a></li>
                                    <li><a href="#">Information</a></li>
                                    <li><a href="#">Privacy</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-md-3 d-none d-sm-block">
                                <h4><a href="/customer-services">Customer Service</a></h4>
                                <ul class="no-bullet">
                                    <li><a href="/help-and-advice">Help &amp; Advice</a></li>
                                    <li><a href="/customer-services/aftersales-support">Aftersales Support</a></li>
                                    <li><a href="/customer-services/payment-terms">Payment Terms</a></li>
                                    <li><a href="/customer-services/returns">Returns</a></li>
                                    <li><a href="/customer-services/delivery">Delivery</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-md-3 d-none d-sm-block">
                                <h4><a href="/information">Information</a></h4>
                                <ul class="no-bullet">
                                    <li><a href="/help-and-advice/faqs">FAQs</a></li>
                                    <li><a href="/about-us">About Us</a></li>
                                    <li><a href="/information/certifications-accreditations">Certifications &amp; Accreditations</a></li>
                                    <li><a href="/suppliers">Suppliers</a></li>
                                    <li><a href="/site-map">Site Map</a></li>
                                    <li><a href="/careers">Careers</a></li>
                                    <li><a href="/terms-and-conditions">Terms &amp; Conditions</a></li>
                                </ul>
                            </div>
                            
                            <div class="col-md-3 d-none d-sm-block">
                                <h4><a href="/privacy">Privacy</a></h4>
                                <ul class="no-bullet">
                                    <li><a href="/privacy/privacy-policy">Privacy Policy</a></li>
                                    <li><a href="/privacy/cookie-policy">Cookie Policy</a></li>
                                    <li><a href="/privacy/unconsent">Unconsent</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-4">
                                <form action="/newsletters" method="POST" autocomplete="off">
                                    @csrf
                                    <h4>Newsletter Sign Up</h4>
                                    
                                    <div class="form-group">
                                        <input placeholder="Your name" class="form-control" name="newsletter_name" type="text" required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input placeholder="Your email" class="form-control" name="newsletter_email" type="text" required>
                                    </div>
                                    
                                    <input class="btn btn btn-success btn-lg col" type="submit" value="Sign up">
                                </form>                    
                            </div>
                            
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 order-md-2 order-sm-1">
                                        <form action="/notifications" method="POST" data-js-action="sms-submit" autocomplete="off">
                                            @csrf
                                            <h4 class="delta">SMS Notification Sign Up</h4>
                                            
                                            <div class="form-group">
                                                <input placeholder="Your number" class="form-control" name="contact_number" type="text" required>
                                            </div>
                                            
                                            <input class="btn btn-success btn-lg col" type="submit" value="Sign up">
                                            
                                        </form> 
                                    </div>
                                    
                                    <div class="col-md-6 col-sm-12 order-md-1  order-sm-2">
                                        <div class="col">
                                            <h4>Call us today on</h4>
                                            <a href="tel:00000000000" class="tel">0000 000 0000</a>
                                        </div>
                                        
                                        <div class="col">
                                            <h4>Connect</h4>
                                            <a href="#" class="fab fa-facebook fa-2x"></a>
                                            <a href="#" class="fab fa-twitter fa-2x"></a>
                                            <a href="#" class="fab fa-pinterest fa-2x"></a>
                                            <a href="#" class="fab fa-youtube fa-2x"></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </footer>
        <!-- Footer -->
        
        
        
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script>
            $(function(){
                $('.carousel').carousel();
            });
        </script>