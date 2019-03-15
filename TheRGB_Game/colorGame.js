var numSquares=6;
var colors=generateRandomColors(numSquares);
var squares=document.querySelectorAll(".square");
var pickedColor=pickColor();
var colorDisplay=document.getElementById("colorDisplay");
var messageDisplay=document.querySelector("#message");
var h1=document.querySelector("h1");
var resetButton = document.querySelector("#reset");
var mode =document.querySelectorAll(".mode");
// var  easyBtn=document.querySelector("#easyBtn");
// var hardBtn=document.querySelector("#hardBtn");

// easyBtn.addEventListener("click",function()
// {
// 	hardBtn.classList.remove("selected");
// 	easyBtn.classList.add("selected");
// 	//generate 3 random colors
// 	numSquares=3;
// 	colors=generateRandomColors(numSquares);
// 	//pick random color
// 	pickedColor=pickColor();
// 	//chnge the colorDisplay
// 	colorDisplay.textContent=pickedColor;
// 	//change the 3 color bacground to the none
// 	for(var i=0;i<squares.length;i++)
// 	{
// 		if(colors[i])
// 		{
// 			squares[i].style.backgroundColor=colors[i];
// 		}
// 		else
// 		{
// 			squares[i].style.display="none";
// 		}
// 	}
// 	h1.style.backgroundColor="steelblue"
// });

// hardBtn.addEventListener("click",function()
// {
// 	hardBtn.classList.add("selected");
// 	easyBtn.classList.remove("selected");
// 	numSquares=6;
// 	colors=generateRandomColors(numSquares);
// 	//pick random color
// 	pickedColor=pickColor();
// 	//chnge the colorDisplay
// 	colorDisplay.textContent=pickedColor;
// 	resetButton.textContent="new color";
// 	//change the 3 color bacground to the none
// 	for(var i=0;i<squares.length;i++)
// 	{
// 		squares[i].style.backgroundColor=colors[i];
		
// 		squares[i].style.display="block";
// 	}
// 	h1.style.backgroundColor="steelblue"
// });

for(var i=0;i<mode.length;i++)
{
	mode[i].addEventListener("click", function()
{
	mode[0].classList.remove("selected");
	mode[1].classList.remove("selected");
	this.classList.add("selected");
	this.textContent==="Easy" ? numSquares = 3:numSquares=6;
	reset();
});	
}

function reset()
{
	colors=generateRandomColors(numSquares);
	//pick a new random color from the array
	pickedColor=pickColor();
	//Chenge the colorDisplay to match the picked color 
	colorDisplay.textContent=pickedColor;
	//Change the clors of the squares;
	for(var i=0;i<squares.length;i++)
	{
		if(colors[i])
		{
			squares[i].style.display = "block";
			squares[i].style.backgroundColor=colors[i];
		}
		else
		{
			squares[i].style.display="none";
		}
	}
	//change the color of the above stripe
	h1.style.backgroundColor="steelblue"
	//changing message dispplay
	messageDisplay.textContent="";
	resetButton.textContent="New colors";
}

resetButton.addEventListener("click",function()
{

	reset();
	// //GEnerate all new colors
	// colors=generateRandomColors(numSquares);
	// //pick a new andom color from the array
	// pickedColor=pickColor();
	// //Chenge the colorDisplay to match the picked color 
	// colorDisplay.textContent=pickedColor;
	// //Change the clors of the squares;
	// for(var i=0;i<squares.length;i++)
	// {
	// 	squares[i].style.backgroundColor=colors[i];
	// }
	// //change the color of the above stripe
	// h1.style.backgroundColor="steelblue"
	// //changing message dispplay
	// messageDisplay.textContent="";
	// this.textContent="New colors";
});

colorDisplay.textContent = pickedColor;

for(var i=0; i<squares.length; i++)
{
	//Add Initial Colors to all the squares
	squares[i].style.backgroundColor = colors[i];

	//Add Click Listners to squares
	squares[i].addEventListener("click",function()
	{
		var clickedColor = this.style.backgroundColor;
		//compare clicked color
		if(clickedColor === pickedColor){
			messageDisplay.textContent=("Correct");
			//changing the text of the button
			resetButton.textContent="Play Again ?";
			changeColors(clickedColor);
			h1.style.backgroundColor=clickedColor;
		}
		else{
			this.style.backgroundColor="#232323";
			messageDisplay.textContent="Try Again";
		}

	});

}

function changeColors (color)
{
	for(var i=0;i<squares.length;i++)
	{
		squares[i].style.backgroundColor=color;
	}
}

function pickColor()
{
	var random=Math.floor(Math.random()*colors.length);
	return colors[random];
}

function generateRandomColors(num)
{
	 var arr=[];
	 	for(var i=0;i<num;i++)
	 	{
	 		arr.push(randomColor());
	 	}

	 return arr;
}

function randomColor()
{
	var r=Math.floor(Math.random()*256);
	var g=Math.floor(Math.random()*256);
	var b=Math.floor(Math.random()*256);
	return "rgb(" + r + ", " + g + ", " + b +")";
} 