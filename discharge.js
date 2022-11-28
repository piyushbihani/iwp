const yes = document.getElementById('yes');
const no = document.getElementById('No');
const indi = document.getElementById('check2b');
const check2b_display = document.getElementById('check2b-display');
check2b_display.style.display = "none";
const yes2 = document.getElementById('yes2');
const no2 = document.getElementById('No2');
const yes2_display = document.getElementById('yes2-display');

yes2_display.style.display = "none";


yes2.addEventListener('click', () => {
    yes2_display.style.display = "block";

})

no2.addEventListener('click', () => {
    yes2_display.style.display = "none";

})










indi.addEventListener('click', () => {
     if (check2b_display.style.display === "none") {
        check2b_display.style.display = "block";
      } else {
        check2b_display.style.display = "none";
      }
})


yes.addEventListener('click', () => {
    const yes_display = document.getElementById('yes-display');
    yes_display.innerHTML = '<label for="total_discharge">13. If yes, total discharge volume per day (m³ ):</label><input type="text" id="total_discharge" name="total_discharge" placeholder="Total discharge m³">';

})

no.addEventListener('click', () => {
    const yes_display = document.getElementById('yes-display');
    yes_display.innerHTML = ' ';

})