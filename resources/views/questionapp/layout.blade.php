<html>
    <head>
        <title>Heading</title>
        <link rel="stylesheet" >
        <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>
    <style>
      body{
    margin:0px;
    padding:0px;
}
#header
{
    height:60px;
    background: linear-gradient(100deg,#f39c12,transparent);
    box-sizing: border-box;
    width:100%;
    /* overflow:hidden; */
}
.dropdown-bars
{
  display:none;
}
.title
{
    display:inline-block;
    margin-left:0.3125rem;
}
.img
{
    width:60px;
    height:60px;
    margin-left:0.625rem;
    vertical-align:middle;
}
.list
{
    display:inline;
}
.li-item
{
    display:inline;
    color:black;
}
.nav-links
{
    color:#c0392b;
    margin-left:0.3125rem;
    text-transform:uppercase;
    text-decoration: none;
}
.search
{
    display: inline-block;
    box-sizing:border-box;
    margin-left:22rem;
    margin-top:15px;
    /* vertical-align: middle; */
}
#search-bar
{
    border-radius:15px;
    border-width:0px;
}
.icons
{
    display: inline-block;
    margin-left:2.5rem;
    margin-top:18px;
}
.icons i{
    margin-left:1.6rem;
}
.dropdown{
    display:inline-block;
    position:relative;
    /* float: right; */
    margin-top:5px;
}
.dropdown .username {
    font-size: 16px;  
    border: none;
    outline: none;
    color: black;
    padding: 14px 16px;
    text-transform:uppercase;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
  }
  
 .dropdown:hover .username {
    background-color: red;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width:160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }
  
  .dropdown-content a:hover {
    background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  @media(max-width:1378px)
  {
    .search
        {
            margin-left:10rem;
        }
  }
  @media(max-width:1190px)
  {
    .search
        {
            margin-left:3rem;
        }
        .icons
        {
            margin-left:1.2rem;
        }
        .icons i{
            margin-left:0.6rem;
        }
  }
  @media(max-width:1010px)
  {
        .list{
            padding:0px;
        }
      .search{
          display: none;
      }
  }
  @media(max-width:745px)
  {
      .title{
          display:none;
      }
      .dropdown,#user{
          display:none;
      }
      .list{
          display:none;
      }
      .icons{
          margin-left:20%;
      }
      .img{
          margin-left:40%;
      }
      .dropdown-bars{
        display:inline-block;
        margin-top:5px;
    }
      .dropdown-content-bars {
        display: none;
        margin-right:50%;
        position: fixed;
        top:60px;
        background-color: #f9f9f9;
        /* min-width:160px; */
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      }
      
      .dropdown-content-bars a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
      }
      
      .dropdown-content-bars a:hover {
        background-color: #d35400;
      }
      
      .dropdown-bars:hover .dropdown-content-bars {
        display: block;
        left:0px;
      }
      /*  */
      #bars
      {
        display:inline;
        position:fixed;
        left:0.725rem;
        top:20px;
      }
  }
  @media(max-width:298px)
  {
      #header
      {
          overflow:hidden;
      }
  }
      </style>
    <body>
        <header id="header">
                <div class="dropdown-bars">
                        <i class="fa fa-bars" id="bars" aria-hidden="true"></i> 
                    <div class="dropdown-content-bars">
                                <a href="/team-b(paymatrix)/login-signup-profile/profile.php#">Profile</a>
                                <a href="#">Settings</a>
                                <a href="/team-b(paymatrix)/login-signup-profile/logout.php">Logout</a>
                    </div>
                </div> 
                <a href="http://www.google.com"><img class="img" src="Cod.JPG" alt="Sorry!image cannot be loaded"></a>
                <p class="title">CODE FOR LIFE</p>
                <ul class="list">
                        <li class="li-item"><a class="nav-links" href="/team-B(paymatrix)/practice/practice.html">practice</a></li>
                        <li class="li-item"><a class="nav-links"href="/team-b(paymatrix)/compete/compete.html">compete</a></li>
                        <li class="li-item"><a class="nav-links"href="/team-B(paymatrix)/leaderboard/leaderboard.php">leaderboard</a></li>
                </ul>
                <div class="search">
                    <i class="fa fa-search" id="search-icon" aria-hidden="true"></i>
                    <input type="text" id="search-bar" placeholder="Search">
                </div>
                <div class="icons">
                    <i class="fa fa-comment-o" id="message" aria-hidden="true"></i>
                    <i class="fa fa-bell-o"    id="comment" aria-hidden="true"></i>
                    <i class="fa fa-user-o" id="user" aria-hidden="true"></i>
                </div>
                <div class="dropdown">
                    <button class="username">username 
                    <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                            <a href="/team-b(paymatrix)/login-signup-profile/profile.php#">Profile</a>
                            <a href="#">Settings</a>
                            <a href="/team-b(paymatrix)/login-signup-profile/logout.php">Logout</a>
                    </div>
                </div> 
        </header>

<main>


  <div class="container">


    @yield('Content')
  </div>
  </main>


</body>
</html>
