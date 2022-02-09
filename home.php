<?php
include "./Utils/Header.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="Style/Main.css">
<link rel="icon" sizes="16x16" type="image/png" href="https://open.scdn.co/cdn/images/favicon16.c498a969.png"/>
<title>Spotify - Home Page</title>
<html lang="en">
<div class="Root__top-bar">
    <header class="Top_bar bg_color">
        <div class="Top_bar_arrow">
            <button class="Top_bar_arrowPos">
                <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24" class="Svg-ytk21e-0 Arrow">
                    <polyline points="16 4 7 12 16 20" fill="none" stroke="#181818"></polyline>
                </svg>
            </button>
            <button data-testid="top-bar-forward-button" aria-hidden="true" aria-label="Avancer" disabled=""
                    class="Top_bar_arrowPos pPvJxOdreDkW38tFdWqW">
                <svg role="img" focusable="false" height="24" width="24" viewBox="0 0 24 24"
                     class="Svg-ytk21e-0 Arrow ">
                    <polyline points="8 4 17 12 8 20" fill="none" stroke="#181818"></polyline>
                </svg>
            </button>
        </div>
        <div class="Search">
            <div class="Search_Container">
                <div class="Search_Box">
                    <form method="get">
                        <input type="text" name="Search" placeholder="Artistes, titres ou podcasts" class="Search_input Search_input_option" data-testid="search-input" value="<?=$_GET['Search']?>" onsubmit="search()" >
                    </form>
                    <div class="Search_icon"><span class="Search_icon_option">
                            <svg role="img" height="24" width="24" class="Svg-sc-1bi12j5-0 hDgDGI mOLTJ2mxkzHJj6Y9_na_" viewBox="0 0 24 24">
                                <path d="M16.387 16.623A8.47 8.47 0 0019 10.5a8.5 8.5 0 10-8.5 8.5 8.454 8.454 0 005.125-1.73l4.401 5.153.76-.649-4.399-5.151zM10.5 18C6.364 18 3 14.636 3 10.5S6.364 3 10.5 3 18 6.364 18 10.5 14.636 18 10.5 18z"></path></svg></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="profile-pic">
            <label class="-label" for="file">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-camera-fill" viewBox="0 0 16 16">
                    <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                    <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                </svg>
                <i class="bi bi-camera-fill"></i>
            </label>
            <input id="file" type="file" onchange="loadFile(event)"/>
            <img src="https://cdn-icons-png.flaticon.com/512/3237/3237472.png" id="output" width="200"/>
        </div>
        <div class="User_Pos">
            <p class="user">Xavier</p>
        </div>
</div>
</header>
<main>
    <div data-testid="grid-container" class="Spotify_Embed_Params Spotify_Embed_Option BtbiwMynlB4flsYu_hA2" style="--column-width:182px;--minimumColumnWidth:180px;">
        <div class="spotify-embeds">
            <div class="spotify-embed"><iframe src="https://embed.spotify.com/?uri=spotify:user:oosabaj:playlist:2UDe8QqHAXUaLrdb0QsDGE" width="auto" height="80" allowtransparency="true"></iframe></div>
            <div class="spotify-embed"><iframe src="https://embed.spotify.com/?uri=spotify:user:oosabaj:playlist:51vBEL5eVtII7uIEDltWwB" width="auto" height="80" allowtransparency="true"></iframe></div>
            <div class="spotify-embed"><iframe src="https://embed.spotify.com/?uri=spotify:user:dembsky:playlist:7qfcDxieRKE6VOFE3YNKbz" width="auto" height="80" allowtransparency="true"></iframe></div>
            <div class="spotify-embed"><iframe src="https://embed.spotify.com/?uri=spotify:user:thech053none:playlist:3epVhtO7ZWOB4DzuJFY5da" width="auto" height="80" allowtransparency="true"></iframe></div>
        </div>
    </div>
</main>
<script>
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
</script>
