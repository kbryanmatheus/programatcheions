<html>

<head>
    <title>Alo</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $(document).ready(function(){

            $('#mostra').hide();
                $("#mostra").click(function(){
                    $("#div").slideToggle("fast");
                    $("#mostra").hide();
                    $("#oculta").show();

                 });
                $("#oculta").click(function(){
                    $("#div").slideToggle("fast");
                    $("#oculta").hide();
                    $('#mostra').show();
                    $('.destaque').hide();
                });
                $("#toggle").click(function(){
                    $("#div").slideToggle("fast");
                    $('.destaque').hide();
                });
                $("#fadeIn").click(function(){
                    $("#div").fadeIn();
                    $("#div").fadeIn("slow");
                    $("#div").fadeIn(3000);
                });
                $("#fadeOut").click(function(){
                $("#div").fadeOut();
                $("#div").fadeOut("slow");
                $("#div").fadeOut(3000);
                });
                $("#fadeToggle").click(function(){
                });
                $("#slideDown").click(function(){
                    $("#div").slideToggle("fast");
                    $('.destaque').hide();
                });
                $("#slideUp").click(function(){
                    $("#div").slideToggle("fast");
                    $('.destaque').hide();
                });
                $("#slideToggle").click(function(){
                    $("#div").slideToggle("fast");
                    $('.destaque').hide();
                });



        });


    </script>

    <style>

        #div{
            background-color:greenyellow;
        }

        .destaque{
            color: deeppink;
        }

    </style>

    <h1>ALOWWWWWWWWWWWWWWWWWWK</h1>



</head>
<body>

        <button id="mostra">MOSTRA</button>
        <button id="oculta">OCULTA</button>
        <button id="toggle">toggle</button>
        <button id="fadeIn">fadeIn</button>
        <button id="fadeOut">fadeOut</button>
        <button id="fadeToggle">fadeToggle</button>
        <button id="slideDown">slideDown</button>
        <button id="slideUp">slideUp</button>
        <button id="slideToggle">slideToggle</button>

        <p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>

        <div id="div">

            <h2></h2>

            <p>

                aasdioashdiLOREM LOREM  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi blanditiis dicta dolore dolores doloribus eveniet harum, ipsa nihil qui quidem, reiciendis reprehenderit totam veniam, vitae voluptate? Eaque incidunt molestias sit!

            </p>


        </div>

    <p>
        Lorem ipsum dolor sit amet, <span class="destaque">consectetur</span> adipisicing elit. Corporis, expedita libero molestiae molestias nemo numquam optio quam quos ratione reprehenderit sed soluta voluptate! Eveniet excepturi minus, optio perferendis saepe sapiente!
    </p>

</body>


</html>