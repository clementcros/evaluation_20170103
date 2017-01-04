
    <?php
    $tableau = array();
    $file = fopen("question.qs", "r" );
    $lines=file("question.qs");

  foreach ($lines as $linenumber => $linecontent) {
      if (substr_count($linecontent, '#') ==2) {
        $tab_theme[] = $linecontent;


          }

          elseif (substr_count($linecontent, '#')==1) {

            $tab_question["texte"][]=$linecontent;
            $tab_question["theme"][]=count($tab_theme);

          }

          if (substr_count($linecontent,'-')==1) {
            $tab_qcm["texte"][] = $linecontent;
            $tab_qcm["question"][] = count($tab_question["texte"]);
          }



       for ($i=0; $i <count($tab_question) ; $i++) {
          echo $tab_qcm[$i]."\n";
          for ($j=0; $j < count($tab_question["texte"]) ; $j++) {
            if ($tab_question["theme"][$i]==$i){
              print $tab_question["texte"][$j]."\n";


            }

          }
        }
}
