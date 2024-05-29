<!doctype html>
<html lang="en">
    <head>
        <title>Product</title>
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
        <main></main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for='id'>ID</label><br>
        <input type="text" id="id"><br>
        <label  for="name">Name</label><br>
        <input type="text" id="name" required><br>
        <label for='price'>Price</label><br>
        <input type="int" id="price" required><br>
        <label for='color'>Color</label><br>
        <select for='color'>
        <option value="Choose one">Choose one</option>
        <option value="red">Red</option>
        <option value="blue">Blue</option>
        <option value="white">White</option>
        </select><br>
        <label for='company'>Company</label><br>
        <select for='company'>
        <option value="Choose one">Choose one</option>
        <option value="Samsung">Samsung</option>
        <option value="Apple">Apple</option>
        <option value="Hwawei">Hwawei</option>
        </select><br>
        <label for='amount'>Amount</label><br>
        <input type="number" id="amount"><br>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
<?php
require_once "coreclass.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$id = $name = $company = $color = $amount = $price = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ID = test_input($_POST["id"]);
    $name = test_input($_POST["name"]);
    $company = test_input($_POST["company"]);
    $color = test_input($_POST["color"]);
    $amount = test_input($_POST["amount"]);
    $price = test_input($_POST["price"]);

    $pr = new Product($id, $name, $company, $color, $amount, $price);
    echo $pr->toString();
}
?>
    </body>
</html>
