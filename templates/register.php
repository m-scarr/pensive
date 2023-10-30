<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <form class="register-form" style="text-align: center;" action="./logic/submitRegister.php" method="POST">
        <br />
        Register
        <hr />
        <input type="text" id="register-username" name="username" placeholder="Username" /><br />
        <input type="password" id="register-password" name="password" placeholder="Password" /><br />
        <input type="password" id="register-verify-password" name="verifyPassword"
            placeholder="Verify Password" /><br />
        <input type="text" id="register-email" name="email" placeholder="E-mail Address" /><br />
        <br />
        <div id="register-feedback">
        </div>
        <br />
        <button type="submit" id="register-button" disabled>Create an Account</button>
    </form>
</main>

<script>
    const usernameInput = document.getElementById("register-username");
    const passwordInput = document.getElementById("register-password");
    const verifyPasswordInput = document.getElementById("register-verify-password");
    const emailInput = document.getElementById("register-email");
    const feedbackDiv = document.getElementById("register-feedback");
    const registerButton = document.getElementById("register-button");

    var usernameConditions = [
        {
            meetsCondition: () => {
                return usernameInput.value.length >= 4;
            },
            message: "Usernames must be 4 or more characters.<br />"
        },
        {
            meetsCondition: () => {
                return !usernameInput.value.includes(" ");
            },
            message: "Usernames can't contain white spaces.<br />"
        },
        {
            meetsCondition: () => {
                return !(/[!@#$%^&*()+{}\[\]:;<>,.?~\\\-/|=]/.test(usernameInput.value));
            },
            message: "Usernames can't contain special characters other than underscore (\"_\").<br />"
        },
    ];

    var passwordConditions = [
        {
            meetsCondition: () => {
                return passwordInput.value.length >= 8;
            },
            message: "Passwords must be 8 or more characters.<br />"
        },
        {
            meetsCondition: () => {
                return !passwordInput.value.includes(" ");
            },
            message: "Passwords can't contain white spaces.<br />"
        },
        {
            meetsCondition: () => {
                return (/[!@#$%^&*()_+{}\[\]:;<>,.?~\\\-/|=]/.test(passwordInput.value));
            },
            message: "Passwords require a special character present.<br />"
        },
        {
            meetsCondition: () => {
                return (/\d/.test(passwordInput.value));
            },
            message: "Passwords require a number present.<br />"
        },
        {
            meetsCondition: () => {
                return (passwordInput.value === verifyPasswordInput.value);
            },
            message: "Passwords don't match.<br />"
        },
    ];

    var emailConditions = [
        {
            meetsCondition: () => {
                return /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(emailInput.value)
            },
            message: "Not a valid Email Address.<br />"
        },
    ]

    usernameInput.oninput = (e) => {
        updateFeedback();
    }

    passwordInput.oninput = (e) => {
        updateFeedback();
    }

    verifyPasswordInput.oninput = (e) => {
        updateFeedback();
    }

    emailInput.oninput = (e) => {
        updateFeedback();
    }

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
        emailConditions.forEach((condition) => {
            if (!condition.meetsCondition()) {
                messages += condition.message;
            }
        })
        feedbackDiv.innerHTML = messages;
        if (messages === "") {
            registerButton.disabled = false;
        } else {
            registerButton.disabled = true;
        }
    }

    updateFeedback();
</script>

<style>
    .register-form input {
        width: calc(100% - 8px);
        margin-bottom: 8px;
        margin-top: 8px;
    }

    #register-feedback {
        color: red;
        font-size: 12px;
    }
</style>