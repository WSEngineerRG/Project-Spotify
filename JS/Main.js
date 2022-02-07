window.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM entièrement chargé et analysé");
    addactiveSt.style.textShadow='#6fd862 0px 0px 17px';
});


//option: remove right click \ when DevMode comment line !
// document.addEventListener('contextmenu', event => event.preventDefault());
//

const someCheckbox = document.getElementById('boxCheck');
let addactiveSt = document.getElementById('connect')
let addactiveSnd = document.getElementById('creation')

someCheckbox.addEventListener('change', e => {
    if(e.target.checked === true) {
        addactiveSnd.style.textShadow='#6fd862 0px 0px 17px';
        addactiveSt.style.textShadow='';
        console.log("Checkbox is checked - boolean value: ", e.target.checked)
    }
    if(e.target.checked === false) {
        addactiveSt.style.textShadow='#6fd862 0px 0px 17px';
        addactiveSnd.style.textShadow='';
        console.log("Checkbox is not checked - boolean value: ", e.target.checked)
    }
});