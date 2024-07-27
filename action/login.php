<?php 
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $query= $dbh->prepare("SELECT * FROM users WHERE Username=:username AND Password=:password LIMIT 1");      
        $query->execute(['username'=>$username, 'password'=>$password]);
        $result = $query->fetchAll(PDO::FETCH_OBJ); 

    if($query->rowCount()>0){
           $_SESSION['active_login'] = true;
           $_SESSION['username_pos'] = $_POST['username'];
           // $_SESSION['system_mode'] = "Production Mode";

        foreach ($result as $rows){
            $_SESSION['user_id_data'] = $rows->UserId;
            $_SESSION['user_name'] = $rows->Username;
            $_SESSION['firstname'] = $rows->Firstname;
            $_SESSION['othername'] = $rows->Othername;
            $_SESSION['gender'] = $rows->Gender;
            $_SESSION['telephone'] = $rows->Telephone;
            $_SESSION['access_level'] = $rows->AccessLevel;
            $_SESSION['user_block'] = $rows->Block;
            $_SESSION['user_expiry'] = $rows->Expiry;
            $_SESSION['email'] = $rows->Email;
            $_SESSION['archive']= $rows->Archive;
            $_SESSION['user_status'] = $rows->Status;
            $users_id = $rows->UserId;
            $UserIdName = $_SESSION['user_id'];
            $LogIp = $_SERVER['REMOTE_ADDR'];
            $LogName = 'LOGGED IN';
        }
                if($_SESSION['user_expiry']=='YES' && $_SESSION['user_block']=='NO')
                {
                    $_SESSION['error'] = 'User Account Expired';
                }
                else if($_SESSION['user_block']=='YES' && $_SESSION['user_expiry']=='NO')
                {
                    $_SESSION['error'] = 'User Account Blocked';
                }
                else if($_SESSION['user_block']=='YES' && $_SESSION['user_expiry']=='YES')
                {
                    $_SESSION['error'] = 'User Blocked and Expired';
                }
                else if($_SESSION['archive']=='YES' && $_SESSION['user_status']=='ACTIVE')
                {
                    $_SESSION['error'] = 'Your account has been deleted';
                }
                else if($_SESSION['archive']=='NO' && $_SESSION['user_status']=='INACTIVE')
                {
                    $_SESSION['error'] = 'Your account has been disabled';
                }
                else 
                {
                    $query_2 = $dbh->prepare("INSERT INTO userlogs (UserId, LogName, LogIp) VALUES (:userid, :logname, :logip)");
                    $query_2->execute(['userid'=>$users_id, 'logname'=>$LogName, 'logip'=>$LogIp]);
                    header('Location: Home');
                }
    }else
        {
            $_SESSION['error'] = 'Invalid credentials';
        }
?>