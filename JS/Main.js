window.addEventListener("DOMContentLoaded", (event) => {
    console.log("DOM entièrement chargé et analysé");
    addactiveSt.style.textShadow='#6fd862 0px 0px 17px';
});


//option: remove right click \ when DevMode comment line !
document.addEventListener('contextmenu', event => event.preventDefault());


const someCheckbox = document.getElementById('boxCheck');
let addactiveSt = document.getElementById('connect')
let addactiveSnd = document.getElementById('creation')

someCheckbox.addEventListener('change', e => {
    if(e.target.checked === true) {
        addactiveSnd.style.textShadow='#6fd862 0px 0px 17px';
        addactiveSt.style.textShadow='';
        console.log("boolean value: ", e.target.checked)
    }
    if(e.target.checked === false) {
        addactiveSt.style.textShadow='#6fd862 0px 0px 17px';
        addactiveSnd.style.textShadow='';
        console.log("boolean value: ", e.target.checked)
    }
});


addactiveSnd.addEventListener('click', () =>{
    someCheckbox.checked = true;
    addactiveSnd.style.textShadow='#6fd862 0px 0px 17px';
    addactiveSt.style.textShadow='';
    console.log("boolean value :", someCheckbox.checked);
})

addactiveSt.addEventListener('click', () =>{
    someCheckbox.checked = false;
    addactiveSt.style.textShadow='#6fd862 0px 0px 17px';
    addactiveSnd.style.textShadow='';
    console.log("boolean value :", someCheckbox.checked);
})

addactiveSnd.addEventListener('mouseover', ev =>{
    ev.target.style.cursor='pointer';
})

addactiveSt.addEventListener('mouseover', ev =>{
    ev.target.style.cursor='pointer';
})

function emptychecked(){
    console.log('ok')
}

function emptycheckedtwo(){
    console.log('ok2')
}

function IsEmpty() {
    let Pass = document.getElementById('logpass');
    let Mail = document.getElementById('logemail');
    let Form = document.getElementById('connectForm');
    let Sends = document.getElementById('Send');

    if (Mail.value == "" && Pass.value == "") {
        // Sends.disabled='true';
        return alert("Formulaire incorrect !");
    }else{
        Form.action='./Process/process_auth.php';
    }

    if (emptychecked() == true && emptycheckedtwo() == true){
        Sends.disabled='false';
    }
}

function IsEmptyCreation(){
    let Name = document.getElementById('logName');
    let Pass = document.getElementById('logPass');
    let Mail = document.getElementById('logEmail');
    let Form = document.getElementById('creationForm');

    if (Mail.value == "" && Pass.value == "" && Name.value == "") {
        // Sends.disabled='true';
        return alert("Formulaire incorrect !");
    }else{
        Form.action='./Process/New_account.php';
    }
}



