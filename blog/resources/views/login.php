<?php

view('blocks.head', [
   'title' => title ?? ''
]);
?>

<h1><?=$title ?? '' ?></h1>

<form action="/login" method="post">
    <div>
        <input type="text" name="username" placeholder="username" value="<?= $username ?? ''?>">
    </div>
    <div>
        <input type="password" name="password" placeholder="password">
    </div>
    <button type="submit">Login</button>
</form>