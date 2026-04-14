<?php

$first = $_POST['first_name'];
$last = $_POST['last_name'];
$email = $_POST['email'];

echo "
<body style='font-family: Arial; background: linear-gradient(to right, #dbeafe, #fce7f3); display: flex; justify-content: center; align-items: center; height: 100vh;'>

<div style='background: white; padding: 30px; border-radius: 15px; text-align: center; box-shadow: 0 4px 10px rgba(0,0,0,0.1);'>

<h2>Welcome $first 💖</h2>
<p>Your email is $email</p>

</div>

</body>
";
?>
