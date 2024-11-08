<?php
    include 'connection.php';
    
    // Adding or Inserting the inputName to categoryName
    if (isset($_POST['add-category-button']))
    {
        $inputName = $_POST['inputName'];

        include 'function.php';
        insertCategoryValues(name: $inputName);

        header(header: 'location: category.php');
    };

    // Updating all the value from category table with exact ID
    if (isset($_POST['update-category-button']))
    {
        $updateID = $_POST['updateID'];
        $updateName = $_POST['updateName'];

        include 'function.php';
        updateCategorySetID(name: $updateName,id: $updateID);

        header(header: 'location: category.php');
    };

    // For the updateID and DeleteID statement
    if (isset($_GET['updateID']))
    {
        function displayCategory(): bool|mysqli_result
        {   
            // Selecting the exact ID of category that i want to update it and display the same value
            $updateID = $_GET['updateID'];

            include 'function.php';
            return selectCategoryID(id: $updateID);
        }
    }
    else
    {
        // Deleting the exact category ID that i want to delete it
        $deleteID = $_GET['deleteID'];

        include 'function.php';
        deleteCategoryID(id: $deleteID);

        header(header: 'location: category.php');
    };
?>