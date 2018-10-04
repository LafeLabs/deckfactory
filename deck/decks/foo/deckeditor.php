 <!doctype html>
<html>
<head>
    <title>Deck Editor</title>
</head>
<body>
<div id = "deckscroll">
<?php    
echo file_get_contents("html/deck.txt");    
?>
</div>
<table id = "linktable">
    <tr>
        <td><a href = "index.php">
        <img src = "../../../factory_symbols/deck.svg" style = "width:80px"/>
        </a></td>
        <td><a href = "../../">
                <img src = "../../../factory_symbols/factory.svg" style = "width:80px"/>
        </a></td>
    </tr>
</table>

<script>

currentFile = "html/deck.txt";
slides = document.getElementById("deckscroll").getElementsByClassName("slide");

for(var index = 0;index < slides.length;index++){
    if(slides[index].getElementsByTagName("INPUT").length == 0){
        var newinput = document.createElement("INPUT");
        slides[index].appendChild(newinput);
        newinput.onkeyup = function(){
            this.parentElement.getElementsByTagName("H1")[0].innerHTML = this.value;
            data = encodeURIComponent(document.getElementById("deckscroll").innerHTML);
            var httpc = new XMLHttpRequest();
            var url = "filesaver.php";
            httpc.open("POST", url, true);
            httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            httpc.send("data="+data+"&filename="+currentFile);//send text to filesaver.php
        }

    }
    else{
        slides[index].getElementsByTagName("INPUT")[0].value = slides[index].getElementsByTagName("H1")[0].innerHTML;
        slides[index].getElementsByTagName("INPUT")[0].onkeyup = function(){
            this.parentElement.getElementsByTagName("H1")[0].innerHTML = this.value;
            data = encodeURIComponent(document.getElementById("deckscroll").innerHTML);
            var httpc = new XMLHttpRequest();
            var url = "filesaver.php";
            httpc.open("POST", url, true);
            httpc.setRequestHeader("Content-Type", "application/x-www-form-urlencoded;charset=utf-8");
            httpc.send("data="+data+"&filename="+currentFile);//send text to filesaver.php
        }
    }
}

</script>
<style>

#linktable{
    position:absolute;
    right:0px;
    top:0px;
}

#deckscroll{
    position:absolute;
    background-color:white;
    overflow:scroll;
    color:black;
    left:10px;
    bottom:10%;
    width:50%;
    top:5em;
    border:solid;
    border-width:3px;
    border-radius:0.5em;
    padding:1.5em 1.5em 1.5em 1.5em;
    font-family: Book Antiqua, Palatino, Palatino Linotype, Palatino LT STD, Georgia, serif;
}


#scrolldisplay h1,h2,h3{
    text-align:center;
}



</style>

</body>
</html>