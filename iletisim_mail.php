<?php
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include 'yazilar.php';

use PHPMailer\PHPMailer\PHPMailer;
//use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();

$mail->Host = $i_mail_host; 
$mail->Username = $i_mail_username; 
$mail->Password = $i_mail_password;
$mail->Port = $i_mail_port; 
$mail->SMTPSecure = 'tls'; 

$mail->isHTML(true);
$mail->CharSet = "UTF-8";
$mail->setLanguage('tr', 'language/');
$mail->SMTPDebug  = 2;

$mail->setFrom($i_mail, $_POST['user-name']);
$mail->addAddress($gitMail, $_POST['user-name']);


$mail->Subject = $_POST['user-name'].' tarafından gönderilen iletişim e-postası.';
$mail->Body =
'
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0 " />
    <meta name="format-detection" content="telephone=no" />
    <!--[if !mso]><!-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!--<![endif]-->
    <style type="text/css">
      body {
      -webkit-text-size-adjust: 100% !important;
      -ms-text-size-adjust: 100% !important;
      -webkit-font-smoothing: antialiased !important;
      }
      img {
      border: 0 !important;
      outline: none !important;
      }
      p {
      Margin: 0px !important;
      Padding: 0px !important;
      }
      table {
      border-collapse: collapse;
      mso-table-lspace: 0px;
      mso-table-rspace: 0px;
      }
      td, a, span {
      border-collapse: collapse;
      mso-line-height-rule: exactly;
      }
      .ExternalClass * {
      line-height: 100%;
      }
      span.MsoHyperlink {
      mso-style-priority:99;
      color:inherit;}
      span.MsoHyperlinkFollowed {
      mso-style-priority:99;
      color:inherit;}
      </style>
      <style media="only screen and (min-width:481px) and (max-width:599px)" type="text/css">
      @media only screen and (min-width:481px) and (max-width:599px) {
      table[class=em_main_table] {
      width: 100% !important;
      }
      table[class=em_wrapper] {
      width: 100% !important;
      }
      td[class=em_hide], br[class=em_hide] {
      display: none !important;
      }
      img[class=em_full_img] {
      width: 100% !important;
      height: auto !important;
      }
      td[class=em_align_cent] {
      text-align: center !important;
      }
      td[class=em_pad_top]{
      padding-top:20px !important;
      }
      td[class=em_aside]{
      padding-left:10px !important;
      padding-right:10px !important;
      }
      td[class=em_height]{
      height: 20px !important;
      }
      td[class=em_space]{
      width:10px !important;	
      }
      td[class=em_width55] {
      width:80px !important;
	  text-align:center !important;
      }
      td[class=em_width75] {
      width:100px !important;
      }
      td[class=em_font]{
      font-size:14px !important;	
      }
      td[class=em_font2] {
      text-align:center !important;
      }
      td[class=em_align_cent1] {
      text-align: center !important;
      padding-bottom: 10px !important;
      }
      }
      </style>
      <style media="only screen and (max-width:480px)" type="text/css">
      @media only screen and (max-width:480px) {
      table[class=em_main_table] {
      width: 100% !important;
      }
      table[class=em_wrapper] {
      width: 100% !important;
      }
      td[class=em_hide], br[class=em_hide], span[class=em_hide] {
      display: none !important;
      }
      img[class=em_full_img] {
      width: 100% !important;
      height: auto !important;
      }
      td[class=em_align_cent] {
      text-align: center !important;
      }
      td[class=em_pad_top]{
      padding-top:20px !important;
      }
      td[class=em_height]{
      height: 20px !important;
      }
      td[class=em_aside]{
      padding-left:10px !important;
      padding-right:10px !important;
      } 
      td[class=em_font]{
      font-size:14px !important;
      line-height:28px !important;
      }
      td[class=em_font1]{
      font-size:14px !important;
      line-height:18px !important;
      }
      td[class=em_font2]{
      font-size:14px !important;
      line-height:18px !important;
      text-align:center !important;
      }
      td[class=em_space]{
      width:10px !important;	
      }
      span[class=em_br]{
      display:block !important;
      }
      td[class=em_width55] {
      width:55px !important;
      font-size:15px !important;
      line-height:19px !important;
	  text-align:center !important;
      }
      td[class=em_width75] {
      width:75px !important;
      font-size:15px !important;
      line-height:19px !important;
      }
      td[class=em_align_cent1] {
      text-align: center !important;
      padding-bottom: 10px !important;
      }
      }
    </style>
  </head>
  <body style="margin:0px; padding:0px;" bgcolor="#ffffff">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
      <!-- BODY  -->
      <tr>
        <td align="center" valign="top"  bgcolor="#010310">
          <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="em_main_table" style="table-layout:fixed;">
            <tr>
              <td height="40" class="em_height">&nbsp;</td>
            </tr>
            <tr>
              <td align="center"><img src="https://yeninesilcnr.net/kaan/sadebilisim/img/logo-white.png"  height="100%"></td>
            </tr>
            <tr>
              <td valign="top" class="em_aside">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="50" class="em_height">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top" align="center" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px;line-height:22px; font-weight:bold; color:#ffffff; text-transform:uppercase;">'.$i_kategori.'</td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Ad Soyad : &nbsp;<span style=" color:#30373b;">'.$_POST['user-name'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Tarih : &nbsp;<span style=" color:#30373b;">'.date("d.m.y").'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Telefon : &nbsp;<span style=" color:#30373b;">'.$_POST['user-phone'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">E-posta : &nbsp;<span style=" color:#30373b;">'.$_POST['user-mail'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Şirket İsmi : &nbsp;<span style=" color:#30373b;">'.$_POST['user-company-name'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Adres : &nbsp;<span style=" color:#30373b;">'.$_POST['user-address'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>                  
                  <tr>
                    <td height="20" style="font-size:1px; line-height:1px;">&nbsp;</td>
                  </tr>
                  <tr>
                    <td valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#f6f7f8">
                        <tr>
                          <td width="25" class="em_space">&nbsp;</td>
                          <td valign="top">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                              <tr>
                                <td align="left" valign="top"  class="em_font1" style="font-family:\'Open Sans\', Arial, sans-serif; font-size:17px; line-height:20px; font-weight:bold; color:#48b7b1; ">Mesaj : &nbsp;<span style=" color:#30373b;">'.$_POST['user-msg'].'</span></td>
                              </tr>
                              <tr>
                                <td height="12" style="font-size:1px; line-height:1px;">&nbsp;</td>
                              </tr>
                            </table>
                          </td>
                          <td width="25" class="em_space">&nbsp;</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                  <tr>
                    <td height="25" class="em_height">&nbsp;</td>
                  </tr>
                </table>
              </td>
            </tr>
          </table>
        </td>
      </tr>
      <!-- //BODY  -->
 
    </table>
    <div style="display:none; white-space:nowrap; font:20px courier; color:#ffffff; background-color:#ffffff;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</div>
  </body>
</html>
';



echo $mail->ErrorInfo;

$data = array(
            'secret' => $secret,
            'response' => $_POST['h-captcha-response']
        );
$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($verify);
// var_dump($response);
$responseData = json_decode($response);
if($responseData->success) {
    echo 'MAİL GÖNDERİLDİ';
    $mail->send();

} 
else {
    echo 'MAİL GÖNDERİLEMEDİ, LÜTFEN TEKRAR DENEYİN.';
}

?>