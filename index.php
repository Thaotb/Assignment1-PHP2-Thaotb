<?php
session_start();
// tôi muốn: "tất cả các request tới thư mục mvc phải bắt buộc đi qua file index.php"
// thu thập các url gửi lên project
$url = isset($_GET['url']) ? $_GET['url'] : "/";

require_once 'app/controllers/HomeController.php';
require_once 'app/controllers/ProductController.php';
require_once 'app/controllers/CategoryController.php';

require_once 'app/models/BaseModel.php';
require_once 'app/models/Product.php';
require_once 'app/models/Category.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
switch ($url) {
    case '/':
        $ctr = new HomeController();
        echo $ctr->index();
        break;
    case 'categories':
        $ctr = new CategoryController();
        echo $ctr->categories();
        break;
    case 'add-product':
        $ctr = new ProductController();
        echo $ctr->addProduct();
        break;
        case 'categories/add':
        $ctr = new CategoryController();
        echo $ctr->addCategory();
        break;
    default:
        echo "Đường dẫn không tồn tại";
        break;
}

?>