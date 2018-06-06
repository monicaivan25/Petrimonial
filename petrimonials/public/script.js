window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

function collectNewForm(){

  
};

function Inregistrare(){

	var par1 = document.getElementById("par1-id").value;
    var par2 = document.getElementById("par2-id").value;
    var username = document.getElementById("user-id").value;
    var email = document.getElementById("email-id").value;
   
   let xhr = new XMLHttpRequest();

		xhr.open("POST", "http://localhost:81/petrimonials/public/GetEmail/verificaEmail");

		xhr.addEventListener("load", function loadCallback() {
		    switch (xhr.status) {
		        case 200:
		            console.log("Succ " + xhr.response);
		            if (xhr.response == 0){
						alert("Esti inregistrat deja");
						document.getElementById('email-id').value = '';
						console.log("esti pe if-ul pentru verificaEmail");
					}else{
						
						//parolele nu corespund
					    if (par1 !== par2){
					    	alert("Parolele nu corespund");
					    	document.getElementById('par1-id').value = '';
					    	document.getElementById('par2-id').value = '';
					    	console.log("parolele nu corespund");

					    } else {
					    	let xhr2 = new XMLHttpRequest();

							xhr2.open("POST", "http://localhost:81/petrimonials/public/Inregistrare/singUp");

							xhr2.addEventListener("load", function loadCallback() {
							    switch (xhr2.status) {
							        case 200:
							            console.log("Success, ai inserat in baza de date" + xhr2.response);
							            break;
							        case 404:
							            console.log("Oups! Not found");
							            break;
							    }
							});

							xhr2.addEventListener("error", function errorCallback() {
							    console.log("Network error");
							});

							let payload = {
					            username: `${username}`,
					            email: `${email}`,
					            pass: `${par1}`
					        }
							xhr2.send(JSON.stringify(payload));
							document.getElementById('signup').style.display='none';
					    	}
				    }

		            break;
		        case 404:
		            console.log("Oups! Not found");
		            break;
		    }
		});

		xhr.addEventListener("error", function errorCallback() {
		    console.log("Network error");
		});

		let payload = {
            email: `${email}`
        }
		xhr.send(JSON.stringify(payload));

	
      
}

