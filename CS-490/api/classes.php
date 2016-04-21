<?php

include 'common.php';

$classes = 
  array (
    3 => 
    array(
       'classID' => '5370',
       'className' => 'ACC-101 PRINCIP OF ACCOUNTING I',
    ),
    4 => 
    array(
       'classID' => '5371',
       'className' => 'ACC-102 PRINCIPLES OF ACCNTG II',
    ),
    5 => 
    array(
       'classID' => '5372',
       'className' => 'ACC-211 COST ACCOUNTING',
    ),
    6 => 
    array(
       'classID' => '5373',
       'className' => 'ACCT-115 FUND OF FINANCIAL ACCOUNTING',
    ),
    7 => 
    array(
       'classID' => '5374',
       'className' => 'ACCT-117 PRINCIPLES OF FIN ACCOUNTNG',
    ),
    8 => 
    array(
       'classID' => '5375',
       'className' => 'ACCT-215 MANAGERIAL ACCOUNTING I',
    ),
    9 => 
    array(
       'classID' => '5376',
       'className' => 'ACCT-325 INTERMEDIATE ACCOUNTING I',
    ),
    10 => 
    array(
       'classID' => '5377',
       'className' => 'ACCT-335 MANAGERIAL ACCOUNTING II',
    ),
    11 => 
    array(
       'classID' => '5378',
       'className' => 'ACCT-415 AUDITING',
    ),
    12 => 
    array(
       'classID' => '5379',
       'className' => 'ACCT-425 TAX ACCOUNTING I',
    ),
    13 => 
    array(
       'classID' => '5380',
       'className' => 'ACCT-435 INTERMEDIATE ACCOUNTING II',
    ),
    14 => 
    array(
       'classID' => '5381',
       'className' => 'ACCT-615 MANAGEMENT ACCOUNTING',
    ),
    15 => 
    array(
       'classID' => '5382',
       'className' => 'AD-111 COMM IN ART+ DES - TRAD MEDIA',
    ),
    16 => 
    array(
       'classID' => '5383',
       'className' => 'AD-112 COMM IN ART & DES-DIGTL MED',
    ),
    17 => 
    array(
       'classID' => '5384',
       'className' => 'AD-112 COMM IN ART & DES-DIGTL MEDIA',
    ),
    18 => 
    array(
       'classID' => '5385',
       'className' => 'AD-150 COLOR AND COMPOSITION',
    ),
    19 => 
    array(
       'classID' => '5386',
       'className' => 'AD-161 HISTORY OF ART AND DESIGN I',
    ),
    20 => 
    array(
       'classID' => '5387',
       'className' => 'AD-162 HISTORY OF ART AND DESIGN II',
    ),
    21 => 
    array(
       'classID' => '5388',
       'className' => 'AD-201 HUMAN FACTORS / ERGONOMICS',
    ),
    22 => 
    array(
       'classID' => '5389',
       'className' => 'AD-201 HUMAN FACTORS/ERGONOMICS',
    ),
    23 => 
    array(
       'classID' => '5390',
       'className' => 'AD-325 ENTREPRENEURSHIP FOR DESIGNERS',
    ),
    24 => 
    array(
       'classID' => '5391',
       'className' => 'AD-463 COLLABORATIVE DESIGN STUDIO',
    ),
    25 => 
    array(
       'classID' => '5392',
       'className' => 'AD-490 ST: 21ST CENTURY PARTICIPATORY D',
    ),
    26 => 
    array(
       'classID' => '5393',
       'className' => 'AD-490 ST: ANALYSIS AND PRESERVATION OF',
    ),
    27 => 
    array(
       'classID' => '5394',
       'className' => 'AD-490 ST: ANALYSIS AND VIRTUAL PRESERV',
    ),
    28 => 
    array(
       'classID' => '5395',
       'className' => 'AD-490 ST:ART PROD ANIMATION & VIDEO',
    ),
    29 => 
    array(
       'classID' => '5396',
       'className' => 'AD-490 ST:FUTUREBOOKS:CONTEMPORARY AND',
    ),
    30 => 
    array(
       'classID' => '5397',
       'className' => 'AD-490 ST: INTERACTIVE PRODUCT DESIGN:',
    ),
    31 => 
    array(
       'classID' => '5398',
       'className' => 'AD-490 ST:PARTICIPATORY DESIGN IN 21ST',
    ),
    32 => 
    array(
       'classID' => '5399',
       'className' => 'AD-490 ST: REAL TIME COMPUTING FOR LIVE',
    ),
    33 => 
    array(
       'classID' => '5400',
       'className' => 'AD-490 ST: REAL-TIME COMPUTING FOR LIVE',
    ),
    34 => 
    array(
       'classID' => '5401',
       'className' => 'AD-490 ST: SUSTAINABLE DESIGN FROM GREE',
    ),
    35 => 
    array(
       'classID' => '5402',
       'className' => 'AD-490 ST: TEMPORARY AND MOBILE DESIGN',
    ),
    36 => 
    array(
       'classID' => '5403',
       'className' => 'AD-490 ST: TEMPORARY AND PORTABLE',
    ),
    37 => 
    array(
       'classID' => '5404',
       'className' => 'AD-490 ST: TOY DESIGN',
    ),
    38 => 
    array(
       'classID' => '5405',
       'className' => 'AD-493 INDEPENDENT STUDY',
    ),
    39 => 
    array(
       'classID' => '5406',
       'className' => 'ANT-101 CULTURAL ANTHROPOLOGY',
    ),
    40 => 
    array(
       'classID' => '5407',
       'className' => 'ARCH-155 MODES OF DESIGN COMM I',
    ),
    41 => 
    array(
       'classID' => '5408',
       'className' => 'ARCH-155 MODES OF DESIGN COMM I - HONORS',
    ),
    42 => 
    array(
       'classID' => '5409',
       'className' => 'ARCH-156 MODES OF DESIGN COMMUNICATION I',
    ),
    43 => 
    array(
       'classID' => '5410',
       'className' => 'ARCH-156 TOOLS AND TECHNIQUES',
    ),
    44 => 
    array(
       'classID' => '5411',
       'className' => 'ARCH-161 INTRO DESIGN AND DIGITAL MEDIA',
    ),
    45 => 
    array(
       'classID' => '5412',
       'className' => 'ARCH-161 INTRO TO DESIGN AND DIGITAL MED',
    ),
    46 => 
    array(
       'classID' => '5413',
       'className' => 'ARCH-163 INTRO TO DESIGN I',
    ),
    47 => 
    array(
       'classID' => '5414',
       'className' => 'ARCH-163 INTRO TO DESIGN I HONORS',
    ),
    48 => 
    array(
       'classID' => '5415',
       'className' => 'ARCH-164 INTRO TO DESIGN II',
    ),
    49 => 
    array(
       'classID' => '5416',
       'className' => 'ARCH-164 INTRO TO DESIGN II - HONORS',
    ),
    50 => 
    array(
       'classID' => '5417',
       'className' => 'ARCH-223 CONSTRUCTION I',
    ),
    51 => 
    array(
       'classID' => '5418',
       'className' => 'ARCH-223 CONSTRUTION I',
    ),
    52 => 
    array(
       'classID' => '5419',
       'className' => 'ARCH-227 ENVRMNTAL CONTROL SYSTEMS I',
    ),
    53 => 
    array(
       'classID' => '5420',
       'className' => 'ARCH-229 STRUCTURES I',
    ),
    54 => 
    array(
       'classID' => '5421',
       'className' => 'ARCH-251 HISTORY OF ARCH I',
    ),
    55 => 
    array(
       'classID' => '5422',
       'className' => 'ARCH-251 HISTORY OF ARCHITECTURE I',
    ),
    56 => 
    array(
       'classID' => '5423',
       'className' => 'ARCH-252 HISTORY OF ARCH II',
    ),
    57 => 
    array(
       'classID' => '5424',
       'className' => 'ARCH-263 ARCHITECTURE STUDIO I',
    ),
    58 => 
    array(
       'classID' => '5425',
       'className' => 'ARCH-264 ARCHITECTURE STUDIO II',
    ),
    59 => 
    array(
       'classID' => '5426',
       'className' => 'ARCH-282 STRUCTURAL PRINCIPLES',
    ),
    60 => 
    array(
       'classID' => '5427',
       'className' => 'ARCH-301 DIGITAL MODELING & FABRICATION',
    ),
    61 => 
    array(
       'classID' => '5428',
       'className' => 'ARCH-310 CO-OP WORK EXPERIENCE I',
    ),
    62 => 
    array(
       'classID' => '5429',
       'className' => 'ARCH-312 ENVRNMNTL EDUCATION I',
    ),
    63 => 
    array(
       'classID' => '5430',
       'className' => 'ARCH-317 ADVANCED ARCH GRAPHICS',
    ),
    64 => 
    array(
       'classID' => '5431',
       'className' => 'ARCH-323 CONSTRUCTION II',
    ),
    65 => 
    array(
       'classID' => '5432',
       'className' => 'ARCH-327 ENVIRON CONTROL SYSTEMS II',
    ),
    66 => 
    array(
       'classID' => '5433',
       'className' => 'ARCH-327 ENVIRONMENTAL CONTROL SYSTEMS I',
    ),
    67 => 
    array(
       'classID' => '5434',
       'className' => 'ARCH-329 STRUCTURES II',
    ),
    68 => 
    array(
       'classID' => '5435',
       'className' => 'ARCH-331 LANDSCAPE ARCHITECTURE',
    ),
    69 => 
    array(
       'classID' => '5436',
       'className' => 'ARCH-333 ARCH: IMAGE & WORD II',
    ),
    70 => 
    array(
       'classID' => '5437',
       'className' => 'ARCH-337 BLDG INFO MODELING',
    ),
    71 => 
    array(
       'classID' => '5438',
       'className' => 'ARCH-337 BUILDING INFORMATION MODELING',
    ),
    72 => 
    array(
       'classID' => '5439',
       'className' => 'ARCH-361 PROJECT BASED SEMINAR I',
    ),
    73 => 
    array(
       'classID' => '5440',
       'className' => 'ARCH-363 ARCHITECTURE STUDIO III',
    ),
    74 => 
    array(
       'classID' => '5441',
       'className' => 'ARCH-364 ARCHITECTURE STUDIO IV',
    ),
    75 => 
    array(
       'classID' => '5442',
       'className' => 'ARCH-381 HISTORY OF ARCH III',
    ),
    76 => 
    array(
       'classID' => '5443',
       'className' => 'ARCH-381 HISTORY OF ARCHITECTURE III',
    ),
    77 => 
    array(
       'classID' => '5444',
       'className' => 'ARCH-382 HISTORY OF ARCHITECTURE IV',
    ),
    78 => 
    array(
       'classID' => '5445',
       'className' => 'ARCH-382 HISTORY OF ARCH IV',
    ),
    79 => 
    array(
       'classID' => '5446',
       'className' => 'ARCH-408 ADV LANDSCAPE ARCH',
    ),
    80 => 
    array(
       'classID' => '5447',
       'className' => 'ARCH-408 ADV LANDSCAPE ARCHITECTURE',
    ),
    81 => 
    array(
       'classID' => '5448',
       'className' => 'ARCH-410 CO-OP WORK EXPERIENCE II',
    ),
    82 => 
    array(
       'classID' => '5449',
       'className' => 'ARCH-419 ARCHITECTURE PHOTOGRAPHY',
    ),
    83 => 
    array(
       'classID' => '5450',
       'className' => 'ARCH-419 ARCH PHOTOGRAPHY',
    ),
    84 => 
    array(
       'classID' => '5451',
       'className' => 'ARCH-423 CONSTRUCTION III',
    ),
    85 => 
    array(
       'classID' => '5452',
       'className' => 'ARCH-429 STRUCTURES III',
    ),
    86 => 
    array(
       'classID' => '5453',
       'className' => 'ARCH-434 SIMULATED ENVIRONMENTS',
    ),
    87 => 
    array(
       'classID' => '5454',
       'className' => 'ARCH-461 PROJECT BASED SEMINAR II',
    ),
    88 => 
    array(
       'classID' => '5455',
       'className' => 'ARCH-463 OPTIONS STUDIO I',
    ),
    89 => 
    array(
       'classID' => '5456',
       'className' => 'ARCH-464 OPTIONS STUDIO II',
    ),
    90 => 
    array(
       'classID' => '5457',
       'className' => 'ARCH-472 PROGRAMMING & PROJ DEVELPMNT',
    ),
    91 => 
    array(
       'classID' => '5458',
       'className' => 'ARCH-483 HONORS SEMINAR-METHODOLOGY OF A',
    ),
    92 => 
    array(
       'classID' => '5459',
       'className' => 'ARCH-483 ST:REUSE AND RENEWAL',
    ),
    93 => 
    array(
       'classID' => '5460',
       'className' => 'ARCH-491 INDEPENDENT STUDY',
    ),
    94 => 
    array(
       'classID' => '5461',
       'className' => 'ARCH-493 INDEPENDENT STUDY',
    ),
    95 => 
    array(
       'classID' => '5462',
       'className' => 'ARCH-534 HISTORY ARCH TECHNOLOGY',
    ),
    96 => 
    array(
       'classID' => '5463',
       'className' => 'ARCH-536 LANDSCAPE & AMERICAN CULTURE',
    ),
    97 => 
    array(
       'classID' => '5464',
       'className' => 'ARCH-536 LANDSCAPE AND THE AMERICAN CULT',
    ),
    98 => 
    array(
       'classID' => '5465',
       'className' => 'ARCH-538 SUSTAINABLE ARCHITECTURE',
    ),
    99 => 
    array(
       'classID' => '5466',
       'className' => 'ARCH-543 LIGHTING',
    ),
    100 => 
    array(
       'classID' => '5467',
       'className' => 'ARCH-546 DESIGNING AND OPTIMIZING THE BU',
    ),
    101 => 
    array(
       'classID' => '5468',
       'className' => 'ARCH-546 DSGN & OPTMZNG BLD ENCL',
    ),
    102 => 
    array(
       'classID' => '5469',
       'className' => 'ARCH-547 TOPICS IN COMP APPLIC',
    ),
    103 => 
    array(
       'classID' => '5470',
       'className' => 'ARCH-558 PROF ARCH PRACTICE',
    ),
    104 => 
    array(
       'classID' => '5471',
       'className' => 'ARCH-563 OPTIONS STUDIO III',
    ),
    105 => 
    array(
       'classID' => '5472',
       'className' => 'ARCH-563 PRE-COMPREHENSIVE STUDIO',
    ),
    106 => 
    array(
       'classID' => '5473',
       'className' => 'ARCH-564 COMPREHENSIVE STUDIO',
    ),
    107 => 
    array(
       'classID' => '5474',
       'className' => 'ARCH-564 INTEGRATED DESIGN STUDIO',
    ),
    108 => 
    array(
       'classID' => '5475',
       'className' => 'ARCH-565 ADVANCED ARCH DESIGN SEMINAR',
    ),
    109 => 
    array(
       'classID' => '5476',
       'className' => 'ARCH-565 COMPREHENSIVE STUDIO LAB',
    ),
    110 => 
    array(
       'classID' => '5477',
       'className' => 'ARCH-566 ADV ARCH DESIGN STUDIO',
    ),
    111 => 
    array(
       'classID' => '5478',
       'className' => 'ARCH-573 TECH FOR COMMN & URB DGN',
    ),
    112 => 
    array(
       'classID' => '5479',
       'className' => 'ARCH-574 CASE STDS COMM URBAN DGN',
    ),
    113 => 
    array(
       'classID' => '5480',
       'className' => 'ARCH-583 ST:ADAPTIVE MATTER-PROTOTYPING ',
    ),
    114 => 
    array(
       'classID' => '5481',
       'className' => 'ARCH-583 ST: ANALYSIS OF SELECTED URBAN ',
    ),
    115 => 
    array(
       'classID' => '5482',
       'className' => 'ARCH-583 ST:ANALYSIS OF SELECTED URBAN F',
    ),
    116 => 
    array(
       'classID' => '5483',
       'className' => 'ARCH-583 ST: ARCHITECTURE DESIGN: PEDAGO',
    ),
    117 => 
    array(
       'classID' => '5484',
       'className' => 'ARCH-583 ST: CINEMA AND THE CITY',
    ),
    118 => 
    array(
       'classID' => '5485',
       'className' => 'ARCH-583 ST:DESIGNING FOR SMART FUTURES',
    ),
    119 => 
    array(
       'classID' => '5486',
       'className' => 'ARCH-583 ST: DRAWING, THINKING, SEEING',
    ),
    120 => 
    array(
       'classID' => '5487',
       'className' => 'ARCH-583 ST:INNOVATION IN ARCHITECTURE',
    ),
    121 => 
    array(
       'classID' => '5488',
       'className' => 'ARCH-583 ST: INTRO TO SCRIPTING FOR DESI',
    ),
    122 => 
    array(
       'classID' => '5489',
       'className' => 'ARCH-583 ST:INTRO TO SCRIPTING FOR DESIG',
    ),
    123 => 
    array(
       'classID' => '5490',
       'className' => 'ARCH-583 ST: INVENTION AND INNOVATION TH',
    ),
    124 => 
    array(
       'classID' => '5491',
       'className' => 'ARCH-583 ST:KICKSTARTING THE EVOLUTION O',
    ),
    125 => 
    array(
       'classID' => '5492',
       'className' => 'ARCH-583 ST: MATERIAL SYSTEMS FOR DESIGN',
    ),
    126 => 
    array(
       'classID' => '5493',
       'className' => 'ARCH-583 ST: PHILOSOPHY OF TECHNOLOGY',
    ),
    127 => 
    array(
       'classID' => '5494',
       'className' => 'ARCH-583 ST: PRE-THESIS',
    ),
    128 => 
    array(
       'classID' => '5495',
       'className' => 'ARCH-583 ST:PRE-THESIS',
    ),
    129 => 
    array(
       'classID' => '5496',
       'className' => 'ARCH-583 ST: SURVEY OF CONTEMPORARY DESI',
    ),
    130 => 
    array(
       'classID' => '5497',
       'className' => 'ARCH-583 ST: SUSTAINABILITY ELECTIVE FOR',
    ),
    131 => 
    array(
       'classID' => '5498',
       'className' => 'ARCH-583 ST: THE EVOLVING VERTICAL SURFA',
    ),
    132 => 
    array(
       'classID' => '5499',
       'className' => 'ARCH-591 INDEPENDENT STUDY',
    ),
    133 => 
    array(
       'classID' => '5500',
       'className' => 'ARCH-592 INDEPENDENT STUDY',
    ),
    134 => 
    array(
       'classID' => '5501',
       'className' => 'ARCH-593 INDEPENDENT STUDY',
    ),
    135 => 
    array(
       'classID' => '5502',
       'className' => 'ARCH-619 ARCHITECTURL PHOTOGRAPHY',
    ),
    136 => 
    array(
       'classID' => '5503',
       'className' => 'ARCH-630 METH ARCH HIST THRY CRIT',
    ),
    137 => 
    array(
       'classID' => '5504',
       'className' => 'ARCH-630 METHODOLOGY OF ARCHITECTURE HIS',
    ),
    138 => 
    array(
       'classID' => '5505',
       'className' => 'ARCH-643 LIGHTING',
    ),
    139 => 
    array(
       'classID' => '5506',
       'className' => 'ARCH-660 DIRECT STUDY IN ARCH II',
    ),
    140 => 
    array(
       'classID' => '5507',
       'className' => 'ARCH-661 DIRECTED STUDIES IN ARCH',
    ),
    141 => 
    array(
       'classID' => '5508',
       'className' => 'ARCH-662 ADV DIGITAL MODELING AND FABRIC',
    ),
    142 => 
    array(
       'classID' => '5509',
       'className' => 'ARCH-662 ST: ADVANCED LANDSCAPE ARCH',
    ),
    143 => 
    array(
       'classID' => '5510',
       'className' => 'ARCH-662 ST:ADV DIGITAL MODELING AND FAB',
    ),
    144 => 
    array(
       'classID' => '5511',
       'className' => 'ARCH-662 ST: ADV GRAPHICS',
    ),
    145 => 
    array(
       'classID' => '5512',
       'className' => 'ARCH-662 ST: ASPECTS URBAN FORM',
    ),
    146 => 
    array(
       'classID' => '5513',
       'className' => 'ARCH-662 ST: DIGITAL MODELING AND FABRIC',
    ),
    147 => 
    array(
       'classID' => '5514',
       'className' => 'ARCH-662 ST:ENVIRONMENTAL POLICY STUDIES',
    ),
    148 => 
    array(
       'classID' => '5515',
       'className' => 'ARCH-662 ST: METHODS OF URBAN HISTORY',
    ),
    149 => 
    array(
       'classID' => '5516',
       'className' => 'ARCH-662 ST: POLITICS AND PUBLIC SPACE',
    ),
    150 => 
    array(
       'classID' => '5517',
       'className' => 'ARCH-662 ST: REDISCOVERING THE WATERFRON',
    ),
    151 => 
    array(
       'classID' => '5518',
       'className' => 'ARCH-662 ST:THE STREET:DESIGNED, LIVED, ',
    ),
    152 => 
    array(
       'classID' => '5519',
       'className' => 'ARCH-662 ST: THE URBAN SQUARE',
    ),
    153 => 
    array(
       'classID' => '5520',
       'className' => 'ARCH-672 ARCHITECTURE & SOCIAL CHANGE',
    ),
    154 => 
    array(
       'classID' => '5521',
       'className' => 'ARCH-672 ARCH & SOCIAL CHANGES',
    ),
    155 => 
    array(
       'classID' => '5522',
       'className' => 'ARCH-680 CO-OP WORK EXPERIENCE',
    ),
    156 => 
    array(
       'classID' => '5523',
       'className' => 'ARCH-681 CO-OP WORK EXPERIENCE',
    ),
    157 => 
    array(
       'classID' => '5524',
       'className' => 'ARCH-682 CO-OP WORK EXPERIENCE III',
    ),
    158 => 
    array(
       'classID' => '5525',
       'className' => 'ARCH-683 GRADUATE COOP WORK EXPER IV',
    ),
    159 => 
    array(
       'classID' => '5526',
       'className' => 'ARCH-686 RES METH FOR ENVIRN DSGN',
    ),
    160 => 
    array(
       'classID' => '5527',
       'className' => 'ART-100 ART APPRECIATION',
    ),
    161 => 
    array(
       'classID' => '5528',
       'className' => 'ART-111 FUNDAMENTALS OF PAINTING I',
    ),
    162 => 
    array(
       'classID' => '5529',
       'className' => 'AS-111 FOUNDATION OF THE US AIR FORCE',
    ),
    163 => 
    array(
       'classID' => '5530',
       'className' => 'AS-112 THE AIR FORCE TODAY II',
    ),
    164 => 
    array(
       'classID' => '5531',
       'className' => 'AS-221 EVOL OF USAF AIR & SPACE POWER',
    ),
    165 => 
    array(
       'classID' => '5532',
       'className' => 'AS-222 AIR PWR KEY TO DETEREENCE',
    ),
    166 => 
    array(
       'classID' => '5533',
       'className' => 'AS-333 LEADERSHIP AND MANAGEMENT I',
    ),
    167 => 
    array(
       'classID' => '5534',
       'className' => 'AS-334 LEADERSHIP-MANAGEMENT II',
    ),
    168 => 
    array(
       'classID' => '5535',
       'className' => 'AS-335 LEADERSHIP LAB',
    ),
    169 => 
    array(
       'classID' => '5536',
       'className' => 'AS-336 POC LEADERSHIP LAB',
    ),
    170 => 
    array(
       'classID' => '5537',
       'className' => 'AS-401 AEROPSACE INDEPENDENT STUDY',
    ),
    171 => 
    array(
       'classID' => '5538',
       'className' => 'AS-443 NATL SECURITY AFFAIRS/PREP ACT',
    ),
    172 => 
    array(
       'classID' => '5539',
       'className' => 'AS-444 PREP FOR ACTIVE DUTY',
    ),
    173 => 
    array(
       'classID' => '5540',
       'className' => 'BIO-100 FOUND OF BIOLOGY I',
    ),
    174 => 
    array(
       'classID' => '5541',
       'className' => 'BIO-101 COLLEGE BIOLOGY I',
    ),
    175 => 
    array(
       'classID' => '5542',
       'className' => 'BIO-102 COLLEGE BIOLOGY II',
    ),
    176 => 
    array(
       'classID' => '5543',
       'className' => 'BIO-104 GENERAL BIOLOGY',
    ),
    177 => 
    array(
       'classID' => '5544',
       'className' => 'BIO-121 ANATOMY & PHYSIOLOGY I',
    ),
    178 => 
    array(
       'classID' => '5545',
       'className' => 'BIO-122 ANATOMY & PHYSIOLOGY II',
    ),
    179 => 
    array(
       'classID' => '5546',
       'className' => 'BIOL-200 CONCEPTS IN BIOLOGY',
    ),
    180 => 
    array(
       'classID' => '5547',
       'className' => 'BIOL-200 CONCEPTS IN BIOLOGY - HONORS',
    ),
    181 => 
    array(
       'classID' => '5548',
       'className' => 'BIOL-205 FOUND OF BIO:ECOL & EVOL I',
    ),
    182 => 
    array(
       'classID' => '5549',
       'className' => 'BIOL-205 FOUND OF BIO:ECOL & EVOL I - HO',
    ),
    183 => 
    array(
       'classID' => '5550',
       'className' => 'BIOL-205 FOUND OF BIOL:ECOL & EVOL I-HON',
    ),
    184 => 
    array(
       'classID' => '5551',
       'className' => 'BIOL-206 FOUND OF BIO:ECOL & EVOL LAB',
    ),
    185 => 
    array(
       'classID' => '5552',
       'className' => 'BIOL-222 EVOLUTION',
    ),
    186 => 
    array(
       'classID' => '5553',
       'className' => 'BIOL-285 COMPARATIVE VERTEBRATE ANATOMY',
    ),
    187 => 
    array(
       'classID' => '5554',
       'className' => 'BIOL-310 WORK EXPERIENCE I',
    ),
    188 => 
    array(
       'classID' => '5555',
       'className' => 'BIOL-315 PRINCIPLES OF NEUROBIOLOGY',
    ),
    189 => 
    array(
       'classID' => '5556',
       'className' => 'BIOL-320 DISCOVERING BIOLOGICAL RESEARCH',
    ),
    190 => 
    array(
       'classID' => '5557',
       'className' => 'BIOL-320 DISCOVERING BIOL RESEARCH',
    ),
    191 => 
    array(
       'classID' => '5558',
       'className' => 'BIOL-321 COMPARATIVE VERTEBRATE',
    ),
    192 => 
    array(
       'classID' => '5559',
       'className' => 'BIOL-337 COLLECTIVE INTEL IN BIOL SYST',
    ),
    193 => 
    array(
       'classID' => '5560',
       'className' => 'BIOL-338 ECOLOGY OF DINING HALL',
    ),
    194 => 
    array(
       'classID' => '5561',
       'className' => 'BIOL-340 MAMMALIAN PHYSIOLOGY',
    ),
    195 => 
    array(
       'classID' => '5562',
       'className' => 'BIOL-341 INTRO TO NEUROPHYSIOLOGY',
    ),
    196 => 
    array(
       'classID' => '5563',
       'className' => 'BIOL-344 PHYSIOLOGICAL MECHANISMS',
    ),
    197 => 
    array(
       'classID' => '5564',
       'className' => 'BIOL-345 COMPARATIVE PHYSIOLOGY',
    ),
    198 => 
    array(
       'classID' => '5565',
       'className' => 'BIOL-350 IMMUNOLOGY',
    ),
    199 => 
    array(
       'classID' => '5566',
       'className' => 'BIOL-368 ECOLOGY & EVOLUTION OF DISEASE',
    ),
    200 => 
    array(
       'classID' => '5567',
       'className' => 'BIOL-375 CONSERVATION BIOLOGY',
    ),
    201 => 
    array(
       'classID' => '5568',
       'className' => 'BIOL-375 CONSERVATION BIOLOGY - HONORS',
    ),
    202 => 
    array(
       'classID' => '5569',
       'className' => 'BIOL-383 NEURAL BASIS OF BEHAVIOR',
    ),
    203 => 
    array(
       'classID' => '5570',
       'className' => 'BIOL-383 NEURAL BASIS OF BEHAVIOR - HONO',
    ),
    204 => 
    array(
       'classID' => '5571',
       'className' => 'BIOL-385 EVOL OF ANIMAL BEHAVIOR LAB - H',
    ),
    205 => 
    array(
       'classID' => '5572',
       'className' => 'BIOL-398 VISUALIZING BIOLOGY',
    ),
    206 => 
    array(
       'classID' => '5573',
       'className' => 'BIOL-400 BIOLOGY IN SCIENCE FICTION',
    ),
    207 => 
    array(
       'classID' => '5574',
       'className' => 'BIOL-410 WORK EXPERIENCE II',
    ),
    208 => 
    array(
       'classID' => '5575',
       'className' => 'BIOL-440 CELL BIOLOGY OF DISEASE - HONOR',
    ),
    209 => 
    array(
       'classID' => '5576',
       'className' => 'BIOL-447 SYSTEMS NEUROBIOLOGY',
    ),
    210 => 
    array(
       'classID' => '5577',
       'className' => 'BIOL-447 SYSTEMS NEUROBIOLOGY - HONORS',
    ),
    211 => 
    array(
       'classID' => '5578',
       'className' => 'BIOL-448 NEUROPATHOPHYSIOLOGY - HONORS',
    ),
    212 => 
    array(
       'classID' => '5579',
       'className' => 'BIOL-462 COMPARATIVE BIOMECHANICS',
    ),
    213 => 
    array(
       'classID' => '5580',
       'className' => 'BIOL-475 ECOLOGICAL FIELD METHODS - HONO',
    ),
    214 => 
    array(
       'classID' => '5581',
       'className' => 'BIOL-475 ECOLOGICAL FIELD METHODS-HONORS',
    ),
    215 => 
    array(
       'classID' => '5582',
       'className' => 'BIOL-491 SENIOR PROJECT',
    ),
    216 => 
    array(
       'classID' => '5583',
       'className' => 'BIOL-492 RESEARCH & INDEPENDENT STUDY',
    ),
    217 => 
    array(
       'classID' => '5584',
       'className' => 'BIOL-495 HONORS SEMINAR IN BIOLOGY',
    ),
    218 => 
    array(
       'classID' => '5585',
       'className' => 'BIOL-495 SEMINAR IN BIOL - HONORS',
    ),
    219 => 
    array(
       'classID' => '5586',
       'className' => 'BIOL-590 GRAD COOP WORK EXPERIENCE I',
    ),
    220 => 
    array(
       'classID' => '5587',
       'className' => 'BIOL-591 GRADUATE COOP WORK EXPER II',
    ),
    221 => 
    array(
       'classID' => '5588',
       'className' => 'BIOL-630 CRITICAL THINKING FOR LIFE SCI',
    ),
    222 => 
    array(
       'classID' => '5589',
       'className' => 'BIOL-638 COMPUTATIONAL ECOLOGY',
    ),
    223 => 
    array(
       'classID' => '5590',
       'className' => 'BIOL-641 SYSTEMS NEUROSCIENCE',
    ),
    224 => 
    array(
       'classID' => '5591',
       'className' => 'BIOL-660 COLLEGE TEACHING',
    ),
    225 => 
    array(
       'classID' => '5592',
       'className' => 'BIOL-698 ST:',
    ),
    226 => 
    array(
       'classID' => '5593',
       'className' => 'BIOL-698 ST:ADVANCED IMAGING TECHNIQUES',
    ),
    227 => 
    array(
       'classID' => '5594',
       'className' => 'BIOL-698 ST: BIO - INSPIRED ROBOTICS',
    ),
    228 => 
    array(
       'classID' => '5595',
       'className' => 'BIOL-698 ST: BREAKTHROUGHS',
    ),
    229 => 
    array(
       'classID' => '5596',
       'className' => 'BIOL-698 ST: DEPARTMENT RESEARCH IN ECOL',
    ),
    230 => 
    array(
       'classID' => '5597',
       'className' => 'BIOL-698 ST: NEUROPHYSIOLOGY',
    ),
    231 => 
    array(
       'classID' => '5598',
       'className' => 'BIOL-725 INDEPENDENT STUDY',
    ),
    232 => 
    array(
       'classID' => '5599',
       'className' => 'BIOL-726 INDEPENDENT STUDY',
    ),
    233 => 
    array(
       'classID' => '5600',
       'className' => 'BIOL-791 BIOLOGY SEMINAR',
    ),
    234 => 
    array(
       'classID' => '5601',
       'className' => 'BME-101 INTRO TO BIOMED ENGR',
    ),
    235 => 
    array(
       'classID' => '5602',
       'className' => 'BME-102 BIOMEDICAL ENGR RESEARCH',
    ),
    236 => 
    array(
       'classID' => '5603',
       'className' => 'BME-111 INTRODUCTION TO PHYSIOLOGY',
    ),
    237 => 
    array(
       'classID' => '5604',
       'className' => 'BME-301 INTRO BIOMED ENGINEERING I - HON',
    ),
    238 => 
    array(
       'classID' => '5605',
       'className' => 'BME-301 INTRO BIOMEDICAL ENGINEERING I',
    ),
    239 => 
    array(
       'classID' => '5606',
       'className' => 'BME-302 INTRO BIOMED ENGR II',
    ),
    240 => 
    array(
       'classID' => '5607',
       'className' => 'BME-302 INTRO TO BIOMED ENGR II - HONORS',
    ),
    241 => 
    array(
       'classID' => '5608',
       'className' => 'BME-303 BIO & CHEMICAL FOUND OF BME',
    ),
    242 => 
    array(
       'classID' => '5609',
       'className' => 'BME-304 MATERIAL FUNDAMENTALS OF BME',
    ),
    243 => 
    array(
       'classID' => '5610',
       'className' => 'BME-310 BIOMEDICAL COMPUTING',
    ),
    244 => 
    array(
       'classID' => '5611',
       'className' => 'BME-311 COOP WORK EXPERIENCE I',
    ),
    245 => 
    array(
       'classID' => '5612',
       'className' => 'BME-321 ADV MECHANICS FOR BIOMED ENGR',
    ),
    246 => 
    array(
       'classID' => '5613',
       'className' => 'BME-333 BIOMEDICAL SIGNALS AND SYSTEMS',
    ),
    247 => 
    array(
       'classID' => '5614',
       'className' => 'BME-351 INTRO TO BIOFLUID MECHANICS',
    ),
    248 => 
    array(
       'classID' => '5615',
       'className' => 'BME-372 BIOMEDICAL ELECTRONICS I',
    ),
    249 => 
    array(
       'classID' => '5616',
       'className' => 'BME-373 BIOMEDICAL ELECTRONICS II',
    ),
    250 => 
    array(
       'classID' => '5617',
       'className' => 'BME-382 ENGINEERING PHYSIOLOGY II',
    ),
    251 => 
    array(
       'classID' => '5618',
       'className' => 'BME-383 MEASUREMNT LAB FOR PHYSIO SYS',
    ),
    252 => 
    array(
       'classID' => '5619',
       'className' => 'BME-384 BIOMECHANICAL ENGINEERING LAB',
    ),
    253 => 
    array(
       'classID' => '5620',
       'className' => 'BME-385 CELL & BIOMATERIAL ENGR LAB',
    ),
    254 => 
    array(
       'classID' => '5621',
       'className' => 'BME-386 BIOINSTRUMENTATION LABORATORY',
    ),
    255 => 
    array(
       'classID' => '5622',
       'className' => 'BME-411 COOP WORK EXPERIENCE II',
    ),
    256 => 
    array(
       'classID' => '5623',
       'className' => 'BME-420 ADV BIOMATERIALS SCIENCE',
    ),
    257 => 
    array(
       'classID' => '5624',
       'className' => 'BME-422 BIOMATERIALS CHARACTERIZATION',
    ),
    258 => 
    array(
       'classID' => '5625',
       'className' => 'BME-427 BIOTRANSPORT',
    ),
    259 => 
    array(
       'classID' => '5626',
       'className' => 'BME-430 FUND OF TISSUE ENGINEERING',
    ),
    260 => 
    array(
       'classID' => '5627',
       'className' => 'BME-451 BIOMECHANICS I',
    ),
    261 => 
    array(
       'classID' => '5628',
       'className' => 'BME-452 MECH BEHAV&PERF OF BIOMATERIAL',
    ),
    262 => 
    array(
       'classID' => '5629',
       'className' => 'BME-478 INTRO TO CAD FOR BIOMECHANICS',
    ),
    263 => 
    array(
       'classID' => '5630',
       'className' => 'BME-489 MEDICAL INSTRUMENTATION',
    ),
    264 => 
    array(
       'classID' => '5631',
       'className' => 'BME-491 RESEARCH & INDEPENDENT STUDY I',
    ),
    265 => 
    array(
       'classID' => '5632',
       'className' => 'BME-492 RESEARCH & INDPNDNT STUDY II',
    ),
    266 => 
    array(
       'classID' => '5633',
       'className' => 'BME-493 HONORS RESEARCH THESIS I',
    ),
    267 => 
    array(
       'classID' => '5634',
       'className' => 'BME-494 HONORS RESEARCH THESIS II',
    ),
    268 => 
    array(
       'classID' => '5635',
       'className' => 'BME-495 CAPSTONE DESIGN I - HONORS',
    ),
    269 => 
    array(
       'classID' => '5636',
       'className' => 'BME-495 CAPSTONE I',
    ),
    270 => 
    array(
       'classID' => '5637',
       'className' => 'BME-496 CAPSTONE DESIGN II',
    ),
    271 => 
    array(
       'classID' => '5638',
       'className' => 'BME-496 CAPSTONE DESIGN II - HONORS',
    ),
    272 => 
    array(
       'classID' => '5639',
       'className' => 'BME-498 BIOMEDICAL SIGNAL PROCESSING',
    ),
    273 => 
    array(
       'classID' => '5640',
       'className' => 'BME-498 ST:',
    ),
    274 => 
    array(
       'classID' => '5641',
       'className' => 'BME-498 ST:BIOMECHATRONICS',
    ),
    275 => 
    array(
       'classID' => '5642',
       'className' => 'BME-590 GRADUATE CO-OP WORK EXPER I',
    ),
    276 => 
    array(
       'classID' => '5643',
       'className' => 'BME-592 GRADUATE CO-OP WORK EXPER III',
    ),
    277 => 
    array(
       'classID' => '5644',
       'className' => 'BME-593 GRADUATE CO-OP WORK EXP IV',
    ),
    278 => 
    array(
       'classID' => '5645',
       'className' => 'BME-601 SEMINAR BIOMEDICAL ENGR',
    ),
    279 => 
    array(
       'classID' => '5646',
       'className' => 'BME-611 ENG ASPECTS MOLEC & CELL BIO I',
    ),
    280 => 
    array(
       'classID' => '5647',
       'className' => 'BME-651 PRINCPL OF TISSUE ENGINEERING',
    ),
    281 => 
    array(
       'classID' => '5648',
       'className' => 'BME-652 CELL & MOLECULAR TISSUE ENGR',
    ),
    282 => 
    array(
       'classID' => '5649',
       'className' => 'BME-653 MICRO/NANO TECH INTERFAC CELLS',
    ),
    283 => 
    array(
       'classID' => '5650',
       'className' => 'BME-654 CARDIOVASCULAR MECHANICS',
    ),
    284 => 
    array(
       'classID' => '5651',
       'className' => 'BME-655 ADV CHARACTER BIOMATERIALS',
    ),
    285 => 
    array(
       'classID' => '5652',
       'className' => 'BME-656 RESEARCH SKILLS IN STEM CELL',
    ),
    286 => 
    array(
       'classID' => '5653',
       'className' => 'BME-661 NEURAL ENGINEERING',
    ),
    287 => 
    array(
       'classID' => '5654',
       'className' => 'BME-668 MEDICAL IMAGING SYSTEMS',
    ),
    288 => 
    array(
       'classID' => '5655',
       'className' => 'BME-670 INTRO TO BIOMECH ENGR',
    ),
    289 => 
    array(
       'classID' => '5656',
       'className' => 'BME-671 BIOMECH OF HUM STR MOTN',
    ),
    290 => 
    array(
       'classID' => '5657',
       'className' => 'BME-672 BIOMATERIALS',
    ),
    291 => 
    array(
       'classID' => '5658',
       'className' => 'BME-673 BIOROBOTICS',
    ),
    292 => 
    array(
       'classID' => '5659',
       'className' => 'BME-674 PRINC OF NEUROMUSC ENGINEERING',
    ),
    293 => 
    array(
       'classID' => '5660',
       'className' => 'BME-675 COMPUTER METHODS IN BME',
    ),
    294 => 
    array(
       'classID' => '5661',
       'className' => 'BME-676 COMPUTATIONAL BIOMECHANICS',
    ),
    295 => 
    array(
       'classID' => '5662',
       'className' => 'BME-677 CAD FOR BIOMECH & BIOMATERIALS',
    ),
    296 => 
    array(
       'classID' => '5663',
       'className' => 'BME-678 DESIGN OF ORTHO IMPLANTS',
    ),
    297 => 
    array(
       'classID' => '5664',
       'className' => 'BME-679 ADV DESIGN OF ORTHO IMPLANTS',
    ),
    298 => 
    array(
       'classID' => '5665',
       'className' => 'BME-680 BIOMEMS DESIGN & APPLICATIONS',
    ),
    299 => 
    array(
       'classID' => '5666',
       'className' => 'BME-682 SYSTEM MGMT FOR MEDICAL DEVICE',
    ),
    300 => 
    array(
       'classID' => '5667',
       'className' => 'BME-684 MEDICAL DEVICE DEVELOPMENT',
    ),
    301 => 
    array(
       'classID' => '5668',
       'className' => 'BME-687 MEDICAL INSTRUMENTATION',
    ),
    302 => 
    array(
       'classID' => '5669',
       'className' => 'BME-688 VIRTUAL BIOMEDICAL INSTRUMENT',
    ),
    303 => 
    array(
       'classID' => '5670',
       'className' => 'BME-698 ST:',
    ),
    304 => 
    array(
       'classID' => '5671',
       'className' => 'BME-698 ST: ADVANCED MEDICAL DEVICE DEVE',
    ),
    305 => 
    array(
       'classID' => '5672',
       'className' => 'BME-698 ST:ADVANCED TOPICS IN COMPUTATIO',
    ),
    306 => 
    array(
       'classID' => '5673',
       'className' => 'BME-698 ST:ADV. VIRTUAL INSTRUMENTATION',
    ),
    307 => 
    array(
       'classID' => '5674',
       'className' => 'BME-698 ST: BIOREACTOR DESIGN AND APPLIC',
    ),
    308 => 
    array(
       'classID' => '5675',
       'className' => 'BME-698 ST:CLINICAL PHYSIOLOGY AND NEURO',
    ),
    309 => 
    array(
       'classID' => '5676',
       'className' => 'BME-698 ST: INJURY BIOMECHANICS',
    ),
    310 => 
    array(
       'classID' => '5677',
       'className' => 'BME-698 ST: MEDICAL DEVICE DEVELOPMENT',
    ),
    311 => 
    array(
       'classID' => '5678',
       'className' => 'BME-698 ST:MODELINGS IN FUNCTIONAL BRAIN',
    ),
    312 => 
    array(
       'classID' => '5679',
       'className' => 'BME-698 ST:ORTHOPEDIC MEDICAL DEVICES',
    ),
    313 => 
    array(
       'classID' => '5680',
       'className' => 'BME-698 ST: STEM CELL AND TISSUE ENGINEE',
    ),
    314 => 
    array(
       'classID' => '5681',
       'className' => 'BME-700B MASTER\'S PROJECT',
    ),
    315 => 
    array(
       'classID' => '5682',
       'className' => 'BME-701B MASTER\'S THESIS',
    ),
    316 => 
    array(
       'classID' => '5683',
       'className' => 'BME-701C MASTER\'S THESIS',
    ),
    317 => 
    array(
       'classID' => '5684',
       'className' => 'BME-725 INDEPENDENT STUDY',
    ),
    318 => 
    array(
       'classID' => '5685',
       'className' => 'BME-726 INDEPENDENT STUDY II',
    ),
    319 => 
    array(
       'classID' => '5686',
       'className' => 'BME-772 ADV BIOMATS FOR LAB AND CLINIC',
    ),
    320 => 
    array(
       'classID' => '5687',
       'className' => 'BME-788 ST:',
    ),
    321 => 
    array(
       'classID' => '5688',
       'className' => 'BME-790A DOCTORAL DISSERTATION',
    ),
    322 => 
    array(
       'classID' => '5689',
       'className' => 'BME-790B DOCTORAL DISSERTATION',
    ),
    323 => 
    array(
       'classID' => '5690',
       'className' => 'BME-790C DOCTORAL DISSERTATION',
    ),
    324 => 
    array(
       'classID' => '5691',
       'className' => 'BME-790D DOCTORAL DISSERTATION',
    ),
    325 => 
    array(
       'classID' => '5692',
       'className' => 'BME-790E DOCTORAL DISSERTATION',
    ),
    326 => 
    array(
       'classID' => '5693',
       'className' => 'BME-790F DOCT DISSERTATION & RESEARCH',
    ),
    327 => 
    array(
       'classID' => '5694',
       'className' => 'BME-791 GRADUATE SEMINAR',
    ),
    328 => 
    array(
       'classID' => '5695',
       'className' => 'BME-792 PRE-DOCTORAL RESEARCH',
    ),
    329 => 
    array(
       'classID' => '5696',
       'className' => 'BNFO-135 PROGRAMMING FOR BIOINFORMATICS',
    ),
    330 => 
    array(
       'classID' => '5697',
       'className' => 'BNFO-236 PROGRAMMING FOR BIOINFO II',
    ),
    331 => 
    array(
       'classID' => '5698',
       'className' => 'BNFO-488 INDEPENDENT STUDY',
    ),
    332 => 
    array(
       'classID' => '5699',
       'className' => 'BNFO-491 BIOINFORMATICS SENIOR PROJECT',
    ),
    333 => 
    array(
       'classID' => '5700',
       'className' => 'BNFO-601 FOUND BIOINFRMTC STRUCT BIOIN',
    ),
    334 => 
    array(
       'classID' => '5701',
       'className' => 'BNFO-602 FOUND BIOINFRMTCS COMPAR BIOIN',
    ),
    335 => 
    array(
       'classID' => '5702',
       'className' => 'BNFO-615 BIOINFRMTCS CENTRC DATA STRUC',
    ),
    336 => 
    array(
       'classID' => '5703',
       'className' => 'BNFO-644 DATA MINIG & MGMT IN BIOINFRMT',
    ),
    337 => 
    array(
       'classID' => '5704',
       'className' => 'BNFO-725 INDEPENDENT STUDY',
    ),
    338 => 
    array(
       'classID' => '5705',
       'className' => 'BNFO-726 INDEPENDENT STUDY II',
    ),
    339 => 
    array(
       'classID' => '5706',
       'className' => 'BUS-101 BUS ORGANIZATION & MGMT',
    ),
    340 => 
    array(
       'classID' => '5707',
       'className' => 'BUS-201 PRINC OF MANAGEMENT',
    ),
    341 => 
    array(
       'classID' => '5708',
       'className' => 'BUS-204 ORGANIZATIONAL BEHAVIOR',
    ),
    342 => 
    array(
       'classID' => '5709',
       'className' => 'BUS-211 PRINC OF MARKETING',
    ),
    343 => 
    array(
       'classID' => '5710',
       'className' => 'BUS-251 BUSINESS LAW I',
    ),
    344 => 
    array(
       'classID' => '5711',
       'className' => 'CE-101 CE COMPUTER AIDED DESIGN',
    ),
    345 => 
    array(
       'classID' => '5712',
       'className' => 'CE-200A SURVEYING LAB',
    ),
    346 => 
    array(
       'classID' => '5713',
       'className' => 'CE-200 SURVEYING',
    ),
    347 => 
    array(
       'classID' => '5714',
       'className' => 'CE-210 CONSTRN MATRLS & PROCDRS',
    ),
    348 => 
    array(
       'classID' => '5715',
       'className' => 'CE-260 CIVIL ENGINEERNG METHODS',
    ),
    349 => 
    array(
       'classID' => '5716',
       'className' => 'CE-307 GEOMETRC DGN FOR HIGHWAY',
    ),
    350 => 
    array(
       'classID' => '5717',
       'className' => 'CE-311 WORK EXPERIENCE I',
    ),
    351 => 
    array(
       'classID' => '5718',
       'className' => 'CE-320A HYDRAULICS LABORATORY',
    ),
    352 => 
    array(
       'classID' => '5719',
       'className' => 'CE-320 FLUID MECHANICS',
    ),
    353 => 
    array(
       'classID' => '5720',
       'className' => 'CE-321 WATER RESOURCES ENGR',
    ),
    354 => 
    array(
       'classID' => '5721',
       'className' => 'CE-322 HYDRAULIC ENGINEERING',
    ),
    355 => 
    array(
       'classID' => '5722',
       'className' => 'CE-332 STRUCTURAL ANALYSIS',
    ),
    356 => 
    array(
       'classID' => '5723',
       'className' => 'CE-333 REINFORCED CONCRETE DES',
    ),
    357 => 
    array(
       'classID' => '5724',
       'className' => 'CE-341A SOIL MECHANICS LAB',
    ),
    358 => 
    array(
       'classID' => '5725',
       'className' => 'CE-341 SOIL MECHANICS',
    ),
    359 => 
    array(
       'classID' => '5726',
       'className' => 'CE-342 GEOLOGY',
    ),
    360 => 
    array(
       'classID' => '5727',
       'className' => 'CE-350 TRANSPORTATION ENGR',
    ),
    361 => 
    array(
       'classID' => '5728',
       'className' => 'CE-351 INTRO TO TRANSPORTATION SYSTEM',
    ),
    362 => 
    array(
       'classID' => '5729',
       'className' => 'CE-410 CONSTR SCHEDLNG/ESTIMTNG',
    ),
    363 => 
    array(
       'classID' => '5730',
       'className' => 'CE-413 WORK EXPERIENCE II',
    ),
    364 => 
    array(
       'classID' => '5731',
       'className' => 'CE-414 ENGINEERED CONSTRUCTION',
    ),
    365 => 
    array(
       'classID' => '5732',
       'className' => 'CE-431 CONTRUCTION MATERIALS LAB',
    ),
    366 => 
    array(
       'classID' => '5733',
       'className' => 'CE-432 STRUCTURAL STEEL DESIGN',
    ),
    367 => 
    array(
       'classID' => '5734',
       'className' => 'CE-443 FOUNDATION DESIGN',
    ),
    368 => 
    array(
       'classID' => '5735',
       'className' => 'CE-450 URBAN PLANNING',
    ),
    369 => 
    array(
       'classID' => '5736',
       'className' => 'CE-465 GREEN & SUSTAINABLE CIVIL ENGR',
    ),
    370 => 
    array(
       'classID' => '5737',
       'className' => 'CE-490 CIVIL ENGR PROJECTS',
    ),
    371 => 
    array(
       'classID' => '5738',
       'className' => 'CE-491 RESEARCH EXPER-CIVIL ENGR',
    ),
    372 => 
    array(
       'classID' => '5739',
       'className' => 'CE-494 CIV ENGR DESIGN I-HONORS',
    ),
    373 => 
    array(
       'classID' => '5740',
       'className' => 'CE-494 CIVIL ENGR DESIGN I',
    ),
    374 => 
    array(
       'classID' => '5741',
       'className' => 'CE-494 CIVIL ENGR DESIGN I - HONORS',
    ),
    375 => 
    array(
       'classID' => '5742',
       'className' => 'CE-495 CIVIL ENGR DESIGN II',
    ),
    376 => 
    array(
       'classID' => '5743',
       'className' => 'CE-495 CIVIL ENGR DESIGN II HONORS',
    ),
    377 => 
    array(
       'classID' => '5744',
       'className' => 'CE-495 CIVIL ENGR DESIGN II - HONORS',
    ),
    378 => 
    array(
       'classID' => '5745',
       'className' => 'CE-502 CIVIL CONSTRUCTION METHODS',
    ),
    379 => 
    array(
       'classID' => '5746',
       'className' => 'CE-545 ROCK MECHANICS I',
    ),
    380 => 
    array(
       'classID' => '5747',
       'className' => 'CE-553 DES & CONST ASPHALT PAVE',
    ),
    381 => 
    array(
       'classID' => '5748',
       'className' => 'CE-590 COOP INDUSTRIAL EXPE I',
    ),
    382 => 
    array(
       'classID' => '5749',
       'className' => 'CE-591 COOP INDUSTRIAL EXPE II',
    ),
    383 => 
    array(
       'classID' => '5750',
       'className' => 'CE-592 GRADUATE CO-OP WORK EXPER III',
    ),
    384 => 
    array(
       'classID' => '5751',
       'className' => 'CE-593 GRADUATE CO-OP WORK EXP IV',
    ),
    385 => 
    array(
       'classID' => '5752',
       'className' => 'CE-610 CONSTRUCTION MGT',
    ),
    386 => 
    array(
       'classID' => '5753',
       'className' => 'CE-611 PROJ PLANNING & CONTROL',
    ),
    387 => 
    array(
       'classID' => '5754',
       'className' => 'CE-614 UNDERGROUND CONSTRUCTION',
    ),
    388 => 
    array(
       'classID' => '5755',
       'className' => 'CE-615 INFRASTRUCTURE & FAC REM',
    ),
    389 => 
    array(
       'classID' => '5756',
       'className' => 'CE-616 CONSTRUCTION COST ESTMT',
    ),
    390 => 
    array(
       'classID' => '5757',
       'className' => 'CE-618 APPLIED HYDROGEOLOGY',
    ),
    391 => 
    array(
       'classID' => '5758',
       'className' => 'CE-620 OPEN CHANNEL FLOW',
    ),
    392 => 
    array(
       'classID' => '5759',
       'className' => 'CE-621 HYDROLOGY',
    ),
    393 => 
    array(
       'classID' => '5760',
       'className' => 'CE-631 ADV REINFRCD CONCRTE DSN',
    ),
    394 => 
    array(
       'classID' => '5761',
       'className' => 'CE-632 PRESTRESSED CONCRETE DSN',
    ),
    395 => 
    array(
       'classID' => '5762',
       'className' => 'CE-634 STRUCTURAL DYNAMICS',
    ),
    396 => 
    array(
       'classID' => '5763',
       'className' => 'CE-636 STABILITY OF STRUCTURES',
    ),
    397 => 
    array(
       'classID' => '5764',
       'className' => 'CE-637 SHORT SPAN BRIDGE DESIGN',
    ),
    398 => 
    array(
       'classID' => '5765',
       'className' => 'CE-639 APPLIED FINITE ELEMENT METHODS',
    ),
    399 => 
    array(
       'classID' => '5766',
       'className' => 'CE-641 ENGR PROPERTIES OF SOIL',
    ),
    400 => 
    array(
       'classID' => '5767',
       'className' => 'CE-642 FOUNDATION ENGINEERING',
    ),
    401 => 
    array(
       'classID' => '5768',
       'className' => 'CE-643 ADV FOUNDATION ENGINEERG',
    ),
    402 => 
    array(
       'classID' => '5769',
       'className' => 'CE-644 GEOLOGY IN ENGR',
    ),
    403 => 
    array(
       'classID' => '5770',
       'className' => 'CE-645 ROCK MECHANICS II',
    ),
    404 => 
    array(
       'classID' => '5771',
       'className' => 'CE-647 GEOTECH OF SOLID WASTE',
    ),
    405 => 
    array(
       'classID' => '5772',
       'className' => 'CE-648 FLOW THROUGH SOILS',
    ),
    406 => 
    array(
       'classID' => '5773',
       'className' => 'CE-649 DESIGN & CONSTRUCTION OF CONCR',
    ),
    407 => 
    array(
       'classID' => '5774',
       'className' => 'CE-671 PERFORM & ANALYS INFRAST SYST',
    ),
    408 => 
    array(
       'classID' => '5775',
       'className' => 'CE-672 SECRTY MGMT CRITICAL INFRASTR',
    ),
    409 => 
    array(
       'classID' => '5776',
       'className' => 'CE-700B CIVIL ENGR PROJECT',
    ),
    410 => 
    array(
       'classID' => '5777',
       'className' => 'CE-701B MASTER\'S THESIS',
    ),
    411 => 
    array(
       'classID' => '5778',
       'className' => 'CE-701C MASTER\'S THESIS',
    ),
    412 => 
    array(
       'classID' => '5779',
       'className' => 'CE-702 SPECIAL TOPICS',
    ),
    413 => 
    array(
       'classID' => '5780',
       'className' => 'CE-702 ST:CONCRETE DURABILITY',
    ),
    414 => 
    array(
       'classID' => '5781',
       'className' => 'CE-711 METHODS IMPMNT IN CONSTR',
    ),
    415 => 
    array(
       'classID' => '5782',
       'className' => 'CE-725 INDEPENDENT RESEARCH I',
    ),
    416 => 
    array(
       'classID' => '5783',
       'className' => 'CE-726 INDEPENDENT RESEARCH II',
    ),
    417 => 
    array(
       'classID' => '5784',
       'className' => 'CE-727 INDEPENDENT RESEARCH III',
    ),
    418 => 
    array(
       'classID' => '5785',
       'className' => 'CE-737 EARTHQUAKE ENGINEERING',
    ),
    419 => 
    array(
       'classID' => '5786',
       'className' => 'CE-790A DOCT DISSERTATION & RES',
    ),
    420 => 
    array(
       'classID' => '5787',
       'className' => 'CE-790B DOCT DISSERTATION & RES',
    ),
    421 => 
    array(
       'classID' => '5788',
       'className' => 'CE-790C DOCT DISSERTATION & RES',
    ),
    422 => 
    array(
       'classID' => '5789',
       'className' => 'CE-790D DOCT DISSERTATION & RES',
    ),
    423 => 
    array(
       'classID' => '5790',
       'className' => 'CE-790E DOCT DISSERTATION & RES',
    ),
    424 => 
    array(
       'classID' => '5791',
       'className' => 'CE-790F DOCT DISSERTATION & RES',
    ),
    425 => 
    array(
       'classID' => '5792',
       'className' => 'CE-791 GRADUATE SEMINAR',
    ),
    426 => 
    array(
       'classID' => '5793',
       'className' => 'CE-792 PRE-DOCTORAL DISSERTATION',
    ),
    427 => 
    array(
       'classID' => '5794',
       'className' => 'CE-793B PROFESSIONAL PROJECT',
    ),
    428 => 
    array(
       'classID' => '5795',
       'className' => 'CET-231 STRUCTURES I',
    ),
    429 => 
    array(
       'classID' => '5796',
       'className' => 'CET-233 STRUCTURAL ANALYSIS IN CONST',
    ),
    430 => 
    array(
       'classID' => '5797',
       'className' => 'CET-313 CONSTRUCTION PROCEDURS I',
    ),
    431 => 
    array(
       'classID' => '5798',
       'className' => 'CET-314 CONSTRUCTN PROCEDURES II',
    ),
    432 => 
    array(
       'classID' => '5799',
       'className' => 'CET-317 CONSTRUCTION COMPUTING',
    ),
    433 => 
    array(
       'classID' => '5800',
       'className' => 'CET-322 CONSTRUCTN REGS & STANDA',
    ),
    434 => 
    array(
       'classID' => '5801',
       'className' => 'CET-323 CONSTRUCTION SAFETY',
    ),
    435 => 
    array(
       'classID' => '5802',
       'className' => 'CET-331 STRUCTURAL SYSTEMS',
    ),
    436 => 
    array(
       'classID' => '5803',
       'className' => 'CET-341 SOILS AND EARTHWORK',
    ),
    437 => 
    array(
       'classID' => '5804',
       'className' => 'CET-411 COST ESTIMATING',
    ),
    438 => 
    array(
       'classID' => '5805',
       'className' => 'CET-413 ENVIRONMENTAL SCIENCE',
    ),
    439 => 
    array(
       'classID' => '5806',
       'className' => 'CET-415 CONTRUCTN PROJ MANAGEMNT',
    ),
    440 => 
    array(
       'classID' => '5807',
       'className' => 'CET-416 SENIOR CONSTRUCTION PROJ',
    ),
    441 => 
    array(
       'classID' => '5808',
       'className' => 'CET-421 CONSTRUCTION CONTRACTS',
    ),
    442 => 
    array(
       'classID' => '5809',
       'className' => 'CET-431 CONSTRUCTION TESTING',
    ),
    443 => 
    array(
       'classID' => '5810',
       'className' => 'CET-435 DGN OF TEMPRY STRS CNSTN',
    ),
    444 => 
    array(
       'classID' => '5811',
       'className' => 'CET-460 FORENSICS IN CONSTRUCTION',
    ),
    445 => 
    array(
       'classID' => '5812',
       'className' => 'CET-490 SPECIAL PROJECT',
    ),
    446 => 
    array(
       'classID' => '5813',
       'className' => 'CET-491 SPECIAL PROJECTS',
    ),
    447 => 
    array(
       'classID' => '5814',
       'className' => 'CET-492 SPECIAL PROJECTS',
    ),
    448 => 
    array(
       'classID' => '5815',
       'className' => 'CET-493 SPECIAL PROJECTS',
    ),
    449 => 
    array(
       'classID' => '5816',
       'className' => 'CET-497 CO-OP INTERNSHIP',
    ),
    450 => 
    array(
       'classID' => '5817',
       'className' => 'CHE-101 INTRO TO CHEMICAL ENGINEERING',
    ),
    451 => 
    array(
       'classID' => '5818',
       'className' => 'CHE-210 CHEMCL PROC CALCULATIONS I',
    ),
    452 => 
    array(
       'classID' => '5819',
       'className' => 'CHE-210W CHEM PROCESS CALC I WORKSHOP',
    ),
    453 => 
    array(
       'classID' => '5820',
       'className' => 'CHE-230 CHEM ENGINEER THERMODYNAMICS I',
    ),
    454 => 
    array(
       'classID' => '5821',
       'className' => 'CHE-230W CHE THERMODYNAMICS I WORKSHOP',
    ),
    455 => 
    array(
       'classID' => '5822',
       'className' => 'CHE-240 CHEMICAL PROCESS CALCULATIONII',
    ),
    456 => 
    array(
       'classID' => '5823',
       'className' => 'CHE-240 CHEMICAL PROCESS CALCULTNS II',
    ),
    457 => 
    array(
       'classID' => '5824',
       'className' => 'CHE-240W CHEM PROCESS CALC II WORKSHOP',
    ),
    458 => 
    array(
       'classID' => '5825',
       'className' => 'CHE-260 FLUID FLOW',
    ),
    459 => 
    array(
       'classID' => '5826',
       'className' => 'CHE-310 WORK EXPERIENCE I',
    ),
    460 => 
    array(
       'classID' => '5827',
       'className' => 'CHE-311 WORK EXPERIENCE II',
    ),
    461 => 
    array(
       'classID' => '5828',
       'className' => 'CHE-312 CHEMICAL PROCESS SAFETY',
    ),
    462 => 
    array(
       'classID' => '5829',
       'className' => 'CHE-342 CHEM ENG THERMODYNAM II',
    ),
    463 => 
    array(
       'classID' => '5830',
       'className' => 'CHE-349 KINETICS & REACTOR DESGN',
    ),
    464 => 
    array(
       'classID' => '5831',
       'className' => 'CHE-360 SEPARATION PROCESSES I',
    ),
    465 => 
    array(
       'classID' => '5832',
       'className' => 'CHE-365 TECH PROCESS SIMULATION',
    ),
    466 => 
    array(
       'classID' => '5833',
       'className' => 'CHE-370 HEAT AND MASS TRANSFER',
    ),
    467 => 
    array(
       'classID' => '5834',
       'className' => 'CHE-375 STRCTURE PROP & PROC MATERIALS',
    ),
    468 => 
    array(
       'classID' => '5835',
       'className' => 'CHE-380 INTRO TO BIOTECHNOLOGY',
    ),
    469 => 
    array(
       'classID' => '5836',
       'className' => 'CHE-396 CHEMICAL ENGINEERING LAB I',
    ),
    470 => 
    array(
       'classID' => '5837',
       'className' => 'CHE-411 WORK EXPERIENCE III',
    ),
    471 => 
    array(
       'classID' => '5838',
       'className' => 'CHE-460 SEPARATION PROCESSES II',
    ),
    472 => 
    array(
       'classID' => '5839',
       'className' => 'CHE-472 PROCESS & PLANT DESIGN',
    ),
    473 => 
    array(
       'classID' => '5840',
       'className' => 'CHE-472 PROCESS & PLANT DESIGN HONORS',
    ),
    474 => 
    array(
       'classID' => '5841',
       'className' => 'CHE-472 PROCESS & PLANT DESIGN - HONORS',
    ),
    475 => 
    array(
       'classID' => '5842',
       'className' => 'CHE-489 PROCESS DYNAMICS AND CONTROL',
    ),
    476 => 
    array(
       'classID' => '5843',
       'className' => 'CHE-491 RESEARCH & INDEP STUDY',
    ),
    477 => 
    array(
       'classID' => '5844',
       'className' => 'CHE-491 RESEARCH & INDEP STUDY HONORS',
    ),
    478 => 
    array(
       'classID' => '5845',
       'className' => 'CHE-492 RESEARCH & INDEP STUDY',
    ),
    479 => 
    array(
       'classID' => '5846',
       'className' => 'CHE-496 CHEMICAL ENGINEERING LAB II',
    ),
    480 => 
    array(
       'classID' => '5847',
       'className' => 'CHE-590 GRADUATE CO-OP WORK EXPER I',
    ),
    481 => 
    array(
       'classID' => '5848',
       'className' => 'CHE-591 GRADUATE CO-OP WORK EXPER II',
    ),
    482 => 
    array(
       'classID' => '5849',
       'className' => 'CHE-592 GRADUATE CO-OP WORK EXPER III',
    ),
    483 => 
    array(
       'classID' => '5850',
       'className' => 'CHE-593 GRADUATE CO-OP WORK EXP IV',
    ),
    484 => 
    array(
       'classID' => '5851',
       'className' => 'CHE-611 THERMODYNAMICS',
    ),
    485 => 
    array(
       'classID' => '5852',
       'className' => 'CHE-612 KINTCS OF RCTNS RCTR DGN',
    ),
    486 => 
    array(
       'classID' => '5853',
       'className' => 'CHE-624 TRANSPORT PHENOMENA',
    ),
    487 => 
    array(
       'classID' => '5854',
       'className' => 'CHE-626 MATH METHODS IN CHEM ENG',
    ),
    488 => 
    array(
       'classID' => '5855',
       'className' => 'CHE-634 CHEM PROC DYNAMC & CNTRL',
    ),
    489 => 
    array(
       'classID' => '5856',
       'className' => 'CHE-650 ENVIRON CATALYSIS FUND & APPL',
    ),
    490 => 
    array(
       'classID' => '5857',
       'className' => 'CHE-681 POLYMERIZATION PRINC & PRACT',
    ),
    491 => 
    array(
       'classID' => '5858',
       'className' => 'CHE-701B MASTERS THESIS',
    ),
    492 => 
    array(
       'classID' => '5859',
       'className' => 'CHE-701C MASTERS THESIS',
    ),
    493 => 
    array(
       'classID' => '5860',
       'className' => 'CHE-702 ST:METAL COMBUSTION',
    ),
    494 => 
    array(
       'classID' => '5861',
       'className' => 'CHE-702 ST:PARTICLE ENGINEERING FOR ADVA',
    ),
    495 => 
    array(
       'classID' => '5862',
       'className' => 'CHE-705 INDEPENDENT STUDY I',
    ),
    496 => 
    array(
       'classID' => '5863',
       'className' => 'CHE-706 INDEPENDENT STUDY II',
    ),
    497 => 
    array(
       'classID' => '5864',
       'className' => 'CHE-721 COMBUSTION REACTION ENGR',
    ),
    498 => 
    array(
       'classID' => '5865',
       'className' => 'CHE-724 SUSTAINABLE ENERGY',
    ),
    499 => 
    array(
       'classID' => '5866',
       'className' => 'CHE-790A DOCT DISSERTATION & RES',
    ),
    500 => 
    array(
       'classID' => '5867',
       'className' => 'CHE-790B DOCT DISSERTATION & RES',
    ),
    501 => 
    array(
       'classID' => '5868',
       'className' => 'CHE-790C DOCT DISSERTATION & RES',
    ),
    502 => 
    array(
       'classID' => '5869',
       'className' => 'CHE-790D DOCT DISSERTATION & RES',
    ),
    503 => 
    array(
       'classID' => '5870',
       'className' => 'CHE-790E DOCT DISSERTATION & RES',
    ),
    504 => 
    array(
       'classID' => '5871',
       'className' => 'CHE-790F DISSERTATION & RES',
    ),
    505 => 
    array(
       'classID' => '5872',
       'className' => 'CHE-790G DOCTRL DISSERTATOPM & RESRCH',
    ),
    506 => 
    array(
       'classID' => '5873',
       'className' => 'CHE-791 GRADUATE SEMINAR',
    ),
    507 => 
    array(
       'classID' => '5874',
       'className' => 'CHE-792C PRE-DOCTORAL RESEARCH',
    ),
    508 => 
    array(
       'classID' => '5875',
       'className' => 'CHE-792 PRE-DOCTORAL RESEARCH',
    ),
    509 => 
    array(
       'classID' => '5876',
       'className' => 'CHEM-103 GENERAL CHEMISTRY I',
    ),
    510 => 
    array(
       'classID' => '5877',
       'className' => 'CHEM-121 FUND OF CHEMICAL PRINCIPLES I',
    ),
    511 => 
    array(
       'classID' => '5878',
       'className' => 'CHEM-122 FUND OF CHEMICAL PRINCIPLES II',
    ),
    512 => 
    array(
       'classID' => '5879',
       'className' => 'CHEM-124 GEN CHEMISTRY LAB',
    ),
    513 => 
    array(
       'classID' => '5880',
       'className' => 'CHEM-124 GEN CHEMISTRY LAB - HONORS',
    ),
    514 => 
    array(
       'classID' => '5881',
       'className' => 'CHEM-125 GENERAL CHEMISTRY I',
    ),
    515 => 
    array(
       'classID' => '5882',
       'className' => 'CHEM-125 GENERAL CHEMISTRY I - HONORS',
    ),
    516 => 
    array(
       'classID' => '5883',
       'className' => 'CHEM-126 GEN CHEMISTRY II',
    ),
    517 => 
    array(
       'classID' => '5884',
       'className' => 'CHEM-126 GEN CHEMISTRY II - HONORS',
    ),
    518 => 
    array(
       'classID' => '5885',
       'className' => 'CHEM-221 ANALYTICAL CHEM METHODS',
    ),
    519 => 
    array(
       'classID' => '5886',
       'className' => 'CHEM-222 ANALYTICAL CHEMISTRY',
    ),
    520 => 
    array(
       'classID' => '5887',
       'className' => 'CHEM-231 PHYSICAL CHEMISTRY I',
    ),
    521 => 
    array(
       'classID' => '5888',
       'className' => 'CHEM-235 PHYSICAL CHEMISTRY II',
    ),
    522 => 
    array(
       'classID' => '5889',
       'className' => 'CHEM-236 PHYSICAL CHEM FOR CHEM ENGRS',
    ),
    523 => 
    array(
       'classID' => '5890',
       'className' => 'CHEM-238 ANALYT/ORG CHEM FOR CHEM ENGRS',
    ),
    524 => 
    array(
       'classID' => '5891',
       'className' => 'CHEM-243 ORGANIC CHEMISTRY I',
    ),
    525 => 
    array(
       'classID' => '5892',
       'className' => 'CHEM-243 ORGANIC CHEMISTRY I - HONORS',
    ),
    526 => 
    array(
       'classID' => '5893',
       'className' => 'CHEM-244 ORGANIC CHEMISTRY II',
    ),
    527 => 
    array(
       'classID' => '5894',
       'className' => 'CHEM-244 ORGANIC CHEMISTRY II - HONORS',
    ),
    528 => 
    array(
       'classID' => '5895',
       'className' => 'CHEM-245 ORGANIC CHEM FOR CHEM ENGNRS',
    ),
    529 => 
    array(
       'classID' => '5896',
       'className' => 'CHEM-301 CHEMICAL TECHNOLOGY',
    ),
    530 => 
    array(
       'classID' => '5897',
       'className' => 'CHEM-310 WORK EXPERIENCE I',
    ),
    531 => 
    array(
       'classID' => '5898',
       'className' => 'CHEM-311 WORK EXPERIENCE II',
    ),
    532 => 
    array(
       'classID' => '5899',
       'className' => 'CHEM-336 PHYSICAL CHEMISTRY III',
    ),
    533 => 
    array(
       'classID' => '5900',
       'className' => 'CHEM-339 ANALY/PHY CHM LAB FOR CHM ENG',
    ),
    534 => 
    array(
       'classID' => '5901',
       'className' => 'CHEM-360 ENVIRONMENTAL CHEMISTRY I',
    ),
    535 => 
    array(
       'classID' => '5902',
       'className' => 'CHEM-361 ENVIRONMENTAL CHEMISTRY II',
    ),
    536 => 
    array(
       'classID' => '5903',
       'className' => 'CHEM-391 RESEARCH AND INDEPENDENT STUDY',
    ),
    537 => 
    array(
       'classID' => '5904',
       'className' => 'CHEM-412 INORG REACTNS & PROCSSES',
    ),
    538 => 
    array(
       'classID' => '5905',
       'className' => 'CHEM-437 APPL COMPUTATNL CHEM & MOL MOD',
    ),
    539 => 
    array(
       'classID' => '5906',
       'className' => 'CHEM-473 BIOCHEMISTRY',
    ),
    540 => 
    array(
       'classID' => '5907',
       'className' => 'CHEM-474 BIOCHEMISTRY II',
    ),
    541 => 
    array(
       'classID' => '5908',
       'className' => 'CHEM-475 BIOCHEMISTRY LAB I',
    ),
    542 => 
    array(
       'classID' => '5909',
       'className' => 'CHEM-480 INSTRUMENTAL ANALYSIS',
    ),
    543 => 
    array(
       'classID' => '5910',
       'className' => 'CHEM-491 RESEARCH & INDEP STUDY I',
    ),
    544 => 
    array(
       'classID' => '5911',
       'className' => 'CHEM-492 RESEARCH & INDEP STUDY',
    ),
    545 => 
    array(
       'classID' => '5912',
       'className' => 'CHEM-590 GRADUATE CO-OP WORK EXPER I',
    ),
    546 => 
    array(
       'classID' => '5913',
       'className' => 'CHEM-591 GRADUATE CO-OP ORK EXPER II',
    ),
    547 => 
    array(
       'classID' => '5914',
       'className' => 'CHEM-592 GRADUATE CO-OP WORK EXPER III',
    ),
    548 => 
    array(
       'classID' => '5915',
       'className' => 'CHEM-593 GRADUATE CO-OP WORK EXP IV',
    ),
    549 => 
    array(
       'classID' => '5916',
       'className' => 'CHEM-605 ADV ORGANIC CHEM:STRUCTR',
    ),
    550 => 
    array(
       'classID' => '5917',
       'className' => 'CHEM-610 ADVANCED INORG CHEMISTRY',
    ),
    551 => 
    array(
       'classID' => '5918',
       'className' => 'CHEM-658 ADVANCED PHYSICAL CHEM',
    ),
    552 => 
    array(
       'classID' => '5919',
       'className' => 'CHEM-661 INSTRUMENTATION ANALYSIS LAB',
    ),
    553 => 
    array(
       'classID' => '5920',
       'className' => 'CHEM-673 BIOCHEMISTRY',
    ),
    554 => 
    array(
       'classID' => '5921',
       'className' => 'CHEM-714 PHARMACEUTICAL ANALYSIS',
    ),
    555 => 
    array(
       'classID' => '5922',
       'className' => 'CHEM-718 ORGANIC SYNTHESIS',
    ),
    556 => 
    array(
       'classID' => '5923',
       'className' => 'CHEM-719 DRUG DELIVERY SYSTEMS',
    ),
    557 => 
    array(
       'classID' => '5924',
       'className' => 'CHEM-725 INDEPENDENT STUDY I',
    ),
    558 => 
    array(
       'classID' => '5925',
       'className' => 'CHEM-726 INDEPENDENT STUDY II',
    ),
    559 => 
    array(
       'classID' => '5926',
       'className' => 'CHEM-737 COMP CHEM & MOLECULAR MODELING',
    ),
    560 => 
    array(
       'classID' => '5927',
       'className' => 'CHEM-748 NANOMATERIALS',
    ),
    561 => 
    array(
       'classID' => '5928',
       'className' => 'CHEM-764 ADVANCED ANALYTICAL CHEMISTRY',
    ),
    562 => 
    array(
       'classID' => '5929',
       'className' => 'CHEM-777 PRINCIPLES MEDICINAL CHEMISTRY',
    ),
    563 => 
    array(
       'classID' => '5930',
       'className' => 'CHEM-791 GRADUATE SEMINAR',
    ),
    564 => 
    array(
       'classID' => '5931',
       'className' => 'CHEM-792 PRE-DOCTORAL RESEARCH',
    ),
    565 => 
    array(
       'classID' => '5932',
       'className' => 'CHM-104 GENERAL CHEMISTRY II',
    ),
    566 => 
    array(
       'classID' => '5933',
       'className' => 'CHM-204 ORGANIC CHEMISTRY II',
    ),
    567 => 
    array(
       'classID' => '5934',
       'className' => 'CIMT-101 INTRO TO THE CONCRETE INDUSTRY',
    ),
    568 => 
    array(
       'classID' => '5935',
       'className' => 'CIMT-205 CONCRETE PROPERTIES & TESTING',
    ),
    569 => 
    array(
       'classID' => '5936',
       'className' => 'CIMT-210 CONCRETE APPLICATIONS I',
    ),
    570 => 
    array(
       'classID' => '5937',
       'className' => 'CIMT-305 CONCRETE APPLICATIONS II',
    ),
    571 => 
    array(
       'classID' => '5938',
       'className' => 'CIMT-310 CONCRETE PRODUCTS AND DELIVERY',
    ),
    572 => 
    array(
       'classID' => '5939',
       'className' => 'CIMT-315 CONCRETE CONSTRUCTION METHODS',
    ),
    573 => 
    array(
       'classID' => '5940',
       'className' => 'CIMT-405 ADV CONCRETE TESTING QUAL ASSR',
    ),
    574 => 
    array(
       'classID' => '5941',
       'className' => 'CIMT-410 SENIOR PROJECT IN CIM',
    ),
    575 => 
    array(
       'classID' => '5942',
       'className' => 'CIMT-491 SPECIAL PROJECT IN CIM',
    ),
    576 => 
    array(
       'classID' => '5943',
       'className' => 'CIMT-492 SPECIAL PROJECT IN CIM',
    ),
    577 => 
    array(
       'classID' => '5944',
       'className' => 'CIMT-493 INDEPENDANT STUDY',
    ),
    578 => 
    array(
       'classID' => '5945',
       'className' => 'CIMT-493 INDEPENDENT STUDY',
    ),
    579 => 
    array(
       'classID' => '5946',
       'className' => 'CIMT-497 COOP WORK EXPERIENCE I',
    ),
    580 => 
    array(
       'classID' => '5947',
       'className' => 'CIS-131 MICRO COMPUTERS IN BUSINESS',
    ),
    581 => 
    array(
       'classID' => '5948',
       'className' => 'CIS-135 MICROCOMPUTER SPRDSHEETS',
    ),
    582 => 
    array(
       'classID' => '5949',
       'className' => 'CIS-215 DATA COMMUNICATIONS',
    ),
    583 => 
    array(
       'classID' => '5950',
       'className' => 'CMS-136 RADIO BROADCASTING & PROD',
    ),
    584 => 
    array(
       'classID' => '5951',
       'className' => 'CMT-332 STRUCTURAL SYST CONSTRUC',
    ),
    585 => 
    array(
       'classID' => '5952',
       'className' => 'CMT-436 TEMP STRUCTURES-CONSTRUC',
    ),
    586 => 
    array(
       'classID' => '5953',
       'className' => 'CMT-452 MECH & ELEC SYST-CONSTRU',
    ),
    587 => 
    array(
       'classID' => '5954',
       'className' => 'COM-303 VIDEO NARATIVE',
    ),
    588 => 
    array(
       'classID' => '5955',
       'className' => 'COM-325 ST:CELL PHONE MEDIA',
    ),
    589 => 
    array(
       'classID' => '5956',
       'className' => 'COM-325 ST: INTERPERSONAL COMMUNICATION',
    ),
    590 => 
    array(
       'classID' => '5957',
       'className' => 'COM-325 ST: TECHNIQUES AND TACTICS OF SO',
    ),
    591 => 
    array(
       'classID' => '5958',
       'className' => 'COM-325 ST:TECHNIQUES AND TACTICS OF SOU',
    ),
    592 => 
    array(
       'classID' => '5959',
       'className' => 'COM-352 PHOTOJOURNALISM',
    ),
    593 => 
    array(
       'classID' => '5960',
       'className' => 'COM-390 ELECTRONIC WRITING WORKSHOP',
    ),
    594 => 
    array(
       'classID' => '5961',
       'className' => 'CPT-310 COMPUTER DESIGN FUNDAMENTALS',
    ),
    595 => 
    array(
       'classID' => '5962',
       'className' => 'CPT-315 COMPUTER ARCHITECTURE',
    ),
    596 => 
    array(
       'classID' => '5963',
       'className' => 'CPT-325 HTTP://CPE.NJIT.EDU/HYBRID',
    ),
    597 => 
    array(
       'classID' => '5964',
       'className' => 'CPT-325 MEDICAL INFORMATICS TECHNOLOGY',
    ),
    598 => 
    array(
       'classID' => '5965',
       'className' => 'CPT-330 SOFTWARE WEB APPLICATIONS I',
    ),
    599 => 
    array(
       'classID' => '5966',
       'className' => 'CPT-335 NETWORK APPLICATIONS I',
    ),
    600 => 
    array(
       'classID' => '5967',
       'className' => 'CPT-341 VISUAL BASIC .NET',
    ),
    601 => 
    array(
       'classID' => '5968',
       'className' => 'CPT-373 HTTP://ADULTLEARNER.NJIT.EDU/ONL',
    ),
    602 => 
    array(
       'classID' => '5969',
       'className' => 'CPT-373 WEB APP DEVELOPMENT FOR MOBILE',
    ),
    603 => 
    array(
       'classID' => '5970',
       'className' => 'CPT-395 COOP WORK EXPERIENCE I',
    ),
    604 => 
    array(
       'classID' => '5971',
       'className' => 'CPT-401 SENIOR PROJECT',
    ),
    605 => 
    array(
       'classID' => '5972',
       'className' => 'CPT-425 HTTP://CPE.NJIT.EDU/HYBRID',
    ),
    606 => 
    array(
       'classID' => '5973',
       'className' => 'CPT-425 MEDICAL INFORMATICS TECH II',
    ),
    607 => 
    array(
       'classID' => '5974',
       'className' => 'CPT-430 SOFTWARE WEB APPLICATIONS II',
    ),
    608 => 
    array(
       'classID' => '5975',
       'className' => 'CPT-435 NETWORK APPLICATIONS II',
    ),
    609 => 
    array(
       'classID' => '5976',
       'className' => 'CPT-491 SPECIAL TOPICS',
    ),
    610 => 
    array(
       'classID' => '5977',
       'className' => 'CPT-491 ST:',
    ),
    611 => 
    array(
       'classID' => '5978',
       'className' => 'CPT-492 SPECIAL TOPICS',
    ),
    612 => 
    array(
       'classID' => '5979',
       'className' => 'CPT-492 ST:',
    ),
    613 => 
    array(
       'classID' => '5980',
       'className' => 'CPT-493 SPECIAL TOPICS',
    ),
    614 => 
    array(
       'classID' => '5981',
       'className' => 'CPT-493 ST:',
    ),
    615 => 
    array(
       'classID' => '5982',
       'className' => 'CS-100 ROADMAP TO COMPUTING',
    ),
    616 => 
    array(
       'classID' => '5983',
       'className' => 'CS-100 ROADMAP TO COMPUTING HONORS',
    ),
    617 => 
    array(
       'classID' => '5984',
       'className' => 'CS-100 ROADMAP TO COMPUTING - HONORS',
    ),
    618 => 
    array(
       'classID' => '5985',
       'className' => 'CS-101 COMP PROG & PROB SOLVING',
    ),
    619 => 
    array(
       'classID' => '5986',
       'className' => 'CS-103 COMPUT SCI-BUSINESS PROB',
    ),
    620 => 
    array(
       'classID' => '5987',
       'className' => 'CS-104 COMPUT PROG & GRAPH PROB',
    ),
    621 => 
    array(
       'classID' => '5988',
       'className' => 'CS-105J COMPUTER PROG-JAVA',
    ),
    622 => 
    array(
       'classID' => '5989',
       'className' => 'CS-106 ROADMAP TO COMPUTING ENGINEERS',
    ),
    623 => 
    array(
       'classID' => '5990',
       'className' => 'CS-107 COMPUTING AS A CAREER',
    ),
    624 => 
    array(
       'classID' => '5991',
       'className' => 'CS-113 INTRO COMPUTER SCI I',
    ),
    625 => 
    array(
       'classID' => '5992',
       'className' => 'CS-113 INTRO COMPUTER SCI I - HONORS',
    ),
    626 => 
    array(
       'classID' => '5993',
       'className' => 'CS-114 INTRO TO COMPUTER SCIENCE II',
    ),
    627 => 
    array(
       'classID' => '5994',
       'className' => 'CS-114 INTRO TO COMPUTER SCIENCE II - H',
    ),
    628 => 
    array(
       'classID' => '5995',
       'className' => 'CS-115 INTRO TO COMP SCI I C++',
    ),
    629 => 
    array(
       'classID' => '5996',
       'className' => 'CS-116 INTRO TO COMP SCI II C++',
    ),
    630 => 
    array(
       'classID' => '5997',
       'className' => 'CS-207 COMPUTING & EFFECTIVE COM',
    ),
    631 => 
    array(
       'classID' => '5998',
       'className' => 'CS-241 FOUNDATIONS OF COMP SCIENCE I',
    ),
    632 => 
    array(
       'classID' => '5999',
       'className' => 'CS-252 COMPUTER ORG & ARCHITECT',
    ),
    633 => 
    array(
       'classID' => '6000',
       'className' => 'CS-280 PROGRAMMING LANG CONCEPTS',
    ),
    634 => 
    array(
       'classID' => '6001',
       'className' => 'CS-288 INTENSIVE PROGRAMMING IN LINUX',
    ),
    635 => 
    array(
       'classID' => '6002',
       'className' => 'CS-310 WORK EXPERIENCE I',
    ),
    636 => 
    array(
       'classID' => '6003',
       'className' => 'CS-332 PRINCIPLES OF OPER SYS',
    ),
    637 => 
    array(
       'classID' => '6004',
       'className' => 'CS-341 FOUND OF COMPUTER SCIENCE II',
    ),
    638 => 
    array(
       'classID' => '6005',
       'className' => 'CS-345 WEB SEARCH',
    ),
    639 => 
    array(
       'classID' => '6006',
       'className' => 'CS-356 INTRO TO COMPUTER NETWORKS',
    ),
    640 => 
    array(
       'classID' => '6007',
       'className' => 'CS-357 FUNDMNTLS OF NETWORK SEC',
    ),
    641 => 
    array(
       'classID' => '6008',
       'className' => 'CS-370 INTRO TO ARTIFCL INTELLGNCE',
    ),
    642 => 
    array(
       'classID' => '6009',
       'className' => 'CS-388 ANDROID APPLICATION DEVELOPMNT',
    ),
    643 => 
    array(
       'classID' => '6010',
       'className' => 'CS-407 PROFESSIONAL DEV IN COMPUTING',
    ),
    644 => 
    array(
       'classID' => '6011',
       'className' => 'CS-410 WORK EXPERIENCE II',
    ),
    645 => 
    array(
       'classID' => '6012',
       'className' => 'CS-431 INTRO DATABASE SYSTEMS',
    ),
    646 => 
    array(
       'classID' => '6013',
       'className' => 'CS-433 INTRO TO LINUX KERNEL PROG',
    ),
    647 => 
    array(
       'classID' => '6014',
       'className' => 'CS-434 ADVANCED DATABASE SYSTEMS',
    ),
    648 => 
    array(
       'classID' => '6015',
       'className' => 'CS-435 ADV DATA STRUCT-ALG DES',
    ),
    649 => 
    array(
       'classID' => '6016',
       'className' => 'CS-485 ST: CS AND IT PROJECT MANAGEMENT',
    ),
    650 => 
    array(
       'classID' => '6017',
       'className' => 'CS-488 INDEPENDENT STUDY',
    ),
    651 => 
    array(
       'classID' => '6018',
       'className' => 'CS-490 DESIGN IN SOFTWARE ENGR',
    ),
    652 => 
    array(
       'classID' => '6019',
       'className' => 'CS-491 COMPUTER SCIENCE PROJECT',
    ),
    653 => 
    array(
       'classID' => '6020',
       'className' => 'CS-491 COMPUTER SCIENCE PROJECT - HONOR',
    ),
    654 => 
    array(
       'classID' => '6021',
       'className' => 'CS-505 PROG DATA STRUCT & ALGO',
    ),
    655 => 
    array(
       'classID' => '6022',
       'className' => 'CS-506 FOUND COMPUTER SCIENCE',
    ),
    656 => 
    array(
       'classID' => '6023',
       'className' => 'CS-590 GRADUATE CO-OP WORK EXPER I',
    ),
    657 => 
    array(
       'classID' => '6024',
       'className' => 'CS-591 GRADUATE CO-OP WORK EXPER II',
    ),
    658 => 
    array(
       'classID' => '6025',
       'className' => 'CS-592 GRADUATE CO-OP WORK EXPER III',
    ),
    659 => 
    array(
       'classID' => '6026',
       'className' => 'CS-593 GRADUATE CO-OP WORK EXP IV',
    ),
    660 => 
    array(
       'classID' => '6027',
       'className' => 'CS-602 JAVA PROGRAMMING',
    ),
    661 => 
    array(
       'classID' => '6028',
       'className' => 'CS-608 CRYPTOGRAPHY & SECURITY',
    ),
    662 => 
    array(
       'classID' => '6029',
       'className' => 'CS-610 DATA STRUCTURE & ALG',
    ),
    663 => 
    array(
       'classID' => '6030',
       'className' => 'CS-630 OPERATING SYSTEMS DESIGN',
    ),
    664 => 
    array(
       'classID' => '6031',
       'className' => 'CS-631 DATA MGT SYSTEMS DESIGN',
    ),
    665 => 
    array(
       'classID' => '6032',
       'className' => 'CS-632 ADV DATABASE SYS DESIGN',
    ),
    666 => 
    array(
       'classID' => '6033',
       'className' => 'CS-634 DATA MINING',
    ),
    667 => 
    array(
       'classID' => '6034',
       'className' => 'CS-635 COMP PROGRAMMING LANG',
    ),
    668 => 
    array(
       'classID' => '6035',
       'className' => 'CS-639 ELEC MEDICAL RECORDS:COMP IMP',
    ),
    669 => 
    array(
       'classID' => '6036',
       'className' => 'CS-643 CLOUD COMPUTING',
    ),
    670 => 
    array(
       'classID' => '6037',
       'className' => 'CS-645 SECURITY & PRIVACY IN COMP SYS',
    ),
    671 => 
    array(
       'classID' => '6038',
       'className' => 'CS-646 NETWORK PROTOCOLS SECURITY',
    ),
    672 => 
    array(
       'classID' => '6039',
       'className' => 'CS-647 COUNTER HACKING TECHNIQUES',
    ),
    673 => 
    array(
       'classID' => '6040',
       'className' => 'CS-651 MULTIMEDIA TELECOMMUNICATION',
    ),
    674 => 
    array(
       'classID' => '6041',
       'className' => 'CS-652 NETWORK-ARCH & PROTOCOLS',
    ),
    675 => 
    array(
       'classID' => '6042',
       'className' => 'CS-656 INTRNET&HIGHER LAYER PRO',
    ),
    676 => 
    array(
       'classID' => '6043',
       'className' => 'CS-659 IMAGE PROCESSING',
    ),
    677 => 
    array(
       'classID' => '6044',
       'className' => 'CS-661 SYSTEMS SIMULATION',
    ),
    678 => 
    array(
       'classID' => '6045',
       'className' => 'CS-670 ARTIFICIAL INTELLIGENCE',
    ),
    679 => 
    array(
       'classID' => '6046',
       'className' => 'CS-673 SOFTWARE DES & PROD METH',
    ),
    680 => 
    array(
       'classID' => '6047',
       'className' => 'CS-675 MACHINE LEARNING',
    ),
    681 => 
    array(
       'classID' => '6048',
       'className' => 'CS-680 LINUX KERNEL PROGRAMMING',
    ),
    682 => 
    array(
       'classID' => '6049',
       'className' => 'CS-683 SOFTWARE PROJECT MANAGEMENT',
    ),
    683 => 
    array(
       'classID' => '6050',
       'className' => 'CS-684 SOFTWARE TEST & QUAL ASSURANCE',
    ),
    684 => 
    array(
       'classID' => '6051',
       'className' => 'CS-685 SOFTWARE ARCHITECTURE',
    ),
    685 => 
    array(
       'classID' => '6052',
       'className' => 'CS-696 NETWORK MGMT & SECURITY',
    ),
    686 => 
    array(
       'classID' => '6053',
       'className' => 'CS-698 ST:',
    ),
    687 => 
    array(
       'classID' => '6054',
       'className' => 'CS-698 ST: BIG DATA',
    ),
    688 => 
    array(
       'classID' => '6055',
       'className' => 'CS-698 ST: R PROGRAMMING AND DATA ANAL',
    ),
    689 => 
    array(
       'classID' => '6056',
       'className' => 'CS-700B MASTER\'S PROJECT',
    ),
    690 => 
    array(
       'classID' => '6057',
       'className' => 'CS-701B MASTER\'S THESIS',
    ),
    691 => 
    array(
       'classID' => '6058',
       'className' => 'CS-701C MASTER\'S THESIS',
    ),
    692 => 
    array(
       'classID' => '6059',
       'className' => 'CS-704 SEQUENCING & SCHEDULING',
    ),
    693 => 
    array(
       'classID' => '6060',
       'className' => 'CS-725 INDEPENDENT RESEARCH I',
    ),
    694 => 
    array(
       'classID' => '6061',
       'className' => 'CS-726 INDEPENDENT RESEARCH II',
    ),
    695 => 
    array(
       'classID' => '6062',
       'className' => 'CS-731 APP OF DATA BASE SYST',
    ),
    696 => 
    array(
       'classID' => '6063',
       'className' => 'CS-732 ADVANCED MACHINE LEARNING',
    ),
    697 => 
    array(
       'classID' => '6064',
       'className' => 'CS-786 ST:PETRI NETS AND CONCURRENT SYS',
    ),
    698 => 
    array(
       'classID' => '6065',
       'className' => 'CS-790A DOCT DISSERTATION & RES',
    ),
    699 => 
    array(
       'classID' => '6066',
       'className' => 'CS-790B DOCT DISSERTATION & RES',
    ),
    700 => 
    array(
       'classID' => '6067',
       'className' => 'CS-790C DOCT DISSERTATION & RES',
    ),
    701 => 
    array(
       'classID' => '6068',
       'className' => 'CS-790D DOCT DISSERTATION & RES',
    ),
    702 => 
    array(
       'classID' => '6069',
       'className' => 'CS-790E DOCT DISSERTATION & RES',
    ),
    703 => 
    array(
       'classID' => '6070',
       'className' => 'CS-791 DOCTORAL SEMINAR',
    ),
    704 => 
    array(
       'classID' => '6071',
       'className' => 'CS-792C PRE-DOCTORAL RESEARCH',
    ),
    705 => 
    array(
       'classID' => '6072',
       'className' => 'CS-792 PRE-DOCTORAL RESEARCH',
    ),
    706 => 
    array(
       'classID' => '6073',
       'className' => 'CSC-100 FUNDAMENTAL OF COMPUTER',
    ),
    707 => 
    array(
       'classID' => '6074',
       'className' => 'DD-275 HISTORY OF GAMES',
    ),
    708 => 
    array(
       'classID' => '6075',
       'className' => 'DD-284 VIDEO AND ANIMATION',
    ),
    709 => 
    array(
       'classID' => '6076',
       'className' => 'DD-301 ACTING FUND FOR ANIMATORS',
    ),
    710 => 
    array(
       'classID' => '6077',
       'className' => 'DD-303 FOUNDATIONS OF SOUND AND MUSIC',
    ),
    711 => 
    array(
       'classID' => '6078',
       'className' => 'DD-320 COMPUTATIONAL DESIGN',
    ),
    712 => 
    array(
       'classID' => '6079',
       'className' => 'DD-321 INTER/REACTIVE ENVIRONMENTS',
    ),
    713 => 
    array(
       'classID' => '6080',
       'className' => 'DD-334 SIMULATED ENVIRONMENTS',
    ),
    714 => 
    array(
       'classID' => '6081',
       'className' => 'DD-363 DIGITAL DESIGN STUDIO I',
    ),
    715 => 
    array(
       'classID' => '6082',
       'className' => 'DD-364 DIGITAL DESIGN STUDIO II',
    ),
    716 => 
    array(
       'classID' => '6083',
       'className' => 'DD-403 DIGITAL SOUND AND MUSIC',
    ),
    717 => 
    array(
       'classID' => '6084',
       'className' => 'DD-415 WEB/EXHIBIT DEVELOPMENT',
    ),
    718 => 
    array(
       'classID' => '6085',
       'className' => 'DD-442 VISUAL & SPCL EFFECTS IN MOVIE',
    ),
    719 => 
    array(
       'classID' => '6086',
       'className' => 'DD-443 2D CHARACTER DEVELOPMENT',
    ),
    720 => 
    array(
       'classID' => '6087',
       'className' => 'DD-444 3-DIMENSIONAL CHARACTER DEVEL',
    ),
    721 => 
    array(
       'classID' => '6088',
       'className' => 'DD-464 DIGITAL DESIGN STUDIO III',
    ),
    722 => 
    array(
       'classID' => '6089',
       'className' => 'ECE-101 INTRO TO ELECT & COMPT ENG',
    ),
    723 => 
    array(
       'classID' => '6090',
       'className' => 'ECE-231 CIRCUITS & SYSTEMS I',
    ),
    724 => 
    array(
       'classID' => '6091',
       'className' => 'ECE-231 CIRCUITS & SYSTEMS I - HONORS',
    ),
    725 => 
    array(
       'classID' => '6092',
       'className' => 'ECE-231 CIRCUITS & SYSTEMS I-HONORS',
    ),
    726 => 
    array(
       'classID' => '6093',
       'className' => 'ECE-232 CIRCUITS & SYSTEMS II',
    ),
    727 => 
    array(
       'classID' => '6094',
       'className' => 'ECE-232 CIRCUITS & SYSTEMS II HONORS',
    ),
    728 => 
    array(
       'classID' => '6095',
       'className' => 'ECE-232 CIRCUITS & SYSTEMS II - HONORS',
    ),
    729 => 
    array(
       'classID' => '6096',
       'className' => 'ECE-251 DIGITAL DESIGN',
    ),
    730 => 
    array(
       'classID' => '6097',
       'className' => 'ECE-252 MICROPROCESSORS',
    ),
    731 => 
    array(
       'classID' => '6098',
       'className' => 'ECE-271 ELECTRONIC CIRCUITS I',
    ),
    732 => 
    array(
       'classID' => '6099',
       'className' => 'ECE-271 ELECTRONIC CIRCUITS I - HONORS',
    ),
    733 => 
    array(
       'classID' => '6100',
       'className' => 'ECE-291 ELECT ENGR LAB I',
    ),
    734 => 
    array(
       'classID' => '6101',
       'className' => 'ECE-310 WORK EXPERIENCE I',
    ),
    735 => 
    array(
       'classID' => '6102',
       'className' => 'ECE-321 RANDOM SIGNALS & NOISE',
    ),
    736 => 
    array(
       'classID' => '6103',
       'className' => 'ECE-333 SIGNALS & SYSTEMS',
    ),
    737 => 
    array(
       'classID' => '6104',
       'className' => 'ECE-341 ENERGY CONVERSION',
    ),
    738 => 
    array(
       'classID' => '6105',
       'className' => 'ECE-353 COMPUTER ARCH & ORGANIZATION',
    ),
    739 => 
    array(
       'classID' => '6106',
       'className' => 'ECE-353 COMPUTER ARCH & ORG- HONORS',
    ),
    740 => 
    array(
       'classID' => '6107',
       'className' => 'ECE-354 DIGITAL TEST',
    ),
    741 => 
    array(
       'classID' => '6108',
       'className' => 'ECE-361 ELECTROMAG FIELDS I',
    ),
    742 => 
    array(
       'classID' => '6109',
       'className' => 'ECE-362 ELECTROMAG FIELDS II',
    ),
    743 => 
    array(
       'classID' => '6110',
       'className' => 'ECE-368 SIGNAL TRANSMISSION',
    ),
    744 => 
    array(
       'classID' => '6111',
       'className' => 'ECE-372 ELECTRONICS II',
    ),
    745 => 
    array(
       'classID' => '6112',
       'className' => 'ECE-372 ELECTRONICS II HONORS',
    ),
    746 => 
    array(
       'classID' => '6113',
       'className' => 'ECE-374 ELECTRONIC DEVICES I',
    ),
    747 => 
    array(
       'classID' => '6114',
       'className' => 'ECE-392 ELECT ENGR LAB II',
    ),
    748 => 
    array(
       'classID' => '6115',
       'className' => 'ECE-394 DIGITAL SYSTEMS LAB',
    ),
    749 => 
    array(
       'classID' => '6116',
       'className' => 'ECE-395 MICROPROCESSOR LABORATORY',
    ),
    750 => 
    array(
       'classID' => '6117',
       'className' => 'ECE-405 ELEC ENGR PRINCIPLES',
    ),
    751 => 
    array(
       'classID' => '6118',
       'className' => 'ECE-410 WORK EXPERIENCE II',
    ),
    752 => 
    array(
       'classID' => '6119',
       'className' => 'ECE-414 ELECT &COMP ENGRNG PROJ I',
    ),
    753 => 
    array(
       'classID' => '6120',
       'className' => 'ECE-414 ELECT &COMPUTER ENGRNG PROJECT I',
    ),
    754 => 
    array(
       'classID' => '6121',
       'className' => 'ECE-416 ELECT & COMP ENGNR PROJ II',
    ),
    755 => 
    array(
       'classID' => '6122',
       'className' => 'ECE-417 HONORS COMPUTER ENGINEERING PROJ',
    ),
    756 => 
    array(
       'classID' => '6123',
       'className' => 'ECE-417 RESEARCH PROJECT',
    ),
    757 => 
    array(
       'classID' => '6124',
       'className' => 'ECE-421 DIGITAL DATA COMMUNICAT',
    ),
    758 => 
    array(
       'classID' => '6125',
       'className' => 'ECE-422 COMPUTER COMM NETWORKS',
    ),
    759 => 
    array(
       'classID' => '6126',
       'className' => 'ECE-425 WIRELESS COMMUNICATION SYSTEMS',
    ),
    760 => 
    array(
       'classID' => '6127',
       'className' => 'ECE-429 COMPUTER COMMUNICATIONS LAB',
    ),
    761 => 
    array(
       'classID' => '6128',
       'className' => 'ECE-431 INTRO TO FEEDBACK CONTROL SYST',
    ),
    762 => 
    array(
       'classID' => '6129',
       'className' => 'ECE-432 CONTROL SYSTEMS',
    ),
    763 => 
    array(
       'classID' => '6130',
       'className' => 'ECE-439 CONTROL SYSTEMS LAB',
    ),
    764 => 
    array(
       'classID' => '6131',
       'className' => 'ECE-442 POWER SYSTEMS',
    ),
    765 => 
    array(
       'classID' => '6132',
       'className' => 'ECE-443 RENEWABLE ENERGY SYSTEMS',
    ),
    766 => 
    array(
       'classID' => '6133',
       'className' => 'ECE-449 POWER SYSTEMS LAB',
    ),
    767 => 
    array(
       'classID' => '6134',
       'className' => 'ECE-451 COMPUTER SYSTEMS DESIGN',
    ),
    768 => 
    array(
       'classID' => '6135',
       'className' => 'ECE-452 DESIGN ADVANCS COMP ARCH',
    ),
    769 => 
    array(
       'classID' => '6136',
       'className' => 'ECE-453 INTRO DISCRETE EVENT SYS',
    ),
    770 => 
    array(
       'classID' => '6137',
       'className' => 'ECE-461 MICROWAVES & INTG OPTICS',
    ),
    771 => 
    array(
       'classID' => '6138',
       'className' => 'ECE-462 RF/FIBER OPTICS SYSTEMS',
    ),
    772 => 
    array(
       'classID' => '6139',
       'className' => 'ECE-463 OPTOELECTRONICS',
    ),
    773 => 
    array(
       'classID' => '6140',
       'className' => 'ECE-469 RF/MICROWAVE & OPTIC LAB',
    ),
    774 => 
    array(
       'classID' => '6141',
       'className' => 'ECE-481 COMMUNICATIONS SYSTEMS I',
    ),
    775 => 
    array(
       'classID' => '6142',
       'className' => 'ECE-489 COMMUNICATIONS SYS LAB',
    ),
    776 => 
    array(
       'classID' => '6143',
       'className' => 'ECE-494 ELECTRICAL ENGR LAB III',
    ),
    777 => 
    array(
       'classID' => '6144',
       'className' => 'ECE-495 COMP ENGINEER DESIGN LAB',
    ),
    778 => 
    array(
       'classID' => '6145',
       'className' => 'ECE-590 GRADUATE COOP WORK EXPER I',
    ),
    779 => 
    array(
       'classID' => '6146',
       'className' => 'ECE-591 GRADUATE COOP WORK EXPER II',
    ),
    780 => 
    array(
       'classID' => '6147',
       'className' => 'ECE-592 GRADUATE COOP WORK EXPER III',
    ),
    781 => 
    array(
       'classID' => '6148',
       'className' => 'ECE-593 GRADUATE CO-OP WORK EXP IV',
    ),
    782 => 
    array(
       'classID' => '6149',
       'className' => 'ECE-601 LINEAR SYSTEMS',
    ),
    783 => 
    array(
       'classID' => '6150',
       'className' => 'ECE-605 DISCRETE EVENT DYN SYS',
    ),
    784 => 
    array(
       'classID' => '6151',
       'className' => 'ECE-610 POWER SYST STEADY STATE ANLYS',
    ),
    785 => 
    array(
       'classID' => '6152',
       'className' => 'ECE-611 TRANSIENTS IN POWER SYSTEMS',
    ),
    786 => 
    array(
       'classID' => '6153',
       'className' => 'ECE-613 PROTECTION OF POWER SYSTEMS',
    ),
    787 => 
    array(
       'classID' => '6154',
       'className' => 'ECE-616 POWER ELECTRONICS',
    ),
    788 => 
    array(
       'classID' => '6155',
       'className' => 'ECE-617 ECON CONT INTERCONNCTD PW SYS',
    ),
    789 => 
    array(
       'classID' => '6156',
       'className' => 'ECE-618 RENEWABLE ENERGY SYSTEMS',
    ),
    790 => 
    array(
       'classID' => '6157',
       'className' => 'ECE-620 ELECTROMAGNETIC FIELD THEORY',
    ),
    791 => 
    array(
       'classID' => '6158',
       'className' => 'ECE-625 FIBER AND INTEGRATED OPTICS',
    ),
    792 => 
    array(
       'classID' => '6159',
       'className' => 'ECE-626 OPTOELECTRONICS I',
    ),
    793 => 
    array(
       'classID' => '6160',
       'className' => 'ECE-630 MICROWAVE ELECTRONIC SYSTEMS',
    ),
    794 => 
    array(
       'classID' => '6161',
       'className' => 'ECE-632 ANTENNA THEORY',
    ),
    795 => 
    array(
       'classID' => '6162',
       'className' => 'ECE-636 COMPUTER NETWORKING LABORATORY',
    ),
    796 => 
    array(
       'classID' => '6163',
       'className' => 'ECE-637 INTERNET & HIGHER-LAYER PROTOC',
    ),
    797 => 
    array(
       'classID' => '6164',
       'className' => 'ECE-639 PRINCPL OF BRADBND NEWTWRKS',
    ),
    798 => 
    array(
       'classID' => '6165',
       'className' => 'ECE-640 DIGITAL SIGNAL PROCESSING',
    ),
    799 => 
    array(
       'classID' => '6166',
       'className' => 'ECE-641 LAB FOR HIGH PERFORMANCE DSP',
    ),
    800 => 
    array(
       'classID' => '6167',
       'className' => 'ECE-642 COMMUNICATION SYSTEMS I',
    ),
    801 => 
    array(
       'classID' => '6168',
       'className' => 'ECE-643 DIGITAL IMAGE PROCESSING I',
    ),
    802 => 
    array(
       'classID' => '6169',
       'className' => 'ECE-644 WIRELESS COMMUNICATIONS',
    ),
    803 => 
    array(
       'classID' => '6170',
       'className' => 'ECE-645 WIRELESS NETWORKS',
    ),
    804 => 
    array(
       'classID' => '6171',
       'className' => 'ECE-650 SEMICONDUCTOR CIRCUITS',
    ),
    805 => 
    array(
       'classID' => '6172',
       'className' => 'ECE-657 SEMICONDUCTOR DEVICES',
    ),
    806 => 
    array(
       'classID' => '6173',
       'className' => 'ECE-658 VLSI DESIGN I',
    ),
    807 => 
    array(
       'classID' => '6174',
       'className' => 'ECE-660 INTRO TO CONTROL SYSTEMS',
    ),
    808 => 
    array(
       'classID' => '6175',
       'className' => 'ECE-661 CONTROL SYST COMPONENTS',
    ),
    809 => 
    array(
       'classID' => '6176',
       'className' => 'ECE-664 REAL TIME CONTROL SYSTEMS',
    ),
    810 => 
    array(
       'classID' => '6177',
       'className' => 'ECE-666 CONTROL SYSTEMS II',
    ),
    811 => 
    array(
       'classID' => '6178',
       'className' => 'ECE-673 RANDOM SIGNAL ANALYSIS I',
    ),
    812 => 
    array(
       'classID' => '6179',
       'className' => 'ECE-681 HIGH PERF ROUTERS & SWITCHES',
    ),
    813 => 
    array(
       'classID' => '6180',
       'className' => 'ECE-683 COMP NETWRK DESGN & ANALYS',
    ),
    814 => 
    array(
       'classID' => '6181',
       'className' => 'ECE-684 ADV MICROPROCESSOR SYSTEMS',
    ),
    815 => 
    array(
       'classID' => '6182',
       'className' => 'ECE-689 COMPUTER ARITHMETIC ALGORITHMS',
    ),
    816 => 
    array(
       'classID' => '6183',
       'className' => 'ECE-690 COMPUTER SYSTEMS ARCHITECTURE',
    ),
    817 => 
    array(
       'classID' => '6184',
       'className' => 'ECE-692 EMBEDDED COMPUTING SYSTEMS',
    ),
    818 => 
    array(
       'classID' => '6185',
       'className' => 'ECE-698 ST:POWER GENERATION AND DISTRIBU',
    ),
    819 => 
    array(
       'classID' => '6186',
       'className' => 'ECE-700B MASTER\'S PROJECT',
    ),
    820 => 
    array(
       'classID' => '6187',
       'className' => 'ECE-701B MASTER\'S THESIS',
    ),
    821 => 
    array(
       'classID' => '6188',
       'className' => 'ECE-701C MASTER\'S THESIS',
    ),
    822 => 
    array(
       'classID' => '6189',
       'className' => 'ECE-725 INDEPENDENT RESEARCH I',
    ),
    823 => 
    array(
       'classID' => '6190',
       'className' => 'ECE-726 INDEPENDENT RESEARCH II',
    ),
    824 => 
    array(
       'classID' => '6191',
       'className' => 'ECE-740 ADV DIGITAL SIGNAL PROCESSING',
    ),
    825 => 
    array(
       'classID' => '6192',
       'className' => 'ECE-742 COMMUNICATION SYSTEMS II',
    ),
    826 => 
    array(
       'classID' => '6193',
       'className' => 'ECE-743 IMAGE DATA HIDING, FORENSICS',
    ),
    827 => 
    array(
       'classID' => '6194',
       'className' => 'ECE-744 OPTIMIZATION FOR COMM NETWORKS',
    ),
    828 => 
    array(
       'classID' => '6195',
       'className' => 'ECE-758 VLSI DESIGN II',
    ),
    829 => 
    array(
       'classID' => '6196',
       'className' => 'ECE-776 INFORMATION THEORY',
    ),
    830 => 
    array(
       'classID' => '6197',
       'className' => 'ECE-777 STATISTCL DECISION THRY COMM',
    ),
    831 => 
    array(
       'classID' => '6198',
       'className' => 'ECE-783 COMP COMM NETWORKS',
    ),
    832 => 
    array(
       'classID' => '6199',
       'className' => 'ECE-788 ST:',
    ),
    833 => 
    array(
       'classID' => '6200',
       'className' => 'ECE-788 ST:ADV TOPICS IN BROADBAND NETWO',
    ),
    834 => 
    array(
       'classID' => '6201',
       'className' => 'ECE-788 ST: COMPUTATIONAL INTELLIGENCE',
    ),
    835 => 
    array(
       'classID' => '6202',
       'className' => 'ECE-788 ST:COMPUTATIONAL INTELLIGENCE',
    ),
    836 => 
    array(
       'classID' => '6203',
       'className' => 'ECE-790A DOCTRL DISSRTN & RESEARCH',
    ),
    837 => 
    array(
       'classID' => '6204',
       'className' => 'ECE-790B DOCTRL DISSRTN & RESEARCH',
    ),
    838 => 
    array(
       'classID' => '6205',
       'className' => 'ECE-790C DOCTRL DISSERTATION & RESRCH',
    ),
    839 => 
    array(
       'classID' => '6206',
       'className' => 'ECE-790D DOCTRL DISSERTATION & RESRCH',
    ),
    840 => 
    array(
       'classID' => '6207',
       'className' => 'ECE-790E DOCT DISSRTATION & RESRCH',
    ),
    841 => 
    array(
       'classID' => '6208',
       'className' => 'ECE-790F DOCT DISSERTATION & RESRCH',
    ),
    842 => 
    array(
       'classID' => '6209',
       'className' => 'ECE-790G DOCT DISSERTATION & RESRCH',
    ),
    843 => 
    array(
       'classID' => '6210',
       'className' => 'ECE-791 GRADUATE SEMINAR',
    ),
    844 => 
    array(
       'classID' => '6211',
       'className' => 'ECE-792B PRE-DOCTORAL RESEARCH',
    ),
    845 => 
    array(
       'classID' => '6212',
       'className' => 'ECE-792C PRE-DOCTORAL RESEARCH',
    ),
    846 => 
    array(
       'classID' => '6213',
       'className' => 'ECET-201 CIRCUITS I',
    ),
    847 => 
    array(
       'classID' => '6214',
       'className' => 'ECET-202 CIRCUITS II',
    ),
    848 => 
    array(
       'classID' => '6215',
       'className' => 'ECET-205 ANALOG ELECTRONICS',
    ),
    849 => 
    array(
       'classID' => '6216',
       'className' => 'ECET-214 INTRODUCTION TO COMMUNICATIONS',
    ),
    850 => 
    array(
       'classID' => '6217',
       'className' => 'ECET-215 INTRO TO DIGITAL ELECTRONICS',
    ),
    851 => 
    array(
       'classID' => '6218',
       'className' => 'ECET-300 CIRCUIT ANALYSIS',
    ),
    852 => 
    array(
       'classID' => '6219',
       'className' => 'ECET-303 CIRCUIT MEASUREMENTS I',
    ),
    853 => 
    array(
       'classID' => '6220',
       'className' => 'ECET-305 INTEGRATED CIRCUIT APPLCTNS',
    ),
    854 => 
    array(
       'classID' => '6221',
       'className' => 'ECET-311 EMBEDDED SYSTEMS I',
    ),
    855 => 
    array(
       'classID' => '6222',
       'className' => 'ECET-329 ANALOG & DIGITAL ELECTRONICS',
    ),
    856 => 
    array(
       'classID' => '6223',
       'className' => 'ECET-344 NUMERICAL COMP ENGR TECH',
    ),
    857 => 
    array(
       'classID' => '6224',
       'className' => 'ECET-350 COMPUTRZED INDUSTRL CONTROLS',
    ),
    858 => 
    array(
       'classID' => '6225',
       'className' => 'ECET-365 DIGITAL LOGIC & CIRCUIT DESIGN',
    ),
    859 => 
    array(
       'classID' => '6226',
       'className' => 'ECET-395 ECET WORK EXPERIENCE I',
    ),
    860 => 
    array(
       'classID' => '6227',
       'className' => 'ECET-401 ECET SENIOR PROJECT I',
    ),
    861 => 
    array(
       'classID' => '6228',
       'className' => 'ECET-402 ECET SENIOR PROJECT II',
    ),
    862 => 
    array(
       'classID' => '6229',
       'className' => 'ECET-411 EMBEDDED SYSTEMS II',
    ),
    863 => 
    array(
       'classID' => '6230',
       'className' => 'ECET-412 POWER GENERATION & DISTRBTN',
    ),
    864 => 
    array(
       'classID' => '6231',
       'className' => 'ECET-415 FUND OF NETWORK COMMUNICATION',
    ),
    865 => 
    array(
       'classID' => '6232',
       'className' => 'ECET-415 FUND OF TELECOMMUNICATIONS',
    ),
    866 => 
    array(
       'classID' => '6233',
       'className' => 'ECET-416 NETWORKING APPLICATIONS',
    ),
    867 => 
    array(
       'classID' => '6234',
       'className' => 'ECET-418 TRANSMISSION SYSTEMS',
    ),
    868 => 
    array(
       'classID' => '6235',
       'className' => 'ECET-440 CLINICAL INTERNSHIP',
    ),
    869 => 
    array(
       'classID' => '6236',
       'className' => 'ECET-444 DESIGN METHODS-REAL TIME APPL',
    ),
    870 => 
    array(
       'classID' => '6237',
       'className' => 'ECET-491 SPECIAL PROJECTS',
    ),
    871 => 
    array(
       'classID' => '6238',
       'className' => 'ECET-492 SPECIAL PROJECTS',
    ),
    872 => 
    array(
       'classID' => '6239',
       'className' => 'ECET-493 SPECIAL PROJECTS',
    ),
    873 => 
    array(
       'classID' => '6240',
       'className' => 'ECET-495 COOP WORK EXPERIENCE II',
    ),
    874 => 
    array(
       'classID' => '6241',
       'className' => 'ECO-101 PRINCIPLES OF ECONOMICS',
    ),
    875 => 
    array(
       'classID' => '6242',
       'className' => 'ECO-102 PRICIP OF ECONOMICS II',
    ),
    876 => 
    array(
       'classID' => '6243',
       'className' => 'ECON-201 ECONOMICS',
    ),
    877 => 
    array(
       'classID' => '6244',
       'className' => 'ECON-201 ECONOMICS - HONORS',
    ),
    878 => 
    array(
       'classID' => '6245',
       'className' => 'ECON-265 MICROECONOMICS',
    ),
    879 => 
    array(
       'classID' => '6246',
       'className' => 'ECON-266 MACROECONOMICS',
    ),
    880 => 
    array(
       'classID' => '6247',
       'className' => 'ECON-610 MANAGERIAL ECONOMICS',
    ),
    881 => 
    array(
       'classID' => '6248',
       'className' => 'ELC-115 DC/AC CIRCUIT ANALYSIS',
    ),
    882 => 
    array(
       'classID' => '6249',
       'className' => 'EM-602 MANAGEMENT SCIENCE',
    ),
    883 => 
    array(
       'classID' => '6250',
       'className' => 'EM-631 LEGAL ASPCT IN ENVR ENGR',
    ),
    884 => 
    array(
       'classID' => '6251',
       'className' => 'EM-632 LEGAL ASPECTS IN CONSTR',
    ),
    885 => 
    array(
       'classID' => '6252',
       'className' => 'EM-633 LEGAL ASPCTS OF HLT SFTY',
    ),
    886 => 
    array(
       'classID' => '6253',
       'className' => 'EM-636 PROJECT MANAGEMENT',
    ),
    887 => 
    array(
       'classID' => '6254',
       'className' => 'EM-637 PROJECT CONTROL',
    ),
    888 => 
    array(
       'classID' => '6255',
       'className' => 'EM-640 DISTRIBUTION LOGISTICS',
    ),
    889 => 
    array(
       'classID' => '6256',
       'className' => 'EM-691 COST ESTIMTNG CAPTL PROJ',
    ),
    890 => 
    array(
       'classID' => '6257',
       'className' => 'EM-700B MASTER\'S PROJECT',
    ),
    891 => 
    array(
       'classID' => '6258',
       'className' => 'EM-701B MASTER\'S THESIS',
    ),
    892 => 
    array(
       'classID' => '6259',
       'className' => 'EM-701C MASTER\'S THESIS',
    ),
    893 => 
    array(
       'classID' => '6260',
       'className' => 'EM-725 INDEPENDENT RESEARCH I',
    ),
    894 => 
    array(
       'classID' => '6261',
       'className' => 'EM-726 INDEPENDENT RESEARCH II',
    ),
    895 => 
    array(
       'classID' => '6262',
       'className' => 'ENE-262 INTRO TO ENVIRONMENTAL ENGR',
    ),
    896 => 
    array(
       'classID' => '6263',
       'className' => 'ENE-360 WATER & WASTEWATER ENGINEERING',
    ),
    897 => 
    array(
       'classID' => '6264',
       'className' => 'ENE-361 SOLID & HAZARDOUS WASTE ENGR',
    ),
    898 => 
    array(
       'classID' => '6265',
       'className' => 'ENE-490 SENIOR PROJECT',
    ),
    899 => 
    array(
       'classID' => '6266',
       'className' => 'ENE-491 RESEARCH EXPERIENCE IN ENE-HONOR',
    ),
    900 => 
    array(
       'classID' => '6267',
       'className' => 'ENE-630 PHYSICAL PROCESSES OF ENV SYST',
    ),
    901 => 
    array(
       'classID' => '6268',
       'className' => 'ENE-660 INT TO SOLID WASTE PROB',
    ),
    902 => 
    array(
       'classID' => '6269',
       'className' => 'ENE-661 ENVIRONMENTAL MICROBIOLOGY',
    ),
    903 => 
    array(
       'classID' => '6270',
       'className' => 'ENE-662 SITE REMEDIATION',
    ),
    904 => 
    array(
       'classID' => '6271',
       'className' => 'ENE-663 WATER CHEMISTRY',
    ),
    905 => 
    array(
       'classID' => '6272',
       'className' => 'ENE-665 BIOLOGICAL TREATMENT',
    ),
    906 => 
    array(
       'classID' => '6273',
       'className' => 'ENE-671 ENVIRONMENTAL IMPACT ANA',
    ),
    907 => 
    array(
       'classID' => '6274',
       'className' => 'ENE-672 STORMWATER MANAGEMENT',
    ),
    908 => 
    array(
       'classID' => '6275',
       'className' => 'ENE-700B MASTER\'S PROJECT',
    ),
    909 => 
    array(
       'classID' => '6276',
       'className' => 'ENE-701B MASTER\'S THESIS',
    ),
    910 => 
    array(
       'classID' => '6277',
       'className' => 'ENE-725 INDEPENDENT STUDY',
    ),
    911 => 
    array(
       'classID' => '6278',
       'className' => 'ENE-726 INDEPENDENT STUDY',
    ),
    912 => 
    array(
       'classID' => '6279',
       'className' => 'ENE-790A DOCTORAL DISSERT & RES',
    ),
    913 => 
    array(
       'classID' => '6280',
       'className' => 'ENE-790B DOCTORAL DISSERT & RES',
    ),
    914 => 
    array(
       'classID' => '6281',
       'className' => 'ENE-790C DOCTORAL DISSERTATION',
    ),
    915 => 
    array(
       'classID' => '6282',
       'className' => 'ENE-790D DOCTORAL DISSERTATION',
    ),
    916 => 
    array(
       'classID' => '6283',
       'className' => 'ENE-790E DOCTORAL DISSERTATION & RES',
    ),
    917 => 
    array(
       'classID' => '6284',
       'className' => 'ENE-790F DOCTORAL DISSERTATION & RES',
    ),
    918 => 
    array(
       'classID' => '6285',
       'className' => 'ENE-792C PRE-DOCTORAL RESEARCH',
    ),
    919 => 
    array(
       'classID' => '6286',
       'className' => 'ENE-792 PRE-DOCTORAL DISSERTATION',
    ),
    920 => 
    array(
       'classID' => '6287',
       'className' => 'ENG-095 GEN SKILLS ENG AS 2ND LN',
    ),
    921 => 
    array(
       'classID' => '6288',
       'className' => 'ENG-102 COLLEGE COMPOSITION II',
    ),
    922 => 
    array(
       'classID' => '6289',
       'className' => 'ENG-105 TECHNICAL WRITING',
    ),
    923 => 
    array(
       'classID' => '6290',
       'className' => 'ENG-109 EFFECTIVE SPEECH',
    ),
    924 => 
    array(
       'classID' => '6291',
       'className' => 'ENG-151 MASS COMM AND POP CULTURE',
    ),
    925 => 
    array(
       'classID' => '6292',
       'className' => 'ENG-200 COMMUNICATION IN ORGANIZATIONS',
    ),
    926 => 
    array(
       'classID' => '6293',
       'className' => 'ENG-302 COMMUNICATION THEORY',
    ),
    927 => 
    array(
       'classID' => '6294',
       'className' => 'ENG-302 COMMUNICATION THEORY - HONORS',
    ),
    928 => 
    array(
       'classID' => '6295',
       'className' => 'ENG-333 CYBERTEXT',
    ),
    929 => 
    array(
       'classID' => '6296',
       'className' => 'ENG-336 ADVANCED COMPOSITION',
    ),
    930 => 
    array(
       'classID' => '6297',
       'className' => 'ENG-339 PRACTICAL JOURNALISM',
    ),
    931 => 
    array(
       'classID' => '6298',
       'className' => 'ENG-340 ORAL PRESENTATION',
    ),
    932 => 
    array(
       'classID' => '6299',
       'className' => 'ENG-350 THE NEWSROOM',
    ),
    933 => 
    array(
       'classID' => '6300',
       'className' => 'ENG-352 TECHNICAL WRITING',
    ),
    934 => 
    array(
       'classID' => '6301',
       'className' => 'ENG-352 TECHNICAL WRITING - HONORS',
    ),
    935 => 
    array(
       'classID' => '6302',
       'className' => 'ENG-353 COMPOSING DOCUMENTS FOR PRINT',
    ),
    936 => 
    array(
       'classID' => '6303',
       'className' => 'ENG-354 COMPOSING DOCUMNTS FOR WEB',
    ),
    937 => 
    array(
       'classID' => '6304',
       'className' => 'ENG-490 CO-OP WORK EXPERIENCE I',
    ),
    938 => 
    array(
       'classID' => '6305',
       'className' => 'ENG-491 CO-OP WORK EXPERIENCE II',
    ),
    939 => 
    array(
       'classID' => '6306',
       'className' => 'ENG-496 SR PRJCT COMM & MEDIA',
    ),
    940 => 
    array(
       'classID' => '6307',
       'className' => 'ENG-502 ENGL-INTERL STUDENTS II',
    ),
    941 => 
    array(
       'classID' => '6308',
       'className' => 'ENG-503 SPOKEN ENGLISH FOR TA\'S',
    ),
    942 => 
    array(
       'classID' => '6309',
       'className' => 'ENG-505 ADVANCED SPOKEN ENGLISH',
    ),
    943 => 
    array(
       'classID' => '6310',
       'className' => 'ENG-507 ADV CONV & AMER CULTURE',
    ),
    944 => 
    array(
       'classID' => '6311',
       'className' => 'ENG-521 TECH, WRITTEN & ORAL COM',
    ),
    945 => 
    array(
       'classID' => '6312',
       'className' => 'ENGR-101 ANALYTICAL METH FOR ENGR APPL',
    ),
    946 => 
    array(
       'classID' => '6313',
       'className' => 'ENR-103 ENGINEERING GRAPHICS',
    ),
    947 => 
    array(
       'classID' => '6314',
       'className' => 'ENR-105 APPLIED CAD',
    ),
    948 => 
    array(
       'classID' => '6315',
       'className' => 'ENR-220 MECH. OF MATERIALS LAB',
    ),
    949 => 
    array(
       'classID' => '6316',
       'className' => 'ENTR-410 NEW VENTURE MANAGEMENT',
    ),
    950 => 
    array(
       'classID' => '6317',
       'className' => 'ENTR-420 FINANCING NEW VENTURE',
    ),
    951 => 
    array(
       'classID' => '6318',
       'className' => 'ENTR-440 LEAN STARTUP ACCELERATOR',
    ),
    952 => 
    array(
       'classID' => '6319',
       'className' => 'ENTR-490 INDEPENDENT STUDY IN ENTR',
    ),
    953 => 
    array(
       'classID' => '6320',
       'className' => 'EPS-202 SOCIETY TECHN & ENVIRONMNT',
    ),
    954 => 
    array(
       'classID' => '6321',
       'className' => 'EPS-202 SOCIETY TECHN & ENVIRONMNT - HON',
    ),
    955 => 
    array(
       'classID' => '6322',
       'className' => 'EPS-202 SOCIETY, TECHNOLOGY & ENVIRONMNT',
    ),
    956 => 
    array(
       'classID' => '6323',
       'className' => 'EPS-614 ENVIRONMENTAL ECON & MGMT',
    ),
    957 => 
    array(
       'classID' => '6324',
       'className' => 'EPS-700B MASTER\'S PROJECT',
    ),
    958 => 
    array(
       'classID' => '6325',
       'className' => 'EPS-701B MASTER\'S THESIS',
    ),
    959 => 
    array(
       'classID' => '6326',
       'className' => 'EPS-701C MASTER\'S THESIS',
    ),
    960 => 
    array(
       'classID' => '6327',
       'className' => 'EPS-725 INDEPENDENT STUDY I',
    ),
    961 => 
    array(
       'classID' => '6328',
       'className' => 'EPS-726 INDEPENDENT STUDY II',
    ),
    962 => 
    array(
       'classID' => '6329',
       'className' => 'ESC-310 WORK EXPERIENCE I',
    ),
    963 => 
    array(
       'classID' => '6330',
       'className' => 'ESC-491 RESEARCH & INDEPEND ST I',
    ),
    964 => 
    array(
       'classID' => '6331',
       'className' => 'ESC-492 RESEARCH & INDEP ST II',
    ),
    965 => 
    array(
       'classID' => '6332',
       'className' => 'ESC-701B MASTER\'S THESIS',
    ),
    966 => 
    array(
       'classID' => '6333',
       'className' => 'ESTS-388 CURRICULUM &INSTRUCTION FOR SS',
    ),
    967 => 
    array(
       'classID' => '6334',
       'className' => 'ESTS-410 ICT IN SECONDARY SCHOOLS',
    ),
    968 => 
    array(
       'classID' => '6335',
       'className' => 'ET-101 INTRO TO ENGNR TECHNLGY',
    ),
    969 => 
    array(
       'classID' => '6336',
       'className' => 'EVSC-125 FUNDAMENTALS OF ENVR SCIENCES',
    ),
    970 => 
    array(
       'classID' => '6337',
       'className' => 'EVSC-325 ENERGY AND ENVIRONMENT',
    ),
    971 => 
    array(
       'classID' => '6338',
       'className' => 'EVSC-335 ENVIRONMENTAL LAW',
    ),
    972 => 
    array(
       'classID' => '6339',
       'className' => 'EVSC-375 ENVIRONMENTAL BIOLOGY',
    ),
    973 => 
    array(
       'classID' => '6340',
       'className' => 'EVSC-381 GEOMORPHOLOGY',
    ),
    974 => 
    array(
       'classID' => '6341',
       'className' => 'EVSC-385 ENVIRONMENTAL MICROBIOLOGY',
    ),
    975 => 
    array(
       'classID' => '6342',
       'className' => 'EVSC-391 RESEARCH AND INDEPENDENT STUDY',
    ),
    976 => 
    array(
       'classID' => '6343',
       'className' => 'EVSC-416 ENVIRONMENTAL TOXICOLOGY',
    ),
    977 => 
    array(
       'classID' => '6344',
       'className' => 'EVSC-484 ENVIRONMENTAL ANALYSIS',
    ),
    978 => 
    array(
       'classID' => '6345',
       'className' => 'EVSC-591 GRADUATE WORK EXPERIENCE',
    ),
    979 => 
    array(
       'classID' => '6346',
       'className' => 'EVSC-592 GRADUATE WORK EXPERIENCE',
    ),
    980 => 
    array(
       'classID' => '6347',
       'className' => 'EVSC-593 GRADUATE CO-OP WORK EXP IV',
    ),
    981 => 
    array(
       'classID' => '6348',
       'className' => 'EVSC-603 HAZWOPPER CERTIFICATION',
    ),
    982 => 
    array(
       'classID' => '6349',
       'className' => 'EVSC-610 ENVIRN CHEM SCIENCE',
    ),
    983 => 
    array(
       'classID' => '6350',
       'className' => 'EVSC-612 ENVIRONMENTAL ANALYSIS',
    ),
    984 => 
    array(
       'classID' => '6351',
       'className' => 'EVSC-613 ENVIR PROBLEM SOLVING',
    ),
    985 => 
    array(
       'classID' => '6352',
       'className' => 'EVSC-614 QUANT RISK ASSESSMENT',
    ),
    986 => 
    array(
       'classID' => '6353',
       'className' => 'EVSC-616 TOXICOLOGY FOR ENGR-SCI',
    ),
    987 => 
    array(
       'classID' => '6354',
       'className' => 'EVSC-622 BIOREMEDIATION',
    ),
    988 => 
    array(
       'classID' => '6355',
       'className' => 'EVSC-623 ENVIRONMENTAL HEALTH',
    ),
    989 => 
    array(
       'classID' => '6356',
       'className' => 'EVSC-712 HAZARDOUS SUBSTANCE MANAGEMENT',
    ),
    990 => 
    array(
       'classID' => '6357',
       'className' => 'EVSC-715 ENERGY AND SUSTAINABILITY',
    ),
    991 => 
    array(
       'classID' => '6358',
       'className' => 'EVSC-725 INDEPENDENT STUDY I',
    ),
    992 => 
    array(
       'classID' => '6359',
       'className' => 'EVSC-726 INDEPENDENT STUDY II',
    ),
    993 => 
    array(
       'classID' => '6360',
       'className' => 'EVSC-791 ENVIRONMENTAL SCIENCE SEMINAR',
    ),
    994 => 
    array(
       'classID' => '6361',
       'className' => 'EVSC-792 PRE-DOCTORAL RESEARCH',
    ),
    995 => 
    array(
       'classID' => '6362',
       'className' => 'FED-101 BMED FUND OF ENGINEERING DESIGN',
    ),
    996 => 
    array(
       'classID' => '6363',
       'className' => 'FED-101 BME-FUNDAMENTALS OF ENGR DESIGN',
    ),
    997 => 
    array(
       'classID' => '6364',
       'className' => 'FED-101 BME-FUND OF ENGINEERING DESIGN I',
    ),
    998 => 
    array(
       'classID' => '6365',
       'className' => 'FED-101 CE FUND OF ENGINEERING',
    ),
    999 => 
    array(
       'classID' => '6366',
       'className' => 'FED-101 CE -FUND OF ENGINEERING DESIGN I',
    ),
    1000 => 
    array(
       'classID' => '6367',
       'className' => 'FED-101 CHE-FUND ENGINEERING DESIGN',
    ),
    1001 => 
    array(
       'classID' => '6368',
       'className' => 'FED-101 CHE FUND OF ENGINEERING DESIGN',
    ),
    1002 => 
    array(
       'classID' => '6369',
       'className' => 'FED-101 ECE - FUND OF ENGINEERING DESIGN',
    ),
    1003 => 
    array(
       'classID' => '6370',
       'className' => 'FED-101 ECE FUND OF ENGINEERING DESIGN',
    ),
    1004 => 
    array(
       'classID' => '6371',
       'className' => 'FED-101 ESC - FUND OF ENGINEERING DESIGN',
    ),
    1005 => 
    array(
       'classID' => '6372',
       'className' => 'FED-101 ESC FUND OF ENGINEERING DESIGN',
    ),
    1006 => 
    array(
       'classID' => '6373',
       'className' => 'FED-101 FUND ENGINEERNG DESIGN I',
    ),
    1007 => 
    array(
       'classID' => '6374',
       'className' => 'FED-101 ME -FUND OF ENGINEERING DESIGN',
    ),
    1008 => 
    array(
       'classID' => '6375',
       'className' => 'FED-101 MIE -FUND OF ENGINEERING DESIGN',
    ),
    1009 => 
    array(
       'classID' => '6376',
       'className' => 'FED-101 MIE FUND OF ENGINEERING DESIGN',
    ),
    1010 => 
    array(
       'classID' => '6377',
       'className' => 'FIN-101 INTRO TO FINANCE',
    ),
    1011 => 
    array(
       'classID' => '6378',
       'className' => 'FIN-218 FINANCIAL MARKETS & INSTITUTIONS',
    ),
    1012 => 
    array(
       'classID' => '6379',
       'className' => 'FIN-218 FINANCL MARKETS & INSTITUTIONS',
    ),
    1013 => 
    array(
       'classID' => '6380',
       'className' => 'FIN-218 FINANCL MARKETS & INSTITUTIONS -',
    ),
    1014 => 
    array(
       'classID' => '6381',
       'className' => 'FIN-315 FUND OF CORPORATE FINANCE',
    ),
    1015 => 
    array(
       'classID' => '6382',
       'className' => 'FIN-315 FUND OF CORPORATE FINANCE - HONO',
    ),
    1016 => 
    array(
       'classID' => '6383',
       'className' => 'FIN-403 FINANCIAL STATEMENT ANALYSIS',
    ),
    1017 => 
    array(
       'classID' => '6384',
       'className' => 'FIN-416 ADVANCED CORPORATE FINANCE',
    ),
    1018 => 
    array(
       'classID' => '6385',
       'className' => 'FIN-422 INTERNATIONAL FINANCE',
    ),
    1019 => 
    array(
       'classID' => '6386',
       'className' => 'FIN-490 INDEPENDENT STUDY IN FINANCE',
    ),
    1020 => 
    array(
       'classID' => '6387',
       'className' => 'FIN-600 CORPORATE FINANCE I',
    ),
    1021 => 
    array(
       'classID' => '6388',
       'className' => 'FIN-610 GLOBAL MACRO ECONOMICS',
    ),
    1022 => 
    array(
       'classID' => '6389',
       'className' => 'FIN-624 CORPORATE FINANCE II',
    ),
    1023 => 
    array(
       'classID' => '6390',
       'className' => 'FIN-626 FINANCIAL MRKTS & INSTITUTIONS',
    ),
    1024 => 
    array(
       'classID' => '6391',
       'className' => 'FIN-627 INTERNATIONAL FINANCE',
    ),
    1025 => 
    array(
       'classID' => '6392',
       'className' => 'FIN-634 MERGERS & ACQUISITIONS',
    ),
    1026 => 
    array(
       'classID' => '6393',
       'className' => 'FIN-641 DERIVATIVES MARKETS',
    ),
    1027 => 
    array(
       'classID' => '6394',
       'className' => 'FIN-650 INVESTMNT ANALY & PRORTFLIO',
    ),
    1028 => 
    array(
       'classID' => '6395',
       'className' => 'FIN-655 FIN INNOV AND MARKET FAILURES',
    ),
    1029 => 
    array(
       'classID' => '6396',
       'className' => 'FIN-725 INDEPENDENT STUDY',
    ),
    1030 => 
    array(
       'classID' => '6397',
       'className' => 'FRSH-SEM FRESHMAN SEMINAR',
    ),
    1031 => 
    array(
       'classID' => '6398',
       'className' => 'FRSH-SEM FRESHMAN SEMINAR HONORS',
    ),
    1032 => 
    array(
       'classID' => '6399',
       'className' => 'FRSH-SEM FRESHMAN SEMINAR - HONORS',
    ),
    1033 => 
    array(
       'classID' => '6400',
       'className' => 'HIST-213 20TH CENTURY WORLD',
    ),
    1034 => 
    array(
       'classID' => '6401',
       'className' => 'HIST-213 20TH CENTURY WORLD - HONORS',
    ),
    1035 => 
    array(
       'classID' => '6402',
       'className' => 'HIST-213 20TH CENTURY WORLD-HONORS',
    ),
    1036 => 
    array(
       'classID' => '6403',
       'className' => 'HIST-310 CO-OP HISTORY',
    ),
    1037 => 
    array(
       'classID' => '6404',
       'className' => 'HIST-310 CO-OP IN LTC',
    ),
    1038 => 
    array(
       'classID' => '6405',
       'className' => 'HIST-310 CO-OP LTC',
    ),
    1039 => 
    array(
       'classID' => '6406',
       'className' => 'HIST-310 HISTORY CO-OP',
    ),
    1040 => 
    array(
       'classID' => '6407',
       'className' => 'HIST-311 CO-OP FOR HISTORY OR LTC MAJORS',
    ),
    1041 => 
    array(
       'classID' => '6408',
       'className' => 'HIST-311 COOP IN LTC AND HISTORY',
    ),
    1042 => 
    array(
       'classID' => '6409',
       'className' => 'HIST-312 PROF DEVELOPMENT IN LAW',
    ),
    1043 => 
    array(
       'classID' => '6410',
       'className' => 'HIST-341 THE AMERICAN EXPERIENCE',
    ),
    1044 => 
    array(
       'classID' => '6411',
       'className' => 'HIST-344 ASPECT AFR-AMER HIST II',
    ),
    1045 => 
    array(
       'classID' => '6412',
       'className' => 'HIST-345 COMMUNICTN THRU THE AGES',
    ),
    1046 => 
    array(
       'classID' => '6413',
       'className' => 'HIST-363 U.S. AS A WORLD POWER',
    ),
    1047 => 
    array(
       'classID' => '6414',
       'className' => 'HIST-369 LAW AND SOCIETY IN HISTORY',
    ),
    1048 => 
    array(
       'classID' => '6415',
       'className' => 'HIST-369 LAW AND SOCIETY IN HISTORY - HO',
    ),
    1049 => 
    array(
       'classID' => '6416',
       'className' => 'HIST-370 LEGAL ISSUES IN MEDIA HISTORY',
    ),
    1050 => 
    array(
       'classID' => '6417',
       'className' => 'HIST-373 THE RISE OF MODERN SCIENCE',
    ),
    1051 => 
    array(
       'classID' => '6418',
       'className' => 'HIST-375 LEGAL ISSUES ENVIRNMTL HIST',
    ),
    1052 => 
    array(
       'classID' => '6419',
       'className' => 'HIST-378 HONORS SECTION',
    ),
    1053 => 
    array(
       'classID' => '6420',
       'className' => 'HIST-378 MEDICINE & LAW IN MODERN HIST',
    ),
    1054 => 
    array(
       'classID' => '6421',
       'className' => 'HIST-381 SCI & TECH IN MODERN MEDICINE-H',
    ),
    1055 => 
    array(
       'classID' => '6422',
       'className' => 'HIST-382 WAR AND SOCIETY',
    ),
    1056 => 
    array(
       'classID' => '6423',
       'className' => 'HIST-383 MAKING OF MODERN THOUGHT',
    ),
    1057 => 
    array(
       'classID' => '6424',
       'className' => 'HIST-384 INVENTION AND REGULATION',
    ),
    1058 => 
    array(
       'classID' => '6425',
       'className' => 'HIST-385 TECH & SOC-EUPR & WLD HS',
    ),
    1059 => 
    array(
       'classID' => '6426',
       'className' => 'HIST-386 TECHNOLOGY-AMERICAN HIST',
    ),
    1060 => 
    array(
       'classID' => '6427',
       'className' => 'HIST-387 COMPUTERS, INNOVATORS AND HIST',
    ),
    1061 => 
    array(
       'classID' => '6428',
       'className' => 'HIST-388 20TH CENTURY BRITIAN',
    ),
    1062 => 
    array(
       'classID' => '6429',
       'className' => 'HIST-390 HISTL PROB THROUGH FILM',
    ),
    1063 => 
    array(
       'classID' => '6430',
       'className' => 'HIST-391 INDUSTRIAL REVOLUTION IN WORLD',
    ),
    1064 => 
    array(
       'classID' => '6431',
       'className' => 'HIST-401 INDEPENDENT STUDY',
    ),
    1065 => 
    array(
       'classID' => '6432',
       'className' => 'HIST-401 INDEPENDENT STUDY HONORS',
    ),
    1066 => 
    array(
       'classID' => '6433',
       'className' => 'HIST-402 HONORS INDEPENDENT STUDY',
    ),
    1067 => 
    array(
       'classID' => '6434',
       'className' => 'HIST-402 INDEPENDENT STUDY',
    ),
    1068 => 
    array(
       'classID' => '6435',
       'className' => 'HIST-402 INDEPENDENT STUDY- HONORS',
    ),
    1069 => 
    array(
       'classID' => '6436',
       'className' => 'HIST-489 SEM - READINGS:',
    ),
    1070 => 
    array(
       'classID' => '6437',
       'className' => 'HIST-489 U.S. ENVIRONMENTAL HISTORY 1945',
    ),
    1071 => 
    array(
       'classID' => '6438',
       'className' => 'HIST-490 SEM: COMMUNICATONS CONTROVERSIE',
    ),
    1072 => 
    array(
       'classID' => '6439',
       'className' => 'HIST-632 TECHNOLOGY, CULT & HIST',
    ),
    1073 => 
    array(
       'classID' => '6440',
       'className' => 'HIST-656 TOPICS:THE HISTORY OF HEALTH',
    ),
    1074 => 
    array(
       'classID' => '6441',
       'className' => 'HIST-657 FOOD AND SOCIETY IN AMERICA',
    ),
    1075 => 
    array(
       'classID' => '6442',
       'className' => 'HIST-702 MASTER\'S ESSAY',
    ),
    1076 => 
    array(
       'classID' => '6443',
       'className' => 'HIST-725 INDEPENDENT STUDY',
    ),
    1077 => 
    array(
       'classID' => '6444',
       'className' => 'HIST-725 IND STUDY',
    ),
    1078 => 
    array(
       'classID' => '6445',
       'className' => 'HIST-725 IND STUDY-GRAD',
    ),
    1079 => 
    array(
       'classID' => '6446',
       'className' => 'HIST-726 INDEPENDENT STUDY',
    ),
    1080 => 
    array(
       'classID' => '6447',
       'className' => 'HIST-726 IND STUDY',
    ),
    1081 => 
    array(
       'classID' => '6448',
       'className' => 'HIST-727 INDEPENDENT STUDY',
    ),
    1082 => 
    array(
       'classID' => '6449',
       'className' => 'HRM-301 ORGANIZATION BEHAVIOR',
    ),
    1083 => 
    array(
       'classID' => '6450',
       'className' => 'HRM-310 MANAGING DIVERSITY ORG',
    ),
    1084 => 
    array(
       'classID' => '6451',
       'className' => 'HRM-601 ORGANIZATIONAL BEHAVIOR',
    ),
    1085 => 
    array(
       'classID' => '6452',
       'className' => 'HRM-630 MANAGING TECH & ORG CHNG',
    ),
    1086 => 
    array(
       'classID' => '6453',
       'className' => 'HSS-403 LIT SEM:',
    ),
    1087 => 
    array(
       'classID' => '6454',
       'className' => 'HSS-403 LIT SEM:AMERICAN SLAVERY AND ITS',
    ),
    1088 => 
    array(
       'classID' => '6455',
       'className' => 'HSS-403 LIT SEM:ARTISTIC & LITERARY CONN',
    ),
    1089 => 
    array(
       'classID' => '6456',
       'className' => 'HSS-403 LIT SEM:DOCUMENTARY STUDIES',
    ),
    1090 => 
    array(
       'classID' => '6457',
       'className' => 'HSS-403 LIT SEM: ELECTRONIC LITERATURE',
    ),
    1091 => 
    array(
       'classID' => '6458',
       'className' => 'HSS-403 LIT SEM:ELECTRONIC LITERATURE',
    ),
    1092 => 
    array(
       'classID' => '6459',
       'className' => 'HSS-403 LIT SEM: FILM AND LAW',
    ),
    1093 => 
    array(
       'classID' => '6460',
       'className' => 'HSS-403 LIT SEM:FILM AND LAW',
    ),
    1094 => 
    array(
       'classID' => '6461',
       'className' => 'HSS-403 LIT SEM:FILM AND MEDICINE',
    ),
    1095 => 
    array(
       'classID' => '6462',
       'className' => 'HSS-403 LIT SEM: FILM & MEDICINE',
    ),
    1096 => 
    array(
       'classID' => '6463',
       'className' => 'HSS-403 LIT SEM: IDENTITY, TECHNOLOGY AN',
    ),
    1097 => 
    array(
       'classID' => '6464',
       'className' => 'HSS-403 LIT SEM:LITERATURE AND MEDICINE',
    ),
    1098 => 
    array(
       'classID' => '6465',
       'className' => 'HSS-403 LIT SEM: LITERATURE OF MUSIC',
    ),
    1099 => 
    array(
       'classID' => '6466',
       'className' => 'HSS-403 LIT SEM: LITERATURE OF THE JAZZ',
    ),
    1100 => 
    array(
       'classID' => '6467',
       'className' => 'HSS-403 LIT SEM:LOVE AND BETRAYAL IN THE',
    ),
    1101 => 
    array(
       'classID' => '6468',
       'className' => 'HSS-403 LIT SEM:MULTICULTURALISM AND CIN',
    ),
    1102 => 
    array(
       'classID' => '6469',
       'className' => 'HSS-403 LIT SEM:MULTICULTURALISM AND LIT',
    ),
    1103 => 
    array(
       'classID' => '6470',
       'className' => 'HSS-403 LIT SEM: MULTICULTURALISM IN CIN',
    ),
    1104 => 
    array(
       'classID' => '6471',
       'className' => 'HSS-403 LIT SEM:MULTICULTURALISM IN CINE',
    ),
    1105 => 
    array(
       'classID' => '6472',
       'className' => 'HSS-403 LIT SEM: MULTICULTURALISM IN L',
    ),
    1106 => 
    array(
       'classID' => '6473',
       'className' => 'HSS-403 LIT SEM:NEWARD NARRATIVES',
    ),
    1107 => 
    array(
       'classID' => '6474',
       'className' => 'HSS-403 LIT SEM: NEWARK NARRATIVES',
    ),
    1108 => 
    array(
       'classID' => '6475',
       'className' => 'HSS-403 LIT SEM:NEWARK NARRATIVES',
    ),
    1109 => 
    array(
       'classID' => '6476',
       'className' => 'HSS-403 LIT SEM: ROMANCE IN THE WESTERN',
    ),
    1110 => 
    array(
       'classID' => '6477',
       'className' => 'HSS-403 LIT SEM: SCIENCE FICTION',
    ),
    1111 => 
    array(
       'classID' => '6478',
       'className' => 'HSS-403 LIT SEM:SHAKESPEARE ON FILM',
    ),
    1112 => 
    array(
       'classID' => '6479',
       'className' => 'HSS-403 LIT SEM: SPECULATIVE TECH IN SCI',
    ),
    1113 => 
    array(
       'classID' => '6480',
       'className' => 'HSS-403 LIT SEM: ZOOPOLIS:ANIMALS & THE',
    ),
    1114 => 
    array(
       'classID' => '6481',
       'className' => 'HSS-403 ST: ARTISTIC AND LITERARY CULTU',
    ),
    1115 => 
    array(
       'classID' => '6482',
       'className' => 'HSS-403 ST: NEW CULTURAL EXPERIMENTS IN',
    ),
    1116 => 
    array(
       'classID' => '6483',
       'className' => 'HSS-404 HISTORY-AMERICAN SUBURB-HONORS',
    ),
    1117 => 
    array(
       'classID' => '6484',
       'className' => 'HSS-404 HISTORY OF THE AMERICAN SUBURB',
    ),
    1118 => 
    array(
       'classID' => '6485',
       'className' => 'HSS-404 HIST SEM:',
    ),
    1119 => 
    array(
       'classID' => '6486',
       'className' => 'HSS-404 HIST SEM: AMERICAN SUBURB HISTOR',
    ),
    1120 => 
    array(
       'classID' => '6487',
       'className' => 'HSS-404 HIST SEM:AMERICAN SUBURB, HISTOR',
    ),
    1121 => 
    array(
       'classID' => '6488',
       'className' => 'HSS-404 HIST SEM: BLACK NATIONALISM:CIVI',
    ),
    1122 => 
    array(
       'classID' => '6489',
       'className' => 'HSS-404 HIST SEM: CONFLICT RESOLUTION',
    ),
    1123 => 
    array(
       'classID' => '6490',
       'className' => 'HSS-404 HIST SEM: DISABILITY AND THE LAW',
    ),
    1124 => 
    array(
       'classID' => '6491',
       'className' => 'HSS-404 HIST SEM: NAZI GERMANY',
    ),
    1125 => 
    array(
       'classID' => '6492',
       'className' => 'HSS-404 HIST SEM:SPECIAL FORCES-HIST',
    ),
    1126 => 
    array(
       'classID' => '6493',
       'className' => 'HSS-404 HIST SEM: WAR AND MISPERCEPTION',
    ),
    1127 => 
    array(
       'classID' => '6494',
       'className' => 'HSS-404 INTERNATIONAL CRIMINAL JUSTICE',
    ),
    1128 => 
    array(
       'classID' => '6495',
       'className' => 'HSS-404 ST: WAR, TECHNOLOGY & POWER POLI',
    ),
    1129 => 
    array(
       'classID' => '6496',
       'className' => 'HSS-405 PHIL SEM:ARTIFICIAL INTELLIGENCE',
    ),
    1130 => 
    array(
       'classID' => '6497',
       'className' => 'HSS-405 PHIL SEM:HISTORY OF IDEAS',
    ),
    1131 => 
    array(
       'classID' => '6498',
       'className' => 'HSS-405 PHIL SEM:HISTORY OF MODERN PHILO',
    ),
    1132 => 
    array(
       'classID' => '6499',
       'className' => 'HSS-405 PHIL SEM:PHILOSOPHY OF PLATO - H',
    ),
    1133 => 
    array(
       'classID' => '6500',
       'className' => 'HSS-406 ENG SEM: ADVANCED COMMUNICATION',
    ),
    1134 => 
    array(
       'classID' => '6501',
       'className' => 'HSS-406 ENG SEM: ADVANCED TECHNICAL WRIT',
    ),
    1135 => 
    array(
       'classID' => '6502',
       'className' => 'HSS-406 ENG SEM: ENGINERS AT THE WORLDS',
    ),
    1136 => 
    array(
       'classID' => '6503',
       'className' => 'HSS-406 ENG SEM: SCIENCE WRITING',
    ),
    1137 => 
    array(
       'classID' => '6504',
       'className' => 'HSS-407 THEA SEM: THEATRE AND TECHNOLOGY',
    ),
    1138 => 
    array(
       'classID' => '6505',
       'className' => 'HSS-407 THEA SEM:THEATRE AND TECHNOLOGY',
    ),
    1139 => 
    array(
       'classID' => '6506',
       'className' => 'HSS-407 THTR SEM: THEATRE AND TECHNOLOGY',
    ),
    1140 => 
    array(
       'classID' => '6507',
       'className' => 'HSS-408 ST: INSTRUCTIONAL DESIGN',
    ),
    1141 => 
    array(
       'classID' => '6508',
       'className' => 'HSS-408 STS SEM:',
    ),
    1142 => 
    array(
       'classID' => '6509',
       'className' => 'HSS-408 STS SEM: DESIGNING EFFECTIVE ONL',
    ),
    1143 => 
    array(
       'classID' => '6510',
       'className' => 'HSS-408 STS SEM:DESIGNING EFFECT ONLINE',
    ),
    1144 => 
    array(
       'classID' => '6511',
       'className' => 'HSS-408 STS SEM:HAIR: CULTURE, POLITICS,',
    ),
    1145 => 
    array(
       'classID' => '6512',
       'className' => 'HSS-408 STS SEM: INSTRUCTIONAL DESIGN',
    ),
    1146 => 
    array(
       'classID' => '6513',
       'className' => 'HSS-408 STS SEM:INSTRUCTIONAL DESIGN A',
    ),
    1147 => 
    array(
       'classID' => '6514',
       'className' => 'HSS-408 STS SEM:NAZI SCIENCE AND TECHNOL',
    ),
    1148 => 
    array(
       'classID' => '6515',
       'className' => 'HSS-408 STS SEM:SOCIAL DIMENSIONS OF DIG',
    ),
    1149 => 
    array(
       'classID' => '6516',
       'className' => 'HSS-408 STS SEM: WHAT IS A MACHINE? IDEN',
    ),
    1150 => 
    array(
       'classID' => '6517',
       'className' => 'HSS-409 SS SEM: HONORS',
    ),
    1151 => 
    array(
       'classID' => '6518',
       'className' => 'HST-101 WORLD CIVILIZATION I',
    ),
    1152 => 
    array(
       'classID' => '6519',
       'className' => 'HST-102 WORLD CIV II',
    ),
    1153 => 
    array(
       'classID' => '6520',
       'className' => 'HST-112 UNITED STATES HISTORY II',
    ),
    1154 => 
    array(
       'classID' => '6521',
       'className' => 'HUM-099 ENGLISH COMP:RDNG, WRIT',
    ),
    1155 => 
    array(
       'classID' => '6522',
       'className' => 'HUM-099S ENGLISH COMP:READING,WRITING',
    ),
    1156 => 
    array(
       'classID' => '6523',
       'className' => 'HUM-100 ENGLISH COMP: RDNG, WRIT',
    ),
    1157 => 
    array(
       'classID' => '6524',
       'className' => 'HUM-101 WRITING,SPEAKING, THINKING I',
    ),
    1158 => 
    array(
       'classID' => '6525',
       'className' => 'HUM-101 WRITING,SPEAKING, THINKING I - H',
    ),
    1159 => 
    array(
       'classID' => '6526',
       'className' => 'HUM-102 WRITING, SPEAKING, THINKING II',
    ),
    1160 => 
    array(
       'classID' => '6527',
       'className' => 'HUM-102 WRITING, SPEAKING, THINKING II -',
    ),
    1161 => 
    array(
       'classID' => '6528',
       'className' => 'HUM-102 WRIT, SPEAK, THINKING II - HONOR',
    ),
    1162 => 
    array(
       'classID' => '6529',
       'className' => 'HUM-211 THE PRE-MODERN WORLD',
    ),
    1163 => 
    array(
       'classID' => '6530',
       'className' => 'HUM-212 THE MAKING OF MODERN WORLD-HONOR',
    ),
    1164 => 
    array(
       'classID' => '6531',
       'className' => 'HUM-212 THE MAKING OF THE MODERN WORLD',
    ),
    1165 => 
    array(
       'classID' => '6532',
       'className' => 'HUM-251 ETHICAL ISSUES BUSINESS',
    ),
    1166 => 
    array(
       'classID' => '6533',
       'className' => 'HUM-401 INDEPENDENT STUDY',
    ),
    1167 => 
    array(
       'classID' => '6534',
       'className' => 'HUM-ELEC HUMANITIES ELECTIVE',
    ),
    1168 => 
    array(
       'classID' => '6535',
       'className' => 'ID-203 INNOV:PAST, PRESENT & FUTURE',
    ),
    1169 => 
    array(
       'classID' => '6536',
       'className' => 'ID-216 MODELING & PROTOTYPING',
    ),
    1170 => 
    array(
       'classID' => '6537',
       'className' => 'ID-217 MODELING & MANUFACTURING',
    ),
    1171 => 
    array(
       'classID' => '6538',
       'className' => 'ID-263 INDUSTRIAL DESIGN STUDIO I',
    ),
    1172 => 
    array(
       'classID' => '6539',
       'className' => 'ID-264 INDUSTRIAL DESIGN STUDIO II',
    ),
    1173 => 
    array(
       'classID' => '6540',
       'className' => 'ID-301 INDUSTRIAL DSGN SPECIALIZATION',
    ),
    1174 => 
    array(
       'classID' => '6541',
       'className' => 'ID-310 ETHNOGRAPHIC & MRKT RESEARCH',
    ),
    1175 => 
    array(
       'classID' => '6542',
       'className' => 'ID-312 MECHANICS & ELECTRONICS',
    ),
    1176 => 
    array(
       'classID' => '6543',
       'className' => 'ID-340 MATERIALS & PROCESSES',
    ),
    1177 => 
    array(
       'classID' => '6544',
       'className' => 'ID-341 SUSTAINABLE MATERIAL & PROCESS',
    ),
    1178 => 
    array(
       'classID' => '6545',
       'className' => 'ID-363 INDUSTRIAL DESIGN STUDIO III',
    ),
    1179 => 
    array(
       'classID' => '6546',
       'className' => 'ID-364 INDUSTRIAL DESIGN STUDIO IV',
    ),
    1180 => 
    array(
       'classID' => '6547',
       'className' => 'ID-410 PROFESSIONAL PRACTICE & ETHICS',
    ),
    1181 => 
    array(
       'classID' => '6548',
       'className' => 'ID-410 PROF PRACTICE & ETHICS',
    ),
    1182 => 
    array(
       'classID' => '6549',
       'className' => 'ID-464 COMPREHENSIVE/THESIS STUDIO',
    ),
    1183 => 
    array(
       'classID' => '6550',
       'className' => 'IE-203 COMPUTER GRAPHICS IN IE',
    ),
    1184 => 
    array(
       'classID' => '6551',
       'className' => 'IE-224 PRODUCTION PROCESS DESGN',
    ),
    1185 => 
    array(
       'classID' => '6552',
       'className' => 'IE-310 WORK EXPERIENCE I',
    ),
    1186 => 
    array(
       'classID' => '6553',
       'className' => 'IE-331 APPLIED STATICAL METHODS',
    ),
    1187 => 
    array(
       'classID' => '6554',
       'className' => 'IE-334 ENGR ECO & CPTL INV ANAL',
    ),
    1188 => 
    array(
       'classID' => '6555',
       'className' => 'IE-335 ENGR COST ANAL & CONTROL',
    ),
    1189 => 
    array(
       'classID' => '6556',
       'className' => 'IE-339 WORK MEASURMNT & STNDRDS',
    ),
    1190 => 
    array(
       'classID' => '6557',
       'className' => 'IE-355 HUMAN FACTORS IN IE',
    ),
    1191 => 
    array(
       'classID' => '6558',
       'className' => 'IE-411 WORK EXPERIENCE II',
    ),
    1192 => 
    array(
       'classID' => '6559',
       'className' => 'IE-439 DETERMINISTIC MODELS-IE',
    ),
    1193 => 
    array(
       'classID' => '6560',
       'className' => 'IE-439 DETERMINISTIC MODELS-IE HONORS',
    ),
    1194 => 
    array(
       'classID' => '6561',
       'className' => 'IE-440 PROBABLISTIC MODELS-IE',
    ),
    1195 => 
    array(
       'classID' => '6562',
       'className' => 'IE-440 PROBABLISTIC MODELS-IE HONORS',
    ),
    1196 => 
    array(
       'classID' => '6563',
       'className' => 'IE-441 INFO & KNOW ENGR SYSTEMS',
    ),
    1197 => 
    array(
       'classID' => '6564',
       'className' => 'IE-443 SENIOR PROJECT I',
    ),
    1198 => 
    array(
       'classID' => '6565',
       'className' => 'IE-443 SENIOR PROJECT I - HONORS',
    ),
    1199 => 
    array(
       'classID' => '6566',
       'className' => 'IE-444 SENIOR PROJECT II',
    ),
    1200 => 
    array(
       'classID' => '6567',
       'className' => 'IE-444 SENIOR PROJECT II - HONORS',
    ),
    1201 => 
    array(
       'classID' => '6568',
       'className' => 'IE-444 SENIOR PROJECT II- HONORS',
    ),
    1202 => 
    array(
       'classID' => '6569',
       'className' => 'IE-445 SIM MODEL INDUST SYSTEMS',
    ),
    1203 => 
    array(
       'classID' => '6570',
       'className' => 'IE-447 LEGAL ASPECTS OF ENGR',
    ),
    1204 => 
    array(
       'classID' => '6571',
       'className' => 'IE-449 INDUSTRIAL ROBOTICS',
    ),
    1205 => 
    array(
       'classID' => '6572',
       'className' => 'IE-455 ROBOTICS & PROG LOGIC CONTROL',
    ),
    1206 => 
    array(
       'classID' => '6573',
       'className' => 'IE-459 PRODUCTION PLAN & CONTL',
    ),
    1207 => 
    array(
       'classID' => '6574',
       'className' => 'IE-461 PRODCT QUALITY ASSURANCE',
    ),
    1208 => 
    array(
       'classID' => '6575',
       'className' => 'IE-463 INVENTION & ENTREPRENEURSHIP',
    ),
    1209 => 
    array(
       'classID' => '6576',
       'className' => 'IE-466 MATRLS MGT & DIST LGSTCS',
    ),
    1210 => 
    array(
       'classID' => '6577',
       'className' => 'IE-481 INVSTGTNS IN INDS ENGR I',
    ),
    1211 => 
    array(
       'classID' => '6578',
       'className' => 'IE-492 ENGINEERING MANAGEMENT',
    ),
    1212 => 
    array(
       'classID' => '6579',
       'className' => 'IE-492 ENGINEERING MANAGEMENT - HONORS',
    ),
    1213 => 
    array(
       'classID' => '6580',
       'className' => 'IE-492 ENGINEERNG MGMT- HONORS',
    ),
    1214 => 
    array(
       'classID' => '6581',
       'className' => 'IE-590 INTERNSHIP I',
    ),
    1215 => 
    array(
       'classID' => '6582',
       'className' => 'IE-591 INTERNSHIP II',
    ),
    1216 => 
    array(
       'classID' => '6583',
       'className' => 'IE-592 GRADUATE CO-OP WORK EXPER II',
    ),
    1217 => 
    array(
       'classID' => '6584',
       'className' => 'IE-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1218 => 
    array(
       'classID' => '6585',
       'className' => 'IE-604 ADVANCED ENGINEERNG STAT',
    ),
    1219 => 
    array(
       'classID' => '6586',
       'className' => 'IE-614 SAFETY ENGR METHODS',
    ),
    1220 => 
    array(
       'classID' => '6587',
       'className' => 'IE-615 IND HYGIENE & OCCUP HLTH',
    ),
    1221 => 
    array(
       'classID' => '6588',
       'className' => 'IE-618 ENGR COST & PRODUC ECONO',
    ),
    1222 => 
    array(
       'classID' => '6589',
       'className' => 'IE-621 SYST ANALYSIS & SIMULATN',
    ),
    1223 => 
    array(
       'classID' => '6590',
       'className' => 'IE-650 ADV TOPICS OPER RES',
    ),
    1224 => 
    array(
       'classID' => '6591',
       'className' => 'IE-655 CONCURRENT ENGINEERING',
    ),
    1225 => 
    array(
       'classID' => '6592',
       'className' => 'IE-659 SUPPLY CHAIN ENGINEERING',
    ),
    1226 => 
    array(
       'classID' => '6593',
       'className' => 'IE-665 APPLIED INDUST ERGONOMIC',
    ),
    1227 => 
    array(
       'classID' => '6594',
       'className' => 'IE-672 INDUSTRIAL QUALITY CONTL',
    ),
    1228 => 
    array(
       'classID' => '6595',
       'className' => 'IE-673 TOTAL QUALITY MANAGEMENT',
    ),
    1229 => 
    array(
       'classID' => '6596',
       'className' => 'IE-682 INDSTRL SAFETY & HLTH EVALUTN',
    ),
    1230 => 
    array(
       'classID' => '6597',
       'className' => 'IE-685 SYSTEM SAFETY',
    ),
    1231 => 
    array(
       'classID' => '6598',
       'className' => 'IE-686 INTRO TO HEALTHCARE SYSTEMS',
    ),
    1232 => 
    array(
       'classID' => '6599',
       'className' => 'IE-687 HEALTHCARE ENTERPRISE SYSTEMS',
    ),
    1233 => 
    array(
       'classID' => '6600',
       'className' => 'IE-688 HEALTHCARE SYS PERFOR MODELING',
    ),
    1234 => 
    array(
       'classID' => '6601',
       'className' => 'IE-700B MASTER\'S PROJECT',
    ),
    1235 => 
    array(
       'classID' => '6602',
       'className' => 'IE-701B MASTER\'S THESIS',
    ),
    1236 => 
    array(
       'classID' => '6603',
       'className' => 'IE-701C MASTER\'S THESIS',
    ),
    1237 => 
    array(
       'classID' => '6604',
       'className' => 'IE-706 Q APPROACH PERFORM ANALY',
    ),
    1238 => 
    array(
       'classID' => '6605',
       'className' => 'IE-725 INDEPENDENT RESEARCH I',
    ),
    1239 => 
    array(
       'classID' => '6606',
       'className' => 'IE-726 INDEPENDENT RESEARCH II',
    ),
    1240 => 
    array(
       'classID' => '6607',
       'className' => 'IE-790A DOCTORAL DISSERTATION',
    ),
    1241 => 
    array(
       'classID' => '6608',
       'className' => 'IE-790B DOCTORAL DISSERTATION',
    ),
    1242 => 
    array(
       'classID' => '6609',
       'className' => 'IE-790C DOC DISSERTATION & RES',
    ),
    1243 => 
    array(
       'classID' => '6610',
       'className' => 'IE-790D DOC DISSERTATION & RES',
    ),
    1244 => 
    array(
       'classID' => '6611',
       'className' => 'IE-790E DOC DISSERTATION & RES',
    ),
    1245 => 
    array(
       'classID' => '6612',
       'className' => 'IE-790F DOCT DISSERTATION & RES',
    ),
    1246 => 
    array(
       'classID' => '6613',
       'className' => 'IE-791 GRADUATE SEMINAR',
    ),
    1247 => 
    array(
       'classID' => '6614',
       'className' => 'INT-221 BUILDING & INTERIOR SYSTEMS I',
    ),
    1248 => 
    array(
       'classID' => '6615',
       'className' => 'INT-222 BUILDING & INTERIOR SYSTEMS II',
    ),
    1249 => 
    array(
       'classID' => '6616',
       'className' => 'INT-263 INTERIOR DESIGN STUDIO I',
    ),
    1250 => 
    array(
       'classID' => '6617',
       'className' => 'INT-264 INTERIOR DESIGN STUDIO II',
    ),
    1251 => 
    array(
       'classID' => '6618',
       'className' => 'INT-321 METHODS AND MATERIALS',
    ),
    1252 => 
    array(
       'classID' => '6619',
       'className' => 'INT-322 CONTRACT DOCUMENTS',
    ),
    1253 => 
    array(
       'classID' => '6620',
       'className' => 'INT-350 HISTORY OF FURNITURE',
    ),
    1254 => 
    array(
       'classID' => '6621',
       'className' => 'INT-363 INTERIOR DESIGN STUDIO III',
    ),
    1255 => 
    array(
       'classID' => '6622',
       'className' => 'INT-364 INTERIOR DESIGN STUDIO IV',
    ),
    1256 => 
    array(
       'classID' => '6623',
       'className' => 'INT-464 INTERIOR DESIGN STUDIO V',
    ),
    1257 => 
    array(
       'classID' => '6624',
       'className' => 'IS-117 INTRO TO WEBSITE DEVELOPMENT',
    ),
    1258 => 
    array(
       'classID' => '6625',
       'className' => 'IS-218 BUILDING WEB APPLICATIONS',
    ),
    1259 => 
    array(
       'classID' => '6626',
       'className' => 'IS-219 ADV WEBSITE DEVELOPMENT',
    ),
    1260 => 
    array(
       'classID' => '6627',
       'className' => 'IS-247 DESIGNING THE USER EXPERIENCE',
    ),
    1261 => 
    array(
       'classID' => '6628',
       'className' => 'IS-265 INTRO TO INFORMATION SYSTEMS',
    ),
    1262 => 
    array(
       'classID' => '6629',
       'className' => 'IS-310 WORK EXPERIENCE I',
    ),
    1263 => 
    array(
       'classID' => '6630',
       'className' => 'IS-322 MOBILE APPLICATIONS: DESIGN',
    ),
    1264 => 
    array(
       'classID' => '6631',
       'className' => 'IS-331 DATABASE DESIGN, MGMT & APPL',
    ),
    1265 => 
    array(
       'classID' => '6632',
       'className' => 'IS-333 SOCIAL NETWORK ANALYSIS',
    ),
    1266 => 
    array(
       'classID' => '6633',
       'className' => 'IS-344 COMPUTING APPLICATIONS IN BUS',
    ),
    1267 => 
    array(
       'classID' => '6634',
       'className' => 'IS-350 COMPUTERS, SOCIETY AND ETHICS',
    ),
    1268 => 
    array(
       'classID' => '6635',
       'className' => 'IS-373 CONTENT MANAGEMENT SYSTEMS',
    ),
    1269 => 
    array(
       'classID' => '6636',
       'className' => 'IS-375 DISCOVERING USER NEEDS FOR UX',
    ),
    1270 => 
    array(
       'classID' => '6637',
       'className' => 'IS-390 ANALYSIS & SYSTEM DESIGN',
    ),
    1271 => 
    array(
       'classID' => '6638',
       'className' => 'IS-392 WEB MINING & INFOR RETRIEVAL',
    ),
    1272 => 
    array(
       'classID' => '6639',
       'className' => 'IS-410 WORK EXPERIENCE II',
    ),
    1273 => 
    array(
       'classID' => '6640',
       'className' => 'IS-421 ADVANCED WEB APPLICATIONS',
    ),
    1274 => 
    array(
       'classID' => '6641',
       'className' => 'IS-448 USABILITY & MEASURING USER EXP',
    ),
    1275 => 
    array(
       'classID' => '6642',
       'className' => 'IS-455 IS MGMT & BUSINESS PROCESSES',
    ),
    1276 => 
    array(
       'classID' => '6643',
       'className' => 'IS-465 ADVANCED INFORMATION SYSTEMS',
    ),
    1277 => 
    array(
       'classID' => '6644',
       'className' => 'IS-488 INDEPENDENT STUDY IN IS',
    ),
    1278 => 
    array(
       'classID' => '6645',
       'className' => 'IS-489 IS UNDERGRAD THESIS RESEARCH',
    ),
    1279 => 
    array(
       'classID' => '6646',
       'className' => 'IS-491 SENIOR PROJECT - IS',
    ),
    1280 => 
    array(
       'classID' => '6647',
       'className' => 'IS-590 GRADUATE CO-OP WORK EXPER I',
    ),
    1281 => 
    array(
       'classID' => '6648',
       'className' => 'IS-591 GRADUATE CO-OP WORK EXPER II',
    ),
    1282 => 
    array(
       'classID' => '6649',
       'className' => 'IS-592 GRADUATE CO-OP WORK EXPER III',
    ),
    1283 => 
    array(
       'classID' => '6650',
       'className' => 'IS-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1284 => 
    array(
       'classID' => '6651',
       'className' => 'IS-631 ENTERPRISE DATABASE MANAGEMENT',
    ),
    1285 => 
    array(
       'classID' => '6652',
       'className' => 'IS-634 INFORMATION RETRIEVAL',
    ),
    1286 => 
    array(
       'classID' => '6653',
       'className' => 'IS-661 USER EXPERIENCE DESIGN',
    ),
    1287 => 
    array(
       'classID' => '6654',
       'className' => 'IS-663 ADV SYSTEMS ANALYSIS & DESIGN',
    ),
    1288 => 
    array(
       'classID' => '6655',
       'className' => 'IS-663 SYSTEMS ANALYSIS & DESIGN',
    ),
    1289 => 
    array(
       'classID' => '6656',
       'className' => 'IS-664 CUSTOMER DISCOVERY',
    ),
    1290 => 
    array(
       'classID' => '6657',
       'className' => 'IS-665 DATA ANALYTICS FOR INFO SYSTEM',
    ),
    1291 => 
    array(
       'classID' => '6658',
       'className' => 'IS-676 REQUIREMENT ENGINEERING',
    ),
    1292 => 
    array(
       'classID' => '6659',
       'className' => 'IS-677 INFORMATION SYSTEM PRINC',
    ),
    1293 => 
    array(
       'classID' => '6660',
       'className' => 'IS-678 IT SERVICE MANAGEMENT',
    ),
    1294 => 
    array(
       'classID' => '6661',
       'className' => 'IS-680 INFORMATION SYSTEMS AUDITING',
    ),
    1295 => 
    array(
       'classID' => '6662',
       'className' => 'IS-681 COMPUTER SECURITY AUDITING',
    ),
    1296 => 
    array(
       'classID' => '6663',
       'className' => 'IS-682 FORENSIC AUDIT COMPTG SEC',
    ),
    1297 => 
    array(
       'classID' => '6664',
       'className' => 'IS-683 WEB SYSTEMS DEVELOPMENT',
    ),
    1298 => 
    array(
       'classID' => '6665',
       'className' => 'IS-684 BUSINESS PROCESS INNOVATION',
    ),
    1299 => 
    array(
       'classID' => '6666',
       'className' => 'IS-685 ENTERPRISE ARCH & INTEGRATION',
    ),
    1300 => 
    array(
       'classID' => '6667',
       'className' => 'IS-687 TRANSCTN MINING/FRAUD DETECT',
    ),
    1301 => 
    array(
       'classID' => '6668',
       'className' => 'IS-688 WEB MINING',
    ),
    1302 => 
    array(
       'classID' => '6669',
       'className' => 'IS-690 WEB SERVICES AND MIDDLEWARE',
    ),
    1303 => 
    array(
       'classID' => '6670',
       'className' => 'IS-700B MASTER\'S PROJECT',
    ),
    1304 => 
    array(
       'classID' => '6671',
       'className' => 'IS-701B MASTER\'S THESIS',
    ),
    1305 => 
    array(
       'classID' => '6672',
       'className' => 'IS-701C MASTER\'S THESIS',
    ),
    1306 => 
    array(
       'classID' => '6673',
       'className' => 'IS-725 INDEPENDENT RESEARCH I',
    ),
    1307 => 
    array(
       'classID' => '6674',
       'className' => 'IS-726 INDEPENDENT RESEARCH II',
    ),
    1308 => 
    array(
       'classID' => '6675',
       'className' => 'IS-735 SOCIAL MEDIA',
    ),
    1309 => 
    array(
       'classID' => '6676',
       'className' => 'IS-764 RSRCH MTD HUM-CNTRD COMPTG D',
    ),
    1310 => 
    array(
       'classID' => '6677',
       'className' => 'IS-765 QUANT METHODS IN INFOSYS RES',
    ),
    1311 => 
    array(
       'classID' => '6678',
       'className' => 'IS-776 IS RESEARCH PROPOSITION',
    ),
    1312 => 
    array(
       'classID' => '6679',
       'className' => 'IS-790A DOCT DISSERTATION & RES',
    ),
    1313 => 
    array(
       'classID' => '6680',
       'className' => 'IS-790B DOCT DISSERTATION & RES',
    ),
    1314 => 
    array(
       'classID' => '6681',
       'className' => 'IS-790C DOCT DISSERTATION & RES',
    ),
    1315 => 
    array(
       'classID' => '6682',
       'className' => 'IS-790D DOCT DISSERTATION & RES',
    ),
    1316 => 
    array(
       'classID' => '6683',
       'className' => 'IS-790E DOCT DISSERTATION & RES',
    ),
    1317 => 
    array(
       'classID' => '6684',
       'className' => 'IS-790F DOCT DISSERTATION & RES',
    ),
    1318 => 
    array(
       'classID' => '6685',
       'className' => 'IS-791 DOCTORAL SEMINAR',
    ),
    1319 => 
    array(
       'classID' => '6686',
       'className' => 'IS-792 PRE-DOCTORAL RESEARCH',
    ),
    1320 => 
    array(
       'classID' => '6687',
       'className' => 'IT-101 INTRO TO INFORMTN TECHNOLGY',
    ),
    1321 => 
    array(
       'classID' => '6688',
       'className' => 'IT-114 ADVANCED PROGRAMMING FOR IT HONO',
    ),
    1322 => 
    array(
       'classID' => '6689',
       'className' => 'IT-114 ADV PROGRAM FOR INFOR TECH',
    ),
    1323 => 
    array(
       'classID' => '6690',
       'className' => 'IT-114 ADV PROGRAM FOR INFOR TECH - HON',
    ),
    1324 => 
    array(
       'classID' => '6691',
       'className' => 'IT-120 INTRO TO NETWORKING TECHNOLOGY',
    ),
    1325 => 
    array(
       'classID' => '6692',
       'className' => 'IT-201 INFORMATION DESIGN TECH-HONORS',
    ),
    1326 => 
    array(
       'classID' => '6693',
       'className' => 'IT-201 INFORMATION DESIGN TECHNIQUES',
    ),
    1327 => 
    array(
       'classID' => '6694',
       'className' => 'IT-201 INFORMATION DESIGN TECHNIQUES -',
    ),
    1328 => 
    array(
       'classID' => '6695',
       'className' => 'IT-202 ADVANCED INTERNET APPLICATIONS -',
    ),
    1329 => 
    array(
       'classID' => '6696',
       'className' => 'IT-202 INTERNET APPLICATIONS',
    ),
    1330 => 
    array(
       'classID' => '6697',
       'className' => 'IT-202 INTERNET APPLICATIONS - HONORS',
    ),
    1331 => 
    array(
       'classID' => '6698',
       'className' => 'IT-202 INTERNET APPLICATIONS-HONORS',
    ),
    1332 => 
    array(
       'classID' => '6699',
       'className' => 'IT-220 WIRELESS NETWORKS',
    ),
    1333 => 
    array(
       'classID' => '6700',
       'className' => 'IT-220 WIRELESS NETWORKS - HONORS',
    ),
    1334 => 
    array(
       'classID' => '6701',
       'className' => 'IT-230 COMPUTER SYSTEMS SECURITY',
    ),
    1335 => 
    array(
       'classID' => '6702',
       'className' => 'IT-240 SCRIPTING FOR SYSTEM ADMIN',
    ),
    1336 => 
    array(
       'classID' => '6703',
       'className' => 'IT-265 GAME ARCHITECTURE & DESIGN',
    ),
    1337 => 
    array(
       'classID' => '6704',
       'className' => 'IT-266 GAME MOD DEVELOPMENT',
    ),
    1338 => 
    array(
       'classID' => '6705',
       'className' => 'IT-276 2D GAME DEVELOPMENT',
    ),
    1339 => 
    array(
       'classID' => '6706',
       'className' => 'IT-286 FOUNDATIONS OF GAME PRODUCTION',
    ),
    1340 => 
    array(
       'classID' => '6707',
       'className' => 'IT-287 ADVANCED GAME PRODUCTION',
    ),
    1341 => 
    array(
       'classID' => '6708',
       'className' => 'IT-310 E-COMMERCE TECHNOLOGY',
    ),
    1342 => 
    array(
       'classID' => '6709',
       'className' => 'IT-310 E-COMMERCE TECHNOLOGY-HONORS',
    ),
    1343 => 
    array(
       'classID' => '6710',
       'className' => 'IT-311 CO-OP WORK EXPERIENCE I',
    ),
    1344 => 
    array(
       'classID' => '6711',
       'className' => 'IT-330 COMPUTER FORENSIC',
    ),
    1345 => 
    array(
       'classID' => '6712',
       'className' => 'IT-331 PRIVACY & INFORMTN TECHNLGY',
    ),
    1346 => 
    array(
       'classID' => '6713',
       'className' => 'IT-332 DIGITAL CRIME',
    ),
    1347 => 
    array(
       'classID' => '6714',
       'className' => 'IT-340 INTRO TO SYSTEM ADMINISTRATION',
    ),
    1348 => 
    array(
       'classID' => '6715',
       'className' => 'IT-386 3D MODELING AND ANIMATION',
    ),
    1349 => 
    array(
       'classID' => '6716',
       'className' => 'IT-400 INFORMTN TECHNLGY & THE LAW',
    ),
    1350 => 
    array(
       'classID' => '6717',
       'className' => 'IT-400 INFOR TECH & THE LAW - HONORS',
    ),
    1351 => 
    array(
       'classID' => '6718',
       'className' => 'IT-411 CO-OP WORK EXPERIENCE I',
    ),
    1352 => 
    array(
       'classID' => '6719',
       'className' => 'IT-420 COMPUTER SYSTEMS AND NETWORKS',
    ),
    1353 => 
    array(
       'classID' => '6720',
       'className' => 'IT-430 ETHICAL HACKING FOR SYS ADMINS',
    ),
    1354 => 
    array(
       'classID' => '6721',
       'className' => 'IT-485 ST: 3D GAME DEVELOPMENT',
    ),
    1355 => 
    array(
       'classID' => '6722',
       'className' => 'IT-485 ST:ANIMATION FOR GAME DEVELOPMEN',
    ),
    1356 => 
    array(
       'classID' => '6723',
       'className' => 'IT-488 INDEPENDENT STUDY',
    ),
    1357 => 
    array(
       'classID' => '6724',
       'className' => 'IT-488 INDEPENDENT STUDY HONORS',
    ),
    1358 => 
    array(
       'classID' => '6725',
       'className' => 'IT-490 SYSTEMS INTEGRATION',
    ),
    1359 => 
    array(
       'classID' => '6726',
       'className' => 'IT-491 INFORMTN TECHNLGY CAPSTONE',
    ),
    1360 => 
    array(
       'classID' => '6727',
       'className' => 'IT-610 SYSTEMS ADMINISTRATION',
    ),
    1361 => 
    array(
       'classID' => '6728',
       'className' => 'IT-620 WIRELESS NET SECURITY & ADMIN',
    ),
    1362 => 
    array(
       'classID' => '6729',
       'className' => 'IT-635 DATABASE ADMININSTRATION',
    ),
    1363 => 
    array(
       'classID' => '6730',
       'className' => 'IT-640 NETWORK SERVCES ADMINISTRTN',
    ),
    1364 => 
    array(
       'classID' => '6731',
       'className' => 'IT-725 INDEPENDENT STUDY',
    ),
    1365 => 
    array(
       'classID' => '6732',
       'className' => 'LIT-320 AMERICAN LITERATURE',
    ),
    1366 => 
    array(
       'classID' => '6733',
       'className' => 'LIT-360 DRAMA',
    ),
    1367 => 
    array(
       'classID' => '6734',
       'className' => 'LIT-363 ETHNIC & MINORITY DRAMA',
    ),
    1368 => 
    array(
       'classID' => '6735',
       'className' => 'LIT-364 MOD CONT & BRIT DRAMA',
    ),
    1369 => 
    array(
       'classID' => '6736',
       'className' => 'LIT-378 LITERATURE & NATURE',
    ),
    1370 => 
    array(
       'classID' => '6737',
       'className' => 'LIT-382 THE COMIC TRADITION',
    ),
    1371 => 
    array(
       'classID' => '6738',
       'className' => 'LIT-384 MUSICAL THEATER ADAPTATIONS',
    ),
    1372 => 
    array(
       'classID' => '6739',
       'className' => 'LIT-386 SCIENCE FICTION',
    ),
    1373 => 
    array(
       'classID' => '6740',
       'className' => 'MATH-101 FOUNDATIONS OF MATH LIB ARTS',
    ),
    1374 => 
    array(
       'classID' => '6741',
       'className' => 'MATH-102 MODERN PRECALCULUS',
    ),
    1375 => 
    array(
       'classID' => '6742',
       'className' => 'MATH-105 ELEM PROBABILITY & STATISTICS',
    ),
    1376 => 
    array(
       'classID' => '6743',
       'className' => 'MATH-107 UNIVERSITY MATHEMATICS B I',
    ),
    1377 => 
    array(
       'classID' => '6744',
       'className' => 'MATH-108 UNIVERSITY MATHEMATICS I-B',
    ),
    1378 => 
    array(
       'classID' => '6745',
       'className' => 'MATH-110 UNIVERSITY MATHEMATICS B II',
    ),
    1379 => 
    array(
       'classID' => '6746',
       'className' => 'MATH-111 CALCULUS I',
    ),
    1380 => 
    array(
       'classID' => '6747',
       'className' => 'MATH-111 CALCULUS I - HONORS',
    ),
    1381 => 
    array(
       'classID' => '6748',
       'className' => 'MATH-112 CALCULUS II',
    ),
    1382 => 
    array(
       'classID' => '6749',
       'className' => 'MATH-112 CALCULUS II - HONORS',
    ),
    1383 => 
    array(
       'classID' => '6750',
       'className' => 'MATH-113 FINITE MATH & CALCULUS I',
    ),
    1384 => 
    array(
       'classID' => '6751',
       'className' => 'MATH-115 ELEMENTS OF GEOMETRY',
    ),
    1385 => 
    array(
       'classID' => '6752',
       'className' => 'MATH-116 MATHEMATICS OF DESIGN',
    ),
    1386 => 
    array(
       'classID' => '6753',
       'className' => 'MATH-120 BASIC CONCEPTS IN STATISTICS',
    ),
    1387 => 
    array(
       'classID' => '6754',
       'className' => 'MATH-135 CALCULUS FOR BUSINESS',
    ),
    1388 => 
    array(
       'classID' => '6755',
       'className' => 'MATH-138 GENERAL CALCULUS',
    ),
    1389 => 
    array(
       'classID' => '6756',
       'className' => 'MATH-139 TRIGONOMETRY&PRIN OF DIFF CALC',
    ),
    1390 => 
    array(
       'classID' => '6757',
       'className' => 'MATH-211 CALCULUS IIIA',
    ),
    1391 => 
    array(
       'classID' => '6758',
       'className' => 'MATH-211 CALCULUS IIIA - HONORS',
    ),
    1392 => 
    array(
       'classID' => '6759',
       'className' => 'MATH-213 CALCULUS IIIB',
    ),
    1393 => 
    array(
       'classID' => '6760',
       'className' => 'MATH-222 DIFFERENTIAL EQUATIONS',
    ),
    1394 => 
    array(
       'classID' => '6761',
       'className' => 'MATH-222 DIFFERENTIAL EQUATIONS - HONORS',
    ),
    1395 => 
    array(
       'classID' => '6762',
       'className' => 'MATH-225 SURVEY OF PROB AND STATS',
    ),
    1396 => 
    array(
       'classID' => '6763',
       'className' => 'MATH-227 MATHEMATICAL MODELING',
    ),
    1397 => 
    array(
       'classID' => '6764',
       'className' => 'MATH-238 GENERAL CALCULUS II',
    ),
    1398 => 
    array(
       'classID' => '6765',
       'className' => 'MATH-244 INT TO PROBABLITY THEORY',
    ),
    1399 => 
    array(
       'classID' => '6766',
       'className' => 'MATH-279 STATS &PROBABILITY FOR ENGR',
    ),
    1400 => 
    array(
       'classID' => '6767',
       'className' => 'MATH-305 STATISTICS-TECHNOLOGY',
    ),
    1401 => 
    array(
       'classID' => '6768',
       'className' => 'MATH-309 MATH ANALYSIS FOR TECH',
    ),
    1402 => 
    array(
       'classID' => '6769',
       'className' => 'MATH-310 WORK EXPERIENCE I',
    ),
    1403 => 
    array(
       'classID' => '6770',
       'className' => 'MATH-322 DIFF EQUATIONS FOR APPLICATION',
    ),
    1404 => 
    array(
       'classID' => '6771',
       'className' => 'MATH-326 DISCRETE ANALYS FOR COE',
    ),
    1405 => 
    array(
       'classID' => '6772',
       'className' => 'MATH-328 MATH METHODS FOR SCI & ENGR',
    ),
    1406 => 
    array(
       'classID' => '6773',
       'className' => 'MATH-331 INTRO PARTIAL DIFF EQ',
    ),
    1407 => 
    array(
       'classID' => '6774',
       'className' => 'MATH-332 INTRO COMPLEX VARIABLES',
    ),
    1408 => 
    array(
       'classID' => '6775',
       'className' => 'MATH-333 PROBABILITY & STATISTICS',
    ),
    1409 => 
    array(
       'classID' => '6776',
       'className' => 'MATH-333 PROBABILITY & STATISTICS HONORS',
    ),
    1410 => 
    array(
       'classID' => '6777',
       'className' => 'MATH-335 VECTOR ANALYSIS',
    ),
    1411 => 
    array(
       'classID' => '6778',
       'className' => 'MATH-337 LINEAR ALGEBRA',
    ),
    1412 => 
    array(
       'classID' => '6779',
       'className' => 'MATH-337 LINEAR ALGEBRA - HONORS',
    ),
    1413 => 
    array(
       'classID' => '6780',
       'className' => 'MATH-340 APPLIED NUMERICAL METHODS',
    ),
    1414 => 
    array(
       'classID' => '6781',
       'className' => 'MATH-341 STATS METHODS I',
    ),
    1415 => 
    array(
       'classID' => '6782',
       'className' => 'MATH-344 REGRESSION ANALYSIS',
    ),
    1416 => 
    array(
       'classID' => '6783',
       'className' => 'MATH-345 MULTIVARIATE DISTRIBUTIONS',
    ),
    1417 => 
    array(
       'classID' => '6784',
       'className' => 'MATH-346 MATHEMATICS OF FINANCE I',
    ),
    1418 => 
    array(
       'classID' => '6785',
       'className' => 'MATH-346 MATHEMATICS OF FINANCE I - HONO',
    ),
    1419 => 
    array(
       'classID' => '6786',
       'className' => 'MATH-347 MATHEMATICS OF FINANCE II',
    ),
    1420 => 
    array(
       'classID' => '6787',
       'className' => 'MATH-371 PHYSIOLOGY AND MEDICINE',
    ),
    1421 => 
    array(
       'classID' => '6788',
       'className' => 'MATH-373 INTRO TO MATHEMATICAL BIOLOGY',
    ),
    1422 => 
    array(
       'classID' => '6789',
       'className' => 'MATH-391 NUMERICAL LINEAR ALGEBRA',
    ),
    1423 => 
    array(
       'classID' => '6790',
       'className' => 'MATH-410 WORK EXPERIENCE II',
    ),
    1424 => 
    array(
       'classID' => '6791',
       'className' => 'MATH-430 ANALYTICL & COMPUTNL NEUROSCI',
    ),
    1425 => 
    array(
       'classID' => '6792',
       'className' => 'MATH-432 MATH OF FINANCIAL DERIVATIVES I',
    ),
    1426 => 
    array(
       'classID' => '6793',
       'className' => 'MATH-433 MATH OF FINANCIAL DERIVATIVES I',
    ),
    1427 => 
    array(
       'classID' => '6794',
       'className' => 'MATH-440 ADV APPL NUMERICAL METH',
    ),
    1428 => 
    array(
       'classID' => '6795',
       'className' => 'MATH-441 ACTUARIAL MATHEMATICS I',
    ),
    1429 => 
    array(
       'classID' => '6796',
       'className' => 'MATH-442 ACTUARIAL MATHEMATICS II',
    ),
    1430 => 
    array(
       'classID' => '6797',
       'className' => 'MATH-447 APPLIED TIME SERIES ANALYSIS',
    ),
    1431 => 
    array(
       'classID' => '6798',
       'className' => 'MATH-448 STOCHASTIC SIMULATION',
    ),
    1432 => 
    array(
       'classID' => '6799',
       'className' => 'MATH-450 METHODS OF APPLIED MATH-HONORS',
    ),
    1433 => 
    array(
       'classID' => '6800',
       'className' => 'MATH-451 METHODS APPL MATH II - HONORS',
    ),
    1434 => 
    array(
       'classID' => '6801',
       'className' => 'MATH-473 INTERMED DIFFEREN EQUATN',
    ),
    1435 => 
    array(
       'classID' => '6802',
       'className' => 'MATH-477 STOCHASTIC PROCESSES',
    ),
    1436 => 
    array(
       'classID' => '6803',
       'className' => 'MATH-480 INTRO MATH ANALYSIS',
    ),
    1437 => 
    array(
       'classID' => '6804',
       'className' => 'MATH-481 ADVANCED CALCULUS',
    ),
    1438 => 
    array(
       'classID' => '6805',
       'className' => 'MATH-491 INDEPENDENT STDY IN MATH',
    ),
    1439 => 
    array(
       'classID' => '6806',
       'className' => 'MATH-545 INTRO MATH ANALYSIS',
    ),
    1440 => 
    array(
       'classID' => '6807',
       'className' => 'MATH-546 ADVANCED CALCULUS II',
    ),
    1441 => 
    array(
       'classID' => '6808',
       'className' => 'MATH-573 INTERMED DIFF EQUATIONS',
    ),
    1442 => 
    array(
       'classID' => '6809',
       'className' => 'MATH-590 GRADUATE CO-OP WORK EXPER I',
    ),
    1443 => 
    array(
       'classID' => '6810',
       'className' => 'MATH-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1444 => 
    array(
       'classID' => '6811',
       'className' => 'MATH-599 TEACHING IN MATHEMATICS',
    ),
    1445 => 
    array(
       'classID' => '6812',
       'className' => 'MATH-604 MATHEMATICAL FINANCE',
    ),
    1446 => 
    array(
       'classID' => '6813',
       'className' => 'MATH-605 STOCHASTIC CALCULUS',
    ),
    1447 => 
    array(
       'classID' => '6814',
       'className' => 'MATH-606 TERM STRUCTURE MODELS',
    ),
    1448 => 
    array(
       'classID' => '6815',
       'className' => 'MATH-607 CREDIT RISK MODELS',
    ),
    1449 => 
    array(
       'classID' => '6816',
       'className' => 'MATH-608 PARTIAL DIFF EQ FOR FINANCE',
    ),
    1450 => 
    array(
       'classID' => '6817',
       'className' => 'MATH-609 PROJECTS IN MATH COMP FINANCE',
    ),
    1451 => 
    array(
       'classID' => '6818',
       'className' => 'MATH-611 NUMER METH FOR COMPUTATN',
    ),
    1452 => 
    array(
       'classID' => '6819',
       'className' => 'MATH-613 ADV APPLIED MATH-MODELNG',
    ),
    1453 => 
    array(
       'classID' => '6820',
       'className' => 'MATH-614 NUMERICAL METHODS I',
    ),
    1454 => 
    array(
       'classID' => '6821',
       'className' => 'MATH-630 LINEAR ALGEBRA & APPLICA',
    ),
    1455 => 
    array(
       'classID' => '6822',
       'className' => 'MATH-631 LINEAR ALGEBRA',
    ),
    1456 => 
    array(
       'classID' => '6823',
       'className' => 'MATH-635 ANALYTCL COMPUTATIONAL NEURO',
    ),
    1457 => 
    array(
       'classID' => '6824',
       'className' => 'MATH-637 FOUND OF MATHEMATICAL BIOLOGY',
    ),
    1458 => 
    array(
       'classID' => '6825',
       'className' => 'MATH-644 REGRESSION ANALYSIS METH',
    ),
    1459 => 
    array(
       'classID' => '6826',
       'className' => 'MATH-645 ANALYSIS',
    ),
    1460 => 
    array(
       'classID' => '6827',
       'className' => 'MATH-651 METHODS OF APPLIED MATH I',
    ),
    1461 => 
    array(
       'classID' => '6828',
       'className' => 'MATH-654 CLINICAL TRIALS DESIGN &ANALYS',
    ),
    1462 => 
    array(
       'classID' => '6829',
       'className' => 'MATH-656 COMPLEX VARIABLES',
    ),
    1463 => 
    array(
       'classID' => '6830',
       'className' => 'MATH-659 SURVIVAL ANALYSIS',
    ),
    1464 => 
    array(
       'classID' => '6831',
       'className' => 'MATH-660 INTRO TO STAT COMP W/ SAS & R',
    ),
    1465 => 
    array(
       'classID' => '6832',
       'className' => 'MATH-661 APPLIED STATISTICS',
    ),
    1466 => 
    array(
       'classID' => '6833',
       'className' => 'MATH-662 PROBABILITY DISTRIBUTIONS',
    ),
    1467 => 
    array(
       'classID' => '6834',
       'className' => 'MATH-663 INTRODUCTION TO BIOSTATISTICS',
    ),
    1468 => 
    array(
       'classID' => '6835',
       'className' => 'MATH-664 METHODS FOR STAT CONSULT',
    ),
    1469 => 
    array(
       'classID' => '6836',
       'className' => 'MATH-665 STATISTICAL INFERENCE',
    ),
    1470 => 
    array(
       'classID' => '6837',
       'className' => 'MATH-666 SIMULATION FOR FINANCE',
    ),
    1471 => 
    array(
       'classID' => '6838',
       'className' => 'MATH-671 ASYMPTOTIC METHODS I',
    ),
    1472 => 
    array(
       'classID' => '6839',
       'className' => 'MATH-676 ADV ORDINARY DIFFE EQ',
    ),
    1473 => 
    array(
       'classID' => '6840',
       'className' => 'MATH-689 ADV APPLIED MATH II',
    ),
    1474 => 
    array(
       'classID' => '6841',
       'className' => 'MATH-690 ADV APPLIED MATH III',
    ),
    1475 => 
    array(
       'classID' => '6842',
       'className' => 'MATH-691 STOCHASTIC PROCESSES',
    ),
    1476 => 
    array(
       'classID' => '6843',
       'className' => 'MATH-692 MSMCF FORUM',
    ),
    1477 => 
    array(
       'classID' => '6844',
       'className' => 'MATH-698 SAMPLING THEORY',
    ),
    1478 => 
    array(
       'classID' => '6845',
       'className' => 'MATH-699 DES & ANALY EXPERIMENTS',
    ),
    1479 => 
    array(
       'classID' => '6846',
       'className' => 'MATH-712 NUMERICAL METHODS II',
    ),
    1480 => 
    array(
       'classID' => '6847',
       'className' => 'MATH-722 WAVE PROPAGATION',
    ),
    1481 => 
    array(
       'classID' => '6848',
       'className' => 'MATH-725 INDEPENDENT STUDY I',
    ),
    1482 => 
    array(
       'classID' => '6849',
       'className' => 'MATH-745 MATHMATICAL ANALYSIS II',
    ),
    1483 => 
    array(
       'classID' => '6850',
       'className' => 'MATH-763 GENERALIZED LINEAR MODELS',
    ),
    1484 => 
    array(
       'classID' => '6851',
       'className' => 'MATH-767 FAST NUMERICAL ALGORITHMS',
    ),
    1485 => 
    array(
       'classID' => '6852',
       'className' => 'MATH-768 PROBABILITY THEORY',
    ),
    1486 => 
    array(
       'classID' => '6853',
       'className' => 'MATH-786 LARGE SAMPLE THEORY & INFRNCE',
    ),
    1487 => 
    array(
       'classID' => '6854',
       'className' => 'MATH-787 NON-PARAMETRIC STATISTICS',
    ),
    1488 => 
    array(
       'classID' => '6855',
       'className' => 'MATH-791 GRADUATE SEMINAR',
    ),
    1489 => 
    array(
       'classID' => '6856',
       'className' => 'MATH-E MATH STACK ENGINEERS',
    ),
    1490 => 
    array(
       'classID' => '6857',
       'className' => 'MATH-NE MATH STACK FOR NON-ENGINEERS',
    ),
    1491 => 
    array(
       'classID' => '6858',
       'className' => 'ME-215 ENGR MATERIALS & PROCESSES - HON',
    ),
    1492 => 
    array(
       'classID' => '6859',
       'className' => 'ME-215 ENGR MATERLS & PROCESSES',
    ),
    1493 => 
    array(
       'classID' => '6860',
       'className' => 'ME-231 KINEMATICS OF MACHINERY',
    ),
    1494 => 
    array(
       'classID' => '6861',
       'className' => 'ME-304 FLUID MECHANICS',
    ),
    1495 => 
    array(
       'classID' => '6862',
       'className' => 'ME-305 INTRO TO SYSTEM DYNAMICS',
    ),
    1496 => 
    array(
       'classID' => '6863',
       'className' => 'ME-310 WORK EXPERIENCE I',
    ),
    1497 => 
    array(
       'classID' => '6864',
       'className' => 'ME-311 THERMODYNAMICS I',
    ),
    1498 => 
    array(
       'classID' => '6865',
       'className' => 'ME-312 THERMODYNAMICS II',
    ),
    1499 => 
    array(
       'classID' => '6866',
       'className' => 'ME-315 STRESS ANALYSIS',
    ),
    1500 => 
    array(
       'classID' => '6867',
       'className' => 'ME-316 MACHINE DESIGN',
    ),
    1501 => 
    array(
       'classID' => '6868',
       'className' => 'ME-316 MACHINE DESIGN - HONORS',
    ),
    1502 => 
    array(
       'classID' => '6869',
       'className' => 'ME-339 FUNDAMTLS OF MACH DESIGN',
    ),
    1503 => 
    array(
       'classID' => '6870',
       'className' => 'ME-343 MECHANICAL LAB I',
    ),
    1504 => 
    array(
       'classID' => '6871',
       'className' => 'ME-403 MECH SYSTEMS DESIGN I',
    ),
    1505 => 
    array(
       'classID' => '6872',
       'className' => 'ME-405 MECHANICAL LAB II',
    ),
    1506 => 
    array(
       'classID' => '6873',
       'className' => 'ME-406 MECHANICAL LAB III',
    ),
    1507 => 
    array(
       'classID' => '6874',
       'className' => 'ME-407 HEAT TRANSFER',
    ),
    1508 => 
    array(
       'classID' => '6875',
       'className' => 'ME-408 MECH SYSTEMS DESIGN II',
    ),
    1509 => 
    array(
       'classID' => '6876',
       'className' => 'ME-408 MECH SYSTEMS DESIGN II - HONORS',
    ),
    1510 => 
    array(
       'classID' => '6877',
       'className' => 'ME-410 WORK EXPERIENCE II',
    ),
    1511 => 
    array(
       'classID' => '6878',
       'className' => 'ME-425 FINITE ELEM METH IN ME',
    ),
    1512 => 
    array(
       'classID' => '6879',
       'className' => 'ME-425 FINITE ELEM METH IN ME- HONORS',
    ),
    1513 => 
    array(
       'classID' => '6880',
       'className' => 'ME-430 INTRO COMPUTER AIDED DES',
    ),
    1514 => 
    array(
       'classID' => '6881',
       'className' => 'ME-432 AIR CONDITION & REFRIGERATION',
    ),
    1515 => 
    array(
       'classID' => '6882',
       'className' => 'ME-433 VIBRATION ANALYSIS',
    ),
    1516 => 
    array(
       'classID' => '6883',
       'className' => 'ME-438 INTRO PHYSICAL METALLURGY',
    ),
    1517 => 
    array(
       'classID' => '6884',
       'className' => 'ME-439 PRINCIPLES OF TRIBIOLOGY',
    ),
    1518 => 
    array(
       'classID' => '6885',
       'className' => 'ME-441 COMP SIM & ANALY MECH ENGR',
    ),
    1519 => 
    array(
       'classID' => '6886',
       'className' => 'ME-451 INTRO TO AERODYNAMICS',
    ),
    1520 => 
    array(
       'classID' => '6887',
       'className' => 'ME-452 DYNAMICS OF SPACE FLIGHT',
    ),
    1521 => 
    array(
       'classID' => '6888',
       'className' => 'ME-452 DYNAMICS OF SPACE FLIGHT- HONORS',
    ),
    1522 => 
    array(
       'classID' => '6889',
       'className' => 'ME-455 AUTOMATIC CONTROLS',
    ),
    1523 => 
    array(
       'classID' => '6890',
       'className' => 'ME-470 ENGR PROP OF PLASTICS',
    ),
    1524 => 
    array(
       'classID' => '6891',
       'className' => 'ME-490 MECH ENGR PROJECT A',
    ),
    1525 => 
    array(
       'classID' => '6892',
       'className' => 'ME-590 COOP INDUSTRIAL EXPER I',
    ),
    1526 => 
    array(
       'classID' => '6893',
       'className' => 'ME-591 COOP INDUSTRIAL EXPER II',
    ),
    1527 => 
    array(
       'classID' => '6894',
       'className' => 'ME-592 COOP INDUSTRIAL EXPE III',
    ),
    1528 => 
    array(
       'classID' => '6895',
       'className' => 'ME-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1529 => 
    array(
       'classID' => '6896',
       'className' => 'ME-607 ADVANCED THERMODYNAMICS',
    ),
    1530 => 
    array(
       'classID' => '6897',
       'className' => 'ME-610 APPLIED HEAT TRANSFER',
    ),
    1531 => 
    array(
       'classID' => '6898',
       'className' => 'ME-611 DYNAM OF INCOMP FLUIDS',
    ),
    1532 => 
    array(
       'classID' => '6899',
       'className' => 'ME-614 CONTINUUM MECHANICS',
    ),
    1533 => 
    array(
       'classID' => '6900',
       'className' => 'ME-616 MATRIX TENSOR METH IN ME',
    ),
    1534 => 
    array(
       'classID' => '6901',
       'className' => 'ME-618 ST: MECHANICAL BEHAVIOR OF MATER',
    ),
    1535 => 
    array(
       'classID' => '6902',
       'className' => 'ME-620 STRESS METHD IN MECH DSN',
    ),
    1536 => 
    array(
       'classID' => '6903',
       'className' => 'ME-621 ENERGY METHD IN MECH DGN',
    ),
    1537 => 
    array(
       'classID' => '6904',
       'className' => 'ME-622 FINITE ELEM METHDS IN ME',
    ),
    1538 => 
    array(
       'classID' => '6905',
       'className' => 'ME-625 INTRO TO ROBOTICS',
    ),
    1539 => 
    array(
       'classID' => '6906',
       'className' => 'ME-630 ANAL METHDS IN MACHN DGN',
    ),
    1540 => 
    array(
       'classID' => '6907',
       'className' => 'ME-632 MECHANICAL ENGIN MEASUREMENTS',
    ),
    1541 => 
    array(
       'classID' => '6908',
       'className' => 'ME-635 COMPUTER-AIDED DESIGN',
    ),
    1542 => 
    array(
       'classID' => '6909',
       'className' => 'ME-636 MECHANISM DESIGN',
    ),
    1543 => 
    array(
       'classID' => '6910',
       'className' => 'ME-655 MODERN CONTROL METHODS',
    ),
    1544 => 
    array(
       'classID' => '6911',
       'className' => 'ME-678 DESIGN PLASTIC PRODUCTS',
    ),
    1545 => 
    array(
       'classID' => '6912',
       'className' => 'ME-700B MASTER\'S PROJECT',
    ),
    1546 => 
    array(
       'classID' => '6913',
       'className' => 'ME-701B MASTER\'S THESIS',
    ),
    1547 => 
    array(
       'classID' => '6914',
       'className' => 'ME-701C MASTER\'S THESIS',
    ),
    1548 => 
    array(
       'classID' => '6915',
       'className' => 'ME-714 PRINC PARTICULATE MULTI FLOW',
    ),
    1549 => 
    array(
       'classID' => '6916',
       'className' => 'ME-725 INDEPENDENT STUDY I',
    ),
    1550 => 
    array(
       'classID' => '6917',
       'className' => 'ME-726 INDEPENDENT STUDY II',
    ),
    1551 => 
    array(
       'classID' => '6918',
       'className' => 'ME-727 INDEPENDENT STUDY III',
    ),
    1552 => 
    array(
       'classID' => '6919',
       'className' => 'ME-738 COMPUTER AIDED ENGINEERING',
    ),
    1553 => 
    array(
       'classID' => '6920',
       'className' => 'ME-790A DOC DISSERTATION & RES',
    ),
    1554 => 
    array(
       'classID' => '6921',
       'className' => 'ME-790B DOC DISSERTATION & RES',
    ),
    1555 => 
    array(
       'classID' => '6922',
       'className' => 'ME-790C DOCT DISSERTATION & RES',
    ),
    1556 => 
    array(
       'classID' => '6923',
       'className' => 'ME-790D DOCT DISSERTATION & RES',
    ),
    1557 => 
    array(
       'classID' => '6924',
       'className' => 'ME-790E DOCT DISSERTATION & RES',
    ),
    1558 => 
    array(
       'classID' => '6925',
       'className' => 'ME-790F DOCTORAL DISS & RESEARCH',
    ),
    1559 => 
    array(
       'classID' => '6926',
       'className' => 'ME-790G DOCTORAL DISSERTATION',
    ),
    1560 => 
    array(
       'classID' => '6927',
       'className' => 'ME-792B PRE-DOCTORAL RESEARCH',
    ),
    1561 => 
    array(
       'classID' => '6928',
       'className' => 'ME-792C PRE-DOCTORAL RESEARCH',
    ),
    1562 => 
    array(
       'classID' => '6929',
       'className' => 'ME-792D PRE DOCTORAL RESEARCH',
    ),
    1563 => 
    array(
       'classID' => '6930',
       'className' => 'ME-794 MECHANICAL COLLOQUIUM',
    ),
    1564 => 
    array(
       'classID' => '6931',
       'className' => 'MECH-234 ENGINEERING MECHANICS',
    ),
    1565 => 
    array(
       'classID' => '6932',
       'className' => 'MECH-235 STATICS',
    ),
    1566 => 
    array(
       'classID' => '6933',
       'className' => 'MECH-236 DYNAMICS',
    ),
    1567 => 
    array(
       'classID' => '6934',
       'className' => 'MECH-236 DYNAMICS - HONORS',
    ),
    1568 => 
    array(
       'classID' => '6935',
       'className' => 'MECH-237 STRENGTH OF MATERIALS',
    ),
    1569 => 
    array(
       'classID' => '6936',
       'className' => 'MECH-320 STATICS & MECH OF MATERL',
    ),
    1570 => 
    array(
       'classID' => '6937',
       'className' => 'MET-103 ENGRG GRAPHICS & INTRO TO CAD',
    ),
    1571 => 
    array(
       'classID' => '6938',
       'className' => 'MET-105 APPLIED CAD',
    ),
    1572 => 
    array(
       'classID' => '6939',
       'className' => 'MET-205 ADVANCED CAD',
    ),
    1573 => 
    array(
       'classID' => '6940',
       'className' => 'MET-235 STATICS FOR TECHNOLOGY',
    ),
    1574 => 
    array(
       'classID' => '6941',
       'className' => 'MET-236 DYNAMICS FOR TECHNOLOGY',
    ),
    1575 => 
    array(
       'classID' => '6942',
       'className' => 'MET-237 STRNGTH OF MATERIALS FOR TEC',
    ),
    1576 => 
    array(
       'classID' => '6943',
       'className' => 'MET-301 ANAL & DGN MACHN ELEMS I',
    ),
    1577 => 
    array(
       'classID' => '6944',
       'className' => 'MET-302 ANAL & DGN MACHN ELEM II',
    ),
    1578 => 
    array(
       'classID' => '6945',
       'className' => 'MET-303 APPLIED THERMODYNAMICS',
    ),
    1579 => 
    array(
       'classID' => '6946',
       'className' => 'MET-304 APPLIED FLUID MECHANICS',
    ),
    1580 => 
    array(
       'classID' => '6947',
       'className' => 'MET-307 PLASTICS TECHNOLOGY',
    ),
    1581 => 
    array(
       'classID' => '6948',
       'className' => 'MET-314 DYNAMICS OF MACHINERY',
    ),
    1582 => 
    array(
       'classID' => '6949',
       'className' => 'MET-395 COOP EXPERIENCE I',
    ),
    1583 => 
    array(
       'classID' => '6950',
       'className' => 'MET-401 MECH DESIGN PROJECT I',
    ),
    1584 => 
    array(
       'classID' => '6951',
       'className' => 'MET-404 APPLIED HEAT TRANSFER',
    ),
    1585 => 
    array(
       'classID' => '6952',
       'className' => 'MET-407 STRUCTURAL DESIGN',
    ),
    1586 => 
    array(
       'classID' => '6953',
       'className' => 'MET-415 AUTOMATIC CONTROL SYSTMS',
    ),
    1587 => 
    array(
       'classID' => '6954',
       'className' => 'MET-448 MECH DESIGN PROJECT II',
    ),
    1588 => 
    array(
       'classID' => '6955',
       'className' => 'MET-491 SPECIAL PROJECTS',
    ),
    1589 => 
    array(
       'classID' => '6956',
       'className' => 'MET-492 SPECIAL PROJECTS',
    ),
    1590 => 
    array(
       'classID' => '6957',
       'className' => 'MET-495 COOP EXPERIENCE II',
    ),
    1591 => 
    array(
       'classID' => '6958',
       'className' => 'MGMT-190 INTRODUCTION TO BUSINESS',
    ),
    1592 => 
    array(
       'classID' => '6959',
       'className' => 'MGMT-216 BUSINESS STATISTICS',
    ),
    1593 => 
    array(
       'classID' => '6960',
       'className' => 'MGMT-290 BUSINESS LAW I',
    ),
    1594 => 
    array(
       'classID' => '6961',
       'className' => 'MGMT-310 COOP WORK EXPERIENCE',
    ),
    1595 => 
    array(
       'classID' => '6962',
       'className' => 'MGMT-316 BUSINESS RESEARCH METHODS',
    ),
    1596 => 
    array(
       'classID' => '6963',
       'className' => 'MGMT-350 KNOWLEGDE MANAGMENT',
    ),
    1597 => 
    array(
       'classID' => '6964',
       'className' => 'MGMT-360 BUSINESS LAW II',
    ),
    1598 => 
    array(
       'classID' => '6965',
       'className' => 'MGMT-390 PRINCIPLES OF BUSINESS',
    ),
    1599 => 
    array(
       'classID' => '6966',
       'className' => 'MGMT-390 PRINCIPLES OF BUSINESS - HONORS',
    ),
    1600 => 
    array(
       'classID' => '6967',
       'className' => 'MGMT-410 COOP WORK EXPERIENCE',
    ),
    1601 => 
    array(
       'classID' => '6968',
       'className' => 'MGMT-480 MANAGING EST & EMERG TECH',
    ),
    1602 => 
    array(
       'classID' => '6969',
       'className' => 'MGMT-491 INTERNATIONAL BUSINESS',
    ),
    1603 => 
    array(
       'classID' => '6970',
       'className' => 'MGMT-492 BUSINESS POLICY',
    ),
    1604 => 
    array(
       'classID' => '6971',
       'className' => 'MGMT-492 BUSINESS POLICY - HONORS',
    ),
    1605 => 
    array(
       'classID' => '6972',
       'className' => 'MGMT-492 BUSINESS POLICY-HONORS',
    ),
    1606 => 
    array(
       'classID' => '6973',
       'className' => 'MGMT-499 SENIORSEM:CAREERPLANNING & MFT',
    ),
    1607 => 
    array(
       'classID' => '6974',
       'className' => 'MGMT-499 SENIOR SEMINAR: CAREER PLANNING',
    ),
    1608 => 
    array(
       'classID' => '6975',
       'className' => 'MGMT-590 COOP WORK EXPERIENCE I',
    ),
    1609 => 
    array(
       'classID' => '6976',
       'className' => 'MGMT-591 COOP WORK EXPERIENCE II',
    ),
    1610 => 
    array(
       'classID' => '6977',
       'className' => 'MGMT-593 COOP WORK EXPERIENCE IV',
    ),
    1611 => 
    array(
       'classID' => '6978',
       'className' => 'MGMT-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1612 => 
    array(
       'classID' => '6979',
       'className' => 'MGMT-620 MANAGEMENT OF TECHNOLOGY',
    ),
    1613 => 
    array(
       'classID' => '6980',
       'className' => 'MGMT-625 DISTRIBUTION LOGISTICS',
    ),
    1614 => 
    array(
       'classID' => '6981',
       'className' => 'MGMT-630 DECISION ANALYSIS',
    ),
    1615 => 
    array(
       'classID' => '6982',
       'className' => 'MGMT-635 DATA MINING&ANAL FOR MNGRS',
    ),
    1616 => 
    array(
       'classID' => '6983',
       'className' => 'MGMT-640 NEW VENTURE MANAGEMENT',
    ),
    1617 => 
    array(
       'classID' => '6984',
       'className' => 'MGMT-641 GLOBAL PROJECT MANAGEMENT',
    ),
    1618 => 
    array(
       'classID' => '6985',
       'className' => 'MGMT-649 CONVENTION, CREATIVITY & INNOV',
    ),
    1619 => 
    array(
       'classID' => '6986',
       'className' => 'MGMT-650 KNOWLEDGE MANAGEMENT',
    ),
    1620 => 
    array(
       'classID' => '6987',
       'className' => 'MGMT-656 PUBLIC POLICY AND BUSINESS',
    ),
    1621 => 
    array(
       'classID' => '6988',
       'className' => 'MGMT-670 INTERNATIONAL BUSINESS',
    ),
    1622 => 
    array(
       'classID' => '6989',
       'className' => 'MGMT-680 ENTREPREN:STRAT NEW BUS',
    ),
    1623 => 
    array(
       'classID' => '6990',
       'className' => 'MGMT-686 CORPORATE GOVERNANCE',
    ),
    1624 => 
    array(
       'classID' => '6991',
       'className' => 'MGMT-688 INTERNET LAW AND POLICY ISSUES',
    ),
    1625 => 
    array(
       'classID' => '6992',
       'className' => 'MGMT-691 LEGAL & ETHICAL ISSUES',
    ),
    1626 => 
    array(
       'classID' => '6993',
       'className' => 'MGMT-692 STRATEGIC MANAGEMENT',
    ),
    1627 => 
    array(
       'classID' => '6994',
       'className' => 'MGMT-699 ST:',
    ),
    1628 => 
    array(
       'classID' => '6995',
       'className' => 'MGMT-699 ST:INTELLECTUAL PROPERTY-RISK, ',
    ),
    1629 => 
    array(
       'classID' => '6996',
       'className' => 'MGMT-699 ST: MANAGEMENT CONSULTING',
    ),
    1630 => 
    array(
       'classID' => '6997',
       'className' => 'MGMT-725 INDEPENDENT STUDY',
    ),
    1631 => 
    array(
       'classID' => '6998',
       'className' => 'MIP-601 INTERDISC INFRAST STUDIO',
    ),
    1632 => 
    array(
       'classID' => '6999',
       'className' => 'MIP-602 INFRASTR TECHNOL STUDIO',
    ),
    1633 => 
    array(
       'classID' => '7000',
       'className' => 'MIP-631 HIST & THEORY INFRASTRUC',
    ),
    1634 => 
    array(
       'classID' => '7001',
       'className' => 'MIP-652 GEOGRAPHIC INFO SYSTEMS',
    ),
    1635 => 
    array(
       'classID' => '7002',
       'className' => 'MIP-655 LAND USE PLANNING',
    ),
    1636 => 
    array(
       'classID' => '7003',
       'className' => 'MIP-673 INFRASTRUCTURE PLANNING',
    ),
    1637 => 
    array(
       'classID' => '7004',
       'className' => 'MIP-675 ELEM INFRASTRUC PLANNING',
    ),
    1638 => 
    array(
       'classID' => '7005',
       'className' => 'MIS-245 INTRO TO MNGMNT INFO SYST',
    ),
    1639 => 
    array(
       'classID' => '7006',
       'className' => 'MIS-363 PROJCT MNGMNT FOR MANAGERS',
    ),
    1640 => 
    array(
       'classID' => '7007',
       'className' => 'MIS-645 INFORMTN SYSTEMS PRINCIPLES',
    ),
    1641 => 
    array(
       'classID' => '7008',
       'className' => 'MIS-648 DEC SUPPORT SYS FOR MNGRS',
    ),
    1642 => 
    array(
       'classID' => '7009',
       'className' => 'MIS-680 MANAGERIAL SCIENCE',
    ),
    1643 => 
    array(
       'classID' => '7010',
       'className' => 'MIS-725 INDEPENDENT STUDY',
    ),
    1644 => 
    array(
       'classID' => '7011',
       'className' => 'MIT-326 ELECTRONIC MEDICAL RECORD DES',
    ),
    1645 => 
    array(
       'classID' => '7012',
       'className' => 'MIT-360 INTRODUCTION TO GERONTOLOGY',
    ),
    1646 => 
    array(
       'classID' => '7013',
       'className' => 'MIT-362 GERIATRIC ENGINEERING I',
    ),
    1647 => 
    array(
       'classID' => '7014',
       'className' => 'MNE-601 COMPUTERIZED MANUFACTURING SYS',
    ),
    1648 => 
    array(
       'classID' => '7015',
       'className' => 'MNE-602 FLEX & COMP INTEG MANUFACTRNG',
    ),
    1649 => 
    array(
       'classID' => '7016',
       'className' => 'MNE-654 DESIGN MANUFACTURABILITY',
    ),
    1650 => 
    array(
       'classID' => '7017',
       'className' => 'MNET-303 ADV TECH IN CAD/CAM',
    ),
    1651 => 
    array(
       'classID' => '7018',
       'className' => 'MNET-315 INDUSTRIAL STATISTICS',
    ),
    1652 => 
    array(
       'classID' => '7019',
       'className' => 'MNET-414 INDUSTRIAL COST ANALYSIS',
    ),
    1653 => 
    array(
       'classID' => '7020',
       'className' => 'MNET-420 QUALITY SYSTEMS',
    ),
    1654 => 
    array(
       'classID' => '7021',
       'className' => 'MNET-495 COOPERATIVE EXPERIEN II',
    ),
    1655 => 
    array(
       'classID' => '7022',
       'className' => 'MR-BMED BIOMEMS SUMMER INSTITUTE',
    ),
    1656 => 
    array(
       'classID' => '7023',
       'className' => 'MR-BMED REU SUMMER PROGRAM',
    ),
    1657 => 
    array(
       'classID' => '7024',
       'className' => 'MR-GRAD MAINTAINING REGISTRATION',
    ),
    1658 => 
    array(
       'classID' => '7025',
       'className' => 'MR-INTL STUDY ABROAD',
    ),
    1659 => 
    array(
       'classID' => '7026',
       'className' => 'MRKT-330 PRINCIPLES OF MARKETING',
    ),
    1660 => 
    array(
       'classID' => '7027',
       'className' => 'MRKT-330 PRINCIPLES OF MARKETING - HONOR',
    ),
    1661 => 
    array(
       'classID' => '7028',
       'className' => 'MRKT-330 PRINC OF MARKETING - HONORS',
    ),
    1662 => 
    array(
       'classID' => '7029',
       'className' => 'MRKT-331 CONSUMER-BUYER BEHAVIOR',
    ),
    1663 => 
    array(
       'classID' => '7030',
       'className' => 'MRKT-332 ADVERTIS THEORY & TECHN',
    ),
    1664 => 
    array(
       'classID' => '7031',
       'className' => 'MRKT-338 PRODUCT DEV & MANAGEMENT',
    ),
    1665 => 
    array(
       'classID' => '7032',
       'className' => 'MRKT-339 SELLING PROMOTION',
    ),
    1666 => 
    array(
       'classID' => '7033',
       'className' => 'MRKT-360 INTERNET MARKETING',
    ),
    1667 => 
    array(
       'classID' => '7034',
       'className' => 'MRKT-430 MARKETING RESEARCH',
    ),
    1668 => 
    array(
       'classID' => '7035',
       'className' => 'MRKT-435 INTERNATIONAL MARKETING',
    ),
    1669 => 
    array(
       'classID' => '7036',
       'className' => 'MRKT-620 GLOBAL MARKETING MANAGEMENT',
    ),
    1670 => 
    array(
       'classID' => '7037',
       'className' => 'MRKT-631 MARKETING RESEARCH',
    ),
    1671 => 
    array(
       'classID' => '7038',
       'className' => 'MRKT-636 DES/DEV HIGH TECH PROD',
    ),
    1672 => 
    array(
       'classID' => '7039',
       'className' => 'MRKT-637 MRKT COMM & PROMOTIONS',
    ),
    1673 => 
    array(
       'classID' => '7040',
       'className' => 'MRKT-638 SALES MGMT FOR TECH PROF',
    ),
    1674 => 
    array(
       'classID' => '7041',
       'className' => 'MRKT-645 INTERNET MARKETING STRATEGY',
    ),
    1675 => 
    array(
       'classID' => '7042',
       'className' => 'MRKT-725 INDEPENDENT STUDY',
    ),
    1676 => 
    array(
       'classID' => '7043',
       'className' => 'MR-RBHS MAINTAIN REGISTRATION-RBHS',
    ),
    1677 => 
    array(
       'classID' => '7044',
       'className' => 'MR-REG MAINTAINING REGISTRATION',
    ),
    1678 => 
    array(
       'classID' => '7045',
       'className' => 'MR-RUTG RUTGERS STUDENT',
    ),
    1679 => 
    array(
       'classID' => '7046',
       'className' => 'MR-UMD MAINTAINING REG-UMD DORM',
    ),
    1680 => 
    array(
       'classID' => '7047',
       'className' => 'MTH-101 STATISTICS & PROBABILITY',
    ),
    1681 => 
    array(
       'classID' => '7048',
       'className' => 'MTH-113 COLLEGE ALGEBRA',
    ),
    1682 => 
    array(
       'classID' => '7049',
       'className' => 'MTH-114 UNIFIED CALCULUS I',
    ),
    1683 => 
    array(
       'classID' => '7050',
       'className' => 'MTH-119 PRE-CALCULUS I',
    ),
    1684 => 
    array(
       'classID' => '7051',
       'className' => 'MTH-120 PRECALCULUS II',
    ),
    1685 => 
    array(
       'classID' => '7052',
       'className' => 'MTH-121 ANAL GEOMETRY & CALC I',
    ),
    1686 => 
    array(
       'classID' => '7053',
       'className' => 'MTH-122 CALC WTH ANALYTC GEO II',
    ),
    1687 => 
    array(
       'classID' => '7054',
       'className' => 'MTH-127 BASIC CALCULUS',
    ),
    1688 => 
    array(
       'classID' => '7055',
       'className' => 'MTH-221 ANAL GEOMETRY & CALC III',
    ),
    1689 => 
    array(
       'classID' => '7056',
       'className' => 'MTH-221 CALC WITH ANALYTIC GEOM III',
    ),
    1690 => 
    array(
       'classID' => '7057',
       'className' => 'MTH-222 DIFFERENTIAL EQUATIONS',
    ),
    1691 => 
    array(
       'classID' => '7058',
       'className' => 'MTH-239 INTRO TO LINEAR ALGEBRA',
    ),
    1692 => 
    array(
       'classID' => '7059',
       'className' => 'MTSE-301 MATERIALS SCIENCE',
    ),
    1693 => 
    array(
       'classID' => '7060',
       'className' => 'MTSE-590 GRAD COOP WORK EXP I',
    ),
    1694 => 
    array(
       'classID' => '7061',
       'className' => 'MTSE-591 GRAD COOP WORK EXPERIENCE II',
    ),
    1695 => 
    array(
       'classID' => '7062',
       'className' => 'MTSE-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1696 => 
    array(
       'classID' => '7063',
       'className' => 'MTSE-601 FUND OF ENGR MATERIAL',
    ),
    1697 => 
    array(
       'classID' => '7064',
       'className' => 'MTSE-602 THERMODYNAMICS OF MATERL',
    ),
    1698 => 
    array(
       'classID' => '7065',
       'className' => 'MTSE-610 MECHANICAL PROP MATERIAL',
    ),
    1699 => 
    array(
       'classID' => '7066',
       'className' => 'MTSE-655 DIFFUS & SOLID STATE KIN',
    ),
    1700 => 
    array(
       'classID' => '7067',
       'className' => 'MTSE-681 COMPOSITE MATERIALS',
    ),
    1701 => 
    array(
       'classID' => '7068',
       'className' => 'MTSE-690 DIRECTED STUDY IN MTSE',
    ),
    1702 => 
    array(
       'classID' => '7069',
       'className' => 'MTSE-719 PHYSCL PRIN CHARACTIZTN SOLID',
    ),
    1703 => 
    array(
       'classID' => '7070',
       'className' => 'MTSE-724 TRANPORT OF ELECTONS & PHOTONS',
    ),
    1704 => 
    array(
       'classID' => '7071',
       'className' => 'MTSE-725 INDEPENDENT STUDY I',
    ),
    1705 => 
    array(
       'classID' => '7072',
       'className' => 'MTSE-726 INDEPENDENT STUDY II',
    ),
    1706 => 
    array(
       'classID' => '7073',
       'className' => 'MTSE-765 SCI & TECH THIN FILMS',
    ),
    1707 => 
    array(
       'classID' => '7074',
       'className' => 'MTSE-780 ST:',
    ),
    1708 => 
    array(
       'classID' => '7075',
       'className' => 'MTSE-791 GRADUATE SEMINAR',
    ),
    1709 => 
    array(
       'classID' => '7076',
       'className' => 'MUS-100 MUSIC APPRECIATION',
    ),
    1710 => 
    array(
       'classID' => '7077',
       'className' => 'NANO-488 INTRO TO NANOTECHNOLOGY',
    ),
    1711 => 
    array(
       'classID' => '7078',
       'className' => 'OM-375 MANAGEMENT SCIENCE',
    ),
    1712 => 
    array(
       'classID' => '7079',
       'className' => 'OPSE-301 OPTICAL SCI & ENGR OPTICS',
    ),
    1713 => 
    array(
       'classID' => '7080',
       'className' => 'OPSE-310 VIRTUAL INSTRUMENTATION',
    ),
    1714 => 
    array(
       'classID' => '7081',
       'className' => 'OPSE-402 OPT SCI & ENGR-APPLICATN',
    ),
    1715 => 
    array(
       'classID' => '7082',
       'className' => 'OPSE-410 BIOPHOTONICS',
    ),
    1716 => 
    array(
       'classID' => '7083',
       'className' => 'PBL-101 PROJECT BASED LEARNING I',
    ),
    1717 => 
    array(
       'classID' => '7084',
       'className' => 'PBL-201 PROJECT BASED LEARNING II',
    ),
    1718 => 
    array(
       'classID' => '7085',
       'className' => 'PE-115 STRNGTH TRNING & CONDING',
    ),
    1719 => 
    array(
       'classID' => '7086',
       'className' => 'PE-117 JOGGING',
    ),
    1720 => 
    array(
       'classID' => '7087',
       'className' => 'PE-118 WALKING',
    ),
    1721 => 
    array(
       'classID' => '7088',
       'className' => 'PE-129 INDIVIDUALIZED FITNESS',
    ),
    1722 => 
    array(
       'classID' => '7089',
       'className' => 'PE-136 INTRO TO KARATE',
    ),
    1723 => 
    array(
       'classID' => '7090',
       'className' => 'PE-137 INTERMEDIATE KARATE',
    ),
    1724 => 
    array(
       'classID' => '7091',
       'className' => 'PE-139 INDIVIDUALIZD FITNESS II',
    ),
    1725 => 
    array(
       'classID' => '7092',
       'className' => 'PE-140 CIRCUIT TRAINING',
    ),
    1726 => 
    array(
       'classID' => '7093',
       'className' => 'PE-141 INTRO TO DANCE',
    ),
    1727 => 
    array(
       'classID' => '7094',
       'className' => 'PE-145 AIR FORCE PHYSICAL TRAINING I',
    ),
    1728 => 
    array(
       'classID' => '7095',
       'className' => 'PE-150 BEGINNING YOGA',
    ),
    1729 => 
    array(
       'classID' => '7096',
       'className' => 'PE-151 INTERMEDIATE YOGA',
    ),
    1730 => 
    array(
       'classID' => '7097',
       'className' => 'PE-170 MODERN DANCE',
    ),
    1731 => 
    array(
       'classID' => '7098',
       'className' => 'PE-171 LATIN DANCE',
    ),
    1732 => 
    array(
       'classID' => '7099',
       'className' => 'PE-180 ZUMBA FITNESS',
    ),
    1733 => 
    array(
       'classID' => '7100',
       'className' => 'PE-1 CIRCUIT TRAINING',
    ),
    1734 => 
    array(
       'classID' => '7101',
       'className' => 'PE-211 INTRO BOWLING',
    ),
    1735 => 
    array(
       'classID' => '7102',
       'className' => 'PE-211 INTRO BOWLING & ARCHERY',
    ),
    1736 => 
    array(
       'classID' => '7103',
       'className' => 'PE-221 BADMINTON',
    ),
    1737 => 
    array(
       'classID' => '7104',
       'className' => 'PE-234 BEGINNING FENCING',
    ),
    1738 => 
    array(
       'classID' => '7105',
       'className' => 'PE-242 INTRO TO RACQUETBALL',
    ),
    1739 => 
    array(
       'classID' => '7106',
       'className' => 'PE-245 AIR FORCE PHYSICAL TRAINING II',
    ),
    1740 => 
    array(
       'classID' => '7107',
       'className' => 'PHB-610 BIOTECH-BIOPHARM PROC & PROD',
    ),
    1741 => 
    array(
       'classID' => '7108',
       'className' => 'PHB-630 PHARM BIOPROCESS ENGINEERING',
    ),
    1742 => 
    array(
       'classID' => '7109',
       'className' => 'PHB-701B MASTER\'S THESIS',
    ),
    1743 => 
    array(
       'classID' => '7110',
       'className' => 'PHB-701C MASTER\'S THESIS',
    ),
    1744 => 
    array(
       'classID' => '7111',
       'className' => 'PHB-725 INDEPENDENT STUDY',
    ),
    1745 => 
    array(
       'classID' => '7112',
       'className' => 'PHB-726 INDEPENDENT STUDY',
    ),
    1746 => 
    array(
       'classID' => '7113',
       'className' => 'PHE-255 TENNIS',
    ),
    1747 => 
    array(
       'classID' => '7114',
       'className' => 'PHE-256 TRACK AND FIELD',
    ),
    1748 => 
    array(
       'classID' => '7115',
       'className' => 'PHE-277 INTRO TO YOGA',
    ),
    1749 => 
    array(
       'classID' => '7116',
       'className' => 'PHEN-500 PHARMACEUTICAL ENGINEERNG FUND',
    ),
    1750 => 
    array(
       'classID' => '7117',
       'className' => 'PHEN-501 PHARMACEUTICAL ENGR FUND II',
    ),
    1751 => 
    array(
       'classID' => '7118',
       'className' => 'PHEN-502 PHARMACTCL ENGR FUND III',
    ),
    1752 => 
    array(
       'classID' => '7119',
       'className' => 'PHEN-590 GRADUATE CO-OP WORK EXPER I',
    ),
    1753 => 
    array(
       'classID' => '7120',
       'className' => 'PHEN-591 GRADUATE CO-OP WORK EXPER II',
    ),
    1754 => 
    array(
       'classID' => '7121',
       'className' => 'PHEN-592 GRADUATE CO-OP WORK EXPER III',
    ),
    1755 => 
    array(
       'classID' => '7122',
       'className' => 'PHEN-601 PRINC OF PHARMCTCL ENGR',
    ),
    1756 => 
    array(
       'classID' => '7123',
       'className' => 'PHEN-602 PHARMACEUTICAL FACILITY DESIGN',
    ),
    1757 => 
    array(
       'classID' => '7124',
       'className' => 'PHEN-603 PHARM UNIT OPER:LIQ&DISP SYS',
    ),
    1758 => 
    array(
       'classID' => '7125',
       'className' => 'PHEN-604 VALIDATION& PHARM INDSTRY',
    ),
    1759 => 
    array(
       'classID' => '7126',
       'className' => 'PHEN-605 PHARMACEUTICAL PACKGING TECH',
    ),
    1760 => 
    array(
       'classID' => '7127',
       'className' => 'PHEN-606 PHARM UNIT OPER:SOLIDS SYSTEMS',
    ),
    1761 => 
    array(
       'classID' => '7128',
       'className' => 'PHEN-612 PHARMACTCL REACTION ENGR',
    ),
    1762 => 
    array(
       'classID' => '7129',
       'className' => 'PHEN-614 PHARMACEUTICAL SEPARATION PROC',
    ),
    1763 => 
    array(
       'classID' => '7130',
       'className' => 'PHEN-618 PRINC PHARMACOKINETICS &DRUG',
    ),
    1764 => 
    array(
       'classID' => '7131',
       'className' => 'PHEN-698 ST:PHARM GLOBAL PROJ MANAGEMENT',
    ),
    1765 => 
    array(
       'classID' => '7132',
       'className' => 'PHEN-725 INDEPENDENT STUDY',
    ),
    1766 => 
    array(
       'classID' => '7133',
       'className' => 'PHIL-334 ENGINEERING ETHICS',
    ),
    1767 => 
    array(
       'classID' => '7134',
       'className' => 'PHIL-334 ENGINEERING ETHICS - HONORS',
    ),
    1768 => 
    array(
       'classID' => '7135',
       'className' => 'PHIL-337 WORLD RELIGIONS',
    ),
    1769 => 
    array(
       'classID' => '7136',
       'className' => 'PHIL-351 BIOMEDICAL ETHICS',
    ),
    1770 => 
    array(
       'classID' => '7137',
       'className' => 'PHIL-355 PHILOSOPHY OF SCIENCE',
    ),
    1771 => 
    array(
       'classID' => '7138',
       'className' => 'PHY-101 COLLEGE PHYSICS I',
    ),
    1772 => 
    array(
       'classID' => '7139',
       'className' => 'PHY-102 COLLEGE PHYSICS',
    ),
    1773 => 
    array(
       'classID' => '7140',
       'className' => 'PHY-102 COLLEGE PHYSICS II',
    ),
    1774 => 
    array(
       'classID' => '7141',
       'className' => 'PHY-103 GENERAL PHYSICS I',
    ),
    1775 => 
    array(
       'classID' => '7142',
       'className' => 'PHYS-102 GENERAL PHYSICS',
    ),
    1776 => 
    array(
       'classID' => '7143',
       'className' => 'PHYS-103 GENERAL PHYSICS',
    ),
    1777 => 
    array(
       'classID' => '7144',
       'className' => 'PHYS-111 PHYSICS I',
    ),
    1778 => 
    array(
       'classID' => '7145',
       'className' => 'PHYS-111 PHYSICS I - HONORS',
    ),
    1779 => 
    array(
       'classID' => '7146',
       'className' => 'PHYS-114 INTRO TO DATA REDUCTION W/APPL',
    ),
    1780 => 
    array(
       'classID' => '7147',
       'className' => 'PHYS-121 PHYSICS II',
    ),
    1781 => 
    array(
       'classID' => '7148',
       'className' => 'PHYS-121 PHYSICS II - HONORS',
    ),
    1782 => 
    array(
       'classID' => '7149',
       'className' => 'PHYS-202 INTRO ASTRONOMY COSMOLGY',
    ),
    1783 => 
    array(
       'classID' => '7150',
       'className' => 'PHYS-203 EARTH IN SPACE',
    ),
    1784 => 
    array(
       'classID' => '7151',
       'className' => 'PHYS-204 BIOPHYSICS OF LIFE',
    ),
    1785 => 
    array(
       'classID' => '7152',
       'className' => 'PHYS-234 PHYSICS III',
    ),
    1786 => 
    array(
       'classID' => '7153',
       'className' => 'PHYS-234 PHYSICS III HONORS',
    ),
    1787 => 
    array(
       'classID' => '7154',
       'className' => 'PHYS-311 WORK EXPERIENCE I',
    ),
    1788 => 
    array(
       'classID' => '7155',
       'className' => 'PHYS-320 ASTRONOMY & ASTROPHYSCIS I',
    ),
    1789 => 
    array(
       'classID' => '7156',
       'className' => 'PHYS-321 ASTRONOMY & ASTROPHYSICS II',
    ),
    1790 => 
    array(
       'classID' => '7157',
       'className' => 'PHYS-322 OBSERVATIONAL ASTRONOMY',
    ),
    1791 => 
    array(
       'classID' => '7158',
       'className' => 'PHYS-350 BIOPHYSICS',
    ),
    1792 => 
    array(
       'classID' => '7159',
       'className' => 'PHYS-418 FUNDMNTLS OF OPTICAL IMAGING',
    ),
    1793 => 
    array(
       'classID' => '7160',
       'className' => 'PHYS-420 SPECIAL RELATIVITY',
    ),
    1794 => 
    array(
       'classID' => '7161',
       'className' => 'PHYS-421 GENERAL RELATIVITY',
    ),
    1795 => 
    array(
       'classID' => '7162',
       'className' => 'PHYS-430 CLASSICAL MECHANICS I',
    ),
    1796 => 
    array(
       'classID' => '7163',
       'className' => 'PHYS-432 ELECTROMAGNETISM I',
    ),
    1797 => 
    array(
       'classID' => '7164',
       'className' => 'PHYS-433 ELECTROMAGNETISM II',
    ),
    1798 => 
    array(
       'classID' => '7165',
       'className' => 'PHYS-441 MODERN PHYSICS',
    ),
    1799 => 
    array(
       'classID' => '7166',
       'className' => 'PHYS-446 SOLID STATE PHYSICS',
    ),
    1800 => 
    array(
       'classID' => '7167',
       'className' => 'PHYS-450 ADVANCED PHYSICS LAB',
    ),
    1801 => 
    array(
       'classID' => '7168',
       'className' => 'PHYS-451 BIOPHYSICS II',
    ),
    1802 => 
    array(
       'classID' => '7169',
       'className' => 'PHYS-490 INDEPENDENT STUDY',
    ),
    1803 => 
    array(
       'classID' => '7170',
       'className' => 'PHYS-490 INDEPENDENT STUDY - HONORS',
    ),
    1804 => 
    array(
       'classID' => '7171',
       'className' => 'PHYS-590 GRADUATE COOP WORK EXP I',
    ),
    1805 => 
    array(
       'classID' => '7172',
       'className' => 'PHYS-591 GRADUATE COOP WORK EXP II',
    ),
    1806 => 
    array(
       'classID' => '7173',
       'className' => 'PHYS-593 GRADUATE CO-OP WORK EXP IV',
    ),
    1807 => 
    array(
       'classID' => '7174',
       'className' => 'PHYS-611 ADV CLASSICAL MECHANICS',
    ),
    1808 => 
    array(
       'classID' => '7175',
       'className' => 'PHYS-621 CLASSICAL ELECTRODYNAMIC',
    ),
    1809 => 
    array(
       'classID' => '7176',
       'className' => 'PHYS-641 STATISTICAL MECHANICS',
    ),
    1810 => 
    array(
       'classID' => '7177',
       'className' => 'PHYS-661 SOLID-STATE PHYSICS',
    ),
    1811 => 
    array(
       'classID' => '7178',
       'className' => 'PHYS-687 PHYSICS OF MATERIALS',
    ),
    1812 => 
    array(
       'classID' => '7179',
       'className' => 'PHYS-690 DIRECTED STUDY APPL PHYS',
    ),
    1813 => 
    array(
       'classID' => '7180',
       'className' => 'PHYS-721 ELECTROMAGNETICS II',
    ),
    1814 => 
    array(
       'classID' => '7181',
       'className' => 'PHYS-725 INDEPENDENT STUDY',
    ),
    1815 => 
    array(
       'classID' => '7182',
       'className' => 'PHYS-726 INDEPENDENT STUDY II',
    ),
    1816 => 
    array(
       'classID' => '7183',
       'className' => 'PHYS-731 QUANTUM MECHANICS II',
    ),
    1817 => 
    array(
       'classID' => '7184',
       'className' => 'PHYS-747 INTRO TO HELIOSEISMOLOGY',
    ),
    1818 => 
    array(
       'classID' => '7185',
       'className' => 'PHYS-780 ST: APPLIED OPTICS',
    ),
    1819 => 
    array(
       'classID' => '7186',
       'className' => 'PHYS-780 ST: SOLAR AND SOLAR-TERRESTRIAL',
    ),
    1820 => 
    array(
       'classID' => '7187',
       'className' => 'PHYS-780 ST:TOPICS IN SOLAR OBSERVATION ',
    ),
    1821 => 
    array(
       'classID' => '7188',
       'className' => 'PHYS-791 DOCTORAL SEMINAR',
    ),
    1822 => 
    array(
       'classID' => '7189',
       'className' => 'PHYS-792 PRE-DOCTORAL RESEARCH',
    ),
    1823 => 
    array(
       'classID' => '7190',
       'className' => 'PSY-101 GENERAL PSYCHOLOGY I',
    ),
    1824 => 
    array(
       'classID' => '7191',
       'className' => 'PSY-219 CHILD PSYCHOLOGY & DEVELOPMENT',
    ),
    1825 => 
    array(
       'classID' => '7192',
       'className' => 'PTC-601 ADV TECH & PROF COMMUNICATION',
    ),
    1826 => 
    array(
       'classID' => '7193',
       'className' => 'PTC-603 IDENTITY, TECH & COMMUNICATION',
    ),
    1827 => 
    array(
       'classID' => '7194',
       'className' => 'PTC-604 COMM THEORY & RESEARCH',
    ),
    1828 => 
    array(
       'classID' => '7195',
       'className' => 'PTC-606 ADVANCED INFORMATION DESIGN',
    ),
    1829 => 
    array(
       'classID' => '7196',
       'className' => 'PTC-610 RES METHODS FOR INFO DESIGN',
    ),
    1830 => 
    array(
       'classID' => '7197',
       'className' => 'PTC-628 ANALYZING SOCIAL NETWORKS',
    ),
    1831 => 
    array(
       'classID' => '7198',
       'className' => 'PTC-629 THEORY & PRAC OF SOC MEDIA',
    ),
    1832 => 
    array(
       'classID' => '7199',
       'className' => 'PTC-640 HEALTH COMMUNICATION',
    ),
    1833 => 
    array(
       'classID' => '7200',
       'className' => 'PTC-672 DESIGN INSTRUCTION ASSESS METH',
    ),
    1834 => 
    array(
       'classID' => '7201',
       'className' => 'PTC-681 TECH IN CLASS & LEARNING ENVIR',
    ),
    1835 => 
    array(
       'classID' => '7202',
       'className' => 'PTC-691 EPORTFOLIO CAPSTONE SEMINAR',
    ),
    1836 => 
    array(
       'classID' => '7203',
       'className' => 'PTC-698 ST:',
    ),
    1837 => 
    array(
       'classID' => '7204',
       'className' => 'PTC-698 ST:CURRICULUM AND INSTRUCTIONAL',
    ),
    1838 => 
    array(
       'classID' => '7205',
       'className' => 'PTC-698 ST: DIGITAL INSTRUCTION ESSENTIA',
    ),
    1839 => 
    array(
       'classID' => '7206',
       'className' => 'PTC-698 ST:DIGITAL INSTRUCTION ESSENTIAL',
    ),
    1840 => 
    array(
       'classID' => '7207',
       'className' => 'PTC-698 ST:RESEARCH WRITING',
    ),
    1841 => 
    array(
       'classID' => '7208',
       'className' => 'PTC-698 ST:UNIVERSAL DESIGN FOR LEARNING',
    ),
    1842 => 
    array(
       'classID' => '7209',
       'className' => 'PTC-700B MASTER\'S PROJECT',
    ),
    1843 => 
    array(
       'classID' => '7210',
       'className' => 'PTC-701B MASTER\'S THESIS',
    ),
    1844 => 
    array(
       'classID' => '7211',
       'className' => 'PTC-701C MASTER\'S THESIS',
    ),
    1845 => 
    array(
       'classID' => '7212',
       'className' => 'PTC-725 INDEPENDENT STUDY',
    ),
    1846 => 
    array(
       'classID' => '7213',
       'className' => 'PTC-726 INDEPENDENT STUDY II',
    ),
    1847 => 
    array(
       'classID' => '7214',
       'className' => 'R010-202 INTRO TO ACCOUNTING II',
    ),
    1848 => 
    array(
       'classID' => '7215',
       'className' => 'R010-203 INTRO FINANCIAL ACCOUNT',
    ),
    1849 => 
    array(
       'classID' => '7216',
       'className' => 'R010-306 INTERMED ACCOUNTING II',
    ),
    1850 => 
    array(
       'classID' => '7217',
       'className' => 'R010-320 BUSINESS LAW II',
    ),
    1851 => 
    array(
       'classID' => '7218',
       'className' => 'R010-372 ESSENT STATEMENT ANLY',
    ),
    1852 => 
    array(
       'classID' => '7219',
       'className' => 'R010-413 FEDERAL TAX I',
    ),
    1853 => 
    array(
       'classID' => '7220',
       'className' => 'R010-502 ACCT FOR MANAGERS - FT',
    ),
    1854 => 
    array(
       'classID' => '7221',
       'className' => 'R010-577 ACCTG. FOR MGRS.',
    ),
    1855 => 
    array(
       'classID' => '7222',
       'className' => 'R010-648 DECODING OF CORP FINANCE',
    ),
    1856 => 
    array(
       'classID' => '7223',
       'className' => 'R010-657 TPC:TAX ACCTG',
    ),
    1857 => 
    array(
       'classID' => '7224',
       'className' => 'R014-111 INTRO AFR/AM STUDIES',
    ),
    1858 => 
    array(
       'classID' => '7225',
       'className' => 'R014-112 INTRO TO BLACK EXP/CUL',
    ),
    1859 => 
    array(
       'classID' => '7226',
       'className' => 'R014-220 CONTMP BLACK THINKERS',
    ),
    1860 => 
    array(
       'classID' => '7227',
       'className' => 'R014-301 AFRICA CUL IN AMRCAS',
    ),
    1861 => 
    array(
       'classID' => '7228',
       'className' => 'R014-302 S/T IN BLACK STUDIES',
    ),
    1862 => 
    array(
       'classID' => '7229',
       'className' => 'R014-303 ST:',
    ),
    1863 => 
    array(
       'classID' => '7230',
       'className' => 'R014-306 RACE REL SO AFR & US',
    ),
    1864 => 
    array(
       'classID' => '7231',
       'className' => 'R014-396 AFRO-AMER COMMUNITY',
    ),
    1865 => 
    array(
       'classID' => '7232',
       'className' => 'R049-109 COMPREHENSION & CONVERSATION',
    ),
    1866 => 
    array(
       'classID' => '7233',
       'className' => 'R049-110 GRAMMAR & COMPOSITION',
    ),
    1867 => 
    array(
       'classID' => '7234',
       'className' => 'R050-200 INTRO TO AMERICAN STUDIES',
    ),
    1868 => 
    array(
       'classID' => '7235',
       'className' => 'R050-488 TOPICS IN AMERICAN STUDIES',
    ),
    1869 => 
    array(
       'classID' => '7236',
       'className' => 'R070-203 INTRO PHYS ANTH & ARCH',
    ),
    1870 => 
    array(
       'classID' => '7237',
       'className' => 'R070-204 INTRO CULTURAL ANTHRO',
    ),
    1871 => 
    array(
       'classID' => '7238',
       'className' => 'R070-220 ANTHROPOL THEOR/METH',
    ),
    1872 => 
    array(
       'classID' => '7239',
       'className' => 'R070-305 CULTURE & PERSONALITY',
    ),
    1873 => 
    array(
       'classID' => '7240',
       'className' => 'R070-306 ANTHRO OF POWER',
    ),
    1874 => 
    array(
       'classID' => '7241',
       'className' => 'R070-310 COMPARATIVE RELIGIONS',
    ),
    1875 => 
    array(
       'classID' => '7242',
       'className' => 'R070-314 TOPICS IN ANTHRO: HUMAN TRAFFI',
    ),
    1876 => 
    array(
       'classID' => '7243',
       'className' => 'R070-314 VISUAL ANTHRO & ADVOCA',
    ),
    1877 => 
    array(
       'classID' => '7244',
       'className' => 'R070-319 ANTHROPOLGY THRU FILM',
    ),
    1878 => 
    array(
       'classID' => '7245',
       'className' => 'R070-320 HUM RIGHT GLOB',
    ),
    1879 => 
    array(
       'classID' => '7246',
       'className' => 'R070-337 CASTE CLASS AND RACE',
    ),
    1880 => 
    array(
       'classID' => '7247',
       'className' => 'R070-346 CULTURAL HISTORY OF NYPD',
    ),
    1881 => 
    array(
       'classID' => '7248',
       'className' => 'R070-352 PEOPLE & CULT LAT-AM',
    ),
    1882 => 
    array(
       'classID' => '7249',
       'className' => 'R070-390 VIOLENCE & GENOCIDE',
    ),
    1883 => 
    array(
       'classID' => '7250',
       'className' => 'R070-492 ANTHROPOLOGY SEMINAR',
    ),
    1884 => 
    array(
       'classID' => '7251',
       'className' => 'R070-495 INDEPENDENT STUDY-ANTHRO',
    ),
    1885 => 
    array(
       'classID' => '7252',
       'className' => 'R074-101 ELEM MODERN ARABIC',
    ),
    1886 => 
    array(
       'classID' => '7253',
       'className' => 'R074-102 ELEM MODERN ARABIC',
    ),
    1887 => 
    array(
       'classID' => '7254',
       'className' => 'R074-131 INTERMED MOD ARABIC',
    ),
    1888 => 
    array(
       'classID' => '7255',
       'className' => 'R074-311 ARABIC LIT ENG TRANS',
    ),
    1889 => 
    array(
       'classID' => '7256',
       'className' => 'R074-312 ARABIC LIT ENG TRANS',
    ),
    1890 => 
    array(
       'classID' => '7257',
       'className' => 'R074-354 INDEPENDENT STUDY',
    ),
    1891 => 
    array(
       'classID' => '7258',
       'className' => 'R080-121 INTRO TO DRAWING',
    ),
    1892 => 
    array(
       'classID' => '7259',
       'className' => 'R080-223 FIGURE DRAWING',
    ),
    1893 => 
    array(
       'classID' => '7260',
       'className' => 'R080-236 ILLUSTRATION',
    ),
    1894 => 
    array(
       'classID' => '7261',
       'className' => 'R080-251 INTRO TO PAINTING',
    ),
    1895 => 
    array(
       'classID' => '7262',
       'className' => 'R080-252 PAINTING II',
    ),
    1896 => 
    array(
       'classID' => '7263',
       'className' => 'R080-261 INTRO TO PHOTOGRAPHY',
    ),
    1897 => 
    array(
       'classID' => '7264',
       'className' => 'R080-262 PHOTOGRAPHY II',
    ),
    1898 => 
    array(
       'classID' => '7265',
       'className' => 'R080-273 PRINTMAKING',
    ),
    1899 => 
    array(
       'classID' => '7266',
       'className' => 'R080-281 INTRO TO SCULPTURE',
    ),
    1900 => 
    array(
       'classID' => '7267',
       'className' => 'R080-283 SCULPTURE III',
    ),
    1901 => 
    array(
       'classID' => '7268',
       'className' => 'R080-285 SEMINAR IN CONTEMP ART',
    ),
    1902 => 
    array(
       'classID' => '7269',
       'className' => 'R080-305 PROBLEMS IN ART',
    ),
    1903 => 
    array(
       'classID' => '7270',
       'className' => 'R080-378 PRINTMAKING WORKSHOP',
    ),
    1904 => 
    array(
       'classID' => '7271',
       'className' => 'R082-1 002',
    ),
    1905 => 
    array(
       'classID' => '7272',
       'className' => 'R082-101 INTRO TO ART HISTORY I',
    ),
    1906 => 
    array(
       'classID' => '7273',
       'className' => 'R082-102 INTRO TO ART HISTORY II',
    ),
    1907 => 
    array(
       'classID' => '7274',
       'className' => 'R082-201 ART BEYOND THE WEST',
    ),
    1908 => 
    array(
       'classID' => '7275',
       'className' => 'R082-202 HISTORY OF DESIGN',
    ),
    1909 => 
    array(
       'classID' => '7276',
       'className' => 'R082-207 ART & WOMEN',
    ),
    1910 => 
    array(
       'classID' => '7277',
       'className' => 'R082-210 INTRO ARCH HIST I',
    ),
    1911 => 
    array(
       'classID' => '7278',
       'className' => 'R082-240 BAROQUE ART',
    ),
    1912 => 
    array(
       'classID' => '7279',
       'className' => 'R082-270 AMERICAN ART',
    ),
    1913 => 
    array(
       'classID' => '7280',
       'className' => 'R082-305 PROB IN ART:',
    ),
    1914 => 
    array(
       'classID' => '7281',
       'className' => 'R082-330 ART OF RENAISSANCE',
    ),
    1915 => 
    array(
       'classID' => '7282',
       'className' => 'R082-333 NEWARK: A HISTORY OF ART, ARCH',
    ),
    1916 => 
    array(
       'classID' => '7283',
       'className' => 'R082-350 DEVELOPMNT OF MODERN ART',
    ),
    1917 => 
    array(
       'classID' => '7284',
       'className' => 'R082-360 ART SINCE 1945',
    ),
    1918 => 
    array(
       'classID' => '7285',
       'className' => 'R083-301 COLLOQ ART, CULTURE AND MEDIA',
    ),
    1919 => 
    array(
       'classID' => '7286',
       'className' => 'R085-102 DESIGN FUNDAMENTALS',
    ),
    1920 => 
    array(
       'classID' => '7287',
       'className' => 'R085-103 3-D DESIGN FUND',
    ),
    1921 => 
    array(
       'classID' => '7288',
       'className' => 'R085-231 GRAPHIC DESIGN',
    ),
    1922 => 
    array(
       'classID' => '7289',
       'className' => 'R085-232 GRAPHIC DESIGN II',
    ),
    1923 => 
    array(
       'classID' => '7290',
       'className' => 'R085-331 GRAPHIC DESIGN',
    ),
    1924 => 
    array(
       'classID' => '7291',
       'className' => 'R085-333 MOTION DESIGN',
    ),
    1925 => 
    array(
       'classID' => '7292',
       'className' => 'R085-334 INTERACTIVE DESIGN',
    ),
    1926 => 
    array(
       'classID' => '7293',
       'className' => 'R085-335 MOTION DESIGN II',
    ),
    1927 => 
    array(
       'classID' => '7294',
       'className' => 'R085-336 INTERACTIVE DESIGN II',
    ),
    1928 => 
    array(
       'classID' => '7295',
       'className' => 'R085-370 COMPUTERS IN GRAPHIC DESIGN',
    ),
    1929 => 
    array(
       'classID' => '7296',
       'className' => 'R086-201 INTRO MEDIA STDS I',
    ),
    1930 => 
    array(
       'classID' => '7297',
       'className' => 'R086-202 INTRO MEDIA STUDIES',
    ),
    1931 => 
    array(
       'classID' => '7298',
       'className' => 'R086-334 JOURNALISM ETHICS',
    ),
    1932 => 
    array(
       'classID' => '7299',
       'className' => 'R086-337 BASIC REPORTING',
    ),
    1933 => 
    array(
       'classID' => '7300',
       'className' => 'R086-338 ADVANCED REPORTING',
    ),
    1934 => 
    array(
       'classID' => '7301',
       'className' => 'R086-340 INTRO MULTIMEDIA',
    ),
    1935 => 
    array(
       'classID' => '7302',
       'className' => 'R086-344 JOURNALISM ETHICS AND THE LAW',
    ),
    1936 => 
    array(
       'classID' => '7303',
       'className' => 'R086-348 SPORTS REPORTING',
    ),
    1937 => 
    array(
       'classID' => '7304',
       'className' => 'R087-101 INTRO TO MUSIC',
    ),
    1938 => 
    array(
       'classID' => '7305',
       'className' => 'R087-111 FUNDAMENTALS OF MUSIC',
    ),
    1939 => 
    array(
       'classID' => '7306',
       'className' => 'R087-121 MUSIC THEORY I',
    ),
    1940 => 
    array(
       'classID' => '7307',
       'className' => 'R087-122 MUSIC THEORY II',
    ),
    1941 => 
    array(
       'classID' => '7308',
       'className' => 'R087-141 GUITAR',
    ),
    1942 => 
    array(
       'classID' => '7309',
       'className' => 'R087-161 PIANO',
    ),
    1943 => 
    array(
       'classID' => '7310',
       'className' => 'R087-231 RUTGERS UNIV CHORUS',
    ),
    1944 => 
    array(
       'classID' => '7311',
       'className' => 'R087-232 RUTGERS UNIVERSITY CHORUS',
    ),
    1945 => 
    array(
       'classID' => '7312',
       'className' => 'R087-233 RUTGERS UNIV CHORUS',
    ),
    1946 => 
    array(
       'classID' => '7313',
       'className' => 'R087-234 RUTGERS UNIV CHORUS',
    ),
    1947 => 
    array(
       'classID' => '7314',
       'className' => 'R087-255 ENSEMBLE I',
    ),
    1948 => 
    array(
       'classID' => '7315',
       'className' => 'R087-256 ENSEMBLE I',
    ),
    1949 => 
    array(
       'classID' => '7316',
       'className' => 'R087-265 JAZZ',
    ),
    1950 => 
    array(
       'classID' => '7317',
       'className' => 'R087-355 ENSEMBLE II',
    ),
    1951 => 
    array(
       'classID' => '7318',
       'className' => 'R087-357 RUTGERS UNIV CHORUS',
    ),
    1952 => 
    array(
       'classID' => '7319',
       'className' => 'R087-359 RUTGERS UNIV CHORUS',
    ),
    1953 => 
    array(
       'classID' => '7320',
       'className' => 'R087-360 RUTGERS UNIV CHORUS',
    ),
    1954 => 
    array(
       'classID' => '7321',
       'className' => 'R087-435 ADV STUDY THEORY & COMP',
    ),
    1955 => 
    array(
       'classID' => '7322',
       'className' => 'R087-455 ENSEMBLE III',
    ),
    1956 => 
    array(
       'classID' => '7323',
       'className' => 'R087-456 ENSEMBLE III',
    ),
    1957 => 
    array(
       'classID' => '7324',
       'className' => 'R088-102 ACTING FUNDAMENTALS',
    ),
    1958 => 
    array(
       'classID' => '7325',
       'className' => 'R088-103 THEATER TECH I',
    ),
    1959 => 
    array(
       'classID' => '7326',
       'className' => 'R088-209 VOICE & SPEECH FOR THEATRE I',
    ),
    1960 => 
    array(
       'classID' => '7327',
       'className' => 'R088-212 FROM PAGE TO STAGE',
    ),
    1961 => 
    array(
       'classID' => '7328',
       'className' => 'R088-215 ACTING II',
    ),
    1962 => 
    array(
       'classID' => '7329',
       'className' => 'R088-250 INTRO SCENE AND LIGHTING',
    ),
    1963 => 
    array(
       'classID' => '7330',
       'className' => 'R088-259 PRODUCTION I',
    ),
    1964 => 
    array(
       'classID' => '7331',
       'className' => 'R088-260 PRODUCTION II',
    ),
    1965 => 
    array(
       'classID' => '7332',
       'className' => 'R088-409 STAGE MANAGEMENT',
    ),
    1966 => 
    array(
       'classID' => '7333',
       'className' => 'R088-411 ST:',
    ),
    1967 => 
    array(
       'classID' => '7334',
       'className' => 'R088-465 PERFORMANCE III',
    ),
    1968 => 
    array(
       'classID' => '7335',
       'className' => 'R088-467 PRODUCTION III',
    ),
    1969 => 
    array(
       'classID' => '7336',
       'className' => 'R089-104 INTRO TO VIDEO PRODUCTION',
    ),
    1970 => 
    array(
       'classID' => '7337',
       'className' => 'R089-204 INTERMED VIDEO PRODUCTION',
    ),
    1971 => 
    array(
       'classID' => '7338',
       'className' => 'R089-256 ART & HISTORY OF FILM',
    ),
    1972 => 
    array(
       'classID' => '7339',
       'className' => 'R089-304 CONVERGENCE',
    ),
    1973 => 
    array(
       'classID' => '7340',
       'className' => 'R089-309 IMAGERY AND CULTURE',
    ),
    1974 => 
    array(
       'classID' => '7341',
       'className' => 'R089-445 DRAMA WRITING FOR TV',
    ),
    1975 => 
    array(
       'classID' => '7342',
       'className' => 'R120-101 GENERAL BIOLOGY',
    ),
    1976 => 
    array(
       'classID' => '7343',
       'className' => 'R120-102 GENERAL BIOLOGY',
    ),
    1977 => 
    array(
       'classID' => '7344',
       'className' => 'R120-104 HUMAN HEALTH & DISEASE',
    ),
    1978 => 
    array(
       'classID' => '7345',
       'className' => 'R120-106 GENERAL HORTICULTURE',
    ),
    1979 => 
    array(
       'classID' => '7346',
       'className' => 'R120-107 HORTICULTURE LAB',
    ),
    1980 => 
    array(
       'classID' => '7347',
       'className' => 'R120-108 HUMAN SEXUALITY',
    ),
    1981 => 
    array(
       'classID' => '7348',
       'className' => 'R120-109 BASIC PLANT SCIENCE',
    ),
    1982 => 
    array(
       'classID' => '7349',
       'className' => 'R120-110 BASIC PLANT SCI LAB',
    ),
    1983 => 
    array(
       'classID' => '7350',
       'className' => 'R120-111 HUMAN BIOLOGY',
    ),
    1984 => 
    array(
       'classID' => '7351',
       'className' => 'R120-141 ANATOMY & PHYSIOLOGY',
    ),
    1985 => 
    array(
       'classID' => '7352',
       'className' => 'R120-142 ANATOMY & PHYSIOLOGY',
    ),
    1986 => 
    array(
       'classID' => '7353',
       'className' => 'R120-201 FOUNDATIONS OF BIOLOGY',
    ),
    1987 => 
    array(
       'classID' => '7354',
       'className' => 'R120-202 FOUNDATIONS OF BIOLOGY LAB',
    ),
    1988 => 
    array(
       'classID' => '7355',
       'className' => 'R120-205 FOUND: ECO & EVO',
    ),
    1989 => 
    array(
       'classID' => '7356',
       'className' => 'R120-206 FOUND: ECO & EVO LAB',
    ),
    1990 => 
    array(
       'classID' => '7357',
       'className' => 'R120-211 PLANT KINGDOM',
    ),
    1991 => 
    array(
       'classID' => '7358',
       'className' => 'R120-222 EVOLUTION',
    ),
    1992 => 
    array(
       'classID' => '7359',
       'className' => 'R120-227 BIOL INVERTEBRATES',
    ),
    1993 => 
    array(
       'classID' => '7360',
       'className' => 'R120-230 BIOLOGY OF SEED PLANTS',
    ),
    1994 => 
    array(
       'classID' => '7361',
       'className' => 'R120-235 MICROBIOLOGY',
    ),
    1995 => 
    array(
       'classID' => '7362',
       'className' => 'R120-245 PATHOPHYSIOLOGY',
    ),
    1996 => 
    array(
       'classID' => '7363',
       'className' => 'R120-280 ECOLOGY',
    ),
    1997 => 
    array(
       'classID' => '7364',
       'className' => 'R120-282 ANIMAL BEHAVIOR',
    ),
    1998 => 
    array(
       'classID' => '7365',
       'className' => 'R120-285 COMPARATIVE VERTEBRATE ANATOMY',
    ),
    1999 => 
    array(
       'classID' => '7366',
       'className' => 'R120-311 FLORA OF NEW JERSEY',
    ),
    2000 => 
    array(
       'classID' => '7367',
       'className' => 'R120-322 EVOLUTION',
    ),
    2001 => 
    array(
       'classID' => '7368',
       'className' => 'R120-325 ANIMAL PARASITES',
    ),
    2002 => 
    array(
       'classID' => '7369',
       'className' => 'R120-326 PARASITOLOGY LAB',
    ),
    2003 => 
    array(
       'classID' => '7370',
       'className' => 'R120-328 ORNITHOLOGY',
    ),
    2004 => 
    array(
       'classID' => '7371',
       'className' => 'R120-330 PLANT PHYSIOLOGY',
    ),
    2005 => 
    array(
       'classID' => '7372',
       'className' => 'R120-335 GENERAL MICROBIOLOGY',
    ),
    2006 => 
    array(
       'classID' => '7373',
       'className' => 'R120-340 MAMMALIAN PHYSIOL',
    ),
    2007 => 
    array(
       'classID' => '7374',
       'className' => 'R120-340 MAMMALIAN PHYSIOLOGY',
    ),
    2008 => 
    array(
       'classID' => '7375',
       'className' => 'R120-342 DEVELOPMENTAL BIOLOGY',
    ),
    2009 => 
    array(
       'classID' => '7376',
       'className' => 'R120-343 DEVELOPMENTAL BIOLOGY LAB',
    ),
    2010 => 
    array(
       'classID' => '7377',
       'className' => 'R120-343 DEVELOPMTL BIO LAB',
    ),
    2011 => 
    array(
       'classID' => '7378',
       'className' => 'R120-346 NEUROBIOLOGY',
    ),
    2012 => 
    array(
       'classID' => '7379',
       'className' => 'R120-352 GENETICS',
    ),
    2013 => 
    array(
       'classID' => '7380',
       'className' => 'R120-355 CELL BIOLOGY',
    ),
    2014 => 
    array(
       'classID' => '7381',
       'className' => 'R120-356 MOLECULAR BIOLOGY',
    ),
    2015 => 
    array(
       'classID' => '7382',
       'className' => 'R120-360 BIOCHEMISTRY',
    ),
    2016 => 
    array(
       'classID' => '7383',
       'className' => 'R120-365 EVOLUTIONS OF HUMANS',
    ),
    2017 => 
    array(
       'classID' => '7384',
       'className' => 'R120-370 PLANT ECOLOGY',
    ),
    2018 => 
    array(
       'classID' => '7385',
       'className' => 'R120-371 FIELD STUDY PLANT ECOLOGY',
    ),
    2019 => 
    array(
       'classID' => '7386',
       'className' => 'R120-375 CONSERVATION BIOLOGY',
    ),
    2020 => 
    array(
       'classID' => '7387',
       'className' => 'R120-380 FIELD ECOLOGY',
    ),
    2021 => 
    array(
       'classID' => '7388',
       'className' => 'R120-381 ECOLOGICAL HISTORY OF NORTH AM',
    ),
    2022 => 
    array(
       'classID' => '7389',
       'className' => 'R120-402 BIOLOGY OF CANCER',
    ),
    2023 => 
    array(
       'classID' => '7390',
       'className' => 'R120-404 LIGHT AND ELECTRON MICROSCOPY',
    ),
    2024 => 
    array(
       'classID' => '7391',
       'className' => 'R120-405 MICROANATOMY OF CELLS',
    ),
    2025 => 
    array(
       'classID' => '7392',
       'className' => 'R120-411 TEACHING INTERN',
    ),
    2026 => 
    array(
       'classID' => '7393',
       'className' => 'R120-416 PLANT EVOLUTION',
    ),
    2027 => 
    array(
       'classID' => '7394',
       'className' => 'R120-422 BIOLOGICAL INVASIONS',
    ),
    2028 => 
    array(
       'classID' => '7395',
       'className' => 'R120-430 PLANT GROWTH & DEVELOPMENT',
    ),
    2029 => 
    array(
       'classID' => '7396',
       'className' => 'R120-431 MODERN PLANT BIOLOGY',
    ),
    2030 => 
    array(
       'classID' => '7397',
       'className' => 'R120-444 CELL NEUROBIOLOGY',
    ),
    2031 => 
    array(
       'classID' => '7398',
       'className' => 'R120-445 ENDOCRINOLOGY',
    ),
    2032 => 
    array(
       'classID' => '7399',
       'className' => 'R120-452 MOLECUALR BIO TECH',
    ),
    2033 => 
    array(
       'classID' => '7400',
       'className' => 'R120-452 MOLECULAR BIOL TECHNIQUES',
    ),
    2034 => 
    array(
       'classID' => '7401',
       'className' => 'R120-455 MOLEC CELL BIOLOGY',
    ),
    2035 => 
    array(
       'classID' => '7402',
       'className' => 'R120-456 VIROLOGY',
    ),
    2036 => 
    array(
       'classID' => '7403',
       'className' => 'R120-472 ENVIRONMENTAL ASSESSMENT',
    ),
    2037 => 
    array(
       'classID' => '7404',
       'className' => 'R120-493 SEMINAR IN BIOLOGY',
    ),
    2038 => 
    array(
       'classID' => '7405',
       'className' => 'R120-494 SEMINAR IN BIOL',
    ),
    2039 => 
    array(
       'classID' => '7406',
       'className' => 'R120-503 PLANT MORPHOLOGY',
    ),
    2040 => 
    array(
       'classID' => '7407',
       'className' => 'R120-510 ADV PROB IN BIOL',
    ),
    2041 => 
    array(
       'classID' => '7408',
       'className' => 'R120-512 CELL BIOLOGY: METHODS & APPL',
    ),
    2042 => 
    array(
       'classID' => '7409',
       'className' => 'R120-515 MOLECULAR BIO OF EUKARYOTES',
    ),
    2043 => 
    array(
       'classID' => '7410',
       'className' => 'R120-522 RESOURCE SUSTAINABILITY',
    ),
    2044 => 
    array(
       'classID' => '7411',
       'className' => 'R120-524 CELL MOLEC DEV',
    ),
    2045 => 
    array(
       'classID' => '7412',
       'className' => 'R120-526 TOPICS IN CELL BIOLOGY',
    ),
    2046 => 
    array(
       'classID' => '7413',
       'className' => 'R120-532 EVOLUTION',
    ),
    2047 => 
    array(
       'classID' => '7414',
       'className' => 'R120-534 BIOLOGICAL INVASION',
    ),
    2048 => 
    array(
       'classID' => '7415',
       'className' => 'R120-538 TOPICS IN MOLECULAR GENETICS',
    ),
    2049 => 
    array(
       'classID' => '7416',
       'className' => 'R120-547 PATHOPHYSIOLOGY',
    ),
    2050 => 
    array(
       'classID' => '7417',
       'className' => 'R120-560 COLLEGE TEACHING',
    ),
    2051 => 
    array(
       'classID' => '7418',
       'className' => 'R120-563 TOPICS IN MODERN PLANT BIOLOGY',
    ),
    2052 => 
    array(
       'classID' => '7419',
       'className' => 'R120-572 CONCEPTS IN PHARM DRUG DEV',
    ),
    2053 => 
    array(
       'classID' => '7420',
       'className' => 'R120-624 CELL BIOL:SIGNAL TRANSDUCTION',
    ),
    2054 => 
    array(
       'classID' => '7421',
       'className' => 'R120-651 BIOLOGY COLLOQUIUM',
    ),
    2055 => 
    array(
       'classID' => '7422',
       'className' => 'R120-652 BIOLOGY COLLOQUIUM',
    ),
    2056 => 
    array(
       'classID' => '7423',
       'className' => 'R120-701 RESEARCH IN BIOLOGY',
    ),
    2057 => 
    array(
       'classID' => '7424',
       'className' => 'R120-702 RESEARCH IN BIOLOGY',
    ),
    2058 => 
    array(
       'classID' => '7425',
       'className' => 'R135-583 FINANCIAL ACCOUNTING',
    ),
    2059 => 
    array(
       'classID' => '7426',
       'className' => 'R160-101 MOLECULES AND MANKIND',
    ),
    2060 => 
    array(
       'classID' => '7427',
       'className' => 'R160-108 ORGANIC BIOCHEMISTRY',
    ),
    2061 => 
    array(
       'classID' => '7428',
       'className' => 'R160-109 MOLECULES LAB.',
    ),
    2062 => 
    array(
       'classID' => '7429',
       'className' => 'R160-110 MOLECULES LAB.',
    ),
    2063 => 
    array(
       'classID' => '7430',
       'className' => 'R160-115 GENERAL CHEMISTRY I',
    ),
    2064 => 
    array(
       'classID' => '7431',
       'className' => 'R160-116 GENERAL CHEMISTRY',
    ),
    2065 => 
    array(
       'classID' => '7432',
       'className' => 'R160-223 ANALYTICAL CHEMISTRY',
    ),
    2066 => 
    array(
       'classID' => '7433',
       'className' => 'R160-227 EXPER ANALYTICAL CHEM',
    ),
    2067 => 
    array(
       'classID' => '7434',
       'className' => 'R160-313 ORGANIC CHEM LAB',
    ),
    2068 => 
    array(
       'classID' => '7435',
       'className' => 'R160-331 ORGANIC CHEMISTRY LAB',
    ),
    2069 => 
    array(
       'classID' => '7436',
       'className' => 'R160-335 ORGANIC CHEMISTRY',
    ),
    2070 => 
    array(
       'classID' => '7437',
       'className' => 'R160-336 ORGANIC CHEMISTRY',
    ),
    2071 => 
    array(
       'classID' => '7438',
       'className' => 'R160-345 PHYSICAL CHEMISTRY',
    ),
    2072 => 
    array(
       'classID' => '7439',
       'className' => 'R160-346 PHYSICAL CHEM',
    ),
    2073 => 
    array(
       'classID' => '7440',
       'className' => 'R160-413 INORGANIC CHEMISTRY',
    ),
    2074 => 
    array(
       'classID' => '7441',
       'className' => 'R160-427 PHYSICAL CHEMISTRY LAB',
    ),
    2075 => 
    array(
       'classID' => '7442',
       'className' => 'R160-453 CHEMISTRY SEMINAR',
    ),
    2076 => 
    array(
       'classID' => '7443',
       'className' => 'R160-504 REC. ADVANCES ORGANIC',
    ),
    2077 => 
    array(
       'classID' => '7444',
       'className' => 'R160-511 THEORETICAL ORGANIC',
    ),
    2078 => 
    array(
       'classID' => '7445',
       'className' => 'R160-514 POLYMER CHEMISTRY',
    ),
    2079 => 
    array(
       'classID' => '7446',
       'className' => 'R160-515 CHEM STRUCT DETERMIN',
    ),
    2080 => 
    array(
       'classID' => '7447',
       'className' => 'R160-529 SPEC TOPICS PHYSICL CHEM',
    ),
    2081 => 
    array(
       'classID' => '7448',
       'className' => 'R160-532 QUANTUM MECHANICS',
    ),
    2082 => 
    array(
       'classID' => '7449',
       'className' => 'R160-540 PRINCIPLES OF SPECTROSCOPY',
    ),
    2083 => 
    array(
       'classID' => '7450',
       'className' => 'R160-577 MAIN GROUP METAL CHE',
    ),
    2084 => 
    array(
       'classID' => '7451',
       'className' => 'R160-581 BIOCHEMISTRY',
    ),
    2085 => 
    array(
       'classID' => '7452',
       'className' => 'R160-587 TOPICS IN BIOCHEMISTRY',
    ),
    2086 => 
    array(
       'classID' => '7453',
       'className' => 'R165-101 ELEMENTARY CHINESE',
    ),
    2087 => 
    array(
       'classID' => '7454',
       'className' => 'R165-102 ELEMENTARY CHINESE',
    ),
    2088 => 
    array(
       'classID' => '7455',
       'className' => 'R165-131 INTERMEDIATE CHINESE',
    ),
    2089 => 
    array(
       'classID' => '7456',
       'className' => 'R165-132 INTERMEDIATE CHINESE',
    ),
    2090 => 
    array(
       'classID' => '7457',
       'className' => 'R180-372 SOIL MECHANICS',
    ),
    2091 => 
    array(
       'classID' => '7458',
       'className' => 'R198-100 INTRO. TO COMPUTERS',
    ),
    2092 => 
    array(
       'classID' => '7459',
       'className' => 'R198-101 COMPUTER & PROGRAM. I',
    ),
    2093 => 
    array(
       'classID' => '7460',
       'className' => 'R198-251 COMPUTER ORGANIZATION',
    ),
    2094 => 
    array(
       'classID' => '7461',
       'className' => 'R198-335 DATA STRUCTURES',
    ),
    2095 => 
    array(
       'classID' => '7462',
       'className' => 'R198-435 ADV DATA STRUCT',
    ),
    2096 => 
    array(
       'classID' => '7463',
       'className' => 'R198-603 BUSINESS DATA MANAGEMENT',
    ),
    2097 => 
    array(
       'classID' => '7464',
       'className' => 'R198-622 MACHINE LEARNING',
    ),
    2098 => 
    array(
       'classID' => '7465',
       'className' => 'R198-644 DATA MINING',
    ),
    2099 => 
    array(
       'classID' => '7466',
       'className' => 'R198-670 INFO TECHNOLOGY STRATEGY',
    ),
    2100 => 
    array(
       'classID' => '7467',
       'className' => 'R202-102 CRIMINOLOGY',
    ),
    2101 => 
    array(
       'classID' => '7468',
       'className' => 'R202-103 INTRO CRIMINAL JUSTICE',
    ),
    2102 => 
    array(
       'classID' => '7469',
       'className' => 'R202-203 POLICE AND COMMUNITY',
    ),
    2103 => 
    array(
       'classID' => '7470',
       'className' => 'R202-204 CORRECTIONS',
    ),
    2104 => 
    array(
       'classID' => '7471',
       'className' => 'R202-221 CASE PROCESSING LAW & COURT',
    ),
    2105 => 
    array(
       'classID' => '7472',
       'className' => 'R202-222 CONSTITUTION ISSUES IN CJ',
    ),
    2106 => 
    array(
       'classID' => '7473',
       'className' => 'R202-301 CJ RESERACH METHODS',
    ),
    2107 => 
    array(
       'classID' => '7474',
       'className' => 'R202-302 DATA ANALYSIS IN CJ',
    ),
    2108 => 
    array(
       'classID' => '7475',
       'className' => 'R202-310 CASE PROC LAW COURTS',
    ),
    2109 => 
    array(
       'classID' => '7476',
       'className' => 'R202-312 COMP CRIM JUSTICE',
    ),
    2110 => 
    array(
       'classID' => '7477',
       'className' => 'R202-313 GENDER CRIME AND JUSTICE',
    ),
    2111 => 
    array(
       'classID' => '7478',
       'className' => 'R202-324 CRIMINOLOGY',
    ),
    2112 => 
    array(
       'classID' => '7479',
       'className' => 'R202-333 RACE & CRIME',
    ),
    2113 => 
    array(
       'classID' => '7480',
       'className' => 'R202-342 COMMUNITY & CORRECTIONS',
    ),
    2114 => 
    array(
       'classID' => '7481',
       'className' => 'R202-343 WHITE COLLAR CRIME',
    ),
    2115 => 
    array(
       'classID' => '7482',
       'className' => 'R202-344 CRIME IN DIFFERENT CULTURE',
    ),
    2116 => 
    array(
       'classID' => '7483',
       'className' => 'R202-412 ORGANIZED CRIME',
    ),
    2117 => 
    array(
       'classID' => '7484',
       'className' => 'R202-425 MISCARRIAGE OF JUSTICE',
    ),
    2118 => 
    array(
       'classID' => '7485',
       'className' => 'R202-466 TOPICS IN CRIMINAL JUSTICE',
    ),
    2119 => 
    array(
       'classID' => '7486',
       'className' => 'R220-101 INTRO TO ECONO-MICRO',
    ),
    2120 => 
    array(
       'classID' => '7487',
       'className' => 'R220-102 INTRO TO ECON-MACRO',
    ),
    2121 => 
    array(
       'classID' => '7488',
       'className' => 'R220-231 STATISTICAL METHOD',
    ),
    2122 => 
    array(
       'classID' => '7489',
       'className' => 'R220-304 ECONOMICS OF LABOR',
    ),
    2123 => 
    array(
       'classID' => '7490',
       'className' => 'R220-305 DEVELOP OF AMER ECON',
    ),
    2124 => 
    array(
       'classID' => '7491',
       'className' => 'R220-308 MANAGERIAL ECONOMICS',
    ),
    2125 => 
    array(
       'classID' => '7492',
       'className' => 'R220-312 WOMEN IN THE ECONOMY',
    ),
    2126 => 
    array(
       'classID' => '7493',
       'className' => 'R220-315 MANAGERIAL ECONOMICS',
    ),
    2127 => 
    array(
       'classID' => '7494',
       'className' => 'R220-322 INTRO ECONOMETRICS',
    ),
    2128 => 
    array(
       'classID' => '7495',
       'className' => 'R220-323 INTERMEDIATE MICRO',
    ),
    2129 => 
    array(
       'classID' => '7496',
       'className' => 'R220-324 INTERM MACRO THEORY',
    ),
    2130 => 
    array(
       'classID' => '7497',
       'className' => 'R220-332 INTRO TO ECONMETRICS',
    ),
    2131 => 
    array(
       'classID' => '7498',
       'className' => 'R220-335 INTERN ECON RELATIONS',
    ),
    2132 => 
    array(
       'classID' => '7499',
       'className' => 'R220-336 INTERNATIONAL FINANCE',
    ),
    2133 => 
    array(
       'classID' => '7500',
       'className' => 'R220-339 ECONOMIC DEVELOPMENT',
    ),
    2134 => 
    array(
       'classID' => '7501',
       'className' => 'R220-353 URBAN & REGIONAL ECONOMICS',
    ),
    2135 => 
    array(
       'classID' => '7502',
       'className' => 'R220-365 MONEY AND BANKING',
    ),
    2136 => 
    array(
       'classID' => '7503',
       'className' => 'R220-368 INSTITUTIONAL ECON',
    ),
    2137 => 
    array(
       'classID' => '7504',
       'className' => 'R220-406 SEMINAR IN ECONOMICS',
    ),
    2138 => 
    array(
       'classID' => '7505',
       'className' => 'R220-409 MATHEMATICAL ECON',
    ),
    2139 => 
    array(
       'classID' => '7506',
       'className' => 'R220-414 ANALYSIS CURR ECON CONDITION',
    ),
    2140 => 
    array(
       'classID' => '7507',
       'className' => 'R220-507 ECONOMETRICS I',
    ),
    2141 => 
    array(
       'classID' => '7508',
       'className' => 'R220-513 MONETARY THEORY',
    ),
    2142 => 
    array(
       'classID' => '7509',
       'className' => 'R223-581 MANAGERIAL ECO',
    ),
    2143 => 
    array(
       'classID' => '7510',
       'className' => 'R223-591 AGGREGAT EC ANAL MGT',
    ),
    2144 => 
    array(
       'classID' => '7511',
       'className' => 'R223-655 ECONOMETRICS TIME SERIES',
    ),
    2145 => 
    array(
       'classID' => '7512',
       'className' => 'R300-292 SOCIAL FOUNDATION',
    ),
    2146 => 
    array(
       'classID' => '7513',
       'className' => 'R300-295 URBAN ADOL PSYCH',
    ),
    2147 => 
    array(
       'classID' => '7514',
       'className' => 'R300-297 21ST CENTURY URBAN EDUCATOR',
    ),
    2148 => 
    array(
       'classID' => '7515',
       'className' => 'R300-298 21ST CENTURY URBAN EDUCATOR',
    ),
    2149 => 
    array(
       'classID' => '7516',
       'className' => 'R300-299 21ST CENTURY URBAN EDUCATOR',
    ),
    2150 => 
    array(
       'classID' => '7517',
       'className' => 'R300-375 METHODS OF TEACHING - MATH',
    ),
    2151 => 
    array(
       'classID' => '7518',
       'className' => 'R300-380 METHODS OF TEACHING SECONDARY',
    ),
    2152 => 
    array(
       'classID' => '7519',
       'className' => 'R300-386 PRIN & TEC TCHG SEC',
    ),
    2153 => 
    array(
       'classID' => '7520',
       'className' => 'R300-388 CURRICULUM& INSTRUCT',
    ),
    2154 => 
    array(
       'classID' => '7521',
       'className' => 'R300-390 UNDERSTAND ED EVAL',
    ),
    2155 => 
    array(
       'classID' => '7522',
       'className' => 'R300-410 ICT IN SECONDARY SCH',
    ),
    2156 => 
    array(
       'classID' => '7523',
       'className' => 'R300-418 SECONDARY PRACTICUM',
    ),
    2157 => 
    array(
       'classID' => '7524',
       'className' => 'R300-419 CLINICAL PRACTICE',
    ),
    2158 => 
    array(
       'classID' => '7525',
       'className' => 'R300-427 SUPERVISED TEACHING',
    ),
    2159 => 
    array(
       'classID' => '7526',
       'className' => 'R300-428 SUPERVISED TEACHING II',
    ),
    2160 => 
    array(
       'classID' => '7527',
       'className' => 'R300-450 MATH CURRICULUM',
    ),
    2161 => 
    array(
       'classID' => '7528',
       'className' => 'R300-487 STUDENT TEACHING & SEMINAR',
    ),
    2162 => 
    array(
       'classID' => '7529',
       'className' => 'R300-488 CLINICAL II: ST TEACHING EXP',
    ),
    2163 => 
    array(
       'classID' => '7530',
       'className' => 'R350-206 SHAKESPEARE FOR 21ST CENTURY',
    ),
    2164 => 
    array(
       'classID' => '7531',
       'className' => 'R350-211 CHILDRENS LITERATURE',
    ),
    2165 => 
    array(
       'classID' => '7532',
       'className' => 'R350-212 MYTH IN LITERATURE',
    ),
    2166 => 
    array(
       'classID' => '7533',
       'className' => 'R350-225 LOVE STORIES: MEDIEVAL TO MOD',
    ),
    2167 => 
    array(
       'classID' => '7534',
       'className' => 'R350-230 COMICS AND GRAPHICS NOVELS',
    ),
    2168 => 
    array(
       'classID' => '7535',
       'className' => 'R350-256 CARIBBEAN LITERATURE',
    ),
    2169 => 
    array(
       'classID' => '7536',
       'className' => 'R350-301 INTRO CREATIVE WRITING',
    ),
    2170 => 
    array(
       'classID' => '7537',
       'className' => 'R350-305 THE SHORT STORY',
    ),
    2171 => 
    array(
       'classID' => '7538',
       'className' => 'R350-307 WORLD FORMS POETRY',
    ),
    2172 => 
    array(
       'classID' => '7539',
       'className' => 'R350-308 FOUND OF LIT STUDY',
    ),
    2173 => 
    array(
       'classID' => '7540',
       'className' => 'R350-311 17TH CENTURY LIT',
    ),
    2174 => 
    array(
       'classID' => '7541',
       'className' => 'R350-319 SHAKESPEARE',
    ),
    2175 => 
    array(
       'classID' => '7542',
       'className' => 'R350-321 SURVEY OF ENGLISH LIT',
    ),
    2176 => 
    array(
       'classID' => '7543',
       'className' => 'R350-324 ENGL DRAMA TO 1642',
    ),
    2177 => 
    array(
       'classID' => '7544',
       'className' => 'R350-333 THE VICTORIAN PERIOD',
    ),
    2178 => 
    array(
       'classID' => '7545',
       'className' => 'R350-337 TOPICS IN LITERATURE',
    ),
    2179 => 
    array(
       'classID' => '7546',
       'className' => 'R350-339 MAJOR WRITERS 20TH CEN',
    ),
    2180 => 
    array(
       'classID' => '7547',
       'className' => 'R350-342 MODERN ENGLISH POETRY',
    ),
    2181 => 
    array(
       'classID' => '7548',
       'className' => 'R350-345 MODERN DRAMA',
    ),
    2182 => 
    array(
       'classID' => '7549',
       'className' => 'R350-355 TECHNIQUE OF POETRY',
    ),
    2183 => 
    array(
       'classID' => '7550',
       'className' => 'R350-360 ST:WOMEN & LITERATURE',
    ),
    2184 => 
    array(
       'classID' => '7551',
       'className' => 'R350-361 WOMEN IN LITERATURE',
    ),
    2185 => 
    array(
       'classID' => '7552',
       'className' => 'R350-363 TOPICS:',
    ),
    2186 => 
    array(
       'classID' => '7553',
       'className' => 'R350-364 ST:',
    ),
    2187 => 
    array(
       'classID' => '7554',
       'className' => 'R350-373 CHAUCER',
    ),
    2188 => 
    array(
       'classID' => '7555',
       'className' => 'R350-377 SCIENCE FICTION',
    ),
    2189 => 
    array(
       'classID' => '7556',
       'className' => 'R350-380 EUROPEAN REN & ENG LIT',
    ),
    2190 => 
    array(
       'classID' => '7557',
       'className' => 'R350-381 THE SHORT STORY',
    ),
    2191 => 
    array(
       'classID' => '7558',
       'className' => 'R350-383 FICTION TOOLBOX',
    ),
    2192 => 
    array(
       'classID' => '7559',
       'className' => 'R350-384 WHO SAYSFICTION POV',
    ),
    2193 => 
    array(
       'classID' => '7560',
       'className' => 'R350-387 FICTION SCENCES',
    ),
    2194 => 
    array(
       'classID' => '7561',
       'className' => 'R350-390 WOMEN IN MED LIT',
    ),
    2195 => 
    array(
       'classID' => '7562',
       'className' => 'R350-3 CHAUCER',
    ),
    2196 => 
    array(
       'classID' => '7563',
       'className' => 'R350-419 AUTHORS',
    ),
    2197 => 
    array(
       'classID' => '7564',
       'className' => 'R350-429 ASPECTS EUROPEAN NOVEL',
    ),
    2198 => 
    array(
       'classID' => '7565',
       'className' => 'R350-469 LIT GENRES:MEMOIR &AUTOBIO',
    ),
    2199 => 
    array(
       'classID' => '7566',
       'className' => 'R350-470 LITERARY GENRES',
    ),
    2200 => 
    array(
       'classID' => '7567',
       'className' => 'R350-479 MAJ BRITISH AUTHORS',
    ),
    2201 => 
    array(
       'classID' => '7568',
       'className' => 'R352-207 WRITERS AT NEWARK I',
    ),
    2202 => 
    array(
       'classID' => '7569',
       'className' => 'R352-208 WRITERS AT NEWARK II',
    ),
    2203 => 
    array(
       'classID' => '7570',
       'className' => 'R352-211 CONTEMP AMERICAN LIT',
    ),
    2204 => 
    array(
       'classID' => '7571',
       'className' => 'R352-212 CONTEMPORARY AMERICAN LIT',
    ),
    2205 => 
    array(
       'classID' => '7572',
       'className' => 'R352-213 AMERICAN LIT OF 19TH CENTURY',
    ),
    2206 => 
    array(
       'classID' => '7573',
       'className' => 'R352-225 LIT OF SOC PROTEST',
    ),
    2207 => 
    array(
       'classID' => '7574',
       'className' => 'R352-250 LIT OF AMERICAN REVOLUTION',
    ),
    2208 => 
    array(
       'classID' => '7575',
       'className' => 'R352-333 AMERICAN DRAMA',
    ),
    2209 => 
    array(
       'classID' => '7576',
       'className' => 'R352-344 AM LIT OF 20TH CENTURY',
    ),
    2210 => 
    array(
       'classID' => '7577',
       'className' => 'R352-363 NOVEL IN AMERICA',
    ),
    2211 => 
    array(
       'classID' => '7578',
       'className' => 'R352-364 NOVEL IN AMERICA',
    ),
    2212 => 
    array(
       'classID' => '7579',
       'className' => 'R352-395 AFRO-AMERICAN LITERATURE',
    ),
    2213 => 
    array(
       'classID' => '7580',
       'className' => 'R352-396 AFRO-AMERICAN LITERATURE',
    ),
    2214 => 
    array(
       'classID' => '7581',
       'className' => 'R352-433 ASIAN-AMERICAN LIT',
    ),
    2215 => 
    array(
       'classID' => '7582',
       'className' => 'R355-100 WRITING WORKSHOP',
    ),
    2216 => 
    array(
       'classID' => '7583',
       'className' => 'R355-402 REVIEW WRITING: BOOK, FILM, TH',
    ),
    2217 => 
    array(
       'classID' => '7584',
       'className' => 'R370-520 INSECT FIELD ECOL & NATURAL HI',
    ),
    2218 => 
    array(
       'classID' => '7585',
       'className' => 'R373-551 BUSINESS COMMUNICATION',
    ),
    2219 => 
    array(
       'classID' => '7586',
       'className' => 'R373-592 LEGAL ENVIRONMENT',
    ),
    2220 => 
    array(
       'classID' => '7587',
       'className' => 'R373-612 INTERNATIONAL BUS POL',
    ),
    2221 => 
    array(
       'classID' => '7588',
       'className' => 'R390-330 CORPORATE FINANCE',
    ),
    2222 => 
    array(
       'classID' => '7589',
       'className' => 'R390-522 CORPORATE FINANCE',
    ),
    2223 => 
    array(
       'classID' => '7590',
       'className' => 'R390-587 FINANCIAL MANAGEMENT',
    ),
    2224 => 
    array(
       'classID' => '7591',
       'className' => 'R390-603 INVESTMENT ANAL & MGT',
    ),
    2225 => 
    array(
       'classID' => '7592',
       'className' => 'R390-604 FIN INSTITUTIONS & MRKTS',
    ),
    2226 => 
    array(
       'classID' => '7593',
       'className' => 'R390-608 PROTFOLIO MGMT',
    ),
    2227 => 
    array(
       'classID' => '7594',
       'className' => 'R390-609 OPTIONS',
    ),
    2228 => 
    array(
       'classID' => '7595',
       'className' => 'R390-611 ANALYSIS OF FIXED INCOME',
    ),
    2229 => 
    array(
       'classID' => '7596',
       'className' => 'R390-612 SMALL BUSINESS',
    ),
    2230 => 
    array(
       'classID' => '7597',
       'className' => 'R390-613 FINANCIAL STATEMENT ANALYSIS',
    ),
    2231 => 
    array(
       'classID' => '7598',
       'className' => 'R390-654 SPTP INVESTMENT',
    ),
    2232 => 
    array(
       'classID' => '7599',
       'className' => 'R390-670 TPC: FIN SIMULATION',
    ),
    2233 => 
    array(
       'classID' => '7600',
       'className' => 'R390-674 EVALUATING NEW VENTURES',
    ),
    2234 => 
    array(
       'classID' => '7601',
       'className' => 'R390-677 FUND ANYLSS STC',
    ),
    2235 => 
    array(
       'classID' => '7602',
       'className' => 'R390-680 FIN MDLING/CORP & PROJ',
    ),
    2236 => 
    array(
       'classID' => '7603',
       'className' => 'R390-681 HEDGE FUND',
    ),
    2237 => 
    array(
       'classID' => '7604',
       'className' => 'R390-686 ST:',
    ),
    2238 => 
    array(
       'classID' => '7605',
       'className' => 'R420-101 ELEMENTARY FRENCH',
    ),
    2239 => 
    array(
       'classID' => '7606',
       'className' => 'R420-102 ELEMENTARY FRENCH',
    ),
    2240 => 
    array(
       'classID' => '7607',
       'className' => 'R420-131 INTERMEDIATE FRENCH',
    ),
    2241 => 
    array(
       'classID' => '7608',
       'className' => 'R420-311 FRENCH LIT IN ENGL TRANS',
    ),
    2242 => 
    array(
       'classID' => '7609',
       'className' => 'R447-380 GENETICS',
    ),
    2243 => 
    array(
       'classID' => '7610',
       'className' => 'R460-103 PLANET EARTH',
    ),
    2244 => 
    array(
       'classID' => '7611',
       'className' => 'R460-104 PLANET EARTH LAB',
    ),
    2245 => 
    array(
       'classID' => '7612',
       'className' => 'R460-201 EARTHQUAKES - VOLCANO',
    ),
    2246 => 
    array(
       'classID' => '7613',
       'className' => 'R460-203 NATURAL DISASTERS',
    ),
    2247 => 
    array(
       'classID' => '7614',
       'className' => 'R460-206 ENV GEOLOGY',
    ),
    2248 => 
    array(
       'classID' => '7615',
       'className' => 'R460-207 ENV GEOLOGY LAB',
    ),
    2249 => 
    array(
       'classID' => '7616',
       'className' => 'R460-230 WEATHER AND CLIMATE',
    ),
    2250 => 
    array(
       'classID' => '7617',
       'className' => 'R460-311 GEOLOGIC FIELD PROBLEMS',
    ),
    2251 => 
    array(
       'classID' => '7618',
       'className' => 'R460-314 STRATIGRAPHY',
    ),
    2252 => 
    array(
       'classID' => '7619',
       'className' => 'R460-320 STRUCTURAL GEOLOGY',
    ),
    2253 => 
    array(
       'classID' => '7620',
       'className' => 'R460-323 ROCKS AND MINERALS',
    ),
    2254 => 
    array(
       'classID' => '7621',
       'className' => 'R460-325 INTRO TO GIS',
    ),
    2255 => 
    array(
       'classID' => '7622',
       'className' => 'R460-331 OCEANOGRAPHY',
    ),
    2256 => 
    array(
       'classID' => '7623',
       'className' => 'R460-375 QUANT METHODS GEOSCI',
    ),
    2257 => 
    array(
       'classID' => '7624',
       'className' => 'R460-400 INTRO TO SOIL SCIENCE',
    ),
    2258 => 
    array(
       'classID' => '7625',
       'className' => 'R460-401 INTRO GEOCHEMISTRY',
    ),
    2259 => 
    array(
       'classID' => '7626',
       'className' => 'R460-406 APPLIED GEOPHYS',
    ),
    2260 => 
    array(
       'classID' => '7627',
       'className' => 'R460-416 GEOLOGIC PROBLEMS',
    ),
    2261 => 
    array(
       'classID' => '7628',
       'className' => 'R460-427 HYDROGEOLOGY',
    ),
    2262 => 
    array(
       'classID' => '7629',
       'className' => 'R478-510 GLOBAL POLICY SEMINAR',
    ),
    2263 => 
    array(
       'classID' => '7630',
       'className' => 'R478-525 INTL LEGITEMACY & GLOBAL JUSTI',
    ),
    2264 => 
    array(
       'classID' => '7631',
       'className' => 'R478-541 GLOBAL POLIT ECON',
    ),
    2265 => 
    array(
       'classID' => '7632',
       'className' => 'R478-570 COLLOQ GLOBAL CH & GOV',
    ),
    2266 => 
    array(
       'classID' => '7633',
       'className' => 'R478-701 DISS RES GLOBAL AFFAIRS',
    ),
    2267 => 
    array(
       'classID' => '7634',
       'className' => 'R510-201 HIST OF WEST CIV',
    ),
    2268 => 
    array(
       'classID' => '7635',
       'className' => 'R510-201 HIST OF WEST CIV I',
    ),
    2269 => 
    array(
       'classID' => '7636',
       'className' => 'R510-202 HISTORY OF WEST. CIV.',
    ),
    2270 => 
    array(
       'classID' => '7637',
       'className' => 'R510-208 HISTORY OF LATIN AMERICA',
    ),
    2271 => 
    array(
       'classID' => '7638',
       'className' => 'R510-226 ST:',
    ),
    2272 => 
    array(
       'classID' => '7639',
       'className' => 'R510-227 ST:',
    ),
    2273 => 
    array(
       'classID' => '7640',
       'className' => 'R510-255 ANCIENT GREECE & PERSIAN EMPIR',
    ),
    2274 => 
    array(
       'classID' => '7641',
       'className' => 'R510-256 ROMAN CIVILIZATION',
    ),
    2275 => 
    array(
       'classID' => '7642',
       'className' => 'R510-263 HISTORY OF AFRICA',
    ),
    2276 => 
    array(
       'classID' => '7643',
       'className' => 'R510-264 HISTORY OF AFRICA',
    ),
    2277 => 
    array(
       'classID' => '7644',
       'className' => 'R510-280 SOUTH ASIA UP TO 1750',
    ),
    2278 => 
    array(
       'classID' => '7645',
       'className' => 'R510-286 THE ANCIENT NEAR EST',
    ),
    2279 => 
    array(
       'classID' => '7646',
       'className' => 'R510-287 HIST ISLAMIC CIV',
    ),
    2280 => 
    array(
       'classID' => '7647',
       'className' => 'R510-288 HIST OF ISLAMIC CIV.',
    ),
    2281 => 
    array(
       'classID' => '7648',
       'className' => 'R510-290 PERSPECTIVES IN HISTORY',
    ),
    2282 => 
    array(
       'classID' => '7649',
       'className' => 'R510-297 FAR EASTERN HISTORY',
    ),
    2283 => 
    array(
       'classID' => '7650',
       'className' => 'R510-298 FAR EASTERN HISTORY',
    ),
    2284 => 
    array(
       'classID' => '7651',
       'className' => 'R510-301 FILM AND HISTORY',
    ),
    2285 => 
    array(
       'classID' => '7652',
       'className' => 'R510-302 HISTORY OF DEMOCRACY',
    ),
    2286 => 
    array(
       'classID' => '7653',
       'className' => 'R510-305 ANCIENT SPORT',
    ),
    2287 => 
    array(
       'classID' => '7654',
       'className' => 'R510-308 SOUTH ASIA SINCE 1750',
    ),
    2288 => 
    array(
       'classID' => '7655',
       'className' => 'R510-311 LATIN AMER & THE US',
    ),
    2289 => 
    array(
       'classID' => '7656',
       'className' => 'R510-313 CINEMA & SOCIETY 20TH CENTURY',
    ),
    2290 => 
    array(
       'classID' => '7657',
       'className' => 'R510-314 FILM AND COLONIALISM',
    ),
    2291 => 
    array(
       'classID' => '7658',
       'className' => 'R510-317 HISTORY OF THE CARIBBEAN',
    ),
    2292 => 
    array(
       'classID' => '7659',
       'className' => 'R510-320 ROMAN HISTORY',
    ),
    2293 => 
    array(
       'classID' => '7660',
       'className' => 'R510-325 THE ANCIENT WORLD',
    ),
    2294 => 
    array(
       'classID' => '7661',
       'className' => 'R510-328 CIVILIZTN OF MIDDLE AGES',
    ),
    2295 => 
    array(
       'classID' => '7662',
       'className' => 'R510-339 WEST ISLAM & MIDDLE EAST',
    ),
    2296 => 
    array(
       'classID' => '7663',
       'className' => 'R510-358 20TH CENTURY EUROPE',
    ),
    2297 => 
    array(
       'classID' => '7664',
       'className' => 'R510-385 HIST OF SO AFRICA',
    ),
    2298 => 
    array(
       'classID' => '7665',
       'className' => 'R510-392 HISTORY GERMANY',
    ),
    2299 => 
    array(
       'classID' => '7666',
       'className' => 'R510-396 HONORS NON-AMERICAN HISTORY',
    ),
    2300 => 
    array(
       'classID' => '7667',
       'className' => 'R510-401 TOPICS EUROPEAN HIST',
    ),
    2301 => 
    array(
       'classID' => '7668',
       'className' => 'R510-407 ST:',
    ),
    2302 => 
    array(
       'classID' => '7669',
       'className' => 'R510-407 TOPICS IN ANC HIST II',
    ),
    2303 => 
    array(
       'classID' => '7670',
       'className' => 'R510-461 TPCS:IMMGTN TO THE AMERICAS',
    ),
    2304 => 
    array(
       'classID' => '7671',
       'className' => 'R510-462 TPCS:TRANSNATIONAL HIST OF SOC',
    ),
    2305 => 
    array(
       'classID' => '7672',
       'className' => 'R510-462 TPCS:ZIONISM TO 1948',
    ),
    2306 => 
    array(
       'classID' => '7673',
       'className' => 'R510-489 SEMINAR:READINGS',
    ),
    2307 => 
    array(
       'classID' => '7674',
       'className' => 'R510-490 SEM-RESEARCH:',
    ),
    2308 => 
    array(
       'classID' => '7675',
       'className' => 'R510-499 INDEPEN STUDY-HISTORY',
    ),
    2309 => 
    array(
       'classID' => '7676',
       'className' => 'R510-526 RDNGS AFRO-AMER HISTORY',
    ),
    2310 => 
    array(
       'classID' => '7677',
       'className' => 'R510-533 TOPICS IN ENVIR HIST',
    ),
    2311 => 
    array(
       'classID' => '7678',
       'className' => 'R510-537 PROBLEMS ANCIENT WORLD',
    ),
    2312 => 
    array(
       'classID' => '7679',
       'className' => 'R510-549 MOD LATIN AM HISTORY',
    ),
    2313 => 
    array(
       'classID' => '7680',
       'className' => 'R510-565 PUBLIC HISTORY',
    ),
    2314 => 
    array(
       'classID' => '7681',
       'className' => 'R510-695 INDEPENDENT STUDY IN HISTORY',
    ),
    2315 => 
    array(
       'classID' => '7682',
       'className' => 'R510-696 ADV IND STUDY HIST',
    ),
    2316 => 
    array(
       'classID' => '7683',
       'className' => 'R512-201 HISTORY U.S.',
    ),
    2317 => 
    array(
       'classID' => '7684',
       'className' => 'R512-202 HIST OF UNITED STATES II',
    ),
    2318 => 
    array(
       'classID' => '7685',
       'className' => 'R512-203 HISTORY OF NEWARK',
    ),
    2319 => 
    array(
       'classID' => '7686',
       'className' => 'R512-204 LGBT HISTORY',
    ),
    2320 => 
    array(
       'classID' => '7687',
       'className' => 'R512-227 TOPICS AMERICAN HISTORY',
    ),
    2321 => 
    array(
       'classID' => '7688',
       'className' => 'R512-231 AMERICA\'S PACIFIC: ASIAN',
    ),
    2322 => 
    array(
       'classID' => '7689',
       'className' => 'R512-233 AFRO-AMER HISTORY',
    ),
    2323 => 
    array(
       'classID' => '7690',
       'className' => 'R512-234 AFRO AMERICAN HIST',
    ),
    2324 => 
    array(
       'classID' => '7691',
       'className' => 'R512-265 AMER LEGAL HIST',
    ),
    2325 => 
    array(
       'classID' => '7692',
       'className' => 'R512-266 AMERICAN LEGAL HISTORY II',
    ),
    2326 => 
    array(
       'classID' => '7693',
       'className' => 'R512-273 HISTORY OF WOMEN IN US TO 1877',
    ),
    2327 => 
    array(
       'classID' => '7694',
       'className' => 'R512-297 AMERICAN FOREIGN AFFAIRS I',
    ),
    2328 => 
    array(
       'classID' => '7695',
       'className' => 'R512-313 CITY IN US CINEMA',
    ),
    2329 => 
    array(
       'classID' => '7696',
       'className' => 'R512-334 AFRO-AMERICAN HISTORY',
    ),
    2330 => 
    array(
       'classID' => '7697',
       'className' => 'R512-358 ECON & BUS HISTORY',
    ),
    2331 => 
    array(
       'classID' => '7698',
       'className' => 'R512-366 AMER LEGAL HISTORY',
    ),
    2332 => 
    array(
       'classID' => '7699',
       'className' => 'R512-371 CONTEMPORARY AMERICA',
    ),
    2333 => 
    array(
       'classID' => '7700',
       'className' => 'R512-374 HIST OF WOMEN IN US',
    ),
    2334 => 
    array(
       'classID' => '7701',
       'className' => 'R512-384 1920S & GREAT DEPRESSION',
    ),
    2335 => 
    array(
       'classID' => '7702',
       'className' => 'R512-393 NEW VIEWPOINT IN AMER HIST',
    ),
    2336 => 
    array(
       'classID' => '7703',
       'className' => 'R512-406 TPCS:AM POP CULTURES 1890-1945',
    ),
    2337 => 
    array(
       'classID' => '7704',
       'className' => 'R512-462 ST:',
    ),
    2338 => 
    array(
       'classID' => '7705',
       'className' => 'R512-462 TOPICS IN RECENT AMERICAN HIST',
    ),
    2339 => 
    array(
       'classID' => '7706',
       'className' => 'R512-472 ST:',
    ),
    2340 => 
    array(
       'classID' => '7707',
       'className' => 'R512-473 TOPICS WOMEN\'S HIST',
    ),
    2341 => 
    array(
       'classID' => '7708',
       'className' => 'R512-499 INDEPENDENT STUDY AMER HISTORY',
    ),
    2342 => 
    array(
       'classID' => '7709',
       'className' => 'R520-255 NUTRITION',
    ),
    2343 => 
    array(
       'classID' => '7710',
       'className' => 'R525-254 MED LIFE IN US',
    ),
    2344 => 
    array(
       'classID' => '7711',
       'className' => 'R553-533 GLOBAL BUS STRAT',
    ),
    2345 => 
    array(
       'classID' => '7712',
       'className' => 'R553-593 INT\'L BUS ENV.',
    ),
    2346 => 
    array(
       'classID' => '7713',
       'className' => 'R560-101 ELEMENTARY ITALIAN',
    ),
    2347 => 
    array(
       'classID' => '7714',
       'className' => 'R560-102 ELEMENTARY ITALIAN',
    ),
    2348 => 
    array(
       'classID' => '7715',
       'className' => 'R560-311 ITALIAN LIT ENGL TRANL',
    ),
    2349 => 
    array(
       'classID' => '7716',
       'className' => 'R560-312 ITALIAN LIT IN TRANSL',
    ),
    2350 => 
    array(
       'classID' => '7717',
       'className' => 'R565-101 ELEMENTARY JAPANESE',
    ),
    2351 => 
    array(
       'classID' => '7718',
       'className' => 'R565-102 ELEMENTARY JAPANESE',
    ),
    2352 => 
    array(
       'classID' => '7719',
       'className' => 'R565-131 INTERMEDIATE JAPANESE',
    ),
    2353 => 
    array(
       'classID' => '7720',
       'className' => 'R575-345 ORG BEHAVIOR AND WORK',
    ),
    2354 => 
    array(
       'classID' => '7721',
       'className' => 'R580-101 ELEMENTARY LATIN',
    ),
    2355 => 
    array(
       'classID' => '7722',
       'className' => 'R580-102 ELEMENTARY LATIN',
    ),
    2356 => 
    array(
       'classID' => '7723',
       'className' => 'R600-101 INTRO TO AMERICAN LAW',
    ),
    2357 => 
    array(
       'classID' => '7724',
       'className' => 'R600-102 SURVEY OF AMERICAN BUS LAW',
    ),
    2358 => 
    array(
       'classID' => '7725',
       'className' => 'R600-104 CONSTITUTIONAL CRIMINAL PROCED',
    ),
    2359 => 
    array(
       'classID' => '7726',
       'className' => 'R600-105 CRIMINAL LAW',
    ),
    2360 => 
    array(
       'classID' => '7727',
       'className' => 'R600-106 ANIMALS: ETHICS AND LAW',
    ),
    2361 => 
    array(
       'classID' => '7728',
       'className' => 'R620-301 MGT HUMAN RELATIONS',
    ),
    2362 => 
    array(
       'classID' => '7729',
       'className' => 'R620-368 INTERNATIONAL BUSINESS',
    ),
    2363 => 
    array(
       'classID' => '7730',
       'className' => 'R620-585 ORGANIZATION BEHAVIOR',
    ),
    2364 => 
    array(
       'classID' => '7731',
       'className' => 'R620-601 MNGMNT OF INNOV & TECHNLGY',
    ),
    2365 => 
    array(
       'classID' => '7732',
       'className' => 'R620-603 EXECUTIVE LEADERSHIP',
    ),
    2366 => 
    array(
       'classID' => '7733',
       'className' => 'R620-617 NEGOTIATIONS',
    ),
    2367 => 
    array(
       'classID' => '7734',
       'className' => 'R620-648 CROSS CULTURAL MANAGEMENT',
    ),
    2368 => 
    array(
       'classID' => '7735',
       'className' => 'R620-672 URBAN ENTERPRISE AND ECONOMY',
    ),
    2369 => 
    array(
       'classID' => '7736',
       'className' => 'R623-220 MANAGEMENT INFO SYSTEMS',
    ),
    2370 => 
    array(
       'classID' => '7737',
       'className' => 'R623-311 PRODUCT & OPNS MGT',
    ),
    2371 => 
    array(
       'classID' => '7738',
       'className' => 'R623-340 BUS RESEARCH METHOD',
    ),
    2372 => 
    array(
       'classID' => '7739',
       'className' => 'R630-301 INTRO TO MRKT',
    ),
    2373 => 
    array(
       'classID' => '7740',
       'className' => 'R630-452 MARKETING STATEGY',
    ),
    2374 => 
    array(
       'classID' => '7741',
       'className' => 'R630-586 MARKETING MANAGEMENT',
    ),
    2375 => 
    array(
       'classID' => '7742',
       'className' => 'R630-604 MARKETING RESEARCH',
    ),
    2376 => 
    array(
       'classID' => '7743',
       'className' => 'R630-606 INDUSTRIAL MKTG',
    ),
    2377 => 
    array(
       'classID' => '7744',
       'className' => 'R630-608 SALES MANAGEMENT',
    ),
    2378 => 
    array(
       'classID' => '7745',
       'className' => 'R630-609 MARKETING STRATEGY',
    ),
    2379 => 
    array(
       'classID' => '7746',
       'className' => 'R630-610 CONSUMER BEHAVIOR',
    ),
    2380 => 
    array(
       'classID' => '7747',
       'className' => 'R630-613 BRAND MANAGEMENT',
    ),
    2381 => 
    array(
       'classID' => '7748',
       'className' => 'R630-615 DIGITAL MARKETING',
    ),
    2382 => 
    array(
       'classID' => '7749',
       'className' => 'R630-618 PHARM PRODUCT MANAGEMENT',
    ),
    2383 => 
    array(
       'classID' => '7750',
       'className' => 'R630-619 MANAGING PHARM SALE',
    ),
    2384 => 
    array(
       'classID' => '7751',
       'className' => 'R630-653 MKTG HI TECH',
    ),
    2385 => 
    array(
       'classID' => '7752',
       'className' => 'R640-114 PRECALCULUS MATHEMATICS',
    ),
    2386 => 
    array(
       'classID' => '7753',
       'className' => 'R640-119 BASIC CALCULUS',
    ),
    2387 => 
    array(
       'classID' => '7754',
       'className' => 'R640-135 CALCULUS I',
    ),
    2388 => 
    array(
       'classID' => '7755',
       'className' => 'R640-135 UNIFIED CALCULUS',
    ),
    2389 => 
    array(
       'classID' => '7756',
       'className' => 'R640-136 CALCULUS II',
    ),
    2390 => 
    array(
       'classID' => '7757',
       'className' => 'R640-136 UNIFIED CALCULUS II',
    ),
    2391 => 
    array(
       'classID' => '7758',
       'className' => 'R640-235 CALCULUS III',
    ),
    2392 => 
    array(
       'classID' => '7759',
       'className' => 'R640-238 FOUND MODERN MATH',
    ),
    2393 => 
    array(
       'classID' => '7760',
       'className' => 'R640-251 MULTIVARIABLE CALCULUS',
    ),
    2394 => 
    array(
       'classID' => '7761',
       'className' => 'R640-314 ELEM DIFF EQUATIONS',
    ),
    2395 => 
    array(
       'classID' => '7762',
       'className' => 'R640-327 PROBABILITY & STATISTICS',
    ),
    2396 => 
    array(
       'classID' => '7763',
       'className' => 'R640-435 GEOMETRY',
    ),
    2397 => 
    array(
       'classID' => '7764',
       'className' => 'R640-441 TOPOLOGY I',
    ),
    2398 => 
    array(
       'classID' => '7765',
       'className' => 'R640-451 ABSTRACT ALGEBRA I',
    ),
    2399 => 
    array(
       'classID' => '7766',
       'className' => 'R640-452 INTRO ABSTRACT ALG',
    ),
    2400 => 
    array(
       'classID' => '7767',
       'className' => 'R645-612 REAL ANALYSIS',
    ),
    2401 => 
    array(
       'classID' => '7768',
       'className' => 'R645-636 LIE GROUPS',
    ),
    2402 => 
    array(
       'classID' => '7769',
       'className' => 'R645-643 DIFFERENTAIL MANIFOLDS',
    ),
    2403 => 
    array(
       'classID' => '7770',
       'className' => 'R650-351 THERMODYNAMICS',
    ),
    2404 => 
    array(
       'classID' => '7771',
       'className' => 'R700-135 MUSIC AND FILM',
    ),
    2405 => 
    array(
       'classID' => '7772',
       'className' => 'R711-685 SPEC TOPICS MGMT SCI',
    ),
    2406 => 
    array(
       'classID' => '7773',
       'className' => 'R730-103 INTRO TO PHILOSOPHY',
    ),
    2407 => 
    array(
       'classID' => '7774',
       'className' => 'R730-107 CRITICAL THINKING',
    ),
    2408 => 
    array(
       'classID' => '7775',
       'className' => 'R730-201 INTRO TO LOGIC',
    ),
    2409 => 
    array(
       'classID' => '7776',
       'className' => 'R730-203 SURVEY OF PHILOSOPHY',
    ),
    2410 => 
    array(
       'classID' => '7777',
       'className' => 'R730-205 CURR MORAL & SOC ISSUE',
    ),
    2411 => 
    array(
       'classID' => '7778',
       'className' => 'R730-212 001',
    ),
    2412 => 
    array(
       'classID' => '7779',
       'className' => 'R730-212 INTRO TO ETHICS',
    ),
    2413 => 
    array(
       'classID' => '7780',
       'className' => 'R730-306 GREEK PHILOSOPHY',
    ),
    2414 => 
    array(
       'classID' => '7781',
       'className' => 'R730-307 ADV MODERN PHILOSOPHY',
    ),
    2415 => 
    array(
       'classID' => '7782',
       'className' => 'R730-308 EXISTENTIAL & CONT PHI',
    ),
    2416 => 
    array(
       'classID' => '7783',
       'className' => 'R730-327 PHIL ISSUES FEMMISIM',
    ),
    2417 => 
    array(
       'classID' => '7784',
       'className' => 'R730-345 PHILOSOPHY OF LAW',
    ),
    2418 => 
    array(
       'classID' => '7785',
       'className' => 'R730-351 BUSINESS & PROF ETHICS',
    ),
    2419 => 
    array(
       'classID' => '7786',
       'className' => 'R730-380 PHIL OF PSYCHOLOGY',
    ),
    2420 => 
    array(
       'classID' => '7787',
       'className' => 'R730-385 ADV SEMINAR IN PHIL',
    ),
    2421 => 
    array(
       'classID' => '7788',
       'className' => 'R730-425 PHILOSOPHY OF SCIENCE',
    ),
    2422 => 
    array(
       'classID' => '7789',
       'className' => 'R730-428 POL & SOCIAL PHIL',
    ),
    2423 => 
    array(
       'classID' => '7790',
       'className' => 'R730-446 THEORY OF KNOWLEDGE',
    ),
    2424 => 
    array(
       'classID' => '7791',
       'className' => 'R730-472 METAPHY & PHIL OF MIND',
    ),
    2425 => 
    array(
       'classID' => '7792',
       'className' => 'R750-109 ASTRONOMY & COSMOLOGY',
    ),
    2426 => 
    array(
       'classID' => '7793',
       'className' => 'R750-203 GENERAL PHYSICS I',
    ),
    2427 => 
    array(
       'classID' => '7794',
       'className' => 'R750-204 GENERAL PHYSICS II',
    ),
    2428 => 
    array(
       'classID' => '7795',
       'className' => 'R750-206 INTRO TO PHYSICS LAB',
    ),
    2429 => 
    array(
       'classID' => '7796',
       'className' => 'R750-213 UNIV PHYSICS',
    ),
    2430 => 
    array(
       'classID' => '7797',
       'className' => 'R750-214 ELEMENTS OF PHYSICS',
    ),
    2431 => 
    array(
       'classID' => '7798',
       'className' => 'R750-214 UNIVERSITY PHYSICS II',
    ),
    2432 => 
    array(
       'classID' => '7799',
       'className' => 'R750-315 INTRO THERMODYNAMICS',
    ),
    2433 => 
    array(
       'classID' => '7800',
       'className' => 'R750-316 MODERN PHYSICS',
    ),
    2434 => 
    array(
       'classID' => '7801',
       'className' => 'R750-333 APP MATH TO PHYSICS',
    ),
    2435 => 
    array(
       'classID' => '7802',
       'className' => 'R750-403 INTRO ATOM & NUCL PHYS',
    ),
    2436 => 
    array(
       'classID' => '7803',
       'className' => 'R750-404 QUANTUM MECHANICS',
    ),
    2437 => 
    array(
       'classID' => '7804',
       'className' => 'R750-501 QUANTUM MECHANICS',
    ),
    2438 => 
    array(
       'classID' => '7805',
       'className' => 'R755-631 QUANTUM MECHANICS',
    ),
    2439 => 
    array(
       'classID' => '7806',
       'className' => 'R790-201 AMERICAN GOVERNMENT',
    ),
    2440 => 
    array(
       'classID' => '7807',
       'className' => 'R790-202 AMERICA & THE WORLD',
    ),
    2441 => 
    array(
       'classID' => '7808',
       'className' => 'R790-203 INTRO COMP POLITICS',
    ),
    2442 => 
    array(
       'classID' => '7809',
       'className' => 'R790-301 WEST EUROPE POLITICS',
    ),
    2443 => 
    array(
       'classID' => '7810',
       'className' => 'R790-302 POLITICS OF EUROPEAN UNION',
    ),
    2444 => 
    array(
       'classID' => '7811',
       'className' => 'R790-304 CONGRESSIONAL POLIT',
    ),
    2445 => 
    array(
       'classID' => '7812',
       'className' => 'R790-311 GOVT & POL OF LATIN-AM',
    ),
    2446 => 
    array(
       'classID' => '7813',
       'className' => 'R790-321 WORLD POLITICS',
    ),
    2447 => 
    array(
       'classID' => '7814',
       'className' => 'R790-330 EAST EUROPE GOV\'T & POL',
    ),
    2448 => 
    array(
       'classID' => '7815',
       'className' => 'R790-341 PUBLIC ADMINISTRATION',
    ),
    2449 => 
    array(
       'classID' => '7816',
       'className' => 'R790-352 POL ELECTIONS POLICY',
    ),
    2450 => 
    array(
       'classID' => '7817',
       'className' => 'R790-356 SEX LAW & PUBLIC POL',
    ),
    2451 => 
    array(
       'classID' => '7818',
       'className' => 'R790-359 GOVT & POLI NJ',
    ),
    2452 => 
    array(
       'classID' => '7819',
       'className' => 'R790-364 POL OF MINORITY GRPS',
    ),
    2453 => 
    array(
       'classID' => '7820',
       'className' => 'R790-368 DEMOC & CITIZENSHIP',
    ),
    2454 => 
    array(
       'classID' => '7821',
       'className' => 'R790-371 EARLY POLIT THEORY',
    ),
    2455 => 
    array(
       'classID' => '7822',
       'className' => 'R790-372 MODERN POLITICAL THEORY',
    ),
    2456 => 
    array(
       'classID' => '7823',
       'className' => 'R790-379 GOV & POL RUS&FORMER',
    ),
    2457 => 
    array(
       'classID' => '7824',
       'className' => 'R790-382 ENVIRONM POL & POLICY',
    ),
    2458 => 
    array(
       'classID' => '7825',
       'className' => 'R790-384 INTERNATIONAL ORGANIZTN',
    ),
    2459 => 
    array(
       'classID' => '7826',
       'className' => 'R790-385 RELIGION POLI POLICY',
    ),
    2460 => 
    array(
       'classID' => '7827',
       'className' => 'R790-387 INTERNATIONAL LAW',
    ),
    2461 => 
    array(
       'classID' => '7828',
       'className' => 'R790-390 POLITICS GLOBAL DEVELOP',
    ),
    2462 => 
    array(
       'classID' => '7829',
       'className' => 'R790-406 CIV LIB AND CIV RIGHTS',
    ),
    2463 => 
    array(
       'classID' => '7830',
       'className' => 'R790-409 LAW & PUBLIC POLICY',
    ),
    2464 => 
    array(
       'classID' => '7831',
       'className' => 'R790-417 PROBS IN INTERN RELA',
    ),
    2465 => 
    array(
       'classID' => '7832',
       'className' => 'R790-441 CIVIL LIBERTIES',
    ),
    2466 => 
    array(
       'classID' => '7833',
       'className' => 'R790-463 TOPICS IN AM POL & PLC',
    ),
    2467 => 
    array(
       'classID' => '7834',
       'className' => 'R790-466 TOPICS IN GLOBAL POL',
    ),
    2468 => 
    array(
       'classID' => '7835',
       'className' => 'R790-491 RESEARCH METHODS',
    ),
    2469 => 
    array(
       'classID' => '7836',
       'className' => 'R790-501 POLICY MAKING IN AMERICA',
    ),
    2470 => 
    array(
       'classID' => '7837',
       'className' => 'R790-521 PROB INTERNAT\'L RELATION',
    ),
    2471 => 
    array(
       'classID' => '7838',
       'className' => 'R790-531 PROB IN AMERICAN POLITICS',
    ),
    2472 => 
    array(
       'classID' => '7839',
       'className' => 'R790-533 RSRCH METH POL SCI',
    ),
    2473 => 
    array(
       'classID' => '7840',
       'className' => 'R790-541 INTL POLITICAL ECON',
    ),
    2474 => 
    array(
       'classID' => '7841',
       'className' => 'R799-607 SUPPLY CHAIN STRATEGY',
    ),
    2475 => 
    array(
       'classID' => '7842',
       'className' => 'R799-608 PROCUREMENT MANAGEMNT & GLOBAL',
    ),
    2476 => 
    array(
       'classID' => '7843',
       'className' => 'R799-655 CONTRACT MGMT-SC',
    ),
    2477 => 
    array(
       'classID' => '7844',
       'className' => 'R799-659 SC SOLUTIONS W/ERP',
    ),
    2478 => 
    array(
       'classID' => '7845',
       'className' => 'R799-660 SC SOLUTION EPR/SAP II',
    ),
    2479 => 
    array(
       'classID' => '7846',
       'className' => 'R799-661 PROJECT MGT',
    ),
    2480 => 
    array(
       'classID' => '7847',
       'className' => 'R799-665 MG\'G GLOBAL OPERATION',
    ),
    2481 => 
    array(
       'classID' => '7848',
       'className' => 'R799-679 LOGISTICS MANAGEMENT',
    ),
    2482 => 
    array(
       'classID' => '7849',
       'className' => 'R799-685 SPEC TPCS SCM/M',
    ),
    2483 => 
    array(
       'classID' => '7850',
       'className' => 'R812-101 ELEM PORT',
    ),
    2484 => 
    array(
       'classID' => '7851',
       'className' => 'R812-102 ELEMENTARY PORTUGUESE',
    ),
    2485 => 
    array(
       'classID' => '7852',
       'className' => 'R812-131 INTER PORTUGUESE',
    ),
    2486 => 
    array(
       'classID' => '7853',
       'className' => 'R812-132 INTER PORTUGUESE',
    ),
    2487 => 
    array(
       'classID' => '7854',
       'className' => 'R812-203 ADV GRAMMAR AND COMP',
    ),
    2488 => 
    array(
       'classID' => '7855',
       'className' => 'R812-208 INTRO TO BRAZILIAN LITERATURE',
    ),
    2489 => 
    array(
       'classID' => '7856',
       'className' => 'R812-312 PORTUGUESE LIT IN ENGLISH TRAN',
    ),
    2490 => 
    array(
       'classID' => '7857',
       'className' => 'R812-315 PORTUGUESE FOR BUS & COMM',
    ),
    2491 => 
    array(
       'classID' => '7858',
       'className' => 'R812-423 POST - REV PORTUGUESE LIT & CU',
    ),
    2492 => 
    array(
       'classID' => '7859',
       'className' => 'R830-101 PRINCIPLES OF PSYCHOLOGY I',
    ),
    2493 => 
    array(
       'classID' => '7860',
       'className' => 'R830-102 PRIN OF PSYCHOLOGY',
    ),
    2494 => 
    array(
       'classID' => '7861',
       'className' => 'R830-301 STAT METH COG & BEH',
    ),
    2495 => 
    array(
       'classID' => '7862',
       'className' => 'R830-302 EXP METH COG & BEH',
    ),
    2496 => 
    array(
       'classID' => '7863',
       'className' => 'R830-304 COGNITIVE PROCESSES',
    ),
    2497 => 
    array(
       'classID' => '7864',
       'className' => 'R830-308 CRITICAL THINKING',
    ),
    2498 => 
    array(
       'classID' => '7865',
       'className' => 'R830-311 HEALTH & SOCIAL JUST',
    ),
    2499 => 
    array(
       'classID' => '7866',
       'className' => 'R830-312 HEALTH & SOCIAL JUST',
    ),
    2500 => 
    array(
       'classID' => '7867',
       'className' => 'R830-323 DEVELOPMENTAL PSYCHOLOGY',
    ),
    2501 => 
    array(
       'classID' => '7868',
       'className' => 'R830-330 PSYCH OF LEARNING',
    ),
    2502 => 
    array(
       'classID' => '7869',
       'className' => 'R830-335 SOCIAL PSYCHOLOGY',
    ),
    2503 => 
    array(
       'classID' => '7870',
       'className' => 'R830-346 PSYCHOLOGY OF LANGUAGE',
    ),
    2504 => 
    array(
       'classID' => '7871',
       'className' => 'R830-350 INDUSTRIAL PSYCHOLOGY',
    ),
    2505 => 
    array(
       'classID' => '7872',
       'className' => 'R830-354 ADULT & AGING',
    ),
    2506 => 
    array(
       'classID' => '7873',
       'className' => 'R830-356 FAMILY PROCESSES',
    ),
    2507 => 
    array(
       'classID' => '7874',
       'className' => 'R830-358 INTRO CLINICAL PSYCHOLOG',
    ),
    2508 => 
    array(
       'classID' => '7875',
       'className' => 'R830-363 ABNORMAL PSYCHOLOGY',
    ),
    2509 => 
    array(
       'classID' => '7876',
       'className' => 'R830-369 FIELD WORK IN PSYCH',
    ),
    2510 => 
    array(
       'classID' => '7877',
       'className' => 'R830-370 FIELD WORK IN PSYCH',
    ),
    2511 => 
    array(
       'classID' => '7878',
       'className' => 'R830-371 PSYCHOLOGY & PERSONALITY',
    ),
    2512 => 
    array(
       'classID' => '7879',
       'className' => 'R830-372 PERCEPTION',
    ),
    2513 => 
    array(
       'classID' => '7880',
       'className' => 'R830-374 PSYCHOPATH CHILDHOOD',
    ),
    2514 => 
    array(
       'classID' => '7881',
       'className' => 'R830-409 SPEC PROBLEMS PSYCH',
    ),
    2515 => 
    array(
       'classID' => '7882',
       'className' => 'R830-411 INTRO TO COG NEUROSC',
    ),
    2516 => 
    array(
       'classID' => '7883',
       'className' => 'R830-420 INFANCY',
    ),
    2517 => 
    array(
       'classID' => '7884',
       'className' => 'R830-423 HIST & MOD VIEW PSYCH',
    ),
    2518 => 
    array(
       'classID' => '7885',
       'className' => 'R830-424 HEALTH PSYCHOLOGY',
    ),
    2519 => 
    array(
       'classID' => '7886',
       'className' => 'R830-434 ATTACHMENT THEORY',
    ),
    2520 => 
    array(
       'classID' => '7887',
       'className' => 'R830-469 PSYCH OF SEXUAL ORIENTATION',
    ),
    2521 => 
    array(
       'classID' => '7888',
       'className' => 'R830-484 PHYSIOLOGICAL PSYCHOLOGY',
    ),
    2522 => 
    array(
       'classID' => '7889',
       'className' => 'R830-489 SPECIAL ISSUES PSYCHOLOG',
    ),
    2523 => 
    array(
       'classID' => '7890',
       'className' => 'R830-491 RESEARCH IN PSYCHOLOGY',
    ),
    2524 => 
    array(
       'classID' => '7891',
       'className' => 'R830-496 EMOTIONAL BRAIN',
    ),
    2525 => 
    array(
       'classID' => '7892',
       'className' => 'R834-200 INTRO TO PUBLIC ADMINISTRATION',
    ),
    2526 => 
    array(
       'classID' => '7893',
       'className' => 'R834-203 INTRO TO NON-PROFIT ADMIN',
    ),
    2527 => 
    array(
       'classID' => '7894',
       'className' => 'R834-301 ETHICAL PUBLIC SERVICE',
    ),
    2528 => 
    array(
       'classID' => '7895',
       'className' => 'R834-304 TECH AND PUBLIC SERVICE',
    ),
    2529 => 
    array(
       'classID' => '7896',
       'className' => 'R834-575 GRANT WRITING & GRANTS MGMT',
    ),
    2530 => 
    array(
       'classID' => '7897',
       'className' => 'R834-607 RESRCH SEM I: QUANT METHODS',
    ),
    2531 => 
    array(
       'classID' => '7898',
       'className' => 'R834-613 CITIZEN PARTICIPATION & PROD',
    ),
    2532 => 
    array(
       'classID' => '7899',
       'className' => 'R834-617 ST:',
    ),
    2533 => 
    array(
       'classID' => '7900',
       'className' => 'R834-690 GLOBALIZATION, INT\'L MIGRATION',
    ),
    2534 => 
    array(
       'classID' => '7901',
       'className' => 'R835-501 INTERMEDIATE ACCT I',
    ),
    2535 => 
    array(
       'classID' => '7902',
       'className' => 'R835-603 TAX ASPECTS BUSINESS',
    ),
    2536 => 
    array(
       'classID' => '7903',
       'className' => 'R835-604 AUDITING CONCEPTS',
    ),
    2537 => 
    array(
       'classID' => '7904',
       'className' => 'R910-499 SPEC TOPICS SOC WORK',
    ),
    2538 => 
    array(
       'classID' => '7905',
       'className' => 'R920-201 INTRO SOCIOLOGY I',
    ),
    2539 => 
    array(
       'classID' => '7906',
       'className' => 'R920-201 INTRO TO SOCIOLOGY',
    ),
    2540 => 
    array(
       'classID' => '7907',
       'className' => 'R920-208 SOCIAL PROBLEMS',
    ),
    2541 => 
    array(
       'classID' => '7908',
       'className' => 'R920-301 SOCIAL RESEARCH',
    ),
    2542 => 
    array(
       'classID' => '7909',
       'className' => 'R920-302 INTRO SOC RESEARCH',
    ),
    2543 => 
    array(
       'classID' => '7910',
       'className' => 'R920-303 SOCIAL CHANGE',
    ),
    2544 => 
    array(
       'classID' => '7911',
       'className' => 'R920-308 SOCIAL MOVEMENTS',
    ),
    2545 => 
    array(
       'classID' => '7912',
       'className' => 'R920-310 OCCUPATION & PROFESSIONS',
    ),
    2546 => 
    array(
       'classID' => '7913',
       'className' => 'R920-311 SOCIOLOGY OF ECONOMY',
    ),
    2547 => 
    array(
       'classID' => '7914',
       'className' => 'R920-316 RACE AND ETHNICITY',
    ),
    2548 => 
    array(
       'classID' => '7915',
       'className' => 'R920-321 URBAN SOCIOLOGY',
    ),
    2549 => 
    array(
       'classID' => '7916',
       'className' => 'R920-326 AMERICAN SOCIETY',
    ),
    2550 => 
    array(
       'classID' => '7917',
       'className' => 'R920-346 POLITICAL SOCIOLOGY',
    ),
    2551 => 
    array(
       'classID' => '7918',
       'className' => 'R920-393 TOPICL ISSUES IN SOC',
    ),
    2552 => 
    array(
       'classID' => '7919',
       'className' => 'R920-394 TOPICL ISSUES IN SOC',
    ),
    2553 => 
    array(
       'classID' => '7920',
       'className' => 'R920-409 CLASSICAL SOC THEORY',
    ),
    2554 => 
    array(
       'classID' => '7921',
       'className' => 'R920-415 CONTEMPORARY SOCIOL THRY',
    ),
    2555 => 
    array(
       'classID' => '7922',
       'className' => 'R940-101 ELEMENTARY SPANISH',
    ),
    2556 => 
    array(
       'classID' => '7923',
       'className' => 'R940-102 ELEMENTARY SPANISH',
    ),
    2557 => 
    array(
       'classID' => '7924',
       'className' => 'R940-131 INTERMEDIATE SPANISH',
    ),
    2558 => 
    array(
       'classID' => '7925',
       'className' => 'R940-132 INTERMEDIATE SPANISH',
    ),
    2559 => 
    array(
       'classID' => '7926',
       'className' => 'R940-203 GRAMMAR & COMPOSITION',
    ),
    2560 => 
    array(
       'classID' => '7927',
       'className' => 'R940-207 INTRO SPANISH LIT',
    ),
    2561 => 
    array(
       'classID' => '7928',
       'className' => 'R940-208 INTRO TO LATIN AMER LIT',
    ),
    2562 => 
    array(
       'classID' => '7929',
       'className' => 'R940-331 SPAN & SPAN-AMER LIT',
    ),
    2563 => 
    array(
       'classID' => '7930',
       'className' => 'R940-348 HISP FILM & LIT',
    ),
    2564 => 
    array(
       'classID' => '7931',
       'className' => 'R940-370 CONTEMPORARY HISPANIC THEATER',
    ),
    2565 => 
    array(
       'classID' => '7932',
       'className' => 'R940-373 LIT CULT PST FR',
    ),
    2566 => 
    array(
       'classID' => '7933',
       'className' => 'R940-417 SEM SPAN & LAT AM',
    ),
    2567 => 
    array(
       'classID' => '7934',
       'className' => 'R960-575 DATA ANALYSIS & DECISION MAKIN',
    ),
    2568 => 
    array(
       'classID' => '7935',
       'className' => 'R960-576 FINANCIAL TIME SERIES',
    ),
    2569 => 
    array(
       'classID' => '7936',
       'className' => 'R960-577 INTRO STATS LINEAR MODELS',
    ),
    2570 => 
    array(
       'classID' => '7937',
       'className' => 'R960-580 STOCHASTIC PROCESS',
    ),
    2571 => 
    array(
       'classID' => '7938',
       'className' => 'R970-501 HISTORY & THEORY PLANNING',
    ),
    2572 => 
    array(
       'classID' => '7939',
       'className' => 'R970-591 INTRO TO GIS',
    ),
    2573 => 
    array(
       'classID' => '7940',
       'className' => 'R970-592 TOPICS IN COMP APPL PLANNING',
    ),
    2574 => 
    array(
       'classID' => '7941',
       'className' => 'R977-608 URBAN EDUCATION SYSTEMS',
    ),
    2575 => 
    array(
       'classID' => '7942',
       'className' => 'R977-613 URB ED POL & SCH',
    ),
    2576 => 
    array(
       'classID' => '7943',
       'className' => 'R977-617 GLOBALIZATION AND CITIES',
    ),
    2577 => 
    array(
       'classID' => '7944',
       'className' => 'R977-620 QUALITATIVE METHODS',
    ),
    2578 => 
    array(
       'classID' => '7945',
       'className' => 'R977-621 QUALITATIVE METHOD II',
    ),
    2579 => 
    array(
       'classID' => '7946',
       'className' => 'R988-201 INTRO WOMENS STUDIES',
    ),
    2580 => 
    array(
       'classID' => '7947',
       'className' => 'R988-205 INTRO LGBTQ STUDIES',
    ),
    2581 => 
    array(
       'classID' => '7948',
       'className' => 'R988-301 FEMINIST THEORY',
    ),
    2582 => 
    array(
       'classID' => '7949',
       'className' => 'R988-325 POLITICS OF SEXUALITY',
    ),
    2583 => 
    array(
       'classID' => '7950',
       'className' => 'R988-389 TOPICS WOMEN STUDIES',
    ),
    2584 => 
    array(
       'classID' => '7951',
       'className' => 'R988-390 TOPICS IN WOMENS STUDIES',
    ),
    2585 => 
    array(
       'classID' => '7952',
       'className' => 'R988-570 FEMINIST RESEARCH AND METHODS',
    ),
    2586 => 
    array(
       'classID' => '7953',
       'className' => 'SET-207 EVIDENCE & PROC PROPRTY SURVY',
    ),
    2587 => 
    array(
       'classID' => '7954',
       'className' => 'SET-280 MARINE SURVEYING',
    ),
    2588 => 
    array(
       'classID' => '7955',
       'className' => 'SET-301 ROUTE SURVEYING',
    ),
    2589 => 
    array(
       'classID' => '7956',
       'className' => 'SET-302 GEODETIC CONTROL SURVEY',
    ),
    2590 => 
    array(
       'classID' => '7957',
       'className' => 'SET-303 PHOTOGRAM & AERIAL PHOTO',
    ),
    2591 => 
    array(
       'classID' => '7958',
       'className' => 'SET-304 ADJUST COMPUTATIONS I',
    ),
    2592 => 
    array(
       'classID' => '7959',
       'className' => 'SET-307 BOUND & ADJACENT PROPERT',
    ),
    2593 => 
    array(
       'classID' => '7960',
       'className' => 'SET-360 DIGITAL SURVEYING METHODS',
    ),
    2594 => 
    array(
       'classID' => '7961',
       'className' => 'SET-401 FUNDAMENTALS OF GEODESY',
    ),
    2595 => 
    array(
       'classID' => '7962',
       'className' => 'SET-404 ADJUST COMPUTATIONS II',
    ),
    2596 => 
    array(
       'classID' => '7963',
       'className' => 'SET-407 BOUNDARY LINE ANALYSIS',
    ),
    2597 => 
    array(
       'classID' => '7964',
       'className' => 'SET-420 LAND INFORMATION SYSTEMS',
    ),
    2598 => 
    array(
       'classID' => '7965',
       'className' => 'SET-440 LAND DEVELOPMENT',
    ),
    2599 => 
    array(
       'classID' => '7966',
       'className' => 'SET-490 SENIOR PROJECT SURVEYING',
    ),
    2600 => 
    array(
       'classID' => '7967',
       'className' => 'SET-491 SPECIAL PROJECTS IN SURVEYING',
    ),
    2601 => 
    array(
       'classID' => '7968',
       'className' => 'SET-492 SPECIAL PROJECTS IN SURVEYING',
    ),
    2602 => 
    array(
       'classID' => '7969',
       'className' => 'SET-493 SPECIAL PROJECTS IN SURVEYING',
    ),
    2603 => 
    array(
       'classID' => '7970',
       'className' => 'STS-201 UND TECH SOC: INTRO STS',
    ),
    2604 => 
    array(
       'classID' => '7971',
       'className' => 'STS-201 UND TECH SOC: INTRO STS - HONORS',
    ),
    2605 => 
    array(
       'classID' => '7972',
       'className' => 'STS-210 GENERAL PSYCHOLOGY',
    ),
    2606 => 
    array(
       'classID' => '7973',
       'className' => 'STS-221 SOCIOLOGY',
    ),
    2607 => 
    array(
       'classID' => '7974',
       'className' => 'STS-221 SOCIOLOGY - HONORS',
    ),
    2608 => 
    array(
       'classID' => '7975',
       'className' => 'STS-300 LEGAL REASON WRIT & TECHN',
    ),
    2609 => 
    array(
       'classID' => '7976',
       'className' => 'STS-301 INDEPENDENT STUDY I',
    ),
    2610 => 
    array(
       'classID' => '7977',
       'className' => 'STS-303 INDEPENDENT STUDY',
    ),
    2611 => 
    array(
       'classID' => '7978',
       'className' => 'STS-304 WRITING SCI TECH & SOC',
    ),
    2612 => 
    array(
       'classID' => '7979',
       'className' => 'STS-307 FUND OF RESEARCH IN STS',
    ),
    2613 => 
    array(
       'classID' => '7980',
       'className' => 'STS-308 TECH & GLOBAL DEVELOPMENT',
    ),
    2614 => 
    array(
       'classID' => '7981',
       'className' => 'STS-308 TECH & GLOBAL DEVELOPMENT - HONO',
    ),
    2615 => 
    array(
       'classID' => '7982',
       'className' => 'STS-310 TECHNOLOGY AND HUMAN VALUES',
    ),
    2616 => 
    array(
       'classID' => '7983',
       'className' => 'STS-311 WORK EXPERIENCE I',
    ),
    2617 => 
    array(
       'classID' => '7984',
       'className' => 'STS-312 TECHNOLOGY AND POLICY',
    ),
    2618 => 
    array(
       'classID' => '7985',
       'className' => 'STS-325 ST: FILM AND TECHNOLOGY',
    ),
    2619 => 
    array(
       'classID' => '7986',
       'className' => 'STS-325 ST: FILM AND WAR',
    ),
    2620 => 
    array(
       'classID' => '7987',
       'className' => 'STS-325 ST:INTERDISCIPLINARY RESEARCH, D',
    ),
    2621 => 
    array(
       'classID' => '7988',
       'className' => 'STS-325 ST:SOCIAL PSYCHOLOGY OF HUMAN RE',
    ),
    2622 => 
    array(
       'classID' => '7989',
       'className' => 'STS-325 ST: SPORTS, TECHNOLOGY AND SOCIE',
    ),
    2623 => 
    array(
       'classID' => '7990',
       'className' => 'STS-325 ST:SPORTS, TECHNOLOGY AND SOCIET',
    ),
    2624 => 
    array(
       'classID' => '7991',
       'className' => 'STS-340 MULTICULTURALISM',
    ),
    2625 => 
    array(
       'classID' => '7992',
       'className' => 'STS-342 WOMEN IN TECH. CULT.',
    ),
    2626 => 
    array(
       'classID' => '7993',
       'className' => 'STS-342 WOMEN IN TECH. CULT. - HONORS',
    ),
    2627 => 
    array(
       'classID' => '7994',
       'className' => 'STS-347 INTRODUCTION TO MUSIC',
    ),
    2628 => 
    array(
       'classID' => '7995',
       'className' => 'STS-349 ADVANCED MUSIC TECHNOLOGY',
    ),
    2629 => 
    array(
       'classID' => '7996',
       'className' => 'STS-351 MINDS AND MACHINES',
    ),
    2630 => 
    array(
       'classID' => '7997',
       'className' => 'STS-352 RACE AND ETHNICITY',
    ),
    2631 => 
    array(
       'classID' => '7998',
       'className' => 'STS-359 CYBERPSYCHOLOGY',
    ),
    2632 => 
    array(
       'classID' => '7999',
       'className' => 'STS-360 ETHICS & THE ENVIRONMENT',
    ),
    2633 => 
    array(
       'classID' => '8000',
       'className' => 'STS-363 INTRO TO SUSTAINABILITYSTUDIES -',
    ),
    2634 => 
    array(
       'classID' => '8001',
       'className' => 'STS-364 SUSTAINABILITY POLICY & PRACTICE',
    ),
    2635 => 
    array(
       'classID' => '8002',
       'className' => 'STS-364 SUSTAINABILITY POLICY&PRACTICE',
    ),
    2636 => 
    array(
       'classID' => '8003',
       'className' => 'STS-401 INDEPENDENT STUDY',
    ),
    2637 => 
    array(
       'classID' => '8004',
       'className' => 'STS-403 INDEPENDENT STUDY',
    ),
    2638 => 
    array(
       'classID' => '8005',
       'className' => 'STS-411 WORK EXPERIENCE II',
    ),
    2639 => 
    array(
       'classID' => '8006',
       'className' => 'STS-490 PROJECT & SEMINAR I',
    ),
    2640 => 
    array(
       'classID' => '8007',
       'className' => 'STS-491 PROJECT & SEMINAR II',
    ),
    2641 => 
    array(
       'classID' => '8008',
       'className' => 'THTR-101 LIVING THEATRE',
    ),
    2642 => 
    array(
       'classID' => '8009',
       'className' => 'THTR-102 ACTING FUNDAMENTALS',
    ),
    2643 => 
    array(
       'classID' => '8010',
       'className' => 'THTR-213 DIRECTING I',
    ),
    2644 => 
    array(
       'classID' => '8011',
       'className' => 'THTR-216 IMPROVISATIONAL THTR-SHORTFORM',
    ),
    2645 => 
    array(
       'classID' => '8012',
       'className' => 'THTR-217 IMPROVISATIONAL THTR-LONG FORM',
    ),
    2646 => 
    array(
       'classID' => '8013',
       'className' => 'THTR-220 INSTR ENSEMBLE PERFORMANCE I',
    ),
    2647 => 
    array(
       'classID' => '8014',
       'className' => 'THTR-221 INSTR ENSEMBLE PERFORMANCE II',
    ),
    2648 => 
    array(
       'classID' => '8015',
       'className' => 'THTR-222 INSTR ENSEMBLE PERFORMANCE III',
    ),
    2649 => 
    array(
       'classID' => '8016',
       'className' => 'THTR-262 PERFORMANCE II',
    ),
    2650 => 
    array(
       'classID' => '8017',
       'className' => 'THTR-310 THEATRE HISTORY I',
    ),
    2651 => 
    array(
       'classID' => '8018',
       'className' => 'THTR-315 THEATRE HISTORY II',
    ),
    2652 => 
    array(
       'classID' => '8019',
       'className' => 'THTR-344 AMERICAN MUSICAL THEATER',
    ),
    2653 => 
    array(
       'classID' => '8020',
       'className' => 'THTR-365 PRINCIPLES OF PLAYWRITING',
    ),
    2654 => 
    array(
       'classID' => '8021',
       'className' => 'THTR-396 INTERNSHIP - THEATER',
    ),
    2655 => 
    array(
       'classID' => '8022',
       'className' => 'THTR-465 PERFORMANCE III',
    ),
    2656 => 
    array(
       'classID' => '8023',
       'className' => 'THTR-483 INDEPENDENT STUDY IN THEATER I',
    ),
    2657 => 
    array(
       'classID' => '8024',
       'className' => 'THTR-484 INDEPENDENT STUDY THEATER II',
    ),
    2658 => 
    array(
       'classID' => '8025',
       'className' => 'TRAN-603 INTRO URBAN TRANS PLAN',
    ),
    2659 => 
    array(
       'classID' => '8026',
       'className' => 'TRAN-610 TRANSPORTATION ECONOMICS',
    ),
    2660 => 
    array(
       'classID' => '8027',
       'className' => 'TRAN-615 TRAFFIC STUD & CAPACITY',
    ),
    2661 => 
    array(
       'classID' => '8028',
       'className' => 'TRAN-625 PUB TRAN OPERATNS & TECH',
    ),
    2662 => 
    array(
       'classID' => '8029',
       'className' => 'TRAN-650 URBAN SYSTEMS ENGR',
    ),
    2663 => 
    array(
       'classID' => '8030',
       'className' => 'TRAN-655 LAND USE PLANNING',
    ),
    2664 => 
    array(
       'classID' => '8031',
       'className' => 'TRAN-705 MASS TRANSPORTATION SYST',
    ),
    2665 => 
    array(
       'classID' => '8032',
       'className' => 'TRAN-725 INDEPENDENT STUDY',
    ),
    2666 => 
    array(
       'classID' => '8033',
       'className' => 'TRAN-752 TRAFFIC CONTROL',
    ),
    2667 => 
    array(
       'classID' => '8034',
       'className' => 'TRAN-755 INTELLIGENT TRANS SYSTEM',
    ),
    2668 => 
    array(
       'classID' => '8035',
       'className' => 'TRAN-765 MULTI-MOD FREIGHT TRANS',
    ),
    2669 => 
    array(
       'classID' => '8036',
       'className' => 'TUTR-089 FRESHMAN TUTORING I',
    ),
    2670 => 
    array(
       'classID' => '8037',
       'className' => 'TUTR-090 FRESHMEN TUTORING II',
    ),
    2671 => 
    array(
       'classID' => '8038',
       'className' => 'UMD-5034 BIOLOGY OF VASCULAR DISEASE',
    ),
    2672 => 
    array(
       'classID' => '8039',
       'className' => 'UMD-5130 STEM CELL BIO & APPS MOL ME',
    ),
    2673 => 
    array(
       'classID' => '8040',
       'className' => 'UMD-5200 INTRO TO BIOMEDICAL SCIENCES',
    ),
    2674 => 
    array(
       'classID' => '8041',
       'className' => 'UMD-6001 URBAN POPULATIONS',
    ),
    2675 => 
    array(
       'classID' => '8042',
       'className' => 'UMD-N512 TOPICS CANCER STEM CELL BIOL',
    ),
    2676 => 
    array(
       'classID' => '8043',
       'className' => 'USYS-702 EVOLUTION AMERICAN METROPOLIS',
    ),
    2677 => 
    array(
       'classID' => '8044',
       'className' => 'USYS-702 EVOLUTION OF THE AMERICAN METRO',
    ),
    2678 => 
    array(
       'classID' => '8045',
       'className' => 'USYS-711 THE GOOD CITY',
    ),
    2679 => 
    array(
       'classID' => '8046',
       'className' => 'USYS-721 ASPECTS OF URBAN FORM',
    ),
    2680 => 
    array(
       'classID' => '8047',
       'className' => 'USYS-725 INDEPENDENT STUDY I',
    ),
    2681 => 
    array(
       'classID' => '8048',
       'className' => 'USYS-726 INDEPENDENT STUDY II',
    ),
    2682 => 
    array(
       'classID' => '8049',
       'className' => 'USYS-788 ST:PEDAGOGY OF ARCHITECTURAL HI',
    ),
    2683 => 
    array(
       'classID' => '8050',
       'className' => 'USYS-788 ST: URBAN FORMS',
    ),
    2684 => 
    array(
       'classID' => '8051',
       'className' => 'USYS-792 DISSERTATION RESEARCH',
    ),
  );

if (!isset($_GET[ "term" ])) {
    die(encode_json(['message' => "Must provide term as part of the GET request", 'error' => true]));
}
$term = $_GET[ "term" ];

$result = [];

foreach($classes as $class) {
    $classId = $class['classID'];
    $className = $class['className'];
    if ( strpos( strtoupper($className), strtoupper($term) ) !== false ) {
        array_push( $result, ['label' => $className, 'class_id' => $classId] );
    }
}

echo encode_json($result);