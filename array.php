<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array</title>
</head>
<body>
    <h1> Latihan array Chaerin <h1>
        <?php
        //soal 1
        echo "<h3> Soal no 1 </h3>";
        /*kids=mike,dustin,will,lucas,max,eleven
        adult=hopper,nancy,joyce,nathan,murray */
        $kids = array ("mike","dustin","will","lucas","max","eleven");
        $adult = array ("hopper","nancy","joyce","nathan","murrayy");   
        print_r($kids);
        echo "<br>";
        print_r($adult);
        //soal 2
        echo "<h3>soal no 2</h3>";
        /*tunjukkan panjang array pada no 1
        */
        echo "cast stranger things:";
        echo "<br>";
        echo "total kids:".count($kids);
        echo "<br>";
        echo "<ol>";
        echo "<li>$kids[0]</li>";
        echo "<li>$kids[1]</li>";
        echo "<li>$kids[2]</li>";
        echo "<li>$kids[3]</li>";
        echo "<li>$kids[4]</li>";
        echo "<li>$kids[5]</li>";
        echo "</ol>";
        echo "total adult:".count($adult);
        echo "<br>";
        echo "<ol>";
        echo "<li>$adult[0]</li>";
        echo "<li>$adult[1]</li>";
        echo "<li>$adult[2]</li>";
        echo "<li>$adult[3]</li>";
        echo "<li>$adult[4]</li>";    
        echo "</ol>";
        //soal no 3
        echo "<h3>latihan no 3</h3>";
         /*
            SOAL No 3
            Susun data-data berikut ke dalam bentuk Asosiatif Array (Array Multidimensi)
            
            Name: "Will Byers"
            Age: 12,
            Aliases: "Will the Wise"
            Status: "Alive"

            Name: "Mike Wheeler"
            Age: 12,
            Aliases: "Dungeon Master"
            Status: "Alive"

            Name: "Jim Hopper"
            Age: 43,
            Aliases: "Chief Hopper"
            Status: "Deceased"

            Name: "Eleven"
            Age: 12,
            Aliases: "El"
            Status: "Alive"
            
        */
        $data = array(array
         ("will byers","mike wheeler","jim hopper","eleven"),
         array("12","43"),
         array("will the wise","dungeon master","chief hopper","el"),
         array("alive","deceased")
);
             
echo "Name: ".$data[0][0]. "<br>";
echo "Age: ".$data[1][0]. "<br>";
echo "Aliases: ".$data[2][0]. "<br>";
echo "Status: ".$data[3][0]. "<br>";
echo "<br>";
echo "Name: ".$data[0][1]. "<br>";
echo "Age: ".$data[1][0]. "<br>";
echo "Aliases: ".$data[2][1]. "<br>";
echo "Status: ".$data[3][0]. "<br>";
echo "<br>";
echo "Name: ".$data[0][2]. "<br>";
echo "Age: ".$data[1][1]. "<br>";
echo "Aliases: ".$data[2][2]. "<br>";
echo "Status: ".$data[3][1]. "<br>";
echo "<br>";
echo "Name: ".$data[0][3]. "<br>";
echo "Age: ".$data[1][0]. "<br>";
echo "Aliases: ".$data[2][3]. "<br>";
echo "Status: ".$data[3][0]. "<br>";
?>

        
</body>
</html>