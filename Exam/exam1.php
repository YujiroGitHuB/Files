
<!-- Prime or Composite Determination -->

<form method="POST">
    <input type="number" name="input" required>
    <button type="submit" name="submit">Click me</button>
    <?php
    // Set of button if click
    if (isset($_POST['submit'])) {
        // input data by the user
        $value = $_POST['input'];
        // Check if the given number is prime or composite
        class NumberAnalyzer
        {
            function check($num)
            {
                // Numbers less than or equal to 1 are not prime.
                if ($num <= 1) {
                    return false;
                }

                // To check if a number is prime, we only need to check for divisibility
                // from 2 to the square root of the number. If a number is divisible by any
                // value from 2 to sqrt number, then it's not prime.

                // Loop through values from 2 to the square root of the number.
                for ($i = 2; $i <= $num / 2; $i++) {

                    // If the number is divisible by any value from 2 to sqrt($number),
                    // it means the number is not prime, so we return false.
                    if ($num % $i == 0) {
                        return false;
                    }
                }

                // If the number is not divisible by any value from 2 to sqrt($number),
                // it means the number is prime, so we return true.
                return true;
            }
        }
        // Create a new instance of the NumberAnalyzer class.
        $number = new NumberAnalyzer();
        // Check if a number is prime or not
        $numberValue = $value;
        if ($number->check($numberValue)) {
            echo "<h3>This $numberValue is Prime Number</h3>";
        } else {
            echo "<h3>This $numberValue is Composite Number</h3>";
        }
    }
    ?>
</form>