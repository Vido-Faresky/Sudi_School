<?php
    require_once '../../config/db-connection.php';

    if (isset($_POST['store'])) {
        $email = htmlspecialchars($_POST['email']);
        $password = $_POST['password'];
        $passwordConfirmation = $_POST['confirm'];

        if ($password != $passwordConfirmation) {
            echo "
                    <p id='error' style='color:red; display:none; margin-top:-20px;'>⚠ Password dan Konfirmasi Password tidak sama!</p>

                      const form = document.getElementById('Daff');
                        const password = document.getElementById('password');
                        const konfir = document.getElementById('konfir');
                        const error = document.getElementById('error');

                        form.addEventListener('submit', function(event) {
                            if (password.value !== konfir.value) {
                            event.preventDefault();
                            error.style.display = 'block';
                            } else {
                            error.style.display = 'none';
                            alert('Pendaftaran berhasil!');
                            }
                        });
            ";
            } 

        } else {
            $passwordHashed = password_hash($password, PASSWORD_BCRYPT);
            $query = "INSERT INTO users (email, password) VALUES (?, ?)";

            $stmt = $connection->prepare($query);
            $stmt->bind_param('sss', $name, $email, $passwordHashed);
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                $stmt->close();
                header('Location: ../../index.php');
                exit();
            } else {
                echo "
                    <script>
                        alert('Error to register new user');
                    </script> 
                ";

                header('Location: ../../Login/Daftar.php');
                exit;
            }
    }
?>  