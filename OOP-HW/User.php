<?php 
	class User{
		public $name;
		public $email;
		public $password;
		public $avatar;
		// method
		function __construct($name, $email, $password, $avatar){
			$this->name = $name;
			$this->email = $email;
			$this->password = $password;
			$this->avatar = $avatar;
		}
		function Intt(){
			echo "Thông Tin người dùng : ";
			echo "<br>- Họ tên : . $this->name.";
			echo "<br>- Email : $this->email.";
			echo "<br>- Password : $this->password";
			echo "<br>- Avatar : $this->avatar.";
		}
	}
	$user = new User("Trần Đức Hải", "haitranduc01@gmail.com", "311229", "https://toquoc.mediacdn.vn/2020/3/23/batch6615a53a-51f3-336e-b7ba-ed456e3c89ca-15848021328151422868524-1584933140106-1584933140106684645048.jpg");
	$user->Intt();
 ?>