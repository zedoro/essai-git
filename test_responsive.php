<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assiduite.css">

  </head>
  <body>

  <h1 class="h1" >Assiduités</h1>
  <img src="images/logo_men_3.png" alt="" >
  <ul id="nav"><!--
  --><li><a href="#">Accueil</a></li><!--
  --><li><a href="#">Déconnexion</a></li>
  </ul>
    <div class="cadre">
      <h2>Mois de novembre</h2>
        <p>
        <?php
        $mois = 11 ;
        $annee = 2015 ;

        $c=1 ;
        setlocale (LC_TIME, 'fr_FR', 'french', 'fra');

        echo "1er mercredi<br /" ;
        $pas=0;
        for ($i = 0; $i <= 3; $i++)
        {echo $pas."--<br />" ;
          //1er mercredi
          $time = mktime(10, 20, 20, $mois, $pas, $annee);
          $mercredi = strtotime('Wednesday',$time);
          echo $time."   -  ".$mercredi." --> " ;
          $datedebut = strftime("%A %d %B %Y %H", $mercredi );
          // dernier mercredi
          //echo $mercredi."<br />";
          echo $pas." - ".$mois." - ".$datedebut."<br/>";
          //echo date('Y-m-d', strtotime('+15 days'))."<br />" ;
          $pas=$pas+7;
          //echo " ".date( "t-d-Y", mktime ( 0, 0, 0, $i, 1, $annee ) )." jours<br />";
          $c=$c+1 ; // jours
          /*$c=1 ;
          for ($j = 1; $j <= 5; $j++)
          {
          //echo '- mercredi '.$annee.' est un '.strftime('%A %d', strtotime($annee.'-'.$i.'-01'));
            $time = mktime(0, 0, 0, $i, $c, $annee);
            $mercredi = strtotime('Wednesday', $time);
            $date = strftime("%A %d %B %Y", $mercredi);
            echo "$date<br/>";
            $c=$c+6 ; // jours
            //echo strftime("%A %d %B %Y", $mercredi);
          }*/

        }
        echo "<br />" ;
        echo "<br />" ;
        echo "1er jeudi<br >" ;

        $begin = new DateTime('2015-11-01 09:00:00', new DateTimeZone('Europe/Paris'));
        $interval = DateInterval::createFromDateString('next thursday');
        $end = clone $begin;
        $end->modify('last day of this month');
        $period = new DatePeriod($begin, $interval, $end);
        foreach ($period as $date) {
          echo $date->format('l, F \t\h\e jS g\hi')."<br />";
        }

        
        $begin = new DateTime('2015-11-01 09:00:00', new DateTimeZone('Europe/Paris'));
        $interval = DateInterval::createFromDateString('next thursday');
        $end = clone $begin;
        $end->modify('last day of this month');
        $period = new DatePeriod($begin, $interval, $end);
        foreach ($period as $date) {
          echo $date->format('Y-m-d g\hi')."<br />";
        }
        ?>
        </p>
    </div>


  </body>
</html>
