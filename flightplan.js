var plan = require('flightplan');

// configuration
plan.target('development', [
  {
    host: 'biz157.inmotionhosting.com',
    username: 'redcar7',
    port: 2222,
    agent: process.env.SSH_AUTH_SOCK
  }
]);
plan.target('production', [
  {
    host: 'biz157.inmotionhosting.com',
    username: 'redcar7',
    port:2222,
    agent: process.env.SSH_AUTH_SOCK
  }
]);

// run commands on localhost
plan.local(function(local) {
  // uncomment these if you need to run a build on your machine first
  // local.log('Run build');
  // local.exec('gulp build');

  local.log('Copy files to remote hosts');
  var filesToCopy = local.exec('git ls-files', {silent: true});
  // var webRoot = plan.runtime.options.webRoot;
  if(plan.runtime.target === 'production') {
    var webRoot = '~/public_html/clients/';
  } 
  if(plan.runtime.target === 'development') {
    var webRoot = '~/public_html/dev/'
  }
  // rsync files to all the destination's hosts
  local.transfer(filesToCopy, webRoot + 'katrinastahr/wp-content/themes/KatrinaStahr');
});