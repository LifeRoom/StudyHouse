<?php
//冒号排序 bubbleSort バブルソート
//最好的时间复杂度为O(n)
//最坏时间复杂度为O(n^2)
//平均时间复杂度为O(n^2)
//$sort_rule为"asc" "desc"
function bubbleSort($arr_nums,$sort_rule){
	
	//中间变量，用于交换相近的两个数字。
	$temp_num=0;
	//升序
	if(strtolower($sort_rule)=="asc"){
		//n个数，排好n-1即可。
		for($i=0;$i<count($arr_nums);$i++){
			//
			for($j=0;$j<count($arr_nums)-1-$i;$j++){
				if($arr_nums[$j]>$arr_nums[$j+1]){
					//交换位置
					$temp_num=$arr_nums[$j];
					$arr_nums[$j]=$arr_nums[$j+1];
					$arr_nums[$j+1]=$temp_num;
				}
			}
		}
		return $arr_nums;
	}
	//降序
	elseif(strtolower($sort_rule)=="desc"){
		//n个数，排好n-1即可。
		for($i=0;$i<count($arr_nums);$i++){
			//
			for($j=0;$j<count($arr_nums)-1-$i;$j++){
				//交换位置
				if($arr_nums[$j]<$arr_nums[$j+1]){
					$temp_num=$arr_nums[$j];
					$arr_nums[$j]=$arr_nums[$j+1];
					$arr_nums[$j+1]=$arr_nums[$j];
				}
			}
		}
		return $arr_nums;
	}
	//排序规则参数错误
	else{
		echo "error!sort_rule is wrong";
		die;
	}
}

//初始化一个数组
$arr=array(10,3,5,7,8,9,25,200);
//调用排序函数，升序,打印结果
$arr_sorted=bubbleSort($arr,"asc");
echo "<br/>" . "The Numbers Sorted by ASC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}
//调用排序函数，降序，打印结果
$arr_sorted=bubbleSort($arr,"DESC");
echo "<br/>" . "The Numbers Sorted by DESC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}

?>
