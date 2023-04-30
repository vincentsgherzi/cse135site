const express = require('express');
// const ip = require('ip');
const app = express();

app.get('/node-hello-world', (req, res) => {

  const currentDate = JSON.stringify(new Date().toISOString().split('T')[0])
  const currentIP = JSON.stringify(req.headers['x-forwarded-for'])


  let respond = "<h1>Hello Node World</h1>"
  respond+="<h2>Hello World</h2>"
  respond+="<p>This page was generated with the Node.js and Express</p>"
  respond+="<p>This program was run at: "+ currentDate +"</p>"
  respond+="<p>Your current IP address is: "+ currentIP +"</p>"

  res.send(respond)
});

app.get('/node-hello-json', (req, res) => {

  const ipAddress = req.headers['x-forwarded-for']
  const today = new Date().toISOString().slice(0, 10)

  const data = {
    message: 'Hello World from PHP!',
    date: `Today's date is ${today}`,
    ipAddress: ipAddress,
  };


  res.send("<div>"+JSON.stringify(data)+"</div>")
});

app.listen(3000, () => {
  console.log('Example app listening at http://localhost:3000')
});