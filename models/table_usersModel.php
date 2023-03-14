<?php

// Make a request to the Reqres API to get the list of users
$url = "https://reqres.in/api/users";
$response = file_get_contents($url); //get data from other online servers
$data = json_decode($response, true); //convert encoded data into JSON so it can be manipulated

// Format the data into an HTML table
$table = "<table>";
$table .= "<tr><th>ID</th><th>Full Name</th><th>Email</th><th>Image</th></tr>";


//foreach loop to loop through users and format the data into an HTML table.
foreach ($data["data"] as $user) {
  $table .= "<tr>";
  $table .= "<td>" . $user["id"] . "</td>";
  $table .= "<td>" . $user["first_name"] . " " . $user["last_name"] . "</td>";
  $table .= "<td>" . $user["email"] . "</td>";
  $table .= "<td><img src='" . $user["avatar"] . "'></td>";
  $table .= "</tr>";
}

$table .= "</table>";

// Show the table on the page
echo $table;

?>