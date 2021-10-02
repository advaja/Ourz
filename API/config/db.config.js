'use strict';
const mysql = require('mysql');

const dbConn = mysql.createPool({
  host: 'us-cdbr-east-04.cleardb.com',
  user: 'ba3c313e9741ba',
  password: 'd5925a64',
  database: 'heroku_1386f666b336639',
});

module.exports = dbConn;
