<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <form class="log-in-form" style="text-align: center;" action="./logic/submitLogIn.php" method="POST">
        <br />
        Log In
        <hr />
        <input id="log-in-username" type="text" name="username" placeholder="Username" /><br />
        <input id="log-in-password" type="password" name="password" placeholder="Password" /><br />
        <div style="display: flex; flex-direction: row; justify-content: center;">
            <input type="checkbox" />
            <div>Remember Me</div>
        </div><br />
        <div id="log-in-feedback">
            <?php
            if (isset($_GET["message"])) {
                echo $_GET["message"];
            }
            ?>
        </div>
        <button type="button" id="log-in-button">Log In</button><br /><br />
    </form>
</main>
<script>
    const usernameInput = document.getElementById("log-in-username");
    const passwordInput = document.getElementById("log-in-password");
    const feedbackDiv = document.getElementById("log-in-feedback");
    const logInButton = document.getElementById("log-in-button");
    const logInForm = document.getElementsByClassName("log-in-form")[0];

    var usernameConditions = [
        {
            meetsCondition: () => {
                return usernameInput.value.length >= 4;
            },
            message: "You didn't enter a valid username.<br />"
        },
    ];

    var passwordConditions = [
        {
            meetsCondition: () => {
                return passwordInput.value.length >= 8;
            },
            message: "You didn't enter a valid password.<br />"
        }
    ];

    var messages;
    const updateFeedback = () => {
        messages = "";
        usernameConditions.forEach((condition) => {
            if (!condition.meetsCondition()) {
                messages += condition.message;
            }
        })
        passwordConditions.forEach((condition) => {
            if (!condition.meetsCondition()) {
                messages += condition.message;
            }
        })
        feedbackDiv.innerHTML = messages;
    }

    logInButton.onclick = (e) => {
        updateFeedback()
        if (feedbackDiv.innerHTML === "") {
            logInForm.submit();
        }
    }
</script>

<style>
    #log-in-username {
        width: calc(100% - 8px);
        margin-bottom: 8px;
        margin-top: 8px;
    }

    #log-in-password {
        width: calc(100% - 8px);
        margin-bottom: 8px;
        margin-top: 8px;
    }


    #log-in-feedback {
        color: red;
        font-size: 12px;
    }
</style>