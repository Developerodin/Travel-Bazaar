<style>
   a:hover {
  color:  #f78f1e;
  text-decoration: none;
}
   footer {

      padding-top: 50px;

      background-image: url(assets/imgs/Main-footer-bg.jpg);
      background-position: center center;
      background-repeat: no-repeat;
      background-size: cover;
   }

   footer a {
      color: #f6f6f6;
      opacity: 0.9;
   }

   footer h5 {
      color: #fff;
   }

   .address-text {
      padding-left: 15px;
      color: #fff;
      font-weight: 300;
      font-size: 14px;
   }

   .footer-social {
      color: #fff;
      font-size: 20px;
      border: thin solid #fff;
      width: 40px;
      height: 40px;
      text-align: center;
      line-height: 20px;
      padding-top: 9px;
   }

   .us_span span {
       margin-left: 30px; 
   }

   .subscribe_input {
      background: transparent;
      width: 100%;
      box-shadow: none;
      border: thin solid #fff;
      padding: 5px 10px;
      height: 40px;
      color: #fff;
      margin-top: 15px;
   }

   .btn-subscribe {
      margin-top: 15px;
      padding: 8px 20px;
      width: 100%;
      border: thin solid #fff;
      text-transform: uppercase;
      font-size: 12px;
   }

   .btn-subscribe:hover {
      background: transparent;
      color: #fff;
   }

  
</style>
<footer>
   <div class="elementor-background-overlay"></div>
   <div class="container">
      <div class="row" style="display:flex; align-items:top;">
         <div class="col-sm-3  pl-0" style="padding-left: 0;">
            <img style="width:220px;margin-right: 90px;" src="<?php echo base_url('assets/imgs/logo-white.png'); ?>" alt="" class="img-responsive" />
            <a href="https://maps.app.goo.gl/D7vW6ewN5YA1msda7">
               <p class="address-text"> <br /> <i class="fa fa-map-marker"></i>&nbsp;
                  Hallmarc Business Park, 11A, 475 Blackburn Rd, Mount Waverley VIC 3149
               </p>
            </a>
            <a href="mailto:travel@travelbazaar.com.au">
               <p class="address-text"> <i class="fa fa-envelope"></i>&nbsp;
                  travel@travelbazaar.com.au
               </p>
            </a>
            <a href="tel:+61 (03) 91110666">
               <p class="address-text"> <i class="fa fa-phone"></i>&nbsp;
                  +61 (03) 91110666
               </p>
            </a>
         </div>
         <div class="col-sm-3  us_span" style="padding-left: 50px;padding-bottom: 60px;">
            <h5>Useful Links</h5>
            <div style="margin-top: 15px;padding-top:15px;"> <!-- Add margin-top to create space -->
               <a class="mt-3" href="<?php echo base_url('business'); ?>">Business Travel</a>
            </div>
            <div style="margin-top: 15px;">
               <a class="mt-3" href="<?php echo base_url('leisure'); ?>">Leisure Trips</a>
            </div>
            <div style="margin-top: 15px;">
               <a href="<?php echo base_url('Australia'); ?>">Australia Infinite</a>
            </div>
            <div style="margin-top: 15px;">
               <a href="<?php echo base_url('india'); ?>">India Infinite</a>
            </div>
            <div style="margin-top: 15px;">
               <a href="<?php echo base_url('about'); ?>">About Us</a>
            </div>
            <div style="margin-top: 15px;">
               <a href="<?php echo base_url('Contact'); ?>">Contact Us</a>
            </div>
         </div>

         <div class="col-sm-3  ">
            <div style="display: flex; flex-direction: column; align-items: center; text-align: center;">
               <div style="display:inline-block; min-width:200px;">
                  <h5>Follow Us</h5>
                  <div style="position:relative; background-image: url('assets/img/sign2.png');background-size:contain;background-repeat: no-repeat;background-position: center;top:25px;min-height: 250px;">


                     <a class="mt-2 " href="https://www.facebook.com/goodearthtravel" style="position:absolute; top: 19px; left: 92px;">
                        <i class="fa fa-facebook-f  mt-1 " style="font-size:19px;"></i></a>
                     <br />
                     <a class="mt-2 " href="https://www.instagram.com/good_earth_travel" style="position:absolute; top: 60px; left: 89px;">
                        <i class="fa fa-instagram mt-1 " style="font-size:18px;"></i></a>
                     <br />
                     <a class="mt-5 " href="https://www.linkedin.com/company/good-earth-travel-group/" style="position:absolute; top: 62px; left: 90px;">
                        <i class="fa fa-linkedin  mt-1 " style="font-size:18px;"></i></a>
                     <br />
                     <a class="mt-5 " href="https://www.youtube.com/@happyvacationsbygoodearth2004" style="position:absolute; top: 108px; left: 90px;">
                        <i class="fa fa-youtube-play  mt-1 " style="font-size:17px;"></i></a>   
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-3">
            <h5>Subscribe for Special Offers </h5>
            <form method="post" action="Welcome/footer_form">
               <input type="text" class="subscribe_input" name="name" placeholder="Full Name" style="font-family: 'Lato';" />
               <br />

               <input type="text" class="subscribe_input" name="email" placeholder="Email" style="font-family: 'Lato';" />
               <br />

               <input type="text" class="subscribe_input" name="number" placeholder="Contact No." style="font-family: 'Lato';" />
               <button type="submit" class="btn-subscribe" style="font-family: 'Lato';font-size:16px;">Submit</button>
            </form>
         </div>
      </div>
   </div>
</footer>