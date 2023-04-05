<html>

	<head><title>School Management System</title></head>
	<style>
  
body {
  font-family: Arial, Helvetica, sans-serif;

}

.navbar {
  overflow: hidden;
  background-color: Teal;
  text-align: center;
}

.navbar a {
  float:left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
 text-align:center;
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-align:
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: blue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  text-align:center;
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

  text-align:center;
  
}
</style>
</head>
<hr>
zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<hr>
        <h1 style="text-align:center;">Rishton Primary School</h1>
 <hr>
zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
<hr>
<h2 style="text-align:center;">Welcome to our School Management System</h2>
	


<div style="text-align:center;"class="navbar">
  <a href="index.html">Home</a>


   <!-- Students-->
            <div class="dropdown">
                <button class="dropbtn">Students
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                    <a href="AddStudent.html">Add A Student</a>
                    <a href = "UpdateStudent.php">Update A Student</a>
                  <a href="DeleteStudent.html">Remove A student</a>
                    <a href="seestudent.php">See All Students</a>
                </div>
             </div> 
          
          
          
            <!-- Parents-->
            <div class="dropdown">
                  <button class="dropbtn">Parents
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="AddParent.html">Add A Parent</a>
                  <a href ="UpdateParents.php">Update A Parent</a>
                  <a href="DeleteParents.html">Remove A Parent</a>
                  <a href="seeparent.php">See All Parents</a>
                </div>
             </div> 
          
            <!-- Teachers-->
            <div class="dropdown">
                  <button class="dropbtn">Teachers
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="AddTeachers.html">Add A Teacher</a>
                  <a href = "UpdateTeachers.php">Update A Teacher</a>
                  <a href="DeleteTeachers.html">Remove A Teacher</a>
                  <a href="seeTeachers.php">See All Teachers</a>
                </div>
             </div> 
          
          
            <!-- Class-->
            <div class="dropdown">
                  <button class="dropbtn">Class
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="AddClass.html">Add A Class</a>
                  <a href = "UpdateClass.php">Update A Class</a>
                  <a href="DeleteClass.html">Remove A Class</a>
                  <a href="seeclass.php">See All Classes</a>
                </div>
             </div> 
            </div>
          
                
           <body>
            
          </body>	
          <p>Choose what you would like to do?</p>
	<body>
	
		<?php
		
		$link = mysqli_connect("sdb-56.hosting.stackcp.net", "student102-353031337b8a", "ua92-studentAc", "student102-353031337b8a");
		// Check connection
		if ($link === false) {
			die("Connection failed: ");
		}
		?>
	
		<hr>

		<br>
		<h3 style="text-align:center;">See All Teachers</h3>
	
		<table>
		
			<tr>
				<th width="150px"> Teacher ID:<br><hr></th>
              <th width ="150px"> Teacher FNAME<br><hr></th>
              <th width ="150px"> Teacher LNAME <br><hr></th>
                <th width="150px">Teacher Phone:<br><hr></th>
			</tr>
					
			<?php
			$sql = mysqli_query($link, "SELECT Teacher_ID,Teacher_FNAME,Teacher_LNAME, Teacher_Medical, Teacher_Phone,Teacher_Background,Teacher_Address  FROM Teacher");
			while ($row = $sql->fetch_assoc()){
			echo "
			<tr>
				<th>{$row['Teacher_ID']}</th>
                <th>{$row['Teacher_FNAME']}</th>
                <th>{$row['Teacher_LNAME']}</th>
				<th>{$row['Teacher_Phone']}</th>
            </tr>";
			}
			?>
			
		</table>
		
		<?php
		$link->close();
		?>
	
		<hr>
		
	</body>

</html>