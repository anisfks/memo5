var open=document.getElementById('open');
var close=document.getElementById('close');
var windw=document.getElementById('windw');





function openk(){
    windw.style.display = 'block';

    
}

function closek(){
    windw.style.display = 'none';
   
}

window.onclick = function(event) {
    if (event.target == windw) {
      windw.style.display = "none";
    }
  }


  window.onclick = function(event) {
    if (event.target == windw1) {
      windw1.style.display = "none";
    }
  }





var open_1=document.getElementById('open1');
var closem_1=document.getElementById('close1');
var windw_1=document.getElementById('windw1');
function openl(){
    windw_1.style.display = 'block';
    
}

function closel(){
    windw_1.style.display = 'none';
}




var small_menu = document.querySelector('.toggle_menu')
var menu = document.querySelector('.menu')

small_menu.onclick = function(){
     small_menu.classList.toggle('active');
     menu.classList.toggle('responsive');
}
  




document.addEventListener('DOMContentLoaded', function () {
  const toggleBtns = document.querySelectorAll('.toggle-btn');

  toggleBtns.forEach(btn => {
      btn.addEventListener('click', function () {
          const answer = this.nextElementSibling;
          answer.classList.toggle('active');

          // Toggle the rotation of the button
          this.classList.toggle('rotate');
      });
  });
});


  









