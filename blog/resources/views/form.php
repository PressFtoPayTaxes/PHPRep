<?php view('blocks.head', [
    'title' => $title ?? ''
]); ?>

    <h2><?= $post['title'] ?></h2>

    <form action="/<?= $action ?? 'create' ?>" method="post">
        <?php if ($post['id']?? false): ?>
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
        <?php endif ?>
        <div>
            <input type="text" name="title" placeholder="Enter title" value="<?= $post['title'] ?? '' ?>">
        </div>
        <div>
            <textarea name="content" placeholder="Enter text"><?= $post['content'] ?? '' ?></textarea>
        </div>
        <button type="submit">Save</button>
    </form>

<?php view('blocks.footer'); ?>