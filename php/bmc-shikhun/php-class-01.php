<!-- পিএইচপিতে লাইন ব্রেক করতে কি ব‍্যবহার করা হয়? -->
<?php

?>
<!-- var_dump((bool) "");  এর আউটপুট কি আসবে? -->
<?php
var_dump((bool) "");
?>
<!-- <a href="http://google.com">Google</a> এটাকে echo করে দেখান? -->
<?php
echo '<a href="http://google.com">Google</a>';
echo "<a href=\"http://google.com\">Google</a>";
?>

<!--  এটা কোন টাইপের ভ‍্যারিয়েবল প্রিন্ট করবে? -->
<?php
var_dump(round(25/7));
?>
<!-- কোন ভ‍্যারিয়েবলটি সঠিক নয়? -->
<!-- $4site
$_4site
$site4 -->
<?php
//$4site;
$_4site;
$site4;
?>
<!-- $foo = 25; $bar = &$foo;  $bar = &(24 * 7); echo $bar;  এর আউটপুট কি আসবে বলে মনে করছেন -->
<?php
$foo = 25;
$bar = $foo;
$bar = (24 * 7);
echo $bar;
?>
<!-- Variables লিখার নিয়ম কি -->
<?php
echo '1st write $ (dollar) Sign, then with no space any letter or word, after then any number. after $ sign avoid use number.';
?>
<!-- Variables কাকে বলে? -->
<?php
echo 'Variable is one type data storage or container, what can catch any data and can update. In programming language variable is that what declare and assign any type data or value.';
?>
<!-- You deleted C:\*.*?  এটা পিএইপিতে প্রিন্ট করে দেখান? -->
<?php
echo 'You deleted C:\\*.*';
?>
<!-- পিএইচপি কাকে বলে? পিএইচপি এর ফুল মিনিং কি? -->
<?php
echo 'php is a scripting language. php full name Hypertext Preprocessor. But it\'s first name is \'Personal Home Page\'. php is come from these word.';
?>
<!-- কোথায় আমরা পিএইচপি ক্লোজিং ট‍্যাগ (?>) ব‍্যবহার করবো আর কোথায় ব‍্যবহার করবো না? -->
<?php
echo 'When we use plain php file, we can avoid closing tag (?>). But in other file like html or others we use both tag.';
?>
<!-- Arnold once said: "I'll be back" এটা পিএইচপিতে প্রিন্ট করে দেখান? -->
<?php
echo 'Arnold once said: "I\'ll be back"';
echo "Arnold once said: \"I\'ll be back\"";
?>
<!-- $a_bool = true; echo get_debug_type($a_bool);  এটার আউটপুট কি আসবে? -->
<?php
$a_bool = true;
echo get_debug_type($a_bool);
?>
<!-- var_dump((bool) 2.3e5); এর আউটপুট কি আসবে? -->
<?php
var_dump((bool) 2.3e5);
?>
<!-- Hello world! এটা পিএইচপিতে কি করে প্রিন্ট করবেন? -->
<?php
echo 'Hello world!';
?>
<!-- ভ‍্যারিয়েবলের টাইপগুলোর নাম লিখুন? -->
<?php
echo 'String, Integer, Double, Boolean, <br> Array, Object, Null,';
?>