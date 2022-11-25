<?php
$chiave="valore di chiave";
$paragraph= $_GET['paragraph'];
$bad_word=$_GET['bad_word'];
echo $paragraph .'<br>';
// echo $bad_word .'<br>';

$censored_para=str_replace($bad_word, '***', $paragraph);
echo 'Questo paragrafo è lungo ' .strlen($paragraph) .' caratteri' .'<br>';

echo $censored_para;

?>