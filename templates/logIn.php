<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <form style="text-align: center;" action="./logic/submitLogIn.php" method="POST">
        <br />
        Log In
        <hr />
        <input type="text" name="username" placeholder="Username" /><br />
        <input type="text" name="password" placeholder="Password" /><br />
        <input type="checkbox" />Remember Me<br />
        <br />
        <button type="submit">Log In</button>
    </form>
</main>