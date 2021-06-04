
import {getGoogleCampaign} from './google.js'
import express from 'express';
import https from 'https';
import dotenv from 'dotenv'
import fs from 'fs';  
dotenv.config();


const app = express();

const port = 3000;


import {vKAuthFirstStep, vkLoginComplete} from './vk.js'; // импортируем наш метод



app.get('/login/vk', (req, res) => vKAuthFirstStep(res));
app.get('/login/vk/complete', vkLoginComplete);
app.get('/', (req, res) => res.send('Hello World!'));


const options = {
    key: fs.readFileSync('./security/server.key','utf8'),
    cert: fs.readFileSync('./security/server.cert','utf8')
}
// console.log("KEY: ", options.key)  
// console.log("CERT: ", options.cert)  
const secureServer = https.createServer(options, app).listen(port, () => {  
    console.log(`Example app listening at http://localhost:${port}`);  
}); 
