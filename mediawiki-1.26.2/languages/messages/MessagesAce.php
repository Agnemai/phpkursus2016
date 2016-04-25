<?php
/** Achinese (Acèh)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$fallback = 'id';

$namespaceNames = array(
	NS_MEDIA            => 'Alat',
	NS_SPECIAL          => 'Kusuih',
	NS_TALK             => 'Marit',
	NS_USER             => 'Ureuëng_Ngui',
	NS_USER_TALK        => 'Marit_Ureuëng_Ngui',
	NS_PROJECT_TALK     => 'Marit_$1',
	NS_FILE             => 'Beureukaih',
	NS_FILE_TALK        => 'Marit_Beureukaih',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Marit_MediaWiki',
	NS_TEMPLATE         => 'Seunaleuëk',
	NS_TEMPLATE_TALK    => 'Marit_Seunaleuëk',
	NS_HELP             => 'Beunantu',
	NS_HELP_TALK        => 'Marit_Beunantu',
	NS_CATEGORY         => 'Kawan',
	NS_CATEGORY_TALK    => 'Marit_Kawan',
);

$namespaceAliases = array(
	'Istimewa'              => NS_SPECIAL,
	'Bicara'                => NS_TALK,
	'Pembicaraan'           => NS_TALK,
	'Pengguna'              => NS_USER,
	'Bicara_Pengguna'       => NS_USER_TALK,
	'Ureuëng_Nguy'          => NS_USER,
	'Marit_Ureuëng_Nguy'    => NS_USER_TALK,
	'Pembicaraan_Pengguna'  => NS_USER_TALK,
	'Pembicaraan_$1'        => NS_PROJECT_TALK,
	'Berkas'                => NS_FILE,
	'Gambar'                => NS_FILE,
	'Pembicaraan_Berkas'    => NS_FILE_TALK,
	'Pembicaraan_Gambar'    => NS_FILE_TALK,
	'AlatWiki'              => NS_MEDIAWIKI,
	'Marit_AlatWiki'        => NS_MEDIAWIKI_TALK,
	'Pembicaraan_MediaWiki' => NS_MEDIAWIKI_TALK,
	'MediaWiki_Pembicaraan' => NS_MEDIAWIKI_TALK,
	'Templat'               => NS_TEMPLATE,
	'Pembicaraan_Templat'   => NS_TEMPLATE_TALK,
	'Templat_Pembicaraan'   => NS_TEMPLATE_TALK,
	'Pola'                  => NS_TEMPLATE,
	'Marit_Pola'            => NS_TEMPLATE_TALK,
	'Bantuan'               => NS_HELP,
	'Bantuan_Pembicaraan'   => NS_HELP_TALK,
	'Pembicaraan_Bantuan'   => NS_HELP_TALK,
	'Kategori'              => NS_CATEGORY,
	'Kategori_Pembicaraan'  => NS_CATEGORY_TALK,
	'Pembicaraan_Kategori'  => NS_CATEGORY_TALK,
	'Gambar_Pembicaraan'    => NS_FILE_TALK,
);

$magicWords = array(
	'redirect'                  => array( '0', '#PUPINAH', '#ALIH', '#REDIRECT' ),
);

$specialPageAliases = array(
	'Activeusers'               => array( 'UreuëngNguiUdép' ),
	'Allmessages'               => array( 'BanDumPeusan' ),
	'AllMyUploads'              => array( 'BanDumPeunasoëLôn', 'BanDumBeureukaihLôn' ),
	'Allpages'                  => array( 'DapeutaLaman' ),
	'Ancientpages'              => array( 'TeunuléhAwai' ),
	'Badtitle'                  => array( 'NanBrôk' ),
	'Blankpage'                 => array( 'LamanSoh' ),
	'Block'                     => array( 'TheunUreuëngNgui' ),
	'Booksources'               => array( 'NèKitab' ),
	'BrokenRedirects'           => array( 'PeuninahReuloh' ),
	'Categories'                => array( 'DapeutaKawan' ),
	'ChangePassword'            => array( 'GantoëLageuëmRahsia' ),
	'Confirmemail'              => array( 'PeunyoSurat-e' ),
	'Contributions'             => array( 'BeuneuriUreuëngNgui' ),
	'CreateAccount'             => array( 'PeugötNan' ),
	'Deadendpages'              => array( 'ÔnMaté' ),
	'DeletedContributions'      => array( 'BeuneuriNyangGeusampôh' ),
	'DoubleRedirects'           => array( 'PeuninahGanda' ),
	'Emailuser'                 => array( 'Surat-eUreuëngNgui' ),
	'Export'                    => array( 'Peuteubiët' ),
	'Fewestrevisions'           => array( 'NeuubahPaléngDit' ),
	'FileDuplicateSearch'       => array( 'MitaBeureukaihSaban' ),
	'Filepath'                  => array( 'NeuduëkBeureukaih' ),
	'Import'                    => array( 'Peutamöng' ),
	'Invalidateemail'           => array( 'PeubateuëPeusahSurat-e' ),
	'BlockList'                 => array( 'DapeutaTeuneuheun' ),
	'LinkSearch'                => array( 'MitaPeunawôt' ),
	'Listadmins'                => array( 'DapeutaUreuëngUrôh' ),
	'Listbots'                  => array( 'DapeutaBot' ),
	'Listfiles'                 => array( 'DapeutaBeureukaih' ),
	'Listgrouprights'           => array( 'DapeutaHakKawan' ),
	'Listredirects'             => array( 'DapeutaPeuninah' ),
	'Listusers'                 => array( 'DapeutaUreuëngNgui' ),
	'Lockdb'                    => array( 'GunciBasisData' ),
	'Lonelypages'               => array( 'On_hana_soe_po' ),
	'Longpages'                 => array( 'On_panyang' ),
	'MergeHistory'              => array( 'Riwayat_peusapat' ),
	'MIMEsearch'                => array( 'Mita_MIME' ),
	'Mostcategories'            => array( 'Kawan_paleng_le' ),
	'Mostimages'                => array( 'Beureukaih_nyang_paleng_le_geunguy' ),
	'Mostlinked'                => array( 'On_nyang_paleng_le_geunguy' ),
	'Mostlinkedcategories'      => array( 'Kawan_nyang_paleng_le_geunguy' ),
	'Mostlinkedtemplates'       => array( 'Templat_nyang_paleng_le_geunguy' ),
	'Mostrevisions'             => array( 'Neuubah_paleng_le' ),
	'Movepage'                  => array( 'Peupinah_on' ),
	'Mycontributions'           => array( 'Atra_lon_peugot' ),
	'Mypage'                    => array( 'On_lon' ),
	'Mytalk'                    => array( 'Peugah_haba_lon' ),
	'Newimages'                 => array( 'Beureukaih_baro' ),
	'Newpages'                  => array( 'On_baro' ),
	'Preferences'               => array( 'Geunalak' ),
	'Prefixindex'               => array( 'Dapeuta_neuaway' ),
	'Protectedpages'            => array( 'On_nyang_geupeulindong' ),
	'Protectedtitles'           => array( 'Nan_nyang_geupeulindong' ),
	'Randompage'                => array( 'On_beurangkari' ),
	'Randomredirect'            => array( 'Peuninah_beurangkari' ),
	'Recentchanges'             => array( 'Neuubah_baro' ),
	'Recentchangeslinked'       => array( 'Neuubah_meuhubong' ),
	'Revisiondelete'            => array( 'Sampoh_peugot_ulang' ),
	'Search'                    => array( 'Mita' ),
	'Shortpages'                => array( 'On_paneuek' ),
	'Specialpages'              => array( 'On_khusoih' ),
	'Statistics'                => array( 'Keunira' ),
	'Tags'                      => array( 'Tag' ),
	'Uncategorizedcategories'   => array( 'Kawan_hana_roh_lam_kawan' ),
	'Uncategorizedimages'       => array( 'Beureukaih_hana_roh_lam_kawan' ),
	'Uncategorizedpages'        => array( 'On_hana_roh_lam_kawan' ),
	'Uncategorizedtemplates'    => array( 'Templat_hana_roh_lam_kawan' ),
	'Undelete'                  => array( 'Peubateue_sampoh' ),
	'Unlockdb'                  => array( 'Peuhah_gunci_basis_data' ),
	'Unusedcategories'          => array( 'Kawan_soh' ),
	'Unusedimages'              => array( 'Beureukaih_hana_teunguy' ),
	'Unusedtemplates'           => array( 'Templat_hana_soe_nguy' ),
	'Unwatchedpages'            => array( 'On_hana_soe_kalon' ),
	'Upload'                    => array( 'Pasoe' ),
	'Userlogin'                 => array( 'Tamong_log' ),
	'Userlogout'                => array( 'Teubiet_log' ),
	'Userrights'                => array( 'Khut_(hak)_ureueng_nguy' ),
	'Version'                   => array( 'Seunalen' ),
	'Wantedcategories'          => array( 'Kawan_nyang_geuh\'eut' ),
	'Wantedfiles'               => array( 'Beureukaih_nyang_geuh\'eut' ),
	'Wantedpages'               => array( 'On_nyang_geuh\'eut' ),
	'Wantedtemplates'           => array( 'Templat_nyang_geuh\'eut' ),
	'Watchlist'                 => array( 'Dapeuta_kalon' ),
	'Whatlinkshere'             => array( 'Hubong_gisa' ),
	'Withoutinterwiki'          => array( 'Hana_interwiki' ),
);

