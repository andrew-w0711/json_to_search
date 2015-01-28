<!DOCTYPE html>
<html>
<body>

<?php
    
    $is_zipcode = false;
    $zipcode = $_GET['zipcode'];
    $handle = fopen("list.csv", "r");
    while ($data = fgetcsv($handle))
    { 
        if($data[9] == $zipcode)
        {
            $is_zipcode = true;
            echo "<div class = 'row'>";
            echo "<img src = 'images/source.jpg' alt = 'picture' />";
            echo "<div class = 'content'>";
            echo "<p>";
            echo $data[0];
            echo "</p>";
            echo "<p>";
            echo $data[1];
            echo "</p>";
            echo "<p>";
            echo $data[2];
            echo "</p>";
            echo "<p>";
            echo $data[3];
            echo "</p>";
            echo "<p>";
            echo $data[4];
            echo "</p>";
            echo "<p>";
            echo $data[5];
            echo "</p>";
            echo "<p>";
            echo $data[6];
            echo "</p>";
            echo "<p>";
            echo $data[7];
            echo "</p>";
            echo "<p>";
            echo $data[8];
            echo "</p>";
            echo "<p>";
            echo $data[10];
            echo "</p>";
            echo "<p>";
            echo $data[11];
            echo "</p>";
            echo "</div>";
            echo "</div>";
        } 
    }

    if($is_zipcode == false){
        echo "<strong>Sorry there are no handy vets in your area</strong>";
    }

?>
</body>
</html>