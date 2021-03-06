<html>
    <head>
        <title>CLUB VIEW</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <?php
        session_start();
        include "connection.php";
        
        // kalau user login sebagai student
        if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) { 
            $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Stu_Name"];
        ?>
        <!-- page utk student yg dah login -->
        <!-- menu kecik kat atas sekali -->
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    <li><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <center>
                        <h1>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </h1>
                    </center>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Join.php">JOIN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        <?php
        // kalau user login sebagai staff
        } else if(isset($_SESSION["staID"]) && $_SESSION["staID"]!=null) { 
            $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["staID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Sta_Name"];
        ?>
        <!-- page utk student yg dah login -->
        <!-- menu kecik kat atas sekali -->
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    <li><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <center>
                        <h1>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </h1>
                    </center>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        <?php
        // kalau user x login lagi
        } else { 
        ?>
        <!-- page utk student yg dah login -->
        <!-- menu kecik kat atas sekali -->
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Stud_Login.php">Student Login</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Staf_Login.php">Staff Login</a></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ############# -->
        
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <center>
                        <h1>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </h1>
                    </center>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############# -->
    
        <!-- Dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active"><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="#" class="drop">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/registerproposal/pages/Stud_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/registerproposal/pages/Staf_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/registerproposal/pages/Staf_Login.php">LOGIN</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
        <?php
        }
        ?>
        
        <!-- Ruang utk view -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">View Club</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak review club -->
                                        <center>
                                            <div>
                                                <table style="color:grey">
                                                    <tr>
                                                        <td><b>No.</b></td>
                                                        <td><b>Club ID</b></td>
                                                        <td><b>Club Name</b></td>
                                                        <td><b>Club Advisor</b></td>
                                                        <td><b>Club Description</b></td>
                                                    </tr>
                                                <?php
                                                $sql = "SELECT * FROM club";
                                                $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                                                $x = 0;
                                                while($fetch = mysqli_fetch_array($query) or die(mysqli_error($conn))) {
                                                ?>
                                                    <tr>
                                                        <td><?php echo ($x+1); ?></td>
                                                        <td><?php echo $fetch["C_ID"]; ?></td>
                                                        <td><?php echo $fetch["C_Name"]; ?></td>
                                                        <td><?php echo $fetch["C_Advisor"]; ?></td>
                                                        <td><?php echo $fetch["C_Desc"]; ?></td>
                                                    </tr>
                                                <?php
                                                $x++;
                                                }
                                                ?>
                                                </table>
                                            </div>
                                        </center>
                                        <!-- ############# -->
                                    </div>
                                </li>
                            </ul>
                        </figure>
                    </div>
                </main>
            </div>
        </div>
        <!-- ############# -->
        <!-- ############# -->
        
        <!-- ruang kosong kat bawah page -->
        <div class="wrapper row5">
          <div id="copyright" class="clear"></div>
        </div>
        <!-- ############# -->
    
        <!-- JAVASCRIPTS --> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.fitvids.min.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/jquery.mobilemenu.js"></script> 
        <script src="http://localhost/proposalregister/layout/scripts/nivo-lightbox/nivo-lightbox.min.js"></script>
        <!-- ############# -->
    </body>
</html>