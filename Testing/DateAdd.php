
<!DOCTYPE html>
<html>
<body>

<?php
$dd = "2013-03-05";
$date=date_create($dd);
date_add($date,date_interval_create_from_date_string("1 weeks"));
echo date_format($date,"Y-m-d");
?>

</body>
</html>
