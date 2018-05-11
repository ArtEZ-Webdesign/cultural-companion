// Import express. You need to have it installed!! `npm install`

let express = require('express');
let logger = require('./logger');

// Execute the Express function, which returns an express app
let app = express();

let http = require('http').Server(app);




//
let counter = 0;


let socketio = require('socket.io');
let io = socketio(http);

io.on('connection', somebodyConnected);


function somebodyConnected(socket) {
	counter++;
	console.log(counter);

	logger.somebodyConnected();
	socket.on('artezEvent', artezEventFired);
	socket.on('disconnect', somebodyDisconnected);
}

function artezEventFired(data) {
	logger.somebodyFiredEvent(data);
}

function somebodyDisconnected() {
	counter--;
	console.log(counter);
}


































// Whenever the client GETs /, send index.html
app.get('/', function(req, res) {
	res.sendFile(__dirname + '/index.html');
});

// Make the app listen on port 8888
http.listen(8888);
