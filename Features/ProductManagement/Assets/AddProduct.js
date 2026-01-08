function submitProduct(){
    var productName=document.getElementById('productName').value;
    var category=document.getElementById('category').value;
    var price=document.getElementById('price').value;
    var stock=document.getElementById('stock').value;
    var status=document.getElementById('status').value;
    var image=document.getElementById('image').value;
    
    if(productName=='' || category=='' || price=='' || stock=='' || status=='' || image==''){
        alert('Please fill up all the fields and select an image!');
        return;
    }

    var form=document.getElementById('addProductForm');
    var data=new FormData(form);
    var xhttp=new XMLHttpRequest();
    xhttp.open('POST', '../Controllers/AddProductJson.php', true);
    xhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            var product=JSON.parse(this.responseText);
            if(product != null){
                alert('Product successfully added: '+product.productName);
                document.getElementById('addProductForm').reset();

            }else{
                alert('Error! Product did not uploaded');
            }
        }
    }
    xhttp.send(data);
}