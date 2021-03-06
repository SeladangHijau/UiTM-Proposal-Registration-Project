<html>
    <head>
        <title>PROPOSAL UPDATE</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link href="http://localhost/proposalregister/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    
    <body id="top">
        <?php
        session_start();
        include "connection.php";
        
        if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
            $sql = "SELECT Sta_Name FROM staff WHERE Sta_ID='" . $_SESSION["AID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die("Record not found");

            $name = $fetch["Sta_Name"];
        ?>
        
        <!-- page utk admin -->
        <!-- menu kecik kat atas sekali -->
        <div class="wrapper row0">
          <div id="topbar" class="clear"> 
            <nav>
                <ul>
                    <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                    <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                    <li><a href="http://localhost/proposalregister/pages/logout.php">Logout</a></li>
                    <li><span style="color:yellow">ADMINISTRATOR: </span><?php echo $name ?></li>
                </ul>
            </nav>
          </div>
        </div>
        <!-- ########## -->
        
        <!-- logo uitm besaq -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1>
                        <a href="http://localhost/proposalregister/index.php">
                            <img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="1098" height="197">
                        </a>
                    </h1>
                    <h1>&nbsp;</h1>
                    <h1>
                        <center>
                            <a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a>
                        </center>
                    </h1>
                </div>
                <div class="fl_right"></div>
            </header>
        </div>
        <!-- ############### -->
        
        <!-- dropdown menu kat atas -->
        <div class="wrapper row2">
            <div class="rounded">
                <nav id="mainav" class="clear">
                    <ul class="clear">
                        <li class="active">
                            <a href="http://localhost/proposalregister/index.php">HOME</a>
                        </li>
                        <li>
                            <a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Admin_Delete.php">REMOVE ADMINISTRATION</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">STUDENT</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">STAFF</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Staf_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_View.php">VIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Club_Register.php">REGISTER</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="drop">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Approval.php">APPROVAL</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Update.php">UPDATE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############### -->
        
        <?php
        } else if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]) {
            $sql = "SELECT Stu_Name FROM student WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
            $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

            $name = $fetch["Stu_Name"];
        ?>
        <!-- Menu kecik kat atas sekali -->
        <div class="wrapper row0">
            <div id="topbar" class="clear">
                <nav>
                    <ul>
                        <li><a href="http://localhost/proposalregister/index.php">Home</a></li>
                        <li><a href="http://localhost/proposalregister/pages/Contact.php">Contact Us</a></li>
                        <li><a href="http://localhost/proposalregister/pages/logout">Logout</a></li>
                        <li><?php echo $name ?></li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- ############# -->
    
        <!-- Tajuk page -->
        <div class="wrapper row1">
            <header id="header" class="clear">
                <div id="logo" class="fl_left">
                    <h1><a href="http://localhost/proposalregister/index.php"><img src="http://localhost/proposalregister/images/demo/Logo_Universiti_Teknologi_Mara_(UiTM).png" alt="" width="400" height="169"></a></h1>
                    <h1>&nbsp;</h1>
                    <h1><a href="http://localhost/proposalregister/index.php">PROPOSAL REGISTRATION SYSTEM</a></h1>
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
                        <li class="active">
                            <a href="http://localhost/proposalregister/index.php">Home</a>
                        </li>
                        <li><a href="#" class="drop">PROFILE</a>
                            <ul>
                                <li><a href="">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Delete.php">DELETE</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Stud_Update.php">UPDATE</a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="drop" href="#">PROPOSAL</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Review.php">REVIEW</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Register.php">REGISTER</a></li>
                                <li><a href="http://localhost/proposalregister/pages/Prop_Delete.php">DELETE</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="drop">CLUB</a>
                            <ul>
                                <li><a href="http://localhost/proposalregister/pages/Club_Review.php">REVIEW</a></li>
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
    
        <!-- Ruang utk borang delete -->
        <div class="wrapper row3">
            <div class="rounded">
                <main class="container clear"> 
                    <div id="gallery">
                        <figure>
                            <header class="heading">Update Proposal</header>
                            <ul class="nospace clear">
                                <li class="one_quarter first">
                                    <nav class="pagination"></nav>
                                    <div class="clear">
                                        <!-- Borang nak update proposal -->
                                        <div>
                                            <?php
                                            if(isset($_SESSION["stuID"]) && $_SESSION["stuID"]!=null) {
                                                // get proposal details
                                                $sql = "SELECT * FROM proposal WHERE Stu_ID='" . $_SESSION["stuID"] . "'";
                                                $fetch = mysqli_fetch_assoc(mysqli_query($conn, $sql)) or die(mysqli_error($conn));

                                                $propID = $fetch["P_ID"];
                                                $name = $fetch["P_Name"];
                                                $loc = $fetch["P_Location"];
                                                $date = $fetch["P_Date"];
                                                $budget = $fetch["P_Budget"];
                                                $participant = $fetch["P_Participant"];
                                                $desc = $fetch["P_Description"];
                                                $status = $fetch["P_Status"];
                                                $leader = $fetch["P_ProjectLeader"];
                                                $clubID = $fetch["C_ID"];
                                            ?>
                                            <div>
                                                <form method="post" action="http://localhost/proposalregister/pages/Prop_Updatev2.php">
                                                    <table style="color:grey">
                                                        <tr>
                                                            <td><b>Proposal ID</b></td>
                                                            <td><input type="hidden" name="propID" value="<?php echo $propID; ?>"/><?php echo $propID; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="propName"><b>Proposal Name</b></label></td>
                                                            <td><input type="text" id="propName" name="propName" value="<?php echo $name; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="leaderName"><b>Project Leader Name</b></label></td>
                                                            <td><input type="text" id="leaderName" name="leaderName" value="<?php echo $leader; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="location"><b>Proposal Location</b></label></td>
                                                            <td><input type="text" id="location" name="location" value="<?php echo $loc; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="date"><b>Proposal Date</b></label></td>
                                                            <td><input type="date" id="date" name="date" value="<?php echo $date; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="budget"><b>Proposal Budget</b></label></td>
                                                            <td><input type="number" id="budget" name="budget" value="<?php echo $budget; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="participant"><b>Number of Participant</b></label></td>
                                                            <td><input type="number" id="participant" name="participant" value="<?php echo $participant; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="desc"><b>Proposal Description</b></label></td>
                                                            <td><textarea id="desc" name="desc"><?php echo $desc; ?></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><label for="cID"><b>Club ID</b></label></td>
                                                            <td><input type="text" id="cID" name="cID" value="<?php echo $clubID; ?>" required/></td>
                                                        </tr>
                                                        <tr>
                                                            <td colspan='2'>
                                                                <center><input type="submit" name="update" value="Update"/></center>
                                                            </td>      
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                            <?php
                                            } else if(isset($_SESSION["AID"]) && $_SESSION["AID"]!=null) {
                                            ?>
                                            <form method="post" action="http://localhost/proposalregister/pages/Prop_Updatev2.php">
                                                <table style="color:grey">
                                                    <tr>
                                                        <td><b><label for="propID">Proposal ID</label></b></td>
                                                        <td><input type="text" name="propID"/></td>
                                                    </tr>
                                                    <tr>
                                                        <td><input type="submit" name="searchProp" required/></td>
                                                        <td><input type="reset" name="reset" required/></td>
                                                    </tr>
                                                </table>
                                            </form>
                                            <?php
                                            } else echo "Please log in first";
                                            ?>
                                        </div>
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