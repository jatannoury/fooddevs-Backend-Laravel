let email = document.getElementById("email");
let password = document.getElementById("password");
var id = 0;

document.getElementById("btn").addEventListener('click', echo);
function echo(){

    let _data = {
        email: email.value,
        password: password.value,
    }
    
    fetch('http://127.0.0.1:8000/api/sign_in', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(function(response){
        if (response["status"]=="Success"){
            user_id=response["result"]["id"]
            console.log(user_id)
            // window.location.href="/landing_page"

        }
        else console.log(response)
    }
        
    )
    .catch(err => console.log(err));
}