<?php

    /*############  Currency function ################*/
	
function wpdevart_bc_get_currency() {
	$currency_list = array(
		'AFN' => array('code' => 'AFN',
			  'name' => 'Afghanistan Afghani',
			  'simbol' => '&#1547;'),
		'ALL' => array('code' => 'ALL',
			  'name' => 'Albania Lek',
			  'simbol' => '&#76;&#101;&#107;'),
		'DZD' => array('code' => 'DZD',
			  'name' => 'Algeria Dinar',
			  'simbol' => 'دج'),
		'ARS' => array('code' => 'ARS',
			  'name' => 'Argentina Peso',
			  'simbol' => '&#36;'),
		'AMD' => array('code' => 'AMD',
			  'name' => 'Armenian Dram',
			  'simbol' => '&#1423;'),
		'AWG' => array('code' => 'AWG',
			  'name' => 'Aruba Guilder',
			  'simbol' => '&#402;'),
		'AUD' => array('code' => 'AUD',
			  'name' => 'Australia Dollar',
			  'simbol' => '&#36;'),
		'AZN' => array('code' => 'AZN',
			  'name' => 'Azerbaijan New Manat',
			  'simbol' => '&#1084;&#1072;&#1085;'),
		'BSD' => array('code' => 'BSD',
			  'name' => 'Bahamas Dollar',
			  'simbol' => '&#36;'),
		'BDT' => array('code' => 'BDT',
			  'name' => 'Bangladesh Taka',
			  'simbol' => '&#2547;'),
		'BBD' => array('code' => 'BBD',
			  'name' => 'Barbados Dollar',
			  'simbol' => '&#36;'),
		'BYR' => array('code' => 'BYR',
			  'name' => 'Belarus Ruble',
			  'simbol' => '&#112;&#46;'),
		'BZD' => array('code' => 'BZD',
			  'name' => 'Belize Dollar',
			  'simbol' => '&#66;&#90;&#36;'),
		'BMD' => array('code' => 'BMD',
			  'name' => 'Bermuda Dollar',
			  'simbol' => '&#36;'),
		'BOB' => array('code' => 'BOB',
			  'name' => 'Bolivia Boliviano',
			  'simbol' => '&#36;&#98;'),
		'BAM' => array('code' => 'BAM',
			  'name' => 'Bosnia and Herzegovina Convertible Marka',
			  'simbol' => '&#75;&#77;'),
		'BWP' => array('code' => 'BWP',
			  'name' => 'Botswana Pula',
			  'simbol' => '&#80;'),
		'BGN' => array('code' => 'BGN',
			  'name' => 'Bulgaria Lev',
			  'simbol' => '&#1083;&#1074;'),
		'BRL' => array('code' => 'BRL',
			  'name' => 'Brazil Real',
			  'simbol' => '&#82;&#36;'),
		'BND' => array('code' => 'BND',
			  'name' => 'Brunei Darussalam Dollar',
			  'simbol' => '&#36;'),
		'KHR' => array('code' => 'KHR',
			  'name' => 'Cambodia Riel',
			  'simbol' => '&#6107;'),
		'CAD' => array('code' => 'CAD',
			  'name' => 'Canada Dollar',
			  'simbol' => '&#36;'),
		'KYD' => array('code' => 'KYD',
			  'name' => 'Cayman Islands Dollar',
			  'simbol' => '&#36;'),
		'CLP' => array('code' => 'CLP',
			  'name' => 'Chile Peso',
			  'simbol' => '&#36;'),
		'CNY' => array('code' => 'CNY',
			  'name' => 'China Yuan Renminbi',
			  'simbol' => '&#165;'),
		'COP' => array('code' => 'COP',
			  'name' => 'Colombia Peso',
			  'simbol' => '&#36;'),
		'CRC' => array('code' => 'CRC',
			  'name' => 'Costa Rica Colon',
			  'simbol' => '&#8353;'),
		'HRK' => array('code' => 'HRK',
			  'name' => 'Croatia Kuna',
			  'simbol' => '&#107;&#110;'),
		'CUP' => array('code' => 'CUP',
			  'name' => 'Cuba Peso',
			  'simbol' => '&#8369;'),
		'CZK' => array('code' => 'CZK',
			  'name' => 'Czech Republic Koruna',
			  'simbol' => '&#75;&#269;'),
		'DKK' => array('code' => 'DKK',
			  'name' => 'Denmark Krone',
			  'simbol' => '&#107;&#114;'),
		'DOP' => array('code' => 'DOP',
			  'name' => 'Dominican Republic Peso',
			  'simbol' => '&#82;&#68;&#36;'),
		'XCD' => array('code' => 'XCD',
			  'name' => 'East Caribbean Dollar',
			  'simbol' => '&#36;'),
		'EGP' => array('code' => 'EGP',
			  'name' => 'Egypt Pound',
			  'simbol' => '&#163;'),
		'SVC' => array('code' => 'SVC',
			  'name' => 'El Salvador Colon',
			  'simbol' => '&#36;'),
		'EEK' => array('code' => 'EEK',
			  'name' => 'Estonia Kroon',
			  'simbol' => '&#107;&#114;'),
		'EUR' => array('code' => 'EUR',
			  'name' => 'Euro Member Countries',
			  'simbol' => '&#8364;'),
		'FKP' => array('code' => 'FKP',
			  'name' => 'Falkland Islands (Malvinas) Pound',
			  'simbol' => '&#163;'),
		'FJD' => array('code' => 'FJD',
			  'name' => 'Fiji Dollar',
			  'simbol' => '&#36;'),
		'GHC' => array('code' => 'GHC',
			  'name' => 'Ghana Cedis',
			  'simbol' => '&#162;'),
		'GIP' => array('code' => 'GIP',
			  'name' => 'Gibraltar Pound',
			  'simbol' => '&#163;'),
		'GTQ' => array('code' => 'GTQ',
			  'name' => 'Guatemala Quetzal',
			  'simbol' => '&#81;'),
		'GGP' => array('code' => 'GGP',
			  'name' => 'Guernsey Pound',
			  'simbol' => '&#163;'),
		'GYD' => array('code' => 'GYD',
			  'name' => 'Guyana Dollar',
			  'simbol' => '&#36;'),
		'HNL' => array('code' => 'HNL',
			  'name' => 'Honduras Lempira',
			  'simbol' => '&#76;'),
		'HKD' => array('code' => 'HKD',
			  'name' => 'Hong Kong Dollar',
			  'simbol' => '&#36;'),
		'HUF' => array('code' => 'HUF',
			  'name' => 'Hungary Forint',
			  'simbol' => '&#70;&#116;'),
		'ISK' => array('code' => 'ISK',
			  'name' => 'Iceland Krona',
			  'simbol' => '&#107;&#114;'),
		'INR' => array('code' => 'INR',
			  'name' => 'India Rupee',
			  'simbol' => 'INR'),
		'IDR' => array('code' => 'IDR',
			  'name' => 'Indonesia Rupiah',
			  'simbol' => 'IDR'),
		'IRR' => array('code' => 'IRR',
			  'name' => 'Iran Rial',
			  'simbol' => '&#65020;'),
		'IMP' => array('code' => 'IMP',
			  'name' => 'Isle of Man Pound',
			  'simbol' => '&#163;'),
		'ILS' => array('code' => 'ILS',
			  'name' => 'Israel Shekel',
			  'simbol' => '&#8362;'),
		'JMD' => array('code' => 'JMD',
			  'name' => 'Jamaica Dollar',
			  'simbol' => '&#74;&#36;'),
		'JPY' => array('code' => 'JPY',
			  'name' => 'Japan Yen',
			  'simbol' => '&#165;'),
		'JEP' => array('code' => 'JEP',
			  'name' => 'Jersey Pound',
			  'simbol' => '&#163;'),
		'KZT' => array('code' => 'KZT',
			  'name' => 'Kazakhstan Tenge',
			  'simbol' => '&#1083;&#1074;'),
		'KES' => array('code' => 'KES',
			  'name' => 'Kenya Shilling',
			  'simbol' => 'KSh'),
		'KPW' => array('code' => 'KPW',
			  'name' => 'Korea (North) Won',
			  'simbol' => '&#8361;'),
		'KRW' => array('code' => 'KRW',
			  'name' => 'Korea (South) Won',
			  'simbol' => '&#8361;'),
		'KGS' => array('code' => 'KGS',
			  'name' => 'Kyrgyzstan Som',
			  'simbol' => '&#1083;&#1074;'),
		'LAK' => array('code' => 'LAK',
			  'name' => 'Laos Kip',
			  'simbol' => '&#8365;'),
		'LVL' => array('code' => 'LVL',
			  'name' => 'Latvia Lat',
			  'simbol' => '&#76;&#115;'),
		'LBP' => array('code' => 'LBP',
			  'name' => 'Lebanon Pound',
			  'simbol' => '&#163;'),
		'LRD' => array('code' => 'LRD',
			  'name' => 'Liberia Dollar',
			  'simbol' => '&#36;'),
		'LTL' => array('code' => 'LTL',
			  'name' => 'Lithuania Litas',
			  'simbol' => '&#76;&#116;'),
		'MKD' => array('code' => 'MKD',
			  'name' => 'Macedonia Denar',
			  'simbol' => '&#1076;&#1077;&#1085;'),
		'MYR' => array('code' => 'MYR',
			  'name' => 'Malaysia Ringgit',
			  'simbol' => '&#82;&#77;'),
		'MUR' => array('code' => 'MUR',
			  'name' => 'Mauritius Rupee',
			  'simbol' => '&#8360;'),
		'MXN' => array('code' => 'MXN',
			  'name' => 'Mexico Peso',
			  'simbol' => '&#36;'),
		'MNT' => array('code' => 'MNT',
			  'name' => 'Mongolia Tughrik',
			  'simbol' => '&#8366;'),
		'MZN' => array('code' => 'MZN',
			  'name' => 'Mozambique Metical',
			  'simbol' => '&#77;&#84;'),
		'NAD' => array('code' => 'NAD',
			  'name' => 'Namibia Dollar',
			  'simbol' => '&#36;'),
		'NPR' => array('code' => 'NPR',
			  'name' => 'Nepal Rupee',
			  'simbol' => '&#8360;'),
		'ANG' => array('code' => 'ANG',
			  'name' => 'Netherlands Antilles Guilder',
			  'simbol' => '&#402;'),
		'NZD' => array('code' => 'NZD',
			  'name' => 'New Zealand Dollar',
			  'simbol' => '&#36;'),
		'NIO' => array('code' => 'NIO',
			  'name' => 'Nicaragua Cordoba',
			  'simbol' => '&#67;&#36;'),
		'NGN' => array('code' => 'NGN',
			  'name' => 'Nigeria Naira',
			  'simbol' => '&#8358;'),
		'KPW' => array('code' => 'KPW',
			  'name' => 'Korea (North) Won',
			  'simbol' => '&#8361;'),
		'NOK' => array('code' => 'NOK',
			  'name' => 'Norway Krone',
			  'simbol' => '&#107;&#114;'),
		'OMR' => array('code' => 'OMR',
			  'name' => 'Oman Rial',
			  'simbol' => '&#65020;'),
		'PKR' => array('code' => 'PKR',
			  'name' => 'Pakistan Rupee',
			  'simbol' => '&#8360;'),
		'PAB' => array('code' => 'PAB',
			  'name' => 'Panama Balboa',
			  'simbol' => '&#66;&#47;&#46;'),
		'PYG' => array('code' => 'PYG',
			  'name' => 'Paraguay Guarani',
			  'simbol' => '&#71;&#115;'),
		'PEN' => array('code' => 'PEN',
			  'name' => 'Peru Nuevo Sol',
			  'simbol' => '&#83;&#47;&#46;'),
		'PHP' => array('code' => 'PHP',
			  'name' => 'Philippines Peso',
			  'simbol' => '&#8369;'),
		'PLN' => array('code' => 'PLN',
			  'name' => 'Poland Zloty',
			  'simbol' => '&#122;&#322;'),
		'QAR' => array('code' => 'QAR',
			  'name' => 'Qatar Riyal',
			  'simbol' => '&#65020;'),
		'RON' => array('code' => 'RON',
			  'name' => 'Romania New Leu',
			  'simbol' => '&#108;&#101;&#105;'),
		'RUB' => array('code' => 'RUB',
			  'name' => 'Russia Ruble',
			  'simbol' => '&#1088;&#1091;&#1073;'),
		'SHP' => array('code' => 'SHP',
			  'name' => 'Saint Helena Pound',
			  'simbol' => '&#163;'),
		'SAR' => array('code' => 'SAR',
			  'name' => 'Saudi Arabia Riyal',
			  'simbol' => '&#65020;'),
		'RSD' => array('code' => 'RSD',
			  'name' => 'Serbia Dinar',
			  'simbol' => '&#1044;&#1080;&#1085;&#46;'),
		'SCR' => array('code' => 'SCR',
			  'name' => 'Seychelles Rupee',
			  'simbol' => '&#8360;'),
		'SGD' => array('code' => 'SGD',
			  'name' => 'Singapore Dollar',
			  'simbol' => '&#36;'),
		'SBD' => array('code' => 'SBD',
			  'name' => 'Solomon Islands Dollar',
			  'simbol' => '&#36;'),
		'SOS' => array('code' => 'SOS',
			  'name' => 'Somalia Shilling',
			  'simbol' => '&#83;'),
		'ZAR' => array('code' => 'ZAR',
			  'name' => 'South Africa Rand',
			  'simbol' => '&#82;'),
		'KRW' => array('code' => 'KRW',
			  'name' => 'Korea (South) Won',
			  'simbol' => '&#8361;'),
		'LKR' => array('code' => 'LKR',
			  'name' => 'Sri Lanka Rupee',
			  'simbol' => '&#8360;'),
		'SEK' => array('code' => 'SEK',
			  'name' => 'Sweden Krona',
			  'simbol' => '&#107;&#114;'),
		'CHF' => array('code' => 'CHF',
			  'name' => 'Switzerland Franc',
			  'simbol' => '&#67;&#72;&#70;'),
		'SRD' => array('code' => 'SRD',
			  'name' => 'Suriname Dollar',
			  'simbol' => '&#36;'),
		'SYP' => array('code' => 'SYP',
			  'name' => 'Syria Pound',
			  'simbol' => '&#163;'),
		'TWD' => array('code' => 'TWD',
			  'name' => 'Taiwan New Dollar',
			  'simbol' => '&#78;&#84;&#36;'),
		'THB' => array('code' => 'THB',
			  'name' => 'Thailand Baht',
			  'simbol' => '&#3647;'),
		'TTD' => array('code' => 'TTD',
			  'name' => 'Trinidad and Tobago Dollar',
			  'simbol' => '&#84;&#84;&#36;'),
		'TRL' => array('code' => 'TRL',
			  'name' => 'Turkey Lira',
			  'simbol' => '&#8356;'),
		'TVD' => array('code' => 'TVD',
			  'name' => 'Tuvalu Dollar',
			  'simbol' => '&#36;'),
		'AED' => array('code' => 'AED',
			  'name' => 'UAE Dirham',
			  'simbol' => 'د.إ'),
		'UAH' => array('code' => 'UAH',
			  'name' => 'Ukraine Hryvna',
			  'simbol' => '&#8372;'),
		'GBP' => array('code' => 'GBP',
			  'name' => 'United Kingdom Pound',
			  'simbol' => '&#163;'),
		'USD' => array('code' => 'USD',
			  'name' => 'United States Dollar',
			  'simbol' => '&#36;'),
		'UYU' => array('code' => 'UYU',
			  'name' => 'Uruguay Peso',
			  'simbol' => '&#36;&#85;'),
		'UZS' => array('code' => 'UZS',
			  'name' => 'Uzbekistan Som',
			  'simbol' => '&#1083;&#1074;'),
		'VEF' => array('code' => 'VEF',
			  'name' => 'Venezuela Bolivar Fuerte',
			  'simbol' => '&#66;&#115;'),
		'VND' => array('code' => 'VND',
			  'name' => 'Viet Nam Dong',
			  'simbol' => '&#8363;'),
		'YER' => array('code' => 'YER',
			  'name' => 'Yemen Rial',
			  'simbol' => '&#65020;'),
		'ZWD' => array('code' => 'ZWD',
			  'name' => 'Zimbabwe Dollar',
			  'simbol' => '&#90;&#36;'),
	);	
	return $currency_list;
}
?>