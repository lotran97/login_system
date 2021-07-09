<?php 

 $users = [
  [
    "email" => "john@gmail.com",
    "password" => '$2y$10$W377eGi8bqQ2or4hnkFPy.xPUQ1NdUb0wG2D.brNLzn8zUSqRbSsS' // 'test'
  ],
  [
    "email" => "jane@gmail.com",
    "password" => '$2y$10$r.MM2sOX1cdbbjZSPZwRPufEvfZbSE4sUKDsGecgq8x4F39apX6ja' //'test2'
  ],
  [
    "email" => "test@gmail.com",
    "password" => '$2y$10$8lnzk1gM5mjqvbpp5J5eUuJ45nFaJ3.HE3ITQoPuwS3uf7KEpBFcu' // 'test3'
  ]
];




if (isset($_POST['submit'])){
	if (!empty($_POST['mail']) && !empty($_POST['mdp'])) {

		$email = strtolower(trim($_POST['mail']));
		$password = trim($_POST['mdp']);

	}

for ($i=0; $i < count($users); $i++) {  
	if ($email == $users[$i]['email']){

		if(password_verify($_POST['mdp'], $users[$i]['password']) == true){

			header("Location:dashboard.php?email=$email");
			return;
			
		}else{
				header("Location:index.php");
			}
	}else{
		header("Location:index.php");
	}
}
	
}

	

?>