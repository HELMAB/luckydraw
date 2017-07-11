<!DOCTYPE html>
<html>
<head>
    <title>GIC Networking</title>
    <link href="https://fonts.googleapis.com/css?family=Moulpali" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <style type="text/css">
        html, body {
            background-image: url('bg.jpg');
            background-size: cover;
            color: #FFF;
            font-family: 'Moulpali', cursive;
            font-weight: 100;
            /*height: 100 vh;*/
            margin: 0;
            position: fixed;
            width: 100%;
            height: 100%;
        }

        body::before {
            content: "";
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        .full-height {
            height: 80vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .number {
            font-size: 180px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            <h1>សូមស្វាគមន៍ភ្លៀវកិក្តិយស
                <h1>
                    <h2 id="gic">សូមផ្ទៀងលេខសំណាងនៅទីនេះ</h2>
        </div>

        <div class="links">
            <button class="btn btn-primary btn-lg" id="start">ចាប់ផ្តើម</button>
            <button class="btn btn-danger btn-lg" id="stop">បញ្ឍប់</button>
        </div>
    </div>
</div>

<script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
<script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript">

    $(function () {
        var luckyNumber;
        $('#start').click(function () {
            luckyNumber = setInterval(function () {
                $('#gic').text(Math.round(Math.random() * 150) + 1).addClass('number');
            }, 10);
        });

        $('#stop').click(function () {
            clearInterval(luckyNumber);
        });
    })
</script>
</body>
</html>