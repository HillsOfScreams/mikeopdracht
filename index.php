<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"href="indexMakeUp.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
		<title>Index</title>
		<body>
	</head>
    <?php include_once('include.php'); ?>


<div id="pic1">

    <div class = "pictext">
        <h2>01</h2>
    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
        Nam ad tempora dolor ullam unde fugiat temporibus,<br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
        Nam ad tempora dolor ullam unde fugiat temporibus,<br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
        Nam ad tempora dolor ullam unde fugiat temporibus,<br>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. <br>
         aperiam, error asperiores vitae velit. </p></div>
</div>

<div class="text1">
    <h2> Business architecture </h2>
    </div>
<div class="text2">
<p>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga.Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga. Expedita aperiam, ipsam enim maiores ipsa iure consequuntur ea, impedit earum perspiciatis debitis dignissimos eum quis molestias placeat totam inventore sit fuga.
</p>
</div>

<div class = "between">
    <div class = "betweenBetween">
    <h2> Sure. we've been around the block. <br> We probably worked with the people <br> who built it.</h2>
    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, est fugiat? Non ea dolores reiciendis quam,<br> 
    pariatur velit quisquam? Quo vitae voluptates voluptate aperiam soluta culpa impedit<br> voluptatibus perspiciatis esse?<br>
    pariatur velit quisquam? Quo vitae voluptates voluptate aperiam soluta culpa <br> impedit voluptatibus perspiciatis esse?
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo,<br> est fugiat? Non ea dolores reiciendis quam,<br> 
    </p>
</div>
<img src="https://cdn.photographypro.com/wp-content/uploads/2018/01/black-and-white-photography-skyscrapers.jpg" id="picsmall">

</div>
<?php
$sql = "SELECT id, titel, beschrijving FROM box";
$stmt = $con->prepare($sql);
$stmt->execute();
$result = $stmt->fetchall();

$counter = 1;
foreach($result as $row){

    $counter++;
}
?>
<div class="grid-container">
    <div class="grid-item grid-item-<?php echo $counter;?>"><?php $row["titel"].$row["beschrijving"];?> </div>
</div>




<div class="grid-container2">
    <div class="grid-itemx grid-item-11"><img src="https://img3.goodfon.com/wallpaper/nbig/4/4e/buildings-skyscrapers-b-w.jpg" alt="photo" class = "grid-itemx grid-item-11"></div>
    <div class="grid-itemx grid-item-22"><h2 class ="serve">We create living, breathing structures that inspire and serve.</h2></div>
    <div class="grid-itemx grid-item-33"><h2>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestiae labore exercitationem officiis maiores inventore neque laboriosam! Hic rem praesentium eos harum. Nihil suscipit veniam dicta iusto nulla nobis doloremque itaque. eos harum. Nihil suscipit veniam dicta iusto nulla nobis doloremque itaque.</h2><form action="loginFront.php"><button type="submit" class = "learnMore">Learn more</button></form></div>
    <div class="grid-itemx grid-item-44"><img src="https://images.pexels.com/photos/1105766/pexels-photo-1105766.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="photo" class = "grid-itemx grid-item-44"></div>
    <div class="grid-itemx grid-item-55"><img src="https://www.thephotoargus.com/wp-content/uploads/2015/10/Black-and-White-Portrait-3.jpg" alt="photo" class = "grid-itemx grid-item-55"></div>
    <div class="grid-itemx grid-item-66"><img src="https://mcdn.wallpapersafari.com/medium/17/76/SwBEYI.jpg" alt="photo" class = "grid-itemx grid-item-66"></div>
    </div>






    <div class = "between2">
        <div class = "QUOTE"><h1>''</h1></div>
        <div class = "betweenBetween2">
<h1>He an thing rapid these after going drawn on. Timed she his law spoil<br>round defer. In suprise concerns informed betrayed he learning is ye.<br>ignorant formerly so ye blessing.</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque necessitatibus, nisi sequi similique ducimus excepturi repellendus, dolore ex explicabo quas veniam dolores <br> libero. Eveniet numquam laudantium quos provident qui! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque necessitatibus, nisi sequi similique ducimus <br>excepturi repellendus, dolore ex explicabo quas veniam dolores libero. Eveniet numquam laudantium quos provident qui! Lorem ipsum dolor sit amet consectetur adipisicing elit.<br> Ea doloremque necessitatibus, nisi sequi similique ducimus excepturi repellendus, dolore ex explicabo quas veniam dolores libero. Eveniet numquam laudantium quos provident qui!<br> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea doloremque necessitatibus, nisi sequi similique ducimus excepturi repellendus, dolore ex explicabo quas veniam dolores libero. <br>Eveniet numquam laudantium quos provident qui!</p>
</div>







</div>

</body>
</html>






