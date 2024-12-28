

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
<?php

echo "Hello, I am $name and I am a $profile";

// $students=[
//       "Goku", "Vegeta", "Gohan", "Piccolo", "Krillin", "Yamcha", "Tien", "Chiaotzu"];


$student=[
 ["name"=>"Goku", "available"=>true],
 ["name"=>"Vegeta", "available"=>true],
 ["name"=>"Gohan", "available"=>true],
 ["name"=>"Piccolo", "available"=>true],
 ["name"=>"Krillin", "available"=>true],
 ["name"=>"Yamcha", "available"=>true],
 ["name"=>"Tien", "available"=>true],
 ["name"=>"Chiaotzu", "available"=>true]
];

for($i=0;$i<count($student);$i++){
      echo "<h1><a href='#' class='student_link'>{$student[$i]['name']}</a></h1>";
}

// foreach($students as $student){
//       echo "<h1><a href='#' class='student_link'>$student[name]</a></h1>";
// }


?>

<h3 id="display" >Click on any student to see the alert</h3>

<script> 

const students=<?php echo json_encode($student); ?>;
console.log(students);

let student_links=document.querySelectorAll('.student_link');
student_links.forEach((student_link)=>{
      student_link.addEventListener('click',function(){
            console.log(student_link.innerHTML);
            // console.log(students.student_link);
            document.getElementById('display').innerHTML="You clicked on "+student_link.innerHTML;
            // document.getElementById('display').innerHTML="You clicked on "+student_link.innerHTML;
      
      });
});
</script>

</body>
</html>