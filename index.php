<?php
	require './action/loop.php';
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP To do List App</title>

    <!-- Google fonts  -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">

  </head>
  <body>


<main>
  <section id="todo" class="container">

    <div class="app">
      <h1>to do</h1>

      <?php if(!empty($items)) : ?>

        <ul id="list">
        <?php foreach($items as $item) : ?>
          <li>
            <span class="item<?php echo $item['done'] ? ' done' : ''?>"><?php echo $item['name']?></span>

            <?php if(!$item['done']) : ?>
              <a href="./action/mark.php?as=done&item=<?php echo $item['id'] ?>" class="btn">mark as done</a>
              <?php else : ?>
              <a data-id="<?php echo $item['id'] ?>" href="./action/delete.php?as=delete&item=<?php echo $item['id'] ?>" class="btn">Delete</a>
            <?php endif?>

          </li>
        <?php endforeach; ?>

        </ul>
        <?php else : ?>
        <p>You have No items to show</p>
      <?php endif;?>

      <form action="./action/add.php" method="post">
        <input type="text" name="name" id="items" placeholder="Type Item Here" autocomplete="off" required>
        <button type="submit">Add</button>
      </form>

    </div>
  </section>
	<footer>
		<p>Copyright &copy; Hasan Misbah</p>
	</footer>
</main>

<script src="./scripts/jquery.min.js"></script>
<script src="scripts/main.js"></script>


  </body>
</html>
