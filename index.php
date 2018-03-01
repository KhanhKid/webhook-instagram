<?php
if(isset($_GET)){
    file_put_contents('myfile.json', json_encode($_GET));
    echo json_encode(array(" hub.challenge"=>$_GET['hub.challenge']));
}

?>
