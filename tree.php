<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="tree.css">
        <title>Tree</title>
    </head>

    <body>

      <?php

      if (isset($_GET['content'], $_GET['content2'], $_GET['content3'])) {
        $content = $_GET['content'];
        $content2 = $_GET['content2'];
        $content3 = $_GET['content3'];
        file_put_contents('tree.txt', $content, FILE_APPEND);
        file_put_contents('trunk.txt', $content2, FILE_APPEND);
        file_put_contents('root.txt', $content3, FILE_APPEND);
    }

    if (file_exists('tree.txt')) {
        $content = file_get_contents('tree.txt');
    } else {
        $content = '(no content)';
    }
    if (file_exists('trunk.txt')) {
        $content2 = file_get_contents('trunk.txt');
    } else {
        $content2 = '(no content)';
    }
    if (file_exists('root.txt')) {
        $content3 = file_get_contents('root.txt');
    } else {
        $content3 = '(no content)';
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

    $safe_content = htmlentities($content);

    ?>
    </form>

  <div id="content">
    <?php echo $safe_content; ?>
  </div>

  <form action="tree.php">
    <p id="trunk">
        Hard
      </p>
    <textarea name="content2" rows="8" cols="80"></textarea>
    <script src="tree.js"></script>
    <input type="submit" value="Save">
    <?php

    $safe_content2 = htmlentities($content2);

    ?>
    </form>

  <div id="content">
    <?php echo $safe_content2; ?>
  </div>


  </body>

</html>
