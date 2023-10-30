<?php
if (count(get_included_files()) == 1)
    exit("Direct access not permitted.");
?>
<script>
    function onJournalRatingChange(e) {
        document.getElementById("rating-title-container").innerHTML = "How do you feel on a scale of 1 to 10?<br />" + e.value
    }
</script>
<main>

    <div style="text-align: center;"><strong>Write New Journal Entry</strong></div>
    <hr />
    <div id="rating-title-container">How do you feel on a scale of 1 to 10?<br />5</div>
    <form id="journal-form" style="text-align: center;" method="POST" action="./logic/submitJournal.php">
        <input name="rating" type="range" class="rating-input" min=1 max=10 value=5
            oninput="onJournalRatingChange(this)" />
        <br />
        <br />
        <textarea name="text" class="journal-textarea"
            placeholder="Enter some context for your rating... (optional)"></textarea>
        <br />
        <br />
        <div style="text-align: center;"><strong>Survey (optional)</strong></div>
        <hr />
        I felt miserable or unhappy.<br />
        <input type="radio" name="q1" value=0>Not True
        <input type="radio" name="q1" value=1>Somewhat True
        <input type="radio" name="q1" value=2>True<br />
        <hr />
        I didn’t enjoy anything at all.<br />
        <input type="radio" name="q2" value=0>Not True
        <input type="radio" name="q2" value=1>Somewhat True
        <input type="radio" name="q2" value=2>True<br />
        <hr />
        I felt so tired I just sat around and did nothing.<br />
        <input type="radio" name="q3" value=0>Not True
        <input type="radio" name="q3" value=1>Somewhat True
        <input type="radio" name="q3" value=2>True<br />
        <hr />
        I was very restless.<br />
        <input type="radio" name="q4" value=0>Not True
        <input type="radio" name="q4" value=1>Somewhat True
        <input type="radio" name="q4" value=2>True<br />
        <hr />
        I felt I was no good anymore.<br />
        <input type="radio" name="q5" value=0>Not True
        <input type="radio" name="q5" value=1>Somewhat True
        <input type="radio" name="q5" value=2>True<br />
        <hr />
        I cried a lot.<br />
        <input type="radio" name="q6" value=0>Not True
        <input type="radio" name="q6" value=1>Somewhat True
        <input type="radio" name="q6" value=2>True<br />
        <hr />
        I found it hard to think properly or concentrate.<br />
        <input type="radio" name="q7" value=0>Not True
        <input type="radio" name="q7" value=1>Somewhat True
        <input type="radio" name="q7" value=2>True<br />
        <hr />
        I hated myself.<br />
        <input type="radio" name="q8" value=0>Not True
        <input type="radio" name="q8" value=1>Somewhat True
        <input type="radio" name="q8" value=2>True<br />
        <hr />
        I was a bad person.<br />
        <input type="radio" name="q9" value=0>Not True
        <input type="radio" name="q9" value=1>Somewhat True
        <input type="radio" name="q9" value=2>True<br />
        <hr />
        I felt lonely.<br />
        <input type="radio" name="q10" value=0>Not True
        <input type="radio" name="q10" value=1>Somewhat True
        <input type="radio" name="q10" value=2>True<br />
        <hr />
        I thought nobody really loved me.<br />
        <input type="radio" name="q11" value=0>Not True
        <input type="radio" name="q11" value=1>Somewhat True
        <input type="radio" name="q11" value=2>True<br />
        <hr />
        I thought I could never be as good as other people.<br />
        <input type="radio" name="q12" value=0>Not True
        <input type="radio" name="q12" value=1>Somewhat True
        <input type="radio" name="q12" value=2>True<br />
        <hr />
        I did everything wrong.<br />
        <input type="radio" name="q13" value=0>Not True
        <input type="radio" name="q13" value=1>Somewhat True
        <input type="radio" name="q13" value=2>True<br />
        <hr />
        <button type="button" id="submit-journal-button">Submit Journal</button>
        <br />
    </form>
</main>
<style>
    .journal-textarea {
        width: calc(100% - 6px);
        resize: none;
        height: 96px;
        color: black;
    }

    .rating-input {
        width: calc(100% - 8px);
        margin-bottom: 4px;
    }

    .survey-button {
        width: 100%;
        margin-bottom: 4px;
    }

    .submit-button {
        width: 100%;
    }

    #rating-title-container {
        text-align: center;
    }
</style>