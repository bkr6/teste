<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <div>
        <ul class="menu">
            <li title="home"><a href="#" class="menu-button home">menu</a></li>
            <li title="about"><a href="#" class="active about">about</a></li>
            <li title="contact"><a href="#" class="contact">contact</a></li>
            <li title="search"><a href="#" class="search">search</a></li>
            </ul>
            <ul class="menu-bar">
            <li><a href="#" class="menu-button">Menu</a></li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Informações</a></li>
            <li><a href="#">Sair</a></li>
        </ul>
    </div>

    <script>
        $(document).ready(function(){
        $(".menu-button").click(function(){
        $(".menu-bar").toggleClass( "open" );
        })
        })
    </script>
</body>
</html>