<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<button onclick="myFunction()"><a href="https://khk.ee">Tere maailm</button>
<script>
    function myFunction() {
        var x;
        if (confirm("Tere maailm!") == true) {
            x = "You pressed OK!";
        } else {
            x = "You pressed Cancel!";
        }
        document.getElementById("demo").innerHTML = x;
    }

</script>

<a href="www.khk.ee" onclick="myFunction();return false">Jääme siia!</a>
<script>
    function myFunction() {
        alert("Jääme Siia")
        "return false"
    }
</script>
<img id="kass" src="Media/cat.jpg">
<script>
    $("img#kass").click(function () {
        if($(this).attr("src") == "Media/cat.jpg")
        {
            $(this).attr("src", "Media/dog.jpg");
        }
        else
        {
            $(this).attr("src","Media/cat.jpg");
        }
    });
</script>

</body>
</html>