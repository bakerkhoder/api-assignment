
<?php
// PHP code to check for Palindrome string 
// Using strrev()
function Palindrome($string){ 
    if (strrev($string) == $string){ 
        return 1; 
    }
    else{
        return 0;
    }
} 
 
// Driver Code
$original = $_GET["original"];
if(Palindrome($original)){ 
$result=[$original=>"Palindrome"]; 
echo json_encode($result);
}
else { 
$result=[$original=>"NOt a Palindrome"]; 
echo json_encode($result);}
?> 
