 


  const emailId=document.getElementById("email");
  const passWordId=document.getElementById("password");
  const errorShow=document.getElementById("showError");
  const Form=document.getElementById("LoginFrom");

  
  Form.addEventListener("submit",(e)=>{
    e.preventDefault();

    const email=emailId.value.trim();
    const password=passWordId.value.trim();
    errorShow.innerText="";

    if(email===""||password===""){
    errorShow.innerText="Email and Password Can't be Empty";
    errorShow.style.color="red";
    return;
    };


  let countDot=0;
  let countAtTheRate=0;
  let boolSpace=false;
  for(let i=0;i<email.length;++i){
    const ch=email[i];
    if(ch===" "){
       boolSpace=true;
    }
    if(ch==="@"){
     countAtTheRate++;
    }
    if(ch==="."){
        countDot++;
    }
  }
  if( countAtTheRate>1|| countAtTheRate<1 || (boolSpace) || countDot>1 ||countDot<1){
      errorShow.innerText="Email must be have 1 @ and 1 .";
      errorShow.style.color="red";
      return;
  }

  })

  





