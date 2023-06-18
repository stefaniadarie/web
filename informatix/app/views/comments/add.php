<form action="/informatix/public/comments/add/<?= $data["problem_id"] ?>" method="post">
    <div class="center">

        <div class="field">
            <label for="comment">Problem comment</label>
            <textarea name="comment" id="comment" value="" rows="4" required></textarea>
        </div>

        <input type="submit" value="Add comment" />
        <div class=button>
            <a href="/informatix/public/students/index/<?= $data["problem_id"] ?>">Back</a>
        </div>
    </div>
</form>