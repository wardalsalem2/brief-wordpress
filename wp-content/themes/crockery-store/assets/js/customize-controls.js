( function( api ) {

	// Extends our custom "crockery-store" section.
	api.sectionConstructor['crockery-store'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );