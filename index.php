<?php 
    include_once "common/header.php";
?>
<div id="main">      
    <div class="container">
        <h1>Welcome to the Dust Underground</h1>
        <p>Here you can find daily news on clan dust</p>
        <p>&nbsp;</p>
    </div>
    <canvas id="makeItRain">
    </canvas>
</div>
<script>
    var c = document.getElementById("makeItRain");
    var ctx = c.getContext("2d");

    //making the canvas full screen
    c.height = window.innerHeight/2;
    c.width = window.innerWidth;

    //chinese characters - taken from the unicode charset
    var binary = "abcdefghijklmnopqrstuvwyz0123456789";
    //converting the string into an array of single characters
    binary = binary.split("");

    var font_size = 10;
    var columns = c.width/font_size; //number of columns for the rain
    //an array of drops - one per column
    var drops = [];
    //x below is the x coordinate
    //1 = y co-ordinate of the drop(same for every drop initially)
    for(var x = 0; x < columns; x++)
	drops[x] = 1; 

    //drawing the characters
    function draw(){
	//Black BG for the canvas
	//translucent BG to show trail
	ctx.fillStyle = "rgba(0, 0, 0, 0.05)";
	ctx.fillRect(0, 0, c.width, c.height);
	
	ctx.fillStyle = "#f5f5f0"; //green text
	ctx.font = font_size + "px arial";
	//looping over drops
	for(var i = 0; i < drops.length; i++)
	{
		//a random chinese character to print
		var text = binary[Math.floor(Math.random()*binary.length)];
		//x = i*font_size, y = value of drops[i]*font_size
		ctx.fillText(text, i*font_size, drops[i]*font_size);
		
		//sending the drop back to the top randomly after it has crossed the screen
		//adding a randomness to the reset to make the drops scattered on the Y axis
		if(drops[i]*font_size > c.height && Math.random() > 0.975)
			drops[i] = 0;
		
		//incrementing Y coordinate
		drops[i]++;
	}
    }

    setInterval(draw, 33);
</script>
<?php 
    include_once "common/footer.php";
?>