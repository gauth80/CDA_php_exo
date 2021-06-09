<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/styles.css">
  <title>EXO </title>

</head>
<body>
  <section class="wrap">
    <article class="article_content">
      <h2 class="article_title cls">Afficher l'adresse IP du visiteur</h2>
      <pre>
        <code class="box">
          echo $_SERVER['REMOTE_ADDR'];

        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/supglo.png" alt="super global" class="fluid">
        </figure>
      </p>
    </article>

    <article class="article_content">
      <h2 class="article_title cls">Nombre impair :</h2>
      <pre>
        <code class="box fdr">
          <?php

            (function($i, $count) {
              while ($i <= $count) {
                $i++;
                $i%2 === 1 ? print_r('<p class="code">'. $i .'</p>') : print '';
              }
            })(0,150)
           ?>
        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/impair.png" alt="nombre impair php" class="fluid">
        </figure>
      </p>
    </article>

    <article class="article_content">
      <h2 class="article_title cls">500 fois une phrase :</h2>
      <pre>
        <code class="box fdc">
          <?php
            for($k = 0; $k < 500 ;$k++) {
              echo "<p class='code'>Je dois faire des backups sur différents dépôts.</p>";
            }
          ?>
        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/repeat.png" alt="boucle php" class="fluid">
        </figure>
      </p>
    </article>

    <article class="article_content">
      <h2 class="article_title cls">table de multiplication :</h2>
      <pre>
        <code class="box fdc">
          <table>
          <?php
            $n = 2;
            for($i = 1; $i <= 12; $i++ ) {
              echo '<tr>';
                for($k = 1; $k <= 12; $k++) {
                  echo '<th class="th">'. ($i * $k) .'</th>';
                }
              echo '</tr>';
            }
          ?>
          </table>
        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/table.png" alt="table de multiplication php" class="fluid">
        </figure>
      </p>
    </article>

    <article class="article_content">
      <h2 class="article_title cls">tableau :</h2>
      <pre>
        <code class="box fdc">
          <?php
           require_once('dataRelated/tableau.php');
              foreach ($capitales as $key => $value) {
                asort($capitales);
                $keys_letter = substr(ucfirst($value), 0, 1);
                echo "<p class='ti1'>" . $key . " " . $keys_letter . "</p>";
              }
          ?>
        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/capitales.png" alt="trie tableau php" class="fluid">
        </figure>
      </p>
    </article>


    <article class="article_content">
      <h2 class="article_title cls">Les fonctions | un lien</h2>
      <pre>
        <code class="box fdc">
          <?php
            function lien($link, $title) {
              return htmlentities("<a href=" . $link .">" . $title . "</a>");
            }

            $aff = lien("https://www.reddit.com/", "Reddit Hug");
            echo $aff;
          ?>
        </code>
      </pre>
      <p class="article_paragraph cls">
        <figure>
          <img src="assets/img/funcLink.png" alt="creation de lien fonction php" class="fluid">
        </figure>
      </p>
    </article>

    <article class="article_content">
      <h2 class="article_title cls">Les fonctions | sum( )</h2>
        <pre>
          <code class="box fdc">
            <?php
              $tab = array(4, 3, 2, 8);
                function tableau(array $apasser) {
                  return array_sum($apasser);
                }

                echo tableau($tab);
            ?>
          </code>
        </pre>
        <p class="article_paragraph cls">
          <figure>
            <img src="assets/img/funcSum.png" alt="somme de value php" class="fluid">
          </figure>
        </p>
      </article>

      <article class="article_content">
        <h2 class="article_title cls">Les fonctions | password</h2>
        <pre>
          <code class="box fdc">
            <p>pas test, m'enfin la mécanique est là</p>
            <?php
            $passDeJeanIvre = "HautMedoc2001";
            $passHash = password_hash($passDeJeanIvre, PASSWORD_DEFAULT);

              function onsenfou($passDeJeanIvre, $passHash) {
                if(password_verify($passDeJeanIvre, $passHash)) {
                  if($passDeJeanIvre.length < 8) {
                    echo "mot de passe trop court.";
                    return false;
                  } else if(ctype_upper($passDeJeanIvre.length) <= 1) {
                    echo "mot de passe as besoin d'un Majuscule";
                    return false;
                  } else {
                    return (true);
                  }
                  return;
                }
                return;
              }
            ?>
          </code>
        </pre>
        <p class="article_paragraph cls">
          <figure>
            <img src="assets/img/pass.png" alt="password php" class="fluid">
          </figure>
        </p>
      </article>


  </section>
</body>
</html>
