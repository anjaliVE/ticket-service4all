<!DOCTYPE html>
<html>
<head>
	<title>Verification Email</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet">
	<style type="text/css">
.verification-email-wrapper {
    font-family: 'Open Sans', sans-serif;
    font-weight: 400;
    max-width: 900px;
    margin: 0 auto;
}
.login-header-col {
    background: rgb(236,105,7);
    background: linear-gradient(90deg, rgba(236,105,7,1) 0%, rgba(159,23,1,1) 100%);
    display: block;
    padding: 10px 40px;
    border-radius: 10px 10px 0 0;
    font-size: 28px;
    color: #fff;
    text-align: center;
    font-family: 'Open Sans', sans-serif;
    text-transform: uppercase;
    line-height: 35px;
    font-weight: 600;
}
.login-form-col {
    display: block;
    background: rgba(255,255,255,0.7);
    padding: 50px;
    border-radius: 0 0 10px 10px;
    box-shadow: 0 0 20px rgba(0,0,0,0.1);
}
.login-form-row {
    display: block;
    padding: 10px 0;
    position: relative;
}
.login-form-row p{margin: 0;}
.verification-mail a {
    font-size: 16px;
    text-decoration: underline;
}
.login-form-text {
    color: #ec6907;
    font-family: 'Open Sans', sans-serif;
    font-weight: 600;
}
.verification-email-wrapper h1 {
    font-family: 'Open Sans', sans-serif;
    margin: 20px 0 10px 0;
}
.verification-email-wrapper h1 span {
    color: #003a8c;
}
	</style>
</head>
<body>


<div class="login-form-wrapper verification-email-wrapper">
              <div class="login-header-col verfication-header">Create Ticket</div>
              <div class="login-form-col">
                <div class="login-form-row">
                  <h1>Hi <span>{{ ucfirst($ticket->name) }}</span></h1>                  
                </div>
                <div class="login-form-row">
                  <p>Thank you for reaching out. This is just a quick note to inform you that we received your ticket and have already 
started working on resolving your issue [Ticket ID: {{ $ticket->ticket_id }}, Dated: {{ $ticket->created_at->format('Y-m-d') }}].</p>
                </div>                
                <div class="login-form-row">
                <p>If you have any further questions or concerns, please let us know.</p>                
                </div>                
                <div class="login-form-row" style="padding-top: 40px">
                <p><strong>Take care,</strong><br>The Service4all Team</p>                
                </div>                                                              
              </div>
            </div>

</body>
</html>


