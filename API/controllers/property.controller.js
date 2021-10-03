'use strict';

const Property = require('../models/property.model');
var multiparty = require('multiparty');

exports.add = function (req, res) {
  var form = new multiparty.Form();

  form.parse(req, function (err, fields, files) {
    if (err) {
      res.send(err);
    }

    Property.add(fields, files, function (err, property) {
      if (err) {
        res.send(err);
      }

      res.send(property);
    });
  });
};

exports.latest3 = function (req, res) {
  Property.latest3(function (err, property) {
    if (err) {
      res.send(err);
    }
    res.send(property);
  });
};

exports.find = function (req, res) {
  Property.find(req.body, function (err, property) {
    if (err) {
      res.send(err);
    }

    res.send(property);
  });
};

exports.findById = function (req, res) {
  Property.findById(req.params.id, function (err, property) {
    if (err) {
      res.send(err);
    }
    res.json(property);
  });
};

exports.saveOrder = function (req, res) {
  Property.saveOrder(req.body, function (err, user) {
    if (err) {
      res.send(err);
    }

    res.send(user);
  });
};

exports.getOrderByID = function (req, res) {
  Property.getOrderByID(req.params.id, function (err, property) {
    if (err) {
      res.send(err);
    }
    res.json(property);
  });
};
