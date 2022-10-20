<html>
    <head>
     <style>
        P1{
            background-color: white;
            font-family: 'Times New Roman', Times, serif;
            font-size: larger;
        }
    h4{
      font-size: 19px;
      font-family: sans-serif;
      padding: 20px 0;
    }
    a{
      padding:5px;
      color:black;
      text-decoration: none;
    }
    a:hover,a:active{
      background-color: brown;
      transition: all 0.8s;
    }
    .box{
      padding: 10px;
    }
    form{
         margin-left: 500px;
    }
    .boox{
        padding-right: 50px;
    }
    .b1{
        padding-right: 70px;
    }
    body{

    }
     </style>
</head>
<body>
<img src="https://i.postimg.cc/nc5smFFw/bank-poster.png"
width="1000"
height="150"/>
<body bgcolor="#bdb9a7";text="red"></body>
<!-- <body bgcolor="#bdb9a7";text="red"></body> -->
   <table>
    <TR>
    <TH><h3><b><a href="https//www.google.com"=_blank>Dashboard |</a></b></h3></TH>
    <TH><h3><b><a href="https//www.google.com"=_blank>Open A/C |</a></b></h3></TH>
    <TH><h3><b><a href="https//www.google.com"=_blank>Loan |</a></b></h3></TH>
    <TH><h3><b><a href="https//www.google.com"=_blank>Deposit |</a></b></h3></TH>
    </TR>
    </table>
  <div>
   
    <p><h1><left padding=10px>Account Opening Details</left></h1></p>
    <h3>Customer Name:
    <?php
      echo $_GET['firstname'];
    ?></h3>
    <h3>Address:
    <?php
      echo $_GET['address'];
    ?></h3>
    <h3>City:
    <?php
      echo $_GET['city'];
    ?></h3>

  </div>


   
</body>
</html>
 
