<?php

    ob_start();
    
    # Tiêu đề trang 
    $headtitle = 'ACP';
   
    # Import Hệ thống
    require('../Account/Config.php');
    require('Header_Admin.php');
		if(!isset($_SESSION['username_login'])){
		header("Location: ../index.php");
		exit();   
	}
	if($data['Account_ChucVu'] <> "Admin"){header('location: /index.php'); exit;}// nếu không phải user thì kết thúc và đẩy về trang chủ

    switch ((isset($_GET['quanly']) ? $_GET['quanly'] : '')) {
    	case 'member':
    		require('Manager_ThanhVien.php');
    		break;
    	case 'congpoint':
    		require('congpoint.php');
    		break;
        case 'lenadmin':
    		require('lenadmin.php');
    		break;
        case 'listacc':
    		require('Manager_View_ListAccount.php');
    		break;
        case 'congtien':
    		require('Manager_ThanhVien_CongTien.php');
    		break;
     	case 'lsmua':
    		require('Manager_View_His_Trans.php');
    		break; 
    	case 'lsnap':
    		require('Manager_View_His_Toup.php');
    		break;
    	case 'upacclq':
    		require('upacclq.php');
    		break; 
    	 case 'upacccf':
    		require('upacccf.php');
    		break; 
		case 'random_dotkich':
    		require('random_dotkich.php');
    		break;
    	case 'edit':
    		require('editacc.php');
    		break; 
    	case 'delete':
    		require('delete.php');
    		break;    	
    	default:
    		require('Manager_ThanhVien.php');
    		break;
    }
    require('Footer_Admin.php');

?>
