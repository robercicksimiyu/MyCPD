<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  dir="ltr" lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
        <title>Learning Plan</title>
        <link href="<?= base_url('/assets/css/default.css') ?>" rel="stylesheet" type="text/css">


        
        
        
            <link rel="shortcut icon" href="http://vle.cant-col.ac.uk/theme/image.php?theme=aardvark&amp;image=favicon&amp;rev=609&amp;component=theme" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="http://vle.cant-col.ac.uk/theme/yui_combo.php?3.4.1/build/cssreset/reset-min.css&amp;3.4.1/build/cssfonts/fonts-min.css&amp;3.4.1/build/cssgrids/grids-min.css&amp;3.4.1/build/cssbase/base-min.css" /><script type="text/javascript" src="http://vle.cant-col.ac.uk/lib/yui/3.4.1/build/yui/yui-min.js"></script><script type="text/javascript" src="http://vle.cant-col.ac.uk/theme/yui_combo.php?2.9.0/build/yahoo/yahoo-min.js&amp;2.9.0/build/dom/dom-min.js"></script>
<link rel="stylesheet" type="text/css" href="http://vle.cant-col.ac.uk/theme/yui_combo.php?2.9.0/build/assets/skins/sam/skin.css" />
<script id="firstthemesheet" type="text/css">/** Required in order to fix style inclusion problems in IE with YUI **/</script><link rel="stylesheet" type="text/css" href="http://vle.cant-col.ac.uk/theme/styles.php?theme=aardvark&amp;rev=609" />
<script type="text/javascript">

</script>
<script type="text/javascript" src="http://vle.cant-col.ac.uk/lib/javascript.php?file=%2Flib%2Fjavascript-static.js&amp;rev=594"></script>
<script type="text/javascript" src="http://vle.cant-col.ac.uk/theme/javascript.php?theme=aardvark&amp;rev=609&amp;type=head"></script>   
    
        <link href="<?= base_url('/assets/css/default.css') ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="<?= base_url('assets/js/DataTables/media/js/jquery.dataTables.js') ?>"></script>
        <script>
            $(document).ready(function(){
                filter = $('#table_detail').dataTable({
                    "bJQueryUI": true,
                    "sPaginationType": "full_numbers"});
               //auto fill fiter from get for linking. 
               filter.fnFilter( '1 Teaching and Learning' ); 
            });
            
            
        </script>

</head>

<body id="page-login-index" class=" path-login safari dir-ltr lang-en yui-skin-sam yui3-skin-sam vle-cant-col-ac-uk pagelayout-login course-1 context-1 notloggedin content-only has_custom_menu">
<div class="skiplinks"><a class="skip" href="#maincontent">Skip to main content</a></div>
<script type="text/javascript">
//<![CDATA[
document.body.className += ' jsenabled';
//]]>
</script>


<div id="page">
<div id="graphicwrap">

		
<div id="headerwrap">
	<div id="logowrap">
	
	
	<a href="http://vle.cant-col.ac.uk/"><img src='http://vle.cant-col.ac.uk/theme/aardvark/pix/CC-logo.png' alt='logo' id='logo' /></a>	
				
		</div>

<div class="profilepic" id="profilepic">
	<a href="http://vle.cant-col.ac.uk/user/view.php?id=0&amp;course=1"><img src="http://vle.cant-col.ac.uk/user/pix.php?file=/0/f1.jpg" width="80px" height="80px" title="Guest" alt="Guest" /></a></div>

<div class="profilelogin" id="profilelogin"><?= $employee->display_name ?></h2><form id="login" method="post" action="http://vle.cant-col.ac.uk/login/index.php?authldap_skipntlmsso=1"><ul></ul></form></div></div>		
<div id="menuwrap">
<div id="homeicon">
<a href="http://vle.cant-col.ac.uk"><img src="http://vle.cant-col.ac.uk/theme/image.php?theme=aardvark&amp;image=menu%2Fhome_icon&amp;rev=609&amp;component=theme"></a>
</div>
	 					<div id="menuitemswrap"><div id="custommenu"><div id="custom_menu_1" class="yui3-menu yui3-menu-horizontal javascript-disabled"><div class="yui3-menu-content"><ul><li><a class="yui3-menu-label" title="Find my course" href="http://vle.cant-col.ac.uk/course">Find my course</a><div id="cm_submenu_1" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li><a class="yui3-menu-label" title="Arts, Media &amp; Publishing" href="#cm_submenu_2">Arts, Media & Publishing</a><div id="cm_submenu_2" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Art &amp; Design" href="http://vle.cant-col.ac.uk/course/category.php?id=3">Art & Design</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Media" href="http://vle.cant-col.ac.uk/course/category.php?id=5">Media</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Music" href="http://vle.cant-col.ac.uk/course/category.php?id=6">Music</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Performing Arts &amp; Dance" href="http://vle.cant-col.ac.uk/course/category.php?id=7">Performing Arts & Dance</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Canterbury College Swale Campus" href="http://vle.cant-col.ac.uk/course/category.php?id=40">Canterbury College Swale Campus</a><div id="cm_submenu_3" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li><a class="yui3-menu-label" title="Business Administration" href="http://vle.cant-col.ac.uk/course/category.php?id=42">Business Administration</a><div id="cm_submenu_4" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=210">Work Based Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Computing and IT" href="http://vle.cant-col.ac.uk/course/category.php?id=43">Computing and IT</a><div id="cm_submenu_5" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=208">Work Based Learning</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Construction" href="http://vle.cant-col.ac.uk/course/category.php?id=44">Construction</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Corporate IT" href="http://vle.cant-col.ac.uk/course/category.php?id=54">Corporate IT</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Hair &amp; Beauty" href="http://vle.cant-col.ac.uk/course/category.php?id=46">Hair & Beauty</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Health and Social Care" href="http://vle.cant-col.ac.uk/course/category.php?id=271">Health and Social Care</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Pre-Foundation Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=49">Pre-Foundation Learning</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Part-Time Courses" href="http://vle.cant-col.ac.uk/course/category.php?id=50">Part-Time Courses</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Evening Courses" href="http://vle.cant-col.ac.uk/course/category.php?id=51">Evening Courses</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="LRC" href="http://vle.cant-col.ac.uk/course/category.php?id=58">LRC</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Vocational Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=70">Vocational Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Engineering &amp; Construction" href="#cm_submenu_6">Engineering & Construction</a><div id="cm_submenu_6" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Building Services (Plumbing, Electrical &amp; Gas)" href="http://vle.cant-col.ac.uk/course/category.php?id=10">Building Services (Plumbing, Electrical & Gas)</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Construction Crafts" href="http://vle.cant-col.ac.uk/course/category.php?id=8">Construction Crafts</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Engineering, Fabrication &amp; Welding" href="http://vle.cant-col.ac.uk/course/category.php?id=11">Engineering, Fabrication & Welding</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Motor Vehicle" href="http://vle.cant-col.ac.uk/course/category.php?id=9">Motor Vehicle</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=140">Work Based Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Health/Public Services" href="#cm_submenu_7">Health/Public Services</a><div id="cm_submenu_7" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li><a class="yui3-menu-label" title="Early Years &amp; Playwork" href="http://vle.cant-col.ac.uk/course/category.php?id=32">Early Years & Playwork</a><div id="cm_submenu_8" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=184">Work Based Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Health, Social Care &amp; Counselling" href="http://vle.cant-col.ac.uk/course/category.php?id=33">Health, Social Care & Counselling</a><div id="cm_submenu_9" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=193">Work Based Learning</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Public Services, Health &amp; Safety" href="http://vle.cant-col.ac.uk/course/category.php?id=34">Public Services, Health & Safety</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Higher Education" href="#cm_submenu_10">Higher Education</a><div id="cm_submenu_10" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Access" href="http://vle.cant-col.ac.uk/course/category.php?id=28">Access</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="HE - Business &amp; Social Sciences" href="http://vle.cant-col.ac.uk/course/category.php?id=37">HE - Business & Social Sciences</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="HE - Creative Arts" href="http://vle.cant-col.ac.uk/course/category.php?id=36">HE - Creative Arts</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="HE - Science &amp; Technology" href="http://vle.cant-col.ac.uk/course/category.php?id=38">HE - Science & Technology</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="HE Study Skills Support" href="http://vle.cant-col.ac.uk/course/category.php?id=57">HE Study Skills Support</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Retail Commercial/Hospitality/Business &amp; Law" href="#cm_submenu_11">Retail Commercial/Hospitality/Business & Law</a><div id="cm_submenu_11" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Beauty Therapy" href="http://vle.cant-col.ac.uk/course/category.php?id=21">Beauty Therapy</a></li><li><a class="yui3-menu-label" title="Business &amp; Law" href="http://vle.cant-col.ac.uk/course/category.php?id=4">Business & Law</a><div id="cm_submenu_12" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=197">Work Based Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Hair" href="http://vle.cant-col.ac.uk/course/category.php?id=27">Hair</a><div id="cm_submenu_13" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=181">Work Based Learning</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Hospitality" href="http://vle.cant-col.ac.uk/course/category.php?id=26">Hospitality</a><div id="cm_submenu_14" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=177">Work Based Learning</a></li></ul></div></div></li></ul></div></div></li><li><a class="yui3-menu-label" title="Computing" href="http://vle.cant-col.ac.uk/course/category.php?id=24">Computing</a><div id="cm_submenu_15" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Level 1" href="http://vle.cant-col.ac.uk/course/category.php?id=65">Level 1</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Level 2" href="http://vle.cant-col.ac.uk/course/category.php?id=66">Level 2</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Level 3" href="http://vle.cant-col.ac.uk/course/category.php?id=67">Level 3</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Sports &amp; Leisure" href="http://vle.cant-col.ac.uk/course/category.php?id=22">Sports & Leisure</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Travel &amp; Tourism" href="http://vle.cant-col.ac.uk/course/category.php?id=25">Travel & Tourism</a></li><li><a class="yui3-menu-label" title="Sciences, Land Based, Humanities &amp; A-Levels" href="#cm_submenu_16">Sciences, Land Based, Humanities & A-Levels</a><div id="cm_submenu_16" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li><a class="yui3-menu-label" title="Animal Care, Equine &amp; Veterinary Services" href="http://vle.cant-col.ac.uk/course/category.php?id=12">Animal Care, Equine & Veterinary Services</a><div id="cm_submenu_17" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Work Based Learning" href="http://vle.cant-col.ac.uk/course/category.php?id=189">Work Based Learning</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Floristry" href="http://vle.cant-col.ac.uk/course/category.php?id=13">Floristry</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Languages &amp; Literature" href="http://vle.cant-col.ac.uk/course/category.php?id=20">Languages & Literature</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Science, Maths and Land Based" href="http://vle.cant-col.ac.uk/course/category.php?id=18">Science, Maths and Land Based</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="A-Levels" href="http://vle.cant-col.ac.uk/course/category.php?id=39">A-Levels</a></li></ul></div></div></li></ul></div></div></li><li><a class="yui3-menu-label" title="Student Support" href="#cm_submenu_18">Student Support</a><div id="cm_submenu_18" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Additional Support Team" href="http://www.cant-col.ac.uk/acl_users/credentials_cookie_auth/login_form?came_from=http%3A%2F%2Fwww.cant-col.ac.uk%2Fmle%2Fcollege-intranet-website%2Fstudent-intranet%2Fadditional-support%2Fadditional-support%2Fdocument_view">Additional Support Team</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Anti Bullying" href="http://vle.cant-col.ac.uk/course/view.php?id=979">Anti Bullying</a></li><li><a class="yui3-menu-label" title="Computing @ Canterbury College" href="#cm_submenu_19">Computing @ Canterbury College</a><div id="cm_submenu_19" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Introduction / User guides" href="http://vle.cant-col.ac.uk/course/view.php?id=2001">Introduction / User guides</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Acceptable Use Policy" href="http://www.cant-col.ac.uk/CC-Student-Acceptable-use-IT-Policy.pdf">Acceptable Use Policy</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Connexions direct" href="http://www.connexionskentandmedway.co.uk/">Connexions direct</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="EduApps" href="http://vle.cant-col.ac.uk/course/view.php?id=1521">EduApps</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Jobs for Students" href="http://www.cant-col.ac.uk/ctr/jobs-for-students">Jobs for Students</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Sex and Relationships" href="http://vle.cant-col.ac.uk/course/view.php?id=1646">Sex and Relationships</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Skill Builder" href="http://video.cant-col.ac.uk/resource/skill.html">Skill Builder</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Student Information Centre" href="http://vle.cant-col.ac.uk/course/category.php?id=129">Student Information Centre</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Student Intranet" href="http://www.cant-col.ac.uk/acl_users/credentials_cookie_auth/login_form?came_from=http%3A%2F%2Fwww.cant-col.ac.uk%2Fmle%2Fcollege-intranet-website%2Fstudent-intranet%2Fstudent-intranet%2Fdocument_view">Student Intranet</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Student Union" href="http://www.cant-col.ac.uk/college-life/student-union">Student Union</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="SU Facebook" href="http://www.facebook.com/canterburycollege">SU Facebook</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="University and Higher Education" href="http://www.direct.gov.uk/en/EducationAndLearning/UniversityAndHigherEducation/index.htm">University and Higher Education</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Staff Training" href="#cm_submenu_20">Staff Training</a><div id="cm_submenu_20" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="DisabledGo Training" href="http://training.disabledgo.com/auth/register/canterbury-college">DisabledGo Training</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Equality &amp; Diversity" href="http://vle.cant-col.ac.uk/course/category.php?id=59">Equality & Diversity</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Health &amp; Safety Essentials" href="http://vle.cant-col.ac.uk/course/category.php?id=60">Health & Safety Essentials</a></li><li><a class="yui3-menu-label" title="IT Basics" href="#cm_submenu_21">IT Basics</a><div id="cm_submenu_21" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="e-safety (JISC)" href="http://vle.cant-col.ac.uk/course/view.php?id=1131">e-safety (JISC)</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="MS Office 2010" href="http://vle.cant-col.ac.uk/course/category.php?id=104">MS Office 2010</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Staff Introduction" href="http://vle.cant-col.ac.uk/course/view.php?id=710">Staff Introduction</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Windows 7" href="http://vle.cant-col.ac.uk/course/category.php?id=264">Windows 7</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Xerte" href="http://vle.cant-col.ac.uk/course/view.php?id=668">Xerte</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="PSD &amp; Induction" href="#cm_submenu_22">PSD & Induction</a><div id="cm_submenu_22" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Edexcel PSD Level 1" href="http://vle.cant-col.ac.uk/course/view.php?id=782">Edexcel PSD Level 1</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="City &amp; Guilds PSD" href="http://vle.cant-col.ac.uk/course/category.php?id=284">City & Guilds PSD</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="NCFE Induction" href="http://vle.cant-col.ac.uk/course/view.php?id=980">NCFE Induction</a></li></ul></div></div></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Safeguarding and Safer Recruitment" href="http://www.leadershiplearning.org.uk/course/view.php?id=366">Safeguarding and Safer Recruitment</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Staff Development" href="http://vle.cant-col.ac.uk/course/view.php?id=759">Staff Development</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Teachers&#039; Toolkit" href="http://vle.cant-col.ac.uk/course/view.php?id=1531">Teachers' Toolkit</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Looked After Children and Young Care Leavers" href="http://vle.cant-col.ac.uk/course/view.php?id=1532">Looked After Children and Young Care Leavers</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Teaching and Learning" href="http://vle.cant-col.ac.uk/course/view.php?id=1571">Teaching and Learning</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Web Conferencing" href="http://vle.cant-col.ac.uk/course/category.php?id=288">Web Conferencing</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="My Candoodle" href="#cm_submenu_23">My Candoodle</a><div id="cm_submenu_23" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Calendar" href="http://vle.cant-col.ac.uk/calendar/view.php">Calendar</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="My Courses" href="http://vle.cant-col.ac.uk/my">My Courses</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Profile" href="http://vle.cant-col.ac.uk/user/view.php">Profile</a></li></ul></div></div></li><li><a class="yui3-menu-label" title="Useful Links" href="#cm_submenu_24">Useful Links</a><div id="cm_submenu_24" class="yui3-menu custom_menu_submenu"><div class="yui3-menu-content"><ul><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="19th Century British Library Newspapers" href="http://video.cant-col.ac.uk/resource/britlib.html">19th Century British Library Newspapers</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Anatomy and Physiology Online" href="http://video.cant-col.ac.uk/resource/apo.html">Anatomy and Physiology Online</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="a-n The Artists Information Company" href="http://video.cant-col.ac.uk/resource/an.html">a-n The Artists Information Company</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Book Boon" href="http://bookboon.com/uk/textbooks">Book Boon</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="British Universities Film &amp; Video Council" href="http://beta.bufvc.ac.uk/">British Universities Film & Video Council</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Britannica Database" href="http://video.cant-col.ac.uk/resource/brit.html">Britannica Database</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Credo database" href="https://www.credoreference.com/Shibboleth.sso/Login?target=https%3A%2F%2Fwww.credoreference.com%2Fauthshib.do&amp;entityID=https%3A%2F%2Fv-shibboleth.cant-col.ac.uk%2Fidp%2Fshibboleth">Credo database</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="DawsonEra" href="https://ezproxy.cant-col.ac.uk/">DawsonEra</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="DawsonEra Sheppey" href="http://www.dawsonera.com/depp/reader/protected/Home.html">DawsonEra Sheppey</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Digimap" href="http://digimap.edina.ac.uk/digimap/home">Digimap</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Ebooks via ebrary" href="http://video.cant-col.ac.uk/resource/ebrary.html">Ebooks via ebrary</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="GBI Research" href="https://ezproxy.cant-col.ac.uk/">GBI Research</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Hairdressing Training Online Learning Package" href="http://video.cant-col.ac.uk/resource/hair.html">Hairdressing Training Online Learning Package</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="IHS" href="http://video.cant-col.ac.uk/resource/ihs.html">IHS</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Issues Online" href="http://video.cant-col.ac.uk/resource/issues.html">Issues Online</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Lexis PSL" href="https://www.lexisnexis.com/start/shib/idpurlrd?providerId=https%3A%2F%2Fv-shibboleth.cant-col.ac.uk%2Fidp%2Fshibboleth&amp;fedId=3&amp;appToken=5F0EEC697DFED4659642CBB668FEEDB6">Lexis PSL</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="LRC Catalogue" href="http://video.cant-col.ac.uk/resource/lrccat.html">LRC Catalogue</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Khan Academy" href="http://www.khanacademy.org">Khan Academy</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="MyPC Library PC booking" href="http://video.cant-col.ac.uk/resource/mypc.html">MyPC Library PC booking</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Quest" href="http://video.cant-col.ac.uk/resource/quest.html">Quest</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="Workplace Consortia Partners" href="http://vle.cant-col.ac.uk/course/view.php?id=1132">Workplace Consortia Partners</a></li><li class="yui3-menuitem"><a class="yui3-menuitem-content" title="ZETOC" href="http://video.cant-col.ac.uk/resource/zetoc.html">ZETOC</a></li></ul></div></div></li></ul></div></div></div></div>
				</div>
<div id="jcontrols_button">
				<div class="jcontrolsleft2">		
						        					<div class="navbar clearfix">
            					<div class="breadcrumb"> <?php $this->load->view('templates/nav_bar'); ?></div>
            
        					</div>
        										</div>
						<div id="ebutton">
		</div>
						
	
</div>	
	
<div id="contentwrapper">	
	<!-- start OF MyCPD CONTENT -->
				<div id="page-content">

    <body>
        <table class="layout">
<div id="sectiontitle"><h1><img src="<?= base_url('/assets/pix/plan2.png') ?>" alt="Plan icon"> My Learning Plan</h1></div>
          <?php 
                                            $data['news'] = $this->news_model->get_news();
                                            $this->load->view('news/view', $data); ?>
        <hr/>
        <div id="div_activities">
            <table id="table_detail">
                <thead>
                    <tr>
                        <th>Target this CPD addresses</th>
                        <th>Title of CPD activity/event</th>
                        <th>Intended Learning Outcomes for teacher</th>
                        <th>Intended impact on learner outcomes</th>
                        <th>Priority level</th>
                        <th>Target Date</th>
                        <th>Completed?</th>
                        <th>Evaluation</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($activities as $row): ?>
                        <tr>
                            <td><?= $row->target ?></td>
                            <td><?= $row->title ?></td>
                            <td><?= $row->learning_outcomes ?></td>
                            <td>x</td>
                            <td><?= $row->priority_type ?></td>
                            <td><?= $row->planned_date ?></td>
                            <td><?= $row->completed_date ?></td>
                            <td><?= anchor_popup($row->evaluation_url, 'Evaluate now') ?></td>
                            <td><?=
                    anchor('learning_plan/update_activity/'
                            . $row->id, 'Edit')
                        ?>
                                |<?=
                            anchor('learning_plan/delete_activity/'
                                    . $row->id, 'Delete')
                        ?>                    
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p><?=
                    anchor('learning_plan/create_activity/'
                            . $employee->id, 'Add new Activity/Event')
                    ?>
            </p>
        </div>
   				 </div>
    <!-- END OF CONTENT --> 
</div>      

<br style="clear: both;"> 
 <div id="footerwrapper">
<div id="footerinner">
               <!--- <div>Original theme created by Shaun Daubney</div>       -->        
                                <p><img src="http://vle.cant-col.ac.uk/theme/aardvark/pix/accreditations.gif" class="footer" /></p> 

</div>
</div>
 
  </div>
 </div>    		

<script type="text/javascript" src="http://vle.cant-col.ac.uk/theme/javascript.php?theme=aardvark&amp;rev=609&amp;type=footer"></script>
<script type="text/javascript">
//<![CDATA[
M.str = {"repository":{"add":"Add","back":"&laquo; Back","close":"Close","cleancache":"Clean my cache files","copying":"Copying","date":"Date","downloadsucc":"The file has been downloaded successfully","emptylist":"Empty list","error":"An unknown error occurred!","federatedsearch":"Federated search","filenotnull":"You must select a file to upload.","getfile":"Select this file","iconview":"View as icons","invalidjson":"Invalid JSON string","linkexternal":"Link external","listview":"View as list","loading":"Loading...","login":"Login","logout":"Logout","noenter":"Nothing entered","noresult":"No search result","manageurl":"Manage","popup":"Click \"Login\" button to login","preview":"Preview","refresh":"Refresh","save":"Save","saveas":"Save as","saved":"Saved","saving":"Saving","search":"Search","searching":"Search in","size":"Size","submit":"Submit","sync":"Sync","title":"Choose a file...","upload":"Upload this file","uploading":"Uploading...","xhtmlerror":"You are probably using XHTML strict header, some YUI Component doesn't work in this mode, please turn it off in moodle","chooselicense":"Choose license","author":"Author","norepositoriesavailable":"Sorry, none of your current repositories can return files in the required format.","norepositoriesexternalavailable":"Sorry, none of your current repositories can return external files.","nofilesattached":"No files attached","filepicker":"File picker","nofilesavailable":"No files available","overwrite":"Overwrite","renameto":"Rename to","fileexists":"File name already being used, please use another name","fileexistsdialogheader":"File exists","fileexistsdialog_editor":"A file with that name has already been attached to the text you are editing.","fileexistsdialog_filemanager":"A file with that name has already been attached"},"moodle":{"cancel":"Cancel","help":"Help","next":"Next","ok":"OK","error":"Error","info":"Information","yes":"Yes"},"block":{"addtodock":"Move this to the dock","undockitem":"Undock this item","undockall":"Undock all"},"langconfig":{"thisdirectionvertical":"btt"},"admin":{"confirmation":"Confirmation"},"form":{"close":"Close"}};
//]]>
</script>
<script type="text/javascript">
//<![CDATA[
YUI(M.yui.loader).use('node', function(Y) {
M.util.load_flowplayer();
setTimeout("fix_column_widths()", 20);
M.yui.galleryversion="2010.04.08-12-35";Y.use("node-menunav",function() {(function(){M.core_custom_menu.init(Y, "custom_menu_1");
})();
});
M.util.help_icon.add(Y, {"id":"helpicon5135d281de15d1","url":"http:\/\/vle.cant-col.ac.uk\/help.php?component=moodle&identifier=cookiesenabled&lang=en"});

});
//]]>
</script>
</body>
</html>
