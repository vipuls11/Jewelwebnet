<style>
    /* Style the tab */
    /* .tab {
        width: 24%;
        margin: auto;
        overflow: hidden;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: white;
        text-align: center;
    } */

    /* Style the buttons inside the tab */
    /* .tab button {
        background-color: inherit;
        border: none;
        outline: none;
        cursor: pointer;
        margin: 5px;
        border-radius: 8px;
        padding: 10px 20px;
        transition: 0.3s;
        font-size: 24px;
        font-weight: 800;
    } */

    /* Change background color of buttons on hover */
    /* .tab button:hover {
            background-color: #ddd;
        } */

    /* Create an active/current tablink class */
    .tab button.active1 {
        background-color: rgb(16, 32, 54);
        color: white;
    }

    /* Style the tab content */
    /* .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        } */

    /* ...................mobile responsive................... */

    .tab1 button.activecard {
        border-bottom: 2px solid rgb(16, 32, 54);
        color: rgb(16, 32, 54);
    }



    /* ...................mobile responsive Annually ......................... */
   
   .tabannually button.activeannually {
        border-bottom: 2px solid rgb(16, 32, 54);
        color: rgb(16, 32, 54);
    }
</style>
</head>

<body>
    <?php include("header.php") ?>
    <!-- ...................IT Services banner...................... -->
    <div class="container mx-auto w-full relative opacity-80">
        <img src="img/it services.webp" alt="" class="w-full ">
        <div class="absolute top-80 left-5 lg:block hidden">
            <h1 class="text-5xl font-semibold text-blue-600">Plans and Pricing</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="itservices.php">Plans and Pricing</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-5  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">Plans and Pricing</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="itservices.php">Plans and Pricing</a></h2>
            </div>
        </div>
    </div>
    <!-- ...................about Us banner...................... -->

    <!-- .............................it services ................... -->
    <!-- bg-[url('img/bg-01.png')] -->
    <div class="lg:block hidden lg:my-20 my-10 px-8">
        <div class="container mx-auto">
            <div class="text-center py-10">
                <h1 class="uppercase text-4xl text-red-800 text-md font-semibold">B2C Website Development</h3>
                    <h1 class=" text-2xl font-extrabold mt-4 text-black">Choose a plan to avail our services and get started with your transformation journey today.</h1>
            </div>
            <div>
                <div class="tab w-80 m-auto overflow-hidden border border-[1px solid #ccc] rounded-lg bg-white text-center">
                    <button class="tablinks  bg-inherit border-0 outline-0 cursor-pointer m-2 px-6 py-3 text-xl font-semibold transition-[0.3s]" onclick="openPrice(event, 'Monthly')">Monthly</button>
                    <button class="tablinks bg-inherit border-0 outline-0 cursor-pointer m-2 px-6 py-3 text-xl font-semibold transition-[0.3s]" onclick="openPrice(event, 'Annually')">Annually</button>
                    <!-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">Tokyo</button> -->
                </div>

                <div class="my-10 relative">
                    <span class="absolute left-[465px] -top-3 text-xl">&#10024;</span>
                    <div class="text-center">
                        <h3 class="bg-slate-200 px-6 py-2  w-72 mx-auto text-blue-600">Annually Get 1 Month Free</h3>
                    </div>
                    <span class="absolute right-[465px] -bottom-3 text-xl">&#10024;</span>
                </div>

                <div id="Monthly" class="tabcontent my-10">
                    <div class="grid grid-cols-4 gap-5">
                        <div class="flex items-center bg-gray-200 text-center  border-2 rounded-md">
                            <h1 class="text-4xl my-2 font-semibold">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Gold</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹150/</span>Month</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹999</h2>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Platinum</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹250/</span>Month</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹1499</h2>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Rhodium</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹350/</span>Month</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹1999</h2>
                        </div>
                    </div>
                </div>

                <div id="Annually" class="tabcontent hidden my-10">
                    <div class="grid grid-cols-4 gap-5">
                        <div class="flex items-center  text-center  border-2 rounded-md">
                            <h1 class="text-4xl my-2 font-semibold">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Gold</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹150/</span>Annum</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹999</h2>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Platinum</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹250/</span>Annum</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹1499</h2>
                        </div>
                        <div class="text-center border-2 rounded-md">
                            <h3 class="text-xl mt-2 font-semibold">Rhodium</h3>
                            <p class="my-3 text-lg font-semibold"><span class="text-blue-600">₹350/</span>Annum</p>
                            <div class="bg-sky-950 mx-14 rounded-md"><button class="my-3 text-white">START</button></div>
                            <h4 class="my-3  text-gray-500">One-Time Setup Fees</h4>
                            <h2 class="my-3 text-blue-600 font-semibold text-lg">₹1999</h2>
                        </div>
                    </div>
                </div>

                <div class="my-10">
                    <table class="w-full text-center">
                        <tbody class="leading-9">
                            <tr class="border-y border-gray-400 ">
                                <td class="text-left w-96 py-2">Technology</td>
                                <td class="py-2">PHP</td>
                                <td class="py-2">React JS</td>
                                <td class="py-2">React JS</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Multi-Language</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Multi-Currency</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Custom Homepage design</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Social Media Live Integration</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2">Instagram</td>
                                <td class="py-2">Instagram & Facebook</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left">Reviews Integration</td>
                                <td class="py-2">Offline</td>
                                <td class="py-2">Google & Offline</td>
                                <td class="py-2">Google, Yelp & Offline</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="py-2">1 Supplier</td>
                                <td class="py-2">2 Suppliers</td>
                                <td class="py-2">3 Suppliers</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="py-2">1 Supplier</td>
                                <td class="py-2">2 Suppliers</td>
                                <td class="py-2">3 Suppliers</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2">1 Supplier</td>
                                <td class="py-2">2 Suppliers</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Gemstones Supplier inventory integration with search page</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2">1 Supplier</td>
                                <td class="py-2">2 Supplier</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Jewelry supplier inventory integration</td>
                                <td class="py-2">1 Supplier</td>
                                <td class="py-2">2 Suppliers</td>
                                <td class="py-2">3 Suppliers</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Ring Builder</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Watches search page</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Fully Responsive design</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Payment Gateway Integration</td>
                                <td class="py-2">1 Gateway</td>
                                <td class="py-2">2 Gateway</td>
                                <td class="py-2">3 Gateway</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Finance Platform Integration</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2">1 Gateway</td>
                                <td class="py-2">2 Gateway</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Admin Panel</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Diamond Markup via Admin Panel</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Insta shop integration in Admin Panel</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Google Analytics Integration in Admin Panel</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Education page</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Blog Page</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-times-circle"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">ADA Compliance</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">SSL/HTTPS integration</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Website Cloud backup</td>
                                <td class="py-2">Monthly</td>
                                <td class="py-2">Bi-Monthly</td>
                                <td class="py-2">Weekly</td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left py-2">Dedicated Project Manager</td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                <td class="py-2 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- .....................mobile responsive..................... -->
    <div class="lg:hidden block ">
        <div class="container mx-auto">
            <div>
                <div class="tab w-64 m-auto overflow-hidden border border-[1px solid #ccc] rounded-lg bg-white text-center my-5">
                    <button class="tablinks bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-lg font-semibold transition-[0.3s]" onclick="openPrice(event, 'Monthly1')">Monthly</button>
                    <button class="tablinks bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-lg font-semibold transition-[0.3s]" onclick="openPrice(event, 'Annually1')">Annually</button>

                </div>
                <div class="my-5 relative">
                    <span class="absolute left-[60px] -top-3 text-xl">&#10024;</span>
                    <div class="text-center">
                        <h3 class="bg-slate-200 text-sm px-6 py-2  w-60 mx-auto text-blue-600">Annually Get 1 Month Free</h3>
                    </div>
                    <span class="absolute right-[60px] -bottom-3 text-xl">&#10024;</span>
                </div>

                <div id="Monthly1" class="tabcontent my-10">
                    <div class="tab1  overflow-hidden border border-[1px solid #ccc] rounded-lg bg-white text-center my-5">
                        <button class="tablinks1 bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s]"  onclick="openCard(event, 'Gold')">Gold</button>
                        <button class="tablinks1 bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s] " onclick="openCard(event, 'Platinum')">Platinum</button>
                        <button class="tablinks1  bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s] " onclick="openCard(event, 'Rhodium')">Rhodium</button>
                    </div>

                    <div id="Gold" class="tabcontentcard">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Gold</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>

                    <div id="Platinum" class="tabcontentcard hidden">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Platinum</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>

                    <div id="Rhodium" class="tabcontentcard hidden">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Rhodium</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>
                </div>

                <div id="Annually1" class="tabcontent hidden my-10 ">
                <div class="tabannually overflow-hidden border border-[1px solid #ccc] rounded-lg bg-white text-center my-5">
                        <button class="tablinksannually bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s] " onclick="openAnnually(event, 'Gold1')">Gold</button>
                        <button class="tablinksannually bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s] " onclick="openAnnually(event, 'Platinum1')">Platinum</button>
                        <button class="tablinksannually bg-inherit border-0 outline-0 cursor-pointer m-2 px-4 py-2 text-md font-semibold transition-[0.3s] " onclick="openAnnually(event, 'Rhodium1')">Rhodium</button>
                    </div>

                    <div id="Gold1" class="tabcontentannually">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Gold</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>

                    <div id="Platinum1" class="tabcontentannually hidden">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Platinum</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>

                    <div id="Rhodium1" class="tabcontentannually hidden">
                    <div class="grid grid-cols-2">
                        <div class="flex items-center bg-gray-200 text-center  border-2">
                            <h1 class="text-md my-2 font-semibold w-24 mx-auto">PACKAGE
                                FEATURES</h1>
                        </div>
                        <div class="text-center border-2 bg-sky-950">
                            <h3 class="text-md mt-2 font-semibold text-white">Rhodium</h3>
                            <p class="my-3 text-sm font-semibold text-white"><span class="text-white text-md">₹150/</span>Month</p>
                            <div class=""><button class="my-3 text-sky-950 bg-white text-sm rounded-md px-6 py-1">START</button></div>
                        </div>
                    </div>
                    <div class="">
                    <table class="w-full text-center">
                        <tbody class="leading-9 ">
                            <tr class="border-y border-gray-400 ">
                                <td class="w-1/2 text-left px-2 py-2 text-sm border border-gray-400">One-Time Setup Fees</td>
                                <td class="w-1/2 py-2 px-2 text-sm border border-gray-400">$999</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Technology</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">PHP</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Language</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>


                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Multi-Currency</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Custom Homepage design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Social Media Live Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Reviews Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">Offline</td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Natural Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Lab Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fancy Color Diamonds supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Gemstones Supplier inventory integration with search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Jewelry supplier inventory integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Supplier</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Watches search page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Fully Responsive design</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
 
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Payment Gateway Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">1 Gateway</td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Finance Platform Integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Diamond Markup via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Bulk Diamonds/Gemstones/Fancy Color Stones upload via Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Insta shop integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Google Analytics Integration in Admin Panel</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Full E-Commerce Functionality (Including Cart, Wishlist, Coupon Code etc.)</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>

                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Education page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                                
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Blog Page</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-times-circle"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">ADA Compliance</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">SSL/HTTPS integration</td>
                                <td class="px-2 py-2 text-sm border border-gray-400text-blue-600"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>

                            <tr class="border-y border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Website Cloud backup</td>
                                <td class="px-2 py-2 text-sm border border-gray-400 text-blue-600">Monthly</td>
                            </tr>

                            <tr class="border border-gray-400">
                                <td class="text-left px-2 py-2 text-sm border border-gray-400">Dedicated Project Manager</td>
                                <td class="px-2 py-2 text-blue-600 text-sm border border-gray-400"><i class="fa fa-check-circle" aria-hidden="true"></i></td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="my-10 leading-8">
                        <p>For any additional Diamonds/Gemstones/Fancy Color Stones Supplier Integration One Time Charge will be ₹250 Each.</p>
                        <p>For any additional Jewelry Supplier Integration One Time Charge will be ₹500 Onwards.</p>
                        <p>For any additional Payment Gateway Integration One Time Charge will be ₹250 Each.</p>
                        <p>In House Inventory will be considered as one supplier Your Chosen Plan.</p>
                        <p>Particulars like Rapnet, VDB, Polygon, Idex and Get Diamonds will be cosidered as one supplier each as per your plan.
                            Above prices are exclusive of GST.</p>
                    </div>
                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- .....................mobile responsive..................... -->
    <!-- .............................it services ................... -->
    <?php include("footer.php") ?>

    <script>
        function openPrice(evt, cityName) {
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

   

<script>
function openCard(evt, MonthlyCard) {
  var c, tabcontenannually, tablinks1;
  tabcontent1 = document.getElementsByClassName("tabcontentcard");
  for (c = 0; c < tabcontent1.length; c++) {
    tabcontent1[c].style.display = "none";
  }
  tablinks1 = document.getElementsByClassName("tablinks1");
  for (c = 0; c < tablinks1.length; c++) {
    tablinks1[c].className = tablinks1[c].className.replace("activecard", "");
  }
  document.getElementById(MonthlyCard).style.display = "block";
  evt.currentTarget.className += " activecard";
}
</script>

<script>
function openAnnually(evt, AnnuallyCard) {
  var a, tabcontenannually, tablinksannually;
  tabcontenannually = document.getElementsByClassName("tabcontentannually");
  for (a = 0; a < tabcontenannually.length; a++) {
    tabcontenannually[a].style.display = "none";
  }
  tablinksannually = document.getElementsByClassName("tablinksannually");
  for (a = 0; a < tablinksannually.length; a++) {
    tablinksannually[a].className = tablinksannually[a].className.replace("activeannually", "");
  }
  document.getElementById(AnnuallyCard).style.display = "block";
  evt.currentTarget.className += " activeannually";
}
</script>