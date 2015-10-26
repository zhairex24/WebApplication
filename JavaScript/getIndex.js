function showInfo() {
		var fname = document.getElementById('inout_fname').value;
		var mname = document.getElementById('input_mname').value;
		var lname = document.getElementById('input_lname').value;
		var content = document.getElementById('input_content').value;
		
		var date_today = new Date();
		document.getElementById('fname').innerHTML = "First Name: " + fname;
		document.getElementById('mname').innerHTML = "Middle Name: " + mname;
		document.getElementById('lname').innerHTML = "Last Name: " + lname;
		document.getElementById('content').innerHTML = "Content: " + content + " " + date_today;
}