let url='http://127.0.0.1:8000/api/search_user'
fetch(url, {
    method: "GET",
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(json=>console.log(json))
    .catch(err => console.log(err));

console.log("Hello");
