<?php

$pragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque mollitia fugiat repellendus ea ipsa architecto
sapiente, officiis delectus ducimus quis veniam accusantium maxime suscipit quos corporis doloribus nisi. Maiores
facilis nulla aspernatur, error in eveniet consequuntur nostrum corrupti ea, amet iste laborum hic reiciendis
provident odit rem totam consequatur nam libero ipsum! Fugiat non modi asperiores saepe sapiente, neque accusamus
dignissimos nobis fugit, quas et iure ipsa sit praesentium ducimus assumenda placeat. Reiciendis quidem nisi amet
quasi nulla! Similique nihil assumenda natus quisquam modi soluta nam iste maiores? Illum consequuntur nobis
doloremque hic eligendi, accusantium rerum voluptatibus assumenda doloribus amet possimus eveniet, a, eos
perferendis iste fuga recusandae deleniti? Magnam officiis quam similique quas eius omnis animi qui labore, minima
facilis molestiae voluptas cupiditate assumenda modi. Voluptas expedita soluta a sint exercitationem, similique
laborum temporibus vitae dolorem asperiores eligendi quasi praesentium ipsum nisi provident eos ullam nesciunt ab.
Voluptas omnis adipisci provident beatae, nulla consequatur temporibus ab obcaecati corporis maxime tenetur.
Delectus perferendis quasi accusantium similique recusandae error optio, facilis dignissimos praesentium ipsum
nobis voluptate vero ducimus at eos asperiores soluta. Accusamus corporis corrupti adipisci minima doloremque
necessitatibus delectus inventore ab eaque? Porro, hic a aperiam maxime optio dignissimos est dolores reiciendis
officia inventore autem iste, voluptate, omnis soluta repudiandae. Incidunt laudantium sit facilis earum vero quis
reiciendis veniam mollitia! Fugit provident sed temporibus debitis quo impedit, accusamus aliquam velit ab
explicabo molestias, reiciendis ullam, optio vero veniam voluptas sit. Commodi, beatae laboriosam esse tempora
dolorem accusamus quasi vero laborum repellendus quibusdam laudantium asperiores ea itaque facilis deleniti
tempore doloribus vitae magni ab optio vel. Magni aspernatur atque sed recusandae? Ipsum vel iusto, dignissimos
minus facilis facere recusandae nam ipsa aspernatur ullam? Nihil suscipit minus tempora dicta quibusdam neque
saepe similique distinctio accusantium, numquam aut rem, magnam id autem deserunt quod quasi velit temporibus
laudantium dolore obcaecati ad. Soluta vel aliquam recusandae assumenda, rem aliquid magnam hic, rerum deleniti
ipsa laudantium qui! Dolores odit voluptatem nam exercitationem facere pariatur laudantium tenetur id. Iusto
veritatis reiciendis corrupti porro sapiente autem, aliquid, atque magni, obcaecati natus consequuntur laborum
possimus dolores mollitia nisi sunt vitae? Autem minus voluptates voluptatum voluptatibus magni sunt impedit
consequatur assumenda qui cumque illum amet aliquam, facilis necessitatibus corrupti illo cum, nulla deserunt
delectus iure maiores! Quis corrupti provident animi consequuntur ex dolor at, quod repellat tempora expedita
quisquam! Laborum autem nemo cum, optio quia aspernatur fugiat quae, consectetur, numquam cupiditate labore vero.
Facilis praesentium enim dolore ex quis, possimus iste culpa voluptas et soluta velit aliquam aut quae quia
aspernatur sed nisi nam voluptatibus. Cumque pariatur veritatis fuga qui, quibusdam voluptatibus laudantium, animi
dolorum in, blanditiis quia soluta quidem veniam. Voluptatum sint officia eius repellendus optio a in. Expedita
cumque nostrum quos porro tenetur beatae repudiandae officia fugit impedit nemo voluptas error, ipsam possimus
ratione unde iusto libero. Dignissimos eligendi aperiam recusandae dicta, iusto ad vitae velit adipisci odit
itaque autem aut dolore, a, aspernatur quis. Error dolore tempore magni quae. Perspiciatis, vitae eaque commodi
totam inventore minima.";

$paragraphs = explode(".", $pragraph);
// var_dump($paragraphs);
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
  <title>Document</title>
</head>

<body class="bg-danger-subtle vh-100">
  <div class="container text-center py-5">
    <header class="my-4">
      <h1>Long Paragraph</h1>
    </header>

    <main class="border">
      <?php foreach ($paragraphs as $line)
        echo "<p>$line</p>"
          ?>

      </main>

    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      </script>
  </body>

  </html>