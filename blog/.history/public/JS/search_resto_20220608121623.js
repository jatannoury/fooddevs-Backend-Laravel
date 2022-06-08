let input = document.getElementById("search-bar");
var id = 0;

input.addEventListener("keypress", (event) => {

    if (event.key === "Enter"){
        // console.log(input.value)
        let _data = {
            name:input
        }

    fetch('http://127.0.0.1:8000/api/search_resto', {
    method: "GET",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    // .then(console.log(response))
    .catch(err => console.log(err));
    }

})
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}