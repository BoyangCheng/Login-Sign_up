<html>
    <head>
        <title>
            New User Registration
        </title>
    </head>
    <body style = "text-align: left;">
    <img src="${pageContext.request.contextPath}/views/images/welcome.png">
    <h3>please fill your information to join.</h3>

    <form>

        <table>
            <tr><td>Username：</td><td><input type="text" name="username"></td></tr>

            <tr><td>Password：</td><td><input type="password" name="password"></td></tr>

            <tr><td>E-mail：</td><td><input type="text" name="email"></td></tr>
        </table>

        <input type="submit" value="Join">
    </form>


    </body>
</html>
