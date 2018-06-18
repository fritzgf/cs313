var http = require('http');
var fs= require('fs');

var server = http.createServer(function(request, response){
    

    switch (request.method) {
        case "GET":
    if (request.url === "/home") {
        response.writeHead(200, { "Content-Type": "text/html" });
        response.write("<html><html><head><title>Home</title></head><body><h1>Welcome to the Home Page.</h1></html>");
        response.end();
    }
    else if (request.url === "/getData") {
        response.writeHead(200, { "Content-Type": "application/json" });
        var myObject = { name: 'Fritz FEVRIER',
                         class: 'CS 313'
                         };
    
        response.end(JSON.stringify(myObject));
    }
    else {
        response.writeHead(404, "Resource Not Found", { "Content-Type": "text/html" });
        response.write("<html><html><head><title>404</title></head><body>404: Resource not found.</body></html>");
        response.end();
    }
    break;
    }
    response.end();
});
server.listen(8888, '127.0.0.1'); 

console.log("hello world");


