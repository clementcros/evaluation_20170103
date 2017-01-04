<?php
echo "<strong style='color:red;'>Ceci est du html affiché à partir de PHP</strong>";
$file = fopen("question.qs", "r" );

$lines=file("question.qs");

$theme = "##";

$question = "#";

$possibilites = array();

foreach ($lines as $linenumber => $linecontent) {

    if (empty($linecontent) or strlen($linecontent) < 2) continue;

    if (substr($linecontent, 0, 2) == "##") { //on trie les thèmes

        // On reinitialise les variables quand on detecte un nouveau theme

        $question = "";

        $possibilites = array();

        echo "\n";
// Affiche les thèmes


        $theme = $linecontent;

        echo $theme . "\n";

    }

    elseif ($linecontent[0] == '#' and $linecontent[1] != '#') {

      // On reinitialise notre variable possibilité quand on detecte une nouvelle question

        $possibilites = array();

        echo "\n";



        $question = $linecontent;

        echo $question . "\n";
        //affiche les questions
    }

    elseif ($linecontent[0] == '-')

    {

        $possibilites[] = $linecontent;

        echo $linecontent . "\n";
        //affiche les choix

    }

}
/*
echo "<html>".
	"<head>".
		'<meta http-equiv="content-type" content="text/html; charset=utf-8" />".
		'title>evaluations du 03 janvier 2017 – BÉZIERS</title>'.
		'<link rel="stylesheet" type="text/css" href="style.css">'.
	'</head>';


echo "<body>'.
'  <h1>evaluations du 03 janvier 2017 – BÉZIERS</h1>'.
'  <h2>CROS CLEMENT</h2>'.
  '<article>'.
    '<section id="bloc1">'.
  '  <h3>Ecosystème</h3>'.
  '    <h4><span>numero de question - </span>question ? <span>heure</span></h4>'.
  '    <p> reponse sous forme de texte </p>'.
  '    <h4><span>numero de question - </span>question (QCM)?<span>heure</span></h4>'.
  '    <ol>'.
  '      <li>reponse 1</li>'.
  '      <li>reponse 2</li>'.
  '      <li>reponse 3</li>'.
  '    </ol>'.
  '    <p> numero de la reponse </p>'.
  '  </section>'.
'  </article>'.
'  <article id="bloc2">'.
'    <h3>HTML / CSS</h3>'.
'    <section>'.
'      <h4><span>numero de question - </span>question ?<span>heure</span></h4>'.
'      <p> reponse sous forme de texte </p>'.
'    </section>'.
'    <section>'.
'      <h4><span>numero de question - </span>question (QCM)?<span>heure</span></h4>'.
'      <ol>'.
'        <li>reponse 1</li>'.
'        <li>reponse 2</li>'.
'        <li>reponse 3</li>'.
'      </ol>'.
'      <p> numero de la reponse </p>'.
'    </section>'.
'  </article>'.
'  <article id="bloc3">'.
'    <h3>ALGO</h3>'.
'    <section>'.
'      <h4><span>numero de question - </span>question ?<span>heure</span></h4>'.
'      <p> reponse sous forme de texte </p>'.
'    </section>'.
'    <section>'.
'      <h4><span>numero de question - </span>question (QCM)?<span>heure</span></h4>'.
  '    <ol>'.
  '      <li>reponse 1</li>'.
  '      <li>reponse 2</li>'.
  '      <li>reponse 3</li>'.
  '    </ol>'.
  '    <p> numero de la reponse </p>'.
  '  </section>'.
'  </article>'.
'</body>'.
'</html>";
*/
