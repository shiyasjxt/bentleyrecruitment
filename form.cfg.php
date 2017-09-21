<?php exit(0); ?> { 
"settings":
{
	"data_settings" : 
	{
		"save_database" : 
		{
			"database" : "",
			"is_present" : false,
			"password" : "",
			"port" : 3306,
			"server" : "",
			"tablename" : "",
			"username" : ""
		},
		"save_file" : 
		{
			"filename" : "form-results.csv",
			"is_present" : false
		},
		"save_sqlite" : 
		{
			"database" : "submit-resume.dat",
			"is_present" : false,
			"tablename" : "submit-resume"
		}
	},
	"email_settings" : 
	{
		"auto_response_message" : 
		{
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body>\n<h2>Hi [name]</h2>\n<p><strong \nThank you very much for submitting your resume to Command Recruitment! We are processing your resume and will pass your work to our team that specialize in the industry of your role.\n <br />\nA consultant will speak to you once we have a role that is suitable for you.</strong></p>\n<p>\n[_form_results_]\n</p>\n</body>\n</html>",
				"is_present" : true,
				"subject" : "Thank you for your submission"
			},
			"from" : "forms@jxt.com.au",
			"is_present" : true,
			"to" : "[email]"
		},
		"notification_message" : 
		{
			"bcc" : "",
			"cc" : "apply@bentleyrecruitment.com.au",
			"custom" : 
			{
				"body" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head><title>You got mail!</title></head>\n<body>\n<p>Someone filled out your form, and here's what they said:</p>\n<p>[_form_results_]</p>\n</body>\n</html>",
				"is_present" : true,
				"subject" : "Submit Resume form has just been submitted"
			},
			"from" : "forms@jxt.com.au",
			"is_present" : true,
			"replyto" : "",
			"to" : "brenda@bentleyrecruitment.com.au"
		}
	},
	"general_settings" : 
	{
		"colorboxautoenabled" : false,
		"colorboxautotime" : 3,
		"colorboxenabled" : false,
		"colorboxname" : "Default",
		"formname" : "",
		"is_appstore" : "0",
		"timezone" : "UTC"
	},
	"mailchimp" : 
	{
		"apiKey" : "",
		"lists" : []
	},
	"payment_settings" : 
	{
		"confirmpayment" : "<center>\n<style type=\"text/css\">\n#docContainer table {width:80%; margin-top: 5px; margin-bottom: 5px;}\n#docContainer td {text-align:right; min-width:25%; font-size: 12px !important; line-height: 20px;margin: 0px;border-bottom: 1px solid #e9e9e9; padding-right:5px;}\n#docContainer td:first-child {text-align:left; font-size: 13px !important; font-weight:bold; vertical-align:text-top; min-width:50%;}\n#docContainer th {font-size: 13px !important; font-weight:bold; vertical-align:text-top; text-align:right; padding-right:5px;}\n#docContainer th:first-child {text-align:left;}\n#docContainer tr:first-child {border-bottom-width:2px; border-bottom-style:solid;}\n#docContainer center {margin-bottom:15px;}\n#docContainer form input { margin:5px; }\n#docContainer #fb_confirm_inline { margin:5px; text-align:center;}\n#docContainer #fb_confirm_inline>center h2 { }\n#docContainer #fb_confirm_inline>center p { margin:5px; }\n#docContainer #fb_confirm_inline>center a { }\n#docContainer #fb_confirm_inline input { border:none; color:transparent; font-size:0px; background-color: transparent; background-repat: no-repeat; }\n#docContainer #fb_paypalwps { background: url('https://coffeecupimages.s3.amazonaws.com/paypal.gif');background-repeat:no-repeat; width:145px; height:42px; }\n#docContainer #fb_googlepay { background: url('https://coffeecupimages.s3.amazonaws.com/googlecheckout.gif'); background-repeat:no-repeat; width:168px; height:44px; }\n#docContainer #fb_authnet { background: url('https://coffeecupimages.s3.amazonaws.com/authnet.gif'); background-repeat:no-repeat; width:135px; height:38px; }\n#docContainer #fb_2checkout { background: url('https://coffeecupimages.s3.amazonaws.com/2co.png'); background-repeat:no-repeat; width:210px; height:44px; }\n#docContainer #fb_invoice { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email.png'); background-repeat:no-repeat; width:102px; height:31px; }\n#docContainer #fb_invoice:hover { background: url('https://coffeecupimages.s3.amazonaws.com/btn_email_hov.png'); }\n#docContainer #fb_goback { color: inherit; }\n</style>\n[_cart_summary_]\n<h2>Almost done! </h2>\n<p>Your order will not be processed until you click the payment button below.</p>\n<a id=\"fb_goback\"href=\"?action=back\">Back to form</a></center>",
		"currencysymbol" : "$",
		"decimals" : 2,
		"fixedprice" : "000",
		"invoicelabel" : "",
		"is_present" : false,
		"paymenttype" : "redirect",
		"shopcurrency" : "USD",
		"usecustomsymbol" : false
	},
	"redirect_settings" : 
	{
		"confirmpage" : "<!DOCTYPE html>\n<html dir=\"ltr\" lang=\"en\">\n<head>\n<title>Success!</title>\n<meta charset=\"utf-8\">\n<style type=\"text/css\">\nbody {background: #f9f9f9;padding-left: 11%;padding-top: 7%; padding-right: 2%;max-width:700px;font-family: Helvetica, Arial;}\ntable{width:80%;}\np{font-size: 16px;font-weight: bold;color: #666;}\nh1{font-size: 60px !important;color: #ccc !important;margin:0px;}\nh2{font-size: 28px !important;color: #666 !important;margin: 0px; border-bottom: 1px dotted #00A2FF; padding-bottom:3px;}\nh3{font-size: 16px; color: #a1a1a1; border-top: 1px dotted #00A2FF; padding-top:1.7%; font-weight: bold;}\nh3 span{color: #ccc;}\ntd {font-size: 12px !important; line-height: 30px;  color: #666 !important; margin: 0px;border-bottom: 1px solid #e9e9e9;}\ntd:first-child {font-size: 13px !important; font-weight:bold; color: #333 !important; vertical-align:text-top; min-width:50%; padding-right:5px;}\na:link {color:#666; text-decoration:none;} a:visited {color:#666; text-decoration:none;} a:hover {color:#00A2FF;}\n</style>\n</head>\n<body>\n<h1>Thanks! </h1>\n<h2>The form is on its way.</h2>\n<p>Here&rsquo;s what was sent:</p>\n<div>[_form_results_]</div>\n<!-- link back to your Home Page -->\n<h3>Let&rsquo;s go <span> <a target=\"_blank\" href=\"http://www.coffeecup.com\">Back Home</a></span></h3>\n</body>\n</html>\n",
		"gotopage" : "http://www.bentleyrecruitment.com.au/page/thank-you/",
		"inline" : "<h2>Thank you!</h2>\n<p>Your form was successfully submitted.</p>",
		"type" : "gotopage"
	},
	"uid" : "3732dd2383e09fec3fe795e1d922bf69",
	"validation_report" : "in_line"
},
"rules":{"name":{"label":"Name *","fieldtype":"text","required":true},"email":{"email":true,"label":"Email *","fieldtype":"email","required":true},"phone":{"label":"Contact Number","fieldtype":"text"},"select19":{"label":"Classification","fieldtype":"dropdown","required":true,"values":["","Accounting","Administration","Advert/Media/Comm/Ent & Design","Aged Care Jobs","Apprenticeships & Traineeships","Automotive","Aviation","Banking & Finance","Call Centre & Customer Service","Community & Sports","Community Jobs","Construction & Architecture","Consulting","Dentistry","Disability Jobs","Education & Training","Engineering","Executive","Government, Defence, Emergency","Graduate","Healthcare & Medical","Hospitality, Tourism & Travel","HR & Recruitment","I.T. & T","Insurance & Superannuation","Legal","Library and Information","Manufacturing/Operations","Marketing","Mental Health jobs","Mining, Oil & Gas","Other","Primary Industry","Real Estate & Property","Records, Information and Archives","Retail & Fashion","Option 1","Option 2","Option 3","Option 4","SAP Other","SAP Sales & Marketing","SAP Technical","SAP Training & Documentation","Science","Self Employment","Trades & Services","Transport, Shipping, Logistics","Volunteer"]},"select20":{"label":"Select an option","fieldtype":"dropdown","values":["ACT","NSW","NT","QLD","SA","TAS","VIC","WA"]},"attach_resume":{"label":"Attach Resume *","accept":"txt|rtf|jpg|jpeg|png|gif|doc|docx|pdf","files":false,"attach":true,"database":false,"maxbytes":3072000,"fieldtype":"fileupload","required":true},"file17":{"label":"Cover Letter","accept":"txt|rtf|jpg|jpeg|png|gif|doc|docx","files":true,"attach":true,"database":false,"maxbytes":1024000,"fieldtype":"fileupload"},"file18":{"label":"Portfolio","accept":"txt|rtf|jpg|jpeg|png|gif","files":true,"attach":true,"database":false,"maxbytes":102400,"fieldtype":"fileupload"},"comments":{"label":"Comments","fieldtype":"textarea","maxlength":"10000"}},
"payment_rules":{"select19":{},"select20":{}},
"conditional_rules":{},
"application_version":"Web Form Builder (Windows), build 2.3.5217"
}