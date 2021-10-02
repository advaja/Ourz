const express = require('express');
const router = express.Router();
const userController = require('../controllers/user.controller');

router.post('/login', userController.login);
router.post('/update', userController.update);
router.post('/register', userController.register);

module.exports = router;
