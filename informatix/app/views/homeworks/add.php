<div class="card form">
<form action="/informatix/public/homeworks/add/<?= $data["class_id"] ?>" method="post">

    <div class="field">
        <label for="name">Homework name</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <div class="field">
        <label for="deadline">Deadline</label>
        <input type="date" id="deadline" name="deadline" required/>
    </div>

    <input type="submit" value="Add homework"/>

</form>

<a href="/informatix/public/students/index/<?= $data["class_id"]?>">Back</a>
</div>