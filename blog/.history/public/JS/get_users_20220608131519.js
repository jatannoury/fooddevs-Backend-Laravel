fetch('http://127.0.0.1:8000/api/search_user', {
    method: "GET",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(function(response){
        if (response["status"]=="Success"){
            let user_id=response["result"][0]["id"]
            localStorage.setItem("user_id",user_id)
            window.location.href="/landing_page"

        }
        else console.log(response)
    }
        
    )
    .catch(err => console.log(err));

console.log("Hello");
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}