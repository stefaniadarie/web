<p> <?= $data["problems"]->name ?> </p>
<p> <?= $data["problems"]->description ?> </p>

<?php if ($data["user"]->user_type === "Student") : ?>

<a href="/informatix/public/solutions/add/<?= $data["problems"]->id ?>">Add solution</a>

<?php endif;?>

<a href="/informatix/public/comments/index/<?= $data["problems"]->id ?>">View comments</a>