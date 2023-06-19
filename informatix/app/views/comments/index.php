<div class="center">
    <table>
        <?php for ($i = 0; $i < count($data['comments']); $i++) { ?>
            <tr>
                <td>
                    <h3><?= $data['comments'][$i]->name ?>:</h3>
                </td>

                <td>
                <h3><?= $data['comments'][$i]->comment ?></h3>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<div class="button2"><a href="/informatix/public/comments/add/<?= $data["problem_id"] ?>">Add comment</a></div>