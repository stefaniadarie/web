<div class="menu card">
    <a class="menu_item" href="/informatix/public/classes">My classes</a>
    <a class="menu_item" href="/informatix/public/problems">Problems</a>
    <?php if ($data["isTeacher"]): ?>
        <a class="menu_item" href="/informatix/public/problems/myproblems">My problems</a>
    <?php endif; ?>
    <a class="menu_item" href="/informatix/public/reports">Reports</a>
    <a class="menu_item" href="/informatix/public/logout">Logout</a>
</div>