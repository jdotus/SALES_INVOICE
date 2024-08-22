
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel='stylesheet' href='https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css'>
    <script src="https://code.jquery.com/ui/1.13.0-rc.3/jquery-ui.min.js" integrity="sha256-R6eRO29lbCyPGfninb/kjIXeRjMOqY3VWPVk6gMhREk=" crossorigin="anonymous"></script>

    
    <style>
    body{
        background-color: black;
    }
    
    *{
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
    }
    
    /* Designing button*/
    #addInput {
        padding: 8px 15px;
        background-color: darkcyan;
        color: white;
        border-radius: 8px;
        border: 0;
        transition-duration: 0.3s;
    }

    .submit {
        padding: 8px 15px;
        margin: 0 40px 0 0;
        background-color: #399918;
        color: white;
        border-radius: 8px;
        border: 0;
        transition-duration: 0.3s;
    }

    .inputContainer {
        margin: 30px 0 60px 0;
    }

    #removeInput {
        padding: 8px 15px;
        background-color: #991818;
        color: white;
        border-radius: 8px;
        border: 0;
        transition-duration: 0.3s;
    }
    
    .container {
        width: 80%;
        margin: 25px auto 0 auto;
    }

    .display-flex {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
    }

    .display-flex-bottom {
        display: flex;
        flex-wrap: wrap;
        flex-direction: row;
        justify-content: space-between;
    }

    #quantity, #units, #unitprice, #totalprice {
        display: inline-block;
        vertical-align: middle;
        width: 120px;
    }

    #description {
        width: 450px;
        display: inline-block;
        vertical-align: middle;
    }

 
    
    label {
        font-size: 15px;
        font-weight: 500;
    }
    input[type=text] {
        width: 100%;
        padding: 12px 20px;
        margin: 4px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=number] {
        width: 100%;
        padding: 12px 20px;
        margin: 4px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type="date"]{
    background-color: #0080ff;
    padding: 12px 20px;
    font-family: "Roboto Mono",monospace;
    color: #ffffff;
    font-size: 18px;
    border: none;
    outline: none;
    border-radius: 5px;
    }

    ::-webkit-calendar-picker-indicator{
        background-color: #ffffff;
        padding: 5px;
        cursor: pointer;
        border-radius: 3px;
    }


    #addInput:hover {
        cursor: pointer;
        background-color: black;
        font-size: 13.6px;
    } 

    #removeInput:hover {
        cursor: pointer;
        background-color: #744545;
        font-size: 13.6px;
    } 
    

    .submit:hover {
        cursor: pointer;
        background-color: darkgreen;
        font-size: 13.6px;
    }

    .left-side {
        width: 470px;
    }

    .right-side {
        width: 470px;
    }

    .buttom-part {
        display: inline-block ;
    }


    #inline-block-quantity, #inline-block-totalprice, #inline-block-units, #inline-block-unitprice {
        width: 120px;
    }
    #inline-block-description {
        width: 450px;
    }

    .bottom-part {
        margin-top: 50px;
    }

    /* The Modal (background) */
    .modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    
    /* Modal Content/Box */
    .modal-content {
        transition-duration: 0.5s;
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    .title { 
        text-transform: uppercase;
        font-family:"Poppins", sans-serif;
        font-weight: 500;
    }
    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
    }
    </style>

</head>
    <body>
         <!-- Trigger/Open The Modal -->
         <button id="myBtn">Create Sale</button>
            <?php
            // include 'dbcon.php';
            include "dbcon.php";

            $con = mysqli_connect("localhost", "root", "", "sale invoice");

            if (isset($_POST['submit'])) {
    $sinumber=mysqli_real_escape_string($con,$_POST["sinumber"]);
    $sidate=date("Y-m-d",strtotime($_POST["sidate"]));
    $terms=mysqli_real_escape_string($con,$_POST["terms"]);
    $soldto=mysqli_real_escape_string($con,$_POST["soldto"]);
    $tin=mysqli_real_escape_string($con,$_POST["tin"]);
    $address=mysqli_real_escape_string($con,$_POST["address"]);
    $bussstyle=mysqli_real_escape_string($con,$_POST["bussstyle"]);
    $particulars=mysqli_real_escape_string($con,$_POST["particulars"]);

                //VAT
    $vatable_sale=mysqli_real_escape_string($con,$_POST["vatable_sale"]);
    $vat_exempt_sale=mysqli_real_escape_string($con,$_POST["vat_exempt_sale"]);
    $zero_rated_sale=mysqli_real_escape_string($con,$_POST["zero_rated_sale"]);
    $total_sale=mysqli_real_escape_string($con,$_POST["total_sale"]);
    $vat=mysqli_real_escape_string($con,$_POST["vat"]);
    $total_amount_payable=mysqli_real_escape_string($con,$_POST["total_amount_payable"]);

    // Prepare the first statement
    $stmt = $con->prepare("INSERT INTO info (si_num, si_date, term, sold_to, tin, address, buss_style, particulars,vatable_sale,vat_exempt_sale,zero_rated_sale,total_sale,vat,total_amount_payable
) VALUES (?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssssssss", $sinumber, $sidate, $terms, $soldto, $tin, $address, $bussstyle, $particulars,$vatable_sale,$vat_exempt_sale,$zero_rated_sale,$total_sale,$vat,$total_amount_payable);
    
    // Sanitize and format data
    // $sinumber = $_POST['sinumber'];
    // $sidate = date("Y-m-d", strtotime($_POST['sidate']));
    // $terms = $_POST['terms'];
    // ... other data sanitization and formatting

    // Execute the statement
    if ($stmt->execute()) {
        $infoKey = $con->insert_id;

        // Prepare the second statement
        $stmt2 = $con->prepare("INSERT INTO sales_2 (quantity, units, item_description, unit_price, total_price, info_key) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt2->bind_param("ssssss", $quantity, $units, $description, $unitprice, $totalprice, $infoKey);

        // Insert multiple rows
        for ($i = 0; $i < count($_POST['description']); $i++) {
            $quantity = $_POST['quantity'][$i];
            $units = $_POST['units'][$i];
            $description = $_POST['description'][$i];
            $unitprice = $_POST['unitprice'][$i];
            $totalprice = $_POST['totalprice'][$i];

            $stmt2->execute();
        }


        // if($stmt2->execute()) {
            echo "<div class='alert alert-success'>Invoice Added Successfully. <a href='2nd.php?id={$infoKey}' target='_BLANK'>Click </a> here to Print Invoice </div> ";
        // }
    } else {
        echo "<h1>Error inserting into info: " . $stmt->error . "</h1>";
    }

    $stmt->close();
    $stmt2->close();
            }

            $con->close();
            ?>

         <!-- The Modal -->
         <div id="myModal" class="modal">
 
         <!-- Modal content -->
             <div class="modal-content">
                <!-- Close Button -->
                <span class="close">&times;</span>

                <h3 class="title">Sales Invoice</h3>

                <div class="container">

                    <form action="modal.php" method="post" autocomplete="off">
                        <div class="display-flex">
                            <div class="left-side">
                                <label for="si-number">S.I. NUMBER: </label>
                                <input type="number" id="si-number" name="sinumber">
                                
                                <label for="sidate">S.I. DATE: </label><br>
                                
                                <input type="date" id="sidate" name="sidate"  value="<?php echo date("Y-m-d");?>" require>
                                <br>
                                
                                <label for="terms">TERMS: </label>
                                
                                <input type="text" id="terms" name="terms">
                                
                            </div>
                            <div class="right-side">
                                <label for="soldto">SOLD TO: </label>
                                <input type="text" id="soldto" name="soldto">
                                
                                <label for="tin">T.I.N: </label>
                                
                                <input type="text" id="tin" name="tin">
                                
                                <label for="address">ADDRESS: </label>
                                
                                <input type="text" id="address" name="address">
                                
                                <label for="bussstyle">BUSS. STYLE: </label>
                                
                                <input type="text" id="bussstyle" name="bussstyle">
                                
                                <label for="particular">PARTICULARS: </label>
                                
                                <input type="text" id="particular" name="particulars">
                                
                            </div>
                        </div>
                        
                        <div class="bottom-part display-flex-bottom" id="input-container">
                            
                            <div id="inline-block-quantity">
                                <label for="quantity">QUANTITY: </label>
                                <!-- <input class="quantity" type="number" id="quantity" name='quantity[1]'> -->
                                
                            </div>

                            <div id="inline-block-units">
                     
                                <label class="units" for="units">UNITS: </label>
                                
                                <!-- <input class="units" type="number" id="units" name='units[1]' readonly> -->
                                
                            </div>
                            <div id="inline-block-description">
                                <label class="description" for="description">ITEM DESCRIPTION: </label>
                                
                                <!-- <input class="description" type="text" id="description" name='description[1]'> -->
                                
                            </div>
                            <div id="inline-block-unitprice">
                                <label class="unitprice" for="unitprice">UNIT PRICE: </label>
                                
                                <!-- <input class="unitprice" type="number" step="0.01" min="0" id="unitprice" name='unitprice[1]'> -->
                                
                            </div>
                            <div id="inline-block-totalprice">
                                <label class="totalprice" for="totalprice">TOTAL PRICE: </label>
                                
                                <!-- <input class="totalprice" type="number" step="0.01" min="0" id="totalprice" name='totalprice[1]'> -->
                            </div>
                        </div>

                        <div class="display-flex">
                            <div class="right-side">
                                <label for="vatable_sale">VATable Sale</label>
                                <input type="number" step="0.01" min="0" id="vatable_sale" name="vatable_sale" readonly>
                                
                                <label for="vat_exempt_sale">VAT Exempt Sale</label>
                                
                                <input type="number" step="0.01" min="0" id="vat_exempt_sale" name="vat_exempt_sale" readonly>
                                
                                <label for="zero_rated_sale">Zero Rated Sale</label>
                                
                                <input type="number" step="0.01" min="0" id="zero_rated_sale" name="zero_rated_sale" readonly>
                                
                                <label for="total_sale">Total Sale</label>
                                
                                <input type="number" step="0.01" min="0" id="total_sale" name="total_sale">
                                
                                <label for="vat">VAT</label>
                                
                                <input type="number" step="0.01" min="0" id="vat" name="vat">

                                <label for="total_amount_payable">Total Amount Payable</label>
                                
                                <input type="number" step="0.01" min="0" id="total_amount_payable" name="total_amount_payable">
                                
                            </div>
                        </div>


                        <div class="inputContainer">
                            <button class="submit" type="submit" name="submit">Submit</button>
                            <button id="addInput" type="button">Add Input</button>
                            <button id="removeInput" type="button" >Remove Input</button>
                        </div>
                        
                    </form>
                </div>
                
             </div> 
 
         </div>
    
         <script>


const today = new Date();
const maxDate = today.toISOString().split('T')[0]; // Get only the date part

document.getElementById('sidate').max = maxDate;


        // Function to calculate and update the total amount payable
function updateTotalAmountPayable() {
    let totalAmount = 0;
    const totalPriceInputs = document.querySelectorAll('.totalprice');

    totalPriceInputs.forEach((input) => {
        totalAmount += parseFloat(input.value) || 0;
    });

    document.getElementById('total_amount_payable').value = totalAmount.toFixed(2);
    updateTotalSale(); // Update total sale price whenever total amount payable changes
    updateVAT(); // Update VAT whenever total amount payable changes
}

// Function to calculate and update the total sale price (before tax)
function updateTotalSale() {
    const totalAmountPayable = parseFloat(document.getElementById('total_amount_payable').value) || 0;
    const totalSale = totalAmountPayable / 1.12;

    document.getElementById('total_sale').value = totalSale.toFixed(2);
    updateVAT(); // Update VAT whenever total sale changes
}

// Function to calculate and update the VAT (Total Amount Payable - Total Sales)
function updateVAT() {
    const totalAmountPayable = parseFloat(document.getElementById('total_amount_payable').value) || 0;
    const totalSale = parseFloat(document.getElementById('total_sale').value) || 0;
    const vat = totalAmountPayable - totalSale;

    document.getElementById('vat').value = vat.toFixed(2);
}

// Function to calculate total price based on quantity and unit price
function updateTotalPrice(event) {
    const index = event.target.dataset.index;
    const quantityInput = document.querySelector(`.quantity[data-index="${index}"]`);
    const unitPriceInput = document.querySelector(`.unitprice[data-index="${index}"]`);
    const totalPriceInput = document.querySelector(`.totalprice[data-index="${index}"]`);

    if (quantityInput && unitPriceInput && totalPriceInput) {
        const quantity = parseFloat(quantityInput.value) || 0;
        const unitPrice = parseFloat(unitPriceInput.value) || 0;
        const totalPrice = quantity * unitPrice;

        totalPriceInput.value = totalPrice.toFixed(2);

        // Update total amount payable
        updateTotalAmountPayable();

        console.log("Updated total price for index:", index, "Total:", totalPrice);
    }
}

// Function to initialize event listeners for all inputs
function initializeEventListeners() {
    const quantityInputs = document.querySelectorAll('.quantity');
    const unitPriceInputs = document.querySelectorAll('.unitprice');
    const totalPriceInputs = document.querySelectorAll('.totalprice');

    quantityInputs.forEach(input => {
        input.addEventListener('input', updateTotalPrice);
    });

    unitPriceInputs.forEach(input => {
        input.addEventListener('input', updateTotalPrice);
    });

    totalPriceInputs.forEach(input => {
        input.addEventListener('input', updateTotalAmountPayable);
    });
}

// Adding input field dynamically
const addButton = document.getElementById('addInput');
const removeButton = document.getElementById('removeInput');
let inputIndex = 0; // Counter for input fields

addButton.addEventListener('click', () => {
    inputIndex++;

    const newInputQuantity = document.createElement('input');
    const newInputUnits = document.createElement('input');
    const newInputDescription = document.createElement('input');
    const newInputUnitPrice = document.createElement('input');
    const newInputTotalPrice = document.createElement('input');

    newInputQuantity.type = 'text';
    newInputUnits.type = 'text';
    newInputDescription.type = 'text';
    newInputUnitPrice.type = 'text';
    newInputTotalPrice.type = 'text';

    newInputQuantity.name = 'quantity[]';
    newInputUnits.name = 'units[]';
    newInputDescription.name = 'description[]';
    newInputUnitPrice.name = 'unitprice[]';
    newInputTotalPrice.name = 'totalprice[]';


    newInputUnits.readOnly = true;

    newInputQuantity.classList.add('quantity');
    newInputUnits.classList.add('units');
    newInputDescription.classList.add('description');
    newInputUnitPrice.classList.add('unitprice');
    newInputTotalPrice.classList.add('totalprice');

    // Assign a unique index to each input
    newInputQuantity.dataset.index = inputIndex;
    newInputUnits.dataset.index = inputIndex;
    newInputDescription.dataset.index = inputIndex;
    newInputUnitPrice.dataset.index = inputIndex;
    newInputTotalPrice.dataset.index = inputIndex;

    // Add event listener to update the total price when quantity or unit price changes
    newInputQuantity.addEventListener('input', updateTotalPrice);
    newInputUnitPrice.addEventListener('input', updateTotalPrice);
    newInputTotalPrice.addEventListener('input', updateTotalAmountPayable);

    document.getElementById('inline-block-quantity').appendChild(newInputQuantity);
    document.getElementById('inline-block-units').appendChild(newInputUnits);
    document.getElementById('inline-block-description').appendChild(newInputDescription);
    document.getElementById('inline-block-unitprice').appendChild(newInputUnitPrice);
    document.getElementById('inline-block-totalprice').appendChild(newInputTotalPrice);

    // Enable the remove button when inputs are added
    removeButton.disabled = false;

    // Update total price and amount payable after adding new input
    updateTotalPrice({ target: newInputQuantity }); // Trigger updateTotalPrice with the first input (quantity)
    updateTotalAmountPayable();
});

// Removing input
const removeInputs = document.getElementById('removeInput');
removeInputs.addEventListener('click', () => {
    const quantityInputs = document.querySelectorAll('.quantity');
    const unitsInputs = document.querySelectorAll('.units');
    const descriptionInputs = document.querySelectorAll('.description');
    const unitPriceInputs = document.querySelectorAll('.unitprice');
    const totalPriceInputs = document.querySelectorAll('.totalprice');

    if (quantityInputs.length > 1) {
        quantityInputs[quantityInputs.length - 1].remove();
        unitsInputs[unitsInputs.length - 1].remove();
        descriptionInputs[descriptionInputs.length - 1].remove();
        unitPriceInputs[unitPriceInputs.length - 1].remove();
        totalPriceInputs[totalPriceInputs.length - 1].remove();

        // Update the total amount payable after removing an input
        updateTotalAmountPayable();
    }

    // Disable the remove button if no inputs remain
    if (quantityInputs.length === 1) { // Length will be 1 because we are about to remove the last set
        removeButton.disabled = true;
    }
});


// Initial setup
initializeEventListeners();

// Calculate total prices and amount payable for existing inputs on page load
document.querySelectorAll('.quantity').forEach(input => updateTotalPrice({ target: input }));
document.querySelectorAll('.totalprice').forEach(input => updateTotalAmountPayable());

// Modal functionality
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];



btn.onclick = function () {
    modal.style.display = "block";
    modal.style.transitionDuration = "5s";
}

span.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

    </script>
    </body>
</html>