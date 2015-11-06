<?php
//选择排序 Selection sort 選択ソート
//最差时间复杂度	О(n^2)
//最优时间复杂度	О(n^2)
//平均时间复杂度	О(n^2)
//最差空间复杂度	О(n) total, O(1) auxiliary
function selectionsort($arr_nums,$sort_rule){
	
	//中间变量，交换数字用
	$temp_num=0;
	$nums_count=count($arr_nums);
	
	if(strtolower($sort_rule)=="asc"){
		//n个数，排好n-1个即可。
		for($i=0;$i<$nums_count-1;$i++){
			
			//假设arr[i]是最小数
			$minNum=$arr_nums[$i];
			//假设的最小数的下标
			$minIndex=$i;
			//与后面的数比较，检查arr[i]是否是最小。若不是，则重置最小，且记录最小数的下标。
			for($j=$i+1;$j<$nums_count;$j++){
				if($arr_nums[$j]<$minNum){
					$minNum=$arr_nums[$j];
					$minIndex=$j;
				}
			}
			//arr[i]与arr[最小数的下标]交换
			$temp_num=$arr_nums[$i];
			$arr_nums[$i]=$minNum;
			$arr_nums[$minIndex]=$temp_num;
		}
		return $arr_nums;
	}
	elseif(strtolower($sort_rule=="desc")){
		//n个数，排好n-1个即可。
		for($i=0;$i<$nums_count-1;$i++){
			
			//假设arr[i]是最大数
			$maxNum=$arr_nums[$i];
			//假设的最大数的下标
			$maxIndex=$i;
			//与后面的数比较，检查arr[i]是否是最大。若不是，则重置最大，且记录最大数的下标。
			for($j=$i+1;$j<$nums_count;$j++){
				if($arr_nums[$j]>$maxNum){
					$maxNum=$arr_nums[$j];
					$maxIndex=$j;
				}
			}
			//arr[i]与arr[最大数的下标]交换
			$temp_num=$arr_nums[$i];
			$arr_nums[$i]=$maxNum;
			$arr_nums[$maxIndex]=$temp_num;
		}
		return $arr_nums;
	}
	else{
		echo "sort rule is wrong";
		die;
	}
}


$arr=array(1,25,56,849,4,8,6,88,1000);

$arr_sorted=selectionsort($arr,"asc");
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}
echo "<br/>";
$arr_sorted=selectionsort($arr,"desc");
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}

?>