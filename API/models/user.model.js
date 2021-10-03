'use strict';
var dbConn = require('./../config/db.config');
var crypto = require('crypto');

//User object create
var User = function (user) {
  this.first_name = user.first_name;
  this.last_name = user.last_name;
  this.email = user.email;
  this.phone = user.phone;
  this.password = user.password;
};
User.login = function (user, result) {
  var password = crypto.createHash('md5').update(user.password).digest('hex');

  dbConn.query(
    'Select * from user where email = ? And password = ?',
    [user.email, password],
    function (err, res) {
      if (err) {
        console.log('error: ', err);
        result(err, null);
      }
      result(null, res);
    }
  );
};

User.update = function (user, result) {
  dbConn.query(
    'UPDATE user SET first_name=?,last_name=?,email=?,phone=? WHERE userID = ?',
    [user.first_name, user.last_name, user.email, user.phone, user.userID],
    function (err, res) {
      if (err) {
        console.log('error: ', err);
        result(null, err);
      }
      console.log('User: ', res);
      result(null, res);
    }
  );
};

User.register = function (user, result) {
  var password = crypto.createHash('md5').update(user.password).digest('hex');

  dbConn.query(
    'Select * from user where email = ?',
    user.email,
    function (err, res) {
      if (err) {
        console.log('error: ', err);
        result(err, null);
      } else {
        if (res.length) {
          result(null, {
            err: -100,
          });
        } else {
          dbConn.query(
            'INSERT INTO user (`first_name`, `last_name`, `email`, `phone`, `password`) VALUES (?, ?, ?, ?, ?)',
            [user.first_name, user.last_name, user.email, user.phone, password],
            function (err, res) {
              if (err) {
                console.log('error: ', err);
                result(null, err);
              }
              console.log(res.insertId);
              result(null, res);
            }
          );
        }
      }
    }
  );
};

module.exports = User;
