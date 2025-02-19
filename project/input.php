<h2>Input the product details:</h2>
<form name="form1" method="post" action="">
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="product_type">product_type:</label>
                <input type="text" class="form-control" id="product_type" placeholder="Enter the product type" name="product_type" required>
            </div>
            <br>
            <div class="col">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" placeholder="Enter the name of the item" name="name" required>
            </div>
        </div>
    </div>
    <br>
    <div class="form-group">
        <div class="row">
            <div class="col">
                <label for="price">price:</label>
                <input type="text" class="form-control" id="price" placeholder="Enter the product price" name="price" required>
            </div>
            <br>
            <div class="col">
                <label for="category_id">category_id:</label>
                <input type="text" class="form-control" id="category_id" placeholder="Enter the category_id" name="category_id" required>
            </div>
            <br>
            <div class="col">
                <label for="size">size:</label>
                <select class="form-control" id="size" name="size">
                    <option value="UK12">UK12</option>
                    <option value="UK14">UK14</option>
                    <option value="UK16">UK16</option>
                    <option value="UK18">UK18</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>