(function(){
    var perload = document.getElementById("perload");
    var loading = 0;
    var id = setInterval(frame,64);
    
    function frame(){
      if(loading == 100) {
        clearInterval(id);
        window.open("index.html","_self")
      } else {
        loading = loading +1;
        if(loading == 90) {
          perload.style.animation = "fadeout 1s ease";
        }
      }
    }
    })();