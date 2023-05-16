<?php
class notification{
    const webDev = "Belajar web development PHP.";
}
interface study{
    public function personalStudy();
}
class school implements study{
    public function personalStudy(){
        echo notification::webDev;
    }
}
$school = new school();
$school->personalStudy();
?>