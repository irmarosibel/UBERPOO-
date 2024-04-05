<?php
class Driver extends Account{
    public function_construct($name,$document,$email,$password){
        parent::_construct($name,$document,$email,$password);
    }
    public function printDataDriver(){
        echo "Name:$this->name
        Document:$this->document
        E-mail:$this->email 
        Password:$this->password";
        
    }
}
?>