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
        echo '<td><a href ="index.php/events/'.$r->Id.'">'.$r->Id."</a></td>";
        echo "<td>".$r->Name."</td>";
        echo "<td>".$r->StartDate."</td>";
        echo "<td>".$r->EndDate."</td>";
        echo "<td>".$r->PersonId."</td>";
        echo '<td><a href ="index.php/events/update_event_view/'.$r->Id.'">Edit</a></td>';
        echo '<td><a href ="index.php/events/delete/'.$r->Id.'">Delete</a></td>';
        echo "<tr>";
    }
    echo "<a href = ".base_url()."index.php/events/create_event_view>Add"."</a>";
    ?>
</table>

<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>



<input type="text" id="color" />
<button onclick="setColor()">Stel achtergrond kleur in<button/>

<script>
    var x = document.getElementById("demo");

    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.watchPosition(showPosition);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";}
    }

    function showPosition(position) {
        x.innerHTML="Latitude: " + position.coords.latitude +
            "<br>Longitude: " + position.coords.longitude;
    }


    var colorFromLocal;
    var colorFromUser;
    // Check browser support
    if (typeof(Storage) !== "undefined") {
        // Store
        colorFromLocal = localStorage.getItem("background");
        // Retrieve
        if (colorFromLocal) {
            document.body.style.backgroundColor = colorFromLocal;
        }
    }

    function setColor() {
        colorFromUser = document.getElementById('color').value;

        if (colorFromUser) {
            document.body.style.backgroundColor = colorFromUser;
            if (typeof(Storage) !== "undefined") {
                localStorage.setItem("background", colorFromUser);
            }
        }
    }


</script>

</body>

</html>

