<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.14/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css"/>
</head>
<body class="d-flex h-100 text-center text-white" style="background-color: #00063F">
<header>
    <div class="logo">
        <span class="logo-icon"></span> Jibito
    </div>
    <nav>

        <a href="{{route('categories.index')}}">Categories</a>
        <a href="{{route('categories.create')}}"> Create Category</a>
        <a href="{{route('users.index')}}">Users</a>
        <a href=""><button class="login" >Login</button></a>
    </nav>

</header>
<main>
    <div class="content">
        <div style="color: #00d084"><h1>Jibito</h1></div>
        <h3>Managing and Organizing Your Wallet</h3>
        <div class="buttons">
            <a href="{{route('register')}}" style="text-decoration: none" class="sign-up">Register</a>
            <button class="add">Add</button>
        </div>
    </div>
    <div class="graphics">
        <div>
            <img src="{{asset('img/hero graphics.png')}}" alt="">
        </div>
    </div>
</main>





<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>


<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #0e1449;
        color: #fff;
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        background-color: #0e1449;
    }

    .logo {
        font-size: 24px;
        font-weight: bold;
    }

    .logo-icon {
        color: #00d084;
    }

    nav a {
        margin: 0 10px;
        color: #fff;
        text-decoration: none;
    }

    .login {
        background-color: #fff;
        color: #0e1449;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }

    main {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        flex: 1;
        text-align: center;
        padding: 20px;
    }

    .content {
        margin-bottom: 50px;
    }

    .buttons {
        margin-top: 20px;
    }

    .sign-up, .add {
        background-color: #00d084;
        border: none;
        padding: 10px 20px;
        margin: 0 10px;
        border-radius: 5px;
        color: #0e1449;
        font-weight: bold;
    }

    .add {
        background-color: transparent;
        border: 2px solid #00d084;
        color: #00d084;
    }

    .graphics {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
    }

    .graphic-item {
        width: 100px;
        height: 100px;
        background-color: #2c3261;
        border-radius: 10px;
    }

    @media (min-width: 768px) {
        main {
            flex-direction: row;
            justify-content: space-between;
        }

        .content {
            max-width: 50%;
            text-align: left;
        }

        .graphics {
            max-width: 50%;
            justify-content: flex-end;
        }
    }

    .white {
        color: #ccc;
        text-decoration: none;
    }
</style>
</body>
