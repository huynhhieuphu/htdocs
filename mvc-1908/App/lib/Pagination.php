<?php

namespace App\Lib;

if (!defined('ROOT_PATH')) {
    die ('can not access');
}

class Pagination
{
    // viết 1 hàm hỗ trợ - tạo đường link phân trang
    public static function createLink($data = [])
    {
        /* mảng $data sẽ có định dạng và dữ liệu tương tự như sau:
         *
         * [
         *    'c' => 'product',
         *    'm' => 'search',
         *    'p' => 'abcxyz',
         *    'page' => 1
         * ]
         *
         */

        // từ mảng $data xây dựng định dạng chuỗi như sau:
        // ?c=product&m=search&p=abcxyz&page=1

        $link = '';
        foreach ($data as $key => $value) {
            $link .= ($link == '') ? "?{$key}={$value}" : "&{$key}={$value}";
        }
        return ROOT_PATH . $link;
    }

    public static function paginate($links, $page, $limit, $totalRecord, $keyword = '')
    {
        // tính tổng số trang: $totalpage
        $totalPage = ceil($totalRecord / $limit);

        // Hiệu chỉnh lại $page (current page)
        if ($page < 1){
            $page = 1;
        }elseif ($page > $totalPage){
            $page = $totalPage;
        }

        // Tính $start
        // trong từ khoá sql LIMIT(start,limit)
        // tham số limit đã có, tính start ???
        $start = ($page - 1) * $limit;

        // tạo template boostrap phân trang
        $html = '';
        $html .= '<nav>';
        $html .= '<ul class="pagination">';
        // build nút previous
        if($page > 1 && $page <= $totalPage){
            $html .= '<li class="page-item"><a class="page-link" href="'. str_replace('{page}', ($page - 1), $links) .'">Previous</a><li>';
        }
        // build số trang hiển thị
        for ($i = 1; $i <= $totalPage; $i++){
            if($i == $page){
                // người dùng đang ở trang hiện tại - active
                $html .= '<li class="page-item active"><a href="#" class="page-link">'. $i.'</a></li>';
            } else {
                $html .= '<li class="page-item"><a href="'. str_replace('{page}', $i, $links) .'" class="page-link">'. $i .'</a></li>';
            }
        }
        // build nút next
        if($page >= 1 && $page < $totalPage){
            $html .= '<li class="page-item"><a class="page-link" href="'. str_replace('{page}', ($page + 1), $links) .'">Next</a><li>';
        }
        $html .= '</ul>';
        $html .= '</nav>';

        return [
            'start' => $start,
            'page' => $page,
            'paginate' => $html
        ];
    }
}