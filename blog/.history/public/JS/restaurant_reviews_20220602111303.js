let name1=document.getElementById("restaurant-title");
let review=document.getElementById("text-review");
document.querySelector(".add-review-btn").addEventListener("click",echo);
function echo(){
            url= 'http://localhost/dbex/set_reviews.php'
            url+="?title="+name1.innerText
            url+="&review="+review.value
            url+="&user_id="+localStorage.getItem("user_id")
            console.log(url)
            axios({
                method: 'POST',
                url:url,

            })
            .then(function (response) {
                console.log(response);
                location.reload();
                }
            )
    console.log(name1.innerText)
    console.log(review.value)
}
document.getElementById("logout").addEventListener("click",logout)
function logout(){
    localStorage.removeItem("user_id");
}
