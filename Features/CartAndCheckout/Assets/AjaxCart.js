function ajaxDelete(productID)
  {
   let xhttp = new XMLHttpRequest();
   xhttp.open("POST", "../Controllers/DeleteCartAjax.php", true);
   xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
   let row = document.getElementById("row" + productID);
   xhttp.send("productID=" + productID);
   xhttp.onreadystatechange = function () {
       if(this.readyState == 4 && this.status == 200)
         {
           if(this.responseText == "deleted") 
            {
                row.style.display="none";
            }
        }
   }
 }
 