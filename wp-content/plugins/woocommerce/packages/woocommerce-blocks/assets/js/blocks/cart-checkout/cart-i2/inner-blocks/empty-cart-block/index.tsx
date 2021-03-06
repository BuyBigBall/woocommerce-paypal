/**
 * External dependencies
 */
import { Icon, removeCart } from '@woocommerce/icons';
import { registerFeaturePluginBlockType } from '@woocommerce/block-settings';

/**
 * Internal dependencies
 */
import { Edit, Save } from './edit';
import metadata from './block.json';

registerFeaturePluginBlockType( metadata, {
	icon: {
		src: <Icon srcElement={ removeCart } />,
		foreground: '#874FB9',
	},
	edit: Edit,
	save: Save,
} );
