/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
 
  console.log('Ready');
});

 function validateEmail(){
  var email = document.forms["myForm"]["email"].value;
  //var re = /^.+@.+\..+$/;
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(email) === false){
	  alert("Please Enter a Valid Email");
	  return false;
	  }
	  else{
	  alert('Your email looks legit');
	}	
  }