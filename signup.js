var database = [
	{
		username: "Kirito",
		password: "Asuna"
	},
	{
		username: "sally",
		password:"123"
	},
	{
		username: "ingrid",
		password: "777"
];

var newsfeed = [
	{
		username: "Bobby",
		timeline: "so tired from all that learning"
	},
	{
		username: "Sallly",
		timeline: "javascript is sooooo coool!"

	},
	{
		username: "Mitch",
		timeline: "javascript is preeetyy cool!"
	}
];
function signIn(username, password){
	if (username === database[0].username && password === database[0].password) {
		console.log(newsfeed);
	}else{

	}
}

var userNameprompt = prompt("what's your username");
var passwordprompt = prompt("what's your password");

function signIn(user, pass) {
	if(user === database[0].username && pass === database[0].password){
		console.log(newsFeed);
	} else {
		alert("sorry, Wrong username and password!");
	}
}
signIn(userNameprompt, passwordprompt);



















