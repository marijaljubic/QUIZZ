<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vezba</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php

        $answer1=$_POST["question-1-answers"];
        $answer2=$_POST["question-2-answers"];

        $totalCorrect=0;
        if($answer1=="C")
        {
            $totalCorrect++;
        }
        if($answer2=="A")
        {
            $totalCorrect++;
        }
        echo "Your Score : ".$totalCorrect/5;
?>
</body>
</html>