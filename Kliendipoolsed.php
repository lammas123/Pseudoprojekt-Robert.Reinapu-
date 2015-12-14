<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Martini PseudoProjekt</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>

<body>
<script>
    //    function changeImg() {
    //        var pic = document.getElementById('pilt');
    //        if (pic.name == "KASS") {
    //            pic.src="http://www.dog-boarding-wetherby.co.uk/wp-content/uploads/How-to-choose-a-healthy-dog-2.jpg";
    //            pic.name="KOER";
    //        }
    //        else {
    //            pic.src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg";
    //            pic.name="KASS";
    //        }
    //    }
    function clickOnBrowser() {
        if (event.button === 2) {
            return false;
        }
    }
    // Keela ära parema hiirekliki kasutamine veebilehel..
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
            // console.log("tere!!!!!!");
            $('#pilt').attr('src', "http://www.dog-boarding-wetherby.co.uk/wp-content/uploads/How-to-choose-a-healthy-dog-2.jpg");
        });
        $('.btn').click(function () {
            // console.log("tere!!!!!!");
            $('body').css('backgroundColor', $(this).text());
        });
        $('#rightClick').click(function () {
            allowRightClick(true);
        });
    });
</script>

<button onclick="alert('tere maailm!!');">Tere maailm</button>
<div>
    <a onclick="alert('tere maailm!!');" href="http://khk.ee/">tere maailm</a>
</div>
<div>
    <a href="" onclick="alert('jääme siia');">jääme siia</a>
</div>

<!--<img id='pilt' name="KASS" onclick="changeImg()" src="http://www.vetprofessionals.com/catprofessional/images/home-cat.jpg">-->
<img id='pilt' name="KASS"
     src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Large_Siamese_cat_tosses_a_mouse.jpg" alt="Looma Pilt">

<div>
    <button class="btn" id="red">red</button>
    <button class="btn" id="green">green</button>
    <button class="btn" id="blue">blue</button>


</div>
<br>
<button id="rightClick">Luba parem klõps</button>
</body>
</html>