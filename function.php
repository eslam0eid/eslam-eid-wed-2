<?php



// function search($word)
// {
  
// $array=["ahmed" , "eslam" , "sara" , "mahmoud" , "mostafa" , "osama" , "amr" , "sherif"];
  
// for($i=0 ; $i<count($array) ; $i++)
// {
// if($word == $array[$i])
// {
//     echo $word;
// }

// }

// }


// search('eslam');
?>


<?php
function getPriceWithDiscount($price)
{
if($price < 1000)
{
    $result=($price*90)/100;
}elseif( $price > 1000){
    $result =($price*95)/100;
}

return $result;

}

$esl =getPriceWithDiscount(10000);
echo $esl;