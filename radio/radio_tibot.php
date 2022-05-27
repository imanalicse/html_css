<!DOCTYPE html>
<html>
<head>
    <title> Radio Button Style </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('label').on('click', function () {
                var _self = $(this);
                $('label').removeClass('js_checked');
                if(_self.find('input[type=radio]').is(':checked')){
                   _self.addClass('js_checked');
                }
            });
        });
    </script>


    <style>
        *{font-family: 'Roboto', sans-serif;}

        @keyframes click-wave {
            0% {
                height: 40px;
                width: 40px;
                opacity: 0.35;
                position: relative;
            }
            100% {
                height: 200px;
                width: 200px;
                margin-left: -80px;
                margin-top: -80px;
                opacity: 0;
            }
        }

        .option-input {
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            height: 10px;
            width: 10px;
            transition: all 0.15s ease-out 0s;
            background: #9faab7;
            border: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 0.5rem;
            outline: none;
            position: relative;
            z-index: 1000;
        }
        .option-input:hover {
            /*background: #9faab7;*/
        }
        .option-input:checked {
            /*background: #40e0d0;*/
        }
        .option-input:checked::before {
            height: 10px;
            width: 10px;
            position: absolute;
            content: '✔';
            display: inline-block;
            font-size: 21.66667px;
            text-align: center;
            line-height: 10px;
        }
        .option-input:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #40e0d0;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }
        .option-input.radio {
            border-radius: 50%;
        }
        .option-input.radio::after {
            border-radius: 50%;
        }

        body div {
            padding: 5rem;
        }
        label{
            background: #cccccc;
            border-radius: 10px;
            padding: 10px 5px;
            margin: 5px;
        }

        label.js_checked{
            background: #018bbc;
        }
        label.js_checked .option-input {
            background: none;
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

    <div>
        <label class="js_checked">
            <input type="radio" class="option-input radio" name="example" value="Javascript" checked />
            Javascript
        </label>
        <label>
            <input type="radio" class="option-input radio" name="example" value="HTML" />
            HTML 5
        </label>
        <label>
            <input type="radio" class="option-input radio" name="example" value="CSS"/>
            CSS
        </label>
    </div>

    <input type="submit" value="Submit" name="submit">
</form>

</body>
</html>