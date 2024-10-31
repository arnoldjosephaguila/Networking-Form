<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enhanced Form</title>
    <style>
        /* Set a bluish background color */
        body {
            background-color: #e0f7fa;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: 0;
        }

        /* Style the form container */
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Creates the floating effect */
            max-width: 400px;
            width: 100%;
            text-align: left;
        }

        /* Style form elements */
        h2 {
            text-align: center;
            color: #00796b;
        }

        label {
            color: #00796b;
            font-weight: bold;
        }

        .radio-container label.option-label {
            font-weight: normal; /* Makes radio options normal weight */
            color: #333; /* Darker color for better contrast */
        }

        input[type="text"],
        input[type="number"],
        input[type="tel"],
        input[type="email"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border: 1px solid #bdbdbd;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #00796b;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #004d40;
        }

        .checkbox-container,
        .radio-container {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Fill in your information - Networking Form</h2>
        <form action="submit.php" method="POST">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" required><br>

            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" required><br>

            <label for="phone">Phone Number:</label><br>
            <input type="tel" id="phone" name="phone" required><br>

            <div class="radio-container">
                <label>Where do you see yourself 10 years from now?</label><br>
                <input type="radio" id="developer" name="future" value="Developer" required>
                <label for="developer" class="option-label">Developer</label><br>

                <input type="radio" id="tester" name="future" value="Tester">
                <label for="tester" class="option-label">Tester</label><br>

                <input type="radio" id="analyst" name="future" value="Analyst">
                <label for="analyst" class="option-label">Analyst</label><br>

                <input type="radio" id="it_support" name="future" value="IT Support">
                <label for="it_support" class="option-label">IT Support</label><br>

                <input type="radio" id="homeless" name="future" value="Homeless">
                <label for="homeless" class="option-label">Homeless</label><br>
            </div><br>

            <label for="comments">Comments:</label><br>
            <textarea id="comments" name="comments" rows="4" placeholder="Say something about AJ\nTell us more here..."></textarea><br>

            <label for="date">Date:</label><br>
            <input type="date" id="date" name="date"><br><br>

            <div class="checkbox-container">
                <label for="consent">
                    <input type="checkbox" id="consent" name="consent" required> I consent in giving the information above
                </label>
            </div><br>

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>