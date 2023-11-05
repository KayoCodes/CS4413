<?php
//$myfile = fopen("data.txt","r") or die("Unable to open File");
$names = file('data.txt');
print "Table Data";
print '<table border=1>';
print'<tr> <th> First Name </th> 
<th> Last Name  </th>   </tr>';
foreach ($names as $name => $lineNum) {
   
    if($name == 0){
        print '<tr> <td>'. $lineNum .'</td>';
    }elseif( $name %2== 0){
        $str = $name.' '. $lineNum;
        print '<tr> <td>'. $lineNum .'</td>';
    }else{
         $str2= $lineNum.' '.'<br>';
         print '<td>'. $lineNum .'</td> </tr>';
    }
}
print"</table>";
?>
