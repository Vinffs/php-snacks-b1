<?php
$matches = [
  [
    'team_home' => 'Chicago Bulls',
    'team_away' => 'Atlanta Hawks',
  ],
  [
    'team_home' => 'Boston Celtics',
    'team_away' => 'Brooklyn Nets',
  ],
  [
    'team_home' => 'New York Knicks',
    'team_away' => 'Detroit Pistons',
  ],
  [
    'team_home' => 'Orlando Magic',
    'team_away' => 'Miami Heat',
  ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <!-- meta tags -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <!-- Document Title -->
  <title>NBA 2023 MATCHES</title>
</head>

<body class="bg-info-subtle vh-100">
  <div class="container text-center py-5">
    <header class="my-4">
      <h1>NBA 2023</h1>
    </header>

    <main class="bg-secondary-subtle h-auto">

      <!-- get Random score points for each team -->
      <?php foreach ($matches as $match) {
        $score_home = rand(1, 150);
        $score_away = rand(1, 150);
        ?>

        <div class="py-4">
          <!-- if condition, names + score points are yellow -->
          <?php
          if ($score_home === $score_away) { ?>
            <span class='text-warning'>
              <?php echo $match['team_home'] ?>
            </span>
            -
            <span class='text-warning'>
              <?php echo $match['team_away'] ?>
            </span>
            |
            <span class='text-warning'>
              <?php echo $score_home ?>
            </span>
            -
            <span class='text-warning'>
              <?php echo $score_away ?>
            </span>
            <?php

          } else { ?>

            <!-- based on score, names + score points are green or red -->

            <span class="<?php echo ($score_home > $score_away) ? 'text-success' : 'text-danger' ?>">
              <?php echo $match['team_home'] ?>
            </span>
            -
            <span class="<?php echo ($score_away > $score_home) ? 'text-success' : 'text-danger' ?>">
              <?php echo $match['team_away'] ?>
            </span>
            |

            <span class="<?php echo ($score_home > $score_away) ? 'text-success' : 'text-danger' ?>">
              <?php echo $score_home ?>
            </span>
            -
            <span class="<?php echo ($score_away > $score_home) ? 'text-success' : 'text-danger' ?>">
              <?php echo $score_away ?>
            </span>
          <?php } ?>

        </div>
      <?php } ?>

    </main>

  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>