id=localStorage.getItem("user_id");
url='http://localhost/dbex/user_profile.php';
url+="?id="+id;
axios({
    method: 'GET',
    url: url,
}).then(function (json) {
//    document.getElementById("profile_name").innerHTML=
console.log(json);
    
    }
)


document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}