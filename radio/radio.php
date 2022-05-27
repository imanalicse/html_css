<!DOCTYPE html>
<html>
<head>
    <title> Radio Buttton Style </title>
    <style>
        .switch-field {
            display: flex;
            margin-bottom: 36px;
            overflow: hidden;
        }

        .switch-field input {
            position: absolute !important;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            width: 1px;
            border: 0;
            overflow: hidden;
        }

        .switch-field label {
            background-color: #e4e4e4;
            color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
            line-height: 1;
            text-align: center;
            padding: 8px 16px;
            margin-right: -1px;
            border: 1px solid rgba(0, 0, 0, 0.2);
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.3), 0 1px rgba(255, 255, 255, 0.1);
            transition: all 0.1s ease-in-out;
        }

        .switch-field label:hover {
            cursor: pointer;
        }

        .switch-field input:checked + label {
            background-color: #a5dc86;
            box-shadow: none;
        }

        .switch-field label:first-of-type {
            border-radius: 4px 0 0 4px;
        }

        .switch-field label:last-of-type {
            border-radius: 0 4px 4px 0;
        }

    </style> 
</head>
<body>

<?php
if (isset($_POST['submit'])) {
     var_dump($_POST);
}
?>

<form class="form" method="post">

    <h2>Three fields? Sure.</h2>
    <div class="switch-field">

        <input type="radio" id="radio-three" name="switch-two" value="yes" checked/>
        <label for="radio-three">One</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" id="radio-four" name="switch-two" value="maybe" />
        <label for="radio-four">Two</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" id="radio-five" name="switch-two" value="no" />
        <label for="radio-five">Three</label>
    </div>
    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>