let Full_name=document.getElementById("full_name");
let E_mail=document.getElementById("email");
let Password=document.getElementById("password");
var id=0
document.getElementById("btn").addEventListener("click",echo);
function echo(){
            // let url="http://127.0.0.1:8000/api/add_users"
            // url+="?name="+Full_name.value
            // url+="&email="+email.value
            // url+="&password="+ Password.value
            // fetch(url,{
            //     method:"POST",
            //     mode: 'cors',
            //     headers: {
            //         'Content-Type': 'application/json'
            //       },
                  
               
            // }).then(function (response){
            //     console.log(response)
            // }
            // )
            let _data = {
                name:Full_name.value,
                email:email.value,
                password: Password.value,
            }
            
            fetch('http://127.0.0.1:8000/api/sign_in', {
            method: "POST",
            body: JSON.stringify(_data),
            headers: {"Content-type": "application/json; charset=UTF-8"}
            })
            .then(response => response.json()) 
            .then(json => console.log(json))
            .catch(err => console.log(err));
}