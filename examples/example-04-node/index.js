// Import express. You need to have it installed!! `npm install express`

let express = require('express');

// Execute the Express function, which returns an express app
let app = express();

// Whenever the client GETs /, send index.html
app.get('/', function(req, res) {
	res.sendFile(__dirname + '/index.html');
});

// Make the app listen on port 8888
app.listen(8888);
