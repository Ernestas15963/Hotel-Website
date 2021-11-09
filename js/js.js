let newN = document.querySelector('.open');

function openNav() {
    document.getElementById("myNav").style.width = "100%";
    newN.style.display = 'none';
}
  
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    newN.style.display = 'block';
    
}
