<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV PSW</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
</head>

<body>
    <div style="width: 100vw; height: 60vh; display: flex; align-items: center; justify-content: center; font-family: 'Poppins', sans-serif;">
        <div class="container">
            <img class="profile" src={{ asset('images/wn.png') }} alt="" style="display:flex; justify-content;center; width: 200px; height: 200px; object-fit: cover; border-radius: 50%; margin-left:40px; margin-right:40px;">
            <h1 style="text-align:center; margin-bottom:0px; color:#313031">Winson Napoleon</h1>
            <p style="text-align:center; color:darkgrey">Hi! I'm a student</p>
            <a class="btn" href="https://www.instagram.com/wiinson_/" target="_blank">Check me out!</a>
        </div>
    </div>
  
   <div style="font-family: 'Poppins', sans-serif;">
    <div class="box">
        <div class="card">
            <h2 style="color:#313031">About Me</h2>
            <div class="para">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quod perspiciatis sapiente quisquam, temporibus obcaecati, ullam quia veniam ea dolore, a excepturi corrupti. Nesciunt labore officiis aperiam mollitia tenetur. Rem?</p>
                <p style="text-align: center">
                     <a class="btn-read" href="#">Read More</a>
                </p>
            </div>
        </div>

        <div class="box">
            <div class="card">
                <h2 style="color:#313031">What to expect</h2>
                <div class="para">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quod perspiciatis sapiente quisquam, temporibus obcaecati, ullam quia veniam ea dolore, a excepturi corrupti. Nesciunt labore officiis aperiam mollitia tenetur. Rem?</p>
                    <p style="text-align: center">
                         <a class="btn-read" href="#">Read More</a>
                    </p>
                </div>
            </div>

            <div class="box">
                <div class="card">
                    <h2 style="color:#313031">See my work</h2>
                    <div class="para">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni quod perspiciatis sapiente quisquam, temporibus obcaecati, ullam quia veniam ea dolore, a excepturi corrupti. Nesciunt labore officiis aperiam mollitia tenetur. Rem?</p>
                        <p style="text-align: center">
                             <a class="btn-read" href="#">Read More</a>
                        </p>
                    </div>
                </div>
            </div>
   </div>
</div>

<div class="latest-work" style="font-family:'Poppins', sans-serif;"> 
    <h2 style="display:flex; text-align:center; justify-content:center; margin-bottom:20px; color:#313031">Latest Project</h2>

    <div class="latest-container">
        <div class="latest-box"> 
            <img src="{{asset('images/port1.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Samurai</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

    <div class="latest-box"> 
            <img src="{{asset('images/port2.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Oni</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
  
        <div class="latest-box"> 
            <img src="{{asset('images/port3.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Karasu</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
  
        <div class="latest-box"> 
            <img src="{{asset('images/port4.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Akuma</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>
    
        <div class="latest-box"> 
            <img src="{{asset('images/port5.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Dullahan</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

        <div class="latest-box"> 
            <img src="{{asset('images/port6.jpeg') }} " alt="">
            <div class="latest-layer">
                <h4>Damonisch</h4>
                <p>Lorem ipsum dolo r sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

    </div>
     
    
    </div>

    </div>
       
   
    
    
</div>
  </body>

</html> 