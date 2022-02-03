@extends('layouts.app')
@section('content')

<br>
<br>
<br>
<br>
<html>
<body>

<div class="row">
    <div class="column">
      <div class="card">
     
        <div class="container">
          <h2>Rasel Ahmed</h2>
          <p class="title">CEO &amp; Founder</p>
          
          <p>raselahmed123@gnail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
       
        <div class="container">
          <h2>Mehedi Hasan</h2>
          <p class="title">Art Director</p>
          
          <p>mehedihasan45@outlook.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        
        <div class="container">
          <h2>Zishan Ahmed</h2>
          <p class="title">Designer</p>
          <p>zishanahmed45@gmail.com</p>
          <p><button class="button">Contact</button></p>
        </div>
      </div>
    </div>
  </div>
</body>
</html>

<style>


/* Three columns side by side */
.column {
  float: left;
  width: 33.3%;
  margin-bottom: 60px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}
</style>



@endsection
