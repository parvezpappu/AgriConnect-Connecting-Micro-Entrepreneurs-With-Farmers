
    const dashBoard=document.getElementById("dashboard");
    const products=document.getElementById("products");
    const orders=document.getElementById("orders");
    const setting=document.getElementById("setting");
    const shopPartner=document.getElementById("ShopPartner");

    /* views */
    const dashboardView=document.getElementById("dashboardView");
    const productsView=document.getElementById("productsView");
    const ordersView=document.getElementById("ordersView");
    const settingView=document.getElementById("settingView");
    const shopOwnerProfileView=document.getElementById("shopOwnerProfileView");

    function showOnly(view){

     dashboardView.style.display="none";
     productsView.style.display="none";
     ordersView.style.display="none";
     settingView.style.display="none";
     shopOwnerProfileView.style.display="none";

    if(view){
          view.style.display="block";
     }
    }

  
    function ColorChange(active){

    dashBoard.style.backgroundColor="";
    products.style.backgroundColor="";
    orders.style.backgroundColor="";
    setting.style.backgroundColor="";
    shopPartner.style.backgroundColor="";

    if(active){
     active.style.backgroundColor="green";
    } 
    }

    if (dashBoard){

        dashBoard.addEventListener("click",()=>{
        showOnly(dashboardView);
        ColorChange(dashBoard);
    });

    }

    if (products){
        products.addEventListener("click",()=>{
        showOnly(productsView);
        ColorChange(products);
    });

    }

    if(orders){

        orders.addEventListener("click",()=>{
        showOnly(ordersView);
        ColorChange(orders);
    });

    }

    if(setting) {

        setting.addEventListener("click",()=>{
        showOnly(settingView);
        ColorChange(setting);
    });

    }


    if(shopPartner){

        shopPartner.addEventListener("click", () => {
        showOnly(shopOwnerProfileView);
        ColorChange(shopPartner);
    });

    }


    showOnly(dashboardView);
    ColorChange(dashBoard);
