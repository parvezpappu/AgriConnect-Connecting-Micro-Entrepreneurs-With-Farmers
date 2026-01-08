  




    function loadNotifications() {
    let xhttp = new XMLHttpRequest();
       xhttp.open("GET", "../Controllers/GetNotifications.php", true);
       let count=1;
       xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        let data = JSON.parse(this.responseText);
        let html = "";

        if (data.notifications.length == 0) { //databaser array length
            html = "<p>No notifications</p>";
        } 
       
        else{
            for (let i = 0; i < data.notifications.length; i++) {
            let n = data.notifications[i];
            html += count+" . "+n.type+"<br> <br>";
            count++;
            }
        }
        document.getElementById("notifList").innerHTML = html;
        }
    };
    xhttp.send();
    }


    loadNotifications();
    //refresh martechi
    const refreshBtn=document.getElementById("refreshNotif");
    if (refreshBtn) {
    refreshBtn.addEventListener("click", loadNotifications);
    }

  
    const clearBtn = document.getElementById("clearNotif");
    if (clearBtn) {
    clearBtn.addEventListener("click", function () {
        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "../Controllers/ClearNotificaions.php", true);

        xhttp.onreadystatechange = function () {
        if (this.readyState === 4 && this.status === 200) { 
            loadNotifications(); 
        }
        };

        xhttp.send();
    });
    }
