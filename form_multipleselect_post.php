<?php
/*multiple_select*/
$q = isset($_POST['q']) ? $_POST['q']: "";
if( is_array($q )){
	$sites = array(
		""=>"",
		"runoob"=>"http://www.runoob.com",
		"taobao"=>"http://www.taobao.com",
		"google"=>"http://www.google.com"
	);
	foreach($q as $value)
	{
		echo $sites[$value]."<br>";
	}
	
}else{
	?>
	<form action="" method="post">
		<select multiple="multiple" name="q[]">
			<option value="">选择一个站点</option>
			<option value="runoob">菜鸟教程</option>
			<option value="taobao">淘宝商店</option>
			<option value="google">谷歌搜索</option>
			<input type="submit" value="提交">
		</select>
	</form>
	<?php
}
?>