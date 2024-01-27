<?php
/*
 * Fonction de connexion pour un utilisateur
 * 
 * @param string $username
 * @param string $password
 * 
 * @return bool
*/
function login (string $username, string $password): bool {
    global $pdo;

    try {
        $query = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $query->execute(['username' => $username]);
    
        $user = $query->fetch();
    
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user; //Session user
            return true;

        } else return false;

    } catch (PDOException $e) { echo($e); return false; }
}

/*
 * Fonction d'inscription pour un utilisateur
 * 
 * @param string $username
 * @param string $pseudonyme
 * @param string $mail
 * @param string $password
 * 
 * @return bool
*/
function register (string $username, string $pseudonyme, string $mail, string $password): bool {
    global $pdo;

    try {
        $query = $pdo->prepare("INSERT INTO users (id_role, username, pseudonyme, mail, password) VALUES (:idRole, :username, :pseudonyme, :mail, :password)");
        $query->execute([
            'idRole' => 1,
            'username' => $username,
            'pseudonyme' => $pseudonyme,
            'mail' => $mail,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);

        login($username, $password);
    
        return true;

    } catch (PDOException $e) { echo($e); return false; }
}

/*
 * Fonction de déconnexion pour un utilisateur
 * 
 * @return void
*/
function logout (): void {
    global $base_url;
    session_destroy();
    header("location: $base_url?page=home");
}
?>