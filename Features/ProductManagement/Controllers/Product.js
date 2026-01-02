function confirmDelete(id){
    if(confirm('Are your sure want to delete this product?')){
        window.location.href='DeleteProduct.php?id='+id;
    }
}

function updateProduct(id) {
    window.location.href = 'UpdateProduct.php?id=' + id;
}