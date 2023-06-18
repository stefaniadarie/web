<body>
    <table>
        <?php for ($i = 0; $i < count($data['students']); $i++) { ?>
            <tr>
                <td>
                    <a href="/informatix/public/classes/class/<?= $data['students'][$i]->id ?>">
                        <div class="card center2"><?= $data['students'][$i]->name ?></div>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php if ($data["teacher"]): ?>

        <div class="button3"><a href="/informatix/public/classes/add">Add new student</a></div>
    <?php endif; ?>

    <a href="/informatix/public/classes">Back</a>

</body>