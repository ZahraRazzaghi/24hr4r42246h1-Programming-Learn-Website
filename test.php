
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Raleway');

    body {
        margin: 0;
        padding: 0;
        background-image: url(https://img5.goodfon.com/wallpaper/nbig/4/f4/forest-trees-deer-animal-horns-grass-sky-stars-tilight-night.jpg);
        background-position: center center;
        background-attachment: fixed;
        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        background-repeat: no-repeat;
    }


    #cabecalho {
        background: #27284d;
        width: 100%;
        height: 60px;
        top: 0;
        position: fixed;
    }
    #cabecalho h1 {
        display: none;
    }
    #cabecalho ul {
        list-style: none;
        word-spacing: 30px;
    }
    #cabecalho li {
        display: inline-block;
        text-transform: uppercase;
    }
    #cabecalho a {
        font-size: 18pt;
        color: #e8ddce;
        text-decoration: none;
        font-weight: 200;
    }
    #cabecalho a:hover {
        color: #a53e4f;
        transition: 1s;
    }
    #logo {
        margin: 4px;
        float: left;
        width: 50px;
        height: 50px;
        background: url(https://i.ibb.co/KbrsCSf/heartico.png) no-repeat center;
        display: block;
    }
    #cabecalho nav {
        float: right;
        padding-right: 20px;
        font-family: 'Raleway', sans-serif;
    }
    #menu-icon {
        background: url(https://i.ibb.co/5vRFHbL/menu-icon.png) no-repeat center;
        display: hidden;
        width: 32px;
        height: 32px;
        padding: 13px 0 13px 0;
    }

    @media only screen and (max-width:900px) {
        #cabecalho {
            position: absolute;
        }
        #menu-icon {
            display: inline-block;
        }
        nav ul, nav:active ul {
            display: none;
            position: absolute;
            padding: 10px;
            margin: 0;
            background: #27284d;
            right: 10px;
            width: 35%;
        }
        nav:hover ul {
            display: block;
        }
        nav li {
            text-align: center;
            width: 100%;
            margin: 0;

        }
    }
</style>
<body>

<header id="cabecalho">
    <a href="#" id="logo"></a>
    <nav>
        <a href="#" id="menu-icon"></a>
        <ul>
            <h1>Menu Principal</h1>
            <li><a href="#"> Produtos</li></a>
            <li><a href="#">Sobre</li></a>
            <li><a href="#">Localização</li></a>
            <li><a href="#">Contato</li></a>
        </ul>
    </nav>
</header>

</body>
</html>