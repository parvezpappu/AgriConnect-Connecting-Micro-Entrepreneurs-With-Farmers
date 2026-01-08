

  function Validate()
  {
       let email = document.getElementById("email").value;
       let address = document.getElementById("textarea").value;
       
       if(email == "" || address == "")
       {
          alert("Email and Address are required");
          return false;
       }
     if(email.indexOf("@") == -1 || email.indexOf(".") == -1)
     {
        alert("Please enter a valid email");
        return false;
     }
    return true;
  }