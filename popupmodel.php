<style>
/* ....popup modal.... */
.content {
    padding: 0 5rem;
}

.popup {
    position: fixed;
    top: 0;
    width: 100vw;
    height: 100vh;
    background-color: rgba(55, 55, 55, 0.5);
    display: grid;
    place-content: center;
    opacity: 0;
    pointer-events: none;
    transition: 200ms ease-in-out opacity;
    /* overflow: hidden */
    z-index: 999;

}

.popup-content {
    width: clamp(200px, 90vw, 400px);
    background-color: #fafafa;
    /* padding: clamp(1.5rem, 100vw, 3rem); */
    box-shadow: 0 0 .5em rgba(0, 0, 0, .5);
    /* border-radius: .5em; */
    opacity: 100;
    transform: translateY(20%);
    transition: 200ms ease-in-out opacity,
        200ms ease-in-out transform;
    position: relative;
    top: 50px;
    border-radius: 10px;

}

.close {
    position: absolute;
    top: -20px;
    right: -5px;
}

@media only screen and (max-width: 768px) {

    /* For mobile phones: */
    .popup-content {
        padding: 0px;
    }
}

.popup h1 {
    position: absolute;
    top: 2rem;
    right: 2rem;
    line-height: 1;
    cursor: pointer;
    user-select: none;
}

.popup h1:active {
    transform: scale(.9);
}

.showPopup {
    opacity: 1;
    transform: translateY(0);
    pointer-events: all;
}

/* ....popup modal.... */
</style>

<!-- .............................Only once popup modal............................ -->
<div class="popup" id="mymodal">
    <div class="popup-content">
        <div class="">
            <span id="" class="close text-red-600">
                <h1 class="font-extrabold">X</h1>
            </span>

            <div class="my-3 p-3">
                <h2 class="text-xl font-extrabold mb-5 text-sky-950">Subscribe to our free E-mailer to stay on
                    top of the industry news and insights.</h2>
                <img src="https://images.cointelegraph.com/cdn-cgi/image/format=auto,onerror=redirect,quality=90,width=1434/https://s3.cointelegraph.com/uploads/2023-07/7851044a-a84e-489a-b67c-fc7cd08c1ebb.jpg"
                    alt="" class="my-2">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                    <div class="text-center">
                        <span class="py-2  text-red-600 text-sm error"><?php //echo "\n" . $emailErr; 
                                                                        ?></span>
                    </div>
                    <input type="email" name="email" id="" placeholder="Enter your E-mail"
                        class="py-2 px-2 border-2 border-black  w-full opacity-75 rounded-lg focus:outline-none">


                    <button type="submit"
                        class="button px-4 rounded-lg my-3 py-2 bg-red-600 border-2 border-sky-950 text-white font-semibold">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- .............................Only once popup modal............................ -->

<!-- .............................Only once popup modal............................ -->
<script>
const popup = document.querySelector(".popup");
// console.log(popup)
const x = document.querySelector('.close')

x.addEventListener('click', () => {
    popup.classList.remove('showPopup');
    popup.childNodes[1].classList.remove('showPopup');
})

//   function myFunction() {
//     popup.classList.remove("showPopup");
//     popup.childNodes[1].classList.remove("showPopup");
//   }
// console.log(myFunction());

if (!sessionStorage.getItem("showPopup")) {
    // If not, set the popupOpened key to true and execute your code here
    sessionStorage.setItem("showPopup", true);
    window.addEventListener(
        "load",
        () => setTimeout(() => {
            popup.classList.add("showPopup");
            popup.childNodes[1].classList.add("showPopup");
        }, 5000)
    );

    // Your code here
    console.log("This is the first time the popup has been opened!");
} else {
    // If yes, do nothing or execute some other code
    console.log("The popup has been opened before.");
}
</script>