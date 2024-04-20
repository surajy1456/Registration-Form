<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Form</title>
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

        .form-control input {}

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
            left: 300px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #phone_number {
            height: 60px;
            width: 460px;
            position: absolute;
            top: 406px;
            left: 450px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #country_code {
            height: 60px;
            width: 60px;
            position: absolute;
            top: 406px;
            left: 360px;
            border-radius: 40px;
            border: transparent;
            background: transparent;
            color: white;
            padding-left: 23px;
            font-size: 30px;
        }

        #for_email {
            height: 60px;
            width: 455px;
            position: absolute;
            top: 546px;
            left: 310px;
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
            right: 310px;
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
            right: 310px;
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
            .regform img {
                width: 100%;
                height: auto;
            }

            .form-control input,
            .form-control select {
                width: 100%;
                padding: 10px;
                font-size: 18px;
            }

            #submit-button {
                height: 50px;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        }

        @media (max-width: 768px) {

            .form-control input,
            .form-control select {
                font-size: 16px;
            }

            #submit-button {
                height: 40px;
            }
        }

        @media (max-width: 480px) {

            .form-control input,
            .form-control select {
                font-size: 14px;
            }

            #submit-button {
                height: 30px;
            }
        }
    </style>
</head>

<body>


    <div class="regform">
        <img src="vegasregistration.png" alt="">
        <form action="" class="form">
            <div class="form-control">
                <input type="text" name="name" id="for_name" placeholder="Name" required>
            </div>
            <div class="form-control">
                <select id="country_code">
                    <option>▼</option>
                    <option value="1">USA (+1)</option>
                    <option value="44">UK (+44)</option>
                    <option value="91">IND (+91)</option>
                    <!-- Add more options for other countries as needed -->
                </select>
                <input type="text" name="phone_number" id="phone_number" placeholder="Phone Number" required>
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
                <input type="image" src="submit button.png" alt="Submit" id="submit-button" />
            </div>
        </form>
    </div>

    <script>
        document.getElementById('country_code').addEventListener('change', function() {
            var selectedCountryCode = this.value;
            var phoneInput = document.getElementById('phone_number');

            if (selectedCountryCode === '1') {
                phoneInput.pattern = "[0-9]{10}";
                phoneInput.placeholder = "Enter 10-digit Phone Number";
                phoneInput.maxLength = "10";
            } else if (selectedCountryCode === '44') {
                phoneInput.pattern = "[0-9]{11}";
                phoneInput.placeholder = "Enter 11-digit Phone Number";
                phoneInput.maxLength = "11";
            } else if (selectedCountryCode === '91') {
                phoneInput.pattern = "[0-9]{10}";
                phoneInput.placeholder = "Enter 10-digit Phone Number";
                phoneInput.maxLength = "10";
            }
            // Add more conditions for other country codes
        });
    </script>

</body>

</html>