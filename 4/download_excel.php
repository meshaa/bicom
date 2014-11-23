<?php
 
error_reporting( error_reporting() & ~E_NOTICE );
	  error_reporting( error_reporting() & 0 );
    include('config.php');
    //Mysql query to get records from datanbase
    $sql = mysql_query('select * from fertig');
    //Programetically get the Headings of the excel columns
    $columns_total = mysql_num_fields($sql);
    for ($i = 0; $i < $columns_total; $i++)
    {
    $heading = mysql_field_name($sql, $i);
    $contents .= '"'.$heading.'";';
    }
    $contents .="\n";
    // Get Records from the table
    while ($row = mysql_fetch_array($sql)) {
    for ($i = 0; $i < $columns_total; $i++) {
    $contents.='"'.$row["$i"].'";';
    }
    $contents.="\n";
    }
    // remove html and php tags etc.
    $contents = strip_tags($contents);
    //header to make force download the file
    Header("Content-Disposition: attachment; filename=ProductsReport".date('d-m-Y').".ods");
    print $contents; 
 
?>
   
