<?php
/**
 * Settings
 *
 * @category   Components
 * @package    CookiePro
 * @author     WordPress Dev <wordpress@cookiepro.com>
 * @license    GPL2
 * @link       https://cookiepro.com
 * @since      1.0.4
 */

?>

<?php
wp_register_style( 'wpcp', $this->plugin->url . '/assets/css/style1.css', null, '1.0' );
wp_enqueue_style( 'wpcp' );
?>

<div class="wrap">
  <div>
		   <div class="ot-banner">
			 <svg width="1326px" height="120px" viewBox="0 0 1326 120" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
				 <!-- Generator: Sketch 52.5 (67469) - http://www.bohemiancoding.com/sketch -->
				 <title>Setting Page Banner</title>
				 <desc>Created with Sketch.</desc>
				 <g id="Setting-Page-Banner" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					 <g id="Group-3">
						 <rect id="Rectangle" fill="#6699CC" x="0" y="0" width="1325.5814" height="120"></rect>
						 <g id="Stacked-Group-2" transform="translate(262.000000, 24.000000)" fill="#FFFFFF">
							 <g id="cookiepro_logo">
								 <g id="Group-4">
									 <path d="M27.2989375,38.6483587 C24.5571228,40.4624653 21.3384708,41.3300815 17.6429814,41.3300815 C14.0667014,41.3300815 10.9275223,40.5807766 8.30491694,39.0427297 C5.64257514,37.5046827 3.57628002,35.256768 2.14576801,32.3778596 C0.715256004,29.4989513 0,26.1073606 0,22.2030877 C0,18.2988147 0.715256004,14.9072241 2.14576801,12.0283157 C3.57628002,9.14940736 5.6028387,6.94092972 8.26518049,5.40288279 C10.9275223,3.86483587 13.9872285,3.11553095 17.5635085,3.11553095 C21.2987343,3.11553095 24.4379135,3.86483587 26.9810459,5.40288279 C29.5241784,6.94092972 31.3520549,9.18884446 32.5044117,12.2255012 L26.7823637,14.7494756 C26.0273713,12.540998 24.9147508,10.9240769 23.4842388,9.89871227 C22.0537268,8.87334765 20.1861139,8.36066534 17.8814001,8.36066534 C14.384593,8.36066534 11.5633054,9.58321546 9.45727383,12.0283157 C7.39097871,14.4734159 6.35783115,17.8650066 6.35783115,22.2030877 C6.35783115,26.5806059 7.35124227,30.0116336 9.37780094,32.4172967 C11.3646232,34.862397 14.1461743,36.0849471 17.7224543,36.0849471 C20.1463775,36.0849471 22.1729361,35.4933906 23.8021304,34.2708405 C25.4313246,33.0877275 26.6234179,31.3130579 27.3386739,28.986269 L33.1004584,30.8792498 C31.9481015,34.2708405 30.0010157,36.834252 27.2989375,38.6483587 Z" id="Path"></path>
									 <path d="M62.823319,15.9720258 C65.3267151,18.5748744 66.5585448,22.1242135 66.5585448,26.6989172 C66.5585448,31.2736208 65.3267151,34.862397 62.823319,37.4258085 C60.319923,39.9892201 56.8628523,41.2906444 52.452107,41.2906444 C48.0413616,41.2906444 44.5842909,39.9892201 42.0808949,37.4258085 C39.5774989,34.862397 38.3456691,31.2736208 38.3456691,26.6989172 C38.3456691,22.1242135 39.5774989,18.5354373 42.0808949,15.9720258 C44.5842909,13.4086142 48.0413616,12.1071899 52.452107,12.1071899 C56.8628523,12.1071899 60.319923,13.3691771 62.823319,15.9720258 Z M46.5313767,19.3636164 C45.1406012,21.0594118 44.4650816,23.504512 44.4650816,26.6989172 C44.4650816,29.8933223 45.1406012,32.3384225 46.5313767,34.0342179 C47.9221523,35.7300132 49.8692381,36.5976294 52.452107,36.5976294 C55.0349759,36.5976294 57.0217981,35.7300132 58.4125737,33.9947808 C59.8033492,32.2595483 60.5186052,29.8144481 60.5186052,26.6989172 C60.5186052,23.5833862 59.8033492,21.0988489 58.4125737,19.4030535 C57.0217981,17.6678211 55.0349759,16.8002049 52.452107,16.8002049 C49.9089745,16.8002049 47.9221523,17.6678211 46.5313767,19.3636164 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M97.1556072,15.9720258 C99.6590033,18.5748744 100.890833,22.1242135 100.890833,26.6989172 C100.890833,31.2736208 99.6590033,34.862397 97.1556072,37.4258085 C94.6522112,39.9892201 91.1951405,41.2906444 86.7843952,41.2906444 C82.3736498,41.2906444 78.9165791,39.9892201 76.4131831,37.4258085 C73.9097871,34.862397 72.6779573,31.2736208 72.6779573,26.6989172 C72.6779573,22.1242135 73.9097871,18.5354373 76.4131831,15.9720258 C78.9165791,13.4086142 82.3736498,12.1071899 86.7843952,12.1071899 C91.1951405,12.1071899 94.6522112,13.3691771 97.1556072,15.9720258 Z M80.8636649,19.3636164 C79.4728894,21.0594118 78.7973698,23.504512 78.7973698,26.6989172 C78.7973698,29.8933223 79.4728894,32.3384225 80.8636649,34.0342179 C82.2544405,35.7300132 84.2015263,36.5976294 86.7843952,36.5976294 C89.3672641,36.5976294 91.3540863,35.7300132 92.7448619,33.9947808 C94.1356374,32.2595483 94.8508934,29.8144481 94.8508934,26.6989172 C94.8508934,23.5833862 94.1356374,21.0988489 92.7448619,19.4030535 C91.3540863,17.6678211 89.3672641,16.8002049 86.7843952,16.8002049 C84.2412627,16.8002049 82.2544405,17.6678211 80.8636649,19.3636164 Z" id="Shape" fill-rule="nonzero"></path>
									 <polygon id="Path" points="120.321954 27.5665334 114.719116 33.284913 114.719116 40.7779621 108.63944 40.7779621 108.63944 4.26325641e-14 114.719116 4.26325641e-14 114.719116 26.4228574 128.269243 12.6593093 135.421803 12.6593093 124.573754 23.6622604 136.057587 40.738525 129.024236 40.738525"></polygon>
									 <path d="M141.739898,6.94092972 C141.024642,6.27049901 140.667014,5.36344569 140.667014,4.14089557 C140.667014,2.95778255 141.024642,2.01129213 141.739898,1.38029852 C142.455154,0.749304913 143.448565,0.433808107 144.759868,0.433808107 C146.031434,0.433808107 147.024845,0.749304913 147.740101,1.38029852 C148.455357,2.01129213 148.773249,2.91834545 148.773249,4.14089557 C148.773249,5.32400859 148.415621,6.27049901 147.740101,6.94092972 C147.024845,7.61136043 146.031434,7.92685723 144.759868,7.92685723 C143.448565,7.92685723 142.455154,7.61136043 141.739898,6.94092972 Z M147.740101,40.7779621 L141.660425,40.7779621 L141.660425,12.6593093 L147.740101,12.6593093 L147.740101,40.7779621 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M182.310808,28.9468319 L161.568384,28.9468319 C161.926012,31.4313692 162.800214,33.284913 164.230726,34.5863373 C165.661238,35.8877616 167.528851,36.5187552 169.793828,36.5187552 C171.661441,36.5187552 173.171426,36.2032584 174.403256,35.5328277 C175.635085,34.862397 176.469551,33.9159066 176.906652,32.6933565 L181.95318,34.7835228 C179.847149,39.1216039 175.794031,41.2906444 169.754092,41.2906444 C165.30361,41.2906444 161.806803,39.9892201 159.303407,37.4258085 C156.800011,34.8229599 155.528444,31.2736208 155.528444,26.6989172 C155.528444,22.0847764 156.720538,18.4960002 159.144461,15.9325887 C161.568384,13.3691771 164.945982,12.0677528 169.356727,12.0677528 C173.529054,12.0677528 176.747706,13.32974 179.05242,15.8537145 C181.357134,18.3776889 182.50949,21.6904054 182.50949,25.870738 C182.549227,26.9355398 182.469754,28.0003415 182.310808,28.9468319 Z M164.111517,18.7720599 C162.760477,20.0340471 161.926012,21.8875909 161.608121,24.3326911 L176.906652,24.3326911 C176.58876,21.9664651 175.794031,20.1523584 174.482729,18.811497 C173.171426,17.5100727 171.502495,16.839642 169.396464,16.839642 C167.210959,16.8790791 165.422819,17.5100727 164.111517,18.7720599 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M214.696011,6.74374421 C217.040461,8.79447345 218.232554,11.6339447 218.232554,15.2227209 C218.232554,18.811497 217.040461,21.6509683 214.696011,23.7016975 C212.35156,25.7524267 209.132908,26.7777914 205.079791,26.7777914 L196.735138,26.7777914 L196.735138,40.7779621 L190.655462,40.7779621 L190.655462,3.66765036 L205.040055,3.66765036 C209.132908,3.66765036 212.35156,4.69301498 214.696011,6.74374421 Z M210.00711,20.0340471 C211.278676,18.9692454 211.914459,17.3523243 211.914459,15.2227209 C211.914459,10.9240769 209.291854,8.75503635 204.08638,8.75503635 L196.735138,8.75503635 L196.735138,21.6509683 L204.08638,21.6509683 C206.788458,21.6509683 208.735544,21.0988489 210.00711,20.0340471 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M243.107569,12.6593093 L242.153894,18.1805034 C241.279692,17.7072582 240.087599,17.4311985 238.577614,17.4311985 C237.385521,17.4311985 236.233164,17.7466953 235.16028,18.3776889 C234.087396,19.0086825 233.213194,19.9551729 232.497938,21.2565973 C231.782682,22.5185845 231.46479,24.0566314 231.46479,25.870738 L231.46479,40.7779621 L225.385114,40.7779621 L225.385114,12.6593093 L230.550852,12.6593093 L231.067426,17.7072582 C232.656884,13.9607336 235.637117,12.0677528 240.008126,12.0677528 C241.319429,12.1071899 242.352576,12.2649383 243.107569,12.6593093 Z" id="Path"></path>
									 <path d="M270.92308,15.9720258 C273.426476,18.5748744 274.658306,22.1242135 274.658306,26.6989172 C274.658306,31.2736208 273.426476,34.862397 270.92308,37.4258085 C268.419684,39.9892201 264.962613,41.2906444 260.551868,41.2906444 C256.141122,41.2906444 252.684052,39.9892201 250.180656,37.4258085 C247.67726,34.862397 246.44543,31.2736208 246.44543,26.6989172 C246.44543,22.1242135 247.67726,18.5354373 250.180656,15.9720258 C252.684052,13.4086142 256.141122,12.1071899 260.551868,12.1071899 C264.962613,12.1071899 268.419684,13.3691771 270.92308,15.9720258 Z M254.631137,19.3636164 C253.240362,21.0594118 252.564842,23.504512 252.564842,26.6989172 C252.564842,29.8933223 253.240362,32.3384225 254.631137,34.0342179 C256.021913,35.7300132 257.968999,36.5976294 260.551868,36.5976294 C263.134737,36.5976294 265.121559,35.7300132 266.512334,33.9947808 C267.90311,32.2595483 268.618366,29.8144481 268.618366,26.6989172 C268.618366,23.5833862 267.90311,21.0988489 266.512334,19.4030535 C265.121559,17.6678211 263.134737,16.8002049 260.551868,16.8002049 C257.968999,16.8002049 256.021913,17.6678211 254.631137,19.3636164 Z" id="Shape" fill-rule="nonzero"></path>
								 </g>
								 <g id="Group" transform="translate(148.414305, 50.410903)">
									 <path d="M9.28982046,6.36760357 C10.2068414,7.38329493 10.6454166,8.75057177 10.6454166,10.5475642 C10.6454166,12.3054916 10.2068414,13.7118334 9.28982046,14.7275248 C8.37279955,15.7432162 7.13681486,16.2510619 5.58186637,16.2510619 C4.70471594,16.2510619 3.94717693,16.0557366 3.26937887,15.6650861 C2.59158081,15.2744355 2.07326465,14.7665899 1.75430086,14.141549 L1.63468944,16.0557366 L0.0797409481,16.0557366 L0.0797409481,0.117195158 L1.87391228,0.117195158 L1.87391228,6.8363842 C2.23274655,6.25040841 2.75106271,5.78162778 3.3889903,5.4300423 C4.02691788,5.07845683 4.78445689,4.92219662 5.58186637,4.92219662 C7.13681486,4.84406652 8.37279955,5.3519122 9.28982046,6.36760357 Z M7.93422434,13.5555732 C8.57215192,12.8133372 8.85124524,11.7976459 8.85124524,10.5084991 C8.85124524,9.25841745 8.53228145,8.24272609 7.93422434,7.50049009 C7.29629675,6.75825409 6.4590168,6.36760357 5.382514,6.36760357 C4.3060112,6.36760357 3.46873124,6.71918904 2.83080366,7.46142504 C2.19287607,8.20366104 1.87391228,9.18028735 1.87391228,10.391304 L1.87391228,10.6647593 C1.87391228,11.875776 2.19287607,12.8524023 2.83080366,13.5946383 C3.46873124,14.3368743 4.3060112,14.6884598 5.382514,14.6884598 C6.4590168,14.6884598 7.29629675,14.2978092 7.93422434,13.5555732 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M18.0214543,17.813664 C17.5828791,18.8684204 17.1044334,19.6106564 16.5861172,20.040372 C16.067801,20.4700875 15.3501325,20.7044779 14.5128526,20.7044779 C13.9546659,20.7044779 13.4762202,20.6263477 13.0775155,20.4700875 C12.6788108,20.3138273 12.359847,20.079437 12.0408832,19.7669166 L12.6788108,18.2824446 C13.117386,18.8684204 13.7154431,19.1418757 14.4729821,19.1418757 C14.9115573,19.1418757 15.2703916,19.0246806 15.6292258,18.7512252 C15.9481896,18.4777699 16.2671534,18.0480543 16.5063763,17.3448833 L17.1044334,15.9385414 L12.4395879,5.07845683 L14.4729821,5.07845683 L17.2639153,12.1882964 L17.9417133,14.141549 L18.7391228,11.9929711 L21.3307036,5.07845683 L23.2444864,5.07845683 L18.0214543,17.813664 Z" id="Path"></path>
									 <path d="M42.7012777,2.226708 C43.7379101,2.81268378 44.57519,3.67211494 45.1333766,4.80500146 C45.6915633,5.93788799 45.9706566,7.22703472 45.9706566,8.75057177 C45.9706566,10.2741088 45.6915633,11.6023206 45.1333766,12.6961421 C44.57519,13.8290286 43.7777805,14.6884598 42.7012777,15.2744355 C41.6646454,15.8604113 40.4286607,16.1729318 38.9933236,16.1729318 C37.5579866,16.1729318 36.3618723,15.8604113 35.32524,15.2744355 C34.2886077,14.6884598 33.4911982,13.8290286 32.9330116,12.6961421 C32.3748249,11.5632556 32.0957316,10.2741088 32.0957316,8.75057177 C32.0957316,7.22703472 32.3748249,5.89882293 32.9330116,4.80500146 C33.4911982,3.67211494 34.2886077,2.81268378 35.32524,2.226708 C36.3618723,1.64073221 37.597857,1.32821179 38.9933236,1.32821179 C40.3887902,1.32821179 41.6646454,1.64073221 42.7012777,2.226708 Z M35.7638152,4.80500146 C34.9664058,5.74256272 34.567701,7.07077451 34.567701,8.78963682 C34.567701,10.5084991 34.9664058,11.8367109 35.7638152,12.7742722 C36.5612247,13.7118334 37.6377275,14.1806141 39.0331941,14.1806141 C40.4286607,14.1806141 41.5051635,13.7118334 42.302573,12.7742722 C43.0999825,11.8367109 43.4986872,10.5084991 43.4986872,8.78963682 C43.4986872,7.07077451 43.0999825,5.74256272 42.302573,4.80500146 C41.5051635,3.8674402 40.4286607,3.39865957 39.0331941,3.39865957 C37.6377275,3.35959452 36.5612247,3.8674402 35.7638152,4.80500146 Z" id="Shape" fill-rule="nonzero"></path>
									 <path d="M58.1311512,5.89882293 C58.9285607,6.60199388 59.2873949,7.61768525 59.2873949,8.90683198 L59.2873949,15.9776065 L56.8951665,15.9776065 L56.8951665,9.64906798 C56.8951665,7.7348804 56.097757,6.75825409 54.502938,6.75825409 C53.6656581,6.75825409 52.9479896,7.03170946 52.3499324,7.61768525 C51.7518753,8.16459598 51.472782,9.02402714 51.472782,10.1959787 L51.472782,15.9776065 L49.0805536,15.9776065 L49.0805536,5.03939178 L51.1936887,5.03939178 L51.3133001,6.8363842 C51.6721344,6.13321325 52.1904506,5.62536757 52.8682486,5.31284715 C53.5460467,5.00032673 54.2637152,4.80500146 55.1009952,4.80500146 C56.3369799,4.84406652 57.3337417,5.19565199 58.1311512,5.89882293 Z" id="Path"></path>
									 <path d="M72.8034856,11.4069953 L64.6300385,11.4069953 C64.7496499,12.3836217 65.1084842,13.0867926 65.6666708,13.5946383 C66.2248574,14.102484 66.942526,14.3368743 67.8595469,14.3368743 C68.5772154,14.3368743 69.1752725,14.2196791 69.6935887,13.9462238 C70.1720344,13.6727684 70.4909981,13.3211829 70.6903505,12.8524023 L72.6838742,13.6727684 C71.8465943,15.3525657 70.2517753,16.2119968 67.8994173,16.2119968 C66.1451165,16.2119968 64.7895204,15.7041511 63.7927585,14.6884598 C62.7959967,13.6727684 62.317551,12.3054916 62.317551,10.5084991 C62.317551,8.71150672 62.7959967,7.30516483 63.752888,6.32853851 C64.7097794,5.31284715 66.0255051,4.84406652 67.7798059,4.84406652 C69.4144953,4.84406652 70.6903505,5.31284715 71.6073714,6.28947346 C72.5243923,7.26609977 72.9629675,8.55524651 72.9629675,10.1959787 C72.8832266,10.6256943 72.8433561,11.0163448 72.8034856,11.4069953 Z M65.6268003,7.46142504 C65.1084842,7.96927072 64.7496499,8.67244167 64.6300385,9.61000293 L70.65048,9.61000293 C70.5308686,8.67244167 70.2119048,7.96927072 69.6935887,7.46142504 C69.1752725,6.95357935 68.4974744,6.68012399 67.700065,6.68012399 C66.8229145,6.71918904 66.1451165,6.95357935 65.6268003,7.46142504 Z" id="Shape" fill-rule="nonzero"></path>
									 <polygon id="Path" points="85.2430736 3.55491978 80.2193938 3.55491978 80.2193938 15.9776065 77.8271654 15.9776065 77.8271654 3.55491978 72.8034856 3.55491978 72.8034856 1.5626021 85.282944 1.5626021 85.282944 3.55491978"></polygon>
									 <path d="M93.2570388,5.07845683 L92.8583341,7.22703472 C92.4994998,7.03170946 92.0609246,6.95357935 91.4628675,6.95357935 C90.9844218,6.95357935 90.5458466,7.07077451 90.1072714,7.34422988 C89.6686962,7.57862019 89.3497324,7.96927072 89.0706391,8.4771164 C88.7915457,8.98496209 88.6719343,9.57093787 88.6719343,10.2741088 L88.6719343,16.0557366 L86.2797059,16.0557366 L86.2797059,5.11752188 L88.3131001,5.11752188 L88.5124524,7.07077451 C89.15038,5.62536757 90.3066238,4.88313157 92.0210541,4.88313157 C92.5393703,4.84406652 92.938075,4.92219662 93.2570388,5.07845683 Z" id="Path"></path>
									 <path d="M105.616886,5.07845683 L105.616886,16.0166715 L103.503751,16.0166715 L103.42401,14.2587442 C102.666471,15.586956 101.350745,16.2510619 99.4369623,16.2510619 C98.2408481,16.2510619 97.2440862,15.9385414 96.5264177,15.2744355 C95.8087492,14.6103297 95.4100444,13.6337033 95.4100444,12.3054916 L95.4100444,5.07845683 L97.8022729,5.07845683 L97.8022729,11.6413857 C97.8022729,12.618012 98.0016253,13.2821179 98.40033,13.6727684 C98.7990347,14.0634189 99.3572214,14.2587442 100.11476,14.2587442 C101.031781,14.2587442 101.74945,13.9852888 102.347507,13.399313 C102.945564,12.8524023 103.224657,11.9929711 103.224657,10.8991497 L103.224657,5.07845683 L105.616886,5.07845683 Z" id="Path"></path>
									 <path d="M110.361472,15.626021 C109.484322,15.2353705 108.846394,14.6884598 108.367949,13.9071587 L109.962767,12.5398819 C110.241861,13.1649227 110.680436,13.6337033 111.278493,13.9071587 C111.87655,14.1806141 112.594219,14.3368743 113.431499,14.3368743 C114.189038,14.3368743 114.787095,14.2196791 115.1858,13.9852888 C115.584504,13.7508985 115.823727,13.4383781 115.823727,13.0477276 C115.823727,12.6961421 115.624375,12.4226867 115.22567,12.1882964 C114.826965,11.9929711 114.189038,11.7585808 113.232146,11.6023206 C111.597457,11.2898002 110.441213,10.8991497 109.763415,10.391304 C109.085617,9.88345829 108.766653,9.1412223 108.766653,8.24272609 C108.766653,7.6567503 108.966006,7.07077451 109.32484,6.56292883 C109.683674,6.05508315 110.241861,5.62536757 110.959529,5.31284715 C111.677198,5.00032673 112.514478,4.84406652 113.471369,4.84406652 C114.707354,4.84406652 115.704116,5.03939178 116.421784,5.4300423 C117.179323,5.82069283 117.73751,6.44573367 118.136215,7.30516483 L116.421784,8.51618146 C116.142691,7.89114061 115.783857,7.42235998 115.305411,7.10983956 C114.826965,6.79731914 114.189038,6.68012399 113.471369,6.68012399 C112.793571,6.68012399 112.235384,6.79731914 111.796809,7.07077451 C111.358234,7.34422988 111.119011,7.6567503 111.119011,8.00833577 C111.119011,8.3989863 111.318364,8.71150672 111.717068,8.94589703 C112.115773,9.18028735 112.833442,9.37561261 113.870074,9.57093787 C115.464893,9.84439324 116.581266,10.2350438 117.219194,10.7428895 C117.857121,11.2507351 118.215956,11.9539061 118.215956,12.8914673 C118.215956,13.8680937 117.77738,14.6493947 116.9401,15.2744355 C116.06295,15.8994764 114.906706,16.2119968 113.351758,16.2119968 C112.235384,16.2119968 111.198752,16.0166715 110.361472,15.626021 Z" id="Path"></path>
									 <path d="M128.343056,15.2744355 C127.984222,15.5478909 127.545647,15.7822812 127.02733,15.9776065 C126.509014,16.1338667 125.950828,16.2119968 125.35277,16.2119968 C124.316138,16.2119968 123.518729,15.9776065 122.880801,15.4697608 C122.242873,14.9619151 121.96378,14.1806141 121.92391,13.1258577 L121.92391,6.9145143 L119.810775,6.9145143 L119.810775,5.07845683 L121.92391,5.07845683 L121.92391,2.53922842 L124.316138,1.87512252 L124.316138,5.07845683 L128.223445,5.07845683 L128.223445,6.9145143 L124.316138,6.9145143 L124.316138,12.7352071 C124.316138,13.2430528 124.47562,13.6337033 124.754713,13.9071587 C125.033807,14.1806141 125.432511,14.2978092 125.950828,14.2978092 C126.628626,14.2978092 127.226683,14.0634189 127.744999,13.5946383 L128.343056,15.2744355 Z" id="Path"></path>
								 </g>
							 </g>
							 <text id="Simplify-Cookie-Comp" font-family="OpenSans, Open Sans" font-size="20" font-weight="normal" letter-spacing="-0.7142859">
								 <tspan x="378" y="30">Simplify Cookie Compliance for GDPR and </tspan>
								 <tspan x="378" y="57">ePrivacy Directive</tspan>
							 </text>
						 </g>
					 </g>
				 </g>
			 </svg>
		   </div>

  <div id="poststuff" >
	<div id="post-body" class="metabox-holder columns-2">
	  <!-- Content -->
	  <div id="post-body-content">
			<div id="normal-sortables" class="meta-box-sortables ui-sortable">
		<div class="postbox">
		  <h3 class="hndle">
			  <span><?php esc_html_e( 'Getting Started with CookiePro' ); ?></span>
		  </h3>

		  <div class="inside">
			<p>
					<?php esc_html_e( 'The CookiePro plugin requires a CookiePro account. To sign up for a free or paid account, visit ' ); ?>
					<a href="https://www.cookiepro.com/pricing/?referral=WORDPRESS"><?php esc_html_e( 'CookiePro.com ' ); ?></a> and select the edition that fits your business needs.
			  </p>
			  <p>
					<?php esc_html_e( 'Once you have access to your CookiePro account, follow the steps below or check out the ' ); ?>
					  <a href="https://www.cookiepro.com/help/technical-implementation/"><?php esc_html_e( 'Getting Started ' ); ?></a> guide to get CookiePro up and running on your WordPress website.
				</p>

		  </div>
			<h3 class="hndle">
				<span><?php esc_html_e( 'Cookie Banner & Preference Center ' ); ?></span>
			</h3>

			<div class="inside">
				<p>
					<?php esc_html_e( '1. Scan your website and review your cookies categories ' ); ?>
				</p>
				<p>
					<?php esc_html_e( '2. Style and configure your banner and preference center ' ); ?>
				</p>
				<p>
					<?php esc_html_e( '3. Block cookies using a tag manager and/or JS Rewrite  ' ); ?>
				</p>
				<p>
					<?php esc_html_e( '4. Copy and paste CookiePro script into WordPress plugin  ' ); ?>
				</p>
				<p>
					<?php esc_html_e( '5. Save the configuration to publish the cookie banner ' ); ?>
				</p>
			  <p>
					<?php esc_html_e( 'Your banner is now viewable on your WordPress website! Detailed step-by-step instructions and best practices are available in the ' ); ?>
					  <a href="https://community.cookiepro.com/"><?php esc_html_e( 'CookiePro Community.' ); ?></a>
				</p>

			</div>
		</div>
	  </div>
	  <!-- /normal-sortables -->
	  </div>
	  <!-- /post-body-content -->
	  <!-- Sidebar -->
	  <div id="postbox-container-1" class="postbox-container" >
		<?php require_once $this->plugin->folder . '/views/sidebar.php'; ?>
	  </div>

	  <!-- /postbox-container -->
	</div>
</div>



	<div id="poststuff">
		<div id="post-body" class="metabox-holder columns-2">

			<div id="post-body-content">
				<div id="normal-sortables" class="meta-box-sortables ui-sortable">
					<div class="postbox">


						<div class="inside">
							<form action="options-general.php?page=cookiepro" method="post">
								<p>
									<label for="cookiepro_header"><strong><?php esc_html_e( 'Insert the Main Script Tag from CookiePro here.' ); ?></strong></label>
									<textarea name="cookiepro_header" id="cookiepro_header" class="widefat" rows="8" style="font-family:Courier New;"><?php echo esc_attr( $this->settings['cookiepro_header'] ); ?></textarea></p>

						<?php wp_nonce_field( $this->plugin->name, $this->plugin->name . '_nonce' ); ?>
								<p>
									<input name="submit" type="submit" name="Submit" class="button button-primary" value="<?php esc_html_e( 'Save' ); ?>" />
								</p>
							</form>
						</div>
					</div>

				</div>

			</div>

		</div>
	</div>

	<div id="poststuff" >
	  <div id="post-body" class="metabox-holder columns-2">
		<!-- Content -->
		<div id="post-body-content">
			  <div id="normal-sortables" class="meta-box-sortables ui-sortable">
		  <div class="postbox">
			<h3 class="hndle">
				<span><?php esc_html_e( 'Additional Information' ); ?></span>
			</h3>

			<div class="inside">
				<p>
					<?php esc_html_e( 'In addition to your cookie banner and preference center, CookiePro automatically generates the following scripts that can be added to your Cookie or Privacy Notice page.' ); ?>
				</p>
				<ul>
				  <li>
						<?php esc_html_e( '   1. The Cookie Settings script inserts a button on your site to enable visitors to access their cookie preferences at any time' ); ?>
				  </li>
				  <li>
						<?php esc_html_e( '   2. The Cookie List script inserts a detailed list of cookies, including descriptions and categories they are assigned to ' ); ?>
				  </li>
			  </ul>

</div>
<h3 class="hndle">
	<span><?php esc_html_e( 'Disclaimer' ); ?></span>
</h3>
  <div class="inside">
<p>
					<?php esc_html_e( 'This plugin allows you to publish CookiePro’s cookie banner and preference center on your WordPress website. Use of this plugin does not, by itself, ensure compliance with legal requirements related to cookies.' ); ?>

				</p>
  </div>

		  </div>
		</div>
		</div>
	  </div>
  </div>


</div>
