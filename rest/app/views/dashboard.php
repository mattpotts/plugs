<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            margin: 0;
            font-family: arial;
        }

        a.block {
            display: block;
            height: 50%;
        }

        .control {
            text-decoration: none;
            text-align: center;
            /*display: table-cell;*/
        }

        /*.control > span {*/
            /*vertical-align: middle;*/
        /*}*/

        .control-up {
            background-color: #68ef5c;
        }

        .control-down {
            background-color: #f62f2c;
        }
    </style>
</head>
<body>

<a class="block control control-up" href="/1/up">
<!--    <span>Up</span>-->
<!--    Up-->
</a>

<a class="block control control-down" href="/1/down">
<!--    <span>Down</span>-->
<!--    Down-->
</a>

</body>
</html>
