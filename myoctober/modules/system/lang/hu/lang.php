<?php return [
  'installer' => [
    'app_config_section' => 'Weboldal konfigurálása',
    'license_section' => 'Licenc kulcs',
    'dependencies_section' => 'Függőségek telepítése',
    'locale_select_label' => 'Válasszon nyelvet',
    'locale_select_error' => 'A(z) :code nyelvi kód helytelen, kérjük módosítsa azt.',
    'app_url_label' => 'Honlap webcíme',
    'backend_uri_label' => 'Admin felület címe',
    'backend_uri_comment' => 'A weboldal védelme érdekében használjon egyéni címet az adminisztrációs panel eléréséhez.',
    'license_key_label' => 'Licenc kulcs',
    'license_key_comment' => 'A folytatáshoz adjon meg egy érvényes licenc kulcsot.',
    'license_thanks_comment' => 'Köszönjük, hogy az October CMS rendszert választotta!',
    'license_expired_comment' => 'A licenc kifizetetlen vagy lejárt. Kérjük, látogasson el az octobercms.com webhelyre, hogy licenset szerezzen.',
    'too_many_failures_label' => 'Túl sok sikertelen próbálkozás',
    'non_interactive_label' => 'Nem interaktív mód észlelve',
    'non_interactive_comment' => 'Ha ezt a hibát látja, használja ezeket a parancsokat.',
    'install_failed_label' => 'Sikertelen telepítés',
    'install_failed_comment' => 'Próbálja meg manuálisan futtatni ezeket a parancsokat.',
    'database_engine_label' => 'Adatbázis motor',
    'database_host_label' => 'Adatbázis hoszt',
    'database_host_comment' => 'Az adatbázis kapcsolat gépneve.',
    'database_port_label' => 'Adatbázis port',
    'database_port_comment' => '(Opcionális) Csatlakozáshoz szükséges port.',
    'database_name_label' => 'Adatbázis neve',
    'database_name_comment' => 'Adja meg a használni kívánt adatbázis nevét',
    'database_login_label' => 'Adatbázis belépés',
    'database_login_comment' => 'Felhasználó adatbázis jogosultságokkal.',
    'database_pass_label' => 'Adatbázis jelszó',
    'database_pass_comment' => 'Jelszó a megadott felhasználó számára.',
    'database_path_label' => 'Adatbázis útvonal',
    'database_path_comment' => 'A fájl alapú tároláshoz adjon meg egy elérési utat az weboldal gyökérkönyvtárához képest.',
    'migrate_database_comment' => 'Kérjük, migrálja az adatbázist a következő paranccsal',
    'visit_backend_comment' => 'Ezután nyissa meg az adminisztrációs felületet ezen a webcímen',
    'open_configurator_comment' => 'Nyissa meg a weboldalt a böngészőjében',
  ],
  'app' => [
    'name' => 'October CMS',
    'tagline' => 'Visszatérés az alapokhoz',
  ],
  'directory' => [
    'create_fail' => 'Nem hozható létre a könyvtár: :name',
  ],
  'file' => [
    'create_fail' => 'Nem hozható létre a fájl: :name',
  ],
  'combiner' => [],
  'resizer' => [],
  'system' => [
    'name' => 'Rendszer',
    'menu_label' => 'Rendszer',
    'categories' => [
      'cms' => 'Weboldal',
      'misc' => 'Egyebek',
      'logs' => 'Naplók',
      'mail' => 'Levelezés',
      'shop' => 'Bolt',
      'team' => 'Csapat',
      'users' => 'Felhasználók',
      'system' => 'Rendszer',
      'social' => 'Közösség',
      'backend' => 'Admin',
      'events' => 'Események',
      'customers' => 'Vevők',
      'my_settings' => 'Beállításaim',
      'notifications' => 'Értesítések',
    ],
  ],
  'theme' => [
    'label' => 'Téma',
    'unnamed' => 'Névtelen téma',
    'name' => [],
  ],
  'themes' => [
    'install' => 'Téma telepítése',
    'installed' => 'Telepítve',
    'no_themes' => 'A piactérről még nem lett telepítve téma.',
    'recommended' => 'Ajánlott',
    'remove_confirm' => 'Valóban törölni akarja a témát?',
  ],
  'plugin' => [
    'label' => 'Bővítmény',
    'unnamed' => 'Névtelen bővítmény',
    'name' => [],
    'by_author' => 'Fejlesztő: :name',
  ],
  'plugins' => [
    'install' => 'Bővítmények telepítése',
    'install_products' => 'Bővítmények telepítése',
    'installed' => 'Telepítve',
    'no_plugins' => 'A piactérről még nem lett telepítve bővítmény.',
    'recommended' => 'Ajánlott',
    'plugin_label' => 'Bővítmény',
    'bulk_actions_label' => 'Csoportos műveletek',
    'check_yes' => 'Igen',
    'check_no' => 'Nem',
    'unfrozen' => 'Frissítés engedélyezve',
    'freeze' => 'nem frissíthetőek',
    'unfreeze' => 'frissíthetőek',
    'refresh' => 'Frissítés',
    'remove' => 'Eltávolítás',
    'freeze_label' => 'Frissítések tiltása',
    'unfreeze_label' => 'Frissítések engedélyezése',
    'freeze_success' => 'A kijelölt bővítmények frissítése sikeresen tiltva lett.',
    'unfreeze_success' => 'A kijelölt bővítmények frissítése sikeresen engedélyezve lett.',
    'enable_success' => 'A kijelölt bővítmények sikeresen engedélyezve lettek.',
    'disable_success' => 'A kijelölt bővítmények sikeresen tiltva lettek.',
    'refresh_success' => 'A kijelölt bővítmények adatai sikeresen törölve lettek.',
    'remove_confirm' => 'Valóban törölni akarja a kijelölt bővítményeket?',
    'remove_success' => 'A bővítmények sikeresen eltávolításra kerültek.',
  ],
  'project' => [
    'attach' => 'Csatolás',
    'detach' => 'leválasztás',
    'none' => 'Nincs',
    'id' => [
      'missing' => 'Adjon meg egy projekt azonosítót.',
    ],
    'detach_confirm' => 'Biztosan le akarja választani a projektet?',
    'unbind_success' => 'A projekt leválasztása sikerült.',
  ],
  'settings' => [
    'search' => 'Keresés...',
  ],
  'mail' => [
    'smtp_ssl' => 'SSL kapcsolat szükséges',
  ],
  'mail_templates' => [
    'name_comment' => 'Erre a sablonra hivatkozásként használt egyedi név.',
    'test_send' => 'Tesztüzenet küldése',
    'test_confirm' => 'Teszt üzenet küldése a(z) ":email" címre. Folytatja?',
    'creating' => 'Sablon létrehozása...',
    'creating_layout' => 'Elrendezés létrehozása...',
    'saving' => 'Sablon mentése...',
    'saving_layout' => 'Elrendezés mentése...',
    'delete_confirm' => 'Valóban törölni akarja a sablont?',
    'delete_layout_confirm' => 'Valóban törölni akarja az elrendezést?',
    'deleting' => 'Sablon törlése...',
    'deleting_layout' => 'Elrendezés törlése...',
    'sending' => 'Üzenet küldése folyamatban...',
    'return' => 'Vissza a sablonokhoz',
  ],
  'mail_brand' => [
    'sample_template' => [
      'heading' => 'Címsor',
      'paragraph' => 'Ez egy bekezdés Lorem Ipsum szöveggel és hivatkozással. Cumque dicta <a>doloremque eaque</a>, enim error laboriosam pariatur possimus tenetur veritatis voluptas.',
      'table' => [
        'item' => 'Elem',
        'description' => 'Leírás',
        'price' => 'Ár',
        'centered' => 'középre igazítva',
        'right_aligned' => 'jobbra igazítva',
      ],
      'buttons' => [
        'primary' => 'Elsődleges gomb',
        'positive' => 'Pozitív gomb',
        'negative' => 'Negatív gomb',
      ],
      'panel' => 'Kiemelt szöveg',
      'more' => 'Még több szöveg',
      'promotion' => 'Kupon kód: OCTOBER',
      'subcopy' => 'Utóirat helye',
      'thanks' => 'Üdvözlettel',
    ],
    'fields' => [],
  ],
  'install' => [],
  'updates' => [
    'plugin_author' => 'Fejlesztő',
    'plugin_not_found' => 'A bővítmény nem található',
    'plugin_version_not_found' => 'Bővítmény verzió nem található',
    'theme_not_found' => 'A téma nem található',
    'core_build' => 'Új verzió: :build',
    'core_build_help' => 'Elérhető a legújabb hivatalos kiadás.',
    'changelog' => 'Kiadott verziók',
    'changelog_view_details' => 'Részletek',
    'themes' => 'Témák',
    'plugin_version_none' => 'Új bővítmény',
    'plugin_current_version' => 'Aktuális verzió',
    'theme_new_install' => 'Új téma telepítése.',
    'theme_extracting' => 'Téma kicsomagolása: :name',
    'update_label' => 'Honlap frissítése',
    'update_loading' => 'Frissítések betöltése...',
    'force_label' => 'Frissítés kényszerítése',
    'found' => [
      'label' => 'Új verzió elérhető!',
      'help' => 'Töltse le a legújabb frissítéseket.',
    ],
    'none' => [
      'label' => 'A weboldal naprakész',
      'help' => 'Gratulálunk! A weboldala naprakész.',
    ],
    'important_action' => [
      'empty' => 'Művelet kiválasztása',
      'confirm' => 'Frissítés elfogadása',
      'skip' => 'Frissítés kihagyása (csak most)',
      'ignore' => 'Frissítés kihagyása (mindig)',
    ],
    'important_action_required' => 'Művelet szükséges',
    'important_view_guide' => 'Frissítési útmutató megtekintése',
    'important_view_release_notes' => 'Kiadási megjegyzések megtekintése',
    'important_alert_text' => 'Néhány frissítés körültekintést igényel.',
    'details_title_plugin' => 'Bővítmény részletei',
    'details_title_theme' => 'Téma részletei',
    'details_view_homepage' => 'Weboldal',
    'details_changelog' => 'Kiadott verziók',
    'details_changelog_missing' => 'Nincs kiadási jegyzék.',
    'details_view_license' => 'Licenc megtekintése',
    'details_current_version' => 'Verzió',
    'details_author' => 'Fejlesztő',
  ],
  'market' => [
    'menu_description' => 'Bővítmények és témák kezelése és telepítése.',
    'content_loading' => 'Betöltés...',
  ],
  'server' => [
    'connect_error' => 'Hiba a kiszolgálóhoz való csatlakozáskor.',
    'response_not_found' => 'A frissítési kiszolgáló nem található.',
    'response_invalid' => 'Érvénytelen válasz érkezett a kiszolgálóról.',
    'response_empty' => 'Üres válasz érkezett a kiszolgálóról.',
    'file_error' => 'Nem sikerült továbbítania a kiszolgálónak a csomagot.',
    'file_corrupt' => 'A kiszolgálóról letöltött fájl sérült.',
  ],
  'behavior' => [
    'missing_property' => 'A(z) :class osztálynak kell definiálnia a(z) :behavior viselkedés által használt $:property tulajdonságot.',
  ],
  'config' => [
    'not_found' => 'Nem található a(z) :location számára definiált :file konfigurációs fájl.',
    'required' => 'A(z) :location helyen használt konfigurációnak meg kell adnia egy \':property\' értéket.',
  ],
  'zip' => [
    'extract_failed' => 'Nem tömöríthető ki a(z) \':file\' fájl.',
  ],
  'event_log' => [],
  'request_log' => [
    'empty_link' => 'Kiürítés',
    'empty_loading' => 'A kiürítés folyamatban...',
    'empty_success' => 'A kérelem napló kiürítése megtörtént.',
    'return_link' => 'Vissza a kérelem naplóhoz',
    'id' => 'Azonosító',
  ],
  'permissions' => [
    'name' => 'Rendszer',
    'manage_system_settings' => 'Beállítások kezelése',
    'manage_software_updates' => 'Frissítések és bővítmények kezelése',
    'access_logs' => 'Naplók megtekintése',
    'manage_mail_templates' => 'Levél sablonok kezelése',
    'manage_mail_settings' => 'Levelezési beállítások kezelése',
    'manage_other_administrators' => 'Adminisztrátorok kezelése',
  ],
  'log' => [],
  'media' => [
    'invalid_path' => 'Érvénytelen elérési útvonal: \':path\'',
    'folder_size_items' => 'fájl',
  ],
  'page' => [
    'custom_error' => [
      'label' => 'Oldal hiba',
      'help' => 'Sajnáljuk, de hiba történt, ezért az oldal nem megjeleníthető.',
    ],
    'invalid_token' => [
      'label' => 'Biztonsági kód érvényessége lejárt. Kérjük töltse be újra az oldalt.',
    ],
    'maintenance' => [
      'label' => 'Hamarosan visszatérünk!',
      'help' => 'A weboldal karbantartás alatt áll. Látogasson vissza később!',
      'message' => 'Üzenet:',
      'available_at' => 'Újrapróbálás:',
    ],
  ],
  'pagination' => [
    'previous' => 'Előző',
    'next' => 'Következő',
  ],
];