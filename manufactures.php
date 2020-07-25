<?php
//
//$draw = $_POST['draw'];
//$row = $_POST['start'];
//$rowperpage = $_POST['length']; // Rows display per page
//$columnIndex = $_POST['order'][0]['column']; // Column index
//$columnName = $_POST['columns'][$columnIndex]['data']; // Column name
//$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
//$searchValue = $_POST['search']['value']; // Search value

## Custom Field value
//$company = $_POST['searchBycompany'];

## Search 

//if($company != ''){
    function getmanufactures($company){
       
       $url = 'http://eshop.rhombusitsolutions.com/companylist';
            $data['header'] = ["firmcode"=>$company];
            $datas['data'][] = $data;

            $postdata = json_encode($datas);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
            $result = curl_exec($ch);
            curl_close($ch);
            $manufactures = json_decode($result);
            $manufactures =$manufactures->data;
       return $manufactures;
}

//$totalRecords=count($manufactures);
//$data = array();
//$i = "0";
//foreach($manufactures as $row) {
//    $i++;
//   $data[] = array(
//     "no"=>$i,
//     "company"=>$row->name,
//     "contribution"=>$row->contribution,
//  
//   );
//}
//
//## Response
//$response = array(
//  "draw" => intval($draw),
//   "iTotalRecords" => $totalRecords,
//  "iTotalDisplayRecords" => $totalRecords,
//  "aaData" => $data
//);
//
//echo json_encode($response);
























    ?>