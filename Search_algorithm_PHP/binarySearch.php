<?php
//二分查找 バイナリ検索
//二分查找使用的前提是该数组是有序数组
function binary_search($arr_num,$target_num,$rightindex,$leftindex,$sort_rule){
	//如果有下标大于左下标，则没找到
	if ($rightindex<$leftindex){
		echo "sorry,could not found the number： $target_num";
		return;
	}
	else{
		//取中间数
		$middleIndex=round(($rightindex+$leftindex)/2);

		if(strtolower($sort_rule)=="asc"){			
			//若要查找的数大于中间数，则对右半部分数组再次进行二分查找
			if($target_num>$arr_num[$middleIndex]){
				binary_search($arr_num,$target_num,$rightindex,$middleIndex+1,$sort_rule);
			}
			//若要查找的数小于中间数，则对左边部分数组再次进行二分查找
			elseif($target_num<$arr_num[$middleIndex]){
				binary_search($arr_num,$target_num,$middleIndex-1,$leftindex,$sort_rule);	
			}
			else{
				echo "Searched the right number $arr_num[$middleIndex].";
			}
		}elseif(strtolower($sort_rule)=="desc"){
			//若要查找的数大于中间数，则对右半部分数组再次进行二分查找
			if($target_num<$arr_num[$middleIndex]){
				binary_search($arr_num,$target_num,$rightindex,$middleIndex+1,$sort_rule);
			}
			//若要查找的数小于中间数，则对左边部分数组再次进行二分查找
			elseif($target_num>$arr_num[$middleIndex]){
				binary_search($arr_num,$target_num,$middleIndex-1,$leftindex,$sort_rule);	
			}
			else{
				echo "Searched the right number $arr_num[$middleIndex].";
			}
		}

	}
}

$arr=array(1,2,3,4,5,6,7,8,9,10);
$maxIndex=count($arr)-1;
echo "二分查找：";
binary_search($arr,11,$maxIndex,0,"asc");
echo "<br/>";
echo "<br/>";


/************************************************************/
//顺序查找  探索
//循环即可 注意flag的使用
function Genaral_Search($arr_nums,$target_num){
	
	$num_count=count($arr_nums);
	$search_flag=false;
	for($i=0;$i<$num_count;$i++){
		if($arr_nums[$i]==$target_num){
			echo "bingo! found the number： $target_num";
			$search_flag=true;
			break;
		}
	}
	if(!$search_flag){
		echo "the number is not found!";
	}
}
echo "顺序查找:";
Genaral_Search(array(1,2,3,4,5),4);
?>