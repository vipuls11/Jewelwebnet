<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
        href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="img/icon images/facicon-removebg-preview.png" width="">
    <!-- ----------jquery--------- -->
    <!-- <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <title>Jewel Webnet</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Poppins', sans-serif;
    }

    .container-2 {
        width: 90%;
        margin: auto;
    }

    .nav-color {
        /* background-color: #b30000; */
        padding: 0 20px;

    }

    .menu:hover .Sub-Menu {
        display: block;
    }


    .menu:hover .sub-menu-it-services {
        display: block;
    }

    .menu:hover .sub-menu-web-services {
        display: block;
    }

    .menu .sub-menu-it-services {
        /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
        border: #fbf9f9 2px solid;
    }

    .menu:hover .Sub-Menu {
        /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
        border: #fbf9f9 2px solid;
    }

    .menu a {
        position: relative;
    }

    .menu a:after {
        content: "";
        position: absolute;
        background-color: rgb(207, 5, 5);
        height: 2px;
        width: 0;
        left: 0;
        bottom: 0;
        transition: 0.3s;
    }

    .menu a:hover:after {
        width: 100%;
    }

    /* section{
            background-image:url("tailwin img/_backgroundscreeningservices.jpg") ;
           padding-top: 100px;
           padding-bottom: 50px;
           padding-left: 50px;
           padding-right: 50px;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover ;  
        } */
    .ham-icon {
        display: none;
    }

    @media only screen and (max-width:1100px) {
        #nav-menu {
            display: none;
            position: absolute;
            left: 0;
            top: 120px;
            width: 100%;
        }

        .ham-icon {
            display: block;
        }

        .menu-item {
            background-color: rgb(8, 47, 73);
            flex-direction: column;
            width: 100%;
        }

        .menu a:after {
            bottom: 0px;
        }

        .menu-item li {
            padding: 4px 0;
        }

        .menu-item li a {
            padding: 0;

        }

        .menu .sub-menu-it-services {
            top: 30px;
            left: 0;
            z-index: 1100;

        }

        .menu .Sub-Menu {
            top: 30px;
            left: 0;
            z-index: 5;
        }

        .menu .sub-menu-web-services {
            top: 30px;
            left: 0;
            z-index: 5;
        }
    }

    /* ...........blog-btn................ */
    .blogbtn {
        color: #f8f5f5;

    }

    .blogbtn::after {
        border: 2px solid #fbf9f9;
        content: "";
        position: absolute;
        right: 14px;
        width: calc(100% - -8px);
        height: calc(100% - -10px);
        z-index: 1;
        transition: transform 0.3s ease;
    }

    /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
    .blogbtn::after {
        transform: translate(6px, -20px);
    }

    .blogbtn:hover::after {
        transform: translate(18px, -11px);
    }

    /* ...........blog-btn................ */

    .active2 {
        /* background-color: #fbf9f9; */
        color: red;
    }
    </style>
</head>

<body>
    <!-- <div class="flex justify-between px-10 py-1 bg-slate-300 text-sm ">
        <div><a href="">+91 7900108552</a></div>
        <div class="">
            <marquee behavior="" direction=""><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p></marquee>
        </div>
    </div> -->
    <div id="navbar" class="nav-color fixed w-full bg-[rgb(16,32,54)] z-40">
        <nav class="relative flex text-gray-300 justify-between items-center py-1 ">
            <div>
                <a href="index"><img src="img/jewelwebnet.png" alt="" width="350px"></a>
            </div>
            <div id="nav-menu">
                <ul class="nav flex text-lg menu-item font-base text-white">
                    <li class="menu relative "><a href="aboutus"
                            class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "aboutus" ? "active2" : "") ?>">About
                            Us</a></li>

                    <li class="menu relative "><a href="services"
                            class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "services" ? "active2" : "") ?>">Services</a>
                    </li>
                    <li class="menu relative "><a href="PlansandPricing"
                            class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "PlansandPricing" ? "active2" : "") ?>">Plans
                            and Pricing</a>
                    </li>
                    <li class=" menu relative  "><a href="theme"
                            class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "theme" ? "active2" : "") ?>">Design
                            Theme</i></a> </li>
                    <li class="menu relative "><a href="contactus"
                            class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "contactus" ? "active2" : "") ?>">Contact
                            Us</a></li>
                </ul>
            </div>
            <div class="hover:bg-red-600 px-6 py-1.5 lg:block hidden relative border-double border-4 border-white">
                <a href="contactus" class="text-white font-semibold "> <button class=" ">Book an
                        Appointment</button></a>
                <!-- class="blogbtn" -->
            </div>
            <!-- <div class="ham-icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
                <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-disable-body-scrolling" data-drawer-show="drawer-disable-body-scrolling" data-drawer-body-scrolling="false" aria-controls="drawer-disable-body-scrolling">
                    Show body scrolling disabled
                </button>

            </div> -->
            <div class="ham-icon ">

                <button
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 Z-20 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                    type="button" data-drawer-target="drawer-disable-body-scrolling"
                    data-drawer-show="drawer-disable-body-scrolling" data-drawer-body-scrolling="false"
                    aria-controls="drawer-disable-body-scrolling">
                    <i class="fa fa-bars"></i>
                </button>

            </div>

        </nav>
    </div>




    <!-- drawer init and toggle -->



    <!-- drawer component -->
    <div id="drawer-disable-body-scrolling"
        class="fixed top-0 left-0 z-50 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-gray-100 w-96 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-disable-body-scrolling-label">
        <h5 id="drawer-disable-body-scrolling-label"
            class="text-base font-semibold text-sky-950 uppercase dark:text-gray-400">Jewel Webnnet</h5>
        <button type="button" data-drawer-hide="drawer-disable-body-scrolling"
            aria-controls="drawer-disable-body-scrolling"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li class="border-b py-2 hover:bg-gray-200 my-2">
                    <a href="aboutus"
                        class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "aboutus" ? "active2" : "") ?>">About
                        Us</a>
                </li>
                <li class="border-b  hover:bg-gray-200 my-2">
                    <div id="accordion-flush" data-accordion="collapse"
                        data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                        data-inactive-classes="text-gray-500 dark:text-gray-400">
                        <h2 id="accordion-flush-heading-1">
                            <button type="button"
                                class="flex items-center justify-between w-full py-2 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                                data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                                aria-controls="accordion-flush-body-1">
                                <div><a href="services"
                                        class="py-4 mx-4 <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active2' : ''; ?>">Services</a>
                                </div>
                                <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M9 5 5 1 1 5" />
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                            <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                                <ul>
                                    <li class="menu relative">
                                        <a href="ecommerce-website-development"
                                            class="pb-2  mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "ecommerce-website-development.php" ? "active2" : "") ?>">-Ecommerce
                                            Website Development</a>
                                    </li>
                                    <li class="menu relative ">
                                        <a href="businesswebsite"
                                            class="pb-2  mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "businesswebsite.php" ? "active2" : "") ?>">-Businnes
                                            Website</a>
                                    </li>
                                    <li class="menu relative">
                                        <a href="websitemaintance"
                                            class="pb-2  mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "websitemaintance.php" ? "active2" : "") ?>">-Website
                                            Maintenance?</a>
                                    </li>
                                    <li class="menu relative">
                                        <a href="coding_and_technology"
                                            class="pb-2  mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "coding_and_technology.php" ? "active2" : "") ?>">-Coding
                                            & Technology</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="border-b py-2 hover:bg-gray-200 my-2">
                    <a href="services"
                        class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "services" ? "active2" : "") ?>">Services</a>
                </li>
            </ul>
            <hr>
            <div class="">
                <div class="w-full ">
                    <div class="border p-2 rounded-lg my-3 bg-sky-950">
                        <a href="tel:+91-9930425384"><button class="text-white font-semibold text-sm"><span
                                    class="mr-3"><i class="fa-solid fa-phone"></i></span> +91
                                9930425384</button></a>
                    </div>
                    <div class="border rounded-lg p-2 bg-sky-950">
                        <a href="mailto: pravin@oriflammeitsolutions.com"><button
                                class="text-white text-sm font-semibold"><span class="mr-3"><i
                                        class="fa-solid fa-envelope"></i></span>
                                pravin@oriflammeitsolutions.com</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lg:hidden block ">
        <div class="fixed bottom-0 class grid grid-cols-2 w-full bg-sky-950 text-center z-100">
            <div class="border p-2 opacity-50 hover:opacity-100">
                <a href="tel:+91-98677 83298"><button class="text-white font-semibold text-sm"><span
                            class="text-red-650 mr-3"><i class="fa-solid fa-phone"></i></span> <br> +91
                        98677 83298</button></a>
            </div>
            <div class="border p-2 opacity-50 hover:opacity-100">
                <a href="mailto: jewelwebnetco@gmail.com"><button class="text-white text-sm font-semibold"><span
                            class="text-red-650 3r-3"><i class="fa-solid fa-envelope"></i></span> <br>
                        jewelwebnetco@gmail.com</button></a>
            </div>
        </div>
    </div>

    <script>
    function myFunction() {
        var x = document.getElementById("nav-menu");
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    </script>
    <script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-10px";
        }
    }
    </script>

    <script>
    $('.mobmenu').click(function() {
        $('.togmenu').toggle();
    });

    $(".recent").click(function() {
        $(".recent").toggleClass("fa-plus fa-minus");
    });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>