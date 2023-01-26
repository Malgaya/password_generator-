<?php
if(isset($_POST['gen'])){
    $result='';
    if(isset($_POST['chkone'])){
        PassGenerator(8);
    }
    else  if(isset($_POST['chktwo'])){
        PassGenerator(10);
    }
    else  if(isset($_POST['chkthree'])){
        PassGenerator(12);
    }
    else  if(isset($_POST['chkfour'])){
        PassGenerator(14);
    }
    else{
        PassGenerator(6);
    }
   
}

function PassGenerator($len){
    global $result;
    $validChar='abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYX1234567890';
    while(0<$len--){
        $result.=$validChar[random_int(0,strlen($validChar)-1)];
        
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasword Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'poppins', sans-serif;
    }

    .container {
        width: 400px;
        height: 300px;
        background-color: white;
        border-radius: 20px;
    }

    #in {
        width: 70%;
        height: 43px;
        color: #000;
        background: none;
        font-size: 1.2rem;
        font-weight: 500;
        border-radius: 4px;
        border: 1px solid #aaa;
        padding: 0 2.8rem 0 1rem;
        text-align: center;
        margin-left: 3.5rem;
        background-attachment: fixed;
        background-size: cover;
    }

    #count {
        margin-top: 5px;
        margin-left: 5rem;
        cursor: pointer;
        background-attachment: fixed;
        background-size: cover;
    }

    #num {
        margin-left: 95px;
        margin-top: 10px;
    }

    h1 {
        margin-bottom: 20px;
        padding: 15px 20px;
        color: black;
        margin-left: -10px;
        font-size: 1.30rem;
        font-weight: 600;
        border-bottom: 1px solid #d4dbe5;
        background-attachment: fixed;
        background-size: cover;
    }

    button {
        width: 60%;
        text-transform: uppercase;
        font-size: 1rem;
        margin-left: 4.5rem;
        background-attachment: fixed;
        background-size: cover;
    }

    body {
        background: url('hacker.jpg');
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 80vh;
    }
</style>

<body>

    <div class="container  mt-5">
        <table>
            <h1>Password Generator</h1>
            <form action="" class="" method="POST">
                <input id="in" type="text" name="result" value="<?php echo(@$result);?>"><br>
                <!-- <span class="material-symbols-rounded">copy</span><BR> -->
                <button name="gen" class="btn btn-primary my-2">Generate Password</button>
                <div id="num">
                    08 Character <input id="count" type="checkbox" name="chkone" value="6"><br>
                    10 Character <input id="count" type="checkbox" name="chktwo" value="10"><br>
                    12 Character <input id="count" type="checkbox" name="chkthree" value="12"><br>
                    14 Character <input id="count" type="checkbox" name="chkfour" value="14"><br>
                </div>
            </form>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>

</html>