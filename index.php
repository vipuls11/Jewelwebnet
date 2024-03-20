<?php include("header.php") ?>
<style>
/* ...........blog-btn................ */
.btnslides {
    color: #f8f5f5;

}

.btnslides::after {
    border: 2px solid black;
    content: "";
    position: absolute;
    left: 0px;
    width: calc(16% - 8px);
    height: calc(100% - -9px);
    z-index: 1;
    transition: transform 0.3s ease;
}

/* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
.btnslides::after {
    transform: translate(8px, -20px);
}

.btnslides:hover::after {
    transform: translate(21px, -10px);
}

/* ...........blog-btn................ */

/* ...........About-btn................ */
.btnslides1 {
    color: #f8f5f5;

}

.btnslides1::after {
    border: 2px solid black;
    content: "";
    position: absolute;
    left: 0px;
    width: calc(16% - -22px);
    height: calc(100% - -9px);
    z-index: 1;
    transition: transform 0.3s ease;
}

/* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
.btnslides1::after {
    transform: translate(8px, -20px);
}

.btnslides1:hover::after {
    transform: translate(21px, -10px);
}

/* ...........About-btn................ */

/* ..............................services............ */
/* .imageborder{
            border: 2px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            left: 0px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

/* .imageborder1{
            border: 1px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            left: 433px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

/* .imageborder2{
            border: 1px solid red;
            border-radius: 50%;
            content:"";
            position:absolute;
            right: 415px;
            width: calc(100% - 130px);
            height: calc(100% - 130px);
            transform: translate(18px, -12px);
            z-index:1;
         } */

.animation_card {
    transition: .5s all ease-in-out;
    transform-origin: top;
    transform: perspective(1000px) rotateY(180deg);
}

.animation_card:hover {
    transform: perspective(1000px) rotateY(360deg);
}

.animation_card:hover {
    transform: perspective(1000px) rotateY(360deg);
}

/* ................accordiance................... */
.active,
.accordion:hover {
    background-color: #ccc;
    color: red;
}

.active:after {
    content: "\2212";

}

/* ................accordiance................... */

/* ....................details container............ */
/* .sun{
            box-shadow:
		0 0 0 10px #FFDE0030,
		0 0 0 20px #FFDE0020,
		0 0 0 30px #FFDE0010,
		0 0 0 40px #FFDE0020,
		0 0 0 50px #FFDE0000,
		0 0 20px 50px #FFDE0010;
	animation:
		sunrise 2s infinite linear forwards,
		rays 2s 2s infinite linear;
        }
        @keyframes sunrise {
	0% {
		box-shadow: none;
	}
}

@keyframes rays {
	0% {
		box-shadow: 
		0 0 0 0 #FFDE0020,
		0 0 0 10px #FFDE0020,
		0 0 0 20px #FFDE0030,
		0 0 0 30px #FFDE0020,
		0 0 0 10px #FFDE0010,
		0 0 20px 70px #FFDE0010;
	}
	100% {
		box-shadow: 
		0 0 0 10px #FFDE0020,
		0 0 0 20px #FFDE0010,
		0 0 0 30px #FFDE0000,
		0 0 0 40px #FFDE0010,
		0 0 0 60px #FFDE0000,
		0 0 20px 70px #FFDE0010;
	} */
/* } */

/* ....................details container............ */
/* ....image slider servies..... */
ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

.carousel {
    position: relative;
    overflow: visible;
    margin-top: 50px;
    /* background-color: rgb(212, 251, 0); */
    /* background: linear-gradient(
    10deg,
    rgba(212, 251, 0, 0.5) 0%,
    rgba(255, 0, 245, 0.5) 100%
  ); */
    /* box-shadow: 5px 10px 30px rgba(255, 255, 255, 0.15); */
    /* border-radius: 20px; */
}

.carousel__slider {
    position: relative;
    display: flex;
    align-items: center;
    width: 253vw;
    /* border: 2px solid #333; */
    height: 400px;
}


.carousel__list {
    position: absolute;
    width: 100%;
    /* top: 50%; */
    left: 0;
    /* transform: translateY(-50%); */
    display: flex;
    align-items: center;
    justify-content: space-around;
}

.carousel__item {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 400px;
    overflow: visible;
    height: 350px;
    display: block;
    /* border: 2px solid #333; */
    box-sizing: border-box;
    background-color: rgba(255, 255, 255, 0.3);
    cursor: pointer;
}

.carousel__item:hover+.carsousel_product {
    display: none;
}

.carousel__item:hover {
    transform: scale(1);

    background-color: rgba(255, 255, 255, 0.7);
}

/* ....image slider servies..... */
/* ...........tabs................. */
.tablinks.active1 {
    /* background-color: midnightblue; */
    background-color: #ccc;
    color: midnightblue;
}

/* ...........tabs................. */

/* ......marques...........  */

@-webkit-keyframes scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(calc(-250px * 7));
    }
}

@keyframes scroll {
    0% {
        transform: translateX(0);
    }

    100% {
        transform: translateX(calc(-250px * 7));
    }
}

.slider {
    background: white;
    /* box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.125); */
    height: 100px;
    margin: auto;
    overflow: hidden;
    position: relative;
    width: 100%;
}

.slider::before,
.slider::after {
    background: linear-gradient(to right, white 0%, rgba(255, 255, 255, 0) 100%);
    content: "";
    height: 100px;
    position: absolute;
    width: 200px;
    z-index: 2;
}

.slider::after {
    right: 0;
    top: 0;
    transform: rotateZ(180deg);
}

.slider::before {
    left: 0;
    top: 0;
}

.slider .slide-track {
    -webkit-animation: scroll 40s linear infinite;
    animation: scroll 40s linear infinite;
    display: flex;
    width: calc(250px * 14);
}

.slider .slide {
    height: 100px;
    width: 250px;
}

/* ......marques...........  */
</style>
</head>

<body>
    <?php include("header.php") ?>
    <div class="pt-[80px]">
        <!-- ..........banner image......... -->
        <div class=" w-full relative opacity-80">
            <img src="img/Get Your Online Jewelry Stote (1) (1).png" alt="" class="w-full">
            <div class="absolute top-[350px] left-[190px] lg:block hidden">
                <h1 class="text-3xl font-semibold text-white text-center">Ready to Sell Your Jewelry online</h1>
                <!-- <div class="flex gap-4 px-4 items-center my-10 opacity-95  py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="intrusion.php">Intrusion Alarm</a></h2>
            </div> -->
            </div>
            <div class="absolute top-[100px] right-[110px] lg:block hidden">
                <h1 class="text-3xl font-semibold text-balck text-center">Mobile <br> Responsive <br> Website</h1>
            </div>
            <div class="absolute top-[120px] left-[80px]  lg:hidden block">
                <h1 class="text-md font-semibold text-white">Ready to Sell Your Jewelry online</h1>
            </div>
            <div class="absolute top-[50px] right-[35px] lg:hidden block">
                <h1 class="text-xs font-semibold text-black">Mobile <br> Responsive <br> Website</h1>
            </div>
        </div>
        <!-- ................banner image.......... -->

        <!-- .......Let’s Build A Better Brand Together........... -->
        <div class="bg-blue-100">
            <div class="container my-10 px-8 mx-auto lg:pt-10 lg:pb-20">
                <div class="text-center py-10">
                    <h1 class="text-4xl font-extrabold mt-4 text-blue-600">Let’s Build A Better Brand Together</h1>
                </div>
                <div class="grid lg:grid-cols-3 lg:gap-5 gap-14 ">
                    <div class="text-center p-4">
                        <div><img src="img/design.png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Website Development</h3>
                        <p class="px-8 text-justify">From concept to reality, we build modern and functional websites
                            that represent your brand and attract your target audience.</p>
                    </div>

                    <div class="text-center p-4">
                        <div><img src="img/web-design (1).png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Website Designing</h3>
                        <p class="px-8 text-justify">Our creative team crafts visually stunning websites, focusing on
                            user experience and aesthetics to leave a lasting impression on your visitors. </p>
                    </div>

                    <div class="text-center p-4">
                        <div><img src="img/data.png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Website Re-Designing</h3>
                        <p class="px-8 text-justify">Revamp your outdated website and stay ahead of the competition. Our
                            redesign services breathe new life into your online presence, enhancing functionality and
                            visual appeal. </p>
                    </div>

                    <div class="text-center p-4">
                        <div><img src="img/web-design.png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Website Maintenance</h3>
                        <p class="px-8 text-justify">Leave the technical aspects to us. Our website maintenance services
                            ensure that your site remains secure, up-to-date, and optimized for peak performance, while
                            you focus on your business.</p>
                    </div>

                    <div class="text-center p-4">
                        <div><img src="img/web-maintenance.png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Creative web designing</h3>
                        <p class="px-8 text-justify">Today's users expect a sleek and user-friendly website design that
                            reflects your brand's unique style. Don't be afraid to take risks and get creative with your
                            design choices!</p>
                    </div>

                    <div class="text-center p-4">
                        <div><img src="img/code.png" alt="" class="w-14 h-14 mx-auto"></div>
                        <h3 class="py-2 text-xl font-semibold">Coding And Technology</h3>
                        <p class="px-8 text-justify">With our coding and technology services, you can focus on what you
                            do best while we handle the rest. From coding to project management, we've got you covered
                            every step of the way.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- .......what we do........... -->

        <!-- ...........About Us................. -->
        <!-- <div class="lg:py-10 my-10 px-8 bg-gray-100 bg-[url('img/developer1.jpg')]  bg-cover no-repeat">
        <div class="text-center pb-10">
                    <h1 class="text-4xl font-extrabold mt-4 text-blue-600">Hire The Leading Shopify Experts</h1>
            </div>
            <div class="container mx-auto lg:p-10  grid grid-cols-2 lg:gap-10 text-center text-white">
                <div class="lg:w-2/3 mx-auto"><img src="img/sp1.webp" alt="" class="w-96 mx-auto">
                <h3 class="py-5 text-2xl font-semibold text-blue-600">Shopify Ring Builder App</h3>
                <p class=" text-lg">Give your customers the freedom to design their rings. The Shopify ring builder app will enable users to customise their rings while allowing a hassle-free shopping experience.</p>
            </div>

               <div class="lg:w-2/3 mx-auto"><img src="img/sp2.webp" alt="" class="w-96 mx-auto">
                <h3 class="py-5 text-2xl font-semibold text-blue-600">Shopify Diamond Search</h3>
                <p class=" text-lg">Diamond navigation made easy! Shopify's diamond search feature will ensure that your customers have easy access to your diamonds whenever they need them.</p>
            </div>
            </div>
        </div>
    </div> -->
        <!-- ...........OUR CLIENTS................. -->

        <div class="lg:w-3/4 mx-auto">
            <div class="container mx-auto my-10 px-8">
                <div class="text-center py-10">
                    <h1 class=" uppercase text-blue-600 text-4xl font-semibold">OUR CLIENTS</h3>
                        <!-- <div class="stroke"></div> -->
                        <p class="text-lg text-center py-4 lg:px-4 ">Belgium Webnet is a confidant to many global
                            brands. In the last two years, we have served 150+ premium brands. Be it for a small,
                            medium, or large-scale business, we have done it all.</p>
                </div>
                <div class="grid grid-cols-5 gap-x-5 gap-y-10 pb-20 ">
                    <div class="grid content-center"><img src="img/partnerslogo/1.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/2.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/3.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/4.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/5.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/6.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/7.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/8.webp" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/9.png" alt="" class="w-32"></div>
                    <div class="grid content-center"><img src="img/partnerslogo/10.jpg" alt="" class="w-32"></div>
                </div>
                <div class="text-center"><button class="border-2 border-black text-lg px-4 py-1">View More</button>
                </div>
            </div>
        </div>
        <!-- ......marques........... -->
        <div>
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250"
                            alt="" />
                    </div>
                </div>
            </div>
        </div>
        <!-- ......marques........... -->
        <!-- ............................Get To Know Us............................ -->
        <!-- <div class="bg-gray-50 py-10">
    <div class="container mx-auto lg:grid lg:grid-cols-2 gap-5 ">
        <div class="px-4">
        <h1 class=" uppercase text-blue-600 text-4xl font-semibold">Get To Know Us</h3>
        <p class="text-lg py-4 text-justify">We are the designers, marketers, innovators, strategists, and builders behind your virtual store. A team of young enthusiasts who believes in creating one-of-a-kind solutions for you and your brand. From the very first building block to the final setup of your virtual realm, we make sure you never have a dull moment.</p>
        <div><button class="border-2 border-black text-lg py-1 px-6 mb-5">Read More</button></div>
        </div>
        <div class=""><img src="img/partnerslogo/about-us-group-img.webp" alt=""></div>
    </div>
    <div class="grid grid-cols-3 gap-10 px-8 py-10">
        <div class=" bg-white text-center py-10 mx-5">
            <span class="num text-4xl font-semibold " data-val="5">5+</span>
            <h4 class="text-blue-600 uppercase text-lg my-2 font-semibold">Years Of Experience</h4>
        </div>
        <div class=" bg-white text-center py-10 mx-5">
            <span class="num text-4xl font-semibold" data-val="150">500+</span>
            <h4 class="text-blue-600 uppercase text-lg my-2 font-semibold">Happy Clients</h4>
        </div>
        <div class=" bg-white text-center py-10 mx-5">
            <span class="num text-4xl font-semibold" data-val="70">70+</span>
            <h4 class="text-blue-600 uppercase text-lg my-2 font-semibold">Young Minds</h4>
        </div> 
    </div>
    <div class="container mx-auto text-center">
        <h3 class="py-2 text-4xl font-semibold text-blue-600">Our Associates</h3>
        <div class="flex w-full items-center py-5  px-8">
            <div class="w-full"><img src="img/icon images/logo1.webp" alt=""></div>
            <div  class="w-full"><img src="img/icon images/logo_2.webp" alt=""></div>
            <div  class="w-full"><img src="img/icon images/logo_3..webp" alt=""></div>
            <div  class="w-full"><img src="img/icon images/logo_4.webp" alt=""></div>
            <div  class="w-full"><img src="img/icon images/logo_6.webp" alt=""></div>
            <div  class="w-full"><img src="img/icon images/logo_7.webp" alt=""></div>
            
        </div>
        </div>
    </div> -->
        <!-- ....................Get To Know Us.................... -->






        <!-- .......................Get Expert Help From Our Support Team.......................... -->
        <div class="container my-10 px-8 mx-auto">
            <h3 class="text-4xl font-extrabold lg:mt-4 text-blue-600 my-5">Get Expert Help From Our Support Team</h3>
            <div class="grid lg:grid-cols-2 gap-5 place-content-center justify-items-center lg:h-[300px]">
                <div class="grid lg:grid-cols-3 gap-5 items-center">
                    <div class="text-center border border-blue-600 rounded-lg w-40 h-40  grid place-content-center">
                        <span class="text-center text-4xl text-blue-600"><i class="fa-solid fa-laptop"></i></span>
                        <p>Connect with the team over Skype</p>
                    </div>

                    <div class="text-center border border-blue-600 rounded-lg w-40 h-40 grid place-content-center">
                        <span class="text-center text-4xl text-blue-600"><i
                                class="fa-solid fa-calendar-days"></i></span>
                        <p>Deliver projects with tight guidelines</p>
                    </div>

                    <div class="text-center border border-blue-600 rounded-lg w-40 h-40 grid place-content-center">
                        <span class="text-center text-4xl text-blue-600"><i class="fa-solid fa-face-smile"></i></span>
                        <p>100% Customer Satisfaction</p>
                    </div>
                </div>
                <div class="grid place-content-center">
                    <p class="text-justify">Want to sell your Jewelry online? Over, 50% of your customers are looking
                        for you on the internet. We are here to help you bridge this gap. Our Web Design and Development
                        experts curate amazing websites for your jewelry business. Ultimately, show up your unbeatable
                        online presence. Now, become accessible to your vast spectrum of online buyers. Attract them
                        with your Trendy Jewelry Website. Hire our expert web developers today!</p>
                </div>
            </div>
            <div>
                <h3 class="text-4xl font-extrabold lg:mt-4 text-blue-600 my-5">Step Up Your Jewelry Game With Our Top
                    and Trendy Jewelry Web Designs</h3>

                <div class="grid lg:grid-cols-3 gap-10">
                    <div class="grid justify-items-center p-8">
                        <span>
                            <img src="img/icon images/browser (2).png" alt="" class="w-32 h-32">
                        </span>
                        <h4 class="text-2xl font-semibold my-5">Jewelry Website</h4>
                        <p class="text-center">Clean and Clear
                            Graphics by UI / UX team</p>
                    </div>
                    <div class="grid justify-items-center p-8">
                        <span>
                            <img src="img/icon images/jewelry.png" alt="" class="w-32 h-32">
                        </span>
                        <h4 class="text-2xl font-semibold my-5">Jewelry E-commerce</h4>
                        <p class="text-center">Custom tailored solutions for
                            growing your jewelry online business</p>
                    </div>
                    <div class="grid justify-items-center p-8">
                        <span>
                            <img src="img/icon images/jewelry (1).png" alt="" class="w-32 h-32">
                        </span>
                        <h4 class="text-2xl font-semibold my-5">Jewelry Website Pricing</h4>
                        <p class="text-center">Lower Total Cost Of Ownership (TCO)
                            and Higher Return on Investment (ROI)</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- .......................Get Expert Help From Our Support Team.......................... -->
    </div>

    <div class="container mx-auto lg:mb-10 my-10 px-8">
        <div class="text-center py-10">
            <h1 class="slidineanimate uppercase text-blue-600 text-md font-semibold">HANDCRAFTED EXPERIENCE</h3>
                <h1 class="slidupeanimate text-4xl font-extrabold mt-4 text-blue-600 ">Create Your Own Wonderland With
                    Our Magnitude Of Themes!</h1>
        </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-10 ">
            <div class="slidupeanimate card hover:drop-shadow-xl border overflow-hidden">
                <div class="h-72  p-4  relative">
                    <img src="img/website1.webp" alt=""
                        class="bg-coverw-full h-full hover:scale-110 transition duration-700 ease-in-out">
                    <div
                        class="absolute top-0 cursor-pointer  left-4 bg-red-600 text-white px-6 py-2 hover:bg-blue-400 text-sm">
                        <a href="https://hg.oriflammeinfotech.com/home" target="_blank">
                            <h4>Live Preview</h4>
                        </a>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <!-- <span class="my-2 text-red-600">April 17, 2023</span> -->
                    <h1 class="my-2 text-2xl font-semibold text-blue-600 hover:text-red-600 cursor-pointer"><a
                            href="https://hg.oriflammeinfotech.com/home" target="_blank">HG Jewel website demo</a></h1>
                    <div class="border-t border-gray-400">
                        <!-- <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-blue-400 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button> -->
                    </div>
                </div>
            </div>

            <div class="slidupeanimate card hover:drop-shadow-xl border overflow-hidden">
                <div class="h-72  p-4 relative">
                    <img src="img/website2.webp" alt=""
                        class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
                    <div
                        class="absolute top-0 cursor-pointer  left-4 bg-red-600 text-white px-6 py-2 hover:bg-blue-400 text-sm">
                        <h4>Live Preview</h4>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <!-- <span class="my-2 text-red-600">April 17, 2023</span> -->
                    <h1 class="my-2 text-2xl font-semibold text-blue-600 hover:text-red-600 cursor-pointer">Top JF Jewel
                        Website</h1>
                    <div class="border-t border-gray-400">
                        <!-- <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-blue-400 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button> -->
                    </div>
                </div>
            </div>

            <div class="slidupeanimate  card hover:drop-shadow-xl border overflow-hidden">
                <div class="h-72  p-4 relative">
                    <img src="img/website3.webp" alt=""
                        class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
                    <div
                        class="absolute cursor-pointer top-0 left-4 bg-red-600 text-white px-6 py-2 hover:bg-blue-400 text-sm">
                        <h4>Live Preview</h4>
                    </div>
                </div>
                <div class="p-4 bg-white">
                    <!-- <span class="my-2 text-red-600">April 17, 2023</span> -->
                    <h1 class="my-2 text-2xl font-semibold text-blue-600 hover:text-red-600 cursor-pointer">TanJewel
                        Website</h1>
                    <div class="border-t border-gray-400">
                        <!-- <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-blue-400 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ..............................contactus.................... -->
    <!-- <div class=" py-20 bg-gray-50">
        <div class="lg:flex container mx-auto gap-5 my-10 px-8">
            <div class="lg:w-1/3">
                <div class="float-right">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">CONTACT US</h4>
                    <h1 class="text-4xl text-blue-600 font-semibold mb-10">Feel free to get in touch with experts</h1>

                    <div class="my-5">
                        <h3 class="text-2xl text-red-600 font-semibold my-2"><a href="#">(44)123 456 789</a></h3>
                        <h3 class="text-2xl text-red-600 font-semibold"><a href="#">info@yourdomain.com</a></h3>
                    </div>
                    <div class="my-5">
                        <p class="text-lg text-blue-600 font-semibold leading-9">1st Floor, Unit No 18, Nand Ghanshayam Industrial Estate, Off Mahakali Caves Rd, Andheri East Mumbai, Maharashtra 400093</p>
                    </div>
                </div>
            </div>
            <div class="lg:w-2/3">
            <?php
            $insert = false;
            $host = "localhost";
            $user = "root";
            $password = "";
            $db_name = "oriflamme_it_solution";

            $conn = mysqli_connect($host, $user, $password, $db_name);

            if (mysqli_connect_errno()) {
                die("Failed to connect with MySQL:" . mysqli_connect_errno());
            } else {
                if (isset($POST['name'])) {
                    $sql = "INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
         VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['subject'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['massage'] . "')";

                    if ($conn->query($sql) === TRUE) {
                        // echo "Record Submitted Successfully";
                        $insert = true;
                    } else {
                        echo "Error:" . $sql . "<br>" . $conn->error;
                    }
                    $conn->close();
                    // header("location:aboutus.php ?");
                }
            }
            ?> 
            <?php

            if ($insert == true) {
                echo "<p id='msg'  class='submitMsg py-4 text-center bg-green-300'>Thanks for submitting your form. We are happy to see you joining us for the US trip</p>";
            }
            ?>
                <form action="aboutus.php" method="POST">
                <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="w-full" >
                    <label for="" class="">Your Name<span class="text-red-600">*</span></label><br>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600">
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600">*</span></label><br>
                    <input type="text" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5">
                </div>
                <div>
                    <label for="">Your Subject<span class="text-red-600">*</span></label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600">*</span></label><br>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5">
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages For website Requirement<span  class="text-red-600">*</span></label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="my-2 text-sm "></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Mesaage</button>
            </div>
            </form>
        </div>
       
    </div>
    </div> -->
    <!-- ..............................contactus.................... -->
    <?php include("footer.php") ?>




    <script>
    var index1 = 0;
    var slides = document.querySelectorAll(".slides");
    // var dot = document.querySelectorAll(".dot");

    function changeSlide() {

        if (index1 < 0) {
            index = slides.length - 1;
        }

        if (index1 > slides.length - 1) {
            index1 = 0;
        }

        for (let i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
            // dot[i].classList.remove("active");
        }

        slides[index1].style.display = "block";
        //   dot[index1].classList.add("active");

        index1++;

        setTimeout(changeSlide, 2000);

    }

    changeSlide();
    </script>

    <!-- .................card img slider........................ -->
    <script>
    // "use strict";

    // function carousel() {
    //   let carouselSlider = document.querySelector(".carousel__slider");
    //   let list = document.querySelector(".carousel__list");
    //   let item = document.querySelectorAll(".carousel__item");
    //   let list2;

    //   const speed = 1;

    //   const width = list.offsetWidth;
    //   let x = 0;
    //   let x2 = width;

    //   function clone() {
    //     list2 = list.cloneNode(true);
    //     carouselSlider.appendChild(list2);
    //     list2.style.left = `${width}px`;
    //   }

    //   function moveFirst() {
    //     x -= speed;

    //     if (width >= Math.abs(x)) {
    //       list.style.left = `${x}px`;
    //     } else {
    //       x = width;
    //     }
    //   }

    //   function moveSecond() {
    //     x2 -= speed;

    //     if (list2.offsetWidth >= Math.abs(x2)) {
    //       list2.style.left = `${x2}px`;
    //     } else {
    //       x2 = width;
    //     }
    //   }

    //   function hover() {
    //     clearInterval(a);
    //     clearInterval(b);
    //   }

    //   function unhover() {
    //     a = setInterval(moveFirst, 30);
    //     b = setInterval(moveSecond, 30);
    //   }

    //   clone();

    //   let a = setInterval(moveFirst, 30);
    //   let b = setInterval(moveSecond, 30);

    //   carouselSlider.addEventListener("mouseenter", hover);
    //   carouselSlider.addEventListener("mouseleave", unhover);
    // }

    // carousel();

    //     
    </script>
    <!-- ...................tabs............. -->
    <script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active1", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active1";
    }
    </script>
    <!-- ...................tabs.............   -->

    <script>
    let valueDisplays = document.querySelectorAll(".num");
    let interval = 4000;
    valueDisplays.forEach((valueDisplay) => {
        let startValue = 0;
        let endValue = parseInt(valueDisplay.getAttribute("data-val"));
        let duration = Math.floor(interval / endValue);
        let counter = setInterval(function() {
            startValue += 1;
            valueDisplay.textContent = startValue;
            if (startValue == endValue) {
                clearInterval(counter);
            }
        }, duration);
    });
    </script>
    </div>