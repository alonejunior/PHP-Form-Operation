<?php

/*
function form_filtrele($post)
{
    return is_array($post) ? array_map('form_filtrele',$post) : htmlspecialchars(trim($post));
}

$_GET = array_map('form_filtrele', $_GET);


function get($name)
{
    if (isset($_GET[$name]))
    return $_GET[$name];
}


$id = (int) get('id');

if(!is_int('id') || !$id){
    echo ' sayı olmalıdır';
    exit;
}

echo get('deneme');

*/

printf($_REQUEST);


?>









<form action="" method="get">
    Arama:
   
 <input type="text" value="<?php echo get('kelime') ?>"  name="kelime">

<hr>

 
   

</form>
