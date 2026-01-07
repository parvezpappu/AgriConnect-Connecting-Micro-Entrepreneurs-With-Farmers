function ajaxProductSearch(){
    let searchValue = document.getElementById('searchText').value;

    if(searchValue===""){
        alert("Please enter productID or ProductName or Category to search!");
        return;
    }

    let xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'upload.php?username='+username, true);
    xhttp.open('POST', '../../ProductBrowsing/Controllers/ProductBrowsing.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xhttp.send('search='+searchValue);
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;
        }

    }
    xhttp.send('search='+searchValue);
}

function clearButton(){
    document.getElementById('searchText').value="";

    let xhttp = new XMLHttpRequest();
    //xhttp.open('GET', 'upload.php?username='+username, true);
    xhttp.open('POST', '../../ProductBrowsing/Controllers/ProductBrowsing.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    //xhttp.send('search=');
    xhttp.onreadystatechange = function (){
        if(this.readyState == 4 && this.status == 200) {
            //alert(this.responseText);
            document.getElementById('searchResult').innerHTML = this.responseText;
        }

    }
    xhttp.send('search=');

}
