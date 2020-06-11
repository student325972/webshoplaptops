<?php
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }

    function mk_password_hash_from_microtime() {
        $mut = microtime();

        $time = explode(" ", $mut);

        $password = $time[1] * $time[0] * 1000000;

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $onehour = mktime(1, 0,0, 1, 1, 1970);

        $date_formated = date("d-m-y", ($time[1] + $onehour));

        $time_formated = date("h:i:s", ($time[1] + $onehour));
        
        return array("password_hash" => $password_hash,
                     "date"          => $date_formated,
                     "time"          => $time_formated);
    }
?>