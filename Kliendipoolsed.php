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
<button type="button" onclick="alert('Tere maailm!')">Tere maailm!</button>
<a href="http://khk.ee/" onclick="alert('Tere maailm!')">Tere maailm!</a>
<a href="#" onclick="alert ('Jääme siia')">Jääme siia</a>
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
    <button id="kass">Toggle</button>
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


</script>
</body>
</html>
