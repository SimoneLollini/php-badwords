<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad World</title>
</head>
<body>
    <form action="script.php" method="GET">
        <textarea style="width:250px" type="text" name="paragraph" cols="30" rows="10" placeholder="Inserisci qua il testo del tuo paragrafo"></textarea>
        <br>
        <input style="width:250px" type="text" name="bad_word" placeholder="Inserisci qua la parola censurare">
        <br>
        <button type="submit">Invia</button>
    </form>
</body>
</html>