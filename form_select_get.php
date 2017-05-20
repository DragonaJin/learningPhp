
<?php
/*下拉单选*/
$q = isset($_GET['q']) ? htmlspecialchars($_GET['q']) : "";
if( $q ){
	if($q == "runoob")echo "菜鸟教程http://www.runoob.com";
	else if($q == "google") echo "谷歌搜索http://www.google.com";
	else if($q =="taobao")echo "淘宝商店http://www.taobao.com";
	else echo "error";
	
}else{
	?>
	<form action="" method="get">
		<select name='q'>
			<option value="">请选择一个站点：</option>
			<option value="runoob">菜鸟教程</option>
			<option value="google">谷歌搜索</option>
			<option value="taobao">淘宝商店</option>
		</select>
		<input type="submit" value="提交">
	</form>
	<?php
}
?>
