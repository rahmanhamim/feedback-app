<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);
$feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<h2>Past Feedback</h2>

<?php if (empty($feedback)) : ?>
  <p class="lead mt-3">There is no feedback</p>

<?php endif;  ?>

<?php foreach ($feedback as $item) : ?>

  <div class="card my-3">
    <div class="card-body">
      <h5 class="card-title"><?php echo $item['name']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo $item['email']; ?></h6>
      <p class="card-text"><?php echo $item['body']; ?></p>
    </div>
  </div>

<?php endforeach; ?>


<?php include 'inc/footer.php'; ?>