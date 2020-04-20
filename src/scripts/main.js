import StartingBlocks, { polyfills } from 'starting-blocks';

import WebpackAsyncBlockBuilder from 'services/WebpackAsyncBlockBuilder';

const production = 'production' !== process.env.NODE_ENV;

(() => {
	window.MAIN_EXECUTED = true;

	polyfills();

	const startingBlocks = new StartingBlocks({
		// manualDomAppend: true,
		debug: production ? 1 : 0,
	});

	startingBlocks.provider('BlockBuilder', WebpackAsyncBlockBuilder);

	startingBlocks.boot();
})();
