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