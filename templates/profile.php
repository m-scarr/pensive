<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<main>
    <form id="profile-form">
        <div class="profile-input-container">
            <input name="username" type="text" value="Username" disabled />
        </div>
        <div class="profile-input-container">
            <input name="email" type="text" value="name@email.com" disabled />
        </div>
        <div class="profile-input-container">
            <input name="profilePicURL" type="text" value="" id="profile-user-pic-input"
                placeholder="Profile picture URL (optional)" disabled />
            <img src="./assets/edit.png" id="profile-edit-user-pic-button" />
        </div>
        <div id="profile-user-pic-container">
            <img src="./assets/default_user.png" id="profile-user-pic-img" />
        </div>
        <div class="profile-input-container">
            <textarea placeholder="About me (optional)" name="aboutMe" id="profile-about-me-textarea"
                disabled></textarea>
            <img src="./assets/edit.png" id="profile-edit-about-me-button" />
        </div>
    </form>
</main>

<script>
    const profileUserPicInput = document.getElementById("profile-user-pic-input");
    const profileUserPicButton = document.getElementById("profile-edit-user-pic-button");
    const profileUserPicImg = document.getElementById("profile-user-pic-img");
    const profileAboutMeTextarea = document.getElementById("profile-about-me-textarea");
    const profileAboutMeButton = document.getElementById("profile-edit-about-me-button");

    profileUserPicButton.onclick = () => {
        profileUserPicButton.src = profileUserPicButton.src.endsWith("edit.png") ? "./assets/check.png" : "./assets/edit.png";
        profileUserPicInput.disabled = profileUserPicButton.src.endsWith("edit.png")
        if (profileUserPicInput.disabled) {
            profileUserPicImg.src = profileUserPicInput.value;
            profileUserPicImg.onerror = () => {
                alert("This was not a valid image url!")
                profileUserPicInput.value = "";
                profileUserPicImg.src = "./assets/default_user.png"
            }
        }
    }

    profileAboutMeButton.onclick = () => {
        profileAboutMeButton.src = profileAboutMeButton.src.endsWith("edit.png") ? "./assets/check.png" : "./assets/edit.png";
        profileAboutMeTextarea.disabled = profileAboutMeButton.src.endsWith("edit.png")
    }
</script>

<style>
    #profile-user-pic-container {
        text-align: center;
    }

    #profile-user-pic-container img {
        border-radius: 16px;
    }

    .profile-input-container {
        display: flex;
        flex-direction: row;
        width: calc(100% - 16px);
        margin: 8px;
    }

    .profile-input-container input {
        width: 100%
    }

    .profile-input-container textarea {
        width: 100%;
        height: 96px;
        resize: none;
    }

    .profile-input-container img {
        width: 32px;
        height: 32px;
    }
</style>