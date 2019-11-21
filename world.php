<?php
$host = getenv('IP');
$username = 'kayvia123';
$password = 'Harriott123!';
$dbname = 'world';



$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4",$username,$password);
//$stmt = $conn->query("SELECT * FROM countries");
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$country%'");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<form method="GET">
<input name="country">
<input type="submit" value="SEARCH">
</form>

<?php echo $_GET['country'];?>
<table>
    <tr>
        <th>Country Name</th>
        <th>Continent</th>
        <th>Independence Year</th>
        <th>Head of State</th>
    </tr>
    <tr>
        
    </tr>


<?php foreach ($results as $row): ?>
    <tr>
       <td><?= $row['name']; ?></td>
       <td><?= $row['continent']; ?></td>
       <td><?= $row['independence_year']; ?></td>
       <td><?= $row['head_of_state']; ?></td>
    </tr>

<?php endforeach; ?> 
<table> 