// <pre><nowiki>
//  _________________________________________________________________________________________
// |                                                                                         |
// |                    === WARNING: GLOBAL GADGET FILE ===                                  |
// |                  Changes to this page affect many users.                                |
// | Please discuss changes on the talk page or on [[Wikipedia_talk:Gadget]] before editing. |
// |_________________________________________________________________________________________|
//
// Imported from [[:en:Wikipedia:FAQ/Main Page]] as of April 1, 2008

if ( mw.config.get( 'wgIsMainPage' ) === true ) {
  $( document ).ready( function () {
    $( '#searchInput' ).focus();
  });
}