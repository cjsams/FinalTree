<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="tree.css">
        <title>Tree</title>
    </head>

    <body>

      <?php

      if (isset($_GET['content'])) {
        $content = $_GET['content'];
        file_put_contents('tree.txt', $content, FILE_APPEND);
    }

    if (file_exists('tree.txt')) {
        $content = file_get_contents('tree.txt');
    } else {
        $content = '(no content)';
    }

    /*$safe_content = htmlentities($content);*/
    ?>

  <form action="tree.php">

    <textarea name="content" rows="8" cols="80"></textarea>
    <input type="submit" value="Save">
    <?php

    $safe_content = htmlentities($content);
    $safe_content = "/n";

    ?>
    </form>

  <div id="content">
    <?php echo $safe_content; ?>
  </div>

<script src="tree.js"></script>
  </body>

</html>
