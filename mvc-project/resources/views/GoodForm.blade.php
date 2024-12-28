<!-- View: goodform -->
<!DOCTYPE html>
<html lang="en">

<head>
      <style>
            fieldset {
                  width: 250px;
            }
      </style>
</head>

<body>
      <fieldset>
            <legend>Add Goods</legend>
            <form action="/goods" method="POST">
                  @csrf
                  <input type="text" name="name" placeholder="Enter Name"><br>
                  <input type="text" name="description" placeholder="Enter the description"><br>
                  <input type="number" name="price" placeholder="Enter thePrice"><br>
                  <input type="submit" name="submit" value="Add"><br>
            </form>
      </fieldset>
</body>

</html>