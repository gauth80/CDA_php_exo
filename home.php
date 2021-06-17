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

		  <article class="article_content">
			  <h2 class="article_title cls">L'objet date</h2>
			  <pre>
			  <code class="box fdc">
				<?php
				$ladate = "14/07/2019";
				$enString = mktime(strtotime($ladate));
				echo "la semaine en question est : " . date('W', $enString);
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/date1.png" alt="date php" class="fluid">
			  </figure>
			  </p>
		  </article>

		  <article class="article_content">
			  <h2 class="article_title cls">L'objet date : compte à rebourt</h2>
			  <pre>
			  <code class="box fdc">
				<?php
				$year = date('Y');
				$ladate = mktime(0,0,1,1,1, $year);

				if($ladate < time()) {
					$ladate = mktime(1,0,0,1,1, ++$year);
					$temps_restant = $ladate - time();
				}
					$minutes_restantes = $temps_restant / 60;
					$heures_restantes = $minutes_restantes / 60;
					$jours_restants = $heures_restantes / 24;

					$sec_res = floor($temps_restant % 60);
					$minutes_restantes = floor($minutes_restantes % 60);
					$heures_restantes = floor($heures_restantes % 24);
					$jours_restants = floor($jours_restants);

				echo 'il reste ' . $jours_restants .' jours, ' . $heures_restantes . ' heures et ' . $minutes_restantes . ' minutes et '
				. $sec_res . ' secondes';
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/timers.png" alt="timers php" class="fluid">
			  </figure>
			  </p>
		  </article>


		  <article class="article_content">
			  <h2 class="article_title cls">L'objet date : années bissextile</h2>
			  <pre>
			  <code class="box fdc">
				<?php
				(function($years) {
					$laDate = date("m-d", strtotime($years . "-02-29"));
					$good = $years . " est bissextile";
					$noGood = $years ." est non bissextile";
					echo $laDate === "02-29" ? $good : $noGood;
				})("1999");
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/bissextile.png" alt="bissextile php" class="fluid">
			  </figure>
			  </p>
		  </article>

		  <article class="article_content">
			  <h2 class="article_title cls">L'objet date : années érronée</h2>
			  <pre>
			  <code class="box fdc">
				<?php
					function verif($m, $d, $y) {
						if(checkdate($m,$d,$y)) {
							echo '<p class="code">date bonne</p>';
						} else {
							echo '<p class="code">date mauvaise</p>';
						}
					}
					verif(12, 32, 1999);
					verif(12, 31, 1999);

				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/checkdate.png" alt="checkdate php" class="fluid">
			  </figure>
			  </p>
		  </article>

		  <article class="article_content">
			  <h2 class="article_title cls">L'objet date : date courrante</h2>
			  <pre>
			  <code class="box fdc">
				<?php
				(function($heure) {
						echo str_replace("/", "h", $heure);
					})("11/25");
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/lol.png" alt=" php" class="fluid">
			  </figure>
			  </p>
		  </article>

		  <article class="article_content">
			  <h2 class="article_title cls">File | Lire un fichier</h2>
			  <pre>
			  <code class="box fdc">
				<?php
					(function() {
						readfile("dataRelated/data.csv");
					})();
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/readfile.png" alt="readfile php" class="fluid">
			  </figure>
			  </p>
		  </article>

		  <article class="article_content">
			  <h2 class="article_title cls">File | pretty() </h2>
			  <pre>
			  <code class="box fdc">
				<?php
				(function( ) {
					$csv = array_map('str_getcsv', file("dataRelated/data.csv"));
					print_r ($csv);
				})();
				?>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/prettycsv.png" alt="pretty csv php" class="fluid">
			  </figure>
			  </p>
		  </article>
			<!--les forms-->
		  <article class="article_content-fullWidth">
			  <h2 class="article_title cls">Form | ???? </h2>
			  <pre>
			  <code class="box-fullHeight fdc">
                  <?php require_once('ctrl.php')?>
					<form action="<?php 'ctrl.php'?>" method="POST" class="form">
                        <legend class="form_title">Un formulaire.. Wahou !</legend>

                        <label for="name" class="form_label ">
                            <input id="name" name="name" type="text" placeholder="nom" class="label_input">
                            <?php echo '<span class="warning">' . $getErrorName? : '' . '</span>';?>
                        </label>

                        <label for="surname" class="form_label">
                            <input id="surname" name="surname" type="text" placeholder="prénom" class="label_input">
                            <?php echo '<span class="warning">' . $getErrorSurname? : '' . '</span>';?>
                        </label>

                        <label for="choix">Sujet :
                            <select name="choix" id="request">
                                <option value="commande">Mes commandes</option>
                                <option value="question">Question sur un produit</option>
                                <option value="reclamation">Réclamation</option>
                                <option value="other">Autre</option>
                            </select>
                        </label>
                        <button class="form_button" type="submit">Envoyer</button>

                    </form>
			  </code>
			</pre>
			  <p class="article_paragraph cls">
			  <figure>
				  <img src="assets/img/prettycsv.png" alt="pretty csv php" class="fluid">
			  </figure>
			  </p>
		  </article>
	  </section>
	</body>
	</html>
