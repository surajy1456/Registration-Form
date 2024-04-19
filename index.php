<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reg Form</title>
    <style>
        
        img{
            width: 1300px; 
            height: 800px;  
        }
         

       

        .form {
           
        }

        .form-control {
            margin-bottom: 10px;
        }

        .form-control input {
         
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
        #for_name{
            height:60px;
            width:460px;
            position:absolute;
            top:266px;
            left:162px;
            border-radius:40px;
            border:transparent;
            background:transparent;
            color:white;
            padding-left: 23px;
            font-size:30px;
        }
        #for_number{
            height:60px;
            width:460px;
            position:absolute;
            top:406px;
            left:162px;
            border-radius:40px;
            border:transparent;
            background:transparent;
            color:white;
            padding-left: 23px;
            font-size:30px;
        }
        #for_email{
            height:60px;
            width:440px;
            position:absolute;
            top:546px;
            left:162px;
            border-radius:40px;
            border:transparent;
            background:transparent;
            color:white;
            padding-left: 23px;
            font-size:30px;
        }
    </style>
</head>
<body>
    <center>
        
        <div class="regform">
            <img src="vegas registration.png" alt=""  >
            <form action="" class="form">
                <div class="form-control">
                    <input type="text" name="name" id="for_name" placeholder="Name" required>
                </div>
                <div class="form-control">
                    <input type="text" name="number" id="for_number" placeholder="Number" required>
                </div>
                <div class="form-control">
                    <input type="email" name="email" id="for_email" placeholder="Email" required>
                </div>
                
                <div class="btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>    
    </center>
    </body>
    </html>