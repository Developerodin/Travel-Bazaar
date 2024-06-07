<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/5.0.0/imagesloaded.pkgd.min.js"
  integrity="sha512-kfs3Dt9u9YcOiIt4rNcPUzdyNNO9sVGQPiZsub7ywg6lRW5KuK1m145ImrFHe3LMWXHndoKo2YRXWy8rnOcSKg=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">  
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marck+Script&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


<style>

.header-custom {
    position: relative;
    height: 250px; /* Adjust height as needed */
    
   
    overflow: hidden;
}

.header-custom::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('assets/imgs/aust.png'); /* Replace with your background image path */
    background-size: cover;
    
    z-index: 1;
}

.header-custom h1 {
    position: relative;
    z-index: 2;
   
    padding: 10px;
    border-radius: 10px;
    text-align: center;
}

.content-custom {
    
    
    padding: 20px;
}

@media (max-width: 768px) {
    .header-custom {
        height: auto;
        padding: 20px;
    }

    .header-custom h1 {
        font-size: 1.2em;
    }
}



   .section-slideshow-container.s1{
  background-image: url(assets/image/aus/bgaus.jpg);
  padding: 0;
  margin: 0;
}
 .blog_btm {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 15px 20px;
    font-family: 'Playfair Display';
    font-size: 23px;
    font-weight: 600;
    line-height: 1.2;
    box-shadow: 0px 3px 5px 0px rgb(0 0 0 / 22%);
    letter-spacing: 0.5px;
    border-radius: 0 0 5px 5px;
}

.blog_content {
    display: flex;
    flex-direction: column;
    align-items: flex-start; /* Align children to the start (left side) */
    margin-bottom: 5px;
}

.blog_btn {
    margin-top: 10px; /* Add margin to separate from the name */
    font-size: 15px;
    text-transform: capitalize;
    font-family: 'Muli';
}
  .collection{
   
   padding-bottom: 50px;
   background-color: transparent;
   display: flex;
   justify-content: center;
   align-items: center;
}
.collection .content{
   height: 28rem;
   width: 25rem;
   background-color: white;
   border: .2rem solid rgba(255,255,255,.1);
   border-radius: .7rem;
   /* border-bottom: .4rem solid #0099ff;
   border-top: .4rem solid #0099ff;  */
   overflow: hidden;
   /* padding: .2rem; */
   
   
}

.content img{
   width: 100%;
   border-top: .5rem solid #fff;
   
}
.text-content{
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
}
.text-content h3{
   font-size: 1.7rem;
   font-weight: 500;
   color: black;
   margin-top: 15px;
}
.text-content p{
   max-width: 22rem;
   font-size: .8rem;
   font-weight: 400;
   text-align: center;
}
.btn{
   background-color: #0099ff;
   padding: .2rem;
   
   outline: none;
   font-size: .8rem;
   border-radius: .5rem;
   margin: 1rem 0;
   cursor: pointer;
}
  .splide__slide {
    margin-left: 10px;
  }

  .custom-modal-body {
    max-height: 400px;
    
    overflow-y: auto;
  }
  @media (max-width: 768px) {
    .tichead {
        font-size: 18px !important;
        margin-top: 4% !important;
        visibility: hidden;
    }

    .ticcon {
      padding-top: 30% !important;
        /* padding: 4% !important; */
        font-size: 11px !important; /* Adjust font size for better fit */
    }

    .tic {
        background-image: url('assets/imgs/aus-mobile.jpg') !important; /* Mobile background image */
        background-size: cover; /* Ensure the image covers the entire container */
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 20px;
        height: 100vh; /* Increase container height */
    }
    .collection .content{
      width: 22rem;
      height: 25rem;
    }
    .text-content h3 {
        font-size: 16px; 
    }
}

@media (max-width: 567px) {
    .tichead {
        font-size: 16px !important; /* Further reduce font size for smaller screens */
        margin-top: 4% !important;
        visibility: hidden;
    }

    .ticcon {
        padding-top: 30% !important;
        /* padding: 4% !important; */
        font-size: 11px !important; /* Further adjust font size */
    }

    .tic {
        background-image: url('assets/imgs/aus-mobile.jpg'); /* Mobile background image */
        background-size: cover; /* Ensure the image covers the entire container */
        background-repeat: no-repeat;
        background-position: center;
        border-radius: 20px;
        height: 100vh; /* Increase container height */
    }
    .collection .content{
      width: 22rem;
      height: 25rem;
    }
    .text-content h3 {
        font-size: 16px; 
    }
}  
.swiper-button-prev,
.swiper-button-next {
    color: white;
    background-color: black;
    border-radius: 50%;
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: absolute;
    bottom: 20px; /* Adjust the distance from the bottom as needed */
    z-index: 10;
}

.swiper-button-prev {
    left: 50%; /* Center horizontally */
    transform: translateX(-150%); /* Move it to the left */
    top:97%;
}

.swiper-button-next {
    right: 50%; /* Center horizontally */
    transform: translateX(150%); /* Move it to the right */
    top:97%;
}

.swiper-button-prev::after,
.swiper-button-next::after {
    font-size: 20px;
}
  
</style>
<section class="video-header">
  <video src="<?php echo base_url('assets/vids');?>/aus.mp4" autoplay loop playsinline muted></video>
  <div class="viewport-header">
    <h1 class='top-heading'>
      INFINITE
      <span>austrailia</span>
    </h1>
  </div>
</section>


<section style="margin-top:90vh;" class="ptb-60">
  
<div class="container tic" style=" background-image: url('assets/imgs/aust.png'); background-repeat: no-repeat;background-size:cover;background-position: center; border-radius: 20px;" >
    
        <div class="p-sm-5  p-md-3 p-lg-1 ptb-lg-2">
        <h6 class="text-center tichead"style="font-weight: 600;color:White;margin-top:7%;display:flex; align-items:flex-start;margin-left:5%;font-size:24px;">The limitless Australian experience </h6>        
        <div class="ticcon " style="font-weight: 400;font-family: 'Lato',sans-serif;padding:6%;padding-top:12px;">
        Get ready to embark on an unforgettable adventure in Australia! Each region boasts its own unique landscapes, wildlife, and stories. From vibrant cityscapes to pristine beaches, every trip to Australia offers a fresh perspective and creates lasting  memories. Planning your dream vacation is easier than ever. Imagine Australia like a captivating travel brochure - full of possibilities waiting to be torn out and brought to life. We at Good Earth Travel Group are your one-stop shop for crafting your perfect Australian itinerary.
         <br><br/>
         Think of us as the "stamp" that validates your passport for adventure. We'll help you navigate this incredible country, ensuring your trip is as diverse and dynamic as Australia itself. Browse our website for a glimpse into the endless possibilities that await you. Get a sneak peek at the stunning landscapes, unique wildlife encounters, and countless adventures that Australia has to offer.<br><br>
         We have curated 12 unique experiences which you should consider when travelling to Australia. Pick your desired experiences to help us ensure we incorporate them within the unique itineraries we create, tailored to your individual interests.<br/>
         Ready to take the plunge? Let Good Earth Travel Group be your guide as you explore the infinite wonders of Australia.<br> Welcome to a world of unforgettable experiences!
       </div>
       </div>
       
        
  
  
  </div>

  

</section>
<section style="background:#F7F2EE">

  <div class="container">
    <div class="row">
      <div class="col-sm-8 offset-sm-2">
        <br />
        <p class="text-center cursive">Discover the essence of Australia, a land of unparalleled experiences and
          breathtaking landscapes. Dive into its vibrant culture, iconic landmarks, and nature's untouched wonders</p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 95%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Natural Marvel F1.png');?>" alt="Description for Image 1"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
                <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">The Natural Marvels</b></p>
                <p style="font-weight: 500;">
                  “Explore the vast Australian Outback, characterized by its rugged landscapes, expansive deserts, and iconic landmarks such as Uluru (Ayers Rock) and Kata Tjuta (The Olgas). Witness the breathtaking beauty of the Great Barrier Reef, the world's largest coral reef system"
                </p>
                <button data-bs-toggle="modal" data-bs-target="#first-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
              </div>
          </div>
        </div>
      </div>
         <!-- modal -->
        <div class="modal fade" id="first-modal" tabindex="-1" aria-labelledby="first-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="first-modalLabel" style="color: #f78f1e;">The Natural Marvels</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
              Explore the vast Australian Outback, characterized by its rugged landscapes, expansive deserts, and iconic landmarks such as Uluru (Ayers Rock) and Kata Tjuta (The Olgas). Witness the breathtaking beauty of the Great Barrier Reef, the world's largest coral reef system, teeming with marine life and vibrant coral formations. Discover the stunning Blue Mountains, a UNESCO World Heritage site renowned for its dramatic scenery, including deep valleys, towering cliffs, and cascading waterfalls
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->



        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Luxury Travel.png');?>" alt="Description for Image 2"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
            <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Luxury Travel</b></p>
                <p style="font-weight: 500;">
                  “Embark on a private helicopter tour of Uluru and Kata Tjuta, enjoying panoramic views of these iconic landmarks before indulging in a gourmet picnic in the desert. Unwind in a luxury eco-retreat in the heart of the Blue Mountains, where secluded cabins and infinity pools.  "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#second-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

        <!-- modal -->
        <div class="modal fade" id="second-modal" tabindex="-1" aria-labelledby="second-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="second-modalLabel" style="color: #f78f1e">Luxury Travel</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Embark on a private helicopter tour of Uluru and Kata Tjuta, enjoying panoramic views of these iconic landmarks before indulging in a gourmet picnic in the desert. Unwind in a luxury eco-retreat in the heart of the Blue Mountains, where secluded cabins and infinity pools offer a tranquil escape surrounded by nature. Cruise the Kimberley coast aboard a luxury expedition yacht, exploring remote wilderness areas and ancient indigenous rock art sites in style and comfort. "
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Honeymoon Getaway F3.png');?>" alt="Description for Image 3"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Honeymoon Gateway</b></p>
                <p style="font-weight: 500;">
                  “Escape to the pristine beaches of the Whitsunday Islands, where luxury resorts offer seclusion and romance amidst crystal-clear waters and swaying palm trees. Retreat to a private villa in the heart of the Daintree Rainforest, where candlelit dinners and spa treatments await in a secluded tropical paradise.  "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#third-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>


         <!-- modal -->
         <div class="modal fade" id="third-modal" tabindex="-1" aria-labelledby="third-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="third-modalLabel" style="color: #f78f1e">Honeymoon Gateway</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Escape to the pristine beaches of the Whitsunday Islands, where luxury resorts offer seclusion and romance amidst crystal-clear waters and swaying palm trees. Retreat to a private villa in the heart of the Daintree Rainforest, where candlelit dinners and spa treatments await in a secluded tropical paradise. Cruise the Kimberley coast aboard a luxury yacht, exploring remote islands and hidden coves while enjoying world-class amenities and personalized service "
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Heritage.png');?>" alt="Description for Image 4"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Heritage</b></p>
                <p style="font-weight: 500;">
                  “Step back in time at Port Arthur Historic Site, a UNESCO World Heritage site that preserves the ruins of a former penal colony and offers insight into Australia's convict past. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#fourth-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>
          
            <!-- modal -->
        <div class="modal fade" id="fourth-modal" tabindex="-1" aria-labelledby="fourth-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="fourth-modalLabel" style="color: #f78f1e">Heritage</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Step back in time at Port Arthur Historic Site, a UNESCO World Heritage site that preserves the ruins of a former penal colony and offers insight into Australia's convict past. Explore the ancient rock art of Kakadu National Park, where Aboriginal heritage sites dating back thousands of years provide a glimpse into Australia's rich indigenous culture. Discover the historic charm of Australia's outback towns, where heritage buildings and museums offer a window into the country's pioneering spirit and colonial history."
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Exhibition F5.png');?>" alt="Description for Image 5"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Exhibition</b></p>
                <p style="font-weight: 500;">
                  “Immerse yourself in the vibrant arts scene of Melbourne, where galleries and museums showcase contemporary Australian art alongside international exhibitions. Discover indigenous culture and history at the Aboriginal Cultural Centre in Alice Springs, "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#five-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

         <!-- modal -->
         <div class="modal fade" id="five-modal" tabindex="-1" aria-labelledby="five-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="five-modalLabel" style="color: #f78f1e">Exhibition</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Immerse yourself in the vibrant arts scene of Melbourne, where galleries and museums showcase contemporary Australian art alongside international exhibitions. Discover indigenous culture and history at the Aboriginal Cultural Centre in Alice Springs, featuring exhibitions on traditional art, music, and storytelling. Explore the iconic Sydney Opera House, where world-class performances and exhibitions celebrate the intersection of art, architecture, and culture"
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Culinary and Wine F6.png');?>" alt="Description for Image 6"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Culinary & Wine</b></p>
                <p style="font-weight: 500;">
                  “Indulge in a culinary journey through Melbourne's vibrant food scene, where diverse cultures converge to create innovative and mouthwatering dishes. Sample award-winning wines in the renowned wine regions of Margaret River, Barossa Valley, and Hunter Valley, where vineyards sprawl across picturesque landscapes. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#six-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>
         
         <!-- modal -->
         <div class="modal fade" id="six-modal" tabindex="-1" aria-labelledby="six-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="six-modalLabel" style="color:#f78f1e">Culinary & Wine</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Indulge in a culinary journey through Melbourne's vibrant food scene, where diverse cultures converge to create innovative and mouthwatering dishes. Sample award-winning wines in the renowned wine regions of Margaret River, Barossa Valley, and Hunter Valley, where vineyards sprawl across picturesque landscapes. Experience farm-to-table dining in the fertile regions of Tasmania, where fresh seafood, artisanal cheeses, and organic produce take centre stage in gourmet cuisine"
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">        
          <img src="<?php echo base_url('assets/imgs/Postcards/Cafe and Coffee  F7.png');?>" alt="Description for Image 7"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Café & Coffee</b></p>
                <p style="font-weight: 500;">
                  “Savor the perfect cup of coffee at Melbourne's iconic laneway cafes, known for their expertly brewed espresso and cozy atmosphere. Explore Sydney's bustling café culture, where waterfront establishments offer stunning views of the harbor alongside artisanal coffee blends and delectable pastries. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#seven-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>
         
         <!-- modal -->
         <div class="modal fade" id="seven-modal" tabindex="-1" aria-labelledby="seven-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="seven-modalLabel" style="color: #f78f1e">Café & Coffee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Savor the perfect cup of coffee at Melbourne's iconic laneway cafes, known for their expertly brewed espresso and cozy atmosphere. Explore Sydney's bustling café culture, where waterfront establishments offer stunning views of the harbor alongside artisanal coffee blends and delectable pastries. Discover hidden gems in Adelaide's hip neighbourhoods, where local roasteries and specialty coffee shops serve up unique brews and laid-back vibes"
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Beach Paradise F8.png');?>" alt="Description for Image 8"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Beach Paradise</b></p>
                <p style="font-weight: 500;">
                  “Relax on the pristine white sands of Whitehaven Beach, consistently ranked among the world's best beaches for its pure silica sand and turquoise waters. Dive or snorkel in the crystal-clear lagoons of the Ningaloo Coast, where vibrant coral reefs and marine life await just steps from the shore. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#eight-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>
        
         <!-- modal -->
         <div class="modal fade" id="eight-modal" tabindex="-1" aria-labelledby="eight-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="eight-modalLabel" style="color: #f78f1e">Beach Paradise</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Relax on the pristine white sands of Whitehaven Beach, consistently ranked among the world's best beaches for its pure silica sand and turquoise waters. Dive or snorkel in the crystal-clear lagoons of the Ningaloo Coast, where vibrant coral reefs and marine life await just steps from the shore. Explore the secluded bays and hidden coves of Tasmania's Freycinet Peninsula, where tranquil beaches offer solitude and serenity in a stunning natural setting."
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->

        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Adventure and Outdoor F9.png');?>" alt="Description for Image 9"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Adventure & Outdoor</b></p>
                <p style="font-weight: 500;">
                  “Embark on a thrilling surfing adventure along the Gold Coast, known for its world-class waves and vibrant surf culture. Challenge yourself with a trek through the rugged terrain of Tasmania's Cradle Mountain, offering spectacular views and opportunities for bushwalking and wildlife spotting. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#nine-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

         <!-- modal -->
         <div class="modal fade" id="nine-modal" tabindex="-1" aria-labelledby="nine-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="nine-modalLabel" style="color: #f78f1e">Adventure & Outdoor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Embark on a thrilling surfing adventure along the Gold Coast, known for its world-class waves and vibrant surf culture. Challenge yourself with a trek through the rugged terrain of Tasmania's Cradle Mountain, offering spectacular views and opportunities for bushwalking and wildlife spotting. Explore the Outback on a camel safari or four-wheel drive expedition, immersing yourself in the remote wilderness and endless horizons of the Australian interior."
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
        
        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Wildlife F10.png');?>" alt="Description for Image 10"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Wildlife</b></p>
                <p style="font-weight: 500;">
                  “Get up close and personal with kangaroos, koalas, and other native wildlife at wildlife sanctuaries and conservation parks scattered throughout Australia. Dive with whale sharks and manta rays on Ningaloo Reef, one of the few places in the world where you can swim alongside these majestic creatures in their natural habitat. "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#ten-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

         <!-- modal -->
         <div class="modal fade" id="ten-modal" tabindex="-1" aria-labelledby="ten-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="ten-modalLabel" style="color: #f78f1e">Wildlife</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Get up close and personal with kangaroos, koalas, and other native wildlife at wildlife sanctuaries and conservation parks scattered throughout Australia. Dive with whale sharks and manta rays on Ningaloo Reef, one of the few places in the world where you can swim alongside these majestic creatures in their natural habitat. Witness the mesmerizing spectacle of thousands of penguins waddling ashore at Phillip Island, a magical experience for nature lovers of all ages."
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
       
        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Urban Lifestyle.png');?>" alt="Description for Image 11"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Urban Lifestyle</b></p>
                <p style="font-weight: 500;">
                  “Experience the vibrant nightlife of Sydney, where rooftop bars, live music venues, and world-class restaurants come alive against the backdrop of the iconic Harbour Bridge and Opera House. Explore the eclectic neighbourhoods of Melbourne.  "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#elevan-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

         <!-- modal -->
         <div class="modal fade" id="elevan-modal" tabindex="-1" aria-labelledby="elevan-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="elevan-modalLabel" style="color: #f78f1e">Urban Lifestyle</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Experience the vibrant nightlife of Sydney, where rooftop bars, live music venues, and world-class restaurants come alive against the backdrop of the iconic Harbour Bridge and Opera House. Explore the eclectic neighbourhoods of Melbourne, from the bohemian streets of Fitzroy to the trendy laneways of Collingwood, where local cafes, boutique shops, and street art thrive. Wander through the bustling markets of Adelaide, where artisanal crafts, gourmet food stalls, and live music create a lively atmosphere beloved by locals and visitors alike. "
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
        
        <div class="col-md-4 col-sm-12  grid-container" id="masonry-grid">
        <div class="grid-item" style="width: 100%;">
          <img src="<?php echo base_url('assets/imgs/Postcards/Sports.png');?>" alt="Description for Image 12"
            class="img-sports">
          <div class="caption" style="background-color: #cccccc73;font-weight: 500;">
          <div>
          <p class="m-0"><b class="pb-3 " style="font-weight: 700;font-size: 16px;">Sports</b></p>
                <p style="font-weight: 500;">
                  “Immerse yourself in the excitement of AFL matches at iconic stadiums like the MCG and Adelaide Oval, where fast-paced action and passionate fans make for an unforgettable experience. Experience the thrill of cricket in Australia, whether it's attending a test match at the SCG or joining a casual game at a local park, cricket is ingrained in Australian culture.  "
                </p>
                <button data-bs-toggle="modal" data-bs-target="#twelve-modal" style="border: none;background-color:transparent;color:#000;display:flex;justify-content: start;">Read More...</button>
                </div>
          </div>
        </div>
      </div>

         <!-- modal -->
         <div class="modal fade" id="twelve-modal" tabindex="-1" aria-labelledby="twelve-modalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered " style="">
            <div class="modal-content" style="border: 1px solid black; background-color: white;font-family: 'Lato', sans-serif;">
              <div class="modal-header">
                <h5 class="modal-title" id="twelve-modalLabel" style="color: #f78f1e;">Sports</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body custom-modal-body" style="font-family: 'Lato';">
                “Immerse yourself in the excitement of AFL matches at iconic stadiums like the MCG and Adelaide Oval, where fast-paced action and passionate fans make for an unforgettable experience. Experience the thrill of cricket in Australia, whether it's attending a test match at the SCG or joining a casual game at a local park, cricket is ingrained in Australian culture. Catch the action at the Australian Open, one of the four Grand Slam tournaments, where tennis greats compete for glory on the hard courts of Melbourne Park. "
              </div>
              <div class="modal-footer d-flex justify-content-center">
                <button type="button" class="btn btn-lg  " data-bs-dismiss="modal" style="background-color: #f78f1e;color:#fff;border:none;border-radius:4px;">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->


      <!-- </div> -->
    </div>

  </div>
</section>

<section class="section-slideshow-container s1" style="padding: 0;">

      <div class="row">
        <div class="col-sm-12">
          <h2 class="text-center " style="color:white;padding-top:50px;">Australia Highlights</h2>
        </div>
      </div>

     
        <section class="collection" style="">
  
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
  <div class="content swiper-slide">
    <img src="assets/image/aus/Melbourne city.jpg" alt="">
    <div class="text-content">
      <h3>Melbourne City </h3>
      <p>Experience the vibrant heart of Australia's cultural capital, Melbourne City. Marvel at iconic landmarks like Federation Square and Flinders Street Station. Delight in eclectic laneways, renowned dining scenes, and world-class shopping.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Great ocean road.jpg" alt="">
    <div class="text-content">
      <h3>Great Ocean Road </h3>
      <p>Discover breath-taking coastal vistas along Australia's Great Ocean Road, Melbourne's iconic scenic drive. Explore rugged cliffs, pristine beaches, and the famed Twelve Apostles rock formations. Embark on an unforgettable journey through nature's wonders</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Melbourne cricket ground.jpg" alt="">
    <div class="text-content">
      <h3>Melbourne Cricket Ground</h3>
      <p>Discover the sporting soul of Melbourne at the iconic MCG. Immerse yourself in cricketing history with tours of this hallowed ground. Witness thrilling matches, concerts, and events. Feel the electric atmosphere that makes the MCG a must-visit destination for sports enthusiasts worldwide</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Yarra valley.jpg" alt="">
    <div class="text-content">
      <h3>Yarra Valley Vineyards</h3>
      <p> Indulge in world-class wines amid stunning landscapes in Melbourne's Yarra Valley. Experience cellar door tastings at renowned wineries, savour gourmet cuisine, and soak in the valley's picturesque beauty. Unwind with leisurely vineyard tours and tastings, offering a taste of Australia's finest wine culture</p>
    
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Philip Island.jpg" alt="">
    <div class="text-content">
      <h3>Phillip Island & Penguin Parade </h3>
      <p>Escape to the natural wonders of Phillip Island, just a short drive from Melbourne. Witness the famous Penguin Parade, stroll along pristine beaches, and encounter adorable koalas at the Koala Conservation Centre</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Puffing billy.jpg" alt="">
    <div class="text-content">
      <h3>Puffing Billy </h3>
      <p>Discover the enchanting Puffing Billy steam train in Melbourne. Journey through lush forests and over historic bridges on this century-old railway. Marvel at breathtaking scenery as you traverse the Dandenong Ranges.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Peninsula Hot Springs.jpg" alt="">
    <div class="text-content">
      <h3>Peninsula Hot Springs  </h3>
      <p>Experience pure relaxation at Peninsula Hot Springs in Melbourne. Nestled amidst stunning natural landscapes, indulge in thermal mineral waters, rejuvenating spa treatments, and tranquil bathing experiences. Immerse yourself in serenity and unwind in this idyllic haven for body and soul.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Sydney city.jpg" alt="">
    <div class="text-content">
      <h3>Sydney City  </h3>
      <p>Discover Sydney's dynamic heart. Wander vibrant neighbourhoods, dine at world-class restaurants, and shop along bustling streets. Visit iconic landmarks like the Sydney Harbour Bridge and Bondi Beach. Immerse yourself in culture with art galleries, theatres, and lively nightlife, all in Australia's cosmopolitan gem</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Sydney harbour.jpg" alt="">
    <div class="text-content">
      <h3>Sydney Harbour  </h3>
      <p>Uncover the beauty of Sydney's iconic harbor, with the Sydney Opera
                        House and Sydney Harbor Bridge as its centerpieces. Take a ferry ride, go on a harbor cruise, or
                        simply enjoy a leisurely stroll along its shores.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Sydney cruise dinner.jpg" alt="">
    <div class="text-content">
      <h3>Sydney Opera House  </h3>
      <p>Experience architectural splendor at the Sydney Opera House, an iconic symbol of Australia. Take a guided tour to uncover its fascinating history and marvel at its stunning design. </p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Blue mountains.jpg" alt="">
    <div class="text-content">
      <h3>Blue Mountains </h3>
      <p>Escape to the breath-taking Blue Mountains near Sydney. Explore ancient forests, stunning waterfalls, and dramatic cliffs. Embark on scenic hikes, discover charming villages, and ride the thrilling Scenic Railway. Immerse yourself in nature's grandeur just a short journey from Sydney's bustling cityscape.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Hunter valley.jpg" alt="">
    <div class="text-content">
      <h3>Hunter Valley Vineyards </h3>
      <p>Discover the exquisite Hunter Valley Vineyards near Sydney. Delight in wine tasting tours amidst picturesque landscapes, sampling award-winning wines from renowned wineries. Indulge in gourmet food pairings, scenic vistas, and unforgettable experiences in Australia's oldest wine region</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Sydney harbour bridge climb.jpg" alt="">
    <div class="text-content">
      <h3>Sydney Harbour Bridge Climb  </h3>
      <p>Embark on the ultimate adventure with the Sydney Harbour Bridge Climb. Scale the iconic steel arches for unparalleled panoramic views of Sydney's skyline and harbour. With expert guides leading the way, experience a thrilling journey to the summit, creating memories to last a lifetime</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Gold coast Theme park.jpg" alt="">
    <div class="text-content">
      <h3>Theme Parks </h3>
      <p>Experience adrenaline-fueled fun at Gold Coast's theme parks. Dive into thrills at Dreamworld, meet marine life at Sea World, and ride the waves at Wet'n'Wild. Enjoy family-friendly entertainment, exciting rides, and unforgettable adventures in Australia's ultimate playground.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Hot air balloon.jpg" alt="">
    <div class="text-content">
      <h3>Hot Air Ballooning  </h3>
      <p>Float above the stunning landscapes of Gold Coast with hot air ballooning. Marvel at sunrise vistas of beaches, hinterlands, and skyline. Experience tranquillity and exhilaration as you soar above Queensland's beauty. An unforgettable adventure awaits, offering breath-taking views and lifelong memories</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Sky diving.jpg" alt="">
    <div class="text-content">
      <h3>Sky Diving  </h3>
      <p>Dive into the ultimate adrenaline rush with skydiving in Gold Coast. Freefall from breath-taking heights above stunning coastal views. Experience the thrill of a lifetime with certified instructors and top-notch safety standards. Make your Gold Coast visit unforgettable with this exhilarating adventure</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Whale watching.jpg" alt="">
    <div class="text-content">
      <h3>Whale Watching  </h3>
      <p>Embark on a captivating whale watching adventure off the Gold Coast. Witness majestic humpback whales on their annual migration, breaching and playing in the sparkling waters. Experience unforgettable encounters with these gentle giants amidst stunning coastal scenery, creating cherished memories for a lifetime</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Aqua duck.jpg" alt="">
    <div class="text-content">
      <h3>Aqua Duck Tour </h3>
      <p>Embark on a unique amphibious adventure with the Aqua Duck Tour in Gold Coast. Cruise through the city streets before splashing into the sparkling waters, all aboard an iconic amphibious vehicle. Enjoy entertaining commentary and breathtaking views, making this a memorable experience for all ages.</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Water sports.jpg" alt="">
    <div class="text-content">
      <h3>Gold Coast Water Sports  </h3>
      <p>Experience the thrill of Gold Coast Water Sports with a range of exciting activities. From jet skiing and parasailing to paddleboarding and kayaking, there's something for everyone. Dive into adventure on the pristine waters of the Gold Coast, creating unforgettable memories and exhilarating moments.
</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/great barrier reef.jpg" alt="">
    <div class="text-content">
      <h3>Great Barrier Reef   </h3>
      <p>Dive into the world's largest coral reef system, the Great Barrier Reef, from Cairns. Explore vibrant underwater ecosystems teeming with marine life. Snorkel or dive among colourful coral gardens, swim with exotic fish, and witness the awe-inspiring beauty of this natural wonder, a UNESCO World Heritage site.
</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/Kuranda national park.jpg" alt="">
    <div class="text-content">
      <h3>Kuranda National Park   </h3>
      <p>Embark on a thrilling journey through the rainforest canopy aboard Kuranda National Park Sky Rail in Cairns. Glide over lush foliage, cascading waterfalls, and panoramic vistas. Immerse yourself in ancient landscapes and wildlife wonders on this unforgettable eco-adventure, a must-do experience in Tropical North Queensland.
</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/rain.jpg" alt="">
    <div class="text-content">
      <h3>The Daintree Rainforest </h3>
      <p>Experience the ancient wonders of the Daintree, one of
                        the world's oldest rainforests. Encounter unique flora and fauna, including the elusive
                        cassowary, and explore Mossman Gorge's pristine beauty.
</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/ul.jpg" alt="">
    <div class="text-content">
      <h3>Uluru   </h3>
      <p> Witness the mesmerizing sunrise and sunset over this iconic
                        sandstone monolith. Explore the surrounding Kata Tjuta formations and learn about the rich
                        Indigenous history of the area.
</p>
      
    </div>
  </div>
  <div class="content swiper-slide">
    <img src="assets/image/aus/city/2.jpg" alt="">
    <div class="text-content">
      <h3>Perth  </h3>
      <p> Discover the laid-back charm of Perth, where beautiful beaches meet a
                        burgeoning culinary and arts scene. Enjoy the stunning views along the Swan River and explore
                        nearby wine regions.
</p>
      
    </div>
  </div>
</div>
</div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>

</section>
          



        

    
</section>

<section class="maindiv" >
  <section class="blog_outer">
    <div class="container">
      <div class="blog_titl" style="font-family: 'Lato';">
        <span style="font-family: 'Marck Script';color:#f78f1e;font-size:38px;">Tour </span>
        Best Places Of Australia
      </div>
      <div class="blog_sec">
        <div class="row">
          
        <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Incredible_Australia.jpg">
                
              </div>
              <div class="blog_btm">
    <div class="blog_content">
        <div class="blog_name" style="font-size: 20px;">
            <em><span style="color: #f78f1e; font-style: normal; font-family:'Lato';">Incredible Australia</span><br/> 13 days & 12 nights</em>
        </div>
        <div class="blog_btn">
            <a href="assets/pdf/Incredible_Australia.pdf" download="" target="_blank" rel="noopener noreferrer">
                <i class="fa fa-download"></i> Download Itinerary
            </a>
        </div>
    </div>
    <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Australia_Honeymooning.png">
                
              </div>
              <div class="blog_btm">
              <div class="blog_content">
                <div class="blog_name" style="font-size: 20px;"><em><span style="color: #f78f1e;font-style: normal;font-family:'Lato';">Australia Honeymooning </span> <br/> 11 days & 10 nights</em></div>
                <div class="blog_btn"><a href="assets/pdf/Australia_Honeymooning.pdf" download="" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>
                    Download Itinerary</a>
                </div>
              </div>
              <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Grand_Australian_Experience.jpg">
                
              </div>
              <div class="blog_btm">
              <div class="blog_content">
                <div class="blog_name" style="font-size: 20px;"><em><span style="color: #f78f1e;font-style: normal;font-family:'Lato';width:120%;white-space: nowrap;">Grand Australian Experience </span> <br/> 21 days & 20 nights</em></div>
                <div class="blog_btn"><a href="assets/pdf/Grand_Australian_Experience.pdf" download="" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>
                    Download Itinerary</a>
                </div>
              </div>
              <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Treasures_Of_Tasmania.jpg">
                
              </div>
              <div class="blog_btm">
              <div class="blog_content">
                <div class="blog_name" style="font-size:20px;"><em><span style="color: #f78f1e;font-style: normal;font-family:'Lato';">Treasures Of Tasmania </span><br/> 9 days & 8 nights</em></div>
                <div class="blog_btn"><a href="assets/pdf/Treasures_Of_Tasmania.pdf" download="" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>
                    Download Itinerary</a>
                </div>
              </div>
              <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Gold_Coast_&_Scenic_Pacific_Coast.jpg">
               
              </div>
              <div class="blog_btm">
              <div class="blog_content">
                <div class="blog_name" style="font-size: 20px;"><em><span style="color: #f78f1e;font-style: normal;font-family:'Lato';">Gold Coast & Pacific Coast </span> <br/> 9 days & 8 nights </em></div>
                <div class="blog_btn" style=""><a href="assets/pdf/Gold_Coast_&_Scenic_Pacific_Coast.pdf" download="" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>
                    Download Itinerary</a>
                </div>
              </div>
              <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <div class="blog_cont">
              <div class="blog_img">
                <img class="p-0" src="assets/img/Great_Southern_Touring.jpg">
               
              </div>
              <div class="blog_btm">
              <div class="blog_content">
                <div class="blog_name" style="font-size: 20px;"><em><span style="color: #f78f1e;font-style: normal;font-family:'Lato';">Great Southern Touring </span> <br/> 6 days & 5 nights </em></div>
                <div class="blog_btn" style=""><a href="assets/pdf/Great_Southern_Touring.pdf" download="" target="_blank" rel="noopener noreferrer"><i class="fa fa-download"></i>
                    Download Itinerary</a>
                </div>
              </div>
              <div class="logo_image">
        <img class="img-fluid" src="assets/img/gelogo.png" alt="Logo" style="height:75px; width:50px;">
    </div>
</div>
            </div>
          </div>


        </div>

      </div>
    </div>
    </div>
  </section>
</section>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
  $(document).ready(function () {
    var elem = document.querySelector('#masonry-grid');
    imagesLoaded(elem, function () {
      var msnry = new Masonry(elem, {
        // options
        itemSelector: '.grid-item',
        columnWidth: '.grid-item',
        percentPosition: true
      });
    });

    const sliders = document.querySelectorAll('.splide');
    sliders.forEach(slider => {
      new Splide(slider, {
        type: 'loop',
        perPage: 2,
        perMove: 1,
        autoplay: true,
      }).mount();
    })
  })

</script>
<script>
 var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    loop: true,
    slidesPerView: "auto",
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 150,
        modifier: 2.5,
        slideShadows: true,
    },
    autoplay: {
        delay: 3000,
        disableOnInteraction: true,
    },
    // Remove pagination
    pagination: {
        el: null,
    },
    // Add navigation
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});

</script>