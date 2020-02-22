
<div class="post">
    <h2><?= $post['title'] ?? '' ?></h2>
    <div>
        <?= mb_strimwidth($post['content'], 0, 100, '...') ?>
    </div>
    <a href="/post?id=<?=$post['id']?>">Know more</a>
</div>
