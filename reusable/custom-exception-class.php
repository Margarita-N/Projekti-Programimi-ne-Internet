<?php
class noOrderException extends Exception{

    public function errorMessage(){
        $error='Nuk mund te beni porosine pasi nuk jeni te loguar apo nuk ka asgje ne shporte!';
        return $error;
    }
}

?>