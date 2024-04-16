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
    </head>

    <body>
        <header></header>
        <main>
            <h1>PHP Form Validation</h1>
            <?php
            $name = $email = $gender = $comment = $website = '';
            $nameErr = $emailErr = $genderErr = $websiteErr = '';

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["name"])) {
                    $nameErr = "Name is required.";
                } else {
                    $name = test_input($_POST["name"]);
                }

                if (empty($_POST["email"])) {
                    $emailErr = "Email Id is required.";
                } else {
                    $email = test_input($_POST["email"]);
                }

                if (empty($_POST["Website"])) {
                    $website = '';
                } else {
                    $website = test_input($_POST["Website"]);
                }

                if (empty($_POST["Comment"])) {
                    $comment = '';
                } else {
                    $comment = test_input($_POST["Comment"]);
                }

                if (empty($_POST['Gender'])) {
                    $genderErr = "Gender is required.";
                } else {
                    $gender = test_input($_POST['Gender']);
                }
            }

            function test_input($data)
            {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            ?>

            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <label for="name">Name:</label><br />
                <input type="text" id="name" name="name" value="<?php echo $name; ?>"><br />
                <span class="error">* <?php echo $nameErr; ?></span><br />

                <label for="email">Email Address:</label><br />
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br />
                <span class="error">* <?php echo $emailErr; ?></span><br />

                <label for="website">Website:</label><br>
                <input type="text" id="website" name="Website" value="<?php echo $website; ?>"><br />
                <span class="error">* <?php echo $websiteErr; ?></span><br />

                <label for="comment">Comment:</label><br>
                <textarea rows="5" cols="50" id="comment" name="Comment"><?php echo $comment; ?></textarea><br />

                <label>Gender</label><br>
                <input type="radio" id="Male" name="Gender" value="Male" <?php if ($gender === 'Male') echo 'checked'; ?>>
                <label for="Male">Male</label>

                <input type="radio" id="Female" name="Gender" value="Female" <?php if ($gender === 'Female') echo 'checked'; ?>>
                <label for="Female">Female</label>

                <input type="radio" id="Other" name="Gender" value="Other" <?php if ($gender === 'Other') echo 'checked'; ?>>
                <label for="Other">Other</label><br />

                <span class="error">* <?php echo $genderErr; ?></span><br />

                <button type="submit">Submit</button>
            </form>
            
            <?php
            
            echo "<h2>Your Input:</h2>";
            echo "Name: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Website: " . $website . "<br>";
            echo "Comment: " . $comment . "<br>";
            echo "Gender: " . $gender . "<br>";
            $name = $email = $gender = $comment = $website = '';
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = test_input($_POST['name']);
                $email = test_input($_POST['email']);
                $gender = test_input($_POST['gender']);
                $website = test_input($_POST['website']);
                $comment = test_input($_POST['comment']);
                }
            ?>
        </main>
    </body>
</html>