<!DOCTYPE html>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <link rel="icon" type="image/png" href="https://ephoto360.com/uploads/w450/2019/10/21/Tao_Logo_Mascot_Kim_Loai_Truc_Tuyen_Mien_Phi5dad37ba68d76_6d464f2b404044f20d4d7ae74dbd3b32.jpg">
  <title>Trang Quản Lý</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">

</head>
<body>
  <div class="app app-default">

<aside class="app-sidebar" id="sidebar">
  <div class="sidebar-header">
    <a class="sidebar-brand" href="/"><span class="highlight">Shop</span> Account</a>
    <button type="button" class="sidebar-toggle">
      <i class="fa fa-times"></i>
    </button>
  </div>
  <div class="sidebar-menu">
    <ul class="sidebar-nav">
      
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-group" aria-hidden="true"></i>
          </div>
          <div class="title">Thành Viên</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Quản Lý Thành viên</li>
            <li><a href="?quanly=member">Danh Sách Thành viên</a></li>
             
            <li class="line"></li>            
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-file-text" aria-hidden="true"></i>
          </div>
          <div class="title">Tài khoản</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Quản Lý Tài khoản</li>
            <li><a href="?quanly=listacc">Danh sách acc</a></li>
			<li><a href="?quanly=upacclq">Up Acc LQM</a></li>
			<li><a href="?quanly=upacccf">Up Acc CF</a></li>
			<li><a href="#">Up Acc LMHT</a></li>
			<li><a href="?quanly=random_dotkich">Up Acc RANDOM CF</a></li>
            <li><a href="?quanly=delete">Xóa acc</a></li>
            <li class="line"></li>            
          </ul>
        </div>
      </li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <div class="icon">
            <i class="fa fa-line-chart" aria-hidden="true"></i>
          </div>
          <div class="title">Lịch Sử</div>
        </a>
        <div class="dropdown-menu">
          <ul>
            <li class="section"><i class="fa fa-file-o" aria-hidden="true"></i> Lịch Sử Giao Dịch</li>
            <li><a href="?quanly=lsmua">Lịch sử mua</a></li>
            <li><a href="?quanly=lsnap">Lịch sử nạp</a></li>
          </ul>
        </div>
      </li>
      <li class="">
         <a href="/">
          <div class="icon">
            <i class="fa fa-mail-reply-all" aria-hidden="true"></i>
          </div>
          <div class="title">Về Shop</div>
        </a>
      </li>  
       <li class="">
         <a href="../DangXuat.php">
          <div class="icon">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
          </div>
          <div class="title">Đăng Xuất</div>
        </a>
      </li>  
    </ul>
  </div>
  
</aside>

<script type="text/ng-template" id="sidebar-dropdown.tpl.html">
  <div class="dropdown-background">
    <div class="bg"></div>
  </div>
  <div class="dropdown-container">
    {{list}}
  </div>
</script>
<div class="app-container">

  <nav class="navbar navbar-default" id="navbar">
  <div class="container-fluid">
    <div class="navbar-collapse collapse in">
      <ul class="nav navbar-nav navbar-mobile">
        <li>
          <button type="button" class="sidebar-toggle">
            <i class="fa fa-bars"></i>
          </button>
        </li>
        <li class="logo">
          <a class="navbar-brand" href="#"><span class="highlight">Shop</span> Account</a>
        </li>
        
      </ul>
      <ul class="nav navbar-nav navbar-left">
        <li class="navbar-title"><span class="highlight">Trang Quản Lý © 2022</span></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">        
        <li class="dropdown profile">
        
          <div class="dropdown-menu">
            <div class="profile-info">
              <h4 class="username">Xin Chào</h4>
            </div>
            <ul class="action">
             
              <li>
                <a href="../DangXuat.php">
                  Đăng Xuất
                </a>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
