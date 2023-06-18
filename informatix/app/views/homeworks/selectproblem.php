<?php if ($data["user"]->user_type === "Teacher"): ?>
<form action="/informatix/public/homeworks/selectproblem/<?= $data["homework_id"] ?>" method="post">

    <div class="field">
        <label for="name">Problem name</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <input type="submit" value="Select problem"/>

</form>

<a href="/informatix/public/homeworks/homework/<?= $data["homework_id"]?>">Back</a>
<?php endif; ?>