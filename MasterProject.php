
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="Master Project.css">
	<title>ZachyDev.</title>
</head>
<body>
	<h1>Easy Tech Solutions 254</h1>
	<ul>
		<li class="active"><a href="#">Home</a></li>
		<li><a href="#">About</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Testimonials</a></li>
		<li><a href="#">Feedback</a></li>
		<li><a href="#">Contacts</a></li>
		<li class="left"><a href="#">Developer</a></li>
	</ul>
	<h1 class="head1">Welcome to Easy Tech Solutions Official Website</h1>
	<div class="box-1">
		<p>We are proud to host you as one of clients.We offer varoius tech solutions as will later be seen.Easy Tech Solutions was primarily founded to support the upcoming developers reach their development career.The developer,in his words,<em>"We are scholarly committed to promoting young talents in the computing field.Our vision is to Tech to another level as well as making people informed about the current trends in technology,the benefits of technology as well as the consequences of technology."<em>For more details,<a href="#">Click on this link</a></p>
		</div>
		<img src="wes-hicks-480398-unsplash.jpg" width="432px" height="198px" alt="responsive">
		<div class="box-2">
			<h1>Services</h1>
				<ol class="list">
					
					<li>Tech training</li><br>
					<li>Web Design and Development</li><br>
					<li>Tutoring</li><br>
					<li>Internship</li><br>
					<li>Android Development</li><br>
					<li>Software Development Courses</li><br>
					<li>Employment Opportunities</li><br>
				</ol>

		
		</div>
			
			<div class="box-3">
			<h1>About the Developer</h1>
			<h3>I am Moseti Zachary, a computer science student at the University of Eldoret(UoE).I am a web developer,android developer.I have developed many softwares which are used by various companies in their day to day operations.I have also worked for many companies,among them Safaricom_Kenya as the senior WebDev.For more information,kindly follow me on via the social media handles at the bottom of the page</h3>
		</div>
		<h3 class="newsletter">To get our latest updates,kindly subscribe to our newsletter below.<br>
			By clicking submit,you give Easy Tech ICT to send you the latest updates via E-mail.</h3>
		<div class="form">
			<form action="siite.php" method="post">
				Username:<br>
				<input type="text" name="username" required minlength="4" maxlength="20"><br>
				E-mail:<br>
				<input type="text" name="E-mail" required minlength="8" maxlength="20"><br>
				<input type="Submit"><br>
				<h3><b>If you already have an account,kindly login below:<b></h3><br>
					Username/E-mail:<br>
					<input type="text" name="username"required minlength="4" maxlength="20"><br>
					Password:<br>
					<input type="Password" name="pwd" required minlength="6" maxlength="20"><br>
					<input type="submit" value="Login"><BR>
					<label><input type="checkbox">Remember me?</label>
			</form>
		</div>
		<br>
		The  username of the client is:<?php echo $_POST["username"] ?><br>
		The email of the client is:<?php echo $_POST["E-mail"] ?><br>
		The password of the client is:<?php echo $_POST["pwd"] ?><br>



</body>
</html>