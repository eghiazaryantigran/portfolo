const Canvas=document.getElementById("game");
const Ctx=Canvas.getContext("2d");

const Graund=new Image();
Graund.src="img/graund.png"

const FoodImage=new Image();
FoodImage.src="img/food.png";


let score_audio =new Audio();

score_audio.src="audio/Apple Crunch!.mp3"


let box=32;

let score=0;


let food={
    x:Math.floor((Math.random()*17+1))*box,
    y:Math.floor((Math.random()*15+3))*box,
}


let snake=[];

snake[0]={
    x:9*box,
    y:10*box
}



document.addEventListener("keydown",direction);

let dir;

function direction(eve){
    if(event.keyCode == 37 && dir != "right")
		dir = "left";
	else if(event.keyCode == 38 && dir != "down")
		dir = "up";
	else if(event.keyCode == 39 && dir != "left")
		dir = "right";
	else if(event.keyCode == 40 && dir != "up")
		dir = "down";
}


function eatTail(head,arr){
    for(i=0;i<arr.length;i++){
        if(head.x==arr[i].x && head.y==arr[i].y)
        clearInterval(game)
    }
        
    }






function drow(){
    Ctx.drawImage(Graund,0,0)
    Ctx.drawImage(FoodImage,food.x,food.y)

    for(i=0;i<snake.length;i++){
        Ctx.fillStyle= i==0 ? "#00cc00" :"#009900";
        Ctx.fillRect(snake[i].x,snake[i].y,box,box);
    }
    Ctx.fillStyle="white";
    Ctx.font="50px Ariel";
    Ctx.fillText(score,box*2.5,box*1.7)


    let snakeX=snake[0].x;
    let snakeY=snake[0].y;

    if(snakeX == food.x && snakeY==food.y){
        score++
        score_audio.play()
        food={
            x:Math.floor((Math.random()*17+1))*box,
            y:Math.floor((Math.random()*15+3))*box,
        };
        
    }else{
        snake.pop()

    }

    if(snakeX <box || snakeX>box * 17
        ||snakeY<3*box || snakeY>box*17)
        clearInterval(game)


    if(dir == "left") snakeX -= box;
	if(dir == "right") snakeX += box;
	if(dir == "up") snakeY -= box;
	if(dir == "down") snakeY += box;

    let newHeade={
        x:snakeX,
        y:snakeY
    }
    eatTail(newHeade,snake)
    snake.unshift(newHeade)
}

let game=setInterval(drow,150)