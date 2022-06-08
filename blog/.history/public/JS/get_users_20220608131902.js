let url='http://127.0.0.1:8000/api/search_user'
fetch(url, {
    method: "GET",
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(function(json){
        for (let i=0;i<json.data.length;i++){
        
            document.getElementById("users").innerHTML+=json.data[i]["full_name"] +"<br />"
            
            console.log(json.data[i]["full_name"])
    })
    .catch(err => console.log(err));

console.log("Hello");
