### Modulname ###
asy_seotitle

### Version ###
2.2

### Oxid-Version ###
4.6.0 - 4.10.x

### Author ###
Alpha-Sys
Fabian Kunkler
fabian.kunkler@alpha-sys.de
www.alpha-sys.de

### Beschreibung ###
Mit diesem Modul k�nnen Sie den SEO Title (meta tag title) f�r Artikel, Kategorien, Hersteller, Lieferanten und CMS-Inhalte 
manuell im Admin pflegen. Wird hier kein Wert gepflegt, so greift die Standard-Logik von Oxid und der normale Titel wird gezogen.

### Installation ###
Kopieren Sie alle Dateien aus dem Ordner "copy_this" in Ihr Shopverzeichnis.
Melden Sie sich im Admin an und navigieren zu Erweiterungen -> Module. W�hlen Sie den Eintrag SEO Title Basic
aus und klicken Sie auf aktivieren.
F�hren Sie die SQL-Befehle aus der Datei install.sql auf Ihrer Datenbank aus. Hierf�r k�nnen Sie entweder phpMyAdmin
oder ein anderes SQL-Tool verwenden. Alternativ navigieren Sie im Oxid Admin zu "Service" -> "Tools". F�gen Sie die SQL-Befehle
aus der Datei in das Textfeld "SQL ausf�hren" ein und klicken auf "Update starten".
Leeren Sie nun den tmp-Ordner Ihres Shops. Als letztes m�ssen Sie die Views updaten (unter "Service" -> "Tools" auf 
"Views jetzt updaten" klicken).
Wenn Sie nun im Admin auf Artikel, Kategorien, Hersteller, Lieferanten oder CMS-Seiten gehen, k�nnen Sie unten im
Hauptfenster den SEO-Title konfigurieren.