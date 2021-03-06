ZenTrack is a very successful and high quality HelpDesk application, it is now modulized into a nice looking and powerful
Xoops Content Management System. The combination of Xoops+zenTrackXoops provides an advanced Customer Support Portal
for enterprises

This module is from the ZenTrack 2.6.0.4 (Feb 6th, 2006) (http://www.zentrack.net) codebase with a few mods to make
it work within the Xoops 2 environment.

You can either do a full clean install or you can upgrade from any previous version of ZenTrackXoops,
see upgrade/UPGRADE* files for more details.

This version now has better integration with Xoops User table. New Xoops users no longer get automatically added to
ZentrackXoops when accessing the module for the first time; a Module Administrator must use the module User Management
screens to create and edit users. So now when a new Xoops user tries to access the module they will get an error message
stating they they do not have permission to access the module until such times as they are added to ZentrackXoops.

ZentrackXoops now integrates with Xoops Admin System and also complies with the Xoops Groups permission mechanism.
By default Webmasters have the required privileges to access the Module admin screens, however you can create your own
group and give it the necessary permissions to access the admin screens.

The User Management relies on EMAIL addresses being unique for each user. The matching of Xoops users with the
ZentrackXoops users is done through the email address and not the UserId or loginname as with the previous version (RC1).
Also, if you allow users to change their email addresses then access to the module will be broken. When this happens
that Module Admin will need to Edit the users details and synchronise the email addresses again.

The email gateway functionality should now work as I have made some changes to help get it functioning. Please note that
you may need to modify a setting in ./zentrack/includes/egate_config.php:

	$header_file_location = "/var/www/html/xoops/modules/zentrack/header.php";

If you have a slow database server (as I had!) then you may experience problems installing the module. There are a LOT
of database INSERTS during the install and if your PHP settings are as per the defaults then you'll find that 30 seconds
to execute the SQL script is just not long enough. To get around this I set 'max_execution_time = 90' in my PHP.INI file
(restarted the webserver) and installed the module. I recommend setting it back to 30 or some other lower value after
you've installed it.

Also new to this version are two Xoops Blocks:
1. My Tickets Block - This will list details of a number of tickets (parameter can be set by editing the settings
for the block) that are allocated to the currently logged in user
2. Quick Ticket Block - This provides a block that allows users to enter the absolute minimum amount of information to
create a ticket (Title & Description). The other mandatory fields are set as default values when configuring the block.

Good luck and enjoy this great product called Zentrack...
