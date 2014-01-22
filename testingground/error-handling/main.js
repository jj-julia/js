/** 
 * Place your JS-code here. 
 */ 
$(document).ready(function(){ 
  'use strict';
   
}); 


function validateEmail(){
  var email = document.forms["myForm"]["email"].value;

  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(email) === false){
	  throw new Error("That email is not cool")
	  }
	  else{
	  alert('Your email looks legit');
	}	
  }