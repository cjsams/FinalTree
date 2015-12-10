<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="tree.css">
        <title>Tree</title>
    </head>

    <body>

      <?php

      if (isset($_GET['leaf'])) {
        $content = $_GET['leaf'];
        file_put_contents('leaf.txt', $leaf, FILE_APPEND);
    }

    if (file_exists('leaf.txt')) {
        $leaf = file_get_contents('leaf.txt');
    } else {
        $leaf = '(no content)';
    }
    ?>

  <form action="tree.php">
    <p id="leaf">
        Then send them down into the darkness
      </p>
    <textarea name="content" rows="8" cols="80"></textarea>
    <script src="tree.js"></script>
    <input type="submit" value="Save">
    <?php

    $safe_leaft = htmlentities($leaf);

    ?>
    </form>

  <div id="content">
    <?php echo $safe_leaf; ?>
  </div>


  </body>

</html>
