<style>
/*..................cookies.............*/

p {
    margin: 15px 0;
    line-height: 2;
}

/* .wrapper {
    padding: 32px;
} */

.cookie-container {
    position: fixed;
    bottom: -100%;
    width: 30%;
    margin: 50px;
    right: 0;
    background: rgb(8, 35, 102);
    padding: 10px 10px;
    color: #f5f6fa;
    padding: 0 32px;
    box-shadow: 9px 8px 42px -3px rgba(0, 0, 0, 0.79);
    -webkit-box-shadow: 9px 8px 42px -3px rgba(0, 0, 0, 0.79);
    -moz-box-shadow: 9px 8px 42px -3px rgba(0, 0, 0, 0.79);
    z-index: 100;
    transition: 400ms;
    border-radius: 30px;
    text-align: center;
}

.cookie-container h4 {
    font-size: 24px;
    margin: 0px;
}

.cookie-container img {
    margin-top: 10px;
    width: 100px;
    height: 100px;

}

.cookie-container.active {
    bottom: 0;
}

.cookie-container a {
    color: #f5f6fa;
}

.cookie-btn {
    background: #fff;
    border: 0;
    color: #00263a;
    padding: 12px 48px;
    font-size: 17px;
    font-weight: 500;
    margin-bottom: 16px;
    border-radius: 8px;
    cursor: pointer;
    margin-right: 5px;
}

.cookie-Cancelbtn {
    background: #fff;
    border: 0;
    color: #00263a;
    padding: 12px 48px;
    font-size: 17px;
    font-weight: 500;
    margin-bottom: 16px;
    border-radius: 8px;
    cursor: pointer;
}

/*..................cookies.............*/
</style>

<!--............cookies...............-->
<div class="cookie-container">
    <img src="img/cookie.png" alt="" class="">
    <h4>Our cookies</h4>
    <p>
        We use cookies to make your experience of our websites better. By using and further navigating
        this website you accept this detailed information about the use of cookies on this website.
    </p>
    <!--<div><a href="href="https://www.freeprivacypolicy.com/live/c758a6fd-548a-4f3d-b1ea-97a73d5da9ad"">Privacy Plolicy</a></div>-->
    <button class="cookie-btn">
        Accept
    </button>

    <button class="cookie-Cancelbtn">
        Cancel
    </button>
</div>
<!--............cookies...............-->


<script>
const cookieContainer = document.querySelector(".cookie-container");
const cookieButton = document.querySelector(".cookie-btn");
const Cookiecancel = document.querySelector(".cookie-Cancelbtn")
cookieButton.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "true");
});

Cookiecancel.addEventListener("click", () => {
    cookieContainer.classList.remove("active");
    localStorage.setItem("cookieBannerDisplayed", "fasle");
});

setTimeout(() => {
    if (!localStorage.getItem("cookieBannerDisplayed")) {
        cookieContainer.classList.add("active");
    }
}, 2000);
</script>