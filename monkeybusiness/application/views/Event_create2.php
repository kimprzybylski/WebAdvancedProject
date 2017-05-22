<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Monkey Business</title>
</head>
<body>
<?php
echo form_open('events/create');
echo form_label('Name');
echo form_input(array('id'=>'name','name'=>'name'));
echo "<br/>";

echo form_label('Start Date');
echo form_input(array('id'=>'startDate','name'=>'startDate'));
echo "<br/>";

echo form_label('End Date');
echo form_input(array('id'=>'endDate','name'=>'endDate'));
echo "<br/>";

echo form_label('Person Id');
echo form_input(array('id'=>'personId','name'=>'personId'));
echo "<br/>";

echo form_submit(array('id'=>'submit','value'=>'Add'));
echo form_close();
?>
</body>
</html>



