<?php
$host="localhost";
$dbname="ssb";
$con=mysql_connect($host,'root','');
$db=mysql_select_db($dbname,$con);
if($db){
	//echo "Connection Tested";
}
$row = 1;//Counter Initiated To Determine the Number of rows
//$no_of_extra_cols=2;//No of extra Columns which are in DB but not in Sheet

if (($handle = fopen('data.csv', "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
		
       $num = count($data);
	   
	   
	   
	   //This is used to count of no of Active Cells in a the csv sheet
       // echo "<p> $num fields in line $row: <br /></p>\n";
          $query="INSERT INTO t_user_classified values(NULL,1004,";
        for ($c=0; $c < $num; $c++) {//here logic to be added which would be  used to start from second row
			$data[$c]=mysql_real_escape_string($data[$c]);
			$query.="'".$data[$c]."',";
			
			 
           // echo $data[$c] . "<br />\n";//Display Data Cells
        }
		$query.="4,1)";
		//echo $query."<br>";
		mysql_query($query) or die(mysql_error());
		
		$query=null;
		
		 $row++;
	   }
}?>