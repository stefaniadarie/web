<div class="window2 center">
    <?= $data["problems"]->name ?>
    <p>
        <?= $data["problems"]->description ?>
    </p>
    <?php if ($data["solution"]) : ?>
    <p>Solution:
        <?= $data["solution"]->solution ?>
    </p>
    <p>Rating:
        <?= $data["solution"]->rating ?>
    </p>
    <?php endif; ?>
</div>
<?php if ($data["user"]->user_type === "Student"): ?>

    <div class=" button3">
        <a href="/informatix/public/solutions/add/<?= $data["problems"]->id ?>">Add solution</a>
    </div>

<?php endif; ?>

<div class="button2"><a href="/informatix/public/comments/index/<?= $data["problems"]->id ?>">View comments</a></div>