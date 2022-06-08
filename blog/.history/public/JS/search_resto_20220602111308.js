let input = document.getElementById("search-bar");
var id = 0;

input.addEventListener("keypress", (event) => {

    if (event.key === "Enter"){
        // console.log(input.value)
        let data = new FormData();
        data.append("restaurant_id", id);
        data.append("name", input.value);

        axios({
            method: 'POST',
            url: 'http://localhost/dbex/search_resto.php',
            data: data,

        })
        .then(function(response){
            if (response.data["response"]){
                location.href = "./restaurant.html";
            } else {
                alert('Restaurant Not Found');
                location.reload();
            }
        })
    }

})
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}