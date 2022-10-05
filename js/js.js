// slider

var slideIndex = 0;
showSlides();

function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
       }
       slideIndex++;
       if(slideIndex > slides.length) {slideIndex = 1}
       slides[slideIndex-1].style.display = "block";
       setTimeout(showSlides,6000);
}

// modal


function pintarmodal() {

       document.getElementById('Rules').innerHTML += ` 
               <div class="cajarules">
           </div>`;
     
     
     };


function abrirModal() {
       pintarmodal();
       document.getElementById('myModal').style.display = 'block';
     }
     
     function cerrarModal() {
       document.getElementById('myModal').style.display = 'none';
     }


    //menu
    function Menuvisible() {
      
       document.getElementById('menu').style.display = 'block';
       document.getElementById('iconomenu').style.display = 'none';
       document.getElementById('iconoCerrarMenu').style.display = 'block';

    } 

    
        //menu
        function MenuCerrar() {
      
              document.getElementById('menu').style.display = 'none';
              document.getElementById('iconoCerrarMenu').style.display = 'none';
              document.getElementById('iconomenu').style.display = 'block';

       
           } 