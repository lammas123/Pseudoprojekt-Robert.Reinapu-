<!doctype html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link type="text/css" rel="stylesheet" href="stylesheet.css"/>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<!--Nupu loomine-->

<button onclick="myFunctioni()"><a href="http://www.khk.ee" a/>Tere maailm</button>
<script>
    function myFunctioni() {
        alert("Tere Maailm!");
    }
</script>
<!--Ülesanne 4-->
<div><a href="www.khk.ee" onclick="myFunction();return false">Jääme siia!</a></div>

<script>
    function myFunction() {
        alert("Jääme Siia")
        "return false"
    }
</script>
<!--Kass koeraks-->
<!--<img id="cat" src="media/cat.jpg">
<script>
    $("img#meow").click(function () {
        if($(this).attr("src") == "Media/cat.jpg")
        {
            $(this).attr("src", "Media/dog.png");
        }
        else
        {
            $(this).attr("src","Media/cat.jpg");
        }
    });
</script>-->
<img id="cat" src="Media/cat.jpg">
<span class="buttons">
    <button id="b1">Blue</button>
    <button id="b2">Red</button>
    <button id="b3">Green</button>
    <button id="kass">Toggle Cat</button>
</span>
<script>
    $(document).ready(function () {
        $('#cat').click(function () {
            $(this).replaceWith('<img src="Media/dog.jpg">');
        });
    });
    //Nuppude funktsioon
    $('#b1').click(function () {
        $('body').css('backgroundColor', $('#b1').text());
    });
    $('#b2').click(function () {
        $('body').css('backgroundColor', $('#b2').text());
    });
    $('#b3').click(function () {
        $('body').css('backgroundColor', $('#b3').text());
    });

    //Toggle pilt
    $('#kass').click(function () {
        $("img").toggle();
    });

    // 10. Ylesanne

    function allowRightClick(allow) {
        if (!allow) {
            if (document.all && !document.getElementById) {
                document.onmousedown = false;
            }
            document.oncontextmenu = new Function("return false");
        }
        else {
            document.oncontextmenu = null;
        }
    }
    $(document).ready(function () {
        allowRightClick(false);
        $('#pilt').click(function () {
        });
        $('.btn').click(function () {
            $('body').css('backgroundColor', $(this).text());
        });
        $('#rightClick').click(function () {
            allowRightClick(true);
        });
    });

</script>

<button id="rightClick">Luba parem klõps</button>

</body>
</html>
