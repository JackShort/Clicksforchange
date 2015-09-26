var chosenID = "";

function choose(id) {
	// var target = e.target;

	// if (chosenID != "" && target.id != "") {
	// 	oldTarget = document.getElementById(chosenID).setAttribute("class", "ghost-button btn-block");
	// }

	// if (target.id != "") {
	// 	chosenID = target.id;

	// 	target.setAttribute("class", "ghost-button-clicked btn-block");
	// 	document.getElementById("charityInput").value = target.value;
	// }


	if (chosenID != "" && id != "") {
		oldTarget = document.getElementById(chosenID).setAttribute("class", "ghost-button btn-block");
	}

	if (id != "") {
		chosenID = id;
		document.getElementById(id).setAttribute("class", "ghost-button-clicked btn-block");
		document.getElementById("charityInput").value = document.getElementById(id).value;
	}
}

function submitForm() {
	if (chosenID != "") {
		document.getElementById('form').submit();
	} else {
		alert("Must choose a charity to help.");
	}
}