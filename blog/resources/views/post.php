<?php view('blocks.head', [
        'title' => $post['title'] ?? ''
    ]); ?>

<div class="post">
    <h1><?= $post['title'] ?? ''?></h1>
    <p><?= $post['content'] ?? ''?></p>
    <p><?= $post['created_at'] ?? ''?></p>
</div>



<?php if(\Core\Auth::check()): ?>
    <a href="/update?id=<?=$post['id'] ?? 0 ?>">Change</a>
    <a href="/delete?id=<?=$post['id'] ?? 0 ?>">Delete</a>
    <!--<a href="#">Main Page</a>-->
<?php endif; ?>

<?php view('blocks.footer'); ?>


