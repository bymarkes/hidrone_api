<head>
<style>
  body{
  width: 100%;
  height:100%;
  position:relative;
  overflow:hidden;
}
.container{
  position: absolute;
  top: 50%;
  left: 60%;
  transform: translate(-50%, -50%);
}
.btn {
    margin-top: calc(50% + 25px);
    position: relative;
    display: inline-block;
    width: 277px;
    height: 50px;
    font-size: 1em;
    font-weight: bold;
    line-height: 60px;
    text-align: center;
    text-transform: uppercase;
    background-color: transparent;
    cursor: pointer;
    text-decoration:none;
    font-family: 'Roboto', sans-serif;
    font-weight:900;
    font-size:17px;
    letter-spacing: 0.045em;
}

.btn svg {
    position: absolute;
    top: 0;
    left: 0; 
}

.btn svg rect {
    //stroke: #EC0033;
    stroke-width: 4;
    stroke-dasharray: 353, 0;
    stroke-dashoffset: 0;
    -webkit-transition: all 600ms ease;
    transition: all 600ms ease;
}

.btn span{
  background: rgb(255,130,130);
  background: -moz-linear-gradient(top, #df4444 0%, #df4444 1%, #159dbb 100%, #207cca 100%, #7db9e8 100%);
  background: -webkit-linear-gradient(left, #df4444 0%,#df4444 1%,#159dbb 100%,#207cca 100%,#7db9e8 100%);
  background: linear-gradient(to right, #df4444 0%,#df4444 1%,#159dbb 100%,#207cca 100%,#7db9e8 100%);
 filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#df4444', endColorstr='#7db9e8',GradientType=0 );radient( startColorstr='#ff8282', endColorstr='#e178ed',GradientType=1 );
  
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

}

.btn:hover svg rect {
    stroke-width: 4;
    stroke-dasharray: 196, 543;
    stroke-dashoffset: 437;
}
.hi{
  width: 50%;
  height: auto;
  margin-bottom: -200px;
  margin-left: 0px;
}

</style>
</head>
<body>

<link href='https://fonts.googleapis.com/css?family=Lato|Roboto:400,900' rel='stylesheet' type='text/css'>
<div class="container">
<img src="images/hi3.png" class="hi"></img></br>
  <a href="{{url('/map')}}" class="btn">
  <svg width="277" height="62">
    <defs>
        <linearGradient id="grad1">
            <stop offset="0%" stop-color="#df4444"/>
            <stop offset="100%" stop-color="#159dbb" />
        </linearGradient>
    </defs>
     <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
  </svg>
    <span>Welcome to HiDrone</span>
</a>
</div>
</body>