// scope

var fun = 5;

function funFunction() {
	// child scope
	var fun = "hellooo";
	console.log(1, fun);
}
function funerFunction() {
	// child scope
	var fun = "Byee";
	console.log(2, fun);
}
function funestFunction() {
	// child scope
	var fun = "AHHHHHHHH";
	console.log(3, fun);
}

console.log("window", fun);
funFunction();
funerFunction();
funestFunction();
