<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('letournaments.com');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('limitededitiontournaments@gmail.com');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'mysqli.default_host',
                      /*username*/'mysqli.default_user',
                      /*password*/'mysqli.default_pw',
                      /*database name*/'LimitedEdition',
                      /*table name*/'Users');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('oQehlCFZ22JULy1');

?>