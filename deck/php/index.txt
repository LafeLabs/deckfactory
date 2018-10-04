<!doctype html>
<html>
    <head>
        <title>Scroll Reader</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.0/MathJax.js?config=TeX-AMS-MML_HTMLorMML"></script>
   <script>
	MathJax.Hub.Config({
		tex2jax: {
		inlineMath: [['$','$'], ['\\(','\\)']],
		processEscapes: true,
		processClass: "mathjax",
        ignoreClass: "no-mathjax"
		}
	});//			MathJax.Hub.Typeset();//tell Mathjax to update the math
</script>
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
    </head>
    <body>
            <a href = "../image2deck/">
                <img src = "../factory_symbols/combiner.svg" style = "width:80px"/>
            </a>
        <a href ="editor.php">
            <img src = "../factory_symbols/editor.svg" style = "width:80px"/>
            </a>
        <br>
        <a href  ="../">            
            <img src = "../factory_symbols/factory.svg" style = "width:80px"/>
        </a>
        <h1>Decks</h1>
    <?php
    $files = scandir(getcwd()."/decks");
    echo "<ul>";
    foreach($files as $filename){
        if($filename != "." && $filename != ".."){
           echo  "\n<li><a href = \"decks/".$filename."/\">".$filename."/</a></li>\n";
        }
    }
    echo "</ul>";
    
    
    ?>
        <style>
        
        </style>
    </body>
</html>