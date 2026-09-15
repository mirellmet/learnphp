<?php

$title = 'World';
$posts = [
  [
    'title' => 'Some world title 1',
    'content' => 'Some world content 1',
    'date' => 'June 26, 2008',
    'author' => 'Mirjam'
  ],
  [
    'title' => 'Some world title 2',
    'content' => 'Some world content 2',
    'date' => 'January 5, 2007',
    'author' => 'Anelle'
  ],
  [
    'title' => 'Some world title 3',
    'content' => 'Some world content 3',
    'date' => 'September 20, 2007',
    'author' => 'Karmen'
  ],
  [
    'title' => 'Some world title 4',
    'content' => 'Some world content 4',
    'date' => 'December 28, 2012',
    'author' => 'Rebecca'
  ],
];

?>

<?php include __DIR__ . '/partials/header.php'; ?>

<main class="container">
  <?php include __DIR__ . '/partials/hero.php'; ?>
  <?php include __DIR__ . '/partials/featured.php'; ?>

  <div class="row g-5">
    <div class="col-md-8">
      <?php include __DIR__ . '/partials/posts.php'; ?>
    </div>
    <div class="col-md-4">
      <?php include __DIR__ . '/partials/sidebar.php'; ?>
    </div>
  </div>
</main>
<?php include __DIR__ . '/partials/footer.php'; ?>