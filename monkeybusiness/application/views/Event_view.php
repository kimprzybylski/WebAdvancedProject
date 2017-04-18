<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset = "utf-8">
    <title>Monkey Business</title>
</head>
<body>
<h1>Events Monkey Business</h1>
<table border = "1">
    <?php
    echo "<tr>";
    echo "<td>Id</td>";
    echo "<td>Name</td>";
    echo "<td>Start Date</td>";
    echo "<td>End Date</td>";
    echo "<td>Person Id</td>";
    echo "<td>Edit</td>";
    echo "<td>Delete</td>";
    echo "<tr>";


    foreach($records as $r) {
        echo "<tr>";
        echo "<td><a href = '".base_url()."index.php/events/"
            .$r->Id."'>$r->Id</a></td>";
        echo "<td>".$r->Name."</td>";
        echo "<td>".$r->StartDate."</td>";
        echo "<td>".$r->EndDate."</td>";
        echo "<td>".$r->PersonId."</td>";
        echo "<td><a href = '".base_url()."index.php/events/update_event_view/"
            .$r->Id."'>Edit</a></td>";
        echo "<td><a href = '".base_url()."index.php/events/delete/"
            .$r->Id."'>Delete</a></td>";
        echo "<tr>";
    }
    echo "<a href = ".base_url()."index.php/events/create_event_view>Add"."</a>";
    ?>
</table>

</body>

</html>