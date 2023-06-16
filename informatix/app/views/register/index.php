<form action="" method="post">

    <div class="field">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="" required/>
    </div>

    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="" required/>
    </div>

    <div class="field">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" required/>
    </div>

    <div class="field">
        <input type="radio" id="teacher" name="user_type" value="Teacher" checked required>
        <label for="teacher">Teacher</label>
        <input type="radio" id="student" name="user_type" value="Student" required>
        <label for="student">Student</label>
    </div>

    <input type="submit" value="Register"/>

</form>