<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Abas</title>
    <link rel="stylesheet" href="../../../assets/css/abas.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script>

        $(document).ready(function (){
            $("#abas ul li").click(function () {
                $("#abas ul li").removeClass("selecionado");
                $(this).addClass("selecionado");

                $(".conteudo").hide();

                var meuId = $(this).attr("id");
                $("."+meuId).show();
            });   
        });

    </script>

</head>

<body>
        <div id="abas">
            <ul>
                <li id="aba1" >Aba 1</li>
                <li id="aba2" >Aba 2</li>
                <li id="aba3" >Aba 3</li>
            </ul>
        </div>

        <div id="conteudos">
            <div class="conteudo aba1">
                Conteudo aba 1
            </div>
            <div class="conteudo aba2">
                Conteudo aba 2
            </div>
            <div class="conteudo aba3">
                Conteudo aba 3
            </div>
        </div>

</body>
</html>