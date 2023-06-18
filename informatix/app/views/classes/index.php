<table>
    <?php for ($i = 0; $i < count($data['classes']); $i++) { ?>
       
                <a href="/informatix/public/students/index/<?= $data['classes'][$i]->id ?>">
                    <div class="button center2 ">
                        <?= $data['classes'][$i]->name ?>
                    </div>
                </a>
            
    <?php } ?>
</table>


<?php if ($data["user"]->user_type === "Teacher"): ?>
    <div class="button2">
        <a href="/informatix/public/classes/add">Add new class</a>
    </div>

<?php endif; ?>
<div class="button3">
    <a href="/informatix/public/">Back</a>
</div>