const express = require('express');
// const ip = require('ip');
const app = express();
const bodyParser = require('body-parser');

app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());

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

app.get('/node-environment', (req, res) => {
  let respond = "<h1>Node Environment</h1>"
  respond+="<h2>Headers</h2>"
  respond+="<pre>" + JSON.stringify(req.headers, null, 2) + "</pre>"
  respond+="<h2>Environment vars</h2>"
  respond+="<pre>" + JSON.stringify(process.env, null, 2) + "</pre>"

  res.send(respond)
});

app.get('/node-get-echo', (req, res) => {
  const query = req.query;
  const queryKeys = Object.keys(query);
  let queryString = '';

  if (queryKeys.length > 0) {
    queryString = `Query String: ${req.url.slice(req.url.indexOf('?') + 1)}`;
  } else {
    queryString = 'Query String:';
  }

  res.send(`
    <h1 align="center">GET Request Echo</h1>
    ${queryString ? `<p>${queryString}</p>` : ''}
    ${queryKeys.map((key) => `<p>${key}: ${query[key]}</p>`).join('')}
  `);
});

app.post('/node-post-echo', (req, res) => {
  const query = req.body;
  const queryKeys = Object.keys(query);
  let queryString = '';

  if (queryKeys.length > 0) {
    queryString = `Query String: ${Object.keys(query).map((key) => `${key}=${query[key]}`).join('&')}`;
  } else {
    queryString = 'Query String:';
  }

  res.send(`
    <h1 align="center">POST Request Echo</h1>
    ${queryString ? `<p>${queryString}</p>` : ''}
    ${queryKeys.map((key) => `<p>${key}: ${query[key]}</p>`).join('')}
  `);
});

app.get('/node-post-echo', (req, res) => {
  res.send('<h1 align="center">POST Request Echo</h1><div>get request detected, please send a post</div>')
});

app.listen(3000, () => {
  console.log('running')
});