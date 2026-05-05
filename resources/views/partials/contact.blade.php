<!-- CONTACT -->
<div id="contact" class="contact_area section-padding">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title-white">Say Hello, Let’s Start Something new</h2>
            <p class="section-title-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
        </div>				
        <div class="row">					
            <div class="offset-lg-1 col-lg-10 col-sm-12 col-xs-12 text-center wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s" data-wow-offset="0">
                <div class="contact">
                    <form id="contact-form" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" required="required">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea rows="6" name="message" class="form-control" placeholder="Type your message that on your mind..." required="required"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button type="submit" value="Send message" name="submit" id="submitButton" class="contact_btn" title="Submit Your Message!">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- END COL  -->					
        </div><!-- END ROW -->				
    </div><!--- END CONTAINER -->
</div>
<!-- END CONTACT -->
