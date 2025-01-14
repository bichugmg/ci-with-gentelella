<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller{
    
    function  __construct(){
        parent::__construct();
    }
    
    function trainer_profile_completion(){

   
        $to=$this->uri->segment(3);
        $name=str_replace('_', ' ', $this->uri->segment(4));
        // Load PHPMailer library
        $this->load->library('PHPMailer_Lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hr.teaminterval@gmail.com';
        $mail->Password = 'HR@Interval';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('careers@teaminterval.in', 'HR | Team INTERVAL');
        $mail->addReplyTo('careers@teaminterval.in', 'HR | Team INTERVAL');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Registration Successful';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superpeer Email</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-size: 16px;
        color: #000;
        font-family: Helvetica, Arial, sans-serif;
      }
      .mt-1 {
        margin-top: 4px;
      }
      .mt-2 {
        margin-top: 8px;
      }
      .mt-4 {
        margin-top: 16px;
      }
      .mt-6 {
        margin-top: 24px;
      }
      .mt-8 {
        margin-top: 32px;
      }
      .mb-1 {
        margin-bottom: 4px;
      }
      .mb-2 {
        margin-bottom: 8px;
      }
      .mb-4 {
        margin-bottom: 16px;
      }
      .mb-6 {
        margin-bottom: 24px;
      }
      .mb-8 {
        margin-bottom: 32px;
      }
      .ml-1 {
        margin-left: 4px;
      }
      .ml-2 {
        margin-left: 8px;
      }
      .ml-4 {
        margin-left: 16px;
      }
      .ml-6 {
        margin-left: 24px;
      }
      .ml-8 {
        margin-left: 32px;
      }
      .mr-1 {
        margin-right: 4px;
      }
      .mr-2 {
        margin-right: 8px;
      }
      .mr-4 {
        margin-right: 16px;
      }
      .mr-6 {
        margin-right: 24px;
      }
      .mr-8 {
        margin-right: 32px;
      }
      .pb-1 {
        padding-bottom: 4px;
      }
      .pb-2 {
        padding-bottom: 8px;
      }
      .pb-4 {
        padding-bottom: 16px;
      }
      .pb-6 {
        padding-bottom: 24px;
      }
      .pb-8 {
        padding-bottom: 32px;
      }
      .pt-1 {
        padding-top: 4px;
      }
      .pt-2 {
        padding-top: 8px;
      }
      .pt-4 {
        padding-top: 16px;
      }
      .pt-6 {
        padding-top: 24px;
      }
      .pt-8 {
        padding-top: 32px;
      }
      .pl-1 {
        padding-left: 4px;
      }
      .pl-2 {
        padding-left: 8px;
      }
      .pl-4 {
        padding-left: 16px;
      }
      .pl-6 {
        padding-left: 24px;
      }
      .pl-8 {
        padding-left: 32px;
      }
      .pr-1 {
        padding-right: 4px;
      }
      .pr-2 {
        padding-right: 8px;
      }
      .pr-4 {
        padding-right: 16px;
      }
      .pr-6 {
        padding-right: 24px;
      }
      .pr-8 {
        padding-right: 32px;
      }
      .fw-bold {
        font-weight: bold;
      }
      .fw-600 {
        font-weight: 600;
      }
      .inline-block {
        display: inline-block;
      }
      .block {
        display: block;
      }
      .right-0 {
        position: absolute;
        right: 0;
      }
      p {
        font-size: 18px;
        line-height: 28px;
        text-align:justify;
      }
      .wrapper {
        width: 472px;
        text-align: left;
        padding: 45px 64px 32px 64px;
        border-bottom: 1px solid #C1CFCA;
      }
      .wrapper.lineless {
        border: 0;
        padding-top: 16px;
        position: relative;
      }
      .header {
        font-size: 24px;
      }
      .title {
        font-size: 18px;
        line-height: 27px;
      }
      .info-wrapper {
        border-left: 2px solid #188D77;
      }
      .info-wrapper .subtitle {
        font-size: 18px;
        line-height: 28px;
      }
      a.button {
        padding: 15px 48px;
        border: 0;
        border-radius: 50px;
        background: #0967D2;
        color: #FFF;
      }
      a.button.primary {
        background: #188D77;
      }
      a.button.danger {
        background: #E30613;
      }
      a {
        line-height: 24px;
        color: #188D77;
        text-decoration: none;
      }
      .fine-print,
      .fine-print a {
        font-size: 14px;
      }
      .pre-line {
        white-space: pre-line;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <img src="https://superpeer.com/logo/logo-notext.png" width="40" />
      <h1 class="header pt-2 pb-8">
        Congratulations, <br />
        on taking your first step!
      </h1>
      <p class="pb-2">
        Hi '.$name.',
      </p>
      <p class="pb-2">
        Greetings from Team INTERVAL. We will be reviewing your application for the trainer'."'".'s recruitment programme. 
      </p>
      <p class="pb-8">
       Once our team finds a role that fits your talent and interest, we shall further communicate with you. Let'."'".'s make a change together.
      </p>
      <a href="https://teaminterval.in" target="_blank" class="button primary mb-4 inline-block">
        Visit Our Website
      </a>
      <p class="mt-2 mb-6">
        Best regards,
      </p>
      <p class="small fw-bold mt-2 mb-4">
        Talent Acquisition Team | INTERVAL<sup>®</sup>
      </p>
      <div class="social-media">
        
        <a href="https://wa.me/917025841234" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/whatsapp.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://facebook.com/teamintervals" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/fb.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://instagram.com/team_interval" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/instagram.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://twitter.com/intervalteam" target="_blank">
          <img width="17" height="17" src="https://teaminterval.in/assets/users/email/twitter.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://youtube.com/teaminterval" target="_blank">
          <img width="14" height="14" src="https://teaminterval.in/assets/users/email/youtube.png" />
        </a>
      </div>
    </div>
    <div class="wrapper lineless">
      <p class="fine-print pb-8">
        Have questions or need help? Check out our
        <a href="https://teaminterval.in/about" target="_blank">FAQs</a>,
        or email us at
        <a href="mailto:careers@teaminterval.in">
          careers@teaminterval.in
        </a>
      </p>
    </div>
  </body>
</html>';
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
    function trainer_profile_completion_notification(){

   
        $to=$this->uri->segment(3);
        $name=str_replace('_', ' ', $this->uri->segment(4));
        // Load PHPMailer library
        $this->load->library('PHPMailer_Lib');
        
        // PHPMailer object
        $mail = $this->phpmailer_lib->load();
        
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host     = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'hr.teaminterval@gmail.com';
        $mail->Password = 'HR@Interval';
        $mail->SMTPSecure = 'ssl';
        $mail->Port     = 465;
        
        $mail->setFrom('careers@teaminterval.in', 'HR | Team INTERVAL');
        $mail->addReplyTo('careers@teaminterval.in', 'HR | Team INTERVAL');
        
        // Add a recipient
        $mail->addAddress($to);
        
        // // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
        
        // Email subject
        $mail->Subject = 'Registration Successful';
        
        // Set email format to HTML
        $mail->isHTML(true);
        
        // Email body content
        $mailContent = '<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superpeer Email</title>
    <style>
      * {
        margin: 0;
        padding: 0;
        font-size: 16px;
        color: #000;
        font-family: Helvetica, Arial, sans-serif;
      }
      .mt-1 {
        margin-top: 4px;
      }
      .mt-2 {
        margin-top: 8px;
      }
      .mt-4 {
        margin-top: 16px;
      }
      .mt-6 {
        margin-top: 24px;
      }
      .mt-8 {
        margin-top: 32px;
      }
      .mb-1 {
        margin-bottom: 4px;
      }
      .mb-2 {
        margin-bottom: 8px;
      }
      .mb-4 {
        margin-bottom: 16px;
      }
      .mb-6 {
        margin-bottom: 24px;
      }
      .mb-8 {
        margin-bottom: 32px;
      }
      .ml-1 {
        margin-left: 4px;
      }
      .ml-2 {
        margin-left: 8px;
      }
      .ml-4 {
        margin-left: 16px;
      }
      .ml-6 {
        margin-left: 24px;
      }
      .ml-8 {
        margin-left: 32px;
      }
      .mr-1 {
        margin-right: 4px;
      }
      .mr-2 {
        margin-right: 8px;
      }
      .mr-4 {
        margin-right: 16px;
      }
      .mr-6 {
        margin-right: 24px;
      }
      .mr-8 {
        margin-right: 32px;
      }
      .pb-1 {
        padding-bottom: 4px;
      }
      .pb-2 {
        padding-bottom: 8px;
      }
      .pb-4 {
        padding-bottom: 16px;
      }
      .pb-6 {
        padding-bottom: 24px;
      }
      .pb-8 {
        padding-bottom: 32px;
      }
      .pt-1 {
        padding-top: 4px;
      }
      .pt-2 {
        padding-top: 8px;
      }
      .pt-4 {
        padding-top: 16px;
      }
      .pt-6 {
        padding-top: 24px;
      }
      .pt-8 {
        padding-top: 32px;
      }
      .pl-1 {
        padding-left: 4px;
      }
      .pl-2 {
        padding-left: 8px;
      }
      .pl-4 {
        padding-left: 16px;
      }
      .pl-6 {
        padding-left: 24px;
      }
      .pl-8 {
        padding-left: 32px;
      }
      .pr-1 {
        padding-right: 4px;
      }
      .pr-2 {
        padding-right: 8px;
      }
      .pr-4 {
        padding-right: 16px;
      }
      .pr-6 {
        padding-right: 24px;
      }
      .pr-8 {
        padding-right: 32px;
      }
      .fw-bold {
        font-weight: bold;
      }
      .fw-600 {
        font-weight: 600;
      }
      .inline-block {
        display: inline-block;
      }
      .block {
        display: block;
      }
      .right-0 {
        position: absolute;
        right: 0;
      }
      p {
        font-size: 18px;
        line-height: 28px;
        text-align:justify;
      }
      .wrapper {
        width: 472px;
        text-align: left;
        padding: 45px 64px 32px 64px;
        border-bottom: 1px solid #C1CFCA;
      }
      .wrapper.lineless {
        border: 0;
        padding-top: 16px;
        position: relative;
      }
      .header {
        font-size: 24px;
      }
      .title {
        font-size: 18px;
        line-height: 27px;
      }
      .info-wrapper {
        border-left: 2px solid #188D77;
      }
      .info-wrapper .subtitle {
        font-size: 18px;
        line-height: 28px;
      }
      a.button {
        padding: 15px 48px;
        border: 0;
        border-radius: 50px;
        background: #0967D2;
        color: #FFF;
      }
      a.button.primary {
        background: #188D77;
      }
      a.button.danger {
        background: #E30613;
      }
      a {
        line-height: 24px;
        color: #188D77;
        text-decoration: none;
      }
      .fine-print,
      .fine-print a {
        font-size: 14px;
      }
      .pre-line {
        white-space: pre-line;
      }
    </style>
  </head>
  <body>
    <div class="wrapper">
      <img src="https://superpeer.com/logo/logo-notext.png" width="40" />
      <h1 class="header pt-2 pb-8">
        Congratulations, <br />
        on taking your first step!
      </h1>
      <p class="pb-2">
        Hi '.$name.',
      </p>
      <p class="pb-2">
        Greetings from Team INTERVAL. We will be reviewing your application for the trainer'."'".'s recruitment programme. 
      </p>
      <p class="pb-8">
       Once our team finds a role that fits your talent and interest, we shall further communicate with you. Let'."'".'s make a change together.
      </p>
      <a href="https://teaminterval.in" target="_blank" class="button primary mb-4 inline-block">
        Visit Our Website
      </a>
      <p class="mt-2 mb-6">
        Best regards,
      </p>
      <p class="small fw-bold mt-2 mb-4">
        Talent Acquisition Team | INTERVAL<sup>®</sup>
      </p>
      <div class="social-media">
        
        <a href="https://wa.me/917025841234" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/whatsapp.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://facebook.com/teamintervals" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/fb.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://instagram.com/team_interval" target="_blank">
          <img width="16" height="16" src="https://teaminterval.in/assets/users/email/instagram.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://twitter.com/intervalteam" target="_blank">
          <img width="17" height="17" src="https://teaminterval.in/assets/users/email/twitter.png" />
        </a>&nbsp;&nbsp;&nbsp;
        <a href="https://youtube.com/teaminterval" target="_blank">
          <img width="14" height="14" src="https://teaminterval.in/assets/users/email/youtube.png" />
        </a>
      </div>
    </div>
    <div class="wrapper lineless">
      <p class="fine-print pb-8">
        Have questions or need help? Check out our
        <a href="https://teaminterval.in/about" target="_blank">FAQs</a>,
        or email us at
        <a href="mailto:careers@teaminterval.in">
          careers@teaminterval.in
        </a>
      </p>
    </div>
  </body>
</html>';
        $mail->Body = $mailContent;
        
        // Send email
        if(!$mail->send()){
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }else{
            echo 'Message has been sent';
        }
    }
    
}
