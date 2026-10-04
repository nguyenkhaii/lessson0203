<?php

$tenSp = "Bánh mì";
$donGia = 15000;
$soLuong = 3;

$thanhTien = $donGia * $soLuong;

$vat = $thanhTien * 0.1;

$tongTien = $thanhTien + $vat;

echo "Sản phẩm: " . $tenSp . "\n";
echo "Đơn giá: " . ($donGia) . " đ\n";
echo "Số lượng: " . $soLuong . "\n";
echo "Thành tiền: " . ($thanhTien) . " đ\n";
echo "VAT 10%: " . ($vat) . " đ\n";
echo "Tổng tiền phải trả: " . ($tongTien) . " đ\n";
?>