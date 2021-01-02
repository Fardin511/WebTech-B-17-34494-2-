<?php 
session_start();
// $u1 = $_SESSION['user']['uid'];
$search = $_GET['key'];

$con = mysqli_connect("localhost", "root", "","cred");
	$sql = "select * from flight where Source like '%{$search}%' or Destination like '%{$search}%'" ;
	$result = mysqli_query($con, $sql);
	$count = mysqli_num_rows($result);

	 if($count > 0){
        $data = "<table>
        <tr>
        <th>Flight ID</th>
        <th>From</th>
        <th>To</th>
        <th>Date</th>
        <th>Departure</th>
        <th>Price</th>
        </tr>";

      while($row = mysqli_fetch_assoc($result)){
        $data .= "<tr>
                <td>{$row['Flight ID']}</td>
                <td>{$row['Source']}</td>
                <td>{$row['Destination']}</td>
                <td>{$row['Date']}</td>
                <td>{$row['Departure']}</td>
                <td>{$row['Price']}</td>
              
                
        </tr>";
    }

    $data .= "</table>";
    echo $data;

}else{
    echo "No result found!";
}
?>
