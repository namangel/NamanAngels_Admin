<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/testside.css" type="text/css">
    <script src="js/testside.js"></script>   
</head>
<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><i class="fa fa-close"></i></a>
        <div class="container">
            <div class="color nam"><h1>Naman Angels</h1></div>
            <div class="prof font">
                <center>
                <div class="name" id="name">Name</div>
                <div class="desig" id="desig">Designation</div>
                <div class="icon">
                    <a href="#"><i class="fa fa-user"></i></a>
                    <a href="#"><i class="fa fa-cog"></i></a>
                    <a href="#"><i class="fa fa-power-off"></i></a>
                </div>
                </center>
            </div>
            <div class="color navbar font">
                <ul class="list">
                    <a href="#"><li><i class="fa fa-dashboard"></i>&nbsp;Dashboard</li></a>
                    <a href="#"><li><i class="fa fa-registered"></i>&nbsp;&nbsp;Login/Register</li></a>
                    <a href="#"><li><i class="fa fa-envelope-o"></i>&nbsp;&nbsp;Inbox</li></a>
                    <li id="down" class="font"><button onclick="on()" class="butn font"><i class="fa fa-address-book-o"></i>&nbsp;&nbsp;View Profiles
                        <i class="fa fa-angle-down" style="float:right;"></i></button>
                    </li>
                    <div id="sub" class="font">
                    <li><button onclick="off()" class="butn font"><i class="fa fa-address-book-o"></i>&nbsp;&nbsp;View Profiles
                        <i class="fa fa-angle-down" style="float:right;"></i></button>
                    </li>
                    <a href="#"><li class="subli font"><i class="fa fa-rocket"></i>&nbsp;&nbsp;Startup</li></a>
                    <a href="#"><li class="subli font"><i class="fa fa-money"></i>&nbsp;&nbsp;Investor</li></a>
                    </div>
                    <li><a href="#"><i class="fa fa-cog"></i>&nbsp;&nbsp;Services</a></li>
                </ul>
            </div>
        </div>
    </div>

<!-- new nav -->
    <div class="new_sidebar" id="new_sidebar">
        <center><button class="openbtn" onclick="openNav()"><i class="fa fa-navicon"></i></button></center>
        <div class="prof">
            <center>
            <div class="icon">
                <a href="#"><i class="fa fa-user"></i></a>
                <a href="#"><i class="fa fa-cog"></i></a>
                <a href="#"><i class="fa fa-power-off"></i></a>
            </div>
            </center>
        </div>
        <div class="color new_navbar">
            <ul class="list">
                <a href="#" title="Dashboard"><li><i class="fa fa-dashboard"></i></li></a>
                <a href="#" title="Register"><li><i class="fa fa-registered"></i></li></a>
                <a href="#" title="Inbox"><li><i class="fa fa-envelope-o"></i></li></a>
                <li id="down_new"><a onclick="on_new()" class="butn" title="View profile"><i class="fa fa-address-book-o"></i>
                    <i class="fa fa-angle-down" style="float:right;"></i></a>
                </li>
                <div id="new_sub">
                <li><a onclick="off_new()" title="View profile" ><i class="fa fa-address-book-o"></i> 
                    <i class="fa fa-angle-down" style="float:right;"></i></a>
                </li>
                <a href="#" title="Startup"><li class="new_subli"><i class="fa fa-rocket"></i></li></a> 
                <a href="#" title="Investor"><li class="new_subli"><i class="fa fa-money"></i></li></a> 
                </div>
                <li><a href="#" title="Services"><i class="fa fa-cog"></i></a></li> 
            </ul>
        </div>
    </div> 

</body>
</html> 
