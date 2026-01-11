const { getBlockVariations, registerBlockVariation } = wp.blocks;
const { __ } = wp.i18n;
const domReady = wp.domReady;

domReady(() => {
	const variations = getBlockVariations('core/group');

	if (! variations.some(variation => 'group-grid' === variation.name)) {
		registerBlockVariation('core/group', {
			name: 'group-grid',
			title: __('Grid', 'ikreate-fse'),
			icon: 'grid-view',
			description: __('Arrange blocks in a grid.', 'ikreate-fse'),
			attributes: {
				layout: {
					type: 'grid' 
				}
			},
			scope: [ 'block', 'inserter', 'transform' ],
			isActive: (blockAttributes) =>
				blockAttributes.layout?.type === 'grid',
		});
	}
});


wp.domReady(function () {
    setTimeout(function () {
        jQuery('.edit-post-header__settings').before('<button class="theme-pattern-inserter-sp">Theme Patterns</button>');

        jQuery('.theme-pattern-inserter-sp').click(function () {
            jQuery('.components-button.edit-post-header-toolbar__inserter-toggle').trigger('click');
            setTimeout(function () {
                jQuery('.block-editor-inserter__tabs button:nth-child(2)').trigger('click');

                setTimeout(function () {
                    jQuery('.components-button.block-editor-inserter__patterns-explore-button').trigger('click');

                    setTimeout(function () {
                        jQuery('.block-editor-block-patterns-explorer__sidebar__categories-list button[aria-label="Themes Patterns"]').trigger('click');
                    }, 500)
                }, 500);

            }, 1000)

        });
    }, 2000);
});

