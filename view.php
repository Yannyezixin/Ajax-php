<html>
<head>
    <title>Simple Chat | Yann</title>
    <script src="js/jquery.js"></script>
    <script src="js/curd.js"></script>
</head>
<body>
    <div id="messages">
        <?php foreach ($data as $value): ?>
        <div class="row<?php echo $value['id']; ?>">
            <input class="name" type="text" value="<?php echo $value['name']; ?>" name="name" />
            <input class="phone" type="text" value="<?php echo $value['phone']; ?>" name="phone" />
            <input class="address" type="text" value="<?php echo $value['address']; ?>" name="address" />
            <a class="update" href="#" rel="<?php echo $value['id']; ?>">Update</a>
            <a class="delete" href="#" rel="<?php echo $value['id']; ?>">Delete</a>
        </div>
        <?php endforeach; ?>
    <form id="form">
        <label for="name">Name:</label>
        <input id="name" type="text" name="name" /><br />
        <label for="phone">Phone:</label>
        <input id="phone" type="text" name="phone" /><br />
        <label for="address">Address:</label>
        <input id="address" type="text" name="address" /><br />
        <input type="submit" value="Send">
    </form>
    </div>
</body>
</html>
