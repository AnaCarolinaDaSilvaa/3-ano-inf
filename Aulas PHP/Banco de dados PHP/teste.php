<?php
$name = $_REQUEST["name"];
$password = $_REQUEST["password"];
$email = $_REQUEST["email"];
$celular = $_REQUEST["celular"];
?>
<!DOCTYPE html>
<html>

<head>
    <title>aaaa</title>
    <style>
        body{
            background-image: linear-gradient(135deg,#C54B8C,#8E4585 ,#A47DAB );
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 300px;
            border: none;
        }
    </style>
</head>
<body>
   <h2>Parabéns, <?php echo $nome ?>! Você conseguiu se cadastrar!</h2>
</body>

</html>
