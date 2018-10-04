<!doctype html>
<html>
    <head>
        <title>Deck Reader</title>
<!-- 
PUBLIC DOMAIN, NO COPYRIGHTS, NO PATENTS.

EVERYTHING IS PHYSICAL
EVERYTHING IS FRACTAL
EVERYTHING IS RECURSIVE

NO MONEY
NO PROPERTY
NO MINING

LOOK AT THE INSECTS
LOOK AT THE FUNGI
LANGUAGE IS HOW THE MIND PARSES REALITY
-->
<!--Stop Google:-->
<META NAME="robots" CONTENT="noindex,nofollow">
<script src = "https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.js"></script>
</head>
<body>
<a id = "editorlink" href = "deckeditor.php">
                <img src = "../../../factory_symbols/editor.svg" style = "width:50px"/>
</a>
<div id = "deckdatadiv" style = "display:none">
        <?php
            if(isset($_GET['url'])){
                echo file_get_contents($_GET['url']);
            }
            else{
                echo file_get_contents("html/deck.txt");
            }
        ?>
</div>
<div id = "topscreen">
    <h1 id = "maintitle"></h1>
    <img id = "mainimage"/>
</div>
<script>
mainimage = document.getElementById("mainimage");
maintitle = document.getElementById("maintitle");

slides = document.getElementById("deckdatadiv").getElementsByClassName("slide");
slideIndex = 0;

redraw();

function redraw(){
    mainimage.src = slides[slideIndex].getElementsByTagName("IMG")[0].src;
    maintitle.innerHTML = slides[slideIndex].getElementsByTagName("H1")[0].innerHTML;
}
function nextslide(){
    slideIndex++;
    if(slideIndex > slides.length - 1){
        slideIndex = 0;
    }
    redraw();
}
function prevslide(){
    slideIndex--;
    if(slideIndex < 0){
        slideIndex = slides.length - 1;
    }
    redraw();
}
document.getElementById("topscreen").onclick = function(){
    nextslide();
}
mainimage.onload = function(){
    if(this.width < innerWidth){
        this.style.left = (0.5*(innerWidth - this.width)).toString() + "px";
    }
    else{
        this.style.left = "0px";
        this.style.width = innerWidth;
    }
}


document.getElementById("topscreen");
mc = new Hammer(document.getElementById("topscreen"));
mc.on("swipeleft swiperight", function(ev) {
    if(ev.type == "swipeleft"){
        prevslide();
    }
    if(ev.type == "swiperight"){
        nextslide();
    }
});        
    
</script>

<style>
h1{
    position:absolute;
    width:100%;
    text-align:center;
    font-family:Helvetica;
    z-index:0;
    top:15%;
    left:0px;
    overflow:hidden;
}
#mainimage{
    position:absolute;
    z-index:-1;
    top:0px;
    overflow:hidden;
    height:100%;
}
#topscreen{
    position:absolute;
    left:0px;
    right:0px;
    top:0px;
    bottom:0px;
    z-index:1;
}
#editorlink{
    position:absolute;
    z-index:2;
    left:0px;
    top:0px;
}
</style>
</body>
</html>