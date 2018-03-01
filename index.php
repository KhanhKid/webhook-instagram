<?php
if(isset($_GET)){
    file_put_contents('myfile.json', json_encode($_GET));
}

?>