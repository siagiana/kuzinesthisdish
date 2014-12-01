// console.log('jelloo');

function showText()
{
		var popup_message = "Welcome to Kuzines, " + document.getElementById("first_name").value + "!";
		alert(popup_message);
}



function validate(form) {
	// alert("checking");
	fail  = validateFirstName(form.first_name.value)
	fail += validateLastName(form.last_name.value)
	fail += validateEmail(form.email_address.value)
	fail += validateSameEmail(form.email_confirm.value)
	fail += validatePasswordRequirement(form.password_requirement.value)
	fail += validatePassword(form.password.value)
	fail += validateNickname(form.Nickname.value)
	// fail += validateSex(form.sex.value)
	fail += validateCity(form.city.value)
	fail += validateZip(form.zipcode.value)
	// alert(fail);
	if (fail == "") {
		showText();
		return true;
	}
	else { 
		alert(fail); 
		return false; 
	}
}

function validateFirstName(field) {
	if (!field) 
		return "No First Name was entered.\n"
	else
		return ""
}

function validateLastName(field) {
	if (!field) 
		return "No Last Name was entered.\n"
	else
		return ""
}

function validateEmail(field) {
	if (!field) 
		return "No Email was entered.\n"
	else if (!((field.indexOf(".") > 0) &&
		     (field.indexOf("@") > 0)) ||
	       /[^a-zA-Z0-9.@_-]/.test(field))
		return "The Email address is invalid.\n"
	else
		return ""
}

function validateSameEmail(field) {
	// var email1 = document.getElementById('email_address')
	// var email2 = document.getElementById('email_confirm')
	if(field != document.getElementById('email_address').value){
		return "The two emails MUST match.\n"
	}
	else{
		return "";
	}
}

function validatePasswordRequirement(field){
	if (!field) 
		return "No Password was entered.\n"
	else if (field.length < 8)
		return "Passwords must be at least 8 characters.\n"
	else if (! /[a-z]/.test(field) ||
			 ! /[A-Z]/.test(field) ||
		     ! /[0-9]/.test(field))
		return "Put each of a-z,A-Z,0-9.\n"
	else
		return "";
}


function validatePassword(field) {
	// console.log(field);
	// console.log(document.getElementById('password_requirement').value);
	if (field != document.getElementById('password_requirement').value) {
		return "The two passwords MUST match.\n";
	} 
	else{
		return ""
	}
}

function validateNickname(field) {
	if (!field) 
		return "No nickname was entered.\n"
	else if (field.length < 5)
		return "Nicknames must be at least 5 characters.\n"
	else if (/[^a-zA-Z0-9_-]/.test(field))
		return "Only a-z, A-Z, 0-9, - and _ allowed in Nicknames.\n"
	else
		return ""
}

// function validateSex (field){
// 	console.log("check Sex")
// 	console.log(field)

// 	// if (!field) {
// 	// 	return "Please choose your sex.\n";
// 	// }
// 	// else{
// 	// 	return ""
// 	// }

// 	// var radios = document.getElementById('male');
// 	// var radioValid = false;
// 	// // len = elem.length-1;
// 	// // var chkvalue = '';
// 	// var i = 0;
// 	// while (!radioValid && i < radios.length)
// 	// {
// 	// 	if (radios[i].checked)
// 	// 		radioValid = true;
// 	// 		i++;
// 	// }
// 	// if (!radioValid)
// 	// {
// 	// 	return('Did not select gender.');
// 	// }
// 	// else{
// 	// 	return ""
// 	// }
// }

function validateCity(field){
	if (!field)
		return "No city was entered.\n";
	else
		return ""
}

function validateZip(field) {
	if (!field) 
		return "No Zipcode was entered.\n"
	else if (field.length != 5)
		return "Zipcode must be 5 characters.\n"
	else if (/[^0-9_-]/.test(field))
		return "Only 0-9 allowed in Zipcode.\n"
	else
		return ""
}



