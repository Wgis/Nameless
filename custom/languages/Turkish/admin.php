<?php
/*
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr5
 *
 *  License: MIT
 *
 *  Turkish Language - Admin
 * 	Turkish translation by xOrcun
 */

$language = array(
	/*
	 *  Admin Control Panel
	 */
	// Login
	're-authenticate' => 'Yönetici Paneline Giriş',

	// Sidebar
	'dashboard' => 'Yönetim Paneli',
	'configuration' => 'Yapılandırma',
	'layout' => 'Düzenleme',
	'user_management' => 'Kullanıcıları Yönet',
	'admin_cp' => 'Yönetim Paneli',
	'administration' => 'Yönetim',
	'overview' => 'Genel Bakış',
	'core' => 'Menü',
	'integrations' => 'Entegrasyonlar',
	'minecraft' => 'Minecraft',
	'modules' => 'Modüller',
	'security' => 'Güvenlik',
	'sitemap' => 'Sitemap',
	'styles' => 'Stil',
	'users_and_groups' => 'Kullanıcılar ve Gruplar',

	// Overview
	'running_nameless_version' => 'NamelessMC Sürümü <strong>{x}</strong>', // Don't replace "{x}"
	'running_php_version' => 'PHP Sürümü <strong>{x}</strong>', // Don't replace "{x}"
	'statistics' => 'İstatistik',
	'registrations' => 'Kayıtlar',
	'topics' => 'Konular',
	'posts' => 'Mesajlar',
	'notices' => 'Bildirimler',
	'no_notices' => 'Şu an hiç bildiriminiz yok.',
	'email_errors_logged' => 'E-posta hataları günlüğe kaydedildi!',

	// Core
	'settings' => 'Ayarlar',
	'general_settings' => 'Genel Ayarlar',
	'sitename' => 'Site Adı',
	'default_language' => 'Varsayılan Dil',
	'default_language_help' => 'Kullanıcılar yüklü diller arasından seçim yapabilir.',
	'install_language' => 'Dil Yükle',
	'update_user_languages' => 'Kullanıcı Dillerini Güncelle',
	'update_user_languages_warning' => 'Bu, önceden seçmiş olsalar bile sitenizdeki tüm kullanıcıların dilini güncelleyecektir!',
	'updated_user_languages' => 'Kullanıcı dilleri güncellendi!.',
	'installed_languages' => 'Tüm yeni diller başarıyla yüklendi.',
	'default_timezone' => 'Varsayılan Saat Dilimi',
	'registration' => 'Kayıt',
	'enable_registration' => 'Kayıt etkinleştirilsin mi?',
	'verify_with_mcassoc' => 'MCAssoc ile kullanıcı hesapları doğrulansın mı?',
	'email_verification' => 'E-posta doğrulaması etkinleştirilsin mi?',
	'registration_settings_updated' => 'Kayıt ayarları başarıyla güncellendi.',
	'homepage_type' => 'Ana Sayfa Türü',
	'post_formatting_type' => 'Yazı Biçimlendirme Türü',
	'portal' => 'Portal',
	'private_profiles' => 'Özel Profil',
	'missing_sitename' => 'Lütfen 2 ila 64 karakter uzunluğunda bir site adı girin.',
	'missing_contact_address' => 'Lütfen 3 ila 255 karakter uzunluğunda bir iletişim e-posta adresi girin.',
	'use_friendly_urls' => 'Kolay URLler',
	'use_friendly_urls_help' => 'ÖNEMLİ: Sunucunuzun, bunun çalışması için mod_rewrite ve .htaccess dosyalarının kullanımına izin verecek şekilde yapılandırılması gerekir.',
	'config_not_writable' => '<strong>core/config.php</strong> dosyanız yazılabilir değil. Lütfen dosya izinlerini kontrol edin.',
	'settings_updated_successfully' => 'Genel ayarlar başarıyla güncellendi.',
	'social_media' => 'Sosyal Medya',
	'youtube_url' => 'Youtube URL',
	'twitter_url' => 'Twitter URL',
	'twitter_dark_theme' => 'Twitter karanlık teması kullanılsın mı?',
	'discord_id' => 'Discord Sunucu ID',
	'discord_widget_theme' => 'Discord Widget Teması',
	'discord_id_length' => 'Please ensure your Discord ID is 18 characters long.',
	'discord_id_numeric' => 'Please ensure your Discord ID is numeric (Numbers only).',
	'dark' => 'Koyu',
	'light' => 'Açık',
	'google_plus_url' => 'Google Plus URL',
	'facebook_url' => 'Facebook URL',
	'social_media_settings_updated' => 'Sosyal medya ayarları başarıyla güncellendi!',
	'successfully_updated' => 'Başarıyla güncellendi!',
    'debugging_and_maintenance' => 'Bakım Modu',
    'maintenance' => 'Bakım Modu',
    'debugging_settings_updated_successfully' => 'Bakım modu ayarları başarıyla güncellendi!',
    'enable_debug_mode' => 'Hata ayıklama modu etkinleştirilsin mi?',
	'force_https' => 'https yönlendirilsin mi?',
	'force_https_help' => 'Etkinleştirilirse, web sitenize gelen tüm istekler httpsye yönlendirilir. Bunun düzgün çalışması için etkin bir SSL sertifikanız olması gerekir.',
	'force_www' => 'www yönlendirilsin mi?',
	'contact_email_address' => 'İletişim E-posta Adresi',
	'emails' => 'E-postalar',
	'email_errors' => 'E-posta Hataları',
	'registration_email' => 'Kayıt E-postası',
	'contact_email' => 'İletişim E-postası',
	'forgot_password_email' => 'Şifremi Unuttum',
	'unknown' => 'Bilinmeyen',
	'delete_email_error' => 'Silme hatası',
	'confirm_email_error_deletion' => 'Bu hatayı silmek istediğinizden emin misiniz?',
	'viewing_email_error' => 'Görüntüleme hatası',
	'unable_to_write_email_config' => '<strong>core/email.php</core> dosyasına yazılamıyor. Lütfen dosya izinlerini kontrol edin.',
	'enable_mailer' => 'PHPMailer etkinleştirilsin mi?',
	'enable_mailer_help' => 'Varsayılan olarak e-postalar gönderilmiyorsa bunu etkinleştirin. PHPMailer kullanımı için Gmail veya SMTP sağlayıcısı gibi e-posta gönderebilecek bir hizmetinizin olması gerekir.',
	'outgoing_email' => 'Giden E-posta Adresi',
	'outgoing_email_info' => 'Bu, NamelessMC\'nin e-posta göndermek için kullanacağı e-posta adresidir.',
	'mailer_settings_info' => 'PHPMailer\'ı etkinleştirdiyseniz aşağıdaki alanlar gereklidir. Bu alanları doldurma hakkında daha fazla bilgi için <a href "https://github.com/NamelessMC/Nameless/wiki/Setting-up-SMTP-with-Nameless-(eg-Gmail-or-Outlook )" target =" _ blank "> iki</a>.',
	'host' => 'Host',
	'email_port' => 'Port',
	'email_password_hidden' => 'Güvenlik nedeniyle şifre gösterilmez.',
	'send_test_email' => 'Test E-Postası Gönder',
	'send_test_email_info' => 'Aşağıdaki düğme, e-posta adresinize <strong>{x}</strong> bir e-posta göndermeye çalışacaktır. E-posta gönderilirken atılan hatalar görüntülenir.', // Don't replace {x}
    'send' => 'Gönder',
	'test_email_error' => 'Test e-posta hatası:',
	'test_email_success' => 'Test e-postası başarıyla gönderildi!',
	'edit_email_messages' => 'Email Messages',
	'email_language_info' => 'Not seeing your language? Make sure \'emails.php\' is in your language directory and it is writable by your webserver.',
	'editing_language' => 'Editing Language',
	'email_preview_popup' => 'Preview',
	'email_preview_popup_message' => 'Click here to see a preview of the email.',
	'email_message_greeting' => 'Greeting',
	'email_message_thanks' => 'Thanks',
	'email_message_options' => 'Options',
	'email_message_subject' => 'Subject',
	'email_message_message' => 'Message',
	'terms_error' => 'Lütfen 100.000 karakterden uzun olmayan şartlar ve koşullar girin.',
	'privacy_policy_error' => 'Lütfen 100.000 karakterden uzun olmayan bir gizlilik politikası girin.',
	'terms_updated' => 'Gizlilik politikası ve şartlar ve koşullar başarıyla güncellendi.',
	'avatars' => 'Resim',
	'allow_custom_avatars' => 'Özel kullanıcı resimlerine izin verilsin mi?',
	'default_avatar' => 'Standart Resim',
	'custom_avatar' => 'Kişisel Resim',
	'minecraft_avatar' => 'Minecraft Kafa Resim',
	'minecraft_avatar_source' => 'Minecraft resim kaynağı',
	'built_in_avatars' => 'Yerleşik resim hizmeti',
	'minecraft_avatar_perspective' => 'Minecraft resim bakış açısı',
	'face' => 'Yüz',
	'head' => 'Kafa',
	'bust' => 'Büst',
	'select_default_avatar' => 'Yeni bir varsayılan resim seçin:',
	'no_avatars_available' => 'Kullanılabilir resim yok. Lütfen önce yeni bir resim yükleyin.',
	'avatar_settings_updated_successfully' => 'Resim ayarları başarıyla güncellendi.',
	'navigation' => 'Navigasyon',
	'navbar_order' => 'Menü Sıra',
	'navbar_order_instructions' => 'Gezinme çubuğundaki öğeleri sipariş etmek için her öğeye 0\'ın üzerinde bir sayı verebilirsiniz; 1 ilk öğe ve daha sonra gelen daha yüksek sayılardır.',
	'navbar_icon' => 'Menü Icon',
	'navbar_icon_instructions' => 'Ayrıca her gezinme çubuğuna bir simge ekleyebilirsiniz, örneğin <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow"> Yazı Tipi Başar </a>,<a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Anlamsal Kullanıcı Arayüzü</a>.',
	'navigation_settings_updated_successfully' => 'Gezinme ayarları başarıyla güncellendi.',
	'dropdown_items' => 'Açılır Öğeler',
	'enable_page_load_timer' => 'Sayfa yükleme zamanlayıcısı etkinleştirilsin mi?',
	'google_recaptcha' => 'Kayıt sırasında Google reCAPTCHA etkinleştirilsin mi?',
	'google_recaptcha_login' => 'Girişte Google reCAPTCHA etkinleştirilsin mi?',
	'captcha_type' => 'Captcha Type',
	'recaptcha_site_key' => 'reCAPTCHA Site Anahtarı',
	'recaptcha_secret_key' => 'reCAPTCHA Gizli(Secret) Anahtarı',
	'registration_disabled_message' => 'Kayıt devre dışı bırakıldı mesajı',
	'enable_nicknames_on_registration' => 'Kullanıcıları kaydetmek için takma adlar etkinleştirilsin mi?',
	'validation_promote_group' => 'Doğrulama sonrası grup',
	'validation_promote_group_info' => 'Bu, bir kullanıcının hesabını doğruladıktan sonra terfi edeceği gruptur.',
	'login_method' => 'Giriş Yöntemi',
	'privacy_and_terms' => 'Gizlilik ve Şartlar',

	// Reactions
	'icon' => 'Icon',
	'type' => 'Tür',
	'positive' => 'Pozitif',
	'neutral' => 'Nötr',
	'negative' => 'Negatif',
	'editing_reaction' => 'Reaksiyonu Düzenleme',
	'html' => 'HTML',
	'new_reaction' => '<i class="fa fa-plus-circle"></i> Yeni Reaksiyon',
	'creating_reaction' => 'Reaksiyon Oluşturma',
	'no_reactions' => 'Henüz tepki yok.',
	'reaction_created_successfully' => 'Reaksiyon başarıyla oluşturuldu.',
	'reaction_edited_successfully' => 'Reaksiyon başarıyla güncellendi.',
	'reaction_deleted_successfully' => 'Reaksiyon başarıyla silindi.',
	'name_required' => 'Bir ad gerekli',
	'html_required' => 'HTML gerekli',
	'type_required' => 'Bir tür gerekli',
	'name_maximum_16' => 'İsim 16 karakterden fazla olmamalıdır',
	'html_maximum_255' => 'HTML 255 karakterden fazla olmamalıdır',
	'confirm_delete_reaction' => 'Bu reaksiyonu silmek istediğinizden emin misiniz?',

	// Custom profile fields
	'custom_fields' => 'Özel Profil Alanları',
	'new_field' => '<i class="fa fa-plus-circle"></i> Yeni alan',
	'required' => 'Gereklidir.',
	'editable' => 'Düzenlenebilir.',
	'public' => 'Genel',
	'forum_posts' => 'Display on Forum',
	'text' => 'Metin',
	'textarea' => 'Metin alanı',
	'date' => 'Tarih',
	'creating_profile_field' => 'Profil Alanı Oluşturma',
	'editing_profile_field' => 'Profil Alanı Düzenleme',
	'field_name' => 'Alan Adı',
	'profile_field_required_help' => 'Gerekli alanlar kullanıcı tarafından doldurulmalıdır ve kayıt sırasında görünecektir.',
	'profile_field_public_help' => 'Ortak alanlar tüm kullanıcılara gösterilecektir, bu devre dışı bırakılmışsa değerleri yalnızca denetleyiciler görüntüleyebilir.',
	'profile_field_error' => 'Lütfen 2 ila 16 karakter uzunluğunda bir alan adı girin.',
	'description' => 'Açıklama',
	'display_field_on_forum' => 'Forumdaki alan gösterilsin mi?',
	'profile_field_forum_help' => 'Etkinleştirilirse, alan kullanıcı tarafından forum gönderilerinin yanında görüntülenir.',
	'profile_field_editable_help' => 'Etkinleştirilirse, kullanıcıların profil ayarlarında alanı düzenleme izni olur.',
	'no_custom_fields' => 'Henüz özel alan yok.',
	'profile_field_updated_successfully' => 'Profil alanı başarıyla güncellendi.',
	'profile_field_created_successfully' => 'Profil alanı başarıyla oluşturuldu.',
	'profile_field_deleted_successfully' => 'Profil alanı başarıyla silindi.',

	// Minecraft
	'enable_minecraft_integration' => 'Minecraft entegrasyonu etkinleştirilsin mi?',
	'mc_service_status' => 'Minecraft Hizmet Durumu',
	'service_query_error' => 'Hizmet durumu alınamadı.',
	'authme_integration' => 'AuthMe Entegrasyonu',
	'authme_integration_info' => 'AuthMe entegrasyonu etkinleştirildiğinde, kullanıcılar yalnızca oyun içi kayıt yaptırabilirler.',
	'enable_authme' => 'AuthMe entegrasyonu etkinleştirilsin mi?',
	'authme_db_address' => 'AuthMe Veritabanı Adresi',
	'authme_db_port' => 'AuthMe Veritabanı Port',
	'authme_db_name' => 'AuthMe Veritabanı Adı',
	'authme_db_user' => 'AuthMe Veritabanı Kullanıcı Adı',
	'authme_db_password' => 'AuthMe Veritabanı Şifre',
	'authme_db_password_hidden' => 'AuthMe veritabanı şifresi güvenlik nedeniyle gizlidir.',
	'authme_hash_algorithm' => 'AuthMe Karma Algoritması',
	'authme_db_table' => 'AuthMe Kullanıcı Tablosu',
	'enter_authme_db_details' => 'Lütfen geçerli veritabanı bilgilerini girin.',
	'authme_password_sync' => 'AuthMe şifresi senkronize edilsin mi?',
	'authme_password_sync_help' => 'Etkinleştirilirse, kullanıcının parolası her güncellendiğinde, parola web sitesinde de güncellenir.',
	'minecraft_servers' => 'Minecraft Sunucuları',
	'account_verification' => 'Minecraft Hesap Doğrulama',
	'server_banners' => 'Sunucu Banner',
	'query_errors' => 'Query Hataları',
	'add_server' => '<i class="fa fa-plus-circle"></i> Sunucu Ekle',
	'no_servers_defined' => 'Henüz hiçbir sunucu tanımlanmadı',
	'query_settings' => 'Query Ayarları',
	'default_server' => 'Varsayılan Sunucu',
	'no_default_server' => 'Varsayılan sunucu yok',
	'external_query' => 'Harici sorgu kullanılsın mı?',
	'external_query_help' => 'Varsayılan sunucu sorgusu çalışmıyorsa bu seçeneği etkinleştirin.',
	'adding_server' => 'Suncuu Ekleme',
	'server_name' => 'Sunucu Adı',
	'server_address' => 'Sunucu IP Adresi',
	'server_address_help' => 'Bu, bağlantı noktası olmadan sunucunuza bağlanmak için kullanılan IP adresi veya alan adıdır.',
	'server_port' => 'Sunucu Port',
    'parent_server' => 'Ana Sunucu',
    'parent_server_help' => 'Bir ana sunucu genellikle sunucunun bağlı olduğu Bungee örneğidir.',
    'no_parent_server' => 'Ana sunucu yok',
    'bungee_instance' => 'BungeeCord',
    'bungee_instance_help' => 'Sunucu bir BungeeCord örneği ise bu seçeneği belirleyin.',
    'server_query_information' => 'Web sitenizdeki çevrimiçi oyuncuların bir listesini görüntülemek için sunucunuzun <strong> sunucusunda sunucunuzda  \'enable-query\' seçeneğinin etkinleştirilmiş olması gerekir .properties </strong> dosya ',
    'enable_status_query' => 'Durum sorgusu etkinleştirilsin mi?',
    'status_query_help' => 'Bu etkinleştirilirse, durum sayfası bu sunucuyu çevrimiçi veya çevrimdışı olarak gösterir.',
    'show_ip_on_status_page' => 'Durum sayfasında IP gösterilsin mi?',
    'show_ip_on_status_page_info' => 'Bu etkinleştirilirse, kullanıcılar Durum sayfasını görüntülerken IP adresini görüntüleyebilir ve kopyalayabilir.',
    'enable_player_list' => 'Oyuncu listesi etkinleştirilsin mi?',
    'pre_1.7' => 'Sunucu sürümü 1.7\'den eski sürüm mü?',
    'player_list_help' => 'Bu etkinleştirilirse, durum sayfasında çevrimiçi oyuncuların bir listesi görüntülenir.',
    'server_query_port' => 'Sunucu Query Portu',
    'server_query_port_help' => 'Bu, aynı dosyadaki sorgu etkinleştirme seçeneğinin true olarak ayarlanması koşuluyla, sunucunuzun <strong> server.properties </strong> öğesindeki query.port seçeneğidir.',
    'server_name_required' => 'Lütfen sunucu adını girin',
    'server_name_minimum' => 'Lütfen sunucu adınızın en az 1 karakter olduğundan emin olun',
    'server_name_maximum' => 'Lütfen sunucu adınızın en fazla 20 karakter olduğundan emin olun',
    'server_address_required' => 'Lütfen sunucu adresini girin',
	'server_address_minimum' => 'Lütfen sunucu adresinizin en az 1 karakter olduğundan emin olun',
	'server_address_maximum' => 'Lütfen sunucu adresinizin maksimum 64 karakter olduğundan emin olun',
	'server_port_required' => 'Lütfen sunucu bağlantı noktasını girin',
	'server_port_minimum' => 'Lütfen sunucu bağlantı noktanızın en az 2 karakter olduğundan emin olun',
	'server_port_maximum' => 'Lütfen sunucu bağlantı noktanızın en fazla 5 karakter olduğundan emin olun',
	'server_parent_required' => 'Lütfen bir ana sunucu seçin',
	'query_port_maximum' => 'Lütfen sorgu portunuzun maksimum 5 karakter olduğundan emin olun',
	'server_created' => 'Sunucu başarıyla oluşturuldu.',
	'confirm_delete_server' => 'Bu sunucuyu silmek istediğinizden emin misiniz?',
	'server_updated' => 'Sunucu başarıyla güncellendi.',
	'editing_server' => 'Sunucuyu Düzenleme',
	'server_deleted' => 'Sunucu başarıyla silindi',
	'unable_to_delete_server' => 'Sunucu silinemedi.',
	'leave_port_empty_for_srv' => '25565 ise veya etki alanınız bir SRV kaydı kullanıyorsa bağlantı noktasını boş bırakabilirsiniz',
    'viewing_query_error' => 'Query Hata Görüntüle',
    'confirm_query_error_deletion' => 'Bu query hatasını silmek istediğinizden emin misiniz?',
    'no_query_errors' => 'Kayıtlı query hatası yok.',
    'new_banner' => '<i class="fa fa-plus-circle"></i> Banner Ekle',
	'purge_errors' => 'Hataları temizle',
	'confirm_purge_errors' => 'Tüm query hataları silmek istediğinizden emin misiniz?',
	'email_errors_purged_successfully' => 'E-posta hataları başarıyla temizlendi.',
	'error_deleted_successfully' => 'Hata başarıyla silindi.',
	'no_email_errors' => 'Günlüğe kaydedilmiş e-posta hatası yok.',
	'email_settings_updated_successfully' => 'E-posta ayarları başarıyla güncellendi. ',
	'content' => 'Içerik',
	'mcassoc_help' => 'mcassoc, kullanıcıların kayıtlı oldukları Minecraft hesabına sahip olduklarını doğrulamak için kullanılabilecek harici bir hizmettir. Bu özelliği kullanmak için, <a href="https://mcassoc.lukegb.com/" target="_blank"> burada </a> paylaşılan bir anahtara kaydolmanız gerekir.',
	'mcassoc_key' => 'mcassoc Shared Anahtarı',
	'mcassoc_instance' => 'mcassoc Instance Anahtarı',
	'mcassoc_instance_help' => 'Bir örnek anahtarı oluşturmak için <a href="#" onclick="generateInstance();">tıklayın</a>',
	'mcassoc_error' => 'Lütfen paylaşılan anahtarınızı doğru girdiğinizden ve bir örnek anahtarı doğru bir şekilde oluşturduğunuzdan emin olun.',
	'updated_mcassoc_successfully' => 'mcassoc ayarları başarıyla güncellendi.',
	'force_premium_accounts' => 'Premium Minecraft hesaplarını zorunlu mu?',
	'banner_background' => 'Banner Arka Plan',
	'query_interval' => 'Query aralığı (dakika olarak 5 ile 60 arasında olmalıdır)',
	'player_graphs' => 'Oyuncu Grafikleri',
	'player_count_cronjob_info' => 'Aşağıdaki komutla sunucularınızı {x} dakikada bir sorgulamak için bir cron işi ayarlayabilirsiniz:',
	'status_page' => 'Durum sayfası etkinleştirilsin mi?',
	'minecraft_settings_updated_successfully' => 'Ayarlar başarıyla güncellendi.',
	'server_id_x' => 'Server ID: {x}', // Don't replace {x}
	'server_information' => 'Sunucu Bilgi',
	'query_information' => 'Query Bilgi',
	'query_errors_purged_successfully' => 'Query hataları başarıyla temizlendi.',
	'query_error_deleted_successfully' => 'Query hata başarıyla silindi.',
	'banner_updated_successfully' => 'Banner başarıyla güncellendi. Değişikliklerinizin geçerli olması biraz zaman alabilir.',

	// Modules
	'modules_installed_successfully' => 'Tüm yeni modüller başarıyla kuruldu.',
	'enabled' => 'Aktif',
	'disabled' => 'De-Aktif',
	'enable' => 'Aktif',
	'disable' => 'De-Aktif',
	'module_enabled' => 'Modül aktif.',
	'module_disabled' => 'Modül de-aktif.',
	'author' => 'Yazar:',
	'author_x' => 'Yazar: {x}', // Don't replace {x}
	'module_outdated' => 'Bu modülün {x} Nameless sürümü için tasarlandığını tespit ettik, ancak {y} Nameless sürümü çalıştırıyorsunuz', // Don't replace "{x}" or "{y}"
	'find_modules' => 'Modül ara',
	'view_all_modules' => 'Tüm modülleri görüntüle',
	'unable_to_retrieve_modules' => 'Modüller alınamıyor',
	'module' => 'Modül',
	'unable_to_enable_module' => 'Uyumsuz modül etkinleştirilemedi.',

	// Styles
	'templates' => 'Tema',
	'panel_templates' => 'Panel Tema',
	'template_outdated' => 'Şablonunuzun {x} Nameless sürümü için tasarlandığını tespit ettik, ancak {y} Nameless sürümü çalıştırıyorsunuz', // Don't replace "{x}" or "{y}"
	'active' => 'Aktif',
	'deactivate' => 'De-Aktif',
	'activate' => 'Aktif',
	'warning_editing_default_template' => 'Uyarı! Varsayılan şablonu düzenlememeniz önerilir.',
	'images' => 'Resimler',
	'upload_new_image' => 'Yeni Resim Yükle',
	'reset_background' => 'Arka Planı Sıfırla',
	'install' => '<i class="fa fa-plus-circle"></i> Kur',
	'template_updated' => 'Tema başarıyla yüklendi!',
	'default' => 'Varsayılan',
	'make_default' => 'Varsayılan Yap',
	'default_template_set' => 'Varsayılan şablon başarıyla {x} olarak ayarlandı.', // Don't replace {x}
	'template_deactivated' => 'Şablon devre dışı bırakıldı!',
	'template_activated' => 'Şablon aktif edildi!',
	'permissions' => 'Yetkiler',
	'setting_perms_for_x' => '{x} şablonu için izinleri ayarlama', // Don't replace {x}
	'templates_installed_successfully' => 'Tüm yeni şablonlar başarıyla yüklendi.',
	'confirm_delete_template' => 'Bu şablonu silmek istediğinizden emin misiniz?',
	'delete' => 'Sil',
	'template_deleted_successfully' => 'Şablon başarıyla silindi!',
	'background_image_x' => 'Arka Plan resmi: <strong>{x}</strong>', // Don't replace {x}
	'banner_image_x' => 'Afiş(Banner) resmi: <strong>{x}</strong>', // Don't replace {x}
	'background_directory_not_writable' => '<strong> uploads/backgrounds </strong> dizini yazılamaz!',
	'template_banners_directory_not_writable' => '<strong> uploads/template_banners </strong> dizini yazılamaz!',
	'template_banner_reset_successfully' => 'Afiş(Banner) başarıyla sıfırlandı!',
	'template_banner_updated_successfully' => 'Afiş(Banner) başarıyla güncellendi!',
	'reset_banner' => 'Afişi(Banner) sıfırla',
	'find_templates' => 'Tema Ara',
	'view_all_templates' => 'Tüm temaları görüntüle',
	'unable_to_retrieve_templates' => 'Şablonlar alınamıyor',
	'template' => 'Tema',
	'stats' => 'İstatistikler',
	'downloads_x' => 'İndirme: {x}',
	'views_x' => 'Görüntüleme: {x}',
	'rating_x' => 'Değerlendirme: {x}',
	'editing_template_x' => '{x} isimli şablon düzenleniyor..', // Don't replace {x}
	'editing_template_file_in_template' => '{y} şablonundaki {x} dosyasını düzenleme', // Don't replace {x} or {y}
	'cant_write_to_template' => 'Şablon dosyasına yazılamıyor! Lütfen dosya izinlerini kontrol edin.',
	'unable_to_delete_template' => 'Şablon tamamen silinemedi. Lütfen dosya izinlerini kontrol edin.',
	'background_reset_successfully' => 'Arka plan başarıyla sıfırlandı!',
	'background_updated_successfully' => 'Arka plan başarıyla güncellendi!',
	'unable_to_enable_template' => 'Uyumsuz şablon etkinleştirilemedi.',

	// Users & groups
	'users' => 'Kullanıcılar',
	'groups' => 'Gruplar',
	'group' => 'Grup',
	'new_user' => '<i class="fa fa-plus-circle"></i> Yeni Kullanıcı',
	'creating_new_user' => 'Kullanıcı Oluştur',
	'registered' => 'Kayıt Tarihi',
	'user_created' => 'Kullanıcı kaydı başarıyla oluşturuldu!',
	'cant_delete_root_user' => 'Kök kullanıcı silinemiyor!',
	'cant_modify_root_user' => 'Bu kullanıcının grubunu değiştiremezsiniz!',
	'user_deleted' => 'Kullanıcı kaydı başarıyla silindi!',
	'confirm_user_deletion' => '<strong>{x}</strong> kullanıcısını silmek istediğinizden emin misiniz?', // Don't replace {x}
	'validate_user' => 'Kullanıcıyı doğrula',
	'update_uuid' => 'UUID\'yi Güncelle',
	'update_mc_name' => 'Minecraft Kullanıcı Adını Güncelle',
	'reset_password' => 'Şifreyi yenile',
	'punish_user' => 'Kullanıcıyı cezalandır',
	'delete_user' => 'Kullanıcıyı sil',
	'minecraft_uuid' => 'Minecraft UUID',
	'other_actions' => 'Diğer eylemler',
	'disable_avatar' => 'Avatarı Devre Dışı Bırak',
	'select_user_group' => 'Bir kullanıcının grubu seçmelisiniz.',
	'uuid_max_32' => 'UUID en fazla 32 karakter olmalıdır.',
	'title_max_64' => 'Kullanıcı başlığı en fazla 64 karakter olmalıdır.',
	'group_id' => 'Grup ID',
	'name' => 'İsim',
	'title' => 'Kullanıcı Adı',
	'new_group' => '<i class="fa fa-plus-circle"></i> Yeni Grup Oluştur',
	'group_name_required' => 'Lütfen bir grup adı girin.',
	'group_name_minimum' => 'Lütfen grup adınızın en az 2 karakter uzunluğunda olduğundan emin olun.',
	'group_name_maximum' => 'Lütfen grup adınızın en fazla 20 karakter uzunluğunda olduğundan emin olun.',
	'creating_group' => 'Yeni grup oluşturma',
	'group_html_maximum' => 'Lütfen grup HTML\'nizin 1024 karakterden uzun olmadığından emin olun.',
	'group_html' => 'Grup HTML',
	'group_html_lg' => 'Grup HTML Büyük',
	'group_username_colour' => 'Grup Kullanıcı Adı Rengi',
	'group_staff' => 'Grup bir personel grubu mu?',
	'delete_group' => 'Grubu sil',
	'confirm_group_deletion' => '{x} grubunu silmek istediğinizden emin misiniz?', // Don't replace {x}
	'group_not_exist' => 'Bu grup mevcut değil.',
	'secondary_groups' => 'İkincil Gruplar',
	'secondary_groups_info' => 'Kullanıcı bu gruplardan ek izinler alacaktır. Birden fazla grubu seçmek/seçimini kaldırmak için Ctrl\'ye tıklayın.',
	'unable_to_update_uuid' => 'UUID güncellenemedi.',
	'default_group' => 'Grup varsayılan grup mu (yeni kullanıcılar için)?',
	'user_id' => 'Kullanıcı ID',
	'uuid' => 'UUID',
	'group_order' => 'Grup Sırası',
	'group_created_successfully' => 'Grup başarıyla oluşturuldu!',
	'group_updated_successfully' => 'Grup başarıyla güncellendi!',
	'group_deleted_successfully' => 'Grup başarıyla silindi!',
	'unable_to_delete_group' => 'Varsayılan bir grup veya yönetim paneli\'ni görüntüleyebilen bir grup silinemiyor. Lütfen önce grup ayarlarını güncelleyin!',
	'can_view_staffcp' => 'Grup yönetim panelini görebilir mi?',
	'user' => 'Kullanıcı',
	'user_validated_successfully' => 'Kullanıcı başarıyla doğrulandı!',
	'user_updated_successfully' => 'Kullanıcı başarıyla güncellendi!',
	'editing_user_x' => '{x} Isimli Kullanıcı Düzenleniyor...', // Don't replace {x}
	'details' => 'Detaylar',

	// Permissions
	'select_all' => 'Hepsini seç',
	'deselect_all' => 'Tüm seçimleri kaldır',
	'background_image' => 'Arka plan görüntüsü',
	'can_edit_own_group' => 'Kendi grubunun izinlerini düzenleyebilir',
	'permissions_updated_successfully' => 'Yetkiler başarıyla güncellendi!',
	'cant_edit_this_group' => 'Bu grubun yetkilerini düzenleyemezsiniz!',

	// General Admin language
	'task_successful' => 'Görev başarılı.',
	'invalid_action' => 'Geçersiz eylem.',
	'enable_night_mode' => 'Koyu modu aktif et',
	'disable_night_mode' => 'Koyu modu de-aktif et',
	'view_site' => 'Site\'yi görüntüle',
	'signed_in_as_x' => '{x} olarak oturum açıldı', // Don't replace {x}
    'warning' => 'Uyarı',

    // Maintenance
    'maintenance_mode' => 'Bakım Modu',
    'maintenance_enabled' => 'Bakım modu şu anda etkin.',
    'enable_maintenance_mode' => 'Bakım modu etkinleştirilsin mi?',
    'maintenance_mode_message' => 'Bakım modu mesajı',
    'maintenance_message_max_1024' => 'Lütfen bakım mesajınızın maksimum 1024 karakter olduğundan emin olun.',

	// Security
	'acp_logins' => 'Yetkili Girişleri',
	'please_select_logs' => 'Lütfen görüntülemek için günlükleri seçin',
	'ip_address' => 'IP adresi',
	'template_changes' => 'Şablon Değişiklikleri',
	'file_changed' => 'Dosya Değişti',
	'all_logs' => 'Tüm günlükler',
	'action' => 'Eylem',
	'action_info' => 'Eylem Bilgisi',
    
	// Updates
	'update' => 'Güncelle',
	'current_version_x' => 'Şimdiki versiyonu: <strong>{x}</strong>', // Don't replace {x}
	'new_version_x' => 'Yeni versiyonu: <strong>{x}</strong>', // Don't replace {x}
	'new_update_available' => 'Yeni bir güncelleme var.',
	'new_urgent_update_available' => 'Yeni bir acil güncelleme var. Lütfen en kısa zamanda güncelleyin!',
	'up_to_date' => 'NamelessMC kurulumunuz güncel!',
	'urgent' => 'Bu güncelleme acil bir güncellemedir',
	'changelog' => 'Değişiklikler',
	'update_check_error' => 'Güncelleme kontrol edilirken bir hata oluştu:',
	'instructions' => 'Talimatlar',
	'download' => 'İndir',
	'install_confirm' => 'Lütfen önce paketi indirdiğinizden ve içerdiği dosyaları yüklediğinizden emin olun!',
	'check_again' => 'Tekrar kontrol et',

	// Widgets
	'widgets' => 'Widget\'lar',
	'widget_enabled' => 'Widget etkin.',
	'widget_disabled' => 'Widget devre dışı.',
	'widget_updated' => 'Widget güncellendi.',
	'editing_widget_x' => '{x} isimli widget düzenleniyor..', // Don't replace {x}
	'module_x' => 'Modül: {x}', // Don't replace {x}
	'widget_order' => 'Widget Sırası',

	// Online users widget
	'include_staff_in_user_widget' => 'Kullanıcı widget\'ı kullanıcı widget\'ına dahil edilsin mi?',
	'show_nickname_instead_of_username' => 'Kullanıcı adı yerine kullanıcının takma adı gösterilsin mi?',

	// Custom Pages
	'pages' => 'Sayfalar',
	'custom_pages' => 'Özel Sayfalar',
	'new_page' => '<i class="fa fa-plus-circle"></i> Yeni sayfa ekle',
	'no_custom_pages' => 'Henüz hiç sayfa oluşturulmadı.',
	'creating_new_page' => 'Sayfa Oluşturma',
	'page_title' => 'Sayfa Adı',
	'page_path' => 'Sayfa linki (örnek /ornek-sayfa, /iletisim)',
	'page_icon' => 'Sayfa Icon',
	'page_link_location' => 'Sayfa Bağlantısı Konumu',
	'page_link_navbar' => 'Menü',
	'page_link_footer' => 'Alt kısım',
	'page_link_more' => '"Diğer" Açılır menü',
	'page_link_none' => 'Link yok',
	'page_content' => 'Sayfa içeriği',
	'page_redirect' => 'Sayfa Yönlendirme?',
	'page_redirect_to' => 'Yönlendirme Bağlantısı (önceki http:// ile)',
	'unsafe_html' => 'Güvenli olmayan HTML\'ye izin verilsin mi? ',
	'unsafe_html_warning' => 'Bu seçeneğin etkinleştirilmesi, tehlikeli olabilecek JavaScript de dahil olmak üzere sayfada herhangi bir HTML\'nin kullanılabileceği anlamına gelir. Bunu yalnızca HTML\'nizin güvenli olduğundan eminseniz etkinleştirin.',
	'include_in_sitemap' => 'Site haritasına eklensin mi?',
	'sitemap_link' => 'Site harita linki:',
	'basic_page' => 'Basic page?',
	'page_permissions' => 'Sayfa yetkileri',
	'view_page' => 'Sayfa gözüksün mü?',
	'editing_page_x' => '{x} isimli sayfayı düzenleniyor..', // Don't replace {x}
    'unable_to_create_page' => 'Sayfa oluşturulamıyor: ',
	'page_title_required' => 'Bir sayfa başlığı gerekiyor.',
	'page_url_required' => 'Bir sayfa yolu gerekli.',
	'link_location_required' => 'Bir bağlantı konumu gerekli.',
	'page_title_minimum_2' => 'Sayfa başlığı en az 2 karakterden oluşmalıdır.',
	'page_url_minimum_2' => 'Sayfa yolu en az 2 karakterden oluşmalıdır.',
	'page_title_maximum_30' => 'Sayfa başlığı maksimum 30 karakterden oluşmalıdır.',
	'page_icon_maximum_64' => 'Sayfa simgesi en fazla 64 karakter olmalıdır.',
	'page_url_maximum_20' => 'Sayfa yolu en fazla 20 karakter olmalıdır.',
	'page_content_maximum_100000' => 'Sayfa içeriği en fazla 100000 karakter olmalıdır.',
	'page_redirect_link_maximum_512' => 'Sayfa yönlendirme bağlantısı maksimum 512 karakterden oluşmalıdır.',
	'confirm_delete_page' => 'Bu sayfayı silmek istediğinizden emin misiniz?',
	'page_created_successfully' => 'Sayfa başarıyla oluşturuldu!',
	'page_updated_successfully' => 'Sayfa başarıyla güncellendi!',
	'page_deleted_successfully' => 'Sayfa başarıyla silindi!',

	// API

	'api' => 'API',
	'enable_api' => 'API etkinleştirilsin mi?',
	'api_info' => 'API, eklentilerin ve diğer hizmetlerin gibi web sitenizle etkileşime girmesine izin verir resmi <a href = "https://namelessmc.com/resources/resource/5-namelessplugin/" target = "_blank" > NameLessMC Plugin </a>. ',
	'enable_legacy_api' => 'Eski API etkinleştirilsin mi?',
	'legacy_api_info' => 'Eski API, sürüm 2 web sitenizle çalışmak için eski Nameless sürüm 1 API\'sini kullanan eklentilere izin verir.',
	'confirm_api_regen' => 'API anahtarınızı yeniden oluşturmak istediğinizden emin misiniz?',
	'api_key' => 'API Anahtarı',
	'api_url' => 'API URL\'si',
	'copy' => 'Kopyala',
	'api_key_regenerated' => 'API anahtarı başarıyla yeniden oluşturuldu.',
	'api_registration_email' => 'API Kayıt E-postası',
	'show_registration_link' => 'Kayıt bağlantısını göster',
	'registration_link' => 'Kayıt Bağlantısı',
	'link_to_complete_registration' => 'Kaydı tamamlama bağlantısı: {x}', // Değiştirme {x}
	'api_verification' => 'API doğrulaması etkinleştirilsin mi?',
	'api_verification_info' => 'Etkinleştirilirse, hesaplar yalnızca API aracılığıyla, örneğin resmi Adeless eklentisi kullanılarak oyun içi ile doğrulanabilir. <strong> Bu seçenek e-posta doğrulamasını geçersiz kılar ve hesaplar otomatik olarak etkinleştirilir! </strong> <br /> Varsayılan grubunuzu sınırlı izinlere sahip olacak şekilde ayarlamanız ve ardından Yönetim Panelin\'deki doğrulama sonrası grubu güncellemeniz gerekir -> Yapılandırma -> Normal izinlere sahip tam üye grubuna Kayıt sekmesi. ',
	'enable_username_sync' => 'Kullanıcı adı senkronizasyonu etkinleştirilsin mi?',
	'enable_username_sync_info' => 'Etkinleştirilirse, web sitesi kullanıcı adları oyun içi kullanıcı adlarıyla eşleşecek şekilde güncellenir.',
	'api_settings_updated_successfully' => 'API ayarları başarıyla güncellendi.',
	'group_sync' => 'Grup Senkronizasyonu',
	'group_sync_info' => 'Oyun içi grupları değiştiğinde, API\'yı bir kullanıcının web sitesi grubunu otomatik olarak güncelleyecek şekilde yapılandırabilirsiniz. Oyun içi grup adını ve aşağıdaki ile senkronize edilmesi gereken web sitesi grubunu girmeniz yeterlidir. ',
	'ingame_group' => 'Oyun içi Grup Adı',
	'website_group' => 'Web Sitesi Grubu',
	'set_as_primary_group' => 'Birincil grup olarak ayarlansın mı?',
	'set_as_primary_group_info' => 'Etkinleştirilirse, kullanıcının birincil web sitesi grubu güncellenir. Devre dışı bırakılırsa, oyun içi grup kullanıcının web sitesi ikincil gruplarına eklenir. ',
	'ingame_group_maximum' => 'Lütfen grup adınızın en fazla 64 karakter uzunluğunda olduğundan emin olun.',
	'select_website_group' => 'Lütfen bir web sitesi grubu seçin.',
	'ingame_group_already_exists' => 'Bu oyun içi grup için zaten bir sıralama senkronizasyonu kuralı oluşturuldu.',
	'group_sync_rule_created_successfully' => 'Grup senkronizasyon kuralı başarıyla oluşturuldu.',
	'group_sync_rules_updated_successfully' => 'Grup senkronizasyon kuralları başarıyla güncellendi.',
	'group_sync_rule_deleted_successfully' => 'Grup senkronizasyon kuralı başarıyla silindi.',
	'available_rules' => 'Mevcut Kurallar',
	'new_rule' => 'Yeni Kural',
	
	// File uploads
	'drag_files_here' => 'Yüklemek için dosyaları buraya sürükleyin.',
	'invalid_file_type' => 'Geçersiz dosya türü!',
	'file_too_big' => 'File too big! Your file was {{filesize}} and the limit is {{maxFilesize}}', // Don't replace {{filesize}} or {{maxFilesize}}
	'allowed_proxies' => 'Allowed Proxies',
	'allowed_proxies_info' => 'Line separated list of allowed proxy IPs.',

	// Error logs
	'error_logs' => 'Hata Günlükleri',
	'notice_log' => 'Bildirim Günlükleri',
	'warning_log' => 'Uyarı Günlükleri',
	'custom_log' => 'Kişisel Günlükler',
	'other_log' => 'Diğer Günlükler',
	'fatal_log' => 'Fatal Günlükler',
	'log_file_not_found' => 'Günlük dosyası bulunamadı.',
	'log_purged_successfully' => 'Günlük başarıyla temizlendi.',

	// Hooks
	'hooks' => 'Webhooks',
	'hooks_info' => 'Webhooks allow external services to be notified when certain events happen. When the specified events happen.',
	'new_hook' => 'New Hook',
	'creating_new_hook' => 'Creating New Webhook',
	'editing_hook' => 'Editing Webhook',
	'delete_hook' => 'Are you sure you want to delete this hook?',
	'hook_url' => 'Webhook URL',
	'hook_type' => 'Webhook Type',
	'hook_events' => 'Events to trigger this webhook',
	'invalid_hook_url' => 'Invalid webhook url',
	'invalid_hook_events' => 'You must select at least 1 event',
	'register_hook_info' => 'User registration',
	'validate_hook_info' => 'User validation',
	'delete_hook_info' => 'User deletion',

	// Sitemap
	'unable_to_load_sitemap_file_x' => '{x} site haritası dosyası yüklenemedi', // Don't replace {x}
	'sitemap_generated' => 'Site haritası başarıyla oluşturuldu',
	'sitemap_not_writable' => '<strong>cache/sitemaps</strong> dizini yazılamaz.',
	'cache_not_writable' => '<strong>cache</strong> dizini yazılamaz.',
	'generate_sitemap' => 'Site Haritası Oluştur',
	'download_sitemap' => 'Site Haritasını İndir',
	'sitemap_not_generated_yet' => 'Henüz bir site haritası oluşturulmadı!',
	'sitemap_last_generated_x' => 'Site haritası en son oluşturuldu {x}', // Don't replace {x}

	// Page metadata
	'page_metadata' => 'Sayfa Meta Verileri',
	'metadata_page_x' => '{x} sayfası için meta verileri görüntüleme', // Don't replace {x}
	'keywords' => 'Anahtar kelimeler',
	'description_max_500' => 'Açıklama en fazla 500 karakter olmalıdır.',
	'page' => 'Sayfa',
	'metadata_updated_successfully' => 'Meta veriler başarıyla güncellendi.',

	// Dashboard
	'total_users' => 'Toplam Kullanıcılar',
	'total_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'recent_users' => 'Yeni Kullanıcılar',
	'recent_users_statistic_icon' => '<i class="fas fa-users"></i>',
	'average_players' => 'Ortalama kullanıcılar',
	'nameless_news' => 'NamelessMC Haberleri',
	'unable_to_retrieve_nameless_news' => 'Unable to retrieve the latest news',
	'confirm_leave_site' => 'You are about to leave this site! Are you sure you want to visit <strong id="leaveSiteURL">{x}</strong>?', // don't replace {x} and make sure it has the id leaveSiteURL
	'server_compatibility' => 'Sunucu Durumu',
	'issues' => 'Sorunlar',

	// Other
	'source' => 'Kaynak',
	'support' => 'Destek',
	'admin_dir_still_exists' => 'Uyarı! <strong> modules/Core/pages/admin</strong> dizini hala mevcut. Lütfen bu dizini kaldırın.',
	'mod_dir_still_exists' => 'Uyarı! <strong> modules/Core/pages/mod </strong> dizini hala var. Lütfen bu dizini kaldırın.',
	'forum_topic_reply_email' => 'Forum Topic Reply',

	// Announcements
	'announcements' => 'Announcements',
	'new_announcement' => 'New Announcement',
	'creating_announcement' => 'Creating Announcement',
	'editing_announcement' => 'Editing Announcement',
	'creating_announcement_success' => 'Announcement created successfully.',
	'editing_announcement_success' => 'Announcement updated successfully.',
	'creating_announcement_failure' => 'Announcement creation failed.',
	'editing_announcement_failure' => 'Announcement update failed.',
	'announcement_icon_instructions' => 'You can also add an icon to each announcement here, for example using <a href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank" rel="noopener nofollow">Font Awesome</a>, <a href="https://semantic-ui.com/elements/icon.html" target="_blank" rel="noopener nofollow">Semantic UI</a>.',
	'header' => 'Header',
	'message' => 'Message',
	'pages' => 'Pages',
	'text_colour' => 'Text Colour',
	'background_colour' => 'Background Colour',
	'closable' => 'Closable',
	'can_view_announcement' => 'Can view Announcement',
	'verify_delete_announcement' => 'Are you sure you want to delete this announcement?',
	'deleted_announcement_success' => 'Announcement deleted successfully.',
	'header_required' => 'Header is required.',
	'message_required' => 'Message is required',
	'background_colour_required' => 'Background Colour is required',
	'text_colour_required' => 'Text Colour is required',
);
