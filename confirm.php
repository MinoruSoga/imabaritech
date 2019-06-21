<?php
//       mb_language("Japanese");
//       mb_internal_encoding("UTF-8");
      $to = "minoru.2021@icloud.com";
      $name = $_POST['name'];
      $message = $_POST['message'];
      $email = $_POST['email'] ;
		wp_mail($to, $name, $message, $email);
		header('Location: https://baritech.org/wp-content/themes/marin-original/imabaritech/');
// 		$imabaritech_url = 
// 		var_dump($to, $name, $message, $email);
//       if(mail($to, $name, $message, $email)){
// 	       mail($to, $name, $message, $email));
// 			wp_safe_redirect( home_url(), 303 );
// 			exit;
//         header('Location: https://baritech.org/wp-content/themes/marin-original/imabaritech/');
			
// 			wp_redirect('https://baritech.org/wp-content/themes/marin-original/imabaritech/');
// 		  wp_safe_redirect( home_url(), 303 );
// 		  exit;
// 		  echo "メールを送信しました";
//       } else {
//         $alert = "<script type='text/javascript'>alert('Failed to send');</script>";
// 		echo $alert;
//       };
// 		header('Location: https://baritech.org/wp-content/themes/marin-original/imabaritech/');
// 		echo home_url();
    ?>