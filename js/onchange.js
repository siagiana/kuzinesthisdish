/*
STEPS
1. find element by id using jquery
2. set event listener (on change)
3. validate selected elt
4. if fail, append message notice

This js file is developed by Niro Haryamen Mohd Rais with the help of Hasbullah Razali

*/

$(document).ready(function() {
	checkLastName('#last_name');
	checkFirstName('#first_name');
	checkEmail('#email_address');
	sameEmail('#email_address','#email_confirm');
	checkPassword('#password_requirement');
	samePassword('#password_requirement', '#password');
	checkNickname('#Nickname');
	checkCity('#city');
	checkZip('#zipcode');
});

function checkFirstName(FirstID){
	$(FirstID).on('change', function(){
		var FirstNameSelector = $(this);
		var errorSelector = FirstNameSelector.siblings('.error');

		if (FirstNameSelector.val() == ""){
			errorSelector.text("").text("You did NOT enter your first name.");
		}
		else{
			errorSelector.text("");
		}
	});
}

function checkLastName(LastID){
	$(LastID).on('change', function(){
		var LastNameSelector = $(this);
		var errorSelector = LastNameSelector.siblings('.error');

		if (LastNameSelector.val() == ""){
			errorSelector.text("").text("You did NOT enter your last name.");
		}
		else{
			errorSelector.text("");
		}
	});
}

function checkEmail(EmailID){
	$(EmailID).on('change', function(){
		var emailSelector = $(this);
		var errorSelector = emailSelector.siblings('.error');
		// console.log(emailSelector);
		if (emailSelector.val() == ""){
			errorSelector.text("").text("No email was entered");
		}
		else if((emailSelector.val().indexOf(".") == -1) ||
			(emailSelector.val().indexOf("@") == -1) ||
			/[^a-zA-Z0-9.@_-]/.test(emailSelector.val())){
			errorSelector.text("").text("Invalid email address.");
		}
		else{
			errorSelector.text("");
		}
	});
}

function sameEmail(EmailId, EmailID2){

	$(EmailID2).on('change', function() {
			// console.log("babi")
		var emailSelector2 = $(this);
		var emailSelector1 = $(EmailId);
		var errorSelector1 = emailSelector1.siblings('.error');
		var errorSelector2 = emailSelector2.siblings('.error');

		// console.log(emailSelector1.val());
		// console.log(emailSelector2.val());

		if (errorSelector1.text()) {
			errorSelector2.text("").text("Your email does not satisfy the requirements");
		}
		else if (emailSelector2.val() == "" || emailSelector1.val() != emailSelector2.val()) {
			errorSelector2.text("").text("The two emails MUST match");
		}
		else{
			errorSelector2.text("");
		}
	});

}

function checkPassword(passwordId) {
	$(passwordId).on('change', function() {
		var passwordSelector = $(this);
		// console.log(passwordSelector.val());
		var errorSelector = passwordSelector.siblings('.error');
		//validate if not valid
		if (passwordSelector.val() == "") {
			// console.log('1')
			errorSelector.text("").text("No Password was entered");
		}
		else if (! /[a-z]/.test(passwordSelector.val() ) ||
				 ! /[A-Z]/.test(passwordSelector.val() ) ||
			     ! /[0-9]/.test(passwordSelector.val() )) {
				// console.log('3')
				errorSelector.text("").text("Put each of a-z,A-Z,0-9.");
		}
		else if (passwordSelector.val().length < 8) {
			// console.log('2')
			errorSelector.text("").text("More than 8 characters");
		}
		else {
			// console.log('4')
			errorSelector.text("");
		}
	});
}

function samePassword(passwordId, passwordID2){

	$(passwordID2).on('change', function() {
			// console.log("babi")
		var passwordSelector2 = $(this);
		var passwordSelector1 = $(passwordId);
		var errorSelector1 = passwordSelector1.siblings('.error');
		var errorSelector2 = passwordSelector2.siblings('.error');

		// console.log(passwordSelector1.val());
		// console.log(passwordSelector2.val());

		if (errorSelector1.text()) {
			errorSelector2.text("").text("Your password does not satisfy the requirements");
		}
		else if (passwordSelector2.val() == "" || passwordSelector1.val() != passwordSelector2.val()) {
			errorSelector2.text("").text("The two passwords MUST match");
		}
		else{
			errorSelector2.text("");
		}
	});

}

function checkNickname(NicknameId) {
	$(NicknameId).on('change', function() {
		var NicknameSelector = $(this);
		// console.log(passwordSelector.val());
		var errorSelector = NicknameSelector.siblings('.error');
		//validate if not valid
		if (NicknameSelector.val() == "") {
			// console.log('1')
			errorSelector.text("").text("No username was entered");
		}
		else if (NicknameSelector.val().length < 5) {
			// console.log('2')
			errorSelector.text("").text("Username must be at least 5 characters");
		}
		else if (/[^a-zA-Z0-9_-]/.test(NicknameSelector.val() )) {
				// console.log('3')
				errorSelector.text("").text("Username can only have a-z, A-Z and 0-9");
		}
		else {
			// console.log('4')
			errorSelector.text("");
		}
	});
}

function checkCity(CityId){
	$(CityId).on('change', function(){
		var CitySelector = $(this);
		var errorSelector = CitySelector.siblings('.error');

		if(CitySelector.val() == ""){
			errorSelector.text("").text("No city was entered");
		}
		else{
			errorSelector.text("");
		}

	});
}

function checkZip(ZipId) {
	$(ZipId).on('change', function() {
		var ZipSelector = $(this);
		// console.log(passwordSelector.val());
		var errorSelector = ZipSelector.siblings('.error');
		//validate if not valid
		if (ZipSelector.val() == "") {
			// console.log('1')
			errorSelector.text("").text("No zipcode was entered");
		}
		else if (ZipSelector.val().length != 5) {
			// console.log('2')
			errorSelector.text("").text("Zipcode must have 5 characters");
		}
		else if (/[^0-9_-]/.test(ZipSelector.val() )) {
				// console.log('3')
				errorSelector.text("").text("Zipcode can only have number 0-9");
		}
		else {
			// console.log('4')
			errorSelector.text("");
		}
	});
}






