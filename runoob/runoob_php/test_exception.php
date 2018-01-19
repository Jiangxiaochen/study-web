<?php
// // 创建一个有异常处理的函数
// function checkNum($number){
//     if($number>1){
//         throw new Exception("Value must be 1 or below");
//     }
//     return true;
// }
 
// // 触发异常
// checkNum(2);



class myException extends Exception{
	public function errorMessage(){
		// 错误信息
        $errorMsg = '错误行号 '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> 不是一个合法的 E-Mail 地址';
        return $errorMsg;
	}
}

$email = "jxc@qq.com";
try{
	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
		throw new myException($email);
	}
}catch(myException $e){
	echo $e->errorMessage();
}
?>