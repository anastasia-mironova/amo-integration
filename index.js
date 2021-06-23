import addUniqueCampaigns from "./addUniqueCampaign.js";
import webhookHandler from "./amo/webhookHandler.js";
import { getGoogleCampaign } from "./google.js";
import express from "express";
import https from "https";
import dotenv from "dotenv";
import fs from "fs";
import path from "path";
import multer from "multer";
import csv from "csv-parser";
import pg from "pg";

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
import getAccessToken from "./amo/getAccessAmoToken.js";

app.get("/login/vk", (req, res) => vKAuthFirstStep(res));
app.get("/login/vk/complete", vkLoginComplete);

app.get("/facebook", function (req, res) {
  res.sendFile(path.resolve(__dirname, "index.html"));
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

        // console.log(results);
        results.forEach((el) => {
          addUniqueCampaigns(el["Название группы объявлений"]);
        });
        fs.writeFileSync("./utils/campaigns.json", JSON.stringify(campaigns));
      });
  }
});
app.post("/webhook", webhookHandler);
//getGoogleCampaign()
//app.get('/amo/auth', getToken);

// const AddColumn = async (column) => {
//   const client = new pg.Client({
//     user: "postgres",
//     database: "mcpr",
//     password: "mcpr",
//     port: 5432,
//   });
//   const query = `ALTER TABLE "test"
//                   ADD COLUMN IF NOT EXISTS  "${column}" INT;`;
//   try {
//     await client.connect(); // gets connection
//     await client.query(query);
//   } catch (error) {
//     console.error(error.stack);
//   } finally {
//     await client.end();
//     // closes connection
//   }
// };

// let rawdata = fs.readFileSync("./campaigns.json");
// let campaigns = JSON.parse(rawdata);
// campaigns.forEach((obj) => {
//   AddColumn(obj);
// });

app.get("/", (req, res) => res.send("<h1>Hello World!</h1>"));
//getToken()
//getAccessToken();
const options = {
  key: fs.readFileSync("./security/server.key", "utf8"),
  cert: fs.readFileSync("./security/server.cert", "utf8"),
};
const secureServer = https.createServer(options, app).listen(port, () => {
  console.log(`Example app listening at https://localhost:${port}`);
});
