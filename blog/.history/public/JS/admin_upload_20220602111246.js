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
    let data = new FormData();
            data.append('resto_name', resto_name.value);
            data.append('category', category.value);
            data.append('location', loc.value);
            data.append("average_cost",avg.value)
            axios({
                method: 'POST',
                url: 'http://localhost/dbex/upload.php',
                data: data,
            })
            .then(function (response) {
                console.log(response);
                location.reload();
                }
            )
    
}