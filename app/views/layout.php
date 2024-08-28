<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <!-- This line includes the PHP file located at '../app/views/' followed by the value of the $viewPath variable and '.php' extension. -->
    <?php require_once '../app/views/' . $viewPath . '.php'; ?>
</body>

</html>