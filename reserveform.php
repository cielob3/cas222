<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
include '../includes/db.inc.html.php';
// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((isset($_POST['name'])) ) {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
         $name = $_POST['name'];
         $age = $_POST['age'];
         $type = $_POST['type'];
         $email = $_POST['email'];
         $contactname = $_POST['contactname'];
         $contactnum = $_POST['contactnum'];
         $gender = $_POST['gender'];
         $saturday = $_POST['saturday'];
         $sunday = $_POST['sunday'];
         $accommodations = $_POST['accommodations'];

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try
    {
        $sql = 'INSERT INTO registration SET
          name = :name,
          age = :age,
          type = :type,
          email = :email,
          contactname = :contactname,
          contactnum = :contactnum,
          gender = :gender,
          saturday = :saturday,
          sunday = :sunday,
          accommodations = :accommodations';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $name);
        $s->bindValue(':age', $age);
        $s->bindValue(':type', $type);
        $s->bindValue(':email', $email);
        $s->bindValue(':contactname', $contactname);
        $s->bindValue(':contactnum', $contactnum);
        $s->bindValue(':gender', $gender);
        $s->bindValue(':saturday', $saturday);
        $s->bindValue(':sunday', $sunday);
        $s->bindValue(':accommodations', $accommodations);
        $s->execute();

    } catch (PDOException $e) {
        $error = 'Error adding submitted content: ' . $e->getMessage();
        include '../includes/error.html.php';
        exit();
    }
    // load the thank you page after the INSERT runs
        include '../includes/success.html.php';

    // Add an else to load the initial page if the initial (line 19) if statement is false
    }else {
        include 'registration.html';

  }

  ?>
