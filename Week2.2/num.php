<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
            <h1>Novell Services Login</h1>
            <div>
            <form method="post" action="welcome.php">
            <label for="Name">Username:</label><br>
            <input type="text" id="Name" name="Name" ><br>
            <label for="pass">Password:</label><br>
            <input type="password" id="pass" name="pass"><br>
            <label for="Place">City of Enployment:</label><br>
            <input type="text" id="Place" name="place"><br>
            <label for='WebSever'>WebSever</label><br>
            <select for='WebSever'>
                <option value='' selected >Choose a sever</option>
            </select><br>
            <label>Please specify your role</label><br>
            <input type="radio" id="Admin" name="Role" value="Admin"/>
            <label for="Admin">Admin</label><br>
            <input type="radio" id="Manager" name="Role" value="manager"/>
            <label for="Manager">Manager</label><br>
            <input type="radio" id='Engineer' name="Role" value="Engineer"/>
            <label for="Engineer">Engineer</label><br/>
            
            <label>Single Signin to the  following services</label><br>
            <input type="checkbox" id="Mail" name="Sign" value="Mail"/> Mail<br/>
            <input type="checkbox" id="Payroll" name="Sign" value="Payroll"/> Payroll<br/>
            <input type="checkbox" id="Self-service" name="Sign" value="Self-service"/> Self-service<br/>
            <input type="submit" value="Login">
            <input type="reset" value="Reset"><br>
            </form>
            </div>

        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

