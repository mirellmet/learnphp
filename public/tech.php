<?php 

$title = 'Tech';
$posts = [
  ['title' => 'Some tech title 1',
  'content' => 'Some tech content 1',
  'date' => 'September 17, 2006',
  'author' => 'Mirell',
  ],

    ['title' => 'Some tech title 2',
  'content' => 'Some tech content 2',
  'date' => 'April 1, 2001',
  'author' => 'Jass',
  ],

    ['title' => 'Some tech title 3',
  'content' => 'Some tech content 3',
  'date' => 'January 3, 2009',
  'author' => 'Kaur',
  ],

    ['title' => 'Some tech title 4',
  'content' => 'Some tech content 4',
  'date' => 'August 29, 2017',
  'author' => 'Biku',
  ],
]

?>

<?php include __DIR__ . '/partials/header.php'; ?>

    <main class="container">
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