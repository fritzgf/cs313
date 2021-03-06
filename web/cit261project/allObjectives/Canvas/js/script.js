var canvas;
var canvasContext;
var ballX = 50;
var ballY = 50;
var ballSpeedX = 15;
var ballSpeedY = 4; //increase FOR EFFECTS!
var player1Score = 0;
var player2Score = 0;
const win = 20;
var winScreen = false;
var paddleY1 = 250; //de/in/crease for difficulty change
var paddleY2 = 250; //same
const paddle_height = 100;
const paddle_thickness = 10;

function mousePosition(event) {
    var rect = canvas.getBoundingClientRect();
    var root = document.documentElement;
    var mouseX = event.clientX - rect.left - root.scrollLeft;
    var mouseY = event.clientY - rect.top - root.scrollTop;
    return {
        x: mouseX,
        y: mouseY
    };
}

function handleMouseClick(evt) {
    if (winScreen) {
        player1Score = 0;
        player2Score = 0;
        winScreen = false;
    }
}

window.onload = function () {
    canvas = document.getElementById("gameCanvas");
    canvasContext = canvas.getContext("2d");
    var framesPerSecond = 30;
    setInterval(function () {
        moveEverything();
        drawEverything();
    }, 1000 / framesPerSecond); //increase FOR EFFECTS!

    canvas.addEventListener("mousedown", handleMouseClick);
    canvas.addEventListener('mousemove',
        function (event) {
            var mousePos = mousePosition(event);
            paddleY1 = mousePos.y - (paddle_height / 2);
        });
}

function ballReset() {
    if (player1Score >= win || player2Score >= win) {
        player1Score = 0;
        player2Score = 0;
        winScreen = true;
    }
    ballSpeedX = -ballSpeedX;
    ballX = canvas.width / 2;
    ballY = canvas.height / 2;
}

function computerMvmnt() {
    var paddleY2Center = paddleY2 + (paddle_height / 2);
    if (paddleY2Center < ballY - 35) {
        paddleY2 += 6
    } else if (paddleY2Center > ballY + 35) {
        paddleY2 -= 6
    }
}

function moveEverything() {
    if (winScreen) {
        return;
    }
    computerMvmnt();
    ballX += ballSpeedX;
    ballY += ballSpeedY;
    // ballSpeedX = ballSpeedX + 0,3; //cool exeleration!
    if (ballX < 0) {
        if (ballY > paddleY1 && ballY < paddleY1 + paddle_height) {
            ballSpeedX = -ballSpeedX;
            var deltaY = ballY - (paddleY1 + paddle_height / 2);
            ballSpeedY = deltaY * 0.35;
        } else {
            player2Score++; //increase for computer cheating!
            ballReset();
        }
    }
    if (ballX > canvas.width) {
        if (ballY > paddleY2 && ballY < paddleY2 + paddle_height) {
            ballSpeedX = -ballSpeedX;
            var deltaY = ballY - (paddleY2 + paddle_height / 2);
            ballSpeedY = deltaY * 0.35;
        } else {
            player1Score++;
            ballReset();
        }
    }
    if (ballY < 0) {
        ballSpeedY = -ballSpeedY;
    }
    if (ballY > canvas.height) {
        ballSpeedY = -ballSpeedY;
    }
}

function drawEverything() {
    //blackboard
    colorRect(0, 0, canvas.width, canvas.height, "#008000");

    var c = document.getElementById("gameCanvas");
    var ctx = c.getContext("2d");
    ctx.beginPath();
    ctx.arc(250, 150, 60, 0, 2 * Math.PI);
    ctx.stroke();
    var c = document.getElementById("gameCanvas");
    var ctx = c.getContext("2d");
    ctx.beginPath();
    ctx.moveTo(250, 0);
    ctx.lineTo(250, 300);
    ctx.stroke();


    if (winScreen) {
        canvasContext.fillStyle = "white";
        if (player1Score >= winScreen) {

            canvasContext.fillText("Left Player Won!", 350, 200);
        } else if (player2Score >= winScreen) {

            canvasContext.fillText("Right Player Won!", 350, 200);
        }
        canvasContext.fillText("Click to continue", 350, 500);
        return;
    }
    //player one
    colorRect(0, paddleY1, paddle_thickness, paddle_height, "white");
    //computer player
    colorRect(canvas.width - paddle_thickness, paddleY2, paddle_thickness, paddle_height, "white");
    //the ball
    colorCircle(ballX, ballY, paddle_thickness, "white");
    canvasContext.fillText(player1Score, 100, 100);
    canvasContext.fillText(player2Score, canvas.width - 100, 100);
}

function colorCircle(centerX, centerY, radius, drawColor) {
    canvasContext.fillStyle = drawColor;
    canvasContext.beginPath();
    canvasContext.arc(centerX, centerY, radius, 0, Math.PI * 2, true);
    canvasContext.fill();
}

function colorRect(leftX, topY, width, height, drawColor) {
    canvasContext.fillStyle = drawColor;
    canvasContext.fillRect(leftX, topY, width, height);
}