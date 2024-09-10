<?php

abstract class course{
    abstract function getCourseDetail();
}
class OnlineCourse extends course{
    function getCourseDetail(){
        echo "Ini adalah Online Course";
    }
}
class OfflineCourse extends course{
    function getCourseDetail(){
        echo "Ini adalah Offline Course";
    }
}
$oc = new OnlineCourse();
echo "Ini adalah function OnlineCourse <br>";
$oc->getCourseDetail();
echo "<hr>";
echo "Ini adalah function OfflineCourse <br>";
$obj = new OfflineCourse();
$obj->getCourseDetail(); 

?>