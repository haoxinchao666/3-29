<?php 
header("content-type:text/html;charset=utf-8");
$str = 'abcdefabcde';
$arr = str_split($str);
// echo "<pre>";
// var_dump($arr);
$num = count($arr);
$jiance = [];
foreach ($arr as $k => $v) {
	
	$num2 = substr_count($str,$v);
	// var_dump($num2);
	// echo $num2;
	if($num2 == 1){
       $result = $v;
       $jiance[] = $v;
	}
}
if(empty($jiance)){
    echo -1;exit;
}
// var_dump($result);

for ($i=0; $i <$num ; $i++) { 
	$aa = strpos($str,$result);
}
// echo $aa;

echo "第一个只出现一次的字符为:".$result."他的位置是:".$aa;






 ?>