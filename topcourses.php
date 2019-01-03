<?php 

// connect to db 

$db //

$query="select * from <name of the table> join <table containing the popularity etc.data>  
// query string possibility
//SELECT TOP(5) ProductID, SUM(Quantity) AS TotalQuantity
//FROM order_items
//GROUP BY ProductID
// ORDER BY SUM(Quantity) DESC LIMIT 10;


if ($result = $db->query($query)) {

    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
	// put the card html here
	echo "<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $row["image_path"]?>" alt="Card image cap"> 
  <div class="card-body">
    <h5 class="card-title"><?php echo $row["course_name"]?></h5>"
// placeholder for rating
if(intval($row["price"]) > 0) {
	echo "<h6 class="card-title">$row["price"]</h6>";
	echo "<a href="#" class="card-link">Purchase</a>"; // this could be a button check that		

}
else{
	echo "<h6 class="card-title">Free</h6>";
	echo "<a href="#" class="card-link">Start Learning</a>"; // this could be a button check that		
}
echo "</div></div>";
        
    }

    /* free result set */
    $result->free();
}

/* close connection */
$db->close();





?>