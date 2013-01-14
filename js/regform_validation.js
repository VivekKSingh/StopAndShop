// JavaScript Document
var check_name = /^[A-Za-z ]{1,25}$/;	
var check_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var check_password =/^[A-Za-z0-9!@#$%^&*()_]{5,15}$/;
//var check_zip =/^[0-9 ]$/;
var check_zip = new RegExp(/(^\d{5}$)|(^\d{5}-\d{4}$)/);
var checK_str = /^[A-Za-z0-9 ]{1,20}$/;

function validate_regform(form)
{
	var f_name=document.forms["form_register"]["fname"].value;
	var l_name=document.forms["form_register"]["lname"].value;
	var email_1=document.forms["form_register"]["email1"].value;
	var email_2=document.forms["form_register"]["email2"].value;
	var state = document.forms["form_register"]["state"].value;

	var city = document.forms["form_register"]["city"].value;
	var str1 = document.forms["form_register"]["str1"].value;
	var str2 = document.forms["form_register"]["str2"].value;
	var zip = document.forms["form_register"]["zip"].value;

	var pwd1 = document.forms["form_register"]["password1"].value;
	var pwd2 = document.forms["form_checkout"]["password2"].value;
	
	
	
	var errors=[];
if(!check_name.test(f_name))
  {
  
//  document.getElementById('fname_error').innerHTML='Enter Valid Value';
 // myForm.errorloc.value = 'error maga'; 
  //alert("First name must be filled out");
  errors[errors.length]="fname";
  }
  
  if(!check_name.test(l_name))
  
  {
	//document.getElementById('fname_error').innerHTML='Enter Valid Value';
  errors[errors.length]="lname";
	  
	  }
	 
  if(!check_email.test(email_1))
  {
	  errors[errors.length]="email1";
	  }	  
	
	
	  //if(email_1 != '' && email_1 != 'NULL') 
	  //{
      if (email_1.trim() == email_2.trim())
      {
	     //errors[errors.length]="email_mismatch";
	  }
	  else
		  {
		  errors[errors.length]="email_mismatch";
		  }
	 // }
	
	 
	  if(!check_name.test(state))
  {
	  errors[errors.length]="state";
	  }
	 
	 
	  if(!check_name.test(city))
  	{
	  errors[errors.length]="city";
	  }
	  
	  
	  
	  if(!check_str.test(str1))
  {
	  errors[errors.length]="str1";
	  }	
	
	
	
	  if(!check_str.test(str2))
  {
  errors[errors.length]="str2";
	  }	
	  
	
		 if(!check_zip.test(zip))
  {
  errors[errors.length]="zip";
	  }	
	
			 if(!check_password.test(pwd1))
  {
  errors[errors.length]="pwd1";
	  }	
	 
	
	
	  if(pwd1 != pwd2)
  		{
	  errors[errors.length]="pwd_mismatch";
	  }	
	  
	
	  if(errors.length > 0)
	  {
		  display_errors(errors);
		  
		  return false;
		  }
		  
	 return true; 
  
  
  
  }

  function display_errors(errors)
  {
	  for (var i=0; i<errors.length; i++)
	  {
		  
	  if(errors[i] == "fname")
	  {
		    document.getElementById('fname_error').innerHTML='Enter Valid Value';
		  }
		  
	  if(errors[i] == "lname"){
		    document.getElementById('lname_error').innerHTML='Enter some Valid Value';
		  }

     if(errors[i] == "email1"){
		  
		  document.getElementById('email1_error').innerHTML='Enter valid email address';
		  
		  }
	  if(errors[i] == "email_mismatch")
		{
			document.getElementById('email2_error').innerHTML='Emails do no match';
			}	 
	
	
		if(errors[i] == "state")
		{
			document.getElementById('state_error').innerHTML='Enter valid value';
			}	
			
		if(errors[i] == "city")
		{
			document.getElementById('city_error').innerHTML='Enter valid value';
			}	
			  
		if(errors[i] == "str1")
		{
			document.getElementById('str1_error').innerHTML='Enter valid value';
			}	
			
			if(errors[i] == "str2")
		{
			document.getElementById('str2_error').innerHTML='Enter valid value';
			}		  
			  		  
			  	if(errors[i] == "zip")
		{
			document.getElementById('zip_error').innerHTML='Enter valid value';
			}	
			
			     if(errors[i] == "pwd1"){
		  
		  document.getElementById('pwd1_error').innerHTML='Enter valid password';
		  
		  }
	  if(errors[i] == "pwd_mismatch")
		{
			document.getElementById('pwd2_error').innerHTML='Passwords do no match';
			}
			
	  }
  		
	 
	  
	  
  		
  
  }
  