<style>
    /* ...........Work Process.......... */

    /* ...........Work Process.......... */

    /* ................accordiance................... */
    /* .active,
        .accordion:hover {
            background-color: #ccc;
            color: red;
        }

        .active:after {
            content: "\2212";

        } */

    /* ................accordiance................... */

    /* ...........acc............ */
    .accordionWrapper {
        padding: 30px;
        /* background: gray; */
        float: left;
        width: 80%;
        box-sizing: border-box;
        margin: 5% 10%;
        /* box-shadow: 0 1.5em 85px 0 rgba(0, 0, 0, 0.2); */
        box-shadow: rgba(0, 0, 0, 0.2);
        border-radius: 10px;
    }

    .accordionItem {
        float: left;
        display: block;
        width: 100%;
        box-sizing: border-box;
        /* font-family: "Open-sans", Arial, sans-serif; */
    }

    .accordionItemHeading {
        cursor: pointer;
        margin: 0px 0px 10px 0px;
        padding: 10px;
        background: #2980b9;
        color: #fff;
        width: 100%;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        box-sizing: border-box;
    }

    .close .accordionItemContent {
        height: 0px;
        transition: height 1s ease-out;
        -webkit-transform: scaleY(0);
        -o-transform: scaleY(0);
        -ms-transform: scaleY(0);
        transform: scaleY(0);
        float: left;
        display: block;
    }

    .open .accordionItemContent {
        padding: 20px;
        background-color: #fff;
        border: 1px solid #ddd;
        width: 100%;
        margin: 0px 0px 10px 0px;
        display: block;
        /* -webkit-transform: scaleY(1);
  -o-transform: scaleY(1);
  -ms-transform: scaleY(1);
  transform: scaleY(1);
  -webkit-transform-origin: top;
  -o-transform-origin: top;
  -ms-transform-origin: top;
  transform-origin: top; */

        /* -webkit-transition: -webkit-transform 0.4s ease-out;
  -o-transition: -o-transform 0.4s ease;
  -ms-transition: -ms-transform 0.4s ease;
  transition: transform 0.4s ease; */
        /* box-sizing: border-box; */
    }

    /* ...........acc............ */
</style>

<?php
session_start();
$insert = false;
$host = "localhost";
$user = "root";
$password = "";
$db_name = "jewel_webnet";

$conn = mysqli_connect($host, $user, $password, $db_name);

if (mysqli_connect_errno()) {
    die("Failed to connect with MySQL:" . mysqli_connect_errno());
} else {

    if (isset($_REQUEST['name'])) {

        $sql = "INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
                         VALUES ('" . $_REQUEST['name'] . "','" . $_REQUEST['email'] . "','" . $_REQUEST['subject'] . "','" . $_REQUEST['contact'] . "','" . $_REQUEST['massage'] . "')";

        if ($conn->query($sql) === TRUE) {
            // echo "Record Submitted Successfully";
            $insert = true;
            $_SESSION['status']= "Data submitted Successfully";
        } else {
            echo "Error:" . $sql . "<br>" . $conn->error;
        }
        $conn->close();
        header("location:aboutus.php ?");
    }
}
?>

<?php include("header.php") ?>
<!-- ...................about Us banner...................... -->
<div class=" w-full relative opacity-80">
    <img src="img/AboutUs.png" alt="" class="w-full">
    <div class="absolute top-80 left-10 lg:block hidden">
        <h1 class="text-5xl font-semibold text-blue-600">About Us</h1>
        <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
            <h2><a href="index.php">Home</a></h2>
            <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
            <h2><a href="aboutus.php">About Us</a></h2>
        </div>
    </div>
    <div class="absolute top-28 left-10  lg:hidden block">
        <h1 class="text-2xl font-semibold text-blue-600">About Us</h1>
        <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
            <h2><a href="">Home</a></h2>
            <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
            <h2><a href="">About Us</a></h2>
        </div>
    </div>
</div>
<!-- ...................about Us banner...................... -->

<!-- ..................About US Container................ -->
<div class="container mx-auto my-10 px-8">
    <div class="">
        <div>
            <h4 class=" uppercase text-4xl text-center text-red-600 font-semibold mb-4">Our Story</h4>
            <h1 class=" text-4xl text-center text-blue-600 font-semibold my-5">Welcome to Jewel Web Net!</h1>
            <div class=" ">

                <p class="leading-8">With years of expertise and a deep understanding of the jewellery industry, we at Jewel Web Net specialize in providing top-notch web development services. Whether you are looking to enhance your online presence, create a dynamic website, or give your existing website a stunning makeover, we have you covered. </p>
            </div>
            <p class="slidupeanimate leading-8 ">
                Our team of skilled developers and designers excels in crafting bespoke websites tailored to the specific needs of the jewellery industry. We understand the importance of showcasing the beauty and intricacy of your jewellery pieces while ensuring a seamless and user-friendly experience for your customers.
            </p>

            <p class="slidupeanimate leading-8 ">
                At Jewel Web Net, we believe that your online platform should be a reflection of your brand's uniqueness. That is why we go the extra mile to ensure that every aspect of your website design aligns with your brand identity and captures your target audience's attention. From creating visually stunning layouts to implementing cutting-edge functionality, we leave no stone unturned in delivering exceptional results.
            </p>

            <p class="slidupeanimate leading-8 ">
                Our web development services extend beyond creating eye-catching designs. If you have an existing website that needs a fresh look or improved functionality, our team can restructure and redesign it to meet your evolving business needs. We understand that businesses in the jewellery industry constantly adapt and grow, and we are here to support your online journey every step of the way.
            </p>

            <p class="slidupeanimate leading-8 ">
                Partner with Jewel Web Net, and let us unlock the full potential of your online presence. Whether you need a dynamic website, a static website, or a complete website redesign, our team of skilled developers and designers will deliver excellence in every aspect.
            </p>


            <p class="slidupeanimate leading-8 ">
                Reach out to us today, and let us embark on a journey to create a unique and captivating online platform for your jewellery business.
            </p>
        </div>
    </div>
</div>

<!-- ....................what we doo.................. -->
<div class="bg-white">
    <div class="my-10 py-10 container mx-auto">
        <div class="lg:grid lg:grid-cols-2 gap-10">
            <div class="self-center px-8">
                <h2 class="text-4xl font-semibold my-5 lg:w-3/4">What we do</h2>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Use the output below to construct a value proposition.</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Create Unique and Captivating Websites for Jewellery Businesses</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Craft Customized Web Solutions to Enhance Your Online Presence</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Deliver Exceptional Web Development Services for the Jewellery Industry</p>

            </div>
            <div class="py-5"><img src="img/5469-min (1).jpg" alt=""></div>
        </div>
    </div>
</div>

<div class="bg-[rgb(237,238,242)] ">
    <div class="my-10 py-10 container mx-auto">
        <div class="lg:grid lg:grid-cols-2 gap-10">
            <div class="py-5"><img src="img/245834-P47QXO-350-min.jpg" alt="" style="height: 400px;"></div>
            <div class="self-center px-8">
                <h2 class="text-4xl font-semibold my-5 lg:w-3/4">Who we do it for</h2>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Jewellery Retailers and E-commerce Stores</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Independent Jewellers and Artisans</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Jewellery Designers and Manufacturers</p>
            </div>
        </div>
    </div>
</div>

<div class="bg-white ">
    <div class="my-10 py-10 container mx-auto">
        <div class="lg:grid lg:grid-cols-2 gap-10">
            <div class="self-center px-8">
                <h2 class="text-4xl font-semibold my-5 lg:w-3/4">What do they get</h2>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> A Visually Stunning Website that Showcases Their Jewellery Collection</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> Enhanced User Experience and Seamless Navigation for Customers</p>
                <p class="text-lg leading-8 "><span><i class="fa-solid fa-minus"></i></span> A Captivating Online Presence that Reflects their Brand Identity</p>
            </div>
            <div class="py-5"><img src="img/27208 (1)-min.jpg" alt=""></div>
        </div>
    </div>
</div>
<!-- ....................what we doo.................. -->

<!-- ....................................acc......................... -->
<div class="">
    <div class="accordionWrapper bg-blue-50">
        <div class="text-center">
            <h4 class="text-2xl font-bold text-blue-600  mb-5">FAQs Frequently Asked Questions :</h4>
        </div>
        <div class="accordionItem close">
            <h2 class="accordionItemHeading">What is the turnaround time for web development projects?</h2>
            <div class="accordionItemContent">
                <p>Our turnaround time depends on the scope and complexity of the project. We strive to deliver timely results without compromising quality.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Can you redesign my existing jewellery website?</h2>
            <div class="accordionItemContent">
                <p>Absolutely! Our team can restructure and redesign your existing website to meet your evolving business needs and enhance its visual appeal and functionality.</p>
                <!-- <ul>
          <li>List item #1</li>
          <li>List item #2</li>
          <li>List item #3</li>
        </ul> -->
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Do I need technical expertise to manage my website?</h2>
            <div class="accordionItemContent">
                <p>Not at all. We provide a user-friendly content management system that allows you to easily update and manage your website without any technical knowledge.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">How can SEO optimization benefit my jewellery business?</h2>
            <div class="accordionItemContent">
                <p>SEO optimization can improve your website's visibility on search engines and attract targeted traffic. This can lead to increased brand exposure, higher conversions, and improved online sales.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Are the payment gateways you integrate secure?</h2>
            <div class="accordionItemContent">
                <p>Yes, we prioritize the security of our clients' and their customers' transactions. We integrate reliable and encrypted payment gateways to ensure a secure online shopping experience.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">What type of support do you offer after the website is launched?</h2>
            <div class="accordionItemContent">
                <p>We provide ongoing website maintenance, regular updates, and technical support to ensure your website continues to function smoothly and remains up-to-date.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Can you integrate my social media accounts with my website?</h2>
            <div class="accordionItemContent">
                <p>Yes, we can integrate your social media accounts into your website, allowing visitors to connect with your brand through various social media platforms.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Are your websites mobile-friendly?</h2>
            <div class="accordionItemContent">
                <p>Absolutely, we design and develop websites that are fully responsive and optimized for mobile devices, providing a seamless user experience across all screen sizes.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">Can I sell my jewellery online with your web development services?</h2>
            <div class="accordionItemContent">
                <p>Yes, our e-commerce integration services enable you to showcase and sell your jewellery pieces online, providing a secure and convenient shopping experience for your customers.</p>
            </div>
        </div>

        <div class="accordionItem close">
            <h2 class="accordionItemHeading">How do I get started with Jewel Web Net's web development services?</h2>
            <div class="accordionItemContent">
                <p>Getting started is easy! Simply reach out to us today through our contact form or by giving us a call, and we'll be happy to discuss your specific requirements and provide a tailored solution for your jewellery business.</p>
            </div>
        </div>
    </div>
</div>
<!-- ....................................acc......................... -->

<!-- .......................work process.............. -->
<div class="text-center my-10">
    <h4 class="slidineanimate uppercase text-4xl text-red-600 font-semibold my-5">About Us</h4>
    <h1 class="slidedowntoupanimate text-4xl text-blue-600 font-semibold my-5">Our Motivated Team</h1>
    <div class="slidupeanimate grid grid-cols-3 gap-5  w-10/12 mx-auto">
        <div>
            <div class="relative"><img src="img/d1.jpg" alt="" class="grid place-content-center w-full">
                <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                    <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="pravin.php">Pravin Rai</a></h1>
                <h4 class="text-sm">CEO & Parnter</h4>
            </div>
        </div>
        <div>
            <div class="relative"><img src="img/d1.jpg" alt="" class="grid place-content-center w-full">
                <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                    <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="rita.php">Mantosh Nishad</a></h1>
                <h4 class="text-sm">Co-Founder</h4>
            </div>
        </div>
        <div>
            <div class="relative"><img src="img/d1.jpg" alt="" class="grid place-content-center w-full">
                <div class="image_card  absolute top-0 right-0 bottom-0 left-0 text-end w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-60">
                    <div class="flex  gap-2 items-end justify-center text-white text-lg w-full h-full">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center my-4">
                <h1 class="text-lg text-sky-950 hover:text-red-600 font-semibold"><a href="alok.php">Pradeep Chauhan</a></h1>
                <h4 class="text-sm">CTO & Co-Founder</h4>
            </div>
        </div>

    </div>
</div>


<!-- ..............................contactus.................... -->
<div class=" py-10 bg-gray-50">
    <div class=" container mx-auto gap-5 my-10 px-8">
        <!-- <div class="lg:w-1/3">
                <div class="float-right">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">CONTACT US</h4>
                    <h1 class="text-4xl text-sky-950 font-semibold mb-10">Feel free to get in touch with experts</h1>

                    <div class="my-5">
                        <h3 class="text-2xl text-red-600 font-semibold my-2"><a href="#">(44)123 456 789</a></h3>
                        <h3 class="text-2xl text-red-600 font-semibold"><a href="#">info@yourdomain.com</a></h3>
                    </div>
                    <div class="my-5">
                        <p class="text-lg text-sky-950 font-semibold leading-9">1st Floor, Unit No 18, Nand Ghanshayam Industrial Estate, Off Mahakali Caves Rd, Andheri East Mumbai, Maharashtra 400093</p>
                    </div>
                </div>
            </div> -->
        <div class="">
            <h4 class="uppercase text-sm  text-center text-red-600 font-semibold mb-5">CONTACT US</h4>
            <div class="py-5">
                <?php
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div>
                            <p id='msg' class='submitMsg py-4 text-center bg-green-300'><?php echo $_SESSION['status'];?></p>
                            </div>
                        <?php
                        
                        unset($_SESSION['staus']);
                    }
                // if ($insert == true) {
                //     echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
                // }
                ?>
            </div>
            <form action="aboutus.php" method="POST">
                <div class="lg:grid lg:grid-cols-2 gap-5">
                    <div class="w-full">
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
                    <label for="">Massages <span class="text-red-600">*</span></label> <br>
                    <textarea type="text" name="massage" id="" cols="145" rows="5" placeholder="Tell us few words" class="my-2 text-sm w-full"></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Mesaage</button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- ..............................contactus.................... -->
<?php include("footer.php") ?>
<!-- ..................accordance.......... -->
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }
</script>
<!-- ..................accordance.......... -->
<script>
    $(document).ready(function() {
        $("#msg").slideUp(0).delay(1000).slideDown('slow');
        $("#msg").slideDown(1).delay(2000).slideUp('slow');
    });
</script>

<!-- ........................acc............... -->
<script>
    var accItem = document.getElementsByClassName('accordionItem');
    var accHD = document.getElementsByClassName('accordionItemHeading');
    for (i = 0; i < accHD.length; i++) {
        accHD[i].addEventListener('click', toggleItem, false);
    }

    function toggleItem() {
        var itemClass = this.parentNode.className;
        for (i = 0; i < accItem.length; i++) {
            accItem[i].className = 'accordionItem close';
        }
        if (itemClass == 'accordionItem close') {
            this.parentNode.className = 'accordionItem open';
        }
    }
</script>
<!-- ........................acc............... -->