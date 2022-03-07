/*******f***********

    Competency 18
    Name: 
    Date:
    Description:

*******************/

document.addEventListener("DOMContentLoaded", load);

function load(){
	document.getElementById("empForm").addEventListener("submit", validate);

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

	//	Task 1: Create an array of input element id values


	//	Task 2: Looping through this array, check if the user entered anything
	//			If they didn't, set the appropriate error message to visible and update
	//			the errorFlag (check the CSS for how the div tag is hidden)
	//			If it's the first error, set focus to the input


	//	Task 3: Do an extra check on the empNum field to ensure it's a number (no regex!)


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



