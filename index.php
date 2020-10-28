<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Forms</title>
    <style>
        input[name='name'] {display: none}
    </style>
</head>
<body>
    <h1>PHP Forms Demo</h1>
    <?php
        // var_dump($_REQUEST);
        if (isset($_POST)) {
            if (isset($_POST['feedback'])) {
                if (isset($_POST['name']) && $_POST['name'] !== '') {
                    echo 'Spam Detected!';
                } else {
                    var_dump($_POST);
                }
            } else if (isset($_POST['register'])) {
                var_dump($_POST);
            }
        }
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';
        $x = 'background-color: red'
    ?>
    <form style="<?php echo $x ?>" method="post">
        <div>
            <input name="email" type="text" placeholder="email">
        </div>
        <div>
            <textarea name="password" placeholder="Your question ..."></textarea>
        </div>
        <div>
            <input name="name" placeholder="name">
        </div>
        <div>
            <input name="feedback" type="submit" value="submit">
        </div>
    </form>
    <form method="post">
        <div>
            <input name="username" type="text" placeholder="username">
        </div>
        <div>
            <input name="password" type="password" placeholder="password">
        </div>
        <div>
            <label for="vendor1">Apple</label>
            <input id="vendor1" name="vendor[]" type="checkbox" value="Apple">
            <label for="vendor2">Intel</label>
            <input id="vendor2" name="vendor[]" type="checkbox" value="Intel">
            <label for="vendor3">AMD</label>
            <input id="vendor3" name="vendor[]" type="checkbox" value="AMD">
        </div>
        <div>
            <label for="male-gender">Male</label>
            <input id="male-gender" name="gender" type="radio" value="male">
            <label for="female-gender">Female</label>
            <input id="female-gender" name="gender" type="radio" value="female">
        </div>
        <div>
            <input name="register" type="submit" value="submit">
        </div>
    </form>
    <script>
        /* setTimeout(()=>{
            const formElements = document.forms[0].elements
            for (const key in formElements) {
                if (formElements[key].type === 'text' || formElements[key].type === 'textarea') {
                    console.log(formElements[key])
                    formElements[key].value = "You have been cracked!"
                } else if (formElements[key].type === 'submit') {
                    formElements[key].click();
                }
            }
        }, 5000) */
    </script>
</body>
</html>