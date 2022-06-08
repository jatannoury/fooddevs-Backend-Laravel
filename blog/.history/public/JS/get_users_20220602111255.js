axios({
    method: 'GET',
    url: 'http://localhost/dbex/get_users.php',
}).then(function (json) {
    for (let i=0;i<json.data.length;i++){
        
        document.getElementById("users").innerHTML+=json.data[i]["full_name"] +"<br />"
        
        console.log(json.data[i]["full_name"])
    }
    console.log("hello");
    }
)

console.log("Hello");
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}