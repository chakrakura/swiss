<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/ad-groups' => [[['_route' => 'ad_groups', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::indexAction'], null, null, null, false, false, null]],
        '/ad-groups/list' => [[['_route' => 'ad_groups_list', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::listAction'], null, null, null, false, false, null]],
        '/ad-groups/edit' => [[['_route' => 'ad_right_edit', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::editAction'], null, null, null, false, false, null]],
        '/ad-groups/update_rights' => [[['_route' => 'ad_update_right', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::updateRightAction'], null, null, null, false, false, null]],
        '/ad-groups/ad-get-users' => [[['_route' => 'ad_get_users', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::getAdUsersAction'], null, null, null, false, false, null]],
        '/ad-groups/unlock' => [[['_route' => 'ad_rights_unlock', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::adUnlockAction'], null, null, null, false, false, null]],
        '/ad-groups/group-members' => [[['_route' => 'ad_group_members', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\AdGroupController::geAdGroupUsersList'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::indexAction'], null, null, null, false, false, null]],
        '/get-uman-status' => [[['_route' => 'check_uman_status', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::umanStatusAction'], null, null, null, false, false, null]],
        '/dashboard' => [[['_route' => 'dashboard', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::dashboardAction'], null, null, null, false, false, null]],
        '/dashboard/confirm-personal-data' => [[['_route' => 'dashboard_confirm_personnal_data', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::confirmPersonnalData'], null, null, null, false, false, null]],
        '/dashboard/confirm-support-message' => [[['_route' => 'dashboard_confirm_support_message', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::confirmSupportMessageData'], null, null, null, false, false, null]],
        '/switch_user/users_list' => [[['_route' => 'get_all_users_list', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\DefaultController::getUsersList'], null, null, null, false, false, null]],
        '/external/inside' => [[['_route' => 'inside', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\ExternalController::insideAction'], null, null, null, false, false, null]],
        '/external/crew-portal' => [[['_route' => 'crew_portal', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\ExternalController::crewPortalAction'], null, null, null, false, false, null]],
        '/login' => [[['_route' => '_swissinside_login', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/403' => [[['_route' => '_error_403', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\LoginController::eror403'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => '_swissinside_logout', '_controller' => 'App\\Easyjet\\SwissinsideCoreBundle\\Controller\\LoginController::logoutAction'], null, null, null, false, false, null]],
        '/working-sheet/actual-work/my-day' => [[['_route' => 'working_sheet_actual_work_my_day', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::myDayAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/actual-work' => [[['_route' => 'working_sheet_actual_work', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/actual-work/create' => [[['_route' => 'working_sheet_actual_work_create', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/working-sheet/actual-work/new' => [[['_route' => 'working_sheet_actual_work_new', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::newAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/actual-work/workingsheet/search' => [[['_route' => 'workingsheet_list_search', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::searchAction'], null, null, null, false, false, null]],
        '/working-sheet/actual-work/workingsheet/csv' => [[['_route' => 'workingsheet_generate_csv', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::getCsvAction'], null, null, null, false, false, null]],
        '/working-sheet/pattern/index' => [[['_route' => 'working_sheet_pattern', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/pattern/validation' => [[['_route' => 'working_sheet_pattern_validation', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::validationAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/pattern/create' => [[['_route' => 'working_sheet_pattern_create', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::createAction'], null, ['POST' => 0], null, false, false, null]],
        '/working-sheet/pattern/new' => [[['_route' => 'working_sheet_pattern_new', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::newAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet/reporting/reporting' => [[['_route' => 'working_sheet_reporting', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetReportingController::reportingAction'], null, null, null, false, false, null]],
        '/working-sheet/working-sheet/update' => [[['_route' => 'working_sheet_bulk_update', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUpdateHolidaysController::updateAction'], null, null, null, false, false, null]],
        '/working-sheet/working-sheet/update-holidays' => [[['_route' => 'working_sheet_holidays_update', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUpdateHolidaysController::updateHolidaysAction'], null, null, null, false, false, null]],
        '/working-sheet/users' => [[['_route' => 'working_sheet_users', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::indexAction'], null, ['GET' => 0], null, false, false, null]],
        '/working-sheet' => [[['_route' => 'working_sheet_users_create', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::createAction'], null, ['POST' => 0], null, true, false, null]],
        '/working-sheet/new' => [[['_route' => 'working_sheet_users_new', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::newAction'], null, ['GET' => 0], null, false, false, null]],
        '/EPAYSLIP/index' => [[['_route' => 'epayslip_index', '_controller' => 'App\\Easyjet\\EpayslipBundle\\Controller\\EpaySlipController::index'], null, null, null, false, false, null]],
        '/EPAYSLIP/search' => [[['_route' => 'epayslip_list_search', '_controller' => 'App\\Easyjet\\EpayslipBundle\\Controller\\EpaySlipController::searchAction'], null, null, null, false, false, null]],
        '/EWISH/admin/emails' => [[['_route' => 'ewish_admin_emails', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishAdminController::getEmailNotifications'], null, null, null, false, false, null]],
        '/EWISH/admin/emails/list' => [[['_route' => 'ewish_admin_emails_list', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishAdminController::emailsList'], null, null, null, false, false, null]],
        '/EWISH/admin/emails/add' => [[['_route' => 'ewish_admin_emails_add', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishAdminController::addEmail'], null, null, null, false, false, null]],
        '/EWISH/admin/emails/delete' => [[['_route' => 'ewish_admin_emails_delete', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishAdminController::deleteEmail'], null, null, null, false, false, null]],
        '/EWISH/index' => [[['_route' => 'ewish_index', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishCalendarController::index'], null, null, null, false, false, null]],
        '/EWISH/gdo/list' => [[['_route' => 'ewish_gdo_list', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishGdoController::index'], null, null, null, false, false, null]],
        '/EWISH/gdo/search' => [[['_route' => 'ewish_gdo_list_search', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishGdoController::searchAction'], null, null, null, false, false, null]],
        '/EWISH/gdo/add' => [[['_route' => 'ewish_gdo_add_request', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishGdoController::addGdoRequest'], null, null, null, false, false, null]],
        '/EWISH/gdo/update' => [[['_route' => 'ewish_gdo_update_request', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishGdoController::updateGDORequest'], null, null, null, false, false, null]],
        '/uman/admin/applications/all' => [[['_route' => 'uman_admin_applications_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationsAllAction'], null, null, null, false, false, null]],
        '/uman/admin/applications/all/search' => [[['_route' => 'uman_admin_applications_all_search', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationsAllSearchAction'], null, null, null, false, false, null]],
        '/uman/admin/applications/add' => [[['_route' => 'uman_admin_application_add', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationAddAction'], null, null, null, false, false, null]],
        '/uman/admin/applications/remove' => [[['_route' => 'uman_admin_application_remove', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationRemoveAction'], null, null, null, false, false, null]],
        '/uman/admin/applications/type/remove' => [[['_route' => 'uman_admin_application_type_remove', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationTypeUsersRemoveAction'], null, null, null, false, false, null]],
        '/uman/employee-users/all' => [[['_route' => 'uman_employee_users_show_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\EmployessController::showAllAction'], null, null, null, false, false, null]],
        '/uman/external-users/all' => [[['_route' => 'uman_external_users_show_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ExternalUsersController::showAllAction'], null, null, null, false, false, null]],
        '/uman/admin/rostering/all' => [[['_route' => 'uman_admin_rostering_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\RosteringTeamController::rosteringAllAction'], null, null, null, false, false, null]],
        '/uman/admin/rostering/all/search' => [[['_route' => 'uman_admin_rostering_all_search', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\RosteringTeamController::rosteringAllSearchAction'], null, null, null, false, false, null]],
        '/uman/admin/rostering/add' => [[['_route' => 'uman_admin_rostering_add_member', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\RosteringTeamController::modalRosteringAddAction'], null, null, null, false, false, null]],
        '/uman/uman/admin/rostering/remove' => [[['_route' => 'uman_admin_rostering_remove', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\RosteringTeamController::rosteringRemoveAction'], null, null, null, false, false, null]],
        '/uman/admin/stations/all' => [[['_route' => 'uman_admin_stations_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\StationsController::stationsAllAction'], null, null, null, false, false, null]],
        '/uman/admin/stations/all/search' => [[['_route' => 'uman_admin_stations_all_search', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\StationsController::stationsAllSearchAction'], null, null, null, false, false, null]],
        '/uman/admin/stations/add' => [[['_route' => 'uman_admin_station_add', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\StationsController::stationAddAction'], null, null, null, false, false, null]],
        '/uman/admin/stations/remove' => [[['_route' => 'uman_admin_station_remove', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\StationsController::stationRemoveAction'], null, null, null, false, false, null]],
        '/uman/third-party-users/all' => [[['_route' => 'uman_third_party_users_show_all', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ThirdPartyUsersController::showAllAction'], null, null, null, false, false, null]],
        '/uman/third-party-users/delete' => [[['_route' => 'uman_third_party_users_delete', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ThirdPartyUsersController::deleteAction'], null, null, null, false, false, null]],
        '/HRIS/cosmic_radiation_report/new' => [[['_route' => 'cosmic_radiation_report_new', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\CosmicRadiationReportController::newAction'], null, null, null, false, false, null]],
        '/HRIS/cosmic_radiation_report/new/errordownload' => [[['_route' => 'download_error_file', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\CosmicRadiationReportController::downloadErrorFileAction'], null, null, null, false, false, null]],
        '/HRIS/cosmic_radiation_report/new/xmldownload' => [[['_route' => 'download_xml_file', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\CosmicRadiationReportController::downloadXmlFileAction'], null, null, null, false, false, null]],
        '/HRIS/crew_user_report/index' => [[['_route' => 'crew_user_report_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\CrewUserReportController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/data-analyzer/index' => [[['_route' => 'data_analyzer_logs_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\DataAnalyzerController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/data-analyzer/search' => [[['_route' => 'data_analyzer_logs_search', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\DataAnalyzerController::searchAction'], null, null, null, false, false, null]],
        '/HRIS/data-analyzer/xls/download-last' => [[['_route' => 'data_analyzer_xls_last_dl', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\DataAnalyzerController::dlLastXsAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/logs/index' => [[['_route' => 'ejint096_logs_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096Controller::indexAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/logs/search' => [[['_route' => 'ejint096_logs_search', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096Controller::searchAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/demographic_data/index' => [[['_route' => 'ejint096_demographic_data_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096DemographicDataController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/demographic_data/csv' => [[['_route' => 'ejint096_demographic_data_csv', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096DemographicDataController::csvAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/demographic_data/new' => [[['_route' => 'ejint096_demographic_data_new', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096DemographicDataController::newAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/pay_elements/index' => [[['_route' => 'ejint096_pay_elements_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096PayElementsController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/pay_elements/csv' => [[['_route' => 'ejint096_pay_elements_csv', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096PayElementsController::csvAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT096/pay_elements/new' => [[['_route' => 'ejint096_pay_elements_new', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096PayElementsController::newAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT097/logs/index' => [[['_route' => 'ejint097_logs_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint097Controller::indexAction'], null, null, null, false, false, null]],
        '/HRIS/EJINT097/logs/search' => [[['_route' => 'ejint097_logs_search', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint097Controller::searchAction'], null, null, null, false, false, null]],
        '/HRIS/processing_calendar/index' => [[['_route' => 'processing_calendar_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\ProcessingCalendarController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/processing_calendar/new' => [[['_route' => 'processing_calendar_new', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\ProcessingCalendarController::newAction'], null, null, null, false, false, null]],
        '/HRIS/HRIS/users-import/logs/index' => [[['_route' => 'hris_users_import_logs_index', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\UsersImportController::indexAction'], null, null, null, false, false, null]],
        '/HRIS/HRIS/users-import/logs/search' => [[['_route' => 'hris_users_import_logs_search', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\UsersImportController::searchAction'], null, null, null, false, false, null]],
        '/HRIS/HRIS/users-import/new' => [[['_route' => 'hris_users_import_new', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\UsersImportController::importUsersAction'], null, null, null, false, false, null]],
        '/ELEAVE/admin/emails' => [[['_route' => 'eleave_admin_emails', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminEmailsController::getEmailNotifications'], null, null, null, false, false, null]],
        '/ELEAVE/admin/emails-list' => [[['_route' => 'eleave_admin_emails_list', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminEmailsController::emailsList'], null, null, null, false, false, null]],
        '/ELEAVE/admin/emails/add' => [[['_route' => 'eleave_admin_emails_add', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminEmailsController::addEmail'], null, null, null, false, false, null]],
        '/ELEAVE/admin/emails/delete' => [[['_route' => 'eleave_admin_emails_delete', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminEmailsController::deleteEmail'], null, null, null, false, false, null]],
        '/ELEAVE/admin/help-files' => [[['_route' => 'eleave_admin_help_files', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminHelpFilesController::indexAction'], null, null, null, false, false, null]],
        '/ELEAVE/admin/upload-help-files' => [[['_route' => 'eleave_admin_upload_help_files', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminHelpFilesController::uploadFiles'], null, null, null, false, false, null]],
        '/ELEAVE/admin/multi-leave-validation' => [[['_route' => 'eleave_admin_multi_leave_validation', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminMultiLeaveValidationController::multiLeaveValidationAction'], null, null, null, false, false, null]],
        '/ELEAVE/admin/refuses' => [[['_route' => 'eleave_admin_refuses', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRefusController::getRefuses'], null, null, null, false, false, null]],
        '/ELEAVE/admin/refuses-list' => [[['_route' => 'eleave_admin_refuses_list', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRefusController::refusesList'], null, null, null, false, false, null]],
        '/ELEAVE/admin/refuses/add' => [[['_route' => 'eleave_admin_refuses_add', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRefusController::manageRefuses'], null, null, null, false, false, null]],
        '/ELEAVE/admin/refuses/delete' => [[['_route' => 'eleave_admin_refuses_delete', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRefusController::deleteRefuse'], null, null, null, false, false, null]],
        '/ELEAVE/admin/remaining-days' => [[['_route' => 'eleave_admin_remaining_days', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRemainingDaysController::updateRemainingDaysAction'], null, null, null, false, false, null]],
        '/ELEAVE/admin/reports' => [[['_route' => 'eleave_admin_reports', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminReportsController::getRules'], null, null, null, false, false, null]],
        '/ELEAVE/admin/csv-report' => [[['_route' => 'eleave_admin_csv_report', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminReportsController::getCsvAction'], null, null, null, false, false, null]],
        '/ELEAVE/admin/search_user' => [[['_route' => 'eleave_admin_search_user', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminReportsController::getUsers'], null, null, null, false, false, null]],
        '/ELEAVE/admin/rules' => [[['_route' => 'eleave_admin_rules', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRulesController::getRules'], null, null, null, false, false, null]],
        '/ELEAVE/admin/rules-list' => [[['_route' => 'eleave_admin_rules_list', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRulesController::rulesList'], null, null, null, false, false, null]],
        '/ELEAVE/admin/rules/add' => [[['_route' => 'eleave_admin_rules_add', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRulesController::manageRules'], null, null, null, false, false, null]],
        '/ELEAVE/admin/rules/delete' => [[['_route' => 'eleave_admin_rules_delete', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRulesController::deleteRule'], null, null, null, false, false, null]],
        '/ELEAVE/office-wishes/index' => [[['_route' => 'eleave_office_wishes_index', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\OfficeWishesController::indexAction'], null, null, null, false, false, null]],
        '/ELEAVE/office-wishes/search' => [[['_route' => 'eleave_office_wishes_search', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\OfficeWishesController::searchAction'], null, null, null, false, false, null]],
        '/ELEAVE/wishes/index' => [[['_route' => 'eleave_wishes_index', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::indexAction'], null, null, null, false, false, null]],
        '/ELEAVE/wishes/search' => [[['_route' => 'eleave_wishes_search', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::searchAction'], null, null, null, false, false, null]],
        '/ELEAVE/wishes/add' => [[['_route' => 'eleave_wishes_add', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::wishesAdd'], null, null, null, false, false, null]],
        '/ELEAVE/wishes/delete' => [[['_route' => 'eleave_wishes_delete', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::wishesDelete'], null, null, null, false, false, null]],
        '/ELEAVE/choice/preference/check' => [[['_route' => 'eleave_choice_preference_check', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::choicePreferenceCheck'], null, null, null, false, false, null]],
        '/OTP/admin/compensation-grades' => [[['_route' => 'admin_otp_compensation_grades_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminCompensationGradesController::indexAction'], null, null, null, false, false, null]],
        '/OTP/admin/compensation-grades/new' => [[['_route' => 'admin_otp_compensation_grades_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminCompensationGradesController::newAction'], null, null, null, false, false, null]],
        '/OTP/admin/disruptions/index' => [[['_route' => 'admin_otp_disruptions_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminDisruptionsController::indexAction'], null, null, null, false, false, null]],
        '/OTP/admin/disruption/new' => [[['_route' => 'admin_otp_disruption_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminDisruptionsController::newAction'], null, null, null, false, false, null]],
        '/OTP/admin/logs' => [[['_route' => 'admin_otp_logs_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminExportLogController::indexAction'], null, null, null, false, false, null]],
        '/OTP/admin/factorisations/index' => [[['_route' => 'admin_otp_factorisations_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminFactorisationsController::indexAction'], null, null, null, false, false, null]],
        '/OTP/admin/factorisation/new' => [[['_route' => 'admin_otp_factorisation_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminFactorisationsController::newAction'], null, null, null, false, false, null]],
        '/OTP/admin/batches/index' => [[['_route' => 'admin_otp_batches_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminImportBatchController::batchesIndexAction'], null, null, null, false, false, null]],
        '/OTP/admin/sector-pay/index' => [[['_route' => 'admin_otp_sector_pay_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminSectorPayController::indexAction'], null, null, null, false, false, null]],
        '/OTP/admin/sector-pay/new' => [[['_route' => 'admin_otp_sector_pay_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminSectorPayController::newAction'], null, null, null, false, false, null]],
        '/OTP/otp-disruption-adj/new' => [[['_route' => 'otp_disruption_adj_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\DisruptionClaimsRequestController::newAction'], null, null, null, false, false, null]],
        '/OTP/index' => [[['_route' => 'otp_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpController::indexAction'], null, null, null, false, false, null]],
        '/OTP/otp/search' => [[['_route' => 'otp_search', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpController::searchAction'], null, null, null, false, false, null]],
        '/OTP/export' => [[['_route' => 'otp_export_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpExportController::indexAction'], null, null, null, false, false, null]],
        '/OTP/requests/index' => [[['_route' => 'otp_request_index', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpRequestController::indexAction'], null, null, null, false, false, null]],
        '/OTP/requests/search' => [[['_route' => 'otp_request_search', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpRequestController::searchAction'], null, null, null, false, false, null]],
        '/OTP/otp-sect-adj/new' => [[['_route' => 'otp_sect_adj_new', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\SectAdjClaimsRequestController::newAction'], null, null, null, false, false, null]],
        '/FDTR/admin/logs/index' => [[['_route' => 'fdtr_logs_index', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::logsAction'], null, null, null, false, false, null]],
        '/FDTR/admin/logs/search' => [[['_route' => 'fdtr_logs_search', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::searchAction'], null, null, null, false, false, null]],
        '/FDTR/admin/notifications' => [[['_route' => 'fdtr_admin_notifications', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::notificationsAction'], null, null, null, false, false, null]],
        '/FDTR/admin/rights' => [[['_route' => 'fdtr_admin_rights_index', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::rightsAction'], null, null, null, false, false, null]],
        '/FDTR/admin/admin-search' => [[['_route' => 'fdtr_admin_list_search', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::adminSearchAction'], null, null, null, false, false, null]],
        '/FDTR/admin/allow-dtime' => [[['_route' => 'fdtr_allow_dtime', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::allowDtimeAction'], null, null, null, true, false, null]],
        '/FDTR/index' => [[['_route' => 'fdtr_list_index', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::index'], null, null, null, false, false, null]],
        '/FDTR/fdtr/search' => [[['_route' => 'fdtr_list_search', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::searchAction'], null, null, null, false, false, null]],
        '/FDTR/fdtr/csv' => [[['_route' => 'fdtr_generate_csv', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::getCsvAction'], null, null, null, false, false, null]],
        '/FDTR/fdtr/no-external-duty' => [[['_route' => 'no_external_duty', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::noExternalDutyAction'], null, null, null, true, false, null]],
        '/SFSU/admin/max-file-size-upload' => [[['_route' => 'sfsu_admin_max_file_size', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\AdminController::maxFileSizeUploadAction'], null, null, null, false, false, null]],
        '/SFSU/files/new' => [[['_route' => 'sfsu_files_new', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::newAction'], null, null, null, false, false, null]],
        '/SFSU/files/search' => [[['_route' => 'sfsu_files_search', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::searchAction'], null, null, null, false, false, null]],
        '/SFSU/files/index' => [[['_route' => 'sfsu_files_index', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::indexAction'], null, null, null, false, false, null]],
        '/SFSU/files/send' => [[['_route' => 'sfsu_files_send', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::sendAction'], null, null, null, false, false, null]],
        '/SFSU/files/show' => [[['_route' => 'sfsu_files_multiple_show', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::showMultipleAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/working\\-sheet/(?'
                    .'|actual\\-work/([^/]++)(?'
                        .'|(*:212)'
                        .'|/edit(*:225)'
                        .'|(*:233)'
                    .')'
                    .'|pattern/([^/]++)(?'
                        .'|(*:261)'
                        .'|/(?'
                            .'|edit(*:277)'
                            .'|validate(?'
                                .'|(*:296)'
                            .')'
                        .')'
                        .'|(*:306)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:331)'
                        .'|(*:339)'
                    .')'
                .')'
                .'|/E(?'
                    .'|PAYSLIP/(?'
                        .'|cc\\-report/([^/]++)(*:384)'
                        .'|payslip\\-report/([^/]++)(*:416)'
                    .')'
                    .'|WISH/(?'
                        .'|admin/emails/edit/([^/]++)(*:459)'
                        .'|gdo/([^/]++)/([^/]++)(*:488)'
                    .')'
                    .'|LEAVE/(?'
                        .'|admin/(?'
                            .'|emails/edit(?:/([^/]++))?(*:540)'
                            .'|r(?'
                                .'|efuses/edit(?:/([^/]++))?(*:577)'
                                .'|ules/edit(?:/([^/]++))?(*:608)'
                            .')'
                        .')'
                        .'|dl\\-availibility/([^/]++)(*:643)'
                        .'|holiday\\-guide/([^/]++)(*:674)'
                        .'|office\\-wishes/edit/([^/]++)(*:710)'
                        .'|wishes/edit/([^/]++)(*:738)'
                    .')'
                .')'
                .'|/uman/(?'
                    .'|admin/(?'
                        .'|applications/(?'
                            .'|edit/([^/]++)(*:795)'
                            .'|type/([^/]++)/([^/]++)(*:825)'
                        .')'
                        .'|rostering/rostering\\-admin/assoc\\-([^/]++)/((?:yes|no))(*:889)'
                        .'|station/edit(?:/([^/]++))?(*:923)'
                    .')'
                    .'|e(?'
                        .'|mployee\\-users/edit/([^/]++)(*:964)'
                        .'|xternal\\-users/edit/([^/]++)(*:1000)'
                    .')'
                    .'|third\\-party\\-users/edit/([^/]++)(*:1043)'
                .')'
                .'|/HRIS/(?'
                    .'|data\\-analyzer/(?'
                        .'|view/([^/]++)(*:1093)'
                        .'|xls/download/([^/]++)(*:1123)'
                    .')'
                    .'|EJINT09(?'
                        .'|6/(?'
                            .'|logs/(?'
                                .'|view/([^/]++)(*:1169)'
                                .'|pay\\-elements/download/([^/]++)(*:1209)'
                            .')'
                            .'|demographic_data/(?'
                                .'|edit/([^/]++)(*:1252)'
                                .'|delete/([^/]++)(*:1276)'
                            .')'
                            .'|pay_elements/(?'
                                .'|edit/([^/]++)(*:1315)'
                                .'|delete/([^/]++)(*:1339)'
                            .')'
                        .')'
                        .'|7/logs/view/([^/]++)(*:1370)'
                    .')'
                    .'|processing_calendar/(?'
                        .'|edit/([^/]++)(*:1416)'
                        .'|delete/([^/]++)(*:1440)'
                    .')'
                    .'|HRIS/users\\-import/logs/view/([^/]++)(*:1487)'
                .')'
                .'|/OTP/(?'
                    .'|admin/(?'
                        .'|compensation\\-grades/(?'
                            .'|edit/([^/]++)(*:1551)'
                            .'|delete/([^/]++)(*:1575)'
                        .')'
                        .'|disruption/(?'
                            .'|edit/([^/]++)(*:1612)'
                            .'|delete/([^/]++)(*:1636)'
                        .')'
                        .'|logs/(?'
                            .'|view/([^/]++)(*:1667)'
                            .'|dl/([^/]++)(*:1687)'
                        .')'
                        .'|factorisation/(?'
                            .'|edit/([^/]++)(*:1727)'
                            .'|delete/([^/]++)(*:1751)'
                        .')'
                        .'|batch(?'
                            .'|es/drop/([^/]++)(*:1785)'
                            .'|/publish/([^/]++)/([^/]++)(*:1820)'
                        .')'
                        .'|sector\\-pay/(?'
                            .'|edit/([^/]++)(*:1858)'
                            .'|delete/([^/]++)(*:1882)'
                        .')'
                    .')'
                    .'|otp\\-(?'
                        .'|disruption\\-adj/edit/([^/]++)(*:1930)'
                        .'|sect\\-adj(?'
                            .'|/(?'
                                .'|delete/([^/]++)(*:1970)'
                                .'|edit/([^/]++)(*:1992)'
                            .')'
                            .'|s/delete/([^/]++)(*:2019)'
                        .')'
                    .')'
                    .'|sector/edit/([^/]++)(*:2050)'
                    .'|disruption/edit/([^/]++)(*:2083)'
                .')'
                .'|/FDTR/(?'
                    .'|admin/logs/view/([^/]++)(*:2126)'
                    .'|fdtr/(?'
                        .'|external\\-duty/([^/]++)(?'
                            .'|(*:2169)'
                            .'|/attachment(*:2189)'
                        .')'
                        .'|view/([^/]++)(*:2212)'
                    .')'
                .')'
                .'|/SFSU/(?'
                    .'|files/(?'
                        .'|show/([^/]++)(*:2254)'
                        .'|([^/]++)/(?'
                            .'|download(?:/([^/]++))?(*:2297)'
                            .'|([^/]++)/([^/]++)/confirm_key(*:2335)'
                        .')'
                        .'|delete/([^/]++)(*:2360)'
                    .')'
                    .'|external\\-users/files/([^/]++)(*:2400)'
                    .'|internal\\-users/files/([^/]++)(*:2439)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        212 => [[['_route' => 'working_sheet_actual_work_show', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        225 => [[['_route' => 'working_sheet_actual_work_edit', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::editAction'], ['id'], ['GET' => 0], null, false, false, null]],
        233 => [
            [['_route' => 'working_sheet_actual_work_update', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::updateAction'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'working_sheet_actual_work_delete', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetActualWorkController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        261 => [[['_route' => 'working_sheet_pattern_show', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::showAction'], ['id'], ['GET' => 0], null, false, true, null]],
        277 => [[['_route' => 'working_sheet_pattern_edit', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::editAction'], ['id'], ['GET' => 0], null, false, false, null]],
        296 => [
            [['_route' => 'working_sheet_pattern_validate', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::validateAction'], ['id'], ['GET' => 0], null, false, false, null],
            [['_route' => 'working_sheet_pattern_valdidate_save', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::validateUpdateAction'], ['id'], ['POST' => 0], null, false, false, null],
        ],
        306 => [
            [['_route' => 'working_sheet_pattern_update', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::updateAction'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'working_sheet_pattern_delete', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetPatternController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        331 => [[['_route' => 'working_sheet_users_edit', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::editAction'], ['id'], ['GET' => 0], null, false, false, null]],
        339 => [
            [['_route' => 'working_sheet_users_update', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::updateAction'], ['id'], ['POST' => 0], null, false, true, null],
            [['_route' => 'working_sheet_users_delete', '_controller' => 'App\\Easyjet\\WorkingSheetBundle\\Controller\\WorkingSheetUsersController::deleteAction'], ['id'], ['DELETE' => 0], null, false, true, null],
        ],
        384 => [[['_route' => 'epayslip_cc_report', '_controller' => 'App\\Easyjet\\EpayslipBundle\\Controller\\EpaySlipController::getCcReportPdf'], ['cCReportId'], null, null, false, true, null]],
        416 => [[['_route' => 'epayslip_report', '_controller' => 'App\\Easyjet\\EpayslipBundle\\Controller\\EpaySlipController::getEpayslipReportPdf'], ['paySlipId'], null, null, false, true, null]],
        459 => [[['_route' => 'ewish_admin_emails_edit', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishAdminController::editEmail'], ['email'], null, null, false, true, null]],
        488 => [[['_route' => 'ewish_gdo_do_request', '_controller' => 'App\\Easyjet\\EwishBundle\\Controller\\EwishGdoController::editDoRequest'], ['type', 'id'], null, null, false, true, null]],
        540 => [[['_route' => 'eleave_admin_emails_edit', 'id' => null, '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminEmailsController::addEmail'], ['id'], null, null, false, true, null]],
        577 => [[['_route' => 'eleave_admin_refuses_edit', 'id' => null, '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRefusController::manageRefuses'], ['id'], null, null, false, true, null]],
        608 => [[['_route' => 'eleave_admin_rules_edit', 'id' => null, '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\AdminRulesController::manageRules'], ['id'], null, null, false, true, null]],
        643 => [[['_route' => 'eleave_dl_availibility', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\DlAvailibilityController::indexAction'], ['type'], null, null, false, true, null]],
        674 => [[['_route' => 'eleave_holiday_guides', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\HolidayGuideController::indexAction'], ['type'], null, null, false, true, null]],
        710 => [[['_route' => 'eleave_office_wishes_edit', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\OfficeWishesController::wishesEdit'], ['id'], null, null, false, true, null]],
        738 => [[['_route' => 'eleave_wishes_edit', '_controller' => 'App\\Easyjet\\EleaveBundle\\Controller\\WishesController::wishesEdit'], ['id'], null, null, false, true, null]],
        795 => [[['_route' => 'uman_admin_application_edit', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationEditAction'], ['id'], null, null, false, true, null]],
        825 => [[['_route' => 'uman_admin_add_application_type_users', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ApplicationsController::applicationTypeUsersAddAction'], ['type', 'id'], null, null, false, true, null]],
        889 => [[['_route' => 'set_rostering_admin', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\RosteringTeamController::setRosteringAdminAction'], ['assoc', 'isAdmin'], null, null, false, true, null]],
        923 => [[['_route' => 'uman_admin_station_edit', 'id' => null, '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\StationsController::stationAddAction'], ['id'], null, null, false, true, null]],
        964 => [[['_route' => 'uman_employee_users_edit', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\EmployessController::editAction'], ['user'], null, null, false, true, null]],
        1000 => [[['_route' => 'uman_external_users_edit', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ExternalUsersController::editAction'], ['user'], null, null, false, true, null]],
        1043 => [[['_route' => 'uman_third_party_users_edit', '_controller' => 'App\\Easyjet\\UmanBundle\\Controller\\ThirdPartyUsersController::editAction'], ['user'], null, null, false, true, null]],
        1093 => [[['_route' => 'data_analyzer_view', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\DataAnalyzerController::dataCheckViewAction'], ['dataCheck'], null, null, false, true, null]],
        1123 => [[['_route' => 'data_analyzer_xls_dl', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\DataAnalyzerController::dlXsAction'], ['dataCheck'], null, null, false, true, null]],
        1169 => [[['_route' => 'ejint096_logs_view', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096Controller::logViewAction'], ['log'], null, null, false, true, null]],
        1209 => [[['_route' => 'ejint096_logs_pay_elements_dl', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096Controller::dlPayElementsAction'], ['log'], null, null, false, true, null]],
        1252 => [[['_route' => 'ejint096_demographic_data_edit', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096DemographicDataController::editAction'], ['id'], null, null, false, true, null]],
        1276 => [[['_route' => 'ejint096_demographic_data_delete', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096DemographicDataController::deleteAction'], ['id'], null, null, false, true, null]],
        1315 => [[['_route' => 'ejint096_pay_elements_edit', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096PayElementsController::editAction'], ['id'], null, null, false, true, null]],
        1339 => [[['_route' => 'ejint096_pay_elements_delete', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint096PayElementsController::deleteAction'], ['id'], null, null, false, true, null]],
        1370 => [[['_route' => 'ejint097_logs_view', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\Ejint097Controller::logViewAction'], ['log'], null, null, false, true, null]],
        1416 => [[['_route' => 'processing_calendar_edit', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\ProcessingCalendarController::editAction'], ['calendar'], null, null, false, true, null]],
        1440 => [[['_route' => 'processing_calendar_del', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\ProcessingCalendarController::dropAction'], ['calendar'], null, null, false, true, null]],
        1487 => [[['_route' => 'hris_users_import_logs_view', '_controller' => 'App\\Easyjet\\HrisBundle\\Controller\\UsersImportController::logViewAction'], ['log'], null, null, false, true, null]],
        1551 => [[['_route' => 'admin_otp_compensation_grades_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminCompensationGradesController::editAction'], ['compensationGrade'], null, null, false, true, null]],
        1575 => [[['_route' => 'admin_otp_compensation_grades_del', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminCompensationGradesController::deleteAction'], ['compensationGrade'], null, null, false, true, null]],
        1612 => [[['_route' => 'admin_otp_disruption_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminDisruptionsController::editAction'], ['disruption'], null, null, false, true, null]],
        1636 => [[['_route' => 'admin_otp_disruption_del', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminDisruptionsController::deleteAction'], ['disruption'], null, null, false, true, null]],
        1667 => [[['_route' => 'admin_otp_logs_view', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminExportLogController::viewAction'], ['log'], null, null, false, true, null]],
        1687 => [[['_route' => 'admin_otp_logs_dl', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminExportLogController::downloadAction'], ['log'], null, null, false, true, null]],
        1727 => [[['_route' => 'admin_otp_factorisation_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminFactorisationsController::editAction'], ['factorisation'], null, null, false, true, null]],
        1751 => [[['_route' => 'admin_otp_factorisation_del', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminFactorisationsController::deleteAction'], ['factorisation'], null, null, false, true, null]],
        1785 => [[['_route' => 'admin_otp_batch_drop', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminImportBatchController::dropAction'], ['batch'], null, null, false, true, null]],
        1820 => [[['_route' => 'admin_otp_batch_publish', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminImportBatchController::publishAction'], ['batch', 'status'], null, null, false, true, null]],
        1858 => [[['_route' => 'admin_otp_sector_pay_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminSectorPayController::editAction'], ['sectorPay'], null, null, false, true, null]],
        1882 => [[['_route' => 'admin_otp_sector_pay_del', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\AdminSectorPayController::deleteAction'], ['sectorPay'], null, null, false, true, null]],
        1930 => [[['_route' => 'otp_disruption_adj_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\DisruptionClaimsRequestController::editAction'], ['disruption'], null, null, false, true, null]],
        1970 => [[['_route' => 'otp_disruption_adj_delete', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\DisruptionClaimsRequestController::deleteAction'], ['disruption'], null, null, false, true, null]],
        1992 => [[['_route' => 'otp_sect_adj_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\SectAdjClaimsRequestController::editAction'], ['sectAdj'], null, null, false, true, null]],
        2019 => [[['_route' => 'otp_sect_adj_delete', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\SectAdjClaimsRequestController::deleteAction'], ['sectAdj'], null, null, false, true, null]],
        2050 => [[['_route' => 'otp_sector_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpController::editAction'], ['row'], null, null, false, true, null]],
        2083 => [[['_route' => 'otp_disruption_edit', '_controller' => 'App\\Easyjet\\OtpBundle\\Controller\\OtpController::disruptionEditAction'], ['row'], null, null, false, true, null]],
        2126 => [[['_route' => 'fdtr_logs_view', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\AdminController::logViewAction'], ['log'], null, null, false, true, null]],
        2169 => [[['_route' => 'fdtr_external_duty', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::externalDutyAction'], ['monthlyReport'], null, null, false, true, null]],
        2189 => [[['_route' => 'fdtr_dtime_download_attachment', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::downloadAttachmentAction'], ['monthlyReport'], null, null, false, false, null]],
        2212 => [[['_route' => 'fdtr_monthly_report_view', '_controller' => 'App\\Easyjet\\FdtrBundle\\Controller\\FdtrController::viewAction'], ['report'], null, null, false, true, null]],
        2254 => [[['_route' => 'sfsu_files_show', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::showAction'], ['files'], null, null, false, true, null]],
        2297 => [[['_route' => 'sfsu_download_link', 'withEmail' => '', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::downloadAction'], ['accessKey', 'withEmail'], null, null, false, true, null]],
        2335 => [[['_route' => 'sfsu_download_link_confirm_key', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::confirmKeyAction'], ['accessKey', 'token_request', 'token'], null, null, false, false, null]],
        2360 => [[['_route' => 'sfsu_files_delete', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::deleteAction'], ['file'], null, null, false, true, null]],
        2400 => [[['_route' => 'sfsu_download_external_users_link', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::externalUsersdownloadAction'], ['accessKey'], null, null, false, true, null]],
        2439 => [
            [['_route' => 'sfsu_download_internal_users_link', '_controller' => 'App\\Easyjet\\SfsuBundle\\Controller\\FilesController::internalUsersdownloadAction'], ['accessKey'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
