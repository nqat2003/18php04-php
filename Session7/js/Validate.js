
function checkForm(){
	if(adduser.username.value=='' | adduser.pass.value=='' ! adduser.name.value ='') { 
		alert('Vui lòng nhập đầy đủ thông tin'); 
		return false;
	}
	return true;
}