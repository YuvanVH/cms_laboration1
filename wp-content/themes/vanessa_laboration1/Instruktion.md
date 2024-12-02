# Laboration 1


Ni kommer att utgå ifrån en mapp design-filer med färdig HTML.
Er uppgift är att förvandla den statiska koden till ett fungerande WordPress-tema​.


Mål:
- Den HTML som er WP producerar ska vara så lik HTML-filerna som möjligt. - Detta gäller även textinnehåll och eventuella stavfel och användarnamn. Petig beställare. Kontrollera även så att sidan fungerar på en mindre skärm.
- Bloggsidan skall visa högst två inlägg per sida
- Ingen CSS eller Javascript ska skrivas eller redigeras.
- Befintliga CSS- och Javascript-filer ska laddas in med hjälp av wp_enqueue_scripts-kroken
- Temat ska inte innehålla några bildfiler
- Inga plugins förutom de som nämns i instruktionerna skall användas.
- Varje HTML-fil representerar en mall som ska implementeras i temat​.
- Navigationsmenyer ska kunna styras ifrån wp-admin Appearence->Menus.
- Info i footer och sidebar ska kunna styras ifrån wp-admin Appearence->Widgets.
- Sökfunktionen dirigerar användaren till sida med sökresultat.
- Kontaktformulärets funktionalitet är fritt att implementeras med valfritt plugin, denna sida behöver inte se ut exakt som i HTML-designfilen.


Tips:
- Skapa en helt ny wordpressinstallation igenom att ladda ned filerna ifrån wordpress.org samt skapa en databas
- Börja med att ta bort befintliga exempelteman och plugins
- Installera plugin Classic Editor - inga blocks används i denna labb.
- Skapa en tema-mapp namn_laboration1 och skapa de nödvändiga filerna i denna.
- Ni kommer att få info om de funktioner och kroknamn som räcker till för att lösa uppgiften.


Git:
- Skapa ett nytt repo: "cms_laboration1" och bjud in ian.hellgren@iths.se
- använd en .gitignore-fil som ser till att endast "wp-content"-mappen pushas till git.
- Pusha minst en gång i timmen. - ställ en klocka.


Inlämning görs genom att ladda upp "namn_labb1.zip" med:
1. "wp-content"-mappen
2. En "namn_laboration1.sql" anpassad till till url "//laboration1.local" - Export och eventuell search/replace av url kan göras med hjälp av plugin Migrate DB lite.
3. En namn_laboration1.videofiländelse med inspelning på högst 90 sekunder, där du pratar om sidan samt eventuella problem eller lösningar under Labben. Komprimera denna fil så att den blir så liten som möjligt, men fortfarande går att utläsa text ifrån.



Kursmål kopplade till Labb 1:
- Kunskaper
1. Traditionellt CMS (exempel WordPress och Drupal)
3. Webbutveckling med PHP inom ramen för CMS
4. Grundläggande koncept i PHP (till exempel variabler, parametrar, funktioner, stränghantering, villkorssatser, kontrollstrukturer och loopar)

- Färdigheter
6. Ladda ner och installera ett CMS med PHP (exempelvis Wordpress eller Drupal)
8. Använda och konfigurera mallar och teman utifrån en kunds behov i CMS
9. Skapa och hantera sidmallar, menyer och innehåll för webbplatser i CMS
10. Anpassa eller utöka funktionalitet i CMS (till exempel plugins och widgets)
11. Installera och sätta upp en webbserver och använda PHP för att modifiera standardbeteendet i ett CMS
12. Sätta upp en utvecklingsmiljö i PHP

- Kompetenser
13. Självständigt skapa eller vidareutveckla en webbplats i CMS
14. Självständigt administrera en webbplats i WordPress eller Drupal samt hantera användare
