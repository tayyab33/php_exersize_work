<?php
$title = 'Pictures';
include(__DIR__ . '/../_header.php'); ?>
<?php

$numberOfPictures = isset($_POST['number']) ? (int)$_POST['number'] : 1;

if ($numberOfPictures < 1) {
    $numberOfPictures = 1;
}

$picture = isset($_POST['picture']) ? $_POST['picture'] : 'cat.jpg';

for ($i = 1; $i <= $numberOfPictures; $i++) {
    ?>
    Cat <?php echo $i; ?>:
    <img src="<?php echo htmlspecialchars($picture, ENT_QUOTES); ?>"
         alt="Picture <?php echo $i; ?>">
    <?php
}

?>

<?php
$pictures = [
    'cat.jpg' => 'Cat',
    'apple.jpg' => 'Apple'
];

?>
    <form method="post">
        <div>
            <label for="picture">
                Select a picture:
            </label>
            <select name="picture" id="picture">
            <?php foreach ($pictures as $filename => $description) {
                ?>
                <option value="<?php
                    echo htmlspecialchars($filename, ENT_QUOTES);
                    ?>"<?php
                    if (isset($_POST['picture']) && $_POST['picture'] === $filename) {
                        ?> selected<?php
                    }
                    ?>>
                    <?php echo htmlspecialchars($description, ENT_QUOTES); ?>
                </option>
                <?php
            } ?>
            </select>
        </div>
        <div>
            <label for="number">
                Number of pictures to show:
            </label>
            <input name="number" value="<?php
                if (isset($_POST['number'])) {
                echo htmlspecialchars($_POST['number'], ENT_QUOTES); }
                ?>">    
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
<?php include(__DIR__ . '/../_footer.php'); ?>
