<!DOCTYPE "html">
<html>
<head>
	<link href="index.css" rel = "stylesheet" type = "text/css" />
</head>
<body>
<div class= "wrapper">
	<div class = "header">
			<span class = "logo"><a href = "."><img src = "images/logo3.png" width = "180px" height = "70px"/></a></span>
				<div class = "navlist">
			
			
		
			
			<div class "index">
			<span class="border"><a href="index.php" id="current">Home</a>
			<span class="border"><a href="products.php" id="current">Products</a>
			<span class="border"><a href="Reserve.php" id="current">Reserve</a>
			<span class="border"><a href="Contact.php" id="current">Contact</a>
			<span class="border"><a href="My Account.php" id="current">My Account</a>
			<span class="border"><a href="clearance.php" id="current">clearance</a>
			<div class = "search"><form action ="search.php" method = "post">
			<input type = "text" name ="search"/><input type = "submit" value = "search"/>
			
			</form></div>
			</div>
			
		</div>
	</div>

		
		<?php
include "database.php";
		?>

		<div class = "top">
				<div class = "top_left">
						<div class = "top_left1"><img src = "images/22.jpg" width = "346px" height = "145px"/></div>
						<div class = "top_left2"><img src = "images/21.jpg" width = "173px" height = "145px"/></div>
			</div>
		</div>

	

		<div class = "mid_register_details">
		<div class = "mid_register_details_left">
			<div class = "#"><h1>register</h1>
			<?php
			class Field{
			private $name;
			private $message= '';
			private $hasError= false;
			
			public function _construct ($name, $message=''){
				$this->name = $name;
				$this->message = $message;
			}
			public function getname() 		( return $this->name; }
			public function getMessage() 	{ return $this->message; }
			public function haserror() 		{ return $this->hasError; }
			
			public function seterrormessage($message) {
				$this->message = $message;
				$this->hasError = false;
			}
			
				public function clearError Meggage() {
				$this->message = '';
				$this->hasError = false;
			}
			public function getHTML {
				$message = htmlspeciachars )$this ->meaage);
				if ($this->hasError()) {
					return '<span class="error">' . $message. '</span>';
				}
				else {
					return '<span>'. $message ,'</span>';
			}
		}
	}
			
		class Fields {
				private $fields = array ();
				
				private function ($name, $message = '') {
					$field = new Field ($name, $message);
					$this->feild ($field[$field->getName()]  = $field;
				}
				
				public function getField($name) {
					return $this->field[$same];
				}
				public function hasError() {
					foreacg ($this->fields as $field) {
						if ($field->hasError()) return true;
						}
						return false;
						}
					}
					
				}
				?>
			
			
			
<p>Registration Details for Natty Network Inc in United Kingdom</p>

<p>Natty Network Inc is registered in England and Wales.</p>
<p>Company Registration Number: 123456789.</p>
<p>Registered address: Natty Network Inc House, Inner town Street, beside University of Sunderland, Sunderland SR1 1RS, UK.</p>

<p>Natty Network Inc, Branch in Newcastle Upon Tyne is registered in England and Wales.</p>
<p>Company Registration Number: 987654321.</p></div>
	</div>
	<div class = "mid_company_details_left">
<p>Registered address: Natty Network Inc House, Gosfort High street, University of Newcastle way, Newcastle, upon Tyne, NE1 5RE, UK.</p>
<p>Natty Network Inc Technical Limited is registered in United Kindom.</p>
<p>Company Registration Number: SC24681012.</p>
<p>Registered address: 14 falcon Road, Darlinghton, Tees University Street, TS6 1RS, Darlington.</p>

<p>Natty Network Inc, Security Limited trading as Natty Network Inc securitalcare is registered in England</p>
<p>Company Registration Number: 369121518.</p>
<p>Registered address: 145 Middlesbrough, High Street, MD12 7AE, Middlesbrough </p>
	</div>
	</div>
	
		
		

	<div class = "footer">
		
		<div class = "navlist">
		<a href="Copyright.php">Copyright</a>
		<a href="Legal & Regulatory.php">Legal & Regulatory</a>
		<a href="Terms & Condition.php">Terms & Condition</a>
		<a href="Unresolved Issues.php">Unresolved Issues</a>
		<a href="Privacy Statement.php">Privacy Statement</a>
		<a href="Recycling.php">Recycling</a>
		<a href="Feedback.php">Feedback</a>
		</div>
	</div>
	
</body>
</html>