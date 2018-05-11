function connected() {
	console.log("Somebody connected");
}

function eventFired(data) {
	console.log("Somebody fired the Artez event!");
	console.log("They said: " + data);
}

module.exports = {
	somebodyConnected: connected,
	somebodyFiredEvent: eventFired
};
