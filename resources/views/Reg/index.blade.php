<html>
  <head>
    <title>RegUser</title>
  </head>
  <body>
    <h1>RegUser {{ @user->id }}</h1>
    <ul>
      <li>Make: {{ @$user->username }}</li>
      <li>Model: {{ @$user->password }}</li>
    </ul>
  </body>
</html>