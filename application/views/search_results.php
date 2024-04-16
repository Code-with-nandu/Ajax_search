<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>
    <?php if (!empty($results)) { ?>
        <ul>
            <?php foreach ($results as $result) { ?>
                <li>
                    Name: <?php echo $result->name; ?><br>
                    Email: <?php echo $result->email; ?><br>
                    Phone: <?php echo $result->phone_number; ?>
                </li>
            <?php } ?>
        </ul>
    <?php } else { ?>
        <p>No results found.</p>
    <?php } ?>
</body>
</html>
