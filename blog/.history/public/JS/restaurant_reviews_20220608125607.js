let name1=document.getElementById("restaurant-title");
let review=document.getElementById("text-review");
document.querySelector(".add-review-btn").addEventListener("click",echo);
function echo(){
    let _data = {
        restaurant_name:name1.innerText,
        review:review.value
        user_id=localStorage.getItem("user_id")
    }
    
    fetch('http://127.0.0.1:8000/api/addReview', {
    method: "POST",
    body: JSON.stringify(_data),
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(json => console.log(json))
    .catch(err => console.log(err));
}
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}
