( function( window, document ) {
  function crockery_store_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const crockery_store_nav = document.querySelector( '.sidenav' );
      if ( ! crockery_store_nav || ! crockery_store_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...crockery_store_nav.querySelectorAll( 'input, a, button' )],
        crockery_store_lastEl = elements[ elements.length - 1 ],
        crockery_store_firstEl = elements[0],
        crockery_store_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && crockery_store_lastEl === crockery_store_activeEl ) {
        e.preventDefault();
        crockery_store_firstEl.focus();
      }
      if ( shiftKey && tabKey && crockery_store_firstEl === crockery_store_activeEl ) {
        e.preventDefault();
        crockery_store_lastEl.focus();
      }
    } );
  }
  crockery_store_keepFocusInMenu();
} )( window, document );