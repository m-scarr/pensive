<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <form style="text-align: center;" action="./logic/submitRegister.php" method="POST">
        <br />
        Register
        <hr />
        <input type="text" name="username" placeholder="Username" /><br />
        <input type="password" name="password" placeholder="Password" /><br />
        <input type="password" name="verifyPassword" placeholder="Verify Password" /><br />
        <input type="text" name="email" placeholder="E-mail Address" /><br />
        <input type="checkbox" name="administrator" />Administrator<br />
        
        <br />
        <button type="submit">Create an Account</button>
    </form>
</main>