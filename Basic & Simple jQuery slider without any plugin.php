<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600);	

html {
  border-top: 5px solid #fff;
  background: #efefef;
  color: #2a2a2a;
}

html, body {
  margin: 0;
  padding: 0;
  font-family: 'Open Sans';
}

h1 {
  margin-left: 15px;
}


 /*
  * [?] START Slider
  * *******************************************/

._slider {
  position: relative;
  overflow: hidden;
  margin-left: 15px;
}
._slider_next,
  	._slider_prev :hover {
  	
  		display: block;
  	

  }
  
  ._slider_next,
  ._slider_prev {
    position: absolute;
    top: 35%;
    z-index: 999;
    display: none;
    width: auto;
    height: auto;
    padding: 2% 4%;
    background: #000;
    color: #fff;
    text-decoration: none;
    font-weight: 600;
    font-size: 2em;
    opacity: 0.8;
    cursor: pointer;
  }
    ._slider:hover {
      opacity: 1;
      -webkit-transition: all 0.2s ease;
    }
    


    ._slider_next {
    right: 0;
  }
  
  ul {
    position: relative;
    height: 500px;
    margin: 0;
    padding: 0;
    list-style: none;
  }
     li {
      float: left;
      margin: 0;
      padding: 0;
      position: relative;
      background: #ccc;
      display: block;
      width: 500px;
      line-height: 200px;
      text-align: center;
    }
  


 /* *******************************************
  * END Slider
  * */

    </style>
</head>
<body>
<h1>Basic &amp; Simple jQuery slider without any plugin</h1>
   <ul>
     <li>Auto-play function</li>
     <li>Pause on mouse-over</li>
     <li>Shows controls on mouse-over</li>
     <li>Dynamic width based on number of li</li>
   </ul>

<div class="_slider">
    <a href="#" class="_slider_next">&#10095;</a>
    <a href="#" class="_slider_prev">&#10094;</a>
    <ul>
        <li>SLIDE 1</li>
        <li>SLIDE 2</li>
        <li>SLIDE 3</li>
        <li>SLIDE 4</li>
    </ul>  
</div>
<script>
    jQuery(document).ready(function ($) {

var interval;
interval = setInterval(function () {
  moveRight();
}, 3000);

$('._slider').mouseover(function(){
  clearInterval(interval);
});

$('._slider').mouseleave(function(){
  interval = setInterval(function () {
    moveRight();
    }, 3000);
});

  var slideCount = $('._slider ul li').length;
  var slideWidth = $('._slider ul li').width();
  var slideHeight = $('._slider ul li').height();
  var sliderUlWidth = slideCount * slideWidth;
  
  $('._slider').css({ width: slideWidth, height: slideHeight });
  
  $('._slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
  
  $('._slider ul li:last-child').prependTo('._slider ul');

  function moveLeft() {
      $('._slider ul').animate({
          left: + slideWidth
      }, 200, function () {
          $('._slider ul li:last-child').prependTo('._slider ul');
          $('._slider ul').css('left', '');
      });
  };

  function moveRight() {
      $('._slider ul').animate({
          left: - slideWidth
      }, 200, function () {
          $('._slider ul li:first-child').appendTo('._slider ul');
          $('._slider ul').css('left', '');
      });
  };

  $('._slider_prev').click(function () {
      moveLeft();
      return false;
  });

  $('._slider_next').click(function () {
      moveRight();
      return false;
  });

});    

</script>
</body>
</html>