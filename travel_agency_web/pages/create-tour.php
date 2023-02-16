<?php 
 include (__DIR__ . '/../bootstrap.php');
 $toursJsonFile = __DIR__ . '/../data/tours.json';
 if(file_exists($toursJsonFile)){
 	// a tours database already exist
 	$jsonData = file_get_contents($toursJsonFile);
 	$toursData  = json_decode($jsonData, true);
 }else{
 	// there is not tour data
 	$toursData = [];
 }
 // add tour data
  // $toursData[] = [
  //     'destination' => 'Berlin',
  //   'number_of_tickets_available' => 10,
  //   'is_accessible' => true
  // ];
 $formErrors = [];
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
   	 $toursData = [
          'destination' =>
          isset($_POST['destination']) ? (string)$_POST['destination'] : '',
          'number_of_tickets_available' =>   isset($_POST['number_of_tickets_available'])
               ? (int)$_POST['number_of_tickets_available']
               : 0,
                'is_accessible' => 
            isset($_POST['is_accessible'])
               ? true
               : false

   	 ];
   }
   if($toursData['destination'] === ''){
   	$formErrors['destination'] = 'Please provide a destination';
   }
   if($toursData['number_of_tickets_available'] < 1){
   	$formErrors['number_of_tickets_available'] = 'Number of tickets available should be at least 1';
   }
  // convert into json
   if(count($formErrors) === 0){
    $jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
  // save the tours data to tours.json
    file_put_contents($toursJsonFile, $jsonData);
    $_SESSION['message'] = 'the new tour was saved successfully';
    header('Location: create-tour');
    exit;
}
   include(__DIR__ . '/../_header.php');
 ?>
 <h1>Create a new tour</h1>
<form method="post">
    <div>
        <label for="destination">
            Destination:
        </label>
        <input type="text" name="destination" id="destination">
         <?php
        if (isset($formErrors['destination'])) {
            ?>
            <strong><?php echo htmlspecialchars($formErrors['destination'], ENT_QUOTES); ?></strong>
            <?php
        }
    ?>
    </div>
    <div>
        <label for="number_of_tickets_available">
            Number of tickets available:
        </label>
        <input type="number" name="number_of_tickets_available"
            id="number_of_tickets_available">

    </div>
     <?php
    if (isset($formErrors['number_of_tickets_available'])) {
        ?>
        <strong>
            <?php echo $formErrors['number_of_tickets_available']; ?>
        </strong>
        <?php
    }
    ?>
    <div>
        <label>
            <input type="checkbox" name="is_accessible" value="yes">
            Is accessible
        </label>
    </div>
    <div>
        <button type="submit">Save</button>
    </div>
</form>
<?php

include(__DIR__ . '/../_footer.php');
?>