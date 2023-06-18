<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>
<body>
<table>
<?php for($i = 0; $i < count($data['students']); $i++) {?>
    <tr>
        <td>
            
                <div class=""><?= $data['students'][$i]->name ?>
     
        </td>
    </tr>
    <?php } ?>
</table>


<?php if ($data["user"]->user_type === "Teacher") : ?>

    <div class="button2"><a href="/informatix/public/students/add/<?= $data["class_id"] ?>">Add new student</a></div>

<?php endif;?>

<div class="button3"><a href="/informatix/public/homeworks/index/<?= $data["class_id"] ?>">Homeworks</a></div>

<!-- <div class="button"><a href="/informatix/public/classes">Back</a></div> -->
</body>