<?php
$a = 'dofv4sdfdse5dfgvldf';

	if(1<=strlen($a) && strlen($a)<=100)
	{
		$str = 'love';
		$i=0;
		while(isset($str[$i]))
		{
			if (strpos($a, $str[$i]) !== false)
			{
				$temp.=$str[$i];
			}
			else
			{
				$unsetstr.= $str[$i];
			}
			$i++;
		}
		unset($unsetstr);
		if(isset($temp)==$str)
		{
			echo "I love you too!";
		}
		else
		{
			echo "Let us breakup!";
		}
	}
?>