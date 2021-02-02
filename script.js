var lastNameValue="";
var hobbiesValue="";
var educationValue="";
var firstNameValue="";
var emailValue="";
var phoneValue="";
var addressValue="";
var dateValue="";
function validateForm() {
  
  var firstNameEl=document.getElementById('firstName');
  var lastNameEl=document.getElementById('lastName');
  var emailEl=document.getElementById('email');
  var passwordEl=document.getElementById('password');
  var phoneEl=document.getElementById('phone');
  var ageEl=document.getElementById('age');
  var addressEl=document.getElementById('address');
  var dateEl=document.getElementById('date');
  var maleEl=document.getElementById('male');
  var femaleEl=document.getElementById('female');
  var genderLabelEl=document.getElementById('genderLabel')
  var hobiLabelEl=document.getElementById('hobiLabel');
  var hobby1=document.getElementById('travling');
  var hobby2=document.getElementById('driving');
  var hobby3=document.getElementById('reading');
  var hobby4=document.getElementById('other')
  var eduLabelEl=document.getElementById('eduLabel');
  var myEduEl=document.getElementById('education');
  //console.log(myEduEl.value);
  //console.log(myEduEl.value);
// alert(hobbiesValue);
    educationValue=myEduEl.value
    firstNameValue=firstNameEl.value
  lastNameValue=lastNameEl.value
  emailValue=emailEl.value
  phoneValue=phoneEl.value
  ageValue=ageEl.value
    // maleValue=maleEl.value
    // femaleValue=femaleEl.value
  addressValue=addressEl.value
  dateValue=dateEl.value
  // alert(maleValue);
  if(firstNameValue==""){
      firstNameEl.style.border = "3px solid red";
    } else {
      firstNameEl.style.border="3px solid green";
    }
    if(lastNameEl.value==""){
      lastNameEl.style.border="3px solid red";
    } else {
      lastNameEl.style.border="3px solid green";
    }
    if(emailEl.value==""){
      emailEl.style.border="3px solid red";
    } else {
      emailEl.style.border="3px solid green";
    }
    if(passwordEl.value==""){
      passwordEl.style.border="3px solid red";
    } else {
      passwordEl.style.border="3px solid green";
    }

    console.log(maleEl.checked);
    if (maleEl.checked==false && femaleEl.checked==false) {

      // console.log(maleValue.checked),(femaleValue.checked);
      genderLabelEl.style.border="3px solid red";
    } else{
      genderLabelEl.style.border="3px solid green";
    }

    if(phoneEl.value==""){
      phoneEl.style.border="3px solid red";
    } else {
      phoneEl.style.border="3px solid green";
    }

    if(ageEl.value==""){
      ageEl.style.border="3px solid red";
    } else {
      ageEl.style.border="3px solid green";
    }
    if(addressEl.value==""){
      addressEl.style.border="3px solid red";
    } else {
      addressEl.style.border="3px solid green";
    }
    if(dateEl.value==""){
      dateEl.style.border="3px solid red";
    } else {
      dateEl.style.border="3px solid green";
    }
    if (hobby1.checked) {
  hobbiesValue += hobby1.value+ ",";
    } 

if (hobby2.checked) {
  hobbiesValue += hobby2.value + ",";
    } 

if (hobby3.checked) {
  hobbiesValue += hobby3.value+ ",";
    } 
if (hobby4.checked){
  hobbiesValue+= hobby4.value+ ",";
}


if (myEduEl.value=="") {
  eduLabelEl.style.border="3px solid red";
}    else{
  eduLabelEl.style.border="3px solid green";
}

if (myEduEl.value=="") {
  eduLabelEl.style.border="3px solid red";
}    else{
  eduLabelEl.style.border="3px solid green";
}


if (
    hobby1.checked == false &&
    hobby2.checked == false &&
    hobby4.checked == false &&
    hobby3.checked == false
  ) {
    hobiLabelEl.style.border="3px solid red";
    return false;
  } else {
    hobiLabelEl.style.border="3px solid green";
    return true;
  }
    
} 