


    const dashBoard=document.getElementById("dashboard");
    const farmers=document.getElementById("farmers");
    const shopOwner=document.getElementById("shopOwener");
    const products=document.getElementById("products");
    const reports=document.getElementById("reports");
    const setting=document.getElementById("setting");
   // const employee=document.getElementById("employee");

    const dashboardView=document.getElementById("dashboardView");
    const farmersView=document.getElementById("farmersView");
    const shopOwnerView=document.getElementById("shopOwnerView");
    const productsView=document.getElementById("productsView");
    const reportsView=document.getElementById("requesttsView");
    const settingView=document.getElementById("settingView");
   // const employeeView=document.getElementById("employeeView");


    function showOnly(view) {
        dashboardView.style.display="none";
        farmersView.style.display="none";
        shopOwnerView.style.display="none";
        productsView.style.display="none";
        reportsView.style.display="none";
        settingView.style.display="none";
      //  employeeView.style.display="none";

        view.style.display="block";
    }

    function ColorChange(Active) {
        dashBoard.style.backgroundColor="";
        farmers.style.backgroundColor="";
        shopOwner.style.backgroundColor="";
        products.style.backgroundColor="";
        reports.style.backgroundColor="";
        setting.style.backgroundColor="";
    //    employee.style.backgroundColor="";

        Active.style.backgroundColor="green";
    }

    dashBoard.addEventListener("click", ()=>{

        showOnly(dashboardView);
        ColorChange(dashBoard);
    });

    farmers.addEventListener("click", ()=>{

        showOnly(farmersView);
        ColorChange(farmers);
    });

    shopOwner.addEventListener("click",()=>{

        showOnly(shopOwnerView);
        ColorChange(shopOwner);
    });

    products.addEventListener("click", ()=>{

        showOnly(productsView);
        ColorChange(products);
    });

    reports.addEventListener("click", ()=>{

        showOnly(reportsView);
        ColorChange(reports);
    });

    setting.addEventListener("click", ()=>{

        showOnly(settingView);
        ColorChange(setting);
    });

    // employee.addEventListener("click",()=>{
    //     showOnly(employeeView);
    //     ColorChange(employee);
    // });
