### Modulname ###
asy_seotitle

### Version ###
2.0

### Oxid-Version ###
4.6.0 - 4.9.x

### Author ###
Alpha-Sys
Fabian Kunkler
fabian.kunkler@alpha-sys.de
www.alpha-sys.de

### Beschreibung ###
Mit diesem Modul können Sie den SEO Title (meta tag title) für Artikel, Kategorien, Hersteller, Lieferanten und CSM-Inhalte 
manuell im Admin pflegen. Wird hier kein Wert gepflegt, so greift die Standard-Logik von Oxid und der normale Titel wird gezogen.

### Installation ###
Kopieren Sie alle Dateien aus dem Ordner "copy_this" in Ihr Shopverzeichnis.
Melden Sie sich im Admin an und navigieren zu Erweiterungen -> Module. Wählen Sie den Eintrag SEO Title Basic
aus und klicken Sie auf aktivieren.
Führen Sie die SQL-Befehle aus der Datei install.sql auf Ihrer Datenbank aus. Hierfür können Sie entweder phpMyAdmin
oder ein anderes SQL-Tool verwenden. Alternativ navigieren Sie im Oxid Admin zu "Service" -> "Tools". Fügen die SQL-Befehle
aus der Datei in das Textfeld "SQL ausführen" und klicken auf "Update starten".
Leeren Sie nun den tmp-Ordner Ihres Shops. Als letztes müssen Sie die Views updaten (unter "Service" -> "Tools" auf 
"Views jetzt updaten" klicken).
Wenn Sie nun im Admin auf Artikel, Kategorien, Hersteller, Leiferanten oder CMS-Seiten gehen, können Sie unten im
Hauptfenster den SEO-Title konfigurieren.