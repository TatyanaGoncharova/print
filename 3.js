<script>
function CheckForm(form) {
 this.form = form;
 
 var regABC = /[^А-ЯЁ]/i;
 var regNum = /\D/;
 var regPhone = /^\d[\d\(\)\ -]{4,14}\d$/;
 var regEmail = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
 var errorList = [];
 
 var errorText = {
 1 : "Поле должно содержать только буквы русского алфавита",
 2 : "Поле должно содержать только цифры",
 3 : "Неправильно заполнено поле Телефон",
 4 : "Неверный формат электронного адреса"
 }

 for (let i = 0; i < this.form.elements.length; i++) {
 	this.el = tform.elements[i];
 	this.elName = el.nodeName.toLowerCase();
 	this.value = el.value;

 	switch ( this.elName) {
 		case "abc" :
			if(regABC.test(this.value) == false)  errorList.push(1);
 		break;
 		case "num" :
 			if(regNum.test(this.value) == false)  errorList.push(2);
 		break;
 		case "phone" :
	 		if(regPhone.test(this.value) == false)  errorList.push(3);
 		break;
 		case "email" :
	 		if(regEmail.test(this.value) == false)  errorList.push(4);
 		break;
 		default :
 		break;
 		}
 } 
 
 if (!errorList.length) return true;

 var errorMsg = "При заполнении формы допущены следующие ошибки:\n";
 for (i = 0; i < errorList.length; i++) {
 	errorMsg += errorText[errorList[i]] + "n";
 }
 alert(errorMsg);
 return false;
}
</script>
