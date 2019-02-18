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
	}
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
function isUser 
function signIn(username, password){
for (var i = 0; i < database.length; i++) {
	if (database [i].username === username && 
		database[i].password === password){
		console.log(newsfeed);
	}else{
		alert("sorry, wrong username and password");
	}
}	
	// if (username === database[0].username &&
	//  password === database[0].password) {
	// 	console.log(newsfeed);
	// }else{
	// 	alert("sorry, wrong username and password");

	// }

}

var userNameprompt = prompt("what\'s your username");
var passwordprompt = prompt("what\'s your password");

// function signIn(user, pass) {
// 	if(user === database[0].username && pass === database[0].password){
// 		console.log(newsFeed);
// 	} else {
// 		alert("sorry, Wrong username and password!");
// 	}
// }
signIn(userNameprompt, passwordprompt);




















