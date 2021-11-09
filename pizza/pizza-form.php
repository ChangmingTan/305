<form id="pizzaform" action="confirm.php" method="post">  <!--action: where the data goes   method: how the data is sent-->
    <!-- Contact Information -->
    <fieldset class="form-group">
        <legend>Contact Info</legend>
        <div class="form-group">
            <label for="firstName">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName">
            <span class="err" id="errFname">Please enter a first name</span>
        </div>

        <div class="form-group">
            <label for="lastName">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName">
            <span class="err" id="errLname">Please enter a last name</span>
        </div>

        <div class="form-group">
            <label for="address">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
            <span class="err" id="errAddress">Please enter an address</span>
        </div>
    </fieldset>

    <!-- Pick-up or Delivery -->
    <fieldset class="form-group">
        <legend>Pick-up or Delivery</legend>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" id="pickup" value="pickup" checked>
            <label class="form-check-label" for="pickup">
                Pick-up
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="method" id="delivery" value="delivery">
            <label class="form-check-label" for="delivery">
                Delivery
            </label>
        </div>
    </fieldset>

    <!-- Toppings -->
    <fieldset class="form-group">
        <legend>Select Toppings</legend>

        <?php
        $toppings = array("olives", "mushrooms", "pepperoni");
        foreach ($toppings as $topping) {
            echo "<div class=\"form-check\">
            <input class=\"form-check-input\" 
                   type=\"checkbox\" 
                   name=\"toppings[]\" 
                   id=\"$topping\" 
                   value=\"$topping\">
            <label class=\"form-check-label\" 
                   for=\"$topping\">" . ucfirst($topping) . "</label>
        </div>";    // ucfirst() — Make a string's first character uppercase
        }
        ?>

        <span class="err" id="errToppings">Please select at least one topping</span>
    </fieldset>

    <!-- Pizza size -->
    <fieldset class="form-group">
        <legend>Pizza Size</legend>

        <select class="form-control" id="size" name="size">

            <?php
            $sizes = array("none" => "Select a Size",
                "small" => "Small (8\")",
                "medium" => "Medium (12\")",
                "large" => "Large (16\")"
            );  // key => value
            $sizes["xlarge"] = "Extra Large (24\")";

            foreach ($sizes as $valueProp => $displayTest) {
                echo "<option value=\"$valueProp\">$displayTest</option>";
            }
            ?>
        </select>
        <span class="err" id="errSize">Please select a size</span>
    </fieldset>

    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="terms" name="terms">
        <label class="form-check-label" for="terms">I agree to the terms</label><br>
        <span class="err" id="errTerms">Please check if you agree to the terms</span>
    </div>

    <button type="submit" class="btn btn-primary">Place your order</button>
</form>
