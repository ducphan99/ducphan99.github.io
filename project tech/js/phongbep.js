function changeProductList(type, element)
{
    document.getElementById(type).style.display = 'block';

    switch(type){
      case 'livingroom1' :
        document.getElementById("workroom1").style.display = 'none';
        document.getElementById("kitchen1").style.display = 'none';
        document.getElementById("exterior1").style.display = 'none';
        document.getElementById("decorations1").style.display = 'none';
        break;
      
      case 'workroom1' :
        document.getElementById("livingroom1").style.display = 'none';
        document.getElementById("kitchen1").style.display ='none';
        document.getElementById("exterior1").style.display = 'none';
        document.getElementById("decorations1").style.display = 'none';
        break;
      
      case 'kitchen1' :
        document.getElementById("livingroom1").style.display = 'none';
        document.getElementById("exterior1").style.display ='none';
        document.getElementById("decorations1").style.display = 'none';
        document.getElementById("workroom1").style.display = 'none';
        break;

      case 'exterior1' :
        document.getElementById("livingroom1").style.display = 'none';
        document.getElementById("decorations1").style.display ='none';
        document.getElementById("kitchen1").style.display = 'none';
        document.getElementById("workroom1").style.display = 'none';
        break;

      case 'decorations1' :
        document.getElementById("livingroom1").style.display = 'none';
        document.getElementById("exterior1").style.display ='none';
        document.getElementById("kitchen1").style.display = 'none';
        document.getElementById("workroom1").style.display = 'none';
        break;
    }
}