<?php
$error = "";
$title = "Check If Valid Sentence(Functions)";

$content = "";
$result = "";

//START of functions

//END of functions

$capital = null;
$punctuation = null;

if(isset($_POST['submit'])) {


    function check_sent($param1)
    {
        if (ord($param1) > 64 && ord($param1) < 91) {
            return true;
        } else return false;

    }

    $capital = check_sent($_POST['var1']);

    function check_punct($param1)
    {
        if (substr($param1, -1) == "?" || substr($param1, -1) == "!" || substr($param1, -1) == ".") {
            return true;
        } else return false;
    }

    $punctuation = check_punct($_POST['var1']);

    if (isset($_POST['var1'])) {
        if ($capital == true && $punctuation == true) {
            $result = "The Statement is a proper sentence.";
        } elseif ($capital == false) {
            $result .= "You need to capitalize your sentence for it to be correct.";
        }
        if ($punctuation == false) {
            $result .=" " . "You need to end your sentences with either a '!', '.' or '?'";
        }
    }
}
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title;?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



</head>
<body>
<div class="container">
    <h1><?=$title;?></h1>
    <?php

    if($error){
        ?>
        <div class="alert alert-danger" role="alert">
            <?= $error ?>
        </div>
        <?php
    }
    ?>
    <div class="alert alert-info" role="alert">
        <p>
            This name determines if Sentence is Valid (does it begin with capital and end with period or exclamation mark)

        </p>
    </div>
    <form method="post">
        <div class="form-group">
            <label for="content">Sentence</label>
            <input name="var1" type="text" class="form-control" id="content">
        </div>
        <div class="form-group">
            <label for="result">Result</label>
            <input type="text" class="form-control" id="result" disabled value="<?=$result;?>" >
        </div>

        <input name="submit" type="submit" class="btn btn-primary" value="Submit">


    </form>
</div>
</body>
</html>