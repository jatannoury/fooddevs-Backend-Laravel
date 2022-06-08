let name1=document.getElementById("restaurant-title");
let review=document.getElementById("text-review");
document.querySelector(".add-review-btn").addEventListener("click",echo);
function echo(){
    let _data = {
        restaurant_name:name1.innerText,
        review:review.value,
        user_id:localStorage.getItem("user_id"),
        rating:0,
        state:0,
    }
    
    fetch('http://127.0.0.1:8000/api/addReview', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(function(response){
        if (response["status"]=="Success")location.reload()
    })
    .catch(err => console.log(err));
}
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}
