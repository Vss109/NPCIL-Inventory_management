<?php
include('connection.php');
$query = "SELECT * FROM tb_pd";
$result = mysqli_query($conn, $query);
?>
<html>
    <head>
        <title>Display</title>
        <style>
            body
            {
                background: #D071f9;
            }
            table
            {
                background-color: white;
            }
            </style>
            </head>
<body>
<h2 align="center"><mark> ALL  PENDRIVE  REGISTRATION  RECORDS</mark></h2>
<center><table border="3" cellspacing="7" width="100%">

  <tr>
  <th>id</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email</th>
    <th>Date</th>
    <th>In_time</th>
    <th>Out_time</th>
    <th>Phone_number</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
  $sn=1;
  while($data = mysqli_fetch_assoc($result)) {
 ?>
 <tr>
   <td><?php echo $data['id']; ?> </td>
   <td><?php echo $data['First_name']; ?> </td>
   <td><?php echo $data['Last_name']; ?> </td>
   <td><?php echo $data['Email']; ?> </td>
   <td><?php echo $data['Date']; ?> </td>
   <td><?php echo $data['In_time']; ?> </td>
   <td><?php echo $data['Out_time']; ?> </td>
   <td><?php echo $data['Phone_number']; ?> </td>
    <tr>
 <?php
  $sn++;}} else { ?>
    <tr>
     <td colspan="8">No data found</td>
    </tr>
 <?php } ?>
  </table>
  </center><br>
  <center><form action="./Dashboard.html" class="hide-submit" method="get">
                    <label>
                        <button id="Next-button" type="submit" style="color: gold;">
                            <a href="./Dashboard.html">BACK</a>
                        </button></center>
    
  </form>
  </body>
  </html>
