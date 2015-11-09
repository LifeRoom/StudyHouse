<?php
//快速排序 qucik sort クイックソート
//最悪計算時間	\Omicron(n^2)
//最良計算時間	\Omicron(n\log n)
//平均計算時間	\Omicron(n\log n)
//最悪空間計算量	\Omicron(n)

function QuickSort($arr_nums,$sort_rule){

	$nums_count=count($arr_nums);
	//数字个数检查
	if ($nums_count<=1){
		return $arr_nums;
	}
	
	//中间值设置
	$Middle_Num=$arr_nums[0];
	//<中间值放入左数组 >中间值放入右数组
	$arr_left=array();
	$arr_right=array();
	//升序
	if(strtolower($sort_rule)=="asc"){
		for($i=1;$i<$nums_count;$i++){
			if($arr_nums[$i]<$Middle_Num){
				$arr_left[]=$arr_nums[$i];
			}
			elseif($arr_nums[$i]>$Middle_Num){
				$arr_right[]=$arr_nums[$i];
			}
		}
	}
	//降序
	elseif(strtolower($sort_rule)=="desc"){
		for($i=1;$i<$nums_count;$i++){
			if($arr_nums[$i]>$Middle_Num){
				$arr_left[]=$arr_nums[$i];
			}
			elseif($arr_nums[$i]<$Middle_Num){
				$arr_right[]=$arr_nums[$i];
			}
		}		
	}
	//对左右数组，各自递归
	$arr_left=QuickSort($arr_left,$sort_rule);
	$arr_right=QuickSort($arr_right,$sort_rule);	
	//合并数组
	$arr_nums=array_merge($arr_left,array($Middle_Num),$arr_right);
	//返回排序后的数组
	return $arr_nums;
}

//初始化一个数组
$arr=array(0,10,3,10,7,25,8,9,200);
//调用排序函数，升序,打印结果
$arr_sorted=QuickSort($arr,"asc");
echo "<br/>" . "The Numbers Sorted by ASC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}
//调用排序函数，降序，打印结果
$arr_sorted=QuickSort($arr,"DESC");
echo "<br/>" . "The Numbers Sorted by DESC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}

?>