<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marck+Script&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js"> </script>
<script type="importmap">
        {
            "imports": {
                "three": "https://cdn.jsdelivr.net/npm/three@0.131/build/three.module.js",
                "jsm/": "https://cdn.jsdelivr.net/npm/three@0.131/examples/jsm/"
            }
        }
    </script>



<link rel="stylesheet" href="assets/css/map.css" type="text/css" />
<style>
.earth-container {
    
  position: relative;
    display: flex;
    justify-content: center;
           width: 100%;
           height: 100%;
           margin-left: -3%;
            
       }
   .popup {
            
            
            
            
     position: absolute;
            left: 85%;
            top: 60%;
            transform: translate(-50%, -50%);
            padding: 20px;
            z-index: 1000;
            width: auto;
            height: auto;
            display: none;
          
        }

        .popup img {
    max-width: 150% !important;
    max-height: 150% !important;
    width: 150% !important;
    height: 150% !important;
    display: block !important;
}


       

        #start-button,
        #stop-button {
          visibility: hidden;
            bottom: 5%;
            right: 15%;
            z-index: 9999;
            background-color: lightblue;
            color: white;
        }

        #stop-button {
            right: 10%;
            background-color: red;
        }


  .is-visible .com>div {


    width: 420px !important;
    height: 405px !important;

    z-index: 1;
    position: absolute;
    margin-left: -70px !important;
    margin-top: -50px !important;
    margin-bottom: -20px !important;

    transition: transform 0.8s linear !important;
    transform: scale(1.1) !important;
  }


  .fa-star.st.checked[data-rating="5"] {
    color: grey;
  }



  .is-visible .conn {

    margin-top: 20px !important;


  }

  .is-visible .para {
    font-size: 18px !important;
    padding: 20px;
    justify-content: center !important;
    padding-top: 5px !important;
     line-height: 1.4;
     font-family: 'Lato', sans-serif;
  }

  .is-next .para {
    padding-top: 5px !important;
    font-size: 15px !important;
    padding: 20px;
    line-height: 1.2;
    font-family: 'Lato', sans-serif;
    
  }

  .is-prev .para {
    padding-top: 5px !important;
    font-size: 15px !important;
    padding: 20px;
    line-height: 1.2;
    font-family: 'Lato', sans-serif;

  }

  .is-hidden .para {
    padding-top: 5px !important;
    font-size: 15px !important;
    padding-bottom: 10px !important;
    margin-top: -10px !important;
  }



  .is-visible .au {
    font-size: 22px !important;
    font-family: 'Lato', sans-serif;


  }

  .is-next .au {
    margin-top: 35px !important;
    font-family: 'Lato', sans-serif;
  }

  .is-prev .au {
    margin-top: 35px !important;
    font-family: 'Lato', sans-serif;
  }

  .is-hidden .au {
    margin-top: 35px !important;
  }

  .is-next .st {
    font-size: 25px !important;
    margin-top: 5px !important;
    margin: 0 4px !important;
  }

  .is-prev .st {
    font-size: 25px !important;
    margin-top: 5px !important;
    margin: 0 4px !important;
  }

  .is-hidden .st {
    font-size: 25px !important;
    margin-top: 5px !important;
    margin: 0 4px !important;
  }

  .is-next .com>div {
    background-size: 295px 300px !important;



  }

  .is-prev .com>div {
    background-size: 295px 300px !important;

  }

  .is-hidden .com>div {
    background-size: 295px 300px !important;

  }

  .is-visible .st {
    font-size: 30px !important;
    margin: 0 4px !important;
  }

  @media only screen and (max-width: 786px) {

    .owl-item.com {
      /* display: none; */
    }
    .owl-item  com {
  /* display: none !important; */
}

    .owl_item con {
      width: 160px;
      height: 200px;
      /* display: none; */
    }

    .owl-item conn {
      padding: 10px;
      /* display: none; */
    }

    .owl-item au {
      font-size: 7.5px;
    }

    .owl-item para {
      font-size: 6.5px;
      margin-bottom: 60px;
    }
    .testi_lady_img {
      display: none;
    }
    .is-visible .com>div {
      margin-top: 20px !important;
      width: 240px !important;
      height: 210px !important;
      margin: 50%;
      margin-bottom: 20px !important;

      /* margin-top: -25px !important;
    margin-bottom: -10px !important; */

    }

    /* .is-visible .conn {
    margin-top: 10px !important;
  } */
    .is-visible .para {
      font-size: 9px !important;
    }

    .is-visible .au {
      font-size: 11px !important;
    }

    .is-visible .st {
      font-size: 15px !important;
    }

    .is-next .com>div {
      background-size: 180px 150px !important;
      visibility: hidden !important;


    }

    .is-prev .com>div {
      background-size: 180px 150px !important;
      margin-right: 50px;
      visibility: hidden !important;



    }

    .is-hidden .com>div {
      visibility: hidden !important;
      background-size: 180px 150px !important;
    }
     
    
  }
  /* @media only screen and (min-width: 1280px) {
  
  .earth-container {
    margin-left: -3%; 
    
  }
  
  #popup {
    
    left: 80%; 
    top: 420%; 
    transform: translate(-50%, -50%);
    padding: 10px;
  }
}

 @media only screen and (max-width: 1280px) {
  
  .earth-container {
    margin-left: -3%; 
  }
  
  #popup {
    left: 80%; 
    top: 50%; 
    transform: translate(-50%, -50%);
    padding: 10px;
  }
} 
@media only screen and (max-width: 992px) {
  
  .earth-container {
    margin-left: 0; 
  }
  
  #popup {
    left: 70%; 
    top: 70%; 
    transform: translate(-50%, -50%);
    padding: 10px;
  }
} */

@media only screen and (max-width: 767px) {
  
  .splide__slide img {
    display: flex;
    
    width: 200% !important;  /* Set image width to 100% of its container */
    height: 100% !important; /* Allow the image to scale proportionally */
  }
}

@media (max-width: 767px) {
    .hide-on-mobile {
      display: none;
    }
  }

@media only screen and (max-width: 768px) {
  
  .earth-container {
    justify-content: center; 
    margin-left: 3%;
    display: none;
  }
  
  #popup {
    left: 50%; 
    top: 50%; 
    transform: translate(-50%, -50%);
    padding: 10px;
  }
}

@media only screen and (max-width: 576px) {
  
  .earth-container {
    justify-content: flex-start; 
    display: none;
  }
  
  #popup {
    left: 50%; 
    top: 70%; 
    transform: translate(-50%, -50%);
    padding: 10px;
  }
}

@media only screen and (max-width: 320px) {
  
  .earth-container {
    justify-content: flex-start; 
    display: none;
  }
  
  #popup {
    left: 50%; 
    top: 80%; 
    transform: translate(-50%, -50%);
    padding: 5px;
  }
}

  .page_titl {
    font-size: 30px;
    font-weight: 300;
    margin-bottom: 12px;
    font-family: 'Lato', sans-serif;
  }

  .page_titl strong {
    font-weight: 600;
    color: #f78f1e;
    font-family: 'Lato', sans-serif;
  }

  .testi_titl {
    position: relative;
  

  }



  .testi_titl:after {
    width: 60px;
    height: 4px;
    background: #004c8d;
    content: "";
    position: absolute;
    left: 47.5%;
    bottom: -10px;
  }

  .splide__slide img {
    width: 200px;
    height: 110px;
  }


  .splide__slide {
    width: auto;
    height: auto;
    margin-right: 10px;
  }




  .fa-star {
    color: #FBBD06;
    font-size: 30px;
    cursor: pointer;
  }

  .fa-star.active {
    color: #FBBD06
  }

  @media (max-width: 767px) {
  .cho_abt ul {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }

  .cho_abt ul li {
     
    max-width: 100%; /* Set maximum width to avoid overflowing */
    text-align: center;
    margin-bottom: 10px; /* Add some space between rows */
  }
}
.button {
        background-color: black;

    }

    .button:hover {
        background-color: black;
    }

</style>
<section class="video-header">
  <video src="<?php echo base_url('assets/imgs'); ?>/travel.mp4" autoplay loop playsinline muted></video>
  <div class="viewport-header">
    <h1 class='top-heading'>
      Your Getaway to
      <span>The World</span>
    </h1>
  </div>
</section>


<section style="margin-top:90vh">
  <div class="container">
    <div class="card-row">
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-2">
          <a href="<?php echo base_url('business'); ?>">
            <div class="card-travel c1">

              <h3> Business Travel</h3>


            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="<?php echo base_url('leisure'); ?>">
            <div class="card-travel c2">
              <h3>Leisure Trips</h3>
            </div>
          </a>
        </div>
        <!-- <div class="col-sm-2">
          <a href="<?php echo base_url('Contact'); ?>">
            <div class="card-travel c3">
              <h3>Bookings Online</h3>
            </div>
          </a>
        </div> -->
        <div class="col-sm-2">
          <a href="<?php echo base_url('india'); ?>">
            <div class="card-travel c4">
              <h3>India Infinite</h3>
            </div>
          </a>
        </div>
        <div class="col-sm-2">
          <a href="<?php echo base_url('Australia'); ?>">
            <div class="card-travel c5">
              <h3>Australia Infinite</h3>
            </div>
          </a>
        </div>

      </div>
    </div>
  </div>

</section>

<section>
  <div class="container pb-4">
    <div class="row">
      <div class="col-sm-12">
        <br /><br /><br />
        <h5 class="mt-30  " style="color: #f78f1e;font-size:32px;font-family:'Lato',sans-serif;margin-left: -10px;">Who We Are</h5>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 ">
        <div class="row">
          <div class="col-sm-6">
            <h3 class=" text-justify" style="margin-top: -4px;font-size: 20px;"> Welcome to Good Earth Travel Group (GETG), an esteemed travel enterprise established in 2000, renowned for delivering outstanding travel services. </h3>
            <p class="font-15 text-justify" style="font-weight: 400;font-size:15px;" >  With two centralised offices in Australia and India, we proudly serve clients worldwide. 

            At GETG, we house a diverse portfolio of specialised brands, including Travel Bazaar, India Infinite, OZ Infinite, and Signature Representation. Leveraging our strong relationships with major international and domestic airlines, hotels, and travel suppliers, we ensure unparalleled access and value for our clients.<br><br>
              
            Our commitment to maintaining exceptional service standards is reinforced by substantial investments in technology and our dedicated team. With extensive experience catering to quality-sensitive clients, we possess the expertise to tailor comprehensive travel solutions that precisely meet your needs.
              <br><br>
              Choose GETG for a seamless and personalised travel experience that exceeds your expectations.
            </p>
            <a href="<?php echo base_url('Contact'); ?>">
            <button class="btn " style="background-color: black;color:#fff;font-family:'Lato';">Read More...</button>
            </a>
          </div>
          <div class="col-md-6 col-12">
            <div class="abt_img text-end">
              <img src="assets/imgs/abt_img.png" width="100%" style="max-width:445px;">
            </div>
            <div class="cho_abt">
              <ul>
                <li>
                  <div class="ch_ico"><img src="assets/imgs/icon.png" style="width:43px;"></div>
                  <div class="ch_txt">Luxury Travels</div>
                </li>
                <li>
                  <div class="ch_ico"><img src="assets/imgs/icon2.png"></div>
                  <div class="ch_txt">Affordable Packages</div>
                </li>
                <li>
                  <div class="ch_ico"><img src="assets/imgs/icon3.png"></div>
                  <div class="ch_txt">Booking Made Easily</div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="p-0"
  style=" position: relative;background-image: url('assets/imgs/back.jpg');    background-repeat: no-repeat;    background-size: cover;">
  <div class="overlay"></div>
  <div class="we_are " style=" position: relative;  ">
    <div class="wdt-heading-holder container pt-3">
      <div class="text-white text-center font-sp2 pt-3"><span class="wdt-heading-subtitle"
          style="font-family: 'Marck Script';">Crafting Unforgettable Adventure Tours and Activities</span></div>
      <h2 class="text-white text-center font-sp pt-2"><span class="wdt-heading-title" style="font-size: 32px;">What We Offer</span></h2>
    </div>
    <div class="">
      <div class="row mt-5 mb-2 text-white  pb-5">
        <div class="col-md-5 col-0"></div>

        <div class="col-md-7 col-12 row " style="justify-content: space-around;">
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center">
              <span><i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;height:60px;"
                    xml:space="preserve">
                    <style type="text/css">
                      .travel-0 {
                        fill: none;
                        stroke: currentcolor;
                        stroke-width: 2;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                      }
                    </style>
                    <g>
                      <path class="travel-0"
                        d="M43.2,5L43.2,5c2.3,0,4.1,1.8,4.1,4.1v81.8c0,2.3-1.8,4.1-4.1,4.1c0,0,0,0,0,0l0,0  c-2.3,0-4.1-1.8-4.1-4.1c0,0,0,0,0,0V9.1C39.1,6.8,40.9,5,43.2,5z">
                      </path>
                      <path class="travel-0" d="M50.2,13.7h37.2l7.9,9.4l-7.9,9.4H50.2"></path>
                      <path class="travel-0" d="M50.2,41.2h22.1l7.9,9.4L72.2,60H50.2"></path>
                      <path class="travel-0" d="M36.4,22.3H12.7l-7.9,9.4l7.9,9.4h23.7"></path>
                    </g>
                  </svg></i></span>
            </div>
            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;"> Crafted Itineraries & Unbeatable Deals</h4>
              <p style="color:#fff;font-size:14px;">
              Expertly crafted itineraries for unforgettable adventures. Exclusive discounts on diverse travel packages guaranteeing value without compromise. Your perfect blend of adventure, relaxation, and culture awaits
              </p>
            </div>

          </div>
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center" >
              <span><i><img src="assets/imgs/Airicon.png" style="width:60px;height:60px; filter: invert(1);"></i></span>
            </div>

            
            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;"> Global air travel </h4>
              <p style="color:#fff;font-size:14px;">
              Jet set across the globe hassle-free with our global air ticketing solutions. From popular hubs to off-the-beaten-path destinations, we're your passport to worldwide exploration
              </p>
            </div>

          </div>
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center" >
              <span><i><img src="assets/imgs/Booking.png" style="width:60px;height:60px;filter: invert(1);"></i></span>
            </div>

            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;">Great Accommodation</h4>
              <p style="color:#fff;font-size:14px;">
              Choose from a curated selection of handpicked hotels, resorts, villas, and guesthouses, each renowned for their exceptional service, amenities, and prime locations
              </p>
            </div>

          </div>
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center" >
              <span><i><img src="assets/imgs/Hotel.png" style="width:60px;height:60px;filter: invert(1);"></i></span>
            </div>

            
            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;">Flexible Booking Options & 24/7 Service </h4>
              <p style="color:#fff;font-size:14px;">
              Whether you're planning a spontaneous getaway or a meticulously planned vacation, we offer flexible booking options to accommodate your schedule, preferences, and budget
              </p>
            </div>

          </div>
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center">
              <span><i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;height:60px;"
                    xml:space="preserve">
                    <style type="text/css">
                      .travel-3 {
                        fill: none;
                        stroke: currentcolor;
                        stroke-width: 2;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                      }
                    </style>
                    <g>
                      <path class="travel-3" d="M93.7,87.9l-5.3,5.3L74.7,79.6l5.4-5.2L93.7,87.9z"></path>
                      <circle class="travel-3" cx="64.3" cy="61.7" r="19.6"></circle>
                      <path class="travel-3" d="M64.3,48.9c7.1,0,12.9,5.8,12.9,12.9l0,0"></path>
                      <path class="travel-3" d="M81.3,50.1V21.1l-25-14.3l-25,14.3L6.3,6.8v61.2l25,14.3l14.6-8.3"></path>
                      <line class="travel-3" x1="31.3" y1="82.2" x2="31.3" y2="21.1"></line>
                      <line class="travel-3" x1="56.4" y1="43.1" x2="56.4" y2="7"></line>
                    </g>
                  </svg></i></span>
            </div>


            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;">Expert Tour Guides for Unforgettable Adventures </h4>
              <p style="color:#fff;font-size:14px;">
                Discover endless possibilities as you explore captivating destinations, where every moment becomes a
                cherished memory
              </p>
            </div>

          </div>
          <div class="col-md-6 row">
            <div class="col-md-3 col-3 text-white text-center">
              <span><i><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                    y="0px" viewBox="0 0 100 100" style="enable-background:new 0 0 100 100;height:60px;"
                    xml:space="preserve">
                    <style type="text/css">
                      .travel-4 {
                        fill: none;
                        stroke: currentcolor;
                        stroke-width: 2;
                        stroke-linecap: round;
                        stroke-linejoin: round;
                      }
                    </style>
                    <g>
                      <path class="travel-4"
                        d="M24.6,74.5c2.2,0,3.9,1.8,3.9,3.9c0,2.2-1.8,3.9-3.9,3.9s-3.9-1.8-3.9-3.9l0,0  C20.7,76.2,22.5,74.5,24.6,74.5z">
                      </path>
                      <path class="travel-4"
                        d="M71.2,74.5c2.2,0,3.9,1.8,3.9,3.9s-1.8,3.9-3.9,3.9c-2.2,0-3.9-1.8-3.9-3.9v0  C67.2,76.2,69,74.5,71.2,74.5z">
                      </path>
                      <path class="travel-4"
                        d="M71.2,67.9c5.8,0,10.5,4.7,10.5,10.5c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5  C60.6,72.6,65.3,67.9,71.2,67.9C71.2,67.9,71.2,67.9,71.2,67.9z">
                      </path>
                      <path class="travel-4"
                        d="M24.6,67.9c5.8,0,10.5,4.7,10.5,10.5c0,5.8-4.7,10.5-10.5,10.5c-5.8,0-10.5-4.7-10.5-10.5  C14.1,72.6,18.8,67.9,24.6,67.9C24.6,67.9,24.6,67.9,24.6,67.9z">
                      </path>
                      <path class="travel-4" d="M52.5,25.1V14c0-1.6-1.3-2.9-2.9-2.9H35.2c-1.6,0-2.9,1.3-2.9,2.9v11">
                      </path>
                      <path class="travel-4" d="M31.4,15.7H19.2c-1.6,0-2.9,1.3-2.9,2.9v6.8"></path>
                      <line class="travel-4" x1="40.4" y1="33.8" x2="40.4" y2="52.7"></line>
                      <line class="travel-4" x1="8.9" y1="52.7" x2="74.3" y2="52.7"></line>
                      <path class="travel-4"
                        d="M14.1,79.3h-3.2c-2.2,0-4-1.8-4-4V51.5L10,35.4c0.5-2.3,2.5-4,4.8-4.3c36,0,24,0.2,42.3-0.1  C62.5,31,66.8,51,72,52.2l16.3,3.6c2.7,0.7,4.7,3,4.9,5.8v13.7c0,2.2-2.7,4-4.8,4h-6.2">
                      </path>
                      <line class="travel-4" x1="59.8" y1="79.3" x2="35.1" y2="79.3"></line>
                      <line class="travel-4" x1="10.4" y1="25.6" x2="56.9" y2="25.6"></line>
                    </g>
                  </svg></i></span>
            </div>
            <div class="col-md-9 col-9">
              <h4 class="" style="font-weight: 600;"> Convenient Door-to-Door Transportation Services </h4>
              <p style="color:#fff;font-size:14px;">
                Embark on a journey where time stands still, and experience the ultimate escape from the mundane
              </p>
            </div>

          </div>
          <!-- <div class="col-md-10 col-12 row mt-4 pb-4">
            <div class="col-md-4 col-12 text-center mt-3">
              <a href="<?php echo base_url('Contact');?>"><button type="button" class="btn " style="background-color: #db3918;color:#fff;">TALK TO US</button></a>
            </div>
            <div class="col-md-4 col-6 row mt-3 hide-on-mobile">
              <div class="col-md-2 col-2 text-center " style="display: flex;align-items: center;justify-content: end;"><i
                  class="fa fa-phone " style="    font-size: 25px;"></i></div>
              <div class="col-md-10 col-10">
                <p class="text-white mb-0" style="color:#fff;font-size:14px;">Call Us Anytime</p>
                <a href="tel:+61 (03) 91110666"><p class="text-white" style="color:#fff;font-size:14px;">+61 (03) 91110666 </p></a>
              </div>
            </div>
            <div class="col-md-4 col-6 row mt-3 hide-on-mobile">
              <div class="col-md-2 col-2 text-center" style="display: flex;align-items: center;justify-content: end;"><i
                  class="fa fa-envelope " style="    font-size: 25px;"></i></div>
              <div class="col-md-10 col-10">
                <p class="text-white mb-0" style="color:#fff;font-size:14px;">Email Us Anytime</p>
                <a href="mailto:travel@travelbazaar.com.au">
                <p class="text-white" style="color:#fff;font-size:14px;"> travel@travelbazaar.com.au</p></a>
              </div>
            </div>

          </div> -->
        </div>
      </div>
    </div>

  </div>

</section>


<section class="testimonial">

<div class="text-center mt-5" style="padding: 0 5%;">
  <h4 style="font-family: 'Marck Script'; padding-bottom: 0;margin-bottom: 0;font-size:32px">Dream. Explore. Discover.</h4>
  <h1 class="pb-2 mt-0 pt-4" style="color:#f78f1e;font-size:32px; font-family:'Lato',sans-serif;font-weight:600;">Place To Travel</h1>
  <div class="page_txt" style="" >
  Move around the globe and pick your desired spot to travel and connect with our specialised team to get closer to your travel journey
    </div>
    <div class="earth-container">


      <div id="india-popup" class="popup">
  <a href="https://www.travelbazaar.com.au/india" >
    <img src="assets/imgs/india_1.jpg"  alt="India">
  </a>
</div>

<div id="australia-popup" class="popup">
  <a href="https://www.travelbazaar.com.au/Australia" >
    <img src="assets/imgs/australia_1.jpg" alt="Australia">
  </a>
</div>

<div id="leisure-popup" class="popup">
  <a href="https://www.travelbazaar.com.au/Leisure" >
    <img src="assets/imgs/leisure_1.jpg"  alt="Leisure">
  </a>
</div>

        <button id="start-button">START</button>
        <button id="stop-button">STOP</button>
    </div>

</div>

  

    


    

    <div class="row m-0" style="margin-top:5%;width:100%;">

      <br><br>
      <div class="col-md-4  mt-3 p-0" style="align-items: center;display: flex;justify-content: center;">
        <div class="serv-name3 text-center">
          <div class="">
            <h2 style="font-weight:700;color: white;">INDIA</h2>
          </div><br>
          <div class="">
            <a href="<?php echo base_url('india'); ?>">
              <button class="btn " style="background-color: #f78f1e;color:#fff">Explore Now</button>
            </a>
          </div>

        </div>
        <a href="<?php echo base_url('india'); ?>">

          <img src="assets/imgs/India4.jpg" alt="" style="width:100%;" class="zoom serv-img" title="" />
        </a>
      </div>
      <div class="col-md-4  mt-3 p-0" style="align-items: center;display: flex;justify-content: center;">
        <div class="serv-name3 text-center">
          <div class="<?php echo base_url('Australia'); ?>">
            <h2 style="font-weight:700;color: white;">AUSTRALIA</h2>
          </div><br>
          <div class="">
            <a href="<?php echo base_url('Australia'); ?>">
              <button class="btn " style="background-color: #f78f1e;color:#fff">Explore Now</button>
            </a>
          </div>

        </div>
        <a href="<?php echo base_url('leisure'); ?>">

          <img src="assets/imgs/Australia2.jpg" alt="" style="width:100%;" class="zoom serv-img" title="" />
        </a>
      </div>
      <div class="col-md-4  mt-3 p-0" style="align-items: center;display: flex;justify-content: center;">
        <div class="serv-name3 text-center">
          <div class="">
            <h2  style="font-weight:700;color: white;padding:0% !important;">REST OF THE WORLD</h2>
          </div><br>
          <div class="">
            <a href="<?php echo base_url('leisure'); ?>">
              <button class="btn " style="background-color: #f78f1e;color:#fff">Explore Now</button>
            </a>
          </div>

        </div>
        <a href="<?php echo base_url('leisure'); ?>">

          <img src="assets/imgs/Cityscape.jpg" alt="" style="width:100%;" class="zoom serv-img" title="" />
        </a>
      </div>
    </div>


  </div>
  <div class="airlinelogo_outer text-center mt-4" id="airline">
  <div class="container">
  <h2 class="mt-5" style="font-family: 'Marck Script', cursive;padding-bottom: 0;margin-bottom: 0;">Empowering Connections</h2>
    <div class="page_titl" style="margin-top:6px ;font-size:32px;"><strong>Our Partners</strong></div>
    <div class="page_txt">
      Whether you're planning to uncover the hidden gems of your own country or embark on an international escapade,
      we've got you covered. Explore our extensive selection of domestic and international flights, and unlock
      unbeatable prices that will leave you thrilled. Contact us now to book your next adventure and embark on a journey
      you'll love!
    </div>
    <div class="air_logos pt-5 pb-5">
      <div class="splide" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">

            <li class="splide__slide img-fluid"><img src="assets/imgs/air/Air_Canada_logo.png"> </li>
            <li class="splide__slide img-fluid"><img src="assets/imgs/air/Air_France_logo.png"> </li>
            <li class="splide__slide img-fluid"><img src="assets/imgs/air/Air_India_logo.png"> </li>
            <li class="splide__slide img-fluid"><img src="assets/imgs/air/Air-New-Zealand-logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/American_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Air_China_logo.png"> </li>
            <li class="splide__slide img-fluid"><img src="assets/imgs/air/Batik_Air_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/British_Airways_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Cathay_Pacific_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Fiji_Airways_Logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Emirates_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Etihad_Airways_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Garuda_Indonesia_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/China_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Japan_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/KLM_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Delta_air_lines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Lufthansa_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Malaysia_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Qantas_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Qatar_Airways_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Singapore_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Srilankan_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Swiss_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Turkish_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/United_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Virgin_Australia_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Ethiopian_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Vietnam_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Thai_Airways_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Srilankan_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Vistara_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/VietJet_Air_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/All-Nippon_Airways_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Finnair_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/IndiGo_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Jetstar_Logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/Philippine_Airlines_logo.png"> </li>
            <li class="splide__slide"><img src="assets/imgs/air/China_Southern_logo.png"> </li>

          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="pt-5 mb-5" style="padding:0 5%; ">
    <section class="testi_outer p-0 m-0">

      <div class="container">

        <div class="row">
          <div class="col-sm-12 text-center pb-4">
            <h2 class="mt-5" style="font-family: 'Marck Script', cursive;padding-bottom: 0;margin-bottom: 0;">What Our Travellers Say</h2>
            <div class="testi_titl text-center pt-2" style="font-family: 'Lato',sans-sarif; color: #f78f1e; font-size:30px;">
              Testimonials
  
            </div>
          </div>
          
          <div class="col-lg-3 col-md-3 col-12 text-center">

            <div class="testi_lady_img"><img src="assets/imgs/t.png"
                style="max-height: 550px;width:280px;margin-right: 350px;margin-top:80px;">
            </div>

          </div>

          <div class="col-lg-9 col-md-9 col-12 ">

            <div class="testi_slider mt-3">


              <div class="owl-carousel owl-testi owl-theme owl-loaded owl-drag">
                <section class="splide" id="testi" aria-label="Splide Basic HTML Example">
                  <div class="splide__track" style="padding-top: 5%;">
                    <ul class="splide__list  ">
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Disha Ahuja
                              </div>
                              <div style="margin-bottom:3px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px; ">
                                "What a fantastic adventure! Thanks to this travel agency, we explored new destinations
                                with ease. Professionalism, attention to detail, and exceptional service—truly
                                remarkable!"
                              </div>
                            </div>
                          </div>
                        </div>


                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px;">Sanchit
                                Lodha</div>
                              <div style="margin-bottom:3px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st checked" data-rating="5" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "A heartfelt thank you to the 'Travel Bazaar' for crafting the trip of a lifetime.
                                Flawless arrangements and personalized attention made our journey unforgettable. Can't
                                wait to book again!"
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con "
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px;">Gauri
                                Pratap Singh</div>
                              <div style="margin-bottom:3px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Exceeded my expectations! The team at 'Travel Bazaar' tailored my trip perfectly,
                                ensuring every moment was memorable. Highly recommend their services for hassle-free
                                travel."
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Rahul Khanna
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>

                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Unforgettable journey! Their attention to detail and commitment to customer
                                satisfaction made all the difference."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Mark Jay
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>

                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "My family and I recently organised a trip to Rajasthan for a group of 15 of us. This was booked through Travel Bazaar (Good Earth Travel Group). The choice of hotels was excellent. "</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Ramit Bhatnagar
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>

                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Highly recommend! Very happy with Travel Bazaar. I have used this company a few times now, and never had a problem. The team at Travel Bazaar is very attentive to responding to your emails and questions. "</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Kellt Mcpherson
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>

                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Awesome and very professional handling of customer queries right from start to day of travels.Complete office support is always given ahead of flights.
                                I love to to keep Travel Bazaar of my agent. They are rhe BEST!"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Mukesh Chawla
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st checked" data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "I used Travel Bazaar to book flights, train tickets & hotels for a family holiday.

                                Not only were our requirements met, we were also given good advice which made the holiday even more memorable."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Akash Soeny
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Nishant and Ritu are very easy to deal with. They always spend the time to understand our travel plans and organise the best itinerary to suit at very competitive prices.
                                Highly recommend them for your travel bookings."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Piyush kedia
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Having Good Earth Travels by our side on our holiday to Australia this summer was a  blessing....from blocking tours for us to booking a cab ...they did it all...
                                We just had to name and it was done, best to our time n taste."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Mukesh Jain
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "I have been visited Australia through travel Bazaar and it was very good experience with them and really appreciate for all support"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Gunjan loona
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "One of best travel company v used.Nishant n his team gives u best customer service as well looking after minimal need to travel.a really recommend to use travel bazaar if u looking for super holidays ."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Vaibhav Sharma
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Thank you Nishant for our bookings and the free goodies - reflexology and photo shoot at Alila Bali. Great experience!"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Milan Saparia
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st checked" data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Very helpful  and professional . Will recommend to always book tickets from Travel Bazar."</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Krutik Shukla
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st checked" data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "They are fast and helpful in finding affordable tickets. Service is really good, I will highly recommend to my family and friends"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con "
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 4px;margin-bottom:3px; font-weight: bold;font-size:15px;">Alexander
                                D'souza</div>
                              <div style="margin-bottom:2px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:130px;">
                                "Nishant & Travelbazar travel agency is a trusted & competent agent to do your travel bookings with & have recommended
                                 them to my relatives & friends & they are all happy with their booking with travel bazaar .I would definitely recommend  them to anyone."
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con "
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px;">Sarah Wilson
                                </div>
                              <div style="margin-bottom:3px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Good Earth Travel planned my unforgettable trip to India flawlessly. From luxurious Indian accommodations to immersive cultural experiences, they ensured every detail was perfect. Highly recommend for an unparalleled adventure!."
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con "
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 4px;margin-bottom:3px; font-weight: bold;font-size:15px;">Emily
                                Jones</div>
                              <div style="margin-bottom:2px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:140px;">
                                "I  had a breathtaking trip across India with my family, hitting all the must-see destinations flawlessly.
                                 From the Taj Mahal to the backwaters of Kerala, each stop was meticulously planned by Nishant for maximum beauty and enjoyment."
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con "
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit; background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px;">Jessica Thompson</div>
                              <div style="margin-bottom:3px;">
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                                <i class="fa fa-star st" aria-hidden="true"></i>
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:130px;">
                                "It was an incredible journey from vibrant Mumbai to majestic landscapes of Rajasthan.
                                 Exploring the bustling markets and delicious street food of Mumbai to marvelling at the grandeur of Jaipur's palaces and its rich culture."
                              </div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Gaurav Bhansali
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "They are very promt with their service.
                                Hassle free booking for peace of mind holidays 😌"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                      <li class="splide__slide">
                        <div class="owl-item cloned com" style="margin: 15px;">
                          <div class="owl_item con"
                            style="width: 320px; height: 400px; background-image: url('assets/img/union.png');background-size: cover;background-position: inherit;  background-repeat: no-repeat;">
                            <div class="owl-item conn"
                              style="position: absolute;top:0; left: 0; width: auto; height: auto; display: flex; flex-direction: column; justify-content: center; align-items: center; padding: 20px; border-radius: 10px;">
                              <div class="owl-item au"
                                style="margin-top: 5px;margin-bottom:3px; font-weight: bold;font-size:15px">Deep Pratap
                              </div>
                              <div style="margin-bottom:3px;">

                                <i class="fa fa-star st" data-rating="1" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="2" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="3" aria-hidden="true"></i>
                                <i class="fa fa-star st" data-rating="4" aria-hidden="true"></i>
                                <i class="fa fa-star st " data-rating="5" aria-hidden="true"></i>
                                
                              </div>
                              <div class="owl-item para"
                                style="font-size: 13px; text-align: center;margin-bottom:120px;">
                                "Great service.. friendly staff … and what a great effort taken by the staff to get the best options for me n my friends"</div>
                            </div>
                          </div>
                        </div>

                      </li>
                    </ul>

                  </div>
                </section>
              </div>

            </div>



          </div>

        </div>

      </div>

    </section>


  </div>
</section>
<script type="module" src="assets/js/index.js?V....1215"></script>
<script>
  var splide1 = new Splide('#testi', {
    type: 'loop',
    perPage: 3,
    perMove: 1,
    autoplay: true,
    interval: 3000,
    pagination: true,

    focus: 'center',

  });

  splide1.mount();

 


  new Splide('.splide', {
    type: 'loop',
    drag: 'free',
    focus: 'center',
    pagination: false,
    perPage: 5,
    autoScroll: {
      speed: 1,
    },

    focus: "center",
  }).mount(window.splide.Extensions);




</script>