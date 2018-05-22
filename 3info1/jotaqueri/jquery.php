<html>
<head>

    <meta charset="utf-8">

    <title></title>

    <style type="text/css">

        #abas{

        }

        #abas ul li{
            border: 1px solid green;
            display: inline-block;
            padding: 10px;
            border-radius: 10px 25px 25px 0;
        }

        #conteudos{
            border: solid green;
        }

        .selecionado{
            background-color: gainsboro;
            box-shadow: 5px 5px 5px gray;
        }

    </style>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


    <script>

        $(document).ready(function() {
            $("#abas ul li").click(function () {
                $("#abas ul li").removeClass("selecionado")
                $(this).addClass("selecionado")
                $(".conteudo").hide();
                var meuId = $(this)attr("id");

                $("."+meuId).show();
            })

        });

    </script>

</head>
<body>
    <div id="abas">
        <ul>
<!--       <?php //foreach ($categorias as $categoria): ?> -->
            <li id="aba1">Aba 1</li>
        <?php // endforeach; ?>
        </ul>

</div>
        <div id="conteudos">
            <div class="conteudo aba1">
                <h2>Meteoro de Paixao</h2>

            </div>

        <div class="conteudo aba2">

                <h2>Meteoro de Peixao</h2>

        </div>

        <div class="conteudo aba3">

            <h2>Meteoro de macarrao</h2>

        </div>
    </div>


</body>
</html>