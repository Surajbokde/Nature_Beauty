const form=document.getElementById("volunteer-form");
const namee=document.getElementById("volunteer_name");
const email=document.getElementById("volunteer_email");
const phone=document.getElementById("volunteer_phone");
const cv=document.getElementById("volunteer_cv");



function checkInputs(){
  const nameval=namee.value.trim();
  const emailval=email.value.trim();
  const phoneval=phone.value.trim();
  const cvval=cv.value.trim();

  function setErr(inputt,message){
    formCtrl=inputt.parentElement;
    formCtrl.className='col-lg-6 hasError';
    formCtrl.querySelector("small").innerText=message;
  }
 

  function emailvalid(email){
    return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
  }

  function setSucc(input){
    formCtrl=inputt.parentElement;
    formCtrl.className='col-lg-6';
    formCtrl.querySelector("small").innerText="";

  }
  /* function setSuccCV(input){
    inputt.className='col-lg-6 xs-mb-20';
  } */

  if (nameval===""){
    //show error
    //add error class
    setErr(namee,"Name can't be blank");
  }
  else{
    //add success class
    setSucc(namee);
  }

  

  if (emailval===""){
    //show error
    //add error class
    setErr(email,"email can't be blank");
  }else if(!emailvalid()){
    setErr(email,"email isn't valid");
  }
  else{
    //add success class
    setSucc(email);
  }

}

form.addEventListener("submit",(e)=>{
  e.preventDefault();
  checkInputs();
});

