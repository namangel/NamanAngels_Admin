
<html>
<head>
    <title>Admin profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<style>
  body{
    margin: 0px;
    padding: 0px;
    background-image: linear-gradient(to bottom,  #2a2b3d, #2a2b3d 50%, white 50%, white);
    background-size: cover;
    background-repeat: no-repeat;
    font-family: 'Droid Sans', sans-serif;
}
.profile{
    position: fixed;
    border: 1px solid lightgray;
    background-color: white;
    width    : 700px;
    left     : 50%;
    top      : 45%;
    margin-left : -200px;
    margin-top  : -100px;
    padding: 30px;
    box-sizing: border-box;
}
.img{
    float: left;
    margin-left: 20px;
    max-height: 400px;
    max-width: 400px;
} 
.detail{
    float: right;
}
.detail div{
    float: center;
    width: 400px;
    padding: 10px;
    margin-top:10px; 
    font-size: 22px;
    box-sizing: border-box;
    border: 1px solid lightgray;
}
.detail button{
    float: right;
    margin-top: 20px;
    width: 15%;
    border: none;
    background-color: #ff8533;
    color: white;
    cursor: pointer;
    font-size: 18px;
}
#overlay{
    position: fixed;
    overflow-y: scroll;
    display: none;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color:rgba(0,0,0,0.5);;
    z-index: 2;
    cursor: pointer;
}
.compbasics{
    display: grid;
    justify-items: center;
    padding: 2em;
}

.form{
    justify-items: center;
    align-items: center;
    width: 100%;
    margin: 200px auto;
    background-color: #eee;
    padding: 1em;
}
.profform{
    background-color: #eee;
}
.close{
    float:right;
}
.compbasics div{
    padding: 10px;
    margin: 10px;
}
.compbasics input,select,textarea{
    size: 255pt;
    width: 100%;
}
.compbasics butn{
    float: right;
}
.save{
    background-color: #2a2b3d;
    color: white;
    border:2px solid #2a2b3d;
    padding: 5px;
    margin-left: 10px;
}

.cancel{
    margin-top: 5px;
    border:2px solid #2a2b3d;
    background-color: white;
    padding: 5px;
    cursor: pointer;
}
.cancel:hover,.pencil:hover,.add:hover,.b2:hover{
    background-color:#eee;
    cursor:pointer;
}
.save:hover,.b1:hover{
  opacity:0.6;
  cursor:pointer;
}

</style>
<body>
<?php require "sidebar.php" ?>
  <div class="profile">
        <img src="img/ProfilePic.png"></img>
    <div class="detail">
        <div>Name</div>
        <div>Designation</div>
        <div>Username</div>
        <button onclick="on()">Edit</button>
    </div>
    <div id="overlay">
        <div class="compbasics">
            <form class="profform" method="post" action='profile.php' enctype="multipart/form-data">
                <button class="close" onclick="off()"><i class="fa fa-close"></i></button>
                <div class="i1">
                    <h2>Admin Basics</h2>
                </div>
                <div class="i2">
                    <label>Profile Image</label><br>
                    <input type="file"><span class="tooltiptext">Choose file of type .jpeg, .png, .jpg of size less than 5MB!</span>
                </div>
                <div class="i2">
                    <label>Name</label><br>
                    <input type="text">
                </div>
                <div class="i5">
                    <label>Designation</label><br>
                    <input type="text">
                </div>
                <div class="butn">
                    <button class="cancel" onclick="off()">Cancel</button> <button class="save" name="cbsave">Save</button>
                </div>
            </form>
        </div>
    </div>
  </div>
    <script>
        function on(){
            document.getElementById("overlay").style.display = "block";
        }
        function off(){
            document.getElementById("overlay").style.display = "none";
        }
    </script>
</body>
</html>