<form id="form1" name="form1" method="post" action="index.php">
<input type="text" name="text" id="textfield" />
<input type="submit" value="submit" />
</form>

<?php
$text = $_POST['text'];

if ( $text == "hi") {
	echo "hi1";
}


if(strpos($text, 'google') !== false) {
$start = mb_strpos($text,'「')+1;
$end = mb_strpos($text,'」');
$mojiretu = mb_substr($text, $start, $end-$start, UTF8);
$replace1 = str_replace('oogle ', '', $mojiretu);
echo $replace1;
}
