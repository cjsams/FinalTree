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

    if (isset($_GET['content2'])) {
      $content2 = $_GET['content2'];
      file_put_contents('trunk.txt', $content2, FILE_APPEND);
    }
    if (file_exists('trunk.txt')) {
        $content2 = file_get_contents('trunk.txt');
    } else {
        $content2 = '(no content)';
    }

    if (isset($_GET['content3'])) {
      $content3 = $_GET['content3'];
      file_put_contents('root.txt', $content3, FILE_APPEND);
    }
    if (file_exists('root.txt')) {
        $content3 = file_get_contents('root.txt');
    } else {
        $content3 = '(no content)';
    }
    ?>

  <form action="tree.php">
    <p id="leaf">
        Enter Leaf Content
      </p>
    <textarea name="content" rows="8" cols="80"></textarea>
    <script src="tree.js"></script>
    <input type="submit" value="Save">
    <?php

    $safe_content = htmlentities($content);

    ?>
    </form>
    <form action="tree.php">
      <p id="trunk">
          Enter Trunk Content
        </p>
      <textarea name="content2" rows="8" cols="80"></textarea>
      <input type="submit" value="Save">
      <?php

      $safe_content2 = htmlentities($content2);

      ?>
      </form>
    <form action="tree.php">
      <p id="root">
          Enter Root Content
        </p>
      <textarea name="content3" rows="8" cols="80"></textarea>
      <input type="submit" value="Save">
      <?php

      $safe_content3 = htmlentities($content3);

      ?>
      </form>

  <div id="leaf">
    <?php echo $safe_content; ?>
  </div>

  <div id="trunk">
    <?php echo $safe_content2; ?>
  </div>

  <div id="root">
    <?php echo $safe_content3; ?>
  </div>



  </body>

</html>
