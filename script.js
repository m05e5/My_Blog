// function moveCommand(direction) {
// 	var whatHappens;
// 	switch(direction){
// 		case "forward":
// 			whatHappens = "you encounter a monster";
// 			break;
// 		case "back":
// 			whatHappens = "you arrived home";
// 			break;
// 		case "right":
// 			whatHappens = "you found a river";
// 			break;
// 		case "left":
// 			whatHappens = "you run into a troll";
// 			break;
// 		default:
// 			whatHappens = "please enter a valid direction"
// 	}
// 	return whatHappens;
// }
alert ("enter the a, b, c of the quadratic")
var a = prompt("please enter the value of a");
var b = prompt("please enter the value of b");
var c = prompt("please enter the value of c");

function ans(){
	return (b*b-4*a*c);
}
ans();
