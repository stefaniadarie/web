<div class="center window">
<p> <?= $data["problems"]->name ?> </p>
<p> <?= $data["problems"]->description ?> </p>

<a href="/informatix/public/problems/accept/<?= $data["problems"]->id ?> ">Accept</a>
<a href="/informatix/public/problems/decline/<?= $data["problems"]->id ?> ">Decline</a>
</div>