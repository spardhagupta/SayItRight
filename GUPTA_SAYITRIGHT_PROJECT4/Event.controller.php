<?php

	session_start();

$host = "spardhagupta.uta.cloud";
$dbusername = "spardhag_gupta";
$dbpassword = "spardha2222";
$dbname = "spardhag_sayitright";

	$conn = new PDO('mysql:host='.$host.';dbname='.$dbname, $dbusername, $dbpassword);
	if(!$conn) {
	  die("Connection failed");
	}
  else{

	// create new event, for events user
	// if (isset($_POST['event_add_submit'])) {
	// 	$eventName = $_POST['eventName'];
	// 	$eventDate = $_POST['eventDate'];
	// 	$eventVenue = $_POST['eventVenue'];
	// 	$eventDescription = $_POST['eventDescription'];
  //
	// 	// check if logged in
	// 	$createdBy = $_SESSION['id'];
	// 	if ($createdBy == null) {
	// 		header("Location: ../login.php?error=auth");
	// 		exit();
	// 	}
  //
	// 	// check role
	// 	$role = $_SESSION['role'];
	// 	if ($role != 'event') {
	// 		header("Location: ../list_of_events.php?error=not_allowed");
	// 		exit();
	// 	}
	// 	// check if empty
	// 	if (empty($eventName) || empty($eventDate) || empty($eventVenue) || empty($eventDescription)) {
	// 		header("Location: ../event.php?error=empty");
	// 		exit();
	// 	}
  //
	// 	// create event
	// 	$timestamp = strtotime($eventDate);
	// 	$query = "INSERT INTO events(name, createdBy, description, eventDate, venue) VALUES (:name, :createdBy, :description, :eventDate, :venue)";
	// 	$stmt = $db->prepare($query);
	// 	$res = $stmt->execute(array(':name' => $eventName, ':createdBy' => $createdBy, ':description' => $eventDescription, ':eventDate' => date('Y-m-d H:i:s', $timestamp), ':venue' => $eventVenue));
  //
	// 	header("Location: ../list_of_my_events.php?signup=success");
	// 	exit();
	// }

	// add to 'my events' for individual user
	if (isset($_POST['Event_confirm'])) {
		$eventId = $_POST['eventId'];

		// check if logged in
		$createdBy = $_SESSION['roleId'];
		if ($createdBy == null) {
			header("Location: login.php?error=auth");
			exit();
		}

		// check role
		$role = $_SESSION['role'];
		if ($role != 'individual') {
			header("Location: List_of_events.php?error=forbidden");
			exit();
		}
		$userId = $_SESSION['id'];
		// print_r($userId);
		// echo "<br>";
		// print_r($eventId);

		// check if empty
		if (empty($createdBy)) {
			header("Location: List_of_events.php?error=empty");
			exit();
		}

		// check if already in my events
		$query = "SELECT * FROM userevents where userId = :userId and eventId = :eventId;";
		$stmt = $conn->prepare($query);
		$stmt->execute(array(':userId' => $userId, ':eventId' => $eventId));
		if ($stmt->rowCount(PDO::FETCH_ASSOC) > 0) {
			header("Location: ListOfMyEvents.php?error=in_list");
			exit();
		}

		// add to table
		$query = "INSERT INTO userevents(userId, eventId) VALUES (:userId, :eventId)";
		$stmt = $conn->prepare($query);
		$res = $stmt->execute(array(':userId' => $userId, ':eventId' => $eventId));
		header("Location: ListOfMyEvents.php?confirm=success");
		exit();
	}

	// remove from 'my events' for individual user
	else if (isset($_POST['Event_Remove'])) {
		$eventId = $_POST['eventId'];

		// check if logged in
		$createdBy = $_SESSION['roleId'];
		if ($createdBy == null) {
			header("Location: login.php?error=auth");
			exit();
		}

		// check role
		$role = $_SESSION['role'];
		if ($role != 'individual') {
			header("Location: List_of_events.php?error=forbidden");
			exit();
		}
		$userId = $_SESSION['id'];

		// check if empty
		if (empty($createdBy)) {
			header("Location: List_of_events.php?error=empty");
			exit();
		}
		// print_r($userId);
		// echo "<br>";
		// print_r($eventId);

		// check if already in my events
		// $query = "SELECT * FROM userevents where userId = :userId and eventId = :eventId;";
		// $stmt = $conn->prepare($query);
		// $stmt->execute(array(':userId' => $userId, ':eventId' => $eventId));
		// if ($stmt->rowCount(PDO::FETCH_ASSOC) == 0) {
		// 	header("Location: ListOfMyEvents.php?error=not_found");
		// 	exit();
		// }

		// delete from table
		$query = "DELETE FROM userevents where userId = :userId and eventId = :eventId;";
		$stmt = $conn->prepare($query);
		$res = $stmt->execute(array(':userId' => $userId, ':eventId' => $eventId));
		// header("Location: ListOfMyEvents.php?confirm=success");
		exit();
	}

	else if (isset($_POST['Event_Delete'])) {
		$eventId = $_POST['eventId'];

		// check if logged in
		$createdBy = $_SESSION['roleId'];
		if ($createdBy == null) {
			header("Location: login.php?error=auth");
			exit();
		}

		// check role
		// $role = $_SESSION['role'];
		// if ($role = 'individual') {
		// 	header("Location: CreatedEvent.php?error=forbidden");
		// 	exit();
		// }
		$userId = $_SESSION['id'];

		// check if empty
		if (empty($createdBy)) {
			header("Location: List_of_events.php?error=empty");
			exit();
		}
		// print_r($userId);
		// echo "<br>";
		// print_r($eventId);

		// delete from table
		$query = "DELETE FROM events where createdBy = :userId and id = :eventId;";
		$stmt = $conn->prepare($query);
		$res = $stmt->execute(array(':userId' => $userId, ':eventId' => $eventId));
		header("Location: ListOfMyEvents.php?confirm=success");
		exit();
	}

	else if (isset($_POST['Event_Edit'])) {
		header("Location: Event_edit.php");
	}

	else if (isset($_POST['Submit_Event_Edit'])) {
		$eventId = $_POST['eventId'];
		$name = filter_input(INPUT_POST, 'name');
		$venue = filter_input(INPUT_POST, 'venue');
		$date = filter_input(INPUT_POST, 'date');
		$time = filter_input(INPUT_POST, 'time');
		$description = filter_input(INPUT_POST, 'description');

		$query = "UPDATE events set name = :name, description = :description, date = :date, time = :time, venue = :venue where events.id = :eventId";
	  $stmt = $conn->prepare($query);
	  $res = $stmt->execute(array(':name' => $name, ':description' => $description, ':date' => $date, ':time' => $time, ':venue' => $venue, ':eventId' => $eventId));
		header("Location: CreatedEvent.php?confirm=success");
		exit();
	}
}
