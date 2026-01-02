 
  const dashBoard=document.getElementById("dashboard");
  const myOrders=document.getElementById("myOrders");
  const products=document.getElementById("products");
  const setting=document.getElementById("setting");
  const farmer=document.getElementById("farmer");


  const dashboardView=document.getElementById("dashboardView");
  const myOrdersView=document.getElementById("myOrdersView");
  const productsView=document.getElementById("productsView");
  const settingView=document.getElementById("settingView");
  const farmerProfileView=document.getElementById("farmerProfileView");

  
  function showOnly(view){

     dashboardView.style.display="none";
     myOrdersView.style.display="none";
     productsView.style.display="none";
     settingView.style.display="none";
     farmerProfileView.style.display="none";

    if(view){
        view.style.display="block";
    }
  }


  function ColorChange(active){

     dashBoard.style.backgroundColor="";
     myOrders.style.backgroundColor="";
     products.style.backgroundColor="";
     setting.style.backgroundColor="";
     farmer.style.backgroundColor="";

    if(active){
       active.style.backgroundColor="green";
    }
   
  }

  
  if (dashBoard) {

    dashBoard.addEventListener("click",() =>{
      showOnly(dashboardView);
      ColorChange(dashBoard);
    });

  }

  if(myOrders) {

    myOrders.addEventListener("click",() =>{
      showOnly(myOrdersView);
      ColorChange(myOrders);
    });

  }

  if (products)
    {
    products.addEventListener("click",()=>{
      showOnly(productsView);
      ColorChange(products);
    });

  }

  if (setting) {

    setting.addEventListener("click",()=>{
      showOnly(settingView);
      ColorChange(setting);
    });

  }


  if(farmer){

    farmer.addEventListener("click",()=>{
      showOnly(farmerProfileView);
      ColorChange(farmer);
    });

  }


  showOnly(dashboardView);
  ColorChange(dashBoard);
