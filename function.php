<?php
	// connect to database
	function connect_db($db_host, $db_user, $db_pass, $db_name) {
		$con = mysql_connect($db_host, $db_user, $db_pass);

        mysql_query ("set character_set_results='utf8'");
        mysql_query ("set character_set_client='utf8'");
        mysql_query ("set collation_connection='utf8_general_ci'");

        if (!$con){
           die('Could not connect: ' . mysql_error());
        }
        mysql_select_db($db_name, $con);
        return $con;
	}

	// check session
	function check_session() {
		session_start();
		if (!isset($_SESSION['hacker'])) {
			header("location: login.php");
		}
	}

	// check user login
	function user_login($uname, $password) {
		$conn = connect_db("localhost", "root", "", "web_vuln");

		$query = "SELECT * FROM tbl_user WHERE uname='" . $uname . "' and pass='" . $password. "'";
        $result = mysql_query($query);
		$i = 0;
        if (mysql_num_rows($result) > 0) {
			While ($row = mysql_fetch_array($result)) {
				if ($i < 1) {
					$uname = $row['uname'];
					$i++;
				}
				else {
					break;
				}
			}
            mysql_close($conn);
            return $uname;
        }
        else {
            mysql_close($conn);
            return false;
        }
	}

	// add new user
	function addNewUser($uname, $password, $fullname, $birthday, $nationality, $job, $balance) {
		$conn = connect_db("localhost", "root", "", "web_vuln");
		$query2 = "SELECT * FROM tbl_user WHERE uname='". $uname."'";
		$result2 = mysql_query($query2);

		if (mysql_num_rows($result2) > 0) {
			mysql_close($conn);
			return false;
		}
		else
		{		
			$query = "INSERT INTO tbl_user (uname, pass, fullname, birthday, nationality, job, balance) VALUES ('".$uname."', '".$password."', '".$fullname."', '".$birthday."', '".$nationality."','".$job."','".$balance."')";
			mysql_query($query);
			mysql_close($conn);
			return true;
		}
	}
	
	function editUser($uname, $password, $fullname, $birthday, $nationality, $job, $balance){
		$conn = connect_db("localhost", "root", "", "web_vuln");
		$query = "UPDATE tbl_user SET pass='".$password."', fullname='".$fullname."', birthday='".$birthday."', nationality='".$nationality."', job='".$job."', balance='".$balance."' where uname='" . $uname . "'";
		mysql_query($query);
		mysql_close($conn);
	}

	// get information of user
	function getUserInfo($uname) {
		$conn = connect_db("localhost", "root", "", "web_vuln");
		$query = "SELECT * FROM tbl_user WHERE uname='".$uname."'";
		$result = mysql_query($query);
		if (mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
			$uname = $row['uname'];
			$pass = $row['pass'];
			$fullname = $row['fullname'];
			$birthday = $row['birthday'];
			$nationality = $row['nationality'];
			$job = $row['job'];
			$balance = $row['balance'];

			mysql_close($conn);
			return array($uname, $pass, $fullname, $birthday, $nationality, $job, $balance);
		}
	}

	// get information of products
	function getProduct($id) {
		$conn = connect_db("localhost", "root", "", "web_vuln");
		$query = "SELECT * FROM tbl_products WHERE category=".$id;
		$result = mysql_query($query);

		if (mysql_num_rows($result) > 0) {
			While ($row = mysql_fetch_array($result)) {
				$index[] = $row['id'];
				$name[] = $row['name'];
				$price[] = $row['price'];
				$description[] = $row['description'];
				$image[] = $row['image'];
			}
			mysql_close($conn);
			return array($name, $price, $description, $image, $index);
		}
	}
	
	//buy product
	function buyProduct($id) {
		$conn = connect_db("localhost", "root", "", "web_vuln");
		$query = "SELECT price FROM tbl_products WHERE id=".$id;
		$result = mysql_query($query);

		if (mysql_num_rows($result) > 0) {
			$row = mysql_fetch_array($result);
			$price = $row['price'];
		}
		
		$query2 = "SELECT balance FROM tbl_user WHERE uname='". $_SESSION['uname']."'";
		$result2 = mysql_query($query2);

		if (mysql_num_rows($result2) > 0) {
			$row = mysql_fetch_array($result2);
			$balance = $row['balance'];
		}
		$newbalance = $balance - $price;
		
		$query3 = "UPDATE tbl_user SET balance='".$newbalance."' where uname='" . $_SESSION['uname']. "'";
		mysql_query($query3);
		mysql_close($conn);	
	}
	