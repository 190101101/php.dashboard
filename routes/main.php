<?php 

use core\app;
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_]+)
// ([0-9a-zA-Z-_\?\=\&\+]+)
// ([0-9]+)

/*home*/
/*auth*/
app::get('/auth', '/auth/AuthPage', 'main', ['Authless']);
app::post('/signup', '/auth/SignUp', 'main', ['Authless']);
app::post('/signin', '/auth/SignIn', 'main', ['Authless']);
app::get('/signout', '/auth/SignOut', 'main', ['Auth']);

/*error*/
app::get('/404', '/error/PageNotFound', 'main');
app::get('/error/type/([0-9a-zA-Z-_]+)', '/error/errorType/([0-9a-zA-Z-_]+)', 'main');

/*dd*/
app::get('/dd', '/dd/dd', 'main');
app::post('/dd', '/dd/create', 'main');


