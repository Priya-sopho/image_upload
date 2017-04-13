<!--Can segragate header and footer-->
<!DOCTYPE html>
<html>
<head>
 <title>Apology</title>
 <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container">
<h1 class="lead text-danger">Sorry!</h1>
<p class="text-danger"><?= htmlspecialchars($message) ?></p>

<a href="javascript:history.go(-1);">Go Back</a>
</div>
</body>
</html>