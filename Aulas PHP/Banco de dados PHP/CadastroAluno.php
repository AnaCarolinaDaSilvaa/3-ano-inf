<?php
@$servername = "localhost";
@$username = "root";
@$password = "";
@$dbname = "aulaphp";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

<!DOCTYPE html>
<html>

<body>

<form action="teste.php" method="post">
    Registro Aluno: <input type="number" required><br>
    Nome: <input type="text" Nome="nome" required><br>
    Email: <input type="text" Email="Email" required><br>
    Celular: <input type="number" Celular="celular" required><br>
    <br>
    <input type="submit" class="button">

</form>

<style>
    body{
        background-image: linear-gradient(135deg,#C54B8C,#8E4585 ,#A47DAB );
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 300px;
        border: none;
    }
    form{
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 10px 25px rgba(0, 0, 0 ,0.2);
        width: 250px;
    }
    input{
        border-radius: 5px;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;

    }
    .button {
        background-color: dodgerblue;
        border: none;
        border-radius: 5px;
        color: white;
        padding: 5px 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        cursor: pointer;
    }
</style>
</body>
</html>