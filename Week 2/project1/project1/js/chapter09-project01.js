function test(e) {
	if (e.type == "focus"){
		e.target.classList.add("highlight");
	}
	else if (e.type == "blur"){
		e.target.classList.remove("highlight");
	}
}

window.addEventListener("load", function(){
	var cssSelector = "input[name=title],input[name=description],select[name=genre],select[name=subject],input[name=medium],input[name=year],input[name=museum]";
	var field = document.querySelectorAll(cssSelector);

	for (i=0; i<field.length; i++) {
		field[i].addEventListener("focus", test);
		field[i].addEventListener("blur", test);
	}

	document.getElementById("mainForm").addEventListener("submit", 
	function(e) {
		var title = document.getElementById("title").value;
		var year = document.getElementById("year").value;
		var description = document.getElementById("description").value;
		if (title == null || title == ""){
			document.getElementById("title").classList.add("error");
			e.preventDefault();
		} else if (title != null) {
			document.getElementById("title").classList.remove("error");
		}
		if (year == null || year == ""){
			document.getElementById("year").classList.add("error");
			e.preventDefault();
		} else if (year != null) {
			document.getElementById("year").classList.remove("error");
		}
		if (description == null || description == ""){
			document.getElementById("description").classList.add("error");
			e.preventDefault();
		} else if (description != null) {
			document.getElementById("description").classList.remove("error");
		}
});

	document.getElementById("mainForm").addEventListener("reset", 
	function(e) {
		document.getElementById("title").classList.remove("error");
		document.getElementById("year").classList.remove("error");
		document.getElementById("description").classList.remove("error");
		
});
});


/* add code here  */