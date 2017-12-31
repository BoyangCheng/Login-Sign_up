
<html>
  <head>
    <title>Please login</title>
  </head>

  <body style = "text-align: left;">
  <img src="${pageContext.request.contextPath}Login&Sign_up/application/views/images/welcome.png" width="30px">
  <h3>Login if already a user</h3>

  <form>

    <table>
      <tr><td>Username：</td><td><input type="text" name="username"></td></tr>
      <tr><td>Password：</td><td><input type="password" name="password"></td></tr>
    </table>

    <input type="submit" name="action" value="Login">
    <input type="submit" name="action" value="New User">
  </form>

  </body>
</html>
