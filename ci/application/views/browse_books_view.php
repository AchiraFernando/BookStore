<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="utf-8">
	<title>Basic Bookstore</title>
</head>
<div class>
    <h1>Basic Bookstore</h1>
    <label for="category_select">Category: </label>
    <form action="http://localhost:3030/ci/index.php/BrowseBooksController/FilterByCategory" method="POST">
        <select class="form-control" name="selectedCategory" onchange="this.form.submit()">
            <?php
                    echo '<option value="view_all">All</option>';
                foreach($categories as $category)
                {
                    echo '<option value="'.$category->category_id.'">'.$category->category_name.'</option>';
                }
            ?>
        </select>
    </form>
    <div>
        <form action="http://localhost:3030/ci/index.php/BrowseBooksController/GetSearchedBook" method="POST">
            Search: <input type="text" name="keyword">
        <input type="submit">

        </form>
    </div>
        <h3>Available Books</h3>
    <div>
        <?php
                echo '<table>';
                echo '<tr>';
                echo '<th>Name</th>';
                echo '<th>Price</th>';
                echo '</tr>';
            foreach($book_details as $book)
            {
                echo '<tr>';
                echo '<td> <div>'.$book->book_name.'</div></td>';
                echo '<td>'.$book->book_price.'</td>';
                echo '</tr>';
                <a href="echo base_url()BookDetailsController/ViewBook/123">Link</a>

            }
                echo '</table>';
                ?>
            <a href="<?php echo base_url() ?>BookDetailsController/ViewBook/123">Link</a>
    </div>
</div>
</body>
</html>