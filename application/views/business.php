<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Marck+Script&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />


<style>
    .rounded-video {
        border-radius: 38px;
        overflow: hidden;
        border: 2px solid #ccc;
    }



    .d-flex.align-items-start img {
        margin-top: 0;
        /* Reset any existing margin */
        align-self: flex-start;

    }

    .abt_txt {
        color: #515151;
        font-weight: 400;
        line-height: 1.7;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        max-width: 100%;
        margin: auto;
        text-align: start;
        background-color: #fcfaee;

    }

    .img_mask {
        -webkit-mask-image: url(assets/imgs/mask-image.png);
        mask-image: url(assets/imgs/mask-image.png);
        -webkit-mask-position: top left;
        mask-position: top left;
        -webkit-mask-size: cover;
        mask-size: cover;
        -webkit-mask-repeat: no-repeat;
        mask-repeat: no-repeat;
    }

    .place_name1 {
        position: absolute;
        bottom: 17px;
        left: 10px;
        font-family: 'Playfair Display';
        font-size: 26px;
        color: #fff;
        line-height: 1;
        width: 100%;
    }

    .fa-star {
        color: #db3918;
    }

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

        font-size: 180px;
        font-weight: bold;
        padding-left: 60px;


    }

    .button {
        background-color: black;

    }

    .button:hover {
        background-color: black;
    }

    img.busin {
        max-width: 600px !important;
        padding-left: 2% !important;
        padding-right: 2% !important;
        width: 100% !important;
        margin: 0 auto !important;
    }

    .slide-content {
        position: absolute;
        top: 35%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        color: white;
        z-index: 1;

    }

    .slide-content h3 {
        font-size: 24px;
        margin-bottom: 20px;
    }

    .slide-content p {
        font-size: 16px;
    }

    .splide__slide img {
        width: 100%;
    }

    @media screen and (max-width: 1200px) {
        .good {
            position: absolute;
            right: 5%;
            top: 80%;
        }
    }

    .swiper-container {
        width: 100%;
        height: 500px;
        
    }

    .swiper-slide img {
        width: 100%;
        display: block;
    }

    @media screen and (max-width: 768px) {
        .lady {
            padding-bottom: 0 !important;
        }

        .lady img {
            margin-top: 5% !important;

        }

        .at {
            margin-right: 0 !important;
        }

        .we {
            padding-left: 10px !important;
            font-size: 16px !important;
            padding-top: 30px !important;
        }
        .wl {
            padding-top: 145px !important;
        }

        /* .ge {
            margin-bottom: 0 !important;
        } */

        .mc span {
            font-size: 50px !important;
        }

        .dot {
            visibility: hidden;
        }

        .rounded-video {
            width: 365px;
            height: 250px;

        }

        .vs {
            padding-top: 60px;

        }

        .ct {
            margin-left: 0 !important;

        }

        .ej {
            margin-left: 0 !important;
        }
        .swiper-container {
        width: 100%;
        height: 200px;
        
    }


    }

    @media (max-width: 768px) {
        .h2 {
            font-size: 25px !important;
        }

        .bg-image {
            margin-top: 50vh;
        }

        .text-over-image {
            padding-top: 20px;
            font-size: 70px;
            margin-left: 0;
        }

        .ct {
            font-size: 32px;
            margin-top: 10px;
            margin-left: 0 !important;

        }

        .ej {
            font-size: 32px;
            margin-top: 12px;
            margin-left: 0 !important;
            text-align: center;
        }

        .good {
            top: 10% !important;
            left: 70%;
        }

        .good img {
            height: 24px;
            width: 24px;
        }

        /* .weoffer {
            display: none;
        } */
        .bg-image img {
            margin-top: 10% !important;
            width: 120px !important;
            height: 100% !important;
        }

        .navigate {
            font-size: 25px !important;
            color: black !important;
            padding-top: 25px !important;
            padding-bottom: 25px !important;
        }

        .whatwe {
            font-size: 32px !important;
        }

        .goodearth {
            margin-top: 28% !important;
            font-size: 23px !important;
        }
        .background-image-container {
            height: auto !important;
            background-size: auto;
        }

        .mice {
            font-size: 36px !important;
            padding-top: 40px !important;
        }
        .order-sm-1 {
            padding-top: 0 !important;
        }

        .explore {
            font-size: 36px !important;
        }

        .explore span {
            font-size: 36px !important;
        }
        .success {
            padding-top: 0 !important;
        }
    .with {
            margin-top: 0 !important;
        } 
      .swiper-slide img {
        padding-right: 12% !important;
      }  
    }

    @media (max-width: 576px) {
        .where {
            margin-top: 30px !important;
        }
        .navigate {
            font-size: 25px !important;
            padding-top: 25px !important;
            padding-bottom: 25px !important;
            color: black;
        }

        .bg-image {
            margin-top: 20vh;
        }

        .bg-image img {
            margin-top: 10% !important;
            width: 120px !important;
            height: 100% !important;
        }

        .text-over-image {
            padding-top: 10px;
            font-size: 70px;
            margin-left: 0 !important;
            padding-left: 5px !important;
        }

        .ct {
            font-size: 24px !important;
            margin-top: 2px !important;
            margin-left: 0 !important;
        }

        .ej {
            font-size: 24px !important;
            margin-top: 2px !important;
            margin-left: 0 !important;
        }

        .good {
            top: 10% !important;
            left: 50%;
        }

        .good img {
            height: 24px !important;
            width: 24px !important;
        }

        .lady img {
            margin-top: 5% !important;

        }

        .whatwe {
            font-size: 32px !important;
        }

        .goodearth {
            margin-top: 28% !important;
            font-size: 23px !important;
        }

        .mice {
            font-size: 36px !important;
        }

        .explore {
            font-size: 36px !important;
        }

        .explore span {
            font-size: 36px !important;
        }

        .background-image-container {
            height: auto !important;
            background-size: auto !important;
        }

        .icon {
            width: 60px !important;
            height: 60px !important;
        }

        .nowrap {
            white-space: normal !important;
        }
        .swiper-container {
        width: 100%;
        height: 200px;
       
        
    }
    .success {
            padding-top: 0 !important;
        }
    .with {
            margin-top: 0 !important;
        }      
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
    top: 60%;
    transform: rotate(90deg);
}

.swiper-button-prev {
    left: 90%;
    right: -6px !important;
    top: 30%;
    transform: rotate(90deg);
}




</style>
<section class="video-header">
    <video src="<?php echo base_url('assets/vids'); ?>/business.mp4" autoplay loop playsinline muted></video>
    <div class="viewport-header">
        <h1 class='top-heading'>
            TRAVEL FOR
            <span>Business</span>
        </h1>
    </div>
</section>



<div class="container-fluid no-padding bg-image" style="position:relative;margin-top:90vh;">
    <img src="assets/img/Side.png" style="width:280px;height:600px;padding:0 !important" alt="Background Image">
    <div class="text-over-image" style="padding-top:50px;background: linear-gradient(to bottom,#F89424 61%, #FEDA53 90%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;font-family:'inter';font-weight:700;">
        Elevating
    </div>

    <div class="text-center ct" style="font-size: 72px;margin-top:-20px;margin-left:-100px;font-family:inter;">
        <span style="background: linear-gradient(to right, #F99120 40%, #060606 90%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;font-family:inter;">
            corporate
        </span> travel experiences,
    </div>
    <div class="ej" style="position: relative; font-size: 72px; margin-top:-20px; margin-left:350px; font-family:inter; text-align: center;">
        every journey
        <div style="position: relative; display: inline-block;">
            <span style="background: linear-gradient(to left, #F99120 40%,#060606 90%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent; font-family:inter;">
                counts
            </span>
            <div class="good" style="position: absolute; top: 40%; left: 90%; height:100px; width:100px; padding:0; margin:0;">
                <img class="img-fluid" src="assets/img/Frame.png" alt="" style="height: 70px; width: 70px; padding:0; margin:0;">
            </div>
        </div>
    </div>
</div>




<section class="mb-5 where" style="margin-top: 100px;">
    <div class="background-image-container" style="background-image: url('assets/img/Ellipse123.jpg');
        background-size: cover;
        
        background-repeat: no-repeat;
        
        height: 2400px;">
        <div class="container mt-20 we" style="padding-left: 120px;">
            <p class="text-start wl" style="padding-top:200px ;color:#fff;font-size :18px;font-weight:600; text-align: justify !important;">Welcome to Good Earth Travel Group, where corporate travel isn't just about reaching a destination – it's about elevating every aspect of the journey. With a steadfast commitment to excellence, we specialize in crafting tailored solutions designed to meet the unique needs of your business. From coordinating logistics to providing personalized service, we're dedicated to ensuring that your travel experiences are seamless, efficient, and memorable. <br /> <br />
                Backed by a global network of trusted partners and a team of seasoned professionals, we offer unparalleled expertise in navigating the complexities of corporate travel. Whether you're planning a series of meetings across continents or organizing a team-building retreat in a remote locale, we're here to make it happen with precision and finesse. </p>
        </div>
        <div class="heading  success" style="padding-top: 100px;">
            <h2 class="text-center navigate" style="color:#fff;font-size :60px;font-weight:400;">NAVIGATE SUCCESS, <br /> TRAVEL WITH CONFIDENCE</h2>



        </div>

        <div class="container with" style="margin-top: 80px;">
            <div class="row justify-content-around ">
                <div class="col-md-4 col-lg-5 at" style="margin-right: -70px;padding-top:10px;">
                    <p class="mb-0" style="font-weight: 600;font-size:18px;font-family:'Lato';"> At GETG, we understand the importance of seamless and efficient business travel. Whether you're attending conferences, meeting clients, or exploring new opportunities, we specialize in providing tailored solutions to meet the unique needs of corporate travellers. <br /><br />GETG is member of the Helloworld Group, the largest network of independent franchised travel agents in Australia, with over 2,000 offices this ensures the best buying power in the industry.</p>
                </div>
                <div class="col-md-4 col-lg-4 lady" style="width:400px;height:400px;padding-bottom:40px;">
                    <img src="assets/img/Lady.png" class="img-fluid" alt="Image" style="margin-top: -40px;padding-bottom:40px;">
                </div>
            </div>
        </div>
        <div class="container pb-3 text-center weoffer" style="margin-top: 60px;">
            <h2 class="pb-5 whatwe" style="font-size:60px;">WHAT WE OFFER</h2>
            <div class="row justify-content-around text-start mt-4">

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/Manage.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Corporate Travel Management</h2>
                        <p style="font-size: 15.5px;text-align: center;">Streamlined travel arrangements, smooth logistics & maximum productivity.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/1.png" style="width:90px;height:90px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;">Customized Itineraries</h2>
                        <p style="font-size: 15.5px;text-align: center;">Personalized itineraries tailored to your schedule, budget, and travel objectives.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/Star.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Premium Accommodation Options</h2>
                        <p style="font-size: 15.5px;text-align: center;">From luxury hotels with state-of-the-art amenities to convenient business.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/7.png" style="width:90px;height:90px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Travel Policy Compliance</h2>
                        <p style="font-size: 15.5px;text-align: center;">We ensure compliance, optimize expenses, maintain transparency, and enhance efficiency in travel bookings.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/Passport.png" style="width:80px;height:80px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Visa and Passport Assistance</h2>
                        <p style="font-size: 15.5px;text-align: center;">We streamline your application process and handle all necessary documentation for seamless travel.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/6.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Loyalty Program Management</h2>
                        <p style="font-size: 15.5px;text-align: center;">We help you optimize your loyalty memberships, accrue points, and redeem rewards for future travel benefits.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/Air.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Executive Transportation Services</h2>
                        <p style="font-size: 15.5px;text-align: center;">Experience stylish and comfortable executive transportation for seamless navigation in your destination.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/3.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;">24/7 Support</h2>
                        <p style="font-size: 15.5px;text-align: center;">24/7 support, automated updates, and expert guidance ensure peace of mind for all your travel needs.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-6 d-flex align-items-center justify-content-center mb-4">
                    <div class="text-center">
                        <img class="img-fluid icon" src="assets/img/icon.png" style="width:100px;height:100px;">
                        <h2 class="pt-2 nowrap" style="font-size: 16px;font-weight:bold;white-space: nowrap;">Sustainable Travel Solutions</h2>
                        <p style="font-size: 15.5px;text-align: center;">As advocates for responsible travel, we offer eco-friendly options and promote sustainable practices in our itineraries.</p>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <p class="text-center" style="padding-top:40px; font-size:18px;font-weight:600;text-align:justify !important;">
                    With GETG, you can expect nothing less than excellence in every aspect of your business travel
                    experience. Let us be your trusted partner in achieving your business objectives while enjoying the
                    convenience and comfort of seamless travel arrangements.
                </p>
            </div>
        </div>



    </div>
</section>




<section class="container-fluid ge" style="background-color: white;width:100%;margin: 0; padding: 0 !important;margin-bottom: -70px;">
    <div class="" style="">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide">
                        <img src="assets/img/Mask group.png" alt="Image 1" style="padding: 0;">
                        <div class="slide-content mc">

                            <h3 class="goodearth" style="font-weight:900;font-size:40px">Good Earth <br /> <br /> <span style="font-size: 150px;">MICE</span></h3>

                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="assets/img/Mask group.png" alt="Image 2" style="padding: 0;">
                        <div class="slide-content mc">
                            <h3 class="goodearth" style="font-weight:900;font-size:40px">Good Earth <br /> <br /> <span style="font-size: 150px;font-weight:900;">MICE</span></h3>

                        </div>
                    </li>
                    <li class="splide__slide">
                        <img src="assets/img/Mask group.png" alt="Image 3" style="padding: 0;">
                        <div class="slide-content mc">
                            <h3 class="goodearth" style="font-weight:900;font-size:40px">Good Earth <br /> <br /> <span style="font-size: 150px;font-weight:900;">MICE</span></h3>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>








<section class="pb-5" style="background-color:white;">

    <div class="container" style="position: relative;">
        <div class="dot" style="position: absolute;left: 47.5%;top:12%;">
            <img src="assets/img/dot bar.png" alt="" style="height: 1150px">

        </div>
        <div class="row justify-content-between">
            <div class="col-md-4 order-2 order-sm-1" style="padding-top: 100px;">
                <iframe class="rounded-video" width="470" height="250" src="https://www.youtube.com/embed/bBSXbynpLvY?si=4-rF3ArhwY4zjE3_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
            <div class="col-md-5 order-1 order-sm-2">
                <h2 class="mice" style="color: #F78F1E;font-size:48px;">Meetings </h2>
                <p style="padding-top: 5px;color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">At GETG, we recognize the vital role meetings play in business collaboration. Whether it's a boardroom discussion or a sales pitch, we ensure seamless events. Our experts tailor venue selections to your needs, considering location and tech requirements. From intimate spaces to expansive conference centre, we've got you covered. We take care of all logistics, including transportation, accommodation, and catering, allowing your team to concentrate on the agenda without distractions.</p>

            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-4 order-2 order-sm-1" style="padding-top: 80px;">
                <iframe class="rounded-video" width="470" height="250"" src=" https://www.youtube.com/embed/AQa9wxXfvl4?si=IB-51xP9qALyPXLL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 order-1 order-sm-2">
                <h2 class="mice" style="color: #F78F1E;font-size:48px;">Incentives </h2>
                <p style="padding-top: 5px;color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">At GETG, we understand the importance of rewarding and motivating employees and clients. Our incentive travel programs offer unforgettable experiences designed to inspire and incentivize beyond the ordinary. We craft customized packages aligned with your goals and budget, whether it's a luxurious tropical getaway or an adventurous cultural excursion. With personalized service and exclusive experiences, every participant feels valued and appreciated. </p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-4 order-2 order-sm-1" style="padding-top: 80px;">
                <iframe class="rounded-video" width="470" height="250" src="https://www.youtube.com/embed/_XkzuoADvTM?si=bVHlaYnuQ2_SgUEK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
            <div class="col-md-5 order-1 order-sm-2">
                <h2 class="mice" style="color: #F78F1E;font-size:48px;">Conferences</h2>
                <p style="padding-top: 5px;color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">Conferences are crucial for knowledge sharing and networking. Our end-to-end management services ensure a successful event, from venue selection to on-site logistics. With our expert team handling program development, speaker coordination, and attendee registration, you can focus on delivering a memorable experience. We integrate innovative technology, such as mobile apps and live streaming, to enhance engagement and foster collaboration.</p>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-md-4 order-2 order-sm-1" style="padding-top: 80px;">
                <iframe class="rounded-video" width="470" height="250" src="https://www.youtube.com/embed/bBSXbynpLvY?si=4-rF3ArhwY4zjE3_" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="col-md-5 order-1 order-sm-2 pt-3">
                <h2 class="mice" style="color: #F78F1E;font-size:48px;">Exhibitions</h2>
                <p style="padding-top: 5px;color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">Exhibitions provide a vital platform for showcasing products, services, and ideas to a targeted audience. Our comprehensive exhibition management services are crafted to amplify your visibility, engagement, and return on investment. We work closely with you to develop a strategic exhibition plan, aligning objectives, target audience, messaging, and branding to ensure your presence resonates with your business goals. <br /> <br /> Additionally, our experienced team handles all aspects of booth design and logistics, from concept development to onsite setup and dismantling.</p>

            </div>
        </div>
    </div>


</section>

<section class="pt-5 pb-5" style="background-color:white; position:relative;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 mb-5">
                <h2 class="explore" style="color: #F78F1E;font-size:48px;font-family:'Marck Script';">Explore <br /> <span style="color: black;font-size:48px;font-family:'Lato';"> Adventure Trips </span></h2>
                <p style="color:black;font-family:'Lato';font-size:18px;font-weight:500;justify-content:center">To get started, simply reach out to us via phone, email, or WhatsApp with your travel requirements. Rest assured, our team will promptly respond to your inquiry and can even arrange a personalized meeting at your convenience. Let us take care of the details, so you can focus on enjoying your dream holiday</p>
                <a href="<?php echo base_url('Contact'); ?>">
                    <button class="btn " style="background-color: black;color:#fff;font-family:'Lato';">Lets Connect</button>
                </a>
            </div>
            <div class="col-md-8 col-sm-12 d-flex align-items-center justify-content-center">
                <div class="swiper-container myVerticalSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="assets/photos/b1.jpg" class="img-fluid" alt="Image 1"></div>
                        <div class="swiper-slide"><img src="assets/photos/b2.jpg" class="img-fluid" alt="Image 2"></div>
                        <div class="swiper-slide"><img src="assets/photos/b3.jpg" class="img-fluid" alt="Image 3"></div>
                        <div class="swiper-slide"><img src="assets/photos/b4.jpg" class="img-fluid" alt="Image 4"></div>
                        <div class="swiper-slide"><img src="assets/photos/b5.jpg" class="img-fluid" alt="Image 5"></div>
                        <div class="swiper-slide"><img src="assets/photos/b6.jpg" class="img-fluid" alt="Image 6"></div>
                        <div class="swiper-slide"><img src="assets/photos/b7.png" class="img-fluid" alt="Image 7"></div>
                        <div class="swiper-slide"><img src="assets/photos/b8.png" class="img-fluid" alt="Image 8"></div>
                        <div class="swiper-slide"><img src="assets/photos/b9.png" class="img-fluid" alt="Image 9"></div>
                        <div class="swiper-slide"><img src="assets/photos/b10.png" class="img-fluid" alt="Image 10"></div>
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
    document.addEventListener('DOMContentLoaded', function() {
        new Splide('.splide', {
            type: 'fade',
            rewind: true,
            width: '100%',
            heightRatio: 0.5,
            pagination: false,
            arrows: false,
            autoplay: false,
            interval: 500
        }).mount();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Initialize Swiper
        var swiper = new Swiper(".myVerticalSwiper", {
    direction: "vertical",
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    allowTouchMove: true,
    effect: "fade", // Initially setting to fade effect
    fadeEffect: {
        crossFade: true
    },
    mousewheel: true, // Enable mousewheel control
    // Add navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // Remove pagination
    pagination: false
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