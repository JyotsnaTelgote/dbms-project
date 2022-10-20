<html>
<head>
    <style>
    form{
        margin-left: 500px;
    }
    p{
        font-size: largest;
    }
    </style>
</head>




<body>
    <img src="https://i.postimg.cc/nc5smFFw/bank-poster.png"
    width="1000"
    height="150"/>
    <body bgcolor="#bdb9a7";text="red"></body>
    <table>
        <TR>
        <TH><h3><b><a href="https//www.google.com"=_blank>Dashboard |</a></b></h3></TH>
        <TH><h3><b><a href="https//www.google.com"=_blank>Open A/C |</a></b></h3></TH>
        <TH><h3><b><a href="https//www.google.com"=_blank>Loan |</a></b></h3></TH>
        <TH><h3><b><a href="https//www.google.com"=_blank>Deposit |</a></b></h3></TH>
        </TR>
        </table>
        <div id="form">
        <p><h1><left padding=10px>Login Page</left></h1></p>
        <form action="login_check.php"method="get"></form>
    <h3>User name:
    <?php
      echo $_GET['firstname'];
    ?></h3>
    <h3>Password
    <?php
      echo $_GET['pwd'];
    ?></h3>
    </form>
        </div>
</body>
</html>