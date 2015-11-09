<?php
//插入排序 insertion sort インサーションソート（挿入ソート）
//最悪計算時間	О(n^2)
//最良計算時間	O(n)
//平均計算時間	О(n^2)
//最悪空間計算量	О(n) total, O(1) auxiliary


function InsertionSort($arr_nums,$sort_rule){
	//需排序数字个数
	$nums_count=count($arr_nums);
	//升序
	if(strtolower($sort_rule)=="asc"){
		//从第二个数开始，跟前面的所有数进行比较，并将其插入到合适位置
		for($i=1;$i<$nums_count;$i++){
			$insertNum=$arr_nums[$i];
			$insertIndex=$i-1;
			//找到需插入的合适位置
			while($insertIndex>=0 && $insertNum<$arr_nums[$insertIndex]){
					//将插入位置后面的数全部后移，以空出此插入位置
					$arr_nums[$insertIndex+1]=$arr_nums[$insertIndex];
					$insertIndex--;
			}
			//插入.
			if($insertIndex+1!=$i){
				$arr_nums[$insertIndex+1]=$insertNum;
			}
		}		
	}
	//降序
	elseif(strtolower($sort_rule)=="desc"){
		//从第二个数开始，跟前面的所有数进行比较，并将其插入到合适位置
		for($i=1;$i<$nums_count;$i++){
			$insertNum=$arr_nums[$i];
			$insertIndex=$i-1;
			//找到需插入的合适位置
			while($insertIndex>=0 && $insertNum>$arr_nums[$insertIndex]){
					//将插入位置后面的数全部后移，以空出此插入位置
					$arr_nums[$insertIndex+1]=$arr_nums[$insertIndex];
					$insertIndex--;					
			}
			//插入.
			if($insertIndex+1!=$i){
				$arr_nums[$insertIndex+1]=$insertNum;
			}
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
$arr=array(0,10,3,5,7,8,9,25,200);
//调用排序函数，升序,打印结果
$arr_sorted=InsertionSort($arr,"asc");
echo "<br/>" . "The Numbers Sorted by ASC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}
//调用排序函数，降序，打印结果
$arr_sorted=InsertionSort($arr,"DESC");
echo "<br/>" . "The Numbers Sorted by DESC:" . "<br/>";
foreach($arr_sorted as $k=>$v){
	echo $v . "<br/>";
}


?>
