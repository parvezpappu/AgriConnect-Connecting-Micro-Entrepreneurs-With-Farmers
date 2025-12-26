 

  const fullNameId=document.getElementById("fullname");
  const emailId=document.getElementById("emailS");
  const addressId=document.getElementById("address");
  const createPassId=document.getElementById("createPass");
  const confirmPassId=document.getElementById("confirmPass");
  const errorShow=document.getElementById("SignUpError");
  const form=document.getElementById("SignUpForm");

 form.addEventListener("submit",(e)=>{
    e.preventDefault();
   const fullName=fullNameId.value.trim();
   const email=emailId.value.trim();
   const address=addressId.value.trim();
   const createPass=createPassId.value.trim();
   const confirmPass=confirmPassId.value.trim();

  errorShow.innerText = "";

  if(fullName===""||email===""||address===""||createPass===""||confirmPass==="") {
    errorShow.innerText="All fields can't be empty";
    errorShow.style.color="red";
    return;
  }

  let countDot=0;
  let countAtTheRate=0;
  let boolSpace=false;

  for (let i=0;i<email.length;++i) {
    const ch=email[i];
    if (ch===" ") {
      boolSpace=true;
    }
    if (ch==="@") {
      countAtTheRate++;
    }
    if (ch===".") {
      countDot++;
    }
  }

  if (countAtTheRate>1||countAtTheRate<1||boolSpace||countDot<1||countDot>1) {
    e.preventDefault();
    errorShow.innerText="Email must have 1 @ and at least 1 .";
    errorShow.style.color="red";
    return;
  }

  if (createPass!==confirmPass) {
    e.preventDefault();
    errorShow.innerText="Passwords do not match";
    errorShow.style.color="red";
    return;
  }
});
