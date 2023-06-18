<p> <?= $data["problems"]->name ?> </p>
<p> <?= $data["problems"]->description ?> </p>

<?php if ($data["isStudent"]) : ?>

<a href="/informatix/public/solutions/add/<?= $data["problems"]->id ?>">Add solution</a>

<?php endif;?>

<a href="/informatix/public/comments/index/<?= $data["problems"]->id ?>">View comments</a>