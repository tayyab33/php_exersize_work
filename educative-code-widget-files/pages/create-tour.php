<?php
include(__DIR__ . '/../bootstrap.php');
include(__DIR__ . '/functions/tour-crud.php');
$toursJsonFile = __DIR__ . '/../data/tours.json';
// if (file_exists($toursJsonFile)) {
//     // A tours "database" already exists, load all tours:
//     $jsonData = file_get_contents($toursJsonFile);

    $toursData = load_all_tours_data();
// } else {
//     // There is no tours "database" yet, start with an emtpy array
//     $toursData = [];
// }

$formErrors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Step 1: normalize the request data:
   $normalizedData = normalize_submitted_data($_POST);

    // Step 2: validate the normalized data
  $formErrors = validate_normalized_data($normalizedData);

    // Step 3: save the data if it's valid
    if (count($formErrors) === 0) {
        // Provide a unique ID for this new tour:
        $normalizedData['id'] = count($toursData) + 1;

        $toursData[] = $normalizedData;
        save_all_tours($toursData);
        $_SESSION['message'] = 'The new tour was saved successfully';
        header('Location: list-tours.php');
        exit;
    }
}

// Convert the tours data to JSON
$jsonData = json_encode($toursData, JSON_PRETTY_PRINT);
// Save the tours data to `data/tours.json`:
file_put_contents($toursJsonFile, $jsonData);

include(__DIR__ . '/../_header.php');

?>
<p><a href="list-tours.php">Go back to the list</a></p>
<h1>Create a new tour</h1>
       
<form method="post">
<div>
    <label for="destination">
        Destination:
    </label>
    <input type="text" name="destination" id="destination" value="<?php
    echo isset($normalizedData['destination'])
        ? htmlspecialchars($normalizedData['destination'], ENT_QUOTES)
        : '';
    ?>">
    <?php
        if (isset($formErrors['destination'])) {
            ?>
            <strong><?php echo $formErrors['destination']; ?></strong>
            <?php
        }
    ?>
</div>
<div>
    <label for="number_of_tickets_available">
        Number of tickets available:
    </label>
    <input type="number" name="number_of_tickets_available"
           id="number_of_tickets_available" value="<?php
        echo isset($normalizedData['number_of_tickets_available'])
            ? htmlspecialchars(
                $normalizedData['number_of_tickets_available'], 
                ENT_QUOTES
            )
            : '';
        ?>">
    <?php
    if (isset($formErrors['number_of_tickets_available'])) {
        ?>
        <strong>
        <?php echo $formErrors['number_of_tickets_available']; ?>
        </strong>
        <?php
    }
    ?>
</div>
<div>
    <label>
        <input type="checkbox" name="is_accessible" value="yes"<?php
        if (
            isset($normalizedData['is_accessible'])
            && $normalizedData['is_accessible']) {
            ?> checked<?php
        }
        ?>>
        Is accessible
    </label>
</div>
<div>
    <button type="submit">Save</button>
</div>
</form>

<?php
include(__DIR__ . '/../_footer.php');