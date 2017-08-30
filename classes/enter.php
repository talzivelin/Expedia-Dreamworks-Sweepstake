<?php
require 'database.php';

$peabody = new Peabody();
$errors = array();
$form = array();
$form['field23792660Y'] = '';
$form['field23792660M'] = '';
$form['field23792660D'] = '';
$form['field23792660Y'] = '';
$form['field23680485']= '';
$form['field23680503']= '';
$form['field23680411']= '';
$form['field23680448']= '';
$form['field23680476']= array();

$form = array_merge( $form , $_POST );
/**
* 
*/
class Peabody {
	var $date = '';
	var $begin_date = '';
	var $end_date = '';
	var $db;
	var $errors = array();
	var $success = false;
	
	function __construct(){
		$tz_object = new DateTimeZone("America/Los_Angeles"); 
		$datetime = new DateTime(); 
		$datetime->setTimezone($tz_object); 

		$this->date = $datetime->format('U');

		$datetime->setTime('00', '00', '00'); 
		$this->begin_date = $datetime->format('U');
		
		$datetime->setTime('24', '00', '00'); 
		$this->end_date = $datetime->format('U');

		return $this->init();
	}
	
	function init(){

		if (isset($_POST['form'])) {
			$insert = false;
			if ($_SERVER['HTTP_HOST'] == '9126.expedia.local:8888') {
				$this->db = new mySqldb('root', 'root', 'localhost', 'peabody_sweeps');
			} else {
				$this->db = new mySqldb('peabody_sweeps', 'wZ6QNO5oZ', 'localhost', 'peabody_sweeps');
			}
			// $this->db = new mySqldb('root', 'root', 'localhost', 'peabody_sweeps');
			$this->validate($_POST);
			if (count($this->errors)) {
				return $this->success;
			} else {
				
				$vars = array();
				$vars[] = filter_var($_POST['field23680411'],FILTER_SANITIZE_EMAIL);
				$vars[] = filter_var($_POST['field23680485'],FILTER_SANITIZE_STRING);
				$vars[] = filter_var($_POST['field23680503'],FILTER_SANITIZE_STRING);
				$vars[] = filter_var($_POST['field23680448'],FILTER_SANITIZE_STRING);
				$vars[] = filter_var($_POST['field23792660D'],FILTER_SANITIZE_NUMBER_INT) . '-' . filter_var($_POST['field23792660M']) . '-' . filter_var($_POST['field23792660Y'],FILTER_SANITIZE_NUMBER_INT);
				$vars[] = $this->date;
				
				if (isset($_POST['field23680476'])) {
					$vars[] = 1;
				} else {
					$vars[] = 0;
				}
				
				$sql = "INSERT INTO entries (email, first_name, last_name, phone, birthdate, Time, subscribe) VALUES (?, ?, ?, ?, ?, ?, ?);";

				$insert = $this->db->insertRow($sql, $vars);

				if ($insert) {
					$this->success = true;
					header('Location: http://viewfinder.expedia.com/Peabodysherman/thankyou.html');
				}
			}
		}
		return $this->success;
	}
	
	function validate($formdata){
		$errors = array();
		$required = array(
			"field23680485"=>"Please enter your first name.",
			"field23680503"=>"Please enter your last name.",
			"field23680411"=>"Please enter your email address.",
			"field23680448"=>"Please enter your phone number.",
			"field23792660M"=>"Please select your birthday month.",
			"field23792660D"=>"Please select your birthday day.",
			"field23792660Y"=>"Please select your birthday year."
		);

	
		foreach ($required as $key => $message) {
			if (!array_key_exists($key, $formdata) || $formdata[$key] == '') {
				$errors[$key] = $message;
			}
		}
		
		$options['options'] = array('regexp' => '/^\(\d{3}\) \d{3}-\d{4}$/');

		if (!array_key_exists('field23680448', $errors) && strlen($formdata['field23680448']) < 7 || strlen($formdata['field23680448']) > 20 ) {
			$errors['field23680448'] = "Please verify your phone number.";
		}
		if (!array_key_exists('field23680411', $errors)) {
			$existing_today = false;
			// email was set, now we validate
			if (!filter_var($formdata['field23680411'], FILTER_VALIDATE_EMAIL)) {
				$errors['field23680411'] = 'This email address is invalid.';
			} else {
				$email = $formdata['field23680411'];
				$begin = $this->begin_date;
				$end = $this->end_date;
				
				$where = "SELECT * FROM entries WHERE Time > $begin AND Time < $end AND email =?";

				$existing_today = $this->db->getRows($where, array($email));

				if (is_array($existing_today) && count($existing_today)) {
					$errors['existing_today'] = "You've already submitted once today.";
				}
			}
		}
		$this->errors = $errors;
		return $this->errors;
	}
}

