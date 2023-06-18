<div class="window2 center">
    <?= $data["problems"]->name ?>
    <p>
        <?= $data["problems"]->description ?>
    </p>
</div>

<?php if ($data["user"]->user_type === "Student") : ?>

<?php if ($data["isStudent"]): ?>
    <div class="button3"><a href="/informatix/public/solutions/add/<?= $data["problems"]->id ?>">Add solution</a></div>
<?php endif; ?>

<?php endif;?>

<div class="button2"><a href="/informatix/public/comments/index/<?= $data["problems"]->id ?>">View comments</a></div>