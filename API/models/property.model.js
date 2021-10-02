'use strict';
var dbConn = require('./../config/db.config');

const fs = require(`fs`);
const multer = require('multer');

const upload = multer({
  dest: 'uploads/',
});

//Property object create
var Property = function (property) {
  this.owner_name = property.owner_name;
  this.address = property.address;
  this.street = property.street;
  this.street_number = property.street_number;
  this.city = property.city;
  this.lat = property.lat;
  this.lng = property.lng;
  this.startDate = property.startDate;
  this.endDate = property.endDate;
  this.time1 = property.time1;
  this.time2 = property.time2;
  this.peoples = property.peoples;
  this.rate = property.rate;
  this.phone = property.phone;
  this.description = property.description;
  this.imagePath1 = property.imagePath1;
  this.imagePath2 = property.imagePath2;
  this.imagePath3 = property.imagePath3;
  this.imagePath4 = property.imagePath4;
};

Property.add = function (property, files, result) {
  upload.single(files.imageUpload1[0]);

  const filesArray = [];

  Object.keys(files).forEach((key) => {
    filesArray.push(files[key]);
  });

  //console.log(filesArray)

  var filenames = [];

  for (let i = 0; i < filesArray.length; i++) {
    const file = filesArray[i][0];

    const filename = 'uploads/' + new Date().getTime() + file.originalFilename;

    filenames.push(filename);

    const fileData = fs.readFileSync(file.path);
    fs.writeFileSync(filename, fileData);
  }

  if (!filenames[1]) {
    filenames[1] = '';
  }

  if (!filenames[2]) {
    filenames[2] = '';
  }

  if (!filenames[3]) {
    filenames[3] = '';
  }

  if (!filenames[4]) {
    filenames[4] = '';
  }

  dbConn.query(
    'INSERT INTO property (`owner_name`, `address`, `city`, `lat`, `lng`, `street`, `street_number`, `startDate`, `endDate`, `time1`, `time2`, `peoples`, `rate`, `phone`, `description`, `imagePath1`, `imagePath2`, `imagePath3`, `imagePath4`) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)',
    [
      property.owner_name[0],
      property.address[0],
      property.city[0],
      property.lat[0],
      property.lng[0],
      property.street[0],
      property.street_number[0],
      property.startDate[0],
      property.endDate[0],
      property.time1[0],
      property.time2[0],
      property.peoples[0],
      property.rate[0],
      property.phone[0],
      property.description[0],
      filenames[0],
      filenames[1],
      filenames[2],
      filenames[3],
    ],
    function (err, res) {
      if (err) {
        result(null, err);
      } else {
        result(null, res);
      }
    }
  );
};

Property.latest3 = function (result) {
  dbConn.query(
    'SELECT * FROM `property` order by propertyID DESC limit 3',
    function (err, res) {
      if (err) {
        result(null, err);
      } else {
        result(null, res);
      }
    }
  );
};

Property.find = function (property, result) {
  var dataBaseCondition = '';
  var dataBaseValue = [];
  var index = 0;
  Object.keys(property).forEach(function (e) {
    if (property[e]) {
      if (index == 0) {
        if (e == 'startDate') {
          dataBaseCondition += e + ' <= ?';
        } else if (e == 'endDate') {
          dataBaseCondition += e + ' >= ?';
        } else if (e == 'time1') {
          dataBaseCondition += e + ' <= ?';
        } else if (e == 'time2') {
          dataBaseCondition += e + ' >= ?';
        } else if (e == 'rate') {
          dataBaseCondition += e + ' <= ?';
        } else {
          dataBaseCondition += e + ' = ?';
        }
      } else {
        if (e == 'startDate') {
          dataBaseCondition += ' AND ' + e + ' <= ?';
        } else if (e == 'endDate') {
          dataBaseCondition += ' AND ' + e + ' >= ?';
        } else if (e == 'time1') {
          dataBaseCondition += ' AND ' + e + ' <= ?';
        } else if (e == 'time2') {
          dataBaseCondition += ' AND ' + e + ' >= ?';
        } else if (e == 'rate') {
          dataBaseCondition += ' AND ' + e + ' <= ?';
        } else {
          dataBaseCondition += ' AND ' + e + ' = ?';
        }
      }

      dataBaseValue.push(property[e]);
      index++;
    }
  });

  dbConn.query(
    'SELECT * FROM `property` where ' + dataBaseCondition,
    dataBaseValue,
    function (err, res) {
      if (err) {
        console.log('error: ', err);
        result(err, null);
      } else {
        result(null, res);
      }
    }
  );
};

Property.findById = function (id, result) {
  dbConn.query(
    'Select * from property where propertyID = ? ',
    id,
    function (err, res) {
      if (err) {
        result(err, null);
      } else {
        result(null, res);
      }
    }
  );
};

Property.saveOrder = function (orderData, result) {
  dbConn.query(
    'INSERT INTO user_orders (`propertyID`, `userID`, `paymentID`, `totalHours`) VALUES ( ?, ?, ?, ?)',
    [
      orderData.propertyID,
      orderData.userID,
      orderData.paymentID,
      orderData.totalHours,
    ],
    function (err, res) {
      if (err) {
        result(null, err);
      } else {
        dbConn.query(
          "UPDATE property SET isBooked='1' WHERE propertyID = ?",
          [orderData.propertyID],
          function (err, res) {
            if (err) {
              result(null, err);
            } else {
              result(null, res);
            }
          }
        );
      }
    }
  );
};

Property.getOrderByID = function (id, result) {
  dbConn.query(
    'SELECT * FROM `user_orders` join user on user.userID=user_orders.userID join property on property.propertyID=user_orders.propertyID Where user_orders.userID=? ',
    id,
    function (err, res) {
      if (err) {
        result(err, null);
      } else {
        result(null, res);
      }
    }
  );
};

module.exports = Property;
