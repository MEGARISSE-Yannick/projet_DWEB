<html>

<head>
    <style>
        nav.stroke ul li a {
            position: relative;
        }

        nav.stroke ul li a:after {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            width: 0%;
            content: '.';
            color: transparent;
            background: #333;
            height: 1px;
        }

        nav.stroke ul li a:hover:after {
            width: 100%;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #e9e9e9;
        }

        .topnav a {
            float: left;
            display: block;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #2196F3;
            color: white;
        }

        .topnav input[type=text] {
            float: right;
            padding: 6px;
            margin-top: 8px;
            margin-right: 16px;
            border: none;
            font-size: 17px;
        }

        @media screen and (max-width: 600px) {

            .topnav a,
            .topnav input[type=text] {
                float: none;
                display: block;
                text-align: left;
                width: 100%;
                margin: 0;
                padding: 14px;
            }

            .topnav input[type=text] {
                border: 1px solid #ccc;
            }
        }
    </style>
</head>

<body>
    <nav class="stroke">

        <div class="topnav">
            <a> <img style="width: 200px; height:130px;" src="https://zupimages.net/up/21/06/v48b.png" alt="" /></a> 
            <a class="active" href="#home">Accueil</a>
            <a href="#about">Carte électronique</a>
            <a href="#about">Cable fils</a>
            <a href="#contact">Composants</a>
            <input type="text" placeholder="Search..">
        </div>
        </div>

</body>

</html>