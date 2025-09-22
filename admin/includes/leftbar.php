<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Dropdown Fix</title>

  <!-- Font Awesome CDN -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background: #ecf0f1;
    }
    .ts-sidebar {
      width: 250px;
      background: #2c3e50;
      min-height: 100vh;
      padding: 0;
    }
    .ts-sidebar-menu {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .ts-sidebar-menu li {
      border-bottom: 1px solid rgba(255,255,255,0.05);
    }
    .ts-sidebar-menu li a {
      display: block;
      color: #ecf0f1;
      padding: 12px 18px;
      text-decoration: none;
    }
    .ts-sidebar-menu li a:hover {
      background: #34495e;
    }
    .ts-label {
      padding: 12px 18px;
      text-transform: uppercase;
      font-size: 13px;
      font-weight: bold;
      color: #bdc3c7;
      border-bottom: 1px solid rgba(255,255,255,0.1);
    }
    /* Submenu */
    .ts-sidebar-menu li ul {
      display: none;
      list-style: none;
      padding: 0;
      margin: 0;
      background: #34495e;
    }
    .ts-sidebar-menu li ul li a {
      padding-left: 40px;
      font-size: 14px;
    }
    /* caret icon */
    .ts-sidebar-menu li.has-sub > a::after {
      content: "\25BC";
      float: right;
      font-size: 10px;
      margin-top: 5px;
    }
    .ts-sidebar-menu li.has-sub.open > a::after {
      content: "\25B2";
    }
  </style>
</head>
<body>

  <nav class="ts-sidebar">
    <ul class="ts-sidebar-menu">
      <li class="ts-label">Main</li>
      <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>

      <li class="has-sub">
        <a href="#"><i class="fa fa-files-o"></i> Blood Group</a>
        <ul>
          <li><a href="add-bloodgroup.php">Add Blood Group</a></li>
          <li><a href="manage-bloodgroup.php">Manage Blood Group</a></li>
        </ul>
      </li>

      <li><a href="donor-list.php"><i class="fa fa-users"></i> Donor List</a></li>
      <li><a href="manage-conactusquery.php"><i class="fa fa-desktop"></i> Manage Contactus Query</a></li>
      <li><a href="manage-pages.php"><i class="fa fa-files-o"></i> Manage Pages</a></li>
      <li><a href="update-contactinfo.php"><i class="fa fa-files-o"></i> Update Contact Info</a></li>
      <li><a href="blood-requests.php"><i class="fa fa-users"></i> Blood Requests</a></li>
      <li><a href="request-received-bydonar.php"><i class="fa fa-search"></i> Search Blood Request</a></li>
    </ul>
  </nav>

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  <script>
    $(document).ready(function(){
      $(".has-sub > a").click(function(e){
        e.preventDefault();
        var $parent = $(this).parent();
        
        // close others
        $(".has-sub").not($parent).removeClass("open").find("ul").slideUp(200);
        
        // toggle current
        $parent.toggleClass("open");
        $parent.find("ul").slideToggle(200);
      });
    });
  </script>

</body>
</html>
