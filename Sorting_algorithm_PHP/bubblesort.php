<?php
//冒号排序 bubbleSort バブルソート
//最好的时间复杂度为O(n)
//最坏时间复杂度为O(n^2)
//平均时间复杂度为O(n^2)
//最差空间复杂度	总共O(n)，需要辅助空间O(1)

/*$sort_rule为"asc" "desc"*/
function bubbleSort($arr_nums,$sort_rule){

	//数字个数检查
	if (count($arr_nums)<=1){
		return $arr_nums;
	}
	
	//中间变量，用于交换相近的两个数字。
	$temp_num=0;
	//sort flag
	$Sort_Flag=false;

	//升序
	if(strtolower($sort_rule)=="asc"){
	//n个数，排好n-1个即可。
		for($i=0;$i<count($arr_nums)-1;$i++){
			//排每一个数需要的步数
			for($j=0;$j<count($arr_nums)-1-$i;$j++){
				if($arr_nums[$j]>$arr_nums[$j+1]){
					//交换位置
					$temp_num=$arr_nums[$j];
					$arr_nums[$j]=$arr_nums[$j+1];
					$arr_nums[$j+1]=$temp_num;
					$Sort_Flag=true;
				}
			}
			//一次也没排序，说明已经是有序数组
			if(!$Sort_Flag){
				break;
			}
			$Sort_Flag=false;
		}
	}
	//降序
	elseif(strtolower($sort_rule)=="desc"){
		//n个数，排好n-1即可。
		for($i=0;$i<count($arr_nums)-1;$i++){
			//排每一个数需要的步数
			for($j=0;$j<count($arr_nums)-1-$i;$j++){
				//交换位置
				if($arr_nums[$j]<$arr_nums[$j+1]){
					$temp_num=$arr_nums[$j];
					$arr_nums[$j]=$arr_nums[$j+1];
					$arr_nums[$j+1]=$temp_num;
					$Sort_Flag=true;
				}
			}
			//一次也没排序，说明已经是有序数组
			if(!$Sort_Flag){
				break;
			}
			$Sort_Flag=false;
		}
	}
	//排序规则参数错误
	else{
		echo "error!sort_rule is wrong";
		die;
	}
	return $arr_nums;	
}

//初始化一个数组
$arr=array(0,25,3,5,7,8,9,10,200);
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
