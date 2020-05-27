// $(".img").mousemove(function(event){
  
    //Both the x and y value are calculated by taking the mouse x,y position on the page and subtracting it from the x,y position of the image on the page. "this" is the hovered element with the class of "img"
    // var mousex = event.pageX - $(this).offset().left;
    // var mousey = event.pageY - $(this).offset().top;
    
    
    //If you just used the mouse position values the translation effect will only go up and to the right, by subtracting half of the length / width of the imagevfrom the values  we get either a positive or negitive number so that the image will move in any direction.
    
    //The 40 controls the amount of "movement" that will happen by giving us a smaller number, feel free to change it to get the effect that you want.
    // var imgx = (mousex - 300) / 40;
    // var imgy = (mousey - 200) / 40;
    
    //Adds a translation css styles to the image element
  //   $(this).css("transform", "translate(" + imgx + "px," + imgy + "px)");
  // });
  
  //This function will fire every time the user mouses off of the image. It resets the translation back to 0.
  // $(".img").mouseout(function(){
  //   $(this).css("transform", "translate(0px,0px)");
  // });
  

//   var slideIndex = 1;
// showSlides(slideIndex);

// function plusSlides(n) {
//   showSlides(slideIndex += n);
// }

// function currentSlide(n) {
//   showSlides(slideIndex = n);
// }

// function showSlides(n) {
//   var i;
//   var slides = document.getElementsByClassName("mySlides");
//   var dots = document.getElementsByClassName("demo");
//   var captionText = document.getElementById("caption");
//   if (n > slides.length) {slideIndex = 1}
//   if (n < 1) {slideIndex = slides.length}
//   for (i = 0; i < slides.length; i++) {
//       slides[i].style.display = "none";
//   }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
//   slides[slideIndex-1].style.display = "block";
//   dots[slideIndex-1].className += " active";
//   captionText.innerHTML = dots[slideIndex-1].alt;
// }
$(document).ready(function() {
  $('a.login-window').click(function() {

      //lấy giá trị thuộc tính href - chính là phần tử "#login-box"
      var loginBox = $(this).attr('href');

      //cho hiện hộp đăng nhập trong 300ms
      $(loginBox).fadeIn("slow");

      // thêm phần tử id="over" vào cuối thẻ body
      $('body').append('<div id="over"></div>');
      $('#over').fadeIn(300);
      
      return false;
  });

  // khi click đóng hộp thoại
  $(document).on('click', "a.close, #over", function() { 
      $('#over, .login').fadeOut(300 , function() {
          $('#over').remove();  
      }); 
      return false;
  });

});

function changeProductList(type, element )
{
  document.getElementById(type).style.display = 'block';

    switch(type){
      case 'livingroom' :
        document.getElementById("Bedroom").style.display = 'none';
        document.getElementById("kitchen").style.display = 'none';
        document.getElementById("bedding").style.display = 'none';
        break;
      
      case 'Bedroom' :
        document.getElementById("livingroom").style.display = 'none';
        document.getElementById("kitchen").style.display ='none';
        document.getElementById("bedding").style.display = 'none';
        break;
      
      case 'kitchen' :
        document.getElementById("livingroom").style.display = 'none';
        document.getElementById("Bedroom").style.display ='none';
        document.getElementById("bedding").style.display = 'none';
        break;

      case 'bedding' :
        document.getElementById("livingroom").style.display = 'none';
        document.getElementById("Bedroom").style.display ='none';
        document.getElementById("kitchen").style.display = 'none';
        break;
    }
};

