import addUniqueCampaigns from "./addUniqueCampaign.js";
import webhookHandler from "./amo/webhookHandler.js";
import updateWebhookHandler from "./amo/updateWebhookHandler.js";
import { getGoogleCampaign } from "./google.js";
import { getYandexCampaigns } from "./yandex.js";
import express from "express";
import https from "https";
import dotenv from "dotenv";
import fs from "fs";
import path from "path";
import multer from "multer";
import csv from "csv-parser";
import pg from "pg";
import cron from "node-cron"
import { getObj} from "./oldStatHelper.js";
import {tables} from "./utils/tables.js"
dotenv.config();

const app = express();

const port = 3000;
const __dirname = path.resolve();
const storageConfig = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, "uploads");
  },
  filename: (req, file, cb) => {
    cb(null, file.originalname);
  },
});
app.use(multer({ storage: storageConfig }).single("filedata"));
import { vKAuthFirstStep, vkLoginComplete } from "./vk.js"; // импортируем наш метод
import getToken from "./amo/getAmoTokens.js";
import dc from "./dataController.js";
//import getAccessToken from "./amo/getAccessAmoToken.js";

app.get("/login/vk", (req, res) => vKAuthFirstStep(res));
app.get("/login/vk/complete", vkLoginComplete);

app.get("/facebook", function (req, res) {
  res.sendFile(path.resolve(__dirname, "html/facebookUpload.html"));
});
app.post("/facebook", function (req, res) {
  let filedata = req.file;
  let target_path;
  if (!filedata) res.send({ message: "Ошибка при загрузке файла" });
  else {
    res.send({ message: "Файл загружен" });
    target_path = "uploads/" + req.file.originalname;

    const results = [];
    fs.createReadStream(target_path)
      .pipe(csv())
      .on("data", (data) => results.push(data))
      .on("end", () => {
        let rawdata = fs.readFileSync("./utils/campaigns.json");
        const campaigns = JSON.parse(rawdata);
        results.forEach((el) => {
          addUniqueCampaigns(el["Название группы объявлений"]);
        });
        fs.writeFileSync("./utils/campaigns.json", JSON.stringify(campaigns));
      });
  }
});
app.get('/oldstat',(req,res)=>{
  res.sendFile(path.resolve(__dirname, "html/oldStat.html"));
})
app.post('/oldstat',(req,res)=>{
let filedata = req.file;
  let target_path;
  if (!filedata) res.send({ message: "Ошибка при загрузке файла" });
  else {
    res.send({ message: "Файл загружен" });
    target_path = "uploads/" + req.file.originalname;

    const results = [];
    fs.createReadStream(target_path)
      .pipe(csv())
      .on("data", (data) => results.push(data))
      .on("end", () => {
       
      console.log(results.length)
      const test1 = results.slice(0,99)
      const test2 = results.slice(100, 199)
        //results.forEach(el=>{
        //console.log(el)
        test1.forEach((el=>{
          dc.AddRowOldStat(req.body['table'], getObj(el), el['Дата создания'])
        
        }))
        setTimeout(()=>{  test2.forEach((el=>{
          dc.AddRowOldStat(req.body['table'], getObj(el), el['Дата создания'])
        
        }))},10000)
     
      //  dc.AddRowOldStat(req.body['table'], getObj(el), el['Дата создания'])
     //   })
        
      // console.log(results);
      
    });
  }
})
app.get('/amo/auth',(req,res)=>{
  res.send('amo')
})
app.get("/add/source",(req,res)=> {
  res.sendFile(path.resolve(__dirname, "html/addSource.html"));
})
app.post("/add/source",(req,res)=> {
 if(!req.body.data){
   res.sendStatus(404)
 }

   let fields = JSON.parse(fs.readFileSync("./utils/source.json", "utf-8"));
  console.log(fields)
  //  dc.AddColumn(req.body.data['name'],'SalesSourceAmo')
  //  dc.AddColumn(req.body.data['name'],'LeadsSourceAmo')
  //  dc.AddColumn(req.body.data['name'],'IncomeSourceAmo')
 
  
})
cron.schedule('0 24 11 * * *',()=>{
  // getAccessToken();
  // getGoogleCampaign()
  // getYandexCampaigns();
  tables.source.forEach((el) => {
    dc.AddRow(el)
  })
  tables.campaign.forEach((el) => {
    dc.AddRow(el)
    
  })
  console.log("add row")
  

})
app.post("/webhook", webhookHandler);
app.post("/leads/update", updateWebhookHandler);
app.get("/", (req, res) => res.sendFile(path.resolve(__dirname, 'html/index.html')));
//getToken()

const options = {
  key: fs.readFileSync("./security/server.key", "utf8"),
  cert: fs.readFileSync("./security/server.cert", "utf8"),
};
const secureServer = https.createServer(options, app).listen(port, () => {
  console.log(`Example app listening at https://localhost:${port}`);
});
