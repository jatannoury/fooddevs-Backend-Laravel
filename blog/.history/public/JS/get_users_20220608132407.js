let url='http://127.0.0.1:8000/api/search_user'
fetch(url, {
    method: "GET",
    headers: {"Content-type": "application/json; charset=UTF-8"}
    })
    .then(response => response.json()) 
    .then(function(json){
        // for (let i=0;i<json["restaurants"].length;i++){
        
        //     document.getElementById("users").innerHTML+=json["restaurants"]["name"] +"<br />"
            
            
        // }
        console.log(json["restaurants"][0]["name"])
    })
    .catch(err => console.log(err));

console.log("Hello");
