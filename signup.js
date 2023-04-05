const form= document.getElementById("registration-form");

form.addEventListner('submit', function(event)){
	event.preventDefault();

	const name=document.getElementById('name').value;
	const department= document.getElementById('department').value;
	const mobile=document.getElementById('mobile').value;
	const rollno=document.getElementById('rollno').value;
	const year=document.getElementById('year').value;
	const dob=document.getElementById('dob').value;
	const gender=document.getElementById('gender').value;
	const email=document.getElementById('email').value;
	const password=document.getElementById('password').value;
	const uid=document.getElementById('uid').value;

	const data = {
		name;
		department;
		mobile;
		rollno;
		year;	
		dob;	
		gender;
		email;
		password;		
		uid;
	}

	alert('Registration succeful!');
}
