<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ config('app.name', 'DCS') }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{asset('css/dcsstyle.css')}}" rel="stylesheet">
</head>
<body>
  
    <div class="header">
        <img src="{{asset('images/logo.jpg')}}" />
    </div>
  <h2>E-Census Instructions</h2> 
  <div class="wrapper">
    <div class="tabs">
      <div class="tab">
        <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
        <label for="tab-1" class="tab-label">English</label>
        <div class="tab-content">My father had a small estate in Nottinghamshire: I was the third of five sons. He sent me to Emanuel College in Cambridge at fourteen years old, where I resided three years, and applied myself close to my studies; but the charge of maintaining me, although I had a very scanty allowance, being too great for a narrow fortune, I was bound apprentice to Mr. James Bates, an eminent surgeon in London, with whom I continued four years. </div>
      </div>
      <div class="tab">
        <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
        <label for="tab-2" class="tab-label">Sinhala</label>
        <div class="tab-content">My father now and then sending me small sums of money, I laid them out in learning navigation, and other parts of the mathematics, useful to those who intend to travel, as I always believed it would be, some time or other, my fortune to do. </div>
      </div>
      <div class="tab">
        <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
        <label for="tab-3" class="tab-label">Tamil</label>
        <div class="tab-content">When I left Mr. Bates, I went down to my father: where, by the assistance of him and my uncle John, and some other relations, I got forty pounds, and a promise of thirty pounds a year to maintain me at Leyden: there I studied physic two years and seven months, knowing it would be useful in long voyages.</div>
      </div>
    </div>
    
  </div>

<div class="wrapper">
  <a href="{{ url('/check') }}">Check Eligibility</a>
  <a href="{{ url('register') }}">Register</a>
  <a href="{{ route('login') }}">Login</a>
</div>
<div class="footer">
  <p> &copy; All Rights Reserved.</p>
</div>
 
</body>
</html>