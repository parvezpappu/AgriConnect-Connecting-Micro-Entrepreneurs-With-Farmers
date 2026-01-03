const dashBoard = document.getElementById("dashboard");
  const employee = document.getElementById("users");
  const products = document.getElementById("products");
  const orders = document.getElementById("orders");
  const setting = document.getElementById("setting");
  const adminBtn = document.getElementById("admin");
  const farmers = document.getElementById("farmers");
  const shopOwner = document.getElementById("shopOwener");
  const reports = document.getElementById("reports");



  const dashboardView = document.getElementById("dashboardView");
  const employeeView = document.getElementById("employeeView");
  const productsView = document.getElementById("productsView");
  const ordersView = document.getElementById("ordersView");
  const settingView = document.getElementById("settingView");
  const adminProfileView = document.getElementById("adminProfileView");
  const farmersView = document.getElementById("farmersView");
  const reportsView = document.getElementById("requesttsView");
  const shopOwnerView = document.getElementById("shopOwnerView");

  
  function showOnly(view) {

     dashboardView.style.display="none";
     employeeView.style.display="none";
     productsView.style.display="none";
     ordersView.style.display="none";
     settingView.style.display="none";
     adminProfileView.style.display="none";
     farmersView.style.display="none";
    shopOwnerView.style.display="none";
    reportsView.style.display="none";

    if(view){
        view.style.display="block";
    } 
  }


  function ColorChange(active) {

      dashBoard.style.backgroundColor = "";
      employee.style.backgroundColor = "";
      products.style.backgroundColor = "";
      orders.style.backgroundColor = "";
      setting.style.backgroundColor = "";
      adminBtn.style.backgroundColor = "";
      farmers.style.backgroundColor="";
       shopOwner.style.backgroundColor="";
       reports.style.backgroundColor="";

    if(active){
      active.style.backgroundColor ="green";
    } 
  }


  if (dashBoard){

      dashBoard.addEventListener("click", () => {
      showOnly(dashboardView);
      ColorChange(dashBoard);
    });

  }

  if (employee){

      employee.addEventListener("click", () => {
      showOnly(employeeView);
      ColorChange(employee);
    });

  }

  if(farmers){

    farmers.addEventListener("click",()=>{
        showOnly(farmersView);
        ColorChange(farmers);
    });

    }

    if(shopOwner){

    shopOwner.addEventListener("click",() =>{
        showOnly(shopOwnerView);
        ColorChange(shopOwner);
    });

    }

  if (products){

      products.addEventListener("click", () => {
      showOnly(productsView);
      ColorChange(products);
    });

  }

  if (orders) {

      orders.addEventListener("click", () => {
      showOnly(ordersView);
      ColorChange(orders);
    });
  }

  if(reports){

    reports.addEventListener("click",()=>{
        showOnly(reportsView);
        ColorChange(reports);
    });

    }

  if (setting) {

    setting.addEventListener("click",() => {
      showOnly(settingView);
      ColorChange(setting);
    });

  }

  if (adminBtn) {

    adminBtn.addEventListener("click",() => {
      showOnly(adminProfileView);
      ColorChange(adminBtn);
    });

  }

 
  showOnly(dashboardView);
  ColorChange(dashBoard);
