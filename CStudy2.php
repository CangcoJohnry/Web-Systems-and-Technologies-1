<!DOCTYPE html>

<html>

<head>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .box {
            background: #ccc;
            width: 400px;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            box-shadow: 0 0 10px rgba(106, 97, 97, 0.2);
        }
    </style>

</head>

<body>
    
<div class="box">

<?php

$name = $_GET['name'];
$score = $_GET['score'];

if ($score <=100 && $score >=95) {

    echo "$name, <br> Your Score is $score <br> Your Grade is 'A' <br> 'Outstanding Performance!'";

}else if ($score <=94 && $score >=90) {

    echo "$name, <br> Your Score is $score <br> Your Grade is 'B' <br> 'Great Job!'";

}else if ($score <=89 && $score >=85) {

    echo "$name, <br> Your Score is $score <br> Your Grade is 'C' <br> 'Good effort, keep it up!'";

}else if ($score <=84 && $score >=75) {

    echo "$name, <br> Your Score is $score <br> Your Grade is 'D' <br> 'Work harder next time'";

}else if ($score <= 74) {

    echo "$name, <br> Your Score is $score <br> Your Grade is 'F' <br> 'You need to improve'";

}else {
    echo "Invalid Input in the URL, Try again";
}

?>
</div>
</body>
</html>
