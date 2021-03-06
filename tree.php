<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="tree.css">
        <title>Tree</title>
    </head>

    <body>
      <h1 id=title>The Forever Growing Tree</h1>
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
        What would a tree leaf say?
      </p>
    <textarea name="content" rows="35" cols="80"></textarea>
    <input type="submit" value="Save">
    <?php

    $safe_content = htmlentities($content);

    ?>
    </form>
    <form action="tree.php">
      <p id="trunk">
          What would a tree trunk say?
        </p>
      <textarea name="content2" rows="20" cols="80"></textarea>
      <input type="submit" value="Save">
      <?php

      $safe_content2 = htmlentities($content2);

      ?>
      </form>
    <form action="tree.php">
      <p id="root">
          What would a tree root say?
        </p>
      <textarea name="content3" rows="45" cols="80"></textarea>
      <input type="submit" value="Save">
      <?php

      $safe_content3 = htmlentities($content3);

      ?>
      </form>

  <div id="leaf2">
    <?php echo $safe_content; ?>
  </div>

  <div id="trunk2">
    <?php echo $safe_content2; ?>
  </div>

  <div id="root2">
    <?php echo $safe_content3; ?>
  </div>

    <script src="tree.js"></script>

  </body>

</html>
