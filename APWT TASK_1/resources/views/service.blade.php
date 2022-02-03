
@extends('layouts.app')
@section('content')




<style>

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100%;
  width: 100%;
  text-align: center;
  background: #f2f2f2;
}
.wrapper{
  display: grid;
  margin: 200px 90px auto;
  grid-gap: 20px;
  grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
}
@media (max-width: 700px) {
  .wrapper{
    margin: 200px auto;
  }
}
.wrapper .box{
  width: 350px;
  margin: 0 auto;
  position: relative;
  perspective: 1000px;
}
.wrapper .box .front-face{
  background: #fff;
  height: 220px;
  width: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}
.box .front-face .icon{
  height: 80px;
}
.box .front-face .icon i{
  font-size: 65px;
}
.box .front-face span,
.box .back-face span{
  font-size: 22px;
  font-weight: 600;
  text-transform: uppercase;
}
.box .front-face .icon i,
.box .front-face span{
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.box .back-face{
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1;
  height: 220px;
  width: 100%;
  padding: 30px;
  color: #fff;
  opacity: 0;
  transform-style: preserve-3d;
  backface-visibility: hidden;
  background: linear-gradient(-135deg, #c850c0, #4158d0);
  transform: translateY(110px) rotateX(-90deg);
  box-shadow: 0px 5px 20px 0px rgba(0, 81, 250, 0.1);
  transition: all 0.5s ease;
}
.box .back-face p{
  margin-top: 10px;
  text-align: justify;
}
.box:hover .back-face{
  opacity: 1;
  transform: rotateX(0deg);
}
.box:hover .front-face{
  opacity: 0;
  transform: translateY(-110px) rotateX(90deg);
}
</style>






<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Responsive Services Box | CodingNepal</title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
      <div class="wrapper">
         <div class="box">
            <div class="front-face">
               <div class="icon">
                  <i class="fas fa-code"></i>
               </div>
               <span>Web Design</span>
            </div>
            <div class="back-face">
               <span>Web Design</span>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
               </p>
            </div>
         </div>
         <div class="box">
            <div class="front-face">
               <div class="icon">
                  <i class="fas fa-chart-line"></i>
               </div>
               <span>Advertising</span>
            </div>
            <div class="back-face">
               <span>Advertising</span>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
               </p>
            </div>
         </div>
         <div class="box">
            <div class="front-face">
               <div class="icon">
                  <i class="fas fa-rocket"></i>
               </div>
               <span>Game Design</span>
            </div>
            <div class="back-face">
               <span>Game Design</span>
               <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem in deleniti vitae beatae veritatis aliquid porro perspiciatis dolores impedit ad.
               </p>
            </div>
         </div>
      </div>
   </body>
</html>
  
  
  </body>
  </html>




@endsection