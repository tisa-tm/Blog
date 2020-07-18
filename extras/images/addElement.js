function myFunction(){
	var main = document.getElementById("main");
	var headElement = document.createElement("h1");
	main.appendChild(headElement);
	var headText = document.createTextNode("Hello");
	headElement.appendChild(headText);

	var element = document.createElement("p");
	var main = document.getElementById("main");

	main.appendChild(element)
	var text = document.createTextNode("Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod");
	element.appendChild(text);
}
function 