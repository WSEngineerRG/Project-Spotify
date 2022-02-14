const loadFile = function (event) {
    let image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};

document.addEventListener('contextmenu', event => event.preventDefault());

function search() {

}


