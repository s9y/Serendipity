<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translated by: Wesley Woo-Duk Hwang-Chung <wesley96@gmail.com>
# (c) 2005, 2016 http://www.tool-box.info/
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'UTF-8');
@define('SQL_CHARSET', 'utf8');
@define('DATE_LOCALES', 'ko_KR.UTF-8, korean, ko, ko_KR');
@define('DATE_FORMAT_ENTRY', '%Y년 %B %e일 %A');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'en');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', '.');
@define('NUMBER_FORMAT_THOUSANDS', ',');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', '종류');
@define('PREVIEW', '미리보기');
@define('DATE', '날짜');
@define('TIME', 'Time');
@define('APPEARANCE', '외관');
@define('LOGIN', '로그인');
@define('LOGOUT', '로그아웃');
@define('LOGGEDOUT', '로그아웃 되었습니다.');
@define('CREATE', '생성');
@define('BACK', '뒤로');
@define('FORWARD', '앞으로');
@define('ANONYMOUS', '익명');
@define('RECENT', '최근 글...');
@define('OLDER', '예전 글...');
@define('DONE', '완료');
@define('TITLE', '제목');
@define('DESCRIPTION', '설명');
@define('PLACEMENT', '위치');
@define('DELETE', '삭제');
@define('SAVE', '저장');
@define('UP', '위로');
@define('DOWN', '아래로');
@define('PREVIOUS', '이전');
@define('NEXT', '다음');
@define('ENTRIES', '블로그 글');
@define('CATEGORIES', '범주');
@define('NAME', '작성자 이름');
@define('EMAIL', '전자우편');
@define('HOMEPAGE', '홈페이지 주소(URL)');
@define('COMMENT', '덧글');
@define('VIEW', '보기');
@define('HIDE', '숨기기');
@define('WEEK', '주');
@define('WEEKS', '주');
@define('MONTHS', '월');
@define('DAYS', '일');
@define('DEBUG', '디버그');
@define('SUCCESS', '성공');
@define('COMMENTS', '덧글');
@define('ADD_COMMENT', '덧글 추가');
@define('NO_COMMENTS', '덧글 없음');
@define('POSTED_BY', '작성자:');
@define('ON', '작성일:');
@define('NO_CATEGORY', '범주 없음');
@define('CATEGORY', '범주');
@define('EDIT', '편집');
@define('GO', '시작!');
@define('YES', '예');
@define('NO', '아니오');
@define('NOT_REALLY', '아니오');
@define('DUMP_IT', '예');
@define('IN', '다음에 포함:');
@define('AT', '입력:');
@define('LEFT', '왼쪽');
@define('RIGHT', '오른쪽');
@define('CENTER', '중앙');
@define('ARCHIVES', '글 목록');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', '빠른 검색');
@define('TRACKBACKS', '트랙백');
@define('TRACKBACK', '트랙백');
@define('NO_TRACKBACKS', '트랙백 없음');
@define('PINGBACKS', '핑백');
@define('NO_PINGBACKS', '핑백 없음');
@define('WEBLOG', '웹로그');
@define('SOURCE', 'Source');
@define('EXCERPT', '발췌');
@define('TRACKED', '추적됨');
@define('USER', '사용자');
@define('USERNAME', '아이디');
@define('PASSWORD', '암호');
@define('HIDDEN', '숨김');
@define('IMAGE', '그림');
@define('VIDEO', '동영상');
@define('AUTHOR', '작성자');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', '버전');
@define('INSTALL', '설치하기');
@define('REPLY', '답글');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', '오류');
@define('FRONTEND', '외부 페이지');
@define('BACKEND', '관리 페이지');
@define('SUMMARY', '요약');
@define('MORE', '더 보기');
@define('FORCE', '강제로');
@define('UPLOAD', '올려주기(업로드)');
@define('DOWNLOAD', '내려받기(다운로드)');
@define('ADMIN', '관리 사항');
@define('ADMIN_FRONTPAGE', '기본 페이지');
@define('QUOTE', '인용');
@define('NONE', '없음');
@define('GROUP', '그룹');
@define('AUTHORS', '작성자');
@define('UPGRADE', '업그레이드');
@define('NAVIGATION', '내비게이션');
@define('MOVE', '이동');
@define('MOVE_UP', '위로 이동');
@define('MOVE_DOWN', '아래로 이동');
@define('ALL_AUTHORS', '모든 작성자');
@define('PREVIOUS_PAGE', '이전 페이지');
@define('NEXT_PAGE', '다음 페이지');
@define('FIRST_PAGE', '첫 페이지');
@define('LAST_PAGE', '마지막 페이지');
@define('ALL_CATEGORIES', '모든 범주');
@define('LAST_UPDATED', '최종 업데이트');
@define('IP_ADDRESS', 'IP 주소');
@define('CHARSET', '문자열 종류');
@define('REFERER', '진입 경로');
@define('APPROVE', '승인');
@define('NOT_FOUND', '찾지 못함');
@define('WRITABLE', '쓰기 가능');
@define('NOT_WRITABLE', '쓰기 불가');
@define('WELCOME_BACK', '돌아와서 반갑습니다,');
@define('USE_DEFAULT', '기본값');
@define('SORT_BY', '정렬 순서');
@define('SORT_ORDER', '정렬 순서');
@define('SORT_ORDER_ASC', '오름차순');
@define('SORT_ORDER_DESC', '내림차순');
@define('FILTERS', '필터');
@define('RESET_FILTERS', '필터 초기화 하기');
@define('TOGGLE_ALL', '모두 보기 선택');
@define('TOGGLE_OPTION', '선택 옵션');
@define('IN_REPLY_TO', '답글 대상:');

/* WIDELY USED */
@define('FILTER_DIRECTORY', '디렉토리');
@define('BACK_TO_BLOG', '블로그로 돌아가기');
@define('HTML_NUGGET', 'HTML 덩어리');
@define('TITLE_FOR_NUGGET', '덩어리 제목');
@define('COMMENT_ADDED', '덧글이 성공적으로 달렸습니다.');
@define('ENTRIES_FOR', '%s: 작성된 글');
@define('NO_ENTRIES_TO_PRINT', '출력할 글이 없음');
@define('COMMENT_DELETE_CONFIRM', '%d번 덧글 (작성자: %s) 삭제를 정말로 하겠습니까?');
@define('DELETE_SURE', '%s번을 영구적으로 삭제하시겠습니까?');
@define('MEDIA_FULLSIZE', '최대 크기');
@define('SIDEBAR_PLUGIN', '옆줄 플러그인');
@define('EVENT_PLUGIN', '이벤트 플러그인');
@define('PLUGIN_ITEM_DISPLAY', '아이템이 어디에 표시됩니까?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', '추가 내용에만');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', '요약 페이지에만');
@define('PLUGIN_ITEM_DISPLAY_BOTH', '항상 표시');
@define('DIRECTORY_WRITE_ERROR', '디렉토리 %s에 기록할 수 없습니다. 권한 설정을 확인하십시오.');
@define('FILE_WRITE_ERROR', '파일 %s에 기록할 수 없습니다.');
@define('INCLUDE_ERROR', '세렌디피티 오류: %s(을)를 포함시킬 수 없었습니다 - 종료합니다.');
@define('DO_MARKUP', '마크업 변환을 수행합니다');
@define('GENERAL_PLUGIN_DATEFORMAT', '날짜 형태');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'PHP의 strftime() 변수를 통해 글의 작성 날짜 형태를 표현합니다. (기본값: "%s")');
@define('APPLY_MARKUP_TO', '%s에 마크업 적용');
@define('XML_IMAGE_TO_DISPLAY', 'XML 버튼');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'XML 피드에 이 그림이 나타납니다. 비운 상태면 기본 그림이 보이고 \'없음\'을 입력하면 나타나지 않습니다.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', '파일 %s 삭제 중...');
@define('SETTINGS_SAVED_AT', '새로운 설정이 %s에 저장되었습니다');
@define('INVERT_SELECTIONS', '선택 반전');

@define('PERSONAL_SETTINGS', '개인 설정');
@define('DO_MARKUP_DESCRIPTION', '텍스트에 마크업 변환(이모티콘, *, /, _ 등을 활용한 마크업)을 적용합니다. 사용하지 않으면 입력한 HTML 코드가 모두 보존됩니다.');
@define('BASE_DIRECTORY', '기본 디렉토리');
@define('PERM_READ', '읽기 권한');
@define('PERM_WRITE', '쓰기 권한');
@define('PERM_DENIED', '권한이 없습니다.');
@define('CURRENT_AUTHOR', '현재 작성자');
@define('PLUGIN_ACTIVE', '사용 중');
@define('PLUGIN_INACTIVE', '미사용');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', '즐겨찾기');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', '이 링크를 즐겨찾기에 추가한 다음, 적고자 하는 페이지에 사용하면 이 세렌디피티 블로그를 빠르게 찾아올 수 있습니다.');
@define('SET_TO_MODERATED', '중재하기');
@define('TOGGLE_SELECT', '선택사항 표시');
@define('ENTRY_METADATA', '글의 메타데이터');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', '세렌디피티 설치');
@define('WELCOME_TO_INSTALLATION', '세렌디피티 설치과정에 오신 것을 환영합니다.');
@define('FIRST_WE_TAKE_A_LOOK', '먼저 현재 설정 상태를 확인하고 호환성 문제가 있는지 점검하겠습니다.');
@define('ERRORS_ARE_DISPLAYED_IN', '오류 사항은 %s으로, 추천 사항은 %s으로, 성공 사항은 %s으로 표시됩니다.');
@define('RED', '빨강색');
@define('YELLOW', '노랑색');
@define('GREEN', '초록색');
@define('PRE_INSTALLATION_REPORT', '세렌디피티 v%s 설치 준비 보고서');
@define('INTEGRITY', '설치상태 무결성 검증');
@define('PHP_INSTALLATION', 'PHP 설치 상태');
@define('INSTALLER_KEY', '키');
@define('INSTALLER_VALUE', '값');
@define('OPERATING_SYSTEM', '운영체제');
@define('WEBSERVER_SAPI', '웹서버 SAPI');
@define('PHPINI_CONFIGURATION', 'php.ini 설정');
@define('RECOMMENDED', '추천 설정');
@define('ACTUAL', '실제 설정');
@define('PERMISSIONS', '권한 설정');
@define('INSTALLER_CLI_TOOLS', '서버측 커맨드라인 도구');
@define('INSTALLER_CLI_TOOLNAME', '커맨드라인 인터페이스(CLI) 도구');
@define('INSTALLER_CLI_TOOLSTATUS', '실행 가능 상태입니까?');
@define('PROBLEM_PERMISSIONS_HOWTO', '권한 설정은 문제가 발생한 디렉토리에 대해 쉘 명령어 `<em>%s</em>`를 실행하거나 FTP 프로그램을 통해 이를 설정함으로써 바로잡을 수 있습니다.');
@define('PROBLEM_DIAGNOSTIC', '점검 결과 문제가 발견되어 위에 지적된 오류를 수정하기 전까지 설치를 진행할 수 없습니다.');
@define('SELECT_INSTALLATION_TYPE', '설치 방식을 고르십시오');
@define('RECHECK_INSTALLATION', '설치 상태 재확인 필요');
@define('SIMPLE_INSTALLATION', '간단한 설치');
@define('EXPERT_INSTALLATION', '전문가 설치');
@define('COMPLETE_INSTALLATION', '설치 완료하기');
@define('WONT_INSTALL_DB_AGAIN', '데이터베이스를 다시 설치하지 않습니다');
@define('THEY_DO', '그러함');
@define('THEY_DONT', '그렇지 않음');
@define('CHECK_DATABASE_EXISTS', '데이터베이스 및 테이블이 이미 존재하는지 확인합니다');
@define('CREATE_DATABASE', '기본 데이터베이스 설정 생성중...');
@define('ATTEMPT_WRITE_FILE', '파일 %s에 기록 시도중...');
@define('CREATING_PRIMARY_AUTHOR', '기본 작성자 \'%s\' 생성중');
@define('SETTING_DEFAULT_TEMPLATE', '기본 템플릿 설정중');
@define('INSTALLING_DEFAULT_PLUGINS', '기본 플러그인 설치중');
@define('SERENDIPITY_INSTALLED', '세렌디피티가 성공적으로 설치되었습니다');
@define('VISIT_BLOG_HERE', '새로 만들어진 블로그로 가기');
@define('THANK_YOU_FOR_CHOOSING', '세렌디피티를 선택해주셔서 감사합니다');
@define('ERROR_DETECTED_IN_INSTALL', '설치 도중 오류가 발생했습니다');
@define('INSTALL_DBPREFIX_INVALID', '데이터베이스 테이블 이름의 접두사는 비워둘 수 없으며 영문자, 숫자, 그리고 밑줄 문자("_")만 허용됩니다.');
@define('POWERED_BY', '제작 도구');
@define('ADMIN_FOOTER_POWERED_BY', '세렌디피티 %s 및 PHP %s(으)로 작성되었습니다.');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', '일반 편집인');
@define('USERLEVEL_CHIEF_DESC', '수석 편집인');
@define('USERLEVEL_ADMIN_DESC', '관리자');
@define('WWW_USER', 'www를 아파치가 사용하는 사용자 이름(nobody 등)으로 변경하십시오.');
@define('INSTALL_PASSWORD_INVALID', '입력한 관리자 암호가 일치하지 않습니다.');
@define('DIRECTORY_CREATE_ERROR', '디렉토리 %s(이)가 존재하지 않으며 생성할 수 없습니다. 직접 디렉토리를 생성해 주십시오');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; 실행: <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', '바이너리 파일 %s(을)를 실행할 수 없습니다');
@define('FILE_CREATE_YOURSELF', '파일을 직접 생성하거나 권한 설정을 확인하십시오');
@define('COPY_CODE_BELOW', '<br />* 아래의 코드를 복사하여 %s에 넣고 %s 폴더에 두십시오:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', '작업이 끝난 후 브라우저의 "새로고침" 버튼을 누르십시오.');
@define('ERROR_TEMPLATE_FILE', '템플릿 파일을 열지 못했습니다. 세렌디피티를 업데이트 하십시오.');
@define('HTACCESS_ERROR', '웹서버 설치 상태를 확인하십시오. 세렌디피티는 ".htaccess" 파일에 기록을 할 수 있어야 하지만 권한 설정 오류 때문에 기록을 할 수 없었습니다. 다음과 같이 권한 설정을 바꾸십시오: <br />&nbsp;&nbsp;%s<br /> 그리고 이 페이지를 다시 여십시오.');
@define('EMPTY_SETTING', '"%s"에 대한 유효한 값을 지정하지 않았습니다.');
@define('NOT_WRITABLE_SPARTACUS', ' (스파르타쿠스 플러그인을 통해 원격 플러그인을 내려받을 경우에만 필요함)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', '세렌디피티 현재 설치 버전이 %s인 것으로 나타났습니다. 버전 %s로 업그레이드를 계속 진행하려면 <a href="%s">여기</a>를 누르십시오.');
@define('SERENDIPITY_UPGRADER_WELCOME', '세렌디피티 업그레이드 에이전트에 오신 것을 환영합니다.');
@define('SERENDIPITY_UPGRADER_PURPOSE', '설치된 세렌디피티 %s의 업그레이드를 도와드리겠습니다.');
@define('SERENDIPITY_UPGRADER_WHY', '세렌디피티 %s 설치가 되었으나 이 버전에 맞도록 데이터베이스가 아직 업그레이드 되지 않았기 때문에 이 글을 보고 계십니다.');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', '데이터베이스 업데이트 (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', '세렌디피티가 정상적으로 작동하려면 다음 .sql 파일을 먼저 실행해야 합니다');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', '이 버전에 특화된 작업');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', '이 버전에 특화된 작업이 없습니다');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', '위의 작업을 수행하도록 하겠습니까?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', '아니오 - 수동으로 수행하겠습니다');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', '예 - 수행하십시오');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', '업그레이드할 사항이 없습니다');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', '세렌디피티가 업그레이드 되었습니다');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', '세렌디피티의 업그레이드 단계를 건너뛰었습니다. 데이터베이스가 제대로 설치되었고 스케줄된 기능이 수행되는지 반드시 확인하십시오');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', '세렌디피티가 버전 %s로 업그레이드 되었습니다');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', '%s여기%s를 눌러 블로그로 돌아갈 수 있습니다');
@define('ADMIN_ENTRIES', '글 관리');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'MySQL 데이터베이스 \'%s\'에 접속하지 못했습니다.');
@define('COULDNT_SELECT_DB', '데이터베이스 \'%s\'(을)를 선택하지 못했습니다.');
@define('COULDNT_SELECT_USER_INFO', '사용자 정보 \'%s\'(을)를 선택하지 못했습니다.');
@define('COULDNT_SELECT_CATEGORY_INFO', '범주 정보 \'%s\'(을)를 선택하지 못했습니다.');
@define('COULDNT_SELECT_ENTRY_INFO', '작성 글 정보 \'%s\'(을)를 선택하지 못했습니다.');
@define('COULDNT_SELECT_COMMENT_INFO', '덧글 정보 \'%s\'(을)를 선택하지 못했습니다.');
@define('MYSQL_REQUIRED', '이 기능을 수행하려면 MySQL 확장기능이 설치되어 있어야 합니다.');
@define('CREATE_AUTHOR', '작성자 \'%s\'(을)를 생성합니다.');
@define('CREATE_CATEGORY', '범주 \'%s\'(을)를 생성합니다.');
@define('MT_DATA_FILE', '무버블 타입 웹로그용 데이터 파일');
@define('INSTALL_DBPORT', '데이터베이스 포트');
@define('INSTALL_DBPORT_DESC', '데이터베이스 서버에 접속할 때 사용하는 포트 번호');
@define('IMPORT_PLEASE_ENTER', '아래에 안내하는 대로 데이터를 입력하십시오');
@define('IMPORT_NOW', '불러들이기 시작!');
@define('IMPORT_STARTING', '불러들이기 과정을 시작합니다...');
@define('IMPORT_FAILED', '불러들이기 실패');
@define('IMPORT_DONE', '불러들이기 성공');
@define('IMPORT_WEBLOG_APP', '블로그 소프트웨어');
@define('IMPORT_NOTES', '주의:');
@define('IMPORT_STATUS', '불러들이기 후 상태');
@define('RSS_IMPORT_WPXRSS', '워드프레스의 확장 RSS (WordPress eXtended RSS) 불러오기 - PHP5가 필요하며 메모리를 많이 차지할 수 있음');
@define('RSS_IMPORT_BODYONLY', '불러들인 텍스트를 모두 "본문" 부분에 넣고 "추가 내용" 부분에 분리해서 넣지 않습니다.');
@define('IMPORT_GENERIC_RSS', '일반 RSS 불러들이기');
@define('ACTIVATE_AUTODISCOVERY', '글 속에 발견된 링크로 트랙백을 보냄');
@define('RSS_IMPORT_CATEGORY', '불러들인 글 중에서 범주가 맞지 않을 경우 이 범주를 사용');
@define('IMPORT_WP_PAGES', '첨부 파일과 고정 페이지도 일반 블로그 글처럼 불러옵니까?');
@define('DOCUMENT_NOT_FOUND', '%s(이)라는 문서를 찾지 못했습니다.');
@define('CONVERT_HTMLENTITIES', 'HTML 엔티티로 표현된 문자의 자동 변환을 시도하겠습니까?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', '세렌디피티 관리 도구');
@define('WRONG_USERNAME_OR_PASSWORD', '아이디 또는 암호가 잘못 입력되었습니다');
@define('PLEASE_ENTER_CREDENTIALS', '인증 정보를 아래에 입력하십시오.');
@define('AUTOMATIC_LOGIN', '로그인 정보 저장');
@define('MAIN_MENU', '주 메뉴');
@define('MENU_PERSONAL', '개인 메뉴');
@define('MENU_DASHBOARD', '대시보드');
@define('MENU_ACTIVITY', '활동사항');
@define('MENU_SETTINGS', '설정');
@define('MENU_TEMPLATES', '템플릿');
@define('MENU_PLUGINS', '플러그인');
@define('MENU_USERS', '사용자');
@define('MENU_GROUPS', '그룹');
@define('MENU_MAINTENANCE', '유지관리');
@define('MEDIA', '미디어');
@define('MEDIA_LIBRARY', '미디어 보관함');
@define('ADD_MEDIA', '미디어 추가');
@define('MANAGE_DIRECTORIES', '디렉토리 관리');
@define('CONFIGURATION', '기능 설정');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', '세렌디피티의 새로운 안정화 버전이 있습니다: ');
@define('UPDATE_FAILMSG', '새로운 세렌디피티 버전을 확인하는데 실패했습니다. https://raw.github.com/s9y/Serendipity/master/docs/RELEASE 주소에 이상이 생겼거나, 서버가 외부 접속을 차단하고 있거나, 그 외의 접속 문제가 발생한 것으로 보입니다.');
@define('FURTHER_LINKS', '추가 링크');
@define('UPDATE_FAILACTION', '자동 업데이트 확인을 사용하지 않기');
@define('DASHBOARD_ENTRIES', '작성 중');
@define('FURTHER_LINKS_S9Y', '세렌디피티 홈페이지');
@define('FURTHER_LINKS_S9Y_DOCS', '세렌디피티 사용설명서');
@define('FURTHER_LINKS_S9Y_BLOG', '공식 블로그');
@define('FURTHER_LINKS_S9Y_FORUMS', '게시판');
@define('FURTHER_LINKS_S9Y_SPARTACUS', '스파르타쿠스');
@define('PUBLISH_NOW', '이 글을 지금 게시 (현재 날짜와 시간으로 설정)');
@define('ENTRY_PUBLISHED', '%s번 글을 게시함');
@define('PUBLISH_ERROR', '글을 게시하는 중 오류 발생:');
@define('PUBLISHED', '게시됨');
@define('JS_FAILURE', '세렌디피티의 자바스크립트 라이브러리를 불러들일 수 없습니다. 이는 PHP나 플러그인 오류 때문에 발생할 수도 있고 브라우저 캐시가 비정상적일 경우에도 경험할 수 있습니다. 정확한 상황을 파악하고자 한다면 <a href="%1$s">%1$s</a> 주소를 브라우저에서 수동으로 열고 오류 내용을 확인하기 바랍니다.');
@define('ENTRY_PUBLISHED_FUTURE', '이 글은 아직 게시되지 않았습니다.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', '사용설명서(공식문서)');
@define('PLUGIN_DOCUMENTATION_LOCAL', '내부에 저장된 사용설명서(공식문서)');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', '버전 이력');
@define('MEDIA_PROPERTY_COPYRIGHT', '저작권');
@define('SIDEBAR_PLUGINS', '옆줄 플러그인');
@define('EVENT_PLUGINS', '이벤트 플러그인');
@define('CONFIGURE_PLUGINS', '플러그인 설정');
@define('PLUGIN_ALREADY_INSTALLED', '플러그인이 이미 설치되었으며, 다중 설치 ("겹침") 지원을 하지 않습니다.');
@define('UNMET_REQUIREMENTS', '요구사항 미달: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', '새로운 옆줄 플러그인 설치하기');
@define('INSTALL_NEW_EVENT_PLUGIN', '새로운 이벤트 플러그인 설치하기');
@define('UPGRADE_TO_VERSION', '버전 %s(으)로 업그레이드');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', '새로운 %s 설치하기');
@define('ALREADY_INSTALLED', '이미 설치됨');
@define('PLUGIN_AVAILABLE_COUNT', '총 플러그인 수: %d개.');
@define('NO_UPDATES', '플러그인 업데이트가 없습니다');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', '글 편집하기');
@define('EDIT_ENTRY', '글 편집');
@define('ENTRY_STATUS', '글의 상태');
@define('DRAFT', '초안');
@define('PUBLISH', '게시');
@define('CONTENT', '내용');
@define('ENTRIES_PER_PAGE', '한 페이지에 표시할 글');
@define('SCHEDULED', '예약됨');
@define('STICKY_POSTINGS', '꼭대기에 표시할 글');
@define('PAGE_BROWSE_ENTRIES', '%s번째 페이지 | 총 %s 페이지 | 총 %s개의 글');
@define('FIND_ENTRIES', '글 찾기');
@define('RIP_ENTRY', '%s번 글이 삭제되었습니다.');
@define('NEW_ENTRY', '새로운 글');
@define('EDITOR_TAGS', '태그');
@define('ENTRY_BODY', '본문');
@define('EXTENDED_BODY', '추가 내용');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', '이 글의 초안이 저장되었습니다.');
@define('IFRAME_PREVIEW', '세렌디피티가 미리보기를 생성하고 있습니다...');
@define('IFRAME_WARNING', '브라우저가 iframe에 대한 개념을 지원하지 않습니다. serendipity_config.inc.php 파일을 열어서 $serendipity[\'use_iframe\'] 변수를 FALSE로 설정하십시오.');
@define('DATE_INVALID', '경고: 날짜 형태가 유효하지 않습니다. YYYY-MM-DD HH:MM 형태여야 합니다.');
@define('ADVANCED_OPTIONS', '고급 옵션');
@define('TOGGLE_VIEW', '범주 표시 방법 변경');
@define('TRACKBACK_SPECIFIC_ON_CLICK', '이 링크는 클릭하기 위한 것이 아닙니다. 본문의 트랙백 URI을 담고 있습니다. 이 URI을 통해서 여러분의 블로그에서 이 블로그로 핑 및 트랙백을 보낼 수 있습니다. 링크를 복사하려면 오른쪽 클릭을 한 뒤 인터넷 익스플로러에서는 "바로가기 복사"를, 모질라에서는 "링크 위치 복사"를 선택하십시오.');
@define('RESET_DATE', '날짜 재설정');
@define('RESET_DATE_DESC', '현재 시간으로 날짜를 재설정하려면 여기를 누르십시오');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', '사용자 관리');
@define('CREATE_NEW_USER', '새로운 사용자 생성');
@define('CREATE_NOT_AUTHORIZED', '본인과 같은 레벨인 사용자를 변경할 수 없습니다');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', '본인보다 높은 레벨의 사용자를 생성할 수 없습니다');
@define('CREATED_USER', '새로운 사용자 %s(이)가 생성되었습니다');
@define('MODIFIED_USER', '%s의 설정이 변경되었습니다');
@define('USER_LEVEL', '사용자 레벨');
@define('WARNING_NO_GROUPS_SELECTED', '경고: 아무런 그룹 소속도 선택하지 않았습니다. 이 경우 사용자 그룹 관리에서 강제 퇴장하는 것과 같으므로 그룹 소속을 변경하지 않았습니다.');
@define('DELETE_USER', '%d번 사용자인 %s(을)를 삭제하게 됩니다. 계속 하시겠습니까? 이 사용자가 작성한 글이 더 이상 외부 페이지에 나타나지 않게 됩니다.');
@define('DELETED_USER', '%d번 사용자인 %s(이)가 삭제되었습니다.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', '그룹 관리');
@define('DELETED_GROUP', '%d번 그룹 %s(이)가 삭제되었습니다.');
@define('CREATED_GROUP', '새 그룹 %s(이)가 생성되었습니다.');
@define('MODIFIED_GROUP', '그룹 %s의 설정이 바뀌었습니다.');
@define('CREATE_NEW_GROUP', '새 그룹 생성하기');
@define('DELETE_GROUP', '%d번 그룹 %s(을)를 삭제하려고 합니다. 정말입니까?');
@define('GROUP_NAME_DESC', "언어 파일에서 정의된 상수를 여기에 입력할 경우 (예: 'USERLEVEL_EDITOR_DESC') 이 상수의 번역된 형태가 표시됩니다. 직접 상수를 정의하고 그 이름을 여기에 입력할 수도 있습니다. 번역이 되는 그룹 이름을 사용하지 않으려고 한다면 상수 외의 문자열로 자유롭게 입력하면 됩니다.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', '덧글 찾기');
@define('COMMENTS_FILTER_SHOW', '보이기');
@define('COMMENTS_FILTER_ALL', '전체');
@define('COMMENTS_FILTER_APPROVED_ONLY', '승인된 것만');
@define('COMMENTS_FILTER_NEED_APPROVAL', '승인 검토중');
@define('COMMENTS_FILTER_NEED_CONFIRM', '사용자 승인 대기 중');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', '선택한 덧글을 정말로 삭제하겠습니까?');
@define('PAGE_BROWSE_COMMENTS', '%s번째 페이지 | 총 %s 페이지 | 총 %s개 덧글');
@define('COMMENT_IS_DELETED', '(덧글 삭제됨)');
@define('COMMENT_MODERATED', '%s번 덧글을 성공적으로 중재하기로 설정함');
@define('ACTIVE_COMMENT_SUBSCRIPTION', '구독됨');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Category subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', '범주가 저장되었습니다');
@define('CATEGORY_ALREADY_EXIST', '"%s"(이)라는 범주가 이미 존재합니다.');
@define('CATEGORY_DELETED_ARTICLES_MOVED', '%s번 범주가 삭제되었습니다. 여기에 속한 글은 %s번 범주로 이동되었습니다.');
@define('CATEGORY_DELETED', '%s번 범주가 삭제되었습니다.');
@define('INVALID_CATEGORY', '삭제할 범주가 지정되지 않았습니다');
@define('EDIT_THIS_CAT', '"%s" 편집');
@define('CATEGORY_REMAINING', '이 범주를 삭제하고 여기에 속한 글을 이 범주로 옮김');
@define('PARENT_CATEGORY', '상위 범주');
@define('CATEGORY_HIDE_SUB', '하위 범주에서 작성한 글 숨기기');
@define('CATEGORY_HIDE_SUB_DESC', '기본적으로는 특정 범주의 글을 열람할 때 하위 범주에 속한 글도 같이 나타납니다. 이 설정을 사용할 경우 현재 선택된 범주의 글만 나타납니다.');
@define('CREATE_NEW_CAT', '새로운 범주 만들기');
@define('ALREADY_SUBCATEGORY', '%s(은)는 이미 %s의 하위 범주입니다.');
@define('NO_CATEGORIES', '범주 없음');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', '체크섬을 비교하지 못했습니다! (메인 디렉토리에 checksums.inc.php 파일이 없음)');
@define('CHECKSUMS_PASS', '필수 파일이 모두 검증되었습니다.');
@define('CHECKSUM_FAILED', '%s 파일이 손상되거나 수정되었습니다: 검증 실패');
@define('CLEANCOMPILE_PASS', '컴파일된 템플릿 비우기-[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', '삭제할 파일이 없습니다.');
@define('CLEANCOMPILE_TITLE', '템플릿 캐시 비우기');
@define('CLEANCOMPILE_INFO', '현재 사용 중인 템플릿에 대해 컴파일된 템플릿 파일을 모두 삭제하는 기능입니다. 컴파일된 템플릿은 스마티 프레임워크에 의해 필요에 따라 자동으로 재생성됩니다.');
@define('IMPORT_ENTRIES', '데이터 불러오기');
@define('EXPORT_ENTRIES', '글 내보내기');
@define('EXPORT_FEED', 'RSS 피드 전체로 내보내기');
@define('CREATE_THUMBS', '작은 그림 재생성');
@define('WARNING_THIS_BLAHBLAH', "경고:\\n작은 그림이 생성되지 않은 그림이 많이 있을 경우 오래 걸릴 수 있습니다.");
@define('SYNC_OPTION_LEGEND', '작은 그림 동기화 선택사항');
@define('SYNC_OPTION_KEEPTHUMBS', '기존의 작은 그림 모두 유지');
@define('SYNC_OPTION_SIZECHECKTHUMBS', '알맞은 크기일 경우일 때만 기존의 작은 그림 유지');
@define('SYNC_OPTION_DELETETHUMBS', '작은 그림 모두 재생성');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\'(을)를 사용할 템플릿으로 지정했습니다.');
@define('WARNING_TEMPLATE_DEPRECATED', '경고: 사용중인 템플릿이 구식 템플릿 방식을 사용하고 있습니다. 가능하다면 업데이트 하십시오.');
@define('STYLE_OPTIONS_NONE', '이 템플릿이나 스타일은 별도의 선택사항이 없습니다. 템플릿에 선택사항을 추가할 수 있는 방법은 www.s9y.org에 있는 기술문서(Technical Documentation) 중 "Configuration of Theme options" 항목을 참고하기 바랍니다.');
@define('STYLE_OPTIONS', '템플릿/스타일 선택사항');
@define('CURRENT_TEMPLATE', '현재 사용 중인 템플릿');
@define('CUSTOM_ADMIN_INTERFACE', '사용자화된 관리 화면 인터페이스를 사용할 수 있음');
@define('CUSTOM_CONFIG', '사용자화된 설정 파일');
@define('TEMPLATE_INFO', '템플릿 정보 보기');
@define('AVAILABLE_TEMPLATES', '사용할 수 있는 템플릿');
@define('THEMES_PREVIEW_BLOG', 'blog.s9y.org에서 시연을 확인');
@define('SET_AS_TEMPLATE', '템플릿으로 지정하기');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', '확인 및 저장');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', '선택한 플러그인 제거하기');
@define('SAVE_CHANGES_TO_LAYOUT', '구성 변경을 저장하기');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', '데이터베이스를 그림 폴더와 동기화합니다');
@define('SYNC_DONE', '완료 (%s개의 그림을 동기화함).');
@define('RESIZE_BLAHBLAH', '<b>크기 조절: %s</b>');
@define('ORIGINAL_SIZE', '원래 크기: <i>%sx%s</i> 픽셀');
@define('RESIZING', '크기 조절중');
@define('RESIZE_DONE', '완료 (%s개의 그림의 크기를 조절함).');
@define('KEEP_PROPORTIONS', '비율 유지');
@define('REALLY_SCALE_IMAGE', '크기 조절을 정말로 하겠습니까? 나중에 되돌릴 수 없습니다.');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>여기서 그림 크기를 조절할 수 있습니다. 비율을 유지하면서 크기를 조절하려면 입력상자 한 쪽에 값을 넣고 Tab 키를 누르면 됩니다. 비율이 유지되는 값이 자동으로 계산됩니다.</p>');
@define('MEDIA_RESIZE_EXISTS', '동일한 폭과 높이를 가진 파일이 이미 존재합니다!');
@define('NEWSIZE', '새로운 크기: ');
@define('SCALING_IMAGE', '%s(을)를 %s x %s 픽셀 크기로 조절');
@define('MEDIA_DIRECTORY_MOVED', '디렉토리와 파일이 %s(으)로 이동하는데 성공했습니다');
@define('MEDIA_DIRECTORY_MOVE_ERROR', '디렉토리와 파일을 %s(으)로 이동할 수 없었습니다!');
@define('DIRECTORY_INFO', '디렉토리 정보');
@define('DIRECTORY_INFO_DESC', '디렉토리는 물리적인 폴더/디렉토리 이름을 반영합니다. 아이템을 포함하고 있는 디렉토리를 변경하거나 이동할 경우 두 방법 중 하나를 선택해야 합니다. 원하는 디렉토리 또는 하위 디렉토리를 만든 다음 미디어 보관함을 통해 새 디렉토리로 아이템을 이동하고 나면 원래 디렉토리를 삭제하는 것이 한 방법입니다. 다른 방법은 아래의 디렉토리 편집 버튼을 사용하여 원래 디렉토리를 통째로 변경하고서 원하던 다른 이름 (기존 하위 디렉토리/ + 새 이름)으로 바꾸는 것입니다. 이렇게 하면 모든 디렉토리와 아이템을 이동시키고 참조하는 모든 블로그 글을 변경하게 됩니다.');
@define('DIRECTORY_CREATED', '디렉토리 <strong>%s</strong>(이)가 생성되었습니다.');
@define('PARENT_DIRECTORY', '상위 디렉토리');
@define('CONFIRM_DELETE_DIRECTORY', '디렉토리 %s에 포함된 모든 내용을 삭제하겠습니까?');
@define('ERROR_NO_DIRECTORY', '오류: 디렉토리 %s(이)가 존재하지 않습니다');
@define('ERROR_DIRECTORY_NOT_EMPTY', '비어 있지 않은 디렉토리를 삭제할 수 없습니다. 남아있는 파일도 제거하려면 "강제 삭제"를 체크하고 다시 시도하십시오. 남아있는 파일은:');
@define('DIRECTORY_DELETE_FAILED', '디렉토리 %s 삭제에 실패했습니다. 권한 설정이나 위의 메시지를 확인하십시오.');
@define('DIRECTORY_DELETE_SUCCESS', '디렉토리 %s(이)가 성공적으로 삭제되었습니다.');
@define('CHECKING_DIRECTORY', '디렉토리 %s 내의 파일 점검 중');
@define('DELETE_DIRECTORY', '디렉토리 삭제');
@define('DELETE_DIRECTORY_DESC', '미디어 파일이 담긴 디렉토리의 내용을 삭제하려고 합니다. 이 파일들은 본문에 사용 중일 수 있습니다.');
@define('FORCE_DELETE', '이 디렉토리에 있는 모든 파일 (세렌디피티가 모르는 종류 포함) 삭제');
@define('CREATE_DIRECTORY', '디렉토리 생성');
@define('CREATE_NEW_DIRECTORY', '새 디렉토리 생성');
@define('CREATE_DIRECTORY_DESC', '미디어 파일을 담을 새 디렉토리를 여기서 생성할 수 있습니다. 새 디렉토리의 이름을 정한 다음 디렉토리가 들어갈 상위 디렉토리를 고릅니다.');
@define('ABOUT_TO_DELETE_FILE', '<b>%s</b> 삭제를 하려고 합니다.<br />작성한 글에서 이 파일을 사용하고 있을 경우 링크나 그림이 깨질 수 있습니다.<br />계속 하겠습니까?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', '오류: 파일이 이미 존재합니다.');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', '<b>%s</b>(이)라는 이름의 파일을 찾지 못했습니다. 이미 삭제되었을 수 있습니다.');
@define('ERROR_FILE_FORBIDDEN', '사용 중인 내용이 담긴 파일을 업로드할 수 없습니다.');
@define('REMOTE_FILE_NOT_FOUND', '원격 서버에서 파일을 찾지 못했습니다. <b>%s</b>(이)라는 주소가 정확합니까?');
@define('FILE_FETCHED', '%s(을)를 %s(으)로 가져옴');
@define('FILE_UPLOADED', '파일 %s(이)가 %s(으)로 성공적으로 업로드되었습니다');
@define('DELETE_FILE_FAIL', '파일 <b>%s</b> 삭제 실패');
@define('DELETE_FILE', '파일 <b>%s</b> 삭제됨');
@define('FOUND_FILE', '새 파일 또는 수정된 파일 발견: %s.');
@define('FILENAME_REASSIGNED', '자동으로 새로운 파일 이름을 붙였습니다: %s');
@define('ERROR_FILE_EXISTS', '오류: 새 파일 이름이 이미 사용중이므로 다른 이름으로 지으십시오.');
@define('ABOUT_TO_DELETE_FILES', '여러 개의 파일을 한꺼번에 지우려고 하고 있습니다.<br />만약 작성했던 글에 이들 중 일부를 사용하고 있다면 깨진 링크나 그림으로 나타날 것입니다.<br />그래도 계속 진행하겠습니까?<br /><br />');
@define('MEDIA_HOTLINKED', '핫링크 됨');
@define('EDITOR_NO_TAGS', '태그 없음');
@define('ENTER_NEW_NAME', '다음에 대해 새 이름을 입력하십시오: ');
@define('MEDIA_PROPERTIES_DONE', '%d번의 등록정보가 변경되었습니다.');
@define('MULTICHECK_NO_ITEM', '선택한 아이템이 없습니다. 최소한 한 개를 선택하십시오. <a href="%s">이전 페이지로 돌아가기</a>.');
@define('MULTICHECK_NO_DIR', '선택한 디렉토리가 없습니다. 최고한 한 군데를 선택하십시오. <a href="%s">이전 페이지로 돌아가기</a>.');
@define('ADDING_IMAGE', '그림 추가중...');
@define('THUMB_CREATED_DONE', '작은 그림이 생성되었습니다.<br/>완료.');
@define('THUMBNAIL_USING_OWN', '%s 파일은 이미 충분히 작으므로 그 자체를 작은 그림으로도 사용합니다.');
@define('THUMBNAIL_FAILED_COPY', '%s 자체를 작은 그림으로 사용하려고 했으나 복사에 실패했습니다.');
@define('DELETE_THUMBNAIL', '작은 그림 <b>%s</b> 삭제됨');
@define('ERROR_UNKNOWN_NOUPLOAD', '알 수 없는 오류가 발생하여 파일이 업로드되지 않았습니다. 서버가 허용하는 파일 크기를 초과했을 수 있습니다. 호스팅 업체에 확인을 하거나 php.ini 파일을 수정하여 더 큰 파일을 업로드할 수 있도록 하십시오.');
@define('MEDIA_UPLOAD_SIZEERROR', '오류: %s바이트보다 큰 파일을 올릴 수 없습니다!');
@define('MEDIA_UPLOAD_DIMERROR', '오류: %s x %s 픽셀보다 큰 그림 파일을 올릴 수 없습니다!');
@define('HOTLINK_DONE', '파일이 핫링크 되었습니다.<br />완료.');
@define('DELETE_HOTLINK_FILE', '<b>%s</b>(이)라는 핫링크 파일 삭제됨');
@define('IMAGICK_EXEC_ERROR', '실행할 수 없음: "%s", 오류: %s, 리턴 변수: %d');
@define('SKIPPING_FILE_EXTENSION', '파일 건너뜀: %s에 확장자가 없음.');
@define('SKIPPING_FILE_UNREADABLE', '파일 건너뜀: %s(을)를 읽을 수 없음.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', '하위 디렉토리에 모두 동일한 권한 설정을 합니다');
@define('TIMESTAMP_RESET', '작성시간을 현재시간으로 초기화 했습니다.');
@define('CURRENT_TAB', '현재 탭: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', '글에 작은 그림으로 추가합니다.');
@define('I_WANT_BIG_IMAGE', '글에 원본 그림으로 추가합니다.');
@define('I_WANT_NO_LINK', '그림으로만 보여줍니다');
@define('I_WANT_IT_TO_LINK', '그림을 다음 주소의 링크로 만듭니다:');
@define('MEDIA_ALT', 'ALT 속성 (묘사 또는 짧은 설명)');
@define('MEDIA_TITLE', 'TITLE 속성 (마우스 커서를 위에 대면 표시됨)');
@define('IMAGE_SIZE', '그림 크기');
@define('IMAGE_ALIGNMENT', '그림 정렬');
@define('ALIGN_TOP', '위');
@define('ALIGN_LEFT', '왼쪽');
@define('ALIGN_RIGHT', '오른쪽');
@define('IMAGE_AS_A_LINK', '그림 삽입');
@define('MEDIA_TARGET', '이 링크의 표시 대상');
@define('MEDIA_TARGET_JS', '팝업 창 (자바스크립트 사용, 가변 크기)');
@define('MEDIA_ENTRY', '독립된 글');
@define('MEDIA_TARGET_BLANK', '팝업 창 (target=_blank 사용)');
@define('YOU_CHOSE', '%s(을)를 골랐습니다');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', '시계 반대방향으로 90도 회전하기');
@define('IMAGE_ROTATE_RIGHT', '시계 방향으로 90도 회전하기');
@define('MEDIA_RENAME', '파일 이름 변경');
@define('THUMBNAIL_SHORT', '작은 그림');
@define('ORIGINAL_SHORT', '원본 그림');
@define('SORT_ORDER_NAME', '파일 이름');
@define('SORT_ORDER_EXTENSION', '파일 확장자');
@define('SORT_ORDER_SIZE', '파일 크기');
@define('SORT_ORDER_WIDTH', '그림 폭');
@define('SORT_ORDER_HEIGHT', '그림 높이');
@define('SORT_ORDER_DATE', '업로드 시간');
@define('SHOW_METADATA', '메타데이터 표시');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>미디어 보관함에 파일 추가:</b><p>여기서 미디어 파일을 업로드하거나 인터넷에서 파일을 불러올 수 있습니다. 적당한 그림을 가지고 있지 않으면 생각이 떠오른 대로 <a href="https://images.google.com/" target="_blank">구글에서 그림을 검색</a>해보면 유용하고 재미있습니다. 단, 대부분의 그림은 저작권이 설정되어 있으므로 사용하기 전에 허락을 받는 것에 유의하십시오.</p><p><b>방법 선택:</b></p><br/>');
@define('ENTER_MEDIA_URL', '불러올 파일의 인터넷 주소를 입력:');
@define('ENTER_MEDIA_UPLOAD', '업로드할 파일 선택:');
@define('SAVE_FILE_AS', '저장할 파일 이름 지정:');
@define('STORE_IN_DIRECTORY', '저장할 디렉토리 지정: ');
@define('IMAGE_MORE_INPUT', '그림 추가');
@define('ENTER_MEDIA_URL_METHOD', '불러오기 방식:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', '주의: 서버에서 핫링크 하기는 해당 사이트에서 핫링크 허락을 미리 받아놓거나 자신의 사이트인 경우에 대해 하기 바랍니다. 핫링크를 하게 되면 외부 그림을 따로 저장하지 않고 쓸 수 있게 됩니다.');
@define('FETCH_METHOD_IMAGE', '이쪽 서버로 그림을 다운로드하기');
@define('FETCH_METHOD_HOTLINK', '서버로 핫링크 걸기');
@define('GO_ADD_PROPERTIES', '등록정보 입력하러 가기');
@define('PLAIN_ASCII_NAMES', '(특수 문자나 변이부호 등을 쓰지 마십시오)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', '그림 크기 조절');
@define('MEDIA_DELETE', '파일 삭제');
@define('FILES_PER_PAGE', '페이지 당 파일 개수');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', '그림이 없습니다');
@define('RANGE_FROM', '시작:');
@define('RANGE_TO', '끝:');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', '모든 디렉토리');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', '설정이 기록 및 저장되었습니다');
@define('DIAGNOSTIC_ERROR', '입력한 정보에 검사를 수행하는 도중 에러를 발견했습니다:');
@define('FULL_COMMENT_TEXT', '네, 전체 덧글을 포함합니다');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', '데이터베이스 설정');
@define('INSTALL_CAT_DB_DESC', '데이터베이스 정보를 모두 입력하십시오. 세렌디피티가 정상 작동을 하기 위해 필요합니다.');
@define('INSTALL_DBTYPE', '데이터베이스 종류');
@define('INSTALL_DBTYPE_DESC', '데이터베이스 종류');
@define('INSTALL_DBHOST', '데이터베이스 호스트');
@define('INSTALL_DBHOST_DESC', '데이터베이스 서버의 호스트네임');
@define('INSTALL_DBUSER', '데이터베이스 사용자');
@define('INSTALL_DBUSER_DESC', '데이터베이스에 접속하기 위한 사용자 이름');
@define('INSTALL_DBPASS', '데이터베이스 암호');
@define('INSTALL_DBPASS_DESC', '사용자 이름에 대응하는 암호');
@define('INSTALL_DBNAME', '데이터베이스 이름');
@define('INSTALL_DBNAME_DESC', '사용할 데이터베이스의 이름');
@define('INSTALL_DBPREFIX', '데이터베이스 테이블 접두사');
@define('INSTALL_DBPREFIX_DESC', '테이블 이름 앞에 붙일 글자 (serendipity_ 식으로)');
@define('INSTALL_DBPERSISTENT', '지속적인 접속 사용');
@define('INSTALL_DBPERSISTENT_DESC', '지속적으로 데이터페이스에 접속하는 기능을 사용합니다. <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">여기에서</a> 자세한 정보를 읽을 수 있습니다. 일반적으로 추천하지 않습니다.');
@define('INSTAL_DB_UTF8', '데이터베이스-문자열 변환 사용하기');
@define('INSTAL_DB_UTF8_DESC', '데이터베이스에 필요한 문자열 종류를 지정하기 위해 MySQL "SET NAMES" 질의를 실행합니다. 블로그에 이상한 글자가 보일 경우 이를 켜거나 꺼보십시오.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', '경로');
@define('INSTALL_CAT_PATHS_DESC', '필수 디렉토리 및 파일에 대한 경로를 지정합니다. 디렉토리 끝에 슬래시(/) 추가하는 것을 잊지 마십시오.');
@define('INSTALL_FULLPATH', '전체 경로');
@define('INSTALL_FULLPATH_DESC', '세렌디피티 설치 위치의 절대적이고 전체적인 경로');
@define('INSTALL_UPLOADPATH', '업로드 경로');
@define('INSTALL_UPLOADPATH_DESC', '업로드된 파일이 저장되는 위치로서 \'전체 경로\'에 대한 상대 경로 - 일반적으로 \'uploads/\'');
@define('INSTALL_RELPATH', '상대 경로');
@define('INSTALL_RELPATH_DESC', '브라우저에 나타날 세렌디피티의 경로 - 일반적으로 \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', '템플릿 상대 경로');
@define('INSTALL_RELTEMPLPATH_DESC', '템플릿이 저장된 디렉토리의 경로로서 \'상대 경로\'를 기준으로 한 상대 경로');
@define('INSTALL_RELUPLOADPATH', '업로드 상대 경로');
@define('INSTALL_RELUPLOADPATH_DESC', '브라우저에 나타날 업로드 경로로서 \'상대 경로\'를 기준으로 한 상대 경로');
@define('INSTALL_URL', '블로그 주소');
@define('INSTALL_URL_DESC', '세렌디피티가 설치된 기본 인터넷 주소(URL)');
@define('INSTALL_AUTODETECT_URL', '사용된 HTTP 호스트를 자동 감지');
@define('INSTALL_AUTODETECT_URL_DESC', '사용할 경우 방문자가 사용한 HTTP 호스트를 세렌디피티가 기본 인터넷 주소로 쓰게 됩니다. 이렇게 되면 세렌디피티 블로그를 여러 개의 도메인 이름 하에 사용할 수 있게 되며, 해당 도메인을 방문자가 블로그를 방문하는데 사용한 추가 링크에 사용할 수 있게 됩니다.');
@define('INSTALL_INDEXFILE', '인덱스 파일');
@define('INSTALL_INDEXFILE_DESC', '세렌디피티 인덱스 파일의 이름');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', '고정 링크');
@define('INSTALL_CAT_PERMALINKS_DESC', '블로그 속의 고정 링크를 표시하기 위한 여러 가지의 주소 패턴을 정할 수 있습니다. 가급적 기본값을 사용하십시오. 그러지 않을 경우 가급적이면 %id% 값을 사용하여 세렌디피티가 목적지 주소를 찾아보기 위해 데이터베이스에 질의하는 것을 방지하십시오.');
@define('INSTALL_PERMALINK', '고정 링크 - 작성한 글의 주소 구조');
@define('INSTALL_PERMALINK_DESC', '작성한 글이 기본 블로그 주소에 대해 상대적으로 가지게 되는 주소 구조를 정할 수 있습니다. %id%, %title%, %day%, %month%, %year% 변수와 함께 다른 일반 글자를 활용할 수 있습니다.');
@define('INSTALL_PERMALINK_AUTHOR', '고정 링크 - 작성자에 따른 주소 구조');
@define('INSTALL_PERMALINK_AUTHOR_DESC', '특정 작성자가 쓴 글이 기본 블로그 주소에 대해 상대적으로 가지게 되는 주소 구조를 정할 수 있습니다. %id%, %realname%, %username%, %email% 변수와 함께 다른 일반 글자를 활용할 수 있습니다.');
@define('INSTALL_PERMALINK_CATEGORY', '고정 링크 - 범주에 따른 주소 구조');
@define('INSTALL_PERMALINK_CATEGORY_DESC', '특정 범주에 속하는 글이 기본 블로그 주소에 대해 상대적으로 가지게 되는 주소 구조를 정할 수 있습니다. %id%, %name%, %parentname%, %description% 변수와 함께 다른 일반 글자를 활용할 수 있습니다.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', '고정 링크 - RSS 피드 - 범주에 따른 주소 구조');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', '특정 범주에 속하는 RSS 피드가 기본 블로그 주소에 대해 상대적으로 가지게 되는 주소 구조를 정할 수 있습니다. %id%, %name%, %description% 변수와 함께 다른 일반 글자를 활용할 수 있습니다.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', '작성자에 따른 RSS 피드 고정 링크 주소 구조');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', '특정 사용자의 RSS 피드를 보기 위한 상대적인 인터넷 주소 구조를 %id%, %realname%, %username%, %email% 등의 변수와 일반 글자를 활용해서 정의할 수 있습니다. 전체 주소는 사이트의 기본 주소를 기초로 해서 시작합니다.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', '글 목록으로 가는 경로');
@define('INSTALL_PERMALINK_ARCHIVEPATH', '글 목록으로 가는 경로');
@define('INSTALL_PERMALINK_CATEGORIESPATH', '범주로 가는 경로');
@define('INSTALL_PERMALINK_AUTHORSPATH', '작성자로 가는 경로');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', '덧글을 구독 해지하기 위한 경로');
@define('INSTALL_PERMALINK_DELETEPATH', '덧글을 삭제하기 위한 경로');
@define('INSTALL_PERMALINK_APPROVEPATH', '덧글을 승인하기 위한 경로');
@define('INSTALL_PERMALINK_FEEDSPATH', 'RSS 피드로 가는 경로');
@define('INSTALL_PERMALINK_PLUGINPATH', '하나의 플러그인으로 가는 경로');
@define('INSTALL_PERMALINK_ADMINPATH', '관리 화면으로 가는 경로');
@define('INSTALL_PERMALINK_SEARCHPATH', '검색하기 위한 경로');
@define('INSTALL_PERMALINK_COMMENTSPATH', '덧글로 가는 경로');
@define('CONFIG_PERMALINK_PATH_DESC', '세렌디피티가 주소(URL)와 작업을 제대로 연동시킬 수 있도록 반드시 접두사를 지정해야 한다는 점에 유의하기 바랍니다. 접두사는 고유한 이름이면 아무렇게나 지정할 수 있지만 비워둘 수는 없습니다. 이는 모든 접두사 지정사항에 대해 동일하게 적용됩니다.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', '일반 설정');
@define('INSTALL_CAT_SETTINGS_DESC', '세렌디피티의 작동 방식을 정합니다.');
@define('INSTALL_USERNAME', '관리자 아이디');
@define('INSTALL_USERNAME_DESC', '관리자 로그인을 위한 아이디');
@define('INSTALL_PASSWORD', '관리자 암호');
@define('INSTALL_PASSWORD_DESC', '관리자 로그인을 위한 암호');
@define('INSTALL_PASSWORD2', '관리자 암호 (다시 입력)');
@define('INSTALL_PASSWORD2_DESC', '검증을 위해 관리자 로그인을 위한 암호를 다시 입력합니다.');
@define('USERCONF_REALNAME', '실제 이름');
@define('USERCONF_REALNAME_DESC', '작성자의 실제 이름으로서, 독자가 보게 되는 이름입니다.');
@define('INSTALL_EMAIL', '관리자 전자우편');
@define('INSTALL_EMAIL_DESC', '블로그 관리자의 전자우편 주소');
@define('INSTALL_SENDMAIL', '관리자에게 전자우편 발송');
@define('INSTALL_SENDMAIL_DESC', '작성한 글에 덧글이 달렸을 경우 전자우편을 받겠습니까?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', '블로그 이름');
@define('INSTALL_BLOGNAME_DESC', '블로그에 사용할 제목');
@define('INSTALL_BLOGDESC', '블로그 설명');
@define('INSTALL_BLOGDESC_DESC', '블로그를 설명하는 내용을 적음');
@define('INSTALL_BLOG_EMAIL', '블로그의 전자우편 주소');
@define('INSTALL_BLOG_EMAIL_DESC', '발송하는 전자우편의 "보낸 사람" 부분에 나타날 전자우편 주소를 설정합니다. 호스트의 메일 서버에서 인식하는 주소로 반드시 설정하십시오. 상당수의 메일 서버는 보낸 사람 주소를 알 수 없는 전자우편을 거부합니다.');
@define('COMMENT_TOKENS', '덧글 중재에 토큰 사용');
@define('COMMENT_TOKENS_DESC', '토큰을 사용할 경우 블로그에 로그인하지 않고도 전자우편 링크를 통해 덧글을 승인하거나 삭제할 수 있습니다. 편의 기능이라는 점에 유의하십시오. 만약 전자우편 계정을 다른 사람이 탈취할 경우 그 사람이 별도의 인증 없이 덧글을 승인하거나 삭제할 수 있게 됩니다.');
@define('INSTALL_LANG', '언어');
@define('INSTALL_LANG_DESC', '블로그에 사용할 언어 선택');
@define('INSTALL_CHARSET', '문자열 종류 선택');
@define('INSTALL_CHARSET_DESC', '여기서 문자열을 UTF-8로 할 것인지 지역 전용 (ISO, EUC 등)으로 할 것인지 정할 수 있습니다. 일부 언어는 UTF-8 버전만 제공되므로 "지역 전용"을 설정해도 변화가 없습니다. 새로 설치한 경우 UTF-8을 권장합니다. 이미 특별 문자를 사용하여 글을 작성했을 경우 이 설정을 변경하지 마십시오. 글자가 깨질 수 있습니다. 이 설정에 대해서는 https://docs.s9y.org/docs/developers/internationalization.html 에 더 자세하게 소개가 되어 있습니다.');
@define('INSTALL_CAL', '달력 종류');
@define('INSTALL_CAL_DESC', '원하는 달력의 형태를 고르십시오.');
@define('AUTOLANG', '방문자의 브라우저 언어 설정을 기본으로 따름');
@define('AUTOLANG_DESC', '사용할 경우 방문자의 브라우저 언어 설정을 확인하여 화면에 표시되는 언어 및 글의 언어를 결정합니다.');
@define('USERGROUPS_FORBIDDEN_ENABLE', '사용자 그룹에 대한 플러그인 사용 권한 설정을 사용하기');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', '"사용자 그룹에 대한 플러그인 사용 권한 설정"을 사용할 경우 어떤 사용자 그룹이 어떤 플러그인이나 이벤트를 사용할 수 있을지 지정할 수 있게 됩니다.');
@define('UPDATE_NOTIFICATION', '업데이트 알림');
@define('UPDATE_NOTIFICATION_DESC', '대시보드에 업데이트 알림을 표시하고, 어떤 채널에 나타내겠습니까?');
@define('LOG_LEVEL', '로그 기록 수준');
@define('LOG_LEVEL_DESC', '세렌디피티 코드 내의 특정 부분에 디버그 중단점을 배치해 두었습니다. 이 설정을 "디버그"로 둘 경우 이러한 위치에서 발생한 디버그 출력내역을 templates_c/logs/에 기록하게 됩니다. 특정 부분에서 버그가 발생하고 있거나 본인이 개발자인 경우에만 이 설정을 사용하기 바랍니다. 이 설정을 "오류"로 두면 PHP 에러를 기록하게 되며 PHP error_log 설정을 덮어씁니다.');
@define('USE_CACHE', '캐시 사용하기');
@define('USE_CACHE_DESC', '특정 데이터베이스 질의를 반복하지 않도록 내부 캐시를 사용하도록 합니다. 중간에서 높은 접속량이 걸리는 서버의 부하를 줄이며 페이지를 불러오는 속도를 향상시킵니다.');
@define('QUICKSEARCH_SORT_RELEVANCE', '정확도');
@define('UPDATE_STABLE', '안정화 버전');
@define('UPDATE_BETA', '베타 버전');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', '외관 및 선택사항');
@define('INSTALL_CAT_DISPLAY_DESC', '세렌디피티의 겉모습과 인상을 정합니다.');
@define('INSTALL_FETCHLIMIT', '한 페이지에 표시할 글 수');
@define('INSTALL_FETCHLIMIT_DESC', '각 외부 페이지에 표시할 글의 수');
@define('INSTALL_RSSFETCHLIMIT', '피드에 보여줄 글 수');
@define('INSTALL_RSSFETCHLIMIT_DESC', '각 RSS 피드 페이지에 보여줄 글의 수입니다.');
@define('ARCHIVE_SORT_STABLE', '안정적인 글 목록');
@define('ARCHIVE_SORT_STABLE_DESC', '글 목록 페이지를 내림차순으로 정렬하여 안정적인 상태를 유지함으로서 검색엔진 봇이 다시 색인하지 않아도 되도록 합니다.');
@define('QUICKSEARCH_SORT', '검색 결과를 어떻게 정렬하겠습니까?');
@define('SYNDICATION_RFC2616', '엄격한 RFC2616 RSS 피드 준수 사용하기');
@define('SYNDICATION_RFC2616_DESC', 'RFC2616을 강제하지 않을 경우 조건부 GET 요청을 세렌디피티가 받으면 마지막 요청 이후에 수정된 글을 보내게 됩니다. 그러므로 이 설정을 끄면 방문자들은 마지막 요청 이후 작성된 모든 글을 받게 되어 대부분 좋게 받아들입니다. 하지만 Planet과 같은 일부 에이전트의 경우 이렇게 되면 RFC2616을 위반하기 때문에 이상하게 작동합니다. 이 설정을 켜면 RFC 준수를 하게 되지만 RSS 피드 구독자들이 휴가를 간 동안 놓치는 글이 생길 수 있습니다. 결국 Planet과 같은 곳이나 블로그를 직접 구독하는 사람들 중 한 쪽은 문제가 발생할 것입니다. 어느 한 쪽에서 불만이 있을 경우 이 설정을 변경해 보기 바랍니다. 참조할 내용: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">소스포지</a>');
@define('INSTALL_USEGZIP', 'Gzip 압축 페이지 사용');
@define('INSTALL_USEGZIP_DESC', '사용자의 브라우저가 지원을 할 경우 페이지 전송 속도를 향상시키기 위해 페이지를 압축해서 전송할 수 있습니다. 추천 사항입니다.');
@define('INSTALL_XHTML11', 'XHTML 1.1 규격을 강제로 따름');
@define('INSTALL_XHTML11_DESC', 'XHTML 1.1 규격을 강제로 따르겠습니까? (오래된 4세대 브라우저에서 문제를 일으킬 수 있음)');
@define('INSTALL_POPUP', '팝업 창을 사용함');
@define('INSTALL_POPUP_DESC', '덧글이나 트랙백 등에 팝업 창을 사용하겠습니까?');
@define('INSTALL_EMBED', '세렌디피티가 내장된 형태입니까?');
@define('INSTALL_EMBED_DESC', '일반 페이지 속에 세렌디피티를 내장시키려면 "예"를 선택하여 헤더가 제외된 내용 부분만 출력시키게 합니다. indexFile 옵션을 사용하여 일반적인 웹페이지 헤더에 wrapper 클래스를 적용할 수 있습니다. 보다 자세한 사항은 README 파일을 참조하십시오.');
@define('INSTALL_SHOW_EXTERNAL_LINKS', '외부 링크를 클릭할 수 있게 하기');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"아니오": 확인되지 않은 외부 링크(상위 진출, 상위 진입, 사용자 덧글)는 보여지지 않거나 일반 텍스트로 표시되어 구글 스팸을 방지합니다(추천). "예": 확인되지 않은 외부 링크가 하이퍼링크로 나타납니다. 옆줄 플러그인 설정에서 별도로 정할 수 있습니다.');
@define('INSTALL_TRACKREF', '진입 경로 추적을 사용하기');
@define('INSTALL_TRACKREF_DESC', '진입 경로 추적을 사용하면 어떤 사이트가 당신의 글을 참조하고 있는지 볼 수 있습니다. 오늘날 이 기능은 스팸에 악용되는 경우가 많으므로 원할 경우 끌 수 있습니다.');
@define('INSTALL_BLOCKREF', '차단된 진입 경로');
@define('INSTALL_BLOCKREF_DESC', '진입 사항에 표시되지 않았으면 하는 호스트가 있을 경우 각 호스트를 \';\'로 분리해서 입력합니다. 글자 일부분이 일치해도 차단됨에 유의하십시오(지정한 이름이 호스트의 일부일 경우 차단됨).');
@define('INSTALL_REWRITE', '인터넷 주소(URL) 재작성');
@define('INSTALL_REWRITE_DESC', '인터넷 주소 생성시 사용할 규칙을 정합니다. 재작성 규칙을 활성화시키면 블로그에 대한 주소가 깔끔해지고 구글과 같은 검색엔진에 의해 인덱싱이 잘 됩니다. 웹서버가 세렌디피티 디렉토리에 대해 mod_rewrite나 "AllowOverride All"을 지원해야 합니다. 기본 설정은 자동 인식됩니다.');
@define('INSTALL_OFFSET_ON_SERVER_TIME', '서버 시간대를 기준으로 차이를 설정합니까?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', '서버 시간대를 기준으로 글의 표시 시간 차이를 설정할지의 여부를 정합니다. 예를 고르면 서버 시간대를 기준으로 하고 아니오를 고르면 GMT를 기준으로 합니다.');
@define('INSTALL_OFFSET', '서버 시간과의 시간 차이');
@define('INSTALL_OFFSET_DESC', '웹서버의 시간(현재: %clock%)과 사용자의 시간대와의 차이를 시간 단위로 입력함');
@define('INSTALL_SHOWFUTURE', '미래에 작성한 글 보이기');
@define('INSTALL_SHOWFUTURE_DESC', '이 기능을 사용할 경우 작성 날짜가 미래인 글도 모두 블로그에 표시하게 됩니다. 기본값은 이러한 글을 작성 날짜가 다다를 때까지 숨기는 것입니다.');
@define('INSTALL_ACL', '범주에 대한 읽기 권한 적용');
@define('INSTALL_ACL_DESC', '사용할 경우 로그인한 사용자가 당신의 블로그를 읽을 때 각 범주에 대해 지정한 사용자 권한 설정이 적용됩니다. 사용하지 않을 경우 범주에 대한 읽기 권한이 적용되지 않게 되지만 블로그 속도가 약간 빨라지는 장점이 있습니다. 그러므로 블로그에 대한 다중 사용자 읽기 권한이 필요 없다면 이 설정을 끄십시오.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', '피드 설정');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'RSS 피드 안에 추가 내용을 포함한 글 전체를 보임');
@define('SYNDICATION_PLUGIN_BANNERURL', 'RSS 피드를 위한 그림 파일');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'GIF/JPEG/PNG로 된 그림 파일의 주소 (빈 상태: 세렌디피티 로고 그림)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', '그림 폭');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', '픽셀 단위 (최고 144)');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', '그림 높이');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', '픽셀 단위 (최고 400)');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', '이메일 주소를 표시합니까?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', '"managingEditor"(편집인) 필드');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', '편집인의 전자우편 주소 (빈 상태: 숨김) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', '"webMaster"(웹마스터) 필드');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', '웹마스터의 전자우편 주소 (빈 상태: 숨김) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', '"ttl"(생존시간) 필드');
@define('SYNDICATION_PLUGIN_TTL_DESC', '외부 사이트 또는 프로그램에 의해서 더 이상 저장되지 않을 시점을 분 단위로 입력 (빈 상태: 숨김) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', '"pubDate"(게시일자) 필드');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'RSS 채널에 "pubDate" 필드를 넣어서 최신으로 올라온 글의 날짜를 보여주겠습니까?');
@define('FEED_CUSTOM', '사용자화된 피드의 주소(URL)');
@define('FEED_CUSTOM_DESC', '사용할 경우 피드 리더가 특정 주소로 방문하도록 별도의 사용자화된 피드 주소를 설정할 수 있습니다. 피드버너와 같이 통계 분석 기능이 있을 때 유용하며, 이 경우 피드버너 주소(URL)를 입력하면 됩니다.');
@define('FEED_FORCE', '사용자화된 피드의 주소를 강제로 사용합니까?');
@define('FEED_FORCE_DESC', '사용할 경우 위에 입력한 주소가 모든 피드 리더에서 의무적으로 사용되며 일반적인 피드는 접근할 수 없게 됩니다.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', '그림 변환 설정');
@define('INSTALL_CAT_IMAGECONV_DESC', '세렌디피티가 그림을 어떻게 다룰지에 대한 정보를 입력합니다.');
@define('INSTALL_IMAGEMAGICK', 'ImageMagick 사용하기');
@define('INSTALL_IMAGEMAGICK_DESC', 'ImageMagick이 설치되어 있으며 이를 그림 크기 조절에 사용하겠습니까?');
@define('INSTALL_IMAGEMAGICKPATH', '변환 바이너리 경로');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'ImageMagick 변환 바이너리(프로그램)의 이름 및 전체 경로');
@define('INSTALL_THUMBSUFFIX', '작은 그림 접두사');
@define('INSTALL_THUMBSUFFIX_DESC', '작은 그림은 원래이름.[접두사].확장자 식의 이름으로 생성됩니다');
@define('INSTALL_THUMBWIDTH', '작은 그림의 최대 크기');
@define('INSTALL_THUMBWIDTH_DESC', '자동 생성되는 작은 그림의 최대 크기');
@define('INSTALL_THUMBDIM', '작은 그림의 최대 크기 제약 기준');
@define('INSTALL_THUMBDIM_LARGEST', '양방향 모두');
@define('INSTALL_THUMBDIM_WIDTH', '폭');
@define('INSTALL_THUMBDIM_HEIGHT', '높이');
@define('INSTALL_THUMBDIM_DESC', '작은 그림의 최대 크기를 정하기 위한 제약의 기준. 기본값인 "' . INSTALL_THUMBDIM_LARGEST .  '" 선택 시 폭과 높이를 모두 제한하므로 어느 쪽도 최대 크기를 초과할 수 없으며 "' . INSTALL_THUMBDIM_WIDTH . '"과 "' .  INSTALL_THUMBDIM_HEIGHT . '"는 선택된 방향으로만 제한하므로 다른 한 방향은 최대 크기보다 클 수 있습니다.');
@define('MEDIA_UPLOAD_SIZE', '올리는 파일의 최대 크기');
@define('MEDIA_UPLOAD_SIZE_DESC', '올리는 파일의 최대 크기를 바이트 단위로 입력합니다. 이 설정보다 서버 측에 있는 php.ini 내부 설정이 우선됩니다: upload_max_filesize, post_max_size, max_input_time 등이 모두 이 설정보다 우선 적용됩니다. 비워둘 경우 서버 측 설정만 따르게 됩니다.');
@define('MEDIA_UPLOAD_MAXWIDTH', '올릴 그림 파일의 최대 폭');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', '올릴 그림 파일의 최대 폭을 픽셀 단위로 입력합니다.');
@define('MEDIA_UPLOAD_MAXHEIGHT', '올릴 그림 파일의 최대 높이');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', '올릴 그림 파일의 최대 높이를 픽셀 단위로 입력합니다.');
@define('MEDIA_UPLOAD_RESIZE', '올리기 전 크기 조절');
@define('MEDIA_UPLOAD_RESIZE_DESC', '서버에 그림을 올리기 전에 자바스크립트로 크기를 조절합니다. 이 경우 올리는 기능이 Ajax를 쓰게 되므로 등록정보 버튼을 표시하지 않게 됩니다.');
@define('ONTHEFLYSYNCH', '즉각적인 미디어 동기화 사용하기');
@define('ONTHEFLYSYNCH_DESC', '사용할 경우 세렌디피티가 미디어 데이터베이스와 서버 저장 파일들을 비교하여 데이터베이스 및 디렉토리 내용을 동기화합니다.');
@define('MEDIA_DYN_RESIZE', '동적 그림 크기 변환을 사용하기');
@define('MEDIA_DYN_RESIZE_DESC', '사용할 경우 미디어 선택 화면이 GET 변수를 통해 요청한 크기에 맞도록 그림을 불러올 수 있습니다. 생성된 파일은 캐시에 저장되므로 자주 사용할 경우 용량을 많이 차지할 수 있습니다.');
@define('MEDIA_EXIF', 'EXIF/JPEG 그림 데이터를 불러오기');
@define('MEDIA_EXIF_DESC', '사용할 경우 그림에 포함되어 있는 EXIF/JPEG 메타데이터를 불러들여 데이터베이스에 저장하게 되며 차후 미디어 갤러리에서 볼 수 있게 됩니다.');
@define('MEDIA_PROP', '미디어 등록정보');
@define('MEDIA_PROP_DESC', '각 미디어 파일에 정의하고자 하는 등록정보 필드를 ";"로 하나씩 분리하여 입력합니다');
@define('MEDIA_PROP_MULTIDESC', '(특정 아이템이 글자 몇 자가 아니라 긴 글이 포함되어 있다는 것을 표시하고자 할 경우 해당 아이템 뒤에 ":MULTI"를 붙일 수 있습니다)');
@define('MEDIA_KEYWORDS', '미디어 키워드');
@define('MEDIA_KEYWORDS_DESC', '미디어 아이템의 키워드로 사용하기 위해 미리 정의해둘 단어들을 ";"로 하나씩 분리하여 입력합니다');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', '사용자의 개인 정보');
@define('USERCONF_CAT_PERSONAL_DESC', '개인 정보를 변경하는 곳입니다.');
@define('USERCONF_USERNAME', '아이디');
@define('USERCONF_USERNAME_DESC', '블로그에 로그인하기 위한 사용자 이름');
@define('USERCONF_PASSWORD', '암호');
@define('USERCONF_PASSWORD_DESC', '블로그에 로그인하기 위한 암호');
@define('USERCONF_CHECK_PASSWORD', '이전 암호');
@define('USERCONF_CHECK_PASSWORD_DESC', '위의 적힌 암호를 변경하려면 여기에 현재 사용중인 암호를 적으십시오.');
@define('USERCONF_USERLEVEL', '권한 레벨');
@define('USERCONF_USERLEVEL_DESC', '이 레벨은 블로그에 대해 사용자가 어떤 권한을 가지는지 결정하는데 사용됩니다.');
@define('USERCONF_GROUPS', '그룹 소속');
@define('USERCONF_GROUPS_DESC', '이 사용자는 다음 그룹에 속해 있습니다. 여러 그룹에 속할 수 있습니다.');
@define('USERCONF_EMAIL', '전자우편 주소');
@define('USERCONF_EMAIL_DESC', '사용하고 있는 개인 전자우편 주소');
@define('INSTALL_WYSIWYG', 'WYSIWYG 편집기 사용');
@define('INSTALL_WYSIWYG_DESC', 'WYSIWYG 편집기를 사용하겠습니까? (인터넷 익스플로러 5 이상에서 작동, 모질라 1.3 이상에서 부분 작동)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'WYSIWYG 편집기의 도구 모음');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'WYSIWYG 편집기에 표시할 수 있는 도구 모음 버튼의 목록을 설정합니다. 기본 설정 묶음(프리셋)을 추가적으로 변경하고자 할 경우 templates/XXX/admin/ckeditor_custom_config.js 파일을 만들면 됩니다. 보다 자세한 사항은 htmlarea/ckeditor_s9y_config.js 및 htmlarea/ckeditor_s9y_plugin.js 파일을 참고하기 바랍니다.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', '세렌디피티 (기본값)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', '간소화된 기능');
@define('USERCONF_WYSIWYG_PRESET_FULL', '전체 기능');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', '대안 설정');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor 전체 기능');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', '강제 사용: 세렌디피티');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', '강제 사용: 간소화된 기능');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', '강제 사용: 전체 기능');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', '강제 사용: 대안 설정');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', '강제 사용: CKEditor 전체 기능');
@define('USERCONF_SENDCOMMENTS', '덧글 알림 발송');
@define('USERCONF_SENDCOMMENTS_DESC', '작성된 글에 덧글이 달리면 전자우편을 받겠습니까?');
@define('USERCONF_SENDTRACKBACKS', '트랙백 알림 발송');
@define('USERCONF_SENDTRACKBACKS_DESC', '작성된 글에 트랙백이 추가되면 전자우편을 받겠습니까?');
@define('USERCONF_CREATE', '사용자를 비활성화하거나 활동을 금지하기');
@define('USERCONF_CREATE_DESC', '사용할 경우 해당 사용자가 블로그에서 더 이상 글을 편집하거나 새로 쓸 수 없게 됩니다. 관리자 화면에 들어오더라도 개인 설정을 확인하거나 다시 빠져나가는 것 밖에 할 수 없습니다.');
@define('USERCONF_ALLOWPUBLISH', '글 작성 권한');
@define('USERCONF_ALLOWPUBLISH_DESC', '이 사용자가 글을 작성할 권한이 있습니까?');
@define('SIMPLE_FILTERS', '간소화된 필터');
@define('SIMPLE_FILTERS_DESC', '사용할 경우 검색 입력창과 필터 기능을 필수요소만 남깁니다. 사용하지 않을 경우 가능한 모든 필터 기능이 다 나타납니다 - 미디어 보관함이나 글 편집기에도 보입니다.');
@define('INSTALL_BACKENDPOPUP', '관리 페이지에서 팝업 창을 사용할 수 있게 함');
@define('INSTALL_BACKENDPOPUP_DESC', '일부 관리 페이지 기능에서 팝업 창을 사용하고자 합니까? 사용하지 않을 경우 (기본값) 인라인 모달 대화상자를 범주 선택, 미디어 보관함 등에 사용하게 됩니다.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', '특정 관리자 화면 팝업 창을 강제로 표시');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', '일반적으로 관리자 화면의 팝업 창을 사용하고 있지 않을 경우라도 팝업 창을 강제로 사용하고자 하는 곳이 있으면 여기에 해당 장소들을 각각 쉼표로 분리하여 입력해둘 수 있습니다. 사용 가능한 장소는: ');
@define('SHOW_MEDIA_TOOLBAR', '미디어 선택 팝업 안에 툴바 보여주기');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', '새 글에 대한 기본 설정');
@define('CONF_USE_AUTOSAVE', '자동 저장 기능 사용');
@define('CONF_USE_AUTOSAVE_DESC', '사용할 경우 블로그 글에 입력한 내용을 브라우저의 세션 저장소에 주기적으로 저장하게 됩니다. 글 작성 중 브라우저가 비정상 종료될 경우 다음 번에 새로 글을 작성할 때 본문 내용이 자동 저장에서 복구되어 표시됩니다.');
@define('USERLEVEL_OBSOLETE', '주의: 사용자 레벨 속성은 플러그인의 하위 호환성 및 인증 대비책을 위해서만 사용되고 있습니다. 현재 사용자 권한 설정은 그룹 소속을 통해 이루어지고 있습니다.');
@define('USERCONF_CHECK_PASSWORD_ERROR', '이전 암호가 올바르지 않으므로 새 암호로 변경할 권한이 없습니다. 설정이 저장되지 않았습니다.');
@define('USERCONF_CHECK_USERNAME_ERROR', '사용자 이름은 비워둘 수 없습니다.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: 개인 설정 관리');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: 사용자 레벨 변경');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: "글 생성 금지하기" 설정 변경');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: 글 게시 권한 변경');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: 시스템 설정 관리');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: 블로그 관련 설정 관리');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: 글 관리');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: 다른 사용자의 글 관리');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: 글 불러들이기');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: 범주 관리');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: 다른 사용자의 범주 관리');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: 범주 삭제');
@define('PERMISSION_ADMINUSERS', 'adminUsers: 사용자 관리');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: 사용자 삭제');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: 사용자 레벨 변경');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: 자기 그룹에 속한 사용자 관리');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: 다른 그룹에 속한 사용자 관리');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: 새 사용자 생성');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: 사용자 그룹 관리');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: 플러그인 관리');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: 다른 사용자의 플러그인 관리');
@define('PERMISSION_ADMINIMAGES', 'adminImages: 미디어 파일 관리');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: 미디어 디렉토리 관리');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: 새 미디어 파일 추가');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: 미디어 파일 삭제');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: 다른 사용자의 미디어 파일 관리');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: 미디어 파일 보기');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: 작은 그림 동기화');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: 덧글 관리');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: 템플릿 관리');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: 다른 사용자의 미디어 파일 보기');
@define('PERMISSION_FORBIDDEN_PLUGINS', '사용 금지된 플러그인');
@define('PERMISSION_FORBIDDEN_HOOKS', '사용 금지된 이벤트');
@define('PERMISSION_HIDDENGROUP', '숨겨진 그룹 / 비작성자');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', '글이 저장되었습니다');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', '엮은 형태');
@define('COMMENTS_VIEWMODE_LINEAR', '나열 형태');
@define('DISPLAY_COMMENTS_AS', '덧글 표시 방식:');
@define('COMMENTS_DISABLE', '이 글에 덧글을 금지하기');
@define('COMMENTS_ENABLE', '이 글에 덧글을 허용하기');
@define('COMMENTS_CLOSED', '작성자가 이 글에 덧글을 금지했습니다');
@define('VIEW_EXTENDED_ENTRY', '"%s" 계속 읽기');
@define('TRACKBACK_SPECIFIC', '이 글에 대한 트랙백 전용 URI');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', '전체 보기');
@define('VIEW_TOPICS', '주제 보기');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', '주제로 본');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', '글이 성공적으로 삽입되지 않았습니다.');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', '입력 정보 기억하기');
@define('SUBMIT_COMMENT', '덧글 달기');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', '이 글을 구독하기');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', '브라우저가 유효한 HTTP 진입 경로(referrer) 문자열을 보내지 않았습니다. 브라우저/프록시 설정이 잘못되었거나 당신을 겨냥한 상호 사이트 요청 위조(XSRF) 때문이었을 수 있습니다. 요청한 사항을 처리할 수 없었습니다.');
@define('NAVLINK_AMOUNT', '내비게이션에 표시할 링크의 수 입력 (스타일 관리 페이지를 다시 불러들여야 함)');
@define('NAV_LINK_TEXT', '내비게이션 링크에 표시할 문구 입력');
@define('NAV_LINK_URL', '링크의 전체 주소(URL) 입력');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', '%s번 덧글은 이미 승인받은 것으로 나타났습니다.');
@define('COMMENT_EDITED', '선택된 덧글이 편집되었습니다.');
@define('COMMENTS_WILL_BE_MODERATED', '입력된 덧글은 표시가 되기 전에 검토를 거치게 됩니다.');
@define('THIS_COMMENT_NEEDS_REVIEW', '경고: 이 덧글은 표시가 되기 전에 승인을 받아야 합니다');
@define('DELETE_COMMENT', '덧글 삭제');
@define('APPROVE_COMMENT', '덧글 승인');
@define('REQUIRES_REVIEW', '검토 필요');
@define('COMMENT_APPROVED', '%s번 덧글이 성공적으로 승인되었습니다.');
@define('COMMENT_DELETED', '%s번 덧글이 성공적으로 삭제되었습니다.');
@define('COMMENTS_MODERATE', '이 글에 대한 덧글 및 트랙백은 검토를 거치게 됨');
@define('THIS_TRACKBACK_NEEDS_REVIEW', '경고: 이 트랙백은 표시가 되기 전에 승인을 받아야 합니다');
@define('DELETE_TRACKBACK', '트랙백 삭제');
@define('APPROVE_TRACKBACK', '트랙백 승인');
@define('TRACKBACK_APPROVED', '%s번 트랙백이 성공적으로 승인되었습니다.');
@define('TRACKBACK_DELETED', '%s번 트랙백이 성공적으로 삭제되었습니다.');
@define('COMMENT_NOTOKENMATCH', '중재 링크의 유효기간이 지났거나 %s번 덧글이 이미 승인 또는 삭제되었습니다');
@define('TRACKBACK_NOTOKENMATCH', '중재 링크의 유효기간이 지났거나 %s번 트랙백이 이미 승인 또는 삭제되었습니다');
@define('BADTOKEN', '유효하지 않은 중재 링크');
@define('TOP_LEVEL', '최상위 (본문)');
@define('VIEW_COMMENT', '덧글 보기');
@define('VIEW_ENTRY', '본문 보기');
@define('LINK_TO_ENTRY', '글에 대한 링크');
@define('LINK_TO_REMOTE_ENTRY', '원격 글에 대한 링크');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', '핑백을 URI %s(으)로 보내는 중...');
@define('PINGBACK_SENT', '핑백 성공');
@define('PINGBACK_FAILED', '핑백 실패: %s');
@define('PINGBACK_NOT_FOUND', '핑백 URI를 찾을 수 없었음.');
@define('TRACKBACK_SENDING', '트랙백을 URI %s(으)로 보내는 중...');
@define('TRACKBACK_SENT', '트랙백 성공');
@define('TRACKBACK_FAILED', '트랙백 실패: %s');
@define('TRACKBACK_NOT_FOUND', '트랙백 URI를 찾지 못했습니다.');
@define('TRACKBACK_URI_MISMATCH', '자동 검색된 트랙백 URI는 대상 URI와 맞지 않습니다.');
@define('TRACKBACK_CHECKING', '트랙백이 있는지 <u>%s</u> 확인중...');
@define('TRACKBACK_NO_DATA', '대상이 데이터를 담고 있지 않습니다.');
@define('TRACKBACK_COULD_NOT_CONNECT', '트랙백이 보내지지 않음: %s애서 %d번 포트를 열 수 없었음');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "안녕하세요, %s님.\n\n\"%s\" (<%s>)에 대한 덧글이 달릴 경우 알려달라는 요청을 한 바 있습니다. 이 구독사항을 승인하고자 할 경우 (\"2중 사용자 동의\") 다음 링크를 누르기 바랍니다:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "안녕하세요, %s님.\n\n새로운 덧글을 \"%s\"에 추가하셨습니다. 내용은 다음과 같습니다:\n\n%s\n\n블로그 주인이 전자우편을 통한 인증을 사용하고 있으므로 다음 링크를 눌러서 덧글을 인증하시기 바랍니다:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "안녕하세요 %s님.\n\n새로운 덧글을 \"%s\"에 추가하셨습니다. 내용은 다음과 같습니다:\n\n%s\n\n블로그 주인이 1회성 전자우편 인증을 사용하고 있으므로 다음 링크를 눌러서 덧글을 인증하시기 바랍니다:\n<%s>\n\n인증이 된 이후에는 동일한 사용자 이름과 전자우편 주소로 더 이상 인증을 안 거치고 덧글을 달 수 있게 됩니다.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here: ');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', '구독한 글 "%s"에 새로운 덧글이 달림');
@define('SUBSCRIPTION_MAIL', "%s님 안녕하십니까?\n\n\"%s\"에서 구독중인 \"%s\"(이)라는 글에 새로운 덧글이 달렸습니다.\n작성자 이름은 %s 입니다.\n\n여기로 가면 글을 볼 수 있습니다: %s\n\n이 링크를 누르면 구독 해지를 할 수 있습니다: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "%s님 안녕하십니까?\n\n\"%s\"에서 구독중인 \"%s\"(이)라는 글에 새로운 트랙백이 달렸습니다.\n작성자 이름은 %s 입니다.\n\n여기로 가면 글을 볼 수 있습니다: %s\n\n이 링크를 누르면 구독 해지를 할 수 있습니다: %s\n");
@define('SIGNATURE', "\n-- \n%s(은)는 세렌디피티로 작성되었습니다.\n여려분도 쓸 수 있는 최고의 블로그!\n<https://s9y.org>에서 알아보세요.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', '당신의 블로그 "%s"에 있는 글 "%s"에 새로운 덧글이 달렸습니다.');
@define('A_NEW_TRACKBACK_BLAHBLAH', '블로그 글 "%s"에 새로운 트랙백이 생성되었습니다.');
@define('YOU_HAVE_THESE_OPTIONS', '다음과 같은 옵션을 사용할 수 있습니다:');
@define('NEW_TRACKBACK_TO', '다음 글에 새로운 트랙백을 만들었습니다:');
@define('NEW_COMMENT_TO', '다음 글에 새 덧글을 달았습니다:');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', '검색어 %s(으)로 검색된 글이 없습니다' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', '검색어 %s(으)로 %s개의 글이 검색되었습니다:');
@define('SEARCH_TOO_SHORT', '검색어는 3자 이상이어야 합니다. 짧은 단어에는 s9y* 식으로 끝에 *을 붙여서 편법으로 검색을 시도해볼 수 있습니다.');
@define('SEARCH_ERROR', '검색 기능이 예상했던 대로 작동하지 않았습니다. 블로그 관리자에게 알립니다: 이 현상은 데이터베이스 내에 인덱스 키가 빠져있어서 발생할 수 있습니다. MySQL에서 다음 질의를 실행할 수 있는 데이터베이스 사용자 권한이 있어야 합니다: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> 데이터베이스에서 보고한 구체적인 에러는 다음과 같습니다: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', '덧글 내용이 비어 있으므로 %s돌아가서%s 다시 작성하십시오');
@define('COMMENT_NOT_ADDED', '이 글에 덧글 금지가 되어 있거나, 유효하지 않은 데이터를 입력했거나, 스팸방지 기능에 의해 차단되어 덧글을 추가하지 못했습니다. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', '다음에서 온 덧글:');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', '덧글에 대한 승인절차를 성공적으로 진행했습니다.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', '덧글의 승인 여부를 확인할 수 없었습니다. 승인 완료를 위해 누른 링크의 상태를 확인하기 바랍니다. 만약 링크가 발송된지 3주가 넘었다면 덧글을 다시 남겨야 합니다.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', '덧글 구독에 대한 승인절차를 성공적으로 진행했습니다.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', '옵션 "%s"에 대한 설정 구문이 잘못되었습니다. "%s" 종류에 해당하는 내용이 필요합니다.');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', '범주 목록을 보여줍니다.');
@define('CATEGORIES_PARENT_BASE', '하위 범주만 보이기');
@define('CATEGORIES_PARENT_BASE_DESC', '하나의 상위 범주를 골라서 그 아래에 있는 범주만 보이도록 할 수 있습니다.');
@define('CATEGORIES_HIDE_PARALLEL', '범주 트리에 속하지 않는 범주 숨기기');
@define('CATEGORIES_HIDE_PARALLEL_DESC', '다른 범주 트리에 속해 있는 범주를 보이지 않게 하려면 이것을 사용하십시오. "범주의 속성/템플릿" 플러그인을 적용한 멀티블로그와 함께 사용할 때 가장 의미가 있습니다.');
@define('CATEGORIES_HIDE_PARENT', '선택한 상위 범주를 숨기기');
@define('CATEGORIES_HIDE_PARENT_DESC', '범주 목록 나열을 특정 범주로 국한시킬 경우 기본적으로 상위 범주가 목록에 나타납니다. 이 기능을 끄면 상위 범주 이름이 나타나지 않습니다.');
@define('CATEGORY_PLUGIN_TEMPLATE', '스마티 템플릿 사용');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', '사용할 경우, 이 플러그인은 스마티 템플릿 기능을 활용하여 범주 목록을 출력하게 됩니다. 구성은 "plugin_categories.tpl" 템플릿 파일을 편집하여 고칠 수 있습니다. 성능 저하를 가져오게 되므로 특화시키지 않을 경우 꺼두십시오.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', '범주 별 글의 수 보이기');
@define('CATEGORY_PLUGIN_SHOWALL', '사용할 경우 범주 제한 없이 블로그를 보여주는 링크를 방문자가 볼 수 있게 추가합니다.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', '방문자가 한 번에 여러 개의 범주를 표시할 수 있게 함');
@define('CATEGORIES_ALLOW_SELECT_DESC', '이것을 사용하게 되면 옆줄에 이 플러그인을 통해 표시된 각 범주 옆에 선택 상자가 나타나게 됩니다. 방문자는 이 상자에 체크 표시를 한 다음 선택된 범주에 대한 글을 볼 수 있습니다.');
@define('CATEGORIES_TO_FETCH', '불러올 범주');
@define('CATEGORIES_TO_FETCH_DESC', '어느 작성자에서 범주를 불러오겠습니까?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', '작성자의 목록 보이기');
@define('AUTHORS_SHOW_ARTICLE_COUNT', '작성자 이름 옆에 글의 수 보이기');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', '사용할 경우, 각 작성자의 이름 옆 괄호 속에 해당 작성자가 쓴 글의 수를 표시합니다.');
@define('PLUGIN_AUTHORS_MINCOUNT', '최소 X개의 글을 쓴 작성자만 보여주기');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', '중개');
@define('SHOWS_RSS_BLAHBLAH', 'RSS 중개 링크 보여주기');
@define('SYNDICATE_THIS_BLOG', '구독하기');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', '피드 규격');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', '모든 피드에 사용할 규격을 선택합니다. 둘 다 일반적인 리더에서 모두 지원합니다.');
@define('SYNDICATION_PLUGIN_COMMENTFEED', '덧글 피드');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', '덧글 피드를 추가로 표시합니다. 대개 블로그 작성자에게만 관심이 갈 것입니다.');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s 피드');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 피드');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 피드');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 피드');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 덧글');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 피드');
@define('SYNDICATION_PLUGIN_FEEDICON', '피드 아이콘');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', '피드에 문자 링크 대신 (대형) 아이콘을 표시합니다. "없음"으로 설정하면 나타나지 않으며, "피드버너"를 선택할 경우 아래에 ID를 입력하면 피드버너 카운터를 표시합니다.');
@define('SYNDICATION_PLUGIN_SUBTOME', '서브투미(subToMe)');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', '서브투미(subToMe) 버튼을 보여줍니다. 이는 피드 구독을 더 쉽게 하도록 도와주는 계층입니다.');
@define('SYNDICATION_PLUGIN_CUSTOMURL', '사용자화된 주소(URL)');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', '블로그 설정에 지정한 사용자화된 피드로 링크를 할 경우 이 설정을 사용합니다.');
@define('SYNDICATION_PLUGIN_FEEDNAME', '피드에 표시할 이름');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', '피드에 대한 사용자 정의 이름을 입력할 수 있습니다 (선택 사항이며, 비워둘 경우 "feed"로 자동 표시됨)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', '덧글 피드에 표시할 이름');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', '덧글 피드에 대한 사용자 정의 이름을 입력할 수 있습니다 (선택 사항)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', '피드버너 아이디');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', '게시하고자 하는 피드의 아이디');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', '피드버너 그림');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', '표시할 그림(feedburner.com에 있음)의 이름 (fbapix.gif 형태이며, 비워두면 카운터 표시)');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', '피드버너 제목');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', '그림 옆에 표시할 제목 (있을 경우)');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', '피드버너 그림 설명');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', '그림 위에 커서를 댈 때 표시할 설명 (있을 경우)');
@define('SYNDICATION_PLUGIN_XML_DESC', '문자 링크만 보여주기를 원할 경우 "없음"으로 설정합니다.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', '아무런 글이 작성되지 않은 시간대의 글 목록 링크를 숨김 (글 수를 집계하는 기능을 사용해야 함)');
@define('ARCHIVE_COUNT', '목록에 표시될 아이템 수');
@define('ARCHIVE_COUNT_DESC', '표시할 달, 주, 또는 날의 총 개수');
@define('ARCHIVE_FREQUENCY', '표시 아이템의 주기');
@define('ARCHIVE_FREQUENCY_DESC', '목록에 있는 각 아이템의 달력 상 주기 단위');
@define('BROWSE_ARCHIVES', '월 단위로 글 보기');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', '"세렌디피티"를 텍스트로 출력');
@define('POWERED_BY_SHOW_TEXT_DESC', '"세렌디피티 웹로그"를 텍스트로 출력함');
@define('POWERED_BY_SHOW_IMAGE', '"세렌디피티"를 로고로 출력');
@define('POWERED_BY_SHOW_IMAGE_DESC', '세렌디피티 로고를 보여줌');
@define('ADVERTISES_BLAHBLAH', '블로그의 제작 도구를 광고함');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', '로그인에 https 사용');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', '로그인 링크가 https 위치로 향하도록 합니다. 웹서버가 이 기능을 지원해야 합니다.');
@define('SUPERUSER', '블로그 관리');
@define('SUPERUSER_OPEN_ADMIN', '관리 화면 열기');
@define('SUPERUSER_OPEN_LOGIN', '로그인 화면 열기');
@define('ALLOWS_YOU_BLAHBLAH', '블로그 관리를 하기 위한 링크를 옆줄에 표시합니다.');

/* PLUGIN_CALENDAR */
@define('CALENDAR', '달력');
@define('CALENDAR_BOW_DESC', '한 주일의 시작으로 간주할 요일을 선택합니다. 기본값은 월요일입니다.');
@define('QUICKJUMP_CALENDAR', '빨리 찾아보는 달력');
@define('CALENDAR_BEGINNING_OF_WEEK', '한 주의 시작일');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', '플러그인 API 훅 사용');
@define('CALENDAR_EXTEVENT_DESC', '사용할 경우, 플러그인은 달력에 훅을 걸어서 자체적인 이벤트를 강조 표시할 수 있게 됩니다. 이 기능이 필요한 플러그인을 설치했을 때만 사용하십시오. 그냥 켜놓게 되면 성능만 떨어뜨립니다.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', '원하는 글 찾기');
@define('SEARCH_FULLENTRY', '글 전체를 보여주기');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', '옆줄에 HTML이 들어있는 덩어리를 넣기');
@define('THE_NUGGET', 'HTML 덩어리를 넣으세요!');
@define('BACKEND_TITLE', '플러그인 설정 화면에 추가 정보 표시');
@define('BACKEND_TITLE_FOR_NUGGET', '플러그인 설정 화면에 HTML 덩어리 플러그인의 설명과 함께 표시될 별도의 문장을 직접 정할 수 있습니다. 제목이 없는 여러 개의 HTML 덩어리를 쓸 경우 각각을 구별하기 쉽게 됩니다.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', '상위 진출/진입 사항을 링크로 표시');
@define('INSTALL_TOP_AS_LINKS_DESC', '"아니오": 구글 스팸을 방지하기 위해 진출 및 진입 사항을 일반 글로 표시합니다. "예": 진출 및 진입 사항에 링크를 겁니다. "기본값": 전체 설정에 따릅니다(추천).');
@define('HAVE_TO_BE_LOGGED_ON', '이 페이지를 보려면 로그인해야 합니다');
@define('WELCOME_TO_ADMIN', '세렌디피티 관리 도구에 오신 것을 환영합니다.');
@define('SERENDIPITY_PHPVERSION_FAIL', '세렌디피티는 PHP 버전 %2$s 이상이 필요합니다. 현재 시스템은 더 낮은 버전 (%1$s)을 사용하고 있으므로 업그레이드 해야 합니다. 대부분의 호스팅 서비스 제공자들은 관리자 화면이나 .htaccess 지시어 등을 통해 새로운 PHP 버전으로 업그레이드할 수 있는 기능을 제공합니다.');
@define('SYNDICATION_PLUGIN_BIGIMG', '대형 그림');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', '옆줄에 나타나는 피드 맨 위에 (대형) 그림을 표시합니다. 그림 파일에 대한 전체 또는 절대 경로를 입력합니다. "없음"으로 설정하면 문자 링크를 표시합니다(예전 기본 설정).');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(만약 여기에 http://...로 시작하는 절대 경로를 입력했다면 피드버너 설정에서 "강제로"를 선택했을 때 이 주소를 리다이렉트 대상으로 사용하게 됩니다. 그리고 이 주소는 피드버너와 독립적일 수 있다는 점도 참고하십시오. 신규 구글 피드버너의 경우 http://feeds2.feedburner.com/yourfeedname 식으로 입력해야 합니다.)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', '이 설정을 "강제로"로 선택했을 경우 피드버너 뿐만 아니라 다른 웹 서비스로도 RSS 피드를 전달할 수 있습니다. 아래의 "피드버너 ID" 설정을 보고 절대 경로를 입력하십시오.');
@define('MEDIA_PROPERTY_COMMENT1', '짧은 설명');
@define('MEDIA_PROPERTY_COMMENT2', '긴 설명');
@define('DELETE_SELECTED_ENTRIES', '선택한 글 삭제하기');
@define('MEDIA_PROPERTY_ALT', '묘사 (ALT 속성에 대한 요약)');
@define('MEDIA_PROPERTY_DPI', '밀도(DPI)');
@define('MEDIA_PROPERTY_TITLE', '제목');
@define('SERENDIPITY_NOT_INSTALLED', '세렌디피티가 아직 설치되지 않았습니다. 지금 <a href="%s">설치</a>하십시오.');
@define('COMMENT_ADDED_CLICK', '%s여기를 눌러%s 덧글 목록으로 돌아가거나 %s여기를 눌러%s 이 창을 닫습니다.');
@define('COMMENT_NOT_ADDED_CLICK', '%s여기를 눌러%s 덧글 목록으로 돌아가거나 %s여기를 눌러%s 이 창을 닫습니다.');
@define('MEDIA_PROPERTY_RUN_LENGTH', '실행 길이');
@define('MEDIA_PROPERTY_DATE', '관계된(작성된) 날짜');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', '%s개의 글에서 이동한 디렉토리로 주소를 변경했습니다.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'MySQL이 아닌 데이터베이스에서는 이전 디렉토리 주소를 새 디렉토리 주소로 바꾸기 위해 모든 글을 하나씩 살펴가는 작업을 할 수 없습니다. 수작업으로 각 글에 대해 주소 교체 작업을 해야 합니다. 이것이 너무 번거로울 경우 디렉토리를 원래 위치로 다시 되돌릴 수 있습니다.');
@define('TRACKBACK_SIZE', '대상 URI가 최대 파일 크기인 %s 바이트를 초과합니다.');
@define('CLICK_FILE_TO_INSERT', '삽입할 파일을 누르십시오:');
@define('SELECT_FILE', '삽입할 파일 선택');
@define('MANAGE_IMAGES', '그림 관리');
@define('WORD_NEW', '신규');
@define('WORD_OR', '또는');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', '외부 페이지: 외부 서비스');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', '외부 페이지: 부가 기능');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', '외부 페이지: 개조 사항');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', '외부 페이지: 표시 상태');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', '외부 페이지: 글 관련');
@define('PLUGIN_GROUP_BACKEND_EDITOR', '관리 페이지: 편집기');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', '관리 페이지: 사용자 관리');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', '관리 페이지: 메타 정보');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', '관리 페이지: 템플릿');
@define('PLUGIN_GROUP_BACKEND_FEATURES', '관리 페이지: 부가 기능');
@define('PLUGIN_GROUP_IMAGES', '그림');
@define('PLUGIN_GROUP_ANTISPAM', '스팸 방지');
@define('PLUGIN_GROUP_MARKUP', '마크업');
@define('PLUGIN_GROUP_STATISTICS', '통계');
@define('IMPORT_WELCOME', '세렌디피티의 데이터 불러오기 유틸리티입니다');
@define('USER_SELF_INFO', '%s (%s) 로그인 됨');
@define('IMPORT_WHAT_CAN', '다른 블로그 소프트웨어로 작성된 글을 여기서 불러들일 수 있습니다');
@define('IMPORT_SELECT', '불러들일 글의 소프트웨어 종류를 고르십시오');
@define('MANAGE_STYLES', '스타일 관리');
@define('SELECT_A_PLUGIN_TO_ADD', '설치하고 싶은 플러그인을 선택하십시오.');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', '설치된 플러그인의 목록입니다.');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', '지금 중지');
@define('DELETE_SELECTED_COMMENTS', '선택한 덧글 삭제');
@define('MODERATE_SELECTED_COMMENTS', '선택한 덧글 승인');
@define('FIND_MEDIA', '미디어 찾기');
@define('TEMPLATE_OPTIONS', '템플릿 선택 사항');
@define('BULKMOVE_INFO', '대량으로 이동하기');
@define('BULKMOVE_INFO_DESC', '여러 파일을 선택하여 한꺼번에 새로운 위치로 이동시킬 수 있습니다. <strong>주의:</strong> 이 작업은 여러 파일의 대량 삭제와 마찬가지로 되돌릴 수 없습니다. 선택한 파일은 물리적으로 이동되며 이를 참조하는 블로그 글은 새 위치를 참조하도록 재작성됩니다.');
@define('UPDATE_ALL', '모두 업데이트');
@define('START_UPDATE', '업데이트 시작...');
@define('ERROR_FILE_NOT_EXISTS', '오류: 예전 파일 이름이 존재하지 않습니다.');
@define('ERROR_SOMETHING', '오류: 무언가 잘못되었습니다.');
@define('DIRECT_LINK', '이 글에 대한 직접 링크');
@define('SELECT_TEMPLATE', '블로그에 사용할 템플릿을 선택하십시오.');
@define('DATABASE_ERROR', '세렌디피티 오류: 데이터베이스에 접속할 수 없었습니다 - 종료합니다.');
@define('LIMIT_TO_NUMBER', '몇 개의 아이템을 표시하겠습니까?');
@define('DIRECTORIES_AVAILABLE', '하위 디렉토리 목록에서 디렉토리 이름을 누르면 그 디렉토리 안에 새 디렉토리를 만들 수 있습니다.');
@define('CATEGORY_INDEX', '글에 적용할 수 있는 범주 목록입니다');
@define('PAGE_BROWSE_PLUGINS', '%s번째 페이지 | 총 %s 페이지 | 총 %s개의 플러그인');
@define('CHARSET_NATIVE', '지역 전용');
@define('XMLRPC_NO_LONGER_BUNDLED', '세렌디피티에 대한 XML-RPC API 인터페이스는 지속적으로 보안 상의 문제가 지적되고 있고 사용자 수가 적은 관계로 더 이상 기본적으로 포함되어 있지 않습니다. 그러므로 XML-RPC API를 사용하기 위해서는 XML-RPC 플러그인을 설치해야 합니다. 기존 어플리케이션에 사용하던 주소에는 변함이 없습니다. 플러그인을 설치하게 되면 곧바로 API를 사용할 수 있게 됩니다.');
@define('AUTHORS_ALLOW_SELECT', '방문자가 한 번에 여러 작성자의 글을 볼 수 있게 합니까?');
@define('AUTHORS_ALLOW_SELECT_DESC', '사용할 경우 이 플러그인에 의해 표시되는 각 작성자 이름 옆에 체크박스가 표시됩니다. 선택 여부에 따라 원하는 조건의 글을 볼 수 있게 됩니다.');
@define('PREFERENCE_USE_JS', '고급 자바스크립트 기능 사용');
@define('PREFERENCE_USE_JS_DESC', '사용할 경우 고급 자바스크립트 기능 부분을 활용하게 되어 사용성이 향상됩니다. 대표적으로 플러그인 설정에서 플러그인을 끌어서 이동하여 순서를 바꿀 수 있게 됩니다.');
@define('PREFERENCE_USE_JS_WARNING', '(이 페이지는 고급 자바스크립트 기능을 사용합니다. 기능 사용에 문제가 있을 경우 개인 설정에서 고급 자바스크립트 기능을 끄거나 브라우저의 자바스크립트 기능을 끄도록 합니다)');
@define('PLUGIN_GROUP_ALL', '모든 범주');
@define('PENDING_COMMENT_SUBSCRIPTION', '구독 대기 중');
@define('NO_COMMENT_SUBSCRIPTION', '구독되지 않음');
