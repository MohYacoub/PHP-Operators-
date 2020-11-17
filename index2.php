<?php 


echo "<table border = '1'>";
    echo "<tr>";
        echo "<th>Funtion</th>";
        echo "<th>Result</th>";
    echo "</tr>";

   
//$year = "2012";
function checkyear($year){

    $checkyearleap = date('L', mktime(0, 0, 0, 1, 1, $year));

return $checkyearleap;
}

$prt1 = checkyear(2015);


   echo "<tr>";
      
        echo  "<td>leapyear2012</td>";
        echo  "<td>$prt1</td>";

    echo "</tr>";

$temp = 10 ;
if($temp < 20 ){
    $print = "WE ARE IN WINTER";
}else {
    $print = "WE ARE IN SUMMER";
}

    echo "<tr>";
      
        echo  "<td>seasone</td>";
        echo  "<td>$print</td>";

    echo "</tr>";


    function checkint($int1,$int2){
        
        if ($int1 == $int2){
            $res = 3 * $int1;
            return $res;
        }

    }
  
    

    $ress = checkint(50,50);

    echo "<tr>";
      
    echo  "<td>integercheck</td>";
    echo  "<td>$ress</td>";

    echo "</tr>";

    function diff($n){

        if($n > 100){
            return $n - 100;
        }else {
            return 
                100 - $n;   
        }
    }

    $fndiff30 = diff(30);

    echo "<tr>";
      
    echo  "<td>fndiff30</td>";
    echo  "<td>$fndiff30</td>";

    echo "</tr>";

    $fndiff140 = diff(140);

    echo "<tr>";
      
    echo  "<td>fndiff140</td>";
    echo  "<td>$fndiff140</td>";

    echo "</tr>";


    function check2($n1,$n2){
        $sum = $n1 + $n2 ;
        if ( $n2 == 30 || $n1 == 30 || $sum == 30){
            return "True";
        }
    }

    $fntrue = check2(30,15);
    echo "<tr>";
      
    echo  "<td>checktrue30,15</td>";
    echo  "<td>$fntrue</td>";

    echo "</tr>";

    $fntrue2 = check2(14,18);
    echo "<tr>";
      
    echo  "<td>checktrue14,18</td>";
    echo  "<td>$fntrue2</td>";

    echo "</tr>";

    function checkint2($x){
        if(abs($x - 100) <= 10 || abs($x - 200) <= 10){
            return true;
        }else {
            return false;
        }
          
    
    }

    $ress22 = checkint2(105);
    echo "<tr>";
      
    echo  "<td>checkint105</td>";
    echo  "<td>$ress22</td>";

    echo "</tr>";

    
    $ress22 = checkint2(114);
    echo "<tr>";
      
    echo  "<td>checkint114</td>";
    echo  "<td>$ress22</td>";

    echo "</tr>";

    function multiply($n){
        if($n % 7 == 0 ){
            return "the number is 7 multiplacation";
        }  elseif ($n % 3 == 0) {
            return "the number is 3 multiplacation";
        }
    }  

    $rees = multiply(14);
    echo "<tr>";
      
    echo  "<td>check14</td>";
    echo  "<td>$rees</td>";

    echo "</tr>";

    $rees = multiply(81);
    echo "<tr>";
      
    echo  "<td>check81</td>";
    echo  "<td>$rees</td>";

    echo "</tr>";

    function checkifstr($str){
        if (substr($str,0,2) === "if") 
            {
              return $str;
             }else {
                return "if," . $str;
             }
        }

    $chec1 = checkifstr("if i camee to jordan");
    
    echo "<tr>";
      
    echo  "<td>checkif</td>";
    echo  "<td>$chec1</td>";

    echo "</tr>";
    
    
    $chec1 = checkifstr("i love if i camee to jordan");
    
    echo "<tr>";
      
    echo  "<td>checkif2</td>";
    echo  "<td>$chec1</td>";

    echo "</tr>";

    function removespcstr($str, $pos){

       // $result1 = substr($str,$pos,strlen($str));
       $str1 = substr($str,0,$pos);
        $str2 = substr($str,($pos+1),strlen($str));
        return $str1.$str2;
    }

    $chec2 = removespcstr("Romove v from string",4);

    echo "<tr>";
      
    echo  "<td>removespcstr</td>";
    echo  "<td>$chec2</td>";

    echo "</tr>";
    
    function rang100($n1,$n2){

        if (($n1 >=100 && $n1 <= 200) || ($n2 >=100 && $n2 <= 200) ){
            return "true";
        }else {
            return "false" ;
        }
    }

    $test135 = rang100(135,250);

    echo "<tr>";
      
    echo  "<td>rang100-200</td>";
    echo  "<td>$test135</td>";

    echo "</tr>";

    function rang2050($n3,$n4){
        if (($n3 >=20 && $n3 <= 50) && ($n4 >=20 && $n4 <= 50)){
            return "true";
    } else {
        return "false";
    }
}
    $test135_2 = rang2050(30,60);

    echo "<tr>";
      
    echo  "<td>rang20-50</td>";
    echo  "<td>$test135_2</td>";

    echo "</tr>";

    function largestnum($x,$y,$z){
        if($x > $y && $x > $z) {
            return "the largest num is $x";                
            }
            elseif($y > $z){
                return "the largest num is $y";
            }else{
                return "the largest num is $z";
            }
        }
    

    $largcheck = largestnum(18,50,150);

    echo "<tr>";
      
    echo  "<td>largestnum18-50-150</td>";
    echo  "<td>$largcheck</td>";

    echo "</tr>";
    
    
    $largcheck = largestnum(18,250,150);

    echo "<tr>";
      
    echo  "<td>largestnum18-250-150</td>";
    echo  "<td>$largcheck</td>";

    echo "</tr>";
        
    
    $largcheck = largestnum(180,50,150);

    echo "<tr>";
      
    echo  "<td>largestnum180-50-150</td>";
    echo  "<td>$largcheck</td>";

    echo "</tr>";

    function closto100($a,$b){
        if(abs($a - 100) < abs($b - 100)){
            return "closest is $a ";
        }
        elseif(abs($a - 100) == abs($b - 100)) {
            return "0";
        }else {
            return "closest is $b ";
        }
    
    }
    $closenum = closto100(120,110);

    echo "<tr>";
      
    echo  "<td>closesestnum120-110</td>";
    echo  "<td>$closenum</td>";

    echo "</tr>";

    $closenum = closto100(120,120);

    echo "<tr>";
      
    echo  "<td>closesestnum120-120</td>";
    echo  "<td>$closenum</td>";

    echo "</tr>";

    
    $closenum = closto100(140,200);

    echo "<tr>";
      
    echo  "<td>closesestnum140-200</td>";
    echo  "<td>$closenum</td>";

    echo "</tr>";


    function accept($n1,$n2){
        if($n1 == 5 || $n2 == 5 ){
            return true;
        }
        if ($n1 + $n2 == 5 || abs($n1 - $n2) == 5)
        {
          return true;
        }
    }
    
    $final = accept(7,6);
    echo "<tr>";
      
    echo  "<td>final7-6</td>";
    echo  "<td>$final</td>";

    echo "</tr>";

    $final = accept(7,5);
    echo "<tr>";
      
    echo  "<td>final7-5</td>";
    echo  "<td>$final</td>";

    echo "</tr>";

    $final = accept(2,3);
    echo "<tr>";
      
    echo  "<td>final2-3</td>";
    echo  "<td>$final</td>";

    echo "</tr>";
    
    
?>