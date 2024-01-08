<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="img/icon images/facicon-removebg-preview.png" width="">
        <!-- ----------jquery--------- -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
            crossorigin="anonymous"></script>

    <title>Jewel Webnet</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
    font-family: 'Poppins', sans-serif;
}
        .container-2
        {width: 90%;
        margin: auto;
    }

    .nav-color{
        /* background-color: #b30000; */
        padding: 0  20px;
       
    }

        .menu:hover .Sub-Menu {
            display: block;
        }

       
        .menu:hover .sub-menu-it-services{
            display: block;
        }

        .menu:hover .sub-menu-web-services{
            display: block;
        }
        .menu .sub-menu-it-services{
            /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
            border: #fbf9f9 2px solid;
        }

        .menu:hover .Sub-Menu{
            /* clip-path: polygon(16% 0, 22% 3%, 100% 3%, 100% 100%, 81% 100%, 50% 100%, 26% 100%, 0 100%, 0 3%, 10% 3%); */
            border: #fbf9f9 2px solid;
        }

        .menu a{ 
            position: relative;
        }
        .menu a:after{
            content:"";
            position: absolute;
            background-color: rgb(207, 5, 5);
            height: 2px;
            width: 0;
            left: 0;
            bottom: 0;
            transition: 0.3s;
        }

        .menu a:hover:after{
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
        .ham-icon{display: none;}
        
        @media only screen and (max-width:1100px){
            #nav-menu{
            display: none;       
            position: absolute;
            left: 0;
            top: 120px;
            width: 100%;
        }
        .ham-icon{display: block;}
        .menu-item{
            background-color: rgb(8,47,73);
            flex-direction: column;
           width: 100% ;
        }
        .menu a:after{
            bottom: 0px;
        }
        .menu-item li{
            padding: 4px 0;
        }
        .menu-item li a{
            padding: 0;

        }
        .menu .sub-menu-it-services{
            top:30px;
            left: 0;
            z-index: 1100;
            
        }
        
        .menu .Sub-Menu{
            top:30px;
            left: 0;
            z-index: 5;
        }

        .menu .sub-menu-web-services{
            top:30px;
            left: 0;
            z-index: 5;
        }
        }

        /* ...........blog-btn................ */
        .blogbtn {
            color: #f8f5f5;
            
        }

        .blogbtn::after{
            border: 2px solid #fbf9f9;
            content:"";
            position:absolute;
            right: 14px;
            width:calc(100% - -8px);
            height:calc(100% - -10px);
            z-index:1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .blogbtn::after{
            transform: translate(6px, -20px);
        }
        .blogbtn:hover::after{
            transform: translate(18px, -11px);
        }
         /* ...........blog-btn................ */

         .active2{
            /* background-color: #fbf9f9; */
            color:red;
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
    <div id="navbar" class="nav-color fixed w-full bg-[rgb(16,32,54)] z-50">
    <nav class="relative flex text-gray-300 justify-between items-center py-1 " >
        <div>
            <a href="index"><img src="img/jewelwebnet.png" alt="" width="350px"></a>
        </div>
        <div id="nav-menu">
            <ul class="nav flex text-lg menu-item font-base text-white">
           <li class="menu relative "><a href="aboutus" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="aboutus"?"active2":"")?>">About Us</a></li>
         
           <li class="menu relative "><a href="services" class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="services"?"active2":"")?>">Services</a></li>
           <li class="menu relative "><a href="PlansandPricing"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="PlansandPricing"?"active2":"")?>">Plans and Pricing</a>
            </li>
            <li class=" menu relative  "><a href="theme"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="theme"?"active2":"")?>">Design Theme</i></a> </li>
            <li class="menu relative "><a href="contactus"  class="py-2 mx-4 <?php echo(basename($_SERVER['PHP_SELF'])=="contactus"?"active2":"")?>">Contact Us</a></li>
        </ul>
        </div>
        <div class="hover:bg-red-600 px-6 py-1.5 lg:block hidden relative border-double border-4 border-white">
            <a href="contactus" class="text-white font-semibold "> <button class=" ">Book an Appointment</button></a>
            <!-- class="blogbtn" -->
        </div>
        <div  class="ham-icon"  onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </div>
       
     </nav> 
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
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-10px";
  }
}
</script> 

<script>
   
</script>
</body>
</html>