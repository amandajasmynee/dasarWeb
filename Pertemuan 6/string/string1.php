<?php
$loremIpsum = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis corporis tempore quos animi laudantium voluptatem minima sint quasi fugiat odio nisi earum ut, molestiae fuga assumenda reiciendis, totam porro illo?.";

echo "<p>{$loremIpsum}</p>";
echo "Panjang karakter: ". strlen($loremIpsum). "<br>";
echo "Panjang kata: ". str_word_count($loremIpsum). "<br>";
echo "<p>" . strtoupper($loremIpsum) . "</p>";
echo "<p>" . strtolower($loremIpsum) . "</p>";
?>