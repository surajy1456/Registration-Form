<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Form</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <style>
        img {
            width: 1300px;
            height: 800px;
        }

        .regform {
            text-align: center;
        }


        .form-control {
            margin-bottom: 10px;
        }



        .btn {
            text-align: center;
        }

        .btn button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #for_name {
            height: 61px;
            width: 460px;
            position: absolute;
            top: 266px;
            left: 340px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #phone_number {
            height: 60px;
            width: 325px;
            position: absolute;
            top: 406px;
            left: 480px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        select {
            background-color: black;
        }

        #country_code {
            height: 60px;
            width: 120px;
            position: absolute;
            top: 406px;
            left: 355px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            font-size: 20px;
            text-align: center;
        }

        #for_email {
            height: 60px;
            width: 455px;
            position: absolute;
            top: 546px;
            left: 350px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #for_facebook {
            height: 60px;
            width: 460px;
            position: absolute;
            top: 480px;
            right: 350px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #for_telegram {
            height: 60px;
            width: 460px;
            position: absolute;
            top: 336px;
            right: 350px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #submit-button {
            height: 100px;
            position: absolute;
            top: 630px;
            left: 670px;

        }

        body {
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @media (max-width: 1200px) {

            /* Adjust form size */
            .regform {
                width: 80%;
            }

            /* Adjust input font size */
            .form-control input,
            .form-control select {
                font-size: 18px;
            }
        }

        @media (max-width: 768px) {

            /* Adjust form size */
            .regform {
                width: 90%;
            }

            /* Adjust input font size */
            .form-control input,
            .form-control select {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {

            /* Adjust form size */
            .regform {
                width: 100%;
            }

            /* Adjust input font size */
            .form-control input,
            .form-control select {
                font-size: 14px;
            }
        }

        .toastr-timer {
            width: 100%;
            height: 4px;
            background-color: black;
            /* Change this to your desired color */
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .toastr-button {
            display: block;
            margin-top: 10px;
            padding: 5px 10px;
            background-color: green;
            /* Change this to your desired color */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .toastr-button:hover {
            background-color: #0056b3;
            /* Change this to your desired hover color */
        }
        option{
            background-color: black; color: white;
        }
    </style>
</head>





<body>
    <div class="regform">
        <img src="vegasregistration.png" alt="" style="user-select: none;">
        <form action="./backend/data.php" class="form" method="POST">
            <div class="form-control">
                <input type="text" name="name" id="for_name" placeholder="Name" required>
            </div>
            <div class="form-control">
                <select id="country_code" name="selected_code" style="background-color: none; color: white;">
                    <option value="1" selected>USA (+1)</option>
                    <option value="44" disabled hidden>UK (+44)</option>
                    <option value="91" disabled hidden>IND (+91)</option>
                </select>
                <input type="text" name="phone_number" id="phone_number" placeholder="Enter 10-digit Phone Number" pattern="[0-9]{10}" maxlength="10" required>
            </div>

            <div class="form-control">
                <input type="email" name="email" id="for_email" placeholder="Email" required>
            </div>
            <div class="form-control">
                <input type="text" name="telegram_id" id="for_telegram" placeholder="telegram_id" required>
            </div>
            <div class="form-control">
                <input type="text" name="facebook_id" id="for_facebook" placeholder="facebook-id" required>
            </div>
            <div class="btn">
                <input type="image" name="submit" src="submit button.png" alt="Submit" id="submit-button" />
            </div>
        </form>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var countryCodeSelect = document.getElementById('country_code');
            var phoneInput = document.getElementById('phone_number');

            // Trigger change event on page load to apply default functionality
            countryCodeSelect.dispatchEvent(new Event('change'));

            countryCodeSelect.addEventListener('change', function() {
                var selectedCountryCode = this.value;

                if (selectedCountryCode === '1') {
                    phoneInput.pattern = "[0-9]{10}";
                    phoneInput.placeholder = "Enter 10-digit Phone No";
                    phoneInput.maxLength = "10";
                } else if (selectedCountryCode === '44') {
                    phoneInput.pattern = "[0-9]{11}";
                    phoneInput.placeholder = "Enter 11-digit Phone No";
                    phoneInput.maxLength = "11";
                } else if (selectedCountryCode === '91') {
                    phoneInput.pattern = "[0-9]{10}";
                    phoneInput.placeholder = "Enter 10-digit Phone No";
                    phoneInput.maxLength = "10";
                }
                // Add more conditions for other country codes
            });
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <?php
    if (isset($_SESSION['toastr_message']) && isset($_SESSION['toastr_type'])) {
        $toastr_message = $_SESSION['toastr_message'];
        $toastr_type = $_SESSION['toastr_type'];
        $toastr_duration = 5000; // Duration in milliseconds

        // Display Toastr notification with time remaining
        echo "<script>
            toastr.options.timeOut = $toastr_duration;
            toastr.$toastr_type('<div>$toastr_message</div><div class=\"toastr-timer\"></div>');
            
            // Update timer line width
            var timerWidth = $('.toastr-timer').width();
            $('.toastr-timer').animate({width: '0%'}, $toastr_duration);
          </script>";

        // Clear Toastr notification from session
        unset($_SESSION['toastr_message']);
        unset($_SESSION['toastr_type']);
    }
    ?>


</body>

</html>