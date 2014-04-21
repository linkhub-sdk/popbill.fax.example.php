<?php

include 'common.php';
use Popbill\PopbillException;

echo '전송 단가 확인 테스트'.chr(10).'처리결과 : ' ;

try {
	$result = $FaxService->GetUnitCost('1231212312');
	echo $result;
}
catch(PopbillException $pe) {
	echo '['.$pe->getCode().'] '.$pe->getMessage();
}
echo chr(10);
?>
