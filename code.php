<?php
if(isset($_POST['check']))
{
$one=$_POST['code'];
$two=$_POST['chk'];

if($one==$two)
{
echo "yes";	
	
}
else
{
	
echo "no";	
}
}
?>
<form method="post" action="<?php $_SERVER['PHP_SELF']?>">
<?php
$rand=substr(rand(),0,4);

?>
<input type="text" name="code">
<input type="text" value="<?=$rand?>" id="ran" readonly="readonly">
<input type="hidden" name="chk" value="<?=$rand?>">
<input type="button" value="Referesh" onclick="captch()" />
<input type="submit" name="check">
</form>
<script type="text/javascript">



function captch() {
    var x = captcha.getElementById("ran")
    x.value = unique.floor((unique.random() * 10000) + 1);
}

</script>
