<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marck+Script&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


<style>
    .no-padding {
        padding-left: 0;
        padding-right: 0;
    }

    .bg-image {
        position: relative;
    }

    .bg-image img {
        position: absolute;
        left: 0;
        top: 0;

        z-index: -1;
    }

    .text-over-image {
        position: relative;
        z-index: 1;

        font-family: 'Lato';

        font-size: 60px;
        font-weight: bold;
        padding-left: 40px;


    }

    .button {
        background-color: black;

    }

    .button:hover {
        background-color: black;
    }

    .swiper-container {
        width: 100%;
        height: 500px;
       

    }

    .swiper-slide img {
        width: 100%;
        display: block;
    }

    .swiper-slide {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: #fff;
    }

    .swiper-slide img {
        display: block;
        width: 100%;
        height: auto;
    }

    @media screen and (max-width: 768px) {
        .ah {
            white-space: normal !important;
        }
    }

    h2 {
        font-family: 'Lato', sans-serif;
        font-size: 40px;
        font-weight: bold;
    }

    h2 span {
        font-family: 'Marck Script';
        color: #F78F1E;
        font-weight: 400;
    }

    .service-title {
        font-size: 26px;
        font-weight: 500;
        white-space: nowrap;
    }

    .service-description {
        text-align: left;
    }

    .service-image {
        height: auto;
        max-height: 85px;
        width: 89px;
    }

    @media (max-width: 768px) {
        h2 {
            font-size: 30px;
        }

        .service-title {
            font-size: 22px;
            white-space: normal;
        }
        .swiper-slide img {
        padding-right: 12% !important;
      }  
        .service-description {
            font-size: 14px;
        }

        .service-image {
            height: 42.5px !important;
            max-width: 45px !important;
        }

        .a {
            padding-top: 0 !important;
        }

        .welcome-text {
            font-size: 32px !important;
            padding-right: 56px;
        }

        .description-text {
            font-size: 16px;
        }
       
        .gud {
            margin-bottom: 0 !important;
        }
        .good img{
            top: 86% !important;
        }
        .un {
            margin: 0 auto !important;
            padding-right: 2rem !important;
            padding-left: 2rem !important;
            padding-top: 14px !important;
        }
        .gr {
            left: -20px !important;
            top: 47px !important;
        }
        .talk {
            font-size: 36px !important;
        }
        .talk span {
            font-size: 30px !important;
        }
        .usa {
            height: 145px !important;
            width: 150px !important;
        }
        .swiper-container {
        width: 100%;
        height: 200px;
       

    }

    }

    @media (max-width: 576px) {
        h2 {
            font-size: 25px;
        }

        .service-title {
            font-size: 18px;
            white-space: normal;

        }

        .service-description {
            font-size: 12px;
        }

        .service-image {
            height: 42.5px !important;
            max-width: 55px !important;
        }

        .a {
            padding-top: 0 !important;
        }
        .welcome-text {
            font-size: 32px !important;
            padding-right: 56px;
        }
        .talk {
            font-size: 36px !important;
        }
        .talk span {
            font-size: 30px !important;
        }
        .usa {
            height: 145px !important;
            width: 150px !important;
        }
        .swiper-container {
        width: 100%;
        height: 200px;
       

    }
    }

 .description-text {
    font-size: 18px;
    font-weight: 600;
    color: black;
    max-width: 800px;
    margin: 0 auto;
}
.swiper-button-next,
.swiper-button-prev {
    color: white; /* Set the text color to white for contrast */
    background-color: black; /* Set the background color to black */
    width: 30px; /* Set a fixed width */
    height: 30px; /* Set a fixed height */
    display: flex; /* Center the arrow inside */
    align-items: center; /* Center the arrow inside */
    justify-content: center; /* Center the arrow inside */
    border-radius: 50%; /* Make the button round */
    position: absolute;
    z-index: 10;
    cursor: pointer; /* Change cursor to pointer on hover */
    transition: transform 0.3s ease; /* Smooth transformation on hover */
}



.swiper-button-next {
    left: 90%;
    right: -6px !important;
    top: 68%;
    transform: rotate(90deg);
}

.swiper-button-prev {
    left: 90%;
    right: -6px !important;
    top: 38%;
    transform: rotate(90deg);
}
</style>


<section class="video-header">
    <video src="<?php echo base_url('assets/vids'); ?>/leisure.mp4" autoplay loop playsinline muted></video>
    <div class="viewport-header">
    <h1 class='top-heading'>
      LEISURE
      <span>Trips</span>
    </h1>
  </div>
</section>


<div class="container-fluid no-padding bg-image pt-5 pb-5 gud" style="margin-bottom:300px;margin-top:90vh;">
    <img src="assets/img/Ellipsels.png" style="width:280px;height:600px;padding:0 !important;" alt="Background Image">
    <div class="text-over-image text-center">
        <h2 class="welcome-text" style="font-size: 60px;font-weight:bold;font-family:'Lato';"> Welcome to Good Earth Travel Group</h2>
    </div>
    <div class="curved-text good">
        <img class="img-fluid" src="assets/img/curved text.png" alt="" style="left: 0; right: 0;top:40%;padding:0;">
    </div>
    <div class=" px-5">
    <div style="margin-bottom: -30px;">
        <p class="text-center description-text" style="font-family: 'Lato';font-size:18px;font-weight:600;color:black;text-align:justify !important;"> Where the art of travel meets the essence of indulgence. Prepare to be whisked away on a journey of discovery, where every destination is a masterpiece waiting to be explored. From the sun-drenched shores of tropical paradises to the rugged beauty of mountain retreats, our carefully curated selection of experiences invites you to immerse yourself in a world of leisure and luxury. Whether you're craving relaxation or seeking adrenaline-pumping  adventures, our diverse range of destinations offers something for every traveller.</p>
    </div>
    </div>
</div>






<section style="position: relative;">

    <div class="container pt-5 pb-5">

        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div style="position: relative;">
                    <div class="gr" style="position: absolute; top: 30px; left: -55px; width: 100px; height: 100px;">
                        <img src="assets/img/Group 27.png" alt="" style="height: 95px; width: 95px;">
                    </div>
                    <div class="text-end un">
                        <p style="font-family: 'Lato'; color: black; font-size: 18px; font-weight: 600;padding-top: 80px;">Unwind in luxurious accommodations, savour exquisite cuisine, and delve into the rich tapestry of cultures that await you. Let us be your guide as you traverse the globe, uncovering hidden gems and creating cherished memories along the way. With personalized itineraries tailored to your desires, is your gateway to unparalleled travel experiences. Join us as we redefine leisure travel and embark on a journey of discovery, one extraordinary destination at a time.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>









<section>

<div class="container pt-5 pb-5">
    <div class="row justify-content-around">
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/aus.png" class="img-fluid usa" alt="Image 1" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/nz.png" class="img-fluid usa" alt="Image 2" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/usa.png" class="img-fluid usa" alt="Image 3" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4 d-none d-md-block">
            <img src="assets/img/cards/can.png" class="img-fluid usa" alt="Image 4" style="height: 290px;width:238px;">
        </div>
    </div>
    <div class="row pt-4 justify-content-around">
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/uk.png" class="img-fluid usa" alt="Image 1" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/italy.png" class="img-fluid usa" alt="Image 2" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/france.png" class="img-fluid usa" alt="Image 3" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4 d-none d-md-block">
            <img src="assets/img/cards/spain.png" class="img-fluid usa" alt="Image 4" style="height: 290px;width:238px;">
        </div>
    </div>
    <div class="row pt-4 justify-content-around">
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/greece.png" class="img-fluid usa" alt="Image 1" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/turkey.png" class="img-fluid usa" alt="Image 2" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/sz.png" class="img-fluid usa" alt="Image 3" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4 d-none d-md-block">
            <img src="assets/img/cards/singapore.png" class="img-fluid usa" alt="Image 4" style="height: 290px;width:238px;">
        </div>
    </div>
    <div class="row pt-4 justify-content-around">
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/indonesia.png" class="img-fluid usa" alt="Image 1" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/japan.png" class="img-fluid usa" alt="Image 2" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/vietnam.png" class="img-fluid usa" alt="Image 3" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4 d-none d-md-block">
            <img src="assets/img/cards/phil.png" class="img-fluid usa" alt="Image 4" style="height: 290px;width:238px;">
        </div>
    </div>
    <div class="row pt-4 justify-content-around">
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/thai.png" class="img-fluid usa" alt="Image 1" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/uae.png" class="img-fluid usa" alt="Image 2" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4">
            <img src="assets/img/cards/africa.png" class="img-fluid usa" alt="Image 3" style="height: 290px;width:238px;">
        </div>
        <div class="col-md-3 col-4 d-none d-md-block">
            <img src="assets/img/cards/other.png" class="img-fluid usa" alt="Image 4" style="height: 290px;width:238px;">
        </div>
    </div>
</div>


</section>





<section style="background-color: white;">
    <div class="container text-center">
        <h2>We <span>Offer</span></h2>
        <div class="row justify-content-around text-start pt-5">
            <div class="col-md-4 col-6 row mb-4">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/11.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title">Best Destinations</h2>
                    <p class="service-description">Discover your dream destinations with us.</p>
                </div>
            </div>

            <div class="col-md-4 col-6 row mb-4">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/12.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title">Cruise Holidays</h2>
                    <p class="service-description">Set sail for adventure with our cruise holidays.</p>
                </div>
            </div>

            <div class="col-md-4 col-6 row mb-4">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/13.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title">Adventure Holidays</h2>
                    <p class="service-description">Embark on thrilling adventures with expert guides.</p>
                </div>
            </div>

            <div class="col-md-4 col-6 row mb-4 pt-5 a">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/14.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title">Best Experiences</h2>
                    <p class="service-description">Create unforgettable memories with our curated experiences.</p>
                </div>
            </div>

            <div class="col-md-4 col-6 row mb-4 pt-5 a">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/15.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title">Family Vacations</h2>
                    <p class="service-description">Make magical memories together on family-friendly getaways.</p>
                </div>
            </div>

            <div class="col-md-4 col-6 row mb-4 pt-5 a">
                <div class="col-4 ">
                    <img class="img-fluid service-image" src="assets/img/16.png" alt="">
                </div>
                <div class="col-8">
                    <h2 class="service-title" style="">Honeymoon Getaways</h2>
                    <p class="service-description">Celebrate love in paradise with our romantic retreats.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="pt-5 pb-5" style="background-color:white; position:relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-5">
                <h2 class="talk" style="color: #F78F1E;font-size:58px;font-family:'Marck Script';font-weight:500;">Talk<span style="color: black;font-size:48px; font-family:'Lato';font-weight:500;"> To us </span></h2>
                <p style="color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">To get started, simply reach out to us via phone, email, or WhatsApp with your travel requirements. Rest assured, our team will promptly respond to your inquiry and can even arrange a personalized meeting at your convenience. Let us take care of the details, so you can focus on enjoying your dream holiday</p>
                <a href="<?php echo base_url('Contact'); ?>">
                    <button class="btn " style="background-color: black;color:#fff;font-family:'Lato';">Lets Connect</button>
                </a>
            </div>
            <div class="col-md-8 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="swiper-container myVerticalSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="assets/photos/sw1.jpg" class="img-fluid" alt="Image 1"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw2.jpg" class="img-fluid" alt="Image 2"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw3.jpg" class="img-fluid" alt="Image 3"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw4.jpg" class="img-fluid" alt="Image 4"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw5.jpg" class="img-fluid" alt="Image 5"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw6.jpg" class="img-fluid" alt="Image 6"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw7.jpg" class="img-fluid" alt="Image 7"></div>
                        <div class="swiper-slide"><img src="assets/photos/sw8.png" class="img-fluid" alt="Image 8"></div>
                        <div class="swiper-slide"><img src="assets/photos/111.jpg" class="img-fluid" alt="Image 9"></div>
                        <div class="swiper-slide"><img src="assets/photos/112.jpg" class="img-fluid" alt="Image 10"></div>
                        <div class="swiper-slide"><img src="assets/photos/113.jpg" class="img-fluid" alt="Image 11"></div>
                        <div class="swiper-slide"><img src="assets/photos/114.jpg" class="img-fluid" alt="Image 12"></div>
                        <div class="swiper-slide"><img src="assets/photos/115.jpg" class="img-fluid" alt="Image 13"></div>
                        <div class="swiper-slide"><img src="assets/photos/116.jpg" class="img-fluid" alt="Image 14"></div>
                        <div class="swiper-slide"><img src="assets/photos/117.jpg" class="img-fluid" alt="Image 15"></div>
                        <div class="swiper-slide"><img src="assets/photos/118.jpg" class="img-fluid" alt="Image 16"></div>
                        <div class="swiper-slide"><img src="assets/photos/119.jpg" class="img-fluid" alt="Image 17"></div>
                        <div class="swiper-slide"><img src="assets/photos/110.jpg" class="img-fluid" alt="Image 18"></div>
                        <div class="swiper-slide"><img src="assets/photos/1111.jpg" class="img-fluid" alt="Image 19"></div>
                        <div class="swiper-slide"><img src="assets/photos/1112.jpg" class="img-fluid" alt="Image 20"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Swiper
        var swiper = new Swiper(".myVerticalSwiper", {
            direction: "vertical",
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            allowTouchMove: true,
            navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },   
            pagination: false,
            effect: "fade",
            fadeEffect: {
                crossFade: true
            },
            mousewheel: true, // Enable mousewheel control
        });

        // Custom GSAP effect for overlapping slides
        swiper.on('slideChangeTransitionStart', function() {
            let currentSlide = swiper.slides[swiper.activeIndex];
            let previousSlide = swiper.slides[swiper.previousIndex];

            gsap.fromTo(currentSlide, {
                opacity: 0
            }, {
                opacity: 1,
                duration: 1,
                ease: "power2.inOut"
            });

            gsap.fromTo(previousSlide, {
                opacity: 1
            }, {
                opacity: 0,
                duration: 1,
                ease: "power2.inOut"
            });
        });

        // Synchronize slider with scroll event using ScrollTrigger
        gsap.utils.toArray('.swiper-slide').forEach((slide, index) => {
            ScrollTrigger.create({
                trigger: slide,
                start: "top top",
                end: "bottom bottom",
                onEnter: () => swiper.slideTo(index),
                onEnterBack: () => swiper.slideTo(index)
            });
        });
    });
</script>