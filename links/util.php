<?php
//中枢プログラム
function count_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}

	mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, $val);
	if ($result === false) {
		return false;
	}

	$count_list = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$count_list[] = $row;
	}

	mysqli_close($link);
	return $count_list;
}
function change_delete_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}

	mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, $val);
	if ($result === false) {
		return false;
	}

	$change_delete_list = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$change_delete_list[] = $row;
	}

	mysqli_close($link);
	return $change_delete_list;
}

function aut_get_db_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}

	mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, $val);
	if ($result === false) {
		return false;
	}

	$author_list = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$author_list[] = $row;
	}

	mysqli_close($link);
	return $author_list;
}

function pub_get_db_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}

	mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, $val);
	if ($result === false) {
		return false;
	}

	$publisher_list = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$publisher_list[] = $row;
	}

	mysqli_close($link);
	return $publisher_list;
}

function get_db_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}

	mysqli_set_charset($link, 'utf8');

	$result = mysqli_query($link, $val);
	if ($result === false) {
		return false;
	}

	$book_list = array();

	while ($row = mysqli_fetch_assoc($result)) {
		$book_list[] = $row;
	}

	mysqli_close($link);
	return $book_list;
}

function roop_hash($val)
{
    $i = 0;
    $before = $val;
    while ($i < 1000) {
        $hash = md5($before);
        $before = $hash;
        $i++;
    }
    return $hash;
}

function resize($val)
{
    $width=$val[0];
    $max_width=300;
    $height=$val[1];
    $max_height=300;
    $asp_size=array();

    if($width > $max_width)
    {
        $width_flg=1;
    }
    else
    {
        $width_flg=0;
    }

    if($height>$max_height)
    {
        $height_flg=1;
    }
    else
    {
        $height_flg=0;
    }

    if($width_flg==1 && $height_flg==1) {
        $width_per = $max_width/$width;
        $height_per = $max_height/$height;
        if ($width_per < $height_per)
        {
            $per = $max_width / $width;
            $asp_size[0] = $width * $per;
            $asp_size[1] = $height * $per;
        }
        else
        {
            $per = $max_height / $height;
            $asp_size[0] = $width * $per;
            $asp_size[1] = $height * $per;
        }
    }
    else if($width_flg==1 && $height_flg==0)
    {
        $per = $max_width / $width;
        $asp_size[0] = $width * $per;
        $asp_size[1] = $height * $per;
    }
    else if($width_flg==0 && $height_flg==1)
    {
        $per = $max_height / $height;
        $asp_size[0] = $width * $per;
        $asp_size[1] = $height * $per;
    }
    else if($width_flg==0 && $height_flg==0)
    {
        $asp_size[0] = $width;
        $asp_size[1] = $height;
    }
        return $asp_size;
}

function update_data($val) {
	$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$link) {
		return false;
	}
	mysqli_set_charset($link, 'utf8');

	//echo $val;

	$result = mysqli_query($link, $val);
	return $result;
}

function get_insert_str($tbl, $val) {
	$field = '';
	$data  = '';

	foreach ($val as $key => $v) {
		$field  = $field.$key.",";
		$temp_v = $v['data'];

		if ($v['type'] == 'string' || $v['type'] == 'date') {
			$temp_v = "'".$temp_v."'";
		}
		$data = $data.$temp_v.",";
	}
	$sql = "INSERT INTO ".$tbl."(".substr($field, 0, -1).")VALUES(".substr($data, 0, -1).");";
	return $sql;
}

function h($val) {
	return htmlspecialchars($val, ENT_QUOTES, 'UTF-8');
}

function bg_color($get_date) {

	$date = date("Y-m-d", time());
	if (strtotime($get_date) < strtotime($date)) {
		return "gray";
	} else {
		return "white";
	}
}
?>