<?php 
require_once('Person.php');
class classTest {
    function main(){

        $t = new Person('anas');
        echo $t->get_name();
    }
}

classTest::main();

?>