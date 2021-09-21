const express = require("express");
const router = express.Router();
const propertyController = require("../controllers/property.controller");

router.post("/add", propertyController.add);
router.post("/latest3", propertyController.latest3);
router.post("/find", propertyController.find);
router.post("/saveOrder", propertyController.saveOrder);
router.post("/getOrderByID/:id", propertyController.getOrderByUserID);
router.post("/findByID/:id", propertyController.findById);

module.exports = router;
