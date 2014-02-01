<?php
/**
 * Internationalization file for the messages of the MultiMaps extension.
 *
 * @file MultiMaps.i18n.php
 * @ingroup MultiMaps
 * @author Pavel Astakhov <pastakhov@yandex.ru>
 */

$messages = array();

/** English
 * @author pastakhov
 */
$messages['en'] = array(
	'multimaps-desc' => 'Allows users to display maps and coordinate data using multiple mapping services',
	'multimaps-loading-map' => 'Loading map...',
	'multimaps-mapservices-must-not-empty-array' => 'Variable "$1" must not be an empty array',
	'multimaps-had-following-errors' => 'When parsing the passed parameters had the following errors:',
	'multimaps-element-illegal-value' => 'for the parameter "$1" was specified illegal value "$2". Valid values are: $3',
	'multimaps-element-more-parameters' => 'For this map element "$1" passed more parameters than expected:',
	'multimaps-element-parameters-not-processed' => 'the following parameters were not processed: $1',
	'multimaps-circle-radius-not-defined' => 'for the circle must be defined radius',
	'multimaps-circle-wrong-number-parameters' => 'for the circle should be defined only two parameters, the coordinates of the center and the radius. But specified {{PLURAL:$1|one parameter|$1 parameters}}',
	'multimaps-marker-incorrect-icon' => 'An incorrect file name "$1" was provided for the marker icon.',
	'multimaps-marker-incorrect-icon-url' => 'An incorrect URL "$1" was provided for the marker icon.',
	'multimaps-marker-incorrect-icon-size' => 'An incorrect size "$1" was provided for the marker icon "$2".',
	'multimaps-marker-incorrect-icon-anchor' => 'An incorrect anchor "$1" was provided for the marker icon "$2".',
	'multimaps-marker-incorrect-shadow-file' => 'An incorrect file name "$1" was provided for the icon shadow.',
	'multimaps-marker-incorrect-shadow-url' => 'An incorrect URL "$1" was provided for the icon shadow.',
	'multimaps-marker-incorrect-shadow-size' => 'An incorrect size "$1" was provided for the icon shadow "$2".',
	'multimaps-marker-incorrect-shadow-anchor' => 'An incorrect anchor "$1" was provided for the icon shadow "$2".',
	'multimaps-passed-unavailable-service' => 'Service name "$1" not found in the list of available services ($2). Used default service "$3"',
	'multimaps-square-wrong-number-points' => 'coordinates of the square should contain only two points, but specified {{PLURAL:$1|one point|$1 points}}',
	'multimaps-unable-create-element' => 'Map element "$1" can not be created',
	'multimaps-unable-parse-coordinates' => 'unable to parse the geographic coordinates "$1"',
	'multimaps-unable-parse-parameter' => 'unable to parse parameter "$1" value is "$2"',
	'multimaps-unable-parse-radius' => 'radius of the circle must be a numeric value, but specified "$1"',
	'multimaps-unknown-class-for-service' => 'The class "$1" that is defined for the service cannot be found.',
	'multimaps-unknown-parameter' => 'Unknown parameter: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'The class "$1" that is defined for the service cannot be used.',
	'multimaps-method-error-unknown-action' => '$1: Unknown action',
	'multimaps-method-error-unexpected-result' => '$1: An unexpected result of a function',
);

/** Message documentation (Message documentation)
 * @author Shirayuki
 * @author pastakhov
 */
$messages['qqq'] = array(
	'multimaps-desc' => '{{desc|name=Multi Maps|url=http://www.mediawiki.org/wiki/Extension:MultiMaps}}',
	'multimaps-loading-map' => 'The text is displayed instead of the map, and informs that the data needed to display the maps are not loaded yet',
	'multimaps-mapservices-must-not-empty-array' => 'Error message, Parameters:
* $1 - variable name',
	'multimaps-had-following-errors' => 'This message goes before list of error messages',
	'multimaps-element-illegal-value' => 'Error message, Parameters:
* $1 - name of the parameter
* $2 - user-specified value
* $3 - comma separated list of valid values',
	'multimaps-element-more-parameters' => 'Error message, Parameters:
* $1 - name of map element',
	'multimaps-element-parameters-not-processed' => 'This message goes after "multimaps-element-more-parameters", Parameters:
* $1 - comma separated list of user-specified values',
	'multimaps-circle-radius-not-defined' => 'Error message, when for circle (map element) not defined radius',
	'multimaps-circle-wrong-number-parameters' => 'Error message, when for circle defined too many parameters. Parameters:
* $1 - number of passed parameters (always more than two)',
	'multimaps-marker-incorrect-icon' => 'Error message. Parameters:
* $1 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-icon-url' => 'Error message. Parameters:
* $1 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-icon-size' => 'Error message. Parameters:
* $1 - user-specified size of the icon
* $2 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-icon-anchor' => 'Error message. Parameters:
* $1 - user-specified anchor point for the icon
* $2 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-shadow-file' => 'Error message. Parameters:
* $1 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-shadow-url' => 'Error message. Parameters:
* $1 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-shadow-size' => 'Error message. Parameters:
* $1 - user-specified size of the shadow
* $2 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-marker-incorrect-shadow-anchor' => 'Error message. Parameters:
* $1 - user-specified anchor point for the shadow
* $2 - user-specified value
{{Related|Multimaps-marker-incorrect}}',
	'multimaps-passed-unavailable-service' => 'Informational message warns that the specified service is not available and service is used by default.

Parameters:
* $1 - user-specified service
* $2 - comma separated list of available services
* $3 - name of default service, which is currently in use',
	'multimaps-square-wrong-number-points' => 'Error message, when for square (map element) specified more or less than two parameters. Parameters:
* $1 - the number of user-specified coordinates for the square',
	'multimaps-unable-create-element' => 'An error occurred while creating the map element. $1 - the name of the element, such as a "marker", "line", "polygon", etc.',
	'multimaps-unable-parse-coordinates' => 'Error message, $1 - geographic coordinates that cannot be parsed',
	'multimaps-unable-parse-parameter' => 'An error message is displayed when the given parameter can not be processed. Parameters:
* $1 - name of the parameter
* $2 - its value',
	'multimaps-unable-parse-radius' => 'Error message, Parameters:
* $1 - user-specified value',
	'multimaps-unknown-class-for-service' => 'An error that occurs when the key in array $egMultiMapsServices_showmap is name of unknown class. Parameters:
* $1 - class name',
	'multimaps-unknown-parameter' => 'Used as error message. Parameters:
* $1 - parameter name
{{Identical|Unknown parameter}}',
	'multimaps-error-incorrect-class-for-service' => 'An error that occurs when the key in array $egMultiMapsServices_showmap is name of class, which can not be used to display the map.

Parameters:
* $1 - class name',
	'multimaps-method-error-unknown-action' => 'Error message when passed to function value that it does not expect. Parameters:
* $1 - function name and value',
	'multimaps-method-error-unexpected-result' => 'An error message informs you that the function does not perform the expected actions. Parameters:
* $1 - function name and values',
);

/** Arabic (العربية)
 * @author ترجمان05
 */
$messages['ar'] = array(
	'multimaps-loading-map' => 'تحميل الخريطة...',
	'multimaps-method-error-unknown-action' => '$1: فعل غير معروف',
);

/** Asturian (asturianu)
 * @author Xuacu
 */
$messages['ast'] = array(
	'multimaps-desc' => 'Permite a los usuarios amosar datos de mapes y coordenaes usando múltiples servicios cartográficos',
	'multimaps-loading-map' => "Cargando'l mapa...",
	'multimaps-mapservices-must-not-empty-array' => 'La variable "$1" nun pue ser una matriz balera',
	'multimaps-had-following-errors' => 'Al analizar los parámetros que se pasaron hebo los siguientes errores:',
	'multimaps-element-illegal-value' => 'pal parámetru "$1" especificose\'l valor illegal "$2". Los valores válidos son: $3',
	'multimaps-element-more-parameters' => 'L\'elementu del mapa "$1" pasó más parámetros de los esperaos:',
	'multimaps-element-parameters-not-processed' => 'los siguientes parámetros nun se procesaron: $1',
	'multimaps-circle-radius-not-defined' => 'hai que definir un radiu pal círculu',
	'multimaps-circle-wrong-number-parameters' => "pal círculu hai que definir namái dos parámetros, les coordenaes del centru ya'l radiu. Pero {{PLURAL:$1|especificose un parámetru|especificáronse $1 parámetros}}",
	'multimaps-marker-incorrect-icon' => 'Diose un nome de ficheru incorreutu "$1" pal iconu de marcador',
	'multimaps-marker-incorrect-icon-url' => 'Dióse una URL incorreuta "$1" pal iconu del marcador.',
	'multimaps-marker-incorrect-icon-size' => 'Dióse un tamañu incorreutu "$1" pal iconu del marcador "$2".',
	'multimaps-marker-incorrect-icon-anchor' => 'Dióse un ancla incorreuta "$1" pal iconu del marcador "$2".',
	'multimaps-marker-incorrect-shadow-file' => 'Dióse un nome de ficheru incorreutu "$1" pa la solombra del iconu.',
	'multimaps-marker-incorrect-shadow-url' => 'Dióse una URL incorreuta "$1" pa la solombra del iconu.',
	'multimaps-marker-incorrect-shadow-size' => 'Dióse un tamañu incorreutu "$1" pa la solombra del iconu "$2".',
	'multimaps-marker-incorrect-shadow-anchor' => 'Dióse un ancla incorreuta "$1" pa la solombra del iconu "$2".',
	'multimaps-passed-unavailable-service' => 'Nun s\'alcontró\'l nome del serviciu "$1" na llista de servicios disponibles ($2). Úsose\'l serviciu predetermináu "$3"',
	'multimaps-square-wrong-number-points' => 'les coordenaes del cuadráu tienen de contener namái dos puntos, pero {{PLURAL:$1|diose un puntu|dieronse $1 puntos}}',
	'multimaps-unable-create-element' => 'Nun pue crease l\'elementu del mapa "$1"',
	'multimaps-unable-parse-coordinates' => 'nun puen analizase les coordenaes xeográfiques "$1"',
	'multimaps-unable-parse-parameter' => 'nun pudo analizase\'l parámetru "$1" col valor "$2"',
	'multimaps-unable-parse-radius' => 'el radiu del círculu tien de ser un valor numbéricu, pero especificó "$1"',
	'multimaps-unknown-class-for-service' => 'La clase "$1" definía pal serviciu nun pue alcontrase.',
	'multimaps-unknown-parameter' => 'Parámetru desconocíu: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'Nun pue utilizase la clase "$1" definía pal serviciu.',
	'multimaps-method-error-unknown-action' => '$1: Aición desconocía',
	'multimaps-method-error-unexpected-result' => "$1: Resultáu inesperáu d'una función",
);

/** Breton (brezhoneg)
 * @author Fohanno
 */
$messages['br'] = array(
	'multimaps-loading-map' => 'O kargañ ar gartenn...',
	'multimaps-unknown-parameter' => 'Arventenn dianav : "$1"',
	'multimaps-method-error-unknown-action' => '$1: Ober dianav',
);

/** German (Deutsch)
 * @author Kghbln
 * @author Metalhead64
 */
$messages['de'] = array(
	'multimaps-desc' => 'Ermöglicht es Benutzern, Karten und Koordinatendaten mithilfe mehrerer Kartierungsdienste anzuzeigen',
	'multimaps-loading-map' => 'Lade Karte …',
	'multimaps-mapservices-must-not-empty-array' => 'Die Variable „$1“ darf kein leeres Array sein.',
	'multimaps-had-following-errors' => 'Beim Parsen hatten die übergebenen Parameter folgende Fehler:',
	'multimaps-element-illegal-value' => 'Für den Parameter „$1“ wurde der ungültige Wert „$2“ angegeben. Gültige Werte sind: $3',
	'multimaps-element-more-parameters' => 'Für das Kartenelement „$1“ wurden mehr Parameter übergeben als erwartet:',
	'multimaps-element-parameters-not-processed' => 'Die folgenden Parameter wurden nicht verarbeitet: $1',
	'multimaps-circle-radius-not-defined' => 'Für den Kreis muss ein Radius angegeben werden.',
	'multimaps-circle-wrong-number-parameters' => 'Für den Kreis sollten nur zwei Parameter angegeben werden: Die Koordinaten des Mittelpunkts und der Radius. Du hast jedoch {{PLURAL:$1|nur einen|$1}} Parameter angegeben.',
	'multimaps-marker-incorrect-icon' => 'Für die Markierung wurde ein falscher Dateiname „$1“ angegeben',
	'multimaps-marker-incorrect-icon-url' => 'Es wurde eine falsche URL „$1“ für die Markierung angegeben.',
	'multimaps-marker-incorrect-icon-size' => 'Es wurde eine falsche Größe „$1“ für die Markierung „$2“ angegeben.',
	'multimaps-marker-incorrect-icon-anchor' => 'Es wurde ein falscher Anker „$1“ für die Markierung „$2“ angegeben.',
	'multimaps-marker-incorrect-shadow-file' => 'Es wurde ein falscher Dateiname „$1“ für den Symbolschatten angegeben.',
	'multimaps-marker-incorrect-shadow-url' => 'Es wurde eine falsche URL „$1“ für den Symbolschatten angegeben.',
	'multimaps-marker-incorrect-shadow-size' => 'Es wurde eine falsche Größe „$1“ für den Symbolschatten „$2“ angegeben.',
	'multimaps-marker-incorrect-shadow-anchor' => 'Es wurde ein falscher Anker „$1“ für den Symbolschatten „$2“ angegeben.',
	'multimaps-passed-unavailable-service' => 'Der Dienstname „$1“ wurde nicht in der Liste der verfügbaren Dienste gefunden ($2). Es wird der Standarddienst „$3“ verwendet.',
	'multimaps-square-wrong-number-points' => 'Die Koordinaten des Platzes sollten nur zwei Punkte enthalten. Du hast jedoch {{PLURAL:$1|einen Punkt|$1 Punkte}} angegeben.',
	'multimaps-unable-create-element' => 'Das Kartenelement „$1“ kann nicht erstellt werden',
	'multimaps-unable-parse-coordinates' => 'Die geografischen Koordinaten „$1“ konnten nicht geparst werden',
	'multimaps-unable-parse-parameter' => 'Der Parameter „$1“ mit dem Wert „$2“ konnte nicht geparst werden',
	'multimaps-unable-parse-radius' => 'Der Radius des Kreises muss ein numerischer Wert sein. Du hast jedoch „$1“ angegeben.',
	'multimaps-unknown-class-for-service' => 'Die für den Dienst angegebene Klasse „$1“ kann nicht gefunden werden.',
	'multimaps-unknown-parameter' => 'Unbekannter Parameter: „$1“',
	'multimaps-error-incorrect-class-for-service' => 'Die für den Dienst angegebene Klasse „$1“ kann nicht verwendet werden.',
	'multimaps-method-error-unknown-action' => '$1: Unbekannte Aktion',
	'multimaps-method-error-unexpected-result' => '$1: Ein unerwartetes Ergebnis einer Funktion',
);

/** British English (British English)
 * @author Shirayuki
 */
$messages['en-gb'] = array(
	'multimaps-circle-wrong-number-parameters' => 'for the circle should be defined only two parameters, the coordinates of the centre and the radius. But specified {{PLURAL:$1|one parameter|$1 parameters}}',
);

/** Spanish (español)
 * @author Fitoschido
 * @author Salvador alc
 */
$messages['es'] = array(
	'multimaps-loading-map' => 'Cargando el mapa…',
	'multimaps-mapservices-must-not-empty-array' => 'La variable «$1» no debe ser una matriz vacía',
	'multimaps-marker-incorrect-icon-url' => 'Una dirección URL incorrecta "$1" fue proporcionada por el icono de marcador.',
	'multimaps-marker-incorrect-icon-anchor' => 'Un ancla incorrecto " $1 "fue proporcionado por el icono marcador" $2 ".',
);

/** Persian (فارسی)
 * @author Armin1392
 */
$messages['fa'] = array(
	'multimaps-loading-map' => 'در حال بارگذاری نقشه...',
	'multimaps-mapservices-must-not-empty-array' => 'متغیر "$1" نباید یک آرایهٔ خالی باشد',
	'multimaps-element-illegal-value' => 'برای پارامتر "$1" مقدار غیرقانونی "$2" تعیین شده‌ بود. مقادیر معتبر عبارتند از: $3',
	'multimaps-element-parameters-not-processed' => 'پارامترهای زیر پردازش نشده بودند: $1',
	'multimaps-marker-incorrect-icon' => 'نام پوشهٔ‌ نادرست "$1" برای نماد شاخص ارائه شده بود.',
	'multimaps-marker-incorrect-icon-url' => 'یوآرال نادرست "$1" برای نماد شاخص ارائه شده بود.',
	'multimaps-marker-incorrect-icon-size' => 'اندازهٔ نادرست "$1" برای نماد شاخص "$2" ارائه شده بود.',
	'multimaps-unable-create-element' => 'بخش نقشهٔ "$1" نمی تواند ایجاد شود',
	'multimaps-unable-parse-coordinates' => 'قادر به تجزیهٔ‌ مختصات جغرافیایی "$1" نیست',
	'multimaps-unable-parse-parameter' => 'قادر به تجزیهٔ پارامتر "$1" که مقدارش "$2" است، نیست',
	'multimaps-unknown-class-for-service' => 'کلاس "$1" که برای سرویس تعریف شده است، نمی‌تواند پیدا شود.',
	'multimaps-unknown-parameter' => 'پارامتر ناشناخته: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'کلاس "$1" که برای سرویس تعریف شده‌است، نمی‌تواند استفاده شود.',
	'multimaps-method-error-unknown-action' => '$1: عمل ناشناخته',
	'multimaps-method-error-unexpected-result' => '$1: نتیجهٔ یک عملیات غیرمنتظره',
);

/** Finnish (suomi)
 * @author Silvonen
 */
$messages['fi'] = array(
	'multimaps-loading-map' => 'Ladataan karttaa...',
);

/** French (français)
 * @author Gomoko
 * @author Manohisoa
 */
$messages['fr'] = array(
	'multimaps-desc' => 'Permet aux utilisateurs d’afficher des cartes et des données localisées en utilisant divers services cartographiques',
	'multimaps-loading-map' => 'Chargement de la carte…',
	'multimaps-mapservices-must-not-empty-array' => 'La variable "$1" ne doit pas être un tableau vide',
	'multimaps-had-following-errors' => 'Les erreurs suivantes ont été détectées lors de l’analyse des paramètres passés:',
	'multimaps-element-illegal-value' => 'une valeur illégale $2" a été spécifiée pour le paramètre "$1". Les valeurs valides sont: $3',
	'multimaps-element-more-parameters' => 'Davantage de paramètres qu’attendu ont été passés pour cet élément de carte "$1":',
	'multimaps-element-parameters-not-processed' => 'les paramètres suivants n’ont pas été traités: $1',
	'multimaps-circle-radius-not-defined' => 'pour le cercle, le rayon doit être défini',
	'multimaps-circle-wrong-number-parameters' => 'pour le cercle, seuls deux paramètres devraient être définis, les coordonnées du centre et le rayon. Mais {{PLURAL:$1|un seul paramètre a été spécifié|$1 paramètres ont été spécifiés}}',
	'multimaps-marker-incorrect-icon' => 'Un nom de fichier "$1" incorrect a été fourni pour l’icône du marqueur',
	'multimaps-marker-incorrect-icon-url' => 'Une adresse URL incorrecte " $1 " a été attribuée à l\'icône de marqueur.',
	'multimaps-marker-incorrect-icon-size' => 'Une taille incorrecte "$1" a été attribuée à l\'icône de marqueur "$2".',
	'multimaps-marker-incorrect-icon-anchor' => 'Une ancre incorrecte "$1" a été attribuée à l\'icône de marqueur "$2"',
	'multimaps-marker-incorrect-shadow-file' => 'Un nom de fichier incorrect "$1" a été attribué à l\'ombre des icônes.',
	'multimaps-marker-incorrect-shadow-url' => 'Une URL incorrecte, « $1 », a été fournie pour l’ombre de l’icône.',
	'multimaps-marker-incorrect-shadow-size' => 'Une taille incorrecte "$1" a été attribuée à l\'ombre de l\'icône "$2".',
	'multimaps-marker-incorrect-shadow-anchor' => 'Une ancre incorrecte, « $1 », a été fournie pour l’ombre de l’icône « $2 ».',
	'multimaps-passed-unavailable-service' => 'Nom de service "$1" non trouvé dans la liste des services disponibles ($2). Service par défaut "$3" utilisé',
	'multimaps-square-wrong-number-points' => 'les coordonnées de la zone ne devraient contenir que deux points, mais {{PLURAL:$1|un point a été spécifié|$1 points ont été spécifiés}}',
	'multimaps-unable-create-element' => 'L’élément de carte "$1" ne peut pas être créé.',
	'multimaps-unable-parse-coordinates' => 'impossible d’analyser les coordonnées géographiques "$1"',
	'multimaps-unable-parse-parameter' => 'impossible d’analyser le paramètre "$1" dont la valeur est "$2"',
	'multimaps-unable-parse-radius' => 'le rayon du cercle doit être une valeur numérique, mais "$1" a été spécifié',
	'multimaps-unknown-class-for-service' => 'La classe "$1" définie pour le service est introuvable.',
	'multimaps-unknown-parameter' => 'Paramètre inconnu: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'La classe "$1" définie pour le service ne peut pas être utilisée.',
	'multimaps-method-error-unknown-action' => '$1: Action inconnue',
	'multimaps-method-error-unexpected-result' => '$1: Un résultat inattendu d’une fonction',
);

/** Galician (galego)
 * @author Toliño
 */
$messages['gl'] = array(
	'multimaps-desc' => 'Permite aos usuarios mostrar mapas e coordenadas mediante varios servizos cartográficos',
	'multimaps-loading-map' => 'Cargando o mapa...',
	'multimaps-mapservices-must-not-empty-array' => 'A variable "$1" non pode ser unha táboa baleira',
	'multimaps-had-following-errors' => 'Durante o proceso de análise, os elementos analizados produciron os seguintes erros:',
	'multimaps-element-illegal-value' => 'especificouse o valor ilegal "$2" para o parámetro "$1". Os valores válidos son: $3',
	'multimaps-element-more-parameters' => 'O elemento de mapa "$1" pasou máis parámetros dos esperados:',
	'multimaps-element-parameters-not-processed' => 'non se procesaron os seguintes parámetros: $1',
	'multimaps-circle-radius-not-defined' => 'cómpre definir o radio da circunferencia',
	'multimaps-circle-wrong-number-parameters' => 'cómpre definir unicamente dous parámetros para a circunferencia, as coordenadas do centro e o radio. Pero {{PLURAL:$1|especificouse un parámetro|especificáronse $1 parámetros}}',
	'multimaps-marker-incorrect-icon' => 'Proporcionouse o nome de ficheiro incorrecto "$1" para a icona de marcador.',
	'multimaps-marker-incorrect-icon-url' => 'Proporcionouse o enderezo URL incorrecto "$1" para a icona de marcador.',
	'multimaps-marker-incorrect-icon-size' => 'Proporcionouse o tamaño incorrecto "$1" para a icona de marcador "$2".',
	'multimaps-marker-incorrect-icon-anchor' => 'Proporcionouse a áncora incorrecta "$1" para a icona de marcador "$2".',
	'multimaps-marker-incorrect-shadow-file' => 'Proporcionouse o nome de ficheiro incorrecto "$1" para a sombra da icona.',
	'multimaps-marker-incorrect-shadow-url' => 'Proporcionouse o enderezo URL incorrecto "$1" para a sombra da icona.',
	'multimaps-marker-incorrect-shadow-size' => 'Proporcionouse o tamaño incorrecto "$1" para a sombra da icona "$2".',
	'multimaps-marker-incorrect-shadow-anchor' => 'Proporcionouse a áncora incorrecta "$1" para a sombra da icona "$2".',
	'multimaps-passed-unavailable-service' => 'Non se atopou o nome de servizo "$1" na lista de servizos dispoñibles ($2). Úsase o servizo por defecto "$3"',
	'multimaps-square-wrong-number-points' => 'as coordenadas da zona deben conter unicamente dous puntos, pero {{PLURAL:$1|especificouse un punto|especificáronse $1 puntos}}',
	'multimaps-unable-create-element' => 'Non se pode crear o elemento de mapa "$1"',
	'multimaps-unable-parse-coordinates' => 'non se poden analizar as coordenadas xeográficas "$1"',
	'multimaps-unable-parse-parameter' => 'non se pode analizar o parámetro "$1" cuxo valor é "$2"',
	'multimaps-unable-parse-radius' => 'o radio da circunferencia debe ser un valor numérico, pero especificouse "$1"',
	'multimaps-unknown-class-for-service' => 'Non se pode atopar a clase "$1" definida para o servizo.',
	'multimaps-unknown-parameter' => 'Parámetro descoñecido: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'Non se pode utilizar a clase "$1" definida para o servizo.',
	'multimaps-method-error-unknown-action' => '$1: Acción descoñecida',
	'multimaps-method-error-unexpected-result' => '$1: Resultado inesperado dunha función',
);

/** Upper Sorbian (hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'multimaps-loading-map' => 'Karta so začituje...',
	'multimaps-unable-create-element' => 'Kartowy element "$1" njehodźi so wutworić',
	'multimaps-unknown-parameter' => 'Njeznaty parameter: "$1"',
	'multimaps-method-error-unknown-action' => '$1: Njeznata akcija',
	'multimaps-method-error-unexpected-result' => '$1: Njewočakowany wuslědk funkcije',
);

/** Italian (italiano)
 * @author Beta16
 */
$messages['it'] = array(
	'multimaps-unknown-parameter' => 'Parametro sconosciuto: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'La classe "$1" che è definita per il servizio non può essere usata.',
	'multimaps-method-error-unknown-action' => '$1: azione sconosciuta',
);

/** Japanese (日本語)
 * @author Shirayuki
 */
$messages['ja'] = array(
	'multimaps-desc' => '利用者が複数の地図サービスを使用して地図や緯度経度を表示できるようにする',
	'multimaps-loading-map' => '地図を読み込み中...',
	'multimaps-mapservices-must-not-empty-array' => '変数「$1」には空の配列は指定できません',
	'multimaps-had-following-errors' => '指定したパラメーターを処理する際に以下のエラーが発生しました:',
	'multimaps-element-illegal-value' => 'パラメーター「$1」に無効な値「$2」を指定しました。有効な値: $3',
	'multimaps-element-more-parameters' => 'この地図要素「$1」に指定したパラメーターが多すぎます:',
	'multimaps-element-parameters-not-processed' => '以下のパラメーターを処理できませんでした: $1',
	'multimaps-circle-radius-not-defined' => '円の半径を指定する必要があります',
	'multimaps-circle-wrong-number-parameters' => '円には、中心の緯度経度と半径の 2 個のパラメーターのみを指定できますが、{{PLURAL:$1|$1 個のパラメーター}}を指定しました。',
	'multimaps-marker-incorrect-icon' => 'マーカー アイコンとして指定したファイル名「$1」が正しくありません。',
	'multimaps-marker-incorrect-icon-url' => 'マーカー アイコンとして指定した URL「$1」が正しくありません。',
	'multimaps-marker-incorrect-icon-size' => 'マーカー アイコン「$2」に指定したサイズ「$1」が正しくありません。',
	'multimaps-marker-incorrect-icon-anchor' => 'マーカー アイコン「$2」に指定したアンカー「$1」が正しくありません。',
	'multimaps-marker-incorrect-shadow-file' => 'アイコンの影として指定したファイル名「$1」が正しくありません。',
	'multimaps-marker-incorrect-shadow-url' => 'アイコンの影として指定した URL「$1」が正しくありません。',
	'multimaps-marker-incorrect-shadow-size' => 'アイコンの影「$2」に指定したサイズ「$1」が正しくありません。',
	'multimaps-marker-incorrect-shadow-anchor' => 'アイコンの影「$2」に指定したアンカー「$1」が正しくありません。',
	'multimaps-passed-unavailable-service' => 'サービス名「$1」は、利用できるサービス ($2) 内にありません。既定のサービス「$3」を使用します',
	'multimaps-square-wrong-number-points' => '四角形の緯度経度として 2 地点を指定すべきですが、{{PLURAL:$1|$1 地点}}を指定しました',
	'multimaps-unable-create-element' => '地図要素「$1」を作成できません',
	'multimaps-unable-parse-coordinates' => '緯度経度「$1」を構文解析できません',
	'multimaps-unable-parse-parameter' => 'パラメーター「$1」(値「$2」) を構文解析できません',
	'multimaps-unable-parse-radius' => '円の半径には数値を指定する必要がありますが、「$1」を指定しました',
	'multimaps-unknown-class-for-service' => 'サービスとして定義されたクラス「$1」が見つかりません。',
	'multimaps-unknown-parameter' => '不明なパラメーター:「$1」',
	'multimaps-error-incorrect-class-for-service' => 'サービスとして定義されたクラス「$1」は使用できません。',
	'multimaps-method-error-unknown-action' => '$1: 不明な操作です',
	'multimaps-method-error-unexpected-result' => '$1: 関数が予期しない結果を返しました',
);

/** Korean (한국어)
 * @author Priviet
 */
$messages['ko'] = array(
	'multimaps-desc' => '사용자가 다중 매핑 서비스를 사용하는 좌표 데이터와 지도를 표시하도록 하기',
	'multimaps-loading-map' => '지도를 불러오는 중...',
	'multimaps-mapservices-must-not-empty-array' => '"$1" 변수가 빈 배열이 아니여야 합니다.',
	'multimaps-had-following-errors' => '구문 분석 도중 입력된 매개변수가 다음 오류를 일으켰습니다:',
	'multimaps-element-illegal-value' => '"$1" 매개변수가 유효하지 않은 "$2" 값을 지정했습니다. 유효한 값은: $3',
	'multimaps-element-more-parameters' => '이 지도 요소 "$1"가 예상보다 더 많은 매개변수를 전달했습니다:',
	'multimaps-element-parameters-not-processed' => '다음 매개변수는 처리되지 않았습니다: $1',
	'multimaps-circle-radius-not-defined' => '원은 반드시 반지름을 정의해야 합니다',
	'multimaps-circle-wrong-number-parameters' => '원은 중심과 반지름의 좌표, 단 두 개의 매개변수로 정의해야 하지만 {{PLURAL:$1|하나의 매개변수|$1개의 매개변수}}가 지정됐습니다.',
	'multimaps-marker-incorrect-icon' => '정확하지 않은 파일 이름 "$1" 값이 마커 아이콘에 입력됐습니다.',
	'multimaps-marker-incorrect-icon-url' => '정확하지 않은 URL "$1" 값이 마커 아이콘에 입력됐습니다.',
	'multimaps-marker-incorrect-icon-size' => '정확하지 않은 크기 "$1"가 "$2" 값의 마커 아이콘에 입력됐습니다.',
	'multimaps-marker-incorrect-icon-anchor' => '정확하지 않은 앵커 "$1"가 마커 아이콘 "$2" 값에 입력됐습니다.',
	'multimaps-marker-incorrect-shadow-file' => '정확하지 않은 파일 이름 "$1" 값이 아이콘 섀도우에 입력됐습니다.',
	'multimaps-marker-incorrect-shadow-url' => '정확하지 않은 URL "$1"이 아이콘 섀도우에 입력됐습니다.',
	'multimaps-marker-incorrect-shadow-size' => '정확하지 않은 크기 "$1"가 아이콘 섀도우 "$2" 값에 입력됐습니다.',
	'multimaps-marker-incorrect-shadow-anchor' => '정확하지 않은 앵커 "$1"이 아이콘 섀도 "$2"에 입력됐습니다.',
	'multimaps-passed-unavailable-service' => '서비스 이름 "$1"을 사용할 수 있는 서비스($2) 목록에서 찾을 수 없습니다. 기본 값 "$3"을 사용함',
	'multimaps-square-wrong-number-points' => '사각형의 좌표는 단 두 개의 점을 포함해야 하지만 {{PLURAL:$1|한 점|$1개의 점}}을 지정했습니다.',
	'multimaps-unable-create-element' => '지도 요소 "$1"을 찾을 수 없습니다',
	'multimaps-unable-parse-coordinates' => '지리 좌표 "$1"을 구문 분석할 수 없습니다',
	'multimaps-unable-parse-parameter' => '매개변수 "$1" 값은 "$2"이며 구문 분석을 할 수 없습니다',
	'multimaps-unable-parse-radius' => '원의 반지름은 숫자 값이어야 하지만 "$1"을 지정했습니다',
	'multimaps-unknown-class-for-service' => '서비스로 지정된 "$1" 클래스를 찾을 수 없습니다.',
	'multimaps-unknown-parameter' => '알 수 없는 매개변수: "$1"',
	'multimaps-error-incorrect-class-for-service' => '서비스로 지정된 "$1" 클래스를 사용할 수 없습니다.',
	'multimaps-method-error-unknown-action' => '$1: 알 수 없는 명령',
	'multimaps-method-error-unexpected-result' => '$1: 함수의 예기치 못한 결과',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 */
$messages['lb'] = array(
	'multimaps-loading-map' => "D'Kaart gëtt gelueden…",
	'multimaps-mapservices-must-not-empty-array' => 'D\'Variabel "$1" däerf keen eidelen Array sinn',
	'multimaps-had-following-errors' => "Wéi d'Parameter déi ugi ware verschafft goufen sinn dës Feeler geschitt:",
	'multimaps-element-illegal-value' => 'fir de Parameter "$1" gouf en illegale Wäert uginn "$2". Valabel Wäerter sinn: $3',
	'multimaps-element-more-parameters' => 'Fir dëst Element vun der Kaart "$1" goufe méi Parameter ugi wéi erwaart:',
	'multimaps-element-parameters-not-processed' => 'Dës Parameter goufen net verschafft: $1',
	'multimaps-circle-radius-not-defined' => 'fir de Krees muss e Radius definéiert sinn',
	'multimaps-circle-wrong-number-parameters' => "fir de Krees sollen zwee Parameter definéiert sinn, d'Koordinate vum Zentrum an de Radius. Et {{PLURAL:$1|war awer just ee Parameter|waren awer $1 Parameter}} definéiert",
	'multimaps-unable-create-element' => 'D\'Element "$1" vun der Kaart kann net gemaach ginn',
	'multimaps-unable-parse-radius' => 'de Radius vum Krees muss en numeresche Wäert sinn, awer "$1" gouf uginn',
	'multimaps-unknown-class-for-service' => 'D\'Klass "$1" déi fir de Service definéiert ass kann net fonnt ginn.',
	'multimaps-unknown-parameter' => 'Onbekannte Parameter: "$1"',
	'multimaps-method-error-unknown-action' => '$1: Onbekannt Aktioun',
	'multimaps-method-error-unexpected-result' => '$1: En onerwaart Resultat vun enger Funktioun',
);

/** Macedonian (македонски)
 * @author Bjankuloski06
 */
$messages['mk'] = array(
	'multimaps-desc' => 'Овозможува корисниците да прикажуваат карти и координатни податоци користејќи повеќе картографски служби',
	'multimaps-loading-map' => 'Ја вчитувам картата...',
	'multimaps-mapservices-must-not-empty-array' => 'Променливата „$1“ не смее да биде празна низа',
	'multimaps-had-following-errors' => 'При парсирањето, дадените параметри ги имаа следниве грешки:',
	'multimaps-element-illegal-value' => 'на параметарот „$1“ му е зададена недопуштената вредност „$2“. Допуштени се: $3',
	'multimaps-element-more-parameters' => 'За овој картографски елемент „$1“ даде повеќе параметри од очекуваното:',
	'multimaps-element-parameters-not-processed' => 'не беа обработени следниве параметри: $1',
	'multimaps-circle-radius-not-defined' => 'на кружницата мора да ѝ зададе радиус',
	'multimaps-circle-wrong-number-parameters' => 'на кружницата мора да ѝ зададат барем два параметра - координатите на центарот и радиусот. Меѓутоа, зададени се {{PLURAL:$1|зададен е $1 параметар|зададени се $1 параметри}}',
	'multimaps-marker-incorrect-icon' => 'Зададено е погрешно податотечно име „$1“ на иконата за обележување',
	'multimaps-marker-incorrect-icon-url' => 'Укажана е неисправната URL „$1“ за иконата на бележникот.',
	'multimaps-marker-incorrect-icon-size' => 'Укажана е неисправната големина „$1“ за иконата на бележникот „$2“.',
	'multimaps-marker-incorrect-icon-anchor' => 'Укажана е неисправната котва „$1“ за иконата на бележникот „$2“.',
	'multimaps-marker-incorrect-shadow-file' => 'Укажано е неисправното податотечно име „$1“ за сенката на иконата.',
	'multimaps-marker-incorrect-shadow-url' => 'Укажана е неисправната URL „$1“ за сенката на иконата.',
	'multimaps-marker-incorrect-shadow-size' => 'Укажана е неисправната големина „$1“ за сенката на иконата „$2“.',
	'multimaps-marker-incorrect-shadow-anchor' => 'Укажана е неисправната котва „$1“ за сенката на иконата „$2“.',
	'multimaps-passed-unavailable-service' => 'Во списокот на расположиви служби ($2) не најдов таква со име „$1“. Ја употребив основно-зададената служба „$3“',
	'multimaps-square-wrong-number-points' => 'координатите на полето треба да содржат само две точки, но {{PLURAL:$1|укажана е само една|укажани се $1}}',
	'multimaps-unable-create-element' => 'Не можам да го создадам елементот „$1“',
	'multimaps-unable-parse-coordinates' => 'не можам да ги испарсирам географските координати „$1“',
	'multimaps-unable-parse-parameter' => 'не можам да го испарсирам параметарот „$1“. Вредноста е „$2“',
	'multimaps-unable-parse-radius' => 'радиусот на кружницата мора да има бројчена вредност, но зададено е „$1“',
	'multimaps-unknown-class-for-service' => 'Не можам да ја најдам класата „$1“ зададена на службата.',
	'multimaps-unknown-parameter' => 'Непознат параметар: „$1“',
	'multimaps-error-incorrect-class-for-service' => 'Не може да се употреби класата „$1“ зададена на службата.',
	'multimaps-method-error-unknown-action' => '$1: Непознато дејство',
	'multimaps-method-error-unexpected-result' => '$1: Неочекуван резултат на функција',
);

/** Dutch (Nederlands)
 * @author Kippenvlees1
 * @author Siebrand
 */
$messages['nl'] = array(
	'multimaps-desc' => 'Gebruikers toestaan om kaarten en coördinaten weer te geven met behulp van meerdere kaartdiensten',
	'multimaps-loading-map' => 'Bezig met het laden van de kaart...',
	'multimaps-mapservices-must-not-empty-array' => 'De variabele "$1" mag geen lege verzameling zijn',
	'multimaps-had-following-errors' => 'Tijdens het verwerken van de parameters zijn de volgende fouten opgetreden:',
	'multimaps-element-illegal-value' => 'voor de parameter "$1" was de opgegeven waarde "$2" ongeldig. Geldige waarden zijn: $3',
	'multimaps-element-more-parameters' => 'Voor het kaartelement "$1" zijn meer parameters opgegeven dan verwacht:',
	'multimaps-element-parameters-not-processed' => 'de volgende parameters zijn niet verwerkt: $1',
	'multimaps-circle-radius-not-defined' => 'voor cirkels moet een straal worden opgegeven',
	'multimaps-circle-wrong-number-parameters' => 'voor cirkels moeten twee parameters worden opgegeven; de coördinaten van het middelpunt en de straal. Hier {{PLURAL:$1|is één parameter|zijn $1 parameters}} opgegeven',
	'multimaps-marker-incorrect-icon' => 'voor de pictogrammarkering is een onjuiste bestandsnaam "$1" opgegeven',
	'multimaps-passed-unavailable-service' => 'De dienst "$1" is niet gevonden in de lijst met beschikbare diensten ($2). De standaard dienst "$3" wordt gebruikt',
	'multimaps-square-wrong-number-points' => 'coördinaten voor de rechthoek moeten twee punten bevatten, maar er {{PLURAL:$1|is één punt|zijn $1 punten}} opgegeven',
	'multimaps-unable-create-element' => 'Kaartelement "$1" kan niet worden aangemaakt',
	'multimaps-unable-parse-coordinates' => 'de geografische coördinaten "$1" kunnen niet verwerkt worden',
	'multimaps-unable-parse-parameter' => 'de parameter "$1" met waarde "$2" kan niet verwerkt worden',
	'multimaps-unable-parse-radius' => 'de straal van de cirkel moet een numerieke waarde zijn, maar er is "$1" opgegeven',
	'multimaps-unknown-class-for-service' => 'De klasse "$1" die is gedefinieerd voor de dienst bestaat niet.',
	'multimaps-unknown-parameter' => 'Onbekende parameter: "$1"',
	'multimaps-error-incorrect-class-for-service' => 'De klasse "$1" die is gedefinieerd voor de dienst kan niet gebruikt worden.',
	'multimaps-method-error-unknown-action' => '$1: onbekende handeling',
	'multimaps-method-error-unexpected-result' => '$1: een functie heeft een onverwacht resultaat teruggegeven',
);

/** tarandíne (tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'multimaps-desc' => "Permette a l'utinde de fà vedè le mappe e le coordinate ausanne servizie de mappature multiple",
	'multimaps-loading-map' => "Stoche a careche 'a mappe...",
	'multimaps-mapservices-must-not-empty-array' => '\'A variabbile "$1" non g\'adda essere \'na matrice vacande',
	'multimaps-had-following-errors' => 'Quanne agghie analizzate le parametre passate agghie avute ste errore:',
	'multimaps-element-illegal-value' => 'pu parametre "$1" ha state specificate \'nu valore illegale "$2". Le valore valide sonde: $3',
	'multimaps-element-more-parameters' => 'Pe stu elemende d\'a mappe "$1" passate cchiù parametre de chidde ca s\'aspettave:',
	'multimaps-element-parameters-not-processed' => 'le parametre seguende non ge onne state processate: $1',
	'multimaps-circle-radius-not-defined' => "pu cerchie addà essere definite 'u ragge",
	'multimaps-circle-wrong-number-parameters' => "pu cerchie avessera essere definite sulamende doje parametre, le coordinate d'u cendre e 'u ragge. Ma è specificate {{PLURAL:$1|'nu parametre|$1 parametre}}",
	'multimaps-marker-incorrect-icon' => 'Pu marcatore de l\'icone ha state date \'nu nome de file sbagghiate "$1"',
	'multimaps-passed-unavailable-service' => '\'U nome d\'u servizie "$1" non ha state acchiate jndr\'à l\'elenghe de le servizie disponibbile ($2). Ausate \'u servizie de base "$3"',
	'multimaps-square-wrong-number-points' => "le coordinate d'u quadrate avessera tenè sulamende doje punde, ma è specificate {{PLURAL:$1|'nu punde|$1 punde}}",
	'multimaps-unable-create-element' => 'Elemende d\'a mappe "$1" non ge pò essere ccrejate',
	'multimaps-unable-parse-coordinates' => 'non ge riesche a analizzà le coordinate sciugrafeche "$1"',
	'multimaps-unable-parse-parameter' => 'non ge pozze analizzà \'u parametre "$1" \'u valore jè "$2"',
	'multimaps-unable-parse-radius' => '\'u ragge d\'u cerchie adda essere \'nu valore numeriche, ma è specificate "$1"',
	'multimaps-unknown-class-for-service' => '\'A classe "$1" ca è definite pu servizie non ge pò essere acchiate.',
	'multimaps-unknown-parameter' => 'Parametre scanusciute: "$1"',
	'multimaps-error-incorrect-class-for-service' => '\'A classe "$1" ca è definite pu servizie non ge pò essere ausate.',
	'multimaps-method-error-unknown-action' => '$1: Azione scanusciute',
	'multimaps-method-error-unexpected-result' => "$1: 'Nu resultate inaspettate de 'na funzione",
);

/** Russian (русский)
 * @author Kaganer
 * @author Okras
 * @author Pastakhov
 */
$messages['ru'] = array(
	'multimaps-desc' => 'Позволяет пользователям отображать карты и координатные данные, используя несколько картографических сервисов',
	'multimaps-loading-map' => 'Идёт загрузка карты…',
	'multimaps-mapservices-must-not-empty-array' => 'Переменная «$1» не должна быть пустым массивом',
	'multimaps-had-following-errors' => 'При обработке переданных параметров возникли следующие ошибки:',
	'multimaps-element-illegal-value' => 'Для параметра «$1» было указанно недопустимое значение «$2». Допустимыми значениями являются: $3',
	'multimaps-element-more-parameters' => 'Для этого элемента карты « $1 » передано больше параметров, чем ожидалось:',
	'multimaps-element-parameters-not-processed' => 'следующие параметры не были обработаны: $1',
	'multimaps-circle-radius-not-defined' => 'для окружности должен быть определен радиус',
	'multimaps-circle-wrong-number-parameters' => 'для круга должно быть определено только два параметра, координаты центра и радиус. Однако, сейчас {{PLURAL:$1|указан один параметр|указано $1 параметров|указано $1 параметра}}',
	'multimaps-marker-incorrect-icon' => 'Для значка маркера указано неправильное имя файла « $1 »',
	'multimaps-marker-incorrect-icon-url' => 'Для значка маркера был указан неправильный URL-адрес «$1».',
	'multimaps-marker-incorrect-icon-size' => 'Для значка маркера «$2» был указан неверный размер «$1».',
	'multimaps-marker-incorrect-shadow-size' => 'Для тени значка «$2» был указан неверный размер «$1».',
	'multimaps-passed-unavailable-service' => 'Имя службы «$1» не найдено в списке доступных служб ($2). Была использована служба по умолчанию «$3»',
	'multimaps-square-wrong-number-points' => 'координаты квадрата должны состоять только из двух точек, однако сейчас {{PLURAL:$1|указана одна точка|указано $1 точек|указано $1 точки}}',
	'multimaps-unable-create-element' => 'Элемент карты « $1 » не может быть создан',
	'multimaps-unable-parse-coordinates' => 'не удается выполнить разбор географических координат « $1 »',
	'multimaps-unable-parse-parameter' => 'не удается выполнить разбор параметра « $1 » значение « $2 »',
	'multimaps-unable-parse-radius' => 'радиус круга должен быть числовым значением, но указанно « $1 »',
	'multimaps-unknown-class-for-service' => 'Класс « $1 », который определен для службы, не может быть найден.',
	'multimaps-unknown-parameter' => 'Неизвестный параметр: « $1 »',
	'multimaps-error-incorrect-class-for-service' => 'Класс « $1 », который определен для службы, не может быть использован.',
	'multimaps-method-error-unknown-action' => '$1: Неизвестное действие',
	'multimaps-method-error-unexpected-result' => '$1: Неожиданный результат функции',
);

/** Swedish (svenska)
 * @author Jopparn
 */
$messages['sv'] = array(
	'multimaps-desc' => 'Tillåter användare att visa kartor och samordna data med flera karttjänster',
	'multimaps-loading-map' => 'Laddar karta ...',
);

/** Ukrainian (українська)
 * @author Andriykopanytsia
 * @author Base
 */
$messages['uk'] = array(
	'multimaps-desc' => 'Дозволяє користувачам відображати карти і дані координат, використовуючи декілька картографічних сервісів',
	'multimaps-loading-map' => 'Завантаження карти…',
	'multimaps-mapservices-must-not-empty-array' => 'Змінна "$1" не може бути порожнім масивом',
	'multimaps-had-following-errors' => 'При обробці переданих параметрів виникли наступні помилки:',
	'multimaps-element-illegal-value' => 'для параметру «$1» було передано недопустиме значення «$2». Допустимими значеннями є: $3',
	'multimaps-element-more-parameters' => 'Для цього елементу карти «$1» передано більше параметрів, ніж очікувалось:',
	'multimaps-element-parameters-not-processed' => 'наступні параметри не було оброблено: $1',
	'multimaps-circle-radius-not-defined' => 'для кола повинен бути визначений радіус',
	'multimaps-circle-wrong-number-parameters' => 'для кола повинно бути визначено лише два параметри, координати центру та радіус. Але вказано {{PLURAL:$1|один параметр|вказано $1 параметри|вказано $1 параметрів}}',
	'multimaps-marker-incorrect-icon' => 'Для значка маркера вказано неправильну назву файлу «$1»',
	'multimaps-marker-incorrect-icon-url' => 'Неправильна адреса "$1" надано для піктограми маркера.',
	'multimaps-marker-incorrect-icon-size' => 'Неправильний розмір "$1" наданий для піктограми маркера "$2".',
	'multimaps-marker-incorrect-icon-anchor' => 'Неправильний якір "$1" наданий для піктограми маркера "$2".',
	'multimaps-marker-incorrect-shadow-file' => 'Неправильне ім\'я файлу "$1" надане для тіні піктограми.',
	'multimaps-marker-incorrect-shadow-url' => 'Неправильна адреса "$1" надано для тіні піктограми.',
	'multimaps-marker-incorrect-shadow-size' => 'Неправильний розмір "$1" наданий для тіні піктограми"$2".',
	'multimaps-marker-incorrect-shadow-anchor' => 'Неправильний якір "$1" наданий для тіні піктограми "$2".',
	'multimaps-passed-unavailable-service' => 'Ім\'я служби " $1 " не знайдено у списку доступних служб ($2). Використовується типова служба "$3"',
	'multimaps-square-wrong-number-points' => 'коорлинати квадрату повинні складатись лише із двох точок, але {{PLURAL:$1|вказана одна точка|вказано $1 точки|вказано $1 точок}}',
	'multimaps-unable-create-element' => 'Елементи карти «$1» не може бути створено',
	'multimaps-unable-parse-coordinates' => 'не вдається обробити географічні координати «$1»',
	'multimaps-unable-parse-parameter' => 'не вдається обробити параметр «$1» значення «$2»',
	'multimaps-unable-parse-radius' => 'радіус кола повинен бути числовим значенням, але вказано «$1»',
	'multimaps-unknown-class-for-service' => 'Клас «$1» який визначено для сервісу не може бути знайдено.',
	'multimaps-unknown-parameter' => 'Невідомий параметр: «$1»',
	'multimaps-error-incorrect-class-for-service' => 'Клас «$1», що визначено для сервісу не може бути використано.',
	'multimaps-method-error-unknown-action' => '$1: Невідома дія',
	'multimaps-method-error-unexpected-result' => '$1: Невідомий результат функції',
);

/** Simplified Chinese (中文（简体）‎)
 * @author Yfdyh000
 * @author 乌拉跨氪
 */
$messages['zh-hans'] = array(
	'multimaps-desc' => '允许用户使用多个地图服务显示地图和坐标数据',
	'multimaps-loading-map' => '加载地图中……',
	'multimaps-mapservices-must-not-empty-array' => '变量“$1”不能为空数组',
	'multimaps-had-following-errors' => '解析时所传递的参数有以下错误：',
	'multimaps-element-illegal-value' => '参数“$1”指定了无效的值“$2”。有效值为：$3',
	'multimaps-element-more-parameters' => '此地图元素“$1”传递了比预期更多的参数：',
	'multimaps-element-parameters-not-processed' => '未处理以下参数：$1',
	'multimaps-circle-radius-not-defined' => '圆必须定义半径。',
	'multimaps-marker-incorrect-icon' => '图标标记提供了不正确的文件名称“$1 ”',
	'multimaps-passed-unavailable-service' => '服务名“$1”在可用服务列表 ($2) 中未找到。已采用默认的服务“$3”',
	'multimaps-square-wrong-number-points' => '方形应该只有两个坐标，但却指定了{{PLURAL:$1|一个点|$1个点}}',
	'multimaps-unable-create-element' => '无法创建地图元素“$1”',
	'multimaps-unable-parse-coordinates' => '无法解析地理坐标“$1”',
	'multimaps-unable-parse-parameter' => '无法解析值为$2的参数$1',
	'multimaps-unable-parse-radius' => '圆的半径必须是一个数值，但却指定了“$1”',
	'multimaps-unknown-parameter' => '未知参数：“$1”',
	'multimaps-method-error-unknown-action' => '$1：未知的操作',
	'multimaps-method-error-unexpected-result' => '$1：函数出现意外的结果',
);
