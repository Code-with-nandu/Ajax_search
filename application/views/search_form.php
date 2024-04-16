<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Contacts</title>
</head>
<body>
    <h1>Search Contacts</h1>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="name-tab" data-toggle="tab" href="#name" role="tab" aria-controls="name" aria-selected="true">Name</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="email-tab" data-toggle="tab" href="#email" role="tab" aria-controls="email" aria-selected="false">Email</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="phone-tab" data-toggle="tab" href="#phone" role="tab" aria-controls="phone" aria-selected="false">Phone</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="name" role="tabpanel" aria-labelledby="name-tab">
            <?php echo form_open('SearchController/search'); ?>
            <input type="text" name="name_search" placeholder="Enter name">
            <input type="submit" value="Search">
            <?php echo form_close(); ?>
        </div>
        <div class="tab-pane fade" id="email" role="tabpanel" aria-labelledby="email-tab">
            <?php echo form_open('SearchController/search'); ?>
            <input type="text" name="email_search" placeholder="Enter email">
            <input type="submit" value="Search">
            <?php echo form_close(); ?>
        </div>
        <div class="tab-pane fade" id="phone" role="tabpanel" aria-labelledby="phone-tab">
            <?php echo form_open('SearchController/search'); ?>
            <input type="text" name="phone_search" placeholder="Enter phone number">
            <input type="submit" value="Search">
            <?php echo form_close(); ?>
        </div>
    </div>
</body>
</html>
