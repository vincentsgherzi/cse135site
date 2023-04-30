const express = require('express');
const ip = require('ip');
const app = express();

app.get('/node-hello-world.js', (req, res) => {

  const currentDate = new Date().toISOString().split('T')[0];
  const currentIP = ip.address()

  let respond = "<h1>Hello Node World</h1>"
  respond+="<h2>Hello World</h2>"
  respond+="<p>This page was generated with the Node.js and Express</p>"
  respond+="<p>This program was run at: "+{currentDate}+"</p>"
  respond+="<p>Your current IP address is: "+{currentIP}+"</p>"

  res.send(respond)
});

app.listen(3000, () => {
  console.log('Example app listening at http://localhost:3000');
});