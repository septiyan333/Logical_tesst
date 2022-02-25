<html>
<?php 
    for($i = 1; $i <= 50; $i++){
        $output = "";
        if($i % 3 == 0 && $i % 5 == 0){
            $output = "FooBar";
        }
        else if($i % 5 == 0){
            $output = "Bar";
        }
        else if($i % 3 == 0){
            $output = "Foo";
        }
        else{
            $output = $i;
        }
        echo $output;
        echo "<br>";
    }
?>
</html>