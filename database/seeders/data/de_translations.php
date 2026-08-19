<?php

/**
 * Traductions allemandes des articles (ArticleSeeder).
 *
 * Indexé par l'id produit utilisé dans $articlesData.
 * Chaque entrée fournit 'name' et 'short_description' en allemand.
 *
 * Utilisation dans ArticleSeeder::run() :
 *
 *   $de = require database_path('seeders/data/de_translations.php');
 *
 *   foreach ($articlesData as &$item) {
 *       if (isset($de[$item['id']])) {
 *           $item['name']['de']              = $de[$item['id']]['name'];
 *           $item['short_description']['de'] = $de[$item['id']]['short_description'];
 *           $item['description']['de']       = $de[$item['id']]['short_description'];
 *       }
 *   }
 *   unset($item);
 *
 * Penser aussi à ajouter 'de' dans la propriété $locales du seeder.
 */

return [

    '11363' => [
        'name' => '2 BÜRO-MONOBLÖCKE MIT BAD',
        'short_description' => "Abmessungen am Sockel 593 x 243 cm.\nAbmessungen am Dach 600 x 250 cm.\nInnenhöhe 240 cm, Außenhöhe 272 cm.\nWandpaneel Stärke 40 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit IDRO-V100-Holz 18 mm, belegt mit rutschfestem PVC.\nAluminiumfenster und -türen RAL 9010\nGlas 4 mm transparent.\nNr. 1 einflügelige Halbglas-Eingangstür, komplett mit Einbruchschutzstangen, mit Standardgriff und -schloss, Außenmaß 100 x 210h cm.\nNr. 1 Schiebefenster, komplett mit Einbruchschutzstangen, Außenmaß 100 x 100h cm.\nNr. 1 einflügelige Volltür, mit Standardgriff und -schloss, Außenmaß 80 x 210h cm.\nNr. 1 Kippfenster, mit 4 mm Mattglas, ohne Einbruchschutzstangen, Außenmaß 50 x 50h cm.\nNr. 1 Falttür, Farbe GRAU.\nInnenliegende Sanitärinstallation mit sichtbarem MEPLA-Rohr, bestehend aus:\nNr. 1 Keramik-WC + Sitz + Aufputz-Spülkasten.\nNr. 1 Papierrollenhalter + Bürste.\nNr. 1 Keramikwaschbecken 60 cm + Standsäule + Mischbatterie.\nNr. 1 Ablage + Spiegel.\nNr. 1 Keramik-Duschtasse 90 x 90 cm.\nNr. 1 Duschstange + Mischbatterie + Brausekopf.\nNr. 1 Eck-Seifenhalter.\nNr. 1 Elektroboiler 60 Liter Warmwasser.\nStandard-Elektroinstallation nach CEE-Norm 220V, mit sichtbarem weißem PVC-Rohr, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter für Steckdosen.\nNr. 2 Schalter.\nNr. 2 Steckdosen.\nNr. 1 Deckenleuchte 19W-LED.\nNr. 1 Deckenleuchte 45W-LED.\nNr. 1 Elektro-Konvektor 500W.\nNr. 1 Mono-Split-Inverter-Klimaanlage BTU 9000-HISENSE.\nNr. 1 Außenkasten für den Anschluss der Elektroinstallation.",
    ],

    '11170' => [
        'name' => 'Pool House Unterstand aus Verbundwerkstoff – Die perfekte Lösung für Ihren Poolbereich',
        'short_description' => "Pool House Unterstand aus Verbundwerkstoff: moderne und widerstandsfähige Struktur für Ihren Poolbereich. Einfach zu montieren, ökologisch nachhaltig und individuell anpassbar. 7 Jahre Garantie.",
    ],

    '11416' => [
        'name' => 'Schönes und komfortables Mobilheim Chalet Wood Gray',
        'short_description' => "",
    ],

    '10540' => [
        'name' => 'Containerhaus 20 Fuß HC – Komplett ausgestattet',
        'short_description' => "Kompaktes Containerhaus 20 Fuß HC, verkleidet mit Faserzement in Holzoptik. Ausgestattet mit Küche, Bad, Dämmung und hochwertigem Innenausbau.\nModerne Holzoptik\nWärme- und Schalldämmung\nKüche und Bad inklusive\nKomplette Elektroinstallation\nSofort einsatzbereit",
    ],

    '11488' => [
        'name' => 'Containerhaus 35 m² – Modell Cottage, ganzjährig bewohnbar',
        'short_description' => "",
    ],

    '10541' => [
        'name' => 'Wohn-Containerhaus 40 Fuß',
        'short_description' => "Bewohnbares Containerhaus 40 Fuß, hergestellt von Max Shipping Inc. Küche und Bad inklusive, geräumiger Wohnbereich und schnelle weltweite Lieferung.\nOptimierter Wohnraum\nEinbauküche\nKomplettes Bad\nPerfekt für Paare\nSchnelle internationale Lieferung",
    ],

    '11486' => [
        'name' => 'Containerhaus 40 Fuß HQ / 12 m – Moderne und funktionale Unterkünfte',
        'short_description' => "",
    ],

    '10544' => [
        'name' => 'Containerhaus Modell PLAYERO',
        'short_description' => "Design-Containerwohnung mit großzügigen Flächen und modernem Komfort.\nContainer 40′ High Cube\n1 Schlafzimmer und 1 komplettes Bad\nL-förmige PVC-Küche und Spiegelschrank\n2 Glasschiebetüren, Inverter-Klimaanlage\nVollständige Dämmung und Generatoranschlüsse",
    ],

    '10543' => [
        'name' => 'Vorgefertigtes Containerhaus',
        'short_description' => "Vorgefertigtes Containerhaus, widerstandsfähig und schnell zu montieren.\nStahlkonstruktion Q235B\nSandwichpaneele mit 75 mm Steinwolle\nFeuerfester MGO-Boden 18 mm\nEinbruchhemmende Aluminiumfenster\nBrandschutzklasse A1, erdbeben- und windsicher",
    ],

    '10542' => [
        'name' => 'Modulares vorgefertigtes Containerhaus',
        'short_description' => "Modulares vorgefertigtes Containerhaus, konzipiert für extreme Bedingungen.\nVerstärkte Stahlkonstruktion\nFortschrittliche Dämmung mit Sandwichpaneelen\nBis ins Detail individuell anpassbar\nErdbeben- und sturmsicher\nIdeal für Wohnungen, Büros oder Gewerbeflächen",
    ],

    '10621' => [
        'name' => 'Mobilheim Luisiana Taos – Wohnkomfort',
        'short_description' => "Modernes Mobilheim mit 40 m², perfekt für jede Jahreszeit.\nModell 2023 mit zeitgemäßem Design\n2 Schlafzimmer und 2 komplette Bäder\nVoll ausgestattete Küche und möbliertes Wohnzimmer\nSeparates WC und Waschmaschinenanschluss\nWärmedämmung für ganzjährige Nutzung",
    ],

    '12449' => [
        'name' => 'Modernes Mobilheim – Abmessungen 10,5 x 3,8 m',
        'short_description' => "",
    ],

    '12437' => [
        'name' => 'Modernes Mobilheim – Abmessungen 12×4 m',
        'short_description' => "Modernes Mobilheim 12x4m: Konstruktion aus Stahl und Holz, fortschrittliche Wärmedämmung und individuell konfigurierbar für jeden Wohnbedarf.",
    ],

    '12428' => [
        'name' => 'Mobilheim T2 – Eine moderne und flexible Wohnlösung',
        'short_description' => "Container-Mobilheim T2: ein kompaktes, modernes und individuell anpassbares Haus, ideal für jeden Bedarf. Einfach zu transportieren, effizient und nachhaltig.",
    ],

    '10545' => [
        'name' => 'Modulhaus González – Intelligenter Raum mit 36 m²',
        'short_description' => "Modulare Wohnlösung mit 36 m², ideal für private oder touristische Nutzung.\n1 Schlafzimmer, 1 komplettes Bad\nOffener Raum mit Küche und Wohnzimmer\nDämmung aus Polyurethan und Glaswolle\nThermofenster aus PVC in Holzoptik\nKomplette Elektroinstallation und LED",
    ],

    '10620' => [
        'name' => 'Modulhaus Montes – 36 m² Komfort und Design',
        'short_description' => "Modulhaus mit 36 m², effizienter Grundriss und modernes Design.\n2 Schlafzimmer, 1 komplettes Bad\nGroße Fenster aus thermisch getrenntem schwarzem Aluminium\nDämmung mit Polyurethan und Glaswolle\nInnenverkleidung aus OSB, Holz und Gipskarton\nKomplette Elektroinstallation und LED-Beleuchtung",
    ],

    '10539' => [
        'name' => 'Modulares vorgefertigtes Containerhaus',
        'short_description' => "Vorgefertigtes Containerhaus aus Q355-HDG-Stahl, gedämmt und äußerst widerstandsfähig. Geeignet für Wohnhäuser, Büros, temporäre Unterkünfte und modulare Bauten.\nFeuerverzinkte Konstruktion\nDachdämmung aus PU mit hoher Dichte\nWände aus EPS oder Steinwolle\nDoppelverglaste Fenster\nWindbeständig bis 210 km/h",
    ],

    '11232' => [
        'name' => 'KIOSK/SNACK-CONTAINER – BÜRO – VERKAUFSFLÄCHE',
        'short_description' => "Ausbau eines Kiosks, Imbisses, Food Trucks oder einer Taverne in einem Seecontainer der ersten Fahrt.\n# Keine Betonplatte!\n# Keine Vorbereitung!\n# Kein mühsamer Zusammenbau!\n# Großes Volumen!\n# Mobil!\n# Trendige Architektur!\n# Keine Baugenehmigung!\n# Wartungsfrei!\nEnthält:\n1 Container erster Fahrt 40′ (12m x 2,45 x 2,60m)\nÖffnungen:\n1 Gasdruck-Klappe 2000 x 1200 mm\n1 Gasdruck-Klappe 3000 x 1200 mm\n1 Türflügel 800×2000 mm\nTheken:\n1 Klapptheke 2000x300mm\n1 Klapptheke 3000x300mm\nELEKTROINSTALLATION:\n1 Verteiler mit 1 Reihe\n3 wasserdichte LED-Leuchten\n4 Servicesteckdosen 16A+T\n1 einfacher Hauptschalter\n1 Schnellanschluss\nInnendämmung:\nLebensmittelechtes Sandwichpaneel 40 mm Weiß\nFarbe:\nLackierung RAL 7016 auf dem gesamten Container.",
    ],

    '11054' => [
        'name' => '40-Fuß-High-Cube-Container mit Doppeltür',
        'short_description' => "Dieser besonders hohe 40-Fuß-Container hat Türen an beiden Stirnseiten und bietet damit einfachen Zugang von zwei Seiten. Ideal für Lagerung und Transport. CSC-zertifiziert, aus CORTEN-Stahl, stapelbar und in jeder RAL-Farbe erhältlich.",
    ],

    '11230' => [
        'name' => 'KIOSK-CONTAINER – SNACK',
        'short_description' => "Ausbau eines Imbisses oder einer Taverne in einem Seecontainer.\nEnthält:\n1 Container erster Fahrt 20′ (6m x 2,45 x 2,60m)\nÖffnungen:\n1 Gasdruck-Klappe 3000 x 1200 mm\n1 Tür 90×200 cm\nTheken:\n1 Klapptheke 3000x300mm\nELEKTROINSTALLATION:\n1 Verteiler mit 1 Reihe\n2 wasserdichte LED-Leuchten\n4 Servicesteckdosen 16A+T\n1 einfacher Hauptschalter\n1 Schnellanschluss\nInnendämmung:\nLebensmittelechtes Sandwichpaneel 40 mm Weiß\nBoden: grauer Gelcoat-Harzboden mit Bodenablauf\nLackierung: RAL 7016 auf dem gesamten Container.\nSanitärinstallation: Wasserzu- und -ablauf, Installation der Wasserversorgung.\nDunstabzug:\nLieferung und Montage einer 2-m-Haube mit Deckenabsaugung.\nWarmwasser:\nLieferung und Montage eines 1200-L-Speichers + Durchlauferhitzer\nKühlgeräte:\n1 Tiefkühlschrank 600 L\n2 Edelstahltische mit 3 Kühltüren\nFritteuse:\n1 Doppelfritteuse aus Edelstahl, 14 Liter",
    ],

    '11490' => [
        'name' => 'Gewerbecontainer 29,4 m² – Modulare Lösung für Verkaufsflächen',
        'short_description' => "",
    ],

    '11489' => [
        'name' => 'Gewerbecontainer 29,4 m² – Modulare und funktionale Gewerbefläche',
        'short_description' => "",
    ],

    '11051' => [
        'name' => '10-Fuß-Container Hard Open Top mit Stahlboden',
        'short_description' => "Robuster Container mit abnehmbarem Stahldach und Querträger für einfache Beladung von oben. Mit Stahlboden, Lockbox, Belüftung und CSC-Zertifikat. Ideal für Lagerung und Transport.",
    ],

    '11832' => [
        'name' => '20-FUSS-CONTAINER',
        'short_description' => "",
    ],

    '10868' => [
        'name' => '20-Fuß-Container mit offener Seite',
        'short_description' => "Der 20-Fuß-Container mit offener Seite verfügt über eine vollständige Türöffnung entlang einer Längsseite und Standardtüren an der Stirnseite. Ideal für seitliches Be- und Entladen großer oder sperriger Güter. Gefertigt aus robustem CORTEN-Stahl, CSC-zertifiziert, mit Sperrholzboden und Lockbox. Stapelbar und staplergeeignet. Jetzt kaufen oder mieten!",
    ],

    '10871' => [
        'name' => '20-Fuß-Container mit offener Seite',
        'short_description' => "",
    ],

    '10867' => [
        'name' => '20-Fuß-High-Cube-Container mit Stahlboden',
        'short_description' => "20-Fuß-High-Cube-Container mit Stahlboden. Besonders hoher Lagercontainer mit vollständig verschweißtem Stahlboden, Lockbox, Belüftung und Staplertaschen. CSC-zertifiziert, aus CORTEN-Stahl – ideal für schwere oder schmutzempfindliche Güter.",
    ],

    '11173' => [
        'name' => '10-Fuß-Bürocontainer',
        'short_description' => "Unser 10-Fuß-Bürocontainer bietet einen Arbeitsplatz, ein Büro oder ein Studio, das Ihren Anforderungen entspricht. Er verfügt über Heizung, installierte Beleuchtung und eine Antikondensationsdämmung.\nEr ist die ideale Lösung für Privatpersonen oder Unternehmen, die einen vielseitigen und flexiblen Raum benötigen, der von Baustelle zu Baustelle versetzt oder nach Gebrauch leicht demontiert werden kann. Ideal für den temporären wie auch den langfristigen Einsatz.\nTechnische Daten:\nAußenmaße (LxBxH): 2,99 m x 2,43 m x 2,89 m\nInnenmaße (LxBxH): 2,82 m x 2,35 m x 2,69 m\n1 vandalismussicheres Fenster + 1 Tür\nMit Melamin verkleidet und gedämmt\nVinylboden\nElektro-Set: 2 Doppelsteckdosen, 1 Heizkörper, 1 Lichtleiste 1,5 m, 1 Verteilerkasten und Außenanschluss.",
    ],

    '11725' => [
        'name' => 'DOPPEL-SANITÄRCONTAINER MIT 2 KABINEN – WC UND DUSCHE',
        'short_description' => "",
    ],

    '10950' => [
        'name' => 'Gebrauchte ISO-Kühlcontainer 20ft HC',
        'short_description' => "Hochwertiger gebrauchter 20-Fuß-High-Cube-Kühlcontainer mit Thermo-King-Aggregat – ideal für die zuverlässige Kühlung und Lagerung temperaturempfindlicher Produkte. Mit zusätzlicher Innenhöhe, robustem Stahlgehäuse und präziser Temperaturregelung von +25 °C bis -25 °C. Perfekt für Lebensmittel, Arzneimittel oder Veranstaltungen. Einsatzbereit in Hamburg.",
    ],

    '10951' => [
        'name' => '10-Fuß-High-Cube-Kühlcontainer',
        'short_description' => "Dieser kompakte und zuverlässige gebrauchte 10-Fuß-Kühlcontainer ist ideal für die sichere Lagerung und den Transport temperaturempfindlicher Güter. Er ist vollständig geprüft und in einwandfreiem Zustand. Er bietet effiziente Kühlung, sichere Lagerung und eine robuste Bauweise – ideal für Unternehmen und Privatpersonen, die kompakte Kühlräume benötigen.",
    ],

    '11061' => [
        'name' => 'Gebrauchter 10-Fuß-Kühlcontainer, weiß',
        'short_description' => "Gebrauchter 10-Fuß-Kühlcontainer. Dieser kompakte und zuverlässige gebrauchte 10-Fuß-Kühlcontainer ist ideal für die sichere Lagerung und den Transport temperaturempfindlicher Güter. Er ist vollständig geprüft und in einwandfreiem Zustand. Er bietet effiziente Kühlung, sichere Lagerung und eine robuste Bauweise – ideal für Unternehmen und Privatpersonen, die kompakte Kühlräume benötigen.",
    ],

    '10945' => [
        'name' => '10-Fuß-High-Cube-Container',
        'short_description' => "Kompakter Container mit zusätzlicher Innenhöhe für mehr Stauraum. Aus CORTEN-Stahl, mit Sperrholzboden, Belüftung, Lockbox und CSC-Zertifikat. Ideal für Lagerung und Transport.",
    ],

    '10869' => [
        'name' => '20-Fuß-High-Cube-Container mit offener Seite',
        'short_description' => "Dieser besonders hohe 20-Fuß-Container hat eine vollständig zu öffnende Längsseite und bietet damit maximalen Stauraum und einfachen seitlichen Zugang. Ideal für Lagerung und Transport. Zur Miete oder zum Kauf verfügbar.",
    ],

    '10942' => [
        'name' => 'Neuer 20-Fuß-High-Cube-Container',
        'short_description' => "Besonders hoher Container mit 30 cm mehr Innenhöhe – ideal für Lagerung und Trockentransport. CSC-zertifiziert, mit Sperrholzboden, Belüftung, Lockbox und Staplertaschen. In der RAL-Farbe Ihrer Wahl erhältlich.",
    ],

    '10952' => [
        'name' => '20-Fuß-High-Cube-Container Hard Open Top (mit Stahlboden)',
        'short_description' => "20-Fuß-High-Cube-Container Hard Open Top (mit Stahlboden). Besonders hoher Container mit abnehmbarem Stahldach, flüssigkeitsdichtem Riffelblechboden und Lockbox. Ideal für empfindliche oder flüssige Güter sowie für individuelle Umbauten. CSC-zertifiziert – zur Miete oder zum Verkauf.",
    ],

    '10872' => [
        'name' => '40-Fuß-High-Cube-Container Open Side',
        'short_description' => "Dieser 40-Fuß-High-Cube-Container hat eine vollständig zu öffnende Längsseite und ist ideal für sperrige, seitlich zu ladende Güter. Mit Holzboden, Lockbox, Belüftung und CSC-Zertifikat. Kauf möglich.",
    ],

    '11062' => [
        'name' => '10-Fuß-Seecontainer STD – Kompakt und widerstandsfähig',
        'short_description' => "Standard-Seecontainer 10 Fuß aus CORTEN-Stahl, mit kompaktem und langlebigem Design. Ideal für private oder gewerbliche Lagerung, mit verfügbaren Anpassungsoptionen.",
    ],

    '10946' => [
        'name' => 'Seecontainer 20 Fuß x 8 Fuß, dunkelgrün',
        'short_description' => "Entdecken Sie unseren gebrauchten 20-Fuß-Standardcontainer in Dunkelgrün: robust, wind- und wasserdicht, perfekt für Lagerung und Transport. Mit seiner langlebigen Stahlkonstruktion und den funktionalen Doppeltüren bietet er eine zuverlässige Lösung für vielseitige Einsätze. Sofort verfügbar und einsatzbereit!",
    ],

    '11836' => [
        'name' => 'Seecontainer 20 Fuß, Einzelfahrt, mit Rolltor.',
        'short_description' => "",
    ],

    '11056' => [
        'name' => '10-Fuß-High-Cube-Seecontainer',
        'short_description' => "Der 10-Fuß-High-Cube-Container gehört zu unserer neuen Produktreihe. Er ist aus CORTEN-Stahl mit Korrosionsschutz gefertigt, einem besonders widerstandsfähigen Material mit hervorragenden Rostschutzeigenschaften, die die Lebensdauer des Containers deutlich erhöhen.\nDiese 10-Fuß-High-Cube-Minicontainer sind die ideale mobile Lagerlösung für beengte Platzverhältnisse.\nDer Containerboden besteht aus 19 Lagen Keruing-Apitong-Sperrholz in Marinequalität. Dieses Sperrholz übertrifft herkömmliches Sperrholz qualitativ, da es eine hohe Dichte und damit einen sehr niedrigen Feuchtigkeitsgehalt aufweist. Das macht es widerstandsfähig gegen Pilz- und Termitenbefall – ein entscheidender Vorteil für die hohe Belastbarkeit von Seecontainern beim ständigen Be- und Entladen sowie beim Seetransport.\nDer 10-Fuß-High-Cube-Container ist mit 4 witterungsbeständigen Lüftungsöffnungen für gleichmäßige Luftzirkulation, 36 Zoll hohen Verriegelungsstangen für einfachen Zugang, Staplertaschen für einfaches Handling und einem Schlossgehäuse (Lockbox) für maximalen Schutz ausgestattet.\nDer High-Cube-Container ist einen Fuß höher als Standardcontainer und bietet damit mehr Innenraum, ohne zusätzliche Grundfläche zu beanspruchen.",
    ],

    '11239' => [
        'name' => 'GEBRAUCHTER 40-FUSS-KÜHLSEECONTAINER',
        'short_description' => "Allgemeine Merkmale\nUnterkategorie: Kühlseecontainer\nMarke: THERMO KING\nBaujahr: 2014\nZustand: gebraucht\nEigenschaften\nLeergewicht: 4.650 kg\nZuladung: 30.350 kg\nMaximalgewicht: 35.000 kg\nGesamtabmessungen: (L) 12.190 cm x (B) 2.440 cm x (H) 2.890 cm\nBeschreibung\nFarbe: weiß\nNutzlast: 30350 kg.\nMarke des Kälteaggregats: Thermo King",
    ],

    '11052' => [
        'name' => 'Weißer 12-Fuß-Standard-Seecontainer',
        'short_description' => "Der 12-Fuß-Standardcontainer bietet eine praktische Lösung für Lager- und Transportbedarf auf begrenztem Raum. Mit robuster Stahlkonstruktion, wind- und wasserbeständigem Design und ISO-Ecken für einfaches Handling ist er ideal für Baustellen, Gewerbe und private Nutzung. Die perfekte Zwischenlösung zwischen 10- und 20-Fuß-Containern.",
    ],

    '11060' => [
        'name' => 'Gebrauchter blauer 20-Fuß-Seecontainer',
        'short_description' => "Gebrauchter 20-Fuß-Lagercontainer in Deutschland, Lieferung inklusive (Abladen auf Anfrage), sofort verfügbar!\nOptional mit Einbruchalarm!",
    ],

    '10870' => [
        'name' => '20-Fuß-Werkstattcontainer',
        'short_description' => "20-Fuß-Werkstattcontainer: Ihr mobiler Arbeitsplatz. Mit Werkbank, Regalen, Stromanschluss und Stauraum ist dieser voll ausgestattete Container die ideale Lösung für temporäre oder dauerhafte Werkstätten. Aus CORTEN-Stahl, CSC-zertifiziert, stapelbar und in jeder RAL-Farbe erhältlich. Zur Miete oder zum Kauf verfügbar.",
    ],

    '11365' => [
        'name' => '10-Fuß-Werkstattcontainer',
        'short_description' => "Außenmaße: 2.991 mm x 2.438 mm x 2.591 mm\n&nbsp;\nInnenmaße: 2831 mm x 2352 mm x 2390 mm\n&nbsp;\nTürmaße: 2338 mm x 2280 mm\n&nbsp;\nVolumen: 15,9 m³\n&nbsp;\nEuropaletten: 5",
    ],

    '11838' => [
        'name' => '20-Fuß-Seecontainer mit Seitenöffnung',
        'short_description' => "",
    ],

    '11834' => [
        'name' => '20-Fuß-High-Cube-Seecontainer mit Seitenöffnung',
        'short_description' => "",
    ],

    '11958' => [
        'name' => '40-Fuß-High-Cube-Seecontainer mit Seitenöffnung',
        'short_description' => "",
    ],

    '11959' => [
        'name' => '40-Fuß-Seecontainer mit Seitentür – Ausführung mit 2 oder 4 Türen',
        'short_description' => "",
    ],

    '11491' => [
        'name' => 'Sozialraum-Container 15 m²: kompakt und funktional',
        'short_description' => "",
    ],

    '10949' => [
        'name' => '20-Fuß-Reefer-Container für den Binnenmarkt',
        'short_description' => "Hochleistungs-Kühlcontainer mit Temperaturbereich von -40 °C bis +30 °C. Ausgestattet mit Edelstahlverkleidung, flachem Boden, PTI-Test, Staplertaschen und 380-V-Anschluss. Zur Miete oder zum Kauf verfügbar.",
    ],

    '10947' => [
        'name' => 'Gebrauchter 40-Fuß-HC-ISO-Kühlcontainer',
        'short_description' => "Tiefkühlcontainer und Isoliercontainer werden für den Transport oder die schonende Lagerung von Lebensmitteln eingesetzt, aber auch für andere Güter, deren Unversehrtheit die Einhaltung einer bestimmten Temperatur erfordert.\n&nbsp;",
    ],

    '11487' => [
        'name' => '20-Fuß-HC-Restaurantcontainer – Einseitiger Grundriss, ideal für mobile Gastronomie oder als Verkaufskiosk.',
        'short_description' => "",
    ],

    '11565' => [
        'name' => 'Sanitärcontainer 3×6 – 6 Duschen, 2 Waschbecken, 300-Liter-Warmwasserspeicher',
        'short_description' => "",
    ],

    '10944' => [
        'name' => 'Blauer 10-Fuß-Standardcontainer',
        'short_description' => "Kompakter Lagercontainer aus CORTEN-Stahl mit CSC-Zertifikat. Ausgestattet mit Sperrholzboden, Belüftung, Lockbox und Staplertaschen. Ideal für Lagerung und Transport.",
    ],

    '10943' => [
        'name' => '20-Fuß-Standardcontainer',
        'short_description' => "Der weltweit meistgenutzte Container für Transport und Lagerung. CSC-zertifiziert, aus CORTEN-Stahl, mit Sperrholzboden, Lockbox und Belüftung. Ideal für Trockenlagerung oder Transport.",
    ],

    '11055' => [
        'name' => '20-Fuß-Standardcontainer mit Stahlboden',
        'short_description' => "Robuster Lagercontainer mit vollständig verschweißtem Stahlboden, Lockbox, Belüftung und CSC-Zertifikat. Ideal für schwere oder schmutzempfindliche Güter. Stapelbar und in jeder RAL-Farbe erhältlich.",
    ],

    '10873' => [
        'name' => '40-Fuß-Standardcontainer (gebraucht)',
        'short_description' => "Gebrauchter 40-Fuß-Standardcontainer. Robuster Container für Lagerung und Transport. CSC-zertifiziert, aus CORTEN-Stahl, mit Sperrholzboden, Belüftung und Lockbox. Ideal für dauerhafte oder temporäre Nutzung.",
    ],

    '11057' => [
        'name' => 'NEUER blauer 40-Fuß-Standardcontainer',
        'short_description' => "",
    ],

    '11058' => [
        'name' => 'Neuer 20-Fuß-Standardcontainer, 8 Fuß',
        'short_description' => "Neuer 20-Fuß-Standardcontainer – weiß, vielseitig und einsatzbereit\nDieser neue 20-Fuß-Standardcontainer in elegantem Weiß eignet sich perfekt für den Transport und die Lagerung unterschiedlichster Güter. Aus hochwertigem Corten-Stahl gefertigt, bietet er maximale Stabilität, Langlebigkeit und Witterungsbeständigkeit. Mit seiner frischen Lackierung und der rostgeschützten Konstruktion ist er ideal für den sofortigen gewerblichen oder privaten Einsatz.",
    ],

    '11484' => [
        'name' => 'Bürocontainer / Modularer Pavillon 3x6m – Funktional und ausgestattet',
        'short_description' => "",
    ],

    '11675' => [
        'name' => 'Bürocontainer 4×2,20 Meter mit Sanitäranlagen',
        'short_description' => "",
    ],

    '11676' => [
        'name' => 'Bürocontainer / Wohncontainer mit Bad/Dusche',
        'short_description' => "",
    ],

    '11619' => [
        'name' => 'Bürocontainer 17 m² – Funktionaler und mobiler Pavillon',
        'short_description' => "",
    ],

    '11424' => [
        'name' => 'Bürocontainer 17 m² – Funktionaler und mobiler Pavillon',
        'short_description' => "",
    ],

    '11620' => [
        'name' => 'Bürocontainer 18 m² – gedämmt und ausgestattet',
        'short_description' => "",
    ],

    '11529' => [
        'name' => 'Bürocontainer 18 m² mit Sanitäranlagen: Komfort und optimale Dämmung',
        'short_description' => "",
    ],

    '11723' => [
        'name' => 'Bürocontainer 18 m² mit Sanitäranlagen: Komfort und optimale Dämmung',
        'short_description' => "",
    ],

    '11236' => [
        'name' => '20-FUSS-BÜROCONTAINER',
        'short_description' => "Serienmäßig enthalten:\n1 einfachverglastes Schiebefenster\n1 Sicherheitsrollladen aus Stahl\n1-flügelige Personentür aus Stahl\nMelaminverkleidung – Büro-Ausführung\nSteinwolldämmung 50 mm\nVerschleißfester Polyethylenboden\nElektro-Grundpaket\n2 Leuchten an Halterung\n1 Schalter\n1 Heizkörper\n2 Doppelsteckdosen\n1 Außenanschluss",
    ],

    '10866' => [
        'name' => 'Gebrauchter 10-Fuß-Container – Kompakt, wirtschaftlich und robust',
        'short_description' => "Ein kompakter 10-Fuß-Container, perfekt für alle, die eine wirtschaftliche und sichere Lagerlösung suchen. Aus Corten-Stahl, aufbereitet und einsatzbereit.\nWiderstandsfähige Corten-Stahlkonstruktion\nInnenvolumen 16 m³\nDoppeltüren mit sicherem Verschluss",
    ],

    '10487' => [
        'name' => '20-Fuß-Container mit Seitenöffnung',
        'short_description' => "Der 20-Fuß-Container mit Seitenöffnung bietet vollständigen Zugang an einer der Längsseiten und ist damit ideal für sperrige Ladungen oder häufige Lagervorgänge. Robust und sicher, perfekt für industrielle, landwirtschaftliche oder logistische Nutzung.\nSeitenöffnung über 6 Meter (4 Flügel)\nBoden aus behandeltem Holz, robust und sicher\nGeschweißte und lackierte Stahlkonstruktion\nIntegrierte Belüftung und Vorhängeschloss-Verschluss\nMit Elektroinstallation und weiteren Optionen erhältlich",
    ],

    '10485' => [
        'name' => 'Gebrauchter 20-Fuß-Dry-Container mit Doppeltür',
        'short_description' => "Der gebrauchte 20-Fuß-Dry-Container mit doppelter Öffnung ist die ideale Wahl für alle, die Vielseitigkeit, Robustheit und Sicherheit suchen. Mit einfachem Zugang von beiden Seiten passt er perfekt in industrielle, landwirtschaftliche und private Umgebungen. Die Stahlkonstruktion und der feuchtigkeitsbehandelte Boden machen ihn langlebig.\nDoppeltür für Zugang vorne und hinten\nMassivholzboden 25 mm, behandelt\nGeschweißte Stahlkonstruktion 3 mm\nInnenvolumen 31 m³\nEinfaches Handling mit Stapler oder Kran",
    ],

    '10484' => [
        'name' => '20-Fuß-HC-Container',
        'short_description' => "Sie suchen eine geräumige und widerstandsfähige Lagerlösung? Unser gebrauchter 20-Fuß-HC-Container ist darauf ausgelegt, in jedem Umfeld maximale Langlebigkeit, Sicherheit und Zweckmäßigkeit zu bieten – von der Baustelle bis zum landwirtschaftlichen Lager. Aus geschweißtem Stahl gefertigt, mit behandeltem Holzboden und vergrößertem Innenvolumen, ist er auch für individuelle Nutzungen eine ausgezeichnete Wahl.\nInnenvolumen 37 m³ mit erhöhter Höhe\nStahlkonstruktion 3 mm und Wände 1,5 mm\nFeuchtigkeitsbeständiger Holzboden 25 mm\nBelüftung und Einbruchschutzsystem\nEinfaches Handling mit Kran oder Stapler",
    ],

    '10486' => [
        'name' => '20-Fuß-High-Cube-Container mit Rolltoren',
        'short_description' => "Robust, vielseitig und ästhetisch ansprechend: Der 20-Fuß-High-Cube-Container mit Rolltoren eignet sich perfekt für die sichere Lagerung oder den Umbau zur mobilen Werkstatt. Die verstärkte Stahlkonstruktion sorgt für dauerhafte Widerstandsfähigkeit, während die Rolltore auch bei beengten Platzverhältnissen praktisch bleiben.\nErhöhte Höhe für mehr Innenvolumen\nRobuste und praktische Rolltore\nStahlkonstruktion mit verstärktem Rahmen\nHellgraue Farbe mit dezenter Optik\nIdeal für Werkstätten, Events, Baustellen oder mobile Lager",
    ],

    '10703' => [
        'name' => 'Bar-Café-Container 6 Meter Snack-Box 20′',
        'short_description' => "Bar-Café-Container 6 Meter – Modulare Lösung für mobile Gastronomie\nBreite Serviceklappen vorne und seitlich\nWärmedämmung mit Dritherm-Wolle\nWiderstandsfähige und leicht zu reinigende Innenverkleidung\nRutschfester Vinylboden\nIndividuelle Lackierung\nKüchenausstattung auf Anfrage",
    ],

    '11080' => [
        'name' => 'Demontierbarer Bar-Container 3×2 Meter – Kompakte und vielseitige Lösung',
        'short_description' => "Der demontierbare Bar-Container 3×2 Meter ist eine vielseitige und robuste Lösung für Veranstaltungen und gewerbliche Aktivitäten. Einfach zu montieren, zu transportieren und individuell anzupassen.",
    ],

    '11079' => [
        'name' => 'Demontierbarer Bar-Container XL 4 x 2 m – Modulare Lösung für Veranstaltungen',
        'short_description' => "Der demontierbare Bar-Container XL 4 x 2 m bietet einen flexiblen und individuell anpassbaren Raum für Veranstaltungen. Einfach zu transportieren und zu montieren – die ideale Wahl für Ihr Geschäft.",
    ],

    '10699' => [
        'name' => 'Individueller Bar-Container 6 Meter',
        'short_description' => "Bar-Container 6 m – individueller Food Truck\nContainer 20 Fuß erster Fahrt\nKlapptheke und Gasdruck-Markise\nDämmung mit 40-mm-Sandwichpaneelen\nElektro- und Sanitärinstallation vorhanden\nHarzboden mit Ablauf\nElegantes schwarzes Äußeres",
    ],

    '10701' => [
        'name' => 'Demontierbarer Bar-Container 6×2 m',
        'short_description' => "Bar-Container 6×2 m – Demontierbar und modular\nOffene Fläche von 12 m²\nKonstruktion aus lackiertem verzinktem Stahl\nVordach mit Verschluss + Doppelklappen\nDemontierbar und einfach zu transportieren\nMit Zubehör individuell anpassbar",
    ],

    '10698' => [
        'name' => '20-Fuß-Cafeteria-Container',
        'short_description' => "Bar-Container 20 Fuß – professionelle mobile Küche\nKüche ausgestattet mit Backofen, Kühlschrank, Spülmaschine\nOptimierter Raum für den Kundenservice\nRobuste Stahlkonstruktion\nIdeal für mobile Bars und Food Trucks\nEinsatzbereit inklusive Ausstattung",
    ],

    '10622' => [
        'name' => 'Gewerbecontainer „Linz“',
        'short_description' => "Gedämmtes Gewerbemodul mit 6 Metern, sofort einsatzbereit.\nElegantes Design in Holzoptik\nWärmedämmung mit 10-cm-Sandwichpaneelen\nFestverglaste Fenster 90×190 cm für natürliches Licht\nCE-konforme Elektroinstallation + integrierte Heizung\nWiderstandsfähiger PVC-Boden",
    ],

    '10479' => [
        'name' => '10-Fuß-Container für den landwirtschaftlichen Einsatz',
        'short_description' => "Der 10-Fuß-Container für den landwirtschaftlichen Einsatz ist die perfekte Lösung für alle, die einen sicheren, kompakten und widerstandsfähigen Lagerraum auf dem Hof suchen. Aus recycelten Seecontainern gefertigt, bietet er Stabilität und umfassenden Schutz.\nKonstruktion aus recyceltem 20′-Stahl\nKompakte Abmessungen: etwa 3 Meter\nVerstärkte Tür und sicherer Verschluss\nTannengrüne Farbe, ideal für natürliche Umgebungen\nIdeal zur Lagerung von Werkzeug, Futtermitteln, Saatgut und landwirtschaftlichen Erzeugnissen",
    ],

    '11156' => [
        'name' => 'Gartencontainer 1,5 x 2,2 m – Grün RAL 6005',
        'short_description' => "Der Gartencontainer 1,5 x 2,2 m in Grün RAL 6005 eignet sich perfekt zur sicheren Aufbewahrung von Werkzeug und Material. Widerstandsfähig, kompakt und einfach zu montieren.",
    ],

    '10492' => [
        'name' => '40-Fuß-High-Cube-Lagercontainer',
        'short_description' => "Gebrauchter 40′-HC-Lagercontainer in ausgezeichnetem Zustand, perfekt für den gewerblichen oder privaten Einsatz. Robuste Konstruktion, Belüftung inklusive, sofort einsatzbereit.\nGeschweißte Stahlkonstruktion, 3 mm stark\nBehandelter Holzboden 25 mm\nNutzvolumen: 31 m³\nMit Kran oder Stapler bewegbar\nSchlossschutz inklusive",
    ],

    '10493' => [
        'name' => '40-Fuß-High-Cube-Lagercontainer',
        'short_description' => "Neuer 40′-HC-Lagercontainer mit zusätzlicher Höhe und großem Innenvolumen. Ideal für Lager, Baustelle oder landwirtschaftliches Depot.\nErhöhte Innenhöhe\nBehandelter Holzboden (25 mm)\nGeschweißte Stahlkonstruktion 3 mm\nNutzvolumen: 31 m³\nBelüftet und mit Doppeltüren ausgestattet",
    ],

    '10494' => [
        'name' => '40-Fuß-Standard-Lagercontainer',
        'short_description' => "Gebrauchter 40-Fuß-Standardcontainer, perfekt für die Lagerung auf Baustellen, in Lagerhallen oder in der Landwirtschaft.\nGeschweißte Stahlkonstruktion (3 mm)\nBehandelter Holzboden 25 mm\nNutzvolumen: 31 m³\n4 Lüftungsöffnungen, Doppeltüren\nHandling mit Stapler oder Kran",
    ],

    '11163' => [
        'name' => '10-Fuß-Kühlcontainer – Kompakte Lagerlösung',
        'short_description' => "10-Fuß-Kühlcontainer: kompakt, gedämmt und ideal für Lebensmittel, Arzneimittel oder Chemikalien. Perfekt für sichere Lagerung und Transport bei kontrollierter Temperatur.",
    ],

    '11166' => [
        'name' => '20-Fuß-Reefer-Kühlcontainer – Ideale Lagerlösung',
        'short_description' => "20-Fuß-Reefer-Kühlcontainer: perfekt für Lagerung und Transport frischer und empfindlicher Produkte. Temperaturbereich von -25 °C bis +25 °C, ISO-zertifiziert und einsatzbereit.",
    ],

    '11164' => [
        'name' => '40-Fuß-Kühlcontainer – Zuverlässige Transportlösung',
        'short_description' => "40-Fuß-Kühlcontainer: robust, gedämmt und ideal für Lebensmittel, Arzneimittel und Chemikalien. Perfekt für sicheren Transport und Lagerung bei kontrollierter Temperatur.",
    ],

    '11167' => [
        'name' => 'Gebrauchter 40-Fuß-Reefer-Kühlcontainer',
        'short_description' => "Gebrauchter 40-Fuß-Reefer-Kühlcontainer der Klasse A: robust, ISO-zertifiziert, ideal für Transport und Lagerung bei kontrollierter Temperatur. Thermische Präzision und großes Innenvolumen.",
    ],

    '11165' => [
        'name' => '45-Fuß-Reefer-Kühlcontainer – Ideale Lagerlösung',
        'short_description' => "45-Fuß-Reefer-Kühlcontainer: robust, ISO-zertifiziert und perfekt für Transport und Lagerung frischer oder empfindlicher Produkte. Präzision von -25 °C bis +25 °C.",
    ],

    '10475' => [
        'name' => '20-Fuß-Tiefkühlcontainer RF',
        'short_description' => "Der 20-Fuß-Kühlcontainer RF ist für eine präzise Temperaturregelung von -25 °C bis +25 °C ausgelegt. Mit hochdämmenden Polyurethanwänden, Carrier-Kälteaggregat und CSC-Zertifizierung ist er perfekt für den Einsatz in der Lebensmittel- und Industriebranche.\nTemperaturbereich: -25 °C / +25 °C\nDämmung aus Polyurethanschaum (10–12 cm)\nHocheffizientes Carrier-Aggregat\n380-V-Anschluss, integrierte 32-A-Steckdose\nCSC-zertifiziert, einsatzbereit",
    ],

    '10471' => [
        'name' => '10-Fuß-Kühlcontainer',
        'short_description' => "Halten Sie Ihre frischen, tiefgekühlten oder temperaturempfindlichen Produkte mit unserem 10-Fuß-Kühlcontainer sicher. Ausgestattet mit einem aktiven Kühlsystem, Hochleistungsdämmung und professionellen Oberflächen, ist er die kompakte und zuverlässige Lösung für die Lagerung unter kontrollierten Bedingungen.\nTemperaturbereich: von -25 °C bis +25 °C\nPIR-Dämmung 40 mm und XPS 50 mm im Boden\nWeiße Stahlinnenverkleidung, hygienisch und abwaschbar\nIntegrierte Elektroinstallation und Kälteaggregat\nOptimierte Belüftung mit Doppelventil",
    ],

    '10472' => [
        'name' => '10-Fuß-Kühlcontainer – Kompakt, gekühlt',
        'short_description' => "Dieser 10-Fuß-Kühlcontainer vereint Kompaktheit, Effizienz und professionelle Leistung. Mit PIR-Dämmung und aktiver Kühlung ist er perfekt für Transport oder Lagerung temperaturempfindlicher Güter. Hygienisch, robust und für den professionellen Einsatz optimiert.\nInnenvolumen: 12,45 m³ / Fläche: 5,48 m²\nTemperaturbereich: -25 °C bis +25 °C\nPIR-Dämmung und XPS-Boden\nWeiße Stahlinnenverkleidung, integrierte Belüftung\nStapelbare Konstruktion, einfach zu bewegen",
    ],

    '10473' => [
        'name' => '10-Fuß-DNV-Kühlcontainer',
        'short_description' => "Der 10-Fuß-DNV-Kühlcontainer ist für den Einsatz im Offshore-Bereich konzipiert und gewährleistet eine sichere und effiziente Kühlung selbst unter extremen Bedingungen. Zertifizierte Konstruktion, zuverlässiges Aggregat und robustes Design machen ihn perfekt für maritime Industrieanwendungen.\nDNV-Zertifizierung für den Offshore-Einsatz\nEffizientes und zuverlässiges Kälteaggregat\nVerstärkte Konstruktion für maritime Umgebungen\nHebe- und Handlingsysteme inklusive\nIdeal für die Kühlkette auf See",
    ],

    '10476' => [
        'name' => '40-Fuß-High-Cube-Reefer-Kühlcontainer',
        'short_description' => "Perfekt für globale Logistik und professionelle Lagerung: Der 40-Fuß-High-Cube-Reefer-Kühlcontainer bietet hohe Kapazität, präzise Temperaturregelung und eine hygienische Edelstahlkonstruktion. Ideal für kälteempfindliche Güter, von -40 °C bis +35 °C.\nKapazität: 76 m³\nTemperatur: von -40 °C bis +35 °C\nInnenraum aus Edelstahl und Aluminium\nTyp High Cube: größeres Nutzvolumen\nCSC-zertifiziert für den internationalen Einsatz",
    ],

    '10477' => [
        'name' => 'Gebrauchter 40-Fuß-Kühlcontainer',
        'short_description' => "Der gebrauchte 40-Fuß-Kühlcontainer bietet eine zuverlässige und zertifizierte Lösung für Transport und Lagerung bei kontrollierter Temperatur. Ausgestattet mit Polyurethandämmung, Carrier- oder Thermo-King-Aggregat und Edelstahlverkleidung ist er ideal für empfindliche Güter.\nBetriebstemperatur: -25 °C / +25 °C\nCSC-Zertifikat 1 Jahr gültig\nEdelstahlinnenraum, leicht zu reinigen\nHocheffiziente Polyurethandämmung\nCarrier- oder Thermo-King-Aggregat in professioneller Qualität",
    ],

    '10478' => [
        'name' => 'Gebrauchter 40′-High-Cube-Kühlcontainer',
        'short_description' => "Sie suchen einen professionellen, sofort einsatzbereiten Kühlcontainer? Unser gebrauchtes Modell 40′ High Cube bietet Platz, Sicherheit und hohe Leistung. Perfekt für Lebensmittel, Arzneimittel und temperaturempfindliche Stoffe, dank des Kältesystems -40 °C / +30 °C.\nNutzvolumen: 67 m³\nGeschweißte und gedämmte Stahlkonstruktion\nRiffelaluminiumboden\nKältesystem 380V -40 °C / +30 °C\n4 Hebepunkte + Staplertaschen",
    ],

    '10488' => [
        'name' => '20-Fuß-Hazmat-Container',
        'short_description' => "Der 20-Fuß-Hazmat-Container ist für den sicheren Transport von Gefahrstoffen konzipiert. Aus CORTEN-Stahl mit Auffangwanne gebaut, gewährleistet er maximalen Schutz in industriellen Umgebungen.\nKorrosionsbeständige CORTEN-Stahlkonstruktion\nIntegrierte Auffangwanne und Ablassventile\nVerzinkte Stahlroste und Belüftung\nSicherheitsbox und Staplertaschen\nStapelbar, widerstandsfähig und einfach zu bewegen",
    ],

    '10496' => [
        'name' => '40-Fuß-High-Cube-Container – Gebraucht',
        'short_description' => "Gebrauchter 40-Fuß-High-Cube-Seecontainer, perfekt für alle, die mehr Nutzraum benötigen.\nErhöhte Höhe: 2,89 m\nISO- und CSC-Zertifizierung\nZustand Cargo Worthy\nCorten-Stahlkonstruktion\nVerkauf und Vermietung möglich",
    ],

    '11833' => [
        'name' => '20-Fuß-High-Cube-Open-Side-Container (HCOS)',
        'short_description' => "",
    ],

    '10480' => [
        'name' => '10-Fuß-Seecontainer',
        'short_description' => "Der 10-Fuß-Seecontainer IICL6 ist die perfekte Lösung für alle, die einen professionellen, kompakten und zuverlässigen Lagerraum suchen. Aus hochfestem Corten-Stahl gefertigt und in elegantem Weiß lackiert, ist er sofort einsatzbereit in industriellen, gewerblichen oder privaten Umgebungen.\nHochfeste Corten-Stahlkonstruktion\nQualitätsstandard IICL6 – hervorragende Leistung\nInnenkapazität: ca. 16 m³ | Maximale Zuladung: 10.000 kg\nModernes Weiß (RAL 9010)\nIdeal für Ausrüstung, Material oder modulare Projekte",
    ],

    '10481' => [
        'name' => '10-Fuß-Seecontainer mit Doppeltür',
        'short_description' => "Der 10-Fuß-Seecontainer mit Doppeltür ist die ideale Lösung für alle, die Vielseitigkeit, Widerstandsfähigkeit und praktischen Zugang suchen. Im Zustand „after one trip“ vereint er kompaktes Design und maximale Funktionalität.\nAbmessungen: 2,99 x 2,44 x 2,59 m\nFarbe Blau RAL 5010\nRobuste Corten-Stahlkonstruktion\nDoppelter Zugang – Türen an beiden Seiten zu öffnen\nPerfekt für Lagerung, mobile Werkstätten oder individuelle Module",
    ],

    '10482' => [
        'name' => 'Neuer 10-Fuß-Seecontainer',
        'short_description' => "Dieser 10-Fuß-Seecontainer ist die perfekte Lösung für alle, die einen kompakten, robusten und professionellen Lagerraum suchen. Seine neue Konstruktion aus hochfestem Corten-Stahl gewährleistet optimalen Schutz vor Witterung und Stößen. Einfach zu bewegen und individuell anzupassen, ist er perfekt für gewerbliche, landwirtschaftliche oder industrielle Umgebungen, in denen der Platz begrenzt, die Sicherheit aber entscheidend ist.\nNeuer Container, nur einmal genutzt\nSolide Corten-Stahlkonstruktion\nInnenvolumen von etwa 16 m³\nIdeal für sichere Lagerung auf engem Raum\nBereit zur sofortigen Lieferung",
    ],

    '11073' => [
        'name' => 'Gebrauchter 10-Fuß-Seecontainer STD – Kompakt und widerstandsfähig',
        'short_description' => "Gebrauchter 10-Fuß-Standard-Seecontainer, kompakt und vielseitig. Perfekt für private Lagerung oder kleine modulare Projekte. Robust, wirtschaftlich und nachhaltig.",
    ],

    '11065' => [
        'name' => '20-Fuß-Seecontainer DD – Doppelter Zugang und Vielseitigkeit',
        'short_description' => "20-Fuß-Standard-Seecontainer Double Door, konzipiert für maximale Zugänglichkeit mit Türen an beiden Stirnseiten. Ideal für effiziente Lagerung, modulare Projekte und Transport.",
    ],

    '11063' => [
        'name' => '20-Fuß-Seecontainer HC – Zusätzlicher Raum und Widerstandsfähigkeit',
        'short_description' => "20-Fuß-High-Cube-Seecontainer mit robustem Design und zusätzlicher Höhe für sperrige Lagerung. Perfekt für modulare Projekte oder Lagerung mit hoher Kapazität.",
    ],

    '11064' => [
        'name' => '20-Fuß-Seecontainer OS – Vollständiger seitlicher Zugang',
        'short_description' => "20-Fuß-Open-Side-Seecontainer, konzipiert für vollständigen seitlichen Zugang und maximale Vielseitigkeit. Ideal für Veranstaltungen, Lagerung und modulare Projekte.",
    ],

    '11066' => [
        'name' => '20-Fuß-Seecontainer STD – Vielseitig und widerstandsfähig',
        'short_description' => "20-Fuß-Standard-Seecontainer aus CORTEN-Stahl, ideal für sichere Lagerung und Transport. Vielseitig, robust und nach Ihren Anforderungen anpassbar.",
    ],

    '11072' => [
        'name' => 'Gebrauchter 20-Fuß-Seecontainer STD – Vielseitig und wirtschaftlich',
        'short_description' => "Gebrauchter 20-Fuß-Standard-Seecontainer, widerstandsfähig und wirtschaftlich. Ideal für sichere Lagerung, modulare Projekte und Transport. Auf Anfrage individuell anpassbar.",
    ],

    '10491' => [
        'name' => '20′-Seecontainer aus CORTEN-Stahl',
        'short_description' => "20-Fuß-Seecontainer aus CORTEN-Stahl, erhältlich als Gebrauchtcontainer oder Container erster Fahrt. CSC-zertifiziert, dicht und mit Einbruchschutz ausgestattet.\nDoppeltüren mit 270°-Öffnung\nRutschfester Marinesperrholzboden 28 mm\nGültiges CSC-Zertifikat – ISO-konform\nSicherheitskasten inklusive\nGeeignet für Transport, Selfstorage und Umbauten",
    ],

    '11069' => [
        'name' => '40-Fuß-Seecontainer HC – Hohe Kapazität und Vielseitigkeit',
        'short_description' => "40-Fuß-High-Cube-Seecontainer, konzipiert für sperrige Lagerung oder modulare Projekte. Hohe Kapazität, Robustheit und Nachhaltigkeit für jeden Bedarf.",
    ],

    '11067' => [
        'name' => '40-Fuß-Seecontainer HC DD – Hohe Kapazität und doppelter Zugang',
        'short_description' => "40-Fuß-High-Cube-Seecontainer Double Door, mit doppeltem Zugang und zusätzlicher Kapazität. Ideal für Lager-, Transport- und Modulprojekte. Vielseitig und widerstandsfähig, perfekt für jeden Bedarf.",
    ],

    '11074' => [
        'name' => 'Gebrauchter 40-Fuß-Seecontainer HC – Hohe Kapazität und Vielseitigkeit',
        'short_description' => "Gebrauchter 40-Fuß-High-Cube-Seecontainer, perfekt für sperrige Lagerung und modulare Projekte. Langlebig, wirtschaftlich und auf Anfrage individuell anpassbar.",
    ],

    '11068' => [
        'name' => '40-Fuß-Seecontainer OS – Vollständiger seitlicher Zugang und Praktikabilität',
        'short_description' => "40-Fuß-Open-Side-Seecontainer, konzipiert für vollständigen seitlichen Zugang und maximale Praktikabilität. Ideal für Veranstaltungen, Lagerung und modulare Projekte. Nach Ihren Anforderungen anpassbar.",
    ],

    '11070' => [
        'name' => '40-Fuß-Seecontainer STD – Großzügiger Raum und Vielseitigkeit',
        'short_description' => "40-Fuß-Standard-Seecontainer, ideal für Lagerung und modulare Projekte. Geräumig, widerstandsfähig und individuell anpassbar, perfekt für jeden Bedarf.",
    ],

    '11071' => [
        'name' => 'Gebrauchter 40-Fuß-Seecontainer STD – Geräumig und wirtschaftlich',
        'short_description' => "Gebrauchter 40-Fuß-Standard-Seecontainer, widerstandsfähig und preiswert. Perfekt für sichere Lagerung, Transport und modulare Projekte. Auf Anfrage individuell anpassbar.",
    ],

    '10483' => [
        'name' => 'Gebrauchter 10-Fuß-Dry-Van-Seecontainer',
        'short_description' => "Sie benötigen eine mobile, sichere und platzsparende Lagerlösung? Unser gebrauchter 10-Fuß-Dry-Van-Container bietet Zweckmäßigkeit, Widerstandsfähigkeit und Flexibilität. Dank CSC-Zertifizierung kann er auch im intermodalen Transport eingesetzt werden. Seine kompakte Bauweise macht ihn ideal für Baustellen, Werkstätten oder industrielle Umgebungen mit begrenztem Platz.\nSperrholzboden 28 mm\nWind- und wasserdicht\nCSC-Zertifizierung für Transport auf Straße, See oder Schiene\nIntegriertes Sicherheitsschloss\nEinfaches Handling mit Gabelstaplern",
    ],

    '10497' => [
        'name' => 'Gebrauchter 40′-High-Cube-Seecontainer mit 4 Seitentüren',
        'short_description' => "Gebrauchter 40′-High-Cube-Seecontainer, ausgestattet mit 4 Seitentüren für unabhängigen Zugriff auf die Ware. Ideale Lösung für intensive Logistik, flexible Lagerung oder technische Anpassungen.\nCorten-Stahlkonstruktion\nTüren mit 4-Stangen-Sicherheitsverschluss\nModerne Ausführung in Ockergrau\nErleichterter Zugang von mehreren Seiten",
    ],

    '11485' => [
        'name' => 'Modulcontainer 40 Fuß – Büro/Kantine mit Erkerfenstern',
        'short_description' => "",
    ],

    '11157' => [
        'name' => 'Erweiterter Modulcontainer Duo 29 m² – Multifunktionaler Raum',
        'short_description' => "Der erweiterte Modulcontainer Duo 29 m² bietet einen vielseitigen und modernen Raum. Gedämmt und sofort einsatzbereit, ist er ideal für Büros oder multifunktionale Umgebungen.",
    ],

    '10498' => [
        'name' => 'Open-Top-Container 40′ – Gebraucht, Kategorie B',
        'short_description' => "Gebrauchter 40′-Open-Top-Container (Kategorie B), ideal für die Beladung von oben mit Planenabdeckung. Robuste Corten-Stahlkonstruktion, CSC-zertifiziert, mit Sperrholzboden.\nZugang von oben für Sonderladungen\nWitterungsbeständige Plane\nBoden 28 mm\nWind- und wasserdicht\nNutzlast bis 25.480 kg",
    ],

    '11364' => [
        'name' => '20-Fuß-Bar-Container',
        'short_description' => "Außenmaße: L 6058 mm x B 2438 mm x H 2591 mm\n&nbsp;\nInnenmaße: L 5898 mm x B 2352 mm x H 2390 mm\n&nbsp;\nTürmaße: B 2338 mm x H 2280 mm\n&nbsp;\nVolumen: 33,1 m³\n&nbsp;\nEuropaletten: 11\nLeergewicht: 2200 kg\n&nbsp;\nNutzlast: 28280 kg\n&nbsp;\nGesamtgewicht: 30480 kg\n&nbsp;\nISO-Typcode: 22G1\n&nbsp;\nISO-Gruppenschlüssel: 22 GP\n&nbsp;",
    ],

    '11075' => [
        'name' => '20-Fuß-Kühlcontainer STD – Präzision und Sicherheit',
        'short_description' => "Neuer 20-Fuß-Kühlcontainer, konzipiert für den sicheren Transport und die Lagerung temperaturempfindlicher Produkte. 2 Jahre Garantie inklusive.",
    ],

    '11076' => [
        'name' => 'Gebrauchter 20′-Kühlcontainer STD – Ideale Lagerlösung',
        'short_description' => "Gebrauchter 20-Fuß-Kühlcontainer, konzipiert für die sichere Lagerung und den Transport temperaturempfindlicher Produkte. Mit 2 Jahren Garantie.",
    ],

    '11077' => [
        'name' => '40-Fuß-Kühlcontainer HC – Hohe Kapazität und Leistung',
        'short_description' => "Neuer 40-Fuß-High-Cube-Kühlcontainer, perfekt für große Mengen temperaturempfindlicher Güter. Inklusive 2 Jahren Garantie und verfügbaren Anpassungen.",
    ],

    '11078' => [
        'name' => 'Gebrauchter 40-Fuß-Kühlcontainer HC – Große Kapazität und Zuverlässigkeit',
        'short_description' => "Gebrauchter 40-Fuß-High-Cube-Kühlcontainer, konzipiert für große Mengen temperaturempfindlicher Güter. Inklusive 2 Jahren Garantie und verfügbaren Anpassungen.",
    ],

    '11174' => [
        'name' => 'Sanitärcontainer – WC + Dusche + Tank',
        'short_description' => "Einfach Strom, Wasser und Abwasser anschließen: sofort einsatzbereit\nDoppelte WC-Kabine 3×2 Meter mit Schwarzwassertank, mit WC und Dusche\n– 2 Fenster\n– 80 mm wärmegedämmtes Sandwichprofil für geringen Energieverlust\n– Außentür aus verzinktem Hörmann-Stahlblech\n– Urinale\n– Komplette Elektroinstallation nach CE-Richtlinien\n– Steckdosen 230V\n– 2 Deckenleuchten\n– Anschluss 11KW/400V\n– PVC-Bodenbelag – robust und schnell zu reinigen\n– Elektrischer Wandheizkörper\n– Grauwassertank\n– Treppe\nMiete zu günstigen Monatsraten möglich. Wir können jederzeit auch andere Abmessungen und Farben nach Ihren Vorgaben fertigen.",
    ],

    '10795' => [
        'name' => 'Sanitärcontainer 2×2 m mit Dusche und Tank',
        'short_description' => "Das kompakte Sanitärmodul 2×2 m bietet alles Notwendige: separate Dusche, Waschbecken, Warmwasser und Abwassertank – perfekt für jede temporäre Situation.\nDurchlauferhitzer 11 kW\nElektrischer Wandheizkörper\nRutschfester PVC-Boden und natürliche Belüftung",
    ],

    '11530' => [
        'name' => 'Doppel-Sanitärcontainer 2,4 x 1,5 m – WC + Urinal getrennt',
        'short_description' => "",
    ],

    '10796' => [
        'name' => 'Doppel-Sanitärcontainer 3×2 m',
        'short_description' => "Das doppelte Sanitärmodul 3×2 m ist eine kompakte und autarke Hygienelösung mit 2 separaten WCs, Waschbecken, Warmwasser und rutschfestem Boden – perfekt für jede professionelle oder temporäre Umgebung.\nLED-Beleuchtung + Tageslicht\nWarmwasserboiler für die Waschbecken\nRobuste Konstruktion, sofort einsatzbereit",
    ],

    '11305' => [
        'name' => 'ANSCHLIESSBARER SANITÄRCONTAINER WC + DUSCHE, GRAU',
        'short_description' => "Der modulare Sanitärblock ermöglicht die Errichtung von Sanitäranlagen in kürzester Zeit, zu einem im Vergleich zu einer Massivbaulösung sehr wettbewerbsfähigen Preis.\nTechnische Daten\nABMESSUNGEN\nAußenhöhe: 240 cm\nInnenhöhe: 220 cm\nBreite: 220 cm\nTiefe: 120 cm\nKONSTRUKTION\nBeschreibung: Verzinkter und lackierter Stahl.\nFarbe: Grau RAL 7016\nStärke: 2 mm\nDecke: Höhe 240 mm\nHandling: 4 Dachaufnahmen für Hebehaken\nWÄNDE UND DACH\nMaterial: Sandwichpaneele\nDämmung: Polyurethan-Hartschaum\nWandstärke: 50 mm\nDachstärke: 40 mm\nDacheindeckung: Verzinktes Trapezblech\nPaneelfarbe: Grau RAL 7016\nBODEN\nAufbau: Faserzementplatten\nStärke: 16 mm\nBelag: PVC\nTÜREN UND FENSTER\nTür: 2 Aluminiumtüren, Maß 85 x 190 cm\nAbluftventilator: 1 in jeder Kabine\nSANITÄR\n1 Keramikwaschbecken 35 cm mit Kaltwasserhahn und Spiegel\n1 integriertes WC mit vollkeramischem Spülkasten\n1 Keramik-Duschtasse\nWasserzu- und -ablauf an der Rückwand – NF\nELEKTRIK: 220 V\nBeleuchtung: 1 LED-Deckenleuchte in jeder Kabine\nVerteiler: 1 Verteiler inklusive FI-Schalter und Leitungsschutzschaltern\nSchalter: 1 in jeder Kabine\nEin Außenanschlusskasten\nWarmwasserbereiter nicht enthalten (gegen Aufpreis installierbar).",
    ],

    '11564' => [
        'name' => 'Sanitär-/Umkleidecontainer 6×2,9',
        'short_description' => "",
    ],

    '10700' => [
        'name' => 'Snack-BOX-Container 20′ DRY Privilege',
        'short_description' => "Snack-BOX 20′ DRY Privilege – Gastronomiekiosk der Spitzenklasse\nContainer 20 Fuß erster Fahrt\nVollständige Dämmung und Holzausbau\nPVC-Boden + Elektroinstallation\nAnhebbare Frontklappe 1,5 m\nIntegrierter Technikbereich\nIndividuelle Lackierung",
    ],

    '11425' => [
        'name' => 'Ausgestatteter Sozialcontainer 21 m² – WC, Küche und Umkleide',
        'short_description' => "",
    ],

    '11426' => [
        'name' => 'Sozialcontainer 21 m² – WC und Umkleide',
        'short_description' => "",
    ],

    '10489' => [
        'name' => '20-Fuß-Standardcontainer – Gebraucht, CSC-zertifiziert',
        'short_description' => "Der gebrauchte 20-Fuß-Standardcontainer ist die ideale Lösung für intermodalen Transport und Lagerung. CSC-zertifiziert, bietet er maximale Widerstandsfähigkeit und Vielseitigkeit.\nSolide und robuste Konstruktion\nBehandelter Marineholzboden\nISO- und CSC-Zertifizierungen\nWind- und wasserdicht (WWT)\nZugelassen für den internationalen Einsatz",
    ],

    '10495' => [
        'name' => '40-Fuß-Standardcontainer – Gebraucht, CSC-zertifiziert',
        'short_description' => "Gebrauchter 40-Fuß-Standard-Seecontainer, robust und zertifiziert für Transport und Lagerung.\nISO- und CSC-zertifiziert\nZustand Cargo Worthy\nWind- und wasserdicht (Wind & Water Tight)\nBehandelter Holzboden\nVerkauf und Vermietung möglich",
    ],

    '10474' => [
        'name' => '20-Fuß-Super-Kühlcontainer mit zwei Temperaturzonen',
        'short_description' => "Maximale Vielseitigkeit für Ihr Geschäft mit dem 20-Fuß-Super-Kühlcontainer mit zwei Zonen. Dank seiner zwei unabhängigen Abteile bietet er differenzierte Temperaturen bis -60 °C und +5 °C – perfekt für die Logistik von Tiefkühl- und Frischprodukten.\nZwei unabhängige Zonen: -60 °C und +5 °C\nIdeal für Lebensmittel, Arzneimittel und Tiefkühlware\nHochleistungsdämmung\nPräzise und sichere Kühlung\nFür den intensiven professionellen Einsatz konzipiert",
    ],

    '10696' => [
        'name' => '20-Fuß-Bürocontainer mit seitlicher Verglasung',
        'short_description' => "20-Fuß-Bürocontainer mit 4,5 m Verglasung.\nRobuste und modulare Konstruktion\nKomplette Elektroinstallation\nKlimatisierung inklusive\nHelle Innenräume, sofort einsatzbereit\nEinfacher Transport und Aufstellung",
    ],

    '10627' => [
        'name' => 'Voll ausgestatteter 20′-Bürocontainer',
        'short_description' => "20′-Bürocontainer, sofort einsatzbereit, komfortabel und robust.\nWärme- und Schalldämmung aus Mineralwolle\nFenster mit Isolierverglasung und Rollläden\nKomplette Elektroinstallation + Heizung\nHochwertige Innen- und Außenausführung\nSchnelle Aufstellung und Transport",
    ],

    '10628' => [
        'name' => 'Bürocontainer 6×3 m',
        'short_description' => "Modulares Büro 6×3 m, komfortabel und komplett.\nRobuste Stahlkonstruktion\nWärme- und Schalldämmung aus Mineralwolle\nElektroinstallation mit 230-V-Steckdosen und Badbeleuchtung\nWiderstandsfähiger Linoleumboden\nGroße Fenster und Heizung inklusive",
    ],

    '10629' => [
        'name' => 'Bürocontainer 6×3 m Modell H1-630',
        'short_description' => "Bürocontainer H1-630 mit 18 m², robust und komfortabel.\nKonstruktion aus verzinktem Stahl\nInnenverkleidung aus Holz\nZugangstür 0,75 × 2 m\nSatteldach\nVerfügbar in Santiago – El Monte",
    ],

    '11159' => [
        'name' => '20′-Baustellen-Bürocontainer – Normale Gebrauchsspuren',
        'short_description' => "Der 20′-Baustellen-Bürocontainer ist eine wirtschaftliche und widerstandsfähige Lösung zur Schaffung temporärer Arbeitsplätze. Ausgestattet mit Fenstern, Heizung und Elektroinstallation, ist er sofort einsatzbereit.",
    ],

    '11160' => [
        'name' => 'Mobiler 20′-Bürocontainer – Normale Gebrauchsspuren',
        'short_description' => "Der mobile 20′-Bürocontainer ist eine praktische und wirtschaftliche Lösung für temporäre Arbeitsplätze. Gedämmt, elektrifiziert und sofort einsatzbereit, ist er perfekt für Baustellen und temporäre Projekte.",
    ],

    '10625' => [
        'name' => 'Standard-Bürocontainer 6,00 × 2,43 m',
        'short_description' => "",
    ],

    '11240' => [
        'name' => '20-FUSS-KÜHLCONTAINER',
        'short_description' => "20-Fuß-Kühlcontainer mit integriertem Kältesystem, das den sicheren Transport oder die Lagerung verderblicher Produkte oder von Produkten ermöglicht, die auf einer bestimmten Temperatur gehalten werden müssen. Diese Einheiten sind ideal für die Lagerung und den Transport von Waren bei warmen und kalten Temperaturen. Sie nutzen einen einfachen Plug-and-Play-Stromanschluss, der eine schnelle und effiziente Versorgung ermöglicht, oder können über einen Dieselgenerator betrieben werden. Die Kühlcontainer sind in Länge, Leistung und Design individuell anpassbar und können mit verschiedenen Zubehörtypen ausgestattet werden, um den Kundenanforderungen zu entsprechen. Unsere Einheiten können außerdem mit GPS-Ortungssystemen und satellitengestützter Fernüberwachung der Temperatur ausgestattet werden, sodass Sie die Containertemperatur aus der Ferne überwachen und regeln können.",
    ],

    '11231' => [
        'name' => 'NEUE MOBILE KÜHLZELLEN 10 FUSS',
        'short_description' => "Die Eigenschaften unserer mobilen Kühlzellen machen sie besonders nützlich beim Arbeiten mit Supermarktwagen, Handhubwagen oder Elektrostaplern, da sie einen flachen Boden zum einfachen Rollen haben. Wir bieten leichte Rampen mit bis zu 750 kg Tragkraft sowie robustere Rampen mit bis zu 4500 kg Tragkraft. Zudem ermöglichen die Beleuchtungsanlage und die Türöffnung von innen ein sicheres Handling der Ware im Inneren.\nMit den mobilen Kühlzellen von 3 m/10′ können Sie Temperatur und Luftfeuchtigkeit steuern. Unsere mobilen Kühlzellen decken einen programmierbaren Temperaturbereich von +30 ºC bis -40 ºC bei einer Außentemperatur von +38 ºC ab. Es besteht außerdem die Möglichkeit zu überprüfen, ob die Kühlkette während der Lagerung der Ware unterbrochen wurde: Mechanismen speichern die Temperaturwerte alle 10 Minuten, damit Sie die Gewissheit haben, dass die Ware in einwandfreiem Zustand ist.\nMobile Kühlzellen sind Kühlseecontainer mit Anpassungen, die den Einsatz als Kühllager erleichtern, zum Beispiel:\nTüröffnung im Kühlzellen-Stil.\nÖffnung von innen.\nInnenbeleuchtung.\nAlarm für eingeschlossene Personen.\nStreifenvorhang.\nFlacher Boden für den einfachen Einsatz von Hubwagen oder Staplern.\nOptionale Rampe.\nWenn Sie an der Miete oder dem Kauf einer unserer mobilen Kühlzellen interessiert sind, besuchen Sie den Angebotsbereich mit den interessantesten Angeboten oder kontaktieren Sie uns. Unsere Vertriebsmitarbeiter beantworten alle Fragen und erstellen Ihnen ein auf Ihre Bedürfnisse zugeschnittenes Miet- oder Kaufangebot.",
    ],

    '11622' => [
        'name' => 'Mobiles Minihaus mit zwei Schlafzimmern und Küche – Modell Deluxe Stahlworks',
        'short_description' => "",
    ],

    '11830' => [
        'name' => '12-Fuß-Minicontainer',
        'short_description' => "",
    ],

    '11566' => [
        'name' => 'Modernes Minihaus mit 36 m² – 2 Schlafzimmer und Einbauküche',
        'short_description' => "",
    ],

    '11169' => [
        'name' => 'Bewohnbares Containermodul T0 – Modernes Design und optimale Dämmung',
        'short_description' => "Bewohnbares Modul T0: kompakt, modern und gedämmt. Perfekt für Wohn-, Büro- oder Freizeiträume. Individuell anpassbar und sofort einsatzbereit.",
    ],

    '11621' => [
        'name' => 'Gewerbemodul 18 m² mit Sanitäranlagen',
        'short_description' => "",
    ],

    '11162' => [
        'name' => 'Bewohnbares Containermodul 17 m² – Vielseitige Lösung für jeden Bedarf',
        'short_description' => "Bewohnbares Containermodul 17 m²: kompakt, wirtschaftlich und vielseitig. Inklusive komplettem Bad, Einbauküche und Wärmedämmung. Perfekt für jeden Wohn- oder Gewerbebedarf.",
    ],

    '11175' => [
        'name' => 'Bewohnbares Containermodul mit 17 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen.\nTechnische Daten:\nAbmessungen (LxBxH): 6 m x 2,9 m x 2,7 m\n– Ganzjährig nutzbar: gefertigt aus Polystyrol-Sandwichpaneelen, im Sommer wie im Winter perfekt dämmend,\n– Komplette Installation von Lüftung, Elektrik, Wasser und Abwasser.\n– Ausgestattet mit Bad und Küchenzeile – Wasser, Abwasser und Strom müssen lediglich angeschlossen werden.\n– Langlebig: aus hochwertigen Materialien gefertigt, die Sandwichpaneele sind wartungsfrei.\n– Mobil – das Haus wird komplett ausgestattet geliefert und kann jederzeit versetzt werden.\nDämmung:\n– Standard-Sandwichpaneel 100 mm Stärke mit Polystyrolkern, Wärmedurchgangskoeffizient 0,38 W/m2K.\nKonstruktion:\n– Sandwichpaneele (pulverbeschichtetes verzinktes Blech 0,5 mm – Polystyrol 100 mm – pulverbeschichtetes verzinktes Blech 0,5 mm)\n– Ecken (Stahlblech 0,5 mm)\nBad:\n– Kompakt-WC,\n– Waschbecken mit Unterschrank 45,\n– Duschkabine 90×90\n– Elektroboiler 50 Liter\nKüche:\n– Unterschrank mit Einbeckenspüle und Armatur, 80 cm\n– Hängeschrank 80\n– Freistehender Schrank 40 cm\n– Hängeschrank 40 cm",
    ],

    '11229' => [
        'name' => 'Bewohnbares Containermodul mit 21 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen (LxBxH): 7 m x 3 m x 2,5 m\n• Stahlrahmen 100x50x3\n• PIR-Sandwichpaneel mit 100-mm-Kern (Polyurethan)\n• Bad mit Badewanne\n• Rollläden + Insektenschutzgitter\n• Fassadenverkleidung in Nussbaumfarbe",
    ],

    '11168' => [
        'name' => 'Ausgebautes Containermodul – Modernität, Flexibilität',
        'short_description' => "Ausgebautes Containermodul: eine vielseitige und nachhaltige Lösung, ideal für Büros, Wohn- oder Gewerberäume. Modern, klimatisiert und individuell anpassbar.",
    ],

    '11161' => [
        'name' => 'Vorgefertigtes Containermodul 18 m² – Zusätzlicher Raum, sofort einsatzbereit',
        'short_description' => "Vorgefertigtes Containermodul 18 m²: vollständig gedämmt, ausgestattet mit Fenstern, Türen, Elektroinstallation und LED-Beleuchtung. Ideale Lösung für Büros, Wohnhäuser oder Gewerbeflächen.",
    ],

    '10623' => [
        'name' => 'Vorgefertigtes Modul „DALÍ“ 8×3 m',
        'short_description' => "Modernes Modul mit 24 m², Bad und großen Fensterflächen.\nKonstruktion aus mattschwarzem Stahl\nInnenausbau in Holz und glattem Gipskarton\nAusgestattetes Bad + komplette Elektroinstallation\nDämmung aus Polyurethan und Glaswolle\nGroße Fenster aus thermisch getrenntem Aluminium",
    ],

    '11228' => [
        'name' => 'Vorgefertigtes Modul 10 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen\nAußenmaße (LxBxH): 4 m x 2,4 m x 2,6 m\nInnenmaße (LxBxH): 3,8 m x 2,2 m x 2,35 m\nDach: Gedämmte Eindeckung aus Sandwichpaneelen, bestehend aus verzinktem Stahlblech in RAL 9002 lackiert und 40 mm Polyurethan-Dämmkern.\nVerkleidung: Gedämmte Wände aus Sandwichpaneelen, bestehend aus verzinktem Stahlblech in RAL 9002 lackiert und 50 mm Polyurethan-Dämmkern.\nAußentür: PVC-Element (845 x 1960 mm, 4-Punkt-Schloss, 3 Schlüssel im Lieferumfang).\nFenster: 2 Standardfenster, doppelverglast – PVC-Rahmen, 970×1200 mm, 1 zu öffnender Flügel.\nBoden: Rahmen aus verzinktem Stahl (Verstärkung 200 kg/m²), Boden aus einer 16 mm starken Faserzementplatte, nicht brennbar und fäulnisbeständig, ungedämmt. PVC-Bodenbelag für den öffentlichen Bereich, Parkettoptik.\nStromversorgung:\n– 1 Verteiler 220V/50Hz mit Leitungsschutzschaltern\n– Aufputzverkabelung\n– 2 Steckdosen 16A+T\n– 1 Rauchmelder\nBeleuchtung:\n– 2 LED-Panels innen\n– 1 LED-Leiste außen.\n– 1 Doppelschalter",
    ],

    '11176' => [
        'name' => 'Vorgefertigtes Modul 14 m² mit Sanitärbereich',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns.\nTechnische Daten:\nAbmessungen\nAußenmaße (LxBxH): 5,95 x 2,4 x 2,5 m\nInnenmaße Sanitärbereich: 1,50 m x 2,20 m\nInnenmaße Empfangsbereich: 4,30 m x 2,20 m\nWände und Dach\nMaterial: Sandwichpaneele\nDämmung: Polyurethan-Hartschaum\nWandstärke: 50 mm\nDeckenstärke: 40 mm\nDeckeneindeckung: Verzinktes Trapezblech\nRahmen\nBeschreibung: Verzinkter und lackierter Stahl\nStärke: 2 mm\nDach: Höhe 250 mm\nHandling: 4 Dachaufnahmen für Hebehaken\nBODEN\nAufbau: Faserzementplatten\nStärke: 16 mm\nBelag: PVC\nTÜREN UND FENSTER\nTür: 1 Außentür aus Aluminium, Maß 90 x 200 cm. 1 Innentür aus Aluminium, Maß 80 x 200 cm.\nFenster: 2 PVC-Fenster, Maß 100 x 100 cm, doppelverglast, 1 Flügel\nELEKTRIK\nBeleuchtung: 2 LED-Leuchtstoffröhren\nSteckdosen: 2 Steckdosen\nVerteiler: 1 Verteiler inklusive FI-Schalter und Leitungsschutzschaltern\nSchalter: 1",
    ],

    '11227' => [
        'name' => 'Vorgefertigtes Modul mit 12 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen: LxBxH: 4,94 x 2,50 x 2,70 Meter\n– Eine Konstruktion von 4,94 x 2,50 m mit einer lichten Höhe von 2,26 m aus weiß lackiertem verzinktem Stahl\n– Wandpaneele mit 35 mm Polyurethanschaum-Dämmung\n– Dach aus verzinktem Blech\n– Glaswolldämmung 100 mm\n– Metalldecke aus weißem Stahlprofil\n– Spanplattenboden CTBH 22 mm\n– PVC-Bodenbelag blau U2P2\nTüren und Fenster:\n– 1 geschlossene Außentür 0,90 m\n– PVC-Schiebefenster 1,00 x 1,20 m, doppelverglast, mit Rollladen\nAusstattung:\n– Hauptverteiler\n– LED-Röhre 1x36W\n– Elektro-Konvektor 1500 W\n– Steckdosen",
    ],

    '11226' => [
        'name' => 'Vorgefertigtes Modul mit 15 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen (LxBxH): 6 m x 2,5 m x 2,58 m\nWände und Dach\nMaterial: Sandwichpaneele\nDämmung: Polyurethan-Hartschaum\nWandstärke: 50 mm\nDeckenstärke: 40 mm\nDeckeneindeckung: Verzinktes Trapezblech\nBoden\nAufbau: Faserzementplatten\nStärke: 16 mm\nBelag: PVC\nTÜREN UND FENSTER\nTür: 1 Tür aus satiniertem Aluminium, Maß 90 x 200 cm\nFenster: 2 Aluminiumfenster, Maß 200 x 100 cm, doppelverglast, 1 Flügel\nELEKTRIK\nBeleuchtung: 2 LED-Leuchtstoffröhren\nSteckdosen: 2 Steckdosen\nVerteiler: 1 Verteiler inklusive FI-Schalter und Leitungsschutzschaltern\nSchalter: 1",
    ],

    '11180' => [
        'name' => 'Vorgefertigtes Modul mit 18 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen: LxBxH: 4,70 x 3,84 x 2,64 Meter\n– Wandpaneele mit 40 mm Steinwolldämmung\n– 2 Rahmen von 3,84 x 2,35 m aus hellgrauem verzinktem Stahl mit einer lichten Höhe von 2,30 m\n– Dach aus verzinktem Blech, Glaswolldämmung 100 mm\n– Deckenverkleidung aus weißem Stahlprofil\n– Neuer Spanplattenboden CTBH 22 mm\n– Neuer Kunststoff-Bodenbelag\nTüren und Fenster:\n– 1 einfache Glastür 0,90 m\n– 3 Fensterfronten\n– 2 Giebelseiten und 1 Längsseite\n– 2 Oberlichtrahmen mit Gitterstäben und Kippflügel 0,50 x 0,40 m, doppelverglast\nAusstattung:\n– Wasserdichter einphasiger Hauptverteiler\n– 3 wasserdichte Doppel-Leuchtstoffleuchten\n– LED-Strahler\n– 3 Steckdosen\n– Elektro-Konvektoren: 2 x 1000 W",
    ],

    '11179' => [
        'name' => 'Vorgefertigtes Modul mit 24 m² und Sanitäranlagen',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen (LxBxH): 8,20 x 2,92 x 2,92 m\n– 1 Konstruktion von 8,20 x 2,92 m mit einer lichten Höhe von 2,48 m aus weiß lackiertem verzinktem Stahl\n– Wandpaneele mit 40 mm Polyurethanschaum-Dämmung\n– Dach aus verzinktem Blech\n– Glaswolldämmung 100 mm\n– Deckenverkleidung aus weißem Stahlprofil\n– Harzboden\nTüren und Fenster:\n– Eine geschlossene Außentür von 0,90 m\n– 2 Oberlichtrahmen von 0,40 m x 0,50 m\n– 2 Innentüren (Isoplan) von 0,80 m\nAusstattung:\n– Dreiphasiger Verteiler\n– Doppel-Leuchtstoffleuchte mit Raster und 2 einfache wasserdichte Leuchtstoffleuchten\n– Elektro-Konvektoren: 2 x 1000 W\n– Warmwasserspeicher 300 Liter\n– 1 Waschrinne mit 4 Wasserstellen und 1 Waschrinne mit 2 Wasserstellen\n– Stand-WCs: 3\n– Urinale: 3\n– Duschtassen: 3",
    ],

    '11178' => [
        'name' => 'Vorgefertigtes Modul mit 50 m²',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen (LxBxH): 8,24 m x 6,00 m x 3,00 m\n– 2 Rahmen von 8,24 m x 3 m x 3 m aus weiß lackiertem verzinktem Stahl mit einer lichten Höhe von 2,51 m\n– Wandpaneele mit 80 mm Polyurethanschaum-Dämmung\n– Dach aus verzinktem Blech\n– Deckenverkleidung aus mikroperforiertem Stahlprofil\n– Glaswolldämmung 100 mm\n– Neuer Spanplattenboden CTBH 22 mm\n– Neuer Kunststoff-Bodenbelag\nTüren und Fenster:\n– 1 verglaste Außentür von 0,90 m\n– 3 Fenster von 2,00 x 1,20 m, doppelverglast, mit Rollladen\n– 2 Innentüren (Isoplan) von 0,83 m\nAusstattung:\n– Einphasiger Hauptverteiler\n– 8 Leuchtstoffleuchten mit Doppelraster\n– Steckdosen\n– Elektro-Konvektoren: 3 x 2000 W und 1 x 500 W",
    ],

    '11724' => [
        'name' => 'Vorgefertigtes Modul mit 7 m² ohne Sanitäranlagen (weitere Abmessungen möglich)',
        'short_description' => "",
    ],

    '10626' => [
        'name' => 'Schwarzes vorgefertigtes Modul – Elegant, gedämmt und multifunktional',
        'short_description' => "Modernes und funktionales schwarzes Fertigmodul, sofort einsatzbereit.\nKonstruktion aus korrosionsgeschütztem Stahl\nSandwichpaneele mit Wärme- und Schalldämmung\nElegantes und schlichtes Design\nSchnell aufgestellt, einfach zu transportieren\nVollständig anpassbar: Installationen, Möblierung, Ausstattung",
    ],

    '10707' => [
        'name' => 'Sanitärmodul 6×2,44 m mit 5 WCs',
        'short_description' => "Sanitärmodul 6×2,44 m – 5 unabhängige WCs und integrierte Waschbecken\n5 WC-Kabinen mit Schloss\n2 Waschbecken mit Warmwasser\nRutschfester PVC-Boden\nMineralwolldämmung\nLED-Beleuchtung und Heizung\nOberlichtfenster + Kranstange",
    ],

    '10865' => [
        'name' => 'Kompaktes Sanitärmodul S1',
        'short_description' => "Das Sanitärmodul S1 ist die ideale Antwort für alle, die eine schnelle, robuste und kompakte Hygienelösung suchen. Für den intensiven professionellen Einsatz konzipiert, vereint es Zweckmäßigkeit, Komfort und einfachen Transport.\nKonstruktion aus verzinktem Stahl und gedämmten Paneelen\nKeramik-WC + Waschbecken mit Spiegel\nElektrifiziert, in 3 Wochen einsatzbereit",
    ],

    '10706' => [
        'name' => 'Sanitärmodul mit getrennter Dusche und WC',
        'short_description' => "Sanitärmodul mit getrennter Dusche und WC – Hygiene und Komfort überall\nRobuste Stahlkonstruktion\nPIR-Dämmpaneele 100 mm\nKomplettes Bad + separates WC\nElektrische Entwässerung inklusive\nAußenbeleuchtung\nModerne Verkleidung in Nussbaumfarbe",
    ],

    '10797' => [
        'name' => 'Barrierefreies Sanitärmodul mit WC und Dusche',
        'short_description' => "Das barrierefreie Modul WC + Dusche bietet eine komplette und zugängliche Sanitärlösung, konzipiert für Menschen mit eingeschränkter Mobilität. Robuste Konstruktion, Wärmedämmung, Komfort und Normkonformität machen es für jeden Einsatzbereich perfekt.\nAngepasstes WC, Waschbecken und Dusche\nRutschfester PVC-Boden\nBereit für Aufstellung und Transport",
    ],

    '11177' => [
        'name' => 'Doppel-Sanitärmodul WC Herren – Damen',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\n&nbsp;\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen. Für alle Ihre Anpassungswünsche kontaktieren Sie uns\nTechnische Daten:\nAbmessungen (LxBxH): 2,30 x 1,35 x 2,5 m\nTiefe: 1,20 m\nRahmen\nBeschreibung: Verzinkter und lackierter Stahl\nStärke: 2 mm\nDach: Höhe 240 mm\nHandling: 4 Dachaufnahmen für Hebehaken\nWände und Dach\nMaterial: Sandwichpaneele\nDämmung: Polyurethan-Hartschaum\nWandstärke: 50 mm\nDeckenstärke: 40 mm\nDeckeneindeckung: Verzinktes Trapezblech\nBoden\nAufbau: Faserzementplatten\nStärke: 16 mm\nBelag: PVC\nTÜREN UND FENSTER\nTür: 2 Aluminiumtüren, Maß 85×190 cm\nAbluftventilator: 1 in jeder Kabine\nSanitärinstallation\n1 Keramikwaschbecken, Maß 35 cm, mit Kaltwasserhahn und Spiegel in jeder Kabine\n1 Stand-WC mit vollkeramischem Spülkasten in jeder Kabine\nWasserzu- und -ablauf vorbereitet an der Rückwand\nELEKTRIK 220 V\nBeleuchtung: 1 LED-Deckenleuchte in jeder Kabine\nVerteiler: 1 Verteiler inklusive FI-Schalter und Leitungsschutzschalter\nSchalter: 1 in jeder Kabine\nEin Außenanschlusskasten",
    ],

    '11304' => [
        'name' => 'EINFACHES SANITÄRMODUL WC – FARBE GRAU',
        'short_description' => "Vertragsfotos (Modul in einwandfreiem Zustand verkauft, wie auf den Fotos dargestellt)\nDie unten aufgeführten Merkmale sind die Standardausstattung dieses Moduls. Sie können direkt bestellen, wenn diese Merkmale Ihren Anforderungen entsprechen.\nÜbersicht\nAbmessungen: 1,20 x 1,20 x 2,40 m\nTiefe: 120 cm\nRahmen\nBeschreibung: Verzinkter und lackierter Stahl\nStärke: 2 mm\nDecke: Höhe 240 mm\nHandling: 4 Dachaufnahmen für Hebehaken\nWände und Decke\nMaterial: Sandwichpaneele\nDämmung: Polyurethan-Hartschaum\nWandstärke: 40 mm\nDachstärke: 40 mm\nDacheindeckung: Verzinktes Wellblech\nBoden\nAufbau: Faserzementplatten\nStärke: 16 mm\nBelag: PVC\nTüren und Fenster\nTür: 1 Aluminiumtür 85 x 190 cm.\nAbluftventilator: 1\nSanitärinstallation\n1 Keramikwaschbecken 35 cm mit Kaltwasserhahn und Spiegel.\n1 Stand-WC mit vollkeramischem Spülkasten\nWasserzu- und -ablauf vorbereitet an der Rückwand.\nELEKTRIK 220 V\nBeleuchtung: 1 LED-Deckenleuchte\nVerteiler: 1 Verteiler inklusive FI-Schalter und Schalter.\nSchalter: 1\nEin Außenanschlusskasten",
    ],

    '11362' => [
        'name' => 'MONOBLOCK 6×2,5 BÜRONUTZUNG',
        'short_description' => "Abmessungen am Sockel 593 x 243 cm.\nAbmessungen am Dach 600 x 250 cm.\nInnenhöhe 240 cm, Außenhöhe 262 cm.\nWandpaneel Stärke 40 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion,\nverkleidet mit Trapezblech, belegt mit IDRO-V100-Holz 18 mm, belegt mit Standard-PVC.\nAluminiumfenster und -türen RAL 9010.\nGlas 4 mm transparent.\nNr. 1 Halbglastür, komplett mit Einbruchschutzstangen,\nmit Standardgriff und -schloss,\nAußenmaß 100 x 210h cm.\nNr. 1 Schiebefenster, komplett mit Einbruchschutzstangen,\nAußenmaß 100 x 100h cm.\nStandard-Elektroinstallation nach CEE-Norm 220V, mit sichtbarem PVC-Rohr, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter für Steckdosen.\nNr. 1 Schalter.\nNr. 1 Steckdose\nNr. 2 Deckenleuchten 45W-LED.\nNr. 1 Mono-Split-Inverter-Klimaanlage BTU 9000-HISENSE.\nNr. 1 Außenkasten für den Anschluss der Elektroinstallation.",
    ],

    '11309' => [
        'name' => 'MONOBLOCK SANITÄRNUTZUNG',
        'short_description' => "Im Lieferumfang der Planung für das Baugenehmigungsverfahren enthalten:\nTragwerksplanung des Metallgebäudes (ohne Berechnung oder Prüfung der Gründung).\nErstellung des Standsicherheitsnachweises nach geltenden Vorschriften, einschließlich Vorbereitung der Unterlagen für die behördliche Anzeige.\nNr. 1 Modul mit Sockelmaßen 1023 x 293 cm.\nNr. 1 Modul mit Dachmaßen 1030 x 300 cm.\nNr. 1 Modul mit Dachmaßen 1030 x 50 cm.\nInnenhöhe 270 cm, Außenhöhe 342 cm.\nWandpaneel und erstes Dach Stärke 100 mm – Polyurethan\n1 Außenseite GLATTES Blech BG RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion,\nverkleidet mit Trapezblech, belegt mit Wandpaneel 100 mm Polyurethan,\nbelegt mit ZEMENTgebundener Platte 16 mm,\nbelegt mit modularem Vinylboden in der Farbe LIGHT GREY.\nZweites Dach für bessere Dämmung, maximale Dichtigkeit und Langlebigkeit, mit Rohrrahmenkonstruktion und kantgebogenen Blechen, einseitig geneigt, verkleidet mit:\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nUmlaufende Traufblende RAL 9002, komplett mit Fallrohren zur Bodenentwässerung.\nAbmessungen 1050 x 370 cm.\nAluminiumfenster und -türen RAL 9010.\nIsolierglas 4/9/4 mm, mattiert.\nNr. 1 zweiflügelige Volltür, mit Standardgriff und -schloss, Außenmaß 200 x 210h cm.\nNr. 4 einflügelige Volltüren, mit Standardgriff und -schloss, Außenmaß 80 x 210h cm.\nNr. 2 einflügelige Volltüren, mit Standardgriff und Frei/Besetzt-Schloss, Außenmaß 100 x 210h cm.\nNr. 5 einflügelige Volltüren, mit Standardgriff und Frei/Besetzt-Schloss, Außenmaß 80 x 210h cm.\nNr. 11 Kippfenster, Außenmaß 50 x 50h cm, komplett mit festem Insektenschutzgitter.\nNr. 1 Kippfenster, Außenmaß 100 x 50h cm, komplett mit festem Insektenschutzgitter.\nKomplette Elektroinstallation mit Nachweis, unter Putz, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter. Nr. 1 Deckenleuchte 45W-LED. Nr. 11 Deckenleuchten 19W-LED. Nr. 7 Schalter.\nNr. 7 Steckdosen.\nNr. 1 Kasten für den Außenanschluss.\nInnenliegende Sanitärinstallation mit MEPLA-Rohr 20 mm, unter Putz, bestehend aus:\nNr. 1 barrierefreies Bad komplett mit (WC + Keramikwaschbecken) und zugehörigen Haltegriffen.\nNr. 1 Keramikwaschbecken 90 cm + Unterkonstruktion + Nr. 2 Mischbatterien.\nNr. 1 Spiegel.\nNr. 5 Keramik-WCs + Sitz + Aufputz-Spülkasten.\nNr. 2 Keramik-Urinale. Nr. 5 Papierrollenhalter + Bürste.\nNr. 4 Keramikwaschbecken 60 cm + Standsäule + Mischbatterie.\nNr. 4 Spiegel.\nNr. 1 Elektroboiler 60 Liter, Warmwasser.\nUmlaufende Außenverkleidung mit Unterkonstruktion und HPL-Platten (Ausführung in Holzoptik)",
    ],

    '11313' => [
        'name' => 'MONOBLOCK GARAGENNUTZUNG',
        'short_description' => "Nr. 2 Stück mit Sockelmaßen 593 x 293 cm.\nNr. 2 Stück mit Dachmaßen 600 x 300 cm.\nInnenhöhe 240 cm, Außenhöhe 277 cm.\nWandpaneel Stärke 40 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nOhne Sockel.\nKomplett mit Nr. 10 Winkeln zur Befestigung auf Ihrem vorhandenen Fundament.\nZweites Dach für bessere Dämmung, maximale Dichtigkeit und Langlebigkeit, mit Rohrrahmenkonstruktion und kantgebogenen Blechen, einseitig geneigt, verkleidet mit:\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002\nUmlaufende Traufblende RAL 9002, komplett mit Fallrohren zur Bodenentwässerung.\nAbmessungen 620 x 620 cm.\nNr. 2 verzinkte Schwingtore mit motorisierter Öffnung, komplett mit Standardgriff und -schloss sowie Sicherheitsgegengewichten.\nNr. 2 Aluminiumfenster RAL 9010, mit 4 mm transparentem Glas, Schiebeöffnung, Außenmaß 100 x 100h cm.\nStandard-Elektroinstallation nach CEE-Norm 220V, mit sichtbarem PVC-Rohr, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter für Steckdosen.\nNr. 2 Schalter.\nNr. 2 Steckdosen.\nNr. 4 Deckenleuchten 45W-LED.\nNr. 1 Außenkasten für den Anschluss der Elektroinstallation.",
    ],

    '11311' => [
        'name' => 'MONOBLOCK PFÖRTNERLOGE',
        'short_description' => "Im Lieferumfang der Planung für das Baugenehmigungsverfahren enthalten:\nTragwerksplanung des Metallgebäudes (ohne Berechnung oder Prüfung der Gründung).\nErstellung des Standsicherheitsnachweises nach geltenden Vorschriften, einschließlich Vorbereitung der Unterlagen für die behördliche Anzeige.\nPlanung der Heizungs-, Sanitär- und Wasserinstallation für den Monoblock zur Nutzung als PFÖRTNERLOGE.\nErstellung des Energienachweises für einen Neubau:\nmit rechnerischer Prüfung der gesetzlichen Mindestanforderungen\nmit Analyse der Planungsschichtaufbauten und Prüfung der Wärmebrücken (keine Kondensation in den Bauteilen);\nmit Prüfung der Einhaltung der Pflichten zur Einbindung erneuerbarer Energien\nBereitstellung technischer Unterstützung bei der Erstellung der technischen Unterlagen und der Planung der Elektroinstallation für den Monoblock zur Nutzung als PFÖRTNERLOGE PG8608 R03.\nDer Auftrag umfasst Grundrisse, Schaltschrankschema, Dimensionierungen und einen kurzen technischen Bericht.\nOhne Energienachweis und APE.\nNr. 1 Modul mit Sockelmaßen 590 x 343 cm.\nNr. 1 Modul mit Dachmaßen 670 x 250 cm.\nNr. 1 Modul mit Dachmaßen 670 x 70 cm.\nInnenhöhe 270 cm, Außenhöhe 344 cm. Gesamt 25 m²\nWandpaneel und erstes Dach Stärke 100 mm – Polyurethan\n1 Außenseite GLATTES Blech BG RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit Wandpaneel 100 mm Polyurethan, belegt mit IDRO-V100-Holz 18 mm, belegt mit modularem Vinylboden in der Farbe LIGHT GREY.\nZweites Dach für bessere Dämmung, maximale Dichtigkeit und Langlebigkeit, mit Rohrrahmenkonstruktion und kantgebogenen Blechen, einseitig geneigt, verkleidet mit:\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nUmlaufende Traufblende RAL 7022, komplett mit Fallrohren zur Bodenentwässerung.\nAbmessungen 690 x 340 cm.\nAluminiumfenster und -türen RAL 7022.\nIsolierglas 4/9/4 transparent.\nNr. 1 einflügelige Halbglastür, mit Standardgriff und -schloss, Außenmaß 100x210h cm.\nNr. 1 Schiebefenster, komplett mit Schiebe-Insektenschutz, Außenmaß 200 x 100h cm.\nNr. 1 Festverglasung, Außenmaß 180 x 100h cm.\nNr. 1 einflügelige Volltür, mit Standardgriff und Frei/Besetzt-Schloss, Außenmaß 100 x 210h cm.\nNr. 1 Badfenster als Kippfenster, komplett mit festem Insektenschutzgitter außen, Außenmaß 100 x 50h cm.\nOhne Elektroinstallation\nOhne Photovoltaikanlage und Absturzsicherung (bauseits auf Ihre Kosten zu installieren).\nInnenliegende Sanitärinstallation mit sichtbarem MEPLA-Rohr, bestehend aus:\nNr. 1 barrierefreies Bad (WC + Keramikwaschbecken) komplett mit Haltegriffen.\nNr. 1 Elektroboiler 15 Liter, Warmwasser.\nVerkleidung der Umfassungsfassaden mit Klebefolie – Ausführung in CORTEN-Farbe.",
    ],

    '11312' => [
        'name' => 'MONOBLOCK PFÖRTNERLOGE',
        'short_description' => "Abmessungen am Sockel 393 x 243 cm.\nAbmessungen am Dach 520 x 275 cm.\nInnenhöhe 270 cm, Außenhöhe 332 cm.\nWandpaneel Stärke 80 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nDachpaneel Stärke 80+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit Wandpaneel 80 mm Polyurethan, belegt mit IDRO-V100-Holz 18 mm, belegt mit rutschfestem PVC.\nZweites Dach, mit Rohrrahmenkonstruktion und kantgebogenen Blechen, einseitig geneigt, verkleidet mit:\nDachpaneel Stärke 80 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nUmlaufende Traufblende RAL 7016, komplett mit Fallrohren zur Bodenentwässerung.\nAluminiumfenster und -türen (Kaltprofil) RAL 7016.\nGlas 4/9/4 mattiert.\nNr. 1 einflügelige Ganzglas-Eingangstür, mit 1-Punkt-Panikstange, Außenmaß 100x210h cm.\nNr. 1 Schiebefenster, komplett mit Schiebe-Insektenschutz, Außenmaß 200 x 100h cm.\nNr. 1 Schiebefenster, komplett mit Schiebe-Insektenschutz, Außenmaß 100 x 100h cm.\nNr. 1 Schiebefenster, komplett mit Schiebe-Insektenschutz und unterer Durchreiche, Außenmaß 100 x 100h cm.\nNr. 1 einflügelige Volltür, mit Standardgriff und Frei/Besetzt-Schloss, Außenmaß 80 x 210h cm.\nNr. 1 Badfenster als Kippfenster, komplett mit festem Insektenschutzgitter außen, Außenmaß 50 x 50h cm.\nElektroinstallation nach CEE-Norm 220V, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter für Steckdosen. Nr. 1 FI-Schalter Steckdosen. Nr. 1 FI-Schalter Beleuchtung.\nNr. 2 Deckenleuchten 19W – LED. Nr. 2 Schalter.\nNr. 5 Steckdosen.\nNr. 1 RJ45-Dose.\nNr. 1 Mono-SPLIT-Inverter-Klimaanlage BTU 9000-HISENSE.\nNr. 1 Gegensprechanlage.\nNr. 1 Kasten für den Außenanschluss.\nInnenliegende Sanitärinstallation mit sichtbarem MEPLA-Rohr, bestehend aus:\nNr. 1 Keramik-WC + Sitz + Aufputz-Spülkasten.\nNr. 1 Papierrollenhalter + Bürste.\nNr. 1 Keramikwaschbecken 60 cm + Standsäule + Mischbatterie.\nNr. 1 Spiegel + Ablage\nNr. 1 Elektroboiler 15 Liter Warmwasser.\nVerkleidung der Umfassungsfassaden mit Klebefolie – Ausführung in CORTEN-Farbe.",
    ],

    '11306' => [
        'name' => 'MONOBLOCK BÜRONUTZUNG',
        'short_description' => "Im Lieferumfang der Planung für das Baugenehmigungsverfahren enthalten:\nErstellung des Tragwerksberichts für das Metallgebäude (ohne Berechnung oder Prüfung der Gründung).\nStatische Prüfung der Metallbauteile des Fertigbaus, mit Erstellung der Unterlagen nach Ex-Gesetz 1860-71 und NTC 2018 zur Einreichung bei den zuständigen Behörden sowie der von diesen ggf. angeforderten Berechnungsnachweise.\nVorbereitung der Formulare für die erdbebenschutzrechtliche Anzeige.\nErstellung des Energienachweises für einen Neubau, mit rechnerischer Prüfung der gesetzlichen Mindestanforderungen, Analyse der Planungsschichtaufbauten und Prüfung der Wärmebrücken (keine Kondensation in den Bauteilen), Prüfung der Einhaltung der Pflichten zur Einbindung erneuerbarer Energien.\nErstellung des elektrotechnischen Berichts für einen Neubau, einschließlich Planung der Elektroinstallation.\nDer Auftrag umfasst Grundrisse, Schaltschrankschema, Dimensionierungen und einen kurzen technischen Bericht.\nOhne Energienachweis und APE.\nUnsere Lieferung umfasst außerdem die digitale Übergabe einer TECHNISCHEN AKTE bestehend aus:\nder DoP (Declaration of Performance) zur CE-Kennzeichnung des Erzeugnisses.\nBescheinigung ISO3834-3:2005 (CE-Kennzeichnung) als vollständige statische Gewährleistung des für Sie gefertigten Erzeugnisses.\nUnbedenklichkeitsbescheinigung DURC.\nWartungsplan für regelmäßige und außerordentliche Instandhaltung.\nGarantieblatt für die Hauptkomponenten.\nKonformitätserklärung Elektro und Sanitär je nach Innenausbau.\nNr. 02 Module mit Sockelmaßen 993 x 293 cm.\nNr. 02 Module mit Dachmaßen 1000 x 300 cm.\nInnenhöhe 270 cm, Außenhöhe 661 cm.\nGesamt 60 m².\nWandpaneel und erstes Dach Stärke 100 mm – Polyurethan\n1 Außenseite GLATTES Blech BG RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nAußenlackierung des Wandpaneels RAL 6005 inklusive.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit Wandpaneel 100 mm – Polyurethan, belegt mit IDRO-V100-Holz 18 mm, belegt mit: modularem Vinylboden in der Farbe LIGHT GREY.\nZweites Dach für bessere Dämmung, maximale Dichtigkeit und Langlebigkeit, mit Rohrrahmenkonstruktion und kantgebogenen Blechen, einseitig geneigt, verkleidet mit:\nDachpaneel Stärke 30+35 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nUmlaufende Traufblende RAL 9002, komplett mit Fallrohren zur Bodenentwässerung.\nAbmessungen 1020 x 320 cm.\nAluminiumfenster und -türen RAL 9010. Thermisch getrennt.\nIsolierglas 3+3/15/3+3 mm transparent.\nNr. 1 einflügelige Halbglastür, mit Standardgriff und -schloss, Außenmaß 100 x 210h cm.\nNr. 4 zweiflügelige Schiebefenster, komplett mit Schiebe-Insektenschutz, Außenmaß 200 x 100h cm.\nIsolierglas 3+3/15/3+3 mm mattiert.\nNr. 2 einflügelige Halbglastüren, mit Standardgriff und -schloss, Außenmaß 100 x 210h cm.\nNr. 2 Kippfenster, komplett mit festem Insektenschutzgitter außen, Außenmaß 50 x 50h cm.\nNr. 3 Kippfenster, komplett mit festem Insektenschutzgitter außen, Außenmaß 100 x 50h cm.\nNr. 1 einflügelige Volltür, mit Standardgriff und -schloss, Außenmaß 80 x 210h cm.\nNr. 2 einflügelige Volltüren, mit Standardgriff und Frei/Besetzt-Schloss, Außenmaß 80 x 210h cm.\nNr. 2 Falttüren, Farbe Grau.\nKomplette Elektroinstallation mit Nachweis, mit sichtbarem weißem PVC-Rohr, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter Steckdosen.\nNr. 1 FI-Schalter Beleuchtung.\nNr. 1 FI-Schalter Klimaanlage.\nNr. 2 Deckenleuchten 45W-LED.\nNr. 3 Deckenleuchten NOVALUX 35W-LED.\nNr. 4 Deckenleuchten 19W-LED.\nNr. 5 Schalter.\nNr. 13 Steckdosen.\nNr. 2 Mono-SPLIT-Inverter-Klimaanlagen BTU 9000-HISENSE.\nNr. 1 Mono-SPLIT-Inverter-Klimaanlage BTU 12000-HISENSE.\nNr. 1 Kasten für den Außenanschluss.\nNr. 1 Photovoltaikanlage auf dem Dach, ausgelegt für 3 kW.\nNr. 1 Absturzsicherung auf dem Dach.\nInnenliegende Sanitärinstallation mit sichtbarem MEPLA-Rohr, bestehend aus:\nNr. 2 Keramik-WCs + Sitz + Aufputz-Spülkasten.\nNr. 2 Papierrollenhalter + Bürste.\nNr. 3 Keramikwaschbecken 60 cm + Standsäule + Mischbatterie.\nNr. 3 Spiegel.\nNr. 2 Keramik-Duschtassen 80 x 80 cm.\nNr. 2 Duschstangen + Brausekopf + Mischbatterie.\nNr. 2 Elektroboiler 60 Liter Warmwasser.\nNr. 1 einläufige Zugangstreppe (außen), komplett mit Podest, feuerverzinkt, mit Rohrrahmenkonstruktion und Gitterroststufen, komplett mit Geländer.",
    ],

    '11310' => [
        'name' => 'MONOBLOCK BÜRONUTZUNG',
        'short_description' => "Abmessungen am Sockel 593 x 243 cm. Abmessungen am Dach 600 x 250 cm.\nInnenhöhe 240 cm, Außenhöhe 272 cm.\nWandpaneel Stärke 40 mm – Polyurethan.\n1 Außenblech mikroprofiliert BG RAL 9002.\n1 Innenblech mikroprofiliert BG RAL 9002.\nDachpaneel Stärke 30+35 mm – Polyurethan.\n1 Außenblech Trapez 5 Rippen BG RAL 9002.\n1 Innenblech mikroprofiliert BG RAL 9002.\nHochbelastbarer Sockel mit verzinkter Rohrrahmenkonstruktion, verkleidet mit verzinkten Trapezblechen, belegt mit Idro-V100-Holz 18 mm, belegt mit Standard-PVC.\nAluminiumfenster und -türen RAL 9010.\nDurchwurfhemmendes Glas, transparent.\nNr. 1 zweiflügelige Ganzglas-Eingangstür, mit Standardgriff und -schloss, Außenmaß 220 x 240h cm.\nNr. 3 Festverglasungen, Außenmaß 170 x 240h cm.\nElektroinstallation nach CEE-Norm 200V, mit sichtbarem weißem PVC-Rohr, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter für Steckdosen.\nNr. 1 Schalter.\nNr. 1 Steckdose.\nNr. 2 Deckenleuchten 45W-LED.\nNr. 1 Mono-Split-Inverter-Klimaanlage BTU 9000-HISENSE. Nr. 1 Kasten für den Außenanschluss.",
    ],

    '11307' => [
        'name' => 'MONOBLOCK BÜRONUTZUNG 4×2',
        'short_description' => "Abmessungen am Sockel 393 x 193 cm.\nAbmessungen am Dach 400 x 200 cm.\nInnenhöhe 220 cm, Außenhöhe 242 cm.\nWandpaneel Stärke 40 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nDachpaneel Stärke 30 mm – Polyurethan\n1 Außenseite Trapezblech 5 Rippen RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit zementgebundener Platte 18 mm, belegt mit rutschfestem PVC.\nAluminiumfenster und -türen RAL 9010.\nNr. 1 einflügelige Volltür, mit Standardgriff und -schloss, Außenmaß 100 x 210h cm.\nNr. 1 Dreh-Kipp-Fenster, mit Isolierglas 4/9/4 transparent, komplett mit weißer Jalousie, Außenmaß 100 x 100h cm.\nStandard-Elektroinstallation nach CEE-Norm 220V, mit sichtbarem weißem PVC-Rohr, bestehend aus: Nr. 1\nSchaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 Schalter.\nNr. 1 Steckdose.\nNr. 1 Deckenleuchte 19W-LED.\nNr. 1 Außenkasten für den Anschluss der Elektroinstallation.\nOhne Transport und Montage.\nOhne Maurerarbeiten und Außenanschlüsse.\nOhne alles, was im Angebot nicht ausdrücklich aufgeführt ist.\nGemäß beiliegender technischer Zeichnung PG1329 R00.",
    ],

    '11308' => [
        'name' => 'MONOBLOCK VERKAUFSBÜRO 12×2,5',
        'short_description' => "Abmessungen am Sockel 1193 x 243 cm.\nAbmessungen am Dach 1200 x 250 cm.\nInnenhöhe 270 cm, Außenhöhe 316 cm.\nGesamt 30 m²\nWandpaneel Stärke 100 mm – Polyurethan\n1 Außenseite GLATTES Blech BG RAL 9002.\n1 Innenseite GLATTES Blech BG RAL 9002.\nDachpaneel Stärke 100+35 mm – Polyurethan\n1 Außenseite mikroprofiliertes Blech BG RAL 9002.\n1 Innenseite mikroprofiliertes Blech BG RAL 9002.\nHochbelastbarer Sockel mit Rohrrahmenkonstruktion, verkleidet mit Trapezblech, belegt mit Wandpaneel 100 mm – Polyurethan, belegt mit IDRO-V100-Holz 18 mm, belegt mit:\nmodularem Vinylboden in der Farbe LIGHT GREY.\nAluminiumfenster und -türen RAL 9010.\nIsolierglas 3+3/9/3+3, durchwurfhemmend, transparent.\nNr. 1 zweiflügelige Ganzglas-Eingangstür, mit Standardgriff und -schloss, Außenmaß 200 x 260h cm.\nNr. 3 feste Ganzglas-Fensterfronten, Außenmaß 200 x 260h cm.\nNr. 1 einflügelige Volltür, mit Standardgriff und -schloss, Außenmaß 80 x 210h cm.\nNr. 1 Aufsatztresor, komplett mit Klappe und Doppelbartschlüsseln, zur Rücknahme von Schlüsseln.\nUnterputz-Elektroinstallation, bestehend aus:\nNr. 1 Schaltschrank.\nNr. 1 Haupt-FI-Schalter.\nNr. 1 FI-Schalter Klimaanlage.\nNr. 2 Schalter.\nNr. 5 Steckdosen.\nNr. 3 RJ45-Dosen.\nNr. 4 Deckenleuchten NOVALUX 35W-LED.\nNr. 1 Mono-Split-Inverter-Klimaanlage BTU 18000-HISENSE.\nNr. 1 Außenkasten für den Anschluss.",
    ],

    '11419' => [
        'name' => 'Neues Haus – Reale I',
        'short_description' => "",
    ],

    '11422' => [
        'name' => 'Neues Haus – Campo III',
        'short_description' => "",
    ],

    '11420' => [
        'name' => 'Neues Haus – Reale II',
        'short_description' => "",
    ],

    '11421' => [
        'name' => 'Neues Haus – Reale III',
        'short_description' => "",
    ],

    '11423' => [
        'name' => 'Neues Haus – Tempesta II',
        'short_description' => "",
    ],

    '11366' => [
        'name' => 'Neues Haus 10 x 4 m – Premium',
        'short_description' => "",
    ],

    '11368' => [
        'name' => 'Neues Haus 10x4 m – II',
        'short_description' => "",
    ],

    '11726' => [
        'name' => 'Neues Haus 11,4 x 3,5 m',
        'short_description' => "",
    ],

    '11418' => [
        'name' => 'Neues Haus Samos 2 – 10×3,5 m',
        'short_description' => "",
    ],

    '11835' => [
        'name' => 'Neuer 20-Fuß-Container (Wir gewähren einen Rabatt beim Kauf mehrerer Einheiten)',
        'short_description' => "",
    ],

    '11829' => [
        'name' => 'Neuer 40-Fuß-High-Cube-Container mit Tribüne für 74 Plätze.',
        'short_description' => "",
    ],

    '11837' => [
        'name' => 'Neuer 20-Fuß-Seecontainer mit Seitenöffnung',
        'short_description' => "",
    ],

    '11238' => [
        'name' => 'NEUER 20-FUSS-KÜHLSEECONTAINER',
        'short_description' => "Reefer-Seecontainer 20′ / neuer Kühlcontainer\nLänge: 6 Meter, Außenhöhe: 2,591 und Innenhöhe: 2,261 (m)\nAggregate von Carrier oder Thermo King\nAußenmaße (LxBxH): 6058 x 2438 x 2591 mm.\nNeuer 20-Fuß-Kühlcontainer, eingesetzt für Anwendungen, bei denen Produkte auf konstanter Temperatur gehalten werden müssen.\nZur bestmöglichen Einhaltung der eingestellten Temperatur gedämmt; die Innenwände bestehen aus Edelstahl, der Boden aus T-Profil-Aluminium.\nDie von uns am häufigsten angebotenen Aggregatmarken sind Carrier und Thermo King, es können aber auch andere wie Star Cool oder Daikin geliefert werden.\nEr erfüllt in seiner Bauweise die Transportanforderungen nach CSC und TIR sowie die ISO-Normen.\nHäufigste Anwendungen: See- und intermodaler Transport verderblicher Waren, Gefrieren oder Kühllagerung von Fisch, Obst, Fleisch, Traubenlagerung in der Weinwirtschaft, Leder, Arzneimittel usw.\nDie korrekte Nutzung dieses Geräts besteht darin, die Einheit vorzukühlen und die Produkte erst nach Erreichen dieser Temperatur in den Container einzubringen.",
    ],

    '11235' => [
        'name' => 'NEUER 20-FUSS-BÜROCONTAINER',
        'short_description' => "Neuer 20-Fuß-Standardcontainer, mit 4.500 mm Verglasung in der Seitenwand. Elektroinstallation und Klimaanlage.",
    ],

    '11237' => [
        'name' => 'NEUER 40-FUSS-KÜHLCONTAINER',
        'short_description' => "Der neue 40-Fuß-Kühlcontainer, auch 12-m-Kühlcontainer genannt, wird häufig für die Lagerung frischer Produkte eingesetzt. Der 40′-Kühlcontainer wird über einen 380-V-Anschluss versorgt. Er ist mit Aggregaten ausgestattet, die in einem Temperaturbereich zwischen +25 °C und -25 °C arbeiten.\nAlle unsere Reefer-Kühlcontainer verfügen über ein CSC-Veritas-Zertifikat und einen gültigen PTI-Test (Prüfung des Kälteaggregats).\nWir arbeiten mit Aggregaten von Carrier, Thermoking, Daikin und Starcool.\nINNENMASSE\n-Länge: 11.583 mm\n-Breite: 2294 mm\n-Höhe: 2.569 mm\n-Innenhöhe (bis zur Ladegrenze): 2.469 mm\nAußenmaße\n– Länge: 12.192 mm\n– Breite: 2438 mm\n– Höhe: 2.896 mm\nTürmaße\n-Breite: 2292 mm\n-Höhe: 2.562 mm\nTemperatur: von -25 bis 25 °C\nKältemittel\n-R134A\n-R404\n-R442 auf Anfrage\nKonstruktion: CORTEN und EDELSTAHL\nBODEN\nT-PROFIL-ALUMINIUM\nSteuerung über Konsole von Daikin, Thermoking oder Carrier\nLagerung von bis zu 23 Europaletten\nZweiflügelige Türöffnung an einer der Stirnseiten\nTüren öffnen 270°\nZusatzinformationen\n– Maximale Zuladung: 29.350 kg\n– Leergewicht: 4.650 kg\n– Maximalgewicht: 34.000 kg\n– Nutzbares Innenvolumen (bis zur maximalen Belüftungslinie): 65,60 m3",
    ],

    '11674' => [
        'name' => 'Kleines Deluxe-Haus 19 Fuß x 20 Fuß – Stahlworks 2025',
        'short_description' => "",
    ],

    '10731' => [
        'name' => 'Container-Pool LC 15′',
        'short_description' => "Der Container-Pool LC 15′ bietet ein exklusives Erlebnis auf kleinem Raum. Dieses kompakte Modul aus widerstandsfähigem Stahl ist perfekt für alle, die einen modernen, funktionalen und leicht transportierbaren privaten Pool suchen.\nStapelbares Design (bis zu 3 Einheiten) für modulare Anlagen\nAusgezeichnete Tragfähigkeit und Dämmung, ideal für den Außenbereich\nIndividuell anpassbar für jeden Bedarf",
    ],

    '10705' => [
        'name' => 'Container-Pool 12 Meter',
        'short_description' => "Container-Pool 12 Meter – Industriedesign und Komfort ohne Bauarbeiten\nAufstellung ohne Genehmigung\nFassungsvermögen über 30.000 Liter\nUnterwasser-LED-Beleuchtung\nKomplettes Filtersystem\nIntegrierter oder externer Technikraum\n100 % individuell anpassbar",
    ],

    '10794' => [
        'name' => 'Container-Pool 20′ – Design, sofort einsatzbereit',
        'short_description' => "Ein Design-Container-Pool, komplett ausgestattet und sofort einsatzbereit, um Ihren Außenbereich in eine private Oase zu verwandeln. Kein Aushub, keine Wartezeit.\nVerstärkte Containerkonstruktion mit Verkleidung in Mosaikoptik\nUnterwasser-LEDs und Edelstahlleiter\nKindersicherung, WPC-Plattform, in 1 Tag einsatzbereit",
    ],

    '10792' => [
        'name' => 'Container-Pool 20′ – Sofort einsatzbereit, Stil garantiert',
        'short_description' => "Ein eleganter und widerstandsfähiger Container-Pool, der Ihren Garten in eine Wohlfühloase verwandelt. Dank der verstärkten Stahlkonstruktion und der luxuriösen Ausstattung ist er in wenigen Stunden einsatzbereit!\nMehrfarbige LEDs, integrierter Kühlschrank, Sonnenliegebereich\nEpoxidbeschichtung und Wärmedämmung\nHeizung und Filtration inklusive",
    ],

    '10704' => [
        'name' => 'Container-Pool Premium 6,2 x 2,5 m',
        'short_description' => "Container-Pool Premium 6,2 m – Modernes Design und Komfort für 4 Jahreszeiten\nSofort einsatzbereit, Wärmepumpe inklusive\nSchiebeabdeckung aus Plexiglas\nLED-Beleuchtung für nächtliches Baden\nBoden und Treppe aus rutschfestem WPC\nHochleistungs-Filtersystem\nReinigungsset inklusive",
    ],

    '10791' => [
        'name' => 'Pool ElitePool Sport & Spa',
        'short_description' => "Der ElitePool Sport & Spa ist der perfekte Modulpool für alle, die Sport, Entspannung und Design in einer einzigen kompakten und technischen Lösung vereinen möchten. Ausgestattet mit Gegenstromanlage, integriertem Panoramafenster und automatischer Abdeckung, bietet er ein Luxuserlebnis direkt in Ihrem Garten.\nBecken aus Polypropylen und Stahlkonstruktion\nLED-Beleuchtung und Wärmepumpe\nAutomatische Schiebeabdeckung mit Fernbedienung",
    ],

    '10793' => [
        'name' => 'Pool Sport & Spa aus Polypropylen',
        'short_description' => "Ein vollständiges Wellness- und Sporterlebnis im Garten mit dem Aufstellpool Sport & Spa aus Polypropylen. Trainieren, entspannen und Eleganz genießen.\nVerstellbares Jet-Swim-System für Gegenstromschwimmen\nWärmepumpe, LED und Filtration inklusive\nIn 24 Stunden einsatzbereit, ohne Bauarbeiten",
    ],

    '11367' => [
        'name' => 'König des Neuen Hauses – 1',
        'short_description' => "",
    ],

    '10948' => [
        'name' => '40-Fuß-High-Cube-Reefer',
        'short_description' => "Der größte Kühlcontainer der Reihe – mit Temperaturbereich von -25 °C bis +25 °C. Ideal für Kühllagerung und -transport. PTI-geprüft, mit T-Profil-Boden, Edelstahlverkleidung und 380-V-Anschluss. Zur Miete oder zum Kauf verfügbar.",
    ],

    '11233' => [
        'name' => 'SNACK – GUINGUETTE-CONTAINER',
        'short_description' => "Ausbau eines Imbisses, Food Trucks oder einer Taverne in einem Seecontainer.\nEnthält:\n1 Container erster Fahrt 20′ (6m x 2,45 x 2,60m)\nÖffnungen:\n1 Gasdruck-Klappe 2000 x 1200 mm\n1 Gasdruck-Klappe 3000 x 1200 mm\nTheken:\n1 Klapptheke 2000x300mm\n1 Klapptheke 3000x300mm\nELEKTROINSTALLATION:\n1 Verteiler mit 2 Reihen\n2 wasserdichte LED-Leuchten\n10 Servicesteckdosen 16A+T\n1 einfacher Hauptschalter\n1 Schnellanschluss\nInnendämmung:\nLebensmittelechtes Sandwichpaneel 40 mm Weiß\nBoden: grauer Gelcoat-Harzboden mit Bodenablauf\nLackierung: RAL 7016 auf dem gesamten Container.\nHolzverkleidung: Verkleidung aus Douglasienholz\nSanitärinstallation: Wasserzu- und -ablauf, Installation der Wasserversorgung.\nDunstabzug: Lieferung und Montage einer 2-m-Haube mit Deckenabsaugung.\nWarmwasser: Lieferung und Montage eines Durchlauferhitzers mit Speicher",
    ],

    '10702' => [
        'name' => 'Snack-BOX 20′ mit Sonderausstattung',
        'short_description' => "Snack-BOX 20′ – Professioneller Container für den Lebensmitteleinsatz\nWärmedämmung und lebensmittelechte Lackierung\nElektrisches Rolltor + Tür aus Corten-Stahl\nRutschfester Boden mit Ablauf\nZertifizierte Elektroinstallation\nPerfekt für Street Food, Messen und mobile Kioske",
    ],

    '10500' => [
        'name' => 'Tiny House Modular L15',
        'short_description' => "Tiny House Modular L15 auf neuem, bewohnbarem 20′-High-Cube-Seecontainer. Perfekt als Zweitwohnsitz, privates Büro oder nachhaltige Wohnlösung.\nNutzfläche: 11,2 m²\nDämmung U ≤ 0,16 W/m²K\nKomplette Küche und Bad\nKlimatisierung und LED inklusive\nSofort einsatzbereit, 100 % möbliert",
    ],

    '11234' => [
        'name' => 'TRIBÜNE / CONTAINER-TRIBÜNE',
        'short_description' => "Tribünen und Zuschauerränge für Sportveranstaltungen, Shows, Konzerte und Aufführungen aller Art.\nDie Tribüne kann 6 m x 2,45 m oder 12 m x 2,45 m messen.\nVollständig überdachte, transportable und wasserdichte Tribüne",
    ],

    '11158' => [
        'name' => 'Bürocontainer mit 18 m² und Sanitäranlagen',
        'short_description' => "Bürocontainer mit 18 m² und integrierten Sanitäranlagen, ideal für einen modernen und komfortablen Arbeitsplatz. Schnelle Aufstellung und 2 Jahre Garantie.",
    ],

    '10697' => [
        'name' => 'Maßgefertigtes 20-Fuß-Gartenbüro',
        'short_description' => "20-Fuß-Bürocontainer für den Garten – 100 % individuell\nKonstruktion aus Seecontainer\nGroße Verglasung + Falttüren\nHohe Wärme- und Schalldämmung\nModernes und maßgeschneidertes Design\nSchnelle Lieferung und Aufstellung",
    ],

    '10624' => [
        'name' => 'Mobiles Modulbüro – 4 Module von 6×9,72 m',
        'short_description' => "Vorgefertigtes mobiles Büro aus 4 Modulen, geräumig und gedämmt.\nStahlkonstruktion in Anthrazitgrau\nGedämmte Wände aus Steinwolle 50 mm\nDach aus Polyurethan 70 mm\n12 Fenster mit Rollläden + 4 vertikale Fenster\nWC + Waschbecken + ausgestatteter Nebenraum\nPVC-Boden auf wasserfester Platte\nVorinstallation für Spülmaschine\nBereit für Transport und Möblierung",
    ],

    '10499' => [
        'name' => 'Containereinheit 40′ High Cube – Neu',
        'short_description' => "Neue Containereinheit 40′ HC, perfekt für Lagerung oder modulare Projekte. CORTEN-Stahlkonstruktion, optimiertes Volumen, maximale Widerstandsfähigkeit.\nInnenmaße: 12,03 × 2,35 × 2,69 m\nNutzvolumen: 76,4 m³\nGewicht: ca. 3.940 kg\nRobuste und neue Konstruktion\nIdeal für industrielle oder wohnliche Nutzung",
    ],

    '11053' => [
        'name' => 'Auffangwannen-Container 8 Fuß',
        'short_description' => "Spezialcontainer 2,2 m x 2,4 m. Kompakter Container aus CORTEN-Stahl mit flüssigkeitsdichtem Stahlboden, abschließbarem Sicherheitskasten und Staplertaschen. Ideal für gefährliche oder umweltbelastende Stoffe. CSC-zertifiziert, stapelbar, erhältlich in RAL 5013 oder der gewünschten Farbe. Neu oder gebraucht – Kauf und Miete möglich.",
    ],

    '11172' => [
        'name' => 'VERKAUF CONTAINER 20 Fuß HC | Neu 20 Fuß HC | Neu',
        'short_description' => "INNENMASSE\nLänge: 5,89 m\nBreite: 2,35 m\nHöhe: 2,69 m\nAUSSENMASSE\nLänge: 6,05 m\nBreite: 2,43 m\nHöhe: 2,89 m",
    ],

    '11567' => [
        'name' => 'XXL Tiny House / Faltbares Luxus-Chalet – 40 Fuß / 12 Meter',
        'short_description' => "",
    ],

];