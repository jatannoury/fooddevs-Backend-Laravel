let resto_name=document.getElementById("resto-name");
let category=document.getElementById("category");
let loc=document.getElementById("location");
let avg=document.getElementById("average_cost");
document.getElementById("submit").addEventListener("click",echo);
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}
function echo(){
    let _data = {
        name:resto_name.value,
        category:category.value,
        location:loc.value,
        Average_cost:avg.value
    }
    console.log(_data)
    fetch('http://127.0.0.1:8000/api/add_restaurants', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(json=>console.log(json))
    .catch(err => console.log(err));
    
}