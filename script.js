// scope

var fun = 5;

function funFunction() {
	// child scope
	var fun = "hellooo";
	console.log(fun);
}
function funFunction() {
	// child scope
	var fun = "Byee";
	console.log(fun);
}
function funFunction() {
	// child scope
	var fun = "AHHHHHHHH";
	console.log(fun);
}

console.log(fun);
