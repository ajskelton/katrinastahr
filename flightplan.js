var plan = require('flightplan');

// configuration
plan.target('development', [
  {
    host: 'biz157.inmotionhosting.com',
    username: 'redcar7',
    port: 2222,
    agent: process.env.SSH_AUTH_SOCK
  },
  {
    webRoot: '~/public_html/dev/'
  }
]);
plan.taget('production', [
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
  // rsync files to all the destination's hosts
  local.transfer(filesToCopy, 'katrinastahr/wp-content/themes/KatrinaStahr');
});