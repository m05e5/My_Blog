var database = [
	{
		username: "Kirito",
		password: "Asuna"
	}
];

var newsFeed = [
	{
		username: "Bobby",
		timeline: "so tired from all that learning"
	},
	{
		username: "Sallly",
		timeline: "javascript is sooooo coool!"

	}
]

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




















