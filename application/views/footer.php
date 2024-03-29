<style>
   footer{
   padding:50px 0px;
   background-image: url(assets/imgs/Main-footer-bg.jpg);
   background-position: center center;
   background-repeat: no-repeat;
   background-size: cover;
   }
   footer a{
   color:#f6f6f6;
   opacity: 0.9;
   }
   footer h5{
   color:#fff;
   }
   .address-text{
   padding-left:15px;
   color:#fff;
   font-weight:300;
   font-size:14px;
   }
   .footer-social{
   color:#fff;
   font-size:20px;
   border:thin solid #fff;
   width:40px;
   height:40px;
   text-align:center;
   line-height:20px;
   padding-top:9px;
   }
   .us_span span{
   margin-left:30px;
   }
   .subscribe_input
   {
    background:transparent;
    width:100%;
    box-shadow:none;
    border:thin solid #fff;
    padding:5px 10px;
    height:40px;
    color:#fff;
    margin-top: 15px;
   }
   .btn-subscribe{
    margin-top:15px;
    padding:8px 20px;
    width:100%;
    border:thin solid #fff;
    text-transform:uppercase;
    font-size:12px;
   }
   .btn-subscribe:hover{
    background:transparent;
    color:#fff;
   }
</style>
<footer>
   <div class="elementor-background-overlay"></div>
   <div class="container">
      <div class="row" style="display:flex; align-items:top;">
         <div class="col-sm-3 pl-0" style="border-right:thin solid #fff;    padding-left: 0;">
            <img style="width:220px;margin-right: 90px;" src="<?php echo base_url('assets/imgs/logo-white.png');?>" alt="" class="img-responsive" />
            <a href="https://maps.app.goo.gl/pNyP35BXaURFkBG58"><p class="address-text"> <br />  <i class="fa fa-map-marker"></i>&nbsp;
               Hallmarc Business Park, 11A, 475 Blackburn Rd, Mount Waverley VIC 3149
            </p></a>
            <a href="mailto:travel@travelbazaar.com.au"><p class="address-text">  <i class="fa fa-envelope"></i>&nbsp;
               travel@travelbazaar.com.au
            </p></a>
            <a href="tel:+61 (03) 91110666"><p class="address-text">  <i class="fa fa-phone"></i>&nbsp;
               +61 (03) 91110666
            </p></a>
         </div>
         <div class="col-sm-4 us_span" style=" padding-left:50px;">
            <h5>Useful Links</h5>
            <br /> 
            <span style="float:left; margin-left:0px">
            <a href="<?php echo base_url('business');?>">Business Travel</a>
            <br /><br />
            <a href="<?php echo base_url('leisure');?>">Leisure Trips</a>
            <br /> <br />
            <a href="#">About Us</a>
            </span>
            <span style="float:left">
            <a href="<?php echo base_url('Australia'); ?>">Australia Infinite</a> <br /><br />
            <a href="<?php echo base_url('india');?>">India Infinite</a>
            <br /><br />
            <a href="<?php echo base_url('Contact');?>">Contact Us</a>
            </span>
          
         </div>
         <div class="col-sm-2">
            <span style="display:inline-block; min-width:100px;">
               <h5>Follow Us</h5>
               <br /> 
               <a class="mt-2"href="https://www.facebook.com/goodearthtravel">
               <i class="fa fa-facebook footer-social mt-1"></i></a>
               <br /> 
               <a class="mt-2" href="https://www.instagram.com/good_earth_travel">
               <i class="fa fa-instagram footer-social mt-1"></i></a>
               <br /> 
              <a class="mt-2"href="https://www.linkedin.com/company/good-earth-travel-group/">
               <i class="fa fa-linkedin footer-social mt-1"></i></a>
            </span>
         </div>
         <div class="col-sm-3">
             <h5>Subscribe for Special Offers </h5>
               <form method="post" action="Welcome/footer_form">
               <input type="text" class="subscribe_input" name="name" placeholder="Full Name" />
               <br />
               
               <input type="text" class="subscribe_input" name="email" placeholder="Email" />
               <br />
               
               <input type="text" class="subscribe_input" name="number" placeholder="Contact No." />
               <button type="submit" class="btn-subscribe">Submit</button></form>
         </div>
      </div>
   </div>
</footer>