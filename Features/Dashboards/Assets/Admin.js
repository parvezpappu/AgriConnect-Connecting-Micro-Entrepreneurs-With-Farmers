   
    const dashBoard=document.getElementById("dashboard");
    const employee=document.getElementById("users");
    const products=document.getElementById("products");
    const orders=document.getElementById("orders");
    const setting=document.getElementById("setting");



    const dashboardView=document.getElementById("dashboardView");
    const employeeView=document.getElementById("employeeView");
    const productsView=document.getElementById("productsView");
    const ordersView=document.getElementById("ordersView");
    const settingView=document.getElementById("settingView");

    function showOnly(view) {
      dashboardView.style.display="none";
      employeeView.style.display="none";
      productsView.style.display="none";
      ordersView.style.display="none";
      settingView.style.display="none";
      view.style.display="block";
    
    }
    function ColorChange(Active){
      dashBoard.style.backgroundColor="";
      employee.style.backgroundColor="";
      products.style.backgroundColor="";
      orders.style.backgroundColor="";
      setting.style.backgroundColor="";
      
      Active.style.backgroundColor="green";  
    }    

    dashBoard.addEventListener("click",()=>{
        
        showOnly(dashboardView);
        ColorChange(dashBoard);
    });
    employee.addEventListener("click",()=>{
        showOnly(employeeView);
        ColorChange(employee);
    });

    products.addEventListener("click",()=>{
        showOnly(productsView);
        ColorChange(products);
    });

    orders.addEventListener("click",()=>{
        showOnly(ordersView);
        ColorChange(orders);
    });

    setting.addEventListener("click",()=>{
        showOnly(settingView);
        ColorChange(setting);
    });