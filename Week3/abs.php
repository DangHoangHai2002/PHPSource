<?php
 abstract class Parentclass{
    abstract protected function prefixName($name);
 }    
 class ChildClass extends Parentclass {
    public function prefixName($name){
        if($name=="John Doe")
        {
            $prefix="Mr.";
        }elseif ($name=="Jane Doe")
        {
            $prefix="Mrs.";
        }
         return "{$prefix} {$name}";
        }
    }
$class = new  ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";
echo $class->prefixName("Jane Doe");
echo $class->prefixName('Joe Mama');
?>