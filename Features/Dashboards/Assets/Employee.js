  
    const dashBoard = document.getElementById("dashboard");
    const farmers = document.getElementById("farmers");
    const shopOwner = document.getElementById("shopOwener");
    const products = document.getElementById("products");
    const reports = document.getElementById("reports");
    const setting = document.getElementById("setting");
    const employee = document.getElementById("employee");

    const dashboardView = document.getElementById("dashboardView");
    const farmersView = document.getElementById("farmersView");
    const shopOwnerView = document.getElementById("shopOwnerView");
    const productsView = document.getElementById("productsView");
    const reportsView = document.getElementById("requesttsView");
    const settingView = document.getElementById("settingView");
    const employeeProfileView = document.getElementById("employeeProfileView");


    function showOnly(view) {
          dashboardView.style.display="none";
          farmersView.style.display="none";
          shopOwnerView.style.display="none";
          productsView.style.display="none";
          reportsView.style.display="none";
          settingView.style.display="none";
          employeeProfileView.style.display="none";

    if (view){
     view.style.display="block";
    } 

    }

    function ColorChange(active) {
       dashBoard.style.backgroundColor="";
       farmers.style.backgroundColor="";
       shopOwner.style.backgroundColor="";
       products.style.backgroundColor="";
       reports.style.backgroundColor="";
       setting.style.backgroundColor="";
       employee.style.backgroundColor="";

    if (active){
        active.style.backgroundColor="green";
    }
}

  
    if(dashBoard){

       dashBoard.addEventListener("click",()=>{
        showOnly(dashboardView);
        ColorChange(dashBoard);
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

    if(products){

    products.addEventListener("click",()=>{
        showOnly(productsView);
        ColorChange(products);
    });

    }

    if(reports){

    reports.addEventListener("click",()=>{
        showOnly(reportsView);
        ColorChange(reports);
    });

    }

    if(setting){

    setting.addEventListener("click",()=>{
        showOnly(settingView);
        ColorChange(setting);
    });

    }

    if (employee){

    employee.addEventListener("click",()=>{
        showOnly(employeeProfileView);
        ColorChange(employee);
    });

    }

    
    showOnly(dashboardView);
    ColorChange(dashBoard);
