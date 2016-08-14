<?php

// Excel DateTimeStamp	Timezone				Result		    Comments
return [
	[ 22269,			'America/New_York',		-285102000	],	//	19-Dec-1960 00:00:00 UST
	[ 25569,			'America/New_York',		18000		],	//	PHP Base Date				01-Jan-1970 00:00:00 UST
	[ 30292,			'America/New_York',		408085200	],	//	07-Dec-1982 00:00:00 UST
	[ 39611,			'America/New_York',		1213243200	],	//	12-Jun-2008 00:00:00 UST
	[ 50424,			'America/New_York',		2147490000	],	//	PHP 32-bit Latest Date		19-Jan-2038 00:00:00 UST
	[ 22345.56789,		'America/New_York',		-278522534	],	//	18-May-1903 13:37:46 UST
	[ 22345.6789,		'America/New_York',		-278512943	],	//	18-Oct-1933 16:17:37 UST
	[ 0.5,				'America/New_York',		25200 		],	//	12:00:00 UST
	[ 0.75,				'America/New_York',		46800		],	//	18:00.00 UST
	[ 0.12345,			'America/New_York',		-7334		],	//	02:57:46 UST
	[ 41215,			'America/New_York',		1351800000	],	//	02-Nov-2012 00:00:00 UST
	[ 22269,			'Pacific/Auckland',		-285076800	],	//	19-Dec-1960 00:00:00 UST
	[ 25569,			'Pacific/Auckland',		43200		],	//	PHP Base Date				01-Jan-1970 00:00:00 UST
	[ 30292,			'Pacific/Auckland',		408114000	],	//	07-Dec-1982 00:00:00 UST
	[ 39611,			'Pacific/Auckland',		1213272000	],	//	12-Jun-2008 00:00:00 UST
	[ 50423.5,			'Pacific/Auckland',		2147475600	],	//	PHP 32-bit Latest Date		19-Jan-2038 00:00:00 UST
	[ 22345.56789,		'Pacific/Auckland',		-278461334	],	//	18-May-1903 13:37:46 UST
	[ 22345.6789,		'Pacific/Auckland',		-278451743	],	//	18-Oct-1933 16:17:37 UST
	[ 0.5,				'Pacific/Auckland',		90000		],	//	12:00:00 UST
	[ 0.75,				'Pacific/Auckland',		111600		],	//	18:00.00 UST
	[ 0.12345,			'Pacific/Auckland',		57466		],	//	02:57:46 UST
	[ 41215,			'Pacific/Auckland',		1351861200	],	//	02-Nov-2012 00:00:00 UST
];
