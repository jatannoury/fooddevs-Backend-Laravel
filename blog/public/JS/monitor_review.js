var actions=[]
axios({
    method: 'GET',
    url: 'http://localhost/dbex/get_reviews.php',
}).then(function (json) {
    user=document.getElementsByClassName("review-container")
    var category=""
    function setPositive(){
        for (let i=0; i<user.length;i++){   
            
            user[i].lastElementChild.firstElementChild.addEventListener("click",function(e){
                
                let name=e.path[1].parentElement.firstChild.nextElementSibling.textContent
                url="http://localhost/dbex/monitor_reviews.php"
                url+="?Name="+name
                url+="&state="+1
                axios({
                    method:"POST",
                    url:url,
                }).then(function(json){
                    location.reload();
                    console.log(json)
                })

            })

        }
        
    }
    function setNegative(){
        for (let i=0; i<user.length;i++){   
            console.log(user[i].querySelector("#decline"))  
            user[i].querySelector("#decline").addEventListener("click",function(e){
                let name=e.path[1].parentElement.firstChild.nextElementSibling.textContent
                console.log(name,-1)
                actions.push(name,-1)

                url="http://localhost/dbex/monitor_reviews.php"
                url+="?Name="+name
                url+="&state=-1"
        axios({
            method:"POST",
            url:url,
        }).then(function(json){
            console.log(json)
            location.reload();
        })
            })

        }
        
    }
    setNegative()
    setPositive()

        
    })
           

    document.getElementById("logout").addEventListener("click",logout)
    function logout(){
        localStorage.removeItem("user_id");
    }

