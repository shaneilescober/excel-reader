<?php
require_once 'excel_reader2.php';
$data = new Spreadsheet_Excel_Reader("test.xls",false);
?>
<html>
<head>
</head>

<body>
<?php 
    echo $data->dump(true,true); 
    echo $data->val(25-26,'B');
?>
</body>
</html>
