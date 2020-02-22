<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? '' ?> | <?= config('app.site.title') ?> </title>
    <link rel="stylesheet" type="text/css" href=".../css/site.css">
</head>
<style>
    body{
        background-color: #f3ff99;
        justify-content: center;
        text-align: center;
    }
    a{
        text-decoration: none;
        color: crimson;
        font-size: large;
    }
    input{
        margin: 10px;
        height: 30px;
        font-size: large;
    }
    textarea{
        margin: 10px;
        height: 30px;
        font-size: large;
    }
    button{
        width: 130px;
        height: 50px;
        background: crimson;
        color: white;
        font-size: large;
        border: 2px solid #560a00;
    }
    h1{
        color: crimson;
    }

    .post{
        background: ghostwhite;
        color: crimson;
        border: 1px solid black;
        width: 40%;
        padding: 5px;
        margin-bottom: 10px;
        margin-top: 10px;
        margin-left: 30%;
    }

</style>
<body>

<div class="header">
    <?php if(\Core\Auth::check()): ?>
        Hi, <?= \Core\Auth::getUser()['username'] ?>!
        <a href="/create"> Create</a>
        <a href="/logout"> Exit</a>
        <?php else: ?>
        <a href="/login"> Login</a>
    <?php endif; ?>
</div>
</body>
</html>