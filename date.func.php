<?php
function  ConvertDateToThai($data_date,$style,$lang=''){ 
	$year =  substr($data_date,0,4)  ;
	$month =  substr($data_date,5,7)  ;
	$day =  substr($data_date,8,11)  ;
	$month =  substr($month,0,2)  ;
	$month_cv = "";

	if($lang=="en"){

	}else{

		if($style=="mini"){

			$year_cv = $year+543; 
			$year_cv =  substr($year_cv,2,4);

			switch ($month){

				case '01': $month_cv = "ม.ค." ; break;

				case '02': $month_cv = "ก.พ." ; break;

				case '03': $month_cv = "มี.ค." ; break;

				case '04': $month_cv = "เม.ย." ; break;

				case '05': $month_cv = "พ.ค." ; break;

				case '06': $month_cv = "มิ.ย." ; break;

				case '07': $month_cv = "ก.ค." ; break;

				case '08': $month_cv = "ส.ค." ; break;

				case '09': $month_cv = "ก.ย." ; break;

				case '10': $month_cv = "ต.ค." ; break;

				case '11': $month_cv = "พ.ย." ; break;

				case '12': $month_cv = "ธ.ค." ; break;

				default: break;

			}

		}else{

			$year_cv = $year+543; 

			switch ($month){

				case '01': $month_cv = "มกราคม" ; break;

				case '02': $month_cv = "กุมภาพันธ์" ; break;

				case '03': $month_cv = "มีนาคม" ; break;

				case '04': $month_cv = "เมษายน" ; break;

				case '05': $month_cv = "พฤษภาคม" ; break;

				case '06': $month_cv = "มิถุนายน" ; break;

				case '07': $month_cv = "กรกฎาคม" ; break;

				case '08': $month_cv = "สิงหาคม" ; break;

				case '09': $month_cv = "กันยายน" ; break;

				case '10': $month_cv = "ตุลาคม" ; break;

				case '11': $month_cv = "พฤศจิกายน" ; break;

				case '12': $month_cv = "ธันวาคม" ; break;

				default: break;

			}

		}

		$day_cv = $day;
	}

	$date_cv = $day_cv.' '.$month_cv.' '.$year_cv; 

	return $date_cv;
}


function DateDiff($strDate1,$strDate2){
	return (strtotime($strDate2) - strtotime($strDate1))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
}

function TimeDiff($strTime1,$strTime2){
	return (strtotime($strTime2) - strtotime($strTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
}

function DateTimeDiff($strDateTime1,$strDateTime2){
	return (strtotime($strDateTime2) - strtotime($strDateTime1))/  ( 60 * 60 ); // 1 Hour =  60*60
}
?> 