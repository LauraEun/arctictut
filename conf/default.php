<?php
/**
 * Default configuration for the arctic template
 * 
 * @license:    GPL 2 (http://www.gnu.org/licenses/gpl.html)
 * @author:     Michael Klier <chi@chimeric.de>
 */

$conf['sidebar']                    = 'both';                       // enable/disable sidebar
$conf['pagename']                   = 'sidebar';                    // the pagename for sidebars inside namespaces
$conf['user_sidebar_namespace']     = 'user';                       // namespace to look for namespace of logged in users
$conf['group_sidebar_namespace']    = 'group';                      // namespace to look for groups-namespaces
$conf['trace']                      = 1;                            // show trace at top of the page
$conf['main_sidebar_always']		    = 1;														// show main sidebar on all namespaces
$conf['wiki_actionlinks']           = 'links';                      // use buttons instead of links
$conf['left_sidebar_content']       = 'main,user,namespace';        // defines the content of the left sidebar
$conf['left_sidebar_order']         = 'main,namespace,user';        // defines the order of the left sidebar content
$conf['right_sidebar_content']      = 'toc,group';                  // defines the content of the right sidebar
$conf['right_sidebar_order']        = 'toc,group';                  // defines the order of the right sidebar content
$conf['search']                     = 'right';                      // defines the position  of the search form when 2 sidebars are used
$conf['closedwiki']                 = 0;                            // don't show sidebars for logged out users at all
$conf['hideactions']                = 0;                            // hide all wiki related actions for non logged in users
$conf['logoname']                   = 'headerlogo.png';             // name of the headerlogo
$conf['logowidth']                  = '128px';                      // width of the headerlogo
$conf['logoheigth']                 = '128px';                      // heigth of the headerlogo
$conf['show_backlink']              = 'both';                       // show backlink at top and/or bottom of the page
//$conf['sidebar_width_left']         = '19';                        // width right sidebar
//$conf['sidebar_width_right']        = '16';                        // width right sidebar
$conf['translation_bar']            = 'top and bottom';             // Position of the Translationbar
//Setup vim: ts=2 sw=2:
?>
