<div class="center2">
    <table>
        <?php for ($i = 0; $i < count($data['homeworks']); $i++) { ?>
            <tr>
                <td>
                    <a href="/informatix/public/homeworks/homework/<?= $data['homeworks'][$i]->id ?>">
                        <div class="button">
                            <?= $data['homeworks'][$i]->name ?>
                        </div>
                    </a>
                </td>
                <td>
                    <div class="button">Deadline:
                        <?= $data["homeworks"][$i]->deadline ?>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<?php if ($data["user"]->user_type === "Teacher"): ?>

    <div class="button2"><a href="/informatix/public/homeworks/add/<?= $data["class_id"] ?>">Add new homework</a></div>

<?php endif; ?>


<div class="button3"><a href="/informatix/public/classes">Back</a></div>