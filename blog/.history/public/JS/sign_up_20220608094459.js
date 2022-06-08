let Full_name=document.getElementById("full_name");
let E_mail=document.getElementById("email");
let Password=document.getElementById("password");
var id=0
document.getElementById("btn").addEventListener("click",echo);
function echo(){
            let url="http://127.0.0.1:8000/api/add_users"
            url+="?name="+Full_name.value
            url+="&email="+email.value
            url+="&password="+ Password.value
            fetch(url,{
                method:"PUT",
                // mode: 'cors',
                headers: {
                    'Content-Type': 'application/json'
                  },
                  
               
            }).then(function (response){
                console.log(response)
            }
            )

}