<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<table>
    <?php for ($i = 0; $i < count($data['classes']); $i++) { ?>
        <tr>
            <td>       </div>
                <a href="/informatix/public/students/index/<?= $data['classes'][$i]->id ?>">
                    <div class="button">
                        <?= $data['classes'][$i]->name ?>
                    </div>
                </a>
            </td>
        </tr>
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