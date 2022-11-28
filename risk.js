const yes = document.getElementById('yes');
const no = document.getElementById('no');
yes.addEventListener('click', () => {
    const yes_display = document.getElementById('yes-display');
    yes_display.innerHTML = '<textarea id="waters" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

no.addEventListener('click', () => {
    const yes_display = document.getElementById('yes-display');
    yes_display.innerHTML = ' ';

})

const ad = document.getElementById('ad');
const bd = document.getElementById('bd');
ad.addEventListener('click', () => {
    const ad_display = document.getElementById('ad-display');
    ad_display.innerHTML = '<textarea id="waters" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

bd.addEventListener('click', () => {
    const ad_display = document.getElementById('ad-display');
    ad_display.innerHTML = ' ';

})

const ae = document.getElementById('ae');
const be = document.getElementById('be');
ae.addEventListener('click', () => {
    const ae_display = document.getElementById('ae-display');
    ae_display.innerHTML = '<textarea id="waters" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

be.addEventListener('click', () => {
    const ae_display = document.getElementById('ae-display');
    ae_display.innerHTML = ' ';

})

const af = document.getElementById('af');
const bf = document.getElementById('bf');
af.addEventListener('click', () => {
    const af_display = document.getElementById('af-display');
    af_display.innerHTML = '<textarea id="waters" placeholder="Details..." cols="100" rows="5"></textarea> ';

})

bf.addEventListener('click', () => {
    const af_display = document.getElementById('af-display');
    af_display.innerHTML = ' ';

})


const eg = document.getElementById('eg');
const ea = document.getElementById('ea');
const ec = document.getElementById('ec');
const ee = document.getElementById('ee');
const ef = document.getElementById('ef');
const eg_display = document.getElementById('eg-display');

eg.addEventListener('click', () => {
    eg_display.innerHTML = '<textarea placeholder="Details..." id="wwate" cols="100" rows="5"></textarea>';
})
ea.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ec.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ee.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})
ef.addEventListener('click', () => {
    eg_display.innerHTML = ' ';
})