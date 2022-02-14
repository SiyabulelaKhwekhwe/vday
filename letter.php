<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--
    <script  defer src="https://unpkg.com/swup@latest/dist/swup.js"></script>  
    <script defer src="https://unpkg.com/swup@latest/dist/swup.min.js"></script>  

    
    <script src="js/js2.js"></script>-->
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="css/style.css">

    <title>Valentine's Day Letter</title>
</head>
<body >
    <div class="maincontainer" >
        <div class="thecard"  id="thecard" >
            <div class="thefront" id="thefront" onclick="myFunction(0)" >
                <h1 >Happy</br> Valentine's Day</br> Khani!</h1>
                <div class="heart" style="left: -5px;"></div>
            </div>
            <div class="theback" onclick="myFunction(1)">
                <h1 style=" font-family: 'Brush Script MT', cursive;">Dear Khani</h1>
                <p>I know its been a tricky past few months and I know you've been going through a lot,<br>
                But you are a very resilient and caring person and those are few of the things I cherish about you.<br>
                I care about you a lot and Im content when I see you at peace.<br>
                I go through a lot daily,but I always look forward to having our calls where we can vent and talk about things <br>
                without feeling judged because we both know the other person on the call is coming from a good place when giving feedback.<br>
                Happy Valentines day.<br>
                I love you,<br>
                I love you as a person,<br>
                I love how you are unapologetically caring<br>
                I love when you put in a lot of effort, even for the smallest of things.<br>
                I appreciate you for all that you do and i hope you have a great day...or night whenever you see this lol.</p>
                <p>With love<br> Siyabulela Khwekhwe<br>
                    PS: Also skyf 5m, I wanna buy brown bread
                </p>
                <div class="heart3" style="top: -80px; left: 150px; background-color: yellow;"></div>
                <div class="heart2" style="top: -600px; left: -215px; background-color: blue;"></div>
            </div>
        </div>
        <script>
            function myFunction(num) {
              if(num == 0){
                document.getElementById("thecard").style.transform = "rotateY(180deg)";
              }else{
                document.getElementById("thecard").style.transform = "rotateY(360deg)";
              }
            }
            </script>
</body>
</html>