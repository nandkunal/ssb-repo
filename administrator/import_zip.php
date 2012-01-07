<?php
$host="localhost";
$dbname="ssb";
$con=mysql_connect($host,'root','');
$db=mysql_select_db($dbname,$con);
if($db){
	//echo "Connection Tested";
}
$row = 1;//To Determine the Number of rows
$no_of_extra_cols=2;//No of extra Columns which are in DB but not in Sheet
if (($handle = fopen("categories.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);//This is used to count of no of Active Cells in a the csv sheet
       // echo "<p> $num fields in line $row: <br /></p>\n";
       
        for ($c=0; $c < $num; $c++) {
			$data=mysql_real_escape_string($data[$c]);
			$query="INSERT INTO t_sub_cat values(NULL,'".$data."',1004)";
			mysql_query($query) or die(mysql_error());
			 
           // echo $data[$c] . "<br />\n";//Display Data Cells
        }
		$data=null;
		$query=null;
		 $row++;
    }
    fclose($handle);
}
?>