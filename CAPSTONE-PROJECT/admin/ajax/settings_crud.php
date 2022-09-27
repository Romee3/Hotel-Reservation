<?php 
    require('../hfi/db-config.php');
    require('../hfi/essentials.php');
    adminLogin();

    if(isset($_POST['get_general']))
    {
        $q = " SELECT * FROM `web-settings` WHERE `s_id`= ? ";
        $values = [1];
        $res = select($q,$values,"i");
        $data = mysqli_fetch_assoc($res);
        $json_data = json_encode($data);
        echo $json_data;
    }
    if(isset($_POST['upd_general'])){
        $frm_data = filteration($_POST);

        $q = " UPDATE `web-settings` SET `web_title`=?, `web_about`=? WHERE `s_id`=?";
        $values =[$frm_data['web_title'],$frm_data['web_about'],1];
        $res = update($q,$values,'ssi');
        echo $res;
    }
    
if(isset($_POST['upd_shutdown']))
{
        $frm_data = ($_POST['upd_shutdown']==0) ? 1 : 0;

        $q = " UPDATE `web-settings` SET `shutdown`=? WHERE `s_id`=?";
        $values =[$frm_data,1];
        $res = update($q,$values,'ii');
        echo $res;
}

if(isset($_POST['get_contacts']))
{
    $q = " SELECT * FROM `contact_details` WHERE `cd_id`= ? ";
    $values = [1];
    $res = select($q,$values,"i");
    $data = mysqli_fetch_assoc($res);
    $json_data = json_encode($data);
    echo $json_data;
}

if(isset($_POST['upd_contacts'])){
    $frm_data = filteration($_POST);

    $q = " UPDATE `contact_details` SET `address`=? ,`gmap`= ?,`mn1`=? ,`mn2`=? ,`mail`=? ,`tw`=? ,`fb`=?,`iframe`=? WHERE `cd_id`=?";
    $values =[$frm_data['address'],$frm_data['gmap'],$frm_data['mn1'],$frm_data['mn2'],$frm_data['mail'],$frm_data['tw'],$frm_data['fb'],$frm_data['iframe'],1];
    $res = update($q,$values,'ssssssssi');
    echo $res;
}

?>