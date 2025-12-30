


    
    const dashBoard=document.getElementById("dashboard");
    const myOrders=document.getElementById("myOrders");
    const products=document.getElementById("products");
    const setting=document.getElementById("setting");
  
    const dashboardView=document.getElementById("dashboardView");
    const myOrdersView=document.getElementById("myOrdersView");
    const productsView=document.getElementById("productsView");
    const settingView=document.getElementById("settingView");

    function showOnly(view) {
        dashboardView.style.display="none";
        myOrdersView.style.display="none";
        productsView.style.display="none";
        settingView.style.display="none";

        view.style.display="block";
    }

    function ColorChange(Active) {

        dashBoard.style.backgroundColor = "";
        myOrders.style.backgroundColor = "";
        products.style.backgroundColor = "";
        setting.style.backgroundColor = "";

        Active.style.backgroundColor = "green";
    }

    dashBoard.addEventListener("click",()=>{

        showOnly(dashboardView);
        ColorChange(dashBoard);
    });

    myOrders.addEventListener("click",()=>{

        showOnly(myOrdersView);
        ColorChange(myOrders);
    });

    products.addEventListener("click",()=>{

        showOnly(productsView);
        ColorChange(products);
    });

    setting.addEventListener("click",()=>{
        
        showOnly(settingView);
        ColorChange(setting);
    });


    // farmer.addEventListener("click", () => {
    //     showOnly(farmerView);
    //     ColorChange(farmer);
    // });

