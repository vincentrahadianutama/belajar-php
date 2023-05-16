<?php
class notification{
    const OOP = "OOP is so funny to learn, but so hard";
}
trait Learn{
    public function learnOOP(){
        echo notification:: OOP;
    }
}
class learnToday{
    use Learn;
}
$learn = new learnToday();
$learn->learnOOP();
?>