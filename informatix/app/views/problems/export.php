<form action="/informatix/public/problems/export/" method="post">

    <div class="field">
        <label for="name">Problem name</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <input type="submit" value="Export problem"/>

</form>

<?php if ($data["problem_json"]): ?>

<p> <?= $data["problem_json"] ?></p>

<?php endif; ?>