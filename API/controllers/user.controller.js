'use strict';
const User = require('../models/user.model');

exports.login = function (req, res) {
  User.login(req.body, function (err, user) {
    if (err) res.send(err);

    res.send(user);
  });
};

exports.update = function (req, res) {
  User.update(req.body, function (err, user) {
    if (err) res.send(err);

    res.send(user);
  });
};

exports.register = function (req, res) {
  User.register(req.body, function (err, user) {
    if (err) res.send(err);

    res.send(user);
  });
};
