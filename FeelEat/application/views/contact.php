<!-- CONTACT -->
<section id="contact" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">
	<!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
                    <div class="wow fadeInUp col-md-6 col-sm-12" data-wow-delay="0.4s">
                         <div id="google-map">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3647.3030413476204!2d100.5641230193719!3d13.757206847615207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf51ce6427b7918fc!2sG+Tower!5e0!3m2!1sen!2sth!4v1510722015945" allowfullscreen></iframe>
                         </div>
                    </div>    

                    <div class="col-md-6 col-sm-12">

                         <div class="col-md-12 col-sm-12">
                              <div class="section-title wow fadeInUp" data-wow-delay="0.1s">
                                   <h2>Contact Us</h2>
                              </div>
                         </div>

                         <!-- CONTACT FORM -->
                         <form action="<?php echo base_url(); ?>comment/addComment" method="post" class="wow fadeInUp" id="contact-form" role="form" data-wow-delay="0.8s">

                              <!-- IF MAIL SENT SUCCESSFUL  // connect this with custom JS -->
                              <h6 class="text-success">Your message has been sent successfully.</h6>
                              
                              <!-- IF MAIL NOT SENT -->
                              <h6 class="text-danger">E-mail must be valid and message must be longer than 1 character.</h6>

                              <div class="col-md-6 col-sm-6">
                                   <input required type="text" class="form-control" id="cf-name" name="name" placeholder="Full name">
                              </div>

                              <div class="col-md-6 col-sm-6">
                                   <input required type="email" class="form-control" id="cf-email" name="email" placeholder="Email address">
                              </div>
                              
                              <div class="col-md-7 col-sm-6" class="form-control">

                                <h4>Subject: </h4>
                                   <input  type="radio" class="form-radio" id="cf-subject" name="subject" value="Career" checked="on"  >
                                   <p>Career</p>
                                   <input  type="radio" class="form-radio" id="cf-subject" name="subject" value="Suggestion and Complaint" > 
                                   <p>Suggestion and Complaint</p>
                                   <input  type="radio" class="form-radio" id="cf-subject" name="subject" value="Other" >
                                   <p>Other</p>
                              </div>


                              <div class="col-md-12 col-sm-12">
                                  <!-- <input type="text" class="form-control" id="cf-subject" name="subject" placeholder="Subject">-->
                                  <h4>Your Message: </h4>
                                   <textarea class="form-control" rows="6" id="cf-message" name="message" placeholder="Tell about your project"></textarea>

                                   <button type="submit" class="form-control" id="cf-submit" name="submit">Send Message</button>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>          