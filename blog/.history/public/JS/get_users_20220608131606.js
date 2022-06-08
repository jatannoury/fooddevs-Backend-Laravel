fetch('http://127.0.0.1:8000/api/search_user', {
    method: "GET",
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(json=>console.log(json))
    .catch(err => console.log(err));

console.log("Hello");
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}