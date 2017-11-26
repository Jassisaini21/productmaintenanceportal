<!DOCTYPE html>
<html>
<head>

<style>
input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.alert {
    padding: 20px;
    background-color: #f44336;
    color: white;
}

.closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
}

.closebtn:hover {
    color: black;
}
</style>
</head>
<body>

<h3>Requesting Product Form</h3>

<div class="container">
  <form action="final.php" method="POST">
    <label for="pname">Product Name</label>
    <select id="pname" name="pname">
      <option value="camera">Camera</option>
      <option value="mobile">mobile</option>
      <option value="machine">Machine</option>
      <option value="watch">watch</option>
    </select>

	

    <label for="pid">Product ID</label>
    <input type="text" id="pid" name="pid" placeholder="Product ID..">

    <label for="cost">Cost Of Product</label>
    <select id="cost" name="cost">
      <option value="10000">Rs. 10000</option>
      <option value="20000">Rs. 20000</option>
      <option value="30000">Rs. 30000</option>
      <option value="40000">Rs. 40000</option>
      <option value="50000">Rs. 50000</option>
    </select>
    
    <label for="details">Details about product..</label>
    <textarea id="details" name="details" placeholder="Write something about product color and other features you want to offer.." style="height:200px"></textarea>

    <button class="button" name="submit">Submit</button>
	
    
  </form>
</div>

</body>
</html>
