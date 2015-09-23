<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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



</body>
</html>