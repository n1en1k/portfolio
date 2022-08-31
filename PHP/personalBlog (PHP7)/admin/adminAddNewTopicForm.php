<?php
// set page settings
$pageTitle = "Personal Blog - Admin Add New Topic";

// html page header
require_once("./header.php");

// in between this comes page code
?>
<h2>Add New Topic</h2>
<table>
<form name="blogform" action="adminAddNewTopic.php" method="post">
    <tr><td><h4>Title:</h4></td>
    <td><input type="text" name="title" id="title" /></td></tr>
    <tr><td><h4>Blogpost:</h4></td>
    <td><textarea id="blogpost" name="blogpost"></textarea></td></tr>
    <tr><td><h4>writer:</h4></td>
    <td><input type="text" name="writer" id="writer" /></td></tr>
    <tr><td colspan="2" class="submitBtn"><input type="submit" value="Save" name="save" /></td></tr>
</form>
</table>
<?php
// in between this comes page code

// html page footer
require_once("./footer.php");
?>