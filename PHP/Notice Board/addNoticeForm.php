<h2>Add a Notice</h2> 

<form name="addNoticeForm" action="addNotice.php" method="post">
Title:<br />
<input type="text" maxlength="80" name="title" id="title" /><br />
Notice:<br />
<textarea id="notice" name="notice" maxlength="1500">
</textarea><br />
Writer:<br />
<input type="text" name="writer" id="writer" /><br />
<input class="submitti" type="submit" value="Save" name="Save" />
</form>

<p>Important message! Only Page Admin can delete saved notices.</p>