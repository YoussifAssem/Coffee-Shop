<html>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  
}


li,a,button{
  font-family: "Montserrat",sans-serif;
  font-weight: 500;
  font-size: 16px;
  color: white;
  text-decoration: none;
}
header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 30px 10px;
  height: 100px;
  background-color: black;
  /* margin-bottom: 50px; */
}
.logo{
  cursor:pointer;
  width: 300px;
  height: 100%;
  text-align: center;
}

.logo img {
  width: 100px;
  height: 100%;
}
nav{
  width:400%;
  margin: 0 auto;
  text-align: left;
}
.nav_links{
   
  list-style: none;
}
.nav_links li{
  display: inline-block;
  
  padding: 0px 20px;
}
.nav_links li a{
  transition: all 0.3s ease 0s;
}
.nav_links li a:hover{
  color: #30593D;
   
}
.nav_links li a:after {
  content: "";
  position: absolute;
  text-decoration: #30593D;
  height: 10px;
  width: 0;
  left: 0;
  bottom: -10px;
  transition: 0.3s;
}
.nav_links li a:hover:after {
  width: 100%;
}
.button{
  padding: 9px 25px;
  /* margin-left: 620px; */
  background-color: white;
  color: black;
border: none;
border-radius: 50px;
cursor:pointer ;
transition: all 0.3s ease 0s;
}
.button:hover{
background-color: #30593D;
}
.button1{
  padding: 9px 25px;
  background-color: #30593D;
  color: white;
  border: none;
  border-radius: 50px;
  cursor:pointer ;
  transition: all 0.3s ease 0s;
  margin-left: 15px;
}
    </style>
<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
</head>

    <header>
        <div class="logo">
            </a>
        </div>
        <nav>
            <ul class="nav_links">
                <li><a href="#">HOME</a></li>
                <li><a href="#">Add</a></li>
                <li><a href="#">Remove</a></li>
                <li><a href="#">View</a></li>
            </ul>
        </nav>
       
         <input type="submit" class="button1" onclick="document.location='#'" value="Log Out" name="submit">
    </header>
    </html>