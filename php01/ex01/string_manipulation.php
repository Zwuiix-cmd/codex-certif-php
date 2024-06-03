<?php
$phrase = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
echo implode(" ", array_reverse(explode(" ", $phrase)));