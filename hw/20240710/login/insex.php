<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .container-login {
            margin-top: 20vh;
            width: 50%;
            height: 40vh;
            /* background-color: lightblue; */
        }

        .container-photo {
            display: flex;
            justify-content: center;
            align-items: center;
            /* background-color: lightpink; */
            height: 100%;
        }

        .container-photo>img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container container-login border rounded p-3">
        <div class="h-100 row">
            <div class="h-100 col">
                <div class="container-photo">
                    <img src="./images/Snipaste_2024-06-07_12-06-07.png" alt="" srcset="">
                </div>
            </div>
            <div class="h-100 col">
                <div>
                    <h3 class="mt-5">login</h3>
                  
                        <div class="mb-3 mt-3">
                            <div class="mb-3 mt-3">
                                <label >ID:</label>
                                <input type="text" class="form-control" id="acc" placeholder="Enter ID" name="acc">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label >Password:</label>
                            <input type="password" class="form-control" id="pw" name="pw" placeholder="Enter password"
                                name="pswd">
                        </div>
                        <div class="form-check mb-3">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                            </label>
                        </div>
                        <button onclick="login()" type="submit" class="btn btn-primary">Submit</button>
                    
                </div>
            </div>
        </div>
    </div>
<?php
session_start();
var_dump($_SESSION);
?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- js or jqery -->

    <script>

        function login() {
            $.post('./chk_acc.php', {
                acc: $("#acc").val(),
                pw: $("#pw").val()
            }, (chkPW) => {
                console.log('chkPW');
                console.log(chkPW)
                if (parseInt(chkPW) ) {
                    alert("登入成功")
                        
                    
                }else {
                            alert("密碼錯誤")
                        }
            })
         }


         
    </script>






</body>

</html>