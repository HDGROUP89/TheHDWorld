<?php 

function binarycheck($bin_num,$con_num)
{   
    if(!empty($bin_num))
	{
		$bin_cnt = strlen($bin_num);
		if($bin_cnt<=100)
		{
			$zero_cnt = 0;
			$one_cnt = 0;
			$op = 0;
			for ($i = 0; $i <= $bin_cnt; $i++)  
			{ 
				if (isset($bin_num[$i]) == '0')
				{
					$zero_cnt++;  
					if($zero_cnt > isset($op1)){
					$op1 = $zero_cnt;
				}
					$one_cnt = 0;
				}
				else
				{
					$one_cnt++; 
					if($one_cnt > isset($op2)){
						$op2 = $one_cnt;
					}
					$zero_cnt = 0;
				}  
			}  
			if($op1 == $con_num || $op2 == $con_num)
			{
				echo "Sorry, sorry!";
			}
			else
			{
				echo "Good luck!";
			}
		}
		else
		{
			echo "Binary number lenght should be below 100";
		}   
    }
	else
	{
        echo "Binary number should be empty";
    }
}
$bin_num = "0011011110000011";
echo binarycheck($bin_num,6);
    
?>
