<head>
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  top: 50%;
  background-color: #5DADE2;
  border-top-left-radius: 10px;
  border-bottom-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;

}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  width: 20%;
  margin:0;
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px;
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px;
}


.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #3498DB;
  color: white;
}
      /* The dropdown container */
      .dropdown {
      float: left;
      overflow: hidden;
      color: #3498DB;
      }
      /* Dropdown button */
      .dropdown .dropbtn {
      float: center;
      color: #3498DB;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
      min-width:21%;
      margin:0;
      }
      /* Dropdown content (hidden by default) */
      .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 19%;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
      }
      /* Links inside the dropdown */
      .dropdown-content a {
      float: none;
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
      text-align: center;
      min-width:100%;
      }
      /* Add a grey background color to dropdown links on hover */
      .dropdown-content a:hover {
      min-width:100%;
      background-color: #cc2;
      }
      /* Show the dropdown menu on hover */
      .dropdown:hover .dropdown-content {
      display: block;
      }

.img {
  border-radius: 10%;
}

/* For the contact */
* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea, input[type=email]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
  border-radius: 4px;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .container, input[type=submit] {
    width:85%;
    height: 65%;
    margin-top: 0;
  }

  .column {
    width: 100%;
    height: auto;
  }

  .img {
    max-width: 100%;
    min-width: 300px;
    height: auto;
  }

}


@media screen and (max-width: 600px) {
  .topnav {position: relative;}
  .topnav a {
    float: left;
    display: block;
    text-align: center;
    width:100%;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }

}

</style>
</head>

<body>
  <div class="topnav">
    <a href="https://simonpastor.com">Home</a>
    <a href="https://simonpastor.com/portfolio">Portfolio</a>
    <!-- <div class="dropdown"> */
      <button class="dropbtn">
        <a href="#contact">SimonSays</a>
      <i class="fa fa-caret-down"></i>
      </button>
      <div class="dropdown-content">
         <a href="#">Emperor Gaius Trump</a>
         <a href="#">Harmless Tradition or (Khat)astrophe?</a>
         <a href="#">Post-Covid Social Status:Unclear</a>
      </div>
    </div> -->
    <a href="https://simonpastor.substack.com">SimonSays</a>
    <a href="https://simonpastor.com/resume">Resume</a>
    <a class="active" href="https://simonpastor.com/contact">Contact</a>
  </div>

<br>

<div class="container">
  <div style="text-align:center">
    <center>
    <p style="font-size:33px">
    <font color='#5DADE2'>
      <strong>Please reach out for any ideas, projects, feedback or just to say hello! ????</strong>
    </font>
    </p>
    </center>
  </div>
  <div class="row">
    <div class="column">
      <center>
      <img src="logo.png?raw=true" class="responsive" style="width:100%; border-radius: 10%" >
      <a href="https://www.linkedin.com/in/simonpastor/">Connect on Linkedin ???????????</a>
      <br><br>
      <a href="https://twitter.com/the_simonpastor">Follow me on Twitter ????</a>
      <br><br>
      <a href="https://simonpastor.medium.com/">Read my articles on Medium ??????</a>
      <br><br>
      <a href="https://simonpastor.substack.com">Check out my Substack Newsletter????</a>
      </center>
    </div>
    <div class="column">
      <form action="https://formspree.io/f/mvodzdww" method="POST">
        <label for="full-name">Full Name</label>
        <input type="text" id="full-name" name="name" placeholder="Your full name..." required="">
        <br><br>
        <label for="email-address">Email Address</label>
        <br>
        <input type="email" id="email-address" name="_replyto" placeholder="Your email..." required="">
        <br><br>
        <label for="message">Message</label>
        <textarea id="message" name="message" placeholder="Write something..." style="height:170px" required=""></textarea>
        <center><input type="submit" value="Send"></center>
      </form>
    </div>
  </div>
</div>

<!-- <center>
  <br>
  Hey, I'm Simon, an LSE Government and History alumnus passionate about the intersection of Data and Politics/Policy.
  <br> Don't hesitate to reach out!
  <br><br>
  <a href="https://www.linkedin.com/in/simonpastor/">View My Linkedin Profile</a>
  <br><br>
  <a href="https://twitter.com/the_simonpastor">Follow me on Twitter ????</a>
  <br><br>
  <a href="https://simonpastor.substack.com">Check out my Substack ????</a>
  <link rel="stylesheet" href="style.css" type="text/css" />
</center> -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192273691-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-192273691-1');
</script>

<!-- Simon Pastor ?? 2021 -->

</body>
