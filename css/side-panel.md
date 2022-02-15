  # Side panel with a left-slide animation

  The code below is [heavily inspired by W3Schools](https://www.w3schools.com/howto/howto_js_sidenav.asp).
  
    <!DOCTYPE html>
    <html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    
    .sidenav {
        color: white;
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #111;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }
    
    .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 25px;
        color: #818181;
        transition: 0.3s;
    }
    
    .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }

    </style>
    </head>
    <body>
    
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div>Lorem ipsum</div>
    </div>
    
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>
    
    <script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "250px";
    }
    
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }
    </script>
        
    </body>
    </html> 
  