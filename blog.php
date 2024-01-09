<?php include("header.php") ?>
<style>
 
/*PEN STYLES*/
/* * {
  box-sizing: border-box;
} */

/* body {
  background: #f1f1f1;
  display: flex;
  flex-direction: column;
  font-size: 1rem;
  justify-content: center;
  align-items: center;
  height: 100vh;
} */

.blog-card {
  display: flex;
  flex-direction: column;
  margin: 150px auto;
  box-shadow: 0 3px 7px -1px rgba(0, 0, 0, 0.1);
  margin-bottom: 1.6%;
  background: #fff;
  line-height: 1.4;
  font-family: sans-serif;
  border-radius: 5px;
  overflow: hidden;
  z-index: 0;
}
.blog-card a {
  color: inherit;
}
.blog-card a:hover {
  color: black;
}
.blog-card:hover .photo {
  transform: scale(1.3) rotate(3deg);
}
.blog-card .meta {
  position: relative;
  z-index: 0;
  height: 200px;
}
.blog-card .photo {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  background-size: cover;
  background-position: center;
  transition: transform 0.2s;
}
.blog-card .details,
.blog-card .details ul {
  margin: auto;
  padding: 0;
  list-style: none;
}
.blog-card .details {
  position: absolute;
  top: 0;
  bottom: 0;
  left: -100%;
  margin: auto;
  transition: left 0.2s;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  padding: 10px;
  width: 100%;
  font-size: 0.9rem;
}
.blog-card .details a {
  -webkit-text-decoration: dotted underline;
    text-decoration: dotted underline;
}
.blog-card .details ul li {
  display: inline-block;
}
.blog-card .details .author:before {
  /* font-family: FontAwesome; */
  margin-right: 10px;
  content: "";
}
.blog-card .details .date:before {
  font-family: FontAwesome;
  margin-right: 10px;
  content: "";
}
.blog-card .details .tags ul:before {
  /* font-family: FontAwesome; */
  content: "";
  margin-right: 10px;
}
.blog-card .details .tags li {
  margin-right: 2px;
}
.blog-card .details .tags li:first-child {
  margin-left: -4px;
}
.blog-card .description {
  padding: 1rem;
  background: #fff;
  position: relative;
  z-index: 1;
}
/* .blog-card .description h1,
.blog-card .description h2 {
  font-family: Poppins, sans-serif;
} */
.blog-card .description h1 {
  line-height: 1;
  margin: 0;
  font-size: 1.7rem;
}
.blog-card .description h2 {
  font-size: 1rem;
  font-weight: 300;
  text-transform: uppercase;
  color: #a2a2a2;
  margin-top: 5px;
}
.blog-card .description .read-more {
  text-align: right;
}
.blog-card .description .read-more a {
  color: #082366;
  display: inline-block;
  position: relative;
}
.blog-card .description .read-more a:after {
  content: "";
  font-family: FontAwesome;
  margin-left: -10px;
  opacity: 0;
  vertical-align: middle;
  transition: margin 0.3s, opacity 0.3s;
}
.blog-card .description .read-more a:hover:after {
  margin-left: 5px;
  opacity: 1;
}
.blog-card p {
  position: relative;
  margin: 1rem 0 0;
}
.blog-card p:first-of-type {
  margin-top: 1.25rem;
}
.blog-card p:first-of-type:before {
  content: "";
  position: absolute;
  height: 5px;
  background: #082366;
  width: 35px;
  top: -0.75rem;
  border-radius: 3px;
}
.blog-card:hover .details {
  left: 0%;
}
@media (min-width: 640px) {
  .blog-card {
    flex-direction: row;
    max-width: 700px;
  }
  .blog-card .meta {
    flex-basis: 40%;
    height: auto;
  }
  .blog-card .description {
    flex-basis: 60%;
  }
  .blog-card .description:before {
    transform: skewX(-3deg);
    content: "";
    background: #fff;
    width: 30px;
    position: absolute;
    left: -10px;
    top: 0;
    bottom: 0;
    z-index: -1;
  }
  .blog-card.alt {
    flex-direction: row-reverse;
  }
  .blog-card.alt .description:before {
    left: inherit;
    right: -10px;
    transform: skew(3deg);
  }
  .blog-card.alt .details {
    padding-left: 25px;
  }
}
</style>
<div>
<div class="blog-card">
    <div class="meta">
      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">John Doe</a></li>
        <li class="date">Aug. 24, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">HTML</a></li>
            <li><a href="#">CSS</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Learning to Code</h1>
      <h2>Opening a door to the future</h2>
      <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
  <div class="blog-card alt">
    <div class="meta">
      <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
      <ul class="details">
        <li class="author"><a href="#">Jane Doe</a></li>
        <li class="date">July. 15, 2015</li>
        <li class="tags">
          <ul>
            <li><a href="#">Learn</a></li>
            <li><a href="#">Code</a></li>
            <li><a href="#">JavaScript</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="description">
      <h1>Mastering the Language</h1>
      <h2>Java is not the same as JavaScript</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
      <p class="read-more">
        <a href="#">Read More</a>
      </p>
    </div>
  </div>
</div>
<!-- 
...............................blogs..................................... -->

<div class="container mx-auto lg:mb-10 my-10 px-8">
        <div class="text-center py-10">
    <h3 class=" uppercase text-red-800 text-3xl font-semibold">OUR BLOGS</h3>
    <h4 class=" text-xl font-extrabold mt-4 text-sky-950 ">Read Our Latest Blogs</h4>
    </div>
    <div class="grid lg:grid-cols-4 md:grid-cols-2 gap-10 ">
        <div  class=" card hover:drop-shadow-xl border overflow-hidden">
            <div class="h-60">
            <img src="img/Blog images/Much Long Life of The Equipment.jpg" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
        </div>
            <div class="p-4 bg-white">
            <span class="my-2 text-red-600 text-sm">April 17, 2023</span> /
                <span class="my-2 text-red-600 text-sm">Auth by, Sachin</span>
                <h3 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Top 10 Benefits of Computer Annual Maintenance Services.</h3>
               <div class="border-t border-gray-400">
                <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2"> <a href="https://www.oriflammeitsolutions.com/blogs/top-10-benefits-of-computer-annual-maintenance-services" target="_blank">Read More</a></button>
                </div>
        </div>
        </div>
        
        <div  class="card hover:drop-shadow-xl border overflow-hidden">
            <div class="h-60">
            <img src="img/marketing.jpg" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
        </div>
            <div class="p-4 bg-white">
            <span class="my-2 text-red-600 text-sm">April 17, 2023</span> /
                <span class="my-2 text-red-600 text-sm">Auth by, Sachin</span>
                <h3 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Supercharge Your Business with Expert IT Support: Find the Best Helpdesk Company in Andheri!</h3>
               <div class="border-t border-gray-400">
                <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button>
                </div>
        </div>
        </div>

        <div class=" card hover:drop-shadow-xl border overflow-hidden">
            <div class="h-60">
            <img src="img/Top-notch IT Services.png" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
        </div>
            <div class="p-4 bg-white">
            <span class="my-2 text-red-600 text-sm">April 17, 2023</span> /
                <span class="my-2 text-red-600 text-sm">Auth by, Sachin</span>
                <h3 class="my-2 text-2xl font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Streamline Your Operations with Top-notch IT Services: Unleash the Potential of Your Business!</h3>
               <div class="border-t border-gray-400">
                <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button>
                </div>
        </div>
        </div>
        <div class=" card hover:drop-shadow-xl border overflow-hidden">
            <div class="h-60">
            <img src="img/Top-notch IT Services.png" alt="" class="bg-cover w-full h-full hover:scale-110 transition duration-700 ease-in-out">
        </div>
            <div class="p-4 bg-white">
                <span class="my-2 text-red-600 text-sm">April 17, 2023</span> /
                <span class="my-2 text-red-600 text-sm">Auth by, Sachin</span>
                <h3 class="my-2 text-lg font-semibold text-sky-950 hover:text-red-600 cursor-pointer">Streamline Your Operations with Top-notch IT Services: Unleash the Potential of Your Business!</h3>
               <div class="border-t border-gray-400">
                <button class="border border-red-700 hover:border-sky-800 mt-2 bg-red-600 hover:bg-sky-950 text-white hover:text-red-600 text-sm font-semibold px-4 py-2 rounded-md my-2">Read More</button>
                </div>
        </div>
        </div>
        </div>
    </div>

<?php include ("footer.php")?>