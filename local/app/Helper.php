<?phpfunction vn_str_co_dau_thanh_khong_dau ($str){    $unicode = array(        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',        'd'=>'đ',        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',        'i'=>'í|ì|ỉ|ĩ|ị',        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',        'D'=>'Đ',        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',    );    foreach($unicode as $nonUnicode=>$uni){        $str = preg_replace("/($uni)/i", $nonUnicode, $str);    }    return $str;}function get_filename_from_input($file){    $ran = round(microtime(true) * 1000);    $filename = $file->getClientOriginalName();    $filename = str_replace('.' . $file->getClientOriginalExtension(), '', $filename);    $filename = str_replace(' ', '-', $filename);    $filename = preg_replace('/[^A-Za-z0-9\-]/', '', $filename);    $filename = preg_replace('/-+/', '', $filename);    if (strlen($filename) > 15) {        $filename = substr($filename, 0, 15);    }    $filename = $filename . '_' . $ran . '.' . $file->getClientOriginalExtension();    return $filename;}//Hàm chuyển đổi chuỗi thành path//ví dụ cần chuyển đổi tiêu đề Nguyễn Như Duy Quang thành nguyen-nhu-duy-quangfunction chuyen_chuoi_thanh_path($str){    return preg_replace('/-+/', '-', preg_replace('/[^A-Za-z0-9\-]/', '',str_replace(' ', '-', strtolower(vn_str_co_dau_thanh_khong_dau($str)))));}function IsNullOrEmptyString($string){    return (!isset($string) || trim($string)==='');}