<?php

/**
 * Pagination basic created by toidicode.com
 *
 * @package Pagination basic
 * @author  ThanhTai - ToiDiCodeTeam
 * @copyright   Copyright (c) 2017, Toidicode Team. (http://toidicode.com/)
 * @link    https://toidicode.com
 * @since   Version 1.0.0
 * @filesource
 */
class Pagination
{
    /**
     * Biến config chứa tất cả các cấu hình
     *
     * @var array
     */
    private $config = [
        'total' => 0, // tổng số mẩu tin
        'limit' => 0, // số mẩu tin trên một trang
        'full' => true, // true nếu hiện full số page, flase nếu không muốn hiện false
        'querystring' => 'page' // GET id nhận page
    ];

    /**
     * khởi tạo
     *
     * @param array $config
     */
    public function __construct($config = [])
    {
        // kiểm tra xem trong config có limit, total đủ điều kiện không
        if (isset($config['limit']) && $config['limit'] < 0 || isset($config['total']) && $config['total'] < 0) {
            // nếu không thì dừng chương trình và hiển thị thông báo.
            die('limit và total không được nhỏ hơn 0');
        }
        // Kiểm tra xem config có querystring không
        if (!isset($config['querystring'])) {
            //nếu không để mặc định là page
            $config['querystring'] = 'page';
        }
        $this->config = $config;
    }

    /**
     * Lấy ra tổng số trang
     *
     * @return int
     */
    private function gettotalPage()
    {
        return ceil($this->config['total'] / $this->config['limit']);
    }

    /**
     * Lấy ra trang hiện tại
     *
     * @return int
     */
    private function getCurrentPage()
    {
        // kiểm tra tồn tại GET querystring và có >=1 không
        if (isset($_GET[$this->config['querystring']]) && (int)$_GET[$this->config['querystring']] >= 1) {
            // Nếu có kiểm tra tiếp xem nó có lớn hơn tổn số trang không.
            if ((int)$_GET[$this->config['querystring']] > $this->gettotalPage()) {
                // nếu lớn hơn thì trả về tổng số page
                return (int)$this->gettotalPage();
            } else {
                // còn không thì trả về số trang
                return (int)$_GET[$this->config['querystring']];
            }

        } else {
            // nếu không có querystring thì nhận mặc định là 1
            return 1;
        }
    }

    /**
     * lấy ra trang phía trước
     *
     * @return string
     */
    private function getPrePage()
    {
        // nếu trang hiện tại bằng 1 thì trả về null
        if ($this->getCurrentPage() === 1) {
            return;
        } else {
            // còn không thì trả về html code
            return '';
        }
    }

    /**
     * Lấy ra trang phía sau
     *
     * @return string
     */
    private function getNextPage()
    {
        // nếu trang hiện tại lơn hơn = totalpage thì trả về rỗng
        if ($this->getCurrentPage() >= $this->gettotalPage()) {
            return;
        } else {
            // còn không thì trả về HTML code
            return '';
        }
    }

    /**
     * Hiển thị html code của page
     *
     * @return string
     */
    public function getPagination()
    {
        // tạo biến data rỗng
        $data = '';
        // kiểm tra xem người dùng có cần full page không.
        if (isset($this->config['full']) && $this->config['full'] === false) {
            // nếu không thì
              $data .= '<ul class="pagination pagination-sm">';
            for ($i = ($this->getCurrentPage() - 3) > 0 ? ($this->getCurrentPage() - 3) : 1; $i <= (($this->getCurrentPage() + 3) > $this->gettotalPage() ? $this->gettotalPage() : ($this->getCurrentPage() + 3)); $i++) {
                if ($i === $this->getCurrentPage()) {
					$data .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                } else {
					if (isset($_GET['price']))
					{
						$data .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?' . $this->config['querystring'] . '=' . $i . '&price='.$_GET['price'].'" >'.$i.'</a></li> ';
					}else {
						 $data .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?' . $this->config['querystring'] . '=' . $i . '" >'.$i.'</a></li> ';
					}
                }
            }
              $data .= '</ul>';
        } else {
            $data .= '<ul class="pagination pagination-sm">';
            // nếu có thì
            for ($i = 1; $i <= $this->gettotalPage(); $i++) {
                if ($i === $this->getCurrentPage()) {
                    $data .= '<li class="page-item active"><a class="page-link" href="#">' . $i . '</a></li>';
                } else {
                   $data .= '<li class="page-item"><a class="page-link" href="' . $_SERVER['PHP_SELF'] . '?' . $this->config['querystring'] . '=' . $i . '" >'.$i.'</a></li>';
                }
            }
            $data .= '</ul>';

        }

        return $this->getPrePage() . $data . $this->getNextPage() ;
    }
}