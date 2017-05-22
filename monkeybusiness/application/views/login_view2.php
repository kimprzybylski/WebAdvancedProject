<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset = "utf-8">
    <title>Monkey Business Login</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <script>
        function validateForm() {
            var x = document.forms["myform"]["username"].value;
            if (x == "") {
                alert("Name must be filled out");
                return false;
            }
        }
    </script>

</head>
<body class="container">
<h1>Simple Login with CodeIgniter</h1>

<?php echo validation_errors(); ?>
<?php echo form_open('Verifylogin', 'id="myform"'); ?>

<table class="table table-bordered" border="1">
    <tr>
<td><label for="username">Username:</label></td>
        <td><input type="text" size="20" id="username" name="username"/></td>
    </tr>
<br/>
    <tr>
        <td><label for="password">Password:</label></td>
        <td><input type="password" size="20" id="password" name="password"/></td>
<br/>
    </tr>
    <tr>
<td></td><td><input type="submit" value="Login" onclick="validateForm()"/></td>
    </tr>
</table>
</form>
</body>
</html>
