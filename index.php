<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wejapa|Signup</title>
</head>

<body>
  <form action="user.php" onsubmit="return validateForm()" method='POST'>
    <p>First Name: <input required type="text" name='firstname' value=''></p>
    <p>Second Name: <input required type="text" name='secondname' value=''></p>
    <p>Email: <input required type="text" name='email' value=''></p>
    <p>Date of Birth: <input required type="date" name='dateofbirth' value=''></p>
    <p>Favorite color: <input required type="color" id='favoritecolor' name='favoritecolor' value=''></p>
    <p>Gender: <input type='checkbox' name='gender' value='male'>Male <input type='checkbox' name='gender'
        value='female'>Female</p>
    <p>Department:
      <select required name='department'>
        <option name='department' value='IT'>IT</option>
        <option name='department' value='HR'>HR</option>
        <option name='department' value='Stuff'>Stuff</option>
      </select>
    </p>
    <p>Password: <input required type="password" id='password'>
      <span id='passwordError' style='color:red'></span>
    </P>
    <input  type='submit' name='submit'>
  </form>
  <script src='formvalidation.js'></script>
</body>

</html>