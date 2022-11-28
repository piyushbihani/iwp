const seven  = document.getElementById('flexCheckDefault');
const one  = document.getElementById('flexCheckDefault1');
const two = document.getElementById('flexCheckDefault2');
const three = document.getElementById('flexCheckDefault3');
const four = document.getElementById('flexCheckDefault4');
const five  = document.getElementById('flexCheckDefault5');
const six  = document.getElementById('flexCheckDefault6');

const add = document.getElementById('additional');
add.style.display = "none";
one.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
two.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
three.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
four.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
five.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
six.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})
seven.addEventListener('click', () => {
    if (add.style.display === "none") {
        add.style.display = "block";
      } 
})


const others = document.getElementById('others');
const others_display = document.getElementById('others-display');
const country = document.getElementById('country');

others_display.style.display = "none";

country.addEventListener('change', function() {
  if(country.value === "others") {
    others_display.style.display = "block";  
  }
  else {
    others_display.style.display = "none";

  }
}, false);





// others.addEventListener('click', () => {
//   others_display.style.display = "block";
// })


