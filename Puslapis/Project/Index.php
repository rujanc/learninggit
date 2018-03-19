<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
      <style>
          table, tr, td {
              border: 1px solid black;
          }
      </style>
      <link rel="stylesheet" href="Styles/Index.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  <li>
    <h2>Hello world!! Welcome to PHP :D</h2>
      <?php echo "labas"; ?>
      <ul>Labas</ul>
      <ul>Ka veiki</ul>
      <ul>Kaip sekasi</ul>
      <ul>Smagu
          <img src="https://i.pinimg.com/736x/f4/89/ef/f489ef22363cf1e4c2a4fb5b1cd8aec5--geometric-background-background-designs.jpg" width="200px">
      </ul>
  </li>

  <?php
  include('Functions/Function.php');
  include('Controllers/AgeController.php');
  include('Controllers/CenturyController.php');
  include('Controllers/StringController.php');
  include('Controllers/MultiplyController.php');
  include('Controllers/TriangleController.php');
  include ('Controllers/ZodiacController.php');




//  echo suma ( 1,  20). "<br>";
//
//
//  echo minus (4, 3) . "<br>";
//
//
//  echo multi (10,5) . "<br>";
//
//
//  echo divi (100, 10) . "<br>";
//
//
//  echo mod (255,5) . "<br>";
//
//
//  age(20);
//
//
//  century(1996);
//
//
//    echo reverse("labas") . "<br>";
//
//
//    echo cap("labas") . "<br>";
//
//
//    echo low("labas") . "<br>";
//
//
//    echo palend("LABAS") . "<br>";
//
//
//
//    multiply(5);
//
//    echo "<table>";
//    multitable(10);
//    echo "</table>";
//
//
//    picture(10);
//
//    echo "<br>";
//      echo  $coin = rand(0,1) . "<br>";
//
//    echo $random;
//
//    echo getZodiac(1);
//
//    echo "<br><br>";
//
////    ARRAYS
//    $cars = array("Volvo", "BMW", "Toyota");
//    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
//
//    $value1 = ["55", 5, "Antradienis", "Kazkas naujo"];
//    $value2 = ["Vienas", "Du", "Trys", "Keturi"];
//    unset($value1[1]);
//    print_r($value1);
//
//    echo "<br>";
//
//    array_push($value1, "kaciukas");
//    print_r($value1);
//
//    shuffle($value1);
//    print_r($value1);
//
//    echo "<br>";
//
//    if(in_array("Antradienis", $value1)){
//        echo "yay yra";
//    }
//    else {
//        echo "ajajaj";
//    }
//
//    echo "<br>";
//
//    if(in_array("Du", $value2)){
//        echo "yra";
//    }
//    else {
//        echo "nera";
//    }
//
//    echo "<br>";
//
//    echo(isset($value2[3]))?"Yra!!!!!!!!!":"Nera :((((((((((";
//    unset($value2[3]);
//    echo "<br>";
//    echo(isset($value2[3]))?"Yra!!!!!!!!!":"Nera :((((((((((";
//
//    echo "<br>";
//    echo join("___", $value2);
//
//    echo "<br>";
//    sort($value1);
//    echo "<ul></ul><li>";
//    echo join("</li><li>",$value1);
//    echo "</li></ul>";
//
//
//    $week =['Monday','Tuesday','Wednesday', 'Thursday','Friday', 'Saturday','Sunday'];
//
//    $array = ["Monday" => "Bloga diena",
//        "Tuesday" => "Dar blogesne diena",
//        "Wednesday" => "Gera diena",
//        "Thursday" => "Rytoj penktadienis!!"];
//
//    foreach($array as $value => $item){
//        echo $value . " : " . $item . "<br>";
//    }
//    echo "<br>";
//
//    $car = ["Audi" => "Nu nieko tokia",
//    "Bmw" => "Amzina meile",
//    "Opel" => "Gera gera",
//    "Volvo" => "Saugi, bet nu galetu but grazesne"];
//    foreach ($car as $value => $item){
//        echo $value . " : " . $item . "<br>";
//    }
//
//    echo "<br>";
//
//
//    $name = substr("Rusne", -2);
//    echo ($name);
//
//    echo "<br>";
//
//    function back()
//    {
//        $name = 'rusne';
//        $lenght = strlen($name);
//        for ($letter = $lenght; $letter >= 0; $letter--){
//           echo substr($name, $letter, 1);
//
//        }
//
//
//    }
//
//
//    back();
//
////    $flags = ["Lenkija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/pl.svg',
////     "Baltarusija" => 'https://lipis.github.io/flag-icon-css/flags/4x3/by.svg',
////     "Moldova" => "https://lipis.github.io/flag-icon-css/flags/4x3/mo.svg",
////     "Latvija" => "https://lipis.github.io/flag-icon-css/flags/4x3/lv.svg",
////     "Slovakija" => "https://lipis.github.io/flag-icon-css/flags/4x3/sl.svg",
////      "Lietuva" => "https://lipis.github.io/flag-icon-css/flags/4x3/lt.svg", ];
////
////
////
////    $numbers = ["A", "B", "C"];
////    shuffle($numbers);
////    foreach ($numbers as $number){
////        echo $number;
////    }
////
////    function getFlag($flags) {
////        foreach ($flags as $country => $flag){
////            $flags[$country]= sprintf('<img src="%s" height="100px">', $flag);
////        }
////        return $flags;
////    }
////    $getFlags = getFlag($flags);
////    print_r($getFlags);
////    echo "<br>";
//
//    $rooms = ["101" => 5,
//        "102" => 4,
//        "103" => 3];
//    $used = ["101" => 1,
//        "102" => 2,
//        "103" => 3];
//    foreach ($rooms as $roomnum => $beds){
//        $free = $beds - $used[$roomnum];
//        echo "Kambary" . $roomnum . " yra " . $beds . " lovos." . " Is ju laisvos" . $free . "<br>";
////    }
//        function rombas($number)
//        {
//            for ($break = 1; $break <= $number; $break++){
//                for ($dot = $break; $dot <= $number; $dot++){
//                    echo "&nbsp;&nbsp;&nbsp;";}
//                for ($dot = 2 * $break - 1; $dot > 0; $dot--){
//                    echo "&nbsp;*&nbsp;";
//                }
//                echo "<br>";
//            }
//            for ($break = $number; $break >= 0; $break--) {
//                for ($dot = $number - $break; $dot >= 0; $dot--) {
//                    echo "&nbsp;&nbsp;&nbsp;";
//                }
//                for ($dot = 2 * $break - 1; $dot > 0; $dot--){
//                    echo "&nbsp*&nbsp;";
//                }
//              echo "<br>";}
//        }
//        rombas (15);
//
//        $user1= ['vardas' => 'petras', 'pavarde' => 'petraitis', 'amzius' => 19];
//        $user2= ['vardas' => 'juozas', 'pavarde' => 'juozaitis', 'amzius' => 21];
//        $user3= ['vardas' => 'jonas', 'pavarde' => 'jonaitis', 'amzius' => 30];
//
//        $users = [$user1, $user2, $user3];
//        echo '<table>';
//        foreach ($users as $user){
//            echo '<tr>';
//            echo '<td>' . $user['vardas']. '</td>';
//            echo '<td>' . $user['pavarde']. '</td>';
//            echo '<td>' . $user['amzius']. '</td>';
//            echo '</tr>';
//        }
//        echo '</table>';





  $conn=mysqli_connect('localhost', 'root', 'labas', 'my_db');
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(empty($_POST['name']) || empty($_POST['email'])){
                $error = "Bad entry douchebag";
                if(strlen($_POST['name'])>=1){
                    $error = "Names too short";
                }
            }
            else {
                $success = 'File updated successfully';
//                $file = 'formos.txt';
//                $previousData = file_get_contents($file);
//                $postData = $_POST['name'] . " " . $_POST['email'] . " " . $_POST['tel'] . "\n";
//                file_put_contents($file, $previousData . $postData);
                if(isset($_POST['submit'])){
                    $sql = "INSERT INTO users (name, email, phone, address, username, shoesize)
                    VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST['address']."','".$_POST['username']."','".$_POST['shoesize']."')";

                    $result = mysqli_query($conn,$sql);
                }
            }
        }

        $results = mysqli_query($conn, 'SELECT * FROM users');
        foreach ($results as $result){
            echo "<tr>";
            echo "<td>".$result['name']."</td> <br>";
            echo "<td>".$result['email']."</td> <br>";
            echo "<td>".$result['phone']."</td> <br>";
            echo "<td>".$result['address']."</td> <br>";
            echo "<td>".$result['username']."</td> <br>";
            echo "<td>".$result['shoesize']."</td> <br>";
            echo "</tr>";
        }
  ?>

<!---->
  <div class="container">
      <H1> form</H1>
      <div class="row">
          <div class="col-4">
          <?php if(isset($error)){
              echo '<div class="alert alert-danger">' . $error . '</div>';
          }
          elseif(isset($success)){
              echo '<div class="alert alert-success">' . $success . '</div>';
          }
          ?>
              <form method="POST" action="index.php">
                  <div class="form-group">
                      <label for="name">Name</label>
                      <input name="name" type="text" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="email">Email</label>
                      <input name="email" type="email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                      <label for="phone">Phone</label>
                      <input name="phone" type="phone" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                      <label for="address">Address</label>
                      <input name="address" type="address" class="form-control" id="address">
                  </div>
                  <div class="form-group">
                      <label for="username">Username</label>
                      <input name="username" type="username" class="form-control" id="username">
                  </div>
                  <div class="form-group">
                      <label for="shoesize">Shoe size</label>
                      <input name="shoesize" type="shoesize" class="form-control" id="shoesize">
                  </div>
                  <button name="submit" type="submit" class="btn btn-primary">submit</button>
              </form>
          </div>
<!---->











  </body>
</html>
