const express = require('express');
const bodyParser = require('body-parser');
const cors = require('cors')

var path = require('path');

const app = express();
const port = process.env.PORT || 3000;

app.use("/uploads",express.static(__dirname + '/uploads'))
app.use(bodyParser.urlencoded({ extended: true }))
app.use(bodyParser.json())
app.use(cors({origin: '*'}))

app.get('/', (req, res) => {
  res.send("Hello World");
});

const userRoutes = require('./routes/user.routes')
const propertyRoutes = require('./routes/property.routes')

app.use('/user', userRoutes)
app.use('/property', propertyRoutes)

app.listen(port, () => {
  console.log(`Server is listening on port ${port}`);
});