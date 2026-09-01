<?php


class StudentCounter
{
    
    public static $count = 0;

    // Static method
    public static function addStudent()
    {
        self::$count++;
    }
}


StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();


echo "Total students: " . StudentCounter::$count;
?>
