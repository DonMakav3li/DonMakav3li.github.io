<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
          integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Monweb</title>
    <style>
        * {
            margin: 0;
            box-sizing: border-box;
        }

        * a:link {
            text-decoration: none;
        }

        nav {
            height: 75px;
            width: 100%;
            background-color: #000000;
            text-align: center;
            position: sticky;
            display: flex;
            align-items: center;
            justify-content: center;
            -webkit-position: sticky;
            top: 0;
            z-index: 1;
            -webkit-box-shadow: 0px 3px 5px 3px rgba(0, 0, 0, 0.6);
            -moz-box-shadow: 0px 3px 5px 3px rgba(0, 0, 0, 0.6);
            box-shadow: 0px 3px 5px 3px rgba(0, 0, 0, 0.6);
        }

        nav h1 {
            font-size: 3em;
            color: #d9d9d9;
        }

        body {
            height: 100%;
        }
        .img-holder{
            display: block;
            position: relative;
        }
        .img-holder button{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

    </style>
</head>
<nav>
    <h1>Monweb</h1>
</nav>
<body>
<div class="img-holder">
    <img src="images/webback.jpg" alt="WebDev Background" class=".img-fluid" style='width:100%;'>
    <button type="button" class="btn btn-outline-dark">سفارش</button>
</div>
</body>
</html>