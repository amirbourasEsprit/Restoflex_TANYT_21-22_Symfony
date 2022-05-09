<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('et', array (
  'validators' => 
  array (
    'This value should be false.' => 'Väärtus peaks olema väär.',
    'This value should be true.' => 'Väärtus peaks oleme tõene.',
    'This value should be of type {{ type }}.' => 'Väärtus peaks olema {{ type }}-tüüpi.',
    'This value should be blank.' => 'Väärtus peaks olema tühi.',
    'The value you selected is not a valid choice.' => 'Väärtus peaks olema üks etteantud valikutest.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Valima peaks vähemalt {{ limit }} valikut.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Valima peaks mitte rohkem kui  {{ limit }} valikut.',
    'One or more of the given values is invalid.' => 'Üks või rohkem väärtustest on vigane.',
    'This field was not expected.' => 'See väli ei olnud oodatud.',
    'This field is missing.' => 'See väli on puudu.',
    'This value is not a valid date.' => 'Väärtus pole korrektne kuupäev.',
    'This value is not a valid datetime.' => 'Väärtus pole korrektne kuupäev ja kellaeg.',
    'This value is not a valid email address.' => 'Väärtus pole korrektne e-maili aadress.',
    'The file could not be found.' => 'Faili ei leita.',
    'The file is not readable.' => 'Fail ei ole loetav.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur ({{ size }} {{ suffix }}). Suurim lubatud suurus on {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Faili sisutüüp on vigane ({{ type }}). Lubatud sisutüübid on {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Väärtus peaks olema {{ limit }} või vähem.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Väärtus on liiga pikk. Pikkus peaks olema {{ limit }} tähemärki või vähem.',
    'This value should be {{ limit }} or more.' => 'Väärtus peaks olema {{ limit }} või rohkem.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Väärtus on liiga lühike. Pikkus peaks  olema {{ limit }} tähemärki või rohkem.',
    'This value should not be blank.' => 'Väärtus ei tohiks olla tühi.',
    'This value should not be null.' => 'Väärtus ei tohiks olla \'null\'.',
    'This value should be null.' => 'Väärtus peaks olema \'null\'.',
    'This value is not valid.' => 'Väärtus on vigane.',
    'This value is not a valid time.' => 'Väärtus pole korrektne aeg.',
    'This value is not a valid URL.' => 'Väärtus pole korrektne URL.',
    'The two values should be equal.' => 'Väärtused peaksid olema võrdsed.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Fail on liiga suur. Maksimaalne lubatud suurus on {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Fail on liiga suur.',
    'The file could not be uploaded.' => 'Faili ei saa üles laadida.',
    'This value should be a valid number.' => 'Väärtus peaks olema korrektne number.',
    'This file is not a valid image.' => 'Fail ei ole korrektne pilt.',
    'This is not a valid IP address.' => 'IP aadress pole korrektne.',
    'This value is not a valid language.' => 'Väärtus pole korrektne keel.',
    'This value is not a valid locale.' => 'Väärtus pole korrektne asukohakeel.',
    'This value is not a valid country.' => 'Väärtus pole olemasolev riik.',
    'This value is already used.' => 'Väärtust on juba kasutatud.',
    'The size of the image could not be detected.' => 'Pildi suurust polnud võimalik tuvastada.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Pilt on liiga lai ({{ width }}px). Suurim lubatud laius on {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Pilt on liiga kitsas ({{ width }}px). Vähim lubatud laius on {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Pilt on liiga pikk ({{ height }}px). Lubatud suurim pikkus on {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Pilt pole piisavalt pikk ({{ height }}px). Lubatud vähim pikkus on {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Väärtus peaks olema kasutaja kehtiv salasõna.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Väärtus peaks olema täpselt {{ limit }} tähemärk pikk.|Väärtus peaks olema täpselt {{ limit }} tähemärki pikk.',
    'The file was only partially uploaded.' => 'Fail ei laetud täielikult üles.',
    'No file was uploaded.' => 'Ühtegi faili ei laetud üles.',
    'No temporary folder was configured in php.ini.' => 'Ühtegi ajutist kausta polnud php.ini-s seadistatud.',
    'Cannot write temporary file to disk.' => 'Ajutist faili ei saa kettale kirjutada.',
    'A PHP extension caused the upload to fail.' => 'PHP laiendi tõttu ebaõnnestus faili üleslaadimine.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Kogumikus peaks olema vähemalt {{ limit }} element.|Kogumikus peaks olema vähemalt {{ limit }} elementi.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Kogumikus peaks olema ülimalt {{ limit }} element.|Kogumikus peaks olema ülimalt {{ limit }} elementi.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Kogumikus peaks olema täpselt {{ limit }} element.|Kogumikus peaks olema täpselt {{ limit }}|elementi.',
    'Invalid card number.' => 'Vigane kaardi number.',
    'Unsupported card type or invalid card number.' => 'Kaardi tüüpi ei toetata või kaardi number on vigane.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Väärtus pole korrektne IBAN-number.',
    'This value is not a valid ISBN-10.' => 'Väärtus pole korrektne ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Väärtus pole korrektne ISBN-10 ega ISBN-13.',
    'This value is not a valid ISSN.' => 'Väärtus pole korrektne ISSN.',
    'This value is not a valid currency.' => 'Väärtus pole korrektne valuuta.',
    'This value should be equal to {{ compared_value }}.' => 'Väärtus peaks olema võrdne {{ compared_value }}-ga.',
    'This value should be greater than {{ compared_value }}.' => 'Väärtus peaks olema suurem kui {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Väärtus peaks olema suurem kui või võrduma {{ compared_value }}-ga.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus peaks olema identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Väärtus peaks olema väiksem kui või võrduma {{ compared_value }}-ga.',
    'This value should not be equal to {{ compared_value }}.' => 'Väärtus ei tohiks võrduda {{ compared_value }}-ga.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Väärtus ei tohiks olla identne väärtusega {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Kuvasuhe on liiga suur ({{ ratio }}). Lubatud maksimaalne suhe on {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Kuvasuhe on liiga väike ({{ ratio }}). Oodatav minimaalne suhe on {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Pilt on ruudukujuline ({{ width }}x{{ height }}px). Ruudukujulised pildid pole lubatud.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Pilt on horisontaalselt orienteeritud ({{ width }}x{{ height }}px). Maastikulised pildid pole lubatud.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Pilt on vertikaalselt orienteeritud ({{ width }}x{{ height }}px). Portreepildid pole lubatud.',
    'An empty file is not allowed.' => 'Tühi fail pole lubatud.',
    'The host could not be resolved.' => 'Sellist domeeni ei õnnestunud leida.',
    'This value does not match the expected {{ charset }} charset.' => 'See väärtus ei ühti eeldatava tähemärgiga {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'See ei ole kehtiv ettevõtte identifitseerimiskood (BIC).',
    'Error' => 'Viga',
    'This is not a valid UUID.' => 'See pole kehtiv UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'See väärtus peaks olema väärtuse {{ compared_value }} kordne.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'See ettevõtte identifitseerimiskood (BIC) ei ole seotud IBAN-iga {{ iban }}.',
    'This value should be valid JSON.' => 'See väärtus peaks olema kehtiv JSON.',
    'This collection should contain only unique elements.' => 'See kogu peaks sisaldama ainult unikaalseid elemente.',
    'This value should be positive.' => 'See väärtus peaks olema positiivne.',
    'This value should be either positive or zero.' => 'See väärtus peaks olema kas positiivne või null.',
    'This value should be negative.' => 'See väärtus peaks olema negatiivne.',
    'This value should be either negative or zero.' => 'See väärtus peaks olema kas negatiivne või null.',
    'This value is not a valid timezone.' => 'See väärtus pole kehtiv ajavöönd.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'See parool on lekkinud andmerikkumise korral, seda ei tohi kasutada. Palun kasutage muud parooli.',
    'This value should be between {{ min }} and {{ max }}.' => 'See väärtus peaks olema vahemikus {{ min }} kuni {{ max }}.',
    'This value is not a valid hostname.' => 'See väärtus pole korrektne domeeninimi.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'Selles kogus olevate elementide arv peab olema arvu {{ compared_value }} kordne.',
    'This value should satisfy at least one of the following constraints:' => 'See väärtus peab vastama vähemalt ühele järgmistest tingimustest:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Kõik väärtused selles kogus peavad vastama oma tingimustele.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'See väärtus pole korrektne ISIN-kood.',
    'This value should be a valid expression.' => 'See väärtus pole korrektne avaldis.',
    'This value is not a valid CSS color.' => 'See väärtus pole korrektne CSS-i värv.',
    'This value is not a valid CIDR notation.' => 'See väärtus pole korrektne CIDR võrguaadress.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'Võrgumaski väärtus peaks olema vahemikus {{ min }} kuni {{ max }}.',
    'This form should not contain extra fields.' => 'Väljade grupp ei tohiks sisalda lisaväljasid.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Üleslaaditud fail oli liiga suur. Palun proovi uuesti väiksema failiga.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-märgis on vigane. Palun proovi vormi uuesti esitada.',
    'This value is not a valid HTML5 color.' => 'See väärtus ei ole korrektne HTML5 värv.',
    'Please enter a valid birthdate.' => 'Palun sisesta korrektne sünnikuupäev.',
    'The selected choice is invalid.' => 'Tehtud valik on vigane.',
    'The collection is invalid.' => 'Kogum on vigane.',
    'Please select a valid color.' => 'Palun vali korrektne värv.',
    'Please select a valid country.' => 'Palun vali korrektne riik.',
    'Please select a valid currency.' => 'Palun vali korrektne valuuta.',
    'Please choose a valid date interval.' => 'Palun vali korrektne kuupäevade vahemik.',
    'Please enter a valid date and time.' => 'Palun sisesta korrektne kuupäev ja kellaaeg.',
    'Please enter a valid date.' => 'Palun sisesta korrektne kuupäev.',
    'Please select a valid file.' => 'Palun vali korrektne fail.',
    'The hidden field is invalid.' => 'Peidetud väli on vigane.',
    'Please enter an integer.' => 'Palun sisesta täisarv.',
    'Please select a valid language.' => 'Palun vali korrektne keel.',
    'Please select a valid locale.' => 'Palun vali korrektne keelekood.',
    'Please enter a valid money amount.' => 'Palun sisesta korrektne rahaline väärtus.',
    'Please enter a number.' => 'Palun sisesta number.',
    'The password is invalid.' => 'Vigane parool.',
    'Please enter a percentage value.' => 'Palun sisesta protsendiline väärtus.',
    'The values do not match.' => 'Väärtused ei klapi.',
    'Please enter a valid time.' => 'Palun sisesta korrektne aeg.',
    'Please select a valid timezone.' => 'Palun vali korrektne ajavöönd.',
    'Please enter a valid URL.' => 'Palun sisesta korrektne URL.',
    'Please enter a valid search term.' => 'Palun sisesta korrektne otsingutermin.',
    'Please provide a valid phone number.' => 'Palun sisesta korrektne telefoninumber.',
    'The checkbox has an invalid value.' => 'Märkeruudu väärtus on vigane.',
    'Please enter a valid email address.' => 'Palun sisesta korrektne e-posti aadress.',
    'Please select a valid option.' => 'Palun tee korrektne valik.',
    'Please select a valid range.' => 'Palun vali korrektne vahemik.',
    'Please enter a valid week.' => 'Palun sisesta korrektne nädal.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Autentimisel juhtus ootamatu viga.',
    'Authentication credentials could not be found.' => 'Autentimisandmeid ei leitud.',
    'Authentication request could not be processed due to a system problem.' => 'Autentimispäring ei õnnestunud süsteemi probleemi tõttu.',
    'Invalid credentials.' => 'Vigased autentimisandmed.',
    'Cookie has already been used by someone else.' => 'Küpsis on juba kellegi teise poolt kasutuses.',
    'Not privileged to request the resource.' => 'Ressursi pärimiseks pole piisavalt õiguseid.',
    'Invalid CSRF token.' => 'Vigane CSRF märgis.',
    'No authentication provider found to support the authentication token.' => 'Ei leitud sobivat autentimismeetodit, mis toetaks autentimismärgist.',
    'No session available, it either timed out or cookies are not enabled.' => 'Seanss puudub, see on kas aegunud või pole küpsised lubatud.',
    'No token could be found.' => 'Identsustõendit ei leitud.',
    'Username could not be found.' => 'Kasutajanime ei leitud.',
    'Account has expired.' => 'Kasutajakonto on aegunud.',
    'Credentials have expired.' => 'Autentimistunnused on aegunud.',
    'Account is disabled.' => 'Kasutajakonto on keelatud.',
    'Account is locked.' => 'Kasutajakonto on lukustatud.',
    'Too many failed login attempts, please try again later.' => 'Liiga palju ebaõnnestunud autentimise katseid, palun proovi hiljem uuesti.',
    'Invalid or expired login link.' => 'Vigane või aegunud sisselogimise link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Liiga palju ebaõnnestunud autentimise katseid, palun proovi uuesti %minutes% minuti pärast.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Liiga palju ebaõnnestunud autentimise katseid, palun proovi uuesti %minutes% minuti pärast.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This value should be a valid expression.' => 'This value should be a valid expression.',
    'This value is not a valid CSS color.' => 'This value is not a valid CSS color.',
    'This value is not a valid CIDR notation.' => 'This value is not a valid CIDR notation.',
    'The value of the netmask should be between {{ min }} and {{ max }}.' => 'The value of the netmask should be between {{ min }} and {{ max }}.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
    'Bad code value' => 'Code does not match',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
    'Too many failed login attempts, please try again in %minutes% minute.' => 'Too many failed login attempts, please try again in %minutes% minute.',
    'Too many failed login attempts, please try again in %minutes% minutes.' => 'Too many failed login attempts, please try again in %minutes% minutes.',
  ),
  'gregwar_captcha' => 
  array (
    'Renew' => 'Renew',
  ),
  'ResetPasswordBundle' => 
  array (
    '%count% year|%count% years' => '%count% year|%count% years',
    '%count% month|%count% months' => '%count% month|%count% months',
    '%count% day|%count% days' => '%count% day|%count% days',
    '%count% hour|%count% hours' => '%count% hour|%count% hours',
    '%count% minute|%count% minutes' => '%count% minute|%count% minutes',
    'There was a problem validating your password reset request' => 'There was a problem validating your password reset request',
    'There was a problem handling your password reset request' => 'There was a problem handling your password reset request',
    'The link in your email is expired. Please try to reset your password again.' => 'The link in your email is expired. Please try to reset your password again.',
    'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.' => 'Please update the request_password_repository configuration in config/packages/reset_password.yaml to point to your "request password repository" service.',
    'The reset password link is invalid. Please try to reset your password again.' => 'The reset password link is invalid. Please try to reset your password again.',
    'You have already requested a reset password email. Please check your email or try again soon.' => 'You have already requested a reset password email. Please check your email or try again soon.',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
