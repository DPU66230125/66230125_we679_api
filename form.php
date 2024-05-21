<?php
require_once('./config/header.php');
require_once('./config/db.php');
require_once('./config/response.php');
require_once('./methods/m-profile.php');
require_once('./methods/m-form.php');

if (isset($_GET["method"])) {
    try {
        $method = $_GET["method"];
        $body = json_decode(file_get_contents('php://input'), true);
        $response = NULL;

        switch ($variable) {
            case 'profile': #ดึงข้อมูลโปรไฟล์
                # code...
                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];

                    $response = getProfile($conn, $user_id);
                }else{
                    $response = new Response(false, array('message' => 'unidentified user_id'));
                }
                break;
            case 'edit-profile': #แก้ไขโปรไฟล์
                # code...
                if(isset($body['user_id'])){
                    $response = editProfile($conn, $body);
                }else{
                    $response = new Response(false, array('message' => 'unidentified user_id'));
                }
                break;
            case 'my-forms': #ดึงข้อมูลประวัติคำขอ VISA
                # code...
                if(isset($_GET['user_id'])){
                    $user_id = $_GET['user_id'];
                    //query based o user_id

                    $response = myForms($conn, $user_id);
                }else{
                    $response = new Response(false, array('message' => 'unidentified user_id'));
                }
                break;
            case 'create-form': #สร้างคำขอ VISA
                # code...
                if(isset($body['author_id'])){

                    $response = createForm($conn, $body);
                }else{
                    $response = new Response(false, array('message' => 'unidentified author_id'));
                }
                break;
            case 'edit-form': #แก้ไขคำขอ VISA
                # code...
                if(isset($body['id'])){
                    $response = editForm($conn, $body);
                }else{
                    $response = new Response(false, array('message' => 'unidentified author_id'));
                }
                break;
            case 'delete-form': #ลบคำขอ VISA
                # code...
                if(isset($body['id'])){
                    $form_id = $body['id'];
                    $response = deleteForm($conn, $form_id);
                }else{
                    $response = new Response(false, array('message' => 'unidentified author_id'));
                }
                break;
            case 'form-detail': #รายละเอียดคำขอ VISA
                # code...
                if(isset($_GET['form_id'])){
                    $form_id = $_GET['form_id'];
                }else{
                    $response = new Response(false, array('message' => 'unidentified form_id'));
                }
                break;
            default:
                $response = new Response(false, array('message' => 'unidentified method'));
                break;
        }

        echo json_encode($response);
    }catch (\Throwable $th) {
        //throw $th;
        http_response_code(500);
        echo $th;
    }
}else{
    http_response_code(404);
}

function getProfile($conn, $user_id){
    $sql = "SELECT * FROM `user_profiles` WHERE `user_id`=$user_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = null;
        while ($row = $result->fetch_assoc()) {
            $data = (object)$row;
        }
        $response = new Response(true, $data);
        return $response;
    } else {
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถโหลดข้อมูลโปรไฟล์ได้'));
        return $response;
    }
}

function editProfile($conn, $body){
    $profile = new UserProfile((object)$body);
    $sql = "UPDATE `user_profiles` 
            SET `display_name`='$profile->display_name',`prefix`='$profile->prefix',
                `fname`='$profile->fname',`mname`='$profile->mname',`lname`='$profile->lname',
                `nationality`='$profile->nationality',`place_of_birth`='$profile->place_of_birth',
                `marital_status`='$profile->marital_status',`date_of_birth`='$profile->date_of_birth',
                `passport_no`='$profile->passport_no',`place_of_issue`='$profile->place_of_issue',
                `date_of_issue`='$profile->date_of_issue',`date_of_expiry`='$profile->date_of_expiry',
                `occupation`='$profile->occupation',`addr_dom`='$profile->addr_dom',
                `addr_dom_tel`='$profile->addr_dom_tel',`addr_perm`='$profile->addr_perm',
                `addr_perm_tel`='$profile->addr_perm_tel',`addr_perm_email`='$profile->addr_perm_email'
            WHERE `user_id`=$profile->user_id";
    
    $result = $conn->query($sql);

    if ($result == TRUE){
        $response = new Response(true, array('user_id' => $profile->user_id));
        return $response;
    }else{
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถบันทึกโปรไฟล์ได้'));
        return $response;
    }
}

function myForms($conn, $user_id){
    $sql = "SELECT * FROM `visa_forms` WHERE 'user_id'=$user_id";
    $result = $conn->query($sql);

    $arr = [];
    if ($result == TRUE) {
        while ($row = $result->fetch_assoc()) {
            $data = (object)$row;

            array_push($arr, $data);
        }
        $response = new Response(true, $arr);
        return $response;
    } else {
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถโหลดข้อมูลโปรไฟล์ได้'));
        return $response;
    }
}

function createForm($conn, $body){
    $form = new ApplicationForm((object)$body);
    $sql = "INSERT INTO `visa_forms`(`author_id`, `title`, `prefix`, `fname`) 
            VALUES ('$form->author_id','$form->title','$form->prefix','$form->fname')";
    
    $result = $conn->query($sql);

    if ($result == TRUE){
        $last_id = $conn->insert_id;
        $response = new Response(true, array('id' => $last_id));
        return $response;
    }else{
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถบันทึกโปรไฟล์ได้'));
        return $response;
    }
}

function editForm($conn, $body){
    $form = new ApplicationForm((object)$body);
    $sql = "UPDATE `visa_forms` 
            SET `title`='$form->title',`prefix`='$form->prefix',
            `fname`='$form->fname',`mname`='$form->mname',`lname`='$form->lname',
            `nationality`='$form->nationality',`place_of_birth`='$form->place_of_birth',
            `marital_status`='$form->marital_status',`date_of_birth`='$form->date_of_birth',
            `passport_no`='$form->passport_no',`place_of_issue`='$form->place_of_issue',
            `date_of_issue`='$form->date_of_issue',`date_of_expiry`='$form->date_of_expiry',
            `occupation`='$form->occupation',`addr_dom`='$form->addr_dom',
            `addr_dom_tel`='$form->addr_dom_tel',`addr_perm`='$form->addr_perm',
            `addr_perm_tel`='$form->addr_perm_tel',`addr_perm_email`='$form->addr_perm_email',
            `addr_des`='$form->addr_des',`date_of_arrival`='$form->date_of_arrival',
            `travel_by`='$form->travel_by',`duration_of_stay`='$form->duration_of_stay',
            `guarantor_des_name`='$form->guarantor_des_name',`guarantor_des_tel`='$form->guarantor_des_tel',
            `guarantor_dom_name`='$form->guarantor_dom_name',`guarantor_dom_tel`='$form->guarantor_dom_tel' 
            WHERE 'id'=$form->id";
    
    $result = $conn->query($sql);

    if ($result == TRUE){
        $response = new Response(true, array('id' => $form->id));
        return $response;
    }else{
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถบันทึกโปรไฟล์ได้'));
        return $response;
    }
}

function deleteForm($conn, $form_id){
    $sql = "DELETE FROM `visa_forms` WHERE id=$form_id";

    $result = $conn->query($sql);

    if ($result == TRUE) {
        $response = new Response(true, array());
        return $response;
    } else {
        $response = new Response(false, array('message' => 'เกิดข้อผิดพลาดไม่สามารถลบแบบฟอร์มได้'));
        return $response;
    }
}
