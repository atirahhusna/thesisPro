<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <style>

      body
      {<!-- class = . , id = # -->
        font-family: "Times New Roman", Times, serif;
      }

        ul.navigation{ 
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #fffff;
        }
        
        li.navigation {
        float:left;
        }
        
        li a.navigation {
        display: block;
        color: black;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }
        
        li a:hover{
          text-decoration: underline;
          color: #054bb4;
          
        }

        #content{
          background-color: #658CC2;
          height: 500px;
        }

        li.button button {
        background-color: #054BB4;
        border:none;
        color: white;
        margin-top:15px;
        padding: 10px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        cursor: pointer;
        font-weight: bold;
        }

        li.button.button1 button{border-radius:20px;}

        li.button.button1 button:hover {
        background-color: black; /* change background color on hover */
        text:white;
}

       

    </style>
  </head>

  

<body>

<div id="class">

<ul class="navigation">
    <li class="navigation" style="margin-left: 150px; margin-right: 300px;" ><img src="{{ URL('images/logo.jpg') }}" alt="logo" width="80" height="80"></li>
		<li class="navigation" style = "padding-top:10px;"><a href="#home"  class="navigation">HOME</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#news"  class="navigation">NEWS</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#contact" class="navigation" >CONTACT</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#about" class="navigation">ABOUT</a></li>
    <li class="navigation" style = "padding-top:10px"><a href="#home"  class="navigation">HOME</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#news"  class="navigation">NEWS</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#contact" class="navigation" >CONTACT</a></li>
		<li  class="navigation" style = "padding-top:10px; margin-right: 30px;"><a href="#about" class="navigation">ABOUT</a></li>
    <li  class="button button1"><button type="button" onclick="">ADD PUBLICATION ></button></li>
        
	</ul>

</div>

<div id="content">
  <p>content</p>

</div>


	

</body>

</html>