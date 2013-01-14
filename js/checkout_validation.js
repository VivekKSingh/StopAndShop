// JavaScript Document
var check_name = /^[A-Za-z ]{1,30}$/;	
//var check_zip =/^[0-9 ]$/;
var check_zip = new RegExp(/(^\d{5}$)|(^\d{5}-\d{4}$)/);
var check_num = /^\s*(\+|-)?\d+\s*$/;
var checK_str = /^[A-Za-z0-9 ]{1,20}$/;


function validate_checkout(form)
{

	var fname=document.forms["form_checkout"]["fname"].value;
	var lname=document.forms["form_checkout"]["lname"].value;
	var ccnumber=document.forms["form_checkout"]["ccnumber"].value;
	var securitynumber=document.forms["form_checkout"]["securitynumber"].value;

	var ship1= document.forms["form_checkout"]["ship_1"].value;
	var ship2 = document.forms["form_checkout"]["ship_2"].value;

	var city = document.forms["form_checkout"]["city"].value;
	var state = document.forms["form_checkout"]["state"].value;
	var zip = document.forms["form_checkout"]["zip"].value;
	
	
	var errors=[];
if(!check_name.test(fname))
  {
//  document.getElementById('fname_error').innerHTML='Enter Valid Value';
 // myForm.errorloc.value = 'error maga'; 
  //alert("First name must be filled out");
  errors[errors.length]="fname";
  }
  
  if(!check_name.test(lname))
  
  {
	//document.getElementById('fname_error').innerHTML='Enter Valid Value';
  errors[errors.length]="lname";
	  
	  }
	 
  if(!check_str.test(ship1))
  {

	  errors[errors.length]="Ship1";
	  }	  
	
	  if(!check_str.test(ship2))
  {
	  errors[errors.length]="Ship2";
	  }	  
	
	
	 
	  if(!check_name.test(state))
  {
	  errors[errors.length]="state";
	  }
	 
	 
	  if(!check_name.test(city))
  	{
	  errors[errors.length]="city";
	  }
	  
	    if(!check_zip.test(zip))
  	{
	  errors[errors.length]="zip";
	  }
	  
	     if(!check_num.test(securitynumber))
  	{
	  errors[errors.length]="securitynumber";
	  }
	  
	     if(!check_num.test(ccnumber))
  	{
	  errors[errors.length]="ccnumber";
	  }
	  
	  check_num
	  
	  
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

     if(errors[i] == "ship1"){
		  
		  document.getElementById('ship1_error').innerHTML='Enter valid value';
		  
		  }
     if(errors[i] == "ship2"){
		  
		  document.getElementById('ship2_error').innerHTML='Enter valid value';
		  
		  }
 
	
	
		if(errors[i] == "state")
		{
			document.getElementById('state_error').innerHTML='Enter valid value';
			}	
			
		if(errors[i] == "city")
		{
			document.getElementById('city_error').innerHTML='Enter valid value';
			}	
		  
			  		  
			  	if(errors[i] == "zip")
		{
			document.getElementById('zip_error').innerHTML='Enter valid value';
			}	
			
			   if(errors[i] == "securitynumber"){
		  
		  document.getElementById('securitycode_error').innerHTML='Enter valid value';
		  
		  }
			   if(errors[i] == "ccnumber"){
		  
		  document.getElementById('ccnumber_error').innerHTML='Enter valid value';
		  
		  }
			    
			
	  }
  		
	 
	  
	  
  		
  
  }
  