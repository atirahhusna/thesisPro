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

      input[type=text]{
          margin-bottom: 20px;
          width: 300px;
          height: 50px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #f8f8f8;
          font-size: 16px;
          resize: none;
          
        }

        #upload{
          padding-left: 100px;
          background-color: #ffffff;
          width: 300px;
          height: 300px;
          border: 2px solid blue;
          padding: 50px;
          margin: 20px;
          text-align:center;
          padding-top:80px;
        }

        table.center {
          margin-left: auto; 
          margin-right: auto;
        }

        textarea {
          width: 300px;
          height: 150px;
          padding: 12px 20px;
          box-sizing: border-box;
          border: 2px solid #ccc;
          border-radius: 4px;
          background-color: #f8f8f8;
          font-size: 16px;
          resize: none;
        }

        .column{
          padding-right:100px;
        }

        input[type=submit], input[type=reset], input[type=reset]{
        border-style: double;
        color: #ffffff;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        cursor: pointer;
        background-color: #007BFF;
        margin-top: 20px;
      }

      .button-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .button-container button {
        margin: 0 10px;
        padding: 10px 20px;
        font-size: 16px;
        background-color:  #054BB4;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .button-container button:hover {
        background-color: black;
    }

    #add{
      background-color: #658CC2;
      padding-top:40px;
      padding-bottom:40px;
    }

    #viewSearchDelete{
      padding-top:40px;
      padding-bottom:40px;
      background-color: #ffffff;
    }

    #list{
          padding-left: 100px;
          background-color: #ffffff;
          width: 1400px;
          height: 300px;
          border: 2px solid blue;
          padding: 50px;
          margin: 20px;
          text-align:center;
          padding-top:80px;
        }

    #edit{
      padding-top:40px;
      padding-bottom:40px;
      background-color: #658CC2;
    }

    #footer{
      background-color: #ffffff;
      text-align:justify;
      padding-top:10px;
    }

    h3{
      padding-left:30px;
    }

    hr{
      border: 2px solid black;
      width:1100px;
      margin-left: auto; 
      margin-right: auto;
    }

    </style>
  </head>

  

<body>

<div id="class">

<ul class="navigation">
    <li class="navigation" style="margin-left: 150px; margin-right: 300px;" ><img src="{{ URL('images/logo.jpg') }}" alt="logo" width="80" height="80"></li>
		<li class="navigation" style = "padding-top:10px;"><a href="#home"  class="navigation">HOME</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="http://127.0.0.1:8000/publicationManager"  class="navigation">MY PUBLICATION</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="http://127.0.0.1:8000/publicationReport" class="navigation" >REPORT</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#about" class="navigation">ABOUT</a></li>
    <li class="navigation" style = "padding-top:10px"><a href="#home"  class="navigation">HOME</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#news"  class="navigation">NEWS</a></li>
		<li  class="navigation" style = "padding-top:10px"><a href="#contact" class="navigation" >CONTACT</a></li>
		<li  class="navigation" style = "padding-top:10px; margin-right: 30px;"><a href="#about" class="navigation">ABOUT</a></li>
    <li  class="button button1"><button type="button" onclick="">ADD PUBLICATION ></button></li>
        
	</ul>

</div>

<div id="content">
  <div id="add">
  <h3>Add a New Publication</h3>

  <table class="center">

    <tr>

      <td class="column">
      <p style="margin-bottom:5px;">Title</p>
      <input type="text" id="title" name="title" placeholder="Enter publication title"  class="input-width" required>
      <p style="margin-bottom:5px;">DOI</p>
      <input type="text" id="DOI"  name="DOI" placeholder="Enter DOI" required>
      <p style="margin-bottom:5px;">Abstract</p>
      <textarea name="abstract" rows="9" column="63" placeholder="Enter publication abstract"></textarea>   
      </td>

      <td class="column">
      <p style="margin-bottom:5px;">Keywords</p>
      <input type="text" id="keywords" name="keywords" placeholder="Enter publication keywords"  required>
      <p style="margin-bottom:5px;">Authors</p>
      <input type="text" id="authors" name="authors" placeholder="Enter publication authors"  required>
      <p style="margin-bottom:5px;">Instituition/Affiliation</p>
      <input type="text" id="instituition" name="instituition" placeholder="Enter publication instituition" required>
      <p style="margin-bottom:5px;">Publication Types</p>
      <input type="text" id="types" name="types" placeholder="Enter publication types" required>
      </td>

      <td>
      <div id="upload">
      <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80" >
      <p>Drag file to upload</p>
      </div>
      <div class="button-container">
          <button type="reset">Reset</button>
          <button type="submit">Submit</button>
        
      </div>
      

      </td>

    </tr>

  </table>
  </div>

  <div id="viewSearchDelete">
    <h3>My Publications</h3>

    <div id="list">

    </div>
  </div>

  <div id="edit">
  <h3>Edit Publications</h3>

  <table class="center">

    <tr>

      <td class="column">
      <p style="margin-bottom:5px;">Title</p>
      <input type="text" id="title" name="title" placeholder="Enter publication title"  class="input-width" required>
      <p style="margin-bottom:5px;">DOI</p>
      <input type="text" id="DOI"  name="DOI" placeholder="Enter DOI" required>
      <p style="margin-bottom:5px;">Abstract</p>
      <textarea name="abstract" rows="9" column="63" placeholder="Enter publication abstract"></textarea>   
      </td>

      <td class="column">
      <p style="margin-bottom:5px;">Keywords</p>
      <input type="text" id="keywords" name="keywords" placeholder="Enter publication keywords"  required>
      <p style="margin-bottom:5px;">Authors</p>
      <input type="text" id="authors" name="authors" placeholder="Enter publication authors"  required>
      <p style="margin-bottom:5px;">Instituition/Affiliation</p>
      <input type="text" id="instituition" name="instituition" placeholder="Enter publication instituition" required>
      <p style="margin-bottom:5px;">Publication Types</p>
      <input type="text" id="types" name="types" placeholder="Enter publication types" required>
      </td>

      <td>
      <div id="upload">
      <img src="{{ URL('images/upload.jpg') }}" alt="upload" width="80" height="80" >
      <p>Drag file to upload</p>
      </div>
      <div class="button-container">
          <button type="save">Save</button>
          <button type="submit">Submit</button>
      </div>
      

      </td>

    </tr>

  </table>

  </div>

</div>

<div id="footer">

    <table class="center">
      <tr>
        <td class="column"><img src="{{ URL('images/logo.jpg') }}" alt="logo" width="150" height="150" ></td>
        <td style="width:800px;"><p>THESISPRO is a premier academic platform designed to support postgraduate students in managing and showcasing their scholarly work. Our system offers a comprehensive suite of tools for editing, publishing, and sharing research and publications within expert domains. By facilitating seamless interactions among students, mentors, and staff, THESISPRO aims to enhance academic collaboration and promote excellence in research and education.</p></td>
      </tr>
   </table>
   <hr>
   <p style="text-align:center;">Copyright &copy; 2024 THESISPRO Corporation. All Rights Reserved.</p>
   

</div>


	

</body>

</html>