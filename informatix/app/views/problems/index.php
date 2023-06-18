<table>
<?php for($i = 0; $i < count($data['problems']); $i++) {?>
 
            <a href="/informatix/public/problems/problem/<?= $data['problems'][$i]->id?>">
                <div class="button center2"><?= $data['problems'][$i]->name ?></div>
            </a>
      
    <?php } ?>
</table>

<?php if ($data["user"]->user_type === "Teacher") : ?>

<div class="button4"><a href="/informatix/public/problems/add?>">Add new problem</a></div>

<?php endif;?>