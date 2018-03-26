27
<?php
// some code of your own
phpcredits(CREDITS_ALL - CREDITS_FULLPAGE);
// some more code
?>


<?php
// Create a temporary file in the temporary 
// files directory using sys_get_temp_dir()
$temp_file = tempnam(sys_get_temp_dir(), 'Tux');
echo $temp_file."\n";
?>


<?php
print_r(get_extension_funcs("JSON"));
echo "\n";
print_r(get_extension_funcs("XML"))."\n";
?>

<?php
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod())."\n";
?>

<?php
$a = 15;
$b = 276;
echo "\nBefore swapping:  ". $a . ',' . $b;
list($a, $b) = array($b, $a);
echo "\nAfter swapping:  ". $a . ',' . $b."\n";
?>
<?php
$a = 15;
$b = 27;
 
// Swap Logic

echo "\nThe number before swapping is:\n";
echo "Number a =".$a." and b=".$b;

$temp = $a;
$a = $b;
$b = $temp;
 
echo "\nThe number after swapping is: \n";
echo "Number a =".$a." and b=".$b."\n";
?>


<?php
function armstrong_number($num) {
  $sl = strlen($num);
  $sum = 0;
  $num = (string)$num;
  for ($i = 0; $i < $sl; $i++) {
    $sum = $sum + pow((string)$num{$i},$sl);
  }
  if ((string)$sum == (string)$num) {
    return "True";
  } else {
    return "False";
  }
}
echo "Is 153 Armstrong number? ".armstrong_number(153);
echo "\nIs 21 Armstrong number? ".armstrong_number(21);
echo "\nIs 4587 Armstrong number? ".armstrong_number(4587);"\n";
?>


33

34
<?php
function remove_duplicates_list($list1) {
  $nums_unique = array_values(array_unique($list1));
  return $nums_unique ;
}
$nums = array(1,1,2,2,3,4,5,5);
print_r(remove_duplicates_list($nums));
?>


<?php
function test_bit_position($num, $pos1, $pos2) {
   $pos1--;
   $pos2--;
   $bin_num = strrev(decbin($num));
   if ($bin_num[$pos1] == $bin_num[$pos2]) {
     return "true";
   } else {
     return "false";
   }
}
echo test_bit_position(112,5,6)."\n";
?>


<?php
function str2_in_str1($str1, $str2) {
  $p_len = strlen($str2);
   $w_len = strlen($str1);
   $w_start = $w_len-$p_len-1;
   if (substr($str1, $w_len-$p_len, $p_len) == $str2) {
      return "true";
   } 
   else 
   {
      return "false";
   }
}
echo str2_in_str1("Python","on")."\n";
echo str2_in_str1("JavaScript","php")."\n";
?>

