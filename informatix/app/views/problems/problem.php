<div class="window2 center">
    <?= $data["problems"]->name ?>
    <p>
        <?= $data["problems"]->description ?>
    </p>
    <?php for($i = 0; $i < count($data['students']); $i++) {?>
    <tr>
        <td>
            
        <a href="/informatix/public/comments/index/<?= $data["problems"]->id ?> <?= $data['students'][$i]->name ?>
     
        </td>
    </tr>
    <?php } ?>
</div>

<?php if ($data["user"]->user_type === "Student") : ?>

<?php if ($data["isStudent"]): ?>
    <div class="button3"><a href="/informatix/public/solutions/add/<?= $data["problems"]->id ?>">Add solution</a></div>
<?php endif; ?>

<?php endif;?>

<div class="button2"><a href="/informatix/public/comments/index/<?= $data["problems"]->id ?>">View comments</a></div>