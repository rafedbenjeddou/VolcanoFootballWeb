/*******f***********

    Competency 20
    Name: 
    Date:
    Description:

*******************/

document.addEventListener("DOMContentLoaded", load);

function load(){
	document.getElementById("regEx").addEventListener("submit", validate);

}

function validate(e){
	
	hideAllErrors();

	//	Determine if the form has errors
	if(formHasErrors()){
		// 	Prevents the form from submitting
		e.preventDefault();
		// 	Returning false prevents the form from submitting
		return false;
	}

	return true;
}

/*	
	formHasErrors function
	returns a true if errors are discovered
	returns a false if there are no errors
*/
function formHasErrors(){

	let errorFlag = false;

	//	Create and test your 3 regular expressions here. 
	//	If one or any fail, remember to display the appropriate error message 
	//	and update the error flag

	


	//	Code above here!
	return errorFlag;

}

function hideAllErrors()
{
	//	Get an array of the error fields
	var errorFields = document.getElementsByClassName("error");

	//	Loop through each error field
	for(var i = 0;i < errorFields.length; i++){
		//	Hide the error field
		errorFields[i].style.display = "none";
	}

}