<?php
//creating variables
// Step 1 - Create the following PHP variables: Band Name, Band Founded Date (using the PHP date function).
$band_name;
$band_founded_date= date("Y-m-d H:i:s");

// Step 2 - Create the following PHP array: Band Members
$band_members = ['Abdel','Lori', 'Norman'];
list($name1, $name2, $name3) = $band_members;
?>

<!DOCTYPE HTML>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <title>Lesson 01 - Lab</title>
</head>

<body>
<div class="container">

    <header>
        <h1 class="page-header">Lesson 01 Lab<small>&nbsp;&mdash;&nbsp;Dynamic Pages</small></h1>
    </header>

    <section>
        <!-- Step 3 - Fill in the placeholders -->
      <form>
          <fieldset>
              <legend>Band Information</legend>
              <div>
                  <label>Band Name</label>
                  <input type="text"name="name">
              </div>
              <div>
                  <label>Bande founded date</label>
                  <input type="date"name="date">
              </div>
              <div>
                  <label>Band members</label>
                  <input type="text" name="band members">
              </div>
              <div>
                  <button>Submit</button>
              </div>
          </fieldset>
      </form>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><!-- Output PHP variable for Band Name (double check the data exists so the page doesn't throw an error) --></h3>
            </div>

            <div class="panel-body">
                <div>
                    <h3>Band Members</h3>
                    <p>
                        <!-- Output PHP array for Band Members using a foreach loop -->
                        <?php
                        $band_members = array('Abdel','Lori', 'Norman');
                        foreach ($band_members as $value) {
                            echo "$value <br>";
                        }
                        ?>
                    </p>
                    <h3>Band Founded Date</h3>
                    <p>
                        <!-- Output PHP variable for Band Founded Date -->
                        <?php
                        $band_founded_date = date_create('2000-01-01');
                        echo date_format($date, 'Y-m-d H:i:s');
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Step 3 - Upload to your web server and submit your link on Blackboard for 5 marks -->

</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>


