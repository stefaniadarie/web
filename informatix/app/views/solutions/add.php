<head>
    <link rel="stylesheet" href="/informatix/resources/style.css">
</head>

<div class="center">
<form action="/informatix/public/solutions/add/<?= $data["problem"]->id ?>" method="post">
    <h3>
        <?= $data["problem"]->description ?>
</h3>

    <div class="field">
        <label for="solution">Solution</label>
        <textarea name="solution" id="solution" value="" rows="4" required></textarea>
    </div>


    <p class="v-data">Rate the problem's difficulty from 1 (very difficult) to 5 (very easy):
        <select id="rating" name="rating">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </p>

    <input type="submit" value="Submit" />
    <div class="button"><a href="/informatix/public/problems/">Cancel</a></div>
    </div>
</form>