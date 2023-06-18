<?php if ($data["user"]->user_type === "Teacher"): ?>

<div class="menu card">
    <a class="menu_item" href="/informatix/public/classes">My classes</a>
    <a class="menu_item" href="/informatix/public/problems">Problems</a>
    <a class="menu_item" href="/informatix/public/problems/myproblems">My problems</a>
    <a class="menu_item" href="/informatix/public/reports">Reports</a>
    <a class="menu_item" href="/informatix/public/logout">Logout</a>
    <img class="menu_item" src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%20fill%3D%22%23000000%22%3E%3Cpath%20d%3D%22M32%2020a8%208%200%201%201-16%200a8%208%200%200%201%2016%200Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20d%3D%22M23.184%2043.984C12.517%2043.556%204%2034.772%204%2024C4%2012.954%2012.954%204%2024%204s20%208.954%2020%2020s-8.954%2020-20%2020a21.253%2021.253%200%200%201-.274%200c-.181%200-.362-.006-.542-.016ZM11.166%2036.62a3.028%203.028%200%200%201%202.523-4.005c7.796-.863%2012.874-.785%2020.632.018a2.99%202.99%200%200%201%202.498%204.002A17.942%2017.942%200%200%200%2042%2024c0-9.941-8.059-18-18-18S6%2014.059%206%2024c0%204.916%201.971%209.373%205.166%2012.621Z%22%20clip-rule%3D%22evenodd%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E">
</div>

<?php endif; ?>

<?php if ($data["user"]->user_type === "Student"): ?>

<div class="menu card">
    <a class="menu_item" href="/informatix/public/classes">My classes</a>
    <a class="menu_item" href="/informatix/public/problems">Problems</a>
    <a class="menu_item" href="/informatix/public/reports">Reports</a>
    <a class="menu_item" href="/informatix/public/logout">Logout</a>
    <img class="menu_item" src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%20fill%3D%22%23000000%22%3E%3Cpath%20d%3D%22M32%2020a8%208%200%201%201-16%200a8%208%200%200%201%2016%200Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20d%3D%22M23.184%2043.984C12.517%2043.556%204%2034.772%204%2024C4%2012.954%2012.954%204%2024%204s20%208.954%2020%2020s-8.954%2020-20%2020a21.253%2021.253%200%200%201-.274%200c-.181%200-.362-.006-.542-.016ZM11.166%2036.62a3.028%203.028%200%200%201%202.523-4.005c7.796-.863%2012.874-.785%2020.632.018a2.99%202.99%200%200%201%202.498%204.002A17.942%2017.942%200%200%200%2042%2024c0-9.941-8.059-18-18-18S6%2014.059%206%2024c0%204.916%201.971%209.373%205.166%2012.621Z%22%20clip-rule%3D%22evenodd%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E">
</div>

<?php endif; ?>

<?php if ($data["user"]->user_type === "Admin"): ?>

<div class="menu card">
    <a class="menu_item" href="/informatix/public/problems/pending">Pending problems</a>
    <a class="menu_item" href="/informatix/public/problems/import">Import problems</a>
    <a class="menu_item" href="/informatix/public/problems/export">Export problems</a>
    <a class="menu_item" href="/informatix/public/reports">Reports</a>
    <a class="menu_item" href="/informatix/public/logout">Logout</a>
    <img class="menu_item" src="data:image/svg+xml;charset=utf-8,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2240%22%20height%3D%2240%22%20viewBox%3D%220%200%2048%2048%22%3E%3Cg%20fill%3D%22%23000000%22%3E%3Cpath%20d%3D%22M32%2020a8%208%200%201%201-16%200a8%208%200%200%201%2016%200Z%22%3E%3C%2Fpath%3E%3Cpath%20fill-rule%3D%22evenodd%22%20d%3D%22M23.184%2043.984C12.517%2043.556%204%2034.772%204%2024C4%2012.954%2012.954%204%2024%204s20%208.954%2020%2020s-8.954%2020-20%2020a21.253%2021.253%200%200%201-.274%200c-.181%200-.362-.006-.542-.016ZM11.166%2036.62a3.028%203.028%200%200%201%202.523-4.005c7.796-.863%2012.874-.785%2020.632.018a2.99%202.99%200%200%201%202.498%204.002A17.942%2017.942%200%200%200%2042%2024c0-9.941-8.059-18-18-18S6%2014.059%206%2024c0%204.916%201.971%209.373%205.166%2012.621Z%22%20clip-rule%3D%22evenodd%22%3E%3C%2Fpath%3E%3C%2Fg%3E%3C%2Fsvg%3E">
</div>

<?php endif; ?>