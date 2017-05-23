<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Monkey Business</title>
</head>
<body>
<?php
echo form_open('events/update');
echo form_hidden('old_id',$old_id);
echo form_label('Name');
echo form_input(array('id'=>'name','name'=>'name', 'value'=>$records[0]->Name));
echo "<br/>";

echo form_label('Start Date');
echo form_input(array('id'=>'startDate','name'=>'startDate', 'value'=>$records[0]->StartDate));
echo "<br/>";

echo form_label('End Date');
echo form_input(array('id'=>'endDate','name'=>'endDate', 'value'=>$records[0]->EndDate));
echo "<br/>";

echo form_label('Person Id');
echo form_input(array('id'=>'personId','name'=>'personId', 'value'=>$records[0]->PersonId));
echo "<br/>";

echo form_submit(array('id'=>'submit','value'=>'Edit'));
echo form_close();
?>
</body>
</html>



