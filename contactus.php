
<?php include("header.php") ?>
<?php
     $a=array("name","email","subject","contact","massage");
    //  global $subject;
    //  global $name;
    //  global $email;
    //  global $subject;
    //  global $contact;
     global $massage;
    $insert = false;
    $host = "localhost";
    $user = "root";
    $password ="";
    $db_name ="jewel_webnet";
  
    
   
    $conn = mysqli_connect($host, $user, $password, $db_name);
   
    if(mysqli_connect_errno()){
        die("Failed to connect with MySQL:". mysqli_connect_errno());
    }
    else{
        if(isset($_POST['name']))
        {
        $sql ="INSERT INTO contact_us(Name, Email, Subject, Contact, Massage)
        VALUES ('".$_REQUEST['name']."','".$_REQUEST['email']."','".$_REQUEST['subject']."','".$_REQUEST['contact']."','".$_REQUEST['massage']."')";

        if($conn->query($sql)=== TRUE){
            // echo "Record Submitted Successfully";
            $insert = true;
        }
        else{
            echo "Error:".$sql. "<br>" .$conn->error;
        }
        $conn->close();

        // header("location:contactus.php ?");
    }
}
?>
 
<div class=" w-full relative opacity-80">
        <img src="img/AboutUS.webp" alt="" class="w-full">
        <div class="absolute top-80 left-10 lg:block hidden">
            <h1 class="text-5xl font-semibold text-blue-600">Contact Us</h1>
            <div class="flex gap-4 px-4 items-center my-10 opacity-95 bg-slate-50 py-4 text-center text-xl font-semibold text-center justify-center">
                <h2><a href="index.php">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="Contactus.php">Contact Us</a></h2>
            </div>
        </div>
        <div class="absolute top-28 left-10  lg:hidden block">
            <h1 class="text-2xl font-semibold text-white">Contact Us</h1>
            <div class="flex gap-4 items-center px-4 my-5 opacity-95 bg-slate-50 py-4 text-center text-md font-semibold text-center justify-center">
                <h2><a href="">Home</a></h2>
                <div class="bg-red-600 text-red-600 rounded-full w-1 px-1 py-1"></div>
                <h2><a href="">Contact Us</a></h2>
            </div>
        </div>
    </div>

   <!-- ...................CONTACT US ...................... -->
   <div class="pt-[97px]">
   <?php
          
          if($insert == true){
          echo "<p id='msg' class='submitMsg py-4 text-center bg-green-300'>Massage submitted succesfully.Thank You</p>";
          }
      ?>
      </div>

    <!-- ...................CONTACT US...................... -->
    <div class="container mx-auto my-10 px-8 grid lg:grid-cols-3 grid-cols-1 gap-5 lg:my-20">     
                    <div class="flex gap-5">
                        <div class="">
                        <span class="text-5xl font-semibold text-red-600 "><i class="fa-solid fa-phone"></i></span>
                        </div>
                        <div>
                        <h1 class="uppercase font-semibold text-xl text-sky-950 ">Phone Number</h1>
                        <p class="my-2 text-md  text-gray-400"><a href="tel:022 49716152">022 49716152</a></p>
                        <p class="my-2 text-md  text-gray-400"><a href="tel:022 4971292">022 4971292</a></p>
                        </div>
                    </div>
                    <div class="flex gap-5">
                        <div class="">
                    <span class="text-5xl font-semibold text-red-600 my-5 "><i class="fa-solid fa-location-dot"></i></span>
                    </div>
                    <div class="pr-8">
                        <h1 class="uppercase font-semibold text-xl text-sky-950 ">Location</h1>
                        <p class="my-2 text-md text-gray-400 leading-8 text-justify ">1st Floor, Unit No 18, Nand Ghanshayam Industrial Estate, Off Mahakali Caves Rd, Andheri East Mumbai, 400093</p>
                        </div>
                    </div>
                    <div class=" flex  gap-5 lg:justify-center">
                        <div class="">
                        <span class="text-5xl font-semibold text-red-600"><i class="fa-solid fa-envelope"></i></span>
                        </div>
                        <div>
                        <h1 class="uppercase font-semibold text-xl text-sky-950 ">Email Address</h1>
                        <p class="my-2 text-md text-gray-400"><a href="mailto: pravin@oriflammeitsolutions.com">pravin@oriflammeitsolutions.com</a></p>
                        <p class="my-2 text-md text-gray-400"><a href="mailto: support@oriflammeitsolutions.com">support@oriflammeitsolutions.com</a></p>
                        </div>
                    </div>
        </div>
    </div>


     <!-- ..............................contactus.................... -->
     <div class="my-10 px-8 lg:py-20 bg-gray-50">
        <div class="flex container mx-auto gap-5">
            <div class="lg:w-1/3">
                <div class="float-right">
                    <h4 class="uppercase text-sm text-red-600 font-semibold mb-5">CONTACT US</h4>
                    <h1 class="text-4xl text-sky-950 font-semibold mb-10">Write Us Any Message</h1>
                    <div class="my-5">
                        <p class="text-lg text-sky-950 font-semibold leading-9">These are the phrases we stay via way of means of in the whole lot we do. Each brand we build, and we create.</p>
                    </div>
                    <div class="text-sky-950"> 
                    <a href="www.twitter.com"  class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-square-twitter"></i></a>
                    <a href="www.facebook.com" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-facebook"></i></a>
                    <a href="www.linkedin.com" class="mx-2 text-2xl font-semibold hover:text-blue-700"><i class="fa-brands fa-google-plus-g"></i></a>
                </div>
                </div>
            </div>
            <div class="lg:w-2/3">
                <form action="contactus.php" method="POST">
                <div class="lg:grid lg:grid-cols-2 gap-5">
                <div class="w-full" >
                    <label for="" class="">Your Name<span class="text-red-600">*</span></label><br>
                    <input type="text" name="name" id="" placeholder="Your name here" class="w-full my-2 text-sm py-2.5 focus:outline-none focus:border-red-600 focus:ring-1 focus:ring-red-600" required>
                </div>
                <div>
                    <label for="">Your Email<span class="text-red-600">*</span></label><br>
                    <input type="text" name="email" id="" placeholder="Your email here" class="w-full my-2 text-sm py-2.5" required>
                </div>
                <div>
                    <label for="">Your Subject<span class="text-red-600">*</span></label><br>
                    <input type="text" name="subject" id="" placeholder="Your subject here" class="w-full my-2 text-sm py-2.5">
                </div>
               
                <div>
                    <label for="">Contact Number<span class="text-red-600">*</span></label><br>
                    <input type="number" name="contact" id="" placeholder="Your phone number here" class="w-full my-2 text-sm py-2.5" required>
                </div>
            </div>
            <div class="my-5">
                <label for="">Massages <span  class="text-red-600">*</span></label>  <br>
                <textarea type="text" name="massage" id="" cols="115" rows="5" placeholder="Tell us few words" class="my-2 text-sm" required></textarea>
                </div>
                <div><button class="bg-red-600 tetx-white px-4 py-2 font-semibold uppercase text-white border-double  border-8 border-white">send Message</button>
            </div>
            </form>
        </div>
       
    </div>
    </div>
    <!-- ..............................contactus.................... -->
<?php include("footer.php") ?> 
<script>
    $(document).ready(function() {
        $("#msg").slideUp(0).delay(1000).slideDown('slow');
        $("#msg").slideDown(1).delay(2000).slideUp('slow');
    });
</script>
