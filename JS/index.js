const loadFile = function (event) {
    let image = document.getElementById("output");
    image.src = URL.createObjectURL(event.target.files[0]);
};
window.addEventListener('load resize', () => {
    let content = document.querySelectorAll('iframe[src*="embed.spotify.com"]');
    content.forEach()( () => {
        content.style.width= content.parentNode.style.width;
        content.setAttribute.src= content.setAttribute.src;
        content.classList.remove('loaded');

        content.addEventListener('load', () => {
            content.classList.add('loaded');
        });
    });
});
function search() {
    href:'https://api.spotify.com/v1/search?<?=$_GET['Search']?>')
    postMessage('https://embed.spotify.com/search/<?=$_GET['Search']?>')
}