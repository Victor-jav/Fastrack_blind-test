<?php
$link = fbsql_pconnect("localhost", "root", "fastrack")
or die("Impossible de se connecter");
$sql = "SELECT musique FROM musique;";
$rs = fbsql_query($sql, $link);
$row_data = fbsql_fetch_row($rs);
fbsql_free_result($rs);
$connection= mysqli_connect("localhost", "root", "", "fastrack");
$rs = fbsql_query($sql, $link);
fbsql_set_lob_mode($rs, FBSQL_LOB_HANDLE);
$row_data = fbsql_fetch_row($rs);
$blob_data = fbsql_read_blob($row_data[0]);
fbsql_free_result($rs);

?>