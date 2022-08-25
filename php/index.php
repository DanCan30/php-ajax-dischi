<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link rel="stylesheet" href="../assets/stiles/style.css">
</head>
<body>

    <?php include "../db.php"?>

    <header>
        <img src="../assets/img/Spotify-logo.png" alt="Spotify Logo" id="logo">

        <form action="index.php" method="get">

            <select name="genre" id="">
                <option value="All">All</option>
                <option value="Rock">Rock</option>
                <option value="Pop">Pop</option>
                <option value="Jazz">Jazz</option>
                <option value="Metal">Metal</option>
            </select>

            <input type="submit" value="Search">

        </form>

    </header>

    <main class="container">

        <?php foreach($disks as $disk) {

            if($_GET["genre"] === $disk["genre"] || $_GET["genre"] === "All" ) {
        ?>

        <div class="disk">

            <div class="img-container">
                <?php echo "<img src='" . $disk['poster'] . "' alt='" . $disk["title"] . "'>" ?>

                <span>
                    <?php echo $disk["genre"]?>
                </span>
            </div>

            <h2>
                <?php echo $disk["title"]?>
            </h2>
            <p>
                <?php echo $disk["author"]?>
            </p>
            <p>
                <?php echo $disk["year"]?>
            </p>
        </div>

        <?php }} ?>
        
    </main>

</body>
</html>
