<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "typo3mind".
 *
 * Auto generated 10-11-2012 12:27
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'TYPO3Mind',
	'description' => 'TYPO3Mind is an extension for generating mind mapping files from your whole TYPO3 installation. Mind maps helps you to understand how your TYPO3 project has been setup and what the current running status is. Currently you can only export .mm files which can be imported by FreeMind (strongly recommended), Freeplane, XMind, Mindjet, MindManager, etc. TYPO3Mind uses the cool icon from FreeMind. This extension hooks into the tree click menu and in the left pane. The mind map includes many icons and pictures with URIs to your webserver. You have a lot of configuration options. Needs TYPO3 4.5 or later, SimpleXML, PHP5.2 or later.',
	'category' => 'be',
	'author' => 'Cyrill Schumacher',
	'author_email' => 'Cyrill@Schumacher.fm',
	'author_company' => '',
	'shy' => 0,
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'version' => '1.2.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '4.5.0-0.0.0',
			'cms' => '',
			'extbase' => '',
			'fluid' => '',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:168:{s:9:"ChangeLog";s:4:"c27b";s:12:"ext_icon.gif";s:4:"528b";s:17:"ext_localconf.php";s:4:"db2b";s:14:"ext_tables.php";s:4:"93f6";s:14:"ext_tables.sql";s:4:"0754";s:9:"README.md";s:4:"b1a9";s:39:"Classes/Controller/T3mindController.php";s:4:"e287";s:34:"Classes/Domain/Export/mmCommon.php";s:4:"b8a2";s:37:"Classes/Domain/Export/mmInterface.php";s:4:"6bea";s:36:"Classes/Domain/Export/mmLeftSide.php";s:4:"574b";s:32:"Classes/Domain/Export/mmMain.php";s:4:"b0c1";s:37:"Classes/Domain/Export/mmRightSide.php";s:4:"5f54";s:54:"Classes/Domain/Export/Formats/Drichard.org.format.json";s:4:"6a85";s:42:"Classes/Domain/Export/Formats/Drichard.php";s:4:"56be";s:49:"Classes/Domain/Export/Formats/FormatInterface.php";s:4:"6fd5";s:42:"Classes/Domain/Export/Formats/Freemind.php";s:4:"0552";s:31:"Classes/Domain/Model/T3mind.php";s:4:"5a59";s:46:"Classes/Domain/Repository/T3mindRepository.php";s:4:"a32b";s:44:"Classes/Utility/class.tx_fmItemsProcFunc.php";s:4:"9458";s:26:"Classes/Utility/DbList.php";s:4:"4303";s:36:"Classes/Utility/ExtensionManager.php";s:4:"512f";s:27:"Classes/Utility/Helpers.php";s:4:"9b0d";s:28:"Classes/Utility/PageTree.php";s:4:"5439";s:34:"Classes/Utility/RGBinterpolate.php";s:4:"3e63";s:34:"Classes/Utility/SanitizeString.php";s:4:"833e";s:31:"Classes/Utility/T3ConfCheck.php";s:4:"6bf1";s:37:"Classes/Utility/UnsecurePasswords.php";s:4:"643a";s:28:"Configuration/TCA/T3mind.php";s:4:"0438";s:38:"Configuration/TypoScript/constants.txt";s:4:"521e";s:34:"Configuration/TypoScript/setup.txt";s:4:"ff6e";s:46:"Resources/Private/Backend/Layouts/Default.html";s:4:"8e06";s:50:"Resources/Private/Backend/Partials/FormErrors.html";s:4:"f5bc";s:57:"Resources/Private/Backend/Partials/T3mind/FormFields.html";s:4:"b6be";s:57:"Resources/Private/Backend/Partials/T3mind/Properties.html";s:4:"b564";s:56:"Resources/Private/Backend/Templates/T3mind/Dispatch.html";s:4:"e7d1";s:57:"Resources/Private/Backend/Templates/T3mind/EditPages.html";s:4:"cc40";s:61:"Resources/Private/Backend/Templates/T3mind/EditPagesSave.html";s:4:"50ba";s:54:"Resources/Private/Backend/Templates/T3mind/Export.html";s:4:"58e6";s:57:"Resources/Private/Backend/Templates/T3mind/ExportEID.html";s:4:"d41d";s:40:"Resources/Private/Language/locallang.xml";s:4:"3cb8";s:77:"Resources/Private/Language/locallang_csh_tx_typo3mind_domain_model_t3mind.xml";s:4:"0d20";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"d3cd";s:46:"Resources/Private/Language/locallang_fm2be.xml";s:4:"d9b2";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:55:"Resources/Public/Icons/System-Security-Warning-icon.png";s:4:"7657";s:59:"Resources/Public/Icons/tx_typo3mind_domain_model_t3mind.gif";s:4:"528b";s:39:"Resources/Public/colorpicker/index.html";s:4:"af00";s:48:"Resources/Public/colorpicker/css/colorpicker.css";s:4:"0a44";s:45:"Resources/Public/colorpicker/images/blank.gif";s:4:"5639";s:62:"Resources/Public/colorpicker/images/colorpicker_background.png";s:4:"a79f";s:55:"Resources/Public/colorpicker/images/colorpicker_hex.png";s:4:"16d6";s:57:"Resources/Public/colorpicker/images/colorpicker_hsb_b.png";s:4:"2be4";s:57:"Resources/Public/colorpicker/images/colorpicker_hsb_h.png";s:4:"d474";s:57:"Resources/Public/colorpicker/images/colorpicker_hsb_s.png";s:4:"5ff5";s:57:"Resources/Public/colorpicker/images/colorpicker_indic.gif";s:4:"f485";s:59:"Resources/Public/colorpicker/images/colorpicker_overlay.png";s:4:"c7a3";s:57:"Resources/Public/colorpicker/images/colorpicker_rgb_b.png";s:4:"2be4";s:57:"Resources/Public/colorpicker/images/colorpicker_rgb_g.png";s:4:"dc17";s:57:"Resources/Public/colorpicker/images/colorpicker_rgb_r.png";s:4:"87ee";s:58:"Resources/Public/colorpicker/images/colorpicker_select.gif";s:4:"cec4";s:58:"Resources/Public/colorpicker/images/colorpicker_submit.png";s:4:"12d1";s:57:"Resources/Public/colorpicker/images/custom_background.png";s:4:"06c9";s:50:"Resources/Public/colorpicker/images/custom_hex.png";s:4:"e27a";s:52:"Resources/Public/colorpicker/images/custom_hsb_b.png";s:4:"b455";s:52:"Resources/Public/colorpicker/images/custom_hsb_h.png";s:4:"4a1a";s:52:"Resources/Public/colorpicker/images/custom_hsb_s.png";s:4:"83aa";s:52:"Resources/Public/colorpicker/images/custom_indic.gif";s:4:"0466";s:52:"Resources/Public/colorpicker/images/custom_rgb_b.png";s:4:"f6e5";s:52:"Resources/Public/colorpicker/images/custom_rgb_g.png";s:4:"b1e2";s:52:"Resources/Public/colorpicker/images/custom_rgb_r.png";s:4:"8ae4";s:53:"Resources/Public/colorpicker/images/custom_submit.png";s:4:"3542";s:46:"Resources/Public/colorpicker/images/select.png";s:4:"7b08";s:47:"Resources/Public/colorpicker/images/select2.png";s:4:"c8d1";s:46:"Resources/Public/colorpicker/images/slider.png";s:4:"3a50";s:46:"Resources/Public/colorpicker/js/colorpicker.js";s:4:"96e6";s:31:"Resources/Public/flash/bola.jpg";s:4:"7f2e";s:32:"Resources/Public/flash/bola4.gif";s:4:"8706";s:35:"Resources/Public/flash/estrella.png";s:4:"aab1";s:40:"Resources/Public/flash/flashfreemind.css";s:4:"b567";s:37:"Resources/Public/flash/flashobject.js";s:4:"4487";s:46:"Resources/Public/flash/freeMindFlashBrowser.mm";s:4:"8f17";s:36:"Resources/Public/flash/mindmaps.html";s:4:"0224";s:33:"Resources/Public/flash/readme.txt";s:4:"9833";s:40:"Resources/Public/flash/visorFreemind.swf";s:4:"cb96";s:42:"Resources/Public/freemind_icons/attach.png";s:4:"d9e0";s:40:"Resources/Public/freemind_icons/back.png";s:4:"37ea";s:40:"Resources/Public/freemind_icons/bell.png";s:4:"3c4b";s:44:"Resources/Public/freemind_icons/bookmark.png";s:4:"531e";s:47:"Resources/Public/freemind_icons/broken-line.png";s:4:"c0ff";s:49:"Resources/Public/freemind_icons/button_cancel.png";s:4:"3e0a";s:45:"Resources/Public/freemind_icons/button_ok.png";s:4:"a2c7";s:44:"Resources/Public/freemind_icons/calendar.png";s:4:"3275";s:46:"Resources/Public/freemind_icons/clanbomber.png";s:4:"91c7";s:41:"Resources/Public/freemind_icons/clock.png";s:4:"684b";s:42:"Resources/Public/freemind_icons/clock2.png";s:4:"122c";s:42:"Resources/Public/freemind_icons/closed.png";s:4:"ea77";s:45:"Resources/Public/freemind_icons/decrypted.png";s:4:"9c97";s:47:"Resources/Public/freemind_icons/desktop_new.png";s:4:"0f6f";s:40:"Resources/Public/freemind_icons/down.png";s:4:"1d1e";s:40:"Resources/Public/freemind_icons/edit.png";s:4:"7908";s:45:"Resources/Public/freemind_icons/encrypted.png";s:4:"f6d8";s:42:"Resources/Public/freemind_icons/family.png";s:4:"75bb";s:40:"Resources/Public/freemind_icons/fema.png";s:4:"50c5";s:43:"Resources/Public/freemind_icons/female1.png";s:4:"bb66";s:43:"Resources/Public/freemind_icons/female2.png";s:4:"3c49";s:46:"Resources/Public/freemind_icons/flag-black.png";s:4:"fbf8";s:45:"Resources/Public/freemind_icons/flag-blue.png";s:4:"e0ef";s:46:"Resources/Public/freemind_icons/flag-green.png";s:4:"3377";s:47:"Resources/Public/freemind_icons/flag-orange.png";s:4:"4cd0";s:45:"Resources/Public/freemind_icons/flag-pink.png";s:4:"0a8f";s:47:"Resources/Public/freemind_icons/flag-yellow.png";s:4:"e224";s:40:"Resources/Public/freemind_icons/flag.png";s:4:"ce20";s:42:"Resources/Public/freemind_icons/folder.png";s:4:"6794";s:43:"Resources/Public/freemind_icons/forward.png";s:4:"d29a";s:54:"Resources/Public/freemind_icons/freemind_butterfly.png";s:4:"b18a";s:42:"Resources/Public/freemind_icons/full-0.png";s:4:"0049";s:42:"Resources/Public/freemind_icons/full-1.png";s:4:"3d41";s:42:"Resources/Public/freemind_icons/full-2.png";s:4:"3a68";s:42:"Resources/Public/freemind_icons/full-3.png";s:4:"4069";s:42:"Resources/Public/freemind_icons/full-4.png";s:4:"909e";s:42:"Resources/Public/freemind_icons/full-5.png";s:4:"5ac5";s:42:"Resources/Public/freemind_icons/full-6.png";s:4:"6bcc";s:42:"Resources/Public/freemind_icons/full-7.png";s:4:"dff2";s:42:"Resources/Public/freemind_icons/full-8.png";s:4:"52c2";s:42:"Resources/Public/freemind_icons/full-9.png";s:4:"cd8f";s:38:"Resources/Public/freemind_icons/go.png";s:4:"3e8f";s:42:"Resources/Public/freemind_icons/gohome.png";s:4:"ef34";s:41:"Resources/Public/freemind_icons/group.png";s:4:"86ec";s:40:"Resources/Public/freemind_icons/help.png";s:4:"13bb";s:45:"Resources/Public/freemind_icons/hourglass.png";s:4:"32b2";s:40:"Resources/Public/freemind_icons/idea.png";s:4:"932f";s:40:"Resources/Public/freemind_icons/info.png";s:4:"62c4";s:48:"Resources/Public/freemind_icons/kaddressbook.png";s:4:"ad9e";s:41:"Resources/Public/freemind_icons/kmail.png";s:4:"dc4a";s:43:"Resources/Public/freemind_icons/knotify.png";s:4:"1856";s:40:"Resources/Public/freemind_icons/korn.png";s:4:"423b";s:46:"Resources/Public/freemind_icons/ksmiletris.png";s:4:"cdc7";s:42:"Resources/Public/freemind_icons/launch.png";s:4:"eda1";s:40:"Resources/Public/freemind_icons/licq.png";s:4:"3aae";s:40:"Resources/Public/freemind_icons/list.png";s:4:"891b";s:40:"Resources/Public/freemind_icons/Mail.png";s:4:"b55a";s:41:"Resources/Public/freemind_icons/male1.png";s:4:"efb8";s:41:"Resources/Public/freemind_icons/male2.png";s:4:"56a7";s:54:"Resources/Public/freemind_icons/messagebox_warning.png";s:4:"712c";s:44:"Resources/Public/freemind_icons/password.png";s:4:"9ad7";s:42:"Resources/Public/freemind_icons/pencil.png";s:4:"635f";s:43:"Resources/Public/freemind_icons/penguin.png";s:4:"9427";s:43:"Resources/Public/freemind_icons/prepare.png";s:4:"b043";s:40:"Resources/Public/freemind_icons/redo.png";s:4:"2cd4";s:48:"Resources/Public/freemind_icons/smiley-angry.png";s:4:"3dd8";s:50:"Resources/Public/freemind_icons/smiley-neutral.png";s:4:"7b2d";s:45:"Resources/Public/freemind_icons/smiley-oh.png";s:4:"4639";s:45:"Resources/Public/freemind_icons/smily_bad.png";s:4:"75a4";s:45:"Resources/Public/freemind_icons/stop-sign.png";s:4:"8a6d";s:40:"Resources/Public/freemind_icons/stop.png";s:4:"345e";s:38:"Resources/Public/freemind_icons/up.png";s:4:"2f18";s:42:"Resources/Public/freemind_icons/wizard.png";s:4:"a74a";s:40:"Resources/Public/freemind_icons/xmag.png";s:4:"a55b";s:39:"Resources/Public/freemind_icons/yes.png";s:4:"4b5b";s:49:"Resources/Public/help/Help-Backend-Add-APIkey.JPG";s:4:"657c";s:34:"Resources/Public/scripts/flattr.js";s:4:"37d4";s:38:"Resources/Public/scripts/jquery.min.js";s:4:"2572";s:32:"Resources/Public/scripts/main.js";s:4:"b504";s:35:"Resources/Public/styles/backend.css";s:4:"1d08";s:48:"Tests/Unit/Controller/FmConfigControllerTest.php";s:4:"59a2";s:40:"Tests/Unit/Domain/Model/FmConfigTest.php";s:4:"d0ca";s:14:"doc/manual.pdf";s:4:"4976";s:14:"doc/manual.sxw";s:4:"d180";}',
);

?>