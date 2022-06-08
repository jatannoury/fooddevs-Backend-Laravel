let Full_name=document.getElementById("full_name");
let E_mail=document.getElementById("email");
let Password=document.getElementById("password");
var id=0
document.getElementById("btn").addEventListener("click",echo);
function echo(){
    let data = new FormData();
            data.append('name', Full_name.value);
            data.append('email', email.value);
            data.append('password', Password.value);
            fetch("http://127.0.0.1:8000/api/add_users",{
                method:"POST",
                mode: 'cors',
                headers: {
                    'Content-Type': 'application/json'
                  },
                  body: JSON.stringify(data) 
               
            }).then(function (response){
                console.log(response)
            }
            )

}