<?php 

use core\app;

/*panel*/
app::get('/panel/admin', '/panel/index', 'admin', ['Panel']);
app::get('/panel/limit/([0-9]+)', '/panel/limit/([0-9]+)', 'admin', ['Panel']);

/*article*/
app::get('/panel/article/page/([0-9]+)', '/article/article', 'admin', ['Panel']);
app::get('/panel/article/show/([0-9]+)', '/article/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/category/([0-9a-zA-Z-_\+]+)/([0-9a-zA-Z-_\+]+)/page/([0-9]+)', 
'/article/ByCategory/([0-9a-zA-Z-_\+]+)/([0-9a-zA-Z-_\+]+)', 'admin', ['Panel']);
app::get('/panel/article/create', '/article/create', 'admin', ['Panel']);
app::post('/panel/article/create', '/article/articleCreate', 'admin', ['Panel']);
app::get('/panel/article/update/([0-9]+)', '/article/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/article/update', '/article/ArticleUpdate', 'admin', ['Panel']);
app::get('/panel/article/delete/([0-9]+)', '/article/ArticleDelete/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/destroy/([0-9]+)', '/article/ArticleDestroy/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/status/([0-9]+)', '/article/articleStatus/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/article/user/([0-9]+)/page/([0-9]+)', '/article/articleByUser', 'admin', ['Panel']);
app::get('/panel/article/search/key/(.*?)', '/article/ArticleSearchEngine', 'admin', ['Panel']);
app::get('/panel/article/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/article/ArticleSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

/*setting*/
app::get('/panel/setting/page/([0-9]+)', '/setting/setting', 'admin', ['Panel']);
app::get('/panel/setting/show/([0-9]+)', '/setting/show/([0-9]+)', 'admin', ['Panel']);
app::get('/panel/setting/update/([0-9]+)', '/setting/update/([0-9]+)', 'admin', ['Panel']);
app::post('/panel/setting/update', '/setting/settingUpdate', 'admin', ['Panel']);
app::get('/panel/setting/search/key/(.*?)', '/setting/settingSearchEngine', 'admin', ['Panel']);
app::get('/panel/setting/search/data/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)/page/([0-9]+)', 
	'/setting/settingSearch/([0-9a-zA-Z-_]+)/([0-9a-zA-Z-_]+)', 'admin', ['Panel']);

