<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
}

/* Center website */
.main {
    max-width: 1000px;
    margin: auto;
}

h1 {
    font-size: 50px;
    word-break: break-all;
}

.row {
    margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
    padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
    float: left;
    width: 25%;
}

/* Clear floats after rows */ 
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Content */
.content {
    background-color: white;
    padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media (max-width: 900px) {
    .column {
        width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media (max-width: 600px) {
    .column {
        width: 100%;
    }
}
</style>
</head>
<body>






<!-- MAIN (Center website) -->
<div class="main">

<h1>PRODUCT MASTER MAINTENANCE <br>PORTAL</h1>
<hr>

<h2>WELCOME</h2>
<p>The Product Master Maintenance (PMM) is a client server based application that can be accessed by a selected group of users. This system can be used for maintaining all the details related to a product like Product hierarchy, product/sub-components attributes(cost/size/weight etc.) and supplier details. There are additional features like user access control, report generators etc in this system.</p>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <?php
      echo  "<a  href='mobile.php'><img src='1a.jpeg' alt='Mountains' style='width:100%'/></a>";
	?>
	
      <h3>Mobiles</h3>
      <p>A mobile phone (also known as a wireless phone, cell phone, or cellular telephone[1]) is a small portable radio telephone.

The mobile phone can be used to communicate over long distances without wires. It works by communicating with a nearby base station (also called a "cell site") which connects it to the main phone network.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    
	<?php
      echo  "<a  href='camera.php'><img src='2a.jpeg' alt='Mountains' style='width:100%'/></a>";
	?>
      <h3>Cameras</h3>
      <p>A camera is an optical instrument for recording or capturing images, which may be stored locally, transmitted to another location, or both. The images may be individual still photographs or sequences of images constituting videos or movies. The camera is a remote sensing device as it senses subjects without any contact.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
<?php
      echo  "<a  href='machine.php'><img src='3a.jpeg' alt='Mountains' style='width:100%'/></a>";
	?>
    
      <h3>Machines</h3>
      <p>A machine uses power to apply forces and control movement to perform an intended action. Machines can be driven by animals and people, by natural forces such as wind and water, and by chemical, thermal, or electrical power, and include a system of mechanisms that shape the actuator input to achieve a specific application of output forces and movement.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <?php
      echo  "<a  href='watch.php'><img src='5a.jpeg' alt='Mountains' style='width:100%'/></a>";
	?>
    
      <h3>Watches</h3>
      <p>A watch is a small clock carried or worn by a person. It makes it easy to see the time. It is also a fashion accessory for men and women, and expensive watches are designed for this purpose. A watch may be one of the few accessories worn by a man.Some watches are smartwatches, mobile devices similar to smartphones but smaller.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="7a.jpg" alt="Bear" style="width:100%">
  <h3>Description about Products</h3>
  <p>Whether your products have a specific function, like a camera, or a personal purpose, like fashion, all products exist to enhance or improve the purchaser�s quality of life in one way or another. As the shopper browses, they instinctively imagine having each product in hand, using it and enjoying it.</p>
  <p>The more powerful the customer�s fantasy of owning the product, the more likely they are to buy it. Therefore, I like to think of product descriptions as storytelling and psychology, incorporating the elements of both prose writing and journalism. A �good� product description will not do. Competition is getting too fierce. It must be great!</p>
</div>

<!-- END MAIN -->
</div>

</body>
</html>
