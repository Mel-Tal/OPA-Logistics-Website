<?php

    include_once 'psl-config.php';
    include_once 'db_connect.php';

    function sec_session_start() {
        $session_name = 'sec_session_id';  
        $secure = SECURE;
        $httponly = true;
        // Forces sessions to only use cookies.
        if (ini_set('session.use_only_cookies', 1) === FALSE) {
            header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
            exit();
        }
        // Gets current cookies params.
        $cookieParams = session_get_cookie_params();
        session_set_cookie_params($cookieParams["lifetime"],
            $cookieParams["path"], 
            $cookieParams["domain"], 
            $secure,
            $httponly);
        // Sets the session name to the one set above.
        session_name($session_name);
        session_start();            // Start the PHP session 
        session_regenerate_id(true);    // regenerated the session, delete the old one. 
    }
    
    function login($uName, $password, $conn) {
    // Using prepared statements means that SQL injection is not possible. 
        
        $sql = "SELECT uName, password FROM members WHERE (uName == ".$uName.")";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            $row = $result -> fetch_assoc();
        
            if ($row["password"] == $password) {
                $user_browser = $_SERVER['HTTP_USER_AGENT'];
                $user_id = preg_replace("/[^0-9]+/", "", $user_id);
                $_SESSION['user_id'] = $user_id;
                $username = preg_replace("/[^a-zA-Z0-9_\-]+/", 
                                                            "", 
                                                            $username);
                $_SESSION['username'] = $username;
                $_SESSION['login_string'] = hash('sha512', 
                          $password . $user_browser);
                return true;
            } 
        }
        return false;
    }
