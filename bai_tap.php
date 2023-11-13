<?php
// 6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "6. <br>";
function xsMang($mang){
    sort ( $mang );
    return $mang;
}
$mangDuLieu = array(56, 78, 32, 55, 13, 98, 100);
$ket_qua = xsMang($mangDuLieu);
echo "Mảng trước khi sắp xếp: " . implode(', ', $mangDuLieu) .'<br>';
echo "Mảng sau khi sắp xếp theo thứ tự tăng dần: " . implode(', ', $ket_qua) .'<br>';
echo "<hr>";
// 7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "7. <br>" ;
function giaiThua(int $n){
    $gt=1;
    for ($i=1;$i<=$n; $i++){
        $gt=$gt*$i;
    }
    return $gt;
}
echo "Giai thừa của số 5 là: ". giaiThua(5)."<br>";
echo "<hr>";
// 8. Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "8. <br>" ;
Function snt ($n){
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function timSNT($x, $y){
$soNguyenTo = array();
    for ($i = $x; $i <= $y; $i++) {
        if (snt($i)) {
            $soNguyenTo[] = $i;
        }
    }
    return $soNguyenTo;
}
$x = 5;
$y = 80;
$ketQua = timSNT($x, $y);
echo "Các số nguyên tố trong khoảng từ $x đến $y là: " . implode(', ', $ketQua);
echo "<hr>";
// 9. Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "9. <br>" ;
$mang=array(5, 7, -2, 6.3, -15);
function arraySum($arr){
    $sum=$arr[0];
    foreach ($arr as $a){
        $sum=$sum+$a;
    }
    return $sum;
}
echo "Tổng các số trong mảng ". implode(', ', $mang) ." là: ". arraySum($mang);
echo "<hr>";
// 10. Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
echo "10. <br>";
function fibonacci($n)
{
    $fibonacciArray = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }
    return $fibonacciArray;
}
function  inFibonacci($a, $b)
{
    if ($a < 0 || $b < 0 || $b< $a) {
        echo "Không hợp lệ!";
        return;
    }
    $fibonacciArray = fibonacci($b);
    echo "Các số Fibonacci trong khoảng từ $a đến $b là: ";
    for ($i = 0; $i < $b; $i++) {
        if ($fibonacciArray[$i] >= $a && $fibonacciArray[$i] <= $b) {
            echo $fibonacciArray[$i] . " ";
        }
    }
}
inFibonacci(5, 33);
echo"<hr>";
// 11. Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
echo "11. <br>";
function armstrong($n)
{
    $soGoc = $n;
    $soChuSo = strlen($n);
    $tong = 0;

    while ($n > 0) {
        $chuSo= $n % 10;
        $tong += pow($chuSo, $soChuSo);
        $n = (int)($n / 10);
    }
    return $tong=== $soGoc;
}
$n = 100;
if (armstrong($n)) {
    echo "$n là số Armstrong.";
} else {
    echo "$n không là số Armstrong.";
}
echo"<hr>";
// 12. Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "12. <br>";
function chenPhanTu($mang, $phanTu, $viTri)
{
    if ($viTri < 0 || $viTri > count($mang)) {
        echo "Vị trí chèn không hợp lệ.";
        return $mang;
    }
    array_splice($mang, $viTri, 0, $phanTu);
    return $mang;
}
$mang = array(2, -75, 9, -58, 10);
$phanTuChen = 97;
$viTriChen = 3;
$mang = chenPhanTu($mang, $phanTuChen, $viTriChen);
echo "Mảng sau khi chèn phần tử $phanTuChen vào vị trí $viTriChen là: ";
print_r($mang);
echo "<hr>";
// 13. Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
echo "13. <br>";
function loaiBo($mang)
{
    $mangLoaiBoTrungLap = array_unique($mang);
    return $mangLoaiBoTrungLap;
}
$mang = array(1, -2, 9, 2, 5, 3, 9, 9, 97);
$mangSauKhiLoaiBo = loaiBo($mang);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp là: ";
print_r($mangSauKhiLoaiBo);
echo"<hr>";
// 14. Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
echo "14. <br>";
function timViTri($mang, $phanTu)
{
    $viTri = array_search($phanTu, $mang);
    if ($viTri !== false) {
        echo "Vị trí của phần tử $phanTu trong mảng là: $viTri";
    } else {
        echo "Phần tử $phanTu không tồn tại trong mảng.";
    }
}
$mang = array(4, -187, 2, 75, 0);
$phanTuTim = 0;
timViTri($mang, $phanTuTim);
echo"<hr>";
// 15. Viết chương trình PHP để đảo ngược một chuỗi.
echo "15. <br>";
function daoNguoc($a) {
    return strrev($a);
}
$chuoiBanDau = "Toi la Duong My Linh";
$chuoiDaoNguoc = daoNguoc($chuoiBanDau);
echo "Chuỗi ban đầu: " . $chuoiBanDau . "<br>";
echo "Chuỗi đảo ngược: " . $chuoiDaoNguoc;
echo "<hr>";
// 16. Viết chương trình PHP để tính số lượng phần tử trong một mảng.
echo "16. <br>";
function soLuongPhanTu($mang) {
    return count($mang);
}
$myArray = array(8, -3, 49, 0, -33, 6, 4.4, 9, 100);
$soLuongPhanTu = soLuongPhanTu($myArray);
echo "Số lượng phần tử trong mảng là: " . $soLuongPhanTu;
echo "<hr>";
// 17. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
echo "17. <br>";
function palindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    return $str === strrev($str);
}

$chuoi = "Palindrome hay khong";
if (palindrome($chuoi)) {
    echo "Chuỗi '$chuoi' là chuỗi Palindrome.";
} else {
    echo "Chuỗi '$chuoi' không phải là chuỗi Palindrome.";
}
echo "<hr>";
// 18. Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
echo "18. <br>";
function soLanXuatHien($mang, $phanTuCanDem) {
    $soLanXuatHien = array_count_values($mang);
    return isset($soLanXuatHien[$phanTuCanDem]) ? $soLanXuatHien[$phanTuCanDem] : 0;
}
$mang = array(1, 2, 3, 2, 2, -2, 2, 7, 2, 7);
$phanTuCanDem = 2;
$soLanXuatHien = soLanXuatHien($mang, $phanTuCanDem);
echo "Số lần xuất hiện của phần tử $phanTuCanDem trong mảng là: " . $soLanXuatHien;
echo "<hr>";
// 19. Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
echo "19. <br>";
function sapXepGiamDan($a) {
    arsort($a);
    return $a;
}
$mang = array(5, 2, 90, 56, 01);
$mangDaSapXep = sapXepGiamDan($mang);
echo "Mảng đã sắp xếp giảm dần: " . implode(', ', $mangDaSapXep);
echo "<hr>";
// 20. Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
echo "20. <br>";
function themVaoDau($mang, $phanTu) {
    array_unshift($mang, $phanTu);
    return $mang;
}
function themVaoCuoi($mang, $phanTu) {
    $mang[] = $phanTu;
    return $mang;
}
$mang = array(83, 3, -29, 71, 0);
$phanTuThem = 1;
$mangSauThemVaoDau = themVaoDau($mang, $phanTuThem);
echo "Mảng sau khi thêm phần tử $phanTuThem vào đầu: " . implode(', ', $mangSauThemVaoDau);
$mangSauThemVaoCuoi = themVaoCuoi($mang, $phanTuThem);
echo "<br> Mảng sau khi thêm phần tử $phanTuThem vào cuối: " . implode(', ', $mangSauThemVaoCuoi);
echo "<hr>";
// 21. Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "21. <br>";
function soLonThuHai($mang) {
    rsort($mang);
    $soLonThuHai = $mang[1];
    return $soLonThuHai;
}
$mang= array(-10, 75, -8, 0, 15);
echo "Số lớn thứ hai trong mảng là: " . soLonThuHai($mang);
echo "<hr>";
// 22. Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
echo "22. <br>";
function timUSCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}
function timBSCNN($a, $b) {
    return abs($a * $b) / timUSCLN($a, $b);
}
$x = 12;
$y = 18;
echo "Ước số chung lớn nhất của $x và $y là: " . timUSCLN($x, $y) . "<br>";
echo "Bội số chung nhỏ nhất của $x và $y là: " . timBSCNN($x, $y) . "<br>";
echo "<hr>";
// 23. Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
echo "23. <br>";
function kiemTraSoHoanHao($n) {
    if ($n <= 0) {
        return false;
    }
    $tongUoc = 0;
    for ($i = 1; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            $tongUoc += $i;
        }
    }
    return $tongUoc == $n;
}
$soCanKiemTra = 28;
if (kiemTraSoHoanHao($soCanKiemTra)) {
    echo "$soCanKiemTra là số hoàn hảo <br>";
} else {
    echo "$soCanKiemTra không phải là số hoàn hảo <br>";
}
echo "<hr>";
// 24. Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
echo "24. <br>";
function timSoLeLonNhat($n) {
    $soLeLonNhat = $n[0];
    foreach ($n as $so) {
        if ($so % 2 != 0) { 
            if ($soLeLonNhat === 0 || $so > $soLeLonNhat) {
                $soLeLonNhat = $so;
            }
        }
    }
    return $soLeLonNhat;
}
$mang = array(5, 92, -77, 35);
echo "Ta có mảng: " . implode(", ", $mang) . "<br>";
$ketQua = timSoLeLonNhat($mang);
if ($ketQua !== 0) {
    echo "Số lẻ lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số lẻ trong mảng.";
}
echo "<hr>";
// 25. Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
echo "25. <br>";
$x = 17;
if (snt($x)) //sử dụng hàm snt ở câu 8
{
    echo "$x là số nguyên tố.<br>";
} else {
    echo "$x không là số nguyên tố.<br>";
}
echo "<hr>";
// 26. Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
echo "26. <br>";
function timSoDuongLonNhat($n) {
    $soDuongLonNhat = $n[0];

    foreach ($n as $so) {
        if ($so > 0) {
            if ($soDuongLonNhat === 0 || $so > $soDuongLonNhat) {
                $soDuongLonNhat = $so;
            }
        }
    }
    return $soDuongLonNhat;
}
$mang = array(7, -18, 8, -8, 54, 2);
$ketQua = timSoDuongLonNhat($mang);
echo "Ta có mảng: " . implode(", ", $mang) . "<br>";
if ($ketQua !== 0) {
    echo "Số dương lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số dương trong mảng.";
}
echo "<hr>";
// 27. Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
echo "27. <br>";
function timSoAmLonNhat($n) {
    $soAmLonNhat = $n[0];
    foreach ($n as $so) {
        if ($so < 0) {
            if ($soAmLonNhat === 0 || $so > $soAmLonNhat) {
                $soAmLonNhat = $so;
            }
        }
    }
    return $soAmLonNhat;
}
$mang= array(-7, -1, 0, 2, 8, 9);
echo "Ta có mảng: " . implode(", ", $mang) . "<br>";
$ketQua = timSoAmLonNhat($mang);
if ($ketQua !== 0) {
    echo "Số âm lớn nhất trong mảng là: " . $ketQua;
} else {
    echo "Không có số âm trong mảng.";
}
echo "<hr>";
// 28. Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
echo "28. <br>";
function tinhTongSoLe($n) {
    $tong = 0;

    for ($i = 1; $i <= $n; $i += 2) {
        $tong += $i;
    }
    return $tong;
}
$n = 10;
echo "Tổng các số lẻ từ 1 đến $n là: " . tinhTongSoLe($n);
echo "<hr>";
// 29. Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
echo "29. <br>";
function timSoChinhPhuong($a, $b) {
    $soChinhPhuong = array();
    for ($i = $a; $i <= $b; $i++) {
        $canBacHai = sqrt($i);
        if ($canBacHai == (int)$canBacHai) {
            $soChinhPhuong[] = $i;
        }
    }
    return $soChinhPhuong;
}
$a = 1;
$b = 50;
echo "Ta có khoảng cho trước: $a đến $b <br>";
$ketQua = timSoChinhPhuong($a, $b);
if (!empty($ketQua)) {
    echo "Các số chính phương trong khoảng từ $a đến $b là: " . implode(', ', $ketQua);
} else {
    echo "Không có số chính phương trong khoảng từ $a đến $b.";
}
echo "<hr>";
// 30. Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
echo "30. <br>";
function chuoiCon($chuoiChinh, $chuoiCon) {
    $doDaiChuoiChinh = strlen($chuoiChinh);
    $doDaiChuoiCon = strlen($chuoiCon);

    for ($i = 0; $i <= $doDaiChuoiChinh - $doDaiChuoiCon; $i++) {
        $chuoiPhu = substr($chuoiChinh, $i, $doDaiChuoiCon);
        if ($chuoiPhu == $chuoiCon) {
            return true;
        }
    }
    return false;
}
$chuoiChinh= "Xin chào các bạn";
$chuoiCon = "Hi guys";
if (chuoiCon($chuoiChinh, $chuoiCon)) {
    echo " '$chuoiCon' là chuỗi con của '$chuoiChinh' <br>";
} else {
    echo "'$chuoiCon' không là chuỗi con của '$$chuoiChinh' <br>";
}
?>