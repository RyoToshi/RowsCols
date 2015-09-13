 <?php
 
    error_reporting(-1);
    mb_internal_encoding('utf-8');
 
    $text =
    "Спить натомлене місто
    Мирним, лагідним сном.
    Ген вогні, як намисто,
    Розцвіли над Дніпром.
    Вечорів оксамити,
    Мов щастя прибій...
    Як тебе не любити,
    Києве мій!";
 
    $lines = preg_split("/\\v/u", $text, -1, PREG_SPLIT_NO_EMPTY);
    $linesLengths = array();
    foreach ($lines as $key => $value) {
 
        $lines[$key] = trim($value);
        $length = mb_strlen($lines[$key]);
        $linesLengths[] = $length;
    }
    print_r($lines);
 
    for ($i=0; $i< max($linesLengths); $i++ ) {
        foreach ($lines as $value) {
            $char = (mb_substr($value, $i, 1))? mb_substr($value, $i, 1) : " ";
            echo "$char |";
        }
        echo "\n";
    }