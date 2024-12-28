<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>


<body>
 <div style="display:flex; justify-content:center; border:solid red 2px; align-items:center;background-color:cyan">    
<table border="1" >
      <tr>
            <th>Roll No</th>
            <th>Name</th>
            <th>Marks</th>
      </tr>
    <?php
    foreach($students as $student){ ?>
      <tr>
            <td><?php echo $student['rollno']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['marks']; ?></td>


      </tr>
   <?php }?>

    </table>
    </div>
</body>
</html>