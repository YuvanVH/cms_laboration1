# Laboration 1

Ni kommer att utgå ifrån en mapp design-filer med färdig HTML. Er uppgift är att förvandla den statiska koden till ett fungerande WordPress-tema.

## Mål:
- Den HTML som er WP producerar ska vara så lik HTML-filerna som möjligt.

- Detta gäller även textinnehåll och eventuella stavfel och användarnamn. Petig beställare. Kontrollera även så att sidan fungerar på en mindre skärm.

- Bloggsidan skall visa högst två inlägg per sida

- Ingen CSS eller Javascript ska skrivas eller redigeras.

- Befintliga CSS - och Javascript-filer ska laddas in med hjälp av wp_enqueue_scripts-kroken

- Temat ska inte innehålla några bildfiler

- Inga plugins förutom de som nämns i instruktionerna skall användas.

- Varje HTML-fil representerar en mall som ska implementeras i temat.

- Navigationsmenyer ska kunna styras ifrån wp-admin Appearence-> Menus.

- Info i footer och sidebar ska kunna styras ifrån wp-admin Appearence->Widgets.

- Sökfunktionen dirigerar användaren till sida med sökresultat.

- Kontaktformulärets funktionalitet är fritt att implementeras med valfritt plugin, denna sida behöver inte se ut exakt som i HTML-designfilen.

Tips:

- [x]  - Skapa en helt ny wordpressinstallation igenom att ladda ned filerna ifrån wordpress.org samt skapa en databas
- [x]  - Börja med att ta bort befintliga exempelteman och plugins
- [x]  - Installera plugin Classic Editor
- [x]  - inga blocks används i denna labb.
- [x]  - Skapa en tema-mapp namn_laboration1 och skapa de nödvändiga filerna i denna.
- [ ]  - Ni kommer att få info om de funktioner och kroknamn som räcker till för att lösa uppgiften.


**Funktioner och Kroknamn (funktioner.md)**
    “Dessa funktioner bör räcka till för att lösa uppgiften. De funktioner som börjar med labb_1 är till för olika action/filter i functions.php. Kroknamnen är samma som slutet på funktionerna. “

    (notera att jag inte har checkat in allt på listan men som finns i koden)

    - [x]  add_action()
    - [ ]  add_filter()
    - [x]  add_theme_support()
    - [ ]  body_class()
    - [ ]  ~~date()~~ Kanske tas bort????
    - [x]  disable_block_widgets()
    - [x]  dynamic_sidebar()
    - [x]  function()
    - [ ]  get_bloginfo()
    - [x]  get_footer()
    - [x]  get_header()
    - [x]  get_search_form()
    - [ ]  get_sidebar()
    - [x]  get_template_directory_uri()
    - [ ]  get_the_author_posts_link()
    - [ ]  get_the_category_list()
    - [x]  get_the_date()
    - [x]  get_the_posts_pagination()
    - [x]  have_posts()
    - [ ]  home_url()
    - [ ]  ~~in_array()~~ Kanske tas bort????
    - [ ]  labb_1_nav_menu_css_class()
    - [x]  labb1_after_setup_theme()
    - [ ]  labb1_excerpt_length()
    - [ ]  labb1_excerpt_more()
    - [ ]  labb1_gratis_cleanup_head()
    - [ ]  labb1_navigation_markup_template()
    - [x]  labb1_widgets_init()
    - [ ]  labb1_wp_enqueue_scripts()
    - [x]  register_nav_menu()
    - [ ]  register_sidebar()
    - [ ]  remove_action()
    - [ ]  remove_filter()
    - [ ]  remove_theme_support()
    - [ ]  single_post_title()
    - [ ]  the_archive_title()
    - [x]  the_category()
    - [ ]  the_content()
    - [x]  the_date()
    - [x]  the_excerpt()
    - [x]  the_permalink()
    - [ ]  the_post_thumbnail_url()
    - [ ]  the_post()
    - [ ]  the_search_query()
    - [ ]  the_title()
    - [ ]  while()
    - [ ]  wp_body_open()
    - [ ]  wp_dequeue_style()
    - [x]  wp_enqueue_script()
    - [x]  wp_enqueue_style()
    - [x]  wp_footer()
    - [x]  wp_head()
    - [x]  wp_nav_menu()

Git:
- [x]  Skapa ett nytt repo: "cms_laboration1" och bjud in ian.hellgren@iths.se
- [x]  använd en .gitignore-fil som ser till att endast "wp-content"-mappen pushas till git.
- [x]  Pusha minst en gång i timmen. ställ en klocka.

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
- Ladda ner och installera ett CMS med PHP (exempelvis Wordpress eller Drupal)
- Använda och konfigurera mallar och teman utifrån en kunds behov i CMS
- Skapa och hantera sidmallar, menyer och innehåll för webbplatser i CMS
- Anpassa eller utöka funktionalitet i CMS (till exempel plugins och widgets)
- Installera och sätta upp en webbserver och använda PHP för att modifiera standardbeteendet i ett CMS
- Sätta upp en utvecklingsmiljö i PHP
- Kompetenser
- Självständigt skapa eller vidareutveckla en webbplats i CMS
- Självständigt administrera en webbplats i WordPress eller Drupal samt hantera användare

__Senaste 6/12__

Det jag inte hinner med:

- Navigationsmenyer ska kunna styras ifrån wp-admin Appearence-> Menus.

- Info i footer och sidebar ska kunna styras ifrån wp-admin Appearence-> Widgets.

- Temat ska inte innehålla några bildfiler

- Ingen CSS eller Javascript ska skrivas eller redigeras.

- Befintliga CSS och Javascript-filer ska laddas in med hjälp av wp_enqueue_scripts-kroken
